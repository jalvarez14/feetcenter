<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 *
 *
 * @method ProductoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductoQuery orderByProductoNombre($order = Criteria::ASC) Order by the producto_nombre column
 * @method ProductoQuery orderByProductoDescripcion($order = Criteria::ASC) Order by the producto_descripcion column
 * @method ProductoQuery orderByProductoCosto($order = Criteria::ASC) Order by the producto_costo column
 * @method ProductoQuery orderByProductoPrecio($order = Criteria::ASC) Order by the producto_precio column
 * @method ProductoQuery orderByProductoGeneraingreso($order = Criteria::ASC) Order by the producto_generaingreso column
 * @method ProductoQuery orderByProductoGeneracomision($order = Criteria::ASC) Order by the producto_generacomision column
 * @method ProductoQuery orderByProductoTipocomision($order = Criteria::ASC) Order by the producto_tipocomision column
 * @method ProductoQuery orderByProductoComision($order = Criteria::ASC) Order by the producto_comision column
 * @method ProductoQuery orderByProductoFotografia($order = Criteria::ASC) Order by the producto_fotografia column
 *
 * @method ProductoQuery groupByIdproducto() Group by the idproducto column
 * @method ProductoQuery groupByProductoNombre() Group by the producto_nombre column
 * @method ProductoQuery groupByProductoDescripcion() Group by the producto_descripcion column
 * @method ProductoQuery groupByProductoCosto() Group by the producto_costo column
 * @method ProductoQuery groupByProductoPrecio() Group by the producto_precio column
 * @method ProductoQuery groupByProductoGeneraingreso() Group by the producto_generaingreso column
 * @method ProductoQuery groupByProductoGeneracomision() Group by the producto_generacomision column
 * @method ProductoQuery groupByProductoTipocomision() Group by the producto_tipocomision column
 * @method ProductoQuery groupByProductoComision() Group by the producto_comision column
 * @method ProductoQuery groupByProductoFotografia() Group by the producto_fotografia column
 *
 * @method ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoQuery leftJoinProductoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoclinica relation
 * @method ProductoQuery rightJoinProductoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoclinica relation
 * @method ProductoQuery innerJoinProductoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoclinica relation
 *
 * @method Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method Producto findOneByProductoNombre(string $producto_nombre) Return the first Producto filtered by the producto_nombre column
 * @method Producto findOneByProductoDescripcion(string $producto_descripcion) Return the first Producto filtered by the producto_descripcion column
 * @method Producto findOneByProductoCosto(string $producto_costo) Return the first Producto filtered by the producto_costo column
 * @method Producto findOneByProductoPrecio(string $producto_precio) Return the first Producto filtered by the producto_precio column
 * @method Producto findOneByProductoGeneraingreso(boolean $producto_generaingreso) Return the first Producto filtered by the producto_generaingreso column
 * @method Producto findOneByProductoGeneracomision(boolean $producto_generacomision) Return the first Producto filtered by the producto_generacomision column
 * @method Producto findOneByProductoTipocomision(string $producto_tipocomision) Return the first Producto filtered by the producto_tipocomision column
 * @method Producto findOneByProductoComision(string $producto_comision) Return the first Producto filtered by the producto_comision column
 * @method Producto findOneByProductoFotografia(string $producto_fotografia) Return the first Producto filtered by the producto_fotografia column
 *
 * @method array findByIdproducto(int $idproducto) Return Producto objects filtered by the idproducto column
 * @method array findByProductoNombre(string $producto_nombre) Return Producto objects filtered by the producto_nombre column
 * @method array findByProductoDescripcion(string $producto_descripcion) Return Producto objects filtered by the producto_descripcion column
 * @method array findByProductoCosto(string $producto_costo) Return Producto objects filtered by the producto_costo column
 * @method array findByProductoPrecio(string $producto_precio) Return Producto objects filtered by the producto_precio column
 * @method array findByProductoGeneraingreso(boolean $producto_generaingreso) Return Producto objects filtered by the producto_generaingreso column
 * @method array findByProductoGeneracomision(boolean $producto_generacomision) Return Producto objects filtered by the producto_generacomision column
 * @method array findByProductoTipocomision(string $producto_tipocomision) Return Producto objects filtered by the producto_tipocomision column
 * @method array findByProductoComision(string $producto_comision) Return Producto objects filtered by the producto_comision column
 * @method array findByProductoFotografia(string $producto_fotografia) Return Producto objects filtered by the producto_fotografia column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoQuery object.
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
            $modelName = 'Producto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoQuery) {
            return $criteria;
        }
        $query = new ProductoQuery(null, null, $modelAlias);

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
     * @return   Producto|Producto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproducto($key, $con = null)
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproducto`, `producto_nombre`, `producto_descripcion`, `producto_costo`, `producto_precio`, `producto_generaingreso`, `producto_generacomision`, `producto_tipocomision`, `producto_comision`, `producto_fotografia` FROM `producto` WHERE `idproducto` = :p0';
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
            $obj = new Producto();
            $obj->hydrate($row);
            ProductoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Producto|Producto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Producto[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the producto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoNombre('fooValue');   // WHERE producto_nombre = 'fooValue'
     * $query->filterByProductoNombre('%fooValue%'); // WHERE producto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoNombre($productoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoNombre)) {
                $productoNombre = str_replace('*', '%', $productoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_NOMBRE, $productoNombre, $comparison);
    }

    /**
     * Filter the query on the producto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoDescripcion('fooValue');   // WHERE producto_descripcion = 'fooValue'
     * $query->filterByProductoDescripcion('%fooValue%'); // WHERE producto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoDescripcion($productoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoDescripcion)) {
                $productoDescripcion = str_replace('*', '%', $productoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_DESCRIPCION, $productoDescripcion, $comparison);
    }

    /**
     * Filter the query on the producto_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoCosto('fooValue');   // WHERE producto_costo = 'fooValue'
     * $query->filterByProductoCosto('%fooValue%'); // WHERE producto_costo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoCosto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoCosto($productoCosto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoCosto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoCosto)) {
                $productoCosto = str_replace('*', '%', $productoCosto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto, $comparison);
    }

    /**
     * Filter the query on the producto_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoPrecio('fooValue');   // WHERE producto_precio = 'fooValue'
     * $query->filterByProductoPrecio('%fooValue%'); // WHERE producto_precio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoPrecio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoPrecio($productoPrecio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoPrecio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoPrecio)) {
                $productoPrecio = str_replace('*', '%', $productoPrecio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIO, $productoPrecio, $comparison);
    }

    /**
     * Filter the query on the producto_generaingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoGeneraingreso(true); // WHERE producto_generaingreso = true
     * $query->filterByProductoGeneraingreso('yes'); // WHERE producto_generaingreso = true
     * </code>
     *
     * @param     boolean|string $productoGeneraingreso The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoGeneraingreso($productoGeneraingreso = null, $comparison = null)
    {
        if (is_string($productoGeneraingreso)) {
            $productoGeneraingreso = in_array(strtolower($productoGeneraingreso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_GENERAINGRESO, $productoGeneraingreso, $comparison);
    }

    /**
     * Filter the query on the producto_generacomision column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoGeneracomision(true); // WHERE producto_generacomision = true
     * $query->filterByProductoGeneracomision('yes'); // WHERE producto_generacomision = true
     * </code>
     *
     * @param     boolean|string $productoGeneracomision The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoGeneracomision($productoGeneracomision = null, $comparison = null)
    {
        if (is_string($productoGeneracomision)) {
            $productoGeneracomision = in_array(strtolower($productoGeneracomision), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_GENERACOMISION, $productoGeneracomision, $comparison);
    }

    /**
     * Filter the query on the producto_tipocomision column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoTipocomision('fooValue');   // WHERE producto_tipocomision = 'fooValue'
     * $query->filterByProductoTipocomision('%fooValue%'); // WHERE producto_tipocomision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoTipocomision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoTipocomision($productoTipocomision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoTipocomision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoTipocomision)) {
                $productoTipocomision = str_replace('*', '%', $productoTipocomision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_TIPOCOMISION, $productoTipocomision, $comparison);
    }

    /**
     * Filter the query on the producto_comision column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoComision(1234); // WHERE producto_comision = 1234
     * $query->filterByProductoComision(array(12, 34)); // WHERE producto_comision IN (12, 34)
     * $query->filterByProductoComision(array('min' => 12)); // WHERE producto_comision >= 12
     * $query->filterByProductoComision(array('max' => 12)); // WHERE producto_comision <= 12
     * </code>
     *
     * @param     mixed $productoComision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoComision($productoComision = null, $comparison = null)
    {
        if (is_array($productoComision)) {
            $useMinMax = false;
            if (isset($productoComision['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISION, $productoComision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoComision['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISION, $productoComision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISION, $productoComision, $comparison);
    }

    /**
     * Filter the query on the producto_fotografia column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoFotografia('fooValue');   // WHERE producto_fotografia = 'fooValue'
     * $query->filterByProductoFotografia('%fooValue%'); // WHERE producto_fotografia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoFotografia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoFotografia($productoFotografia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoFotografia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoFotografia)) {
                $productoFotografia = str_replace('*', '%', $productoFotografia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_FOTOGRAFIA, $productoFotografia, $comparison);
    }

    /**
     * Filter the query by a related Productoclinica object
     *
     * @param   Productoclinica|PropelObjectCollection $productoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoclinica($productoclinica, $comparison = null)
    {
        if ($productoclinica instanceof Productoclinica) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productoclinica->getIdproducto(), $comparison);
        } elseif ($productoclinica instanceof PropelObjectCollection) {
            return $this
                ->useProductoclinicaQuery()
                ->filterByPrimaryKeys($productoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductoclinica() only accepts arguments of type Productoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productoclinica');

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
            $this->addJoinObject($join, 'Productoclinica');
        }

        return $this;
    }

    /**
     * Use the Productoclinica relation Productoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useProductoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productoclinica', 'ProductoclinicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Producto $producto Object to remove from the list of results
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function prune($producto = null)
    {
        if ($producto) {
            $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $producto->getIdproducto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
