<?php


/**
 * Base class that represents a query for the 'productoinventario' table.
 *
 *
 *
 * @method ProductoinventarioQuery orderByIdproductoinventario($order = Criteria::ASC) Order by the idproductoinventario column
 * @method ProductoinventarioQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method ProductoinventarioQuery orderByIdproductoclinica($order = Criteria::ASC) Order by the idproductoclinica column
 * @method ProductoinventarioQuery orderByProductoinventarioFecha($order = Criteria::ASC) Order by the productoinventario_fecha column
 * @method ProductoinventarioQuery orderByProductoinventarioCantidad($order = Criteria::ASC) Order by the productoinventario_cantidad column
 *
 * @method ProductoinventarioQuery groupByIdproductoinventario() Group by the idproductoinventario column
 * @method ProductoinventarioQuery groupByIdclinica() Group by the idclinica column
 * @method ProductoinventarioQuery groupByIdproductoclinica() Group by the idproductoclinica column
 * @method ProductoinventarioQuery groupByProductoinventarioFecha() Group by the productoinventario_fecha column
 * @method ProductoinventarioQuery groupByProductoinventarioCantidad() Group by the productoinventario_cantidad column
 *
 * @method ProductoinventarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoinventarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoinventarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoinventarioQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method ProductoinventarioQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method ProductoinventarioQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method ProductoinventarioQuery leftJoinProductoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoclinica relation
 * @method ProductoinventarioQuery rightJoinProductoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoclinica relation
 * @method ProductoinventarioQuery innerJoinProductoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoclinica relation
 *
 * @method Productoinventario findOne(PropelPDO $con = null) Return the first Productoinventario matching the query
 * @method Productoinventario findOneOrCreate(PropelPDO $con = null) Return the first Productoinventario matching the query, or a new Productoinventario object populated from the query conditions when no match is found
 *
 * @method Productoinventario findOneByIdclinica(int $idclinica) Return the first Productoinventario filtered by the idclinica column
 * @method Productoinventario findOneByIdproductoclinica(int $idproductoclinica) Return the first Productoinventario filtered by the idproductoclinica column
 * @method Productoinventario findOneByProductoinventarioFecha(string $productoinventario_fecha) Return the first Productoinventario filtered by the productoinventario_fecha column
 * @method Productoinventario findOneByProductoinventarioCantidad(string $productoinventario_cantidad) Return the first Productoinventario filtered by the productoinventario_cantidad column
 *
 * @method array findByIdproductoinventario(int $idproductoinventario) Return Productoinventario objects filtered by the idproductoinventario column
 * @method array findByIdclinica(int $idclinica) Return Productoinventario objects filtered by the idclinica column
 * @method array findByIdproductoclinica(int $idproductoclinica) Return Productoinventario objects filtered by the idproductoclinica column
 * @method array findByProductoinventarioFecha(string $productoinventario_fecha) Return Productoinventario objects filtered by the productoinventario_fecha column
 * @method array findByProductoinventarioCantidad(string $productoinventario_cantidad) Return Productoinventario objects filtered by the productoinventario_cantidad column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProductoinventarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoinventarioQuery object.
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
            $modelName = 'Productoinventario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoinventarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoinventarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoinventarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoinventarioQuery) {
            return $criteria;
        }
        $query = new ProductoinventarioQuery(null, null, $modelAlias);

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
     * @return   Productoinventario|Productoinventario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoinventarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productoinventario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductoinventario($key, $con = null)
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
     * @return                 Productoinventario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductoinventario`, `idclinica`, `idproductoclinica`, `productoinventario_fecha`, `productoinventario_cantidad` FROM `productoinventario` WHERE `idproductoinventario` = :p0';
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
            $obj = new Productoinventario();
            $obj->hydrate($row);
            ProductoinventarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productoinventario|Productoinventario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productoinventario[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductoinventario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductoinventario(1234); // WHERE idproductoinventario = 1234
     * $query->filterByIdproductoinventario(array(12, 34)); // WHERE idproductoinventario IN (12, 34)
     * $query->filterByIdproductoinventario(array('min' => 12)); // WHERE idproductoinventario >= 12
     * $query->filterByIdproductoinventario(array('max' => 12)); // WHERE idproductoinventario <= 12
     * </code>
     *
     * @param     mixed $idproductoinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByIdproductoinventario($idproductoinventario = null, $comparison = null)
    {
        if (is_array($idproductoinventario)) {
            $useMinMax = false;
            if (isset($idproductoinventario['min'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $idproductoinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoinventario['max'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $idproductoinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $idproductoinventario, $comparison);
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
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoinventarioPeer::IDCLINICA, $idclinica, $comparison);
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
     * @see       filterByProductoclinica()
     *
     * @param     mixed $idproductoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByIdproductoclinica($idproductoclinica = null, $comparison = null)
    {
        if (is_array($idproductoclinica)) {
            $useMinMax = false;
            if (isset($idproductoclinica['min'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOCLINICA, $idproductoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoclinica['max'])) {
                $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOCLINICA, $idproductoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOCLINICA, $idproductoclinica, $comparison);
    }

    /**
     * Filter the query on the productoinventario_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoinventarioFecha('2011-03-14'); // WHERE productoinventario_fecha = '2011-03-14'
     * $query->filterByProductoinventarioFecha('now'); // WHERE productoinventario_fecha = '2011-03-14'
     * $query->filterByProductoinventarioFecha(array('max' => 'yesterday')); // WHERE productoinventario_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $productoinventarioFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByProductoinventarioFecha($productoinventarioFecha = null, $comparison = null)
    {
        if (is_array($productoinventarioFecha)) {
            $useMinMax = false;
            if (isset($productoinventarioFecha['min'])) {
                $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_FECHA, $productoinventarioFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoinventarioFecha['max'])) {
                $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_FECHA, $productoinventarioFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_FECHA, $productoinventarioFecha, $comparison);
    }

    /**
     * Filter the query on the productoinventario_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoinventarioCantidad(1234); // WHERE productoinventario_cantidad = 1234
     * $query->filterByProductoinventarioCantidad(array(12, 34)); // WHERE productoinventario_cantidad IN (12, 34)
     * $query->filterByProductoinventarioCantidad(array('min' => 12)); // WHERE productoinventario_cantidad >= 12
     * $query->filterByProductoinventarioCantidad(array('max' => 12)); // WHERE productoinventario_cantidad <= 12
     * </code>
     *
     * @param     mixed $productoinventarioCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function filterByProductoinventarioCantidad($productoinventarioCantidad = null, $comparison = null)
    {
        if (is_array($productoinventarioCantidad)) {
            $useMinMax = false;
            if (isset($productoinventarioCantidad['min'])) {
                $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_CANTIDAD, $productoinventarioCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoinventarioCantidad['max'])) {
                $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_CANTIDAD, $productoinventarioCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoinventarioPeer::PRODUCTOINVENTARIO_CANTIDAD, $productoinventarioCantidad, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(ProductoinventarioPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoinventarioPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return ProductoinventarioQuery The current query, for fluid interface
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
     * Filter the query by a related Productoclinica object
     *
     * @param   Productoclinica|PropelObjectCollection $productoclinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoclinica($productoclinica, $comparison = null)
    {
        if ($productoclinica instanceof Productoclinica) {
            return $this
                ->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOCLINICA, $productoclinica->getIdproductoclinica(), $comparison);
        } elseif ($productoclinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOCLINICA, $productoclinica->toKeyValue('PrimaryKey', 'Idproductoclinica'), $comparison);
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
     * @return ProductoinventarioQuery The current query, for fluid interface
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
     * @param   Productoinventario $productoinventario Object to remove from the list of results
     *
     * @return ProductoinventarioQuery The current query, for fluid interface
     */
    public function prune($productoinventario = null)
    {
        if ($productoinventario) {
            $this->addUsingAlias(ProductoinventarioPeer::IDPRODUCTOINVENTARIO, $productoinventario->getIdproductoinventario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
