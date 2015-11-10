<?php


/**
 * Base class that represents a query for the 'configuracion' table.
 *
 *
 *
 * @method ConfiguracionQuery orderByIdconfiguracion($order = Criteria::ASC) Order by the idconfiguracion column
 * @method ConfiguracionQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method ConfiguracionQuery orderByConfiguracionNumerocancelaciones($order = Criteria::ASC) Order by the configuracion_numerocancelaciones column
 * @method ConfiguracionQuery orderByConfiguracionValormaximocancelacion($order = Criteria::ASC) Order by the configuracion_valormaximocancelacion column
 * @method ConfiguracionQuery orderByConfiguracionHastacuantosdias($order = Criteria::ASC) Order by the configuracion_hastacuantosdias column
 *
 * @method ConfiguracionQuery groupByIdconfiguracion() Group by the idconfiguracion column
 * @method ConfiguracionQuery groupByIdclinica() Group by the idclinica column
 * @method ConfiguracionQuery groupByConfiguracionNumerocancelaciones() Group by the configuracion_numerocancelaciones column
 * @method ConfiguracionQuery groupByConfiguracionValormaximocancelacion() Group by the configuracion_valormaximocancelacion column
 * @method ConfiguracionQuery groupByConfiguracionHastacuantosdias() Group by the configuracion_hastacuantosdias column
 *
 * @method ConfiguracionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConfiguracionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConfiguracionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConfiguracionQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method ConfiguracionQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method ConfiguracionQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method Configuracion findOne(PropelPDO $con = null) Return the first Configuracion matching the query
 * @method Configuracion findOneOrCreate(PropelPDO $con = null) Return the first Configuracion matching the query, or a new Configuracion object populated from the query conditions when no match is found
 *
 * @method Configuracion findOneByIdclinica(int $idclinica) Return the first Configuracion filtered by the idclinica column
 * @method Configuracion findOneByConfiguracionNumerocancelaciones(int $configuracion_numerocancelaciones) Return the first Configuracion filtered by the configuracion_numerocancelaciones column
 * @method Configuracion findOneByConfiguracionValormaximocancelacion(string $configuracion_valormaximocancelacion) Return the first Configuracion filtered by the configuracion_valormaximocancelacion column
 * @method Configuracion findOneByConfiguracionHastacuantosdias(int $configuracion_hastacuantosdias) Return the first Configuracion filtered by the configuracion_hastacuantosdias column
 *
 * @method array findByIdconfiguracion(int $idconfiguracion) Return Configuracion objects filtered by the idconfiguracion column
 * @method array findByIdclinica(int $idclinica) Return Configuracion objects filtered by the idclinica column
 * @method array findByConfiguracionNumerocancelaciones(int $configuracion_numerocancelaciones) Return Configuracion objects filtered by the configuracion_numerocancelaciones column
 * @method array findByConfiguracionValormaximocancelacion(string $configuracion_valormaximocancelacion) Return Configuracion objects filtered by the configuracion_valormaximocancelacion column
 * @method array findByConfiguracionHastacuantosdias(int $configuracion_hastacuantosdias) Return Configuracion objects filtered by the configuracion_hastacuantosdias column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseConfiguracionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConfiguracionQuery object.
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
            $modelName = 'Configuracion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfiguracionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConfiguracionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConfiguracionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfiguracionQuery) {
            return $criteria;
        }
        $query = new ConfiguracionQuery(null, null, $modelAlias);

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
     * @return   Configuracion|Configuracion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConfiguracionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConfiguracionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Configuracion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconfiguracion($key, $con = null)
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
     * @return                 Configuracion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconfiguracion`, `idclinica`, `configuracion_numerocancelaciones`, `configuracion_valormaximocancelacion`, `configuracion_hastacuantosdias` FROM `configuracion` WHERE `idconfiguracion` = :p0';
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
            $obj = new Configuracion();
            $obj->hydrate($row);
            ConfiguracionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Configuracion|Configuracion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Configuracion[]|mixed the list of results, formatted by the current formatter
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
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconfiguracion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconfiguracion(1234); // WHERE idconfiguracion = 1234
     * $query->filterByIdconfiguracion(array(12, 34)); // WHERE idconfiguracion IN (12, 34)
     * $query->filterByIdconfiguracion(array('min' => 12)); // WHERE idconfiguracion >= 12
     * $query->filterByIdconfiguracion(array('max' => 12)); // WHERE idconfiguracion <= 12
     * </code>
     *
     * @param     mixed $idconfiguracion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByIdconfiguracion($idconfiguracion = null, $comparison = null)
    {
        if (is_array($idconfiguracion)) {
            $useMinMax = false;
            if (isset($idconfiguracion['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconfiguracion['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion, $comparison);
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
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the configuracion_numerocancelaciones column
     *
     * Example usage:
     * <code>
     * $query->filterByConfiguracionNumerocancelaciones(1234); // WHERE configuracion_numerocancelaciones = 1234
     * $query->filterByConfiguracionNumerocancelaciones(array(12, 34)); // WHERE configuracion_numerocancelaciones IN (12, 34)
     * $query->filterByConfiguracionNumerocancelaciones(array('min' => 12)); // WHERE configuracion_numerocancelaciones >= 12
     * $query->filterByConfiguracionNumerocancelaciones(array('max' => 12)); // WHERE configuracion_numerocancelaciones <= 12
     * </code>
     *
     * @param     mixed $configuracionNumerocancelaciones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByConfiguracionNumerocancelaciones($configuracionNumerocancelaciones = null, $comparison = null)
    {
        if (is_array($configuracionNumerocancelaciones)) {
            $useMinMax = false;
            if (isset($configuracionNumerocancelaciones['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_NUMEROCANCELACIONES, $configuracionNumerocancelaciones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configuracionNumerocancelaciones['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_NUMEROCANCELACIONES, $configuracionNumerocancelaciones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_NUMEROCANCELACIONES, $configuracionNumerocancelaciones, $comparison);
    }

    /**
     * Filter the query on the configuracion_valormaximocancelacion column
     *
     * Example usage:
     * <code>
     * $query->filterByConfiguracionValormaximocancelacion(1234); // WHERE configuracion_valormaximocancelacion = 1234
     * $query->filterByConfiguracionValormaximocancelacion(array(12, 34)); // WHERE configuracion_valormaximocancelacion IN (12, 34)
     * $query->filterByConfiguracionValormaximocancelacion(array('min' => 12)); // WHERE configuracion_valormaximocancelacion >= 12
     * $query->filterByConfiguracionValormaximocancelacion(array('max' => 12)); // WHERE configuracion_valormaximocancelacion <= 12
     * </code>
     *
     * @param     mixed $configuracionValormaximocancelacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByConfiguracionValormaximocancelacion($configuracionValormaximocancelacion = null, $comparison = null)
    {
        if (is_array($configuracionValormaximocancelacion)) {
            $useMinMax = false;
            if (isset($configuracionValormaximocancelacion['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_VALORMAXIMOCANCELACION, $configuracionValormaximocancelacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configuracionValormaximocancelacion['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_VALORMAXIMOCANCELACION, $configuracionValormaximocancelacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_VALORMAXIMOCANCELACION, $configuracionValormaximocancelacion, $comparison);
    }

    /**
     * Filter the query on the configuracion_hastacuantosdias column
     *
     * Example usage:
     * <code>
     * $query->filterByConfiguracionHastacuantosdias(1234); // WHERE configuracion_hastacuantosdias = 1234
     * $query->filterByConfiguracionHastacuantosdias(array(12, 34)); // WHERE configuracion_hastacuantosdias IN (12, 34)
     * $query->filterByConfiguracionHastacuantosdias(array('min' => 12)); // WHERE configuracion_hastacuantosdias >= 12
     * $query->filterByConfiguracionHastacuantosdias(array('max' => 12)); // WHERE configuracion_hastacuantosdias <= 12
     * </code>
     *
     * @param     mixed $configuracionHastacuantosdias The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByConfiguracionHastacuantosdias($configuracionHastacuantosdias = null, $comparison = null)
    {
        if (is_array($configuracionHastacuantosdias)) {
            $useMinMax = false;
            if (isset($configuracionHastacuantosdias['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_HASTACUANTOSDIAS, $configuracionHastacuantosdias['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configuracionHastacuantosdias['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_HASTACUANTOSDIAS, $configuracionHastacuantosdias['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_HASTACUANTOSDIAS, $configuracionHastacuantosdias, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConfiguracionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(ConfiguracionPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConfiguracionPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return ConfiguracionQuery The current query, for fluid interface
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
     * @param   Configuracion $configuracion Object to remove from the list of results
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function prune($configuracion = null)
    {
        if ($configuracion) {
            $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $configuracion->getIdconfiguracion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
