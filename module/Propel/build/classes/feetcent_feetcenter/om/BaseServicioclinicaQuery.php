<?php


/**
 * Base class that represents a query for the 'servicioclinica' table.
 *
 *
 *
 * @method ServicioclinicaQuery orderByIdservicioclinica($order = Criteria::ASC) Order by the idservicioclinica column
 * @method ServicioclinicaQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ServicioclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method ServicioclinicaQuery orderByServicioclinicaPrecio($order = Criteria::ASC) Order by the servicioclinica_precio column
 *
 * @method ServicioclinicaQuery groupByIdservicioclinica() Group by the idservicioclinica column
 * @method ServicioclinicaQuery groupByIdservicio() Group by the idservicio column
 * @method ServicioclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method ServicioclinicaQuery groupByServicioclinicaPrecio() Group by the servicioclinica_precio column
 *
 * @method ServicioclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServicioclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServicioclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServicioclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method ServicioclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method ServicioclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method ServicioclinicaQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method ServicioclinicaQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method ServicioclinicaQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method ServicioclinicaQuery leftJoinVisitadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visitadetalle relation
 * @method ServicioclinicaQuery rightJoinVisitadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visitadetalle relation
 * @method ServicioclinicaQuery innerJoinVisitadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Visitadetalle relation
 *
 * @method Servicioclinica findOne(PropelPDO $con = null) Return the first Servicioclinica matching the query
 * @method Servicioclinica findOneOrCreate(PropelPDO $con = null) Return the first Servicioclinica matching the query, or a new Servicioclinica object populated from the query conditions when no match is found
 *
 * @method Servicioclinica findOneByIdservicio(int $idservicio) Return the first Servicioclinica filtered by the idservicio column
 * @method Servicioclinica findOneByIdclinica(int $idclinica) Return the first Servicioclinica filtered by the idclinica column
 * @method Servicioclinica findOneByServicioclinicaPrecio(string $servicioclinica_precio) Return the first Servicioclinica filtered by the servicioclinica_precio column
 *
 * @method array findByIdservicioclinica(int $idservicioclinica) Return Servicioclinica objects filtered by the idservicioclinica column
 * @method array findByIdservicio(int $idservicio) Return Servicioclinica objects filtered by the idservicio column
 * @method array findByIdclinica(int $idclinica) Return Servicioclinica objects filtered by the idclinica column
 * @method array findByServicioclinicaPrecio(string $servicioclinica_precio) Return Servicioclinica objects filtered by the servicioclinica_precio column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseServicioclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServicioclinicaQuery object.
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
            $modelName = 'Servicioclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServicioclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServicioclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServicioclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServicioclinicaQuery) {
            return $criteria;
        }
        $query = new ServicioclinicaQuery(null, null, $modelAlias);

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
     * @return   Servicioclinica|Servicioclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicioclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicioclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Servicioclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdservicioclinica($key, $con = null)
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
     * @return                 Servicioclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idservicioclinica`, `idservicio`, `idclinica`, `servicioclinica_precio` FROM `servicioclinica` WHERE `idservicioclinica` = :p0';
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
            $obj = new Servicioclinica();
            $obj->hydrate($row);
            ServicioclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Servicioclinica|Servicioclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Servicioclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idservicioclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicioclinica(1234); // WHERE idservicioclinica = 1234
     * $query->filterByIdservicioclinica(array(12, 34)); // WHERE idservicioclinica IN (12, 34)
     * $query->filterByIdservicioclinica(array('min' => 12)); // WHERE idservicioclinica >= 12
     * $query->filterByIdservicioclinica(array('max' => 12)); // WHERE idservicioclinica <= 12
     * </code>
     *
     * @param     mixed $idservicioclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByIdservicioclinica($idservicioclinica = null, $comparison = null)
    {
        if (is_array($idservicioclinica)) {
            $useMinMax = false;
            if (isset($idservicioclinica['min'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $idservicioclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicioclinica['max'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $idservicioclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $idservicioclinica, $comparison);
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
     * @see       filterByServicio()
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIO, $idservicio, $comparison);
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
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(ServicioclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the servicioclinica_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioclinicaPrecio(1234); // WHERE servicioclinica_precio = 1234
     * $query->filterByServicioclinicaPrecio(array(12, 34)); // WHERE servicioclinica_precio IN (12, 34)
     * $query->filterByServicioclinicaPrecio(array('min' => 12)); // WHERE servicioclinica_precio >= 12
     * $query->filterByServicioclinicaPrecio(array('max' => 12)); // WHERE servicioclinica_precio <= 12
     * </code>
     *
     * @param     mixed $servicioclinicaPrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function filterByServicioclinicaPrecio($servicioclinicaPrecio = null, $comparison = null)
    {
        if (is_array($servicioclinicaPrecio)) {
            $useMinMax = false;
            if (isset($servicioclinicaPrecio['min'])) {
                $this->addUsingAlias(ServicioclinicaPeer::SERVICIOCLINICA_PRECIO, $servicioclinicaPrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicioclinicaPrecio['max'])) {
                $this->addUsingAlias(ServicioclinicaPeer::SERVICIOCLINICA_PRECIO, $servicioclinicaPrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioclinicaPeer::SERVICIOCLINICA_PRECIO, $servicioclinicaPrecio, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(ServicioclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServicioclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return ServicioclinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(ServicioclinicaPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServicioclinicaPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
        } else {
            throw new PropelException('filterByServicio() only accepts arguments of type Servicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicio');

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
            $this->addJoinObject($join, 'Servicio');
        }

        return $this;
    }

    /**
     * Use the Servicio relation Servicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioQuery A secondary query class using the current class as primary query
     */
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Filter the query by a related Visitadetalle object
     *
     * @param   Visitadetalle|PropelObjectCollection $visitadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitadetalle($visitadetalle, $comparison = null)
    {
        if ($visitadetalle instanceof Visitadetalle) {
            return $this
                ->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $visitadetalle->getIdservicioclinica(), $comparison);
        } elseif ($visitadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVisitadetalleQuery()
                ->filterByPrimaryKeys($visitadetalle->getPrimaryKeys())
                ->endUse();
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
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function joinVisitadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useVisitadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVisitadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visitadetalle', 'VisitadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Servicioclinica $servicioclinica Object to remove from the list of results
     *
     * @return ServicioclinicaQuery The current query, for fluid interface
     */
    public function prune($servicioclinica = null)
    {
        if ($servicioclinica) {
            $this->addUsingAlias(ServicioclinicaPeer::IDSERVICIOCLINICA, $servicioclinica->getIdservicioclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
