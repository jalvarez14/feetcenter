<?php


/**
 * Base static class for performing query and update operations on the 'clinica' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseClinicaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'clinica';

    /** the related Propel class for this table */
    const OM_CLASS = 'Clinica';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClinicaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idclinica field */
    const IDCLINICA = 'clinica.idclinica';

    /** the column name for the clinica_nombre field */
    const CLINICA_NOMBRE = 'clinica.clinica_nombre';

    /** the column name for the clinica_direccion field */
    const CLINICA_DIRECCION = 'clinica.clinica_direccion';

    /** the column name for the clinica_registropatronal field */
    const CLINICA_REGISTROPATRONAL = 'clinica.clinica_registropatronal';

    /** the column name for the clinica_telefono field */
    const CLINICA_TELEFONO = 'clinica.clinica_telefono';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Clinica objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Clinica[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClinicaPeer::$fieldNames[ClinicaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idclinica', 'ClinicaNombre', 'ClinicaDireccion', 'ClinicaRegistropatronal', 'ClinicaTelefono', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idclinica', 'clinicaNombre', 'clinicaDireccion', 'clinicaRegistropatronal', 'clinicaTelefono', ),
        BasePeer::TYPE_COLNAME => array (ClinicaPeer::IDCLINICA, ClinicaPeer::CLINICA_NOMBRE, ClinicaPeer::CLINICA_DIRECCION, ClinicaPeer::CLINICA_REGISTROPATRONAL, ClinicaPeer::CLINICA_TELEFONO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCLINICA', 'CLINICA_NOMBRE', 'CLINICA_DIRECCION', 'CLINICA_REGISTROPATRONAL', 'CLINICA_TELEFONO', ),
        BasePeer::TYPE_FIELDNAME => array ('idclinica', 'clinica_nombre', 'clinica_direccion', 'clinica_registropatronal', 'clinica_telefono', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClinicaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idclinica' => 0, 'ClinicaNombre' => 1, 'ClinicaDireccion' => 2, 'ClinicaRegistropatronal' => 3, 'ClinicaTelefono' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idclinica' => 0, 'clinicaNombre' => 1, 'clinicaDireccion' => 2, 'clinicaRegistropatronal' => 3, 'clinicaTelefono' => 4, ),
        BasePeer::TYPE_COLNAME => array (ClinicaPeer::IDCLINICA => 0, ClinicaPeer::CLINICA_NOMBRE => 1, ClinicaPeer::CLINICA_DIRECCION => 2, ClinicaPeer::CLINICA_REGISTROPATRONAL => 3, ClinicaPeer::CLINICA_TELEFONO => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCLINICA' => 0, 'CLINICA_NOMBRE' => 1, 'CLINICA_DIRECCION' => 2, 'CLINICA_REGISTROPATRONAL' => 3, 'CLINICA_TELEFONO' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idclinica' => 0, 'clinica_nombre' => 1, 'clinica_direccion' => 2, 'clinica_registropatronal' => 3, 'clinica_telefono' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = ClinicaPeer::getFieldNames($toType);
        $key = isset(ClinicaPeer::$fieldKeys[$fromType][$name]) ? ClinicaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClinicaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ClinicaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClinicaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ClinicaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClinicaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ClinicaPeer::IDCLINICA);
            $criteria->addSelectColumn(ClinicaPeer::CLINICA_NOMBRE);
            $criteria->addSelectColumn(ClinicaPeer::CLINICA_DIRECCION);
            $criteria->addSelectColumn(ClinicaPeer::CLINICA_REGISTROPATRONAL);
            $criteria->addSelectColumn(ClinicaPeer::CLINICA_TELEFONO);
        } else {
            $criteria->addSelectColumn($alias . '.idclinica');
            $criteria->addSelectColumn($alias . '.clinica_nombre');
            $criteria->addSelectColumn($alias . '.clinica_direccion');
            $criteria->addSelectColumn($alias . '.clinica_registropatronal');
            $criteria->addSelectColumn($alias . '.clinica_telefono');
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
        $criteria->setPrimaryTableName(ClinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClinicaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Clinica
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClinicaPeer::doSelect($critcopy, $con);
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
        return ClinicaPeer::populateObjects(ClinicaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClinicaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClinicaPeer::DATABASE_NAME);

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
     * @param Clinica $obj A Clinica object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdclinica();
            } // if key === null
            ClinicaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Clinica object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Clinica) {
                $key = (string) $value->getIdclinica();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Clinica object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClinicaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Clinica Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClinicaPeer::$instances[$key])) {
                return ClinicaPeer::$instances[$key];
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
        foreach (ClinicaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClinicaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to clinica
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ClinicaempleadoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ClinicaempleadoPeer::clearInstancePool();
        // Invalidate objects in ConfiguracionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ConfiguracionPeer::clearInstancePool();
        // Invalidate objects in EgresoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EgresoclinicaPeer::clearInstancePool();
        // Invalidate objects in EmpleadocomisionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EmpleadocomisionPeer::clearInstancePool();
        // Invalidate objects in EmpleadorecesoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EmpleadorecesoPeer::clearInstancePool();
        // Invalidate objects in EmpleadoreportePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EmpleadoreportePeer::clearInstancePool();
        // Invalidate objects in EncargadoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EncargadoclinicaPeer::clearInstancePool();
        // Invalidate objects in FaltantePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        FaltantePeer::clearInstancePool();
        // Invalidate objects in InsumoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InsumoclinicaPeer::clearInstancePool();
        // Invalidate objects in MembresiaclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        MembresiaclinicaPeer::clearInstancePool();
        // Invalidate objects in MetaclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        MetaclinicaPeer::clearInstancePool();
        // Invalidate objects in PacientePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacientePeer::clearInstancePool();
        // Invalidate objects in PacientemembresiaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacientemembresiaPeer::clearInstancePool();
        // Invalidate objects in PacienteseguimientoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacienteseguimientoPeer::clearInstancePool();
        // Invalidate objects in ProductoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductoclinicaPeer::clearInstancePool();
        // Invalidate objects in ServicioclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ServicioclinicaPeer::clearInstancePool();
        // Invalidate objects in TransferenciaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TransferenciaPeer::clearInstancePool();
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
        $cls = ClinicaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClinicaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClinicaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Clinica object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClinicaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClinicaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClinicaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClinicaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(ClinicaPeer::DATABASE_NAME)->getTable(ClinicaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClinicaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClinicaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClinicaTableMap());
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
        return ClinicaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Clinica or Criteria object.
     *
     * @param      mixed $values Criteria or Clinica object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Clinica object
        }

        if ($criteria->containsKey(ClinicaPeer::IDCLINICA) && $criteria->keyContainsValue(ClinicaPeer::IDCLINICA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClinicaPeer::IDCLINICA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClinicaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Clinica or Criteria object.
     *
     * @param      mixed $values Criteria or Clinica object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClinicaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClinicaPeer::IDCLINICA);
            $value = $criteria->remove(ClinicaPeer::IDCLINICA);
            if ($value) {
                $selectCriteria->add(ClinicaPeer::IDCLINICA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClinicaPeer::TABLE_NAME);
            }

        } else { // $values is Clinica object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClinicaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the clinica table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ClinicaPeer::doOnDeleteCascade(new Criteria(ClinicaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ClinicaPeer::TABLE_NAME, $con, ClinicaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClinicaPeer::clearInstancePool();
            ClinicaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Clinica or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Clinica object or primary key or array of primary keys
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
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Clinica) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClinicaPeer::DATABASE_NAME);
            $criteria->add(ClinicaPeer::IDCLINICA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ClinicaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ClinicaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ClinicaPeer::clearInstancePool();
            } elseif ($values instanceof Clinica) { // it's a model object
                ClinicaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ClinicaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClinicaPeer::clearRelatedInstancePool();
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
        $objects = ClinicaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Clinicaempleado objects
            $criteria = new Criteria(ClinicaempleadoPeer::DATABASE_NAME);

            $criteria->add(ClinicaempleadoPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += ClinicaempleadoPeer::doDelete($criteria, $con);

            // delete related Configuracion objects
            $criteria = new Criteria(ConfiguracionPeer::DATABASE_NAME);

            $criteria->add(ConfiguracionPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += ConfiguracionPeer::doDelete($criteria, $con);

            // delete related Egresoclinica objects
            $criteria = new Criteria(EgresoclinicaPeer::DATABASE_NAME);

            $criteria->add(EgresoclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += EgresoclinicaPeer::doDelete($criteria, $con);

            // delete related Empleadocomision objects
            $criteria = new Criteria(EmpleadocomisionPeer::DATABASE_NAME);

            $criteria->add(EmpleadocomisionPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += EmpleadocomisionPeer::doDelete($criteria, $con);

            // delete related Empleadoreceso objects
            $criteria = new Criteria(EmpleadorecesoPeer::DATABASE_NAME);

            $criteria->add(EmpleadorecesoPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += EmpleadorecesoPeer::doDelete($criteria, $con);

            // delete related Empleadoreporte objects
            $criteria = new Criteria(EmpleadoreportePeer::DATABASE_NAME);

            $criteria->add(EmpleadoreportePeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += EmpleadoreportePeer::doDelete($criteria, $con);

            // delete related Encargadoclinica objects
            $criteria = new Criteria(EncargadoclinicaPeer::DATABASE_NAME);

            $criteria->add(EncargadoclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += EncargadoclinicaPeer::doDelete($criteria, $con);

            // delete related Faltante objects
            $criteria = new Criteria(FaltantePeer::DATABASE_NAME);

            $criteria->add(FaltantePeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += FaltantePeer::doDelete($criteria, $con);

            // delete related Insumoclinica objects
            $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);

            $criteria->add(InsumoclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += InsumoclinicaPeer::doDelete($criteria, $con);

            // delete related Membresiaclinica objects
            $criteria = new Criteria(MembresiaclinicaPeer::DATABASE_NAME);

            $criteria->add(MembresiaclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += MembresiaclinicaPeer::doDelete($criteria, $con);

            // delete related Metaclinica objects
            $criteria = new Criteria(MetaclinicaPeer::DATABASE_NAME);

            $criteria->add(MetaclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += MetaclinicaPeer::doDelete($criteria, $con);

            // delete related Paciente objects
            $criteria = new Criteria(PacientePeer::DATABASE_NAME);

            $criteria->add(PacientePeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += PacientePeer::doDelete($criteria, $con);

            // delete related Pacientemembresia objects
            $criteria = new Criteria(PacientemembresiaPeer::DATABASE_NAME);

            $criteria->add(PacientemembresiaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += PacientemembresiaPeer::doDelete($criteria, $con);

            // delete related Pacienteseguimiento objects
            $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);

            $criteria->add(PacienteseguimientoPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += PacienteseguimientoPeer::doDelete($criteria, $con);

            // delete related Productoclinica objects
            $criteria = new Criteria(ProductoclinicaPeer::DATABASE_NAME);

            $criteria->add(ProductoclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += ProductoclinicaPeer::doDelete($criteria, $con);

            // delete related Servicioclinica objects
            $criteria = new Criteria(ServicioclinicaPeer::DATABASE_NAME);

            $criteria->add(ServicioclinicaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += ServicioclinicaPeer::doDelete($criteria, $con);

            // delete related Transferencia objects
            $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);

            $criteria->add(TransferenciaPeer::IDCLINICADESTINATARIA, $obj->getIdclinica());
            $affectedRows += TransferenciaPeer::doDelete($criteria, $con);

            // delete related Transferencia objects
            $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);

            $criteria->add(TransferenciaPeer::IDCLINICAREMITENTE, $obj->getIdclinica());
            $affectedRows += TransferenciaPeer::doDelete($criteria, $con);

            // delete related Visita objects
            $criteria = new Criteria(VisitaPeer::DATABASE_NAME);

            $criteria->add(VisitaPeer::IDCLINICA, $obj->getIdclinica());
            $affectedRows += VisitaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Clinica object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Clinica $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClinicaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClinicaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ClinicaPeer::DATABASE_NAME, ClinicaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Clinica
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClinicaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClinicaPeer::DATABASE_NAME);
        $criteria->add(ClinicaPeer::IDCLINICA, $pk);

        $v = ClinicaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Clinica[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClinicaPeer::DATABASE_NAME);
            $criteria->add(ClinicaPeer::IDCLINICA, $pks, Criteria::IN);
            $objs = ClinicaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseClinicaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClinicaPeer::buildTableMap();

