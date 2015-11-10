<?php


/**
 * Base static class for performing query and update operations on the 'visitadetalle' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitadetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'visitadetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Visitadetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VisitadetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idvisitadetalle field */
    const IDVISITADETALLE = 'visitadetalle.idvisitadetalle';

    /** the column name for the idvisita field */
    const IDVISITA = 'visitadetalle.idvisita';

    /** the column name for the idproductoclinica field */
    const IDPRODUCTOCLINICA = 'visitadetalle.idproductoclinica';

    /** the column name for the idservicioclinica field */
    const IDSERVICIOCLINICA = 'visitadetalle.idservicioclinica';

    /** the column name for the idmembresia field */
    const IDMEMBRESIA = 'visitadetalle.idmembresia';

    /** the column name for the visitadetalle_cargo field */
    const VISITADETALLE_CARGO = 'visitadetalle.visitadetalle_cargo';

    /** the column name for the visitadetalle_preciounitario field */
    const VISITADETALLE_PRECIOUNITARIO = 'visitadetalle.visitadetalle_preciounitario';

    /** the column name for the visitadetalle_cantidad field */
    const VISITADETALLE_CANTIDAD = 'visitadetalle.visitadetalle_cantidad';

    /** the column name for the visitadetalle_subtotal field */
    const VISITADETALLE_SUBTOTAL = 'visitadetalle.visitadetalle_subtotal';

    /** The enumerated values for the visitadetalle_cargo field */
    const VISITADETALLE_CARGO_PRODUCTO = 'producto';
    const VISITADETALLE_CARGO_SERVICIO = 'servicio';
    const VISITADETALLE_CARGO_MEMBRESIA = 'membresia';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Visitadetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Visitadetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VisitadetallePeer::$fieldNames[VisitadetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idvisitadetalle', 'Idvisita', 'Idproductoclinica', 'Idservicioclinica', 'Idmembresia', 'VisitadetalleCargo', 'VisitadetallePreciounitario', 'VisitadetalleCantidad', 'VisitadetalleSubtotal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idvisitadetalle', 'idvisita', 'idproductoclinica', 'idservicioclinica', 'idmembresia', 'visitadetalleCargo', 'visitadetallePreciounitario', 'visitadetalleCantidad', 'visitadetalleSubtotal', ),
        BasePeer::TYPE_COLNAME => array (VisitadetallePeer::IDVISITADETALLE, VisitadetallePeer::IDVISITA, VisitadetallePeer::IDPRODUCTOCLINICA, VisitadetallePeer::IDSERVICIOCLINICA, VisitadetallePeer::IDMEMBRESIA, VisitadetallePeer::VISITADETALLE_CARGO, VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO, VisitadetallePeer::VISITADETALLE_CANTIDAD, VisitadetallePeer::VISITADETALLE_SUBTOTAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVISITADETALLE', 'IDVISITA', 'IDPRODUCTOCLINICA', 'IDSERVICIOCLINICA', 'IDMEMBRESIA', 'VISITADETALLE_CARGO', 'VISITADETALLE_PRECIOUNITARIO', 'VISITADETALLE_CANTIDAD', 'VISITADETALLE_SUBTOTAL', ),
        BasePeer::TYPE_FIELDNAME => array ('idvisitadetalle', 'idvisita', 'idproductoclinica', 'idservicioclinica', 'idmembresia', 'visitadetalle_cargo', 'visitadetalle_preciounitario', 'visitadetalle_cantidad', 'visitadetalle_subtotal', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VisitadetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idvisitadetalle' => 0, 'Idvisita' => 1, 'Idproductoclinica' => 2, 'Idservicioclinica' => 3, 'Idmembresia' => 4, 'VisitadetalleCargo' => 5, 'VisitadetallePreciounitario' => 6, 'VisitadetalleCantidad' => 7, 'VisitadetalleSubtotal' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idvisitadetalle' => 0, 'idvisita' => 1, 'idproductoclinica' => 2, 'idservicioclinica' => 3, 'idmembresia' => 4, 'visitadetalleCargo' => 5, 'visitadetallePreciounitario' => 6, 'visitadetalleCantidad' => 7, 'visitadetalleSubtotal' => 8, ),
        BasePeer::TYPE_COLNAME => array (VisitadetallePeer::IDVISITADETALLE => 0, VisitadetallePeer::IDVISITA => 1, VisitadetallePeer::IDPRODUCTOCLINICA => 2, VisitadetallePeer::IDSERVICIOCLINICA => 3, VisitadetallePeer::IDMEMBRESIA => 4, VisitadetallePeer::VISITADETALLE_CARGO => 5, VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO => 6, VisitadetallePeer::VISITADETALLE_CANTIDAD => 7, VisitadetallePeer::VISITADETALLE_SUBTOTAL => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVISITADETALLE' => 0, 'IDVISITA' => 1, 'IDPRODUCTOCLINICA' => 2, 'IDSERVICIOCLINICA' => 3, 'IDMEMBRESIA' => 4, 'VISITADETALLE_CARGO' => 5, 'VISITADETALLE_PRECIOUNITARIO' => 6, 'VISITADETALLE_CANTIDAD' => 7, 'VISITADETALLE_SUBTOTAL' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idvisitadetalle' => 0, 'idvisita' => 1, 'idproductoclinica' => 2, 'idservicioclinica' => 3, 'idmembresia' => 4, 'visitadetalle_cargo' => 5, 'visitadetalle_preciounitario' => 6, 'visitadetalle_cantidad' => 7, 'visitadetalle_subtotal' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VisitadetallePeer::VISITADETALLE_CARGO => array(
            VisitadetallePeer::VISITADETALLE_CARGO_PRODUCTO,
            VisitadetallePeer::VISITADETALLE_CARGO_SERVICIO,
            VisitadetallePeer::VISITADETALLE_CARGO_MEMBRESIA,
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
        $toNames = VisitadetallePeer::getFieldNames($toType);
        $key = isset(VisitadetallePeer::$fieldKeys[$fromType][$name]) ? VisitadetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VisitadetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VisitadetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VisitadetallePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VisitadetallePeer::$enumValueSets;
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
        $valueSets = VisitadetallePeer::getValueSets();

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
        $values = VisitadetallePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. VisitadetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VisitadetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VisitadetallePeer::IDVISITADETALLE);
            $criteria->addSelectColumn(VisitadetallePeer::IDVISITA);
            $criteria->addSelectColumn(VisitadetallePeer::IDPRODUCTOCLINICA);
            $criteria->addSelectColumn(VisitadetallePeer::IDSERVICIOCLINICA);
            $criteria->addSelectColumn(VisitadetallePeer::IDMEMBRESIA);
            $criteria->addSelectColumn(VisitadetallePeer::VISITADETALLE_CARGO);
            $criteria->addSelectColumn(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO);
            $criteria->addSelectColumn(VisitadetallePeer::VISITADETALLE_CANTIDAD);
            $criteria->addSelectColumn(VisitadetallePeer::VISITADETALLE_SUBTOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.idvisitadetalle');
            $criteria->addSelectColumn($alias . '.idvisita');
            $criteria->addSelectColumn($alias . '.idproductoclinica');
            $criteria->addSelectColumn($alias . '.idservicioclinica');
            $criteria->addSelectColumn($alias . '.idmembresia');
            $criteria->addSelectColumn($alias . '.visitadetalle_cargo');
            $criteria->addSelectColumn($alias . '.visitadetalle_preciounitario');
            $criteria->addSelectColumn($alias . '.visitadetalle_cantidad');
            $criteria->addSelectColumn($alias . '.visitadetalle_subtotal');
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
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Visitadetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VisitadetallePeer::doSelect($critcopy, $con);
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
        return VisitadetallePeer::populateObjects(VisitadetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VisitadetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

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
     * @param Visitadetalle $obj A Visitadetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdvisitadetalle();
            } // if key === null
            VisitadetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Visitadetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Visitadetalle) {
                $key = (string) $value->getIdvisitadetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Visitadetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VisitadetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Visitadetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VisitadetallePeer::$instances[$key])) {
                return VisitadetallePeer::$instances[$key];
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
        foreach (VisitadetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VisitadetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to visitadetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in PacientemembresiadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PacientemembresiadetallePeer::clearInstancePool();
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
        $cls = VisitadetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VisitadetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VisitadetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Visitadetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VisitadetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VisitadetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VisitadetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VisitadetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VisitadetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Membresia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMembresia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Servicioclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinServicioclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Visita table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVisita(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

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
     * Selects a collection of Visitadetalle objects pre-filled with their Membresia objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMembresia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol = VisitadetallePeer::NUM_HYDRATE_COLUMNS;
        MembresiaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = MembresiaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = MembresiaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MembresiaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    MembresiaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Visitadetalle) to $obj2 (Membresia)
                $obj2->addVisitadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with their Productoclinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductoclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol = VisitadetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoclinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visitadetalle) to $obj2 (Productoclinica)
                $obj2->addVisitadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with their Servicioclinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinServicioclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol = VisitadetallePeer::NUM_HYDRATE_COLUMNS;
        ServicioclinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ServicioclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ServicioclinicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ServicioclinicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ServicioclinicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Visitadetalle) to $obj2 (Servicioclinica)
                $obj2->addVisitadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with their Visita objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVisita(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol = VisitadetallePeer::NUM_HYDRATE_COLUMNS;
        VisitaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = VisitaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VisitaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    VisitaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Visitadetalle) to $obj2 (Visita)
                $obj2->addVisitadetalle($obj1);

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
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

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
     * Selects a collection of Visitadetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol2 = VisitadetallePeer::NUM_HYDRATE_COLUMNS;

        MembresiaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MembresiaPeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ServicioclinicaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ServicioclinicaPeer::NUM_HYDRATE_COLUMNS;

        VisitaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + VisitaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Membresia rows

            $key2 = MembresiaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = MembresiaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MembresiaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MembresiaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj2 (Membresia)
                $obj2->addVisitadetalle($obj1);
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

                // Add the $obj1 (Visitadetalle) to the collection in $obj3 (Productoclinica)
                $obj3->addVisitadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Servicioclinica rows

            $key4 = ServicioclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ServicioclinicaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ServicioclinicaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ServicioclinicaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj4 (Servicioclinica)
                $obj4->addVisitadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Visita rows

            $key5 = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = VisitaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = VisitaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    VisitaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj5 (Visita)
                $obj5->addVisitadetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Membresia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptMembresia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Servicioclinica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptServicioclinica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Visita table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVisita(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

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
     * Selects a collection of Visitadetalle objects pre-filled with all related objects except Membresia.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptMembresia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol2 = VisitadetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ServicioclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioclinicaPeer::NUM_HYDRATE_COLUMNS;

        VisitaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VisitaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visitadetalle) to the collection in $obj2 (Productoclinica)
                $obj2->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Servicioclinica rows

                $key3 = ServicioclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ServicioclinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ServicioclinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ServicioclinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj3 (Servicioclinica)
                $obj3->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Visita rows

                $key4 = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VisitaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VisitaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VisitaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj4 (Visita)
                $obj4->addVisitadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with all related objects except Productoclinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
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
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol2 = VisitadetallePeer::NUM_HYDRATE_COLUMNS;

        MembresiaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MembresiaPeer::NUM_HYDRATE_COLUMNS;

        ServicioclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioclinicaPeer::NUM_HYDRATE_COLUMNS;

        VisitaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VisitaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Membresia rows

                $key2 = MembresiaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MembresiaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MembresiaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MembresiaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj2 (Membresia)
                $obj2->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Servicioclinica rows

                $key3 = ServicioclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ServicioclinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ServicioclinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ServicioclinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj3 (Servicioclinica)
                $obj3->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Visita rows

                $key4 = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VisitaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VisitaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VisitaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj4 (Visita)
                $obj4->addVisitadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with all related objects except Servicioclinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptServicioclinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol2 = VisitadetallePeer::NUM_HYDRATE_COLUMNS;

        MembresiaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MembresiaPeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        VisitaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VisitaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDVISITA, VisitaPeer::IDVISITA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Membresia rows

                $key2 = MembresiaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MembresiaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MembresiaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MembresiaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj2 (Membresia)
                $obj2->addVisitadetalle($obj1);

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

                // Add the $obj1 (Visitadetalle) to the collection in $obj3 (Productoclinica)
                $obj3->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Visita rows

                $key4 = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VisitaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VisitaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VisitaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj4 (Visita)
                $obj4->addVisitadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visitadetalle objects pre-filled with all related objects except Visita.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visitadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVisita(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);
        }

        VisitadetallePeer::addSelectColumns($criteria);
        $startcol2 = VisitadetallePeer::NUM_HYDRATE_COLUMNS;

        MembresiaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MembresiaPeer::NUM_HYDRATE_COLUMNS;

        ProductoclinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoclinicaPeer::NUM_HYDRATE_COLUMNS;

        ServicioclinicaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ServicioclinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitadetallePeer::IDMEMBRESIA, MembresiaPeer::IDMEMBRESIA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDPRODUCTOCLINICA, ProductoclinicaPeer::IDPRODUCTOCLINICA, $join_behavior);

        $criteria->addJoin(VisitadetallePeer::IDSERVICIOCLINICA, ServicioclinicaPeer::IDSERVICIOCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Membresia rows

                $key2 = MembresiaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MembresiaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MembresiaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MembresiaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj2 (Membresia)
                $obj2->addVisitadetalle($obj1);

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

                // Add the $obj1 (Visitadetalle) to the collection in $obj3 (Productoclinica)
                $obj3->addVisitadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Servicioclinica rows

                $key4 = ServicioclinicaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ServicioclinicaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ServicioclinicaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ServicioclinicaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Visitadetalle) to the collection in $obj4 (Servicioclinica)
                $obj4->addVisitadetalle($obj1);

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
        return Propel::getDatabaseMap(VisitadetallePeer::DATABASE_NAME)->getTable(VisitadetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVisitadetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVisitadetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VisitadetalleTableMap());
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
        return VisitadetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Visitadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Visitadetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Visitadetalle object
        }

        if ($criteria->containsKey(VisitadetallePeer::IDVISITADETALLE) && $criteria->keyContainsValue(VisitadetallePeer::IDVISITADETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VisitadetallePeer::IDVISITADETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Visitadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Visitadetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VisitadetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VisitadetallePeer::IDVISITADETALLE);
            $value = $criteria->remove(VisitadetallePeer::IDVISITADETALLE);
            if ($value) {
                $selectCriteria->add(VisitadetallePeer::IDVISITADETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VisitadetallePeer::TABLE_NAME);
            }

        } else { // $values is Visitadetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the visitadetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VisitadetallePeer::doOnDeleteCascade(new Criteria(VisitadetallePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VisitadetallePeer::TABLE_NAME, $con, VisitadetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VisitadetallePeer::clearInstancePool();
            VisitadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Visitadetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Visitadetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Visitadetalle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);
            $criteria->add(VisitadetallePeer::IDVISITADETALLE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VisitadetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VisitadetallePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VisitadetallePeer::clearInstancePool();
            } elseif ($values instanceof Visitadetalle) { // it's a model object
                VisitadetallePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VisitadetallePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VisitadetallePeer::clearRelatedInstancePool();
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
        $objects = VisitadetallePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Pacientemembresiadetalle objects
            $criteria = new Criteria(PacientemembresiadetallePeer::DATABASE_NAME);

            $criteria->add(PacientemembresiadetallePeer::IDVISITADETALLE, $obj->getIdvisitadetalle());
            $affectedRows += PacientemembresiadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Visitadetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Visitadetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VisitadetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VisitadetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(VisitadetallePeer::DATABASE_NAME, VisitadetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Visitadetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VisitadetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);
        $criteria->add(VisitadetallePeer::IDVISITADETALLE, $pk);

        $v = VisitadetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Visitadetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);
            $criteria->add(VisitadetallePeer::IDVISITADETALLE, $pks, Criteria::IN);
            $objs = VisitadetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVisitadetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVisitadetallePeer::buildTableMap();

