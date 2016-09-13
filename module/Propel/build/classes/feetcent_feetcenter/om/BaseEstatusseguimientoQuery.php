<?php


/**
 * Base class that represents a query for the 'estatusseguimiento' table.
 *
 *
 *
 * @method EstatusseguimientoQuery orderByIdestatusseguimiento($order = Criteria::ASC) Order by the idestatusseguimiento column
 * @method EstatusseguimientoQuery orderByEstatusseguimientoNombre($order = Criteria::ASC) Order by the estatusseguimiento_nombre column
 * @method EstatusseguimientoQuery orderByEstatusseguimientoColor($order = Criteria::ASC) Order by the estatusseguimiento_color column
 *
 * @method EstatusseguimientoQuery groupByIdestatusseguimiento() Group by the idestatusseguimiento column
 * @method EstatusseguimientoQuery groupByEstatusseguimientoNombre() Group by the estatusseguimiento_nombre column
 * @method EstatusseguimientoQuery groupByEstatusseguimientoColor() Group by the estatusseguimiento_color column
 *
 * @method EstatusseguimientoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EstatusseguimientoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EstatusseguimientoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EstatusseguimientoQuery leftJoinPacienteseguimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacienteseguimiento relation
 * @method EstatusseguimientoQuery rightJoinPacienteseguimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacienteseguimiento relation
 * @method EstatusseguimientoQuery innerJoinPacienteseguimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacienteseguimiento relation
 *
 * @method Estatusseguimiento findOne(PropelPDO $con = null) Return the first Estatusseguimiento matching the query
 * @method Estatusseguimiento findOneOrCreate(PropelPDO $con = null) Return the first Estatusseguimiento matching the query, or a new Estatusseguimiento object populated from the query conditions when no match is found
 *
 * @method Estatusseguimiento findOneByEstatusseguimientoNombre(string $estatusseguimiento_nombre) Return the first Estatusseguimiento filtered by the estatusseguimiento_nombre column
 * @method Estatusseguimiento findOneByEstatusseguimientoColor(string $estatusseguimiento_color) Return the first Estatusseguimiento filtered by the estatusseguimiento_color column
 *
 * @method array findByIdestatusseguimiento(int $idestatusseguimiento) Return Estatusseguimiento objects filtered by the idestatusseguimiento column
 * @method array findByEstatusseguimientoNombre(string $estatusseguimiento_nombre) Return Estatusseguimiento objects filtered by the estatusseguimiento_nombre column
 * @method array findByEstatusseguimientoColor(string $estatusseguimiento_color) Return Estatusseguimiento objects filtered by the estatusseguimiento_color column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEstatusseguimientoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEstatusseguimientoQuery object.
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
            $modelName = 'Estatusseguimiento';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstatusseguimientoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EstatusseguimientoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstatusseguimientoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstatusseguimientoQuery) {
            return $criteria;
        }
        $query = new EstatusseguimientoQuery(null, null, $modelAlias);

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
     * @return   Estatusseguimiento|Estatusseguimiento[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstatusseguimientoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstatusseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Estatusseguimiento A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdestatusseguimiento($key, $con = null)
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
     * @return                 Estatusseguimiento A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idestatusseguimiento`, `estatusseguimiento_nombre`, `estatusseguimiento_color` FROM `estatusseguimiento` WHERE `idestatusseguimiento` = :p0';
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
            $obj = new Estatusseguimiento();
            $obj->hydrate($row);
            EstatusseguimientoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Estatusseguimiento|Estatusseguimiento[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Estatusseguimiento[]|mixed the list of results, formatted by the current formatter
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
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idestatusseguimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByIdestatusseguimiento(1234); // WHERE idestatusseguimiento = 1234
     * $query->filterByIdestatusseguimiento(array(12, 34)); // WHERE idestatusseguimiento IN (12, 34)
     * $query->filterByIdestatusseguimiento(array('min' => 12)); // WHERE idestatusseguimiento >= 12
     * $query->filterByIdestatusseguimiento(array('max' => 12)); // WHERE idestatusseguimiento <= 12
     * </code>
     *
     * @param     mixed $idestatusseguimiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function filterByIdestatusseguimiento($idestatusseguimiento = null, $comparison = null)
    {
        if (is_array($idestatusseguimiento)) {
            $useMinMax = false;
            if (isset($idestatusseguimiento['min'])) {
                $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idestatusseguimiento['max'])) {
                $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $idestatusseguimiento, $comparison);
    }

    /**
     * Filter the query on the estatusseguimiento_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatusseguimientoNombre('fooValue');   // WHERE estatusseguimiento_nombre = 'fooValue'
     * $query->filterByEstatusseguimientoNombre('%fooValue%'); // WHERE estatusseguimiento_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatusseguimientoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function filterByEstatusseguimientoNombre($estatusseguimientoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatusseguimientoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatusseguimientoNombre)) {
                $estatusseguimientoNombre = str_replace('*', '%', $estatusseguimientoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_NOMBRE, $estatusseguimientoNombre, $comparison);
    }

    /**
     * Filter the query on the estatusseguimiento_color column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatusseguimientoColor('fooValue');   // WHERE estatusseguimiento_color = 'fooValue'
     * $query->filterByEstatusseguimientoColor('%fooValue%'); // WHERE estatusseguimiento_color LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatusseguimientoColor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function filterByEstatusseguimientoColor($estatusseguimientoColor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatusseguimientoColor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatusseguimientoColor)) {
                $estatusseguimientoColor = str_replace('*', '%', $estatusseguimientoColor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_COLOR, $estatusseguimientoColor, $comparison);
    }

    /**
     * Filter the query by a related Pacienteseguimiento object
     *
     * @param   Pacienteseguimiento|PropelObjectCollection $pacienteseguimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EstatusseguimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteseguimiento($pacienteseguimiento, $comparison = null)
    {
        if ($pacienteseguimiento instanceof Pacienteseguimiento) {
            return $this
                ->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $pacienteseguimiento->getIdestatusseguimiento(), $comparison);
        } elseif ($pacienteseguimiento instanceof PropelObjectCollection) {
            return $this
                ->usePacienteseguimientoQuery()
                ->filterByPrimaryKeys($pacienteseguimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacienteseguimiento() only accepts arguments of type Pacienteseguimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacienteseguimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function joinPacienteseguimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacienteseguimiento');

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
            $this->addJoinObject($join, 'Pacienteseguimiento');
        }

        return $this;
    }

    /**
     * Use the Pacienteseguimiento relation Pacienteseguimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteseguimientoQuery A secondary query class using the current class as primary query
     */
    public function usePacienteseguimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteseguimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacienteseguimiento', 'PacienteseguimientoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Estatusseguimiento $estatusseguimiento Object to remove from the list of results
     *
     * @return EstatusseguimientoQuery The current query, for fluid interface
     */
    public function prune($estatusseguimiento = null)
    {
        if ($estatusseguimiento) {
            $this->addUsingAlias(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $estatusseguimiento->getIdestatusseguimiento(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
