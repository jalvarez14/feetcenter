<?php


/**
 * Base static class for performing query and update operations on the 'empleado' table.
 *
 *
 *
 * @package propel.generator.feetcenter.om
 */
abstract class BaseEmpleadoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'empleado';

    /** the related Propel class for this table */
    const OM_CLASS = 'Empleado';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EmpleadoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'empleado.idempleado';

    /** the column name for the idrol field */
    const IDROL = 'empleado.idrol';

    /** the column name for the empleado_registradoen field */
    const EMPLEADO_REGISTRADOEN = 'empleado.empleado_registradoen';

    /** the column name for the empleado_nombre field */
    const EMPLEADO_NOMBRE = 'empleado.empleado_nombre';

    /** the column name for the empleado_nss field */
    const EMPLEADO_NSS = 'empleado.empleado_nss';

    /** the column name for the empleado_rfc field */
    const EMPLEADO_RFC = 'empleado.empleado_rfc';

    /** the column name for the empleado_calle field */
    const EMPLEADO_CALLE = 'empleado.empleado_calle';

    /** the column name for the empleado_numero field */
    const EMPLEADO_NUMERO = 'empleado.empleado_numero';

    /** the column name for the empleado_colonia field */
    const EMPLEADO_COLONIA = 'empleado.empleado_colonia';

    /** the column name for the empleado_codigopostal field */
    const EMPLEADO_CODIGOPOSTAL = 'empleado.empleado_codigopostal';

    /** the column name for the empleado_ciudad field */
    const EMPLEADO_CIUDAD = 'empleado.empleado_ciudad';

    /** the column name for the empleado_sexo field */
    const EMPLEADO_SEXO = 'empleado.empleado_sexo';

    /** the column name for the empleado_fechanacimiento field */
    const EMPLEADO_FECHANACIMIENTO = 'empleado.empleado_fechanacimiento';

    /** the column name for the empleado_telefono field */
    const EMPLEADO_TELEFONO = 'empleado.empleado_telefono';

    /** the column name for the empleado_celular field */
    const EMPLEADO_CELULAR = 'empleado.empleado_celular';

    /** the column name for the empleado_comprobantedomiclio field */
    const EMPLEADO_COMPROBANTEDOMICLIO = 'empleado.empleado_comprobantedomiclio';

    /** the column name for the empleado_comprobanteidentificacion field */
    const EMPLEADO_COMPROBANTEIDENTIFICACION = 'empleado.empleado_comprobanteidentificacion';

    /** the column name for the empleado_sueldo field */
    const EMPLEADO_SUELDO = 'empleado.empleado_sueldo';

    /** the column name for the empleado_diadescanso field */
    const EMPLEADO_DIADESCANSO = 'empleado.empleado_diadescanso';

    /** The enumerated values for the empleado_sexo field */
    const EMPLEADO_SEXO_HOMBRE = 'Hombre';
    const EMPLEADO_SEXO_MUJER = 'Mujer';

    /** The enumerated values for the empleado_diadescanso field */
    const EMPLEADO_DIADESCANSO_LUNES = 'lunes';
    const EMPLEADO_DIADESCANSO_MARTES = 'martes';
    const EMPLEADO_DIADESCANSO_MIERCOLES = 'miercoles';
    const EMPLEADO_DIADESCANSO_JUEVES = 'jueves';
    const EMPLEADO_DIADESCANSO_VIERNES = 'viernes';
    const EMPLEADO_DIADESCANSO_SABADO = 'sabado';
    const EMPLEADO_DIADESCANSO_DOMINGO = 'domingo';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Empleado objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Empleado[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EmpleadoPeer::$fieldNames[EmpleadoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idempleado', 'Idrol', 'EmpleadoRegistradoen', 'EmpleadoNombre', 'EmpleadoNss', 'EmpleadoRfc', 'EmpleadoCalle', 'EmpleadoNumero', 'EmpleadoColonia', 'EmpleadoCodigopostal', 'EmpleadoCiudad', 'EmpleadoSexo', 'EmpleadoFechanacimiento', 'EmpleadoTelefono', 'EmpleadoCelular', 'EmpleadoComprobantedomiclio', 'EmpleadoComprobanteidentificacion', 'EmpleadoSueldo', 'EmpleadoDiadescanso', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idempleado', 'idrol', 'empleadoRegistradoen', 'empleadoNombre', 'empleadoNss', 'empleadoRfc', 'empleadoCalle', 'empleadoNumero', 'empleadoColonia', 'empleadoCodigopostal', 'empleadoCiudad', 'empleadoSexo', 'empleadoFechanacimiento', 'empleadoTelefono', 'empleadoCelular', 'empleadoComprobantedomiclio', 'empleadoComprobanteidentificacion', 'empleadoSueldo', 'empleadoDiadescanso', ),
        BasePeer::TYPE_COLNAME => array (EmpleadoPeer::IDEMPLEADO, EmpleadoPeer::IDROL, EmpleadoPeer::EMPLEADO_REGISTRADOEN, EmpleadoPeer::EMPLEADO_NOMBRE, EmpleadoPeer::EMPLEADO_NSS, EmpleadoPeer::EMPLEADO_RFC, EmpleadoPeer::EMPLEADO_CALLE, EmpleadoPeer::EMPLEADO_NUMERO, EmpleadoPeer::EMPLEADO_COLONIA, EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, EmpleadoPeer::EMPLEADO_CIUDAD, EmpleadoPeer::EMPLEADO_SEXO, EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, EmpleadoPeer::EMPLEADO_TELEFONO, EmpleadoPeer::EMPLEADO_CELULAR, EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO, EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION, EmpleadoPeer::EMPLEADO_SUELDO, EmpleadoPeer::EMPLEADO_DIADESCANSO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEMPLEADO', 'IDROL', 'EMPLEADO_REGISTRADOEN', 'EMPLEADO_NOMBRE', 'EMPLEADO_NSS', 'EMPLEADO_RFC', 'EMPLEADO_CALLE', 'EMPLEADO_NUMERO', 'EMPLEADO_COLONIA', 'EMPLEADO_CODIGOPOSTAL', 'EMPLEADO_CIUDAD', 'EMPLEADO_SEXO', 'EMPLEADO_FECHANACIMIENTO', 'EMPLEADO_TELEFONO', 'EMPLEADO_CELULAR', 'EMPLEADO_COMPROBANTEDOMICLIO', 'EMPLEADO_COMPROBANTEIDENTIFICACION', 'EMPLEADO_SUELDO', 'EMPLEADO_DIADESCANSO', ),
        BasePeer::TYPE_FIELDNAME => array ('idempleado', 'idrol', 'empleado_registradoen', 'empleado_nombre', 'empleado_nss', 'empleado_rfc', 'empleado_calle', 'empleado_numero', 'empleado_colonia', 'empleado_codigopostal', 'empleado_ciudad', 'empleado_sexo', 'empleado_fechanacimiento', 'empleado_telefono', 'empleado_celular', 'empleado_comprobantedomiclio', 'empleado_comprobanteidentificacion', 'empleado_sueldo', 'empleado_diadescanso', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EmpleadoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idempleado' => 0, 'Idrol' => 1, 'EmpleadoRegistradoen' => 2, 'EmpleadoNombre' => 3, 'EmpleadoNss' => 4, 'EmpleadoRfc' => 5, 'EmpleadoCalle' => 6, 'EmpleadoNumero' => 7, 'EmpleadoColonia' => 8, 'EmpleadoCodigopostal' => 9, 'EmpleadoCiudad' => 10, 'EmpleadoSexo' => 11, 'EmpleadoFechanacimiento' => 12, 'EmpleadoTelefono' => 13, 'EmpleadoCelular' => 14, 'EmpleadoComprobantedomiclio' => 15, 'EmpleadoComprobanteidentificacion' => 16, 'EmpleadoSueldo' => 17, 'EmpleadoDiadescanso' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idempleado' => 0, 'idrol' => 1, 'empleadoRegistradoen' => 2, 'empleadoNombre' => 3, 'empleadoNss' => 4, 'empleadoRfc' => 5, 'empleadoCalle' => 6, 'empleadoNumero' => 7, 'empleadoColonia' => 8, 'empleadoCodigopostal' => 9, 'empleadoCiudad' => 10, 'empleadoSexo' => 11, 'empleadoFechanacimiento' => 12, 'empleadoTelefono' => 13, 'empleadoCelular' => 14, 'empleadoComprobantedomiclio' => 15, 'empleadoComprobanteidentificacion' => 16, 'empleadoSueldo' => 17, 'empleadoDiadescanso' => 18, ),
        BasePeer::TYPE_COLNAME => array (EmpleadoPeer::IDEMPLEADO => 0, EmpleadoPeer::IDROL => 1, EmpleadoPeer::EMPLEADO_REGISTRADOEN => 2, EmpleadoPeer::EMPLEADO_NOMBRE => 3, EmpleadoPeer::EMPLEADO_NSS => 4, EmpleadoPeer::EMPLEADO_RFC => 5, EmpleadoPeer::EMPLEADO_CALLE => 6, EmpleadoPeer::EMPLEADO_NUMERO => 7, EmpleadoPeer::EMPLEADO_COLONIA => 8, EmpleadoPeer::EMPLEADO_CODIGOPOSTAL => 9, EmpleadoPeer::EMPLEADO_CIUDAD => 10, EmpleadoPeer::EMPLEADO_SEXO => 11, EmpleadoPeer::EMPLEADO_FECHANACIMIENTO => 12, EmpleadoPeer::EMPLEADO_TELEFONO => 13, EmpleadoPeer::EMPLEADO_CELULAR => 14, EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO => 15, EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION => 16, EmpleadoPeer::EMPLEADO_SUELDO => 17, EmpleadoPeer::EMPLEADO_DIADESCANSO => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEMPLEADO' => 0, 'IDROL' => 1, 'EMPLEADO_REGISTRADOEN' => 2, 'EMPLEADO_NOMBRE' => 3, 'EMPLEADO_NSS' => 4, 'EMPLEADO_RFC' => 5, 'EMPLEADO_CALLE' => 6, 'EMPLEADO_NUMERO' => 7, 'EMPLEADO_COLONIA' => 8, 'EMPLEADO_CODIGOPOSTAL' => 9, 'EMPLEADO_CIUDAD' => 10, 'EMPLEADO_SEXO' => 11, 'EMPLEADO_FECHANACIMIENTO' => 12, 'EMPLEADO_TELEFONO' => 13, 'EMPLEADO_CELULAR' => 14, 'EMPLEADO_COMPROBANTEDOMICLIO' => 15, 'EMPLEADO_COMPROBANTEIDENTIFICACION' => 16, 'EMPLEADO_SUELDO' => 17, 'EMPLEADO_DIADESCANSO' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('idempleado' => 0, 'idrol' => 1, 'empleado_registradoen' => 2, 'empleado_nombre' => 3, 'empleado_nss' => 4, 'empleado_rfc' => 5, 'empleado_calle' => 6, 'empleado_numero' => 7, 'empleado_colonia' => 8, 'empleado_codigopostal' => 9, 'empleado_ciudad' => 10, 'empleado_sexo' => 11, 'empleado_fechanacimiento' => 12, 'empleado_telefono' => 13, 'empleado_celular' => 14, 'empleado_comprobantedomiclio' => 15, 'empleado_comprobanteidentificacion' => 16, 'empleado_sueldo' => 17, 'empleado_diadescanso' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        EmpleadoPeer::EMPLEADO_SEXO => array(
            EmpleadoPeer::EMPLEADO_SEXO_HOMBRE,
            EmpleadoPeer::EMPLEADO_SEXO_MUJER,
        ),
        EmpleadoPeer::EMPLEADO_DIADESCANSO => array(
            EmpleadoPeer::EMPLEADO_DIADESCANSO_LUNES,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_MARTES,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_MIERCOLES,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_JUEVES,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_VIERNES,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_SABADO,
            EmpleadoPeer::EMPLEADO_DIADESCANSO_DOMINGO,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = EmpleadoPeer::getFieldNames($toType);
        $key = isset(EmpleadoPeer::$fieldKeys[$fromType][$name]) ? EmpleadoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EmpleadoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, EmpleadoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EmpleadoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return EmpleadoPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = EmpleadoPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = EmpleadoPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. EmpleadoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EmpleadoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(EmpleadoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(EmpleadoPeer::IDROL);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_REGISTRADOEN);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_NOMBRE);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_NSS);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_RFC);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_CALLE);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_NUMERO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_COLONIA);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_CIUDAD);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_SEXO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_TELEFONO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_CELULAR);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_SUELDO);
            $criteria->addSelectColumn(EmpleadoPeer::EMPLEADO_DIADESCANSO);
        } else {
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.idrol');
            $criteria->addSelectColumn($alias . '.empleado_registradoen');
            $criteria->addSelectColumn($alias . '.empleado_nombre');
            $criteria->addSelectColumn($alias . '.empleado_nss');
            $criteria->addSelectColumn($alias . '.empleado_rfc');
            $criteria->addSelectColumn($alias . '.empleado_calle');
            $criteria->addSelectColumn($alias . '.empleado_numero');
            $criteria->addSelectColumn($alias . '.empleado_colonia');
            $criteria->addSelectColumn($alias . '.empleado_codigopostal');
            $criteria->addSelectColumn($alias . '.empleado_ciudad');
            $criteria->addSelectColumn($alias . '.empleado_sexo');
            $criteria->addSelectColumn($alias . '.empleado_fechanacimiento');
            $criteria->addSelectColumn($alias . '.empleado_telefono');
            $criteria->addSelectColumn($alias . '.empleado_celular');
            $criteria->addSelectColumn($alias . '.empleado_comprobantedomiclio');
            $criteria->addSelectColumn($alias . '.empleado_comprobanteidentificacion');
            $criteria->addSelectColumn($alias . '.empleado_sueldo');
            $criteria->addSelectColumn($alias . '.empleado_diadescanso');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EmpleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Empleado
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EmpleadoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return EmpleadoPeer::populateObjects(EmpleadoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EmpleadoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Empleado $obj A Empleado object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdempleado();
            } // if key === null
            EmpleadoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Empleado object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Empleado) {
                $key = (string) $value->getIdempleado();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Empleado object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EmpleadoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Empleado Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EmpleadoPeer::$instances[$key])) {
                return EmpleadoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (EmpleadoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EmpleadoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to empleado
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ClinicaempleadoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ClinicaempleadoPeer::clearInstancePool();
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in EgresoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EgresoclinicaPeer::clearInstancePool();
        // Invalidate objects in EmpleadocomisionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EmpleadocomisionPeer::clearInstancePool();
        // Invalidate objects in EmpleadohorarioPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EmpleadohorarioPeer::clearInstancePool();
        // Invalidate objects in FaltantePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        FaltantePeer::clearInstancePool();
        // Invalidate objects in FaltantePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        FaltantePeer::clearInstancePool();
        // Invalidate objects in TransferenciaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TransferenciaPeer::clearInstancePool();
        // Invalidate objects in VisitaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VisitaPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = EmpleadoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EmpleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EmpleadoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EmpleadoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Empleado object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EmpleadoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EmpleadoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EmpleadoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EmpleadoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Rol table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRol(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EmpleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EmpleadoPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Empleado objects pre-filled with their Rol objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Empleado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRol(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);
        }

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol = EmpleadoPeer::NUM_HYDRATE_COLUMNS;
        RolPeer::addSelectColumns($criteria);

        $criteria->addJoin(EmpleadoPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EmpleadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EmpleadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EmpleadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RolPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RolPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RolPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RolPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Empleado) to $obj2 (Rol)
                $obj2->addEmpleado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EmpleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EmpleadoPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Empleado objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Empleado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);
        }

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol2 = EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        RolPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RolPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EmpleadoPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EmpleadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EmpleadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EmpleadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Rol rows

            $key2 = RolPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RolPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RolPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RolPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Empleado) to the collection in $obj2 (Rol)
                $obj2->addEmpleado($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(EmpleadoPeer::DATABASE_NAME)->getTable(EmpleadoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEmpleadoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEmpleadoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EmpleadoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return EmpleadoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Empleado or Criteria object.
     *
     * @param      mixed $values Criteria or Empleado object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Empleado object
        }

        if ($criteria->containsKey(EmpleadoPeer::IDEMPLEADO) && $criteria->keyContainsValue(EmpleadoPeer::IDEMPLEADO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EmpleadoPeer::IDEMPLEADO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Empleado or Criteria object.
     *
     * @param      mixed $values Criteria or Empleado object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EmpleadoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EmpleadoPeer::IDEMPLEADO);
            $value = $criteria->remove(EmpleadoPeer::IDEMPLEADO);
            if ($value) {
                $selectCriteria->add(EmpleadoPeer::IDEMPLEADO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EmpleadoPeer::TABLE_NAME);
            }

        } else { // $values is Empleado object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the empleado table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += EmpleadoPeer::doOnDeleteCascade(new Criteria(EmpleadoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(EmpleadoPeer::TABLE_NAME, $con, EmpleadoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EmpleadoPeer::clearInstancePool();
            EmpleadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Empleado or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Empleado object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Empleado) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
            $criteria->add(EmpleadoPeer::IDEMPLEADO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(EmpleadoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += EmpleadoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                EmpleadoPeer::clearInstancePool();
            } elseif ($values instanceof Empleado) { // it's a model object
                EmpleadoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    EmpleadoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EmpleadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = EmpleadoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Clinicaempleado objects
            $criteria = new Criteria(ClinicaempleadoPeer::DATABASE_NAME);

            $criteria->add(ClinicaempleadoPeer::IDEMPLEADO, $obj->getIdempleado());
            $affectedRows += ClinicaempleadoPeer::doDelete($criteria, $con);

            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDEMPLEADO, $obj->getIdempleado());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Egresoclinica objects
            $criteria = new Criteria(EgresoclinicaPeer::DATABASE_NAME);

            $criteria->add(EgresoclinicaPeer::IDEMPLEADO, $obj->getIdempleado());
            $affectedRows += EgresoclinicaPeer::doDelete($criteria, $con);

            // delete related Empleadocomision objects
            $criteria = new Criteria(EmpleadocomisionPeer::DATABASE_NAME);

            $criteria->add(EmpleadocomisionPeer::IDEMPLEDO, $obj->getIdempleado());
            $affectedRows += EmpleadocomisionPeer::doDelete($criteria, $con);

            // delete related Empleadohorario objects
            $criteria = new Criteria(EmpleadohorarioPeer::DATABASE_NAME);

            $criteria->add(EmpleadohorarioPeer::IDEMPLEADO, $obj->getIdempleado());
            $affectedRows += EmpleadohorarioPeer::doDelete($criteria, $con);

            // delete related Faltante objects
            $criteria = new Criteria(FaltantePeer::DATABASE_NAME);

            $criteria->add(FaltantePeer::IDEMPLEADODEUDOR, $obj->getIdempleado());
            $affectedRows += FaltantePeer::doDelete($criteria, $con);

            // delete related Faltante objects
            $criteria = new Criteria(FaltantePeer::DATABASE_NAME);

            $criteria->add(FaltantePeer::IDEMPLEADOGENERADOR, $obj->getIdempleado());
            $affectedRows += FaltantePeer::doDelete($criteria, $con);

            // delete related Transferencia objects
            $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);

            $criteria->add(TransferenciaPeer::IDEMPLEADORECEPTOR, $obj->getIdempleado());
            $affectedRows += TransferenciaPeer::doDelete($criteria, $con);

            // delete related Visita objects
            $criteria = new Criteria(VisitaPeer::DATABASE_NAME);

            $criteria->add(VisitaPeer::IDEMPLEADOCREADOR, $obj->getIdempleado());
            $affectedRows += VisitaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Empleado object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Empleado $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EmpleadoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EmpleadoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(EmpleadoPeer::DATABASE_NAME, EmpleadoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Empleado
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
        $criteria->add(EmpleadoPeer::IDEMPLEADO, $pk);

        $v = EmpleadoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Empleado[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
            $criteria->add(EmpleadoPeer::IDEMPLEADO, $pks, Criteria::IN);
            $objs = EmpleadoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEmpleadoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEmpleadoPeer::buildTableMap();

