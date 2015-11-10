<?php


/**
 * Base class that represents a query for the 'canalcomunicacion' table.
 *
 *
 *
 * @method CanalcomunicacionQuery orderByIdcanalcomunicacion($order = Criteria::ASC) Order by the idcanalcomunicacion column
 * @method CanalcomunicacionQuery orderByCanalcomunicacionNombre($order = Criteria::ASC) Order by the canalcomunicacion_nombre column
 * @method CanalcomunicacionQuery orderByCanalcomunicacionDescripcion($order = Criteria::ASC) Order by the canalcomunicacion_descripcion column
 *
 * @method CanalcomunicacionQuery groupByIdcanalcomunicacion() Group by the idcanalcomunicacion column
 * @method CanalcomunicacionQuery groupByCanalcomunicacionNombre() Group by the canalcomunicacion_nombre column
 * @method CanalcomunicacionQuery groupByCanalcomunicacionDescripcion() Group by the canalcomunicacion_descripcion column
 *
 * @method CanalcomunicacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CanalcomunicacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CanalcomunicacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CanalcomunicacionQuery leftJoinPacienteseguimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacienteseguimiento relation
 * @method CanalcomunicacionQuery rightJoinPacienteseguimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacienteseguimiento relation
 * @method CanalcomunicacionQuery innerJoinPacienteseguimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacienteseguimiento relation
 *
 * @method Canalcomunicacion findOne(PropelPDO $con = null) Return the first Canalcomunicacion matching the query
 * @method Canalcomunicacion findOneOrCreate(PropelPDO $con = null) Return the first Canalcomunicacion matching the query, or a new Canalcomunicacion object populated from the query conditions when no match is found
 *
 * @method Canalcomunicacion findOneByCanalcomunicacionNombre(string $canalcomunicacion_nombre) Return the first Canalcomunicacion filtered by the canalcomunicacion_nombre column
 * @method Canalcomunicacion findOneByCanalcomunicacionDescripcion(string $canalcomunicacion_descripcion) Return the first Canalcomunicacion filtered by the canalcomunicacion_descripcion column
 *
 * @method array findByIdcanalcomunicacion(int $idcanalcomunicacion) Return Canalcomunicacion objects filtered by the idcanalcomunicacion column
 * @method array findByCanalcomunicacionNombre(string $canalcomunicacion_nombre) Return Canalcomunicacion objects filtered by the canalcomunicacion_nombre column
 * @method array findByCanalcomunicacionDescripcion(string $canalcomunicacion_descripcion) Return Canalcomunicacion objects filtered by the canalcomunicacion_descripcion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseCanalcomunicacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCanalcomunicacionQuery object.
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
            $modelName = 'Canalcomunicacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CanalcomunicacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CanalcomunicacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CanalcomunicacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CanalcomunicacionQuery) {
            return $criteria;
        }
        $query = new CanalcomunicacionQuery(null, null, $modelAlias);

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
     * @return   Canalcomunicacion|Canalcomunicacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CanalcomunicacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CanalcomunicacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Canalcomunicacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcanalcomunicacion($key, $con = null)
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
     * @return                 Canalcomunicacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcanalcomunicacion`, `canalcomunicacion_nombre`, `canalcomunicacion_descripcion` FROM `canalcomunicacion` WHERE `idcanalcomunicacion` = :p0';
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
            $obj = new Canalcomunicacion();
            $obj->hydrate($row);
            CanalcomunicacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Canalcomunicacion|Canalcomunicacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Canalcomunicacion[]|mixed the list of results, formatted by the current formatter
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
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcanalcomunicacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcanalcomunicacion(1234); // WHERE idcanalcomunicacion = 1234
     * $query->filterByIdcanalcomunicacion(array(12, 34)); // WHERE idcanalcomunicacion IN (12, 34)
     * $query->filterByIdcanalcomunicacion(array('min' => 12)); // WHERE idcanalcomunicacion >= 12
     * $query->filterByIdcanalcomunicacion(array('max' => 12)); // WHERE idcanalcomunicacion <= 12
     * </code>
     *
     * @param     mixed $idcanalcomunicacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function filterByIdcanalcomunicacion($idcanalcomunicacion = null, $comparison = null)
    {
        if (is_array($idcanalcomunicacion)) {
            $useMinMax = false;
            if (isset($idcanalcomunicacion['min'])) {
                $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $idcanalcomunicacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcanalcomunicacion['max'])) {
                $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $idcanalcomunicacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $idcanalcomunicacion, $comparison);
    }

    /**
     * Filter the query on the canalcomunicacion_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCanalcomunicacionNombre('fooValue');   // WHERE canalcomunicacion_nombre = 'fooValue'
     * $query->filterByCanalcomunicacionNombre('%fooValue%'); // WHERE canalcomunicacion_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $canalcomunicacionNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function filterByCanalcomunicacionNombre($canalcomunicacionNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($canalcomunicacionNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $canalcomunicacionNombre)) {
                $canalcomunicacionNombre = str_replace('*', '%', $canalcomunicacionNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CanalcomunicacionPeer::CANALCOMUNICACION_NOMBRE, $canalcomunicacionNombre, $comparison);
    }

    /**
     * Filter the query on the canalcomunicacion_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCanalcomunicacionDescripcion('fooValue');   // WHERE canalcomunicacion_descripcion = 'fooValue'
     * $query->filterByCanalcomunicacionDescripcion('%fooValue%'); // WHERE canalcomunicacion_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $canalcomunicacionDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function filterByCanalcomunicacionDescripcion($canalcomunicacionDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($canalcomunicacionDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $canalcomunicacionDescripcion)) {
                $canalcomunicacionDescripcion = str_replace('*', '%', $canalcomunicacionDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CanalcomunicacionPeer::CANALCOMUNICACION_DESCRIPCION, $canalcomunicacionDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Pacienteseguimiento object
     *
     * @param   Pacienteseguimiento|PropelObjectCollection $pacienteseguimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CanalcomunicacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteseguimiento($pacienteseguimiento, $comparison = null)
    {
        if ($pacienteseguimiento instanceof Pacienteseguimiento) {
            return $this
                ->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $pacienteseguimiento->getIdcanalcomunicacion(), $comparison);
        } elseif ($pacienteseguimiento instanceof PropelObjectCollection) {
            return $this
                ->usePacienteseguimientoQuery()
                ->filterByPrimaryKeys($pacienteseguimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacienteseguimiento() only accepts arguments of type Pacienteseguimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacienteseguimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function joinPacienteseguimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacienteseguimiento');

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
            $this->addJoinObject($join, 'Pacienteseguimiento');
        }

        return $this;
    }

    /**
     * Use the Pacienteseguimiento relation Pacienteseguimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteseguimientoQuery A secondary query class using the current class as primary query
     */
    public function usePacienteseguimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteseguimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacienteseguimiento', 'PacienteseguimientoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Canalcomunicacion $canalcomunicacion Object to remove from the list of results
     *
     * @return CanalcomunicacionQuery The current query, for fluid interface
     */
    public function prune($canalcomunicacion = null)
    {
        if ($canalcomunicacion) {
            $this->addUsingAlias(CanalcomunicacionPeer::IDCANALCOMUNICACION, $canalcomunicacion->getIdcanalcomunicacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
