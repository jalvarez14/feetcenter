<?php


/**
 * Base class that represents a query for the 'insumoclinica' table.
 *
 *
 *
 * @method InsumoclinicaQuery orderByIdinsumoclinica($order = Criteria::ASC) Order by the idinsumoclinica column
 * @method InsumoclinicaQuery orderByIdinsumo($order = Criteria::ASC) Order by the idinsumo column
 * @method InsumoclinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method InsumoclinicaQuery orderByInsumoclinicaExistencia($order = Criteria::ASC) Order by the insumoclinica_existencia column
 * @method InsumoclinicaQuery orderByInsumoclinicaMinimo($order = Criteria::ASC) Order by the insumoclinica_minimo column
 * @method InsumoclinicaQuery orderByInsumoclinicaMaximo($order = Criteria::ASC) Order by the insumoclinica_maximo column
 * @method InsumoclinicaQuery orderByInsumoclinicaReorden($order = Criteria::ASC) Order by the insumoclinica_reorden column
 *
 * @method InsumoclinicaQuery groupByIdinsumoclinica() Group by the idinsumoclinica column
 * @method InsumoclinicaQuery groupByIdinsumo() Group by the idinsumo column
 * @method InsumoclinicaQuery groupByIdclinica() Group by the idclinica column
 * @method InsumoclinicaQuery groupByInsumoclinicaExistencia() Group by the insumoclinica_existencia column
 * @method InsumoclinicaQuery groupByInsumoclinicaMinimo() Group by the insumoclinica_minimo column
 * @method InsumoclinicaQuery groupByInsumoclinicaMaximo() Group by the insumoclinica_maximo column
 * @method InsumoclinicaQuery groupByInsumoclinicaReorden() Group by the insumoclinica_reorden column
 *
 * @method InsumoclinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InsumoclinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InsumoclinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InsumoclinicaQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method InsumoclinicaQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method InsumoclinicaQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method InsumoclinicaQuery leftJoinInsumo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Insumo relation
 * @method InsumoclinicaQuery rightJoinInsumo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Insumo relation
 * @method InsumoclinicaQuery innerJoinInsumo($relationAlias = null) Adds a INNER JOIN clause to the query using the Insumo relation
 *
 * @method InsumoclinicaQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method InsumoclinicaQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method InsumoclinicaQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method InsumoclinicaQuery leftJoinTransferenciadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transferenciadetalle relation
 * @method InsumoclinicaQuery rightJoinTransferenciadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transferenciadetalle relation
 * @method InsumoclinicaQuery innerJoinTransferenciadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Transferenciadetalle relation
 *
 * @method Insumoclinica findOne(PropelPDO $con = null) Return the first Insumoclinica matching the query
 * @method Insumoclinica findOneOrCreate(PropelPDO $con = null) Return the first Insumoclinica matching the query, or a new Insumoclinica object populated from the query conditions when no match is found
 *
 * @method Insumoclinica findOneByIdinsumo(int $idinsumo) Return the first Insumoclinica filtered by the idinsumo column
 * @method Insumoclinica findOneByIdclinica(int $idclinica) Return the first Insumoclinica filtered by the idclinica column
 * @method Insumoclinica findOneByInsumoclinicaExistencia(string $insumoclinica_existencia) Return the first Insumoclinica filtered by the insumoclinica_existencia column
 * @method Insumoclinica findOneByInsumoclinicaMinimo(string $insumoclinica_minimo) Return the first Insumoclinica filtered by the insumoclinica_minimo column
 * @method Insumoclinica findOneByInsumoclinicaMaximo(string $insumoclinica_maximo) Return the first Insumoclinica filtered by the insumoclinica_maximo column
 * @method Insumoclinica findOneByInsumoclinicaReorden(string $insumoclinica_reorden) Return the first Insumoclinica filtered by the insumoclinica_reorden column
 *
 * @method array findByIdinsumoclinica(int $idinsumoclinica) Return Insumoclinica objects filtered by the idinsumoclinica column
 * @method array findByIdinsumo(int $idinsumo) Return Insumoclinica objects filtered by the idinsumo column
 * @method array findByIdclinica(int $idclinica) Return Insumoclinica objects filtered by the idclinica column
 * @method array findByInsumoclinicaExistencia(string $insumoclinica_existencia) Return Insumoclinica objects filtered by the insumoclinica_existencia column
 * @method array findByInsumoclinicaMinimo(string $insumoclinica_minimo) Return Insumoclinica objects filtered by the insumoclinica_minimo column
 * @method array findByInsumoclinicaMaximo(string $insumoclinica_maximo) Return Insumoclinica objects filtered by the insumoclinica_maximo column
 * @method array findByInsumoclinicaReorden(string $insumoclinica_reorden) Return Insumoclinica objects filtered by the insumoclinica_reorden column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseInsumoclinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInsumoclinicaQuery object.
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
            $modelName = 'Insumoclinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InsumoclinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InsumoclinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InsumoclinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InsumoclinicaQuery) {
            return $criteria;
        }
        $query = new InsumoclinicaQuery(null, null, $modelAlias);

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
     * @return   Insumoclinica|Insumoclinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InsumoclinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Insumoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdinsumoclinica($key, $con = null)
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
     * @return                 Insumoclinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinsumoclinica`, `idinsumo`, `idclinica`, `insumoclinica_existencia`, `insumoclinica_minimo`, `insumoclinica_maximo`, `insumoclinica_reorden` FROM `insumoclinica` WHERE `idinsumoclinica` = :p0';
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
            $obj = new Insumoclinica();
            $obj->hydrate($row);
            InsumoclinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Insumoclinica|Insumoclinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Insumoclinica[]|mixed the list of results, formatted by the current formatter
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
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idinsumoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinsumoclinica(1234); // WHERE idinsumoclinica = 1234
     * $query->filterByIdinsumoclinica(array(12, 34)); // WHERE idinsumoclinica IN (12, 34)
     * $query->filterByIdinsumoclinica(array('min' => 12)); // WHERE idinsumoclinica >= 12
     * $query->filterByIdinsumoclinica(array('max' => 12)); // WHERE idinsumoclinica <= 12
     * </code>
     *
     * @param     mixed $idinsumoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdinsumoclinica($idinsumoclinica = null, $comparison = null)
    {
        if (is_array($idinsumoclinica)) {
            $useMinMax = false;
            if (isset($idinsumoclinica['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $idinsumoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinsumoclinica['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $idinsumoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $idinsumoclinica, $comparison);
    }

    /**
     * Filter the query on the idinsumo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinsumo(1234); // WHERE idinsumo = 1234
     * $query->filterByIdinsumo(array(12, 34)); // WHERE idinsumo IN (12, 34)
     * $query->filterByIdinsumo(array('min' => 12)); // WHERE idinsumo >= 12
     * $query->filterByIdinsumo(array('max' => 12)); // WHERE idinsumo <= 12
     * </code>
     *
     * @see       filterByInsumo()
     *
     * @param     mixed $idinsumo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdinsumo($idinsumo = null, $comparison = null)
    {
        if (is_array($idinsumo)) {
            $useMinMax = false;
            if (isset($idinsumo['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDINSUMO, $idinsumo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinsumo['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDINSUMO, $idinsumo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::IDINSUMO, $idinsumo, $comparison);
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
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the insumoclinica_existencia column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoclinicaExistencia(1234); // WHERE insumoclinica_existencia = 1234
     * $query->filterByInsumoclinicaExistencia(array(12, 34)); // WHERE insumoclinica_existencia IN (12, 34)
     * $query->filterByInsumoclinicaExistencia(array('min' => 12)); // WHERE insumoclinica_existencia >= 12
     * $query->filterByInsumoclinicaExistencia(array('max' => 12)); // WHERE insumoclinica_existencia <= 12
     * </code>
     *
     * @param     mixed $insumoclinicaExistencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByInsumoclinicaExistencia($insumoclinicaExistencia = null, $comparison = null)
    {
        if (is_array($insumoclinicaExistencia)) {
            $useMinMax = false;
            if (isset($insumoclinicaExistencia['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA, $insumoclinicaExistencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insumoclinicaExistencia['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA, $insumoclinicaExistencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA, $insumoclinicaExistencia, $comparison);
    }

    /**
     * Filter the query on the insumoclinica_minimo column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoclinicaMinimo(1234); // WHERE insumoclinica_minimo = 1234
     * $query->filterByInsumoclinicaMinimo(array(12, 34)); // WHERE insumoclinica_minimo IN (12, 34)
     * $query->filterByInsumoclinicaMinimo(array('min' => 12)); // WHERE insumoclinica_minimo >= 12
     * $query->filterByInsumoclinicaMinimo(array('max' => 12)); // WHERE insumoclinica_minimo <= 12
     * </code>
     *
     * @param     mixed $insumoclinicaMinimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByInsumoclinicaMinimo($insumoclinicaMinimo = null, $comparison = null)
    {
        if (is_array($insumoclinicaMinimo)) {
            $useMinMax = false;
            if (isset($insumoclinicaMinimo['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MINIMO, $insumoclinicaMinimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insumoclinicaMinimo['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MINIMO, $insumoclinicaMinimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MINIMO, $insumoclinicaMinimo, $comparison);
    }

    /**
     * Filter the query on the insumoclinica_maximo column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoclinicaMaximo(1234); // WHERE insumoclinica_maximo = 1234
     * $query->filterByInsumoclinicaMaximo(array(12, 34)); // WHERE insumoclinica_maximo IN (12, 34)
     * $query->filterByInsumoclinicaMaximo(array('min' => 12)); // WHERE insumoclinica_maximo >= 12
     * $query->filterByInsumoclinicaMaximo(array('max' => 12)); // WHERE insumoclinica_maximo <= 12
     * </code>
     *
     * @param     mixed $insumoclinicaMaximo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByInsumoclinicaMaximo($insumoclinicaMaximo = null, $comparison = null)
    {
        if (is_array($insumoclinicaMaximo)) {
            $useMinMax = false;
            if (isset($insumoclinicaMaximo['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO, $insumoclinicaMaximo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insumoclinicaMaximo['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO, $insumoclinicaMaximo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO, $insumoclinicaMaximo, $comparison);
    }

    /**
     * Filter the query on the insumoclinica_reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByInsumoclinicaReorden(1234); // WHERE insumoclinica_reorden = 1234
     * $query->filterByInsumoclinicaReorden(array(12, 34)); // WHERE insumoclinica_reorden IN (12, 34)
     * $query->filterByInsumoclinicaReorden(array('min' => 12)); // WHERE insumoclinica_reorden >= 12
     * $query->filterByInsumoclinicaReorden(array('max' => 12)); // WHERE insumoclinica_reorden <= 12
     * </code>
     *
     * @param     mixed $insumoclinicaReorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function filterByInsumoclinicaReorden($insumoclinicaReorden = null, $comparison = null)
    {
        if (is_array($insumoclinicaReorden)) {
            $useMinMax = false;
            if (isset($insumoclinicaReorden['min'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_REORDEN, $insumoclinicaReorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insumoclinicaReorden['max'])) {
                $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_REORDEN, $insumoclinicaReorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InsumoclinicaPeer::INSUMOCLINICA_REORDEN, $insumoclinicaReorden, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return InsumoclinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Insumo object
     *
     * @param   Insumo|PropelObjectCollection $insumo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInsumo($insumo, $comparison = null)
    {
        if ($insumo instanceof Insumo) {
            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDINSUMO, $insumo->getIdinsumo(), $comparison);
        } elseif ($insumo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDINSUMO, $insumo->toKeyValue('PrimaryKey', 'Idinsumo'), $comparison);
        } else {
            throw new PropelException('filterByInsumo() only accepts arguments of type Insumo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Insumo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function joinInsumo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Insumo');

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
            $this->addJoinObject($join, 'Insumo');
        }

        return $this;
    }

    /**
     * Use the Insumo relation Insumo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InsumoQuery A secondary query class using the current class as primary query
     */
    public function useInsumoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInsumo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Insumo', 'InsumoQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $compradetalle->getIdinsumoclinica(), $comparison);
        } elseif ($compradetalle instanceof PropelObjectCollection) {
            return $this
                ->useCompradetalleQuery()
                ->filterByPrimaryKeys($compradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompradetalle() only accepts arguments of type Compradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compradetalle');

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
            $this->addJoinObject($join, 'Compradetalle');
        }

        return $this;
    }

    /**
     * Use the Compradetalle relation Compradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Filter the query by a related Transferenciadetalle object
     *
     * @param   Transferenciadetalle|PropelObjectCollection $transferenciadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InsumoclinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciadetalle($transferenciadetalle, $comparison = null)
    {
        if ($transferenciadetalle instanceof Transferenciadetalle) {
            return $this
                ->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $transferenciadetalle->getIdinsumoclinica(), $comparison);
        } elseif ($transferenciadetalle instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciadetalleQuery()
                ->filterByPrimaryKeys($transferenciadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciadetalle() only accepts arguments of type Transferenciadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Transferenciadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function joinTransferenciadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Transferenciadetalle');

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
            $this->addJoinObject($join, 'Transferenciadetalle');
        }

        return $this;
    }

    /**
     * Use the Transferenciadetalle relation Transferenciadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciadetalleQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTransferenciadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transferenciadetalle', 'TransferenciadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Insumoclinica $insumoclinica Object to remove from the list of results
     *
     * @return InsumoclinicaQuery The current query, for fluid interface
     */
    public function prune($insumoclinica = null)
    {
        if ($insumoclinica) {
            $this->addUsingAlias(InsumoclinicaPeer::IDINSUMOCLINICA, $insumoclinica->getIdinsumoclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
