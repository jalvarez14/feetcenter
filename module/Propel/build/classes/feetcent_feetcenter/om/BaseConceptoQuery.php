<?php


/**
 * Base class that represents a query for the 'concepto' table.
 *
 *
 *
 * @method ConceptoQuery orderByIdconcepto($order = Criteria::ASC) Order by the idconcepto column
 * @method ConceptoQuery orderByConceptoNombre($order = Criteria::ASC) Order by the concepto_nombre column
 * @method ConceptoQuery orderByConceptoDescripcion($order = Criteria::ASC) Order by the concepto_descripcion column
 *
 * @method ConceptoQuery groupByIdconcepto() Group by the idconcepto column
 * @method ConceptoQuery groupByConceptoNombre() Group by the concepto_nombre column
 * @method ConceptoQuery groupByConceptoDescripcion() Group by the concepto_descripcion column
 *
 * @method ConceptoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptoQuery leftJoinEgresoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Egresoclinica relation
 * @method ConceptoQuery rightJoinEgresoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Egresoclinica relation
 * @method ConceptoQuery innerJoinEgresoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Egresoclinica relation
 *
 * @method Concepto findOne(PropelPDO $con = null) Return the first Concepto matching the query
 * @method Concepto findOneOrCreate(PropelPDO $con = null) Return the first Concepto matching the query, or a new Concepto object populated from the query conditions when no match is found
 *
 * @method Concepto findOneByConceptoNombre(string $concepto_nombre) Return the first Concepto filtered by the concepto_nombre column
 * @method Concepto findOneByConceptoDescripcion(string $concepto_descripcion) Return the first Concepto filtered by the concepto_descripcion column
 *
 * @method array findByIdconcepto(int $idconcepto) Return Concepto objects filtered by the idconcepto column
 * @method array findByConceptoNombre(string $concepto_nombre) Return Concepto objects filtered by the concepto_nombre column
 * @method array findByConceptoDescripcion(string $concepto_descripcion) Return Concepto objects filtered by the concepto_descripcion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseConceptoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptoQuery object.
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
            $modelName = 'Concepto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptoQuery) {
            return $criteria;
        }
        $query = new ConceptoQuery(null, null, $modelAlias);

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
     * @return   Concepto|Concepto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Concepto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconcepto($key, $con = null)
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
     * @return                 Concepto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconcepto`, `concepto_nombre`, `concepto_descripcion` FROM `concepto` WHERE `idconcepto` = :p0';
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
            $obj = new Concepto();
            $obj->hydrate($row);
            ConceptoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Concepto|Concepto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Concepto[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconcepto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconcepto(1234); // WHERE idconcepto = 1234
     * $query->filterByIdconcepto(array(12, 34)); // WHERE idconcepto IN (12, 34)
     * $query->filterByIdconcepto(array('min' => 12)); // WHERE idconcepto >= 12
     * $query->filterByIdconcepto(array('max' => 12)); // WHERE idconcepto <= 12
     * </code>
     *
     * @param     mixed $idconcepto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function filterByIdconcepto($idconcepto = null, $comparison = null)
    {
        if (is_array($idconcepto)) {
            $useMinMax = false;
            if (isset($idconcepto['min'])) {
                $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $idconcepto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconcepto['max'])) {
                $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $idconcepto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $idconcepto, $comparison);
    }

    /**
     * Filter the query on the concepto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoNombre('fooValue');   // WHERE concepto_nombre = 'fooValue'
     * $query->filterByConceptoNombre('%fooValue%'); // WHERE concepto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function filterByConceptoNombre($conceptoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoNombre)) {
                $conceptoNombre = str_replace('*', '%', $conceptoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoPeer::CONCEPTO_NOMBRE, $conceptoNombre, $comparison);
    }

    /**
     * Filter the query on the concepto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoDescripcion('fooValue');   // WHERE concepto_descripcion = 'fooValue'
     * $query->filterByConceptoDescripcion('%fooValue%'); // WHERE concepto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function filterByConceptoDescripcion($conceptoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoDescripcion)) {
                $conceptoDescripcion = str_replace('*', '%', $conceptoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoPeer::CONCEPTO_DESCRIPCION, $conceptoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Egresoclinica object
     *
     * @param   Egresoclinica|PropelObjectCollection $egresoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEgresoclinica($egresoclinica, $comparison = null)
    {
        if ($egresoclinica instanceof Egresoclinica) {
            return $this
                ->addUsingAlias(ConceptoPeer::IDCONCEPTO, $egresoclinica->getIdconcepto(), $comparison);
        } elseif ($egresoclinica instanceof PropelObjectCollection) {
            return $this
                ->useEgresoclinicaQuery()
                ->filterByPrimaryKeys($egresoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEgresoclinica() only accepts arguments of type Egresoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Egresoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function joinEgresoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Egresoclinica');

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
            $this->addJoinObject($join, 'Egresoclinica');
        }

        return $this;
    }

    /**
     * Use the Egresoclinica relation Egresoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EgresoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useEgresoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEgresoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Egresoclinica', 'EgresoclinicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Concepto $concepto Object to remove from the list of results
     *
     * @return ConceptoQuery The current query, for fluid interface
     */
    public function prune($concepto = null)
    {
        if ($concepto) {
            $this->addUsingAlias(ConceptoPeer::IDCONCEPTO, $concepto->getIdconcepto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
