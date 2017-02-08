<?php


/**
 * Base class that represents a query for the 'membresia' table.
 *
 *
 *
 * @method MembresiaQuery orderByIdmembresia($order = Criteria::ASC) Order by the idmembresia column
 * @method MembresiaQuery orderByMembresiaNombre($order = Criteria::ASC) Order by the membresia_nombre column
 * @method MembresiaQuery orderByMembresiaDescripcion($order = Criteria::ASC) Order by the membresia_descripcion column
 * @method MembresiaQuery orderByMembresiaServicios($order = Criteria::ASC) Order by the membresia_servicios column
 * @method MembresiaQuery orderByMembresiaCupones($order = Criteria::ASC) Order by the membresia_cupones column
 * @method MembresiaQuery orderByServicioGeneraingreso($order = Criteria::ASC) Order by the servicio_generaingreso column
 * @method MembresiaQuery orderByServicioGeneracomision($order = Criteria::ASC) Order by the servicio_generacomision column
 * @method MembresiaQuery orderByServicioTipocomision($order = Criteria::ASC) Order by the servicio_tipocomision column
 * @method MembresiaQuery orderByServicioComision($order = Criteria::ASC) Order by the servicio_comision column
 * @method MembresiaQuery orderByMembresiaPrecio($order = Criteria::ASC) Order by the membresia_precio column
 *
 * @method MembresiaQuery groupByIdmembresia() Group by the idmembresia column
 * @method MembresiaQuery groupByMembresiaNombre() Group by the membresia_nombre column
 * @method MembresiaQuery groupByMembresiaDescripcion() Group by the membresia_descripcion column
 * @method MembresiaQuery groupByMembresiaServicios() Group by the membresia_servicios column
 * @method MembresiaQuery groupByMembresiaCupones() Group by the membresia_cupones column
 * @method MembresiaQuery groupByServicioGeneraingreso() Group by the servicio_generaingreso column
 * @method MembresiaQuery groupByServicioGeneracomision() Group by the servicio_generacomision column
 * @method MembresiaQuery groupByServicioTipocomision() Group by the servicio_tipocomision column
 * @method MembresiaQuery groupByServicioComision() Group by the servicio_comision column
 * @method MembresiaQuery groupByMembresiaPrecio() Group by the membresia_precio column
 *
 * @method MembresiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MembresiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MembresiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MembresiaQuery leftJoinMembresiaclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Membresiaclinica relation
 * @method MembresiaQuery rightJoinMembresiaclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Membresiaclinica relation
 * @method MembresiaQuery innerJoinMembresiaclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Membresiaclinica relation
 *
 * @method MembresiaQuery leftJoinPacientemembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresia relation
 * @method MembresiaQuery rightJoinPacientemembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresia relation
 * @method MembresiaQuery innerJoinPacientemembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresia relation
 *
 * @method MembresiaQuery leftJoinVisitadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visitadetalle relation
 * @method MembresiaQuery rightJoinVisitadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visitadetalle relation
 * @method MembresiaQuery innerJoinVisitadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Visitadetalle relation
 *
 * @method Membresia findOne(PropelPDO $con = null) Return the first Membresia matching the query
 * @method Membresia findOneOrCreate(PropelPDO $con = null) Return the first Membresia matching the query, or a new Membresia object populated from the query conditions when no match is found
 *
 * @method Membresia findOneByMembresiaNombre(string $membresia_nombre) Return the first Membresia filtered by the membresia_nombre column
 * @method Membresia findOneByMembresiaDescripcion(string $membresia_descripcion) Return the first Membresia filtered by the membresia_descripcion column
 * @method Membresia findOneByMembresiaServicios(string $membresia_servicios) Return the first Membresia filtered by the membresia_servicios column
 * @method Membresia findOneByMembresiaCupones(string $membresia_cupones) Return the first Membresia filtered by the membresia_cupones column
 * @method Membresia findOneByServicioGeneraingreso(boolean $servicio_generaingreso) Return the first Membresia filtered by the servicio_generaingreso column
 * @method Membresia findOneByServicioGeneracomision(boolean $servicio_generacomision) Return the first Membresia filtered by the servicio_generacomision column
 * @method Membresia findOneByServicioTipocomision(string $servicio_tipocomision) Return the first Membresia filtered by the servicio_tipocomision column
 * @method Membresia findOneByServicioComision(string $servicio_comision) Return the first Membresia filtered by the servicio_comision column
 * @method Membresia findOneByMembresiaPrecio(string $membresia_precio) Return the first Membresia filtered by the membresia_precio column
 *
 * @method array findByIdmembresia(int $idmembresia) Return Membresia objects filtered by the idmembresia column
 * @method array findByMembresiaNombre(string $membresia_nombre) Return Membresia objects filtered by the membresia_nombre column
 * @method array findByMembresiaDescripcion(string $membresia_descripcion) Return Membresia objects filtered by the membresia_descripcion column
 * @method array findByMembresiaServicios(string $membresia_servicios) Return Membresia objects filtered by the membresia_servicios column
 * @method array findByMembresiaCupones(string $membresia_cupones) Return Membresia objects filtered by the membresia_cupones column
 * @method array findByServicioGeneraingreso(boolean $servicio_generaingreso) Return Membresia objects filtered by the servicio_generaingreso column
 * @method array findByServicioGeneracomision(boolean $servicio_generacomision) Return Membresia objects filtered by the servicio_generacomision column
 * @method array findByServicioTipocomision(string $servicio_tipocomision) Return Membresia objects filtered by the servicio_tipocomision column
 * @method array findByServicioComision(string $servicio_comision) Return Membresia objects filtered by the servicio_comision column
 * @method array findByMembresiaPrecio(string $membresia_precio) Return Membresia objects filtered by the membresia_precio column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseMembresiaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMembresiaQuery object.
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
            $modelName = 'Membresia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MembresiaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MembresiaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MembresiaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MembresiaQuery) {
            return $criteria;
        }
        $query = new MembresiaQuery(null, null, $modelAlias);

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
     * @return   Membresia|Membresia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MembresiaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MembresiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Membresia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmembresia($key, $con = null)
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
     * @return                 Membresia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmembresia`, `membresia_nombre`, `membresia_descripcion`, `membresia_servicios`, `membresia_cupones`, `servicio_generaingreso`, `servicio_generacomision`, `servicio_tipocomision`, `servicio_comision`, `membresia_precio` FROM `membresia` WHERE `idmembresia` = :p0';
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
            $obj = new Membresia();
            $obj->hydrate($row);
            MembresiaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Membresia|Membresia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Membresia[]|mixed the list of results, formatted by the current formatter
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
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmembresia(1234); // WHERE idmembresia = 1234
     * $query->filterByIdmembresia(array(12, 34)); // WHERE idmembresia IN (12, 34)
     * $query->filterByIdmembresia(array('min' => 12)); // WHERE idmembresia >= 12
     * $query->filterByIdmembresia(array('max' => 12)); // WHERE idmembresia <= 12
     * </code>
     *
     * @param     mixed $idmembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByIdmembresia($idmembresia = null, $comparison = null)
    {
        if (is_array($idmembresia)) {
            $useMinMax = false;
            if (isset($idmembresia['min'])) {
                $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresia['max'])) {
                $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $idmembresia, $comparison);
    }

    /**
     * Filter the query on the membresia_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaNombre('fooValue');   // WHERE membresia_nombre = 'fooValue'
     * $query->filterByMembresiaNombre('%fooValue%'); // WHERE membresia_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membresiaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaNombre($membresiaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membresiaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membresiaNombre)) {
                $membresiaNombre = str_replace('*', '%', $membresiaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_NOMBRE, $membresiaNombre, $comparison);
    }

    /**
     * Filter the query on the membresia_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaDescripcion('fooValue');   // WHERE membresia_descripcion = 'fooValue'
     * $query->filterByMembresiaDescripcion('%fooValue%'); // WHERE membresia_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membresiaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaDescripcion($membresiaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membresiaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membresiaDescripcion)) {
                $membresiaDescripcion = str_replace('*', '%', $membresiaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_DESCRIPCION, $membresiaDescripcion, $comparison);
    }

    /**
     * Filter the query on the membresia_servicios column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaServicios(1234); // WHERE membresia_servicios = 1234
     * $query->filterByMembresiaServicios(array(12, 34)); // WHERE membresia_servicios IN (12, 34)
     * $query->filterByMembresiaServicios(array('min' => 12)); // WHERE membresia_servicios >= 12
     * $query->filterByMembresiaServicios(array('max' => 12)); // WHERE membresia_servicios <= 12
     * </code>
     *
     * @param     mixed $membresiaServicios The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaServicios($membresiaServicios = null, $comparison = null)
    {
        if (is_array($membresiaServicios)) {
            $useMinMax = false;
            if (isset($membresiaServicios['min'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaServicios['max'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_SERVICIOS, $membresiaServicios, $comparison);
    }

    /**
     * Filter the query on the membresia_cupones column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaCupones(1234); // WHERE membresia_cupones = 1234
     * $query->filterByMembresiaCupones(array(12, 34)); // WHERE membresia_cupones IN (12, 34)
     * $query->filterByMembresiaCupones(array('min' => 12)); // WHERE membresia_cupones >= 12
     * $query->filterByMembresiaCupones(array('max' => 12)); // WHERE membresia_cupones <= 12
     * </code>
     *
     * @param     mixed $membresiaCupones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaCupones($membresiaCupones = null, $comparison = null)
    {
        if (is_array($membresiaCupones)) {
            $useMinMax = false;
            if (isset($membresiaCupones['min'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaCupones['max'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_CUPONES, $membresiaCupones, $comparison);
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
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByServicioGeneraingreso($servicioGeneraingreso = null, $comparison = null)
    {
        if (is_string($servicioGeneraingreso)) {
            $servicioGeneraingreso = in_array(strtolower($servicioGeneraingreso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MembresiaPeer::SERVICIO_GENERAINGRESO, $servicioGeneraingreso, $comparison);
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
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByServicioGeneracomision($servicioGeneracomision = null, $comparison = null)
    {
        if (is_string($servicioGeneracomision)) {
            $servicioGeneracomision = in_array(strtolower($servicioGeneracomision), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MembresiaPeer::SERVICIO_GENERACOMISION, $servicioGeneracomision, $comparison);
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
     * @return MembresiaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MembresiaPeer::SERVICIO_TIPOCOMISION, $servicioTipocomision, $comparison);
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
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByServicioComision($servicioComision = null, $comparison = null)
    {
        if (is_array($servicioComision)) {
            $useMinMax = false;
            if (isset($servicioComision['min'])) {
                $this->addUsingAlias(MembresiaPeer::SERVICIO_COMISION, $servicioComision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicioComision['max'])) {
                $this->addUsingAlias(MembresiaPeer::SERVICIO_COMISION, $servicioComision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::SERVICIO_COMISION, $servicioComision, $comparison);
    }

    /**
     * Filter the query on the membresia_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByMembresiaPrecio(1234); // WHERE membresia_precio = 1234
     * $query->filterByMembresiaPrecio(array(12, 34)); // WHERE membresia_precio IN (12, 34)
     * $query->filterByMembresiaPrecio(array('min' => 12)); // WHERE membresia_precio >= 12
     * $query->filterByMembresiaPrecio(array('max' => 12)); // WHERE membresia_precio <= 12
     * </code>
     *
     * @param     mixed $membresiaPrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function filterByMembresiaPrecio($membresiaPrecio = null, $comparison = null)
    {
        if (is_array($membresiaPrecio)) {
            $useMinMax = false;
            if (isset($membresiaPrecio['min'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_PRECIO, $membresiaPrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($membresiaPrecio['max'])) {
                $this->addUsingAlias(MembresiaPeer::MEMBRESIA_PRECIO, $membresiaPrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MembresiaPeer::MEMBRESIA_PRECIO, $membresiaPrecio, $comparison);
    }

    /**
     * Filter the query by a related Membresiaclinica object
     *
     * @param   Membresiaclinica|PropelObjectCollection $membresiaclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMembresiaclinica($membresiaclinica, $comparison = null)
    {
        if ($membresiaclinica instanceof Membresiaclinica) {
            return $this
                ->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $membresiaclinica->getIdmembresia(), $comparison);
        } elseif ($membresiaclinica instanceof PropelObjectCollection) {
            return $this
                ->useMembresiaclinicaQuery()
                ->filterByPrimaryKeys($membresiaclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMembresiaclinica() only accepts arguments of type Membresiaclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Membresiaclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function joinMembresiaclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Membresiaclinica');

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
            $this->addJoinObject($join, 'Membresiaclinica');
        }

        return $this;
    }

    /**
     * Use the Membresiaclinica relation Membresiaclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MembresiaclinicaQuery A secondary query class using the current class as primary query
     */
    public function useMembresiaclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMembresiaclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Membresiaclinica', 'MembresiaclinicaQuery');
    }

    /**
     * Filter the query by a related Pacientemembresia object
     *
     * @param   Pacientemembresia|PropelObjectCollection $pacientemembresia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresia($pacientemembresia, $comparison = null)
    {
        if ($pacientemembresia instanceof Pacientemembresia) {
            return $this
                ->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $pacientemembresia->getIdmembresia(), $comparison);
        } elseif ($pacientemembresia instanceof PropelObjectCollection) {
            return $this
                ->usePacientemembresiaQuery()
                ->filterByPrimaryKeys($pacientemembresia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientemembresia() only accepts arguments of type Pacientemembresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientemembresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function joinPacientemembresia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientemembresia');

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
            $this->addJoinObject($join, 'Pacientemembresia');
        }

        return $this;
    }

    /**
     * Use the Pacientemembresia relation Pacientemembresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientemembresiaQuery A secondary query class using the current class as primary query
     */
    public function usePacientemembresiaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientemembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientemembresia', 'PacientemembresiaQuery');
    }

    /**
     * Filter the query by a related Visitadetalle object
     *
     * @param   Visitadetalle|PropelObjectCollection $visitadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MembresiaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitadetalle($visitadetalle, $comparison = null)
    {
        if ($visitadetalle instanceof Visitadetalle) {
            return $this
                ->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $visitadetalle->getIdmembresia(), $comparison);
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
     * @return MembresiaQuery The current query, for fluid interface
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
     * @param   Membresia $membresia Object to remove from the list of results
     *
     * @return MembresiaQuery The current query, for fluid interface
     */
    public function prune($membresia = null)
    {
        if ($membresia) {
            $this->addUsingAlias(MembresiaPeer::IDMEMBRESIA, $membresia->getIdmembresia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
