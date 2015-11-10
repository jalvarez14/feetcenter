<?php


/**
 * Base class that represents a query for the 'empleadoreceso' table.
 *
 *
 *
 * @method EmpleadorecesoQuery orderByIdempleadoreceso($order = Criteria::ASC) Order by the idempleadoreceso column
 * @method EmpleadorecesoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadorecesoQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method EmpleadorecesoQuery orderByEmpleadorecesoFecha($order = Criteria::ASC) Order by the empleadoreceso_fecha column
 * @method EmpleadorecesoQuery orderByEmpleadorecesoInicio($order = Criteria::ASC) Order by the empleadoreceso_inicio column
 * @method EmpleadorecesoQuery orderByEmpleadorecesoFin($order = Criteria::ASC) Order by the empleadoreceso_fin column
 *
 * @method EmpleadorecesoQuery groupByIdempleadoreceso() Group by the idempleadoreceso column
 * @method EmpleadorecesoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadorecesoQuery groupByIdclinica() Group by the idclinica column
 * @method EmpleadorecesoQuery groupByEmpleadorecesoFecha() Group by the empleadoreceso_fecha column
 * @method EmpleadorecesoQuery groupByEmpleadorecesoInicio() Group by the empleadoreceso_inicio column
 * @method EmpleadorecesoQuery groupByEmpleadorecesoFin() Group by the empleadoreceso_fin column
 *
 * @method EmpleadorecesoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadorecesoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadorecesoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadorecesoQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method EmpleadorecesoQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method EmpleadorecesoQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method EmpleadorecesoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadorecesoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadorecesoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Empleadoreceso findOne(PropelPDO $con = null) Return the first Empleadoreceso matching the query
 * @method Empleadoreceso findOneOrCreate(PropelPDO $con = null) Return the first Empleadoreceso matching the query, or a new Empleadoreceso object populated from the query conditions when no match is found
 *
 * @method Empleadoreceso findOneByIdempleado(int $idempleado) Return the first Empleadoreceso filtered by the idempleado column
 * @method Empleadoreceso findOneByIdclinica(int $idclinica) Return the first Empleadoreceso filtered by the idclinica column
 * @method Empleadoreceso findOneByEmpleadorecesoFecha(string $empleadoreceso_fecha) Return the first Empleadoreceso filtered by the empleadoreceso_fecha column
 * @method Empleadoreceso findOneByEmpleadorecesoInicio(string $empleadoreceso_inicio) Return the first Empleadoreceso filtered by the empleadoreceso_inicio column
 * @method Empleadoreceso findOneByEmpleadorecesoFin(string $empleadoreceso_fin) Return the first Empleadoreceso filtered by the empleadoreceso_fin column
 *
 * @method array findByIdempleadoreceso(int $idempleadoreceso) Return Empleadoreceso objects filtered by the idempleadoreceso column
 * @method array findByIdempleado(int $idempleado) Return Empleadoreceso objects filtered by the idempleado column
 * @method array findByIdclinica(int $idclinica) Return Empleadoreceso objects filtered by the idclinica column
 * @method array findByEmpleadorecesoFecha(string $empleadoreceso_fecha) Return Empleadoreceso objects filtered by the empleadoreceso_fecha column
 * @method array findByEmpleadorecesoInicio(string $empleadoreceso_inicio) Return Empleadoreceso objects filtered by the empleadoreceso_inicio column
 * @method array findByEmpleadorecesoFin(string $empleadoreceso_fin) Return Empleadoreceso objects filtered by the empleadoreceso_fin column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadorecesoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadorecesoQuery object.
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
            $modelName = 'Empleadoreceso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadorecesoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadorecesoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadorecesoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadorecesoQuery) {
            return $criteria;
        }
        $query = new EmpleadorecesoQuery(null, null, $modelAlias);

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
     * @return   Empleadoreceso|Empleadoreceso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadorecesoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadorecesoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadoreceso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadoreceso($key, $con = null)
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
     * @return                 Empleadoreceso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadoreceso`, `idempleado`, `idclinica`, `empleadoreceso_fecha`, `empleadoreceso_inicio`, `empleadoreceso_fin` FROM `empleadoreceso` WHERE `idempleadoreceso` = :p0';
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
            $obj = new Empleadoreceso();
            $obj->hydrate($row);
            EmpleadorecesoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadoreceso|Empleadoreceso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadoreceso[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadoreceso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoreceso(1234); // WHERE idempleadoreceso = 1234
     * $query->filterByIdempleadoreceso(array(12, 34)); // WHERE idempleadoreceso IN (12, 34)
     * $query->filterByIdempleadoreceso(array('min' => 12)); // WHERE idempleadoreceso >= 12
     * $query->filterByIdempleadoreceso(array('max' => 12)); // WHERE idempleadoreceso <= 12
     * </code>
     *
     * @param     mixed $idempleadoreceso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByIdempleadoreceso($idempleadoreceso = null, $comparison = null)
    {
        if (is_array($idempleadoreceso)) {
            $useMinMax = false;
            if (isset($idempleadoreceso['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $idempleadoreceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoreceso['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $idempleadoreceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $idempleadoreceso, $comparison);
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
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclinica(1234); // WHERE idclinica = 1234
     * $query->filterByIdclinica(array(12, 34)); // WHERE idclinica IN (12, 34)
     * $query->filterByIdclinica(array('min' => 12)); // WHERE idclinica >= 12
     * $query->filterByIdclinica(array('max' => 12)); // WHERE idclinica <= 12
     * </code>
     *
     * @see       filterByClinica()
     *
     * @param     mixed $idclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the empleadoreceso_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadorecesoFecha('2011-03-14'); // WHERE empleadoreceso_fecha = '2011-03-14'
     * $query->filterByEmpleadorecesoFecha('now'); // WHERE empleadoreceso_fecha = '2011-03-14'
     * $query->filterByEmpleadorecesoFecha(array('max' => 'yesterday')); // WHERE empleadoreceso_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadorecesoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadorecesoFecha($empleadorecesoFecha = null, $comparison = null)
    {
        if (is_array($empleadorecesoFecha)) {
            $useMinMax = false;
            if (isset($empleadorecesoFecha['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FECHA, $empleadorecesoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadorecesoFecha['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FECHA, $empleadorecesoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FECHA, $empleadorecesoFecha, $comparison);
    }

    /**
     * Filter the query on the empleadoreceso_inicio column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadorecesoInicio('2011-03-14'); // WHERE empleadoreceso_inicio = '2011-03-14'
     * $query->filterByEmpleadorecesoInicio('now'); // WHERE empleadoreceso_inicio = '2011-03-14'
     * $query->filterByEmpleadorecesoInicio(array('max' => 'yesterday')); // WHERE empleadoreceso_inicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadorecesoInicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadorecesoInicio($empleadorecesoInicio = null, $comparison = null)
    {
        if (is_array($empleadorecesoInicio)) {
            $useMinMax = false;
            if (isset($empleadorecesoInicio['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_INICIO, $empleadorecesoInicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadorecesoInicio['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_INICIO, $empleadorecesoInicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_INICIO, $empleadorecesoInicio, $comparison);
    }

    /**
     * Filter the query on the empleadoreceso_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadorecesoFin('2011-03-14'); // WHERE empleadoreceso_fin = '2011-03-14'
     * $query->filterByEmpleadorecesoFin('now'); // WHERE empleadoreceso_fin = '2011-03-14'
     * $query->filterByEmpleadorecesoFin(array('max' => 'yesterday')); // WHERE empleadoreceso_fin < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadorecesoFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadorecesoFin($empleadorecesoFin = null, $comparison = null)
    {
        if (is_array($empleadorecesoFin)) {
            $useMinMax = false;
            if (isset($empleadorecesoFin['min'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FIN, $empleadorecesoFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadorecesoFin['max'])) {
                $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FIN, $empleadorecesoFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadorecesoPeer::EMPLEADORECESO_FIN, $empleadorecesoFin, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadorecesoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(EmpleadorecesoPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadorecesoPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
        } else {
            throw new PropelException('filterByClinica() only accepts arguments of type Clinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Clinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function joinClinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Clinica');

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
            $this->addJoinObject($join, 'Clinica');
        }

        return $this;
    }

    /**
     * Use the Clinica relation Clinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClinicaQuery A secondary query class using the current class as primary query
     */
    public function useClinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clinica', 'ClinicaQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadorecesoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EmpleadorecesoQuery The current query, for fluid interface
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
     * @param   Empleadoreceso $empleadoreceso Object to remove from the list of results
     *
     * @return EmpleadorecesoQuery The current query, for fluid interface
     */
    public function prune($empleadoreceso = null)
    {
        if ($empleadoreceso) {
            $this->addUsingAlias(EmpleadorecesoPeer::IDEMPLEADORECESO, $empleadoreceso->getIdempleadoreceso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
