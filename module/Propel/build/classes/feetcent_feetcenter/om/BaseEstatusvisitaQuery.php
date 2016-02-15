<?php


/**
 * Base class that represents a query for the 'estatusvisita' table.
 *
 *
 *
 * @method EstatusvisitaQuery orderByIdestatusvisita($order = Criteria::ASC) Order by the idestatusvisita column
 * @method EstatusvisitaQuery orderByEstatusvisitaNombre($order = Criteria::ASC) Order by the estatusvisita_nombre column
 * @method EstatusvisitaQuery orderByEstatusvisitaColor($order = Criteria::ASC) Order by the estatusvisita_color column
 * @method EstatusvisitaQuery orderByEstatusvisitaCssname($order = Criteria::ASC) Order by the estatusvisita_cssname column
 *
 * @method EstatusvisitaQuery groupByIdestatusvisita() Group by the idestatusvisita column
 * @method EstatusvisitaQuery groupByEstatusvisitaNombre() Group by the estatusvisita_nombre column
 * @method EstatusvisitaQuery groupByEstatusvisitaColor() Group by the estatusvisita_color column
 * @method EstatusvisitaQuery groupByEstatusvisitaCssname() Group by the estatusvisita_cssname column
 *
 * @method EstatusvisitaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EstatusvisitaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EstatusvisitaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Estatusvisita findOne(PropelPDO $con = null) Return the first Estatusvisita matching the query
 * @method Estatusvisita findOneOrCreate(PropelPDO $con = null) Return the first Estatusvisita matching the query, or a new Estatusvisita object populated from the query conditions when no match is found
 *
 * @method Estatusvisita findOneByEstatusvisitaNombre(string $estatusvisita_nombre) Return the first Estatusvisita filtered by the estatusvisita_nombre column
 * @method Estatusvisita findOneByEstatusvisitaColor(string $estatusvisita_color) Return the first Estatusvisita filtered by the estatusvisita_color column
 * @method Estatusvisita findOneByEstatusvisitaCssname(string $estatusvisita_cssname) Return the first Estatusvisita filtered by the estatusvisita_cssname column
 *
 * @method array findByIdestatusvisita(int $idestatusvisita) Return Estatusvisita objects filtered by the idestatusvisita column
 * @method array findByEstatusvisitaNombre(string $estatusvisita_nombre) Return Estatusvisita objects filtered by the estatusvisita_nombre column
 * @method array findByEstatusvisitaColor(string $estatusvisita_color) Return Estatusvisita objects filtered by the estatusvisita_color column
 * @method array findByEstatusvisitaCssname(string $estatusvisita_cssname) Return Estatusvisita objects filtered by the estatusvisita_cssname column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEstatusvisitaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEstatusvisitaQuery object.
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
            $modelName = 'Estatusvisita';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstatusvisitaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EstatusvisitaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstatusvisitaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstatusvisitaQuery) {
            return $criteria;
        }
        $query = new EstatusvisitaQuery(null, null, $modelAlias);

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
     * @return   Estatusvisita|Estatusvisita[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstatusvisitaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstatusvisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Estatusvisita A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdestatusvisita($key, $con = null)
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
     * @return                 Estatusvisita A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idestatusvisita`, `estatusvisita_nombre`, `estatusvisita_color`, `estatusvisita_cssname` FROM `estatusvisita` WHERE `idestatusvisita` = :p0';
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
            $obj = new Estatusvisita();
            $obj->hydrate($row);
            EstatusvisitaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Estatusvisita|Estatusvisita[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Estatusvisita[]|mixed the list of results, formatted by the current formatter
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
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idestatusvisita column
     *
     * Example usage:
     * <code>
     * $query->filterByIdestatusvisita(1234); // WHERE idestatusvisita = 1234
     * $query->filterByIdestatusvisita(array(12, 34)); // WHERE idestatusvisita IN (12, 34)
     * $query->filterByIdestatusvisita(array('min' => 12)); // WHERE idestatusvisita >= 12
     * $query->filterByIdestatusvisita(array('max' => 12)); // WHERE idestatusvisita <= 12
     * </code>
     *
     * @param     mixed $idestatusvisita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByIdestatusvisita($idestatusvisita = null, $comparison = null)
    {
        if (is_array($idestatusvisita)) {
            $useMinMax = false;
            if (isset($idestatusvisita['min'])) {
                $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $idestatusvisita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idestatusvisita['max'])) {
                $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $idestatusvisita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $idestatusvisita, $comparison);
    }

    /**
     * Filter the query on the estatusvisita_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatusvisitaNombre('fooValue');   // WHERE estatusvisita_nombre = 'fooValue'
     * $query->filterByEstatusvisitaNombre('%fooValue%'); // WHERE estatusvisita_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatusvisitaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByEstatusvisitaNombre($estatusvisitaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatusvisitaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatusvisitaNombre)) {
                $estatusvisitaNombre = str_replace('*', '%', $estatusvisitaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatusvisitaPeer::ESTATUSVISITA_NOMBRE, $estatusvisitaNombre, $comparison);
    }

    /**
     * Filter the query on the estatusvisita_color column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatusvisitaColor('fooValue');   // WHERE estatusvisita_color = 'fooValue'
     * $query->filterByEstatusvisitaColor('%fooValue%'); // WHERE estatusvisita_color LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatusvisitaColor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByEstatusvisitaColor($estatusvisitaColor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatusvisitaColor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatusvisitaColor)) {
                $estatusvisitaColor = str_replace('*', '%', $estatusvisitaColor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatusvisitaPeer::ESTATUSVISITA_COLOR, $estatusvisitaColor, $comparison);
    }

    /**
     * Filter the query on the estatusvisita_cssname column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatusvisitaCssname('fooValue');   // WHERE estatusvisita_cssname = 'fooValue'
     * $query->filterByEstatusvisitaCssname('%fooValue%'); // WHERE estatusvisita_cssname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatusvisitaCssname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function filterByEstatusvisitaCssname($estatusvisitaCssname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatusvisitaCssname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatusvisitaCssname)) {
                $estatusvisitaCssname = str_replace('*', '%', $estatusvisitaCssname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatusvisitaPeer::ESTATUSVISITA_CSSNAME, $estatusvisitaCssname, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Estatusvisita $estatusvisita Object to remove from the list of results
     *
     * @return EstatusvisitaQuery The current query, for fluid interface
     */
    public function prune($estatusvisita = null)
    {
        if ($estatusvisita) {
            $this->addUsingAlias(EstatusvisitaPeer::IDESTATUSVISITA, $estatusvisita->getIdestatusvisita(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
