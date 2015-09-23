<?php


/**
 * Base class that represents a row from the 'egresoclinica' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseEgresoclinica extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EgresoclinicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EgresoclinicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idegresoclinica field.
     * @var        int
     */
    protected $idegresoclinica;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the egresoclinica_fecha field.
     * @var        string
     */
    protected $egresoclinica_fecha;

    /**
     * The value for the egresoclinica_fechaegreso field.
     * @var        string
     */
    protected $egresoclinica_fechaegreso;

    /**
     * The value for the egresoclinica_tipo field.
     * @var        string
     */
    protected $egresoclinica_tipo;

    /**
     * The value for the egresoclinica_cantidad field.
     * @var        string
     */
    protected $egresoclinica_cantidad;

    /**
     * The value for the egresoclinica_iva field.
     * @var        string
     */
    protected $egresoclinica_iva;

    /**
     * The value for the egresoclinica_comprobante field.
     * @var        string
     */
    protected $egresoclinica_comprobante;

    /**
     * The value for the egresoclinica_nota field.
     * @var        string
     */
    protected $egresoclinica_nota;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [idegresoclinica] column value.
     *
     * @return int
     */
    public function getIdegresoclinica()
    {

        return $this->idegresoclinica;
    }

    /**
     * Get the [idclinica] column value.
     *
     * @return int
     */
    public function getIdclinica()
    {

        return $this->idclinica;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [optionally formatted] temporal [egresoclinica_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEgresoclinicaFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->egresoclinica_fecha === null) {
            return null;
        }

        if ($this->egresoclinica_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->egresoclinica_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->egresoclinica_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [egresoclinica_fechaegreso] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEgresoclinicaFechaegreso($format = '%x')
    {
        if ($this->egresoclinica_fechaegreso === null) {
            return null;
        }

        if ($this->egresoclinica_fechaegreso === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->egresoclinica_fechaegreso);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->egresoclinica_fechaegreso, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [egresoclinica_tipo] column value.
     *
     * @return string
     */
    public function getEgresoclinicaTipo()
    {

        return $this->egresoclinica_tipo;
    }

    /**
     * Get the [egresoclinica_cantidad] column value.
     *
     * @return string
     */
    public function getEgresoclinicaCantidad()
    {

        return $this->egresoclinica_cantidad;
    }

    /**
     * Get the [egresoclinica_iva] column value.
     *
     * @return string
     */
    public function getEgresoclinicaIva()
    {

        return $this->egresoclinica_iva;
    }

    /**
     * Get the [egresoclinica_comprobante] column value.
     *
     * @return string
     */
    public function getEgresoclinicaComprobante()
    {

        return $this->egresoclinica_comprobante;
    }

    /**
     * Get the [egresoclinica_nota] column value.
     *
     * @return string
     */
    public function getEgresoclinicaNota()
    {

        return $this->egresoclinica_nota;
    }

    /**
     * Set the value of [idegresoclinica] column.
     *
     * @param  int $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setIdegresoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idegresoclinica !== $v) {
            $this->idegresoclinica = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::IDEGRESOCLINICA;
        }


        return $this;
    } // setIdegresoclinica()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Sets the value of [egresoclinica_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->egresoclinica_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->egresoclinica_fecha !== null && $tmpDt = new DateTime($this->egresoclinica_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->egresoclinica_fecha = $newDateAsString;
                $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setEgresoclinicaFecha()

    /**
     * Sets the value of [egresoclinica_fechaegreso] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaFechaegreso($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->egresoclinica_fechaegreso !== null || $dt !== null) {
            $currentDateAsString = ($this->egresoclinica_fechaegreso !== null && $tmpDt = new DateTime($this->egresoclinica_fechaegreso)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->egresoclinica_fechaegreso = $newDateAsString;
                $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO;
            }
        } // if either are not null


        return $this;
    } // setEgresoclinicaFechaegreso()

    /**
     * Set the value of [egresoclinica_tipo] column.
     *
     * @param  string $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->egresoclinica_tipo !== $v) {
            $this->egresoclinica_tipo = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_TIPO;
        }


        return $this;
    } // setEgresoclinicaTipo()

    /**
     * Set the value of [egresoclinica_cantidad] column.
     *
     * @param  string $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->egresoclinica_cantidad !== $v) {
            $this->egresoclinica_cantidad = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD;
        }


        return $this;
    } // setEgresoclinicaCantidad()

    /**
     * Set the value of [egresoclinica_iva] column.
     *
     * @param  string $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->egresoclinica_iva !== $v) {
            $this->egresoclinica_iva = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_IVA;
        }


        return $this;
    } // setEgresoclinicaIva()

    /**
     * Set the value of [egresoclinica_comprobante] column.
     *
     * @param  string $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->egresoclinica_comprobante !== $v) {
            $this->egresoclinica_comprobante = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_COMPROBANTE;
        }


        return $this;
    } // setEgresoclinicaComprobante()

    /**
     * Set the value of [egresoclinica_nota] column.
     *
     * @param  string $v new value
     * @return Egresoclinica The current object (for fluent API support)
     */
    public function setEgresoclinicaNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->egresoclinica_nota !== $v) {
            $this->egresoclinica_nota = $v;
            $this->modifiedColumns[] = EgresoclinicaPeer::EGRESOCLINICA_NOTA;
        }


        return $this;
    } // setEgresoclinicaNota()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idegresoclinica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idclinica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleado = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->egresoclinica_fecha = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->egresoclinica_fechaegreso = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->egresoclinica_tipo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->egresoclinica_cantidad = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->egresoclinica_iva = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->egresoclinica_comprobante = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->egresoclinica_nota = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = EgresoclinicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Egresoclinica object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
        }
        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EgresoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EgresoclinicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aEmpleado = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EgresoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EgresoclinicaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EgresoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                EgresoclinicaPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aClinica !== null) {
                if ($this->aClinica->isModified() || $this->aClinica->isNew()) {
                    $affectedRows += $this->aClinica->save($con);
                }
                $this->setClinica($this->aClinica);
            }

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = EgresoclinicaPeer::IDEGRESOCLINICA;
        if (null !== $this->idegresoclinica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EgresoclinicaPeer::IDEGRESOCLINICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EgresoclinicaPeer::IDEGRESOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idegresoclinica`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_fecha`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_fechaegreso`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_tipo`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_cantidad`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_iva`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_comprobante`';
        }
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`egresoclinica_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `egresoclinica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idegresoclinica`':
                        $stmt->bindValue($identifier, $this->idegresoclinica, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`egresoclinica_fecha`':
                        $stmt->bindValue($identifier, $this->egresoclinica_fecha, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_fechaegreso`':
                        $stmt->bindValue($identifier, $this->egresoclinica_fechaegreso, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_tipo`':
                        $stmt->bindValue($identifier, $this->egresoclinica_tipo, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_cantidad`':
                        $stmt->bindValue($identifier, $this->egresoclinica_cantidad, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_iva`':
                        $stmt->bindValue($identifier, $this->egresoclinica_iva, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_comprobante`':
                        $stmt->bindValue($identifier, $this->egresoclinica_comprobante, PDO::PARAM_STR);
                        break;
                    case '`egresoclinica_nota`':
                        $stmt->bindValue($identifier, $this->egresoclinica_nota, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdegresoclinica($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aClinica !== null) {
                if (!$this->aClinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClinica->getValidationFailures());
                }
            }

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = EgresoclinicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EgresoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdegresoclinica();
                break;
            case 1:
                return $this->getIdclinica();
                break;
            case 2:
                return $this->getIdempleado();
                break;
            case 3:
                return $this->getEgresoclinicaFecha();
                break;
            case 4:
                return $this->getEgresoclinicaFechaegreso();
                break;
            case 5:
                return $this->getEgresoclinicaTipo();
                break;
            case 6:
                return $this->getEgresoclinicaCantidad();
                break;
            case 7:
                return $this->getEgresoclinicaIva();
                break;
            case 8:
                return $this->getEgresoclinicaComprobante();
                break;
            case 9:
                return $this->getEgresoclinicaNota();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Egresoclinica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Egresoclinica'][$this->getPrimaryKey()] = true;
        $keys = EgresoclinicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdegresoclinica(),
            $keys[1] => $this->getIdclinica(),
            $keys[2] => $this->getIdempleado(),
            $keys[3] => $this->getEgresoclinicaFecha(),
            $keys[4] => $this->getEgresoclinicaFechaegreso(),
            $keys[5] => $this->getEgresoclinicaTipo(),
            $keys[6] => $this->getEgresoclinicaCantidad(),
            $keys[7] => $this->getEgresoclinicaIva(),
            $keys[8] => $this->getEgresoclinicaComprobante(),
            $keys[9] => $this->getEgresoclinicaNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EgresoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdegresoclinica($value);
                break;
            case 1:
                $this->setIdclinica($value);
                break;
            case 2:
                $this->setIdempleado($value);
                break;
            case 3:
                $this->setEgresoclinicaFecha($value);
                break;
            case 4:
                $this->setEgresoclinicaFechaegreso($value);
                break;
            case 5:
                $this->setEgresoclinicaTipo($value);
                break;
            case 6:
                $this->setEgresoclinicaCantidad($value);
                break;
            case 7:
                $this->setEgresoclinicaIva($value);
                break;
            case 8:
                $this->setEgresoclinicaComprobante($value);
                break;
            case 9:
                $this->setEgresoclinicaNota($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = EgresoclinicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdegresoclinica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdclinica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleado($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEgresoclinicaFecha($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEgresoclinicaFechaegreso($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEgresoclinicaTipo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEgresoclinicaCantidad($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEgresoclinicaIva($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEgresoclinicaComprobante($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEgresoclinicaNota($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EgresoclinicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(EgresoclinicaPeer::IDEGRESOCLINICA)) $criteria->add(EgresoclinicaPeer::IDEGRESOCLINICA, $this->idegresoclinica);
        if ($this->isColumnModified(EgresoclinicaPeer::IDCLINICA)) $criteria->add(EgresoclinicaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(EgresoclinicaPeer::IDEMPLEADO)) $criteria->add(EgresoclinicaPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_FECHA)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_FECHA, $this->egresoclinica_fecha);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_FECHAEGRESO, $this->egresoclinica_fechaegreso);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_TIPO)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_TIPO, $this->egresoclinica_tipo);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_CANTIDAD, $this->egresoclinica_cantidad);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_IVA)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_IVA, $this->egresoclinica_iva);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_COMPROBANTE)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_COMPROBANTE, $this->egresoclinica_comprobante);
        if ($this->isColumnModified(EgresoclinicaPeer::EGRESOCLINICA_NOTA)) $criteria->add(EgresoclinicaPeer::EGRESOCLINICA_NOTA, $this->egresoclinica_nota);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(EgresoclinicaPeer::DATABASE_NAME);
        $criteria->add(EgresoclinicaPeer::IDEGRESOCLINICA, $this->idegresoclinica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdegresoclinica();
    }

    /**
     * Generic method to set the primary key (idegresoclinica column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdegresoclinica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdegresoclinica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Egresoclinica (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setEgresoclinicaFecha($this->getEgresoclinicaFecha());
        $copyObj->setEgresoclinicaFechaegreso($this->getEgresoclinicaFechaegreso());
        $copyObj->setEgresoclinicaTipo($this->getEgresoclinicaTipo());
        $copyObj->setEgresoclinicaCantidad($this->getEgresoclinicaCantidad());
        $copyObj->setEgresoclinicaIva($this->getEgresoclinicaIva());
        $copyObj->setEgresoclinicaComprobante($this->getEgresoclinicaComprobante());
        $copyObj->setEgresoclinicaNota($this->getEgresoclinicaNota());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdegresoclinica(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Egresoclinica Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return EgresoclinicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EgresoclinicaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Egresoclinica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClinica(Clinica $v = null)
    {
        if ($v === null) {
            $this->setIdclinica(NULL);
        } else {
            $this->setIdclinica($v->getIdclinica());
        }

        $this->aClinica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clinica object, it will not be re-added.
        if ($v !== null) {
            $v->addEgresoclinica($this);
        }


        return $this;
    }


    /**
     * Get the associated Clinica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Clinica The associated Clinica object.
     * @throws PropelException
     */
    public function getClinica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClinica === null && ($this->idclinica !== null) && $doQuery) {
            $this->aClinica = ClinicaQuery::create()->findPk($this->idclinica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClinica->addEgresoclinicas($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Egresoclinica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addEgresoclinica($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addEgresoclinicas($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idegresoclinica = null;
        $this->idclinica = null;
        $this->idempleado = null;
        $this->egresoclinica_fecha = null;
        $this->egresoclinica_fechaegreso = null;
        $this->egresoclinica_tipo = null;
        $this->egresoclinica_cantidad = null;
        $this->egresoclinica_iva = null;
        $this->egresoclinica_comprobante = null;
        $this->egresoclinica_nota = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aClinica = null;
        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EgresoclinicaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
