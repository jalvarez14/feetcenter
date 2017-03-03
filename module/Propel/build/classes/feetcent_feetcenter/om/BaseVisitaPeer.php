<?php


/**
 * Base static class for performing query and update operations on the 'visita' table.
 *
 *
 *
 * @package propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'feetcent_feetcenter';

    /** the table name for this class */
    const TABLE_NAME = 'visita';

    /** the related Propel class for this table */
    const OM_CLASS = 'Visita';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VisitaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the idvisita field */
    const IDVISITA = 'visita.idvisita';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'visita.idempleado';

    /** the column name for the idempleadocreador field */
    const IDEMPLEADOCREADOR = 'visita.idempleadocreador';

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'visita.idpaciente';

    /** the column name for the idclinica field */
    const IDCLINICA = 'visita.idclinica';

    /** the column name for the visita_tipo field */
    const VISITA_TIPO = 'visita.visita_tipo';

    /** the column name for the visita_creadaen field */
    const VISITA_CREADAEN = 'visita.visita_creadaen';

    /** the column name for the visita_canceladaen field */
    const VISITA_CANCELADAEN = 'visita.visita_canceladaen';

    /** the column name for the visita_fechainicio field */
    const VISITA_FECHAINICIO = 'visita.visita_fechainicio';

    /** the column name for the visita_fechafin field */
    const VISITA_FECHAFIN = 'visita.visita_fechafin';

    /** the column name for the visita_status field */
    const VISITA_STATUS = 'visita.visita_status';

    /** the column name for the visita_estatuspago field */
    const VISITA_ESTATUSPAGO = 'visita.visita_estatuspago';

    /** the column name for the visita_total field */
    const VISITA_TOTAL = 'visita.visita_total';

    /** the column name for the visita_nota field */
    const VISITA_NOTA = 'visita.visita_nota';

    /** the column name for the visita_year field */
    const VISITA_YEAR = 'visita.visita_year';

    /** the column name for the visita_month field */
    const VISITA_MONTH = 'visita.visita_month';

    /** the column name for the visita_day field */
    const VISITA_DAY = 'visita.visita_day';

    /** the column name for the visita_foliomembresia field */
    const VISITA_FOLIOMEMBRESIA = 'visita.visita_foliomembresia';

    /** the column name for the visita_cuponmembresia field */
    const VISITA_CUPONMEMBRESIA = 'visita.visita_cuponmembresia';

    /** the column name for the visita_horainicio field */
    const VISITA_HORAINICIO = 'visita.visita_horainicio';

    /** the column name for the visita_horafin field */
    const VISITA_HORAFIN = 'visita.visita_horafin';

    /** the column name for the visita_duracion field */
    const VISITA_DURACION = 'visita.visita_duracion';

    /** the column name for the visita_descuento field */
    const VISITA_DESCUENTO = 'visita.visita_descuento';

    /** The enumerated values for the visita_tipo field */
    const VISITA_TIPO_CONSULTA = 'consulta';
    const VISITA_TIPO_SERVICIO = 'servicio';

    /** The enumerated values for the visita_status field */
    const VISITA_STATUS_POR_CONFIRMAR = 'por confirmar';
    const VISITA_STATUS_CONFIMADA = 'confimada';
    const VISITA_STATUS_CANCELO = 'cancelo';
    const VISITA_STATUS_NO_SE_PRESENTO = 'no se presento';
    const VISITA_STATUS_REPROGRAMDA = 'reprogramda';
    const VISITA_STATUS_EN_SERVICIO = 'en servicio';
    const VISITA_STATUS_TERMINADO = 'terminado';

    /** The enumerated values for the visita_estatuspago field */
    const VISITA_ESTATUSPAGO_PAGADA = 'pagada';
    const VISITA_ESTATUSPAGO_NO_PAGADA = 'no pagada';
    const VISITA_ESTATUSPAGO_CANCELADA = 'cancelada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Visita objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Visita[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VisitaPeer::$fieldNames[VisitaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idvisita', 'Idempleado', 'Idempleadocreador', 'Idpaciente', 'Idclinica', 'VisitaTipo', 'VisitaCreadaen', 'VisitaCanceladaen', 'VisitaFechainicio', 'VisitaFechafin', 'VisitaStatus', 'VisitaEstatuspago', 'VisitaTotal', 'VisitaNota', 'VisitaYear', 'VisitaMonth', 'VisitaDay', 'VisitaFoliomembresia', 'VisitaCuponmembresia', 'VisitaHorainicio', 'VisitaHorafin', 'VisitaDuracion', 'VisitaDescuento', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idvisita', 'idempleado', 'idempleadocreador', 'idpaciente', 'idclinica', 'visitaTipo', 'visitaCreadaen', 'visitaCanceladaen', 'visitaFechainicio', 'visitaFechafin', 'visitaStatus', 'visitaEstatuspago', 'visitaTotal', 'visitaNota', 'visitaYear', 'visitaMonth', 'visitaDay', 'visitaFoliomembresia', 'visitaCuponmembresia', 'visitaHorainicio', 'visitaHorafin', 'visitaDuracion', 'visitaDescuento', ),
        BasePeer::TYPE_COLNAME => array (VisitaPeer::IDVISITA, VisitaPeer::IDEMPLEADO, VisitaPeer::IDEMPLEADOCREADOR, VisitaPeer::IDPACIENTE, VisitaPeer::IDCLINICA, VisitaPeer::VISITA_TIPO, VisitaPeer::VISITA_CREADAEN, VisitaPeer::VISITA_CANCELADAEN, VisitaPeer::VISITA_FECHAINICIO, VisitaPeer::VISITA_FECHAFIN, VisitaPeer::VISITA_STATUS, VisitaPeer::VISITA_ESTATUSPAGO, VisitaPeer::VISITA_TOTAL, VisitaPeer::VISITA_NOTA, VisitaPeer::VISITA_YEAR, VisitaPeer::VISITA_MONTH, VisitaPeer::VISITA_DAY, VisitaPeer::VISITA_FOLIOMEMBRESIA, VisitaPeer::VISITA_CUPONMEMBRESIA, VisitaPeer::VISITA_HORAINICIO, VisitaPeer::VISITA_HORAFIN, VisitaPeer::VISITA_DURACION, VisitaPeer::VISITA_DESCUENTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVISITA', 'IDEMPLEADO', 'IDEMPLEADOCREADOR', 'IDPACIENTE', 'IDCLINICA', 'VISITA_TIPO', 'VISITA_CREADAEN', 'VISITA_CANCELADAEN', 'VISITA_FECHAINICIO', 'VISITA_FECHAFIN', 'VISITA_STATUS', 'VISITA_ESTATUSPAGO', 'VISITA_TOTAL', 'VISITA_NOTA', 'VISITA_YEAR', 'VISITA_MONTH', 'VISITA_DAY', 'VISITA_FOLIOMEMBRESIA', 'VISITA_CUPONMEMBRESIA', 'VISITA_HORAINICIO', 'VISITA_HORAFIN', 'VISITA_DURACION', 'VISITA_DESCUENTO', ),
        BasePeer::TYPE_FIELDNAME => array ('idvisita', 'idempleado', 'idempleadocreador', 'idpaciente', 'idclinica', 'visita_tipo', 'visita_creadaen', 'visita_canceladaen', 'visita_fechainicio', 'visita_fechafin', 'visita_status', 'visita_estatuspago', 'visita_total', 'visita_nota', 'visita_year', 'visita_month', 'visita_day', 'visita_foliomembresia', 'visita_cuponmembresia', 'visita_horainicio', 'visita_horafin', 'visita_duracion', 'visita_descuento', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VisitaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idvisita' => 0, 'Idempleado' => 1, 'Idempleadocreador' => 2, 'Idpaciente' => 3, 'Idclinica' => 4, 'VisitaTipo' => 5, 'VisitaCreadaen' => 6, 'VisitaCanceladaen' => 7, 'VisitaFechainicio' => 8, 'VisitaFechafin' => 9, 'VisitaStatus' => 10, 'VisitaEstatuspago' => 11, 'VisitaTotal' => 12, 'VisitaNota' => 13, 'VisitaYear' => 14, 'VisitaMonth' => 15, 'VisitaDay' => 16, 'VisitaFoliomembresia' => 17, 'VisitaCuponmembresia' => 18, 'VisitaHorainicio' => 19, 'VisitaHorafin' => 20, 'VisitaDuracion' => 21, 'VisitaDescuento' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idvisita' => 0, 'idempleado' => 1, 'idempleadocreador' => 2, 'idpaciente' => 3, 'idclinica' => 4, 'visitaTipo' => 5, 'visitaCreadaen' => 6, 'visitaCanceladaen' => 7, 'visitaFechainicio' => 8, 'visitaFechafin' => 9, 'visitaStatus' => 10, 'visitaEstatuspago' => 11, 'visitaTotal' => 12, 'visitaNota' => 13, 'visitaYear' => 14, 'visitaMonth' => 15, 'visitaDay' => 16, 'visitaFoliomembresia' => 17, 'visitaCuponmembresia' => 18, 'visitaHorainicio' => 19, 'visitaHorafin' => 20, 'visitaDuracion' => 21, 'visitaDescuento' => 22, ),
        BasePeer::TYPE_COLNAME => array (VisitaPeer::IDVISITA => 0, VisitaPeer::IDEMPLEADO => 1, VisitaPeer::IDEMPLEADOCREADOR => 2, VisitaPeer::IDPACIENTE => 3, VisitaPeer::IDCLINICA => 4, VisitaPeer::VISITA_TIPO => 5, VisitaPeer::VISITA_CREADAEN => 6, VisitaPeer::VISITA_CANCELADAEN => 7, VisitaPeer::VISITA_FECHAINICIO => 8, VisitaPeer::VISITA_FECHAFIN => 9, VisitaPeer::VISITA_STATUS => 10, VisitaPeer::VISITA_ESTATUSPAGO => 11, VisitaPeer::VISITA_TOTAL => 12, VisitaPeer::VISITA_NOTA => 13, VisitaPeer::VISITA_YEAR => 14, VisitaPeer::VISITA_MONTH => 15, VisitaPeer::VISITA_DAY => 16, VisitaPeer::VISITA_FOLIOMEMBRESIA => 17, VisitaPeer::VISITA_CUPONMEMBRESIA => 18, VisitaPeer::VISITA_HORAINICIO => 19, VisitaPeer::VISITA_HORAFIN => 20, VisitaPeer::VISITA_DURACION => 21, VisitaPeer::VISITA_DESCUENTO => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVISITA' => 0, 'IDEMPLEADO' => 1, 'IDEMPLEADOCREADOR' => 2, 'IDPACIENTE' => 3, 'IDCLINICA' => 4, 'VISITA_TIPO' => 5, 'VISITA_CREADAEN' => 6, 'VISITA_CANCELADAEN' => 7, 'VISITA_FECHAINICIO' => 8, 'VISITA_FECHAFIN' => 9, 'VISITA_STATUS' => 10, 'VISITA_ESTATUSPAGO' => 11, 'VISITA_TOTAL' => 12, 'VISITA_NOTA' => 13, 'VISITA_YEAR' => 14, 'VISITA_MONTH' => 15, 'VISITA_DAY' => 16, 'VISITA_FOLIOMEMBRESIA' => 17, 'VISITA_CUPONMEMBRESIA' => 18, 'VISITA_HORAINICIO' => 19, 'VISITA_HORAFIN' => 20, 'VISITA_DURACION' => 21, 'VISITA_DESCUENTO' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('idvisita' => 0, 'idempleado' => 1, 'idempleadocreador' => 2, 'idpaciente' => 3, 'idclinica' => 4, 'visita_tipo' => 5, 'visita_creadaen' => 6, 'visita_canceladaen' => 7, 'visita_fechainicio' => 8, 'visita_fechafin' => 9, 'visita_status' => 10, 'visita_estatuspago' => 11, 'visita_total' => 12, 'visita_nota' => 13, 'visita_year' => 14, 'visita_month' => 15, 'visita_day' => 16, 'visita_foliomembresia' => 17, 'visita_cuponmembresia' => 18, 'visita_horainicio' => 19, 'visita_horafin' => 20, 'visita_duracion' => 21, 'visita_descuento' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VisitaPeer::VISITA_TIPO => array(
            VisitaPeer::VISITA_TIPO_CONSULTA,
            VisitaPeer::VISITA_TIPO_SERVICIO,
        ),
        VisitaPeer::VISITA_STATUS => array(
            VisitaPeer::VISITA_STATUS_POR_CONFIRMAR,
            VisitaPeer::VISITA_STATUS_CONFIMADA,
            VisitaPeer::VISITA_STATUS_CANCELO,
            VisitaPeer::VISITA_STATUS_NO_SE_PRESENTO,
            VisitaPeer::VISITA_STATUS_REPROGRAMDA,
            VisitaPeer::VISITA_STATUS_EN_SERVICIO,
            VisitaPeer::VISITA_STATUS_TERMINADO,
        ),
        VisitaPeer::VISITA_ESTATUSPAGO => array(
            VisitaPeer::VISITA_ESTATUSPAGO_PAGADA,
            VisitaPeer::VISITA_ESTATUSPAGO_NO_PAGADA,
            VisitaPeer::VISITA_ESTATUSPAGO_CANCELADA,
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
        $toNames = VisitaPeer::getFieldNames($toType);
        $key = isset(VisitaPeer::$fieldKeys[$fromType][$name]) ? VisitaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VisitaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VisitaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VisitaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VisitaPeer::$enumValueSets;
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
        $valueSets = VisitaPeer::getValueSets();

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
        $values = VisitaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. VisitaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VisitaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VisitaPeer::IDVISITA);
            $criteria->addSelectColumn(VisitaPeer::IDEMPLEADO);
            $criteria->addSelectColumn(VisitaPeer::IDEMPLEADOCREADOR);
            $criteria->addSelectColumn(VisitaPeer::IDPACIENTE);
            $criteria->addSelectColumn(VisitaPeer::IDCLINICA);
            $criteria->addSelectColumn(VisitaPeer::VISITA_TIPO);
            $criteria->addSelectColumn(VisitaPeer::VISITA_CREADAEN);
            $criteria->addSelectColumn(VisitaPeer::VISITA_CANCELADAEN);
            $criteria->addSelectColumn(VisitaPeer::VISITA_FECHAINICIO);
            $criteria->addSelectColumn(VisitaPeer::VISITA_FECHAFIN);
            $criteria->addSelectColumn(VisitaPeer::VISITA_STATUS);
            $criteria->addSelectColumn(VisitaPeer::VISITA_ESTATUSPAGO);
            $criteria->addSelectColumn(VisitaPeer::VISITA_TOTAL);
            $criteria->addSelectColumn(VisitaPeer::VISITA_NOTA);
            $criteria->addSelectColumn(VisitaPeer::VISITA_YEAR);
            $criteria->addSelectColumn(VisitaPeer::VISITA_MONTH);
            $criteria->addSelectColumn(VisitaPeer::VISITA_DAY);
            $criteria->addSelectColumn(VisitaPeer::VISITA_FOLIOMEMBRESIA);
            $criteria->addSelectColumn(VisitaPeer::VISITA_CUPONMEMBRESIA);
            $criteria->addSelectColumn(VisitaPeer::VISITA_HORAINICIO);
            $criteria->addSelectColumn(VisitaPeer::VISITA_HORAFIN);
            $criteria->addSelectColumn(VisitaPeer::VISITA_DURACION);
            $criteria->addSelectColumn(VisitaPeer::VISITA_DESCUENTO);
        } else {
            $criteria->addSelectColumn($alias . '.idvisita');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.idempleadocreador');
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.idclinica');
            $criteria->addSelectColumn($alias . '.visita_tipo');
            $criteria->addSelectColumn($alias . '.visita_creadaen');
            $criteria->addSelectColumn($alias . '.visita_canceladaen');
            $criteria->addSelectColumn($alias . '.visita_fechainicio');
            $criteria->addSelectColumn($alias . '.visita_fechafin');
            $criteria->addSelectColumn($alias . '.visita_status');
            $criteria->addSelectColumn($alias . '.visita_estatuspago');
            $criteria->addSelectColumn($alias . '.visita_total');
            $criteria->addSelectColumn($alias . '.visita_nota');
            $criteria->addSelectColumn($alias . '.visita_year');
            $criteria->addSelectColumn($alias . '.visita_month');
            $criteria->addSelectColumn($alias . '.visita_day');
            $criteria->addSelectColumn($alias . '.visita_foliomembresia');
            $criteria->addSelectColumn($alias . '.visita_cuponmembresia');
            $criteria->addSelectColumn($alias . '.visita_horainicio');
            $criteria->addSelectColumn($alias . '.visita_horafin');
            $criteria->addSelectColumn($alias . '.visita_duracion');
            $criteria->addSelectColumn($alias . '.visita_descuento');
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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VisitaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Visita
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VisitaPeer::doSelect($critcopy, $con);
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
        return VisitaPeer::populateObjects(VisitaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VisitaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

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
     * @param Visita $obj A Visita object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdvisita();
            } // if key === null
            VisitaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Visita object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Visita) {
                $key = (string) $value->getIdvisita();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Visita object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VisitaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Visita Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VisitaPeer::$instances[$key])) {
                return VisitaPeer::$instances[$key];
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
        foreach (VisitaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VisitaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to visita
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in VisitadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VisitadetallePeer::clearInstancePool();
        // Invalidate objects in VisitapagoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VisitapagoPeer::clearInstancePool();
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
        $cls = VisitaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VisitaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VisitaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Visita object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VisitaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VisitaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VisitaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VisitaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VisitaPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocreador table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadocreador(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Visita objects pre-filled with their Clinica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClinica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol = VisitaPeer::NUM_HYDRATE_COLUMNS;
        ClinicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to $obj2 (Clinica)
                $obj2->addVisita($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol = VisitaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to $obj2 (Empleado)
                $obj2->addVisitaRelatedByIdempleado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadocreador(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol = VisitaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to $obj2 (Empleado)
                $obj2->addVisitaRelatedByIdempleadocreador($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with their Paciente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol = VisitaPeer::NUM_HYDRATE_COLUMNS;
        PacientePeer::addSelectColumns($criteria);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to $obj2 (Paciente)
                $obj2->addVisita($obj1);

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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Visita objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol2 = VisitaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to the collection in $obj2 (Clinica)
                $obj2->addVisita($obj1);
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

                // Add the $obj1 (Visita) to the collection in $obj3 (Empleado)
                $obj3->addVisitaRelatedByIdempleado($obj1);
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

                // Add the $obj1 (Visita) to the collection in $obj4 (Empleado)
                $obj4->addVisitaRelatedByIdempleadocreador($obj1);
            } // if joined row not null

            // Add objects for joined Paciente rows

            $key5 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = PacientePeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = PacientePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PacientePeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Visita) to the collection in $obj5 (Paciente)
                $obj5->addVisita($obj1);
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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocreador table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadocreador(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisitaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Visita objects pre-filled with all related objects except Clinica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
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
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol2 = VisitaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to the collection in $obj2 (Empleado)
                $obj2->addVisitaRelatedByIdempleado($obj1);

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

                // Add the $obj1 (Visita) to the collection in $obj3 (Empleado)
                $obj3->addVisitaRelatedByIdempleadocreador($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key4 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PacientePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PacientePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PacientePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Visita) to the collection in $obj4 (Paciente)
                $obj4->addVisita($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with all related objects except EmpleadoRelatedByIdempleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
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
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol2 = VisitaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to the collection in $obj2 (Clinica)
                $obj2->addVisita($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key3 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Visita) to the collection in $obj3 (Paciente)
                $obj3->addVisita($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with all related objects except EmpleadoRelatedByIdempleadocreador.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadocreador(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol2 = VisitaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to the collection in $obj2 (Clinica)
                $obj2->addVisita($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key3 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Visita) to the collection in $obj3 (Paciente)
                $obj3->addVisita($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Visita objects pre-filled with all related objects except Paciente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Visita objects.
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
            $criteria->setDbName(VisitaPeer::DATABASE_NAME);
        }

        VisitaPeer::addSelectColumns($criteria);
        $startcol2 = VisitaPeer::NUM_HYDRATE_COLUMNS;

        ClinicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClinicaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VisitaPeer::IDCLINICA, ClinicaPeer::IDCLINICA, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VisitaPeer::IDEMPLEADOCREADOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VisitaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VisitaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VisitaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VisitaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Visita) to the collection in $obj2 (Clinica)
                $obj2->addVisita($obj1);

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

                // Add the $obj1 (Visita) to the collection in $obj3 (Empleado)
                $obj3->addVisitaRelatedByIdempleado($obj1);

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

                // Add the $obj1 (Visita) to the collection in $obj4 (Empleado)
                $obj4->addVisitaRelatedByIdempleadocreador($obj1);

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
        return Propel::getDatabaseMap(VisitaPeer::DATABASE_NAME)->getTable(VisitaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVisitaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVisitaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VisitaTableMap());
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
        return VisitaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Visita or Criteria object.
     *
     * @param      mixed $values Criteria or Visita object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Visita object
        }

        if ($criteria->containsKey(VisitaPeer::IDVISITA) && $criteria->keyContainsValue(VisitaPeer::IDVISITA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VisitaPeer::IDVISITA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Visita or Criteria object.
     *
     * @param      mixed $values Criteria or Visita object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VisitaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VisitaPeer::IDVISITA);
            $value = $criteria->remove(VisitaPeer::IDVISITA);
            if ($value) {
                $selectCriteria->add(VisitaPeer::IDVISITA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VisitaPeer::TABLE_NAME);
            }

        } else { // $values is Visita object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the visita table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VisitaPeer::doOnDeleteCascade(new Criteria(VisitaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VisitaPeer::TABLE_NAME, $con, VisitaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VisitaPeer::clearInstancePool();
            VisitaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Visita or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Visita object or primary key or array of primary keys
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
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Visita) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VisitaPeer::DATABASE_NAME);
            $criteria->add(VisitaPeer::IDVISITA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VisitaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VisitaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VisitaPeer::clearInstancePool();
            } elseif ($values instanceof Visita) { // it's a model object
                VisitaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VisitaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VisitaPeer::clearRelatedInstancePool();
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
        $objects = VisitaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Visitadetalle objects
            $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);

            $criteria->add(VisitadetallePeer::IDVISITA, $obj->getIdvisita());
            $affectedRows += VisitadetallePeer::doDelete($criteria, $con);

            // delete related Visitapago objects
            $criteria = new Criteria(VisitapagoPeer::DATABASE_NAME);

            $criteria->add(VisitapagoPeer::IDVISITA, $obj->getIdvisita());
            $affectedRows += VisitapagoPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Visita object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Visita $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VisitaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VisitaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(VisitaPeer::DATABASE_NAME, VisitaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Visita
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VisitaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VisitaPeer::DATABASE_NAME);
        $criteria->add(VisitaPeer::IDVISITA, $pk);

        $v = VisitaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Visita[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VisitaPeer::DATABASE_NAME);
            $criteria->add(VisitaPeer::IDVISITA, $pks, Criteria::IN);
            $objs = VisitaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVisitaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVisitaPeer::buildTableMap();

