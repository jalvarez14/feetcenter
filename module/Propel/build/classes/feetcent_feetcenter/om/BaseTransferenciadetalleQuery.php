<?php


/**
 * Base class that represents a query for the 'transferenciadetalle' table.
 *
 *
 *
 * @method TransferenciadetalleQuery orderByIdtransferenciadetalle($order = Criteria::ASC) Order by the idtransferenciadetalle column
 * @method TransferenciadetalleQuery orderByIdtransferencia($order = Criteria::ASC) Order by the idtransferencia column
 * @method TransferenciadetalleQuery orderByIdproductoclinica($order = Criteria::ASC) Order by the idproductoclinica column
 * @method TransferenciadetalleQuery orderByIdinsumoclinica($order = Criteria::ASC) Order by the idinsumoclinica column
 * @method TransferenciadetalleQuery orderByTransferenciadetalleCantidad($order = Criteria::ASC) Order by the transferenciadetalle_cantidad column
 *
 * @method TransferenciadetalleQuery groupByIdtransferenciadetalle() Group by the idtransferenciadetalle column
 * @method TransferenciadetalleQuery groupByIdtransferencia() Group by the idtransferencia column
 * @method TransferenciadetalleQuery groupByIdproductoclinica() Group by the idproductoclinica column
 * @method TransferenciadetalleQuery groupByIdinsumoclinica() Group by the idinsumoclinica column
 * @method TransferenciadetalleQuery groupByTransferenciadetalleCantidad() Group by the transferenciadetalle_cantidad column
 *
 * @method TransferenciadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TransferenciadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TransferenciadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TransferenciadetalleQuery leftJoinInsumoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Insumoclinica relation
 * @method TransferenciadetalleQuery rightJoinInsumoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Insumoclinica relation
 * @method TransferenciadetalleQuery innerJoinInsumoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Insumoclinica relation
 *
 * @method TransferenciadetalleQuery leftJoinProductoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoclinica relation
 * @method TransferenciadetalleQuery rightJoinProductoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoclinica relation
 * @method TransferenciadetalleQuery innerJoinProductoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoclinica relation
 *
 * @method TransferenciadetalleQuery leftJoinTransferencia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transferencia relation
 * @method TransferenciadetalleQuery rightJoinTransferencia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transferencia relation
 * @method TransferenciadetalleQuery innerJoinTransferencia($relationAlias = null) Adds a INNER JOIN clause to the query using the Transferencia relation
 *
 * @method Transferenciadetalle findOne(PropelPDO $con = null) Return the first Transferenciadetalle matching the query
 * @method Transferenciadetalle findOneOrCreate(PropelPDO $con = null) Return the first Transferenciadetalle matching the query, or a new Transferenciadetalle object populated from the query conditions when no match is found
 *
 * @method Transferenciadetalle findOneByIdtransferencia(int $idtransferencia) Return the first Transferenciadetalle filtered by the idtransferencia column
 * @method Transferenciadetalle findOneByIdproductoclinica(int $idproductoclinica) Return the first Transferenciadetalle filtered by the idproductoclinica column
 * @method Transferenciadetalle findOneByIdinsumoclinica(int $idinsumoclinica) Return the first Transferenciadetalle filtered by the idinsumoclinica column
 * @method Transferenciadetalle findOneByTransferenciadetalleCantidad(string $transferenciadetalle_cantidad) Return the first Transferenciadetalle filtered by the transferenciadetalle_cantidad column
 *
 * @method array findByIdtransferenciadetalle(int $idtransferenciadetalle) Return Transferenciadetalle objects filtered by the idtransferenciadetalle column
 * @method array findByIdtransferencia(int $idtransferencia) Return Transferenciadetalle objects filtered by the idtransferencia column
 * @method array findByIdproductoclinica(int $idproductoclinica) Return Transferenciadetalle objects filtered by the idproductoclinica column
 * @method array findByIdinsumoclinica(int $idinsumoclinica) Return Transferenciadetalle objects filtered by the idinsumoclinica column
 * @method array findByTransferenciadetalleCantidad(string $transferenciadetalle_cantidad) Return Transferenciadetalle objects filtered by the transferenciadetalle_cantidad column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferenciadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTransferenciadetalleQuery object.
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
            $modelName = 'Transferenciadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TransferenciadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TransferenciadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TransferenciadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TransferenciadetalleQuery) {
            return $criteria;
        }
        $query = new TransferenciadetalleQuery(null, null, $modelAlias);

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
     * @return   Transferenciadetalle|Transferenciadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TransferenciadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Transferenciadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtransferenciadetalle($key, $con = null)
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
     * @return                 Transferenciadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtransferenciadetalle`, `idtransferencia`, `idproductoclinica`, `idinsumoclinica`, `transferenciadetalle_cantidad` FROM `transferenciadetalle` WHERE `idtransferenciadetalle` = :p0';
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
            $obj = new Transferenciadetalle();
            $obj->hydrate($row);
            TransferenciadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Transferenciadetalle|Transferenciadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Transferenciadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtransferenciadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtransferenciadetalle(1234); // WHERE idtransferenciadetalle = 1234
     * $query->filterByIdtransferenciadetalle(array(12, 34)); // WHERE idtransferenciadetalle IN (12, 34)
     * $query->filterByIdtransferenciadetalle(array('min' => 12)); // WHERE idtransferenciadetalle >= 12
     * $query->filterByIdtransferenciadetalle(array('max' => 12)); // WHERE idtransferenciadetalle <= 12
     * </code>
     *
     * @param     mixed $idtransferenciadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByIdtransferenciadetalle($idtransferenciadetalle = null, $comparison = null)
    {
        if (is_array($idtransferenciadetalle)) {
            $useMinMax = false;
            if (isset($idtransferenciadetalle['min'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $idtransferenciadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtransferenciadetalle['max'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $idtransferenciadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $idtransferenciadetalle, $comparison);
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
     * @see       filterByTransferencia()
     *
     * @param     mixed $idtransferencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByIdtransferencia($idtransferencia = null, $comparison = null)
    {
        if (is_array($idtransferencia)) {
            $useMinMax = false;
            if (isset($idtransferencia['min'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIA, $idtransferencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtransferencia['max'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIA, $idtransferencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIA, $idtransferencia, $comparison);
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
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductoclinica($idproductoclinica = null, $comparison = null)
    {
        if (is_array($idproductoclinica)) {
            $useMinMax = false;
            if (isset($idproductoclinica['min'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoclinica['max'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica, $comparison);
    }

    /**
     * Filter the query on the idinsumoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinsumoclinica(1234); // WHERE idinsumoclinica = 1234
     * $query->filterByIdinsumoclinica(array(12, 34)); // WHERE idinsumoclinica IN (12, 34)
     * $query->filterByIdinsumoclinica(array('min' => 12)); // WHERE idinsumoclinica >= 12
     * $query->filterByIdinsumoclinica(array('max' => 12)); // WHERE idinsumoclinica <= 12
     * </code>
     *
     * @see       filterByInsumoclinica()
     *
     * @param     mixed $idinsumoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByIdinsumoclinica($idinsumoclinica = null, $comparison = null)
    {
        if (is_array($idinsumoclinica)) {
            $useMinMax = false;
            if (isset($idinsumoclinica['min'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDINSUMOCLINICA, $idinsumoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinsumoclinica['max'])) {
                $this->addUsingAlias(TransferenciadetallePeer::IDINSUMOCLINICA, $idinsumoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciadetallePeer::IDINSUMOCLINICA, $idinsumoclinica, $comparison);
    }

    /**
     * Filter the query on the transferenciadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciadetalleCantidad(1234); // WHERE transferenciadetalle_cantidad = 1234
     * $query->filterByTransferenciadetalleCantidad(array(12, 34)); // WHERE transferenciadetalle_cantidad IN (12, 34)
     * $query->filterByTransferenciadetalleCantidad(array('min' => 12)); // WHERE transferenciadetalle_cantidad >= 12
     * $query->filterByTransferenciadetalleCantidad(array('max' => 12)); // WHERE transferenciadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $transferenciadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function filterByTransferenciadetalleCantidad($transferenciadetalleCantidad = null, $comparison = null)
    {
        if (is_array($transferenciadetalleCantidad)) {
            $useMinMax = false;
            if (isset($transferenciadetalleCantidad['min'])) {
                $this->addUsingAlias(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD, $transferenciadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferenciadetalleCantidad['max'])) {
                $this->addUsingAlias(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD, $transferenciadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD, $transferenciadetalleCantidad, $comparison);
    }

    /**
     * Filter the query by a related Insumoclinica object
     *
     * @param   Insumoclinica|PropelObjectCollection $insumoclinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInsumoclinica($insumoclinica, $comparison = null)
    {
        if ($insumoclinica instanceof Insumoclinica) {
            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDINSUMOCLINICA, $insumoclinica->getIdinsumoclinica(), $comparison);
        } elseif ($insumoclinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDINSUMOCLINICA, $insumoclinica->toKeyValue('PrimaryKey', 'Idinsumoclinica'), $comparison);
        } else {
            throw new PropelException('filterByInsumoclinica() only accepts arguments of type Insumoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Insumoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function joinInsumoclinica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Insumoclinica');

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
            $this->addJoinObject($join, 'Insumoclinica');
        }

        return $this;
    }

    /**
     * Use the Insumoclinica relation Insumoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InsumoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useInsumoclinicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInsumoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Insumoclinica', 'InsumoclinicaQuery');
    }

    /**
     * Filter the query by a related Productoclinica object
     *
     * @param   Productoclinica|PropelObjectCollection $productoclinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoclinica($productoclinica, $comparison = null)
    {
        if ($productoclinica instanceof Productoclinica) {
            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDPRODUCTOCLINICA, $productoclinica->getIdproductoclinica(), $comparison);
        } elseif ($productoclinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDPRODUCTOCLINICA, $productoclinica->toKeyValue('PrimaryKey', 'Idproductoclinica'), $comparison);
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
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function joinProductoclinica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useProductoclinicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProductoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productoclinica', 'ProductoclinicaQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferencia($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIA, $transferencia->getIdtransferencia(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIA, $transferencia->toKeyValue('PrimaryKey', 'Idtransferencia'), $comparison);
        } else {
            throw new PropelException('filterByTransferencia() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Transferencia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function joinTransferencia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Transferencia');

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
            $this->addJoinObject($join, 'Transferencia');
        }

        return $this;
    }

    /**
     * Use the Transferencia relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferencia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transferencia', 'TransferenciaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Transferenciadetalle $transferenciadetalle Object to remove from the list of results
     *
     * @return TransferenciadetalleQuery The current query, for fluid interface
     */
    public function prune($transferenciadetalle = null)
    {
        if ($transferenciadetalle) {
            $this->addUsingAlias(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $transferenciadetalle->getIdtransferenciadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
