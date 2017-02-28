<?php


/**
 * Base class that represents a query for the 'visitalog' table.
 *
 *
 *
 * @method VisitalogQuery orderByIdvisitalog($order = Criteria::ASC) Order by the idvisitalog column
 * @method VisitalogQuery orderByIdvisita($order = Criteria::ASC) Order by the idvisita column
 * @method VisitalogQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method VisitalogQuery orderByVisitalogFecha($order = Criteria::ASC) Order by the visitalog_fecha column
 * @method VisitalogQuery orderByVisitalogAccion($order = Criteria::ASC) Order by the visitalog_accion column
 *
 * @method VisitalogQuery groupByIdvisitalog() Group by the idvisitalog column
 * @method VisitalogQuery groupByIdvisita() Group by the idvisita column
 * @method VisitalogQuery groupByIdempleado() Group by the idempleado column
 * @method VisitalogQuery groupByVisitalogFecha() Group by the visitalog_fecha column
 * @method VisitalogQuery groupByVisitalogAccion() Group by the visitalog_accion column
 *
 * @method VisitalogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VisitalogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VisitalogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Visitalog findOne(PropelPDO $con = null) Return the first Visitalog matching the query
 * @method Visitalog findOneOrCreate(PropelPDO $con = null) Return the first Visitalog matching the query, or a new Visitalog object populated from the query conditions when no match is found
 *
 * @method Visitalog findOneByIdvisita(int $idvisita) Return the first Visitalog filtered by the idvisita column
 * @method Visitalog findOneByIdempleado(int $idempleado) Return the first Visitalog filtered by the idempleado column
 * @method Visitalog findOneByVisitalogFecha(string $visitalog_fecha) Return the first Visitalog filtered by the visitalog_fecha column
 * @method Visitalog findOneByVisitalogAccion(string $visitalog_accion) Return the first Visitalog filtered by the visitalog_accion column
 *
 * @method array findByIdvisitalog(int $idvisitalog) Return Visitalog objects filtered by the idvisitalog column
 * @method array findByIdvisita(int $idvisita) Return Visitalog objects filtered by the idvisita column
 * @method array findByIdempleado(int $idempleado) Return Visitalog objects filtered by the idempleado column
 * @method array findByVisitalogFecha(string $visitalog_fecha) Return Visitalog objects filtered by the visitalog_fecha column
 * @method array findByVisitalogAccion(string $visitalog_accion) Return Visitalog objects filtered by the visitalog_accion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitalogQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVisitalogQuery object.
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
            $modelName = 'Visitalog';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VisitalogQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VisitalogQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VisitalogQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VisitalogQuery) {
            return $criteria;
        }
        $query = new VisitalogQuery(null, null, $modelAlias);

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
     * @return   Visitalog|Visitalog[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VisitalogPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VisitalogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Visitalog A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdvisitalog($key, $con = null)
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
     * @return                 Visitalog A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idvisitalog`, `idvisita`, `idempleado`, `visitalog_fecha`, `visitalog_accion` FROM `visitalog` WHERE `idvisitalog` = :p0';
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
            $obj = new Visitalog();
            $obj->hydrate($row);
            VisitalogPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Visitalog|Visitalog[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Visitalog[]|mixed the list of results, formatted by the current formatter
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
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idvisitalog column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisitalog(1234); // WHERE idvisitalog = 1234
     * $query->filterByIdvisitalog(array(12, 34)); // WHERE idvisitalog IN (12, 34)
     * $query->filterByIdvisitalog(array('min' => 12)); // WHERE idvisitalog >= 12
     * $query->filterByIdvisitalog(array('max' => 12)); // WHERE idvisitalog <= 12
     * </code>
     *
     * @param     mixed $idvisitalog The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByIdvisitalog($idvisitalog = null, $comparison = null)
    {
        if (is_array($idvisitalog)) {
            $useMinMax = false;
            if (isset($idvisitalog['min'])) {
                $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $idvisitalog['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisitalog['max'])) {
                $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $idvisitalog['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $idvisitalog, $comparison);
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
     * @param     mixed $idvisita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByIdvisita($idvisita = null, $comparison = null)
    {
        if (is_array($idvisita)) {
            $useMinMax = false;
            if (isset($idvisita['min'])) {
                $this->addUsingAlias(VisitalogPeer::IDVISITA, $idvisita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisita['max'])) {
                $this->addUsingAlias(VisitalogPeer::IDVISITA, $idvisita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitalogPeer::IDVISITA, $idvisita, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(VisitalogPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(VisitalogPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitalogPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the visitalog_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitalogFecha('2011-03-14'); // WHERE visitalog_fecha = '2011-03-14'
     * $query->filterByVisitalogFecha('now'); // WHERE visitalog_fecha = '2011-03-14'
     * $query->filterByVisitalogFecha(array('max' => 'yesterday')); // WHERE visitalog_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $visitalogFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByVisitalogFecha($visitalogFecha = null, $comparison = null)
    {
        if (is_array($visitalogFecha)) {
            $useMinMax = false;
            if (isset($visitalogFecha['min'])) {
                $this->addUsingAlias(VisitalogPeer::VISITALOG_FECHA, $visitalogFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitalogFecha['max'])) {
                $this->addUsingAlias(VisitalogPeer::VISITALOG_FECHA, $visitalogFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitalogPeer::VISITALOG_FECHA, $visitalogFecha, $comparison);
    }

    /**
     * Filter the query on the visitalog_accion column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitalogAccion('fooValue');   // WHERE visitalog_accion = 'fooValue'
     * $query->filterByVisitalogAccion('%fooValue%'); // WHERE visitalog_accion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitalogAccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function filterByVisitalogAccion($visitalogAccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitalogAccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitalogAccion)) {
                $visitalogAccion = str_replace('*', '%', $visitalogAccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitalogPeer::VISITALOG_ACCION, $visitalogAccion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Visitalog $visitalog Object to remove from the list of results
     *
     * @return VisitalogQuery The current query, for fluid interface
     */
    public function prune($visitalog = null)
    {
        if ($visitalog) {
            $this->addUsingAlias(VisitalogPeer::IDVISITALOG, $visitalog->getIdvisitalog(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
