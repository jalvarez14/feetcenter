<?php


/**
 * Base class that represents a query for the 'visitapago' table.
 *
 *
 *
 * @method VisitapagoQuery orderByIdvisitapago($order = Criteria::ASC) Order by the idvisitapago column
 * @method VisitapagoQuery orderByIdvisita($order = Criteria::ASC) Order by the idvisita column
 * @method VisitapagoQuery orderByVisitapagoTipo($order = Criteria::ASC) Order by the visitapago_tipo column
 * @method VisitapagoQuery orderByVisitapagoCantidad($order = Criteria::ASC) Order by the visitapago_cantidad column
 * @method VisitapagoQuery orderByVisitapagoFecha($order = Criteria::ASC) Order by the visitapago_fecha column
 * @method VisitapagoQuery orderByVisitapagoReferencia($order = Criteria::ASC) Order by the visitapago_referencia column
 *
 * @method VisitapagoQuery groupByIdvisitapago() Group by the idvisitapago column
 * @method VisitapagoQuery groupByIdvisita() Group by the idvisita column
 * @method VisitapagoQuery groupByVisitapagoTipo() Group by the visitapago_tipo column
 * @method VisitapagoQuery groupByVisitapagoCantidad() Group by the visitapago_cantidad column
 * @method VisitapagoQuery groupByVisitapagoFecha() Group by the visitapago_fecha column
 * @method VisitapagoQuery groupByVisitapagoReferencia() Group by the visitapago_referencia column
 *
 * @method VisitapagoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VisitapagoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VisitapagoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VisitapagoQuery leftJoinVisita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visita relation
 * @method VisitapagoQuery rightJoinVisita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visita relation
 * @method VisitapagoQuery innerJoinVisita($relationAlias = null) Adds a INNER JOIN clause to the query using the Visita relation
 *
 * @method Visitapago findOne(PropelPDO $con = null) Return the first Visitapago matching the query
 * @method Visitapago findOneOrCreate(PropelPDO $con = null) Return the first Visitapago matching the query, or a new Visitapago object populated from the query conditions when no match is found
 *
 * @method Visitapago findOneByIdvisita(int $idvisita) Return the first Visitapago filtered by the idvisita column
 * @method Visitapago findOneByVisitapagoTipo(string $visitapago_tipo) Return the first Visitapago filtered by the visitapago_tipo column
 * @method Visitapago findOneByVisitapagoCantidad(string $visitapago_cantidad) Return the first Visitapago filtered by the visitapago_cantidad column
 * @method Visitapago findOneByVisitapagoFecha(string $visitapago_fecha) Return the first Visitapago filtered by the visitapago_fecha column
 * @method Visitapago findOneByVisitapagoReferencia(string $visitapago_referencia) Return the first Visitapago filtered by the visitapago_referencia column
 *
 * @method array findByIdvisitapago(int $idvisitapago) Return Visitapago objects filtered by the idvisitapago column
 * @method array findByIdvisita(int $idvisita) Return Visitapago objects filtered by the idvisita column
 * @method array findByVisitapagoTipo(string $visitapago_tipo) Return Visitapago objects filtered by the visitapago_tipo column
 * @method array findByVisitapagoCantidad(string $visitapago_cantidad) Return Visitapago objects filtered by the visitapago_cantidad column
 * @method array findByVisitapagoFecha(string $visitapago_fecha) Return Visitapago objects filtered by the visitapago_fecha column
 * @method array findByVisitapagoReferencia(string $visitapago_referencia) Return Visitapago objects filtered by the visitapago_referencia column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitapagoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVisitapagoQuery object.
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
            $modelName = 'Visitapago';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VisitapagoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VisitapagoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VisitapagoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VisitapagoQuery) {
            return $criteria;
        }
        $query = new VisitapagoQuery(null, null, $modelAlias);

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
     * @return   Visitapago|Visitapago[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VisitapagoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VisitapagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Visitapago A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdvisitapago($key, $con = null)
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
     * @return                 Visitapago A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idvisitapago`, `idvisita`, `visitapago_tipo`, `visitapago_cantidad`, `visitapago_fecha`, `visitapago_referencia` FROM `visitapago` WHERE `idvisitapago` = :p0';
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
            $obj = new Visitapago();
            $obj->hydrate($row);
            VisitapagoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Visitapago|Visitapago[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Visitapago[]|mixed the list of results, formatted by the current formatter
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
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idvisitapago column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisitapago(1234); // WHERE idvisitapago = 1234
     * $query->filterByIdvisitapago(array(12, 34)); // WHERE idvisitapago IN (12, 34)
     * $query->filterByIdvisitapago(array('min' => 12)); // WHERE idvisitapago >= 12
     * $query->filterByIdvisitapago(array('max' => 12)); // WHERE idvisitapago <= 12
     * </code>
     *
     * @param     mixed $idvisitapago The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByIdvisitapago($idvisitapago = null, $comparison = null)
    {
        if (is_array($idvisitapago)) {
            $useMinMax = false;
            if (isset($idvisitapago['min'])) {
                $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $idvisitapago['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisitapago['max'])) {
                $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $idvisitapago['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $idvisitapago, $comparison);
    }

    /**
     * Filter the query on the idvisita column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisita(1234); // WHERE idvisita = 1234
     * $query->filterByIdvisita(array(12, 34)); // WHERE idvisita IN (12, 34)
     * $query->filterByIdvisita(array('min' => 12)); // WHERE idvisita >= 12
     * $query->filterByIdvisita(array('max' => 12)); // WHERE idvisita <= 12
     * </code>
     *
     * @see       filterByVisita()
     *
     * @param     mixed $idvisita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByIdvisita($idvisita = null, $comparison = null)
    {
        if (is_array($idvisita)) {
            $useMinMax = false;
            if (isset($idvisita['min'])) {
                $this->addUsingAlias(VisitapagoPeer::IDVISITA, $idvisita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisita['max'])) {
                $this->addUsingAlias(VisitapagoPeer::IDVISITA, $idvisita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::IDVISITA, $idvisita, $comparison);
    }

    /**
     * Filter the query on the visitapago_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitapagoTipo('fooValue');   // WHERE visitapago_tipo = 'fooValue'
     * $query->filterByVisitapagoTipo('%fooValue%'); // WHERE visitapago_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitapagoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByVisitapagoTipo($visitapagoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitapagoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitapagoTipo)) {
                $visitapagoTipo = str_replace('*', '%', $visitapagoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_TIPO, $visitapagoTipo, $comparison);
    }

    /**
     * Filter the query on the visitapago_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitapagoCantidad(1234); // WHERE visitapago_cantidad = 1234
     * $query->filterByVisitapagoCantidad(array(12, 34)); // WHERE visitapago_cantidad IN (12, 34)
     * $query->filterByVisitapagoCantidad(array('min' => 12)); // WHERE visitapago_cantidad >= 12
     * $query->filterByVisitapagoCantidad(array('max' => 12)); // WHERE visitapago_cantidad <= 12
     * </code>
     *
     * @param     mixed $visitapagoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByVisitapagoCantidad($visitapagoCantidad = null, $comparison = null)
    {
        if (is_array($visitapagoCantidad)) {
            $useMinMax = false;
            if (isset($visitapagoCantidad['min'])) {
                $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_CANTIDAD, $visitapagoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitapagoCantidad['max'])) {
                $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_CANTIDAD, $visitapagoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_CANTIDAD, $visitapagoCantidad, $comparison);
    }

    /**
     * Filter the query on the visitapago_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitapagoFecha('2011-03-14'); // WHERE visitapago_fecha = '2011-03-14'
     * $query->filterByVisitapagoFecha('now'); // WHERE visitapago_fecha = '2011-03-14'
     * $query->filterByVisitapagoFecha(array('max' => 'yesterday')); // WHERE visitapago_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $visitapagoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByVisitapagoFecha($visitapagoFecha = null, $comparison = null)
    {
        if (is_array($visitapagoFecha)) {
            $useMinMax = false;
            if (isset($visitapagoFecha['min'])) {
                $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_FECHA, $visitapagoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitapagoFecha['max'])) {
                $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_FECHA, $visitapagoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_FECHA, $visitapagoFecha, $comparison);
    }

    /**
     * Filter the query on the visitapago_referencia column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitapagoReferencia('fooValue');   // WHERE visitapago_referencia = 'fooValue'
     * $query->filterByVisitapagoReferencia('%fooValue%'); // WHERE visitapago_referencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitapagoReferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function filterByVisitapagoReferencia($visitapagoReferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitapagoReferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitapagoReferencia)) {
                $visitapagoReferencia = str_replace('*', '%', $visitapagoReferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitapagoPeer::VISITAPAGO_REFERENCIA, $visitapagoReferencia, $comparison);
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitapagoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisita($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(VisitapagoPeer::IDVISITA, $visita->getIdvisita(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitapagoPeer::IDVISITA, $visita->toKeyValue('PrimaryKey', 'Idvisita'), $comparison);
        } else {
            throw new PropelException('filterByVisita() only accepts arguments of type Visita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Visita relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function joinVisita($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Visita');

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
            $this->addJoinObject($join, 'Visita');
        }

        return $this;
    }

    /**
     * Use the Visita relation Visita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitaQuery A secondary query class using the current class as primary query
     */
    public function useVisitaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisita($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visita', 'VisitaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Visitapago $visitapago Object to remove from the list of results
     *
     * @return VisitapagoQuery The current query, for fluid interface
     */
    public function prune($visitapago = null)
    {
        if ($visitapago) {
            $this->addUsingAlias(VisitapagoPeer::IDVISITAPAGO, $visitapago->getIdvisitapago(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
