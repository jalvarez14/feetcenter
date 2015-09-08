<?php


/**
 * Base class that represents a query for the 'empleado' table.
 *
 *
 *
 * @method EmpleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method EmpleadoQuery orderByEmpleadoRegistradoen($order = Criteria::ASC) Order by the empleado_registradoen column
 * @method EmpleadoQuery orderByEmpleadoNombre($order = Criteria::ASC) Order by the empleado_nombre column
 * @method EmpleadoQuery orderByEmpleadoNss($order = Criteria::ASC) Order by the empleado_nss column
 * @method EmpleadoQuery orderByEmpleadoRfc($order = Criteria::ASC) Order by the empleado_rfc column
 * @method EmpleadoQuery orderByEmpleadoCalle($order = Criteria::ASC) Order by the empleado_calle column
 * @method EmpleadoQuery orderByEmpleadoNumero($order = Criteria::ASC) Order by the empleado_numero column
 * @method EmpleadoQuery orderByEmpleadoColonia($order = Criteria::ASC) Order by the empleado_colonia column
 * @method EmpleadoQuery orderByEmpleadoCodigopostal($order = Criteria::ASC) Order by the empleado_codigopostal column
 * @method EmpleadoQuery orderByEmpleadoCiudad($order = Criteria::ASC) Order by the empleado_ciudad column
 * @method EmpleadoQuery orderByEmpleadoSexo($order = Criteria::ASC) Order by the empleado_sexo column
 * @method EmpleadoQuery orderByEmpleadoFechanacimiento($order = Criteria::ASC) Order by the empleado_fechanacimiento column
 * @method EmpleadoQuery orderByEmpleadoTelefono($order = Criteria::ASC) Order by the empleado_telefono column
 * @method EmpleadoQuery orderByEmpleadoCelular($order = Criteria::ASC) Order by the empleado_celular column
 * @method EmpleadoQuery orderByEmpleadoComprobantedomiclio($order = Criteria::ASC) Order by the empleado_comprobantedomiclio column
 * @method EmpleadoQuery orderByEmpleadoComprobanteidentificacion($order = Criteria::ASC) Order by the empleado_comprobanteidentificacion column
 * @method EmpleadoQuery orderByEmpleadoSueldo($order = Criteria::ASC) Order by the empleado_sueldo column
 * @method EmpleadoQuery orderByEmpleadoDiadescanso($order = Criteria::ASC) Order by the empleado_diadescanso column
 * @method EmpleadoQuery orderByEmpleadoUsername($order = Criteria::ASC) Order by the empleado_username column
 * @method EmpleadoQuery orderByEmpleadoPassword($order = Criteria::ASC) Order by the empleado_password column
 * @method EmpleadoQuery orderByEmpleadoFoto($order = Criteria::ASC) Order by the empleado_foto column
 *
 * @method EmpleadoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoQuery groupByIdrol() Group by the idrol column
 * @method EmpleadoQuery groupByEmpleadoRegistradoen() Group by the empleado_registradoen column
 * @method EmpleadoQuery groupByEmpleadoNombre() Group by the empleado_nombre column
 * @method EmpleadoQuery groupByEmpleadoNss() Group by the empleado_nss column
 * @method EmpleadoQuery groupByEmpleadoRfc() Group by the empleado_rfc column
 * @method EmpleadoQuery groupByEmpleadoCalle() Group by the empleado_calle column
 * @method EmpleadoQuery groupByEmpleadoNumero() Group by the empleado_numero column
 * @method EmpleadoQuery groupByEmpleadoColonia() Group by the empleado_colonia column
 * @method EmpleadoQuery groupByEmpleadoCodigopostal() Group by the empleado_codigopostal column
 * @method EmpleadoQuery groupByEmpleadoCiudad() Group by the empleado_ciudad column
 * @method EmpleadoQuery groupByEmpleadoSexo() Group by the empleado_sexo column
 * @method EmpleadoQuery groupByEmpleadoFechanacimiento() Group by the empleado_fechanacimiento column
 * @method EmpleadoQuery groupByEmpleadoTelefono() Group by the empleado_telefono column
 * @method EmpleadoQuery groupByEmpleadoCelular() Group by the empleado_celular column
 * @method EmpleadoQuery groupByEmpleadoComprobantedomiclio() Group by the empleado_comprobantedomiclio column
 * @method EmpleadoQuery groupByEmpleadoComprobanteidentificacion() Group by the empleado_comprobanteidentificacion column
 * @method EmpleadoQuery groupByEmpleadoSueldo() Group by the empleado_sueldo column
 * @method EmpleadoQuery groupByEmpleadoDiadescanso() Group by the empleado_diadescanso column
 * @method EmpleadoQuery groupByEmpleadoUsername() Group by the empleado_username column
 * @method EmpleadoQuery groupByEmpleadoPassword() Group by the empleado_password column
 * @method EmpleadoQuery groupByEmpleadoFoto() Group by the empleado_foto column
 *
 * @method EmpleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method EmpleadoQuery leftJoinClinicaempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinicaempleado relation
 * @method EmpleadoQuery rightJoinClinicaempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinicaempleado relation
 * @method EmpleadoQuery innerJoinClinicaempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinicaempleado relation
 *
 * @method EmpleadoQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method EmpleadoQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method EmpleadoQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method EmpleadoQuery leftJoinEgresoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Egresoclinica relation
 * @method EmpleadoQuery rightJoinEgresoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Egresoclinica relation
 * @method EmpleadoQuery innerJoinEgresoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Egresoclinica relation
 *
 * @method EmpleadoQuery leftJoinEmpleadocomision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadocomision relation
 * @method EmpleadoQuery rightJoinEmpleadocomision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadocomision relation
 * @method EmpleadoQuery innerJoinEmpleadocomision($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadocomision relation
 *
 * @method EmpleadoQuery leftJoinEmpleadohorario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadohorario relation
 * @method EmpleadoQuery rightJoinEmpleadohorario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadohorario relation
 * @method EmpleadoQuery innerJoinEmpleadohorario($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadohorario relation
 *
 * @method EmpleadoQuery leftJoinEmpleadoreporteRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoreporteRelatedByIdempleado relation
 * @method EmpleadoQuery rightJoinEmpleadoreporteRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoreporteRelatedByIdempleado relation
 * @method EmpleadoQuery innerJoinEmpleadoreporteRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoreporteRelatedByIdempleado relation
 *
 * @method EmpleadoQuery leftJoinEmpleadoreporteRelatedByIdempleadoreportado($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoreporteRelatedByIdempleadoreportado relation
 * @method EmpleadoQuery rightJoinEmpleadoreporteRelatedByIdempleadoreportado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoreporteRelatedByIdempleadoreportado relation
 * @method EmpleadoQuery innerJoinEmpleadoreporteRelatedByIdempleadoreportado($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoreporteRelatedByIdempleadoreportado relation
 *
 * @method EmpleadoQuery leftJoinFaltanteRelatedByIdempleadodeudor($relationAlias = null) Adds a LEFT JOIN clause to the query using the FaltanteRelatedByIdempleadodeudor relation
 * @method EmpleadoQuery rightJoinFaltanteRelatedByIdempleadodeudor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FaltanteRelatedByIdempleadodeudor relation
 * @method EmpleadoQuery innerJoinFaltanteRelatedByIdempleadodeudor($relationAlias = null) Adds a INNER JOIN clause to the query using the FaltanteRelatedByIdempleadodeudor relation
 *
 * @method EmpleadoQuery leftJoinFaltanteRelatedByIdempleadogenerador($relationAlias = null) Adds a LEFT JOIN clause to the query using the FaltanteRelatedByIdempleadogenerador relation
 * @method EmpleadoQuery rightJoinFaltanteRelatedByIdempleadogenerador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FaltanteRelatedByIdempleadogenerador relation
 * @method EmpleadoQuery innerJoinFaltanteRelatedByIdempleadogenerador($relationAlias = null) Adds a INNER JOIN clause to the query using the FaltanteRelatedByIdempleadogenerador relation
 *
 * @method EmpleadoQuery leftJoinTransferenciaRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdempleado relation
 * @method EmpleadoQuery rightJoinTransferenciaRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdempleado relation
 * @method EmpleadoQuery innerJoinTransferenciaRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdempleado relation
 *
 * @method EmpleadoQuery leftJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 * @method EmpleadoQuery rightJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 * @method EmpleadoQuery innerJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 *
 * @method EmpleadoQuery leftJoinVisitaRelatedByIdempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the VisitaRelatedByIdempleado relation
 * @method EmpleadoQuery rightJoinVisitaRelatedByIdempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VisitaRelatedByIdempleado relation
 * @method EmpleadoQuery innerJoinVisitaRelatedByIdempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the VisitaRelatedByIdempleado relation
 *
 * @method EmpleadoQuery leftJoinVisitaRelatedByIdempleadocreador($relationAlias = null) Adds a LEFT JOIN clause to the query using the VisitaRelatedByIdempleadocreador relation
 * @method EmpleadoQuery rightJoinVisitaRelatedByIdempleadocreador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VisitaRelatedByIdempleadocreador relation
 * @method EmpleadoQuery innerJoinVisitaRelatedByIdempleadocreador($relationAlias = null) Adds a INNER JOIN clause to the query using the VisitaRelatedByIdempleadocreador relation
 *
 * @method Empleado findOne(PropelPDO $con = null) Return the first Empleado matching the query
 * @method Empleado findOneOrCreate(PropelPDO $con = null) Return the first Empleado matching the query, or a new Empleado object populated from the query conditions when no match is found
 *
 * @method Empleado findOneByIdrol(int $idrol) Return the first Empleado filtered by the idrol column
 * @method Empleado findOneByEmpleadoRegistradoen(string $empleado_registradoen) Return the first Empleado filtered by the empleado_registradoen column
 * @method Empleado findOneByEmpleadoNombre(string $empleado_nombre) Return the first Empleado filtered by the empleado_nombre column
 * @method Empleado findOneByEmpleadoNss(string $empleado_nss) Return the first Empleado filtered by the empleado_nss column
 * @method Empleado findOneByEmpleadoRfc(string $empleado_rfc) Return the first Empleado filtered by the empleado_rfc column
 * @method Empleado findOneByEmpleadoCalle(string $empleado_calle) Return the first Empleado filtered by the empleado_calle column
 * @method Empleado findOneByEmpleadoNumero(string $empleado_numero) Return the first Empleado filtered by the empleado_numero column
 * @method Empleado findOneByEmpleadoColonia(string $empleado_colonia) Return the first Empleado filtered by the empleado_colonia column
 * @method Empleado findOneByEmpleadoCodigopostal(string $empleado_codigopostal) Return the first Empleado filtered by the empleado_codigopostal column
 * @method Empleado findOneByEmpleadoCiudad(string $empleado_ciudad) Return the first Empleado filtered by the empleado_ciudad column
 * @method Empleado findOneByEmpleadoSexo(string $empleado_sexo) Return the first Empleado filtered by the empleado_sexo column
 * @method Empleado findOneByEmpleadoFechanacimiento(string $empleado_fechanacimiento) Return the first Empleado filtered by the empleado_fechanacimiento column
 * @method Empleado findOneByEmpleadoTelefono(string $empleado_telefono) Return the first Empleado filtered by the empleado_telefono column
 * @method Empleado findOneByEmpleadoCelular(string $empleado_celular) Return the first Empleado filtered by the empleado_celular column
 * @method Empleado findOneByEmpleadoComprobantedomiclio(string $empleado_comprobantedomiclio) Return the first Empleado filtered by the empleado_comprobantedomiclio column
 * @method Empleado findOneByEmpleadoComprobanteidentificacion(string $empleado_comprobanteidentificacion) Return the first Empleado filtered by the empleado_comprobanteidentificacion column
 * @method Empleado findOneByEmpleadoSueldo(string $empleado_sueldo) Return the first Empleado filtered by the empleado_sueldo column
 * @method Empleado findOneByEmpleadoDiadescanso(string $empleado_diadescanso) Return the first Empleado filtered by the empleado_diadescanso column
 * @method Empleado findOneByEmpleadoUsername(string $empleado_username) Return the first Empleado filtered by the empleado_username column
 * @method Empleado findOneByEmpleadoPassword(string $empleado_password) Return the first Empleado filtered by the empleado_password column
 * @method Empleado findOneByEmpleadoFoto(string $empleado_foto) Return the first Empleado filtered by the empleado_foto column
 *
 * @method array findByIdempleado(int $idempleado) Return Empleado objects filtered by the idempleado column
 * @method array findByIdrol(int $idrol) Return Empleado objects filtered by the idrol column
 * @method array findByEmpleadoRegistradoen(string $empleado_registradoen) Return Empleado objects filtered by the empleado_registradoen column
 * @method array findByEmpleadoNombre(string $empleado_nombre) Return Empleado objects filtered by the empleado_nombre column
 * @method array findByEmpleadoNss(string $empleado_nss) Return Empleado objects filtered by the empleado_nss column
 * @method array findByEmpleadoRfc(string $empleado_rfc) Return Empleado objects filtered by the empleado_rfc column
 * @method array findByEmpleadoCalle(string $empleado_calle) Return Empleado objects filtered by the empleado_calle column
 * @method array findByEmpleadoNumero(string $empleado_numero) Return Empleado objects filtered by the empleado_numero column
 * @method array findByEmpleadoColonia(string $empleado_colonia) Return Empleado objects filtered by the empleado_colonia column
 * @method array findByEmpleadoCodigopostal(string $empleado_codigopostal) Return Empleado objects filtered by the empleado_codigopostal column
 * @method array findByEmpleadoCiudad(string $empleado_ciudad) Return Empleado objects filtered by the empleado_ciudad column
 * @method array findByEmpleadoSexo(string $empleado_sexo) Return Empleado objects filtered by the empleado_sexo column
 * @method array findByEmpleadoFechanacimiento(string $empleado_fechanacimiento) Return Empleado objects filtered by the empleado_fechanacimiento column
 * @method array findByEmpleadoTelefono(string $empleado_telefono) Return Empleado objects filtered by the empleado_telefono column
 * @method array findByEmpleadoCelular(string $empleado_celular) Return Empleado objects filtered by the empleado_celular column
 * @method array findByEmpleadoComprobantedomiclio(string $empleado_comprobantedomiclio) Return Empleado objects filtered by the empleado_comprobantedomiclio column
 * @method array findByEmpleadoComprobanteidentificacion(string $empleado_comprobanteidentificacion) Return Empleado objects filtered by the empleado_comprobanteidentificacion column
 * @method array findByEmpleadoSueldo(string $empleado_sueldo) Return Empleado objects filtered by the empleado_sueldo column
 * @method array findByEmpleadoDiadescanso(string $empleado_diadescanso) Return Empleado objects filtered by the empleado_diadescanso column
 * @method array findByEmpleadoUsername(string $empleado_username) Return Empleado objects filtered by the empleado_username column
 * @method array findByEmpleadoPassword(string $empleado_password) Return Empleado objects filtered by the empleado_password column
 * @method array findByEmpleadoFoto(string $empleado_foto) Return Empleado objects filtered by the empleado_foto column
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseEmpleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoQuery object.
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
            $modelName = 'Empleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoQuery) {
            return $criteria;
        }
        $query = new EmpleadoQuery(null, null, $modelAlias);

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
     * @return   Empleado|Empleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleado($key, $con = null)
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleado`, `idrol`, `empleado_registradoen`, `empleado_nombre`, `empleado_nss`, `empleado_rfc`, `empleado_calle`, `empleado_numero`, `empleado_colonia`, `empleado_codigopostal`, `empleado_ciudad`, `empleado_sexo`, `empleado_fechanacimiento`, `empleado_telefono`, `empleado_celular`, `empleado_comprobantedomiclio`, `empleado_comprobanteidentificacion`, `empleado_sueldo`, `empleado_diadescanso`, `empleado_username`, `empleado_password`, `empleado_foto` FROM `empleado` WHERE `idempleado` = :p0';
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
            $obj = new Empleado();
            $obj->hydrate($row);
            EmpleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleado|Empleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleado[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $keys, Criteria::IN);
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the empleado_registradoen column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoRegistradoen('2011-03-14'); // WHERE empleado_registradoen = '2011-03-14'
     * $query->filterByEmpleadoRegistradoen('now'); // WHERE empleado_registradoen = '2011-03-14'
     * $query->filterByEmpleadoRegistradoen(array('max' => 'yesterday')); // WHERE empleado_registradoen < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoRegistradoen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoRegistradoen($empleadoRegistradoen = null, $comparison = null)
    {
        if (is_array($empleadoRegistradoen)) {
            $useMinMax = false;
            if (isset($empleadoRegistradoen['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_REGISTRADOEN, $empleadoRegistradoen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoRegistradoen['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_REGISTRADOEN, $empleadoRegistradoen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_REGISTRADOEN, $empleadoRegistradoen, $comparison);
    }

    /**
     * Filter the query on the empleado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombre('fooValue');   // WHERE empleado_nombre = 'fooValue'
     * $query->filterByEmpleadoNombre('%fooValue%'); // WHERE empleado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombre($empleadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombre)) {
                $empleadoNombre = str_replace('*', '%', $empleadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBRE, $empleadoNombre, $comparison);
    }

    /**
     * Filter the query on the empleado_nss column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNss('fooValue');   // WHERE empleado_nss = 'fooValue'
     * $query->filterByEmpleadoNss('%fooValue%'); // WHERE empleado_nss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNss($empleadoNss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNss)) {
                $empleadoNss = str_replace('*', '%', $empleadoNss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NSS, $empleadoNss, $comparison);
    }

    /**
     * Filter the query on the empleado_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoRfc('fooValue');   // WHERE empleado_rfc = 'fooValue'
     * $query->filterByEmpleadoRfc('%fooValue%'); // WHERE empleado_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoRfc($empleadoRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoRfc)) {
                $empleadoRfc = str_replace('*', '%', $empleadoRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_RFC, $empleadoRfc, $comparison);
    }

    /**
     * Filter the query on the empleado_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCalle('fooValue');   // WHERE empleado_calle = 'fooValue'
     * $query->filterByEmpleadoCalle('%fooValue%'); // WHERE empleado_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCalle($empleadoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCalle)) {
                $empleadoCalle = str_replace('*', '%', $empleadoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CALLE, $empleadoCalle, $comparison);
    }

    /**
     * Filter the query on the empleado_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNumero('fooValue');   // WHERE empleado_numero = 'fooValue'
     * $query->filterByEmpleadoNumero('%fooValue%'); // WHERE empleado_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNumero($empleadoNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNumero)) {
                $empleadoNumero = str_replace('*', '%', $empleadoNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NUMERO, $empleadoNumero, $comparison);
    }

    /**
     * Filter the query on the empleado_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoColonia('fooValue');   // WHERE empleado_colonia = 'fooValue'
     * $query->filterByEmpleadoColonia('%fooValue%'); // WHERE empleado_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoColonia($empleadoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoColonia)) {
                $empleadoColonia = str_replace('*', '%', $empleadoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COLONIA, $empleadoColonia, $comparison);
    }

    /**
     * Filter the query on the empleado_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCodigopostal('fooValue');   // WHERE empleado_codigopostal = 'fooValue'
     * $query->filterByEmpleadoCodigopostal('%fooValue%'); // WHERE empleado_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCodigopostal($empleadoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCodigopostal)) {
                $empleadoCodigopostal = str_replace('*', '%', $empleadoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $empleadoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the empleado_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCiudad('fooValue');   // WHERE empleado_ciudad = 'fooValue'
     * $query->filterByEmpleadoCiudad('%fooValue%'); // WHERE empleado_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCiudad($empleadoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCiudad)) {
                $empleadoCiudad = str_replace('*', '%', $empleadoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CIUDAD, $empleadoCiudad, $comparison);
    }

    /**
     * Filter the query on the empleado_sexo column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoSexo('fooValue');   // WHERE empleado_sexo = 'fooValue'
     * $query->filterByEmpleadoSexo('%fooValue%'); // WHERE empleado_sexo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoSexo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoSexo($empleadoSexo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoSexo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoSexo)) {
                $empleadoSexo = str_replace('*', '%', $empleadoSexo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_SEXO, $empleadoSexo, $comparison);
    }

    /**
     * Filter the query on the empleado_fechanacimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoFechanacimiento('2011-03-14'); // WHERE empleado_fechanacimiento = '2011-03-14'
     * $query->filterByEmpleadoFechanacimiento('now'); // WHERE empleado_fechanacimiento = '2011-03-14'
     * $query->filterByEmpleadoFechanacimiento(array('max' => 'yesterday')); // WHERE empleado_fechanacimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoFechanacimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoFechanacimiento($empleadoFechanacimiento = null, $comparison = null)
    {
        if (is_array($empleadoFechanacimiento)) {
            $useMinMax = false;
            if (isset($empleadoFechanacimiento['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoFechanacimiento['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento, $comparison);
    }

    /**
     * Filter the query on the empleado_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoTelefono('fooValue');   // WHERE empleado_telefono = 'fooValue'
     * $query->filterByEmpleadoTelefono('%fooValue%'); // WHERE empleado_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoTelefono($empleadoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoTelefono)) {
                $empleadoTelefono = str_replace('*', '%', $empleadoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_TELEFONO, $empleadoTelefono, $comparison);
    }

    /**
     * Filter the query on the empleado_celular column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCelular('fooValue');   // WHERE empleado_celular = 'fooValue'
     * $query->filterByEmpleadoCelular('%fooValue%'); // WHERE empleado_celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCelular($empleadoCelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCelular)) {
                $empleadoCelular = str_replace('*', '%', $empleadoCelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CELULAR, $empleadoCelular, $comparison);
    }

    /**
     * Filter the query on the empleado_comprobantedomiclio column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoComprobantedomiclio('fooValue');   // WHERE empleado_comprobantedomiclio = 'fooValue'
     * $query->filterByEmpleadoComprobantedomiclio('%fooValue%'); // WHERE empleado_comprobantedomiclio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoComprobantedomiclio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoComprobantedomiclio($empleadoComprobantedomiclio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoComprobantedomiclio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoComprobantedomiclio)) {
                $empleadoComprobantedomiclio = str_replace('*', '%', $empleadoComprobantedomiclio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO, $empleadoComprobantedomiclio, $comparison);
    }

    /**
     * Filter the query on the empleado_comprobanteidentificacion column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoComprobanteidentificacion('fooValue');   // WHERE empleado_comprobanteidentificacion = 'fooValue'
     * $query->filterByEmpleadoComprobanteidentificacion('%fooValue%'); // WHERE empleado_comprobanteidentificacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoComprobanteidentificacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoComprobanteidentificacion($empleadoComprobanteidentificacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoComprobanteidentificacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoComprobanteidentificacion)) {
                $empleadoComprobanteidentificacion = str_replace('*', '%', $empleadoComprobanteidentificacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION, $empleadoComprobanteidentificacion, $comparison);
    }

    /**
     * Filter the query on the empleado_sueldo column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoSueldo(1234); // WHERE empleado_sueldo = 1234
     * $query->filterByEmpleadoSueldo(array(12, 34)); // WHERE empleado_sueldo IN (12, 34)
     * $query->filterByEmpleadoSueldo(array('min' => 12)); // WHERE empleado_sueldo >= 12
     * $query->filterByEmpleadoSueldo(array('max' => 12)); // WHERE empleado_sueldo <= 12
     * </code>
     *
     * @param     mixed $empleadoSueldo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoSueldo($empleadoSueldo = null, $comparison = null)
    {
        if (is_array($empleadoSueldo)) {
            $useMinMax = false;
            if (isset($empleadoSueldo['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_SUELDO, $empleadoSueldo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoSueldo['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_SUELDO, $empleadoSueldo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_SUELDO, $empleadoSueldo, $comparison);
    }

    /**
     * Filter the query on the empleado_diadescanso column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoDiadescanso('fooValue');   // WHERE empleado_diadescanso = 'fooValue'
     * $query->filterByEmpleadoDiadescanso('%fooValue%'); // WHERE empleado_diadescanso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoDiadescanso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoDiadescanso($empleadoDiadescanso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoDiadescanso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoDiadescanso)) {
                $empleadoDiadescanso = str_replace('*', '%', $empleadoDiadescanso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_DIADESCANSO, $empleadoDiadescanso, $comparison);
    }

    /**
     * Filter the query on the empleado_username column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoUsername('fooValue');   // WHERE empleado_username = 'fooValue'
     * $query->filterByEmpleadoUsername('%fooValue%'); // WHERE empleado_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoUsername($empleadoUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoUsername)) {
                $empleadoUsername = str_replace('*', '%', $empleadoUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_USERNAME, $empleadoUsername, $comparison);
    }

    /**
     * Filter the query on the empleado_password column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoPassword('fooValue');   // WHERE empleado_password = 'fooValue'
     * $query->filterByEmpleadoPassword('%fooValue%'); // WHERE empleado_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoPassword($empleadoPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoPassword)) {
                $empleadoPassword = str_replace('*', '%', $empleadoPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_PASSWORD, $empleadoPassword, $comparison);
    }

    /**
     * Filter the query on the empleado_foto column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoFoto('fooValue');   // WHERE empleado_foto = 'fooValue'
     * $query->filterByEmpleadoFoto('%fooValue%'); // WHERE empleado_foto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoFoto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoFoto($empleadoFoto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoFoto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoFoto)) {
                $empleadoFoto = str_replace('*', '%', $empleadoFoto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FOTO, $empleadoFoto, $comparison);
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

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
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Filter the query by a related Clinicaempleado object
     *
     * @param   Clinicaempleado|PropelObjectCollection $clinicaempleado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinicaempleado($clinicaempleado, $comparison = null)
    {
        if ($clinicaempleado instanceof Clinicaempleado) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $clinicaempleado->getIdempleado(), $comparison);
        } elseif ($clinicaempleado instanceof PropelObjectCollection) {
            return $this
                ->useClinicaempleadoQuery()
                ->filterByPrimaryKeys($clinicaempleado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClinicaempleado() only accepts arguments of type Clinicaempleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Clinicaempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinClinicaempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Clinicaempleado');

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
            $this->addJoinObject($join, 'Clinicaempleado');
        }

        return $this;
    }

    /**
     * Use the Clinicaempleado relation Clinicaempleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClinicaempleadoQuery A secondary query class using the current class as primary query
     */
    public function useClinicaempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClinicaempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clinicaempleado', 'ClinicaempleadoQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $compra->getIdempleado(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Egresoclinica object
     *
     * @param   Egresoclinica|PropelObjectCollection $egresoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEgresoclinica($egresoclinica, $comparison = null)
    {
        if ($egresoclinica instanceof Egresoclinica) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $egresoclinica->getIdempleado(), $comparison);
        } elseif ($egresoclinica instanceof PropelObjectCollection) {
            return $this
                ->useEgresoclinicaQuery()
                ->filterByPrimaryKeys($egresoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEgresoclinica() only accepts arguments of type Egresoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Egresoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEgresoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Egresoclinica');

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
            $this->addJoinObject($join, 'Egresoclinica');
        }

        return $this;
    }

    /**
     * Use the Egresoclinica relation Egresoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EgresoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useEgresoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEgresoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Egresoclinica', 'EgresoclinicaQuery');
    }

    /**
     * Filter the query by a related Empleadocomision object
     *
     * @param   Empleadocomision|PropelObjectCollection $empleadocomision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadocomision($empleadocomision, $comparison = null)
    {
        if ($empleadocomision instanceof Empleadocomision) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleadocomision->getIdempledo(), $comparison);
        } elseif ($empleadocomision instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadocomisionQuery()
                ->filterByPrimaryKeys($empleadocomision->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadocomision() only accepts arguments of type Empleadocomision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadocomision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEmpleadocomision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadocomision');

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
            $this->addJoinObject($join, 'Empleadocomision');
        }

        return $this;
    }

    /**
     * Use the Empleadocomision relation Empleadocomision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadocomisionQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadocomisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadocomision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadocomision', 'EmpleadocomisionQuery');
    }

    /**
     * Filter the query by a related Empleadohorario object
     *
     * @param   Empleadohorario|PropelObjectCollection $empleadohorario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadohorario($empleadohorario, $comparison = null)
    {
        if ($empleadohorario instanceof Empleadohorario) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleadohorario->getIdempleado(), $comparison);
        } elseif ($empleadohorario instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadohorarioQuery()
                ->filterByPrimaryKeys($empleadohorario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadohorario() only accepts arguments of type Empleadohorario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadohorario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEmpleadohorario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadohorario');

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
            $this->addJoinObject($join, 'Empleadohorario');
        }

        return $this;
    }

    /**
     * Use the Empleadohorario relation Empleadohorario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadohorarioQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadohorarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadohorario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadohorario', 'EmpleadohorarioQuery');
    }

    /**
     * Filter the query by a related Empleadoreporte object
     *
     * @param   Empleadoreporte|PropelObjectCollection $empleadoreporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoreporteRelatedByIdempleado($empleadoreporte, $comparison = null)
    {
        if ($empleadoreporte instanceof Empleadoreporte) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleadoreporte->getIdempleado(), $comparison);
        } elseif ($empleadoreporte instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadoreporteRelatedByIdempleadoQuery()
                ->filterByPrimaryKeys($empleadoreporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoreporteRelatedByIdempleado() only accepts arguments of type Empleadoreporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoreporteRelatedByIdempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEmpleadoreporteRelatedByIdempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoreporteRelatedByIdempleado');

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
            $this->addJoinObject($join, 'EmpleadoreporteRelatedByIdempleado');
        }

        return $this;
    }

    /**
     * Use the EmpleadoreporteRelatedByIdempleado relation Empleadoreporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoreporteQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoreporteRelatedByIdempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoreporteRelatedByIdempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoreporteRelatedByIdempleado', 'EmpleadoreporteQuery');
    }

    /**
     * Filter the query by a related Empleadoreporte object
     *
     * @param   Empleadoreporte|PropelObjectCollection $empleadoreporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoreporteRelatedByIdempleadoreportado($empleadoreporte, $comparison = null)
    {
        if ($empleadoreporte instanceof Empleadoreporte) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleadoreporte->getIdempleadoreportado(), $comparison);
        } elseif ($empleadoreporte instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadoreporteRelatedByIdempleadoreportadoQuery()
                ->filterByPrimaryKeys($empleadoreporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoreporteRelatedByIdempleadoreportado() only accepts arguments of type Empleadoreporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoreporteRelatedByIdempleadoreportado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEmpleadoreporteRelatedByIdempleadoreportado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoreporteRelatedByIdempleadoreportado');

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
            $this->addJoinObject($join, 'EmpleadoreporteRelatedByIdempleadoreportado');
        }

        return $this;
    }

    /**
     * Use the EmpleadoreporteRelatedByIdempleadoreportado relation Empleadoreporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoreporteQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoreporteRelatedByIdempleadoreportadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoreporteRelatedByIdempleadoreportado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoreporteRelatedByIdempleadoreportado', 'EmpleadoreporteQuery');
    }

    /**
     * Filter the query by a related Faltante object
     *
     * @param   Faltante|PropelObjectCollection $faltante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFaltanteRelatedByIdempleadodeudor($faltante, $comparison = null)
    {
        if ($faltante instanceof Faltante) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $faltante->getIdempleadodeudor(), $comparison);
        } elseif ($faltante instanceof PropelObjectCollection) {
            return $this
                ->useFaltanteRelatedByIdempleadodeudorQuery()
                ->filterByPrimaryKeys($faltante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFaltanteRelatedByIdempleadodeudor() only accepts arguments of type Faltante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FaltanteRelatedByIdempleadodeudor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinFaltanteRelatedByIdempleadodeudor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FaltanteRelatedByIdempleadodeudor');

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
            $this->addJoinObject($join, 'FaltanteRelatedByIdempleadodeudor');
        }

        return $this;
    }

    /**
     * Use the FaltanteRelatedByIdempleadodeudor relation Faltante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FaltanteQuery A secondary query class using the current class as primary query
     */
    public function useFaltanteRelatedByIdempleadodeudorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFaltanteRelatedByIdempleadodeudor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FaltanteRelatedByIdempleadodeudor', 'FaltanteQuery');
    }

    /**
     * Filter the query by a related Faltante object
     *
     * @param   Faltante|PropelObjectCollection $faltante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFaltanteRelatedByIdempleadogenerador($faltante, $comparison = null)
    {
        if ($faltante instanceof Faltante) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $faltante->getIdempleadogenerador(), $comparison);
        } elseif ($faltante instanceof PropelObjectCollection) {
            return $this
                ->useFaltanteRelatedByIdempleadogeneradorQuery()
                ->filterByPrimaryKeys($faltante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFaltanteRelatedByIdempleadogenerador() only accepts arguments of type Faltante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FaltanteRelatedByIdempleadogenerador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinFaltanteRelatedByIdempleadogenerador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FaltanteRelatedByIdempleadogenerador');

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
            $this->addJoinObject($join, 'FaltanteRelatedByIdempleadogenerador');
        }

        return $this;
    }

    /**
     * Use the FaltanteRelatedByIdempleadogenerador relation Faltante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FaltanteQuery A secondary query class using the current class as primary query
     */
    public function useFaltanteRelatedByIdempleadogeneradorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFaltanteRelatedByIdempleadogenerador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FaltanteRelatedByIdempleadogenerador', 'FaltanteQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdempleado($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $transferencia->getIdempleado(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdempleadoQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdempleado() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdempleado');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdempleado');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdempleado relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdempleado', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdempleadoreceptor($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $transferencia->getIdempleadoreceptor(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdempleadoreceptorQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdempleadoreceptor() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdempleadoreceptor');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdempleadoreceptor');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdempleadoreceptor relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdempleadoreceptorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdempleadoreceptor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdempleadoreceptor', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitaRelatedByIdempleado($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $visita->getIdempleado(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            return $this
                ->useVisitaRelatedByIdempleadoQuery()
                ->filterByPrimaryKeys($visita->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVisitaRelatedByIdempleado() only accepts arguments of type Visita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VisitaRelatedByIdempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinVisitaRelatedByIdempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VisitaRelatedByIdempleado');

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
            $this->addJoinObject($join, 'VisitaRelatedByIdempleado');
        }

        return $this;
    }

    /**
     * Use the VisitaRelatedByIdempleado relation Visita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitaQuery A secondary query class using the current class as primary query
     */
    public function useVisitaRelatedByIdempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisitaRelatedByIdempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VisitaRelatedByIdempleado', 'VisitaQuery');
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisitaRelatedByIdempleadocreador($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $visita->getIdempleadocreador(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            return $this
                ->useVisitaRelatedByIdempleadocreadorQuery()
                ->filterByPrimaryKeys($visita->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVisitaRelatedByIdempleadocreador() only accepts arguments of type Visita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VisitaRelatedByIdempleadocreador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinVisitaRelatedByIdempleadocreador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VisitaRelatedByIdempleadocreador');

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
            $this->addJoinObject($join, 'VisitaRelatedByIdempleadocreador');
        }

        return $this;
    }

    /**
     * Use the VisitaRelatedByIdempleadocreador relation Visita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitaQuery A secondary query class using the current class as primary query
     */
    public function useVisitaRelatedByIdempleadocreadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisitaRelatedByIdempleadocreador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VisitaRelatedByIdempleadocreador', 'VisitaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleado $empleado Object to remove from the list of results
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function prune($empleado = null)
    {
        if ($empleado) {
            $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
