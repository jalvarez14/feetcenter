<?php


/**
 * Base class that represents a query for the 'ausenciaempleado' table.
 *
 *
 *
 * @method AusenciaempleadoQuery orderByIdausenciaempleado($order = Criteria::ASC) Order by the idausenciaempleado column
 * @method AusenciaempleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method AusenciaempleadoQuery orderByAusenciaempleadoFecha($order = Criteria::ASC) Order by the ausenciaempleado_fecha column
 * @method AusenciaempleadoQuery orderByAusenciaempleadoNota($order = Criteria::ASC) Order by the ausenciaempleado_nota column
 *
 * @method AusenciaempleadoQuery groupByIdausenciaempleado() Group by the idausenciaempleado column
 * @method AusenciaempleadoQuery groupByIdempleado() Group by the idempleado column
 * @method AusenciaempleadoQuery groupByAusenciaempleadoFecha() Group by the ausenciaempleado_fecha column
 * @method AusenciaempleadoQuery groupByAusenciaempleadoNota() Group by the ausenciaempleado_nota column
 *
 * @method AusenciaempleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AusenciaempleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AusenciaempleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AusenciaempleadoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method AusenciaempleadoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method AusenciaempleadoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Ausenciaempleado findOne(PropelPDO $con = null) Return the first Ausenciaempleado matching the query
 * @method Ausenciaempleado findOneOrCreate(PropelPDO $con = null) Return the first Ausenciaempleado matching the query, or a new Ausenciaempleado object populated from the query conditions when no match is found
 *
 * @method Ausenciaempleado findOneByIdempleado(int $idempleado) Return the first Ausenciaempleado filtered by the idempleado column
 * @method Ausenciaempleado findOneByAusenciaempleadoFecha(string $ausenciaempleado_fecha) Return the first Ausenciaempleado filtered by the ausenciaempleado_fecha column
 * @method Ausenciaempleado findOneByAusenciaempleadoNota(string $ausenciaempleado_nota) Return the first Ausenciaempleado filtered by the ausenciaempleado_nota column
 *
 * @method array findByIdausenciaempleado(int $idausenciaempleado) Return Ausenciaempleado objects filtered by the idausenciaempleado column
 * @method array findByIdempleado(int $idempleado) Return Ausenciaempleado objects filtered by the idempleado column
 * @method array findByAusenciaempleadoFecha(string $ausenciaempleado_fecha) Return Ausenciaempleado objects filtered by the ausenciaempleado_fecha column
 * @method array findByAusenciaempleadoNota(string $ausenciaempleado_nota) Return Ausenciaempleado objects filtered by the ausenciaempleado_nota column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseAusenciaempleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAusenciaempleadoQuery object.
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
            $modelName = 'Ausenciaempleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AusenciaempleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AusenciaempleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AusenciaempleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AusenciaempleadoQuery) {
            return $criteria;
        }
        $query = new AusenciaempleadoQuery(null, null, $modelAlias);

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
     * @return   Ausenciaempleado|Ausenciaempleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AusenciaempleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AusenciaempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ausenciaempleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdausenciaempleado($key, $con = null)
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
     * @return                 Ausenciaempleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idausenciaempleado`, `idempleado`, `ausenciaempleado_fecha`, `ausenciaempleado_nota` FROM `ausenciaempleado` WHERE `idausenciaempleado` = :p0';
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
            $obj = new Ausenciaempleado();
            $obj->hydrate($row);
            AusenciaempleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ausenciaempleado|Ausenciaempleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ausenciaempleado[]|mixed the list of results, formatted by the current formatter
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
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idausenciaempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdausenciaempleado(1234); // WHERE idausenciaempleado = 1234
     * $query->filterByIdausenciaempleado(array(12, 34)); // WHERE idausenciaempleado IN (12, 34)
     * $query->filterByIdausenciaempleado(array('min' => 12)); // WHERE idausenciaempleado >= 12
     * $query->filterByIdausenciaempleado(array('max' => 12)); // WHERE idausenciaempleado <= 12
     * </code>
     *
     * @param     mixed $idausenciaempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByIdausenciaempleado($idausenciaempleado = null, $comparison = null)
    {
        if (is_array($idausenciaempleado)) {
            $useMinMax = false;
            if (isset($idausenciaempleado['min'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $idausenciaempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idausenciaempleado['max'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $idausenciaempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $idausenciaempleado, $comparison);
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
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AusenciaempleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the ausenciaempleado_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByAusenciaempleadoFecha('2011-03-14'); // WHERE ausenciaempleado_fecha = '2011-03-14'
     * $query->filterByAusenciaempleadoFecha('now'); // WHERE ausenciaempleado_fecha = '2011-03-14'
     * $query->filterByAusenciaempleadoFecha(array('max' => 'yesterday')); // WHERE ausenciaempleado_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ausenciaempleadoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByAusenciaempleadoFecha($ausenciaempleadoFecha = null, $comparison = null)
    {
        if (is_array($ausenciaempleadoFecha)) {
            $useMinMax = false;
            if (isset($ausenciaempleadoFecha['min'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::AUSENCIAEMPLEADO_FECHA, $ausenciaempleadoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ausenciaempleadoFecha['max'])) {
                $this->addUsingAlias(AusenciaempleadoPeer::AUSENCIAEMPLEADO_FECHA, $ausenciaempleadoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AusenciaempleadoPeer::AUSENCIAEMPLEADO_FECHA, $ausenciaempleadoFecha, $comparison);
    }

    /**
     * Filter the query on the ausenciaempleado_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByAusenciaempleadoNota('fooValue');   // WHERE ausenciaempleado_nota = 'fooValue'
     * $query->filterByAusenciaempleadoNota('%fooValue%'); // WHERE ausenciaempleado_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ausenciaempleadoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function filterByAusenciaempleadoNota($ausenciaempleadoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ausenciaempleadoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ausenciaempleadoNota)) {
                $ausenciaempleadoNota = str_replace('*', '%', $ausenciaempleadoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AusenciaempleadoPeer::AUSENCIAEMPLEADO_NOTA, $ausenciaempleadoNota, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AusenciaempleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(AusenciaempleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AusenciaempleadoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return AusenciaempleadoQuery The current query, for fluid interface
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
     * @param   Ausenciaempleado $ausenciaempleado Object to remove from the list of results
     *
     * @return AusenciaempleadoQuery The current query, for fluid interface
     */
    public function prune($ausenciaempleado = null)
    {
        if ($ausenciaempleado) {
            $this->addUsingAlias(AusenciaempleadoPeer::IDAUSENCIAEMPLEADO, $ausenciaempleado->getIdausenciaempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
