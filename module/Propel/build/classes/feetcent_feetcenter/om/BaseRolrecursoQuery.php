<?php


/**
 * Base class that represents a query for the 'rolrecurso' table.
 *
 *
 *
 * @method RolrecursoQuery orderByIdrolrecurso($order = Criteria::ASC) Order by the idrolrecurso column
 * @method RolrecursoQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method RolrecursoQuery orderByIdrecurso($order = Criteria::ASC) Order by the idrecurso column
 *
 * @method RolrecursoQuery groupByIdrolrecurso() Group by the idrolrecurso column
 * @method RolrecursoQuery groupByIdrol() Group by the idrol column
 * @method RolrecursoQuery groupByIdrecurso() Group by the idrecurso column
 *
 * @method RolrecursoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RolrecursoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RolrecursoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RolrecursoQuery leftJoinRecurso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Recurso relation
 * @method RolrecursoQuery rightJoinRecurso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Recurso relation
 * @method RolrecursoQuery innerJoinRecurso($relationAlias = null) Adds a INNER JOIN clause to the query using the Recurso relation
 *
 * @method RolrecursoQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method RolrecursoQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method RolrecursoQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method Rolrecurso findOne(PropelPDO $con = null) Return the first Rolrecurso matching the query
 * @method Rolrecurso findOneOrCreate(PropelPDO $con = null) Return the first Rolrecurso matching the query, or a new Rolrecurso object populated from the query conditions when no match is found
 *
 * @method Rolrecurso findOneByIdrol(int $idrol) Return the first Rolrecurso filtered by the idrol column
 * @method Rolrecurso findOneByIdrecurso(int $idrecurso) Return the first Rolrecurso filtered by the idrecurso column
 *
 * @method array findByIdrolrecurso(int $idrolrecurso) Return Rolrecurso objects filtered by the idrolrecurso column
 * @method array findByIdrol(int $idrol) Return Rolrecurso objects filtered by the idrol column
 * @method array findByIdrecurso(int $idrecurso) Return Rolrecurso objects filtered by the idrecurso column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseRolrecursoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRolrecursoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'feetcent_feetcenter';
        }
        if (null === $modelName) {
            $modelName = 'Rolrecurso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RolrecursoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RolrecursoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RolrecursoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RolrecursoQuery) {
            return $criteria;
        }
        $query = new RolrecursoQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Rolrecurso|Rolrecurso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RolrecursoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RolrecursoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Rolrecurso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrolrecurso($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Rolrecurso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrolrecurso`, `idrol`, `idrecurso` FROM `rolrecurso` WHERE `idrolrecurso` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Rolrecurso();
            $obj->hydrate($row);
            RolrecursoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Rolrecurso|Rolrecurso[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Rolrecurso[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrolrecurso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrolrecurso(1234); // WHERE idrolrecurso = 1234
     * $query->filterByIdrolrecurso(array(12, 34)); // WHERE idrolrecurso IN (12, 34)
     * $query->filterByIdrolrecurso(array('min' => 12)); // WHERE idrolrecurso >= 12
     * $query->filterByIdrolrecurso(array('max' => 12)); // WHERE idrolrecurso <= 12
     * </code>
     *
     * @param     mixed $idrolrecurso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function filterByIdrolrecurso($idrolrecurso = null, $comparison = null)
    {
        if (is_array($idrolrecurso)) {
            $useMinMax = false;
            if (isset($idrolrecurso['min'])) {
                $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $idrolrecurso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrolrecurso['max'])) {
                $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $idrolrecurso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $idrolrecurso, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(RolrecursoPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(RolrecursoPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolrecursoPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the idrecurso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrecurso(1234); // WHERE idrecurso = 1234
     * $query->filterByIdrecurso(array(12, 34)); // WHERE idrecurso IN (12, 34)
     * $query->filterByIdrecurso(array('min' => 12)); // WHERE idrecurso >= 12
     * $query->filterByIdrecurso(array('max' => 12)); // WHERE idrecurso <= 12
     * </code>
     *
     * @see       filterByRecurso()
     *
     * @param     mixed $idrecurso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function filterByIdrecurso($idrecurso = null, $comparison = null)
    {
        if (is_array($idrecurso)) {
            $useMinMax = false;
            if (isset($idrecurso['min'])) {
                $this->addUsingAlias(RolrecursoPeer::IDRECURSO, $idrecurso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrecurso['max'])) {
                $this->addUsingAlias(RolrecursoPeer::IDRECURSO, $idrecurso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolrecursoPeer::IDRECURSO, $idrecurso, $comparison);
    }

    /**
     * Filter the query by a related Recurso object
     *
     * @param   Recurso|PropelObjectCollection $recurso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolrecursoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRecurso($recurso, $comparison = null)
    {
        if ($recurso instanceof Recurso) {
            return $this
                ->addUsingAlias(RolrecursoPeer::IDRECURSO, $recurso->getIdrecurso(), $comparison);
        } elseif ($recurso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RolrecursoPeer::IDRECURSO, $recurso->toKeyValue('PrimaryKey', 'Idrecurso'), $comparison);
        } else {
            throw new PropelException('filterByRecurso() only accepts arguments of type Recurso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Recurso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function joinRecurso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Recurso');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Recurso');
        }

        return $this;
    }

    /**
     * Use the Recurso relation Recurso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RecursoQuery A secondary query class using the current class as primary query
     */
    public function useRecursoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRecurso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Recurso', 'RecursoQuery');
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolrecursoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(RolrecursoPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RolrecursoPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Rolrecurso $rolrecurso Object to remove from the list of results
     *
     * @return RolrecursoQuery The current query, for fluid interface
     */
    public function prune($rolrecurso = null)
    {
        if ($rolrecurso) {
            $this->addUsingAlias(RolrecursoPeer::IDROLRECURSO, $rolrecurso->getIdrolrecurso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
