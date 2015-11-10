<?php


/**
 * Base class that represents a query for the 'egresoclinica' table.
 *
 *
 *
 * @method EgresoclinicaQuery orderByIdegresoclinica($order = Criteria::ASC) Order by the idegresoclinica column
 * @method EgresoclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method EgresoclinicaQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EgresoclinicaQuery orderByIdconcepto($order = Criteria::ASC) Order by the idconcepto column
 * @method EgresoclinicaQuery orderByEgresoclinicaFecha($order = Criteria::ASC) Order by the egresoclinica_fecha column
 * @method EgresoclinicaQuery orderByEgresoclinicaFechaegreso($order = Criteria::ASC) Order by the egresoclinica_fechaegreso column
 * @method EgresoclinicaQuery orderByEgresoclinicaCantidad($order = Criteria::ASC) Order by the egresoclinica_cantidad column
 * @method EgresoclinicaQuery orderByEgresoclinicaIva($order = Criteria::ASC) Order by the egresoclinica_iva column
 * @method EgresoclinicaQuery orderByEgresoclinicaComprobante($order = Criteria::ASC) Order by the egresoclinica_comprobante column
 * @method EgresoclinicaQuery orderByEgresoclinicaNota($order = Criteria::ASC) Order by the egresoclinica_nota column
 *
 * @method EgresoclinicaQuery groupByIdegresoclinica() Group by the idegresoclinica column
 * @method EgresoclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method EgresoclinicaQuery groupByIdempleado() Group by the idempleado column
 * @method EgresoclinicaQuery groupByIdconcepto() Group by the idconcepto column
 * @method EgresoclinicaQuery groupByEgresoclinicaFecha() Group by the egresoclinica_fecha column
 * @method EgresoclinicaQuery groupByEgresoclinicaFechaegreso() Group by the egresoclinica_fechaegreso column
 * @method EgresoclinicaQuery groupByEgresoclinicaCantidad() Group by the egresoclinica_cantidad column
 * @method EgresoclinicaQuery groupByEgresoclinicaIva() Group by the egresoclinica_iva column
 * @method EgresoclinicaQuery groupByEgresoclinicaComprobante() Group by the egresoclinica_comprobante column
 * @method EgresoclinicaQuery groupByEgresoclinicaNota() Group by the egresoclinica_nota column
 *
 * @method EgresoclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EgresoclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EgresoclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EgresoclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method EgresoclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method EgresoclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method EgresoclinicaQuery leftJoinConcepto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Concepto relation
 * @method EgresoclinicaQuery rightJoinConcepto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Concepto relation
 * @method EgresoclinicaQuery innerJoinConcepto($relationAlias = null) Adds a INNER JOIN clause to the query using the Concepto relation
 *
 * @method EgresoclinicaQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EgresoclinicaQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EgresoclinicaQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Egresoclinica findOne(PropelPDO $con = null) Return the first Egresoclinica matching the query
 * @method Egresoclinica findOneOrCreate(PropelPDO $con = null) Return the first Egresoclinica matching the query, or a new Egresoclinica object populated from the query conditions when no match is found
 *
 * @method Egresoclinica findOneByIdclinica(int $idclinica) Return the first Egresoclinica filtered by the idclinica column
 * @method Egresoclinica findOneByIdempleado(int $idempleado) Return the first Egresoclinica filtered by the idempleado column
 * @method Egresoclinica findOneByIdconcepto(int $idconcepto) Return the first Egresoclinica filtered by the idconcepto column
 * @method Egresoclinica findOneByEgresoclinicaFecha(string $egresoclinica_fecha) Return the first Egresoclinica filtered by the egresoclinica_fecha column
 * @method Egresoclinica findOneByEgresoclinicaFechaegreso(string $egresoclinica_fechaegreso) Return the first Egresoclinica filtered by the egresoclinica_fechaegreso column
 * @method Egresoclinica findOneByEgresoclinicaCantidad(string $egresoclinica_cantidad) Return the first Egresoclinica filtered by the egresoclinica_cantidad column
 * @method Egresoclinica findOneByEgresoclinicaIva(string $egresoclinica_iva) Return the first Egresoclinica filtered by the egresoclinica_iva column
 * @method Egresoclinica findOneByEgresoclinicaComprobante(string $egresoclinica_comprobante) Return the first Egresoclinica filtered by the egresoclinica_comprobante column
 * @method Egresoclinica findOneByEgresoclinicaNota(string $egresoclinica_nota) Return the first Egresoclinica filtered by the egresoclinica_nota column
 *
 * @method array findByIdegresoclinica(int $idegresoclinica) Return Egresoclinica objects filtered by the idegresoclinica column
 * @method array findByIdclinica(int $idclinica) Return Egresoclinica objects filtered by the idclinica column
 * @method array findByIdempleado(int $idempleado) Return Egresoclinica objects filtered by the idempleado column
 * @method array findByIdconcepto(int $idconcepto) Return Egresoclinica objects filtered by the idconcepto column
 * @method array findByEgresoclinicaFecha(string $egresoclinica_fecha) Return Egresoclinica objects filtered by the egresoclinica_fecha column
 * @method array findByEgresoclinicaFechaegreso(string $egresoclinica_fechaegreso) Return Egresoclinica objects filtered by the egresoclinica_fechaegreso column
 * @method array findByEgresoclinicaCantidad(string $egresoclinica_cantidad) Return Egresoclinica objects filtered by the egresoclinica_cantidad column
 * @method array findByEgresoclinicaIva(string $egresoclinica_iva) Return Egresoclinica objects filtered by the egresoclinica_iva column
 * @method array findByEgresoclinicaComprobante(string $egresoclinica_comprobante) Return Egresoclinica objects filtered by the egresoclinica_comprobante column
 * @method array findByEgresoclinicaNota(string $egresoclinica_nota) Return Egresoclinica objects filtered by the egresoclinica_nota column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEgresoclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEgresoclinicaQuery object.
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
            $modelName = 'Egresoclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EgresoclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EgresoclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EgresoclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EgresoclinicaQuery) {
            return $criteria;
        }
        $query = new EgresoclinicaQuery(null, null, $modelAlias);

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
     * @return   Egresoclinica|Egresoclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EgresoclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EgresoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Egresoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdegresoclinica($key, $con = null)
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
     * @return                 Egresoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idegresoclinica`, `idclinica`, `idempleado`, `idconcepto`, `egresoclinica_fecha`, `egresoclinica_fechaegreso`, `egresoclinica_cantidad`, `egresoclinica_iva`, `egresoclinica_comprobante`, `egresoclinica_nota` FROM `egresoclinica` WHERE `idegresoclinica` = :p0';
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
            $obj = new Egresoclinica();
            $obj->hydrate($row);
            EgresoclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Egresoclinica|Egresoclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Egresoclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idegresoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdegresoclinica(1234); // WHERE idegresoclinica = 1234
     * $query->filterByIdegresoclinica(array(12, 34)); // WHERE idegresoclinica IN (12, 34)
     * $query->filterByIdegresoclinica(array('min' => 12)); // WHERE idegresoclinica >= 12
     * $query->filterByIdegresoclinica(array('max' => 12)); // WHERE idegresoclinica <= 12
     * </code>
     *
     * @param     mixed $idegresoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdegresoclinica($idegresoclinica = null, $comparison = null)
    {
        if (is_array($idegresoclinica)) {
            $useMinMax = false;
            if (isset($idegresoclinica['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $idegresoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idegresoclinica['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $idegresoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $idegresoclinica, $comparison);
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
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::IDCLINICA, $idclinica, $comparison);
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
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idconcepto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconcepto(1234); // WHERE idconcepto = 1234
     * $query->filterByIdconcepto(array(12, 34)); // WHERE idconcepto IN (12, 34)
     * $query->filterByIdconcepto(array('min' => 12)); // WHERE idconcepto >= 12
     * $query->filterByIdconcepto(array('max' => 12)); // WHERE idconcepto <= 12
     * </code>
     *
     * @see       filterByConcepto()
     *
     * @param     mixed $idconcepto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdconcepto($idconcepto = null, $comparison = null)
    {
        if (is_array($idconcepto)) {
            $useMinMax = false;
            if (isset($idconcepto['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDCONCEPTO, $idconcepto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconcepto['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::IDCONCEPTO, $idconcepto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::IDCONCEPTO, $idconcepto, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaFecha('2011-03-14'); // WHERE egresoclinica_fecha = '2011-03-14'
     * $query->filterByEgresoclinicaFecha('now'); // WHERE egresoclinica_fecha = '2011-03-14'
     * $query->filterByEgresoclinicaFecha(array('max' => 'yesterday')); // WHERE egresoclinica_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $egresoclinicaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaFecha($egresoclinicaFecha = null, $comparison = null)
    {
        if (is_array($egresoclinicaFecha)) {
            $useMinMax = false;
            if (isset($egresoclinicaFecha['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHA, $egresoclinicaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($egresoclinicaFecha['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHA, $egresoclinicaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHA, $egresoclinicaFecha, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_fechaegreso column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaFechaegreso('2011-03-14'); // WHERE egresoclinica_fechaegreso = '2011-03-14'
     * $query->filterByEgresoclinicaFechaegreso('now'); // WHERE egresoclinica_fechaegreso = '2011-03-14'
     * $query->filterByEgresoclinicaFechaegreso(array('max' => 'yesterday')); // WHERE egresoclinica_fechaegreso < '2011-03-13'
     * </code>
     *
     * @param     mixed $egresoclinicaFechaegreso The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaFechaegreso($egresoclinicaFechaegreso = null, $comparison = null)
    {
        if (is_array($egresoclinicaFechaegreso)) {
            $useMinMax = false;
            if (isset($egresoclinicaFechaegreso['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO, $egresoclinicaFechaegreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($egresoclinicaFechaegreso['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO, $egresoclinicaFechaegreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO, $egresoclinicaFechaegreso, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaCantidad(1234); // WHERE egresoclinica_cantidad = 1234
     * $query->filterByEgresoclinicaCantidad(array(12, 34)); // WHERE egresoclinica_cantidad IN (12, 34)
     * $query->filterByEgresoclinicaCantidad(array('min' => 12)); // WHERE egresoclinica_cantidad >= 12
     * $query->filterByEgresoclinicaCantidad(array('max' => 12)); // WHERE egresoclinica_cantidad <= 12
     * </code>
     *
     * @param     mixed $egresoclinicaCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaCantidad($egresoclinicaCantidad = null, $comparison = null)
    {
        if (is_array($egresoclinicaCantidad)) {
            $useMinMax = false;
            if (isset($egresoclinicaCantidad['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD, $egresoclinicaCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($egresoclinicaCantidad['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD, $egresoclinicaCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD, $egresoclinicaCantidad, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaIva(1234); // WHERE egresoclinica_iva = 1234
     * $query->filterByEgresoclinicaIva(array(12, 34)); // WHERE egresoclinica_iva IN (12, 34)
     * $query->filterByEgresoclinicaIva(array('min' => 12)); // WHERE egresoclinica_iva >= 12
     * $query->filterByEgresoclinicaIva(array('max' => 12)); // WHERE egresoclinica_iva <= 12
     * </code>
     *
     * @param     mixed $egresoclinicaIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaIva($egresoclinicaIva = null, $comparison = null)
    {
        if (is_array($egresoclinicaIva)) {
            $useMinMax = false;
            if (isset($egresoclinicaIva['min'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_IVA, $egresoclinicaIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($egresoclinicaIva['max'])) {
                $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_IVA, $egresoclinicaIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_IVA, $egresoclinicaIva, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaComprobante('fooValue');   // WHERE egresoclinica_comprobante = 'fooValue'
     * $query->filterByEgresoclinicaComprobante('%fooValue%'); // WHERE egresoclinica_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $egresoclinicaComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaComprobante($egresoclinicaComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($egresoclinicaComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $egresoclinicaComprobante)) {
                $egresoclinicaComprobante = str_replace('*', '%', $egresoclinicaComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_COMPROBANTE, $egresoclinicaComprobante, $comparison);
    }

    /**
     * Filter the query on the egresoclinica_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByEgresoclinicaNota('fooValue');   // WHERE egresoclinica_nota = 'fooValue'
     * $query->filterByEgresoclinicaNota('%fooValue%'); // WHERE egresoclinica_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $egresoclinicaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function filterByEgresoclinicaNota($egresoclinicaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($egresoclinicaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $egresoclinicaNota)) {
                $egresoclinicaNota = str_replace('*', '%', $egresoclinicaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EgresoclinicaPeer::EGRESOCLINICA_NOTA, $egresoclinicaNota, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EgresoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return EgresoclinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Concepto object
     *
     * @param   Concepto|PropelObjectCollection $concepto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EgresoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConcepto($concepto, $comparison = null)
    {
        if ($concepto instanceof Concepto) {
            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDCONCEPTO, $concepto->getIdconcepto(), $comparison);
        } elseif ($concepto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDCONCEPTO, $concepto->toKeyValue('PrimaryKey', 'Idconcepto'), $comparison);
        } else {
            throw new PropelException('filterByConcepto() only accepts arguments of type Concepto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Concepto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function joinConcepto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Concepto');

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
            $this->addJoinObject($join, 'Concepto');
        }

        return $this;
    }

    /**
     * Use the Concepto relation Concepto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptoQuery A secondary query class using the current class as primary query
     */
    public function useConceptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConcepto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Concepto', 'ConceptoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EgresoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EgresoclinicaPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EgresoclinicaQuery The current query, for fluid interface
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
     * @param   Egresoclinica $egresoclinica Object to remove from the list of results
     *
     * @return EgresoclinicaQuery The current query, for fluid interface
     */
    public function prune($egresoclinica = null)
    {
        if ($egresoclinica) {
            $this->addUsingAlias(EgresoclinicaPeer::IDEGRESOCLINICA, $egresoclinica->getIdegresoclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
