<?php


/**
 * Base static class for performing query and update operations on the 'transferencia' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferenciaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'transferencia';

    /** the related Propel class for this table */
    const OM_CLASS = 'Transferencia';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TransferenciaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the idtransferencia field */
    const IDTRANSFERENCIA = 'transferencia.idtransferencia';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'transferencia.idempleado';

    /** the column name for the idempleadoreceptor field */
    const IDEMPLEADORECEPTOR = 'transferencia.idempleadoreceptor';

    /** the column name for the idclinicaremitente field */
    const IDCLINICAREMITENTE = 'transferencia.idclinicaremitente';

    /** the column name for the idclinicadestinataria field */
    const IDCLINICADESTINATARIA = 'transferencia.idclinicadestinataria';

    /** the column name for the transferencia_creadaen field */
    const TRANSFERENCIA_CREADAEN = 'transferencia.transferencia_creadaen';

    /** the column name for the transferencia_estatus field */
    const TRANSFERENCIA_ESTATUS = 'transferencia.transferencia_estatus';

    /** the column name for the transferencia_fechamovimiento field */
    const TRANSFERENCIA_FECHAMOVIMIENTO = 'transferencia.transferencia_fechamovimiento';

    /** the column name for the transferencia_comprobante field */
    const TRANSFERENCIA_COMPROBANTE = 'transferencia.transferencia_comprobante';

    /** the column name for the transferencia_nota field */
    const TRANSFERENCIA_NOTA = 'transferencia.transferencia_nota';

    /** The enumerated values for the transferencia_estatus field */
    const TRANSFERENCIA_ESTATUS_ENVIADA = 'enviada';
    const TRANSFERENCIA_ESTATUS_ACEPTADA = 'aceptada';
    const TRANSFERENCIA_ESTATUS_RECHAZADA = 'rechazada';
    const TRANSFERENCIA_ESTATUS_CANCELADA = 'cancelada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Transferencia objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Transferencia[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TransferenciaPeer::$fieldNames[TransferenciaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idtransferencia', 'Idempleado', 'Idempleadoreceptor', 'Idclinicaremitente', 'Idclinicadestinataria', 'TransferenciaCreadaen', 'TransferenciaEstatus', 'TransferenciaFechamovimiento', 'TransferenciaComprobante', 'TransferenciaNota', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtransferencia', 'idempleado', 'idempleadoreceptor', 'idclinicaremitente', 'idclinicadestinataria', 'transferenciaCreadaen', 'transferenciaEstatus', 'transferenciaFechamovimiento', 'transferenciaComprobante', 'transferenciaNota', ),
        BasePeer::TYPE_COLNAME => array (TransferenciaPeer::IDTRANSFERENCIA, TransferenciaPeer::IDEMPLEADO, TransferenciaPeer::IDEMPLEADORECEPTOR, TransferenciaPeer::IDCLINICAREMITENTE, TransferenciaPeer::IDCLINICADESTINATARIA, TransferenciaPeer::TRANSFERENCIA_CREADAEN, TransferenciaPeer::TRANSFERENCIA_ESTATUS, TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO, TransferenciaPeer::TRANSFERENCIA_COMPROBANTE, TransferenciaPeer::TRANSFERENCIA_NOTA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRANSFERENCIA', 'IDEMPLEADO', 'IDEMPLEADORECEPTOR', 'IDCLINICAREMITENTE', 'IDCLINICADESTINATARIA', 'TRANSFERENCIA_CREADAEN', 'TRANSFERENCIA_ESTATUS', 'TRANSFERENCIA_FECHAMOVIMIENTO', 'TRANSFERENCIA_COMPROBANTE', 'TRANSFERENCIA_NOTA', ),
        BasePeer::TYPE_FIELDNAME => array ('idtransferencia', 'idempleado', 'idempleadoreceptor', 'idclinicaremitente', 'idclinicadestinataria', 'transferencia_creadaen', 'transferencia_estatus', 'transferencia_fechamovimiento', 'transferencia_comprobante', 'transferencia_nota', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TransferenciaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idtransferencia' => 0, 'Idempleado' => 1, 'Idempleadoreceptor' => 2, 'Idclinicaremitente' => 3, 'Idclinicadestinataria' => 4, 'TransferenciaCreadaen' => 5, 'TransferenciaEstatus' => 6, 'TransferenciaFechamovimiento' => 7, 'TransferenciaComprobante' => 8, 'TransferenciaNota' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtransferencia' => 0, 'idempleado' => 1, 'idempleadoreceptor' => 2, 'idclinicaremitente' => 3, 'idclinicadestinataria' => 4, 'transferenciaCreadaen' => 5, 'transferenciaEstatus' => 6, 'transferenciaFechamovimiento' => 7, 'transferenciaComprobante' => 8, 'transferenciaNota' => 9, ),
        BasePeer::TYPE_COLNAME => array (TransferenciaPeer::IDTRANSFERENCIA => 0, TransferenciaPeer::IDEMPLEADO => 1, TransferenciaPeer::IDEMPLEADORECEPTOR => 2, TransferenciaPeer::IDCLINICAREMITENTE => 3, TransferenciaPeer::IDCLINICADESTINATARIA => 4, TransferenciaPeer::TRANSFERENCIA_CREADAEN => 5, TransferenciaPeer::TRANSFERENCIA_ESTATUS => 6, TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO => 7, TransferenciaPeer::TRANSFERENCIA_COMPROBANTE => 8, TransferenciaPeer::TRANSFERENCIA_NOTA => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRANSFERENCIA' => 0, 'IDEMPLEADO' => 1, 'IDEMPLEADORECEPTOR' => 2, 'IDCLINICAREMITENTE' => 3, 'IDCLINICADESTINATARIA' => 4, 'TRANSFERENCIA_CREADAEN' => 5, 'TRANSFERENCIA_ESTATUS' => 6, 'TRANSFERENCIA_FECHAMOVIMIENTO' => 7, 'TRANSFERENCIA_COMPROBANTE' => 8, 'TRANSFERENCIA_NOTA' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('idtransferencia' => 0, 'idempleado' => 1, 'idempleadoreceptor' => 2, 'idclinicaremitente' => 3, 'idclinicadestinataria' => 4, 'transferencia_creadaen' => 5, 'transferencia_estatus' => 6, 'transferencia_fechamovimiento' => 7, 'transferencia_comprobante' => 8, 'transferencia_nota' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TransferenciaPeer::TRANSFERENCIA_ESTATUS => array(
            TransferenciaPeer::TRANSFERENCIA_ESTATUS_ENVIADA,
            TransferenciaPeer::TRANSFERENCIA_ESTATUS_ACEPTADA,
            TransferenciaPeer::TRANSFERENCIA_ESTATUS_RECHAZADA,
            TransferenciaPeer::TRANSFERENCIA_ESTATUS_CANCELADA,
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
        $toNames = TransferenciaPeer::getFieldNames($toType);
        $key = isset(TransferenciaPeer::$fieldKeys[$fromType][$name]) ? TransferenciaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TransferenciaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TransferenciaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TransferenciaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TransferenciaPeer::$enumValueSets;
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
        $valueSets = TransferenciaPeer::getValueSets();

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
        $values = TransferenciaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TransferenciaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TransferenciaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TransferenciaPeer::IDTRANSFERENCIA);
            $criteria->addSelectColumn(TransferenciaPeer::IDEMPLEADO);
            $criteria->addSelectColumn(TransferenciaPeer::IDEMPLEADORECEPTOR);
            $criteria->addSelectColumn(TransferenciaPeer::IDCLINICAREMITENTE);
            $criteria->addSelectColumn(TransferenciaPeer::IDCLINICADESTINATARIA);
            $criteria->addSelectColumn(TransferenciaPeer::TRANSFERENCIA_CREADAEN);
            $criteria->addSelectColumn(TransferenciaPeer::TRANSFERENCIA_ESTATUS);
            $criteria->addSelectColumn(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO);
            $criteria->addSelectColumn(TransferenciaPeer::TRANSFERENCIA_COMPROBANTE);
            $criteria->addSelectColumn(TransferenciaPeer::TRANSFERENCIA_NOTA);
        } else {
            $criteria->addSelectColumn($alias . '.idtransferencia');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.idempleadoreceptor');
            $criteria->addSelectColumn($alias . '.idclinicaremitente');
            $criteria->addSelectColumn($alias . '.idclinicadestinataria');
            $criteria->addSelectColumn($alias . '.transferencia_creadaen');
            $criteria->addSelectColumn($alias . '.transferencia_estatus');
            $criteria->addSelectColumn($alias . '.transferencia_fechamovimiento');
            $criteria->addSelectColumn($alias . '.transferencia_comprobante');
            $criteria->addSelectColumn($alias . '.transferencia_nota');
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
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Transferencia
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TransferenciaPeer::doSelect($critcopy, $con);
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
        return TransferenciaPeer::populateObjects(TransferenciaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TransferenciaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

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
     * @param Transferencia $obj A Transferencia object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdtransferencia();
            } // if key === null
            TransferenciaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Transferencia object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Transferencia) {
                $key = (string) $value->getIdtransferencia();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Transferencia object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TransferenciaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Transferencia Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TransferenciaPeer::$instances[$key])) {
                return TransferenciaPeer::$instances[$key];
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
        foreach (TransferenciaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TransferenciaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to transferencia
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        $cls = TransferenciaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TransferenciaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TransferenciaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Transferencia object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TransferenciaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TransferenciaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TransferenciaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TransferenciaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TransferenciaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related ClinicaRelatedByIdclinicadestinataria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClinicaRelatedByIdclinicadestinataria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClinicaRelatedByIdclinicaremitente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClinicaRelatedByIdclinicaremitente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadoreceptor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadoreceptor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Transferencia objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinicaRelatedByIdclinicadestinataria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol = TransferenciaPeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to $obj2 (Clinica)
                $obj2->addTransferenciaRelatedByIdclinicadestinataria($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinicaRelatedByIdclinicaremitente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol = TransferenciaPeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to $obj2 (Clinica)
                $obj2->addTransferenciaRelatedByIdclinicaremitente($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol = TransferenciaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to $obj2 (Empleado)
                $obj2->addTransferenciaRelatedByIdempleado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadoreceptor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol = TransferenciaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to $obj2 (Empleado)
                $obj2->addTransferenciaRelatedByIdempleadoreceptor($obj1);

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
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Transferencia objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol2 = TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj2 (Clinica)
                $obj2->addTransferenciaRelatedByIdclinicadestinataria($obj1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj3 (Clinica)
                $obj3->addTransferenciaRelatedByIdclinicaremitente($obj1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj4 (Empleado)
                $obj4->addTransferenciaRelatedByIdempleado($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key5 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = EmpleadoPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpleadoPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Transferencia) to the collection in $obj5 (Empleado)
                $obj5->addTransferenciaRelatedByIdempleadoreceptor($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ClinicaRelatedByIdclinicadestinataria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClinicaRelatedByIdclinicadestinataria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClinicaRelatedByIdclinicaremitente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClinicaRelatedByIdclinicaremitente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadoreceptor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadoreceptor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TransferenciaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);

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
     * Selects a collection of Transferencia objects pre-filled with all related objects except ClinicaRelatedByIdclinicadestinataria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClinicaRelatedByIdclinicadestinataria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol2 = TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj2 (Empleado)
                $obj2->addTransferenciaRelatedByIdempleado($obj1);

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

                // Add the $obj1 (Transferencia) to the collection in $obj3 (Empleado)
                $obj3->addTransferenciaRelatedByIdempleadoreceptor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with all related objects except ClinicaRelatedByIdclinicaremitente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClinicaRelatedByIdclinicaremitente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol2 = TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDEMPLEADORECEPTOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj2 (Empleado)
                $obj2->addTransferenciaRelatedByIdempleado($obj1);

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

                // Add the $obj1 (Transferencia) to the collection in $obj3 (Empleado)
                $obj3->addTransferenciaRelatedByIdempleadoreceptor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with all related objects except EmpleadoRelatedByIdempleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol2 = TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj2 (Clinica)
                $obj2->addTransferenciaRelatedByIdclinicadestinataria($obj1);

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

                // Add the $obj1 (Transferencia) to the collection in $obj3 (Clinica)
                $obj3->addTransferenciaRelatedByIdclinicaremitente($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Transferencia objects pre-filled with all related objects except EmpleadoRelatedByIdempleadoreceptor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Transferencia objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadoreceptor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);
        }

        TransferenciaPeer::addSelectColumns($criteria);
        $startcol2 = TransferenciaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TransferenciaPeer::IDCLINICADESTINATARIA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(TransferenciaPeer::IDCLINICAREMITENTE, ClinicaPeer::IDCLINICA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TransferenciaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TransferenciaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TransferenciaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TransferenciaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Transferencia) to the collection in $obj2 (Clinica)
                $obj2->addTransferenciaRelatedByIdclinicadestinataria($obj1);

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

                // Add the $obj1 (Transferencia) to the collection in $obj3 (Clinica)
                $obj3->addTransferenciaRelatedByIdclinicaremitente($obj1);

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
        return Propel::getDatabaseMap(TransferenciaPeer::DATABASE_NAME)->getTable(TransferenciaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTransferenciaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTransferenciaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TransferenciaTableMap());
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
        return TransferenciaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Transferencia or Criteria object.
     *
     * @param      mixed $values Criteria or Transferencia object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Transferencia object
        }

        if ($criteria->containsKey(TransferenciaPeer::IDTRANSFERENCIA) && $criteria->keyContainsValue(TransferenciaPeer::IDTRANSFERENCIA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TransferenciaPeer::IDTRANSFERENCIA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Transferencia or Criteria object.
     *
     * @param      mixed $values Criteria or Transferencia object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TransferenciaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TransferenciaPeer::IDTRANSFERENCIA);
            $value = $criteria->remove(TransferenciaPeer::IDTRANSFERENCIA);
            if ($value) {
                $selectCriteria->add(TransferenciaPeer::IDTRANSFERENCIA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TransferenciaPeer::TABLE_NAME);
            }

        } else { // $values is Transferencia object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the transferencia table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += TransferenciaPeer::doOnDeleteCascade(new Criteria(TransferenciaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(TransferenciaPeer::TABLE_NAME, $con, TransferenciaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TransferenciaPeer::clearInstancePool();
            TransferenciaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Transferencia or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Transferencia object or primary key or array of primary keys
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
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Transferencia) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);
            $criteria->add(TransferenciaPeer::IDTRANSFERENCIA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(TransferenciaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += TransferenciaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                TransferenciaPeer::clearInstancePool();
            } elseif ($values instanceof Transferencia) { // it's a model object
                TransferenciaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    TransferenciaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TransferenciaPeer::clearRelatedInstancePool();
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
        $objects = TransferenciaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Transferenciadetalle objects
            $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);

            $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIA, $obj->getIdtransferencia());
            $affectedRows += TransferenciadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Transferencia object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Transferencia $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TransferenciaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TransferenciaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TransferenciaPeer::DATABASE_NAME, TransferenciaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Transferencia
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TransferenciaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);
        $criteria->add(TransferenciaPeer::IDTRANSFERENCIA, $pk);

        $v = TransferenciaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Transferencia[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);
            $criteria->add(TransferenciaPeer::IDTRANSFERENCIA, $pks, Criteria::IN);
            $objs = TransferenciaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTransferenciaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTransferenciaPeer::buildTableMap();

