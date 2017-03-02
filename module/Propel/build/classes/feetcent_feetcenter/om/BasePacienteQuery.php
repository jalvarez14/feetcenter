<?php


/**
 * Base class that represents a query for the 'paciente' table.
 *
 *
 *
 * @method PacienteQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method PacienteQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method PacienteQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method PacienteQuery orderByPacienteNombre($order = Criteria::ASC) Order by the paciente_nombre column
 * @method PacienteQuery orderByPacienteCelular($order = Criteria::ASC) Order by the paciente_celular column
 * @method PacienteQuery orderByPacienteTelefono($order = Criteria::ASC) Order by the paciente_telefono column
 * @method PacienteQuery orderByPacienteCalle($order = Criteria::ASC) Order by the paciente_calle column
 * @method PacienteQuery orderByPacienteNumero($order = Criteria::ASC) Order by the paciente_numero column
 * @method PacienteQuery orderByPacienteColonia($order = Criteria::ASC) Order by the paciente_colonia column
 * @method PacienteQuery orderByPacienteCodigopostal($order = Criteria::ASC) Order by the paciente_codigopostal column
 * @method PacienteQuery orderByPacienteCiudad($order = Criteria::ASC) Order by the paciente_ciudad column
 * @method PacienteQuery orderByPacienteEstado($order = Criteria::ASC) Order by the paciente_estado column
 * @method PacienteQuery orderByPacienteSexo($order = Criteria::ASC) Order by the paciente_sexo column
 * @method PacienteQuery orderByPacienteFechanacimiento($order = Criteria::ASC) Order by the paciente_fechanacimiento column
 * @method PacienteQuery orderByPacienteFecharegistro($order = Criteria::ASC) Order by the paciente_fecharegistro column
 * @method PacienteQuery orderByPacienteName($order = Criteria::ASC) Order by the paciente_name column
 * @method PacienteQuery orderByPacienteAp($order = Criteria::ASC) Order by the paciente_ap column
 * @method PacienteQuery orderByPacienteAm($order = Criteria::ASC) Order by the paciente_am column
 *
 * @method PacienteQuery groupByIdpaciente() Group by the idpaciente column
 * @method PacienteQuery groupByIdclinica() Group by the idclinica column
 * @method PacienteQuery groupByIdempleado() Group by the idempleado column
 * @method PacienteQuery groupByPacienteNombre() Group by the paciente_nombre column
 * @method PacienteQuery groupByPacienteCelular() Group by the paciente_celular column
 * @method PacienteQuery groupByPacienteTelefono() Group by the paciente_telefono column
 * @method PacienteQuery groupByPacienteCalle() Group by the paciente_calle column
 * @method PacienteQuery groupByPacienteNumero() Group by the paciente_numero column
 * @method PacienteQuery groupByPacienteColonia() Group by the paciente_colonia column
 * @method PacienteQuery groupByPacienteCodigopostal() Group by the paciente_codigopostal column
 * @method PacienteQuery groupByPacienteCiudad() Group by the paciente_ciudad column
 * @method PacienteQuery groupByPacienteEstado() Group by the paciente_estado column
 * @method PacienteQuery groupByPacienteSexo() Group by the paciente_sexo column
 * @method PacienteQuery groupByPacienteFechanacimiento() Group by the paciente_fechanacimiento column
 * @method PacienteQuery groupByPacienteFecharegistro() Group by the paciente_fecharegistro column
 * @method PacienteQuery groupByPacienteName() Group by the paciente_name column
 * @method PacienteQuery groupByPacienteAp() Group by the paciente_ap column
 * @method PacienteQuery groupByPacienteAm() Group by the paciente_am column
 *
 * @method PacienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacienteQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method PacienteQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method PacienteQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method PacienteQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method PacienteQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method PacienteQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method PacienteQuery leftJoinGrupopaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupopaciente relation
 * @method PacienteQuery rightJoinGrupopaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupopaciente relation
 * @method PacienteQuery innerJoinGrupopaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupopaciente relation
 *
 * @method PacienteQuery leftJoinGrupopersonalRelatedByIdpaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the GrupopersonalRelatedByIdpaciente relation
 * @method PacienteQuery rightJoinGrupopersonalRelatedByIdpaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GrupopersonalRelatedByIdpaciente relation
 * @method PacienteQuery innerJoinGrupopersonalRelatedByIdpaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the GrupopersonalRelatedByIdpaciente relation
 *
 * @method PacienteQuery leftJoinGrupopersonalRelatedByIdpacienteagregado($relationAlias = null) Adds a LEFT JOIN clause to the query using the GrupopersonalRelatedByIdpacienteagregado relation
 * @method PacienteQuery rightJoinGrupopersonalRelatedByIdpacienteagregado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GrupopersonalRelatedByIdpacienteagregado relation
 * @method PacienteQuery innerJoinGrupopersonalRelatedByIdpacienteagregado($relationAlias = null) Adds a INNER JOIN clause to the query using the GrupopersonalRelatedByIdpacienteagregado relation
 *
 * @method PacienteQuery leftJoinPacientemembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresia relation
 * @method PacienteQuery rightJoinPacientemembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresia relation
 * @method PacienteQuery innerJoinPacientemembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresia relation
 *
 * @method PacienteQuery leftJoinPacienteseguimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacienteseguimiento relation
 * @method PacienteQuery rightJoinPacienteseguimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacienteseguimiento relation
 * @method PacienteQuery innerJoinPacienteseguimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacienteseguimiento relation
 *
 * @method PacienteQuery leftJoinVisita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visita relation
 * @method PacienteQuery rightJoinVisita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visita relation
 * @method PacienteQuery innerJoinVisita($relationAlias = null) Adds a INNER JOIN clause to the query using the Visita relation
 *
 * @method Paciente findOne(PropelPDO $con = null) Return the first Paciente matching the query
 * @method Paciente findOneOrCreate(PropelPDO $con = null) Return the first Paciente matching the query, or a new Paciente object populated from the query conditions when no match is found
 *
 * @method Paciente findOneByIdclinica(int $idclinica) Return the first Paciente filtered by the idclinica column
 * @method Paciente findOneByIdempleado(int $idempleado) Return the first Paciente filtered by the idempleado column
 * @method Paciente findOneByPacienteNombre(string $paciente_nombre) Return the first Paciente filtered by the paciente_nombre column
 * @method Paciente findOneByPacienteCelular(string $paciente_celular) Return the first Paciente filtered by the paciente_celular column
 * @method Paciente findOneByPacienteTelefono(string $paciente_telefono) Return the first Paciente filtered by the paciente_telefono column
 * @method Paciente findOneByPacienteCalle(string $paciente_calle) Return the first Paciente filtered by the paciente_calle column
 * @method Paciente findOneByPacienteNumero(string $paciente_numero) Return the first Paciente filtered by the paciente_numero column
 * @method Paciente findOneByPacienteColonia(string $paciente_colonia) Return the first Paciente filtered by the paciente_colonia column
 * @method Paciente findOneByPacienteCodigopostal(string $paciente_codigopostal) Return the first Paciente filtered by the paciente_codigopostal column
 * @method Paciente findOneByPacienteCiudad(string $paciente_ciudad) Return the first Paciente filtered by the paciente_ciudad column
 * @method Paciente findOneByPacienteEstado(string $paciente_estado) Return the first Paciente filtered by the paciente_estado column
 * @method Paciente findOneByPacienteSexo(string $paciente_sexo) Return the first Paciente filtered by the paciente_sexo column
 * @method Paciente findOneByPacienteFechanacimiento(string $paciente_fechanacimiento) Return the first Paciente filtered by the paciente_fechanacimiento column
 * @method Paciente findOneByPacienteFecharegistro(string $paciente_fecharegistro) Return the first Paciente filtered by the paciente_fecharegistro column
 * @method Paciente findOneByPacienteName(string $paciente_name) Return the first Paciente filtered by the paciente_name column
 * @method Paciente findOneByPacienteAp(string $paciente_ap) Return the first Paciente filtered by the paciente_ap column
 * @method Paciente findOneByPacienteAm(string $paciente_am) Return the first Paciente filtered by the paciente_am column
 *
 * @method array findByIdpaciente(int $idpaciente) Return Paciente objects filtered by the idpaciente column
 * @method array findByIdclinica(int $idclinica) Return Paciente objects filtered by the idclinica column
 * @method array findByIdempleado(int $idempleado) Return Paciente objects filtered by the idempleado column
 * @method array findByPacienteNombre(string $paciente_nombre) Return Paciente objects filtered by the paciente_nombre column
 * @method array findByPacienteCelular(string $paciente_celular) Return Paciente objects filtered by the paciente_celular column
 * @method array findByPacienteTelefono(string $paciente_telefono) Return Paciente objects filtered by the paciente_telefono column
 * @method array findByPacienteCalle(string $paciente_calle) Return Paciente objects filtered by the paciente_calle column
 * @method array findByPacienteNumero(string $paciente_numero) Return Paciente objects filtered by the paciente_numero column
 * @method array findByPacienteColonia(string $paciente_colonia) Return Paciente objects filtered by the paciente_colonia column
 * @method array findByPacienteCodigopostal(string $paciente_codigopostal) Return Paciente objects filtered by the paciente_codigopostal column
 * @method array findByPacienteCiudad(string $paciente_ciudad) Return Paciente objects filtered by the paciente_ciudad column
 * @method array findByPacienteEstado(string $paciente_estado) Return Paciente objects filtered by the paciente_estado column
 * @method array findByPacienteSexo(string $paciente_sexo) Return Paciente objects filtered by the paciente_sexo column
 * @method array findByPacienteFechanacimiento(string $paciente_fechanacimiento) Return Paciente objects filtered by the paciente_fechanacimiento column
 * @method array findByPacienteFecharegistro(string $paciente_fecharegistro) Return Paciente objects filtered by the paciente_fecharegistro column
 * @method array findByPacienteName(string $paciente_name) Return Paciente objects filtered by the paciente_name column
 * @method array findByPacienteAp(string $paciente_ap) Return Paciente objects filtered by the paciente_ap column
 * @method array findByPacienteAm(string $paciente_am) Return Paciente objects filtered by the paciente_am column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacienteQuery object.
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
            $modelName = 'Paciente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacienteQuery) {
            return $criteria;
        }
        $query = new PacienteQuery(null, null, $modelAlias);

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
     * @return   Paciente|Paciente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Paciente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpaciente($key, $con = null)
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
     * @return                 Paciente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpaciente`, `idclinica`, `idempleado`, `paciente_nombre`, `paciente_celular`, `paciente_telefono`, `paciente_calle`, `paciente_numero`, `paciente_colonia`, `paciente_codigopostal`, `paciente_ciudad`, `paciente_estado`, `paciente_sexo`, `paciente_fechanacimiento`, `paciente_fecharegistro`, `paciente_name`, `paciente_ap`, `paciente_am` FROM `paciente` WHERE `idpaciente` = :p0';
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
            $obj = new Paciente();
            $obj->hydrate($row);
            PacientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Paciente|Paciente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Paciente[]|mixed the list of results, formatted by the current formatter
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $keys, Criteria::IN);
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
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(PacientePeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(PacientePeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::IDCLINICA, $idclinica, $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(PacientePeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(PacientePeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the paciente_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteNombre('fooValue');   // WHERE paciente_nombre = 'fooValue'
     * $query->filterByPacienteNombre('%fooValue%'); // WHERE paciente_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteNombre($pacienteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteNombre)) {
                $pacienteNombre = str_replace('*', '%', $pacienteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NOMBRE, $pacienteNombre, $comparison);
    }

    /**
     * Filter the query on the paciente_celular column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCelular('fooValue');   // WHERE paciente_celular = 'fooValue'
     * $query->filterByPacienteCelular('%fooValue%'); // WHERE paciente_celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCelular($pacienteCelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCelular)) {
                $pacienteCelular = str_replace('*', '%', $pacienteCelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CELULAR, $pacienteCelular, $comparison);
    }

    /**
     * Filter the query on the paciente_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteTelefono('fooValue');   // WHERE paciente_telefono = 'fooValue'
     * $query->filterByPacienteTelefono('%fooValue%'); // WHERE paciente_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteTelefono($pacienteTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteTelefono)) {
                $pacienteTelefono = str_replace('*', '%', $pacienteTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_TELEFONO, $pacienteTelefono, $comparison);
    }

    /**
     * Filter the query on the paciente_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCalle('fooValue');   // WHERE paciente_calle = 'fooValue'
     * $query->filterByPacienteCalle('%fooValue%'); // WHERE paciente_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCalle($pacienteCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCalle)) {
                $pacienteCalle = str_replace('*', '%', $pacienteCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CALLE, $pacienteCalle, $comparison);
    }

    /**
     * Filter the query on the paciente_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteNumero('fooValue');   // WHERE paciente_numero = 'fooValue'
     * $query->filterByPacienteNumero('%fooValue%'); // WHERE paciente_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteNumero($pacienteNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteNumero)) {
                $pacienteNumero = str_replace('*', '%', $pacienteNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NUMERO, $pacienteNumero, $comparison);
    }

    /**
     * Filter the query on the paciente_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteColonia('fooValue');   // WHERE paciente_colonia = 'fooValue'
     * $query->filterByPacienteColonia('%fooValue%'); // WHERE paciente_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteColonia($pacienteColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteColonia)) {
                $pacienteColonia = str_replace('*', '%', $pacienteColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_COLONIA, $pacienteColonia, $comparison);
    }

    /**
     * Filter the query on the paciente_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCodigopostal('fooValue');   // WHERE paciente_codigopostal = 'fooValue'
     * $query->filterByPacienteCodigopostal('%fooValue%'); // WHERE paciente_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCodigopostal($pacienteCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCodigopostal)) {
                $pacienteCodigopostal = str_replace('*', '%', $pacienteCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CODIGOPOSTAL, $pacienteCodigopostal, $comparison);
    }

    /**
     * Filter the query on the paciente_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCiudad('fooValue');   // WHERE paciente_ciudad = 'fooValue'
     * $query->filterByPacienteCiudad('%fooValue%'); // WHERE paciente_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCiudad($pacienteCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCiudad)) {
                $pacienteCiudad = str_replace('*', '%', $pacienteCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CIUDAD, $pacienteCiudad, $comparison);
    }

    /**
     * Filter the query on the paciente_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteEstado('fooValue');   // WHERE paciente_estado = 'fooValue'
     * $query->filterByPacienteEstado('%fooValue%'); // WHERE paciente_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteEstado($pacienteEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteEstado)) {
                $pacienteEstado = str_replace('*', '%', $pacienteEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_ESTADO, $pacienteEstado, $comparison);
    }

    /**
     * Filter the query on the paciente_sexo column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteSexo('fooValue');   // WHERE paciente_sexo = 'fooValue'
     * $query->filterByPacienteSexo('%fooValue%'); // WHERE paciente_sexo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteSexo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteSexo($pacienteSexo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteSexo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteSexo)) {
                $pacienteSexo = str_replace('*', '%', $pacienteSexo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_SEXO, $pacienteSexo, $comparison);
    }

    /**
     * Filter the query on the paciente_fechanacimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteFechanacimiento('2011-03-14'); // WHERE paciente_fechanacimiento = '2011-03-14'
     * $query->filterByPacienteFechanacimiento('now'); // WHERE paciente_fechanacimiento = '2011-03-14'
     * $query->filterByPacienteFechanacimiento(array('max' => 'yesterday')); // WHERE paciente_fechanacimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacienteFechanacimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteFechanacimiento($pacienteFechanacimiento = null, $comparison = null)
    {
        if (is_array($pacienteFechanacimiento)) {
            $useMinMax = false;
            if (isset($pacienteFechanacimiento['min'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacienteFechanacimiento['max'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento, $comparison);
    }

    /**
     * Filter the query on the paciente_fecharegistro column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteFecharegistro('2011-03-14'); // WHERE paciente_fecharegistro = '2011-03-14'
     * $query->filterByPacienteFecharegistro('now'); // WHERE paciente_fecharegistro = '2011-03-14'
     * $query->filterByPacienteFecharegistro(array('max' => 'yesterday')); // WHERE paciente_fecharegistro < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacienteFecharegistro The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteFecharegistro($pacienteFecharegistro = null, $comparison = null)
    {
        if (is_array($pacienteFecharegistro)) {
            $useMinMax = false;
            if (isset($pacienteFecharegistro['min'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHAREGISTRO, $pacienteFecharegistro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacienteFecharegistro['max'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHAREGISTRO, $pacienteFecharegistro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_FECHAREGISTRO, $pacienteFecharegistro, $comparison);
    }

    /**
     * Filter the query on the paciente_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteName('fooValue');   // WHERE paciente_name = 'fooValue'
     * $query->filterByPacienteName('%fooValue%'); // WHERE paciente_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteName($pacienteName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteName)) {
                $pacienteName = str_replace('*', '%', $pacienteName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NAME, $pacienteName, $comparison);
    }

    /**
     * Filter the query on the paciente_ap column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteAp('fooValue');   // WHERE paciente_ap = 'fooValue'
     * $query->filterByPacienteAp('%fooValue%'); // WHERE paciente_ap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteAp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteAp($pacienteAp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteAp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteAp)) {
                $pacienteAp = str_replace('*', '%', $pacienteAp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_AP, $pacienteAp, $comparison);
    }

    /**
     * Filter the query on the paciente_am column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteAm('fooValue');   // WHERE paciente_am = 'fooValue'
     * $query->filterByPacienteAm('%fooValue%'); // WHERE paciente_am LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteAm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteAm($pacienteAm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteAm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteAm)) {
                $pacienteAm = str_replace('*', '%', $pacienteAm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_AM, $pacienteAm, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(PacientePeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientePeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinClinica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useClinicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(PacientePeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientePeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Grupopaciente object
     *
     * @param   Grupopaciente|PropelObjectCollection $grupopaciente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGrupopaciente($grupopaciente, $comparison = null)
    {
        if ($grupopaciente instanceof Grupopaciente) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $grupopaciente->getIdpaciente(), $comparison);
        } elseif ($grupopaciente instanceof PropelObjectCollection) {
            return $this
                ->useGrupopacienteQuery()
                ->filterByPrimaryKeys($grupopaciente->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGrupopaciente() only accepts arguments of type Grupopaciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Grupopaciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinGrupopaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Grupopaciente');

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
            $this->addJoinObject($join, 'Grupopaciente');
        }

        return $this;
    }

    /**
     * Use the Grupopaciente relation Grupopaciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GrupopacienteQuery A secondary query class using the current class as primary query
     */
    public function useGrupopacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGrupopaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Grupopaciente', 'GrupopacienteQuery');
    }

    /**
     * Filter the query by a related Grupopersonal object
     *
     * @param   Grupopersonal|PropelObjectCollection $grupopersonal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGrupopersonalRelatedByIdpaciente($grupopersonal, $comparison = null)
    {
        if ($grupopersonal instanceof Grupopersonal) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $grupopersonal->getIdpaciente(), $comparison);
        } elseif ($grupopersonal instanceof PropelObjectCollection) {
            return $this
                ->useGrupopersonalRelatedByIdpacienteQuery()
                ->filterByPrimaryKeys($grupopersonal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGrupopersonalRelatedByIdpaciente() only accepts arguments of type Grupopersonal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GrupopersonalRelatedByIdpaciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinGrupopersonalRelatedByIdpaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GrupopersonalRelatedByIdpaciente');

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
            $this->addJoinObject($join, 'GrupopersonalRelatedByIdpaciente');
        }

        return $this;
    }

    /**
     * Use the GrupopersonalRelatedByIdpaciente relation Grupopersonal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GrupopersonalQuery A secondary query class using the current class as primary query
     */
    public function useGrupopersonalRelatedByIdpacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGrupopersonalRelatedByIdpaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GrupopersonalRelatedByIdpaciente', 'GrupopersonalQuery');
    }

    /**
     * Filter the query by a related Grupopersonal object
     *
     * @param   Grupopersonal|PropelObjectCollection $grupopersonal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGrupopersonalRelatedByIdpacienteagregado($grupopersonal, $comparison = null)
    {
        if ($grupopersonal instanceof Grupopersonal) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $grupopersonal->getIdpacienteagregado(), $comparison);
        } elseif ($grupopersonal instanceof PropelObjectCollection) {
            return $this
                ->useGrupopersonalRelatedByIdpacienteagregadoQuery()
                ->filterByPrimaryKeys($grupopersonal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGrupopersonalRelatedByIdpacienteagregado() only accepts arguments of type Grupopersonal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GrupopersonalRelatedByIdpacienteagregado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinGrupopersonalRelatedByIdpacienteagregado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GrupopersonalRelatedByIdpacienteagregado');

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
            $this->addJoinObject($join, 'GrupopersonalRelatedByIdpacienteagregado');
        }

        return $this;
    }

    /**
     * Use the GrupopersonalRelatedByIdpacienteagregado relation Grupopersonal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GrupopersonalQuery A secondary query class using the current class as primary query
     */
    public function useGrupopersonalRelatedByIdpacienteagregadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGrupopersonalRelatedByIdpacienteagregado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GrupopersonalRelatedByIdpacienteagregado', 'GrupopersonalQuery');
    }

    /**
     * Filter the query by a related Pacientemembresia object
     *
     * @param   Pacientemembresia|PropelObjectCollection $pacientemembresia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresia($pacientemembresia, $comparison = null)
    {
        if ($pacientemembresia instanceof Pacientemembresia) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $pacientemembresia->getIdpaciente(), $comparison);
        } elseif ($pacientemembresia instanceof PropelObjectCollection) {
            return $this
                ->usePacientemembresiaQuery()
                ->filterByPrimaryKeys($pacientemembresia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientemembresia() only accepts arguments of type Pacientemembresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientemembresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinPacientemembresia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientemembresia');

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
            $this->addJoinObject($join, 'Pacientemembresia');
        }

        return $this;
    }

    /**
     * Use the Pacientemembresia relation Pacientemembresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientemembresiaQuery A secondary query class using the current class as primary query
     */
    public function usePacientemembresiaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientemembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientemembresia', 'PacientemembresiaQuery');
    }

    /**
     * Filter the query by a related Pacienteseguimiento object
     *
     * @param   Pacienteseguimiento|PropelObjectCollection $pacienteseguimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteseguimiento($pacienteseguimiento, $comparison = null)
    {
        if ($pacienteseguimiento instanceof Pacienteseguimiento) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $pacienteseguimiento->getIdpaciente(), $comparison);
        } elseif ($pacienteseguimiento instanceof PropelObjectCollection) {
            return $this
                ->usePacienteseguimientoQuery()
                ->filterByPrimaryKeys($pacienteseguimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacienteseguimiento() only accepts arguments of type Pacienteseguimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacienteseguimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinPacienteseguimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacienteseguimiento');

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
            $this->addJoinObject($join, 'Pacienteseguimiento');
        }

        return $this;
    }

    /**
     * Use the Pacienteseguimiento relation Pacienteseguimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteseguimientoQuery A secondary query class using the current class as primary query
     */
    public function usePacienteseguimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteseguimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacienteseguimiento', 'PacienteseguimientoQuery');
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisita($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $visita->getIdpaciente(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            return $this
                ->useVisitaQuery()
                ->filterByPrimaryKeys($visita->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVisita() only accepts arguments of type Visita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Visita relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinVisita($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Visita');

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
            $this->addJoinObject($join, 'Visita');
        }

        return $this;
    }

    /**
     * Use the Visita relation Visita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitaQuery A secondary query class using the current class as primary query
     */
    public function useVisitaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisita($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visita', 'VisitaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Paciente $paciente Object to remove from the list of results
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function prune($paciente = null)
    {
        if ($paciente) {
            $this->addUsingAlias(PacientePeer::IDPACIENTE, $paciente->getIdpaciente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
