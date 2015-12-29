<?php


/**
 * Base class that represents a query for the 'pacienteseguimiento' table.
 *
 *
 *
 * @method PacienteseguimientoQuery orderByIdpacienteseguimiento($order = Criteria::ASC) Order by the idpacienteseguimiento column
 * @method PacienteseguimientoQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method PacienteseguimientoQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method PacienteseguimientoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method PacienteseguimientoQuery orderByIdcanalcomunicacion($order = Criteria::ASC) Order by the idcanalcomunicacion column
 * @method PacienteseguimientoQuery orderByIdestatusseguimiento($order = Criteria::ASC) Order by the idestatusseguimiento column
 * @method PacienteseguimientoQuery orderByPacienteseguimientoFechacreacion($order = Criteria::ASC) Order by the pacienteseguimiento_fechacreacion column
 * @method PacienteseguimientoQuery orderByPacienteseguimientoComentario($order = Criteria::ASC) Order by the pacienteseguimiento_comentario column
 * @method PacienteseguimientoQuery orderByPacienteseguimientoFecha($order = Criteria::ASC) Order by the pacienteseguimiento_fecha column
 *
 * @method PacienteseguimientoQuery groupByIdpacienteseguimiento() Group by the idpacienteseguimiento column
 * @method PacienteseguimientoQuery groupByIdpaciente() Group by the idpaciente column
 * @method PacienteseguimientoQuery groupByIdclinica() Group by the idclinica column
 * @method PacienteseguimientoQuery groupByIdempleado() Group by the idempleado column
 * @method PacienteseguimientoQuery groupByIdcanalcomunicacion() Group by the idcanalcomunicacion column
 * @method PacienteseguimientoQuery groupByIdestatusseguimiento() Group by the idestatusseguimiento column
 * @method PacienteseguimientoQuery groupByPacienteseguimientoFechacreacion() Group by the pacienteseguimiento_fechacreacion column
 * @method PacienteseguimientoQuery groupByPacienteseguimientoComentario() Group by the pacienteseguimiento_comentario column
 * @method PacienteseguimientoQuery groupByPacienteseguimientoFecha() Group by the pacienteseguimiento_fecha column
 *
 * @method PacienteseguimientoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacienteseguimientoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacienteseguimientoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacienteseguimientoQuery leftJoinCanalcomunicacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Canalcomunicacion relation
 * @method PacienteseguimientoQuery rightJoinCanalcomunicacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Canalcomunicacion relation
 * @method PacienteseguimientoQuery innerJoinCanalcomunicacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Canalcomunicacion relation
 *
 * @method PacienteseguimientoQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method PacienteseguimientoQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method PacienteseguimientoQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method PacienteseguimientoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method PacienteseguimientoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method PacienteseguimientoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method PacienteseguimientoQuery leftJoinEstatusseguimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Estatusseguimiento relation
 * @method PacienteseguimientoQuery rightJoinEstatusseguimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Estatusseguimiento relation
 * @method PacienteseguimientoQuery innerJoinEstatusseguimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Estatusseguimiento relation
 *
 * @method PacienteseguimientoQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method PacienteseguimientoQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method PacienteseguimientoQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method Pacienteseguimiento findOne(PropelPDO $con = null) Return the first Pacienteseguimiento matching the query
 * @method Pacienteseguimiento findOneOrCreate(PropelPDO $con = null) Return the first Pacienteseguimiento matching the query, or a new Pacienteseguimiento object populated from the query conditions when no match is found
 *
 * @method Pacienteseguimiento findOneByIdpaciente(int $idpaciente) Return the first Pacienteseguimiento filtered by the idpaciente column
 * @method Pacienteseguimiento findOneByIdclinica(int $idclinica) Return the first Pacienteseguimiento filtered by the idclinica column
 * @method Pacienteseguimiento findOneByIdempleado(int $idempleado) Return the first Pacienteseguimiento filtered by the idempleado column
 * @method Pacienteseguimiento findOneByIdcanalcomunicacion(int $idcanalcomunicacion) Return the first Pacienteseguimiento filtered by the idcanalcomunicacion column
 * @method Pacienteseguimiento findOneByIdestatusseguimiento(int $idestatusseguimiento) Return the first Pacienteseguimiento filtered by the idestatusseguimiento column
 * @method Pacienteseguimiento findOneByPacienteseguimientoFechacreacion(string $pacienteseguimiento_fechacreacion) Return the first Pacienteseguimiento filtered by the pacienteseguimiento_fechacreacion column
 * @method Pacienteseguimiento findOneByPacienteseguimientoComentario(string $pacienteseguimiento_comentario) Return the first Pacienteseguimiento filtered by the pacienteseguimiento_comentario column
 * @method Pacienteseguimiento findOneByPacienteseguimientoFecha(string $pacienteseguimiento_fecha) Return the first Pacienteseguimiento filtered by the pacienteseguimiento_fecha column
 *
 * @method array findByIdpacienteseguimiento(int $idpacienteseguimiento) Return Pacienteseguimiento objects filtered by the idpacienteseguimiento column
 * @method array findByIdpaciente(int $idpaciente) Return Pacienteseguimiento objects filtered by the idpaciente column
 * @method array findByIdclinica(int $idclinica) Return Pacienteseguimiento objects filtered by the idclinica column
 * @method array findByIdempleado(int $idempleado) Return Pacienteseguimiento objects filtered by the idempleado column
 * @method array findByIdcanalcomunicacion(int $idcanalcomunicacion) Return Pacienteseguimiento objects filtered by the idcanalcomunicacion column
 * @method array findByIdestatusseguimiento(int $idestatusseguimiento) Return Pacienteseguimiento objects filtered by the idestatusseguimiento column
 * @method array findByPacienteseguimientoFechacreacion(string $pacienteseguimiento_fechacreacion) Return Pacienteseguimiento objects filtered by the pacienteseguimiento_fechacreacion column
 * @method array findByPacienteseguimientoComentario(string $pacienteseguimiento_comentario) Return Pacienteseguimiento objects filtered by the pacienteseguimiento_comentario column
 * @method array findByPacienteseguimientoFecha(string $pacienteseguimiento_fecha) Return Pacienteseguimiento objects filtered by the pacienteseguimiento_fecha column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacienteseguimientoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacienteseguimientoQuery object.
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
            $modelName = 'Pacienteseguimiento';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacienteseguimientoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacienteseguimientoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacienteseguimientoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacienteseguimientoQuery) {
            return $criteria;
        }
        $query = new PacienteseguimientoQuery(null, null, $modelAlias);

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
     * @return   Pacienteseguimiento|Pacienteseguimiento[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacienteseguimientoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pacienteseguimiento A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpacienteseguimiento($key, $con = null)
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
     * @return                 Pacienteseguimiento A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpacienteseguimiento`, `idpaciente`, `idclinica`, `idempleado`, `idcanalcomunicacion`, `idestatusseguimiento`, `pacienteseguimiento_fechacreacion`, `pacienteseguimiento_comentario`, `pacienteseguimiento_fecha` FROM `pacienteseguimiento` WHERE `idpacienteseguimiento` = :p0';
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
            $obj = new Pacienteseguimiento();
            $obj->hydrate($row);
            PacienteseguimientoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pacienteseguimiento|Pacienteseguimiento[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pacienteseguimiento[]|mixed the list of results, formatted by the current formatter
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
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpacienteseguimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacienteseguimiento(1234); // WHERE idpacienteseguimiento = 1234
     * $query->filterByIdpacienteseguimiento(array(12, 34)); // WHERE idpacienteseguimiento IN (12, 34)
     * $query->filterByIdpacienteseguimiento(array('min' => 12)); // WHERE idpacienteseguimiento >= 12
     * $query->filterByIdpacienteseguimiento(array('max' => 12)); // WHERE idpacienteseguimiento <= 12
     * </code>
     *
     * @param     mixed $idpacienteseguimiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdpacienteseguimiento($idpacienteseguimiento = null, $comparison = null)
    {
        if (is_array($idpacienteseguimiento)) {
            $useMinMax = false;
            if (isset($idpacienteseguimiento['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $idpacienteseguimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacienteseguimiento['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $idpacienteseguimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $idpacienteseguimiento, $comparison);
    }

    /**
     * Filter the query on the idpaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaciente(1234); // WHERE idpaciente = 1234
     * $query->filterByIdpaciente(array(12, 34)); // WHERE idpaciente IN (12, 34)
     * $query->filterByIdpaciente(array('min' => 12)); // WHERE idpaciente >= 12
     * $query->filterByIdpaciente(array('max' => 12)); // WHERE idpaciente <= 12
     * </code>
     *
     * @see       filterByPaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDCLINICA, $idclinica, $comparison);
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
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idcanalcomunicacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcanalcomunicacion(1234); // WHERE idcanalcomunicacion = 1234
     * $query->filterByIdcanalcomunicacion(array(12, 34)); // WHERE idcanalcomunicacion IN (12, 34)
     * $query->filterByIdcanalcomunicacion(array('min' => 12)); // WHERE idcanalcomunicacion >= 12
     * $query->filterByIdcanalcomunicacion(array('max' => 12)); // WHERE idcanalcomunicacion <= 12
     * </code>
     *
     * @see       filterByCanalcomunicacion()
     *
     * @param     mixed $idcanalcomunicacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdcanalcomunicacion($idcanalcomunicacion = null, $comparison = null)
    {
        if (is_array($idcanalcomunicacion)) {
            $useMinMax = false;
            if (isset($idcanalcomunicacion['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDCANALCOMUNICACION, $idcanalcomunicacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcanalcomunicacion['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDCANALCOMUNICACION, $idcanalcomunicacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDCANALCOMUNICACION, $idcanalcomunicacion, $comparison);
    }

    /**
     * Filter the query on the idestatusseguimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByIdestatusseguimiento(1234); // WHERE idestatusseguimiento = 1234
     * $query->filterByIdestatusseguimiento(array(12, 34)); // WHERE idestatusseguimiento IN (12, 34)
     * $query->filterByIdestatusseguimiento(array('min' => 12)); // WHERE idestatusseguimiento >= 12
     * $query->filterByIdestatusseguimiento(array('max' => 12)); // WHERE idestatusseguimiento <= 12
     * </code>
     *
     * @see       filterByEstatusseguimiento()
     *
     * @param     mixed $idestatusseguimiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdestatusseguimiento($idestatusseguimiento = null, $comparison = null)
    {
        if (is_array($idestatusseguimiento)) {
            $useMinMax = false;
            if (isset($idestatusseguimiento['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idestatusseguimiento['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento, $comparison);
    }

    /**
     * Filter the query on the pacienteseguimiento_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteseguimientoFechacreacion('2011-03-14'); // WHERE pacienteseguimiento_fechacreacion = '2011-03-14'
     * $query->filterByPacienteseguimientoFechacreacion('now'); // WHERE pacienteseguimiento_fechacreacion = '2011-03-14'
     * $query->filterByPacienteseguimientoFechacreacion(array('max' => 'yesterday')); // WHERE pacienteseguimiento_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacienteseguimientoFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByPacienteseguimientoFechacreacion($pacienteseguimientoFechacreacion = null, $comparison = null)
    {
        if (is_array($pacienteseguimientoFechacreacion)) {
            $useMinMax = false;
            if (isset($pacienteseguimientoFechacreacion['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION, $pacienteseguimientoFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacienteseguimientoFechacreacion['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION, $pacienteseguimientoFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION, $pacienteseguimientoFechacreacion, $comparison);
    }

    /**
     * Filter the query on the pacienteseguimiento_comentario column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteseguimientoComentario('fooValue');   // WHERE pacienteseguimiento_comentario = 'fooValue'
     * $query->filterByPacienteseguimientoComentario('%fooValue%'); // WHERE pacienteseguimiento_comentario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteseguimientoComentario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByPacienteseguimientoComentario($pacienteseguimientoComentario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteseguimientoComentario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteseguimientoComentario)) {
                $pacienteseguimientoComentario = str_replace('*', '%', $pacienteseguimientoComentario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO, $pacienteseguimientoComentario, $comparison);
    }

    /**
     * Filter the query on the pacienteseguimiento_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteseguimientoFecha('2011-03-14'); // WHERE pacienteseguimiento_fecha = '2011-03-14'
     * $query->filterByPacienteseguimientoFecha('now'); // WHERE pacienteseguimiento_fecha = '2011-03-14'
     * $query->filterByPacienteseguimientoFecha(array('max' => 'yesterday')); // WHERE pacienteseguimiento_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacienteseguimientoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function filterByPacienteseguimientoFecha($pacienteseguimientoFecha = null, $comparison = null)
    {
        if (is_array($pacienteseguimientoFecha)) {
            $useMinMax = false;
            if (isset($pacienteseguimientoFecha['min'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA, $pacienteseguimientoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacienteseguimientoFecha['max'])) {
                $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA, $pacienteseguimientoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA, $pacienteseguimientoFecha, $comparison);
    }

    /**
     * Filter the query by a related Canalcomunicacion object
     *
     * @param   Canalcomunicacion|PropelObjectCollection $canalcomunicacion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCanalcomunicacion($canalcomunicacion, $comparison = null)
    {
        if ($canalcomunicacion instanceof Canalcomunicacion) {
            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDCANALCOMUNICACION, $canalcomunicacion->getIdcanalcomunicacion(), $comparison);
        } elseif ($canalcomunicacion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDCANALCOMUNICACION, $canalcomunicacion->toKeyValue('PrimaryKey', 'Idcanalcomunicacion'), $comparison);
        } else {
            throw new PropelException('filterByCanalcomunicacion() only accepts arguments of type Canalcomunicacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Canalcomunicacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function joinCanalcomunicacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Canalcomunicacion');

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
            $this->addJoinObject($join, 'Canalcomunicacion');
        }

        return $this;
    }

    /**
     * Use the Canalcomunicacion relation Canalcomunicacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CanalcomunicacionQuery A secondary query class using the current class as primary query
     */
    public function useCanalcomunicacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCanalcomunicacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Canalcomunicacion', 'CanalcomunicacionQuery');
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return PacienteseguimientoQuery The current query, for fluid interface
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
     * @return                 PacienteseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return PacienteseguimientoQuery The current query, for fluid interface
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
     * Filter the query by a related Estatusseguimiento object
     *
     * @param   Estatusseguimiento|PropelObjectCollection $estatusseguimiento The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEstatusseguimiento($estatusseguimiento, $comparison = null)
    {
        if ($estatusseguimiento instanceof Estatusseguimiento) {
            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, $estatusseguimiento->getIdestatusseguimiento(), $comparison);
        } elseif ($estatusseguimiento instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, $estatusseguimiento->toKeyValue('PrimaryKey', 'Idestatusseguimiento'), $comparison);
        } else {
            throw new PropelException('filterByEstatusseguimiento() only accepts arguments of type Estatusseguimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Estatusseguimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function joinEstatusseguimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Estatusseguimiento');

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
            $this->addJoinObject($join, 'Estatusseguimiento');
        }

        return $this;
    }

    /**
     * Use the Estatusseguimiento relation Estatusseguimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EstatusseguimientoQuery A secondary query class using the current class as primary query
     */
    public function useEstatusseguimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEstatusseguimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Estatusseguimiento', 'EstatusseguimientoQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacienteseguimientoPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

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
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pacienteseguimiento $pacienteseguimiento Object to remove from the list of results
     *
     * @return PacienteseguimientoQuery The current query, for fluid interface
     */
    public function prune($pacienteseguimiento = null)
    {
        if ($pacienteseguimiento) {
            $this->addUsingAlias(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $pacienteseguimiento->getIdpacienteseguimiento(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
