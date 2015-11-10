<?php


/**
 * Base class that represents a query for the 'grupo' table.
 *
 *
 *
 * @method GrupoQuery orderByIdgrupo($order = Criteria::ASC) Order by the idgrupo column
 * @method GrupoQuery orderByGrupoNombre($order = Criteria::ASC) Order by the grupo_nombre column
 * @method GrupoQuery orderByGrupoDescripcion($order = Criteria::ASC) Order by the grupo_descripcion column
 * @method GrupoQuery orderByGrupoCreadoen($order = Criteria::ASC) Order by the grupo_creadoen column
 *
 * @method GrupoQuery groupByIdgrupo() Group by the idgrupo column
 * @method GrupoQuery groupByGrupoNombre() Group by the grupo_nombre column
 * @method GrupoQuery groupByGrupoDescripcion() Group by the grupo_descripcion column
 * @method GrupoQuery groupByGrupoCreadoen() Group by the grupo_creadoen column
 *
 * @method GrupoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GrupoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GrupoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GrupoQuery leftJoinGrupopaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Grupopaciente relation
 * @method GrupoQuery rightJoinGrupopaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Grupopaciente relation
 * @method GrupoQuery innerJoinGrupopaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Grupopaciente relation
 *
 * @method Grupo findOne(PropelPDO $con = null) Return the first Grupo matching the query
 * @method Grupo findOneOrCreate(PropelPDO $con = null) Return the first Grupo matching the query, or a new Grupo object populated from the query conditions when no match is found
 *
 * @method Grupo findOneByGrupoNombre(string $grupo_nombre) Return the first Grupo filtered by the grupo_nombre column
 * @method Grupo findOneByGrupoDescripcion(string $grupo_descripcion) Return the first Grupo filtered by the grupo_descripcion column
 * @method Grupo findOneByGrupoCreadoen(string $grupo_creadoen) Return the first Grupo filtered by the grupo_creadoen column
 *
 * @method array findByIdgrupo(int $idgrupo) Return Grupo objects filtered by the idgrupo column
 * @method array findByGrupoNombre(string $grupo_nombre) Return Grupo objects filtered by the grupo_nombre column
 * @method array findByGrupoDescripcion(string $grupo_descripcion) Return Grupo objects filtered by the grupo_descripcion column
 * @method array findByGrupoCreadoen(string $grupo_creadoen) Return Grupo objects filtered by the grupo_creadoen column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseGrupoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGrupoQuery object.
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
            $modelName = 'Grupo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GrupoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GrupoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GrupoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GrupoQuery) {
            return $criteria;
        }
        $query = new GrupoQuery(null, null, $modelAlias);

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
     * @return   Grupo|Grupo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GrupoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GrupoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Grupo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdgrupo($key, $con = null)
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
     * @return                 Grupo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idgrupo`, `grupo_nombre`, `grupo_descripcion`, `grupo_creadoen` FROM `grupo` WHERE `idgrupo` = :p0';
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
            $obj = new Grupo();
            $obj->hydrate($row);
            GrupoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Grupo|Grupo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Grupo[]|mixed the list of results, formatted by the current formatter
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
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GrupoPeer::IDGRUPO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GrupoPeer::IDGRUPO, $keys, Criteria::IN);
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
     * @param     mixed $idgrupo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByIdgrupo($idgrupo = null, $comparison = null)
    {
        if (is_array($idgrupo)) {
            $useMinMax = false;
            if (isset($idgrupo['min'])) {
                $this->addUsingAlias(GrupoPeer::IDGRUPO, $idgrupo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgrupo['max'])) {
                $this->addUsingAlias(GrupoPeer::IDGRUPO, $idgrupo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupoPeer::IDGRUPO, $idgrupo, $comparison);
    }

    /**
     * Filter the query on the grupo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByGrupoNombre('fooValue');   // WHERE grupo_nombre = 'fooValue'
     * $query->filterByGrupoNombre('%fooValue%'); // WHERE grupo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grupoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByGrupoNombre($grupoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grupoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grupoNombre)) {
                $grupoNombre = str_replace('*', '%', $grupoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GrupoPeer::GRUPO_NOMBRE, $grupoNombre, $comparison);
    }

    /**
     * Filter the query on the grupo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByGrupoDescripcion('fooValue');   // WHERE grupo_descripcion = 'fooValue'
     * $query->filterByGrupoDescripcion('%fooValue%'); // WHERE grupo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grupoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByGrupoDescripcion($grupoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grupoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grupoDescripcion)) {
                $grupoDescripcion = str_replace('*', '%', $grupoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GrupoPeer::GRUPO_DESCRIPCION, $grupoDescripcion, $comparison);
    }

    /**
     * Filter the query on the grupo_creadoen column
     *
     * Example usage:
     * <code>
     * $query->filterByGrupoCreadoen('2011-03-14'); // WHERE grupo_creadoen = '2011-03-14'
     * $query->filterByGrupoCreadoen('now'); // WHERE grupo_creadoen = '2011-03-14'
     * $query->filterByGrupoCreadoen(array('max' => 'yesterday')); // WHERE grupo_creadoen < '2011-03-13'
     * </code>
     *
     * @param     mixed $grupoCreadoen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function filterByGrupoCreadoen($grupoCreadoen = null, $comparison = null)
    {
        if (is_array($grupoCreadoen)) {
            $useMinMax = false;
            if (isset($grupoCreadoen['min'])) {
                $this->addUsingAlias(GrupoPeer::GRUPO_CREADOEN, $grupoCreadoen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grupoCreadoen['max'])) {
                $this->addUsingAlias(GrupoPeer::GRUPO_CREADOEN, $grupoCreadoen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GrupoPeer::GRUPO_CREADOEN, $grupoCreadoen, $comparison);
    }

    /**
     * Filter the query by a related Grupopaciente object
     *
     * @param   Grupopaciente|PropelObjectCollection $grupopaciente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GrupoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGrupopaciente($grupopaciente, $comparison = null)
    {
        if ($grupopaciente instanceof Grupopaciente) {
            return $this
                ->addUsingAlias(GrupoPeer::IDGRUPO, $grupopaciente->getIdgrupo(), $comparison);
        } elseif ($grupopaciente instanceof PropelObjectCollection) {
            return $this
                ->useGrupopacienteQuery()
                ->filterByPrimaryKeys($grupopaciente->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGrupopaciente() only accepts arguments of type Grupopaciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Grupopaciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function joinGrupopaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Grupopaciente');

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
            $this->addJoinObject($join, 'Grupopaciente');
        }

        return $this;
    }

    /**
     * Use the Grupopaciente relation Grupopaciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GrupopacienteQuery A secondary query class using the current class as primary query
     */
    public function useGrupopacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGrupopaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Grupopaciente', 'GrupopacienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Grupo $grupo Object to remove from the list of results
     *
     * @return GrupoQuery The current query, for fluid interface
     */
    public function prune($grupo = null)
    {
        if ($grupo) {
            $this->addUsingAlias(GrupoPeer::IDGRUPO, $grupo->getIdgrupo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
