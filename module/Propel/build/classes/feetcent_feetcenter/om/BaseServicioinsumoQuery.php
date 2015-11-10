<?php


/**
 * Base class that represents a query for the 'servicioinsumo' table.
 *
 *
 *
 * @method ServicioinsumoQuery orderByIdservicioinsumo($order = Criteria::ASC) Order by the idservicioinsumo column
 * @method ServicioinsumoQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ServicioinsumoQuery orderByIdinsumo($order = Criteria::ASC) Order by the idinsumo column
 * @method ServicioinsumoQuery orderByServicioinsumoCantidad($order = Criteria::ASC) Order by the servicioinsumo_cantidad column
 *
 * @method ServicioinsumoQuery groupByIdservicioinsumo() Group by the idservicioinsumo column
 * @method ServicioinsumoQuery groupByIdservicio() Group by the idservicio column
 * @method ServicioinsumoQuery groupByIdinsumo() Group by the idinsumo column
 * @method ServicioinsumoQuery groupByServicioinsumoCantidad() Group by the servicioinsumo_cantidad column
 *
 * @method ServicioinsumoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServicioinsumoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServicioinsumoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServicioinsumoQuery leftJoinInsumo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Insumo relation
 * @method ServicioinsumoQuery rightJoinInsumo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Insumo relation
 * @method ServicioinsumoQuery innerJoinInsumo($relationAlias = null) Adds a INNER JOIN clause to the query using the Insumo relation
 *
 * @method ServicioinsumoQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method ServicioinsumoQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method ServicioinsumoQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method Servicioinsumo findOne(PropelPDO $con = null) Return the first Servicioinsumo matching the query
 * @method Servicioinsumo findOneOrCreate(PropelPDO $con = null) Return the first Servicioinsumo matching the query, or a new Servicioinsumo object populated from the query conditions when no match is found
 *
 * @method Servicioinsumo findOneByIdservicio(int $idservicio) Return the first Servicioinsumo filtered by the idservicio column
 * @method Servicioinsumo findOneByIdinsumo(int $idinsumo) Return the first Servicioinsumo filtered by the idinsumo column
 * @method Servicioinsumo findOneByServicioinsumoCantidad(string $servicioinsumo_cantidad) Return the first Servicioinsumo filtered by the servicioinsumo_cantidad column
 *
 * @method array findByIdservicioinsumo(int $idservicioinsumo) Return Servicioinsumo objects filtered by the idservicioinsumo column
 * @method array findByIdservicio(int $idservicio) Return Servicioinsumo objects filtered by the idservicio column
 * @method array findByIdinsumo(int $idinsumo) Return Servicioinsumo objects filtered by the idinsumo column
 * @method array findByServicioinsumoCantidad(string $servicioinsumo_cantidad) Return Servicioinsumo objects filtered by the servicioinsumo_cantidad column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseServicioinsumoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServicioinsumoQuery object.
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
            $modelName = 'Servicioinsumo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServicioinsumoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServicioinsumoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServicioinsumoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServicioinsumoQuery) {
            return $criteria;
        }
        $query = new ServicioinsumoQuery(null, null, $modelAlias);

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
     * @return   Servicioinsumo|Servicioinsumo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicioinsumoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicioinsumoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Servicioinsumo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdservicioinsumo($key, $con = null)
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
     * @return                 Servicioinsumo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idservicioinsumo`, `idservicio`, `idinsumo`, `servicioinsumo_cantidad` FROM `servicioinsumo` WHERE `idservicioinsumo` = :p0';
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
            $obj = new Servicioinsumo();
            $obj->hydrate($row);
            ServicioinsumoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Servicioinsumo|Servicioinsumo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Servicioinsumo[]|mixed the list of results, formatted by the current formatter
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
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idservicioinsumo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicioinsumo(1234); // WHERE idservicioinsumo = 1234
     * $query->filterByIdservicioinsumo(array(12, 34)); // WHERE idservicioinsumo IN (12, 34)
     * $query->filterByIdservicioinsumo(array('min' => 12)); // WHERE idservicioinsumo >= 12
     * $query->filterByIdservicioinsumo(array('max' => 12)); // WHERE idservicioinsumo <= 12
     * </code>
     *
     * @param     mixed $idservicioinsumo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByIdservicioinsumo($idservicioinsumo = null, $comparison = null)
    {
        if (is_array($idservicioinsumo)) {
            $useMinMax = false;
            if (isset($idservicioinsumo['min'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $idservicioinsumo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicioinsumo['max'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $idservicioinsumo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $idservicioinsumo, $comparison);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @see       filterByServicio()
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the idinsumo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinsumo(1234); // WHERE idinsumo = 1234
     * $query->filterByIdinsumo(array(12, 34)); // WHERE idinsumo IN (12, 34)
     * $query->filterByIdinsumo(array('min' => 12)); // WHERE idinsumo >= 12
     * $query->filterByIdinsumo(array('max' => 12)); // WHERE idinsumo <= 12
     * </code>
     *
     * @see       filterByInsumo()
     *
     * @param     mixed $idinsumo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByIdinsumo($idinsumo = null, $comparison = null)
    {
        if (is_array($idinsumo)) {
            $useMinMax = false;
            if (isset($idinsumo['min'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDINSUMO, $idinsumo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinsumo['max'])) {
                $this->addUsingAlias(ServicioinsumoPeer::IDINSUMO, $idinsumo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioinsumoPeer::IDINSUMO, $idinsumo, $comparison);
    }

    /**
     * Filter the query on the servicioinsumo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioinsumoCantidad(1234); // WHERE servicioinsumo_cantidad = 1234
     * $query->filterByServicioinsumoCantidad(array(12, 34)); // WHERE servicioinsumo_cantidad IN (12, 34)
     * $query->filterByServicioinsumoCantidad(array('min' => 12)); // WHERE servicioinsumo_cantidad >= 12
     * $query->filterByServicioinsumoCantidad(array('max' => 12)); // WHERE servicioinsumo_cantidad <= 12
     * </code>
     *
     * @param     mixed $servicioinsumoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function filterByServicioinsumoCantidad($servicioinsumoCantidad = null, $comparison = null)
    {
        if (is_array($servicioinsumoCantidad)) {
            $useMinMax = false;
            if (isset($servicioinsumoCantidad['min'])) {
                $this->addUsingAlias(ServicioinsumoPeer::SERVICIOINSUMO_CANTIDAD, $servicioinsumoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicioinsumoCantidad['max'])) {
                $this->addUsingAlias(ServicioinsumoPeer::SERVICIOINSUMO_CANTIDAD, $servicioinsumoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioinsumoPeer::SERVICIOINSUMO_CANTIDAD, $servicioinsumoCantidad, $comparison);
    }

    /**
     * Filter the query by a related Insumo object
     *
     * @param   Insumo|PropelObjectCollection $insumo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioinsumoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInsumo($insumo, $comparison = null)
    {
        if ($insumo instanceof Insumo) {
            return $this
                ->addUsingAlias(ServicioinsumoPeer::IDINSUMO, $insumo->getIdinsumo(), $comparison);
        } elseif ($insumo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServicioinsumoPeer::IDINSUMO, $insumo->toKeyValue('PrimaryKey', 'Idinsumo'), $comparison);
        } else {
            throw new PropelException('filterByInsumo() only accepts arguments of type Insumo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Insumo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function joinInsumo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Insumo');

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
            $this->addJoinObject($join, 'Insumo');
        }

        return $this;
    }

    /**
     * Use the Insumo relation Insumo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InsumoQuery A secondary query class using the current class as primary query
     */
    public function useInsumoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInsumo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Insumo', 'InsumoQuery');
    }

    /**
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioinsumoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(ServicioinsumoPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServicioinsumoPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
        } else {
            throw new PropelException('filterByServicio() only accepts arguments of type Servicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicio');

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
            $this->addJoinObject($join, 'Servicio');
        }

        return $this;
    }

    /**
     * Use the Servicio relation Servicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioQuery A secondary query class using the current class as primary query
     */
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Servicioinsumo $servicioinsumo Object to remove from the list of results
     *
     * @return ServicioinsumoQuery The current query, for fluid interface
     */
    public function prune($servicioinsumo = null)
    {
        if ($servicioinsumo) {
            $this->addUsingAlias(ServicioinsumoPeer::IDSERVICIOINSUMO, $servicioinsumo->getIdservicioinsumo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
