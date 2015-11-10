<?php


/**
 * Base class that represents a query for the 'empleadocomision' table.
 *
 *
 *
 * @method EmpleadocomisionQuery orderByIdempleadocomision($order = Criteria::ASC) Order by the idempleadocomision column
 * @method EmpleadocomisionQuery orderByIdempledo($order = Criteria::ASC) Order by the idempledo column
 * @method EmpleadocomisionQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionFecha($order = Criteria::ASC) Order by the empleadocomision_fecha column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionComisionservicios($order = Criteria::ASC) Order by the empleadocomision_comisionservicios column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionComisionproductos($order = Criteria::ASC) Order by the empleadocomision_comisionproductos column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionServiciosvendidos($order = Criteria::ASC) Order by the empleadocomision_serviciosvendidos column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionProductosvendidos($order = Criteria::ASC) Order by the empleadocomision_productosvendidos column
 * @method EmpleadocomisionQuery orderByEmpleadocomisionAcumulado($order = Criteria::ASC) Order by the empleadocomision_acumulado column
 *
 * @method EmpleadocomisionQuery groupByIdempleadocomision() Group by the idempleadocomision column
 * @method EmpleadocomisionQuery groupByIdempledo() Group by the idempledo column
 * @method EmpleadocomisionQuery groupByIdclinica() Group by the idclinica column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionFecha() Group by the empleadocomision_fecha column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionComisionservicios() Group by the empleadocomision_comisionservicios column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionComisionproductos() Group by the empleadocomision_comisionproductos column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionServiciosvendidos() Group by the empleadocomision_serviciosvendidos column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionProductosvendidos() Group by the empleadocomision_productosvendidos column
 * @method EmpleadocomisionQuery groupByEmpleadocomisionAcumulado() Group by the empleadocomision_acumulado column
 *
 * @method EmpleadocomisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadocomisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadocomisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadocomisionQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method EmpleadocomisionQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method EmpleadocomisionQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method EmpleadocomisionQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadocomisionQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadocomisionQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Empleadocomision findOne(PropelPDO $con = null) Return the first Empleadocomision matching the query
 * @method Empleadocomision findOneOrCreate(PropelPDO $con = null) Return the first Empleadocomision matching the query, or a new Empleadocomision object populated from the query conditions when no match is found
 *
 * @method Empleadocomision findOneByIdempledo(int $idempledo) Return the first Empleadocomision filtered by the idempledo column
 * @method Empleadocomision findOneByIdclinica(int $idclinica) Return the first Empleadocomision filtered by the idclinica column
 * @method Empleadocomision findOneByEmpleadocomisionFecha(string $empleadocomision_fecha) Return the first Empleadocomision filtered by the empleadocomision_fecha column
 * @method Empleadocomision findOneByEmpleadocomisionComisionservicios(string $empleadocomision_comisionservicios) Return the first Empleadocomision filtered by the empleadocomision_comisionservicios column
 * @method Empleadocomision findOneByEmpleadocomisionComisionproductos(string $empleadocomision_comisionproductos) Return the first Empleadocomision filtered by the empleadocomision_comisionproductos column
 * @method Empleadocomision findOneByEmpleadocomisionServiciosvendidos(int $empleadocomision_serviciosvendidos) Return the first Empleadocomision filtered by the empleadocomision_serviciosvendidos column
 * @method Empleadocomision findOneByEmpleadocomisionProductosvendidos(int $empleadocomision_productosvendidos) Return the first Empleadocomision filtered by the empleadocomision_productosvendidos column
 * @method Empleadocomision findOneByEmpleadocomisionAcumulado(string $empleadocomision_acumulado) Return the first Empleadocomision filtered by the empleadocomision_acumulado column
 *
 * @method array findByIdempleadocomision(int $idempleadocomision) Return Empleadocomision objects filtered by the idempleadocomision column
 * @method array findByIdempledo(int $idempledo) Return Empleadocomision objects filtered by the idempledo column
 * @method array findByIdclinica(int $idclinica) Return Empleadocomision objects filtered by the idclinica column
 * @method array findByEmpleadocomisionFecha(string $empleadocomision_fecha) Return Empleadocomision objects filtered by the empleadocomision_fecha column
 * @method array findByEmpleadocomisionComisionservicios(string $empleadocomision_comisionservicios) Return Empleadocomision objects filtered by the empleadocomision_comisionservicios column
 * @method array findByEmpleadocomisionComisionproductos(string $empleadocomision_comisionproductos) Return Empleadocomision objects filtered by the empleadocomision_comisionproductos column
 * @method array findByEmpleadocomisionServiciosvendidos(int $empleadocomision_serviciosvendidos) Return Empleadocomision objects filtered by the empleadocomision_serviciosvendidos column
 * @method array findByEmpleadocomisionProductosvendidos(int $empleadocomision_productosvendidos) Return Empleadocomision objects filtered by the empleadocomision_productosvendidos column
 * @method array findByEmpleadocomisionAcumulado(string $empleadocomision_acumulado) Return Empleadocomision objects filtered by the empleadocomision_acumulado column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadocomisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadocomisionQuery object.
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
            $modelName = 'Empleadocomision';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadocomisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadocomisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadocomisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadocomisionQuery) {
            return $criteria;
        }
        $query = new EmpleadocomisionQuery(null, null, $modelAlias);

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
     * @return   Empleadocomision|Empleadocomision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadocomisionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadocomisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadocomision A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadocomision($key, $con = null)
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
     * @return                 Empleadocomision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadocomision`, `idempledo`, `idclinica`, `empleadocomision_fecha`, `empleadocomision_comisionservicios`, `empleadocomision_comisionproductos`, `empleadocomision_serviciosvendidos`, `empleadocomision_productosvendidos`, `empleadocomision_acumulado` FROM `empleadocomision` WHERE `idempleadocomision` = :p0';
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
            $obj = new Empleadocomision();
            $obj->hydrate($row);
            EmpleadocomisionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadocomision|Empleadocomision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadocomision[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadocomision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadocomision(1234); // WHERE idempleadocomision = 1234
     * $query->filterByIdempleadocomision(array(12, 34)); // WHERE idempleadocomision IN (12, 34)
     * $query->filterByIdempleadocomision(array('min' => 12)); // WHERE idempleadocomision >= 12
     * $query->filterByIdempleadocomision(array('max' => 12)); // WHERE idempleadocomision <= 12
     * </code>
     *
     * @param     mixed $idempleadocomision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByIdempleadocomision($idempleadocomision = null, $comparison = null)
    {
        if (is_array($idempleadocomision)) {
            $useMinMax = false;
            if (isset($idempleadocomision['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $idempleadocomision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadocomision['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $idempleadocomision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $idempleadocomision, $comparison);
    }

    /**
     * Filter the query on the idempledo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempledo(1234); // WHERE idempledo = 1234
     * $query->filterByIdempledo(array(12, 34)); // WHERE idempledo IN (12, 34)
     * $query->filterByIdempledo(array('min' => 12)); // WHERE idempledo >= 12
     * $query->filterByIdempledo(array('max' => 12)); // WHERE idempledo <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempledo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByIdempledo($idempledo = null, $comparison = null)
    {
        if (is_array($idempledo)) {
            $useMinMax = false;
            if (isset($idempledo['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEDO, $idempledo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempledo['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEDO, $idempledo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEDO, $idempledo, $comparison);
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
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionFecha('2011-03-14'); // WHERE empleadocomision_fecha = '2011-03-14'
     * $query->filterByEmpleadocomisionFecha('now'); // WHERE empleadocomision_fecha = '2011-03-14'
     * $query->filterByEmpleadocomisionFecha(array('max' => 'yesterday')); // WHERE empleadocomision_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadocomisionFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionFecha($empleadocomisionFecha = null, $comparison = null)
    {
        if (is_array($empleadocomisionFecha)) {
            $useMinMax = false;
            if (isset($empleadocomisionFecha['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_FECHA, $empleadocomisionFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionFecha['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_FECHA, $empleadocomisionFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_FECHA, $empleadocomisionFecha, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_comisionservicios column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionComisionservicios(1234); // WHERE empleadocomision_comisionservicios = 1234
     * $query->filterByEmpleadocomisionComisionservicios(array(12, 34)); // WHERE empleadocomision_comisionservicios IN (12, 34)
     * $query->filterByEmpleadocomisionComisionservicios(array('min' => 12)); // WHERE empleadocomision_comisionservicios >= 12
     * $query->filterByEmpleadocomisionComisionservicios(array('max' => 12)); // WHERE empleadocomision_comisionservicios <= 12
     * </code>
     *
     * @param     mixed $empleadocomisionComisionservicios The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionComisionservicios($empleadocomisionComisionservicios = null, $comparison = null)
    {
        if (is_array($empleadocomisionComisionservicios)) {
            $useMinMax = false;
            if (isset($empleadocomisionComisionservicios['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONSERVICIOS, $empleadocomisionComisionservicios['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionComisionservicios['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONSERVICIOS, $empleadocomisionComisionservicios['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONSERVICIOS, $empleadocomisionComisionservicios, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_comisionproductos column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionComisionproductos(1234); // WHERE empleadocomision_comisionproductos = 1234
     * $query->filterByEmpleadocomisionComisionproductos(array(12, 34)); // WHERE empleadocomision_comisionproductos IN (12, 34)
     * $query->filterByEmpleadocomisionComisionproductos(array('min' => 12)); // WHERE empleadocomision_comisionproductos >= 12
     * $query->filterByEmpleadocomisionComisionproductos(array('max' => 12)); // WHERE empleadocomision_comisionproductos <= 12
     * </code>
     *
     * @param     mixed $empleadocomisionComisionproductos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionComisionproductos($empleadocomisionComisionproductos = null, $comparison = null)
    {
        if (is_array($empleadocomisionComisionproductos)) {
            $useMinMax = false;
            if (isset($empleadocomisionComisionproductos['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONPRODUCTOS, $empleadocomisionComisionproductos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionComisionproductos['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONPRODUCTOS, $empleadocomisionComisionproductos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_COMISIONPRODUCTOS, $empleadocomisionComisionproductos, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_serviciosvendidos column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionServiciosvendidos(1234); // WHERE empleadocomision_serviciosvendidos = 1234
     * $query->filterByEmpleadocomisionServiciosvendidos(array(12, 34)); // WHERE empleadocomision_serviciosvendidos IN (12, 34)
     * $query->filterByEmpleadocomisionServiciosvendidos(array('min' => 12)); // WHERE empleadocomision_serviciosvendidos >= 12
     * $query->filterByEmpleadocomisionServiciosvendidos(array('max' => 12)); // WHERE empleadocomision_serviciosvendidos <= 12
     * </code>
     *
     * @param     mixed $empleadocomisionServiciosvendidos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionServiciosvendidos($empleadocomisionServiciosvendidos = null, $comparison = null)
    {
        if (is_array($empleadocomisionServiciosvendidos)) {
            $useMinMax = false;
            if (isset($empleadocomisionServiciosvendidos['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_SERVICIOSVENDIDOS, $empleadocomisionServiciosvendidos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionServiciosvendidos['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_SERVICIOSVENDIDOS, $empleadocomisionServiciosvendidos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_SERVICIOSVENDIDOS, $empleadocomisionServiciosvendidos, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_productosvendidos column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionProductosvendidos(1234); // WHERE empleadocomision_productosvendidos = 1234
     * $query->filterByEmpleadocomisionProductosvendidos(array(12, 34)); // WHERE empleadocomision_productosvendidos IN (12, 34)
     * $query->filterByEmpleadocomisionProductosvendidos(array('min' => 12)); // WHERE empleadocomision_productosvendidos >= 12
     * $query->filterByEmpleadocomisionProductosvendidos(array('max' => 12)); // WHERE empleadocomision_productosvendidos <= 12
     * </code>
     *
     * @param     mixed $empleadocomisionProductosvendidos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionProductosvendidos($empleadocomisionProductosvendidos = null, $comparison = null)
    {
        if (is_array($empleadocomisionProductosvendidos)) {
            $useMinMax = false;
            if (isset($empleadocomisionProductosvendidos['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_PRODUCTOSVENDIDOS, $empleadocomisionProductosvendidos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionProductosvendidos['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_PRODUCTOSVENDIDOS, $empleadocomisionProductosvendidos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_PRODUCTOSVENDIDOS, $empleadocomisionProductosvendidos, $comparison);
    }

    /**
     * Filter the query on the empleadocomision_acumulado column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadocomisionAcumulado(1234); // WHERE empleadocomision_acumulado = 1234
     * $query->filterByEmpleadocomisionAcumulado(array(12, 34)); // WHERE empleadocomision_acumulado IN (12, 34)
     * $query->filterByEmpleadocomisionAcumulado(array('min' => 12)); // WHERE empleadocomision_acumulado >= 12
     * $query->filterByEmpleadocomisionAcumulado(array('max' => 12)); // WHERE empleadocomision_acumulado <= 12
     * </code>
     *
     * @param     mixed $empleadocomisionAcumulado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function filterByEmpleadocomisionAcumulado($empleadocomisionAcumulado = null, $comparison = null)
    {
        if (is_array($empleadocomisionAcumulado)) {
            $useMinMax = false;
            if (isset($empleadocomisionAcumulado['min'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_ACUMULADO, $empleadocomisionAcumulado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadocomisionAcumulado['max'])) {
                $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_ACUMULADO, $empleadocomisionAcumulado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadocomisionPeer::EMPLEADOCOMISION_ACUMULADO, $empleadocomisionAcumulado, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadocomisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(EmpleadocomisionPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadocomisionPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return EmpleadocomisionQuery The current query, for fluid interface
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
     * @return                 EmpleadocomisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadocomisionPeer::IDEMPLEDO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadocomisionPeer::IDEMPLEDO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EmpleadocomisionQuery The current query, for fluid interface
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
     * @param   Empleadocomision $empleadocomision Object to remove from the list of results
     *
     * @return EmpleadocomisionQuery The current query, for fluid interface
     */
    public function prune($empleadocomision = null)
    {
        if ($empleadocomision) {
            $this->addUsingAlias(EmpleadocomisionPeer::IDEMPLEADOCOMISION, $empleadocomision->getIdempleadocomision(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
