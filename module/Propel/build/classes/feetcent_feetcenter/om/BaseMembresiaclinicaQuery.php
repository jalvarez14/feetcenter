<?php


/**
 * Base class that represents a query for the 'membresiaclinica' table.
 *
 *
 *
 * @method MembresiaclinicaQuery orderByIdmembresiaclinica($order = Criteria::ASC) Order by the idmembresiaclinica column
 * @method MembresiaclinicaQuery orderByIdmembresia($order = Criteria::ASC) Order by the idmembresia column
 * @method MembresiaclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method MembresiaclinicaQuery orderByMembresiaclinicaPrecio($order = Criteria::ASC) Order by the membresiaclinica_precio column
 *
 * @method MembresiaclinicaQuery groupByIdmembresiaclinica() Group by the idmembresiaclinica column
 * @method MembresiaclinicaQuery groupByIdmembresia() Group by the idmembresia column
 * @method MembresiaclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method MembresiaclinicaQuery groupByMembresiaclinicaPrecio() Group by the membresiaclinica_precio column
 *
 * @method MembresiaclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MembresiaclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MembresiaclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MembresiaclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method MembresiaclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method MembresiaclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method MembresiaclinicaQuery leftJoinMembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Membresia relation
 * @method MembresiaclinicaQuery rightJoinMembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Membresia relation
 * @method MembresiaclinicaQuery innerJoinMembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Membresia relation
 *
 * @method Membresiaclinica findOne(PropelPDO $con = null) Return the first Membresiaclinica matching the query
 * @method Membresiaclinica findOneOrCreate(PropelPDO $con = null) Return the first Membresiaclinica matching the query, or a new Membresiaclinica object populated from the query conditions when no match is found
 *
 * @method Membresiaclinica findOneByIdmembresia(int $idmembresia) Return the first Membresiaclinica filtered by the idmembresia column
 * @method Membresiaclinica findOneByIdclinica(int $idclinica) Return the first Membresiaclinica filtered by the idclinica column
 * @method Membresiaclinica findOneByMembresiaclinicaPrecio(string $membresiaclinica_precio) Return the first Membresiaclinica filtered by the membresiaclinica_precio column
 *
 * @method array findByIdmembresiaclinica(int $idmembresiaclinica) Return Membresiaclinica objects filtered by the idmembresiaclinica column
 * @method array findByIdmembresia(int $idmembresia) Return Membresiaclinica objects filtered by the idmembresia column
 * @method array findByIdclinica(int $idclinica) Return Membresiaclinica objects filtered by the idclinica column
 * @method array findByMembresiaclinicaPrecio(string $membresiaclinica_precio) Return Membresiaclinica objects filtered by the membresiaclinica_precio column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseMembresiaclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMembresiaclinicaQuery object.
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
            $modelName = 'Membresiaclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MembresiaclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MembresiaclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MembresiaclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MembresiaclinicaQuery) {
            return $criteria;
        }
        $query = new MembresiaclinicaQuery(null, null, $modelAlias);

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
     * @return   Membresiaclinica|Membresiaclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MembresiaclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MembresiaclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Membresiaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmembresiaclinica($key, $con = null)
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
     * @return                 Membresiaclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmembresiaclinica`, `idmembresia`, `idclinica`, `membresiaclinica_precio` FROM `membresiaclinica` WHERE `idmembresiaclinica` = :p0';
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
            $obj = new Membresiaclinica();
            $obj->hydrate($row);
            MembresiaclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Membresiaclinica|Membresiaclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Membresiaclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmembresiaclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmembresiaclinica(1234); // WHERE idmembresiaclinica = 1234
     * $query->filterByIdmembresiaclinica(array(12, 34)); // WHERE idmembresiaclinica IN (12, 34)
     * $query->filterByIdmembresiaclinica(array('min' => 12)); // WHERE idmembresiaclinica >= 12
     * $query->filterByIdmembresiaclinica(array('max' => 12)); // WHERE idmembresiaclinica <= 12
     * </code>
     *
     * @param     mixed $idmembresiaclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdmembresiaclinica($idmembresiaclinica = null, $comparison = null)
    {
        if (is_array($idmembresiaclinica)) {
            $useMinMax = false;
            if (isset($idmembresiaclinica['min'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $idmembresiaclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresiaclinica['max'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $idmembresiaclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $idmembresiaclinica, $comparison);
    }

    /**
     * Filter the query on the idmembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmembresia(1234); // WHERE idmembresia = 1234
     * $query->filterByIdmembresia(array(12, 34)); // WHERE idmembresia IN (12, 34)
     * $query->filterByIdmembresia(array('min' => 12)); // WHERE idmembresia >= 12
     * $query->filterByIdmembresia(array('max' => 12)); // WHERE idmembresia <= 12
     * </code>
     *
     * @see       filterByMembresia()
     *
     * @param     mixed $idmembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdmembresia($idmembresia = null, $comparison = null)
    {
        if (is_array($idmembresia)) {
            $useMinMax = false;
            if (isset($idmembresia['min'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIA, $idmembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresia['max'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIA, $idmembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIA, $idmembresia, $comparison);
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
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the membresiaclinica_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaclinicaPrecio(1234); // WHERE membresiaclinica_precio = 1234
     * $query->filterByMembresiaclinicaPrecio(array(12, 34)); // WHERE membresiaclinica_precio IN (12, 34)
     * $query->filterByMembresiaclinicaPrecio(array('min' => 12)); // WHERE membresiaclinica_precio >= 12
     * $query->filterByMembresiaclinicaPrecio(array('max' => 12)); // WHERE membresiaclinica_precio <= 12
     * </code>
     *
     * @param     mixed $membresiaclinicaPrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function filterByMembresiaclinicaPrecio($membresiaclinicaPrecio = null, $comparison = null)
    {
        if (is_array($membresiaclinicaPrecio)) {
            $useMinMax = false;
            if (isset($membresiaclinicaPrecio['min'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::MEMBRESIACLINICA_PRECIO, $membresiaclinicaPrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaclinicaPrecio['max'])) {
                $this->addUsingAlias(MembresiaclinicaPeer::MEMBRESIACLINICA_PRECIO, $membresiaclinicaPrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaclinicaPeer::MEMBRESIACLINICA_PRECIO, $membresiaclinicaPrecio, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(MembresiaclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MembresiaclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return MembresiaclinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Membresia object
     *
     * @param   Membresia|PropelObjectCollection $membresia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMembresia($membresia, $comparison = null)
    {
        if ($membresia instanceof Membresia) {
            return $this
                ->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIA, $membresia->getIdmembresia(), $comparison);
        } elseif ($membresia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIA, $membresia->toKeyValue('PrimaryKey', 'Idmembresia'), $comparison);
        } else {
            throw new PropelException('filterByMembresia() only accepts arguments of type Membresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Membresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function joinMembresia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Membresia');

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
            $this->addJoinObject($join, 'Membresia');
        }

        return $this;
    }

    /**
     * Use the Membresia relation Membresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MembresiaQuery A secondary query class using the current class as primary query
     */
    public function useMembresiaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Membresia', 'MembresiaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Membresiaclinica $membresiaclinica Object to remove from the list of results
     *
     * @return MembresiaclinicaQuery The current query, for fluid interface
     */
    public function prune($membresiaclinica = null)
    {
        if ($membresiaclinica) {
            $this->addUsingAlias(MembresiaclinicaPeer::IDMEMBRESIACLINICA, $membresiaclinica->getIdmembresiaclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
