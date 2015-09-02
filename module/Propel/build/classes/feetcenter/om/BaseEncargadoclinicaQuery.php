<?php


/**
 * Base class that represents a query for the 'encargadoclinica' table.
 *
 *
 *
 * @method EncargadoclinicaQuery orderByIdencargadoclinica($order = Criteria::ASC) Order by the idencargadoclinica column
 * @method EncargadoclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method EncargadoclinicaQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method EncargadoclinicaQuery groupByIdencargadoclinica() Group by the idencargadoclinica column
 * @method EncargadoclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method EncargadoclinicaQuery groupByIdempleado() Group by the idempleado column
 *
 * @method EncargadoclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EncargadoclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EncargadoclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Encargadoclinica findOne(PropelPDO $con = null) Return the first Encargadoclinica matching the query
 * @method Encargadoclinica findOneOrCreate(PropelPDO $con = null) Return the first Encargadoclinica matching the query, or a new Encargadoclinica object populated from the query conditions when no match is found
 *
 * @method Encargadoclinica findOneByIdclinica(int $idclinica) Return the first Encargadoclinica filtered by the idclinica column
 * @method Encargadoclinica findOneByIdempleado(int $idempleado) Return the first Encargadoclinica filtered by the idempleado column
 *
 * @method array findByIdencargadoclinica(int $idencargadoclinica) Return Encargadoclinica objects filtered by the idencargadoclinica column
 * @method array findByIdclinica(int $idclinica) Return Encargadoclinica objects filtered by the idclinica column
 * @method array findByIdempleado(int $idempleado) Return Encargadoclinica objects filtered by the idempleado column
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseEncargadoclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEncargadoclinicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'feetcenter';
        }
        if (null === $modelName) {
            $modelName = 'Encargadoclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EncargadoclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EncargadoclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EncargadoclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EncargadoclinicaQuery) {
            return $criteria;
        }
        $query = new EncargadoclinicaQuery(null, null, $modelAlias);

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
     * @return   Encargadoclinica|Encargadoclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EncargadoclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EncargadoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Encargadoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdencargadoclinica($key, $con = null)
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
     * @return                 Encargadoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idencargadoclinica`, `idclinica`, `idempleado` FROM `encargadoclinica` WHERE `idencargadoclinica` = :p0';
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
            $obj = new Encargadoclinica();
            $obj->hydrate($row);
            EncargadoclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Encargadoclinica|Encargadoclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Encargadoclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idencargadoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdencargadoclinica(1234); // WHERE idencargadoclinica = 1234
     * $query->filterByIdencargadoclinica(array(12, 34)); // WHERE idencargadoclinica IN (12, 34)
     * $query->filterByIdencargadoclinica(array('min' => 12)); // WHERE idencargadoclinica >= 12
     * $query->filterByIdencargadoclinica(array('max' => 12)); // WHERE idencargadoclinica <= 12
     * </code>
     *
     * @param     mixed $idencargadoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdencargadoclinica($idencargadoclinica = null, $comparison = null)
    {
        if (is_array($idencargadoclinica)) {
            $useMinMax = false;
            if (isset($idencargadoclinica['min'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $idencargadoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idencargadoclinica['max'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $idencargadoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $idencargadoclinica, $comparison);
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
     * @param     mixed $idclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EncargadoclinicaPeer::IDCLINICA, $idclinica, $comparison);
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
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EncargadoclinicaPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EncargadoclinicaPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Encargadoclinica $encargadoclinica Object to remove from the list of results
     *
     * @return EncargadoclinicaQuery The current query, for fluid interface
     */
    public function prune($encargadoclinica = null)
    {
        if ($encargadoclinica) {
            $this->addUsingAlias(EncargadoclinicaPeer::IDENCARGADOCLINICA, $encargadoclinica->getIdencargadoclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
