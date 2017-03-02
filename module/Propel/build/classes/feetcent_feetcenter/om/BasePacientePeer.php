<?php


/**
 * Base static class for performing query and update operations on the 'paciente' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacientePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'paciente';

    /** the related Propel class for this table */
    const OM_CLASS = 'Paciente';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PacienteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'paciente.idpaciente';

    /** the column name for the idclinica field */
    const IDCLINICA = 'paciente.idclinica';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'paciente.idempleado';

    /** the column name for the paciente_nombre field */
    const PACIENTE_NOMBRE = 'paciente.paciente_nombre';

    /** the column name for the paciente_celular field */
    const PACIENTE_CELULAR = 'paciente.paciente_celular';

    /** the column name for the paciente_telefono field */
    const PACIENTE_TELEFONO = 'paciente.paciente_telefono';

    /** the column name for the paciente_calle field */
    const PACIENTE_CALLE = 'paciente.paciente_calle';

    /** the column name for the paciente_numero field */
    const PACIENTE_NUMERO = 'paciente.paciente_numero';

    /** the column name for the paciente_colonia field */
    const PACIENTE_COLONIA = 'paciente.paciente_colonia';

    /** the column name for the paciente_codigopostal field */
    const PACIENTE_CODIGOPOSTAL = 'paciente.paciente_codigopostal';

    /** the column name for the paciente_ciudad field */
    const PACIENTE_CIUDAD = 'paciente.paciente_ciudad';

    /** the column name for the paciente_estado field */
    const PACIENTE_ESTADO = 'paciente.paciente_estado';

    /** the column name for the paciente_sexo field */
    const PACIENTE_SEXO = 'paciente.paciente_sexo';

    /** the column name for the paciente_fechanacimiento field */
    const PACIENTE_FECHANACIMIENTO = 'paciente.paciente_fechanacimiento';

    /** the column name for the paciente_fecharegistro field */
    const PACIENTE_FECHAREGISTRO = 'paciente.paciente_fecharegistro';

    /** the column name for the paciente_name field */
    const PACIENTE_NAME = 'paciente.paciente_name';

    /** the column name for the paciente_ap field */
    const PACIENTE_AP = 'paciente.paciente_ap';

    /** the column name for the paciente_am field */
    const PACIENTE_AM = 'paciente.paciente_am';

    /** The enumerated values for the paciente_sexo field */
    const PACIENTE_SEXO_HOMBRE = 'Hombre';
    const PACIENTE_SEXO_MUJER = 'Mujer';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Paciente objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Paciente[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PacientePeer::$fieldNames[PacientePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idpaciente', 'Idclinica', 'Idempleado', 'PacienteNombre', 'PacienteCelular', 'PacienteTelefono', 'PacienteCalle', 'PacienteNumero', 'PacienteColonia', 'PacienteCodigopostal', 'PacienteCiudad', 'PacienteEstado', 'PacienteSexo', 'PacienteFechanacimiento', 'PacienteFecharegistro', 'PacienteName', 'PacienteAp', 'PacienteAm', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpaciente', 'idclinica', 'idempleado', 'pacienteNombre', 'pacienteCelular', 'pacienteTelefono', 'pacienteCalle', 'pacienteNumero', 'pacienteColonia', 'pacienteCodigopostal', 'pacienteCiudad', 'pacienteEstado', 'pacienteSexo', 'pacienteFechanacimiento', 'pacienteFecharegistro', 'pacienteName', 'pacienteAp', 'pacienteAm', ),
        BasePeer::TYPE_COLNAME => array (PacientePeer::IDPACIENTE, PacientePeer::IDCLINICA, PacientePeer::IDEMPLEADO, PacientePeer::PACIENTE_NOMBRE, PacientePeer::PACIENTE_CELULAR, PacientePeer::PACIENTE_TELEFONO, PacientePeer::PACIENTE_CALLE, PacientePeer::PACIENTE_NUMERO, PacientePeer::PACIENTE_COLONIA, PacientePeer::PACIENTE_CODIGOPOSTAL, PacientePeer::PACIENTE_CIUDAD, PacientePeer::PACIENTE_ESTADO, PacientePeer::PACIENTE_SEXO, PacientePeer::PACIENTE_FECHANACIMIENTO, PacientePeer::PACIENTE_FECHAREGISTRO, PacientePeer::PACIENTE_NAME, PacientePeer::PACIENTE_AP, PacientePeer::PACIENTE_AM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPACIENTE', 'IDCLINICA', 'IDEMPLEADO', 'PACIENTE_NOMBRE', 'PACIENTE_CELULAR', 'PACIENTE_TELEFONO', 'PACIENTE_CALLE', 'PACIENTE_NUMERO', 'PACIENTE_COLONIA', 'PACIENTE_CODIGOPOSTAL', 'PACIENTE_CIUDAD', 'PACIENTE_ESTADO', 'PACIENTE_SEXO', 'PACIENTE_FECHANACIMIENTO', 'PACIENTE_FECHAREGISTRO', 'PACIENTE_NAME', 'PACIENTE_AP', 'PACIENTE_AM', ),
        BasePeer::TYPE_FIELDNAME => array ('idpaciente', 'idclinica', 'idempleado', 'paciente_nombre', 'paciente_celular', 'paciente_telefono', 'paciente_calle', 'paciente_numero', 'paciente_colonia', 'paciente_codigopostal', 'paciente_ciudad', 'paciente_estado', 'paciente_sexo', 'paciente_fechanacimiento', 'paciente_fecharegistro', 'paciente_name', 'paciente_ap', 'paciente_am', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PacientePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idpaciente' => 0, 'Idclinica' => 1, 'Idempleado' => 2, 'PacienteNombre' => 3, 'PacienteCelular' => 4, 'PacienteTelefono' => 5, 'PacienteCalle' => 6, 'PacienteNumero' => 7, 'PacienteColonia' => 8, 'PacienteCodigopostal' => 9, 'PacienteCiudad' => 10, 'PacienteEstado' => 11, 'PacienteSexo' => 12, 'PacienteFechanacimiento' => 13, 'PacienteFecharegistro' => 14, 'PacienteName' => 15, 'PacienteAp' => 16, 'PacienteAm' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpaciente' => 0, 'idclinica' => 1, 'idempleado' => 2, 'pacienteNombre' => 3, 'pacienteCelular' => 4, 'pacienteTelefono' => 5, 'pacienteCalle' => 6, 'pacienteNumero' => 7, 'pacienteColonia' => 8, 'pacienteCodigopostal' => 9, 'pacienteCiudad' => 10, 'pacienteEstado' => 11, 'pacienteSexo' => 12, 'pacienteFechanacimiento' => 13, 'pacienteFecharegistro' => 14, 'pacienteName' => 15, 'pacienteAp' => 16, 'pacienteAm' => 17, ),
        BasePeer::TYPE_COLNAME => array (PacientePeer::IDPACIENTE => 0, PacientePeer::IDCLINICA => 1, PacientePeer::IDEMPLEADO => 2, PacientePeer::PACIENTE_NOMBRE => 3, PacientePeer::PACIENTE_CELULAR => 4, PacientePeer::PACIENTE_TELEFONO => 5, PacientePeer::PACIENTE_CALLE => 6, PacientePeer::PACIENTE_NUMERO => 7, PacientePeer::PACIENTE_COLONIA => 8, PacientePeer::PACIENTE_CODIGOPOSTAL => 9, PacientePeer::PACIENTE_CIUDAD => 10, PacientePeer::PACIENTE_ESTADO => 11, PacientePeer::PACIENTE_SEXO => 12, PacientePeer::PACIENTE_FECHANACIMIENTO => 13, PacientePeer::PACIENTE_FECHAREGISTRO => 14, PacientePeer::PACIENTE_NAME => 15, PacientePeer::PACIENTE_AP => 16, PacientePeer::PACIENTE_AM => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPACIENTE' => 0, 'IDCLINICA' => 1, 'IDEMPLEADO' => 2, 'PACIENTE_NOMBRE' => 3, 'PACIENTE_CELULAR' => 4, 'PACIENTE_TELEFONO' => 5, 'PACIENTE_CALLE' => 6, 'PACIENTE_NUMERO' => 7, 'PACIENTE_COLONIA' => 8, 'PACIENTE_CODIGOPOSTAL' => 9, 'PACIENTE_CIUDAD' => 10, 'PACIENTE_ESTADO' => 11, 'PACIENTE_SEXO' => 12, 'PACIENTE_FECHANACIMIENTO' => 13, 'PACIENTE_FECHAREGISTRO' => 14, 'PACIENTE_NAME' => 15, 'PACIENTE_AP' => 16, 'PACIENTE_AM' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('idpaciente' => 0, 'idclinica' => 1, 'idempleado' => 2, 'paciente_nombre' => 3, 'paciente_celular' => 4, 'paciente_telefono' => 5, 'paciente_calle' => 6, 'paciente_numero' => 7, 'paciente_colonia' => 8, 'paciente_codigopostal' => 9, 'paciente_ciudad' => 10, 'paciente_estado' => 11, 'paciente_sexo' => 12, 'paciente_fechanacimiento' => 13, 'paciente_fecharegistro' => 14, 'paciente_name' => 15, 'paciente_ap' => 16, 'paciente_am' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        PacientePeer::PACIENTE_SEXO => array(
            PacientePeer::PACIENTE_SEXO_HOMBRE,
            PacientePeer::PACIENTE_SEXO_MUJER,
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
        $toNames = PacientePeer::getFieldNames($toType);
        $key = isset(PacientePeer::$fieldKeys[$fromType][$name]) ? PacientePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PacientePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PacientePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PacientePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return PacientePeer::$enumValueSets;
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
        $valueSets = PacientePeer::getValueSets();

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
        $values = PacientePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. PacientePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PacientePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PacientePeer::IDPACIENTE);
            $criteria->addSelectColumn(PacientePeer::IDCLINICA);
            $criteria->addSelectColumn(PacientePeer::IDEMPLEADO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_NOMBRE);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_CELULAR);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_TELEFONO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_CALLE);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_NUMERO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_COLONIA);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_CODIGOPOSTAL);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_CIUDAD);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_ESTADO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_SEXO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_FECHANACIMIENTO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_FECHAREGISTRO);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_NAME);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_AP);
            $criteria->addSelectColumn(PacientePeer::PACIENTE_AM);
        } else {
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.idclinica');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.paciente_nombre');
            $criteria->addSelectColumn($alias . '.paciente_celular');
            $criteria->addSelectColumn($alias . '.paciente_telefono');
            $criteria->addSelectColumn($alias . '.paciente_calle');
            $criteria->addSelectColumn($alias . '.paciente_numero');
            $criteria->addSelectColumn($alias . '.paciente_colonia');
            $criteria->addSelectColumn($alias . '.paciente_codigopostal');
            $criteria->addSelectColumn($alias . '.paciente_ciudad');
            $criteria->addSelectColumn($alias . '.paciente_estado');
            $criteria->addSelectColumn($alias . '.paciente_sexo');
            $criteria->addSelectColumn($alias . '.paciente_fechanacimiento');
            $criteria->addSelectColumn($alias . '.paciente_fecharegistro');
            $criteria->addSelectColumn($alias . '.paciente_name');
            $criteria->addSelectColumn($alias . '.paciente_ap');
            $criteria->addSelectColumn($alias . '.paciente_am');
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
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PacientePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Paciente
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PacientePeer::doSelect($critcopy, $con);
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
        return PacientePeer::populateObjects(PacientePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PacientePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

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
     * @param Paciente $obj A Paciente object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpaciente();
            } // if key === null
            PacientePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Paciente object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Paciente) {
                $key = (string) $value->getIdpaciente();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Paciente object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PacientePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Paciente Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PacientePeer::$instances[$key])) {
                return PacientePeer::$instances[$key];
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
        foreach (PacientePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PacientePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to paciente
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in GrupopacientePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        GrupopacientePeer::clearInstancePool();
        // Invalidate objects in GrupopersonalPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        GrupopersonalPeer::clearInstancePool();
        // Invalidate objects in GrupopersonalPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        GrupopersonalPeer::clearInstancePool();
        // Invalidate objects in PacientemembresiaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacientemembresiaPeer::clearInstancePool();
        // Invalidate objects in PacienteseguimientoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacienteseguimientoPeer::clearInstancePool();
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
        $cls = PacientePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PacientePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PacientePeer::addInstanceToPool($obj, $key);
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
     * @return array (Paciente object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PacientePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PacientePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PacientePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PacientePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Clinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Paciente objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Paciente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacientePeer::DATABASE_NAME);
        }

        PacientePeer::addSelectColumns($criteria);
        $startcol = PacientePeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacientePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Paciente) to $obj2 (Clinica)
                $obj2->addPaciente($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Paciente objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Paciente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacientePeer::DATABASE_NAME);
        }

        PacientePeer::addSelectColumns($criteria);
        $startcol = PacientePeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacientePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Paciente) to $obj2 (Empleado)
                $obj2->addPaciente($obj1);

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
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Paciente objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Paciente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacientePeer::DATABASE_NAME);
        }

        PacientePeer::addSelectColumns($criteria);
        $startcol2 = PacientePeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Clinica rows

            $key2 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Paciente) to the collection in $obj2 (Clinica)
                $obj2->addPaciente($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Paciente) to the collection in $obj3 (Empleado)
                $obj3->addPaciente($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Clinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Selects a collection of Paciente objects pre-filled with all related objects except Clinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Paciente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacientePeer::DATABASE_NAME);
        }

        PacientePeer::addSelectColumns($criteria);
        $startcol2 = PacientePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacientePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Empleado rows

                $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Paciente) to the collection in $obj2 (Empleado)
                $obj2->addPaciente($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Paciente objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Paciente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacientePeer::DATABASE_NAME);
        }

        PacientePeer::addSelectColumns($criteria);
        $startcol2 = PacientePeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacientePeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clinica rows

                $key2 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClinicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClinicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Paciente) to the collection in $obj2 (Clinica)
                $obj2->addPaciente($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(PacientePeer::DATABASE_NAME)->getTable(PacientePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePacientePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePacientePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PacienteTableMap());
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
        return PacientePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Paciente or Criteria object.
     *
     * @param      mixed $values Criteria or Paciente object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Paciente object
        }

        if ($criteria->containsKey(PacientePeer::IDPACIENTE) && $criteria->keyContainsValue(PacientePeer::IDPACIENTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PacientePeer::IDPACIENTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Paciente or Criteria object.
     *
     * @param      mixed $values Criteria or Paciente object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PacientePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PacientePeer::IDPACIENTE);
            $value = $criteria->remove(PacientePeer::IDPACIENTE);
            if ($value) {
                $selectCriteria->add(PacientePeer::IDPACIENTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PacientePeer::TABLE_NAME);
            }

        } else { // $values is Paciente object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the paciente table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += PacientePeer::doOnDeleteCascade(new Criteria(PacientePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(PacientePeer::TABLE_NAME, $con, PacientePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PacientePeer::clearInstancePool();
            PacientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Paciente or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Paciente object or primary key or array of primary keys
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Paciente) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PacientePeer::DATABASE_NAME);
            $criteria->add(PacientePeer::IDPACIENTE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(PacientePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += PacientePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                PacientePeer::clearInstancePool();
            } elseif ($values instanceof Paciente) { // it's a model object
                PacientePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    PacientePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PacientePeer::clearRelatedInstancePool();
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
        $objects = PacientePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Grupopaciente objects
            $criteria = new Criteria(GrupopacientePeer::DATABASE_NAME);

            $criteria->add(GrupopacientePeer::IDPACIENTE, $obj->getIdpaciente());
            $affectedRows += GrupopacientePeer::doDelete($criteria, $con);

            // delete related Grupopersonal objects
            $criteria = new Criteria(GrupopersonalPeer::DATABASE_NAME);

            $criteria->add(GrupopersonalPeer::IDPACIENTE, $obj->getIdpaciente());
            $affectedRows += GrupopersonalPeer::doDelete($criteria, $con);

            // delete related Grupopersonal objects
            $criteria = new Criteria(GrupopersonalPeer::DATABASE_NAME);

            $criteria->add(GrupopersonalPeer::IDPACIENTEAGREGADO, $obj->getIdpaciente());
            $affectedRows += GrupopersonalPeer::doDelete($criteria, $con);

            // delete related Pacientemembresia objects
            $criteria = new Criteria(PacientemembresiaPeer::DATABASE_NAME);

            $criteria->add(PacientemembresiaPeer::IDPACIENTE, $obj->getIdpaciente());
            $affectedRows += PacientemembresiaPeer::doDelete($criteria, $con);

            // delete related Pacienteseguimiento objects
            $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);

            $criteria->add(PacienteseguimientoPeer::IDPACIENTE, $obj->getIdpaciente());
            $affectedRows += PacienteseguimientoPeer::doDelete($criteria, $con);

            // delete related Visita objects
            $criteria = new Criteria(VisitaPeer::DATABASE_NAME);

            $criteria->add(VisitaPeer::IDPACIENTE, $obj->getIdpaciente());
            $affectedRows += VisitaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Paciente object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Paciente $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PacientePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PacientePeer::TABLE_NAME);

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

        return BasePeer::doValidate(PacientePeer::DATABASE_NAME, PacientePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Paciente
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PacientePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PacientePeer::DATABASE_NAME);
        $criteria->add(PacientePeer::IDPACIENTE, $pk);

        $v = PacientePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Paciente[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PacientePeer::DATABASE_NAME);
            $criteria->add(PacientePeer::IDPACIENTE, $pks, Criteria::IN);
            $objs = PacientePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePacientePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePacientePeer::buildTableMap();

