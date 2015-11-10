<?php


/**
 * Base class that represents a query for the 'recurso' table.
 *
 *
 *
 * @method RecursoQuery orderByIdrecurso($order = Criteria::ASC) Order by the idrecurso column
 * @method RecursoQuery orderByRecursoNombre($order = Criteria::ASC) Order by the recurso_nombre column
 * @method RecursoQuery orderByRecursoDescripcion($order = Criteria::ASC) Order by the recurso_descripcion column
 *
 * @method RecursoQuery groupByIdrecurso() Group by the idrecurso column
 * @method RecursoQuery groupByRecursoNombre() Group by the recurso_nombre column
 * @method RecursoQuery groupByRecursoDescripcion() Group by the recurso_descripcion column
 *
 * @method RecursoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RecursoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RecursoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RecursoQuery leftJoinRolrecurso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rolrecurso relation
 * @method RecursoQuery rightJoinRolrecurso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rolrecurso relation
 * @method RecursoQuery innerJoinRolrecurso($relationAlias = null) Adds a INNER JOIN clause to the query using the Rolrecurso relation
 *
 * @method Recurso findOne(PropelPDO $con = null) Return the first Recurso matching the query
 * @method Recurso findOneOrCreate(PropelPDO $con = null) Return the first Recurso matching the query, or a new Recurso object populated from the query conditions when no match is found
 *
 * @method Recurso findOneByRecursoNombre(string $recurso_nombre) Return the first Recurso filtered by the recurso_nombre column
 * @method Recurso findOneByRecursoDescripcion(string $recurso_descripcion) Return the first Recurso filtered by the recurso_descripcion column
 *
 * @method array findByIdrecurso(int $idrecurso) Return Recurso objects filtered by the idrecurso column
 * @method array findByRecursoNombre(string $recurso_nombre) Return Recurso objects filtered by the recurso_nombre column
 * @method array findByRecursoDescripcion(string $recurso_descripcion) Return Recurso objects filtered by the recurso_descripcion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseRecursoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRecursoQuery object.
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
            $modelName = 'Recurso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RecursoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RecursoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RecursoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RecursoQuery) {
            return $criteria;
        }
        $query = new RecursoQuery(null, null, $modelAlias);

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
     * @return   Recurso|Recurso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RecursoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RecursoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Recurso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrecurso($key, $con = null)
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
     * @return                 Recurso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrecurso`, `recurso_nombre`, `recurso_descripcion` FROM `recurso` WHERE `idrecurso` = :p0';
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
            $obj = new Recurso();
            $obj->hydrate($row);
            RecursoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Recurso|Recurso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Recurso[]|mixed the list of results, formatted by the current formatter
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
     * @return RecursoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RecursoPeer::IDRECURSO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RecursoPeer::IDRECURSO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrecurso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrecurso(1234); // WHERE idrecurso = 1234
     * $query->filterByIdrecurso(array(12, 34)); // WHERE idrecurso IN (12, 34)
     * $query->filterByIdrecurso(array('min' => 12)); // WHERE idrecurso >= 12
     * $query->filterByIdrecurso(array('max' => 12)); // WHERE idrecurso <= 12
     * </code>
     *
     * @param     mixed $idrecurso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function filterByIdrecurso($idrecurso = null, $comparison = null)
    {
        if (is_array($idrecurso)) {
            $useMinMax = false;
            if (isset($idrecurso['min'])) {
                $this->addUsingAlias(RecursoPeer::IDRECURSO, $idrecurso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrecurso['max'])) {
                $this->addUsingAlias(RecursoPeer::IDRECURSO, $idrecurso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecursoPeer::IDRECURSO, $idrecurso, $comparison);
    }

    /**
     * Filter the query on the recurso_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByRecursoNombre('fooValue');   // WHERE recurso_nombre = 'fooValue'
     * $query->filterByRecursoNombre('%fooValue%'); // WHERE recurso_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recursoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function filterByRecursoNombre($recursoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recursoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recursoNombre)) {
                $recursoNombre = str_replace('*', '%', $recursoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RecursoPeer::RECURSO_NOMBRE, $recursoNombre, $comparison);
    }

    /**
     * Filter the query on the recurso_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByRecursoDescripcion('fooValue');   // WHERE recurso_descripcion = 'fooValue'
     * $query->filterByRecursoDescripcion('%fooValue%'); // WHERE recurso_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recursoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function filterByRecursoDescripcion($recursoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recursoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recursoDescripcion)) {
                $recursoDescripcion = str_replace('*', '%', $recursoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RecursoPeer::RECURSO_DESCRIPCION, $recursoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Rolrecurso object
     *
     * @param   Rolrecurso|PropelObjectCollection $rolrecurso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RecursoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRolrecurso($rolrecurso, $comparison = null)
    {
        if ($rolrecurso instanceof Rolrecurso) {
            return $this
                ->addUsingAlias(RecursoPeer::IDRECURSO, $rolrecurso->getIdrecurso(), $comparison);
        } elseif ($rolrecurso instanceof PropelObjectCollection) {
            return $this
                ->useRolrecursoQuery()
                ->filterByPrimaryKeys($rolrecurso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRolrecurso() only accepts arguments of type Rolrecurso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rolrecurso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function joinRolrecurso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rolrecurso');

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
            $this->addJoinObject($join, 'Rolrecurso');
        }

        return $this;
    }

    /**
     * Use the Rolrecurso relation Rolrecurso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolrecursoQuery A secondary query class using the current class as primary query
     */
    public function useRolrecursoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRolrecurso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rolrecurso', 'RolrecursoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Recurso $recurso Object to remove from the list of results
     *
     * @return RecursoQuery The current query, for fluid interface
     */
    public function prune($recurso = null)
    {
        if ($recurso) {
            $this->addUsingAlias(RecursoPeer::IDRECURSO, $recurso->getIdrecurso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
