<?php


/**
 * Base class that represents a query for the 'productoclinica' table.
 *
 *
 *
 * @method ProductoclinicaQuery orderByIdproductoclinica($order = Criteria::ASC) Order by the idproductoclinica column
 * @method ProductoclinicaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductoclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method ProductoclinicaQuery orderByProductoclinicaExistencia($order = Criteria::ASC) Order by the productoclinica_existencia column
 * @method ProductoclinicaQuery orderByProductoclinicaMinimo($order = Criteria::ASC) Order by the productoclinica_minimo column
 * @method ProductoclinicaQuery orderByProductoclinicaMaximo($order = Criteria::ASC) Order by the productoclinica_maximo column
 * @method ProductoclinicaQuery orderByProductoclinicaReorden($order = Criteria::ASC) Order by the productoclinica_reorden column
 *
 * @method ProductoclinicaQuery groupByIdproductoclinica() Group by the idproductoclinica column
 * @method ProductoclinicaQuery groupByIdproducto() Group by the idproducto column
 * @method ProductoclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method ProductoclinicaQuery groupByProductoclinicaExistencia() Group by the productoclinica_existencia column
 * @method ProductoclinicaQuery groupByProductoclinicaMinimo() Group by the productoclinica_minimo column
 * @method ProductoclinicaQuery groupByProductoclinicaMaximo() Group by the productoclinica_maximo column
 * @method ProductoclinicaQuery groupByProductoclinicaReorden() Group by the productoclinica_reorden column
 *
 * @method ProductoclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method ProductoclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method ProductoclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method ProductoclinicaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductoclinicaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductoclinicaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method ProductoclinicaQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method ProductoclinicaQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method ProductoclinicaQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method ProductoclinicaQuery leftJoinProductoinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoinventario relation
 * @method ProductoclinicaQuery rightJoinProductoinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoinventario relation
 * @method ProductoclinicaQuery innerJoinProductoinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoinventario relation
 *
 * @method ProductoclinicaQuery leftJoinTransferenciadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transferenciadetalle relation
 * @method ProductoclinicaQuery rightJoinTransferenciadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transferenciadetalle relation
 * @method ProductoclinicaQuery innerJoinTransferenciadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Transferenciadetalle relation
 *
 * @method ProductoclinicaQuery leftJoinVisitadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visitadetalle relation
 * @method ProductoclinicaQuery rightJoinVisitadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visitadetalle relation
 * @method ProductoclinicaQuery innerJoinVisitadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Visitadetalle relation
 *
 * @method Productoclinica findOne(PropelPDO $con = null) Return the first Productoclinica matching the query
 * @method Productoclinica findOneOrCreate(PropelPDO $con = null) Return the first Productoclinica matching the query, or a new Productoclinica object populated from the query conditions when no match is found
 *
 * @method Productoclinica findOneByIdproducto(int $idproducto) Return the first Productoclinica filtered by the idproducto column
 * @method Productoclinica findOneByIdclinica(int $idclinica) Return the first Productoclinica filtered by the idclinica column
 * @method Productoclinica findOneByProductoclinicaExistencia(string $productoclinica_existencia) Return the first Productoclinica filtered by the productoclinica_existencia column
 * @method Productoclinica findOneByProductoclinicaMinimo(string $productoclinica_minimo) Return the first Productoclinica filtered by the productoclinica_minimo column
 * @method Productoclinica findOneByProductoclinicaMaximo(string $productoclinica_maximo) Return the first Productoclinica filtered by the productoclinica_maximo column
 * @method Productoclinica findOneByProductoclinicaReorden(string $productoclinica_reorden) Return the first Productoclinica filtered by the productoclinica_reorden column
 *
 * @method array findByIdproductoclinica(int $idproductoclinica) Return Productoclinica objects filtered by the idproductoclinica column
 * @method array findByIdproducto(int $idproducto) Return Productoclinica objects filtered by the idproducto column
 * @method array findByIdclinica(int $idclinica) Return Productoclinica objects filtered by the idclinica column
 * @method array findByProductoclinicaExistencia(string $productoclinica_existencia) Return Productoclinica objects filtered by the productoclinica_existencia column
 * @method array findByProductoclinicaMinimo(string $productoclinica_minimo) Return Productoclinica objects filtered by the productoclinica_minimo column
 * @method array findByProductoclinicaMaximo(string $productoclinica_maximo) Return Productoclinica objects filtered by the productoclinica_maximo column
 * @method array findByProductoclinicaReorden(string $productoclinica_reorden) Return Productoclinica objects filtered by the productoclinica_reorden column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProductoclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoclinicaQuery object.
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
            $modelName = 'Productoclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoclinicaQuery) {
            return $criteria;
        }
        $query = new ProductoclinicaQuery(null, null, $modelAlias);

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
     * @return   Productoclinica|Productoclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductoclinica($key, $con = null)
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
     * @return                 Productoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductoclinica`, `idproducto`, `idclinica`, `productoclinica_existencia`, `productoclinica_minimo`, `productoclinica_maximo`, `productoclinica_reorden` FROM `productoclinica` WHERE `idproductoclinica` = :p0';
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
            $obj = new Productoclinica();
            $obj->hydrate($row);
            ProductoclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productoclinica|Productoclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productoclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductoclinica(1234); // WHERE idproductoclinica = 1234
     * $query->filterByIdproductoclinica(array(12, 34)); // WHERE idproductoclinica IN (12, 34)
     * $query->filterByIdproductoclinica(array('min' => 12)); // WHERE idproductoclinica >= 12
     * $query->filterByIdproductoclinica(array('max' => 12)); // WHERE idproductoclinica <= 12
     * </code>
     *
     * @param     mixed $idproductoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdproductoclinica($idproductoclinica = null, $comparison = null)
    {
        if (is_array($idproductoclinica)) {
            $useMinMax = false;
            if (isset($idproductoclinica['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $idproductoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoclinica['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $idproductoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $idproductoclinica, $comparison);
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
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the productoclinica_existencia column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoclinicaExistencia(1234); // WHERE productoclinica_existencia = 1234
     * $query->filterByProductoclinicaExistencia(array(12, 34)); // WHERE productoclinica_existencia IN (12, 34)
     * $query->filterByProductoclinicaExistencia(array('min' => 12)); // WHERE productoclinica_existencia >= 12
     * $query->filterByProductoclinicaExistencia(array('max' => 12)); // WHERE productoclinica_existencia <= 12
     * </code>
     *
     * @param     mixed $productoclinicaExistencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByProductoclinicaExistencia($productoclinicaExistencia = null, $comparison = null)
    {
        if (is_array($productoclinicaExistencia)) {
            $useMinMax = false;
            if (isset($productoclinicaExistencia['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA, $productoclinicaExistencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoclinicaExistencia['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA, $productoclinicaExistencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA, $productoclinicaExistencia, $comparison);
    }

    /**
     * Filter the query on the productoclinica_minimo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoclinicaMinimo(1234); // WHERE productoclinica_minimo = 1234
     * $query->filterByProductoclinicaMinimo(array(12, 34)); // WHERE productoclinica_minimo IN (12, 34)
     * $query->filterByProductoclinicaMinimo(array('min' => 12)); // WHERE productoclinica_minimo >= 12
     * $query->filterByProductoclinicaMinimo(array('max' => 12)); // WHERE productoclinica_minimo <= 12
     * </code>
     *
     * @param     mixed $productoclinicaMinimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByProductoclinicaMinimo($productoclinicaMinimo = null, $comparison = null)
    {
        if (is_array($productoclinicaMinimo)) {
            $useMinMax = false;
            if (isset($productoclinicaMinimo['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO, $productoclinicaMinimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoclinicaMinimo['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO, $productoclinicaMinimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO, $productoclinicaMinimo, $comparison);
    }

    /**
     * Filter the query on the productoclinica_maximo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoclinicaMaximo(1234); // WHERE productoclinica_maximo = 1234
     * $query->filterByProductoclinicaMaximo(array(12, 34)); // WHERE productoclinica_maximo IN (12, 34)
     * $query->filterByProductoclinicaMaximo(array('min' => 12)); // WHERE productoclinica_maximo >= 12
     * $query->filterByProductoclinicaMaximo(array('max' => 12)); // WHERE productoclinica_maximo <= 12
     * </code>
     *
     * @param     mixed $productoclinicaMaximo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByProductoclinicaMaximo($productoclinicaMaximo = null, $comparison = null)
    {
        if (is_array($productoclinicaMaximo)) {
            $useMinMax = false;
            if (isset($productoclinicaMaximo['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO, $productoclinicaMaximo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoclinicaMaximo['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO, $productoclinicaMaximo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO, $productoclinicaMaximo, $comparison);
    }

    /**
     * Filter the query on the productoclinica_reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoclinicaReorden(1234); // WHERE productoclinica_reorden = 1234
     * $query->filterByProductoclinicaReorden(array(12, 34)); // WHERE productoclinica_reorden IN (12, 34)
     * $query->filterByProductoclinicaReorden(array('min' => 12)); // WHERE productoclinica_reorden >= 12
     * $query->filterByProductoclinicaReorden(array('max' => 12)); // WHERE productoclinica_reorden <= 12
     * </code>
     *
     * @param     mixed $productoclinicaReorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function filterByProductoclinicaReorden($productoclinicaReorden = null, $comparison = null)
    {
        if (is_array($productoclinicaReorden)) {
            $useMinMax = false;
            if (isset($productoclinicaReorden['min'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN, $productoclinicaReorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoclinicaReorden['max'])) {
                $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN, $productoclinicaReorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN, $productoclinicaReorden, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return ProductoclinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $compradetalle->getIdproductoclinica(), $comparison);
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
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Filter the query by a related Productoinventario object
     *
     * @param   Productoinventario|PropelObjectCollection $productoinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoinventario($productoinventario, $comparison = null)
    {
        if ($productoinventario instanceof Productoinventario) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $productoinventario->getIdproductoclinica(), $comparison);
        } elseif ($productoinventario instanceof PropelObjectCollection) {
            return $this
                ->useProductoinventarioQuery()
                ->filterByPrimaryKeys($productoinventario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductoinventario() only accepts arguments of type Productoinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productoinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function joinProductoinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productoinventario');

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
            $this->addJoinObject($join, 'Productoinventario');
        }

        return $this;
    }

    /**
     * Use the Productoinventario relation Productoinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoinventarioQuery A secondary query class using the current class as primary query
     */
    public function useProductoinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productoinventario', 'ProductoinventarioQuery');
    }

    /**
     * Filter the query by a related Transferenciadetalle object
     *
     * @param   Transferenciadetalle|PropelObjectCollection $transferenciadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciadetalle($transferenciadetalle, $comparison = null)
    {
        if ($transferenciadetalle instanceof Transferenciadetalle) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $transferenciadetalle->getIdproductoclinica(), $comparison);
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
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function joinTransferenciadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useTransferenciadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTransferenciadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transferenciadetalle', 'TransferenciadetalleQuery');
    }

    /**
     * Filter the query by a related Visitadetalle object
     *
     * @param   Visitadetalle|PropelObjectCollection $visitadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitadetalle($visitadetalle, $comparison = null)
    {
        if ($visitadetalle instanceof Visitadetalle) {
            return $this
                ->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $visitadetalle->getIdproductoclinica(), $comparison);
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
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function joinVisitadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useVisitadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVisitadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visitadetalle', 'VisitadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Productoclinica $productoclinica Object to remove from the list of results
     *
     * @return ProductoclinicaQuery The current query, for fluid interface
     */
    public function prune($productoclinica = null)
    {
        if ($productoclinica) {
            $this->addUsingAlias(ProductoclinicaPeer::IDPRODUCTOCLINICA, $productoclinica->getIdproductoclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
