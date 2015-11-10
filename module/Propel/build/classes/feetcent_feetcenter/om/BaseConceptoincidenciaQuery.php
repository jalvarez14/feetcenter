<?php


/**
 * Base class that represents a query for the 'conceptoincidencia' table.
 *
 *
 *
 * @method ConceptoincidenciaQuery orderByIdconceptoincidencia($order = Criteria::ASC) Order by the idconceptoincidencia column
 * @method ConceptoincidenciaQuery orderByConceptoincidenciaNombre($order = Criteria::ASC) Order by the conceptoincidencia_nombre column
 * @method ConceptoincidenciaQuery orderByConceptoincidenciaDescripcion($order = Criteria::ASC) Order by the conceptoincidencia_descripcion column
 *
 * @method ConceptoincidenciaQuery groupByIdconceptoincidencia() Group by the idconceptoincidencia column
 * @method ConceptoincidenciaQuery groupByConceptoincidenciaNombre() Group by the conceptoincidencia_nombre column
 * @method ConceptoincidenciaQuery groupByConceptoincidenciaDescripcion() Group by the conceptoincidencia_descripcion column
 *
 * @method ConceptoincidenciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptoincidenciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptoincidenciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptoincidenciaQuery leftJoinEmpleadoreporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadoreporte relation
 * @method ConceptoincidenciaQuery rightJoinEmpleadoreporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadoreporte relation
 * @method ConceptoincidenciaQuery innerJoinEmpleadoreporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadoreporte relation
 *
 * @method Conceptoincidencia findOne(PropelPDO $con = null) Return the first Conceptoincidencia matching the query
 * @method Conceptoincidencia findOneOrCreate(PropelPDO $con = null) Return the first Conceptoincidencia matching the query, or a new Conceptoincidencia object populated from the query conditions when no match is found
 *
 * @method Conceptoincidencia findOneByConceptoincidenciaNombre(string $conceptoincidencia_nombre) Return the first Conceptoincidencia filtered by the conceptoincidencia_nombre column
 * @method Conceptoincidencia findOneByConceptoincidenciaDescripcion(string $conceptoincidencia_descripcion) Return the first Conceptoincidencia filtered by the conceptoincidencia_descripcion column
 *
 * @method array findByIdconceptoincidencia(int $idconceptoincidencia) Return Conceptoincidencia objects filtered by the idconceptoincidencia column
 * @method array findByConceptoincidenciaNombre(string $conceptoincidencia_nombre) Return Conceptoincidencia objects filtered by the conceptoincidencia_nombre column
 * @method array findByConceptoincidenciaDescripcion(string $conceptoincidencia_descripcion) Return Conceptoincidencia objects filtered by the conceptoincidencia_descripcion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseConceptoincidenciaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptoincidenciaQuery object.
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
            $modelName = 'Conceptoincidencia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptoincidenciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptoincidenciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptoincidenciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptoincidenciaQuery) {
            return $criteria;
        }
        $query = new ConceptoincidenciaQuery(null, null, $modelAlias);

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
     * @return   Conceptoincidencia|Conceptoincidencia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptoincidenciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptoincidenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptoincidencia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconceptoincidencia($key, $con = null)
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
     * @return                 Conceptoincidencia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconceptoincidencia`, `conceptoincidencia_nombre`, `conceptoincidencia_descripcion` FROM `conceptoincidencia` WHERE `idconceptoincidencia` = :p0';
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
            $obj = new Conceptoincidencia();
            $obj->hydrate($row);
            ConceptoincidenciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptoincidencia|Conceptoincidencia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptoincidencia[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconceptoincidencia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptoincidencia(1234); // WHERE idconceptoincidencia = 1234
     * $query->filterByIdconceptoincidencia(array(12, 34)); // WHERE idconceptoincidencia IN (12, 34)
     * $query->filterByIdconceptoincidencia(array('min' => 12)); // WHERE idconceptoincidencia >= 12
     * $query->filterByIdconceptoincidencia(array('max' => 12)); // WHERE idconceptoincidencia <= 12
     * </code>
     *
     * @param     mixed $idconceptoincidencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function filterByIdconceptoincidencia($idconceptoincidencia = null, $comparison = null)
    {
        if (is_array($idconceptoincidencia)) {
            $useMinMax = false;
            if (isset($idconceptoincidencia['min'])) {
                $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptoincidencia['max'])) {
                $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia, $comparison);
    }

    /**
     * Filter the query on the conceptoincidencia_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoincidenciaNombre('fooValue');   // WHERE conceptoincidencia_nombre = 'fooValue'
     * $query->filterByConceptoincidenciaNombre('%fooValue%'); // WHERE conceptoincidencia_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoincidenciaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function filterByConceptoincidenciaNombre($conceptoincidenciaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoincidenciaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoincidenciaNombre)) {
                $conceptoincidenciaNombre = str_replace('*', '%', $conceptoincidenciaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_NOMBRE, $conceptoincidenciaNombre, $comparison);
    }

    /**
     * Filter the query on the conceptoincidencia_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoincidenciaDescripcion('fooValue');   // WHERE conceptoincidencia_descripcion = 'fooValue'
     * $query->filterByConceptoincidenciaDescripcion('%fooValue%'); // WHERE conceptoincidencia_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoincidenciaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function filterByConceptoincidenciaDescripcion($conceptoincidenciaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoincidenciaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoincidenciaDescripcion)) {
                $conceptoincidenciaDescripcion = str_replace('*', '%', $conceptoincidenciaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_DESCRIPCION, $conceptoincidenciaDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Empleadoreporte object
     *
     * @param   Empleadoreporte|PropelObjectCollection $empleadoreporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptoincidenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoreporte($empleadoreporte, $comparison = null)
    {
        if ($empleadoreporte instanceof Empleadoreporte) {
            return $this
                ->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $empleadoreporte->getIdconceptoincidencia(), $comparison);
        } elseif ($empleadoreporte instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadoreporteQuery()
                ->filterByPrimaryKeys($empleadoreporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoreporte() only accepts arguments of type Empleadoreporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadoreporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function joinEmpleadoreporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadoreporte');

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
            $this->addJoinObject($join, 'Empleadoreporte');
        }

        return $this;
    }

    /**
     * Use the Empleadoreporte relation Empleadoreporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoreporteQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoreporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoreporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadoreporte', 'EmpleadoreporteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Conceptoincidencia $conceptoincidencia Object to remove from the list of results
     *
     * @return ConceptoincidenciaQuery The current query, for fluid interface
     */
    public function prune($conceptoincidencia = null)
    {
        if ($conceptoincidencia) {
            $this->addUsingAlias(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $conceptoincidencia->getIdconceptoincidencia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
