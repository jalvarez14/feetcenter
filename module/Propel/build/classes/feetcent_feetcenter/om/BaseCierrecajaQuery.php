<?php


/**
 * Base class that represents a query for the 'cierrecaja' table.
 *
 *
 *
 * @method CierrecajaQuery orderByIdcierrecaja($order = Criteria::ASC) Order by the idcierrecaja column
 * @method CierrecajaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method CierrecajaQuery orderByCierrecajaCantidad($order = Criteria::ASC) Order by the cierrecaja_cantidad column
 * @method CierrecajaQuery orderByCierrecajaEfectivo($order = Criteria::ASC) Order by the cierrecaja_efectivo column
 * @method CierrecajaQuery orderByCierrecajaTarjeta($order = Criteria::ASC) Order by the cierrecaja_tarjeta column
 * @method CierrecajaQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method CierrecajaQuery groupByIdcierrecaja() Group by the idcierrecaja column
 * @method CierrecajaQuery groupByIdsucursal() Group by the idsucursal column
 * @method CierrecajaQuery groupByCierrecajaCantidad() Group by the cierrecaja_cantidad column
 * @method CierrecajaQuery groupByCierrecajaEfectivo() Group by the cierrecaja_efectivo column
 * @method CierrecajaQuery groupByCierrecajaTarjeta() Group by the cierrecaja_tarjeta column
 * @method CierrecajaQuery groupByIdempleado() Group by the idempleado column
 *
 * @method CierrecajaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CierrecajaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CierrecajaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cierrecaja findOne(PropelPDO $con = null) Return the first Cierrecaja matching the query
 * @method Cierrecaja findOneOrCreate(PropelPDO $con = null) Return the first Cierrecaja matching the query, or a new Cierrecaja object populated from the query conditions when no match is found
 *
 * @method Cierrecaja findOneByIdsucursal(int $idsucursal) Return the first Cierrecaja filtered by the idsucursal column
 * @method Cierrecaja findOneByCierrecajaCantidad(string $cierrecaja_cantidad) Return the first Cierrecaja filtered by the cierrecaja_cantidad column
 * @method Cierrecaja findOneByCierrecajaEfectivo(string $cierrecaja_efectivo) Return the first Cierrecaja filtered by the cierrecaja_efectivo column
 * @method Cierrecaja findOneByCierrecajaTarjeta(string $cierrecaja_tarjeta) Return the first Cierrecaja filtered by the cierrecaja_tarjeta column
 * @method Cierrecaja findOneByIdempleado(string $idempleado) Return the first Cierrecaja filtered by the idempleado column
 *
 * @method array findByIdcierrecaja(int $idcierrecaja) Return Cierrecaja objects filtered by the idcierrecaja column
 * @method array findByIdsucursal(int $idsucursal) Return Cierrecaja objects filtered by the idsucursal column
 * @method array findByCierrecajaCantidad(string $cierrecaja_cantidad) Return Cierrecaja objects filtered by the cierrecaja_cantidad column
 * @method array findByCierrecajaEfectivo(string $cierrecaja_efectivo) Return Cierrecaja objects filtered by the cierrecaja_efectivo column
 * @method array findByCierrecajaTarjeta(string $cierrecaja_tarjeta) Return Cierrecaja objects filtered by the cierrecaja_tarjeta column
 * @method array findByIdempleado(string $idempleado) Return Cierrecaja objects filtered by the idempleado column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseCierrecajaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCierrecajaQuery object.
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
            $modelName = 'Cierrecaja';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CierrecajaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CierrecajaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CierrecajaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CierrecajaQuery) {
            return $criteria;
        }
        $query = new CierrecajaQuery(null, null, $modelAlias);

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
     * @return   Cierrecaja|Cierrecaja[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CierrecajaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CierrecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cierrecaja A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcierrecaja($key, $con = null)
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
     * @return                 Cierrecaja A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcierrecaja`, `idsucursal`, `cierrecaja_cantidad`, `cierrecaja_efectivo`, `cierrecaja_tarjeta`, `idempleado` FROM `cierrecaja` WHERE `idcierrecaja` = :p0';
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
            $obj = new Cierrecaja();
            $obj->hydrate($row);
            CierrecajaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cierrecaja|Cierrecaja[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cierrecaja[]|mixed the list of results, formatted by the current formatter
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
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcierrecaja column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcierrecaja(1234); // WHERE idcierrecaja = 1234
     * $query->filterByIdcierrecaja(array(12, 34)); // WHERE idcierrecaja IN (12, 34)
     * $query->filterByIdcierrecaja(array('min' => 12)); // WHERE idcierrecaja >= 12
     * $query->filterByIdcierrecaja(array('max' => 12)); // WHERE idcierrecaja <= 12
     * </code>
     *
     * @param     mixed $idcierrecaja The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByIdcierrecaja($idcierrecaja = null, $comparison = null)
    {
        if (is_array($idcierrecaja)) {
            $useMinMax = false;
            if (isset($idcierrecaja['min'])) {
                $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $idcierrecaja['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcierrecaja['max'])) {
                $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $idcierrecaja['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $idcierrecaja, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(CierrecajaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(CierrecajaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the cierrecaja_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCierrecajaCantidad(1234); // WHERE cierrecaja_cantidad = 1234
     * $query->filterByCierrecajaCantidad(array(12, 34)); // WHERE cierrecaja_cantidad IN (12, 34)
     * $query->filterByCierrecajaCantidad(array('min' => 12)); // WHERE cierrecaja_cantidad >= 12
     * $query->filterByCierrecajaCantidad(array('max' => 12)); // WHERE cierrecaja_cantidad <= 12
     * </code>
     *
     * @param     mixed $cierrecajaCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByCierrecajaCantidad($cierrecajaCantidad = null, $comparison = null)
    {
        if (is_array($cierrecajaCantidad)) {
            $useMinMax = false;
            if (isset($cierrecajaCantidad['min'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_CANTIDAD, $cierrecajaCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cierrecajaCantidad['max'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_CANTIDAD, $cierrecajaCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_CANTIDAD, $cierrecajaCantidad, $comparison);
    }

    /**
     * Filter the query on the cierrecaja_efectivo column
     *
     * Example usage:
     * <code>
     * $query->filterByCierrecajaEfectivo(1234); // WHERE cierrecaja_efectivo = 1234
     * $query->filterByCierrecajaEfectivo(array(12, 34)); // WHERE cierrecaja_efectivo IN (12, 34)
     * $query->filterByCierrecajaEfectivo(array('min' => 12)); // WHERE cierrecaja_efectivo >= 12
     * $query->filterByCierrecajaEfectivo(array('max' => 12)); // WHERE cierrecaja_efectivo <= 12
     * </code>
     *
     * @param     mixed $cierrecajaEfectivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByCierrecajaEfectivo($cierrecajaEfectivo = null, $comparison = null)
    {
        if (is_array($cierrecajaEfectivo)) {
            $useMinMax = false;
            if (isset($cierrecajaEfectivo['min'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_EFECTIVO, $cierrecajaEfectivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cierrecajaEfectivo['max'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_EFECTIVO, $cierrecajaEfectivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_EFECTIVO, $cierrecajaEfectivo, $comparison);
    }

    /**
     * Filter the query on the cierrecaja_tarjeta column
     *
     * Example usage:
     * <code>
     * $query->filterByCierrecajaTarjeta(1234); // WHERE cierrecaja_tarjeta = 1234
     * $query->filterByCierrecajaTarjeta(array(12, 34)); // WHERE cierrecaja_tarjeta IN (12, 34)
     * $query->filterByCierrecajaTarjeta(array('min' => 12)); // WHERE cierrecaja_tarjeta >= 12
     * $query->filterByCierrecajaTarjeta(array('max' => 12)); // WHERE cierrecaja_tarjeta <= 12
     * </code>
     *
     * @param     mixed $cierrecajaTarjeta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByCierrecajaTarjeta($cierrecajaTarjeta = null, $comparison = null)
    {
        if (is_array($cierrecajaTarjeta)) {
            $useMinMax = false;
            if (isset($cierrecajaTarjeta['min'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_TARJETA, $cierrecajaTarjeta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cierrecajaTarjeta['max'])) {
                $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_TARJETA, $cierrecajaTarjeta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::CIERRECAJA_TARJETA, $cierrecajaTarjeta, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado('fooValue');   // WHERE idempleado = 'fooValue'
     * $query->filterByIdempleado('%fooValue%'); // WHERE idempleado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idempleado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idempleado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idempleado)) {
                $idempleado = str_replace('*', '%', $idempleado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CierrecajaPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cierrecaja $cierrecaja Object to remove from the list of results
     *
     * @return CierrecajaQuery The current query, for fluid interface
     */
    public function prune($cierrecaja = null)
    {
        if ($cierrecaja) {
            $this->addUsingAlias(CierrecajaPeer::IDCIERRECAJA, $cierrecaja->getIdcierrecaja(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
