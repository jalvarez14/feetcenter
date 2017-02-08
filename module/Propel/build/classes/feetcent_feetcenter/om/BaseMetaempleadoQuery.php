<?php


/**
 * Base class that represents a query for the 'metaempleado' table.
 *
 *
 *
 * @method MetaempleadoQuery orderByIdmetaempleado($order = Criteria::ASC) Order by the idmetaempleado column
 * @method MetaempleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method MetaempleadoQuery orderByMetaempleadoMeta($order = Criteria::ASC) Order by the metaempleado_meta column
 * @method MetaempleadoQuery orderByMetaempleadoAnio($order = Criteria::ASC) Order by the metaempleado_anio column
 * @method MetaempleadoQuery orderByMetaempleadoMes($order = Criteria::ASC) Order by the metaempleado_mes column
 *
 * @method MetaempleadoQuery groupByIdmetaempleado() Group by the idmetaempleado column
 * @method MetaempleadoQuery groupByIdempleado() Group by the idempleado column
 * @method MetaempleadoQuery groupByMetaempleadoMeta() Group by the metaempleado_meta column
 * @method MetaempleadoQuery groupByMetaempleadoAnio() Group by the metaempleado_anio column
 * @method MetaempleadoQuery groupByMetaempleadoMes() Group by the metaempleado_mes column
 *
 * @method MetaempleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MetaempleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MetaempleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MetaempleadoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method MetaempleadoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method MetaempleadoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Metaempleado findOne(PropelPDO $con = null) Return the first Metaempleado matching the query
 * @method Metaempleado findOneOrCreate(PropelPDO $con = null) Return the first Metaempleado matching the query, or a new Metaempleado object populated from the query conditions when no match is found
 *
 * @method Metaempleado findOneByIdempleado(int $idempleado) Return the first Metaempleado filtered by the idempleado column
 * @method Metaempleado findOneByMetaempleadoMeta(string $metaempleado_meta) Return the first Metaempleado filtered by the metaempleado_meta column
 * @method Metaempleado findOneByMetaempleadoAnio(int $metaempleado_anio) Return the first Metaempleado filtered by the metaempleado_anio column
 * @method Metaempleado findOneByMetaempleadoMes(int $metaempleado_mes) Return the first Metaempleado filtered by the metaempleado_mes column
 *
 * @method array findByIdmetaempleado(int $idmetaempleado) Return Metaempleado objects filtered by the idmetaempleado column
 * @method array findByIdempleado(int $idempleado) Return Metaempleado objects filtered by the idempleado column
 * @method array findByMetaempleadoMeta(string $metaempleado_meta) Return Metaempleado objects filtered by the metaempleado_meta column
 * @method array findByMetaempleadoAnio(int $metaempleado_anio) Return Metaempleado objects filtered by the metaempleado_anio column
 * @method array findByMetaempleadoMes(int $metaempleado_mes) Return Metaempleado objects filtered by the metaempleado_mes column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseMetaempleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMetaempleadoQuery object.
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
            $modelName = 'Metaempleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MetaempleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MetaempleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MetaempleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MetaempleadoQuery) {
            return $criteria;
        }
        $query = new MetaempleadoQuery(null, null, $modelAlias);

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
     * @return   Metaempleado|Metaempleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MetaempleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MetaempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Metaempleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmetaempleado($key, $con = null)
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
     * @return                 Metaempleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmetaempleado`, `idempleado`, `metaempleado_meta`, `metaempleado_anio`, `metaempleado_mes` FROM `metaempleado` WHERE `idmetaempleado` = :p0';
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
            $obj = new Metaempleado();
            $obj->hydrate($row);
            MetaempleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Metaempleado|Metaempleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Metaempleado[]|mixed the list of results, formatted by the current formatter
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
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmetaempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmetaempleado(1234); // WHERE idmetaempleado = 1234
     * $query->filterByIdmetaempleado(array(12, 34)); // WHERE idmetaempleado IN (12, 34)
     * $query->filterByIdmetaempleado(array('min' => 12)); // WHERE idmetaempleado >= 12
     * $query->filterByIdmetaempleado(array('max' => 12)); // WHERE idmetaempleado <= 12
     * </code>
     *
     * @param     mixed $idmetaempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByIdmetaempleado($idmetaempleado = null, $comparison = null)
    {
        if (is_array($idmetaempleado)) {
            $useMinMax = false;
            if (isset($idmetaempleado['min'])) {
                $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $idmetaempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmetaempleado['max'])) {
                $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $idmetaempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $idmetaempleado, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(MetaempleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(MetaempleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaempleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the metaempleado_meta column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaempleadoMeta(1234); // WHERE metaempleado_meta = 1234
     * $query->filterByMetaempleadoMeta(array(12, 34)); // WHERE metaempleado_meta IN (12, 34)
     * $query->filterByMetaempleadoMeta(array('min' => 12)); // WHERE metaempleado_meta >= 12
     * $query->filterByMetaempleadoMeta(array('max' => 12)); // WHERE metaempleado_meta <= 12
     * </code>
     *
     * @param     mixed $metaempleadoMeta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByMetaempleadoMeta($metaempleadoMeta = null, $comparison = null)
    {
        if (is_array($metaempleadoMeta)) {
            $useMinMax = false;
            if (isset($metaempleadoMeta['min'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_META, $metaempleadoMeta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaempleadoMeta['max'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_META, $metaempleadoMeta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_META, $metaempleadoMeta, $comparison);
    }

    /**
     * Filter the query on the metaempleado_anio column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaempleadoAnio(1234); // WHERE metaempleado_anio = 1234
     * $query->filterByMetaempleadoAnio(array(12, 34)); // WHERE metaempleado_anio IN (12, 34)
     * $query->filterByMetaempleadoAnio(array('min' => 12)); // WHERE metaempleado_anio >= 12
     * $query->filterByMetaempleadoAnio(array('max' => 12)); // WHERE metaempleado_anio <= 12
     * </code>
     *
     * @param     mixed $metaempleadoAnio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByMetaempleadoAnio($metaempleadoAnio = null, $comparison = null)
    {
        if (is_array($metaempleadoAnio)) {
            $useMinMax = false;
            if (isset($metaempleadoAnio['min'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_ANIO, $metaempleadoAnio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaempleadoAnio['max'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_ANIO, $metaempleadoAnio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_ANIO, $metaempleadoAnio, $comparison);
    }

    /**
     * Filter the query on the metaempleado_mes column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaempleadoMes(1234); // WHERE metaempleado_mes = 1234
     * $query->filterByMetaempleadoMes(array(12, 34)); // WHERE metaempleado_mes IN (12, 34)
     * $query->filterByMetaempleadoMes(array('min' => 12)); // WHERE metaempleado_mes >= 12
     * $query->filterByMetaempleadoMes(array('max' => 12)); // WHERE metaempleado_mes <= 12
     * </code>
     *
     * @param     mixed $metaempleadoMes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function filterByMetaempleadoMes($metaempleadoMes = null, $comparison = null)
    {
        if (is_array($metaempleadoMes)) {
            $useMinMax = false;
            if (isset($metaempleadoMes['min'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_MES, $metaempleadoMes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaempleadoMes['max'])) {
                $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_MES, $metaempleadoMes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaempleadoPeer::METAEMPLEADO_MES, $metaempleadoMes, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MetaempleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(MetaempleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MetaempleadoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

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
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Metaempleado $metaempleado Object to remove from the list of results
     *
     * @return MetaempleadoQuery The current query, for fluid interface
     */
    public function prune($metaempleado = null)
    {
        if ($metaempleado) {
            $this->addUsingAlias(MetaempleadoPeer::IDMETAEMPLEADO, $metaempleado->getIdmetaempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
