<?php


/**
 * Base static class for performing query and update operations on the 'insumoclinica' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseInsumoclinicaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'insumoclinica';

    /** the related Propel class for this table */
    const OM_CLASS = 'Insumoclinica';

    /** the related TableMap class for this table */
    const TM_CLASS = 'InsumoclinicaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the idinsumoclinica field */
    const IDINSUMOCLINICA = 'insumoclinica.idinsumoclinica';

    /** the column name for the idinsumo field */
    const IDINSUMO = 'insumoclinica.idinsumo';

    /** the column name for the idclinica field */
    const IDCLINICA = 'insumoclinica.idclinica';

    /** the column name for the insumoclinica_existencia field */
    const INSUMOCLINICA_EXISTENCIA = 'insumoclinica.insumoclinica_existencia';

    /** the column name for the insumoclinica_minimo field */
    const INSUMOCLINICA_MINIMO = 'insumoclinica.insumoclinica_minimo';

    /** the column name for the insumoclinica_maximo field */
    const INSUMOCLINICA_MAXIMO = 'insumoclinica.insumoclinica_maximo';

    /** the column name for the insumoclinica_reorden field */
    const INSUMOCLINICA_REORDEN = 'insumoclinica.insumoclinica_reorden';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Insumoclinica objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Insumoclinica[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. InsumoclinicaPeer::$fieldNames[InsumoclinicaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idinsumoclinica', 'Idinsumo', 'Idclinica', 'InsumoclinicaExistencia', 'InsumoclinicaMinimo', 'InsumoclinicaMaximo', 'InsumoclinicaReorden', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinsumoclinica', 'idinsumo', 'idclinica', 'insumoclinicaExistencia', 'insumoclinicaMinimo', 'insumoclinicaMaximo', 'insumoclinicaReorden', ),
        BasePeer::TYPE_COLNAME => array (InsumoclinicaPeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMO, InsumoclinicaPeer::IDCLINICA, InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA, InsumoclinicaPeer::INSUMOCLINICA_MINIMO, InsumoclinicaPeer::INSUMOCLINICA_MAXIMO, InsumoclinicaPeer::INSUMOCLINICA_REORDEN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINSUMOCLINICA', 'IDINSUMO', 'IDCLINICA', 'INSUMOCLINICA_EXISTENCIA', 'INSUMOCLINICA_MINIMO', 'INSUMOCLINICA_MAXIMO', 'INSUMOCLINICA_REORDEN', ),
        BasePeer::TYPE_FIELDNAME => array ('idinsumoclinica', 'idinsumo', 'idclinica', 'insumoclinica_existencia', 'insumoclinica_minimo', 'insumoclinica_maximo', 'insumoclinica_reorden', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. InsumoclinicaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idinsumoclinica' => 0, 'Idinsumo' => 1, 'Idclinica' => 2, 'InsumoclinicaExistencia' => 3, 'InsumoclinicaMinimo' => 4, 'InsumoclinicaMaximo' => 5, 'InsumoclinicaReorden' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinsumoclinica' => 0, 'idinsumo' => 1, 'idclinica' => 2, 'insumoclinicaExistencia' => 3, 'insumoclinicaMinimo' => 4, 'insumoclinicaMaximo' => 5, 'insumoclinicaReorden' => 6, ),
        BasePeer::TYPE_COLNAME => array (InsumoclinicaPeer::IDINSUMOCLINICA => 0, InsumoclinicaPeer::IDINSUMO => 1, InsumoclinicaPeer::IDCLINICA => 2, InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA => 3, InsumoclinicaPeer::INSUMOCLINICA_MINIMO => 4, InsumoclinicaPeer::INSUMOCLINICA_MAXIMO => 5, InsumoclinicaPeer::INSUMOCLINICA_REORDEN => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINSUMOCLINICA' => 0, 'IDINSUMO' => 1, 'IDCLINICA' => 2, 'INSUMOCLINICA_EXISTENCIA' => 3, 'INSUMOCLINICA_MINIMO' => 4, 'INSUMOCLINICA_MAXIMO' => 5, 'INSUMOCLINICA_REORDEN' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('idinsumoclinica' => 0, 'idinsumo' => 1, 'idclinica' => 2, 'insumoclinica_existencia' => 3, 'insumoclinica_minimo' => 4, 'insumoclinica_maximo' => 5, 'insumoclinica_reorden' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = InsumoclinicaPeer::getFieldNames($toType);
        $key = isset(InsumoclinicaPeer::$fieldKeys[$fromType][$name]) ? InsumoclinicaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(InsumoclinicaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, InsumoclinicaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return InsumoclinicaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. InsumoclinicaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(InsumoclinicaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(InsumoclinicaPeer::IDINSUMOCLINICA);
            $criteria->addSelectColumn(InsumoclinicaPeer::IDINSUMO);
            $criteria->addSelectColumn(InsumoclinicaPeer::IDCLINICA);
            $criteria->addSelectColumn(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA);
            $criteria->addSelectColumn(InsumoclinicaPeer::INSUMOCLINICA_MINIMO);
            $criteria->addSelectColumn(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO);
            $criteria->addSelectColumn(InsumoclinicaPeer::INSUMOCLINICA_REORDEN);
        } else {
            $criteria->addSelectColumn($alias . '.idinsumoclinica');
            $criteria->addSelectColumn($alias . '.idinsumo');
            $criteria->addSelectColumn($alias . '.idclinica');
            $criteria->addSelectColumn($alias . '.insumoclinica_existencia');
            $criteria->addSelectColumn($alias . '.insumoclinica_minimo');
            $criteria->addSelectColumn($alias . '.insumoclinica_maximo');
            $criteria->addSelectColumn($alias . '.insumoclinica_reorden');
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
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Insumoclinica
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = InsumoclinicaPeer::doSelect($critcopy, $con);
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
        return InsumoclinicaPeer::populateObjects(InsumoclinicaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

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
     * @param Insumoclinica $obj A Insumoclinica object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdinsumoclinica();
            } // if key === null
            InsumoclinicaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Insumoclinica object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Insumoclinica) {
                $key = (string) $value->getIdinsumoclinica();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Insumoclinica object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(InsumoclinicaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Insumoclinica Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(InsumoclinicaPeer::$instances[$key])) {
                return InsumoclinicaPeer::$instances[$key];
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
        foreach (InsumoclinicaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        InsumoclinicaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to insumoclinica
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CompradetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompradetallePeer::clearInstancePool();
        // Invalidate objects in TransferenciadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TransferenciadetallePeer::clearInstancePool();
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
        $cls = InsumoclinicaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = InsumoclinicaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InsumoclinicaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Insumoclinica object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = InsumoclinicaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InsumoclinicaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            InsumoclinicaPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Insumo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInsumo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);

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
     * Selects a collection of Insumoclinica objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Insumoclinica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);
        }

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InsumoclinicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = InsumoclinicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InsumoclinicaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Insumoclinica) to $obj2 (Clinica)
                $obj2->addInsumoclinica($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Insumoclinica objects pre-filled with their Insumo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Insumoclinica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInsumo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);
        }

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;
        InsumoPeer::addSelectColumns($criteria);

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InsumoclinicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = InsumoclinicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InsumoclinicaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = InsumoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = InsumoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = InsumoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    InsumoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Insumoclinica) to $obj2 (Insumo)
                $obj2->addInsumoclinica($obj1);

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
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);

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
     * Selects a collection of Insumoclinica objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Insumoclinica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);
        }

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol2 = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        InsumoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + InsumoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InsumoclinicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = InsumoclinicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InsumoclinicaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Insumoclinica) to the collection in $obj2 (Clinica)
                $obj2->addInsumoclinica($obj1);
            } // if joined row not null

            // Add objects for joined Insumo rows

            $key3 = InsumoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = InsumoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = InsumoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    InsumoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Insumoclinica) to the collection in $obj3 (Insumo)
                $obj3->addInsumoclinica($obj1);
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
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Insumo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptInsumo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InsumoclinicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Selects a collection of Insumoclinica objects pre-filled with all related objects except Clinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Insumoclinica objects.
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
            $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);
        }

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol2 = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        InsumoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + InsumoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(InsumoclinicaPeer::IDINSUMO, InsumoPeer::IDINSUMO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InsumoclinicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = InsumoclinicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InsumoclinicaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Insumo rows

                $key2 = InsumoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = InsumoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = InsumoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    InsumoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Insumoclinica) to the collection in $obj2 (Insumo)
                $obj2->addInsumoclinica($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Insumoclinica objects pre-filled with all related objects except Insumo.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Insumoclinica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptInsumo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);
        }

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol2 = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(InsumoclinicaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InsumoclinicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = InsumoclinicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InsumoclinicaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Insumoclinica) to the collection in $obj2 (Clinica)
                $obj2->addInsumoclinica($obj1);

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
        return Propel::getDatabaseMap(InsumoclinicaPeer::DATABASE_NAME)->getTable(InsumoclinicaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseInsumoclinicaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseInsumoclinicaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \InsumoclinicaTableMap());
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
        return InsumoclinicaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Insumoclinica or Criteria object.
     *
     * @param      mixed $values Criteria or Insumoclinica object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Insumoclinica object
        }

        if ($criteria->containsKey(InsumoclinicaPeer::IDINSUMOCLINICA) && $criteria->keyContainsValue(InsumoclinicaPeer::IDINSUMOCLINICA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.InsumoclinicaPeer::IDINSUMOCLINICA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Insumoclinica or Criteria object.
     *
     * @param      mixed $values Criteria or Insumoclinica object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(InsumoclinicaPeer::IDINSUMOCLINICA);
            $value = $criteria->remove(InsumoclinicaPeer::IDINSUMOCLINICA);
            if ($value) {
                $selectCriteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(InsumoclinicaPeer::TABLE_NAME);
            }

        } else { // $values is Insumoclinica object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the insumoclinica table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += InsumoclinicaPeer::doOnDeleteCascade(new Criteria(InsumoclinicaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(InsumoclinicaPeer::TABLE_NAME, $con, InsumoclinicaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InsumoclinicaPeer::clearInstancePool();
            InsumoclinicaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Insumoclinica or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Insumoclinica object or primary key or array of primary keys
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
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Insumoclinica) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);
            $criteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(InsumoclinicaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += InsumoclinicaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                InsumoclinicaPeer::clearInstancePool();
            } elseif ($values instanceof Insumoclinica) { // it's a model object
                InsumoclinicaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    InsumoclinicaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            InsumoclinicaPeer::clearRelatedInstancePool();
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
        $objects = InsumoclinicaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Compradetalle objects
            $criteria = new Criteria(CompradetallePeer::DATABASE_NAME);

            $criteria->add(CompradetallePeer::IDINSUMOCLINICA, $obj->getIdinsumoclinica());
            $affectedRows += CompradetallePeer::doDelete($criteria, $con);

            // delete related Transferenciadetalle objects
            $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);

            $criteria->add(TransferenciadetallePeer::IDINSUMOCLINICA, $obj->getIdinsumoclinica());
            $affectedRows += TransferenciadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Insumoclinica object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Insumoclinica $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(InsumoclinicaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(InsumoclinicaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(InsumoclinicaPeer::DATABASE_NAME, InsumoclinicaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Insumoclinica
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = InsumoclinicaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);
        $criteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, $pk);

        $v = InsumoclinicaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Insumoclinica[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);
            $criteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, $pks, Criteria::IN);
            $objs = InsumoclinicaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseInsumoclinicaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseInsumoclinicaPeer::buildTableMap();

