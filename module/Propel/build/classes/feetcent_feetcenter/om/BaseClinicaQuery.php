<?php


/**
 * Base class that represents a query for the 'clinica' table.
 *
 *
 *
 * @method ClinicaQuery orderByIdclinica($order = Criteria::ASC) Order by the idclinica column
 * @method ClinicaQuery orderByClinicaNombre($order = Criteria::ASC) Order by the clinica_nombre column
 * @method ClinicaQuery orderByClinicaDireccion($order = Criteria::ASC) Order by the clinica_direccion column
 * @method ClinicaQuery orderByClinicaRegistropatronal($order = Criteria::ASC) Order by the clinica_registropatronal column
 * @method ClinicaQuery orderByClinicaTelefono($order = Criteria::ASC) Order by the clinica_telefono column
 *
 * @method ClinicaQuery groupByIdclinica() Group by the idclinica column
 * @method ClinicaQuery groupByClinicaNombre() Group by the clinica_nombre column
 * @method ClinicaQuery groupByClinicaDireccion() Group by the clinica_direccion column
 * @method ClinicaQuery groupByClinicaRegistropatronal() Group by the clinica_registropatronal column
 * @method ClinicaQuery groupByClinicaTelefono() Group by the clinica_telefono column
 *
 * @method ClinicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClinicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClinicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClinicaQuery leftJoinClinicaempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clinicaempleado relation
 * @method ClinicaQuery rightJoinClinicaempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clinicaempleado relation
 * @method ClinicaQuery innerJoinClinicaempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Clinicaempleado relation
 *
 * @method ClinicaQuery leftJoinConfiguracion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Configuracion relation
 * @method ClinicaQuery rightJoinConfiguracion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Configuracion relation
 * @method ClinicaQuery innerJoinConfiguracion($relationAlias = null) Adds a INNER JOIN clause to the query using the Configuracion relation
 *
 * @method ClinicaQuery leftJoinEgresoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Egresoclinica relation
 * @method ClinicaQuery rightJoinEgresoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Egresoclinica relation
 * @method ClinicaQuery innerJoinEgresoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Egresoclinica relation
 *
 * @method ClinicaQuery leftJoinEmpleadocomision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadocomision relation
 * @method ClinicaQuery rightJoinEmpleadocomision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadocomision relation
 * @method ClinicaQuery innerJoinEmpleadocomision($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadocomision relation
 *
 * @method ClinicaQuery leftJoinEmpleadoreceso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadoreceso relation
 * @method ClinicaQuery rightJoinEmpleadoreceso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadoreceso relation
 * @method ClinicaQuery innerJoinEmpleadoreceso($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadoreceso relation
 *
 * @method ClinicaQuery leftJoinEmpleadoreporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadoreporte relation
 * @method ClinicaQuery rightJoinEmpleadoreporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadoreporte relation
 * @method ClinicaQuery innerJoinEmpleadoreporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadoreporte relation
 *
 * @method ClinicaQuery leftJoinEncargadoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Encargadoclinica relation
 * @method ClinicaQuery rightJoinEncargadoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Encargadoclinica relation
 * @method ClinicaQuery innerJoinEncargadoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Encargadoclinica relation
 *
 * @method ClinicaQuery leftJoinFaltante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Faltante relation
 * @method ClinicaQuery rightJoinFaltante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Faltante relation
 * @method ClinicaQuery innerJoinFaltante($relationAlias = null) Adds a INNER JOIN clause to the query using the Faltante relation
 *
 * @method ClinicaQuery leftJoinInsumoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Insumoclinica relation
 * @method ClinicaQuery rightJoinInsumoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Insumoclinica relation
 * @method ClinicaQuery innerJoinInsumoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Insumoclinica relation
 *
 * @method ClinicaQuery leftJoinMembresiaclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Membresiaclinica relation
 * @method ClinicaQuery rightJoinMembresiaclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Membresiaclinica relation
 * @method ClinicaQuery innerJoinMembresiaclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Membresiaclinica relation
 *
 * @method ClinicaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method ClinicaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method ClinicaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method ClinicaQuery leftJoinPacientemembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresia relation
 * @method ClinicaQuery rightJoinPacientemembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresia relation
 * @method ClinicaQuery innerJoinPacientemembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresia relation
 *
 * @method ClinicaQuery leftJoinPacienteseguimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacienteseguimiento relation
 * @method ClinicaQuery rightJoinPacienteseguimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacienteseguimiento relation
 * @method ClinicaQuery innerJoinPacienteseguimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacienteseguimiento relation
 *
 * @method ClinicaQuery leftJoinProductoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoclinica relation
 * @method ClinicaQuery rightJoinProductoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoclinica relation
 * @method ClinicaQuery innerJoinProductoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoclinica relation
 *
 * @method ClinicaQuery leftJoinServicioclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioclinica relation
 * @method ClinicaQuery rightJoinServicioclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioclinica relation
 * @method ClinicaQuery innerJoinServicioclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioclinica relation
 *
 * @method ClinicaQuery leftJoinTransferenciaRelatedByIdclinicadestinataria($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdclinicadestinataria relation
 * @method ClinicaQuery rightJoinTransferenciaRelatedByIdclinicadestinataria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdclinicadestinataria relation
 * @method ClinicaQuery innerJoinTransferenciaRelatedByIdclinicadestinataria($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdclinicadestinataria relation
 *
 * @method ClinicaQuery leftJoinTransferenciaRelatedByIdclinicaremitente($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdclinicaremitente relation
 * @method ClinicaQuery rightJoinTransferenciaRelatedByIdclinicaremitente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdclinicaremitente relation
 * @method ClinicaQuery innerJoinTransferenciaRelatedByIdclinicaremitente($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdclinicaremitente relation
 *
 * @method ClinicaQuery leftJoinVisita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visita relation
 * @method ClinicaQuery rightJoinVisita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visita relation
 * @method ClinicaQuery innerJoinVisita($relationAlias = null) Adds a INNER JOIN clause to the query using the Visita relation
 *
 * @method Clinica findOne(PropelPDO $con = null) Return the first Clinica matching the query
 * @method Clinica findOneOrCreate(PropelPDO $con = null) Return the first Clinica matching the query, or a new Clinica object populated from the query conditions when no match is found
 *
 * @method Clinica findOneByClinicaNombre(string $clinica_nombre) Return the first Clinica filtered by the clinica_nombre column
 * @method Clinica findOneByClinicaDireccion(string $clinica_direccion) Return the first Clinica filtered by the clinica_direccion column
 * @method Clinica findOneByClinicaRegistropatronal(string $clinica_registropatronal) Return the first Clinica filtered by the clinica_registropatronal column
 * @method Clinica findOneByClinicaTelefono(string $clinica_telefono) Return the first Clinica filtered by the clinica_telefono column
 *
 * @method array findByIdclinica(int $idclinica) Return Clinica objects filtered by the idclinica column
 * @method array findByClinicaNombre(string $clinica_nombre) Return Clinica objects filtered by the clinica_nombre column
 * @method array findByClinicaDireccion(string $clinica_direccion) Return Clinica objects filtered by the clinica_direccion column
 * @method array findByClinicaRegistropatronal(string $clinica_registropatronal) Return Clinica objects filtered by the clinica_registropatronal column
 * @method array findByClinicaTelefono(string $clinica_telefono) Return Clinica objects filtered by the clinica_telefono column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseClinicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClinicaQuery object.
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
            $modelName = 'Clinica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClinicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClinicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClinicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClinicaQuery) {
            return $criteria;
        }
        $query = new ClinicaQuery(null, null, $modelAlias);

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
     * @return   Clinica|Clinica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClinicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Clinica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdclinica($key, $con = null)
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
     * @return                 Clinica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idclinica`, `clinica_nombre`, `clinica_direccion`, `clinica_registropatronal`, `clinica_telefono` FROM `clinica` WHERE `idclinica` = :p0';
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
            $obj = new Clinica();
            $obj->hydrate($row);
            ClinicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Clinica|Clinica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Clinica[]|mixed the list of results, formatted by the current formatter
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
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClinicaPeer::IDCLINICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClinicaPeer::IDCLINICA, $keys, Criteria::IN);
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
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByIdclinica($idclinica = null, $comparison = null)
    {
        if (is_array($idclinica)) {
            $useMinMax = false;
            if (isset($idclinica['min'])) {
                $this->addUsingAlias(ClinicaPeer::IDCLINICA, $idclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclinica['max'])) {
                $this->addUsingAlias(ClinicaPeer::IDCLINICA, $idclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClinicaPeer::IDCLINICA, $idclinica, $comparison);
    }

    /**
     * Filter the query on the clinica_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicaNombre('fooValue');   // WHERE clinica_nombre = 'fooValue'
     * $query->filterByClinicaNombre('%fooValue%'); // WHERE clinica_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByClinicaNombre($clinicaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clinicaNombre)) {
                $clinicaNombre = str_replace('*', '%', $clinicaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClinicaPeer::CLINICA_NOMBRE, $clinicaNombre, $comparison);
    }

    /**
     * Filter the query on the clinica_direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicaDireccion('fooValue');   // WHERE clinica_direccion = 'fooValue'
     * $query->filterByClinicaDireccion('%fooValue%'); // WHERE clinica_direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicaDireccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByClinicaDireccion($clinicaDireccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicaDireccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clinicaDireccion)) {
                $clinicaDireccion = str_replace('*', '%', $clinicaDireccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClinicaPeer::CLINICA_DIRECCION, $clinicaDireccion, $comparison);
    }

    /**
     * Filter the query on the clinica_registropatronal column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicaRegistropatronal('fooValue');   // WHERE clinica_registropatronal = 'fooValue'
     * $query->filterByClinicaRegistropatronal('%fooValue%'); // WHERE clinica_registropatronal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicaRegistropatronal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByClinicaRegistropatronal($clinicaRegistropatronal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicaRegistropatronal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clinicaRegistropatronal)) {
                $clinicaRegistropatronal = str_replace('*', '%', $clinicaRegistropatronal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClinicaPeer::CLINICA_REGISTROPATRONAL, $clinicaRegistropatronal, $comparison);
    }

    /**
     * Filter the query on the clinica_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicaTelefono('fooValue');   // WHERE clinica_telefono = 'fooValue'
     * $query->filterByClinicaTelefono('%fooValue%'); // WHERE clinica_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicaTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function filterByClinicaTelefono($clinicaTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicaTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clinicaTelefono)) {
                $clinicaTelefono = str_replace('*', '%', $clinicaTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClinicaPeer::CLINICA_TELEFONO, $clinicaTelefono, $comparison);
    }

    /**
     * Filter the query by a related Clinicaempleado object
     *
     * @param   Clinicaempleado|PropelObjectCollection $clinicaempleado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClinicaempleado($clinicaempleado, $comparison = null)
    {
        if ($clinicaempleado instanceof Clinicaempleado) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $clinicaempleado->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Configuracion object
     *
     * @param   Configuracion|PropelObjectCollection $configuracion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConfiguracion($configuracion, $comparison = null)
    {
        if ($configuracion instanceof Configuracion) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $configuracion->getIdclinica(), $comparison);
        } elseif ($configuracion instanceof PropelObjectCollection) {
            return $this
                ->useConfiguracionQuery()
                ->filterByPrimaryKeys($configuracion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByConfiguracion() only accepts arguments of type Configuracion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Configuracion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinConfiguracion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Configuracion');

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
            $this->addJoinObject($join, 'Configuracion');
        }

        return $this;
    }

    /**
     * Use the Configuracion relation Configuracion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConfiguracionQuery A secondary query class using the current class as primary query
     */
    public function useConfiguracionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConfiguracion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Configuracion', 'ConfiguracionQuery');
    }

    /**
     * Filter the query by a related Egresoclinica object
     *
     * @param   Egresoclinica|PropelObjectCollection $egresoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEgresoclinica($egresoclinica, $comparison = null)
    {
        if ($egresoclinica instanceof Egresoclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $egresoclinica->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadocomision($empleadocomision, $comparison = null)
    {
        if ($empleadocomision instanceof Empleadocomision) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $empleadocomision->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Empleadoreceso object
     *
     * @param   Empleadoreceso|PropelObjectCollection $empleadoreceso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoreceso($empleadoreceso, $comparison = null)
    {
        if ($empleadoreceso instanceof Empleadoreceso) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $empleadoreceso->getIdclinica(), $comparison);
        } elseif ($empleadoreceso instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadorecesoQuery()
                ->filterByPrimaryKeys($empleadoreceso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoreceso() only accepts arguments of type Empleadoreceso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadoreceso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinEmpleadoreceso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadoreceso');

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
            $this->addJoinObject($join, 'Empleadoreceso');
        }

        return $this;
    }

    /**
     * Use the Empleadoreceso relation Empleadoreceso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadorecesoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadorecesoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoreceso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadoreceso', 'EmpleadorecesoQuery');
    }

    /**
     * Filter the query by a related Empleadoreporte object
     *
     * @param   Empleadoreporte|PropelObjectCollection $empleadoreporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoreporte($empleadoreporte, $comparison = null)
    {
        if ($empleadoreporte instanceof Empleadoreporte) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $empleadoreporte->getIdclinica(), $comparison);
        } elseif ($empleadoreporte instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadoreporteQuery()
                ->filterByPrimaryKeys($empleadoreporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoreporte() only accepts arguments of type Empleadoreporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadoreporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinEmpleadoreporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadoreporte');

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
            $this->addJoinObject($join, 'Empleadoreporte');
        }

        return $this;
    }

    /**
     * Use the Empleadoreporte relation Empleadoreporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoreporteQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoreporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoreporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadoreporte', 'EmpleadoreporteQuery');
    }

    /**
     * Filter the query by a related Encargadoclinica object
     *
     * @param   Encargadoclinica|PropelObjectCollection $encargadoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEncargadoclinica($encargadoclinica, $comparison = null)
    {
        if ($encargadoclinica instanceof Encargadoclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $encargadoclinica->getIdclinica(), $comparison);
        } elseif ($encargadoclinica instanceof PropelObjectCollection) {
            return $this
                ->useEncargadoclinicaQuery()
                ->filterByPrimaryKeys($encargadoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEncargadoclinica() only accepts arguments of type Encargadoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Encargadoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinEncargadoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Encargadoclinica');

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
            $this->addJoinObject($join, 'Encargadoclinica');
        }

        return $this;
    }

    /**
     * Use the Encargadoclinica relation Encargadoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EncargadoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useEncargadoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEncargadoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Encargadoclinica', 'EncargadoclinicaQuery');
    }

    /**
     * Filter the query by a related Faltante object
     *
     * @param   Faltante|PropelObjectCollection $faltante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFaltante($faltante, $comparison = null)
    {
        if ($faltante instanceof Faltante) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $faltante->getIdclinica(), $comparison);
        } elseif ($faltante instanceof PropelObjectCollection) {
            return $this
                ->useFaltanteQuery()
                ->filterByPrimaryKeys($faltante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFaltante() only accepts arguments of type Faltante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Faltante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinFaltante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Faltante');

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
            $this->addJoinObject($join, 'Faltante');
        }

        return $this;
    }

    /**
     * Use the Faltante relation Faltante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FaltanteQuery A secondary query class using the current class as primary query
     */
    public function useFaltanteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFaltante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Faltante', 'FaltanteQuery');
    }

    /**
     * Filter the query by a related Insumoclinica object
     *
     * @param   Insumoclinica|PropelObjectCollection $insumoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInsumoclinica($insumoclinica, $comparison = null)
    {
        if ($insumoclinica instanceof Insumoclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $insumoclinica->getIdclinica(), $comparison);
        } elseif ($insumoclinica instanceof PropelObjectCollection) {
            return $this
                ->useInsumoclinicaQuery()
                ->filterByPrimaryKeys($insumoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInsumoclinica() only accepts arguments of type Insumoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Insumoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinInsumoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Insumoclinica');

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
            $this->addJoinObject($join, 'Insumoclinica');
        }

        return $this;
    }

    /**
     * Use the Insumoclinica relation Insumoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InsumoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useInsumoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInsumoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Insumoclinica', 'InsumoclinicaQuery');
    }

    /**
     * Filter the query by a related Membresiaclinica object
     *
     * @param   Membresiaclinica|PropelObjectCollection $membresiaclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMembresiaclinica($membresiaclinica, $comparison = null)
    {
        if ($membresiaclinica instanceof Membresiaclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $membresiaclinica->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $paciente->getIdclinica(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            return $this
                ->usePacienteQuery()
                ->filterByPrimaryKeys($paciente->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

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
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Filter the query by a related Pacientemembresia object
     *
     * @param   Pacientemembresia|PropelObjectCollection $pacientemembresia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresia($pacientemembresia, $comparison = null)
    {
        if ($pacientemembresia instanceof Pacientemembresia) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $pacientemembresia->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Pacienteseguimiento object
     *
     * @param   Pacienteseguimiento|PropelObjectCollection $pacienteseguimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacienteseguimiento($pacienteseguimiento, $comparison = null)
    {
        if ($pacienteseguimiento instanceof Pacienteseguimiento) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $pacienteseguimiento->getIdclinica(), $comparison);
        } elseif ($pacienteseguimiento instanceof PropelObjectCollection) {
            return $this
                ->usePacienteseguimientoQuery()
                ->filterByPrimaryKeys($pacienteseguimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacienteseguimiento() only accepts arguments of type Pacienteseguimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacienteseguimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinPacienteseguimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacienteseguimiento');

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
            $this->addJoinObject($join, 'Pacienteseguimiento');
        }

        return $this;
    }

    /**
     * Use the Pacienteseguimiento relation Pacienteseguimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteseguimientoQuery A secondary query class using the current class as primary query
     */
    public function usePacienteseguimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacienteseguimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacienteseguimiento', 'PacienteseguimientoQuery');
    }

    /**
     * Filter the query by a related Productoclinica object
     *
     * @param   Productoclinica|PropelObjectCollection $productoclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoclinica($productoclinica, $comparison = null)
    {
        if ($productoclinica instanceof Productoclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $productoclinica->getIdclinica(), $comparison);
        } elseif ($productoclinica instanceof PropelObjectCollection) {
            return $this
                ->useProductoclinicaQuery()
                ->filterByPrimaryKeys($productoclinica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductoclinica() only accepts arguments of type Productoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinProductoclinica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productoclinica');

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
            $this->addJoinObject($join, 'Productoclinica');
        }

        return $this;
    }

    /**
     * Use the Productoclinica relation Productoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useProductoclinicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productoclinica', 'ProductoclinicaQuery');
    }

    /**
     * Filter the query by a related Servicioclinica object
     *
     * @param   Servicioclinica|PropelObjectCollection $servicioclinica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioclinica($servicioclinica, $comparison = null)
    {
        if ($servicioclinica instanceof Servicioclinica) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $servicioclinica->getIdclinica(), $comparison);
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdclinicadestinataria($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $transferencia->getIdclinicadestinataria(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdclinicadestinatariaQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdclinicadestinataria() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdclinicadestinataria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdclinicadestinataria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdclinicadestinataria');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdclinicadestinataria');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdclinicadestinataria relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdclinicadestinatariaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdclinicadestinataria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdclinicadestinataria', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdclinicaremitente($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $transferencia->getIdclinicaremitente(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdclinicaremitenteQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdclinicaremitente() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdclinicaremitente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdclinicaremitente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdclinicaremitente');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdclinicaremitente');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdclinicaremitente relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdclinicaremitenteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdclinicaremitente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdclinicaremitente', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClinicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisita($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(ClinicaPeer::IDCLINICA, $visita->getIdclinica(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            return $this
                ->useVisitaQuery()
                ->filterByPrimaryKeys($visita->getPrimaryKeys())
                ->endUse();
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
     * @return ClinicaQuery The current query, for fluid interface
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
     * @param   Clinica $clinica Object to remove from the list of results
     *
     * @return ClinicaQuery The current query, for fluid interface
     */
    public function prune($clinica = null)
    {
        if ($clinica) {
            $this->addUsingAlias(ClinicaPeer::IDCLINICA, $clinica->getIdclinica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
