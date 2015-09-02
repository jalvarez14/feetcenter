<?php


/**
 * Base class that represents a query for the 'visita' table.
 *
 *
 *
 * @method VisitaQuery orderByIdvisita($order = Criteria::ASC) Order by the idvisita column
 * @method VisitaQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method VisitaQuery orderByIdempleadocreador($order = Criteria::ASC) Order by the idempleadocreador column
 * @method VisitaQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method VisitaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method VisitaQuery orderByVisitaTipo($order = Criteria::ASC) Order by the visita_tipo column
 * @method VisitaQuery orderByVisitaCreadaen($order = Criteria::ASC) Order by the visita_creadaen column
 * @method VisitaQuery orderByVisitaFecha($order = Criteria::ASC) Order by the visita_fecha column
 * @method VisitaQuery orderByVisitaHora($order = Criteria::ASC) Order by the visita_hora column
 * @method VisitaQuery orderByVisitaStatus($order = Criteria::ASC) Order by the visita_status column
 * @method VisitaQuery orderByVisitaEstatuspago($order = Criteria::ASC) Order by the visita_estatuspago column
 * @method VisitaQuery orderByVisitaTotal($order = Criteria::ASC) Order by the visita_total column
 * @method VisitaQuery orderByVisitaMetodopago($order = Criteria::ASC) Order by the visita_metodopago column
 * @method VisitaQuery orderByVisitaPagoreferencia($order = Criteria::ASC) Order by the visita_pagoreferencia column
 *
 * @method VisitaQuery groupByIdvisita() Group by the idvisita column
 * @method VisitaQuery groupByIdempleado() Group by the idempleado column
 * @method VisitaQuery groupByIdempleadocreador() Group by the idempleadocreador column
 * @method VisitaQuery groupByIdpaciente() Group by the idpaciente column
 * @method VisitaQuery groupByIdclinica() Group by the idclinica column
 * @method VisitaQuery groupByVisitaTipo() Group by the visita_tipo column
 * @method VisitaQuery groupByVisitaCreadaen() Group by the visita_creadaen column
 * @method VisitaQuery groupByVisitaFecha() Group by the visita_fecha column
 * @method VisitaQuery groupByVisitaHora() Group by the visita_hora column
 * @method VisitaQuery groupByVisitaStatus() Group by the visita_status column
 * @method VisitaQuery groupByVisitaEstatuspago() Group by the visita_estatuspago column
 * @method VisitaQuery groupByVisitaTotal() Group by the visita_total column
 * @method VisitaQuery groupByVisitaMetodopago() Group by the visita_metodopago column
 * @method VisitaQuery groupByVisitaPagoreferencia() Group by the visita_pagoreferencia column
 *
 * @method VisitaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VisitaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VisitaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VisitaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method VisitaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method VisitaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method VisitaQuery leftJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method VisitaQuery rightJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method VisitaQuery innerJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 *
 * @method VisitaQuery leftJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 * @method VisitaQuery rightJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 * @method VisitaQuery innerJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 *
 * @method VisitaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method VisitaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method VisitaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method VisitaQuery leftJoinVisitadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visitadetalle relation
 * @method VisitaQuery rightJoinVisitadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visitadetalle relation
 * @method VisitaQuery innerJoinVisitadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Visitadetalle relation
 *
 * @method Visita findOne(PropelPDO $con = null) Return the first Visita matching the query
 * @method Visita findOneOrCreate(PropelPDO $con = null) Return the first Visita matching the query, or a new Visita object populated from the query conditions when no match is found
 *
 * @method Visita findOneByIdempleado(int $idempleado) Return the first Visita filtered by the idempleado column
 * @method Visita findOneByIdempleadocreador(int $idempleadocreador) Return the first Visita filtered by the idempleadocreador column
 * @method Visita findOneByIdpaciente(int $idpaciente) Return the first Visita filtered by the idpaciente column
 * @method Visita findOneByIdclinica(int $idclinica) Return the first Visita filtered by the idclinica column
 * @method Visita findOneByVisitaTipo(string $visita_tipo) Return the first Visita filtered by the visita_tipo column
 * @method Visita findOneByVisitaCreadaen(string $visita_creadaen) Return the first Visita filtered by the visita_creadaen column
 * @method Visita findOneByVisitaFecha(string $visita_fecha) Return the first Visita filtered by the visita_fecha column
 * @method Visita findOneByVisitaHora(string $visita_hora) Return the first Visita filtered by the visita_hora column
 * @method Visita findOneByVisitaStatus(string $visita_status) Return the first Visita filtered by the visita_status column
 * @method Visita findOneByVisitaEstatuspago(string $visita_estatuspago) Return the first Visita filtered by the visita_estatuspago column
 * @method Visita findOneByVisitaTotal(string $visita_total) Return the first Visita filtered by the visita_total column
 * @method Visita findOneByVisitaMetodopago(string $visita_metodopago) Return the first Visita filtered by the visita_metodopago column
 * @method Visita findOneByVisitaPagoreferencia(string $visita_pagoreferencia) Return the first Visita filtered by the visita_pagoreferencia column
 *
 * @method array findByIdvisita(int $idvisita) Return Visita objects filtered by the idvisita column
 * @method array findByIdempleado(int $idempleado) Return Visita objects filtered by the idempleado column
 * @method array findByIdempleadocreador(int $idempleadocreador) Return Visita objects filtered by the idempleadocreador column
 * @method array findByIdpaciente(int $idpaciente) Return Visita objects filtered by the idpaciente column
 * @method array findByIdclinica(int $idclinica) Return Visita objects filtered by the idclinica column
 * @method array findByVisitaTipo(string $visita_tipo) Return Visita objects filtered by the visita_tipo column
 * @method array findByVisitaCreadaen(string $visita_creadaen) Return Visita objects filtered by the visita_creadaen column
 * @method array findByVisitaFecha(string $visita_fecha) Return Visita objects filtered by the visita_fecha column
 * @method array findByVisitaHora(string $visita_hora) Return Visita objects filtered by the visita_hora column
 * @method array findByVisitaStatus(string $visita_status) Return Visita objects filtered by the visita_status column
 * @method array findByVisitaEstatuspago(string $visita_estatuspago) Return Visita objects filtered by the visita_estatuspago column
 * @method array findByVisitaTotal(string $visita_total) Return Visita objects filtered by the visita_total column
 * @method array findByVisitaMetodopago(string $visita_metodopago) Return Visita objects filtered by the visita_metodopago column
 * @method array findByVisitaPagoreferencia(string $visita_pagoreferencia) Return Visita objects filtered by the visita_pagoreferencia column
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseVisitaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVisitaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'feetcenter';
        }
        if (null === $modelName) {
            $modelName = 'Visita';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VisitaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VisitaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VisitaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VisitaQuery) {
            return $criteria;
        }
        $query = new VisitaQuery(null, null, $modelAlias);

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
     * @return   Visita|Visita[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VisitaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Visita A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdvisita($key, $con = null)
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
     * @return                 Visita A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idvisita`, `idempleado`, `idempleadocreador`, `idpaciente`, `idclinica`, `visita_tipo`, `visita_creadaen`, `visita_fecha`, `visita_hora`, `visita_status`, `visita_estatuspago`, `visita_total`, `visita_metodopago`, `visita_pagoreferencia` FROM `visita` WHERE `idvisita` = :p0';
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
            $obj = new Visita();
            $obj->hydrate($row);
            VisitaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Visita|Visita[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Visita[]|mixed the list of results, formatted by the current formatter
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
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VisitaPeer::IDVISITA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VisitaPeer::IDVISITA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idvisita column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisita(1234); // WHERE idvisita = 1234
     * $query->filterByIdvisita(array(12, 34)); // WHERE idvisita IN (12, 34)
     * $query->filterByIdvisita(array('min' => 12)); // WHERE idvisita >= 12
     * $query->filterByIdvisita(array('max' => 12)); // WHERE idvisita <= 12
     * </code>
     *
     * @param     mixed $idvisita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByIdvisita($idvisita = null, $comparison = null)
    {
        if (is_array($idvisita)) {
            $useMinMax = false;
            if (isset($idvisita['min'])) {
                $this->addUsingAlias(VisitaPeer::IDVISITA, $idvisita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisita['max'])) {
                $this->addUsingAlias(VisitaPeer::IDVISITA, $idvisita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::IDVISITA, $idvisita, $comparison);
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
     * @see       filterByEmpleadoRelatedByIdempleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(VisitaPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(VisitaPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idempleadocreador column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadocreador(1234); // WHERE idempleadocreador = 1234
     * $query->filterByIdempleadocreador(array(12, 34)); // WHERE idempleadocreador IN (12, 34)
     * $query->filterByIdempleadocreador(array('min' => 12)); // WHERE idempleadocreador >= 12
     * $query->filterByIdempleadocreador(array('max' => 12)); // WHERE idempleadocreador <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadocreador()
     *
     * @param     mixed $idempleadocreador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByIdempleadocreador($idempleadocreador = null, $comparison = null)
    {
        if (is_array($idempleadocreador)) {
            $useMinMax = false;
            if (isset($idempleadocreador['min'])) {
                $this->addUsingAlias(VisitaPeer::IDEMPLEADOCREADOR, $idempleadocreador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadocreador['max'])) {
                $this->addUsingAlias(VisitaPeer::IDEMPLEADOCREADOR, $idempleadocreador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::IDEMPLEADOCREADOR, $idempleadocreador, $comparison);
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
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(VisitaPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(VisitaPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(VisitaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(VisitaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the visita_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaTipo('fooValue');   // WHERE visita_tipo = 'fooValue'
     * $query->filterByVisitaTipo('%fooValue%'); // WHERE visita_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaTipo($visitaTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaTipo)) {
                $visitaTipo = str_replace('*', '%', $visitaTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_TIPO, $visitaTipo, $comparison);
    }

    /**
     * Filter the query on the visita_creadaen column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaCreadaen('2011-03-14'); // WHERE visita_creadaen = '2011-03-14'
     * $query->filterByVisitaCreadaen('now'); // WHERE visita_creadaen = '2011-03-14'
     * $query->filterByVisitaCreadaen(array('max' => 'yesterday')); // WHERE visita_creadaen < '2011-03-13'
     * </code>
     *
     * @param     mixed $visitaCreadaen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaCreadaen($visitaCreadaen = null, $comparison = null)
    {
        if (is_array($visitaCreadaen)) {
            $useMinMax = false;
            if (isset($visitaCreadaen['min'])) {
                $this->addUsingAlias(VisitaPeer::VISITA_CREADAEN, $visitaCreadaen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitaCreadaen['max'])) {
                $this->addUsingAlias(VisitaPeer::VISITA_CREADAEN, $visitaCreadaen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_CREADAEN, $visitaCreadaen, $comparison);
    }

    /**
     * Filter the query on the visita_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaFecha('fooValue');   // WHERE visita_fecha = 'fooValue'
     * $query->filterByVisitaFecha('%fooValue%'); // WHERE visita_fecha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaFecha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaFecha($visitaFecha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaFecha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaFecha)) {
                $visitaFecha = str_replace('*', '%', $visitaFecha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_FECHA, $visitaFecha, $comparison);
    }

    /**
     * Filter the query on the visita_hora column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaHora('fooValue');   // WHERE visita_hora = 'fooValue'
     * $query->filterByVisitaHora('%fooValue%'); // WHERE visita_hora LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaHora The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaHora($visitaHora = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaHora)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaHora)) {
                $visitaHora = str_replace('*', '%', $visitaHora);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_HORA, $visitaHora, $comparison);
    }

    /**
     * Filter the query on the visita_status column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaStatus('fooValue');   // WHERE visita_status = 'fooValue'
     * $query->filterByVisitaStatus('%fooValue%'); // WHERE visita_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaStatus($visitaStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaStatus)) {
                $visitaStatus = str_replace('*', '%', $visitaStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_STATUS, $visitaStatus, $comparison);
    }

    /**
     * Filter the query on the visita_estatuspago column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaEstatuspago('fooValue');   // WHERE visita_estatuspago = 'fooValue'
     * $query->filterByVisitaEstatuspago('%fooValue%'); // WHERE visita_estatuspago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaEstatuspago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaEstatuspago($visitaEstatuspago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaEstatuspago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaEstatuspago)) {
                $visitaEstatuspago = str_replace('*', '%', $visitaEstatuspago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_ESTATUSPAGO, $visitaEstatuspago, $comparison);
    }

    /**
     * Filter the query on the visita_total column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaTotal(1234); // WHERE visita_total = 1234
     * $query->filterByVisitaTotal(array(12, 34)); // WHERE visita_total IN (12, 34)
     * $query->filterByVisitaTotal(array('min' => 12)); // WHERE visita_total >= 12
     * $query->filterByVisitaTotal(array('max' => 12)); // WHERE visita_total <= 12
     * </code>
     *
     * @param     mixed $visitaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaTotal($visitaTotal = null, $comparison = null)
    {
        if (is_array($visitaTotal)) {
            $useMinMax = false;
            if (isset($visitaTotal['min'])) {
                $this->addUsingAlias(VisitaPeer::VISITA_TOTAL, $visitaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitaTotal['max'])) {
                $this->addUsingAlias(VisitaPeer::VISITA_TOTAL, $visitaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_TOTAL, $visitaTotal, $comparison);
    }

    /**
     * Filter the query on the visita_metodopago column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaMetodopago('fooValue');   // WHERE visita_metodopago = 'fooValue'
     * $query->filterByVisitaMetodopago('%fooValue%'); // WHERE visita_metodopago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaMetodopago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaMetodopago($visitaMetodopago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaMetodopago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaMetodopago)) {
                $visitaMetodopago = str_replace('*', '%', $visitaMetodopago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_METODOPAGO, $visitaMetodopago, $comparison);
    }

    /**
     * Filter the query on the visita_pagoreferencia column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitaPagoreferencia('fooValue');   // WHERE visita_pagoreferencia = 'fooValue'
     * $query->filterByVisitaPagoreferencia('%fooValue%'); // WHERE visita_pagoreferencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitaPagoreferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function filterByVisitaPagoreferencia($visitaPagoreferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitaPagoreferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitaPagoreferencia)) {
                $visitaPagoreferencia = str_replace('*', '%', $visitaPagoreferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitaPeer::VISITA_PAGOREFERENCIA, $visitaPagoreferencia, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(VisitaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return VisitaQuery The current query, for fluid interface
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
     * @return                 VisitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(VisitaPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitaPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleado');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleado');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleado', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadocreador($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(VisitaPeer::IDEMPLEADOCREADOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitaPeer::IDEMPLEADOCREADOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadocreador() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadocreador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadocreador');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadocreador');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadocreador relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadocreadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadocreador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadocreador', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(VisitaPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitaPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
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
     * @return VisitaQuery The current query, for fluid interface
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
     * Filter the query by a related Visitadetalle object
     *
     * @param   Visitadetalle|PropelObjectCollection $visitadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitadetalle($visitadetalle, $comparison = null)
    {
        if ($visitadetalle instanceof Visitadetalle) {
            return $this
                ->addUsingAlias(VisitaPeer::IDVISITA, $visitadetalle->getIdvisita(), $comparison);
        } elseif ($visitadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVisitadetalleQuery()
                ->filterByPrimaryKeys($visitadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVisitadetalle() only accepts arguments of type Visitadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Visitadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function joinVisitadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Visitadetalle');

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
            $this->addJoinObject($join, 'Visitadetalle');
        }

        return $this;
    }

    /**
     * Use the Visitadetalle relation Visitadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVisitadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisitadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visitadetalle', 'VisitadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Visita $visita Object to remove from the list of results
     *
     * @return VisitaQuery The current query, for fluid interface
     */
    public function prune($visita = null)
    {
        if ($visita) {
            $this->addUsingAlias(VisitaPeer::IDVISITA, $visita->getIdvisita(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
