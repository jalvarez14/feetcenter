<?php


/**
 * Base class that represents a query for the 'pacientemembresiadetalle' table.
 *
 *
 *
 * @method PacientemembresiadetalleQuery orderByIdpacientemembresiadetalle($order = Criteria::ASC) Order by the idpacientemembresiadetalle column
 * @method PacientemembresiadetalleQuery orderByIdpacientemembresia($order = Criteria::ASC) Order by the idpacientemembresia column
 * @method PacientemembresiadetalleQuery orderByPacientemembresiadetalleFecha($order = Criteria::ASC) Order by the pacientemembresiadetalle_fecha column
 * @method PacientemembresiadetalleQuery orderByIdvisitadetalle($order = Criteria::ASC) Order by the idvisitadetalle column
 *
 * @method PacientemembresiadetalleQuery groupByIdpacientemembresiadetalle() Group by the idpacientemembresiadetalle column
 * @method PacientemembresiadetalleQuery groupByIdpacientemembresia() Group by the idpacientemembresia column
 * @method PacientemembresiadetalleQuery groupByPacientemembresiadetalleFecha() Group by the pacientemembresiadetalle_fecha column
 * @method PacientemembresiadetalleQuery groupByIdvisitadetalle() Group by the idvisitadetalle column
 *
 * @method PacientemembresiadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacientemembresiadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacientemembresiadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacientemembresiadetalleQuery leftJoinPacientemembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresia relation
 * @method PacientemembresiadetalleQuery rightJoinPacientemembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresia relation
 * @method PacientemembresiadetalleQuery innerJoinPacientemembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresia relation
 *
 * @method PacientemembresiadetalleQuery leftJoinVisitadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visitadetalle relation
 * @method PacientemembresiadetalleQuery rightJoinVisitadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visitadetalle relation
 * @method PacientemembresiadetalleQuery innerJoinVisitadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Visitadetalle relation
 *
 * @method Pacientemembresiadetalle findOne(PropelPDO $con = null) Return the first Pacientemembresiadetalle matching the query
 * @method Pacientemembresiadetalle findOneOrCreate(PropelPDO $con = null) Return the first Pacientemembresiadetalle matching the query, or a new Pacientemembresiadetalle object populated from the query conditions when no match is found
 *
 * @method Pacientemembresiadetalle findOneByIdpacientemembresia(int $idpacientemembresia) Return the first Pacientemembresiadetalle filtered by the idpacientemembresia column
 * @method Pacientemembresiadetalle findOneByPacientemembresiadetalleFecha(string $pacientemembresiadetalle_fecha) Return the first Pacientemembresiadetalle filtered by the pacientemembresiadetalle_fecha column
 * @method Pacientemembresiadetalle findOneByIdvisitadetalle(int $idvisitadetalle) Return the first Pacientemembresiadetalle filtered by the idvisitadetalle column
 *
 * @method array findByIdpacientemembresiadetalle(int $idpacientemembresiadetalle) Return Pacientemembresiadetalle objects filtered by the idpacientemembresiadetalle column
 * @method array findByIdpacientemembresia(int $idpacientemembresia) Return Pacientemembresiadetalle objects filtered by the idpacientemembresia column
 * @method array findByPacientemembresiadetalleFecha(string $pacientemembresiadetalle_fecha) Return Pacientemembresiadetalle objects filtered by the pacientemembresiadetalle_fecha column
 * @method array findByIdvisitadetalle(int $idvisitadetalle) Return Pacientemembresiadetalle objects filtered by the idvisitadetalle column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacientemembresiadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacientemembresiadetalleQuery object.
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
            $modelName = 'Pacientemembresiadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacientemembresiadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacientemembresiadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacientemembresiadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacientemembresiadetalleQuery) {
            return $criteria;
        }
        $query = new PacientemembresiadetalleQuery(null, null, $modelAlias);

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
     * @return   Pacientemembresiadetalle|Pacientemembresiadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacientemembresiadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacientemembresiadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pacientemembresiadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpacientemembresiadetalle($key, $con = null)
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
     * @return                 Pacientemembresiadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpacientemembresiadetalle`, `idpacientemembresia`, `pacientemembresiadetalle_fecha`, `idvisitadetalle` FROM `pacientemembresiadetalle` WHERE `idpacientemembresiadetalle` = :p0';
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
            $obj = new Pacientemembresiadetalle();
            $obj->hydrate($row);
            PacientemembresiadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pacientemembresiadetalle|Pacientemembresiadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pacientemembresiadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpacientemembresiadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacientemembresiadetalle(1234); // WHERE idpacientemembresiadetalle = 1234
     * $query->filterByIdpacientemembresiadetalle(array(12, 34)); // WHERE idpacientemembresiadetalle IN (12, 34)
     * $query->filterByIdpacientemembresiadetalle(array('min' => 12)); // WHERE idpacientemembresiadetalle >= 12
     * $query->filterByIdpacientemembresiadetalle(array('max' => 12)); // WHERE idpacientemembresiadetalle <= 12
     * </code>
     *
     * @param     mixed $idpacientemembresiadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpacientemembresiadetalle($idpacientemembresiadetalle = null, $comparison = null)
    {
        if (is_array($idpacientemembresiadetalle)) {
            $useMinMax = false;
            if (isset($idpacientemembresiadetalle['min'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $idpacientemembresiadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacientemembresiadetalle['max'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $idpacientemembresiadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $idpacientemembresiadetalle, $comparison);
    }

    /**
     * Filter the query on the idpacientemembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacientemembresia(1234); // WHERE idpacientemembresia = 1234
     * $query->filterByIdpacientemembresia(array(12, 34)); // WHERE idpacientemembresia IN (12, 34)
     * $query->filterByIdpacientemembresia(array('min' => 12)); // WHERE idpacientemembresia >= 12
     * $query->filterByIdpacientemembresia(array('max' => 12)); // WHERE idpacientemembresia <= 12
     * </code>
     *
     * @see       filterByPacientemembresia()
     *
     * @param     mixed $idpacientemembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpacientemembresia($idpacientemembresia = null, $comparison = null)
    {
        if (is_array($idpacientemembresia)) {
            $useMinMax = false;
            if (isset($idpacientemembresia['min'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIA, $idpacientemembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacientemembresia['max'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIA, $idpacientemembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIA, $idpacientemembresia, $comparison);
    }

    /**
     * Filter the query on the pacientemembresiadetalle_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientemembresiadetalleFecha('2011-03-14'); // WHERE pacientemembresiadetalle_fecha = '2011-03-14'
     * $query->filterByPacientemembresiadetalleFecha('now'); // WHERE pacientemembresiadetalle_fecha = '2011-03-14'
     * $query->filterByPacientemembresiadetalleFecha(array('max' => 'yesterday')); // WHERE pacientemembresiadetalle_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacientemembresiadetalleFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByPacientemembresiadetalleFecha($pacientemembresiadetalleFecha = null, $comparison = null)
    {
        if (is_array($pacientemembresiadetalleFecha)) {
            $useMinMax = false;
            if (isset($pacientemembresiadetalleFecha['min'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::PACIENTEMEMBRESIADETALLE_FECHA, $pacientemembresiadetalleFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacientemembresiadetalleFecha['max'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::PACIENTEMEMBRESIADETALLE_FECHA, $pacientemembresiadetalleFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiadetallePeer::PACIENTEMEMBRESIADETALLE_FECHA, $pacientemembresiadetalleFecha, $comparison);
    }

    /**
     * Filter the query on the idvisitadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisitadetalle(1234); // WHERE idvisitadetalle = 1234
     * $query->filterByIdvisitadetalle(array(12, 34)); // WHERE idvisitadetalle IN (12, 34)
     * $query->filterByIdvisitadetalle(array('min' => 12)); // WHERE idvisitadetalle >= 12
     * $query->filterByIdvisitadetalle(array('max' => 12)); // WHERE idvisitadetalle <= 12
     * </code>
     *
     * @see       filterByVisitadetalle()
     *
     * @param     mixed $idvisitadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function filterByIdvisitadetalle($idvisitadetalle = null, $comparison = null)
    {
        if (is_array($idvisitadetalle)) {
            $useMinMax = false;
            if (isset($idvisitadetalle['min'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDVISITADETALLE, $idvisitadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisitadetalle['max'])) {
                $this->addUsingAlias(PacientemembresiadetallePeer::IDVISITADETALLE, $idvisitadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientemembresiadetallePeer::IDVISITADETALLE, $idvisitadetalle, $comparison);
    }

    /**
     * Filter the query by a related Pacientemembresia object
     *
     * @param   Pacientemembresia|PropelObjectCollection $pacientemembresia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresia($pacientemembresia, $comparison = null)
    {
        if ($pacientemembresia instanceof Pacientemembresia) {
            return $this
                ->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIA, $pacientemembresia->getIdpacientemembresia(), $comparison);
        } elseif ($pacientemembresia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIA, $pacientemembresia->toKeyValue('PrimaryKey', 'Idpacientemembresia'), $comparison);
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
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Visitadetalle object
     *
     * @param   Visitadetalle|PropelObjectCollection $visitadetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientemembresiadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitadetalle($visitadetalle, $comparison = null)
    {
        if ($visitadetalle instanceof Visitadetalle) {
            return $this
                ->addUsingAlias(PacientemembresiadetallePeer::IDVISITADETALLE, $visitadetalle->getIdvisitadetalle(), $comparison);
        } elseif ($visitadetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientemembresiadetallePeer::IDVISITADETALLE, $visitadetalle->toKeyValue('PrimaryKey', 'Idvisitadetalle'), $comparison);
        } else {
            throw new PropelException('filterByVisitadetalle() only accepts arguments of type Visitadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Visitadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function joinVisitadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Visitadetalle');

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
            $this->addJoinObject($join, 'Visitadetalle');
        }

        return $this;
    }

    /**
     * Use the Visitadetalle relation Visitadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVisitadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisitadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visitadetalle', 'VisitadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pacientemembresiadetalle $pacientemembresiadetalle Object to remove from the list of results
     *
     * @return PacientemembresiadetalleQuery The current query, for fluid interface
     */
    public function prune($pacientemembresiadetalle = null)
    {
        if ($pacientemembresiadetalle) {
            $this->addUsingAlias(PacientemembresiadetallePeer::IDPACIENTEMEMBRESIADETALLE, $pacientemembresiadetalle->getIdpacientemembresiadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
