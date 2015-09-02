<?php


/**
 * Base class that represents a query for the 'cancelacionventaclinica' table.
 *
 *
 *
 * @method CancelacionventaclinicaQuery orderByIdcancelacionventaclinica($order = Criteria::ASC) Order by the idcancelacionventaclinica column
 * @method CancelacionventaclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method CancelacionventaclinicaQuery orderByCancelacionventaclinicaCantidad($order = Criteria::ASC) Order by the cancelacionventaclinica_cantidad column
 *
 * @method CancelacionventaclinicaQuery groupByIdcancelacionventaclinica() Group by the idcancelacionventaclinica column
 * @method CancelacionventaclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method CancelacionventaclinicaQuery groupByCancelacionventaclinicaCantidad() Group by the cancelacionventaclinica_cantidad column
 *
 * @method CancelacionventaclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CancelacionventaclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CancelacionventaclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CancelacionventaclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method CancelacionventaclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method CancelacionventaclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method Cancelacionventaclinica findOne(PropelPDO $con = null) Return the first Cancelacionventaclinica matching the query
 * @method Cancelacionventaclinica findOneOrCreate(PropelPDO $con = null) Return the first Cancelacionventaclinica matching the query, or a new Cancelacionventaclinica object populated from the query conditions when no match is found
 *
 * @method Cancelacionventaclinica findOneByIdclinica(int $idclinica) Return the first Cancelacionventaclinica filtered by the idclinica column
 * @method Cancelacionventaclinica findOneByCancelacionventaclinicaCantidad(int $cancelacionventaclinica_cantidad) Return the first Cancelacionventaclinica filtered by the cancelacionventaclinica_cantidad column
 *
 * @method array findByIdcancelacionventaclinica(int $idcancelacionventaclinica) Return Cancelacionventaclinica objects filtered by the idcancelacionventaclinica column
 * @method array findByIdclinica(int $idclinica) Return Cancelacionventaclinica objects filtered by the idclinica column
 * @method array findByCancelacionventaclinicaCantidad(int $cancelacionventaclinica_cantidad) Return Cancelacionventaclinica objects filtered by the cancelacionventaclinica_cantidad column
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseCancelacionventaclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCancelacionventaclinicaQuery object.
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
            $modelName = 'Cancelacionventaclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CancelacionventaclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CancelacionventaclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CancelacionventaclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CancelacionventaclinicaQuery) {
            return $criteria;
        }
        $query = new CancelacionventaclinicaQuery(null, null, $modelAlias);

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
     * @return   Cancelacionventaclinica|Cancelacionventaclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CancelacionventaclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CancelacionventaclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cancelacionventaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcancelacionventaclinica($key, $con = null)
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
     * @return                 Cancelacionventaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcancelacionventaclinica`, `idclinica`, `cancelacionventaclinica_cantidad` FROM `cancelacionventaclinica` WHERE `idcancelacionventaclinica` = :p0';
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
            $obj = new Cancelacionventaclinica();
            $obj->hydrate($row);
            CancelacionventaclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cancelacionventaclinica|Cancelacionventaclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cancelacionventaclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcancelacionventaclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcancelacionventaclinica(1234); // WHERE idcancelacionventaclinica = 1234
     * $query->filterByIdcancelacionventaclinica(array(12, 34)); // WHERE idcancelacionventaclinica IN (12, 34)
     * $query->filterByIdcancelacionventaclinica(array('min' => 12)); // WHERE idcancelacionventaclinica >= 12
     * $query->filterByIdcancelacionventaclinica(array('max' => 12)); // WHERE idcancelacionventaclinica <= 12
     * </code>
     *
     * @param     mixed $idcancelacionventaclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdcancelacionventaclinica($idcancelacionventaclinica = null, $comparison = null)
    {
        if (is_array($idcancelacionventaclinica)) {
            $useMinMax = false;
            if (isset($idcancelacionventaclinica['min'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $idcancelacionventaclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcancelacionventaclinica['max'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $idcancelacionventaclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $idcancelacionventaclinica, $comparison);
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
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CancelacionventaclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the cancelacionventaclinica_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelacionventaclinicaCantidad(1234); // WHERE cancelacionventaclinica_cantidad = 1234
     * $query->filterByCancelacionventaclinicaCantidad(array(12, 34)); // WHERE cancelacionventaclinica_cantidad IN (12, 34)
     * $query->filterByCancelacionventaclinicaCantidad(array('min' => 12)); // WHERE cancelacionventaclinica_cantidad >= 12
     * $query->filterByCancelacionventaclinicaCantidad(array('max' => 12)); // WHERE cancelacionventaclinica_cantidad <= 12
     * </code>
     *
     * @param     mixed $cancelacionventaclinicaCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function filterByCancelacionventaclinicaCantidad($cancelacionventaclinicaCantidad = null, $comparison = null)
    {
        if (is_array($cancelacionventaclinicaCantidad)) {
            $useMinMax = false;
            if (isset($cancelacionventaclinicaCantidad['min'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::CANCELACIONVENTACLINICA_CANTIDAD, $cancelacionventaclinicaCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelacionventaclinicaCantidad['max'])) {
                $this->addUsingAlias(CancelacionventaclinicaPeer::CANCELACIONVENTACLINICA_CANTIDAD, $cancelacionventaclinicaCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CancelacionventaclinicaPeer::CANCELACIONVENTACLINICA_CANTIDAD, $cancelacionventaclinicaCantidad, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CancelacionventaclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(CancelacionventaclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CancelacionventaclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Cancelacionventaclinica $cancelacionventaclinica Object to remove from the list of results
     *
     * @return CancelacionventaclinicaQuery The current query, for fluid interface
     */
    public function prune($cancelacionventaclinica = null)
    {
        if ($cancelacionventaclinica) {
            $this->addUsingAlias(CancelacionventaclinicaPeer::IDCANCELACIONVENTACLINICA, $cancelacionventaclinica->getIdcancelacionventaclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
