<?php


/**
 * Base class that represents a row from the 'pacientemembresia' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BasePacientemembresia extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PacientemembresiaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PacientemembresiaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpacientemembresia field.
     * @var        int
     */
    protected $idpacientemembresia;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the idmembresia field.
     * @var        int
     */
    protected $idmembresia;

    /**
     * The value for the pacientemembresia_folio field.
     * @var        string
     */
    protected $pacientemembresia_folio;

    /**
     * The value for the pacientemembresia_fechainicio field.
     * @var        string
     */
    protected $pacientemembresia_fechainicio;

    /**
     * The value for the pacientemembresia_serviciosdisponibles field.
     * @var        int
     */
    protected $pacientemembresia_serviciosdisponibles;

    /**
     * The value for the pacientemembresia_cuponesdisponibles field.
     * @var        int
     */
    protected $pacientemembresia_cuponesdisponibles;

    /**
     * The value for the pacientemembresia_estatus field.
     * @var        string
     */
    protected $pacientemembresia_estatus;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Membresia
     */
    protected $aMembresia;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Pacientemembresiadetalle[] Collection to store aggregation of Pacientemembresiadetalle objects.
     */
    protected $collPacientemembresiadetalles;
    protected $collPacientemembresiadetallesPartial;

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
    protected $pacientemembresiadetallesScheduledForDeletion = null;

    /**
     * Get the [idpacientemembresia] column value.
     *
     * @return int
     */
    public function getIdpacientemembresia()
    {

        return $this->idpacientemembresia;
    }

    /**
     * Get the [idpaciente] column value.
     *
     * @return int
     */
    public function getIdpaciente()
    {

        return $this->idpaciente;
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
     * Get the [idmembresia] column value.
     *
     * @return int
     */
    public function getIdmembresia()
    {

        return $this->idmembresia;
    }

    /**
     * Get the [pacientemembresia_folio] column value.
     *
     * @return string
     */
    public function getPacientemembresiaFolio()
    {

        return $this->pacientemembresia_folio;
    }

    /**
     * Get the [optionally formatted] temporal [pacientemembresia_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPacientemembresiaFechainicio($format = 'Y-m-d H:i:s')
    {
        if ($this->pacientemembresia_fechainicio === null) {
            return null;
        }

        if ($this->pacientemembresia_fechainicio === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pacientemembresia_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pacientemembresia_fechainicio, true), $x);
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
     * Get the [pacientemembresia_serviciosdisponibles] column value.
     *
     * @return int
     */
    public function getPacientemembresiaServiciosdisponibles()
    {

        return $this->pacientemembresia_serviciosdisponibles;
    }

    /**
     * Get the [pacientemembresia_cuponesdisponibles] column value.
     *
     * @return int
     */
    public function getPacientemembresiaCuponesdisponibles()
    {

        return $this->pacientemembresia_cuponesdisponibles;
    }

    /**
     * Get the [pacientemembresia_estatus] column value.
     *
     * @return string
     */
    public function getPacientemembresiaEstatus()
    {

        return $this->pacientemembresia_estatus;
    }

    /**
     * Set the value of [idpacientemembresia] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setIdpacientemembresia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpacientemembresia !== $v) {
            $this->idpacientemembresia = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::IDPACIENTEMEMBRESIA;
        }


        return $this;
    } // setIdpacientemembresia()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [idmembresia] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setIdmembresia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmembresia !== $v) {
            $this->idmembresia = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::IDMEMBRESIA;
        }

        if ($this->aMembresia !== null && $this->aMembresia->getIdmembresia() !== $v) {
            $this->aMembresia = null;
        }


        return $this;
    } // setIdmembresia()

    /**
     * Set the value of [pacientemembresia_folio] column.
     *
     * @param  string $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiaFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientemembresia_folio !== $v) {
            $this->pacientemembresia_folio = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::PACIENTEMEMBRESIA_FOLIO;
        }


        return $this;
    } // setPacientemembresiaFolio()

    /**
     * Sets the value of [pacientemembresia_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiaFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pacientemembresia_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->pacientemembresia_fechainicio !== null && $tmpDt = new DateTime($this->pacientemembresia_fechainicio)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pacientemembresia_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setPacientemembresiaFechainicio()

    /**
     * Set the value of [pacientemembresia_serviciosdisponibles] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiaServiciosdisponibles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pacientemembresia_serviciosdisponibles !== $v) {
            $this->pacientemembresia_serviciosdisponibles = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES;
        }


        return $this;
    } // setPacientemembresiaServiciosdisponibles()

    /**
     * Set the value of [pacientemembresia_cuponesdisponibles] column.
     *
     * @param  int $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiaCuponesdisponibles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pacientemembresia_cuponesdisponibles !== $v) {
            $this->pacientemembresia_cuponesdisponibles = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES;
        }


        return $this;
    } // setPacientemembresiaCuponesdisponibles()

    /**
     * Set the value of [pacientemembresia_estatus] column.
     *
     * @param  string $v new value
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiaEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientemembresia_estatus !== $v) {
            $this->pacientemembresia_estatus = $v;
            $this->modifiedColumns[] = PacientemembresiaPeer::PACIENTEMEMBRESIA_ESTATUS;
        }


        return $this;
    } // setPacientemembresiaEstatus()

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

            $this->idpacientemembresia = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idmembresia = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->pacientemembresia_folio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->pacientemembresia_fechainicio = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pacientemembresia_serviciosdisponibles = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->pacientemembresia_cuponesdisponibles = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->pacientemembresia_estatus = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = PacientemembresiaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pacientemembresia object", $e);
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

        if ($this->aPaciente !== null && $this->idpaciente !== $this->aPaciente->getIdpaciente()) {
            $this->aPaciente = null;
        }
        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
        }
        if ($this->aMembresia !== null && $this->idmembresia !== $this->aMembresia->getIdmembresia()) {
            $this->aMembresia = null;
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
            $con = Propel::getConnection(PacientemembresiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PacientemembresiaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aMembresia = null;
            $this->aPaciente = null;
            $this->collPacientemembresiadetalles = null;

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
            $con = Propel::getConnection(PacientemembresiaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PacientemembresiaQuery::create()
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
            $con = Propel::getConnection(PacientemembresiaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PacientemembresiaPeer::addInstanceToPool($this);
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

            if ($this->aMembresia !== null) {
                if ($this->aMembresia->isModified() || $this->aMembresia->isNew()) {
                    $affectedRows += $this->aMembresia->save($con);
                }
                $this->setMembresia($this->aMembresia);
            }

            if ($this->aPaciente !== null) {
                if ($this->aPaciente->isModified() || $this->aPaciente->isNew()) {
                    $affectedRows += $this->aPaciente->save($con);
                }
                $this->setPaciente($this->aPaciente);
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

            if ($this->pacientemembresiadetallesScheduledForDeletion !== null) {
                if (!$this->pacientemembresiadetallesScheduledForDeletion->isEmpty()) {
                    PacientemembresiadetalleQuery::create()
                        ->filterByPrimaryKeys($this->pacientemembresiadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientemembresiadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPacientemembresiadetalles !== null) {
                foreach ($this->collPacientemembresiadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = PacientemembresiaPeer::IDPACIENTEMEMBRESIA;
        if (null !== $this->idpacientemembresia) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PacientemembresiaPeer::IDPACIENTEMEMBRESIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PacientemembresiaPeer::IDPACIENTEMEMBRESIA)) {
            $modifiedColumns[':p' . $index++]  = '`idpacientemembresia`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::IDMEMBRESIA)) {
            $modifiedColumns[':p' . $index++]  = '`idmembresia`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`pacientemembresia_folio`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`pacientemembresia_fechainicio`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES)) {
            $modifiedColumns[':p' . $index++]  = '`pacientemembresia_serviciosdisponibles`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES)) {
            $modifiedColumns[':p' . $index++]  = '`pacientemembresia_cuponesdisponibles`';
        }
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`pacientemembresia_estatus`';
        }

        $sql = sprintf(
            'INSERT INTO `pacientemembresia` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpacientemembresia`':
                        $stmt->bindValue($identifier, $this->idpacientemembresia, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`idmembresia`':
                        $stmt->bindValue($identifier, $this->idmembresia, PDO::PARAM_INT);
                        break;
                    case '`pacientemembresia_folio`':
                        $stmt->bindValue($identifier, $this->pacientemembresia_folio, PDO::PARAM_STR);
                        break;
                    case '`pacientemembresia_fechainicio`':
                        $stmt->bindValue($identifier, $this->pacientemembresia_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`pacientemembresia_serviciosdisponibles`':
                        $stmt->bindValue($identifier, $this->pacientemembresia_serviciosdisponibles, PDO::PARAM_INT);
                        break;
                    case '`pacientemembresia_cuponesdisponibles`':
                        $stmt->bindValue($identifier, $this->pacientemembresia_cuponesdisponibles, PDO::PARAM_INT);
                        break;
                    case '`pacientemembresia_estatus`':
                        $stmt->bindValue($identifier, $this->pacientemembresia_estatus, PDO::PARAM_STR);
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
        $this->setIdpacientemembresia($pk);

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

            if ($this->aMembresia !== null) {
                if (!$this->aMembresia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMembresia->getValidationFailures());
                }
            }

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = PacientemembresiaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPacientemembresiadetalles !== null) {
                    foreach ($this->collPacientemembresiadetalles as $referrerFK) {
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
        $pos = PacientemembresiaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpacientemembresia();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getIdclinica();
                break;
            case 3:
                return $this->getIdmembresia();
                break;
            case 4:
                return $this->getPacientemembresiaFolio();
                break;
            case 5:
                return $this->getPacientemembresiaFechainicio();
                break;
            case 6:
                return $this->getPacientemembresiaServiciosdisponibles();
                break;
            case 7:
                return $this->getPacientemembresiaCuponesdisponibles();
                break;
            case 8:
                return $this->getPacientemembresiaEstatus();
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
        if (isset($alreadyDumpedObjects['Pacientemembresia'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pacientemembresia'][$this->getPrimaryKey()] = true;
        $keys = PacientemembresiaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpacientemembresia(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getIdclinica(),
            $keys[3] => $this->getIdmembresia(),
            $keys[4] => $this->getPacientemembresiaFolio(),
            $keys[5] => $this->getPacientemembresiaFechainicio(),
            $keys[6] => $this->getPacientemembresiaServiciosdisponibles(),
            $keys[7] => $this->getPacientemembresiaCuponesdisponibles(),
            $keys[8] => $this->getPacientemembresiaEstatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMembresia) {
                $result['Membresia'] = $this->aMembresia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPacientemembresiadetalles) {
                $result['Pacientemembresiadetalles'] = $this->collPacientemembresiadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PacientemembresiaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpacientemembresia($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setIdclinica($value);
                break;
            case 3:
                $this->setIdmembresia($value);
                break;
            case 4:
                $this->setPacientemembresiaFolio($value);
                break;
            case 5:
                $this->setPacientemembresiaFechainicio($value);
                break;
            case 6:
                $this->setPacientemembresiaServiciosdisponibles($value);
                break;
            case 7:
                $this->setPacientemembresiaCuponesdisponibles($value);
                break;
            case 8:
                $this->setPacientemembresiaEstatus($value);
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
        $keys = PacientemembresiaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpacientemembresia($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdmembresia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPacientemembresiaFolio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPacientemembresiaFechainicio($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPacientemembresiaServiciosdisponibles($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPacientemembresiaCuponesdisponibles($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPacientemembresiaEstatus($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PacientemembresiaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PacientemembresiaPeer::IDPACIENTEMEMBRESIA)) $criteria->add(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $this->idpacientemembresia);
        if ($this->isColumnModified(PacientemembresiaPeer::IDPACIENTE)) $criteria->add(PacientemembresiaPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(PacientemembresiaPeer::IDCLINICA)) $criteria->add(PacientemembresiaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(PacientemembresiaPeer::IDMEMBRESIA)) $criteria->add(PacientemembresiaPeer::IDMEMBRESIA, $this->idmembresia);
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_FOLIO)) $criteria->add(PacientemembresiaPeer::PACIENTEMEMBRESIA_FOLIO, $this->pacientemembresia_folio);
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO)) $criteria->add(PacientemembresiaPeer::PACIENTEMEMBRESIA_FECHAINICIO, $this->pacientemembresia_fechainicio);
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES)) $criteria->add(PacientemembresiaPeer::PACIENTEMEMBRESIA_SERVICIOSDISPONIBLES, $this->pacientemembresia_serviciosdisponibles);
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES)) $criteria->add(PacientemembresiaPeer::PACIENTEMEMBRESIA_CUPONESDISPONIBLES, $this->pacientemembresia_cuponesdisponibles);
        if ($this->isColumnModified(PacientemembresiaPeer::PACIENTEMEMBRESIA_ESTATUS)) $criteria->add(PacientemembresiaPeer::PACIENTEMEMBRESIA_ESTATUS, $this->pacientemembresia_estatus);

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
        $criteria = new Criteria(PacientemembresiaPeer::DATABASE_NAME);
        $criteria->add(PacientemembresiaPeer::IDPACIENTEMEMBRESIA, $this->idpacientemembresia);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpacientemembresia();
    }

    /**
     * Generic method to set the primary key (idpacientemembresia column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpacientemembresia($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpacientemembresia();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pacientemembresia (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setIdmembresia($this->getIdmembresia());
        $copyObj->setPacientemembresiaFolio($this->getPacientemembresiaFolio());
        $copyObj->setPacientemembresiaFechainicio($this->getPacientemembresiaFechainicio());
        $copyObj->setPacientemembresiaServiciosdisponibles($this->getPacientemembresiaServiciosdisponibles());
        $copyObj->setPacientemembresiaCuponesdisponibles($this->getPacientemembresiaCuponesdisponibles());
        $copyObj->setPacientemembresiaEstatus($this->getPacientemembresiaEstatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPacientemembresiadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacientemembresiadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpacientemembresia(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pacientemembresia Clone of current object.
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
     * @return PacientemembresiaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PacientemembresiaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Pacientemembresia The current object (for fluent API support)
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
            $v->addPacientemembresia($this);
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
                $this->aClinica->addPacientemembresias($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Membresia object.
     *
     * @param                  Membresia $v
     * @return Pacientemembresia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMembresia(Membresia $v = null)
    {
        if ($v === null) {
            $this->setIdmembresia(NULL);
        } else {
            $this->setIdmembresia($v->getIdmembresia());
        }

        $this->aMembresia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Membresia object, it will not be re-added.
        if ($v !== null) {
            $v->addPacientemembresia($this);
        }


        return $this;
    }


    /**
     * Get the associated Membresia object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Membresia The associated Membresia object.
     * @throws PropelException
     */
    public function getMembresia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMembresia === null && ($this->idmembresia !== null) && $doQuery) {
            $this->aMembresia = MembresiaQuery::create()->findPk($this->idmembresia, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMembresia->addPacientemembresias($this);
             */
        }

        return $this->aMembresia;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Pacientemembresia The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPaciente(Paciente $v = null)
    {
        if ($v === null) {
            $this->setIdpaciente(NULL);
        } else {
            $this->setIdpaciente($v->getIdpaciente());
        }

        $this->aPaciente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Paciente object, it will not be re-added.
        if ($v !== null) {
            $v->addPacientemembresia($this);
        }


        return $this;
    }


    /**
     * Get the associated Paciente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paciente The associated Paciente object.
     * @throws PropelException
     */
    public function getPaciente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaciente === null && ($this->idpaciente !== null) && $doQuery) {
            $this->aPaciente = PacienteQuery::create()->findPk($this->idpaciente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPaciente->addPacientemembresias($this);
             */
        }

        return $this->aPaciente;
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
        if ('Pacientemembresiadetalle' == $relationName) {
            $this->initPacientemembresiadetalles();
        }
    }

    /**
     * Clears out the collPacientemembresiadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Pacientemembresia The current object (for fluent API support)
     * @see        addPacientemembresiadetalles()
     */
    public function clearPacientemembresiadetalles()
    {
        $this->collPacientemembresiadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPacientemembresiadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientemembresiadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientemembresiadetalles($v = true)
    {
        $this->collPacientemembresiadetallesPartial = $v;
    }

    /**
     * Initializes the collPacientemembresiadetalles collection.
     *
     * By default this just sets the collPacientemembresiadetalles collection to an empty array (like clearcollPacientemembresiadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientemembresiadetalles($overrideExisting = true)
    {
        if (null !== $this->collPacientemembresiadetalles && !$overrideExisting) {
            return;
        }
        $this->collPacientemembresiadetalles = new PropelObjectCollection();
        $this->collPacientemembresiadetalles->setModel('Pacientemembresiadetalle');
    }

    /**
     * Gets an array of Pacientemembresiadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Pacientemembresia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pacientemembresiadetalle[] List of Pacientemembresiadetalle objects
     * @throws PropelException
     */
    public function getPacientemembresiadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiadetallesPartial && !$this->isNew();
        if (null === $this->collPacientemembresiadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresiadetalles) {
                // return empty collection
                $this->initPacientemembresiadetalles();
            } else {
                $collPacientemembresiadetalles = PacientemembresiadetalleQuery::create(null, $criteria)
                    ->filterByPacientemembresia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientemembresiadetallesPartial && count($collPacientemembresiadetalles)) {
                      $this->initPacientemembresiadetalles(false);

                      foreach ($collPacientemembresiadetalles as $obj) {
                        if (false == $this->collPacientemembresiadetalles->contains($obj)) {
                          $this->collPacientemembresiadetalles->append($obj);
                        }
                      }

                      $this->collPacientemembresiadetallesPartial = true;
                    }

                    $collPacientemembresiadetalles->getInternalIterator()->rewind();

                    return $collPacientemembresiadetalles;
                }

                if ($partial && $this->collPacientemembresiadetalles) {
                    foreach ($this->collPacientemembresiadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPacientemembresiadetalles[] = $obj;
                        }
                    }
                }

                $this->collPacientemembresiadetalles = $collPacientemembresiadetalles;
                $this->collPacientemembresiadetallesPartial = false;
            }
        }

        return $this->collPacientemembresiadetalles;
    }

    /**
     * Sets a collection of Pacientemembresiadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientemembresiadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function setPacientemembresiadetalles(PropelCollection $pacientemembresiadetalles, PropelPDO $con = null)
    {
        $pacientemembresiadetallesToDelete = $this->getPacientemembresiadetalles(new Criteria(), $con)->diff($pacientemembresiadetalles);


        $this->pacientemembresiadetallesScheduledForDeletion = $pacientemembresiadetallesToDelete;

        foreach ($pacientemembresiadetallesToDelete as $pacientemembresiadetalleRemoved) {
            $pacientemembresiadetalleRemoved->setPacientemembresia(null);
        }

        $this->collPacientemembresiadetalles = null;
        foreach ($pacientemembresiadetalles as $pacientemembresiadetalle) {
            $this->addPacientemembresiadetalle($pacientemembresiadetalle);
        }

        $this->collPacientemembresiadetalles = $pacientemembresiadetalles;
        $this->collPacientemembresiadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pacientemembresiadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pacientemembresiadetalle objects.
     * @throws PropelException
     */
    public function countPacientemembresiadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiadetallesPartial && !$this->isNew();
        if (null === $this->collPacientemembresiadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresiadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientemembresiadetalles());
            }
            $query = PacientemembresiadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPacientemembresia($this)
                ->count($con);
        }

        return count($this->collPacientemembresiadetalles);
    }

    /**
     * Method called to associate a Pacientemembresiadetalle object to this object
     * through the Pacientemembresiadetalle foreign key attribute.
     *
     * @param    Pacientemembresiadetalle $l Pacientemembresiadetalle
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function addPacientemembresiadetalle(Pacientemembresiadetalle $l)
    {
        if ($this->collPacientemembresiadetalles === null) {
            $this->initPacientemembresiadetalles();
            $this->collPacientemembresiadetallesPartial = true;
        }

        if (!in_array($l, $this->collPacientemembresiadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPacientemembresiadetalle($l);

            if ($this->pacientemembresiadetallesScheduledForDeletion and $this->pacientemembresiadetallesScheduledForDeletion->contains($l)) {
                $this->pacientemembresiadetallesScheduledForDeletion->remove($this->pacientemembresiadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pacientemembresiadetalle $pacientemembresiadetalle The pacientemembresiadetalle object to add.
     */
    protected function doAddPacientemembresiadetalle($pacientemembresiadetalle)
    {
        $this->collPacientemembresiadetalles[]= $pacientemembresiadetalle;
        $pacientemembresiadetalle->setPacientemembresia($this);
    }

    /**
     * @param	Pacientemembresiadetalle $pacientemembresiadetalle The pacientemembresiadetalle object to remove.
     * @return Pacientemembresia The current object (for fluent API support)
     */
    public function removePacientemembresiadetalle($pacientemembresiadetalle)
    {
        if ($this->getPacientemembresiadetalles()->contains($pacientemembresiadetalle)) {
            $this->collPacientemembresiadetalles->remove($this->collPacientemembresiadetalles->search($pacientemembresiadetalle));
            if (null === $this->pacientemembresiadetallesScheduledForDeletion) {
                $this->pacientemembresiadetallesScheduledForDeletion = clone $this->collPacientemembresiadetalles;
                $this->pacientemembresiadetallesScheduledForDeletion->clear();
            }
            $this->pacientemembresiadetallesScheduledForDeletion[]= clone $pacientemembresiadetalle;
            $pacientemembresiadetalle->setPacientemembresia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pacientemembresia is new, it will return
     * an empty collection; or if this Pacientemembresia has previously
     * been saved, it will retrieve related Pacientemembresiadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pacientemembresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresiadetalle[] List of Pacientemembresiadetalle objects
     */
    public function getPacientemembresiadetallesJoinVisitadetalle($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiadetalleQuery::create(null, $criteria);
        $query->joinWith('Visitadetalle', $join_behavior);

        return $this->getPacientemembresiadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpacientemembresia = null;
        $this->idpaciente = null;
        $this->idclinica = null;
        $this->idmembresia = null;
        $this->pacientemembresia_folio = null;
        $this->pacientemembresia_fechainicio = null;
        $this->pacientemembresia_serviciosdisponibles = null;
        $this->pacientemembresia_cuponesdisponibles = null;
        $this->pacientemembresia_estatus = null;
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
            if ($this->collPacientemembresiadetalles) {
                foreach ($this->collPacientemembresiadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aMembresia instanceof Persistent) {
              $this->aMembresia->clearAllReferences($deep);
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPacientemembresiadetalles instanceof PropelCollection) {
            $this->collPacientemembresiadetalles->clearIterator();
        }
        $this->collPacientemembresiadetalles = null;
        $this->aClinica = null;
        $this->aMembresia = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PacientemembresiaPeer::DEFAULT_STRING_FORMAT);
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
