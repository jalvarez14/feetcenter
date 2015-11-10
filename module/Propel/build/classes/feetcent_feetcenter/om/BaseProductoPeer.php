<?php


/**
 * Base static class for performing query and update operations on the 'producto' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProductoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'producto';

    /** the related Propel class for this table */
    const OM_CLASS = 'Producto';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProductoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'producto.idproducto';

    /** the column name for the producto_nombre field */
    const PRODUCTO_NOMBRE = 'producto.producto_nombre';

    /** the column name for the producto_descripcion field */
    const PRODUCTO_DESCRIPCION = 'producto.producto_descripcion';

    /** the column name for the producto_costo field */
    const PRODUCTO_COSTO = 'producto.producto_costo';

    /** the column name for the producto_precio field */
    const PRODUCTO_PRECIO = 'producto.producto_precio';

    /** the column name for the producto_generaingreso field */
    const PRODUCTO_GENERAINGRESO = 'producto.producto_generaingreso';

    /** the column name for the producto_generacomision field */
    const PRODUCTO_GENERACOMISION = 'producto.producto_generacomision';

    /** the column name for the producto_tipocomision field */
    const PRODUCTO_TIPOCOMISION = 'producto.producto_tipocomision';

    /** the column name for the producto_comision field */
    const PRODUCTO_COMISION = 'producto.producto_comision';

    /** the column name for the producto_fotografia field */
    const PRODUCTO_FOTOGRAFIA = 'producto.producto_fotografia';

    /** The enumerated values for the producto_tipocomision field */
    const PRODUCTO_TIPOCOMISION_CANTIDAD = 'cantidad';
    const PRODUCTO_TIPOCOMISION_PORCENTAJE = 'porcentaje';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Producto objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Producto[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[ProductoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto', 'ProductoNombre', 'ProductoDescripcion', 'ProductoCosto', 'ProductoPrecio', 'ProductoGeneraingreso', 'ProductoGeneracomision', 'ProductoTipocomision', 'ProductoComision', 'ProductoFotografia', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto', 'productoNombre', 'productoDescripcion', 'productoCosto', 'productoPrecio', 'productoGeneraingreso', 'productoGeneracomision', 'productoTipocomision', 'productoComision', 'productoFotografia', ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO, ProductoPeer::PRODUCTO_NOMBRE, ProductoPeer::PRODUCTO_DESCRIPCION, ProductoPeer::PRODUCTO_COSTO, ProductoPeer::PRODUCTO_PRECIO, ProductoPeer::PRODUCTO_GENERAINGRESO, ProductoPeer::PRODUCTO_GENERACOMISION, ProductoPeer::PRODUCTO_TIPOCOMISION, ProductoPeer::PRODUCTO_COMISION, ProductoPeer::PRODUCTO_FOTOGRAFIA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO', 'PRODUCTO_NOMBRE', 'PRODUCTO_DESCRIPCION', 'PRODUCTO_COSTO', 'PRODUCTO_PRECIO', 'PRODUCTO_GENERAINGRESO', 'PRODUCTO_GENERACOMISION', 'PRODUCTO_TIPOCOMISION', 'PRODUCTO_COMISION', 'PRODUCTO_FOTOGRAFIA', ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto', 'producto_nombre', 'producto_descripcion', 'producto_costo', 'producto_precio', 'producto_generaingreso', 'producto_generacomision', 'producto_tipocomision', 'producto_comision', 'producto_fotografia', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto' => 0, 'ProductoNombre' => 1, 'ProductoDescripcion' => 2, 'ProductoCosto' => 3, 'ProductoPrecio' => 4, 'ProductoGeneraingreso' => 5, 'ProductoGeneracomision' => 6, 'ProductoTipocomision' => 7, 'ProductoComision' => 8, 'ProductoFotografia' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto' => 0, 'productoNombre' => 1, 'productoDescripcion' => 2, 'productoCosto' => 3, 'productoPrecio' => 4, 'productoGeneraingreso' => 5, 'productoGeneracomision' => 6, 'productoTipocomision' => 7, 'productoComision' => 8, 'productoFotografia' => 9, ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO => 0, ProductoPeer::PRODUCTO_NOMBRE => 1, ProductoPeer::PRODUCTO_DESCRIPCION => 2, ProductoPeer::PRODUCTO_COSTO => 3, ProductoPeer::PRODUCTO_PRECIO => 4, ProductoPeer::PRODUCTO_GENERAINGRESO => 5, ProductoPeer::PRODUCTO_GENERACOMISION => 6, ProductoPeer::PRODUCTO_TIPOCOMISION => 7, ProductoPeer::PRODUCTO_COMISION => 8, ProductoPeer::PRODUCTO_FOTOGRAFIA => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO' => 0, 'PRODUCTO_NOMBRE' => 1, 'PRODUCTO_DESCRIPCION' => 2, 'PRODUCTO_COSTO' => 3, 'PRODUCTO_PRECIO' => 4, 'PRODUCTO_GENERAINGRESO' => 5, 'PRODUCTO_GENERACOMISION' => 6, 'PRODUCTO_TIPOCOMISION' => 7, 'PRODUCTO_COMISION' => 8, 'PRODUCTO_FOTOGRAFIA' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto' => 0, 'producto_nombre' => 1, 'producto_descripcion' => 2, 'producto_costo' => 3, 'producto_precio' => 4, 'producto_generaingreso' => 5, 'producto_generacomision' => 6, 'producto_tipocomision' => 7, 'producto_comision' => 8, 'producto_fotografia' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProductoPeer::PRODUCTO_TIPOCOMISION => array(
            ProductoPeer::PRODUCTO_TIPOCOMISION_CANTIDAD,
            ProductoPeer::PRODUCTO_TIPOCOMISION_PORCENTAJE,
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
        $toNames = ProductoPeer::getFieldNames($toType);
        $key = isset(ProductoPeer::$fieldKeys[$fromType][$name]) ? ProductoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProductoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProductoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProductoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProductoPeer::$enumValueSets;
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
        $valueSets = ProductoPeer::getValueSets();

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
        $values = ProductoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ProductoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProductoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProductoPeer::IDPRODUCTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_NOMBRE);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_DESCRIPCION);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_COSTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_PRECIO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_GENERAINGRESO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_GENERACOMISION);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_TIPOCOMISION);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_COMISION);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_FOTOGRAFIA);
        } else {
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.producto_nombre');
            $criteria->addSelectColumn($alias . '.producto_descripcion');
            $criteria->addSelectColumn($alias . '.producto_costo');
            $criteria->addSelectColumn($alias . '.producto_precio');
            $criteria->addSelectColumn($alias . '.producto_generaingreso');
            $criteria->addSelectColumn($alias . '.producto_generacomision');
            $criteria->addSelectColumn($alias . '.producto_tipocomision');
            $criteria->addSelectColumn($alias . '.producto_comision');
            $criteria->addSelectColumn($alias . '.producto_fotografia');
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
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProductoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Producto
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProductoPeer::doSelect($critcopy, $con);
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
        return ProductoPeer::populateObjects(ProductoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProductoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

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
     * @param Producto $obj A Producto object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproducto();
            } // if key === null
            ProductoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Producto object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Producto) {
                $key = (string) $value->getIdproducto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Producto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProductoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Producto Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProductoPeer::$instances[$key])) {
                return ProductoPeer::$instances[$key];
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
        foreach (ProductoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProductoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to producto
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ProductoclinicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductoclinicaPeer::clearInstancePool();
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
        $cls = ProductoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProductoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Producto object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProductoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProductoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProductoPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME)->getTable(ProductoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProductoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProductoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProductoTableMap());
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
        return ProductoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Producto object
        }

        if ($criteria->containsKey(ProductoPeer::IDPRODUCTO) && $criteria->keyContainsValue(ProductoPeer::IDPRODUCTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProductoPeer::IDPRODUCTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProductoPeer::IDPRODUCTO);
            $value = $criteria->remove(ProductoPeer::IDPRODUCTO);
            if ($value) {
                $selectCriteria->add(ProductoPeer::IDPRODUCTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);
            }

        } else { // $values is Producto object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the producto table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProductoPeer::doOnDeleteCascade(new Criteria(ProductoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProductoPeer::TABLE_NAME, $con, ProductoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProductoPeer::clearInstancePool();
            ProductoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Producto or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Producto object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Producto) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProductoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProductoPeer::clearInstancePool();
            } elseif ($values instanceof Producto) { // it's a model object
                ProductoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProductoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProductoPeer::clearRelatedInstancePool();
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
        $objects = ProductoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Productoclinica objects
            $criteria = new Criteria(ProductoclinicaPeer::DATABASE_NAME);

            $criteria->add(ProductoclinicaPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductoclinicaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Producto object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Producto $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProductoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProductoPeer::DATABASE_NAME, ProductoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Producto
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProductoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $pk);

        $v = ProductoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Producto[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, $pks, Criteria::IN);
            $objs = ProductoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProductoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProductoPeer::buildTableMap();

