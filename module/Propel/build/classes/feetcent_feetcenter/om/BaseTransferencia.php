<?php


/**
 * Base class that represents a row from the 'transferencia' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferencia extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TransferenciaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TransferenciaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtransferencia field.
     * @var        int
     */
    protected $idtransferencia;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the idempleadoreceptor field.
     * @var        int
     */
    protected $idempleadoreceptor;

    /**
     * The value for the idclinicaremitente field.
     * @var        int
     */
    protected $idclinicaremitente;

    /**
     * The value for the idclinicadestinataria field.
     * @var        int
     */
    protected $idclinicadestinataria;

    /**
     * The value for the transferencia_creadaen field.
     * @var        string
     */
    protected $transferencia_creadaen;

    /**
     * The value for the transferencia_estatus field.
     * @var        string
     */
    protected $transferencia_estatus;

    /**
     * The value for the transferencia_fechamovimiento field.
     * @var        string
     */
    protected $transferencia_fechamovimiento;

    /**
     * The value for the transferencia_comprobante field.
     * @var        string
     */
    protected $transferencia_comprobante;

    /**
     * The value for the transferencia_nota field.
     * @var        string
     */
    protected $transferencia_nota;

    /**
     * @var        Clinica
     */
    protected $aClinicaRelatedByIdclinicadestinataria;

    /**
     * @var        Clinica
     */
    protected $aClinicaRelatedByIdclinicaremitente;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleado;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadoreceptor;

    /**
     * @var        PropelObjectCollection|Transferenciadetalle[] Collection to store aggregation of Transferenciadetalle objects.
     */
    protected $collTransferenciadetalles;
    protected $collTransferenciadetallesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciadetallesScheduledForDeletion = null;

    /**
     * Get the [idtransferencia] column value.
     *
     * @return int
     */
    public function getIdtransferencia()
    {

        return $this->idtransferencia;
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
     * Get the [idempleadoreceptor] column value.
     *
     * @return int
     */
    public function getIdempleadoreceptor()
    {

        return $this->idempleadoreceptor;
    }

    /**
     * Get the [idclinicaremitente] column value.
     *
     * @return int
     */
    public function getIdclinicaremitente()
    {

        return $this->idclinicaremitente;
    }

    /**
     * Get the [idclinicadestinataria] column value.
     *
     * @return int
     */
    public function getIdclinicadestinataria()
    {

        return $this->idclinicadestinataria;
    }

    /**
     * Get the [optionally formatted] temporal [transferencia_creadaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTransferenciaCreadaen($format = 'Y-m-d H:i:s')
    {
        if ($this->transferencia_creadaen === null) {
            return null;
        }

        if ($this->transferencia_creadaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->transferencia_creadaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->transferencia_creadaen, true), $x);
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
     * Get the [transferencia_estatus] column value.
     *
     * @return string
     */
    public function getTransferenciaEstatus()
    {

        return $this->transferencia_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [transferencia_fechamovimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTransferenciaFechamovimiento($format = '%x')
    {
        if ($this->transferencia_fechamovimiento === null) {
            return null;
        }

        if ($this->transferencia_fechamovimiento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->transferencia_fechamovimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->transferencia_fechamovimiento, true), $x);
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
     * Get the [transferencia_comprobante] column value.
     *
     * @return string
     */
    public function getTransferenciaComprobante()
    {

        return $this->transferencia_comprobante;
    }

    /**
     * Get the [transferencia_nota] column value.
     *
     * @return string
     */
    public function getTransferenciaNota()
    {

        return $this->transferencia_nota;
    }

    /**
     * Set the value of [idtransferencia] column.
     *
     * @param  int $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setIdtransferencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtransferencia !== $v) {
            $this->idtransferencia = $v;
            $this->modifiedColumns[] = TransferenciaPeer::IDTRANSFERENCIA;
        }


        return $this;
    } // setIdtransferencia()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = TransferenciaPeer::IDEMPLEADO;
        }

        if ($this->aEmpleadoRelatedByIdempleado !== null && $this->aEmpleadoRelatedByIdempleado->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [idempleadoreceptor] column.
     *
     * @param  int $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setIdempleadoreceptor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadoreceptor !== $v) {
            $this->idempleadoreceptor = $v;
            $this->modifiedColumns[] = TransferenciaPeer::IDEMPLEADORECEPTOR;
        }

        if ($this->aEmpleadoRelatedByIdempleadoreceptor !== null && $this->aEmpleadoRelatedByIdempleadoreceptor->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadoreceptor = null;
        }


        return $this;
    } // setIdempleadoreceptor()

    /**
     * Set the value of [idclinicaremitente] column.
     *
     * @param  int $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setIdclinicaremitente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinicaremitente !== $v) {
            $this->idclinicaremitente = $v;
            $this->modifiedColumns[] = TransferenciaPeer::IDCLINICAREMITENTE;
        }

        if ($this->aClinicaRelatedByIdclinicaremitente !== null && $this->aClinicaRelatedByIdclinicaremitente->getIdclinica() !== $v) {
            $this->aClinicaRelatedByIdclinicaremitente = null;
        }


        return $this;
    } // setIdclinicaremitente()

    /**
     * Set the value of [idclinicadestinataria] column.
     *
     * @param  int $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setIdclinicadestinataria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinicadestinataria !== $v) {
            $this->idclinicadestinataria = $v;
            $this->modifiedColumns[] = TransferenciaPeer::IDCLINICADESTINATARIA;
        }

        if ($this->aClinicaRelatedByIdclinicadestinataria !== null && $this->aClinicaRelatedByIdclinicadestinataria->getIdclinica() !== $v) {
            $this->aClinicaRelatedByIdclinicadestinataria = null;
        }


        return $this;
    } // setIdclinicadestinataria()

    /**
     * Sets the value of [transferencia_creadaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciaCreadaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->transferencia_creadaen !== null || $dt !== null) {
            $currentDateAsString = ($this->transferencia_creadaen !== null && $tmpDt = new DateTime($this->transferencia_creadaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->transferencia_creadaen = $newDateAsString;
                $this->modifiedColumns[] = TransferenciaPeer::TRANSFERENCIA_CREADAEN;
            }
        } // if either are not null


        return $this;
    } // setTransferenciaCreadaen()

    /**
     * Set the value of [transferencia_estatus] column.
     *
     * @param  string $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciaEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->transferencia_estatus !== $v) {
            $this->transferencia_estatus = $v;
            $this->modifiedColumns[] = TransferenciaPeer::TRANSFERENCIA_ESTATUS;
        }


        return $this;
    } // setTransferenciaEstatus()

    /**
     * Sets the value of [transferencia_fechamovimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciaFechamovimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->transferencia_fechamovimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->transferencia_fechamovimiento !== null && $tmpDt = new DateTime($this->transferencia_fechamovimiento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->transferencia_fechamovimiento = $newDateAsString;
                $this->modifiedColumns[] = TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setTransferenciaFechamovimiento()

    /**
     * Set the value of [transferencia_comprobante] column.
     *
     * @param  string $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciaComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->transferencia_comprobante !== $v) {
            $this->transferencia_comprobante = $v;
            $this->modifiedColumns[] = TransferenciaPeer::TRANSFERENCIA_COMPROBANTE;
        }


        return $this;
    } // setTransferenciaComprobante()

    /**
     * Set the value of [transferencia_nota] column.
     *
     * @param  string $v new value
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciaNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->transferencia_nota !== $v) {
            $this->transferencia_nota = $v;
            $this->modifiedColumns[] = TransferenciaPeer::TRANSFERENCIA_NOTA;
        }


        return $this;
    } // setTransferenciaNota()

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

            $this->idtransferencia = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleadoreceptor = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idclinicaremitente = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idclinicadestinataria = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->transferencia_creadaen = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->transferencia_estatus = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->transferencia_fechamovimiento = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->transferencia_comprobante = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->transferencia_nota = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = TransferenciaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Transferencia object", $e);
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

        if ($this->aEmpleadoRelatedByIdempleado !== null && $this->idempleado !== $this->aEmpleadoRelatedByIdempleado->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleado = null;
        }
        if ($this->aEmpleadoRelatedByIdempleadoreceptor !== null && $this->idempleadoreceptor !== $this->aEmpleadoRelatedByIdempleadoreceptor->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadoreceptor = null;
        }
        if ($this->aClinicaRelatedByIdclinicaremitente !== null && $this->idclinicaremitente !== $this->aClinicaRelatedByIdclinicaremitente->getIdclinica()) {
            $this->aClinicaRelatedByIdclinicaremitente = null;
        }
        if ($this->aClinicaRelatedByIdclinicadestinataria !== null && $this->idclinicadestinataria !== $this->aClinicaRelatedByIdclinicadestinataria->getIdclinica()) {
            $this->aClinicaRelatedByIdclinicadestinataria = null;
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
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TransferenciaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinicaRelatedByIdclinicadestinataria = null;
            $this->aClinicaRelatedByIdclinicaremitente = null;
            $this->aEmpleadoRelatedByIdempleado = null;
            $this->aEmpleadoRelatedByIdempleadoreceptor = null;
            $this->collTransferenciadetalles = null;

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
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TransferenciaQuery::create()
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
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TransferenciaPeer::addInstanceToPool($this);
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

            if ($this->aClinicaRelatedByIdclinicadestinataria !== null) {
                if ($this->aClinicaRelatedByIdclinicadestinataria->isModified() || $this->aClinicaRelatedByIdclinicadestinataria->isNew()) {
                    $affectedRows += $this->aClinicaRelatedByIdclinicadestinataria->save($con);
                }
                $this->setClinicaRelatedByIdclinicadestinataria($this->aClinicaRelatedByIdclinicadestinataria);
            }

            if ($this->aClinicaRelatedByIdclinicaremitente !== null) {
                if ($this->aClinicaRelatedByIdclinicaremitente->isModified() || $this->aClinicaRelatedByIdclinicaremitente->isNew()) {
                    $affectedRows += $this->aClinicaRelatedByIdclinicaremitente->save($con);
                }
                $this->setClinicaRelatedByIdclinicaremitente($this->aClinicaRelatedByIdclinicaremitente);
            }

            if ($this->aEmpleadoRelatedByIdempleado !== null) {
                if ($this->aEmpleadoRelatedByIdempleado->isModified() || $this->aEmpleadoRelatedByIdempleado->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleado->save($con);
                }
                $this->setEmpleadoRelatedByIdempleado($this->aEmpleadoRelatedByIdempleado);
            }

            if ($this->aEmpleadoRelatedByIdempleadoreceptor !== null) {
                if ($this->aEmpleadoRelatedByIdempleadoreceptor->isModified() || $this->aEmpleadoRelatedByIdempleadoreceptor->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadoreceptor->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadoreceptor($this->aEmpleadoRelatedByIdempleadoreceptor);
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

            if ($this->transferenciadetallesScheduledForDeletion !== null) {
                if (!$this->transferenciadetallesScheduledForDeletion->isEmpty()) {
                    TransferenciadetalleQuery::create()
                        ->filterByPrimaryKeys($this->transferenciadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciadetalles !== null) {
                foreach ($this->collTransferenciadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = TransferenciaPeer::IDTRANSFERENCIA;
        if (null !== $this->idtransferencia) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TransferenciaPeer::IDTRANSFERENCIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TransferenciaPeer::IDTRANSFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`idtransferencia`';
        }
        if ($this->isColumnModified(TransferenciaPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(TransferenciaPeer::IDEMPLEADORECEPTOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadoreceptor`';
        }
        if ($this->isColumnModified(TransferenciaPeer::IDCLINICAREMITENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idclinicaremitente`';
        }
        if ($this->isColumnModified(TransferenciaPeer::IDCLINICADESTINATARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinicadestinataria`';
        }
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_CREADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`transferencia_creadaen`';
        }
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`transferencia_estatus`';
        }
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`transferencia_fechamovimiento`';
        }
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`transferencia_comprobante`';
        }
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`transferencia_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `transferencia` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtransferencia`':
                        $stmt->bindValue($identifier, $this->idtransferencia, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`idempleadoreceptor`':
                        $stmt->bindValue($identifier, $this->idempleadoreceptor, PDO::PARAM_INT);
                        break;
                    case '`idclinicaremitente`':
                        $stmt->bindValue($identifier, $this->idclinicaremitente, PDO::PARAM_INT);
                        break;
                    case '`idclinicadestinataria`':
                        $stmt->bindValue($identifier, $this->idclinicadestinataria, PDO::PARAM_INT);
                        break;
                    case '`transferencia_creadaen`':
                        $stmt->bindValue($identifier, $this->transferencia_creadaen, PDO::PARAM_STR);
                        break;
                    case '`transferencia_estatus`':
                        $stmt->bindValue($identifier, $this->transferencia_estatus, PDO::PARAM_STR);
                        break;
                    case '`transferencia_fechamovimiento`':
                        $stmt->bindValue($identifier, $this->transferencia_fechamovimiento, PDO::PARAM_STR);
                        break;
                    case '`transferencia_comprobante`':
                        $stmt->bindValue($identifier, $this->transferencia_comprobante, PDO::PARAM_STR);
                        break;
                    case '`transferencia_nota`':
                        $stmt->bindValue($identifier, $this->transferencia_nota, PDO::PARAM_STR);
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
        $this->setIdtransferencia($pk);

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

            if ($this->aClinicaRelatedByIdclinicadestinataria !== null) {
                if (!$this->aClinicaRelatedByIdclinicadestinataria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClinicaRelatedByIdclinicadestinataria->getValidationFailures());
                }
            }

            if ($this->aClinicaRelatedByIdclinicaremitente !== null) {
                if (!$this->aClinicaRelatedByIdclinicaremitente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClinicaRelatedByIdclinicaremitente->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleado !== null) {
                if (!$this->aEmpleadoRelatedByIdempleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleado->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadoreceptor !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadoreceptor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadoreceptor->getValidationFailures());
                }
            }


            if (($retval = TransferenciaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTransferenciadetalles !== null) {
                    foreach ($this->collTransferenciadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = TransferenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtransferencia();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getIdempleadoreceptor();
                break;
            case 3:
                return $this->getIdclinicaremitente();
                break;
            case 4:
                return $this->getIdclinicadestinataria();
                break;
            case 5:
                return $this->getTransferenciaCreadaen();
                break;
            case 6:
                return $this->getTransferenciaEstatus();
                break;
            case 7:
                return $this->getTransferenciaFechamovimiento();
                break;
            case 8:
                return $this->getTransferenciaComprobante();
                break;
            case 9:
                return $this->getTransferenciaNota();
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
        if (isset($alreadyDumpedObjects['Transferencia'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Transferencia'][$this->getPrimaryKey()] = true;
        $keys = TransferenciaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtransferencia(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getIdempleadoreceptor(),
            $keys[3] => $this->getIdclinicaremitente(),
            $keys[4] => $this->getIdclinicadestinataria(),
            $keys[5] => $this->getTransferenciaCreadaen(),
            $keys[6] => $this->getTransferenciaEstatus(),
            $keys[7] => $this->getTransferenciaFechamovimiento(),
            $keys[8] => $this->getTransferenciaComprobante(),
            $keys[9] => $this->getTransferenciaNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinicaRelatedByIdclinicadestinataria) {
                $result['ClinicaRelatedByIdclinicadestinataria'] = $this->aClinicaRelatedByIdclinicadestinataria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClinicaRelatedByIdclinicaremitente) {
                $result['ClinicaRelatedByIdclinicaremitente'] = $this->aClinicaRelatedByIdclinicaremitente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleado) {
                $result['EmpleadoRelatedByIdempleado'] = $this->aEmpleadoRelatedByIdempleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadoreceptor) {
                $result['EmpleadoRelatedByIdempleadoreceptor'] = $this->aEmpleadoRelatedByIdempleadoreceptor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTransferenciadetalles) {
                $result['Transferenciadetalles'] = $this->collTransferenciadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TransferenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtransferencia($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setIdempleadoreceptor($value);
                break;
            case 3:
                $this->setIdclinicaremitente($value);
                break;
            case 4:
                $this->setIdclinicadestinataria($value);
                break;
            case 5:
                $this->setTransferenciaCreadaen($value);
                break;
            case 6:
                $this->setTransferenciaEstatus($value);
                break;
            case 7:
                $this->setTransferenciaFechamovimiento($value);
                break;
            case 8:
                $this->setTransferenciaComprobante($value);
                break;
            case 9:
                $this->setTransferenciaNota($value);
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
        $keys = TransferenciaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtransferencia($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleadoreceptor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdclinicaremitente($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdclinicadestinataria($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTransferenciaCreadaen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTransferenciaEstatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTransferenciaFechamovimiento($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTransferenciaComprobante($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTransferenciaNota($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);

        if ($this->isColumnModified(TransferenciaPeer::IDTRANSFERENCIA)) $criteria->add(TransferenciaPeer::IDTRANSFERENCIA, $this->idtransferencia);
        if ($this->isColumnModified(TransferenciaPeer::IDEMPLEADO)) $criteria->add(TransferenciaPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(TransferenciaPeer::IDEMPLEADORECEPTOR)) $criteria->add(TransferenciaPeer::IDEMPLEADORECEPTOR, $this->idempleadoreceptor);
        if ($this->isColumnModified(TransferenciaPeer::IDCLINICAREMITENTE)) $criteria->add(TransferenciaPeer::IDCLINICAREMITENTE, $this->idclinicaremitente);
        if ($this->isColumnModified(TransferenciaPeer::IDCLINICADESTINATARIA)) $criteria->add(TransferenciaPeer::IDCLINICADESTINATARIA, $this->idclinicadestinataria);
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_CREADAEN)) $criteria->add(TransferenciaPeer::TRANSFERENCIA_CREADAEN, $this->transferencia_creadaen);
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_ESTATUS)) $criteria->add(TransferenciaPeer::TRANSFERENCIA_ESTATUS, $this->transferencia_estatus);
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO)) $criteria->add(TransferenciaPeer::TRANSFERENCIA_FECHAMOVIMIENTO, $this->transferencia_fechamovimiento);
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_COMPROBANTE)) $criteria->add(TransferenciaPeer::TRANSFERENCIA_COMPROBANTE, $this->transferencia_comprobante);
        if ($this->isColumnModified(TransferenciaPeer::TRANSFERENCIA_NOTA)) $criteria->add(TransferenciaPeer::TRANSFERENCIA_NOTA, $this->transferencia_nota);

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
        $criteria = new Criteria(TransferenciaPeer::DATABASE_NAME);
        $criteria->add(TransferenciaPeer::IDTRANSFERENCIA, $this->idtransferencia);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtransferencia();
    }

    /**
     * Generic method to set the primary key (idtransferencia column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtransferencia($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtransferencia();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Transferencia (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setIdempleadoreceptor($this->getIdempleadoreceptor());
        $copyObj->setIdclinicaremitente($this->getIdclinicaremitente());
        $copyObj->setIdclinicadestinataria($this->getIdclinicadestinataria());
        $copyObj->setTransferenciaCreadaen($this->getTransferenciaCreadaen());
        $copyObj->setTransferenciaEstatus($this->getTransferenciaEstatus());
        $copyObj->setTransferenciaFechamovimiento($this->getTransferenciaFechamovimiento());
        $copyObj->setTransferenciaComprobante($this->getTransferenciaComprobante());
        $copyObj->setTransferenciaNota($this->getTransferenciaNota());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTransferenciadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdtransferencia(NULL); // this is a auto-increment column, so set to default value
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
     * @return Transferencia Clone of current object.
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
     * @return TransferenciaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TransferenciaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Transferencia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClinicaRelatedByIdclinicadestinataria(Clinica $v = null)
    {
        if ($v === null) {
            $this->setIdclinicadestinataria(NULL);
        } else {
            $this->setIdclinicadestinataria($v->getIdclinica());
        }

        $this->aClinicaRelatedByIdclinicadestinataria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clinica object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciaRelatedByIdclinicadestinataria($this);
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
    public function getClinicaRelatedByIdclinicadestinataria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClinicaRelatedByIdclinicadestinataria === null && ($this->idclinicadestinataria !== null) && $doQuery) {
            $this->aClinicaRelatedByIdclinicadestinataria = ClinicaQuery::create()->findPk($this->idclinicadestinataria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClinicaRelatedByIdclinicadestinataria->addTransferenciasRelatedByIdclinicadestinataria($this);
             */
        }

        return $this->aClinicaRelatedByIdclinicadestinataria;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Transferencia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClinicaRelatedByIdclinicaremitente(Clinica $v = null)
    {
        if ($v === null) {
            $this->setIdclinicaremitente(NULL);
        } else {
            $this->setIdclinicaremitente($v->getIdclinica());
        }

        $this->aClinicaRelatedByIdclinicaremitente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clinica object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciaRelatedByIdclinicaremitente($this);
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
    public function getClinicaRelatedByIdclinicaremitente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClinicaRelatedByIdclinicaremitente === null && ($this->idclinicaremitente !== null) && $doQuery) {
            $this->aClinicaRelatedByIdclinicaremitente = ClinicaQuery::create()->findPk($this->idclinicaremitente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClinicaRelatedByIdclinicaremitente->addTransferenciasRelatedByIdclinicaremitente($this);
             */
        }

        return $this->aClinicaRelatedByIdclinicaremitente;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Transferencia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciaRelatedByIdempleado($this);
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
    public function getEmpleadoRelatedByIdempleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleado->addTransferenciasRelatedByIdempleado($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleado;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Transferencia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadoreceptor(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadoreceptor(NULL);
        } else {
            $this->setIdempleadoreceptor($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadoreceptor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciaRelatedByIdempleadoreceptor($this);
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
    public function getEmpleadoRelatedByIdempleadoreceptor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadoreceptor === null && ($this->idempleadoreceptor !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadoreceptor = EmpleadoQuery::create()->findPk($this->idempleadoreceptor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadoreceptor->addTransferenciasRelatedByIdempleadoreceptor($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadoreceptor;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Transferenciadetalle' == $relationName) {
            $this->initTransferenciadetalles();
        }
    }

    /**
     * Clears out the collTransferenciadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Transferencia The current object (for fluent API support)
     * @see        addTransferenciadetalles()
     */
    public function clearTransferenciadetalles()
    {
        $this->collTransferenciadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciadetalles($v = true)
    {
        $this->collTransferenciadetallesPartial = $v;
    }

    /**
     * Initializes the collTransferenciadetalles collection.
     *
     * By default this just sets the collTransferenciadetalles collection to an empty array (like clearcollTransferenciadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciadetalles($overrideExisting = true)
    {
        if (null !== $this->collTransferenciadetalles && !$overrideExisting) {
            return;
        }
        $this->collTransferenciadetalles = new PropelObjectCollection();
        $this->collTransferenciadetalles->setModel('Transferenciadetalle');
    }

    /**
     * Gets an array of Transferenciadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Transferencia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     * @throws PropelException
     */
    public function getTransferenciadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                // return empty collection
                $this->initTransferenciadetalles();
            } else {
                $collTransferenciadetalles = TransferenciadetalleQuery::create(null, $criteria)
                    ->filterByTransferencia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciadetallesPartial && count($collTransferenciadetalles)) {
                      $this->initTransferenciadetalles(false);

                      foreach ($collTransferenciadetalles as $obj) {
                        if (false == $this->collTransferenciadetalles->contains($obj)) {
                          $this->collTransferenciadetalles->append($obj);
                        }
                      }

                      $this->collTransferenciadetallesPartial = true;
                    }

                    $collTransferenciadetalles->getInternalIterator()->rewind();

                    return $collTransferenciadetalles;
                }

                if ($partial && $this->collTransferenciadetalles) {
                    foreach ($this->collTransferenciadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciadetalles[] = $obj;
                        }
                    }
                }

                $this->collTransferenciadetalles = $collTransferenciadetalles;
                $this->collTransferenciadetallesPartial = false;
            }
        }

        return $this->collTransferenciadetalles;
    }

    /**
     * Sets a collection of Transferenciadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Transferencia The current object (for fluent API support)
     */
    public function setTransferenciadetalles(PropelCollection $transferenciadetalles, PropelPDO $con = null)
    {
        $transferenciadetallesToDelete = $this->getTransferenciadetalles(new Criteria(), $con)->diff($transferenciadetalles);


        $this->transferenciadetallesScheduledForDeletion = $transferenciadetallesToDelete;

        foreach ($transferenciadetallesToDelete as $transferenciadetalleRemoved) {
            $transferenciadetalleRemoved->setTransferencia(null);
        }

        $this->collTransferenciadetalles = null;
        foreach ($transferenciadetalles as $transferenciadetalle) {
            $this->addTransferenciadetalle($transferenciadetalle);
        }

        $this->collTransferenciadetalles = $transferenciadetalles;
        $this->collTransferenciadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferenciadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferenciadetalle objects.
     * @throws PropelException
     */
    public function countTransferenciadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciadetalles());
            }
            $query = TransferenciadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTransferencia($this)
                ->count($con);
        }

        return count($this->collTransferenciadetalles);
    }

    /**
     * Method called to associate a Transferenciadetalle object to this object
     * through the Transferenciadetalle foreign key attribute.
     *
     * @param    Transferenciadetalle $l Transferenciadetalle
     * @return Transferencia The current object (for fluent API support)
     */
    public function addTransferenciadetalle(Transferenciadetalle $l)
    {
        if ($this->collTransferenciadetalles === null) {
            $this->initTransferenciadetalles();
            $this->collTransferenciadetallesPartial = true;
        }

        if (!in_array($l, $this->collTransferenciadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciadetalle($l);

            if ($this->transferenciadetallesScheduledForDeletion and $this->transferenciadetallesScheduledForDeletion->contains($l)) {
                $this->transferenciadetallesScheduledForDeletion->remove($this->transferenciadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to add.
     */
    protected function doAddTransferenciadetalle($transferenciadetalle)
    {
        $this->collTransferenciadetalles[]= $transferenciadetalle;
        $transferenciadetalle->setTransferencia($this);
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to remove.
     * @return Transferencia The current object (for fluent API support)
     */
    public function removeTransferenciadetalle($transferenciadetalle)
    {
        if ($this->getTransferenciadetalles()->contains($transferenciadetalle)) {
            $this->collTransferenciadetalles->remove($this->collTransferenciadetalles->search($transferenciadetalle));
            if (null === $this->transferenciadetallesScheduledForDeletion) {
                $this->transferenciadetallesScheduledForDeletion = clone $this->collTransferenciadetalles;
                $this->transferenciadetallesScheduledForDeletion->clear();
            }
            $this->transferenciadetallesScheduledForDeletion[]= clone $transferenciadetalle;
            $transferenciadetalle->setTransferencia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Transferencia is new, it will return
     * an empty collection; or if this Transferencia has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Transferencia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinInsumoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Insumoclinica', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Transferencia is new, it will return
     * an empty collection; or if this Transferencia has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Transferencia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinProductoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Productoclinica', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtransferencia = null;
        $this->idempleado = null;
        $this->idempleadoreceptor = null;
        $this->idclinicaremitente = null;
        $this->idclinicadestinataria = null;
        $this->transferencia_creadaen = null;
        $this->transferencia_estatus = null;
        $this->transferencia_fechamovimiento = null;
        $this->transferencia_comprobante = null;
        $this->transferencia_nota = null;
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
            if ($this->collTransferenciadetalles) {
                foreach ($this->collTransferenciadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinicaRelatedByIdclinicadestinataria instanceof Persistent) {
              $this->aClinicaRelatedByIdclinicadestinataria->clearAllReferences($deep);
            }
            if ($this->aClinicaRelatedByIdclinicaremitente instanceof Persistent) {
              $this->aClinicaRelatedByIdclinicaremitente->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleado instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleado->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadoreceptor instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadoreceptor->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTransferenciadetalles instanceof PropelCollection) {
            $this->collTransferenciadetalles->clearIterator();
        }
        $this->collTransferenciadetalles = null;
        $this->aClinicaRelatedByIdclinicadestinataria = null;
        $this->aClinicaRelatedByIdclinicaremitente = null;
        $this->aEmpleadoRelatedByIdempleado = null;
        $this->aEmpleadoRelatedByIdempleadoreceptor = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TransferenciaPeer::DEFAULT_STRING_FORMAT);
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
