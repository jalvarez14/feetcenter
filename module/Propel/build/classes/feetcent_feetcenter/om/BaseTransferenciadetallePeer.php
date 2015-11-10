<?php


/**
 * Base static class for performing query and update operations on the 'transferenciadetalle' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferenciadetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'transferenciadetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Transferenciadetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TransferenciadetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idtransferenciadetalle field */
    const IDTRANSFERENCIADETALLE = 'transferenciadetalle.idtransferenciadetalle';

    /** the column name for the idtransferencia field */
    const IDTRANSFERENCIA = 'transferenciadetalle.idtransferencia';

    /** the column name for the idproductoclinica field */
    const IDPRODUCTOCLINICA = 'transferenciadetalle.idproductoclinica';

    /** the column name for the idinsumoclinica field */
    const IDINSUMOCLINICA = 'transferenciadetalle.idinsumoclinica';

    /** the column name for the transferenciadetalle_cantidad field */
    const TRANSFERENCIADETALLE_CANTIDAD = 'transferenciadetalle.transferenciadetalle_cantidad';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Transferenciadetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Transferenciadetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TransferenciadetallePeer::$fieldNames[TransferenciadetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idtransferenciadetalle', 'Idtransferencia', 'Idproductoclinica', 'Idinsumoclinica', 'TransferenciadetalleCantidad', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtransferenciadetalle', 'idtransferencia', 'idproductoclinica', 'idinsumoclinica', 'transferenciadetalleCantidad', ),
        BasePeer::TYPE_COLNAME => array (TransferenciadetallePeer::IDTRANSFERENCIADETALLE, TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciadetallePeer::IDPRODUCTOCLINICA, TransferenciadetallePeer::IDINSUMOCLINICA, TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRANSFERENCIADETALLE', 'IDTRANSFERENCIA', 'IDPRODUCTOCLINICA', 'IDINSUMOCLINICA', 'TRANSFERENCIADETALLE_CANTIDAD', ),
        BasePeer::TYPE_FIELDNAME => array ('idtransferenciadetalle', 'idtransferencia', 'idproductoclinica', 'idinsumoclinica', 'transferenciadetalle_cantidad', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TransferenciadetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idtransferenciadetalle' => 0, 'Idtransferencia' => 1, 'Idproductoclinica' => 2, 'Idinsumoclinica' => 3, 'TransferenciadetalleCantidad' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtransferenciadetalle' => 0, 'idtransferencia' => 1, 'idproductoclinica' => 2, 'idinsumoclinica' => 3, 'transferenciadetalleCantidad' => 4, ),
        BasePeer::TYPE_COLNAME => array (TransferenciadetallePeer::IDTRANSFERENCIADETALLE => 0, TransferenciadetallePeer::IDTRANSFERENCIA => 1, TransferenciadetallePeer::IDPRODUCTOCLINICA => 2, TransferenciadetallePeer::IDINSUMOCLINICA => 3, TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRANSFERENCIADETALLE' => 0, 'IDTRANSFERENCIA' => 1, 'IDPRODUCTOCLINICA' => 2, 'IDINSUMOCLINICA' => 3, 'TRANSFERENCIADETALLE_CANTIDAD' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idtransferenciadetalle' => 0, 'idtransferencia' => 1, 'idproductoclinica' => 2, 'idinsumoclinica' => 3, 'transferenciadetalle_cantidad' => 4, ),
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
        $toNames = TransferenciadetallePeer::getFieldNames($toType);
        $key = isset(TransferenciadetallePeer::$fieldKeys[$fromType][$name]) ? TransferenciadetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TransferenciadetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TransferenciadetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TransferenciadetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TransferenciadetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TransferenciadetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TransferenciadetallePeer::IDTRANSFERENCIADETALLE);
            $criteria->addSelectColumn(TransferenciadetallePeer::IDTRANSFERENCIA);
            $criteria->addSelectColumn(TransferenciadetallePeer::IDPRODUCTOCLINICA);
            $criteria->addSelectColumn(TransferenciadetallePeer::IDINSUMOCLINICA);
            $criteria->addSelectColumn(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD);
        } else {
            $criteria->addSelectColumn($alias . '.idtransferenciadetalle');
            $criteria->addSelectColumn($alias . '.idtransferencia');
            $criteria->addSelectColumn($alias . '.idproductoclinica');
            $criteria->addSelectColumn($alias . '.idinsumoclinica');
            $criteria->addSelectColumn($alias . '.transferenciadetalle_cantidad');
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
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Transferenciadetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TransferenciadetallePeer::doSelect($critcopy, $con);
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
        return TransferenciadetallePeer::populateObjects(TransferenciadetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

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
     * @param Transferenciadetalle $obj A Transferenciadetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdtransferenciadetalle();
            } // if key === null
            TransferenciadetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Transferenciadetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Transferenciadetalle) {
                $key = (string) $value->getIdtransferenciadetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Transferenciadetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TransferenciadetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Transferenciadetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TransferenciadetallePeer::$instances[$key])) {
                return TransferenciadetallePeer::$instances[$key];
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
        foreach (TransferenciadetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TransferenciadetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to transferenciadetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        $cls = TransferenciadetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TransferenciadetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TransferenciadetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Transferenciadetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TransferenciadetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TransferenciadetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TransferenciadetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Insumoclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInsumoclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Productoclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProductoclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Transferencia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTransferencia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

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
     * Selects a collection of Transferenciadetalle objects pre-filled with their Insumoclinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInsumoclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;
        InsumoclinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = InsumoclinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = InsumoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    InsumoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to $obj2 (Insumoclinica)
                $obj2->addTransferenciadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferenciadetalle objects pre-filled with their Productoclinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductoclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoclinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProductoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProductoclinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProductoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProductoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to $obj2 (Productoclinica)
                $obj2->addTransferenciadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferenciadetalle objects pre-filled with their Transferencia objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTransferencia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;
        TransferenciaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TransferenciaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TransferenciaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TransferenciaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to $obj2 (Transferencia)
                $obj2->addTransferenciadetalle($obj1);

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
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

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
     * Selects a collection of Transferenciadetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol2 = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Insumoclinica rows

            $key2 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = InsumoclinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = InsumoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    InsumoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj2 (Insumoclinica)
                $obj2->addTransferenciadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Productoclinica rows

            $key3 = ProductoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProductoclinicaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProductoclinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoclinicaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj3 (Productoclinica)
                $obj3->addTransferenciadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Transferencia rows

            $key4 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = TransferenciaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = TransferenciaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TransferenciaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj4 (Transferencia)
                $obj4->addTransferenciadetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Insumoclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptInsumoclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Productoclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProductoclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Transferencia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTransferencia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

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
     * Selects a collection of Transferenciadetalle objects pre-filled with all related objects except Insumoclinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptInsumoclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol2 = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Productoclinica rows

                $key2 = ProductoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProductoclinicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProductoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProductoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj2 (Productoclinica)
                $obj2->addTransferenciadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Transferencia rows

                $key3 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TransferenciaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = TransferenciaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TransferenciaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj3 (Transferencia)
                $obj3->addTransferenciadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferenciadetalle objects pre-filled with all related objects except Productoclinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProductoclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol2 = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDTRANSFERENCIA, TransferenciaPeer::IDTRANSFERENCIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Insumoclinica rows

                $key2 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = InsumoclinicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = InsumoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    InsumoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj2 (Insumoclinica)
                $obj2->addTransferenciadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Transferencia rows

                $key3 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TransferenciaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = TransferenciaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TransferenciaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj3 (Transferencia)
                $obj3->addTransferenciadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferenciadetalle objects pre-filled with all related objects except Transferencia.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferenciadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTransferencia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);
        }

        TransferenciadetallePeer::addSelectColumns($criteria);
        $startcol2 = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS;

        InsumoclinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + InsumoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciadetallePeer::IDINSUMOCLINICA, InsumoclinicaPeer::IDINSUMOCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Insumoclinica rows

                $key2 = InsumoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = InsumoclinicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = InsumoclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    InsumoclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj2 (Insumoclinica)
                $obj2->addTransferenciadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Productoclinica rows

                $key3 = ProductoclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductoclinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductoclinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoclinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Transferenciadetalle) to the collection in $obj3 (Productoclinica)
                $obj3->addTransferenciadetalle($obj1);

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
        return Propel::getDatabaseMap(TransferenciadetallePeer::DATABASE_NAME)->getTable(TransferenciadetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTransferenciadetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTransferenciadetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TransferenciadetalleTableMap());
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
        return TransferenciadetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Transferenciadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Transferenciadetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Transferenciadetalle object
        }

        if ($criteria->containsKey(TransferenciadetallePeer::IDTRANSFERENCIADETALLE) && $criteria->keyContainsValue(TransferenciadetallePeer::IDTRANSFERENCIADETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TransferenciadetallePeer::IDTRANSFERENCIADETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Transferenciadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Transferenciadetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TransferenciadetallePeer::IDTRANSFERENCIADETALLE);
            $value = $criteria->remove(TransferenciadetallePeer::IDTRANSFERENCIADETALLE);
            if ($value) {
                $selectCriteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TransferenciadetallePeer::TABLE_NAME);
            }

        } else { // $values is Transferenciadetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the transferenciadetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TransferenciadetallePeer::TABLE_NAME, $con, TransferenciadetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TransferenciadetallePeer::clearInstancePool();
            TransferenciadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Transferenciadetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Transferenciadetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TransferenciadetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Transferenciadetalle) { // it's a model object
            // invalidate the cache for this single object
            TransferenciadetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);
            $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TransferenciadetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TransferenciadetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TransferenciadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Transferenciadetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Transferenciadetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TransferenciadetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TransferenciadetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(TransferenciadetallePeer::DATABASE_NAME, TransferenciadetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Transferenciadetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TransferenciadetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);
        $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $pk);

        $v = TransferenciadetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Transferenciadetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);
            $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $pks, Criteria::IN);
            $objs = TransferenciadetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTransferenciadetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTransferenciadetallePeer::buildTableMap();

