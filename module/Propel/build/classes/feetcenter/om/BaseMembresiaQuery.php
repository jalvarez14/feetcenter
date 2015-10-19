<?php


/**
 * Base class that represents a query for the 'membresia' table.
 *
 *
 *
 * @method MembresiaQuery orderByIdmembresia($order = Criteria::ASC) Order by the idmembresia column
 * @method MembresiaQuery orderByMembresiaNombre($order = Criteria::ASC) Order by the membresia_nombre column
 * @method MembresiaQuery orderByMembresiaDescripcion($order = Criteria::ASC) Order by the membresia_descripcion column
 * @method MembresiaQuery orderByMembresiaServicios($order = Criteria::ASC) Order by the membresia_servicios column
 * @method MembresiaQuery orderByMembresiaCupones($order = Criteria::ASC) Order by the membresia_cupones column
 *
 * @method MembresiaQuery groupByIdmembresia() Group by the idmembresia column
 * @method MembresiaQuery groupByMembresiaNombre() Group by the membresia_nombre column
 * @method MembresiaQuery groupByMembresiaDescripcion() Group by the membresia_descripcion column
 * @method MembresiaQuery groupByMembresiaServicios() Group by the membresia_servicios column
 * @method MembresiaQuery groupByMembresiaCupones() Group by the membresia_cupones column
 *
 * @method MembresiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MembresiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MembresiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MembresiaQuery leftJoinPacientemembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresia relation
 * @method MembresiaQuery rightJoinPacientemembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresia relation
 * @method MembresiaQuery innerJoinPacientemembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresia relation
 *
 * @method Membresia findOne(PropelPDO $con = null) Return the first Membresia matching the query
 * @method Membresia findOneOrCreate(PropelPDO $con = null) Return the first Membresia matching the query, or a new Membresia object populated from the query conditions when no match is found
 *
 * @method Membresia findOneByMembresiaNombre(string $membresia_nombre) Return the first Membresia filtered by the membresia_nombre column
 * @method Membresia findOneByMembresiaDescripcion(string $membresia_descripcion) Return the first Membresia filtered by the membresia_descripcion column
 * @method Membresia findOneByMembresiaServicios(string $membresia_servicios) Return the first Membresia filtered by the membresia_servicios column
 * @method Membresia findOneByMembresiaCupones(string $membresia_cupones) Return the first Membresia filtered by the membresia_cupones column
 *
 * @method array findByIdmembresia(int $idmembresia) Return Membresia objects filtered by the idmembresia column
 * @method array findByMembresiaNombre(string $membresia_nombre) Return Membresia objects filtered by the membresia_nombre column
 * @method array findByMembresiaDescripcion(string $membresia_descripcion) Return Membresia objects filtered by the membresia_descripcion column
 * @method array findByMembresiaServicios(string $membresia_servicios) Return Membresia objects filtered by the membresia_servicios column
 * @method array findByMembresiaCupones(string $membresia_cupones) Return Membresia objects filtered by the membresia_cupones column
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseMembresiaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMembresiaQuery object.
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
            $modelName = 'Membresia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MembresiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MembresiaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MembresiaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MembresiaQuery) {
            return $criteria;
        }
        $query = new MembresiaQuery(null, null, $modelAlias);

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
     * @return   Membresia|Membresia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MembresiaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MembresiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Membresia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmembresia($key, $con = null)
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
     * @return                 Membresia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmembresia`, `membresia_nombre`, `membresia_descripcion`, `membresia_servicios`, `membresia_cupones` FROM `membresia` WHERE `idmembresia` = :p0';
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
            $obj = new Membresia();
            $obj->hydrate($row);
            MembresiaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Membresia|Membresia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Membresia[]|mixed the list of results, formatted by the current formatter
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
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $keys, Criteria::IN);
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
     * @param     mixed $idmembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByIdmembresia($idmembresia = null, $comparison = null)
    {
        if (is_array($idmembresia)) {
            $useMinMax = false;
            if (isset($idmembresia['min'])) {
                $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresia['max'])) {
                $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia, $comparison);
    }

    /**
     * Filter the query on the membresia_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaNombre('fooValue');   // WHERE membresia_nombre = 'fooValue'
     * $query->filterByMembresiaNombre('%fooValue%'); // WHERE membresia_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membresiaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaNombre($membresiaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membresiaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membresiaNombre)) {
                $membresiaNombre = str_replace('*', '%', $membresiaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_NOMBRE, $membresiaNombre, $comparison);
    }

    /**
     * Filter the query on the membresia_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaDescripcion('fooValue');   // WHERE membresia_descripcion = 'fooValue'
     * $query->filterByMembresiaDescripcion('%fooValue%'); // WHERE membresia_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membresiaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaDescripcion($membresiaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membresiaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membresiaDescripcion)) {
                $membresiaDescripcion = str_replace('*', '%', $membresiaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_DESCRIPCION, $membresiaDescripcion, $comparison);
    }

    /**
     * Filter the query on the membresia_servicios column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaServicios(1234); // WHERE membresia_servicios = 1234
     * $query->filterByMembresiaServicios(array(12, 34)); // WHERE membresia_servicios IN (12, 34)
     * $query->filterByMembresiaServicios(array('min' => 12)); // WHERE membresia_servicios >= 12
     * $query->filterByMembresiaServicios(array('max' => 12)); // WHERE membresia_servicios <= 12
     * </code>
     *
     * @param     mixed $membresiaServicios The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaServicios($membresiaServicios = null, $comparison = null)
    {
        if (is_array($membresiaServicios)) {
            $useMinMax = false;
            if (isset($membresiaServicios['min'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaServicios['max'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios, $comparison);
    }

    /**
     * Filter the query on the membresia_cupones column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaCupones(1234); // WHERE membresia_cupones = 1234
     * $query->filterByMembresiaCupones(array(12, 34)); // WHERE membresia_cupones IN (12, 34)
     * $query->filterByMembresiaCupones(array('min' => 12)); // WHERE membresia_cupones >= 12
     * $query->filterByMembresiaCupones(array('max' => 12)); // WHERE membresia_cupones <= 12
     * </code>
     *
     * @param     mixed $membresiaCupones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaCupones($membresiaCupones = null, $comparison = null)
    {
        if (is_array($membresiaCupones)) {
            $useMinMax = false;
            if (isset($membresiaCupones['min'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaCupones['max'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones, $comparison);
    }

    /**
     * Filter the query by a related Pacientemembresia object
     *
     * @param   Pacientemembresia|PropelObjectCollection $pacientemembresia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresia($pacientemembresia, $comparison = null)
    {
        if ($pacientemembresia instanceof Pacientemembresia) {
            return $this
                ->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $pacientemembresia->getIdmembresia(), $comparison);
        } elseif ($pacientemembresia instanceof PropelObjectCollection) {
            return $this
                ->usePacientemembresiaQuery()
                ->filterByPrimaryKeys($pacientemembresia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientemembresia() only accepts arguments of type Pacientemembresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientemembresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function joinPacientemembresia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientemembresia');

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
            $this->addJoinObject($join, 'Pacientemembresia');
        }

        return $this;
    }

    /**
     * Use the Pacientemembresia relation Pacientemembresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientemembresiaQuery A secondary query class using the current class as primary query
     */
    public function usePacientemembresiaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientemembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientemembresia', 'PacientemembresiaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Membresia $membresia Object to remove from the list of results
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function prune($membresia = null)
    {
        if ($membresia) {
            $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $membresia->getIdmembresia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
