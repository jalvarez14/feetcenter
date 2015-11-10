<?php


/**
 * Base class that represents a query for the 'empleadohorario' table.
 *
 *
 *
 * @method EmpleadohorarioQuery orderByIdempleadohorario($order = Criteria::ASC) Order by the idempleadohorario column
 * @method EmpleadohorarioQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadohorarioQuery orderByEmpleadohorarioEntrada($order = Criteria::ASC) Order by the empleadohorario_entrada column
 * @method EmpleadohorarioQuery orderByEmpleadohorarioSalida($order = Criteria::ASC) Order by the empleadohorario_salida column
 * @method EmpleadohorarioQuery orderByEmpleadohorarioDia($order = Criteria::ASC) Order by the empleadohorario_dia column
 * @method EmpleadohorarioQuery orderByEmpleadohorarioDescanso($order = Criteria::ASC) Order by the empleadohorario_descanso column
 *
 * @method EmpleadohorarioQuery groupByIdempleadohorario() Group by the idempleadohorario column
 * @method EmpleadohorarioQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadohorarioQuery groupByEmpleadohorarioEntrada() Group by the empleadohorario_entrada column
 * @method EmpleadohorarioQuery groupByEmpleadohorarioSalida() Group by the empleadohorario_salida column
 * @method EmpleadohorarioQuery groupByEmpleadohorarioDia() Group by the empleadohorario_dia column
 * @method EmpleadohorarioQuery groupByEmpleadohorarioDescanso() Group by the empleadohorario_descanso column
 *
 * @method EmpleadohorarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadohorarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadohorarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadohorarioQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadohorarioQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadohorarioQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Empleadohorario findOne(PropelPDO $con = null) Return the first Empleadohorario matching the query
 * @method Empleadohorario findOneOrCreate(PropelPDO $con = null) Return the first Empleadohorario matching the query, or a new Empleadohorario object populated from the query conditions when no match is found
 *
 * @method Empleadohorario findOneByIdempleado(int $idempleado) Return the first Empleadohorario filtered by the idempleado column
 * @method Empleadohorario findOneByEmpleadohorarioEntrada(string $empleadohorario_entrada) Return the first Empleadohorario filtered by the empleadohorario_entrada column
 * @method Empleadohorario findOneByEmpleadohorarioSalida(string $empleadohorario_salida) Return the first Empleadohorario filtered by the empleadohorario_salida column
 * @method Empleadohorario findOneByEmpleadohorarioDia(string $empleadohorario_dia) Return the first Empleadohorario filtered by the empleadohorario_dia column
 * @method Empleadohorario findOneByEmpleadohorarioDescanso(boolean $empleadohorario_descanso) Return the first Empleadohorario filtered by the empleadohorario_descanso column
 *
 * @method array findByIdempleadohorario(int $idempleadohorario) Return Empleadohorario objects filtered by the idempleadohorario column
 * @method array findByIdempleado(int $idempleado) Return Empleadohorario objects filtered by the idempleado column
 * @method array findByEmpleadohorarioEntrada(string $empleadohorario_entrada) Return Empleadohorario objects filtered by the empleadohorario_entrada column
 * @method array findByEmpleadohorarioSalida(string $empleadohorario_salida) Return Empleadohorario objects filtered by the empleadohorario_salida column
 * @method array findByEmpleadohorarioDia(string $empleadohorario_dia) Return Empleadohorario objects filtered by the empleadohorario_dia column
 * @method array findByEmpleadohorarioDescanso(boolean $empleadohorario_descanso) Return Empleadohorario objects filtered by the empleadohorario_descanso column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadohorarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadohorarioQuery object.
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
            $modelName = 'Empleadohorario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadohorarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadohorarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadohorarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadohorarioQuery) {
            return $criteria;
        }
        $query = new EmpleadohorarioQuery(null, null, $modelAlias);

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
     * @return   Empleadohorario|Empleadohorario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadohorarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadohorarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadohorario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadohorario($key, $con = null)
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
     * @return                 Empleadohorario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadohorario`, `idempleado`, `empleadohorario_entrada`, `empleadohorario_salida`, `empleadohorario_dia`, `empleadohorario_descanso` FROM `empleadohorario` WHERE `idempleadohorario` = :p0';
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
            $obj = new Empleadohorario();
            $obj->hydrate($row);
            EmpleadohorarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadohorario|Empleadohorario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadohorario[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadohorario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadohorario(1234); // WHERE idempleadohorario = 1234
     * $query->filterByIdempleadohorario(array(12, 34)); // WHERE idempleadohorario IN (12, 34)
     * $query->filterByIdempleadohorario(array('min' => 12)); // WHERE idempleadohorario >= 12
     * $query->filterByIdempleadohorario(array('max' => 12)); // WHERE idempleadohorario <= 12
     * </code>
     *
     * @param     mixed $idempleadohorario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByIdempleadohorario($idempleadohorario = null, $comparison = null)
    {
        if (is_array($idempleadohorario)) {
            $useMinMax = false;
            if (isset($idempleadohorario['min'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $idempleadohorario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadohorario['max'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $idempleadohorario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $idempleadohorario, $comparison);
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
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the empleadohorario_entrada column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadohorarioEntrada('2011-03-14'); // WHERE empleadohorario_entrada = '2011-03-14'
     * $query->filterByEmpleadohorarioEntrada('now'); // WHERE empleadohorario_entrada = '2011-03-14'
     * $query->filterByEmpleadohorarioEntrada(array('max' => 'yesterday')); // WHERE empleadohorario_entrada < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadohorarioEntrada The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByEmpleadohorarioEntrada($empleadohorarioEntrada = null, $comparison = null)
    {
        if (is_array($empleadohorarioEntrada)) {
            $useMinMax = false;
            if (isset($empleadohorarioEntrada['min'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA, $empleadohorarioEntrada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadohorarioEntrada['max'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA, $empleadohorarioEntrada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA, $empleadohorarioEntrada, $comparison);
    }

    /**
     * Filter the query on the empleadohorario_salida column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadohorarioSalida('2011-03-14'); // WHERE empleadohorario_salida = '2011-03-14'
     * $query->filterByEmpleadohorarioSalida('now'); // WHERE empleadohorario_salida = '2011-03-14'
     * $query->filterByEmpleadohorarioSalida(array('max' => 'yesterday')); // WHERE empleadohorario_salida < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadohorarioSalida The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByEmpleadohorarioSalida($empleadohorarioSalida = null, $comparison = null)
    {
        if (is_array($empleadohorarioSalida)) {
            $useMinMax = false;
            if (isset($empleadohorarioSalida['min'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA, $empleadohorarioSalida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadohorarioSalida['max'])) {
                $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA, $empleadohorarioSalida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA, $empleadohorarioSalida, $comparison);
    }

    /**
     * Filter the query on the empleadohorario_dia column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadohorarioDia('fooValue');   // WHERE empleadohorario_dia = 'fooValue'
     * $query->filterByEmpleadohorarioDia('%fooValue%'); // WHERE empleadohorario_dia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadohorarioDia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByEmpleadohorarioDia($empleadohorarioDia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadohorarioDia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadohorarioDia)) {
                $empleadohorarioDia = str_replace('*', '%', $empleadohorarioDia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_DIA, $empleadohorarioDia, $comparison);
    }

    /**
     * Filter the query on the empleadohorario_descanso column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadohorarioDescanso(true); // WHERE empleadohorario_descanso = true
     * $query->filterByEmpleadohorarioDescanso('yes'); // WHERE empleadohorario_descanso = true
     * </code>
     *
     * @param     boolean|string $empleadohorarioDescanso The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function filterByEmpleadohorarioDescanso($empleadohorarioDescanso = null, $comparison = null)
    {
        if (is_string($empleadohorarioDescanso)) {
            $empleadohorarioDescanso = in_array(strtolower($empleadohorarioDescanso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpleadohorarioPeer::EMPLEADOHORARIO_DESCANSO, $empleadohorarioDescanso, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadohorarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EmpleadohorarioQuery The current query, for fluid interface
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
     * @param   Empleadohorario $empleadohorario Object to remove from the list of results
     *
     * @return EmpleadohorarioQuery The current query, for fluid interface
     */
    public function prune($empleadohorario = null)
    {
        if ($empleadohorario) {
            $this->addUsingAlias(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $empleadohorario->getIdempleadohorario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
