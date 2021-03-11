<?php

namespace Kirschbaum\PowerJoins;

trait PowerJoinsShorthand {
  public function scopeJ(Builder $query, $relationName, $callback = null, $joinType = 'join', $useAlias = false, bool $disableExtraConditions = false): void 
  {
      scopeJoinRelationship($query, $relationName, $callback = null, $joinType = 'join', $useAlias = false, $disableExtraConditions = false);
  }

  public function scopeJuA(Builder $query, $relationName, $callback = null, bool $disableExtraConditions = false): void 
  {
      scopeJoinRelationshipUsingAlias($query, $relationName, $callback = null, $disableExtraConditions = false);
  }

  public function scopeLJuA(Builder $query, $relationName, $callback = null, bool $disableExtraConditions = false): void 
  {
      scopeLeftJoinRelationshipUsingAlias($query, $relationName, $callback = null, $disableExtraConditions = false);
  }

  public function scopeRJuA($query, $relationName, $callback = null, $disableExtraConditions = false) 
  {
      scopeRightJoinRelationshipUsingAlias($query, $relationName, $callback = null, $disableExtraConditions = false);
  }

  public function scopeLJ(Builder $query, $relation, $callback = null, $useAlias = false, bool $disableExtraConditions = false) 
  {
      scopeLeftJoinRelationship($query, $relation, $callback = null, $useAlias = false, $disableExtraConditions = false);
  }

  public function scopeRJ(Builder $query, $relation, $callback = null, $useAlias = false, bool $disableExtraConditions = false): void 
  {
      scopeRightJoinRelationship($query, $relation, $callback = null, $useAlias = false, $disableExtraConditions = false);
  }

  public function scopeJN(Builder $query, $relations, $callback = null, $joinType = 'join', $useAlias = false, bool $disableExtraConditions = false): void 
  {
      scopeJoinNestedRelationship($query, $relations, $callback = null, $joinType = 'join', $useAlias = false, $disableExtraConditions = false);
  }

  public function scopeOBPJ(Builder $query, $sort, $direction = 'asc', $aggregation = null, $joinType = 'join'): void 
  {
      scopeOrderByPowerJoins($query, $sort, $direction = 'asc', $aggregation = null, $joinType = 'join');
  }

  public function scopeOBLPJ(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoins($query, $sort, $direction = 'asc');
  }

  public function scopeOBPJC(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByPowerJoinsCount($query, $sort, $direction = 'asc');
  }

  public function scopeOBLPJC(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoinsCount($query, $sort, $direction = 'asc');
  }

  public function scopeOBPJS(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByPowerJoinsSum($query, $sort, $direction = 'asc');
  }

  public function scopeOBLPJS(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoinsSum($query, $sort, $direction = 'asc');
  }

  public function scopeOBPJA(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByPowerJoinsAvg($query, $sort, $direction = 'asc');
  }

  public function scopeOBLPJA(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoinsAvg($query, $sort, $direction = 'asc');
  }

  public function scopeOBPJMin(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByPowerJoinsMin($query, $sort, $direction = 'asc');
  }

  public function scopeOBLPJMin(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoinsMin($query, $sort, $direction = 'asc');
  }

  public function scopeOBPJMax(Builder $query, $sort, $direction = 'asc'): void 
  {
    scopeOrderByPowerJoinsMax(query, $sort, $direction = 'asc');
  }

  public function scopeOBLPJMax(Builder $query, $sort, $direction = 'asc'): void 
  {
      scopeOrderByLeftPowerJoinsMax($query, $sort, $direction = 'asc');
  }

  public function scopePJHas(Builder $query, $relation, $operator = '>=', $count = 1, $boolean = 'and', Closure $callback = null): void 
  {
      scopePowerJoinHas($query, $relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null);
  }

  public function scopeHasNuJ(Builder $query, $relations, $operator = '>=', $count = 1, $boolean = 'and', Closure $callback = null) 
  {
      scopeHasNestedUsingJoins($query, $relations, $operator = '>=', $count = 1, $boolean = 'and', $callback = null);
  }

  public function scopePJDoesntHave(Builder $query, $relation, $boolean = 'and', Closure $callback = null): void 
  {
      scopePowerJoinDoesntHave($query, $relation, $boolean = 'and', $callback = null);
  }

  public function scopePJWhereHas(Builder $query, $relation, Closure $callback = null, $operator = '>=', $count = 1): void 
  {
      scopePowerJoinWhereHas($query, $relation, $callback = null, $operator = '>=', $count = 1);
  }
}
