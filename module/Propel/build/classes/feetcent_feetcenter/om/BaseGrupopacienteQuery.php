<?php


/**
 * Base class that represents a query for the 'grupopaciente' table.
 *
 *
 *
 * @method GrupopacienteQuery orderByIdgrupopaciente($order = Criteria::ASC) Order by the idgrupopaciente column
 * @method GrupopacienteQuery orderByIdgrupo($order = Criteria::ASC) Order by the idgrupo column
 * @method GrupopacienteQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 *
 * @method GrupopacienteQuery groupByIdgrupopaciente() Group by the idgrupopaciente column
 * @method GrupopacienteQuery groupByIdgrupo() Group by the idgrupo column
 * @method GrupopacienteQuery groupByIdpaciente() Group by the idpaciente column
 *
 * @method GrupopacienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GrupopacienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GrupopacienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GrupopacienteQuery leftJoinGrupo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupo relation
 * @method GrupopacienteQuery rightJoinGrupo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupo relation
 * @method GrupopacienteQuery innerJoinGrupo($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupo relation
 *
 * @method GrupopacienteQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method GrupopacienteQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method GrupopacienteQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method Grupopaciente findOne(PropelPDO $con = null) Return the first Grupopaciente matching the query
 * @method Grupopaciente findOneOrCreate(PropelPDO $con = null) Return the first Grupopaciente matching the query, or a new Grupopaciente object populated from the query conditions when no match is found
 *
 * @method Grupopaciente findOneByIdgrupo(int $idgrupo) Return the first Grupopaciente filtered by the idgrupo column
 * @method Grupopaciente findOneByIdpaciente(int $idpaciente) Return the first Grupopaciente filtered by the idpaciente column
 *
 * @method array findByIdgrupopaciente(int $idgrupopaciente) Return Grupopaciente objects filtered by the idgrupopaciente column
 * @method array findByIdgrupo(int $idgrupo) Return Grupopaciente objects filtered by the idgrupo column
 * @method array findByIdpaciente(int $idpaciente) Return Grupopaciente objects filtered by the idpaciente column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseGrupopacienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGrupopacienteQuery object.
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
            $modelName = 'Grupopaciente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GrupopacienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GrupopacienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GrupopacienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GrupopacienteQuery) {
            return $criteria;
        }
        $query = new GrupopacienteQuery(null, null, $modelAlias);

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
     * @return   Grupopaciente|Grupopaciente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GrupopacientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GrupopacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Grupopaciente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdgrupopaciente($key, $con = null)
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
     * @return                 Grupopaciente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idgrupopaciente`, `idgrupo`, `idpaciente` FROM `grupopaciente` WHERE `idgrupopaciente` = :p0';
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
            $obj = new Grupopaciente();
            $obj->hydrate($row);
            GrupopacientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Grupopaciente|Grupopaciente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Grupopaciente[]|mixed the list of results, formatted by the current formatter
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
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idgrupopaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdgrupopaciente(1234); // WHERE idgrupopaciente = 1234
     * $query->filterByIdgrupopaciente(array(12, 34)); // WHERE idgrupopaciente IN (12, 34)
     * $query->filterByIdgrupopaciente(array('min' => 12)); // WHERE idgrupopaciente >= 12
     * $query->filterByIdgrupopaciente(array('max' => 12)); // WHERE idgrupopaciente <= 12
     * </code>
     *
     * @param     mixed $idgrupopaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function filterByIdgrupopaciente($idgrupopaciente = null, $comparison = null)
    {
        if (is_array($idgrupopaciente)) {
            $useMinMax = false;
            if (isset($idgrupopaciente['min'])) {
                $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $idgrupopaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgrupopaciente['max'])) {
                $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $idgrupopaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $idgrupopaciente, $comparison);
    }

    /**
     * Filter the query on the idgrupo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdgrupo(1234); // WHERE idgrupo = 1234
     * $query->filterByIdgrupo(array(12, 34)); // WHERE idgrupo IN (12, 34)
     * $query->filterByIdgrupo(array('min' => 12)); // WHERE idgrupo >= 12
     * $query->filterByIdgrupo(array('max' => 12)); // WHERE idgrupo <= 12
     * </code>
     *
     * @see       filterByGrupo()
     *
     * @param     mixed $idgrupo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function filterByIdgrupo($idgrupo = null, $comparison = null)
    {
        if (is_array($idgrupo)) {
            $useMinMax = false;
            if (isset($idgrupo['min'])) {
                $this->addUsingAlias(GrupopacientePeer::IDGRUPO, $idgrupo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgrupo['max'])) {
                $this->addUsingAlias(GrupopacientePeer::IDGRUPO, $idgrupo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopacientePeer::IDGRUPO, $idgrupo, $comparison);
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
     * @see       filterByPaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(GrupopacientePeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(GrupopacientePeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupopacientePeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query by a related Grupo object
     *
     * @param   Grupo|PropelObjectCollection $grupo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GrupopacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGrupo($grupo, $comparison = null)
    {
        if ($grupo instanceof Grupo) {
            return $this
                ->addUsingAlias(GrupopacientePeer::IDGRUPO, $grupo->getIdgrupo(), $comparison);
        } elseif ($grupo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GrupopacientePeer::IDGRUPO, $grupo->toKeyValue('PrimaryKey', 'Idgrupo'), $comparison);
        } else {
            throw new PropelException('filterByGrupo() only accepts arguments of type Grupo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Grupo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function joinGrupo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Grupo');

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
            $this->addJoinObject($join, 'Grupo');
        }

        return $this;
    }

    /**
     * Use the Grupo relation Grupo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GrupoQuery A secondary query class using the current class as primary query
     */
    public function useGrupoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGrupo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Grupo', 'GrupoQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GrupopacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(GrupopacientePeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GrupopacientePeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

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
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Grupopaciente $grupopaciente Object to remove from the list of results
     *
     * @return GrupopacienteQuery The current query, for fluid interface
     */
    public function prune($grupopaciente = null)
    {
        if ($grupopaciente) {
            $this->addUsingAlias(GrupopacientePeer::IDGRUPOPACIENTE, $grupopaciente->getIdgrupopaciente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
