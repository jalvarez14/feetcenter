<?php


/**
 * Base static class for performing query and update operations on the 'pacienteseguimiento' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BasePacienteseguimientoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'pacienteseguimiento';

    /** the related Propel class for this table */
    const OM_CLASS = 'Pacienteseguimiento';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PacienteseguimientoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idpacienteseguimiento field */
    const IDPACIENTESEGUIMIENTO = 'pacienteseguimiento.idpacienteseguimiento';

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'pacienteseguimiento.idpaciente';

    /** the column name for the idclinica field */
    const IDCLINICA = 'pacienteseguimiento.idclinica';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'pacienteseguimiento.idempleado';

    /** the column name for the idcanalcomunicacion field */
    const IDCANALCOMUNICACION = 'pacienteseguimiento.idcanalcomunicacion';

    /** the column name for the idestatusseguimiento field */
    const IDESTATUSSEGUIMIENTO = 'pacienteseguimiento.idestatusseguimiento';

    /** the column name for the pacienteseguimiento_fechacreacion field */
    const PACIENTESEGUIMIENTO_FECHACREACION = 'pacienteseguimiento.pacienteseguimiento_fechacreacion';

    /** the column name for the pacienteseguimiento_comentario field */
    const PACIENTESEGUIMIENTO_COMENTARIO = 'pacienteseguimiento.pacienteseguimiento_comentario';

    /** the column name for the pacienteseguimiento_fecha field */
    const PACIENTESEGUIMIENTO_FECHA = 'pacienteseguimiento.pacienteseguimiento_fecha';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Pacienteseguimiento objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Pacienteseguimiento[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PacienteseguimientoPeer::$fieldNames[PacienteseguimientoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idpacienteseguimiento', 'Idpaciente', 'Idclinica', 'Idempleado', 'Idcanalcomunicacion', 'Idestatusseguimiento', 'PacienteseguimientoFechacreacion', 'PacienteseguimientoComentario', 'PacienteseguimientoFecha', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpacienteseguimiento', 'idpaciente', 'idclinica', 'idempleado', 'idcanalcomunicacion', 'idestatusseguimiento', 'pacienteseguimientoFechacreacion', 'pacienteseguimientoComentario', 'pacienteseguimientoFecha', ),
        BasePeer::TYPE_COLNAME => array (PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, PacienteseguimientoPeer::IDPACIENTE, PacienteseguimientoPeer::IDCLINICA, PacienteseguimientoPeer::IDEMPLEADO, PacienteseguimientoPeer::IDCANALCOMUNICACION, PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPACIENTESEGUIMIENTO', 'IDPACIENTE', 'IDCLINICA', 'IDEMPLEADO', 'IDCANALCOMUNICACION', 'IDESTATUSSEGUIMIENTO', 'PACIENTESEGUIMIENTO_FECHACREACION', 'PACIENTESEGUIMIENTO_COMENTARIO', 'PACIENTESEGUIMIENTO_FECHA', ),
        BasePeer::TYPE_FIELDNAME => array ('idpacienteseguimiento', 'idpaciente', 'idclinica', 'idempleado', 'idcanalcomunicacion', 'idestatusseguimiento', 'pacienteseguimiento_fechacreacion', 'pacienteseguimiento_comentario', 'pacienteseguimiento_fecha', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PacienteseguimientoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idpacienteseguimiento' => 0, 'Idpaciente' => 1, 'Idclinica' => 2, 'Idempleado' => 3, 'Idcanalcomunicacion' => 4, 'Idestatusseguimiento' => 5, 'PacienteseguimientoFechacreacion' => 6, 'PacienteseguimientoComentario' => 7, 'PacienteseguimientoFecha' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpacienteseguimiento' => 0, 'idpaciente' => 1, 'idclinica' => 2, 'idempleado' => 3, 'idcanalcomunicacion' => 4, 'idestatusseguimiento' => 5, 'pacienteseguimientoFechacreacion' => 6, 'pacienteseguimientoComentario' => 7, 'pacienteseguimientoFecha' => 8, ),
        BasePeer::TYPE_COLNAME => array (PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO => 0, PacienteseguimientoPeer::IDPACIENTE => 1, PacienteseguimientoPeer::IDCLINICA => 2, PacienteseguimientoPeer::IDEMPLEADO => 3, PacienteseguimientoPeer::IDCANALCOMUNICACION => 4, PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO => 5, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION => 6, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO => 7, PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPACIENTESEGUIMIENTO' => 0, 'IDPACIENTE' => 1, 'IDCLINICA' => 2, 'IDEMPLEADO' => 3, 'IDCANALCOMUNICACION' => 4, 'IDESTATUSSEGUIMIENTO' => 5, 'PACIENTESEGUIMIENTO_FECHACREACION' => 6, 'PACIENTESEGUIMIENTO_COMENTARIO' => 7, 'PACIENTESEGUIMIENTO_FECHA' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idpacienteseguimiento' => 0, 'idpaciente' => 1, 'idclinica' => 2, 'idempleado' => 3, 'idcanalcomunicacion' => 4, 'idestatusseguimiento' => 5, 'pacienteseguimiento_fechacreacion' => 6, 'pacienteseguimiento_comentario' => 7, 'pacienteseguimiento_fecha' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = PacienteseguimientoPeer::getFieldNames($toType);
        $key = isset(PacienteseguimientoPeer::$fieldKeys[$fromType][$name]) ? PacienteseguimientoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PacienteseguimientoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PacienteseguimientoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PacienteseguimientoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PacienteseguimientoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PacienteseguimientoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO);
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDPACIENTE);
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDCLINICA);
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDCANALCOMUNICACION);
            $criteria->addSelectColumn(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO);
            $criteria->addSelectColumn(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION);
            $criteria->addSelectColumn(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO);
            $criteria->addSelectColumn(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA);
        } else {
            $criteria->addSelectColumn($alias . '.idpacienteseguimiento');
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.idclinica');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.idcanalcomunicacion');
            $criteria->addSelectColumn($alias . '.idestatusseguimiento');
            $criteria->addSelectColumn($alias . '.pacienteseguimiento_fechacreacion');
            $criteria->addSelectColumn($alias . '.pacienteseguimiento_comentario');
            $criteria->addSelectColumn($alias . '.pacienteseguimiento_fecha');
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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Pacienteseguimiento
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PacienteseguimientoPeer::doSelect($critcopy, $con);
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
        return PacienteseguimientoPeer::populateObjects(PacienteseguimientoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

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
     * @param Pacienteseguimiento $obj A Pacienteseguimiento object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpacienteseguimiento();
            } // if key === null
            PacienteseguimientoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Pacienteseguimiento object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Pacienteseguimiento) {
                $key = (string) $value->getIdpacienteseguimiento();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Pacienteseguimiento object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PacienteseguimientoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Pacienteseguimiento Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PacienteseguimientoPeer::$instances[$key])) {
                return PacienteseguimientoPeer::$instances[$key];
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
        foreach (PacienteseguimientoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PacienteseguimientoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pacienteseguimiento
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
        $cls = PacienteseguimientoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PacienteseguimientoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PacienteseguimientoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Pacienteseguimiento object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PacienteseguimientoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PacienteseguimientoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PacienteseguimientoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Canalcomunicacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCanalcomunicacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Estatusseguimiento table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEstatusseguimiento(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Paciente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPaciente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Pacienteseguimiento objects pre-filled with their Canalcomunicacion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCanalcomunicacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        CanalcomunicacionPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Pacienteseguimiento) to $obj2 (Clinica)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Pacienteseguimiento) to $obj2 (Empleado)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with their Estatusseguimiento objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEstatusseguimiento(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        EstatusseguimientoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EstatusseguimientoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EstatusseguimientoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EstatusseguimientoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to $obj2 (Estatusseguimiento)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with their Paciente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;
        PacientePeer::addSelectColumns($criteria);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PacientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PacientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PacientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to $obj2 (Paciente)
                $obj2->addPacienteseguimiento($obj1);

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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        CanalcomunicacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EstatusseguimientoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Canalcomunicacion rows

            $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);
            } // if joined row not null

            // Add objects for joined Clinica rows

            $key3 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ClinicaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ClinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClinicaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Clinica)
                $obj3->addPacienteseguimiento($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key4 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = EmpleadoPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpleadoPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Empleado)
                $obj4->addPacienteseguimiento($obj1);
            } // if joined row not null

            // Add objects for joined Estatusseguimiento rows

            $key5 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = EstatusseguimientoPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = EstatusseguimientoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EstatusseguimientoPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Estatusseguimiento)
                $obj5->addPacienteseguimiento($obj1);
            } // if joined row not null

            // Add objects for joined Paciente rows

            $key6 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = PacientePeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = PacientePeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PacientePeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj6 (Paciente)
                $obj6->addPacienteseguimiento($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Canalcomunicacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCanalcomunicacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Estatusseguimiento table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEstatusseguimiento(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Paciente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPaciente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PacienteseguimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

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
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects except Canalcomunicacion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCanalcomunicacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EstatusseguimientoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Clinica)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Empleado)
                $obj3->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Estatusseguimiento rows

                $key4 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EstatusseguimientoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EstatusseguimientoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EstatusseguimientoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Estatusseguimiento)
                $obj4->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key5 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PacientePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PacientePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PacientePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Paciente)
                $obj5->addPacienteseguimiento($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects except Clinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
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
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        CanalcomunicacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EstatusseguimientoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Canalcomunicacion rows

                $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Empleado)
                $obj3->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Estatusseguimiento rows

                $key4 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EstatusseguimientoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EstatusseguimientoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EstatusseguimientoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Estatusseguimiento)
                $obj4->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key5 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PacientePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PacientePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PacientePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Paciente)
                $obj5->addPacienteseguimiento($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
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
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        CanalcomunicacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EstatusseguimientoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Canalcomunicacion rows

                $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Clinica rows

                $key3 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Clinica)
                $obj3->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Estatusseguimiento rows

                $key4 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EstatusseguimientoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EstatusseguimientoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EstatusseguimientoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Estatusseguimiento)
                $obj4->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key5 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PacientePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PacientePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PacientePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Paciente)
                $obj5->addPacienteseguimiento($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects except Estatusseguimiento.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEstatusseguimiento(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        CanalcomunicacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Canalcomunicacion rows

                $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Clinica rows

                $key3 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Clinica)
                $obj3->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key4 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpleadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpleadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Empleado)
                $obj4->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key5 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PacientePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PacientePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PacientePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Paciente)
                $obj5->addPacienteseguimiento($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pacienteseguimiento objects pre-filled with all related objects except Paciente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pacienteseguimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);
        }

        PacienteseguimientoPeer::addSelectColumns($criteria);
        $startcol2 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS;

        CanalcomunicacionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EstatusseguimientoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PacienteseguimientoPeer::IDCANALCOMUNICACION, CanalcomunicacionPeer::IDCANALCOMUNICACION, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(PacienteseguimientoPeer::IDESTATUSSEGUIMIENTO, EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PacienteseguimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PacienteseguimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PacienteseguimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PacienteseguimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Canalcomunicacion rows

                $key2 = CanalcomunicacionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CanalcomunicacionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CanalcomunicacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CanalcomunicacionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj2 (Canalcomunicacion)
                $obj2->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Clinica rows

                $key3 = ClinicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClinicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClinicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClinicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj3 (Clinica)
                $obj3->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key4 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpleadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpleadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj4 (Empleado)
                $obj4->addPacienteseguimiento($obj1);

            } // if joined row is not null

                // Add objects for joined Estatusseguimiento rows

                $key5 = EstatusseguimientoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EstatusseguimientoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EstatusseguimientoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EstatusseguimientoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Pacienteseguimiento) to the collection in $obj5 (Estatusseguimiento)
                $obj5->addPacienteseguimiento($obj1);

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
        return Propel::getDatabaseMap(PacienteseguimientoPeer::DATABASE_NAME)->getTable(PacienteseguimientoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePacienteseguimientoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePacienteseguimientoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PacienteseguimientoTableMap());
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
        return PacienteseguimientoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Pacienteseguimiento or Criteria object.
     *
     * @param      mixed $values Criteria or Pacienteseguimiento object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Pacienteseguimiento object
        }

        if ($criteria->containsKey(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO) && $criteria->keyContainsValue(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Pacienteseguimiento or Criteria object.
     *
     * @param      mixed $values Criteria or Pacienteseguimiento object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO);
            $value = $criteria->remove(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO);
            if ($value) {
                $selectCriteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PacienteseguimientoPeer::TABLE_NAME);
            }

        } else { // $values is Pacienteseguimiento object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pacienteseguimiento table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PacienteseguimientoPeer::TABLE_NAME, $con, PacienteseguimientoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PacienteseguimientoPeer::clearInstancePool();
            PacienteseguimientoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Pacienteseguimiento or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Pacienteseguimiento object or primary key or array of primary keys
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
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PacienteseguimientoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Pacienteseguimiento) { // it's a model object
            // invalidate the cache for this single object
            PacienteseguimientoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);
            $criteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PacienteseguimientoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PacienteseguimientoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PacienteseguimientoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Pacienteseguimiento object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Pacienteseguimiento $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PacienteseguimientoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PacienteseguimientoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PacienteseguimientoPeer::DATABASE_NAME, PacienteseguimientoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Pacienteseguimiento
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PacienteseguimientoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);
        $criteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $pk);

        $v = PacienteseguimientoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Pacienteseguimiento[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);
            $criteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $pks, Criteria::IN);
            $objs = PacienteseguimientoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePacienteseguimientoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePacienteseguimientoPeer::buildTableMap();

