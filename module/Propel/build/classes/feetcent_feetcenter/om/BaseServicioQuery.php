<?php


/**
 * Base class that represents a query for the 'servicio' table.
 *
 *
 *
 * @method ServicioQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ServicioQuery orderByServicioNombre($order = Criteria::ASC) Order by the servicio_nombre column
 * @method ServicioQuery orderByServicioDescripcion($order = Criteria::ASC) Order by the servicio_descripcion column
 * @method ServicioQuery orderByServicioGeneraingreso($order = Criteria::ASC) Order by the servicio_generaingreso column
 * @method ServicioQuery orderByServicioGeneracomision($order = Criteria::ASC) Order by the servicio_generacomision column
 * @method ServicioQuery orderByServicioTipocomision($order = Criteria::ASC) Order by the servicio_tipocomision column
 * @method ServicioQuery orderByServicioComision($order = Criteria::ASC) Order by the servicio_comision column
 * @method ServicioQuery orderByServicioDependencia($order = Criteria::ASC) Order by the servicio_dependencia column
 *
 * @method ServicioQuery groupByIdservicio() Group by the idservicio column
 * @method ServicioQuery groupByServicioNombre() Group by the servicio_nombre column
 * @method ServicioQuery groupByServicioDescripcion() Group by the servicio_descripcion column
 * @method ServicioQuery groupByServicioGeneraingreso() Group by the servicio_generaingreso column
 * @method ServicioQuery groupByServicioGeneracomision() Group by the servicio_generacomision column
 * @method ServicioQuery groupByServicioTipocomision() Group by the servicio_tipocomision column
 * @method ServicioQuery groupByServicioComision() Group by the servicio_comision column
 * @method ServicioQuery groupByServicioDependencia() Group by the servicio_dependencia column
 *
 * @method ServicioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServicioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServicioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServicioQuery leftJoinServicioclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioclinica relation
 * @method ServicioQuery rightJoinServicioclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioclinica relation
 * @method ServicioQuery innerJoinServicioclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioclinica relation
 *
 * @method ServicioQuery leftJoinServicioinsumo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioinsumo relation
 * @method ServicioQuery rightJoinServicioinsumo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioinsumo relation
 * @method ServicioQuery innerJoinServicioinsumo($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioinsumo relation
 *
 * @method Servicio findOne(PropelPDO $con = null) Return the first Servicio matching the query
 * @method Servicio findOneOrCreate(PropelPDO $con = null) Return the first Servicio matching the query, or a new Servicio object populated from the query conditions when no match is found
 *
 * @method Servicio findOneByServicioNombre(string $servicio_nombre) Return the first Servicio filtered by the servicio_nombre column
 * @method Servicio findOneByServicioDescripcion(string $servicio_descripcion) Return the first Servicio filtered by the servicio_descripcion column
 * @method Servicio findOneByServicioGeneraingreso(boolean $servicio_generaingreso) Return the first Servicio filtered by the servicio_generaingreso column
 * @method Servicio findOneByServicioGeneracomision(boolean $servicio_generacomision) Return the first Servicio filtered by the servicio_generacomision column
 * @method Servicio findOneByServicioTipocomision(string $servicio_tipocomision) Return the first Servicio filtered by the servicio_tipocomision column
 * @method Servicio findOneByServicioComision(string $servicio_comision) Return the first Servicio filtered by the servicio_comision column
 * @method Servicio findOneByServicioDependencia(string $servicio_dependencia) Return the first Servicio filtered by the servicio_dependencia column
 *
 * @method array findByIdservicio(int $idservicio) Return Servicio objects filtered by the idservicio column
 * @method array findByServicioNombre(string $servicio_nombre) Return Servicio objects filtered by the servicio_nombre column
 * @method array findByServicioDescripcion(string $servicio_descripcion) Return Servicio objects filtered by the servicio_descripcion column
 * @method array findByServicioGeneraingreso(boolean $servicio_generaingreso) Return Servicio objects filtered by the servicio_generaingreso column
 * @method array findByServicioGeneracomision(boolean $servicio_generacomision) Return Servicio objects filtered by the servicio_generacomision column
 * @method array findByServicioTipocomision(string $servicio_tipocomision) Return Servicio objects filtered by the servicio_tipocomision column
 * @method array findByServicioComision(string $servicio_comision) Return Servicio objects filtered by the servicio_comision column
 * @method array findByServicioDependencia(string $servicio_dependencia) Return Servicio objects filtered by the servicio_dependencia column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseServicioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServicioQuery object.
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
            $modelName = 'Servicio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServicioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServicioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServicioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServicioQuery) {
            return $criteria;
        }
        $query = new ServicioQuery(null, null, $modelAlias);

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
     * @return   Servicio|Servicio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Servicio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdservicio($key, $con = null)
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
     * @return                 Servicio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idservicio`, `servicio_nombre`, `servicio_descripcion`, `servicio_generaingreso`, `servicio_generacomision`, `servicio_tipocomision`, `servicio_comision`, `servicio_dependencia` FROM `servicio` WHERE `idservicio` = :p0';
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
            $obj = new Servicio();
            $obj->hydrate($row);
            ServicioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Servicio|Servicio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Servicio[]|mixed the list of results, formatted by the current formatter
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
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the servicio_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioNombre('fooValue');   // WHERE servicio_nombre = 'fooValue'
     * $query->filterByServicioNombre('%fooValue%'); // WHERE servicio_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioNombre($servicioNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioNombre)) {
                $servicioNombre = str_replace('*', '%', $servicioNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_NOMBRE, $servicioNombre, $comparison);
    }

    /**
     * Filter the query on the servicio_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioDescripcion('fooValue');   // WHERE servicio_descripcion = 'fooValue'
     * $query->filterByServicioDescripcion('%fooValue%'); // WHERE servicio_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioDescripcion($servicioDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioDescripcion)) {
                $servicioDescripcion = str_replace('*', '%', $servicioDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_DESCRIPCION, $servicioDescripcion, $comparison);
    }

    /**
     * Filter the query on the servicio_generaingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioGeneraingreso(true); // WHERE servicio_generaingreso = true
     * $query->filterByServicioGeneraingreso('yes'); // WHERE servicio_generaingreso = true
     * </code>
     *
     * @param     boolean|string $servicioGeneraingreso The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioGeneraingreso($servicioGeneraingreso = null, $comparison = null)
    {
        if (is_string($servicioGeneraingreso)) {
            $servicioGeneraingreso = in_array(strtolower($servicioGeneraingreso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_GENERAINGRESO, $servicioGeneraingreso, $comparison);
    }

    /**
     * Filter the query on the servicio_generacomision column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioGeneracomision(true); // WHERE servicio_generacomision = true
     * $query->filterByServicioGeneracomision('yes'); // WHERE servicio_generacomision = true
     * </code>
     *
     * @param     boolean|string $servicioGeneracomision The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioGeneracomision($servicioGeneracomision = null, $comparison = null)
    {
        if (is_string($servicioGeneracomision)) {
            $servicioGeneracomision = in_array(strtolower($servicioGeneracomision), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_GENERACOMISION, $servicioGeneracomision, $comparison);
    }

    /**
     * Filter the query on the servicio_tipocomision column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioTipocomision('fooValue');   // WHERE servicio_tipocomision = 'fooValue'
     * $query->filterByServicioTipocomision('%fooValue%'); // WHERE servicio_tipocomision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioTipocomision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioTipocomision($servicioTipocomision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioTipocomision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioTipocomision)) {
                $servicioTipocomision = str_replace('*', '%', $servicioTipocomision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_TIPOCOMISION, $servicioTipocomision, $comparison);
    }

    /**
     * Filter the query on the servicio_comision column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioComision(1234); // WHERE servicio_comision = 1234
     * $query->filterByServicioComision(array(12, 34)); // WHERE servicio_comision IN (12, 34)
     * $query->filterByServicioComision(array('min' => 12)); // WHERE servicio_comision >= 12
     * $query->filterByServicioComision(array('max' => 12)); // WHERE servicio_comision <= 12
     * </code>
     *
     * @param     mixed $servicioComision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioComision($servicioComision = null, $comparison = null)
    {
        if (is_array($servicioComision)) {
            $useMinMax = false;
            if (isset($servicioComision['min'])) {
                $this->addUsingAlias(ServicioPeer::SERVICIO_COMISION, $servicioComision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicioComision['max'])) {
                $this->addUsingAlias(ServicioPeer::SERVICIO_COMISION, $servicioComision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_COMISION, $servicioComision, $comparison);
    }

    /**
     * Filter the query on the servicio_dependencia column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioDependencia('fooValue');   // WHERE servicio_dependencia = 'fooValue'
     * $query->filterByServicioDependencia('%fooValue%'); // WHERE servicio_dependencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioDependencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioDependencia($servicioDependencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioDependencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioDependencia)) {
                $servicioDependencia = str_replace('*', '%', $servicioDependencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_DEPENDENCIA, $servicioDependencia, $comparison);
    }

    /**
     * Filter the query by a related Servicioclinica object
     *
     * @param   Servicioclinica|PropelObjectCollection $servicioclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioclinica($servicioclinica, $comparison = null)
    {
        if ($servicioclinica instanceof Servicioclinica) {
            return $this
                ->addUsingAlias(ServicioPeer::IDSERVICIO, $servicioclinica->getIdservicio(), $comparison);
        } elseif ($servicioclinica instanceof PropelObjectCollection) {
            return $this
                ->useServicioclinicaQuery()
                ->filterByPrimaryKeys($servicioclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByServicioclinica() only accepts arguments of type Servicioclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicioclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function joinServicioclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicioclinica');

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
            $this->addJoinObject($join, 'Servicioclinica');
        }

        return $this;
    }

    /**
     * Use the Servicioclinica relation Servicioclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioclinicaQuery A secondary query class using the current class as primary query
     */
    public function useServicioclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicioclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioclinica', 'ServicioclinicaQuery');
    }

    /**
     * Filter the query by a related Servicioinsumo object
     *
     * @param   Servicioinsumo|PropelObjectCollection $servicioinsumo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioinsumo($servicioinsumo, $comparison = null)
    {
        if ($servicioinsumo instanceof Servicioinsumo) {
            return $this
                ->addUsingAlias(ServicioPeer::IDSERVICIO, $servicioinsumo->getIdservicio(), $comparison);
        } elseif ($servicioinsumo instanceof PropelObjectCollection) {
            return $this
                ->useServicioinsumoQuery()
                ->filterByPrimaryKeys($servicioinsumo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByServicioinsumo() only accepts arguments of type Servicioinsumo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicioinsumo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function joinServicioinsumo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicioinsumo');

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
            $this->addJoinObject($join, 'Servicioinsumo');
        }

        return $this;
    }

    /**
     * Use the Servicioinsumo relation Servicioinsumo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioinsumoQuery A secondary query class using the current class as primary query
     */
    public function useServicioinsumoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicioinsumo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioinsumo', 'ServicioinsumoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Servicio $servicio Object to remove from the list of results
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function prune($servicio = null)
    {
        if ($servicio) {
            $this->addUsingAlias(ServicioPeer::IDSERVICIO, $servicio->getIdservicio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
