<?php


/**
 * Base class that represents a query for the 'insumo' table.
 *
 *
 *
 * @method InsumoQuery orderByIdinsumo($order = Criteria::ASC) Order by the idinsumo column
 * @method InsumoQuery orderByInsumoNombre($order = Criteria::ASC) Order by the insumo_nombre column
 * @method InsumoQuery orderByInsumoDescripcion($order = Criteria::ASC) Order by the insumo_descripcion column
 * @method InsumoQuery orderByInsumoCosto($order = Criteria::ASC) Order by the insumo_costo column
 *
 * @method InsumoQuery groupByIdinsumo() Group by the idinsumo column
 * @method InsumoQuery groupByInsumoNombre() Group by the insumo_nombre column
 * @method InsumoQuery groupByInsumoDescripcion() Group by the insumo_descripcion column
 * @method InsumoQuery groupByInsumoCosto() Group by the insumo_costo column
 *
 * @method InsumoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InsumoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InsumoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InsumoQuery leftJoinInsumoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Insumoclinica relation
 * @method InsumoQuery rightJoinInsumoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Insumoclinica relation
 * @method InsumoQuery innerJoinInsumoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Insumoclinica relation
 *
 * @method InsumoQuery leftJoinServicioinsumo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioinsumo relation
 * @method InsumoQuery rightJoinServicioinsumo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioinsumo relation
 * @method InsumoQuery innerJoinServicioinsumo($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioinsumo relation
 *
 * @method Insumo findOne(PropelPDO $con = null) Return the first Insumo matching the query
 * @method Insumo findOneOrCreate(PropelPDO $con = null) Return the first Insumo matching the query, or a new Insumo object populated from the query conditions when no match is found
 *
 * @method Insumo findOneByInsumoNombre(string $insumo_nombre) Return the first Insumo filtered by the insumo_nombre column
 * @method Insumo findOneByInsumoDescripcion(string $insumo_descripcion) Return the first Insumo filtered by the insumo_descripcion column
 * @method Insumo findOneByInsumoCosto(string $insumo_costo) Return the first Insumo filtered by the insumo_costo column
 *
 * @method array findByIdinsumo(int $idinsumo) Return Insumo objects filtered by the idinsumo column
 * @method array findByInsumoNombre(string $insumo_nombre) Return Insumo objects filtered by the insumo_nombre column
 * @method array findByInsumoDescripcion(string $insumo_descripcion) Return Insumo objects filtered by the insumo_descripcion column
 * @method array findByInsumoCosto(string $insumo_costo) Return Insumo objects filtered by the insumo_costo column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseInsumoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInsumoQuery object.
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
            $modelName = 'Insumo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InsumoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InsumoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InsumoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InsumoQuery) {
            return $criteria;
        }
        $query = new InsumoQuery(null, null, $modelAlias);

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
     * @return   Insumo|Insumo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InsumoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InsumoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Insumo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdinsumo($key, $con = null)
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
     * @return                 Insumo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinsumo`, `insumo_nombre`, `insumo_descripcion`, `insumo_costo` FROM `insumo` WHERE `idinsumo` = :p0';
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
            $obj = new Insumo();
            $obj->hydrate($row);
            InsumoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Insumo|Insumo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Insumo[]|mixed the list of results, formatted by the current formatter
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
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InsumoPeer::IDINSUMO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InsumoPeer::IDINSUMO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idinsumo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinsumo(1234); // WHERE idinsumo = 1234
     * $query->filterByIdinsumo(array(12, 34)); // WHERE idinsumo IN (12, 34)
     * $query->filterByIdinsumo(array('min' => 12)); // WHERE idinsumo >= 12
     * $query->filterByIdinsumo(array('max' => 12)); // WHERE idinsumo <= 12
     * </code>
     *
     * @param     mixed $idinsumo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByIdinsumo($idinsumo = null, $comparison = null)
    {
        if (is_array($idinsumo)) {
            $useMinMax = false;
            if (isset($idinsumo['min'])) {
                $this->addUsingAlias(InsumoPeer::IDINSUMO, $idinsumo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinsumo['max'])) {
                $this->addUsingAlias(InsumoPeer::IDINSUMO, $idinsumo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoPeer::IDINSUMO, $idinsumo, $comparison);
    }

    /**
     * Filter the query on the insumo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoNombre('fooValue');   // WHERE insumo_nombre = 'fooValue'
     * $query->filterByInsumoNombre('%fooValue%'); // WHERE insumo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insumoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByInsumoNombre($insumoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insumoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $insumoNombre)) {
                $insumoNombre = str_replace('*', '%', $insumoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InsumoPeer::INSUMO_NOMBRE, $insumoNombre, $comparison);
    }

    /**
     * Filter the query on the insumo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoDescripcion('fooValue');   // WHERE insumo_descripcion = 'fooValue'
     * $query->filterByInsumoDescripcion('%fooValue%'); // WHERE insumo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insumoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByInsumoDescripcion($insumoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insumoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $insumoDescripcion)) {
                $insumoDescripcion = str_replace('*', '%', $insumoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InsumoPeer::INSUMO_DESCRIPCION, $insumoDescripcion, $comparison);
    }

    /**
     * Filter the query on the insumo_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoCosto(1234); // WHERE insumo_costo = 1234
     * $query->filterByInsumoCosto(array(12, 34)); // WHERE insumo_costo IN (12, 34)
     * $query->filterByInsumoCosto(array('min' => 12)); // WHERE insumo_costo >= 12
     * $query->filterByInsumoCosto(array('max' => 12)); // WHERE insumo_costo <= 12
     * </code>
     *
     * @param     mixed $insumoCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function filterByInsumoCosto($insumoCosto = null, $comparison = null)
    {
        if (is_array($insumoCosto)) {
            $useMinMax = false;
            if (isset($insumoCosto['min'])) {
                $this->addUsingAlias(InsumoPeer::INSUMO_COSTO, $insumoCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insumoCosto['max'])) {
                $this->addUsingAlias(InsumoPeer::INSUMO_COSTO, $insumoCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoPeer::INSUMO_COSTO, $insumoCosto, $comparison);
    }

    /**
     * Filter the query by a related Insumoclinica object
     *
     * @param   Insumoclinica|PropelObjectCollection $insumoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInsumoclinica($insumoclinica, $comparison = null)
    {
        if ($insumoclinica instanceof Insumoclinica) {
            return $this
                ->addUsingAlias(InsumoPeer::IDINSUMO, $insumoclinica->getIdinsumo(), $comparison);
        } elseif ($insumoclinica instanceof PropelObjectCollection) {
            return $this
                ->useInsumoclinicaQuery()
                ->filterByPrimaryKeys($insumoclinica->getPrimaryKeys())
                ->endUse();
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
     * @return InsumoQuery The current query, for fluid interface
     */
    public function joinInsumoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useInsumoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInsumoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Insumoclinica', 'InsumoclinicaQuery');
    }

    /**
     * Filter the query by a related Servicioinsumo object
     *
     * @param   Servicioinsumo|PropelObjectCollection $servicioinsumo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioinsumo($servicioinsumo, $comparison = null)
    {
        if ($servicioinsumo instanceof Servicioinsumo) {
            return $this
                ->addUsingAlias(InsumoPeer::IDINSUMO, $servicioinsumo->getIdinsumo(), $comparison);
        } elseif ($servicioinsumo instanceof PropelObjectCollection) {
            return $this
                ->useServicioinsumoQuery()
                ->filterByPrimaryKeys($servicioinsumo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByServicioinsumo() only accepts arguments of type Servicioinsumo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicioinsumo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function joinServicioinsumo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicioinsumo');

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
            $this->addJoinObject($join, 'Servicioinsumo');
        }

        return $this;
    }

    /**
     * Use the Servicioinsumo relation Servicioinsumo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioinsumoQuery A secondary query class using the current class as primary query
     */
    public function useServicioinsumoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicioinsumo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioinsumo', 'ServicioinsumoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Insumo $insumo Object to remove from the list of results
     *
     * @return InsumoQuery The current query, for fluid interface
     */
    public function prune($insumo = null)
    {
        if ($insumo) {
            $this->addUsingAlias(InsumoPeer::IDINSUMO, $insumo->getIdinsumo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
