<?php


/**
 * Base class that represents a query for the 'faltante' table.
 *
 *
 *
 * @method FaltanteQuery orderByIdfaltante($order = Criteria::ASC) Order by the idfaltante column
 * @method FaltanteQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method FaltanteQuery orderByIdempleadogenerador($order = Criteria::ASC) Order by the idempleadogenerador column
 * @method FaltanteQuery orderByIdempleadodeudor($order = Criteria::ASC) Order by the idempleadodeudor column
 * @method FaltanteQuery orderByFaltanteCreadaen($order = Criteria::ASC) Order by the faltante_creadaen column
 * @method FaltanteQuery orderByFaltanteFecha($order = Criteria::ASC) Order by the faltante_fecha column
 * @method FaltanteQuery orderByFaltanteHora($order = Criteria::ASC) Order by the faltante_hora column
 * @method FaltanteQuery orderByFaltanteCantidad($order = Criteria::ASC) Order by the faltante_cantidad column
 * @method FaltanteQuery orderByFaltanteComentario($order = Criteria::ASC) Order by the faltante_comentario column
 * @method FaltanteQuery orderByFaltanteComprobante($order = Criteria::ASC) Order by the faltante_comprobante column
 * @method FaltanteQuery orderByFaltanteComprobantefirmado($order = Criteria::ASC) Order by the faltante_comprobantefirmado column
 *
 * @method FaltanteQuery groupByIdfaltante() Group by the idfaltante column
 * @method FaltanteQuery groupByIdclinica() Group by the idclinica column
 * @method FaltanteQuery groupByIdempleadogenerador() Group by the idempleadogenerador column
 * @method FaltanteQuery groupByIdempleadodeudor() Group by the idempleadodeudor column
 * @method FaltanteQuery groupByFaltanteCreadaen() Group by the faltante_creadaen column
 * @method FaltanteQuery groupByFaltanteFecha() Group by the faltante_fecha column
 * @method FaltanteQuery groupByFaltanteHora() Group by the faltante_hora column
 * @method FaltanteQuery groupByFaltanteCantidad() Group by the faltante_cantidad column
 * @method FaltanteQuery groupByFaltanteComentario() Group by the faltante_comentario column
 * @method FaltanteQuery groupByFaltanteComprobante() Group by the faltante_comprobante column
 * @method FaltanteQuery groupByFaltanteComprobantefirmado() Group by the faltante_comprobantefirmado column
 *
 * @method FaltanteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FaltanteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FaltanteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FaltanteQuery leftJoinEmpleadoRelatedByIdempleadodeudor($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadodeudor relation
 * @method FaltanteQuery rightJoinEmpleadoRelatedByIdempleadodeudor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadodeudor relation
 * @method FaltanteQuery innerJoinEmpleadoRelatedByIdempleadodeudor($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadodeudor relation
 *
 * @method FaltanteQuery leftJoinEmpleadoRelatedByIdempleadogenerador($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadogenerador relation
 * @method FaltanteQuery rightJoinEmpleadoRelatedByIdempleadogenerador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadogenerador relation
 * @method FaltanteQuery innerJoinEmpleadoRelatedByIdempleadogenerador($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadogenerador relation
 *
 * @method Faltante findOne(PropelPDO $con = null) Return the first Faltante matching the query
 * @method Faltante findOneOrCreate(PropelPDO $con = null) Return the first Faltante matching the query, or a new Faltante object populated from the query conditions when no match is found
 *
 * @method Faltante findOneByIdclinica(int $idclinica) Return the first Faltante filtered by the idclinica column
 * @method Faltante findOneByIdempleadogenerador(int $idempleadogenerador) Return the first Faltante filtered by the idempleadogenerador column
 * @method Faltante findOneByIdempleadodeudor(int $idempleadodeudor) Return the first Faltante filtered by the idempleadodeudor column
 * @method Faltante findOneByFaltanteCreadaen(string $faltante_creadaen) Return the first Faltante filtered by the faltante_creadaen column
 * @method Faltante findOneByFaltanteFecha(string $faltante_fecha) Return the first Faltante filtered by the faltante_fecha column
 * @method Faltante findOneByFaltanteHora(string $faltante_hora) Return the first Faltante filtered by the faltante_hora column
 * @method Faltante findOneByFaltanteCantidad(string $faltante_cantidad) Return the first Faltante filtered by the faltante_cantidad column
 * @method Faltante findOneByFaltanteComentario(string $faltante_comentario) Return the first Faltante filtered by the faltante_comentario column
 * @method Faltante findOneByFaltanteComprobante(string $faltante_comprobante) Return the first Faltante filtered by the faltante_comprobante column
 * @method Faltante findOneByFaltanteComprobantefirmado(string $faltante_comprobantefirmado) Return the first Faltante filtered by the faltante_comprobantefirmado column
 *
 * @method array findByIdfaltante(int $idfaltante) Return Faltante objects filtered by the idfaltante column
 * @method array findByIdclinica(int $idclinica) Return Faltante objects filtered by the idclinica column
 * @method array findByIdempleadogenerador(int $idempleadogenerador) Return Faltante objects filtered by the idempleadogenerador column
 * @method array findByIdempleadodeudor(int $idempleadodeudor) Return Faltante objects filtered by the idempleadodeudor column
 * @method array findByFaltanteCreadaen(string $faltante_creadaen) Return Faltante objects filtered by the faltante_creadaen column
 * @method array findByFaltanteFecha(string $faltante_fecha) Return Faltante objects filtered by the faltante_fecha column
 * @method array findByFaltanteHora(string $faltante_hora) Return Faltante objects filtered by the faltante_hora column
 * @method array findByFaltanteCantidad(string $faltante_cantidad) Return Faltante objects filtered by the faltante_cantidad column
 * @method array findByFaltanteComentario(string $faltante_comentario) Return Faltante objects filtered by the faltante_comentario column
 * @method array findByFaltanteComprobante(string $faltante_comprobante) Return Faltante objects filtered by the faltante_comprobante column
 * @method array findByFaltanteComprobantefirmado(string $faltante_comprobantefirmado) Return Faltante objects filtered by the faltante_comprobantefirmado column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseFaltanteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFaltanteQuery object.
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
            $modelName = 'Faltante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FaltanteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FaltanteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FaltanteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FaltanteQuery) {
            return $criteria;
        }
        $query = new FaltanteQuery(null, null, $modelAlias);

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
     * @return   Faltante|Faltante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FaltantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FaltantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Faltante A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdfaltante($key, $con = null)
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
     * @return                 Faltante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idfaltante`, `idclinica`, `idempleadogenerador`, `idempleadodeudor`, `faltante_creadaen`, `faltante_fecha`, `faltante_hora`, `faltante_cantidad`, `faltante_comentario`, `faltante_comprobante`, `faltante_comprobantefirmado` FROM `faltante` WHERE `idfaltante` = :p0';
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
            $obj = new Faltante();
            $obj->hydrate($row);
            FaltantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Faltante|Faltante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Faltante[]|mixed the list of results, formatted by the current formatter
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
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FaltantePeer::IDFALTANTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FaltantePeer::IDFALTANTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idfaltante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdfaltante(1234); // WHERE idfaltante = 1234
     * $query->filterByIdfaltante(array(12, 34)); // WHERE idfaltante IN (12, 34)
     * $query->filterByIdfaltante(array('min' => 12)); // WHERE idfaltante >= 12
     * $query->filterByIdfaltante(array('max' => 12)); // WHERE idfaltante <= 12
     * </code>
     *
     * @param     mixed $idfaltante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByIdfaltante($idfaltante = null, $comparison = null)
    {
        if (is_array($idfaltante)) {
            $useMinMax = false;
            if (isset($idfaltante['min'])) {
                $this->addUsingAlias(FaltantePeer::IDFALTANTE, $idfaltante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idfaltante['max'])) {
                $this->addUsingAlias(FaltantePeer::IDFALTANTE, $idfaltante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::IDFALTANTE, $idfaltante, $comparison);
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
     * @param     mixed $idclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(FaltantePeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(FaltantePeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the idempleadogenerador column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadogenerador(1234); // WHERE idempleadogenerador = 1234
     * $query->filterByIdempleadogenerador(array(12, 34)); // WHERE idempleadogenerador IN (12, 34)
     * $query->filterByIdempleadogenerador(array('min' => 12)); // WHERE idempleadogenerador >= 12
     * $query->filterByIdempleadogenerador(array('max' => 12)); // WHERE idempleadogenerador <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadogenerador()
     *
     * @param     mixed $idempleadogenerador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByIdempleadogenerador($idempleadogenerador = null, $comparison = null)
    {
        if (is_array($idempleadogenerador)) {
            $useMinMax = false;
            if (isset($idempleadogenerador['min'])) {
                $this->addUsingAlias(FaltantePeer::IDEMPLEADOGENERADOR, $idempleadogenerador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadogenerador['max'])) {
                $this->addUsingAlias(FaltantePeer::IDEMPLEADOGENERADOR, $idempleadogenerador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::IDEMPLEADOGENERADOR, $idempleadogenerador, $comparison);
    }

    /**
     * Filter the query on the idempleadodeudor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadodeudor(1234); // WHERE idempleadodeudor = 1234
     * $query->filterByIdempleadodeudor(array(12, 34)); // WHERE idempleadodeudor IN (12, 34)
     * $query->filterByIdempleadodeudor(array('min' => 12)); // WHERE idempleadodeudor >= 12
     * $query->filterByIdempleadodeudor(array('max' => 12)); // WHERE idempleadodeudor <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadodeudor()
     *
     * @param     mixed $idempleadodeudor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByIdempleadodeudor($idempleadodeudor = null, $comparison = null)
    {
        if (is_array($idempleadodeudor)) {
            $useMinMax = false;
            if (isset($idempleadodeudor['min'])) {
                $this->addUsingAlias(FaltantePeer::IDEMPLEADODEUDOR, $idempleadodeudor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadodeudor['max'])) {
                $this->addUsingAlias(FaltantePeer::IDEMPLEADODEUDOR, $idempleadodeudor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::IDEMPLEADODEUDOR, $idempleadodeudor, $comparison);
    }

    /**
     * Filter the query on the faltante_creadaen column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteCreadaen('2011-03-14'); // WHERE faltante_creadaen = '2011-03-14'
     * $query->filterByFaltanteCreadaen('now'); // WHERE faltante_creadaen = '2011-03-14'
     * $query->filterByFaltanteCreadaen(array('max' => 'yesterday')); // WHERE faltante_creadaen < '2011-03-13'
     * </code>
     *
     * @param     mixed $faltanteCreadaen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteCreadaen($faltanteCreadaen = null, $comparison = null)
    {
        if (is_array($faltanteCreadaen)) {
            $useMinMax = false;
            if (isset($faltanteCreadaen['min'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_CREADAEN, $faltanteCreadaen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faltanteCreadaen['max'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_CREADAEN, $faltanteCreadaen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_CREADAEN, $faltanteCreadaen, $comparison);
    }

    /**
     * Filter the query on the faltante_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteFecha('2011-03-14'); // WHERE faltante_fecha = '2011-03-14'
     * $query->filterByFaltanteFecha('now'); // WHERE faltante_fecha = '2011-03-14'
     * $query->filterByFaltanteFecha(array('max' => 'yesterday')); // WHERE faltante_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $faltanteFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteFecha($faltanteFecha = null, $comparison = null)
    {
        if (is_array($faltanteFecha)) {
            $useMinMax = false;
            if (isset($faltanteFecha['min'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_FECHA, $faltanteFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faltanteFecha['max'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_FECHA, $faltanteFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_FECHA, $faltanteFecha, $comparison);
    }

    /**
     * Filter the query on the faltante_hora column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteHora('2011-03-14'); // WHERE faltante_hora = '2011-03-14'
     * $query->filterByFaltanteHora('now'); // WHERE faltante_hora = '2011-03-14'
     * $query->filterByFaltanteHora(array('max' => 'yesterday')); // WHERE faltante_hora < '2011-03-13'
     * </code>
     *
     * @param     mixed $faltanteHora The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteHora($faltanteHora = null, $comparison = null)
    {
        if (is_array($faltanteHora)) {
            $useMinMax = false;
            if (isset($faltanteHora['min'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_HORA, $faltanteHora['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faltanteHora['max'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_HORA, $faltanteHora['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_HORA, $faltanteHora, $comparison);
    }

    /**
     * Filter the query on the faltante_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteCantidad(1234); // WHERE faltante_cantidad = 1234
     * $query->filterByFaltanteCantidad(array(12, 34)); // WHERE faltante_cantidad IN (12, 34)
     * $query->filterByFaltanteCantidad(array('min' => 12)); // WHERE faltante_cantidad >= 12
     * $query->filterByFaltanteCantidad(array('max' => 12)); // WHERE faltante_cantidad <= 12
     * </code>
     *
     * @param     mixed $faltanteCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteCantidad($faltanteCantidad = null, $comparison = null)
    {
        if (is_array($faltanteCantidad)) {
            $useMinMax = false;
            if (isset($faltanteCantidad['min'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_CANTIDAD, $faltanteCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faltanteCantidad['max'])) {
                $this->addUsingAlias(FaltantePeer::FALTANTE_CANTIDAD, $faltanteCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_CANTIDAD, $faltanteCantidad, $comparison);
    }

    /**
     * Filter the query on the faltante_comentario column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteComentario('fooValue');   // WHERE faltante_comentario = 'fooValue'
     * $query->filterByFaltanteComentario('%fooValue%'); // WHERE faltante_comentario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faltanteComentario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteComentario($faltanteComentario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faltanteComentario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faltanteComentario)) {
                $faltanteComentario = str_replace('*', '%', $faltanteComentario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_COMENTARIO, $faltanteComentario, $comparison);
    }

    /**
     * Filter the query on the faltante_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteComprobante('fooValue');   // WHERE faltante_comprobante = 'fooValue'
     * $query->filterByFaltanteComprobante('%fooValue%'); // WHERE faltante_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faltanteComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteComprobante($faltanteComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faltanteComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faltanteComprobante)) {
                $faltanteComprobante = str_replace('*', '%', $faltanteComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_COMPROBANTE, $faltanteComprobante, $comparison);
    }

    /**
     * Filter the query on the faltante_comprobantefirmado column
     *
     * Example usage:
     * <code>
     * $query->filterByFaltanteComprobantefirmado('fooValue');   // WHERE faltante_comprobantefirmado = 'fooValue'
     * $query->filterByFaltanteComprobantefirmado('%fooValue%'); // WHERE faltante_comprobantefirmado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faltanteComprobantefirmado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function filterByFaltanteComprobantefirmado($faltanteComprobantefirmado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faltanteComprobantefirmado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faltanteComprobantefirmado)) {
                $faltanteComprobantefirmado = str_replace('*', '%', $faltanteComprobantefirmado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaltantePeer::FALTANTE_COMPROBANTEFIRMADO, $faltanteComprobantefirmado, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FaltanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadodeudor($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(FaltantePeer::IDEMPLEADODEUDOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FaltantePeer::IDEMPLEADODEUDOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadodeudor() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadodeudor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadodeudor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadodeudor');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadodeudor');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadodeudor relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadodeudorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadodeudor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadodeudor', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FaltanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadogenerador($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(FaltantePeer::IDEMPLEADOGENERADOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FaltantePeer::IDEMPLEADOGENERADOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadogenerador() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadogenerador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadogenerador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadogenerador');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadogenerador');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadogenerador relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadogeneradorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadogenerador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadogenerador', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Faltante $faltante Object to remove from the list of results
     *
     * @return FaltanteQuery The current query, for fluid interface
     */
    public function prune($faltante = null)
    {
        if ($faltante) {
            $this->addUsingAlias(FaltantePeer::IDFALTANTE, $faltante->getIdfaltante(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
