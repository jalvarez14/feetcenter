<?php


/**
 * Base class that represents a query for the 'transferencia' table.
 *
 *
 *
 * @method TransferenciaQuery orderByIdtransferencia($order = Criteria::ASC) Order by the idtransferencia column
 * @method TransferenciaQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method TransferenciaQuery orderByIdempleadoreceptor($order = Criteria::ASC) Order by the idempleadoreceptor column
 * @method TransferenciaQuery orderByIdclinicaremitente($order = Criteria::ASC) Order by the idclinicaremitente column
 * @method TransferenciaQuery orderByIdclinicadestinataria($order = Criteria::ASC) Order by the idclinicadestinataria column
 * @method TransferenciaQuery orderByTransferenciaCreadaen($order = Criteria::ASC) Order by the transferencia_creadaen column
 * @method TransferenciaQuery orderByTransferenciaEstatus($order = Criteria::ASC) Order by the transferencia_estatus column
 * @method TransferenciaQuery orderByTransferenciaFechamovimiento($order = Criteria::ASC) Order by the transferencia_fechamovimiento column
 * @method TransferenciaQuery orderByTransferenciaComprobante($order = Criteria::ASC) Order by the transferencia_comprobante column
 * @method TransferenciaQuery orderByTransferenciaNota($order = Criteria::ASC) Order by the transferencia_nota column
 *
 * @method TransferenciaQuery groupByIdtransferencia() Group by the idtransferencia column
 * @method TransferenciaQuery groupByIdempleado() Group by the idempleado column
 * @method TransferenciaQuery groupByIdempleadoreceptor() Group by the idempleadoreceptor column
 * @method TransferenciaQuery groupByIdclinicaremitente() Group by the idclinicaremitente column
 * @method TransferenciaQuery groupByIdclinicadestinataria() Group by the idclinicadestinataria column
 * @method TransferenciaQuery groupByTransferenciaCreadaen() Group by the transferencia_creadaen column
 * @method TransferenciaQuery groupByTransferenciaEstatus() Group by the transferencia_estatus column
 * @method TransferenciaQuery groupByTransferenciaFechamovimiento() Group by the transferencia_fechamovimiento column
 * @method TransferenciaQuery groupByTransferenciaComprobante() Group by the transferencia_comprobante column
 * @method TransferenciaQuery groupByTransferenciaNota() Group by the transferencia_nota column
 *
 * @method TransferenciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TransferenciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TransferenciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TransferenciaQuery leftJoinClinicaRelatedByIdclinicadestinataria($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClinicaRelatedByIdclinicadestinataria relation
 * @method TransferenciaQuery rightJoinClinicaRelatedByIdclinicadestinataria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClinicaRelatedByIdclinicadestinataria relation
 * @method TransferenciaQuery innerJoinClinicaRelatedByIdclinicadestinataria($relationAlias = null) Adds a INNER JOIN clause to the query using the ClinicaRelatedByIdclinicadestinataria relation
 *
 * @method TransferenciaQuery leftJoinClinicaRelatedByIdclinicaremitente($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClinicaRelatedByIdclinicaremitente relation
 * @method TransferenciaQuery rightJoinClinicaRelatedByIdclinicaremitente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClinicaRelatedByIdclinicaremitente relation
 * @method TransferenciaQuery innerJoinClinicaRelatedByIdclinicaremitente($relationAlias = null) Adds a INNER JOIN clause to the query using the ClinicaRelatedByIdclinicaremitente relation
 *
 * @method TransferenciaQuery leftJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method TransferenciaQuery rightJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method TransferenciaQuery innerJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 *
 * @method TransferenciaQuery leftJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 * @method TransferenciaQuery rightJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 * @method TransferenciaQuery innerJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 *
 * @method TransferenciaQuery leftJoinTransferenciadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transferenciadetalle relation
 * @method TransferenciaQuery rightJoinTransferenciadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transferenciadetalle relation
 * @method TransferenciaQuery innerJoinTransferenciadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Transferenciadetalle relation
 *
 * @method Transferencia findOne(PropelPDO $con = null) Return the first Transferencia matching the query
 * @method Transferencia findOneOrCreate(PropelPDO $con = null) Return the first Transferencia matching the query, or a new Transferencia object populated from the query conditions when no match is found
 *
 * @method Transferencia findOneByIdempleado(int $idempleado) Return the first Transferencia filtered by the idempleado column
 * @method Transferencia findOneByIdempleadoreceptor(int $idempleadoreceptor) Return the first Transferencia filtered by the idempleadoreceptor column
 * @method Transferencia findOneByIdclinicaremitente(int $idclinicaremitente) Return the first Transferencia filtered by the idclinicaremitente column
 * @method Transferencia findOneByIdclinicadestinataria(int $idclinicadestinataria) Return the first Transferencia filtered by the idclinicadestinataria column
 * @method Transferencia findOneByTransferenciaCreadaen(string $transferencia_creadaen) Return the first Transferencia filtered by the transferencia_creadaen column
 * @method Transferencia findOneByTransferenciaEstatus(string $transferencia_estatus) Return the first Transferencia filtered by the transferencia_estatus column
 * @method Transferencia findOneByTransferenciaFechamovimiento(string $transferencia_fechamovimiento) Return the first Transferencia filtered by the transferencia_fechamovimiento column
 * @method Transferencia findOneByTransferenciaComprobante(string $transferencia_comprobante) Return the first Transferencia filtered by the transferencia_comprobante column
 * @method Transferencia findOneByTransferenciaNota(string $transferencia_nota) Return the first Transferencia filtered by the transferencia_nota column
 *
 * @method array findByIdtransferencia(int $idtransferencia) Return Transferencia objects filtered by the idtransferencia column
 * @method array findByIdempleado(int $idempleado) Return Transferencia objects filtered by the idempleado column
 * @method array findByIdempleadoreceptor(int $idempleadoreceptor) Return Transferencia objects filtered by the idempleadoreceptor column
 * @method array findByIdclinicaremitente(int $idclinicaremitente) Return Transferencia objects filtered by the idclinicaremitente column
 * @method array findByIdclinicadestinataria(int $idclinicadestinataria) Return Transferencia objects filtered by the idclinicadestinataria column
 * @method array findByTransferenciaCreadaen(string $transferencia_creadaen) Return Transferencia objects filtered by the transferencia_creadaen column
 * @method array findByTransferenciaEstatus(string $transferencia_estatus) Return Transferencia objects filtered by the transferencia_estatus column
 * @method array findByTransferenciaFechamovimiento(string $transferencia_fechamovimiento) Return Transferencia objects filtered by the transferencia_fechamovimiento column
 * @method array findByTransferenciaComprobante(string $transferencia_comprobante) Return Transferencia objects filtered by the transferencia_comprobante column
 * @method array findByTransferenciaNota(string $transferencia_nota) Return Transferencia objects filtered by the transferencia_nota column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferenciaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTransferenciaQuery object.
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
            $modelName = 'Transferencia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TransferenciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TransferenciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TransferenciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TransferenciaQuery) {
            return $criteria;
        }
        $query = new TransferenciaQuery(null, null, $modelAlias);

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
     * @return   Transferencia|Transferencia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TransferenciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Transferencia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtransferencia($key, $con = null)
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
     * @return                 Transferencia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtransferencia`, `idempleado`, `idempleadoreceptor`, `idclinicaremitente`, `idclinicadestinataria`, `transferencia_creadaen`, `transferencia_estatus`, `transferencia_fechamovimiento`, `transferencia_comprobante`, `transferencia_nota` FROM `transferencia` WHERE `idtransferencia` = :p0';
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
            $obj = new Transferencia();
            $obj->hydrate($row);
            TransferenciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Transferencia|Transferencia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Transferencia[]|mixed the list of results, formatted by the current formatter
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
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtransferencia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtransferencia(1234); // WHERE idtransferencia = 1234
     * $query->filterByIdtransferencia(array(12, 34)); // WHERE idtransferencia IN (12, 34)
     * $query->filterByIdtransferencia(array('min' => 12)); // WHERE idtransferencia >= 12
     * $query->filterByIdtransferencia(array('max' => 12)); // WHERE idtransferencia <= 12
     * </code>
     *
     * @param     mixed $idtransferencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdtransferencia($idtransferencia = null, $comparison = null)
    {
        if (is_array($idtransferencia)) {
            $useMinMax = false;
            if (isset($idtransferencia['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtransferencia['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia, $comparison);
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
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idempleadoreceptor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoreceptor(1234); // WHERE idempleadoreceptor = 1234
     * $query->filterByIdempleadoreceptor(array(12, 34)); // WHERE idempleadoreceptor IN (12, 34)
     * $query->filterByIdempleadoreceptor(array('min' => 12)); // WHERE idempleadoreceptor >= 12
     * $query->filterByIdempleadoreceptor(array('max' => 12)); // WHERE idempleadoreceptor <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadoreceptor()
     *
     * @param     mixed $idempleadoreceptor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdempleadoreceptor($idempleadoreceptor = null, $comparison = null)
    {
        if (is_array($idempleadoreceptor)) {
            $useMinMax = false;
            if (isset($idempleadoreceptor['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoreceptor['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor, $comparison);
    }

    /**
     * Filter the query on the idclinicaremitente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclinicaremitente(1234); // WHERE idclinicaremitente = 1234
     * $query->filterByIdclinicaremitente(array(12, 34)); // WHERE idclinicaremitente IN (12, 34)
     * $query->filterByIdclinicaremitente(array('min' => 12)); // WHERE idclinicaremitente >= 12
     * $query->filterByIdclinicaremitente(array('max' => 12)); // WHERE idclinicaremitente <= 12
     * </code>
     *
     * @see       filterByClinicaRelatedByIdclinicaremitente()
     *
     * @param     mixed $idclinicaremitente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdclinicaremitente($idclinicaremitente = null, $comparison = null)
    {
        if (is_array($idclinicaremitente)) {
            $useMinMax = false;
            if (isset($idclinicaremitente['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDCLINICAREMITENTE, $idclinicaremitente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinicaremitente['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDCLINICAREMITENTE, $idclinicaremitente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDCLINICAREMITENTE, $idclinicaremitente, $comparison);
    }

    /**
     * Filter the query on the idclinicadestinataria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclinicadestinataria(1234); // WHERE idclinicadestinataria = 1234
     * $query->filterByIdclinicadestinataria(array(12, 34)); // WHERE idclinicadestinataria IN (12, 34)
     * $query->filterByIdclinicadestinataria(array('min' => 12)); // WHERE idclinicadestinataria >= 12
     * $query->filterByIdclinicadestinataria(array('max' => 12)); // WHERE idclinicadestinataria <= 12
     * </code>
     *
     * @see       filterByClinicaRelatedByIdclinicadestinataria()
     *
     * @param     mixed $idclinicadestinataria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdclinicadestinataria($idclinicadestinataria = null, $comparison = null)
    {
        if (is_array($idclinicadestinataria)) {
            $useMinMax = false;
            if (isset($idclinicadestinataria['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDCLINICADESTINATARIA, $idclinicadestinataria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinicadestinataria['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDCLINICADESTINATARIA, $idclinicadestinataria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDCLINICADESTINATARIA, $idclinicadestinataria, $comparison);
    }

    /**
     * Filter the query on the transferencia_creadaen column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaCreadaen('2011-03-14'); // WHERE transferencia_creadaen = '2011-03-14'
     * $query->filterByTransferenciaCreadaen('now'); // WHERE transferencia_creadaen = '2011-03-14'
     * $query->filterByTransferenciaCreadaen(array('max' => 'yesterday')); // WHERE transferencia_creadaen < '2011-03-13'
     * </code>
     *
     * @param     mixed $transferenciaCreadaen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaCreadaen($transferenciaCreadaen = null, $comparison = null)
    {
        if (is_array($transferenciaCreadaen)) {
            $useMinMax = false;
            if (isset($transferenciaCreadaen['min'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_CREADAEN, $transferenciaCreadaen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferenciaCreadaen['max'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_CREADAEN, $transferenciaCreadaen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_CREADAEN, $transferenciaCreadaen, $comparison);
    }

    /**
     * Filter the query on the transferencia_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaEstatus('fooValue');   // WHERE transferencia_estatus = 'fooValue'
     * $query->filterByTransferenciaEstatus('%fooValue%'); // WHERE transferencia_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transferenciaEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaEstatus($transferenciaEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transferenciaEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transferenciaEstatus)) {
                $transferenciaEstatus = str_replace('*', '%', $transferenciaEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_ESTATUS, $transferenciaEstatus, $comparison);
    }

    /**
     * Filter the query on the transferencia_fechamovimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaFechamovimiento('2011-03-14'); // WHERE transferencia_fechamovimiento = '2011-03-14'
     * $query->filterByTransferenciaFechamovimiento('now'); // WHERE transferencia_fechamovimiento = '2011-03-14'
     * $query->filterByTransferenciaFechamovimiento(array('max' => 'yesterday')); // WHERE transferencia_fechamovimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $transferenciaFechamovimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaFechamovimiento($transferenciaFechamovimiento = null, $comparison = null)
    {
        if (is_array($transferenciaFechamovimiento)) {
            $useMinMax = false;
            if (isset($transferenciaFechamovimiento['min'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO, $transferenciaFechamovimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferenciaFechamovimiento['max'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO, $transferenciaFechamovimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO, $transferenciaFechamovimiento, $comparison);
    }

    /**
     * Filter the query on the transferencia_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaComprobante('fooValue');   // WHERE transferencia_comprobante = 'fooValue'
     * $query->filterByTransferenciaComprobante('%fooValue%'); // WHERE transferencia_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transferenciaComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaComprobante($transferenciaComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transferenciaComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transferenciaComprobante)) {
                $transferenciaComprobante = str_replace('*', '%', $transferenciaComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_COMPROBANTE, $transferenciaComprobante, $comparison);
    }

    /**
     * Filter the query on the transferencia_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaNota('fooValue');   // WHERE transferencia_nota = 'fooValue'
     * $query->filterByTransferenciaNota('%fooValue%'); // WHERE transferencia_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transferenciaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaNota($transferenciaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transferenciaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transferenciaNota)) {
                $transferenciaNota = str_replace('*', '%', $transferenciaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_NOTA, $transferenciaNota, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinicaRelatedByIdclinicadestinataria($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDCLINICADESTINATARIA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDCLINICADESTINATARIA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
        } else {
            throw new PropelException('filterByClinicaRelatedByIdclinicadestinataria() only accepts arguments of type Clinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClinicaRelatedByIdclinicadestinataria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinClinicaRelatedByIdclinicadestinataria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClinicaRelatedByIdclinicadestinataria');

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
            $this->addJoinObject($join, 'ClinicaRelatedByIdclinicadestinataria');
        }

        return $this;
    }

    /**
     * Use the ClinicaRelatedByIdclinicadestinataria relation Clinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClinicaQuery A secondary query class using the current class as primary query
     */
    public function useClinicaRelatedByIdclinicadestinatariaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClinicaRelatedByIdclinicadestinataria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClinicaRelatedByIdclinicadestinataria', 'ClinicaQuery');
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinicaRelatedByIdclinicaremitente($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDCLINICAREMITENTE, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDCLINICAREMITENTE, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
        } else {
            throw new PropelException('filterByClinicaRelatedByIdclinicaremitente() only accepts arguments of type Clinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClinicaRelatedByIdclinicaremitente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinClinicaRelatedByIdclinicaremitente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClinicaRelatedByIdclinicaremitente');

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
            $this->addJoinObject($join, 'ClinicaRelatedByIdclinicaremitente');
        }

        return $this;
    }

    /**
     * Use the ClinicaRelatedByIdclinicaremitente relation Clinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClinicaQuery A secondary query class using the current class as primary query
     */
    public function useClinicaRelatedByIdclinicaremitenteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClinicaRelatedByIdclinicaremitente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClinicaRelatedByIdclinicaremitente', 'ClinicaQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return TransferenciaQuery The current query, for fluid interface
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
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadoreceptor($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadoreceptor() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadoreceptor');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadoreceptor');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadoreceptor relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadoreceptorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadoreceptor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadoreceptor', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Transferenciadetalle object
     *
     * @param   Transferenciadetalle|PropelObjectCollection $transferenciadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciadetalle($transferenciadetalle, $comparison = null)
    {
        if ($transferenciadetalle instanceof Transferenciadetalle) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $transferenciadetalle->getIdtransferencia(), $comparison);
        } elseif ($transferenciadetalle instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciadetalleQuery()
                ->filterByPrimaryKeys($transferenciadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciadetalle() only accepts arguments of type Transferenciadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Transferenciadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinTransferenciadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Transferenciadetalle');

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
            $this->addJoinObject($join, 'Transferenciadetalle');
        }

        return $this;
    }

    /**
     * Use the Transferenciadetalle relation Transferenciadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciadetalleQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transferenciadetalle', 'TransferenciadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Transferencia $transferencia Object to remove from the list of results
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function prune($transferencia = null)
    {
        if ($transferencia) {
            $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $transferencia->getIdtransferencia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
