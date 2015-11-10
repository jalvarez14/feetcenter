<?php


/**
 * Base class that represents a query for the 'pacientemembresia' table.
 *
 *
 *
 * @method PacientemembresiaQuery orderByIdpacientemembresia($order = Criteria::ASC) Order by the idpacientemembresia column
 * @method PacientemembresiaQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method PacientemembresiaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method PacientemembresiaQuery orderByIdmembresia($order = Criteria::ASC) Order by the idmembresia column
 * @method PacientemembresiaQuery orderByPacientemembresiaFolio($order = Criteria::ASC) Order by the pacientemembresia_folio column
 * @method PacientemembresiaQuery orderByPacientemembresiaFechainicio($order = Criteria::ASC) Order by the pacientemembresia_fechainicio column
 * @method PacientemembresiaQuery orderByPacientemembresiaServiciosdisponibles($order = Criteria::ASC) Order by the pacientemembresia_serviciosdisponibles column
 * @method PacientemembresiaQuery orderByPacientemembresiaCuponesdisponibles($order = Criteria::ASC) Order by the pacientemembresia_cuponesdisponibles column
 * @method PacientemembresiaQuery orderByPacientemembresiaEstatus($order = Criteria::ASC) Order by the pacientemembresia_estatus column
 *
 * @method PacientemembresiaQuery groupByIdpacientemembresia() Group by the idpacientemembresia column
 * @method PacientemembresiaQuery groupByIdpaciente() Group by the idpaciente column
 * @method PacientemembresiaQuery groupByIdclinica() Group by the idclinica column
 * @method PacientemembresiaQuery groupByIdmembresia() Group by the idmembresia column
 * @method PacientemembresiaQuery groupByPacientemembresiaFolio() Group by the pacientemembresia_folio column
 * @method PacientemembresiaQuery groupByPacientemembresiaFechainicio() Group by the pacientemembresia_fechainicio column
 * @method PacientemembresiaQuery groupByPacientemembresiaServiciosdisponibles() Group by the pacientemembresia_serviciosdisponibles column
 * @method PacientemembresiaQuery groupByPacientemembresiaCuponesdisponibles() Group by the pacientemembresia_cuponesdisponibles column
 * @method PacientemembresiaQuery groupByPacientemembresiaEstatus() Group by the pacientemembresia_estatus column
 *
 * @method PacientemembresiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacientemembresiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacientemembresiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacientemembresiaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method PacientemembresiaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method PacientemembresiaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method PacientemembresiaQuery leftJoinMembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Membresia relation
 * @method PacientemembresiaQuery rightJoinMembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Membresia relation
 * @method PacientemembresiaQuery innerJoinMembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Membresia relation
 *
 * @method PacientemembresiaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method PacientemembresiaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method PacientemembresiaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method PacientemembresiaQuery leftJoinPacientemembresiadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresiadetalle relation
 * @method PacientemembresiaQuery rightJoinPacientemembresiadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresiadetalle relation
 * @method PacientemembresiaQuery innerJoinPacientemembresiadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresiadetalle relation
 *
 * @method Pacientemembresia findOne(PropelPDO $con = null) Return the first Pacientemembresia matching the query
 * @method Pacientemembresia findOneOrCreate(PropelPDO $con = null) Return the first Pacientemembresia matching the query, or a new Pacientemembresia object populated from the query conditions when no match is found
 *
 * @method Pacientemembresia findOneByIdpaciente(int $idpaciente) Return the first Pacientemembresia filtered by the idpaciente column
 * @method Pacientemembresia findOneByIdclinica(int $idclinica) Return the first Pacientemembresia filtered by the idclinica column
 * @method Pacientemembresia findOneByIdmembresia(int $idmembresia) Return the first Pacientemembresia filtered by the idmembresia column
 * @method Pacientemembresia findOneByPacientemembresiaFolio(string $pacientemembresia_folio) Return the first Pacientemembresia filtered by the pacientemembresia_folio column
 * @method Pacientemembresia findOneByPacientemembresiaFechainicio(string $pacientemembresia_fechainicio) Return the first Pacientemembresia filtered by the pacientemembresia_fechainicio column
 * @method Pacientemembresia findOneByPacientemembresiaServiciosdisponibles(int $pacientemembresia_serviciosdisponibles) Return the first Pacientemembresia filtered by the pacientemembresia_serviciosdisponibles column
 * @method Pacientemembresia findOneByPacientemembresiaCuponesdisponibles(int $pacientemembresia_cuponesdisponibles) Return the first Pacientemembresia filtered by the pacientemembresia_cuponesdisponibles column
 * @method Pacientemembresia findOneByPacientemembresiaEstatus(string $pacientemembresia_estatus) Return the first Pacientemembresia filtered by the pacientemembresia_estatus column
 *
 * @method array findByIdpacientemembresia(int $idpacientemembresia) Return Pacientemembresia objects filtered by the idpacientemembresia column
 * @method array findByIdpaciente(int $idpaciente) Return Pacientemembresia objects filtered by the idpaciente column
 * @method array findByIdclinica(int $idclinica) Return Pacientemembresia objects filtered by the idclinica column
 * @method array findByIdmembresia(int $idmembresia) Return Pacientemembresia objects filtered by the idmembresia column
 * @method array findByPacientemembresiaFolio(string $pacientemembresia_folio) Return Pacientemembresia objects filtered by the pacientemembresia_folio column
 * @method array findByPacientemembresiaFechainicio(string $pacientemembresia_fechainicio) Return Pacientemembresia objects filtered by the pacientemembresia_fechainicio column
 * @method array findByPacientemembresiaServiciosdisponibles(int $pacientemembresia_serviciosdisponibles) Return Pacientemembresia objects filtered by the pacientemembresia_serviciosdisponibles column
 * @method array findByPacientemembresiaCuponesdisponibles(int $pacientemembresia_cuponesdisponibles) Return Pacientemembresia objects filtered by the pacientemembresia_cuponesdisponibles column
 * @method array findByPacientemembresiaEstatus(string $pacientemembresia_estatus) Return Pacientemembresia objects filtered by the pacientemembresia_estatus column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacientemembresiaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacientemembresiaQuery object.
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
            $modelName = 'Pacientemembresia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacientemembresiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacientemembresiaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacientemembresiaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacientemembresiaQuery) {
            return $criteria;
        }
        $query = new PacientemembresiaQuery(null, null, $modelAlias);

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
     * @return   Pacientemembresia|Pacientemembresia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacientemembresiaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacientemembresiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pacientemembresia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpacientemembresia($key, $con = null)
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
     * @return                 Pacientemembresia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpacientemembresia`, `idpaciente`, `idclinica`, `idmembresia`, `pacientemembresia_folio`, `pacientemembresia_fechainicio`, `pacientemembresia_serviciosdisponibles`, `pacientemembresia_cuponesdisponibles`, `pacientemembresia_estatus` FROM `pacientemembresia` WHERE `idpacientemembresia` = :p0';
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
            $obj = new Pacientemembresia();
            $obj->hydrate($row);
            PacientemembresiaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pacientemembresia|Pacientemembresia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pacientemembresia[]|mixed the list of results, formatted by the current formatter
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
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpacientemembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacientemembresia(1234); // WHERE idpacientemembresia = 1234
     * $query->filterByIdpacientemembresia(array(12, 34)); // WHERE idpacientemembresia IN (12, 34)
     * $query->filterByIdpacientemembresia(array('min' => 12)); // WHERE idpacientemembresia >= 12
     * $query->filterByIdpacientemembresia(array('max' => 12)); // WHERE idpacientemembresia <= 12
     * </code>
     *
     * @param     mixed $idpacientemembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByIdpacientemembresia($idpacientemembresia = null, $comparison = null)
    {
        if (is_array($idpacientemembresia)) {
            $useMinMax = false;
            if (isset($idpacientemembresia['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $idpacientemembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacientemembresia['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $idpacientemembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $idpacientemembresia, $comparison);
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
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the idmembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmembresia(1234); // WHERE idmembresia = 1234
     * $query->filterByIdmembresia(array(12, 34)); // WHERE idmembresia IN (12, 34)
     * $query->filterByIdmembresia(array('min' => 12)); // WHERE idmembresia >= 12
     * $query->filterByIdmembresia(array('max' => 12)); // WHERE idmembresia <= 12
     * </code>
     *
     * @see       filterByMembresia()
     *
     * @param     mixed $idmembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByIdmembresia($idmembresia = null, $comparison = null)
    {
        if (is_array($idmembresia)) {
            $useMinMax = false;
            if (isset($idmembresia['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDMEMBRESIA, $idmembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresia['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::IDMEMBRESIA, $idmembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::IDMEMBRESIA, $idmembresia, $comparison);
    }

    /**
     * Filter the query on the pacientemembresia_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiaFolio('fooValue');   // WHERE pacientemembresia_folio = 'fooValue'
     * $query->filterByPacientemembresiaFolio('%fooValue%'); // WHERE pacientemembresia_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientemembresiaFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiaFolio($pacientemembresiaFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientemembresiaFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientemembresiaFolio)) {
                $pacientemembresiaFolio = str_replace('*', '%', $pacientemembresiaFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_FOLIO, $pacientemembresiaFolio, $comparison);
    }

    /**
     * Filter the query on the pacientemembresia_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiaFechainicio('2011-03-14'); // WHERE pacientemembresia_fechainicio = '2011-03-14'
     * $query->filterByPacientemembresiaFechainicio('now'); // WHERE pacientemembresia_fechainicio = '2011-03-14'
     * $query->filterByPacientemembresiaFechainicio(array('max' => 'yesterday')); // WHERE pacientemembresia_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacientemembresiaFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiaFechainicio($pacientemembresiaFechainicio = null, $comparison = null)
    {
        if (is_array($pacientemembresiaFechainicio)) {
            $useMinMax = false;
            if (isset($pacientemembresiaFechainicio['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO, $pacientemembresiaFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacientemembresiaFechainicio['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO, $pacientemembresiaFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO, $pacientemembresiaFechainicio, $comparison);
    }

    /**
     * Filter the query on the pacientemembresia_serviciosdisponibles column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiaServiciosdisponibles(1234); // WHERE pacientemembresia_serviciosdisponibles = 1234
     * $query->filterByPacientemembresiaServiciosdisponibles(array(12, 34)); // WHERE pacientemembresia_serviciosdisponibles IN (12, 34)
     * $query->filterByPacientemembresiaServiciosdisponibles(array('min' => 12)); // WHERE pacientemembresia_serviciosdisponibles >= 12
     * $query->filterByPacientemembresiaServiciosdisponibles(array('max' => 12)); // WHERE pacientemembresia_serviciosdisponibles <= 12
     * </code>
     *
     * @param     mixed $pacientemembresiaServiciosdisponibles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiaServiciosdisponibles($pacientemembresiaServiciosdisponibles = null, $comparison = null)
    {
        if (is_array($pacientemembresiaServiciosdisponibles)) {
            $useMinMax = false;
            if (isset($pacientemembresiaServiciosdisponibles['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES, $pacientemembresiaServiciosdisponibles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacientemembresiaServiciosdisponibles['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES, $pacientemembresiaServiciosdisponibles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES, $pacientemembresiaServiciosdisponibles, $comparison);
    }

    /**
     * Filter the query on the pacientemembresia_cuponesdisponibles column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiaCuponesdisponibles(1234); // WHERE pacientemembresia_cuponesdisponibles = 1234
     * $query->filterByPacientemembresiaCuponesdisponibles(array(12, 34)); // WHERE pacientemembresia_cuponesdisponibles IN (12, 34)
     * $query->filterByPacientemembresiaCuponesdisponibles(array('min' => 12)); // WHERE pacientemembresia_cuponesdisponibles >= 12
     * $query->filterByPacientemembresiaCuponesdisponibles(array('max' => 12)); // WHERE pacientemembresia_cuponesdisponibles <= 12
     * </code>
     *
     * @param     mixed $pacientemembresiaCuponesdisponibles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiaCuponesdisponibles($pacientemembresiaCuponesdisponibles = null, $comparison = null)
    {
        if (is_array($pacientemembresiaCuponesdisponibles)) {
            $useMinMax = false;
            if (isset($pacientemembresiaCuponesdisponibles['min'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES, $pacientemembresiaCuponesdisponibles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacientemembresiaCuponesdisponibles['max'])) {
                $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES, $pacientemembresiaCuponesdisponibles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES, $pacientemembresiaCuponesdisponibles, $comparison);
    }

    /**
     * Filter the query on the pacientemembresia_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiaEstatus('fooValue');   // WHERE pacientemembresia_estatus = 'fooValue'
     * $query->filterByPacientemembresiaEstatus('%fooValue%'); // WHERE pacientemembresia_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientemembresiaEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiaEstatus($pacientemembresiaEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientemembresiaEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientemembresiaEstatus)) {
                $pacientemembresiaEstatus = str_replace('*', '%', $pacientemembresiaEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientemembresiaPeer::PACIENTEMEMBRESIA_ESTATUS, $pacientemembresiaEstatus, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return PacientemembresiaQuery The current query, for fluid interface
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
     * Filter the query by a related Membresia object
     *
     * @param   Membresia|PropelObjectCollection $membresia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMembresia($membresia, $comparison = null)
    {
        if ($membresia instanceof Membresia) {
            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDMEMBRESIA, $membresia->getIdmembresia(), $comparison);
        } elseif ($membresia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDMEMBRESIA, $membresia->toKeyValue('PrimaryKey', 'Idmembresia'), $comparison);
        } else {
            throw new PropelException('filterByMembresia() only accepts arguments of type Membresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Membresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function joinMembresia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Membresia');

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
            $this->addJoinObject($join, 'Membresia');
        }

        return $this;
    }

    /**
     * Use the Membresia relation Membresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MembresiaQuery A secondary query class using the current class as primary query
     */
    public function useMembresiaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Membresia', 'MembresiaQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
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
     * @return PacientemembresiaQuery The current query, for fluid interface
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
     * Filter the query by a related Pacientemembresiadetalle object
     *
     * @param   Pacientemembresiadetalle|PropelObjectCollection $pacientemembresiadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresiadetalle($pacientemembresiadetalle, $comparison = null)
    {
        if ($pacientemembresiadetalle instanceof Pacientemembresiadetalle) {
            return $this
                ->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $pacientemembresiadetalle->getIdpacientemembresia(), $comparison);
        } elseif ($pacientemembresiadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePacientemembresiadetalleQuery()
                ->filterByPrimaryKeys($pacientemembresiadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientemembresiadetalle() only accepts arguments of type Pacientemembresiadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientemembresiadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function joinPacientemembresiadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientemembresiadetalle');

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
            $this->addJoinObject($join, 'Pacientemembresiadetalle');
        }

        return $this;
    }

    /**
     * Use the Pacientemembresiadetalle relation Pacientemembresiadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientemembresiadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePacientemembresiadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientemembresiadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientemembresiadetalle', 'PacientemembresiadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pacientemembresia $pacientemembresia Object to remove from the list of results
     *
     * @return PacientemembresiaQuery The current query, for fluid interface
     */
    public function prune($pacientemembresia = null)
    {
        if ($pacientemembresia) {
            $this->addUsingAlias(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $pacientemembresia->getIdpacientemembresia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
