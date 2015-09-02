<?php


/**
 * Base class that represents a row from the 'faltante' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseFaltante extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FaltantePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FaltantePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idfaltante field.
     * @var        int
     */
    protected $idfaltante;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the idempleadogenerador field.
     * @var        int
     */
    protected $idempleadogenerador;

    /**
     * The value for the idempleadodeudor field.
     * @var        int
     */
    protected $idempleadodeudor;

    /**
     * The value for the faltante_creadaen field.
     * @var        string
     */
    protected $faltante_creadaen;

    /**
     * The value for the faltante_fecha field.
     * @var        string
     */
    protected $faltante_fecha;

    /**
     * The value for the faltante_hora field.
     * @var        string
     */
    protected $faltante_hora;

    /**
     * The value for the faltante_cantidad field.
     * @var        string
     */
    protected $faltante_cantidad;

    /**
     * The value for the faltante_comentario field.
     * @var        string
     */
    protected $faltante_comentario;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadodeudor;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadogenerador;

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
     * Get the [idfaltante] column value.
     *
     * @return int
     */
    public function getIdfaltante()
    {

        return $this->idfaltante;
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
     * Get the [idempleadogenerador] column value.
     *
     * @return int
     */
    public function getIdempleadogenerador()
    {

        return $this->idempleadogenerador;
    }

    /**
     * Get the [idempleadodeudor] column value.
     *
     * @return int
     */
    public function getIdempleadodeudor()
    {

        return $this->idempleadodeudor;
    }

    /**
     * Get the [optionally formatted] temporal [faltante_creadaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFaltanteCreadaen($format = 'Y-m-d H:i:s')
    {
        if ($this->faltante_creadaen === null) {
            return null;
        }

        if ($this->faltante_creadaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->faltante_creadaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->faltante_creadaen, true), $x);
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
     * Get the [optionally formatted] temporal [faltante_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFaltanteFecha($format = '%x')
    {
        if ($this->faltante_fecha === null) {
            return null;
        }

        if ($this->faltante_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->faltante_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->faltante_fecha, true), $x);
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
     * Get the [optionally formatted] temporal [faltante_hora] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFaltanteHora($format = '%X')
    {
        if ($this->faltante_hora === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->faltante_hora);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->faltante_hora, true), $x);
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
     * Get the [faltante_cantidad] column value.
     *
     * @return string
     */
    public function getFaltanteCantidad()
    {

        return $this->faltante_cantidad;
    }

    /**
     * Get the [faltante_comentario] column value.
     *
     * @return string
     */
    public function getFaltanteComentario()
    {

        return $this->faltante_comentario;
    }

    /**
     * Set the value of [idfaltante] column.
     *
     * @param  int $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setIdfaltante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idfaltante !== $v) {
            $this->idfaltante = $v;
            $this->modifiedColumns[] = FaltantePeer::IDFALTANTE;
        }


        return $this;
    } // setIdfaltante()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = FaltantePeer::IDCLINICA;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [idempleadogenerador] column.
     *
     * @param  int $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setIdempleadogenerador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadogenerador !== $v) {
            $this->idempleadogenerador = $v;
            $this->modifiedColumns[] = FaltantePeer::IDEMPLEADOGENERADOR;
        }

        if ($this->aEmpleadoRelatedByIdempleadogenerador !== null && $this->aEmpleadoRelatedByIdempleadogenerador->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadogenerador = null;
        }


        return $this;
    } // setIdempleadogenerador()

    /**
     * Set the value of [idempleadodeudor] column.
     *
     * @param  int $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setIdempleadodeudor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadodeudor !== $v) {
            $this->idempleadodeudor = $v;
            $this->modifiedColumns[] = FaltantePeer::IDEMPLEADODEUDOR;
        }

        if ($this->aEmpleadoRelatedByIdempleadodeudor !== null && $this->aEmpleadoRelatedByIdempleadodeudor->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadodeudor = null;
        }


        return $this;
    } // setIdempleadodeudor()

    /**
     * Sets the value of [faltante_creadaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Faltante The current object (for fluent API support)
     */
    public function setFaltanteCreadaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->faltante_creadaen !== null || $dt !== null) {
            $currentDateAsString = ($this->faltante_creadaen !== null && $tmpDt = new DateTime($this->faltante_creadaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->faltante_creadaen = $newDateAsString;
                $this->modifiedColumns[] = FaltantePeer::FALTANTE_CREADAEN;
            }
        } // if either are not null


        return $this;
    } // setFaltanteCreadaen()

    /**
     * Sets the value of [faltante_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Faltante The current object (for fluent API support)
     */
    public function setFaltanteFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->faltante_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->faltante_fecha !== null && $tmpDt = new DateTime($this->faltante_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->faltante_fecha = $newDateAsString;
                $this->modifiedColumns[] = FaltantePeer::FALTANTE_FECHA;
            }
        } // if either are not null


        return $this;
    } // setFaltanteFecha()

    /**
     * Sets the value of [faltante_hora] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Faltante The current object (for fluent API support)
     */
    public function setFaltanteHora($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->faltante_hora !== null || $dt !== null) {
            $currentDateAsString = ($this->faltante_hora !== null && $tmpDt = new DateTime($this->faltante_hora)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->faltante_hora = $newDateAsString;
                $this->modifiedColumns[] = FaltantePeer::FALTANTE_HORA;
            }
        } // if either are not null


        return $this;
    } // setFaltanteHora()

    /**
     * Set the value of [faltante_cantidad] column.
     *
     * @param  string $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setFaltanteCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faltante_cantidad !== $v) {
            $this->faltante_cantidad = $v;
            $this->modifiedColumns[] = FaltantePeer::FALTANTE_CANTIDAD;
        }


        return $this;
    } // setFaltanteCantidad()

    /**
     * Set the value of [faltante_comentario] column.
     *
     * @param  string $v new value
     * @return Faltante The current object (for fluent API support)
     */
    public function setFaltanteComentario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->faltante_comentario !== $v) {
            $this->faltante_comentario = $v;
            $this->modifiedColumns[] = FaltantePeer::FALTANTE_COMENTARIO;
        }


        return $this;
    } // setFaltanteComentario()

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

            $this->idfaltante = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idclinica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleadogenerador = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idempleadodeudor = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->faltante_creadaen = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->faltante_fecha = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->faltante_hora = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->faltante_cantidad = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->faltante_comentario = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = FaltantePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Faltante object", $e);
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

        if ($this->aEmpleadoRelatedByIdempleadogenerador !== null && $this->idempleadogenerador !== $this->aEmpleadoRelatedByIdempleadogenerador->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadogenerador = null;
        }
        if ($this->aEmpleadoRelatedByIdempleadodeudor !== null && $this->idempleadodeudor !== $this->aEmpleadoRelatedByIdempleadodeudor->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadodeudor = null;
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
            $con = Propel::getConnection(FaltantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FaltantePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleadoRelatedByIdempleadodeudor = null;
            $this->aEmpleadoRelatedByIdempleadogenerador = null;
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
            $con = Propel::getConnection(FaltantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FaltanteQuery::create()
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
            $con = Propel::getConnection(FaltantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FaltantePeer::addInstanceToPool($this);
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

            if ($this->aEmpleadoRelatedByIdempleadodeudor !== null) {
                if ($this->aEmpleadoRelatedByIdempleadodeudor->isModified() || $this->aEmpleadoRelatedByIdempleadodeudor->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadodeudor->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadodeudor($this->aEmpleadoRelatedByIdempleadodeudor);
            }

            if ($this->aEmpleadoRelatedByIdempleadogenerador !== null) {
                if ($this->aEmpleadoRelatedByIdempleadogenerador->isModified() || $this->aEmpleadoRelatedByIdempleadogenerador->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadogenerador->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadogenerador($this->aEmpleadoRelatedByIdempleadogenerador);
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

        $this->modifiedColumns[] = FaltantePeer::IDFALTANTE;
        if (null !== $this->idfaltante) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FaltantePeer::IDFALTANTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FaltantePeer::IDFALTANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idfaltante`';
        }
        if ($this->isColumnModified(FaltantePeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(FaltantePeer::IDEMPLEADOGENERADOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadogenerador`';
        }
        if ($this->isColumnModified(FaltantePeer::IDEMPLEADODEUDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadodeudor`';
        }
        if ($this->isColumnModified(FaltantePeer::FALTANTE_CREADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`faltante_creadaen`';
        }
        if ($this->isColumnModified(FaltantePeer::FALTANTE_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`faltante_fecha`';
        }
        if ($this->isColumnModified(FaltantePeer::FALTANTE_HORA)) {
            $modifiedColumns[':p' . $index++]  = '`faltante_hora`';
        }
        if ($this->isColumnModified(FaltantePeer::FALTANTE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`faltante_cantidad`';
        }
        if ($this->isColumnModified(FaltantePeer::FALTANTE_COMENTARIO)) {
            $modifiedColumns[':p' . $index++]  = '`faltante_comentario`';
        }

        $sql = sprintf(
            'INSERT INTO `faltante` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idfaltante`':
                        $stmt->bindValue($identifier, $this->idfaltante, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`idempleadogenerador`':
                        $stmt->bindValue($identifier, $this->idempleadogenerador, PDO::PARAM_INT);
                        break;
                    case '`idempleadodeudor`':
                        $stmt->bindValue($identifier, $this->idempleadodeudor, PDO::PARAM_INT);
                        break;
                    case '`faltante_creadaen`':
                        $stmt->bindValue($identifier, $this->faltante_creadaen, PDO::PARAM_STR);
                        break;
                    case '`faltante_fecha`':
                        $stmt->bindValue($identifier, $this->faltante_fecha, PDO::PARAM_STR);
                        break;
                    case '`faltante_hora`':
                        $stmt->bindValue($identifier, $this->faltante_hora, PDO::PARAM_STR);
                        break;
                    case '`faltante_cantidad`':
                        $stmt->bindValue($identifier, $this->faltante_cantidad, PDO::PARAM_STR);
                        break;
                    case '`faltante_comentario`':
                        $stmt->bindValue($identifier, $this->faltante_comentario, PDO::PARAM_STR);
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
        $this->setIdfaltante($pk);

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

            if ($this->aEmpleadoRelatedByIdempleadodeudor !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadodeudor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadodeudor->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadogenerador !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadogenerador->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadogenerador->getValidationFailures());
                }
            }


            if (($retval = FaltantePeer::doValidate($this, $columns)) !== true) {
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
        $pos = FaltantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdfaltante();
                break;
            case 1:
                return $this->getIdclinica();
                break;
            case 2:
                return $this->getIdempleadogenerador();
                break;
            case 3:
                return $this->getIdempleadodeudor();
                break;
            case 4:
                return $this->getFaltanteCreadaen();
                break;
            case 5:
                return $this->getFaltanteFecha();
                break;
            case 6:
                return $this->getFaltanteHora();
                break;
            case 7:
                return $this->getFaltanteCantidad();
                break;
            case 8:
                return $this->getFaltanteComentario();
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
        if (isset($alreadyDumpedObjects['Faltante'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Faltante'][$this->getPrimaryKey()] = true;
        $keys = FaltantePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdfaltante(),
            $keys[1] => $this->getIdclinica(),
            $keys[2] => $this->getIdempleadogenerador(),
            $keys[3] => $this->getIdempleadodeudor(),
            $keys[4] => $this->getFaltanteCreadaen(),
            $keys[5] => $this->getFaltanteFecha(),
            $keys[6] => $this->getFaltanteHora(),
            $keys[7] => $this->getFaltanteCantidad(),
            $keys[8] => $this->getFaltanteComentario(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleadoRelatedByIdempleadodeudor) {
                $result['EmpleadoRelatedByIdempleadodeudor'] = $this->aEmpleadoRelatedByIdempleadodeudor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadogenerador) {
                $result['EmpleadoRelatedByIdempleadogenerador'] = $this->aEmpleadoRelatedByIdempleadogenerador->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FaltantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdfaltante($value);
                break;
            case 1:
                $this->setIdclinica($value);
                break;
            case 2:
                $this->setIdempleadogenerador($value);
                break;
            case 3:
                $this->setIdempleadodeudor($value);
                break;
            case 4:
                $this->setFaltanteCreadaen($value);
                break;
            case 5:
                $this->setFaltanteFecha($value);
                break;
            case 6:
                $this->setFaltanteHora($value);
                break;
            case 7:
                $this->setFaltanteCantidad($value);
                break;
            case 8:
                $this->setFaltanteComentario($value);
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
        $keys = FaltantePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdfaltante($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdclinica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleadogenerador($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdempleadodeudor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFaltanteCreadaen($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFaltanteFecha($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFaltanteHora($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFaltanteCantidad($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFaltanteComentario($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FaltantePeer::DATABASE_NAME);

        if ($this->isColumnModified(FaltantePeer::IDFALTANTE)) $criteria->add(FaltantePeer::IDFALTANTE, $this->idfaltante);
        if ($this->isColumnModified(FaltantePeer::IDCLINICA)) $criteria->add(FaltantePeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(FaltantePeer::IDEMPLEADOGENERADOR)) $criteria->add(FaltantePeer::IDEMPLEADOGENERADOR, $this->idempleadogenerador);
        if ($this->isColumnModified(FaltantePeer::IDEMPLEADODEUDOR)) $criteria->add(FaltantePeer::IDEMPLEADODEUDOR, $this->idempleadodeudor);
        if ($this->isColumnModified(FaltantePeer::FALTANTE_CREADAEN)) $criteria->add(FaltantePeer::FALTANTE_CREADAEN, $this->faltante_creadaen);
        if ($this->isColumnModified(FaltantePeer::FALTANTE_FECHA)) $criteria->add(FaltantePeer::FALTANTE_FECHA, $this->faltante_fecha);
        if ($this->isColumnModified(FaltantePeer::FALTANTE_HORA)) $criteria->add(FaltantePeer::FALTANTE_HORA, $this->faltante_hora);
        if ($this->isColumnModified(FaltantePeer::FALTANTE_CANTIDAD)) $criteria->add(FaltantePeer::FALTANTE_CANTIDAD, $this->faltante_cantidad);
        if ($this->isColumnModified(FaltantePeer::FALTANTE_COMENTARIO)) $criteria->add(FaltantePeer::FALTANTE_COMENTARIO, $this->faltante_comentario);

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
        $criteria = new Criteria(FaltantePeer::DATABASE_NAME);
        $criteria->add(FaltantePeer::IDFALTANTE, $this->idfaltante);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdfaltante();
    }

    /**
     * Generic method to set the primary key (idfaltante column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdfaltante($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdfaltante();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Faltante (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setIdempleadogenerador($this->getIdempleadogenerador());
        $copyObj->setIdempleadodeudor($this->getIdempleadodeudor());
        $copyObj->setFaltanteCreadaen($this->getFaltanteCreadaen());
        $copyObj->setFaltanteFecha($this->getFaltanteFecha());
        $copyObj->setFaltanteHora($this->getFaltanteHora());
        $copyObj->setFaltanteCantidad($this->getFaltanteCantidad());
        $copyObj->setFaltanteComentario($this->getFaltanteComentario());

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
            $copyObj->setIdfaltante(NULL); // this is a auto-increment column, so set to default value
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
     * @return Faltante Clone of current object.
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
     * @return FaltantePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FaltantePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Faltante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadodeudor(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadodeudor(NULL);
        } else {
            $this->setIdempleadodeudor($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadodeudor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addFaltanteRelatedByIdempleadodeudor($this);
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
    public function getEmpleadoRelatedByIdempleadodeudor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadodeudor === null && ($this->idempleadodeudor !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadodeudor = EmpleadoQuery::create()->findPk($this->idempleadodeudor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadodeudor->addFaltantesRelatedByIdempleadodeudor($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadodeudor;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Faltante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadogenerador(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadogenerador(NULL);
        } else {
            $this->setIdempleadogenerador($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadogenerador = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addFaltanteRelatedByIdempleadogenerador($this);
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
    public function getEmpleadoRelatedByIdempleadogenerador(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadogenerador === null && ($this->idempleadogenerador !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadogenerador = EmpleadoQuery::create()->findPk($this->idempleadogenerador, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadogenerador->addFaltantesRelatedByIdempleadogenerador($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadogenerador;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idfaltante = null;
        $this->idclinica = null;
        $this->idempleadogenerador = null;
        $this->idempleadodeudor = null;
        $this->faltante_creadaen = null;
        $this->faltante_fecha = null;
        $this->faltante_hora = null;
        $this->faltante_cantidad = null;
        $this->faltante_comentario = null;
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
            if ($this->aEmpleadoRelatedByIdempleadodeudor instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadodeudor->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadogenerador instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadogenerador->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpleadoRelatedByIdempleadodeudor = null;
        $this->aEmpleadoRelatedByIdempleadogenerador = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FaltantePeer::DEFAULT_STRING_FORMAT);
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
