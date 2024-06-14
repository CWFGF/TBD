/* Copyright (c) Jordan Evens, 2005, 2021 */
/* Copyright (c) Queen's Printer for Ontario, 2020. */
/* Copyright (c) His Majesty the King in Right of Canada as represented by the Minister of Natural Resources, 2021-2024. */

/* SPDX-License-Identifier: AGPL-3.0-or-later */

#pragma once
#include "stdafx.h"
#include "InnerPos.h"

namespace tbd::sim
{
static constexpr size_t FURTHEST_N = 0;
static constexpr size_t FURTHEST_NNE = 1;
static constexpr size_t FURTHEST_NE = 2;
static constexpr size_t FURTHEST_ENE = 3;
static constexpr size_t FURTHEST_E = 4;
static constexpr size_t FURTHEST_ESE = 5;
static constexpr size_t FURTHEST_SE = 6;
static constexpr size_t FURTHEST_SSE = 7;
static constexpr size_t FURTHEST_S = 8;
static constexpr size_t FURTHEST_SSW = 9;
static constexpr size_t FURTHEST_SW = 10;
static constexpr size_t FURTHEST_WSW = 11;
static constexpr size_t FURTHEST_W = 12;
static constexpr size_t FURTHEST_WNW = 13;
static constexpr size_t FURTHEST_NW = 14;
static constexpr size_t FURTHEST_NNW = 15;
static constexpr size_t NUM_DIRECTIONS = 16;

/**
 * Points in a cell furthest in each direction
 */
class CellPoints
{
public:
  using array_pts = std::array<InnerPos, NUM_DIRECTIONS>;
  using array_dists = std::array<double, NUM_DIRECTIONS>;
  CellPoints() noexcept;
  // HACK: so we can emplace with NULL
  CellPoints(size_t) noexcept
    : CellPoints()
  {
  }
  CellPoints(const vector<InnerPos>& pts) noexcept;
  CellPoints(const double x, const double y) noexcept;
  CellPoints(const InnerPos& p) noexcept;
  void insert(const double x, const double y) noexcept;
  void insert(const InnerPos& p) noexcept;
  template <class _ForwardIterator>
  void insert(_ForwardIterator begin, _ForwardIterator end)
  {
    auto it = begin;
    // should always be in the same cell so do this once
    const auto cell_x = static_cast<tbd::Idx>((*it).x());
    const auto cell_y = static_cast<tbd::Idx>((*it).y());
    while (end != it)
    {
      insert(cell_x, cell_y, *it);
      ++it;
    }
  }
  void insert(const CellPoints& rhs);
  set<InnerPos> unique() const noexcept
  {
    return set<InnerPos>{pts_.begin(), pts_.end()};
  }
  const array_pts points() const
  {
    return pts_;
  }
private:
  void insert(const double cell_x, const double cell_y, const InnerPos& p) noexcept;
  array_pts pts_;
  array_dists dists_;
};
}
namespace tbd
{
using sim::CellPoints;
using topo::Cell;
using topo::SpreadKey;
using points_list_type = OffsetSet;
using merged_map_type = map<Location, pair<CellIndex, points_list_type>>;
using spreading_points = map<SpreadKey, vector<pair<Cell, const points_list_type>>>;
using points_type = spreading_points::value_type::second_type;

const merged_map_type apply_offsets_spreadkey(
  const double duration,
  const OffsetSet& offsets,
  const points_type& cell_pts);
}