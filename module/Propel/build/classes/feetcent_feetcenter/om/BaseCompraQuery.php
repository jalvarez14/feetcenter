<?php


/**
 * Base class that represents a query for the 'compra' table.
 *
 *
 *
 * @method CompraQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompraQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method CompraQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method CompraQuery orderByCompraCreadaen($order = Criteria::ASC) Order by the compra_creadaen column
 * @method CompraQuery orderByCompraFecha($order = Criteria::ASC) Order by the compra_fecha column
 * @method CompraQuery orderByCompraImporte($order = Criteria::ASC) Order by the compra_importe column
 * @method CompraQuery orderByCompraStatus($order = Criteria::ASC) Order by the compra_status column
 * @method CompraQuery orderByCompraPagaren($order = Criteria::ASC) Order by the compra_pagaren column
 * @method CompraQuery orderByCompraComprobante($order = Criteria::ASC) Order by the compra_comprobante column
 * @method CompraQuery orderByCompraFolio($order = Criteria::ASC) Order by the compra_folio column
 *
 * @method CompraQuery groupByIdcompra() Group by the idcompra column
 * @method CompraQuery groupByIdempleado() Group by the idempleado column
 * @method CompraQuery groupByIdproveedor() Group by the idproveedor column
 * @method CompraQuery groupByCompraCreadaen() Group by the compra_creadaen column
 * @method CompraQuery groupByCompraFecha() Group by the compra_fecha column
 * @method CompraQuery groupByCompraImporte() Group by the compra_importe column
 * @method CompraQuery groupByCompraStatus() Group by the compra_status column
 * @method CompraQuery groupByCompraPagaren() Group by the compra_pagaren column
 * @method CompraQuery groupByCompraComprobante() Group by the compra_comprobante column
 * @method CompraQuery groupByCompraFolio() Group by the compra_folio column
 *
 * @method CompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompraQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method CompraQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method CompraQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method CompraQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method CompraQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method Compra findOne(PropelPDO $con = null) Return the first Compra matching the query
 * @method Compra findOneOrCreate(PropelPDO $con = null) Return the first Compra matching the query, or a new Compra object populated from the query conditions when no match is found
 *
 * @method Compra findOneByIdempleado(int $idempleado) Return the first Compra filtered by the idempleado column
 * @method Compra findOneByIdproveedor(int $idproveedor) Return the first Compra filtered by the idproveedor column
 * @method Compra findOneByCompraCreadaen(string $compra_creadaen) Return the first Compra filtered by the compra_creadaen column
 * @method Compra findOneByCompraFecha(string $compra_fecha) Return the first Compra filtered by the compra_fecha column
 * @method Compra findOneByCompraImporte(string $compra_importe) Return the first Compra filtered by the compra_importe column
 * @method Compra findOneByCompraStatus(string $compra_status) Return the first Compra filtered by the compra_status column
 * @method Compra findOneByCompraPagaren(string $compra_pagaren) Return the first Compra filtered by the compra_pagaren column
 * @method Compra findOneByCompraComprobante(string $compra_comprobante) Return the first Compra filtered by the compra_comprobante column
 * @method Compra findOneByCompraFolio(string $compra_folio) Return the first Compra filtered by the compra_folio column
 *
 * @method array findByIdcompra(int $idcompra) Return Compra objects filtered by the idcompra column
 * @method array findByIdempleado(int $idempleado) Return Compra objects filtered by the idempleado column
 * @method array findByIdproveedor(int $idproveedor) Return Compra objects filtered by the idproveedor column
 * @method array findByCompraCreadaen(string $compra_creadaen) Return Compra objects filtered by the compra_creadaen column
 * @method array findByCompraFecha(string $compra_fecha) Return Compra objects filtered by the compra_fecha column
 * @method array findByCompraImporte(string $compra_importe) Return Compra objects filtered by the compra_importe column
 * @method array findByCompraStatus(string $compra_status) Return Compra objects filtered by the compra_status column
 * @method array findByCompraPagaren(string $compra_pagaren) Return Compra objects filtered by the compra_pagaren column
 * @method array findByCompraComprobante(string $compra_comprobante) Return Compra objects filtered by the compra_comprobante column
 * @method array findByCompraFolio(string $compra_folio) Return Compra objects filtered by the compra_folio column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseCompraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompraQuery object.
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
            $modelName = 'Compra';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompraQuery) {
            return $criteria;
        }
        $query = new CompraQuery(null, null, $modelAlias);

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
     * @return   Compra|Compra[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompra($key, $con = null)
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompra`, `idempleado`, `idproveedor`, `compra_creadaen`, `compra_fecha`, `compra_importe`, `compra_status`, `compra_pagaren`, `compra_comprobante`, `compra_folio` FROM `compra` WHERE `idcompra` = :p0';
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
            $obj = new Compra();
            $obj->hydrate($row);
            CompraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compra|Compra[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compra[]|mixed the list of results, formatted by the current formatter
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompra(1234); // WHERE idcompra = 1234
     * $query->filterByIdcompra(array(12, 34)); // WHERE idcompra IN (12, 34)
     * $query->filterByIdcompra(array('min' => 12)); // WHERE idcompra >= 12
     * $query->filterByIdcompra(array('max' => 12)); // WHERE idcompra <= 12
     * </code>
     *
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(CompraPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(CompraPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the compra_creadaen column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraCreadaen('2011-03-14'); // WHERE compra_creadaen = '2011-03-14'
     * $query->filterByCompraCreadaen('now'); // WHERE compra_creadaen = '2011-03-14'
     * $query->filterByCompraCreadaen(array('max' => 'yesterday')); // WHERE compra_creadaen < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraCreadaen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraCreadaen($compraCreadaen = null, $comparison = null)
    {
        if (is_array($compraCreadaen)) {
            $useMinMax = false;
            if (isset($compraCreadaen['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_CREADAEN, $compraCreadaen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraCreadaen['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_CREADAEN, $compraCreadaen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_CREADAEN, $compraCreadaen, $comparison);
    }

    /**
     * Filter the query on the compra_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFecha('2011-03-14'); // WHERE compra_fecha = '2011-03-14'
     * $query->filterByCompraFecha('now'); // WHERE compra_fecha = '2011-03-14'
     * $query->filterByCompraFecha(array('max' => 'yesterday')); // WHERE compra_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFecha($compraFecha = null, $comparison = null)
    {
        if (is_array($compraFecha)) {
            $useMinMax = false;
            if (isset($compraFecha['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHA, $compraFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFecha['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHA, $compraFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHA, $compraFecha, $comparison);
    }

    /**
     * Filter the query on the compra_importe column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraImporte(1234); // WHERE compra_importe = 1234
     * $query->filterByCompraImporte(array(12, 34)); // WHERE compra_importe IN (12, 34)
     * $query->filterByCompraImporte(array('min' => 12)); // WHERE compra_importe >= 12
     * $query->filterByCompraImporte(array('max' => 12)); // WHERE compra_importe <= 12
     * </code>
     *
     * @param     mixed $compraImporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraImporte($compraImporte = null, $comparison = null)
    {
        if (is_array($compraImporte)) {
            $useMinMax = false;
            if (isset($compraImporte['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IMPORTE, $compraImporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraImporte['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IMPORTE, $compraImporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_IMPORTE, $compraImporte, $comparison);
    }

    /**
     * Filter the query on the compra_status column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraStatus('fooValue');   // WHERE compra_status = 'fooValue'
     * $query->filterByCompraStatus('%fooValue%'); // WHERE compra_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraStatus($compraStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraStatus)) {
                $compraStatus = str_replace('*', '%', $compraStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_STATUS, $compraStatus, $comparison);
    }

    /**
     * Filter the query on the compra_pagaren column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraPagaren('2011-03-14'); // WHERE compra_pagaren = '2011-03-14'
     * $query->filterByCompraPagaren('now'); // WHERE compra_pagaren = '2011-03-14'
     * $query->filterByCompraPagaren(array('max' => 'yesterday')); // WHERE compra_pagaren < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraPagaren The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraPagaren($compraPagaren = null, $comparison = null)
    {
        if (is_array($compraPagaren)) {
            $useMinMax = false;
            if (isset($compraPagaren['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_PAGAREN, $compraPagaren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraPagaren['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_PAGAREN, $compraPagaren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_PAGAREN, $compraPagaren, $comparison);
    }

    /**
     * Filter the query on the compra_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraComprobante('fooValue');   // WHERE compra_comprobante = 'fooValue'
     * $query->filterByCompraComprobante('%fooValue%'); // WHERE compra_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraComprobante($compraComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraComprobante)) {
                $compraComprobante = str_replace('*', '%', $compraComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_COMPROBANTE, $compraComprobante, $comparison);
    }

    /**
     * Filter the query on the compra_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFolio('fooValue');   // WHERE compra_folio = 'fooValue'
     * $query->filterByCompraFolio('%fooValue%'); // WHERE compra_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFolio($compraFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraFolio)) {
                $compraFolio = str_replace('*', '%', $compraFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FOLIO, $compraFolio, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(CompraPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return CompraQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(CompraPeer::IDCOMPRA, $compradetalle->getIdcompra(), $comparison);
        } elseif ($compradetalle instanceof PropelObjectCollection) {
            return $this
                ->useCompradetalleQuery()
                ->filterByPrimaryKeys($compradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompradetalle() only accepts arguments of type Compradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compradetalle');

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
            $this->addJoinObject($join, 'Compradetalle');
        }

        return $this;
    }

    /**
     * Use the Compradetalle relation Compradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Compra $compra Object to remove from the list of results
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function prune($compra = null)
    {
        if ($compra) {
            $this->addUsingAlias(CompraPeer::IDCOMPRA, $compra->getIdcompra(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
