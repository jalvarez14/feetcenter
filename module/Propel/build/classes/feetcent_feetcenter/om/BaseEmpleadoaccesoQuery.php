<?php


/**
 * Base class that represents a query for the 'empleadoacceso' table.
 *
 *
 *
 * @method EmpleadoaccesoQuery orderByIdempleadoacceso($order = Criteria::ASC) Order by the idempleadoacceso column
 * @method EmpleadoaccesoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoaccesoQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method EmpleadoaccesoQuery orderByEmpleadoaccesoUsername($order = Criteria::ASC) Order by the empleadoacceso_username column
 * @method EmpleadoaccesoQuery orderByEmpleadoaccesoPassword($order = Criteria::ASC) Order by the empleadoacceso_password column
 * @method EmpleadoaccesoQuery orderByEmpleadoaccesoEnsesion($order = Criteria::ASC) Order by the empleadoacceso_ensesion column
 *
 * @method EmpleadoaccesoQuery groupByIdempleadoacceso() Group by the idempleadoacceso column
 * @method EmpleadoaccesoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoaccesoQuery groupByIdrol() Group by the idrol column
 * @method EmpleadoaccesoQuery groupByEmpleadoaccesoUsername() Group by the empleadoacceso_username column
 * @method EmpleadoaccesoQuery groupByEmpleadoaccesoPassword() Group by the empleadoacceso_password column
 * @method EmpleadoaccesoQuery groupByEmpleadoaccesoEnsesion() Group by the empleadoacceso_ensesion column
 *
 * @method EmpleadoaccesoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoaccesoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoaccesoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoaccesoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadoaccesoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadoaccesoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method EmpleadoaccesoQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method EmpleadoaccesoQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method EmpleadoaccesoQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method Empleadoacceso findOne(PropelPDO $con = null) Return the first Empleadoacceso matching the query
 * @method Empleadoacceso findOneOrCreate(PropelPDO $con = null) Return the first Empleadoacceso matching the query, or a new Empleadoacceso object populated from the query conditions when no match is found
 *
 * @method Empleadoacceso findOneByIdempleado(int $idempleado) Return the first Empleadoacceso filtered by the idempleado column
 * @method Empleadoacceso findOneByIdrol(int $idrol) Return the first Empleadoacceso filtered by the idrol column
 * @method Empleadoacceso findOneByEmpleadoaccesoUsername(string $empleadoacceso_username) Return the first Empleadoacceso filtered by the empleadoacceso_username column
 * @method Empleadoacceso findOneByEmpleadoaccesoPassword(string $empleadoacceso_password) Return the first Empleadoacceso filtered by the empleadoacceso_password column
 * @method Empleadoacceso findOneByEmpleadoaccesoEnsesion(boolean $empleadoacceso_ensesion) Return the first Empleadoacceso filtered by the empleadoacceso_ensesion column
 *
 * @method array findByIdempleadoacceso(int $idempleadoacceso) Return Empleadoacceso objects filtered by the idempleadoacceso column
 * @method array findByIdempleado(int $idempleado) Return Empleadoacceso objects filtered by the idempleado column
 * @method array findByIdrol(int $idrol) Return Empleadoacceso objects filtered by the idrol column
 * @method array findByEmpleadoaccesoUsername(string $empleadoacceso_username) Return Empleadoacceso objects filtered by the empleadoacceso_username column
 * @method array findByEmpleadoaccesoPassword(string $empleadoacceso_password) Return Empleadoacceso objects filtered by the empleadoacceso_password column
 * @method array findByEmpleadoaccesoEnsesion(boolean $empleadoacceso_ensesion) Return Empleadoacceso objects filtered by the empleadoacceso_ensesion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadoaccesoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoaccesoQuery object.
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
            $modelName = 'Empleadoacceso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoaccesoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoaccesoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoaccesoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoaccesoQuery) {
            return $criteria;
        }
        $query = new EmpleadoaccesoQuery(null, null, $modelAlias);

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
     * @return   Empleadoacceso|Empleadoacceso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoaccesoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoaccesoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadoacceso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadoacceso($key, $con = null)
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
     * @return                 Empleadoacceso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadoacceso`, `idempleado`, `idrol`, `empleadoacceso_username`, `empleadoacceso_password`, `empleadoacceso_ensesion` FROM `empleadoacceso` WHERE `idempleadoacceso` = :p0';
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
            $obj = new Empleadoacceso();
            $obj->hydrate($row);
            EmpleadoaccesoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadoacceso|Empleadoacceso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadoacceso[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadoacceso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoacceso(1234); // WHERE idempleadoacceso = 1234
     * $query->filterByIdempleadoacceso(array(12, 34)); // WHERE idempleadoacceso IN (12, 34)
     * $query->filterByIdempleadoacceso(array('min' => 12)); // WHERE idempleadoacceso >= 12
     * $query->filterByIdempleadoacceso(array('max' => 12)); // WHERE idempleadoacceso <= 12
     * </code>
     *
     * @param     mixed $idempleadoacceso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByIdempleadoacceso($idempleadoacceso = null, $comparison = null)
    {
        if (is_array($idempleadoacceso)) {
            $useMinMax = false;
            if (isset($idempleadoacceso['min'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $idempleadoacceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoacceso['max'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $idempleadoacceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $idempleadoacceso, $comparison);
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
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADO, $idempleado, $comparison);
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
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(EmpleadoaccesoPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the empleadoacceso_username column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoaccesoUsername('fooValue');   // WHERE empleadoacceso_username = 'fooValue'
     * $query->filterByEmpleadoaccesoUsername('%fooValue%'); // WHERE empleadoacceso_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoaccesoUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoaccesoUsername($empleadoaccesoUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoaccesoUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoaccesoUsername)) {
                $empleadoaccesoUsername = str_replace('*', '%', $empleadoaccesoUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::EMPLEADOACCESO_USERNAME, $empleadoaccesoUsername, $comparison);
    }

    /**
     * Filter the query on the empleadoacceso_password column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoaccesoPassword('fooValue');   // WHERE empleadoacceso_password = 'fooValue'
     * $query->filterByEmpleadoaccesoPassword('%fooValue%'); // WHERE empleadoacceso_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoaccesoPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoaccesoPassword($empleadoaccesoPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoaccesoPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoaccesoPassword)) {
                $empleadoaccesoPassword = str_replace('*', '%', $empleadoaccesoPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::EMPLEADOACCESO_PASSWORD, $empleadoaccesoPassword, $comparison);
    }

    /**
     * Filter the query on the empleadoacceso_ensesion column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoaccesoEnsesion(true); // WHERE empleadoacceso_ensesion = true
     * $query->filterByEmpleadoaccesoEnsesion('yes'); // WHERE empleadoacceso_ensesion = true
     * </code>
     *
     * @param     boolean|string $empleadoaccesoEnsesion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoaccesoEnsesion($empleadoaccesoEnsesion = null, $comparison = null)
    {
        if (is_string($empleadoaccesoEnsesion)) {
            $empleadoaccesoEnsesion = in_array(strtolower($empleadoaccesoEnsesion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpleadoaccesoPeer::EMPLEADOACCESO_ENSESION, $empleadoaccesoEnsesion, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoaccesoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EmpleadoaccesoQuery The current query, for fluid interface
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
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoaccesoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(EmpleadoaccesoPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoaccesoPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
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
     * @return EmpleadoaccesoQuery The current query, for fluid interface
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
     * @param   Empleadoacceso $empleadoacceso Object to remove from the list of results
     *
     * @return EmpleadoaccesoQuery The current query, for fluid interface
     */
    public function prune($empleadoacceso = null)
    {
        if ($empleadoacceso) {
            $this->addUsingAlias(EmpleadoaccesoPeer::IDEMPLEADOACCESO, $empleadoacceso->getIdempleadoacceso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
