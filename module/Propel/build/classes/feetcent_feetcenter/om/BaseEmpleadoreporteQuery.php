<?php


/**
 * Base class that represents a query for the 'empleadoreporte' table.
 *
 *
 *
 * @method EmpleadoreporteQuery orderByIdempleadoreporte($order = Criteria::ASC) Order by the idempleadoreporte column
 * @method EmpleadoreporteQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method EmpleadoreporteQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoreporteQuery orderByIdempleadoreportado($order = Criteria::ASC) Order by the idempleadoreportado column
 * @method EmpleadoreporteQuery orderByIdconceptoincidencia($order = Criteria::ASC) Order by the idconceptoincidencia column
 * @method EmpleadoreporteQuery orderByEmpleadoreporteFechacreacion($order = Criteria::ASC) Order by the empleadoreporte_fechacreacion column
 * @method EmpleadoreporteQuery orderByEmpleadoreporteComentario($order = Criteria::ASC) Order by the empleadoreporte_comentario column
 * @method EmpleadoreporteQuery orderByEmpleadoreporteFechasuceso($order = Criteria::ASC) Order by the empleadoreporte_fechasuceso column
 *
 * @method EmpleadoreporteQuery groupByIdempleadoreporte() Group by the idempleadoreporte column
 * @method EmpleadoreporteQuery groupByIdclinica() Group by the idclinica column
 * @method EmpleadoreporteQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoreporteQuery groupByIdempleadoreportado() Group by the idempleadoreportado column
 * @method EmpleadoreporteQuery groupByIdconceptoincidencia() Group by the idconceptoincidencia column
 * @method EmpleadoreporteQuery groupByEmpleadoreporteFechacreacion() Group by the empleadoreporte_fechacreacion column
 * @method EmpleadoreporteQuery groupByEmpleadoreporteComentario() Group by the empleadoreporte_comentario column
 * @method EmpleadoreporteQuery groupByEmpleadoreporteFechasuceso() Group by the empleadoreporte_fechasuceso column
 *
 * @method EmpleadoreporteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoreporteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoreporteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoreporteQuery leftJoinClinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinica relation
 * @method EmpleadoreporteQuery rightJoinClinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinica relation
 * @method EmpleadoreporteQuery innerJoinClinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinica relation
 *
 * @method EmpleadoreporteQuery leftJoinConceptoincidencia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptoincidencia relation
 * @method EmpleadoreporteQuery rightJoinConceptoincidencia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptoincidencia relation
 * @method EmpleadoreporteQuery innerJoinConceptoincidencia($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptoincidencia relation
 *
 * @method EmpleadoreporteQuery leftJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method EmpleadoreporteQuery rightJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 * @method EmpleadoreporteQuery innerJoinEmpleadoRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
 *
 * @method EmpleadoreporteQuery leftJoinEmpleadoRelatedByIdempleadoreportado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreportado relation
 * @method EmpleadoreporteQuery rightJoinEmpleadoRelatedByIdempleadoreportado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreportado relation
 * @method EmpleadoreporteQuery innerJoinEmpleadoRelatedByIdempleadoreportado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadoreportado relation
 *
 * @method Empleadoreporte findOne(PropelPDO $con = null) Return the first Empleadoreporte matching the query
 * @method Empleadoreporte findOneOrCreate(PropelPDO $con = null) Return the first Empleadoreporte matching the query, or a new Empleadoreporte object populated from the query conditions when no match is found
 *
 * @method Empleadoreporte findOneByIdclinica(int $idclinica) Return the first Empleadoreporte filtered by the idclinica column
 * @method Empleadoreporte findOneByIdempleado(int $idempleado) Return the first Empleadoreporte filtered by the idempleado column
 * @method Empleadoreporte findOneByIdempleadoreportado(int $idempleadoreportado) Return the first Empleadoreporte filtered by the idempleadoreportado column
 * @method Empleadoreporte findOneByIdconceptoincidencia(int $idconceptoincidencia) Return the first Empleadoreporte filtered by the idconceptoincidencia column
 * @method Empleadoreporte findOneByEmpleadoreporteFechacreacion(string $empleadoreporte_fechacreacion) Return the first Empleadoreporte filtered by the empleadoreporte_fechacreacion column
 * @method Empleadoreporte findOneByEmpleadoreporteComentario(string $empleadoreporte_comentario) Return the first Empleadoreporte filtered by the empleadoreporte_comentario column
 * @method Empleadoreporte findOneByEmpleadoreporteFechasuceso(string $empleadoreporte_fechasuceso) Return the first Empleadoreporte filtered by the empleadoreporte_fechasuceso column
 *
 * @method array findByIdempleadoreporte(int $idempleadoreporte) Return Empleadoreporte objects filtered by the idempleadoreporte column
 * @method array findByIdclinica(int $idclinica) Return Empleadoreporte objects filtered by the idclinica column
 * @method array findByIdempleado(int $idempleado) Return Empleadoreporte objects filtered by the idempleado column
 * @method array findByIdempleadoreportado(int $idempleadoreportado) Return Empleadoreporte objects filtered by the idempleadoreportado column
 * @method array findByIdconceptoincidencia(int $idconceptoincidencia) Return Empleadoreporte objects filtered by the idconceptoincidencia column
 * @method array findByEmpleadoreporteFechacreacion(string $empleadoreporte_fechacreacion) Return Empleadoreporte objects filtered by the empleadoreporte_fechacreacion column
 * @method array findByEmpleadoreporteComentario(string $empleadoreporte_comentario) Return Empleadoreporte objects filtered by the empleadoreporte_comentario column
 * @method array findByEmpleadoreporteFechasuceso(string $empleadoreporte_fechasuceso) Return Empleadoreporte objects filtered by the empleadoreporte_fechasuceso column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadoreporteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoreporteQuery object.
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
            $modelName = 'Empleadoreporte';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoreporteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoreporteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoreporteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoreporteQuery) {
            return $criteria;
        }
        $query = new EmpleadoreporteQuery(null, null, $modelAlias);

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
     * @return   Empleadoreporte|Empleadoreporte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoreportePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoreportePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadoreporte A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadoreporte($key, $con = null)
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
     * @return                 Empleadoreporte A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadoreporte`, `idclinica`, `idempleado`, `idempleadoreportado`, `idconceptoincidencia`, `empleadoreporte_fechacreacion`, `empleadoreporte_comentario`, `empleadoreporte_fechasuceso` FROM `empleadoreporte` WHERE `idempleadoreporte` = :p0';
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
            $obj = new Empleadoreporte();
            $obj->hydrate($row);
            EmpleadoreportePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadoreporte|Empleadoreporte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadoreporte[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadoreporte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoreporte(1234); // WHERE idempleadoreporte = 1234
     * $query->filterByIdempleadoreporte(array(12, 34)); // WHERE idempleadoreporte IN (12, 34)
     * $query->filterByIdempleadoreporte(array('min' => 12)); // WHERE idempleadoreporte >= 12
     * $query->filterByIdempleadoreporte(array('max' => 12)); // WHERE idempleadoreporte <= 12
     * </code>
     *
     * @param     mixed $idempleadoreporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByIdempleadoreporte($idempleadoreporte = null, $comparison = null)
    {
        if (is_array($idempleadoreporte)) {
            $useMinMax = false;
            if (isset($idempleadoreporte['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $idempleadoreporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoreporte['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $idempleadoreporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $idempleadoreporte, $comparison);
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
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::IDCLINICA, $idclinica, $comparison);
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
     * @see       filterByEmpleadoRelatedByIdempleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idempleadoreportado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoreportado(1234); // WHERE idempleadoreportado = 1234
     * $query->filterByIdempleadoreportado(array(12, 34)); // WHERE idempleadoreportado IN (12, 34)
     * $query->filterByIdempleadoreportado(array('min' => 12)); // WHERE idempleadoreportado >= 12
     * $query->filterByIdempleadoreportado(array('max' => 12)); // WHERE idempleadoreportado <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadoreportado()
     *
     * @param     mixed $idempleadoreportado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByIdempleadoreportado($idempleadoreportado = null, $comparison = null)
    {
        if (is_array($idempleadoreportado)) {
            $useMinMax = false;
            if (isset($idempleadoreportado['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTADO, $idempleadoreportado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoreportado['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTADO, $idempleadoreportado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTADO, $idempleadoreportado, $comparison);
    }

    /**
     * Filter the query on the idconceptoincidencia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptoincidencia(1234); // WHERE idconceptoincidencia = 1234
     * $query->filterByIdconceptoincidencia(array(12, 34)); // WHERE idconceptoincidencia IN (12, 34)
     * $query->filterByIdconceptoincidencia(array('min' => 12)); // WHERE idconceptoincidencia >= 12
     * $query->filterByIdconceptoincidencia(array('max' => 12)); // WHERE idconceptoincidencia <= 12
     * </code>
     *
     * @see       filterByConceptoincidencia()
     *
     * @param     mixed $idconceptoincidencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByIdconceptoincidencia($idconceptoincidencia = null, $comparison = null)
    {
        if (is_array($idconceptoincidencia)) {
            $useMinMax = false;
            if (isset($idconceptoincidencia['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptoincidencia['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::IDCONCEPTOINCIDENCIA, $idconceptoincidencia, $comparison);
    }

    /**
     * Filter the query on the empleadoreporte_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoreporteFechacreacion('2011-03-14'); // WHERE empleadoreporte_fechacreacion = '2011-03-14'
     * $query->filterByEmpleadoreporteFechacreacion('now'); // WHERE empleadoreporte_fechacreacion = '2011-03-14'
     * $query->filterByEmpleadoreporteFechacreacion(array('max' => 'yesterday')); // WHERE empleadoreporte_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoreporteFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByEmpleadoreporteFechacreacion($empleadoreporteFechacreacion = null, $comparison = null)
    {
        if (is_array($empleadoreporteFechacreacion)) {
            $useMinMax = false;
            if (isset($empleadoreporteFechacreacion['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHACREACION, $empleadoreporteFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoreporteFechacreacion['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHACREACION, $empleadoreporteFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHACREACION, $empleadoreporteFechacreacion, $comparison);
    }

    /**
     * Filter the query on the empleadoreporte_comentario column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoreporteComentario('fooValue');   // WHERE empleadoreporte_comentario = 'fooValue'
     * $query->filterByEmpleadoreporteComentario('%fooValue%'); // WHERE empleadoreporte_comentario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoreporteComentario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByEmpleadoreporteComentario($empleadoreporteComentario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoreporteComentario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoreporteComentario)) {
                $empleadoreporteComentario = str_replace('*', '%', $empleadoreporteComentario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_COMENTARIO, $empleadoreporteComentario, $comparison);
    }

    /**
     * Filter the query on the empleadoreporte_fechasuceso column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoreporteFechasuceso('2011-03-14'); // WHERE empleadoreporte_fechasuceso = '2011-03-14'
     * $query->filterByEmpleadoreporteFechasuceso('now'); // WHERE empleadoreporte_fechasuceso = '2011-03-14'
     * $query->filterByEmpleadoreporteFechasuceso(array('max' => 'yesterday')); // WHERE empleadoreporte_fechasuceso < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoreporteFechasuceso The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function filterByEmpleadoreporteFechasuceso($empleadoreporteFechasuceso = null, $comparison = null)
    {
        if (is_array($empleadoreporteFechasuceso)) {
            $useMinMax = false;
            if (isset($empleadoreporteFechasuceso['min'])) {
                $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHASUCESO, $empleadoreporteFechasuceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoreporteFechasuceso['max'])) {
                $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHASUCESO, $empleadoreporteFechasuceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoreportePeer::EMPLEADOREPORTE_FECHASUCESO, $empleadoreporteFechasuceso, $comparison);
    }

    /**
     * Filter the query by a related Clinica object
     *
     * @param   Clinica|PropelObjectCollection $clinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoreporteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinica($clinica, $comparison = null)
    {
        if ($clinica instanceof Clinica) {
            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDCLINICA, $clinica->getIdclinica(), $comparison);
        } elseif ($clinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDCLINICA, $clinica->toKeyValue('PrimaryKey', 'Idclinica'), $comparison);
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
     * @return EmpleadoreporteQuery The current query, for fluid interface
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
     * Filter the query by a related Conceptoincidencia object
     *
     * @param   Conceptoincidencia|PropelObjectCollection $conceptoincidencia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoreporteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptoincidencia($conceptoincidencia, $comparison = null)
    {
        if ($conceptoincidencia instanceof Conceptoincidencia) {
            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDCONCEPTOINCIDENCIA, $conceptoincidencia->getIdconceptoincidencia(), $comparison);
        } elseif ($conceptoincidencia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDCONCEPTOINCIDENCIA, $conceptoincidencia->toKeyValue('PrimaryKey', 'Idconceptoincidencia'), $comparison);
        } else {
            throw new PropelException('filterByConceptoincidencia() only accepts arguments of type Conceptoincidencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptoincidencia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function joinConceptoincidencia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptoincidencia');

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
            $this->addJoinObject($join, 'Conceptoincidencia');
        }

        return $this;
    }

    /**
     * Use the Conceptoincidencia relation Conceptoincidencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptoincidenciaQuery A secondary query class using the current class as primary query
     */
    public function useConceptoincidenciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptoincidencia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptoincidencia', 'ConceptoincidenciaQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoreporteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleado');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleado');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleado', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoreporteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadoreportado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadoreportado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadoreportado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadoreportado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadoreportado');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadoreportado');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadoreportado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadoreportadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadoreportado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadoreportado', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleadoreporte $empleadoreporte Object to remove from the list of results
     *
     * @return EmpleadoreporteQuery The current query, for fluid interface
     */
    public function prune($empleadoreporte = null)
    {
        if ($empleadoreporte) {
            $this->addUsingAlias(EmpleadoreportePeer::IDEMPLEADOREPORTE, $empleadoreporte->getIdempleadoreporte(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
