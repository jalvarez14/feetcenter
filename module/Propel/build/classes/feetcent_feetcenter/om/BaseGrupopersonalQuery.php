<?php


/**
 * Base class that represents a query for the 'grupopersonal' table.
 *
 *
 *
 * @method GrupopersonalQuery orderByIdgrupopersonal($order = Criteria::ASC) Order by the idgrupopersonal column
 * @method GrupopersonalQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method GrupopersonalQuery orderByIdpacienteagregado($order = Criteria::ASC) Order by the idpacienteagregado column
 *
 * @method GrupopersonalQuery groupByIdgrupopersonal() Group by the idgrupopersonal column
 * @method GrupopersonalQuery groupByIdpaciente() Group by the idpaciente column
 * @method GrupopersonalQuery groupByIdpacienteagregado() Group by the idpacienteagregado column
 *
 * @method GrupopersonalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GrupopersonalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GrupopersonalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GrupopersonalQuery leftJoinPacienteRelatedByIdpaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the PacienteRelatedByIdpaciente relation
 * @method GrupopersonalQuery rightJoinPacienteRelatedByIdpaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PacienteRelatedByIdpaciente relation
 * @method GrupopersonalQuery innerJoinPacienteRelatedByIdpaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the PacienteRelatedByIdpaciente relation
 *
 * @method GrupopersonalQuery leftJoinPacienteRelatedByIdpacienteagregado($relationAlias = null) Adds a LEFT JOIN clause to the query using the PacienteRelatedByIdpacienteagregado relation
 * @method GrupopersonalQuery rightJoinPacienteRelatedByIdpacienteagregado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PacienteRelatedByIdpacienteagregado relation
 * @method GrupopersonalQuery innerJoinPacienteRelatedByIdpacienteagregado($relationAlias = null) Adds a INNER JOIN clause to the query using the PacienteRelatedByIdpacienteagregado relation
 *
 * @method Grupopersonal findOne(PropelPDO $con = null) Return the first Grupopersonal matching the query
 * @method Grupopersonal findOneOrCreate(PropelPDO $con = null) Return the first Grupopersonal matching the query, or a new Grupopersonal object populated from the query conditions when no match is found
 *
 * @method Grupopersonal findOneByIdpaciente(int $idpaciente) Return the first Grupopersonal filtered by the idpaciente column
 * @method Grupopersonal findOneByIdpacienteagregado(int $idpacienteagregado) Return the first Grupopersonal filtered by the idpacienteagregado column
 *
 * @method array findByIdgrupopersonal(int $idgrupopersonal) Return Grupopersonal objects filtered by the idgrupopersonal column
 * @method array findByIdpaciente(int $idpaciente) Return Grupopersonal objects filtered by the idpaciente column
 * @method array findByIdpacienteagregado(int $idpacienteagregado) Return Grupopersonal objects filtered by the idpacienteagregado column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseGrupopersonalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGrupopersonalQuery object.
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
            $modelName = 'Grupopersonal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GrupopersonalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GrupopersonalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GrupopersonalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GrupopersonalQuery) {
            return $criteria;
        }
        $query = new GrupopersonalQuery(null, null, $modelAlias);

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
     * @return   Grupopersonal|Grupopersonal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GrupopersonalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GrupopersonalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Grupopersonal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdgrupopersonal($key, $con = null)
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
     * @return                 Grupopersonal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idgrupopersonal`, `idpaciente`, `idpacienteagregado` FROM `grupopersonal` WHERE `idgrupopersonal` = :p0';
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
            $obj = new Grupopersonal();
            $obj->hydrate($row);
            GrupopersonalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Grupopersonal|Grupopersonal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Grupopersonal[]|mixed the list of results, formatted by the current formatter
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
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idgrupopersonal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdgrupopersonal(1234); // WHERE idgrupopersonal = 1234
     * $query->filterByIdgrupopersonal(array(12, 34)); // WHERE idgrupopersonal IN (12, 34)
     * $query->filterByIdgrupopersonal(array('min' => 12)); // WHERE idgrupopersonal >= 12
     * $query->filterByIdgrupopersonal(array('max' => 12)); // WHERE idgrupopersonal <= 12
     * </code>
     *
     * @param     mixed $idgrupopersonal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function filterByIdgrupopersonal($idgrupopersonal = null, $comparison = null)
    {
        if (is_array($idgrupopersonal)) {
            $useMinMax = false;
            if (isset($idgrupopersonal['min'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $idgrupopersonal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgrupopersonal['max'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $idgrupopersonal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $idgrupopersonal, $comparison);
    }

    /**
     * Filter the query on the idpaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaciente(1234); // WHERE idpaciente = 1234
     * $query->filterByIdpaciente(array(12, 34)); // WHERE idpaciente IN (12, 34)
     * $query->filterByIdpaciente(array('min' => 12)); // WHERE idpaciente >= 12
     * $query->filterByIdpaciente(array('max' => 12)); // WHERE idpaciente <= 12
     * </code>
     *
     * @see       filterByPacienteRelatedByIdpaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopersonalPeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the idpacienteagregado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacienteagregado(1234); // WHERE idpacienteagregado = 1234
     * $query->filterByIdpacienteagregado(array(12, 34)); // WHERE idpacienteagregado IN (12, 34)
     * $query->filterByIdpacienteagregado(array('min' => 12)); // WHERE idpacienteagregado >= 12
     * $query->filterByIdpacienteagregado(array('max' => 12)); // WHERE idpacienteagregado <= 12
     * </code>
     *
     * @see       filterByPacienteRelatedByIdpacienteagregado()
     *
     * @param     mixed $idpacienteagregado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function filterByIdpacienteagregado($idpacienteagregado = null, $comparison = null)
    {
        if (is_array($idpacienteagregado)) {
            $useMinMax = false;
            if (isset($idpacienteagregado['min'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDPACIENTEAGREGADO, $idpacienteagregado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacienteagregado['max'])) {
                $this->addUsingAlias(GrupopersonalPeer::IDPACIENTEAGREGADO, $idpacienteagregado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopersonalPeer::IDPACIENTEAGREGADO, $idpacienteagregado, $comparison);
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GrupopersonalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteRelatedByIdpaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(GrupopersonalPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GrupopersonalPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPacienteRelatedByIdpaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PacienteRelatedByIdpaciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function joinPacienteRelatedByIdpaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PacienteRelatedByIdpaciente');

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
            $this->addJoinObject($join, 'PacienteRelatedByIdpaciente');
        }

        return $this;
    }

    /**
     * Use the PacienteRelatedByIdpaciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteRelatedByIdpacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteRelatedByIdpaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PacienteRelatedByIdpaciente', 'PacienteQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GrupopersonalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteRelatedByIdpacienteagregado($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(GrupopersonalPeer::IDPACIENTEAGREGADO, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GrupopersonalPeer::IDPACIENTEAGREGADO, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPacienteRelatedByIdpacienteagregado() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PacienteRelatedByIdpacienteagregado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function joinPacienteRelatedByIdpacienteagregado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PacienteRelatedByIdpacienteagregado');

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
            $this->addJoinObject($join, 'PacienteRelatedByIdpacienteagregado');
        }

        return $this;
    }

    /**
     * Use the PacienteRelatedByIdpacienteagregado relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteRelatedByIdpacienteagregadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteRelatedByIdpacienteagregado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PacienteRelatedByIdpacienteagregado', 'PacienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Grupopersonal $grupopersonal Object to remove from the list of results
     *
     * @return GrupopersonalQuery The current query, for fluid interface
     */
    public function prune($grupopersonal = null)
    {
        if ($grupopersonal) {
            $this->addUsingAlias(GrupopersonalPeer::IDGRUPOPERSONAL, $grupopersonal->getIdgrupopersonal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
