<?php


/**
 * Base class that represents a query for the 'metaclinica' table.
 *
 *
 *
 * @method MetaclinicaQuery orderByIdmetaclinica($order = Criteria::ASC) Order by the idmetaclinica column
 * @method MetaclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method MetaclinicaQuery orderByMetaclinicaAnio($order = Criteria::ASC) Order by the metaclinica_anio column
 * @method MetaclinicaQuery orderByMetaclinicaMes($order = Criteria::ASC) Order by the metaclinica_mes column
 * @method MetaclinicaQuery orderByMetaclinicaMeta($order = Criteria::ASC) Order by the metaclinica_meta column
 *
 * @method MetaclinicaQuery groupByIdmetaclinica() Group by the idmetaclinica column
 * @method MetaclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method MetaclinicaQuery groupByMetaclinicaAnio() Group by the metaclinica_anio column
 * @method MetaclinicaQuery groupByMetaclinicaMes() Group by the metaclinica_mes column
 * @method MetaclinicaQuery groupByMetaclinicaMeta() Group by the metaclinica_meta column
 *
 * @method MetaclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MetaclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MetaclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MetaclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method MetaclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method MetaclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method Metaclinica findOne(PropelPDO $con = null) Return the first Metaclinica matching the query
 * @method Metaclinica findOneOrCreate(PropelPDO $con = null) Return the first Metaclinica matching the query, or a new Metaclinica object populated from the query conditions when no match is found
 *
 * @method Metaclinica findOneByIdclinica(int $idclinica) Return the first Metaclinica filtered by the idclinica column
 * @method Metaclinica findOneByMetaclinicaAnio(int $metaclinica_anio) Return the first Metaclinica filtered by the metaclinica_anio column
 * @method Metaclinica findOneByMetaclinicaMes(int $metaclinica_mes) Return the first Metaclinica filtered by the metaclinica_mes column
 * @method Metaclinica findOneByMetaclinicaMeta(string $metaclinica_meta) Return the first Metaclinica filtered by the metaclinica_meta column
 *
 * @method array findByIdmetaclinica(int $idmetaclinica) Return Metaclinica objects filtered by the idmetaclinica column
 * @method array findByIdclinica(int $idclinica) Return Metaclinica objects filtered by the idclinica column
 * @method array findByMetaclinicaAnio(int $metaclinica_anio) Return Metaclinica objects filtered by the metaclinica_anio column
 * @method array findByMetaclinicaMes(int $metaclinica_mes) Return Metaclinica objects filtered by the metaclinica_mes column
 * @method array findByMetaclinicaMeta(string $metaclinica_meta) Return Metaclinica objects filtered by the metaclinica_meta column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseMetaclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMetaclinicaQuery object.
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
            $modelName = 'Metaclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MetaclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MetaclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MetaclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MetaclinicaQuery) {
            return $criteria;
        }
        $query = new MetaclinicaQuery(null, null, $modelAlias);

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
     * @return   Metaclinica|Metaclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MetaclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MetaclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Metaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmetaclinica($key, $con = null)
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
     * @return                 Metaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmetaclinica`, `idclinica`, `metaclinica_anio`, `metaclinica_mes`, `metaclinica_meta` FROM `metaclinica` WHERE `idmetaclinica` = :p0';
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
            $obj = new Metaclinica();
            $obj->hydrate($row);
            MetaclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Metaclinica|Metaclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Metaclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmetaclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmetaclinica(1234); // WHERE idmetaclinica = 1234
     * $query->filterByIdmetaclinica(array(12, 34)); // WHERE idmetaclinica IN (12, 34)
     * $query->filterByIdmetaclinica(array('min' => 12)); // WHERE idmetaclinica >= 12
     * $query->filterByIdmetaclinica(array('max' => 12)); // WHERE idmetaclinica <= 12
     * </code>
     *
     * @param     mixed $idmetaclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdmetaclinica($idmetaclinica = null, $comparison = null)
    {
        if (is_array($idmetaclinica)) {
            $useMinMax = false;
            if (isset($idmetaclinica['min'])) {
                $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $idmetaclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmetaclinica['max'])) {
                $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $idmetaclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $idmetaclinica, $comparison);
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
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(MetaclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(MetaclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the metaclinica_anio column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaclinicaAnio(1234); // WHERE metaclinica_anio = 1234
     * $query->filterByMetaclinicaAnio(array(12, 34)); // WHERE metaclinica_anio IN (12, 34)
     * $query->filterByMetaclinicaAnio(array('min' => 12)); // WHERE metaclinica_anio >= 12
     * $query->filterByMetaclinicaAnio(array('max' => 12)); // WHERE metaclinica_anio <= 12
     * </code>
     *
     * @param     mixed $metaclinicaAnio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByMetaclinicaAnio($metaclinicaAnio = null, $comparison = null)
    {
        if (is_array($metaclinicaAnio)) {
            $useMinMax = false;
            if (isset($metaclinicaAnio['min'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_ANIO, $metaclinicaAnio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaclinicaAnio['max'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_ANIO, $metaclinicaAnio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaclinicaPeer::METACLINICA_ANIO, $metaclinicaAnio, $comparison);
    }

    /**
     * Filter the query on the metaclinica_mes column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaclinicaMes(1234); // WHERE metaclinica_mes = 1234
     * $query->filterByMetaclinicaMes(array(12, 34)); // WHERE metaclinica_mes IN (12, 34)
     * $query->filterByMetaclinicaMes(array('min' => 12)); // WHERE metaclinica_mes >= 12
     * $query->filterByMetaclinicaMes(array('max' => 12)); // WHERE metaclinica_mes <= 12
     * </code>
     *
     * @param     mixed $metaclinicaMes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByMetaclinicaMes($metaclinicaMes = null, $comparison = null)
    {
        if (is_array($metaclinicaMes)) {
            $useMinMax = false;
            if (isset($metaclinicaMes['min'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_MES, $metaclinicaMes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaclinicaMes['max'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_MES, $metaclinicaMes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaclinicaPeer::METACLINICA_MES, $metaclinicaMes, $comparison);
    }

    /**
     * Filter the query on the metaclinica_meta column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaclinicaMeta(1234); // WHERE metaclinica_meta = 1234
     * $query->filterByMetaclinicaMeta(array(12, 34)); // WHERE metaclinica_meta IN (12, 34)
     * $query->filterByMetaclinicaMeta(array('min' => 12)); // WHERE metaclinica_meta >= 12
     * $query->filterByMetaclinicaMeta(array('max' => 12)); // WHERE metaclinica_meta <= 12
     * </code>
     *
     * @param     mixed $metaclinicaMeta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function filterByMetaclinicaMeta($metaclinicaMeta = null, $comparison = null)
    {
        if (is_array($metaclinicaMeta)) {
            $useMinMax = false;
            if (isset($metaclinicaMeta['min'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_META, $metaclinicaMeta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metaclinicaMeta['max'])) {
                $this->addUsingAlias(MetaclinicaPeer::METACLINICA_META, $metaclinicaMeta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MetaclinicaPeer::METACLINICA_META, $metaclinicaMeta, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MetaclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(MetaclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MetaclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return MetaclinicaQuery The current query, for fluid interface
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
     * @param   Metaclinica $metaclinica Object to remove from the list of results
     *
     * @return MetaclinicaQuery The current query, for fluid interface
     */
    public function prune($metaclinica = null)
    {
        if ($metaclinica) {
            $this->addUsingAlias(MetaclinicaPeer::IDMETACLINICA, $metaclinica->getIdmetaclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
