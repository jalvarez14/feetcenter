<?php


/**
 * Base class that represents a row from the 'clinica' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseClinica extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClinicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClinicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the clinica_nombre field.
     * @var        string
     */
    protected $clinica_nombre;

    /**
     * The value for the clinica_direccion field.
     * @var        string
     */
    protected $clinica_direccion;

    /**
     * The value for the clinica_registropatronal field.
     * @var        string
     */
    protected $clinica_registropatronal;

    /**
     * The value for the clinica_telefono field.
     * @var        string
     */
    protected $clinica_telefono;

    /**
     * @var        PropelObjectCollection|Cancelacionventaclinica[] Collection to store aggregation of Cancelacionventaclinica objects.
     */
    protected $collCancelacionventaclinicas;
    protected $collCancelacionventaclinicasPartial;

    /**
     * @var        PropelObjectCollection|Clinicaempleado[] Collection to store aggregation of Clinicaempleado objects.
     */
    protected $collClinicaempleados;
    protected $collClinicaempleadosPartial;

    /**
     * @var        PropelObjectCollection|Egresoclinica[] Collection to store aggregation of Egresoclinica objects.
     */
    protected $collEgresoclinicas;
    protected $collEgresoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Empleadoreceso[] Collection to store aggregation of Empleadoreceso objects.
     */
    protected $collEmpleadorecesos;
    protected $collEmpleadorecesosPartial;

    /**
     * @var        PropelObjectCollection|Empleadoreporte[] Collection to store aggregation of Empleadoreporte objects.
     */
    protected $collEmpleadoreportes;
    protected $collEmpleadoreportesPartial;

    /**
     * @var        PropelObjectCollection|Encargadoclinica[] Collection to store aggregation of Encargadoclinica objects.
     */
    protected $collEncargadoclinicas;
    protected $collEncargadoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Insumoclinica[] Collection to store aggregation of Insumoclinica objects.
     */
    protected $collInsumoclinicas;
    protected $collInsumoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Paciente[] Collection to store aggregation of Paciente objects.
     */
    protected $collPacientes;
    protected $collPacientesPartial;

    /**
     * @var        PropelObjectCollection|Pacienteseguimiento[] Collection to store aggregation of Pacienteseguimiento objects.
     */
    protected $collPacienteseguimientos;
    protected $collPacienteseguimientosPartial;

    /**
     * @var        PropelObjectCollection|Productoclinica[] Collection to store aggregation of Productoclinica objects.
     */
    protected $collProductoclinicas;
    protected $collProductoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Servicioclinica[] Collection to store aggregation of Servicioclinica objects.
     */
    protected $collServicioclinicas;
    protected $collServicioclinicasPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdclinicadestinataria;
    protected $collTransferenciasRelatedByIdclinicadestinatariaPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdclinicaremitente;
    protected $collTransferenciasRelatedByIdclinicaremitentePartial;

    /**
     * @var        PropelObjectCollection|Visita[] Collection to store aggregation of Visita objects.
     */
    protected $collVisitas;
    protected $collVisitasPartial;

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
    protected $cancelacionventaclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clinicaempleadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $egresoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadorecesosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadoreportesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $encargadoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $insumoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacientesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacienteseguimientosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $servicioclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdclinicaremitenteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitasScheduledForDeletion = null;

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
     * Get the [clinica_nombre] column value.
     *
     * @return string
     */
    public function getClinicaNombre()
    {

        return $this->clinica_nombre;
    }

    /**
     * Get the [clinica_direccion] column value.
     *
     * @return string
     */
    public function getClinicaDireccion()
    {

        return $this->clinica_direccion;
    }

    /**
     * Get the [clinica_registropatronal] column value.
     *
     * @return string
     */
    public function getClinicaRegistropatronal()
    {

        return $this->clinica_registropatronal;
    }

    /**
     * Get the [clinica_telefono] column value.
     *
     * @return string
     */
    public function getClinicaTelefono()
    {

        return $this->clinica_telefono;
    }

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Clinica The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = ClinicaPeer::IDCLINICA;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [clinica_nombre] column.
     *
     * @param  string $v new value
     * @return Clinica The current object (for fluent API support)
     */
    public function setClinicaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinica_nombre !== $v) {
            $this->clinica_nombre = $v;
            $this->modifiedColumns[] = ClinicaPeer::CLINICA_NOMBRE;
        }


        return $this;
    } // setClinicaNombre()

    /**
     * Set the value of [clinica_direccion] column.
     *
     * @param  string $v new value
     * @return Clinica The current object (for fluent API support)
     */
    public function setClinicaDireccion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinica_direccion !== $v) {
            $this->clinica_direccion = $v;
            $this->modifiedColumns[] = ClinicaPeer::CLINICA_DIRECCION;
        }


        return $this;
    } // setClinicaDireccion()

    /**
     * Set the value of [clinica_registropatronal] column.
     *
     * @param  string $v new value
     * @return Clinica The current object (for fluent API support)
     */
    public function setClinicaRegistropatronal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinica_registropatronal !== $v) {
            $this->clinica_registropatronal = $v;
            $this->modifiedColumns[] = ClinicaPeer::CLINICA_REGISTROPATRONAL;
        }


        return $this;
    } // setClinicaRegistropatronal()

    /**
     * Set the value of [clinica_telefono] column.
     *
     * @param  string $v new value
     * @return Clinica The current object (for fluent API support)
     */
    public function setClinicaTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clinica_telefono !== $v) {
            $this->clinica_telefono = $v;
            $this->modifiedColumns[] = ClinicaPeer::CLINICA_TELEFONO;
        }


        return $this;
    } // setClinicaTelefono()

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

            $this->idclinica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->clinica_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->clinica_direccion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->clinica_registropatronal = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->clinica_telefono = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ClinicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Clinica object", $e);
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
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClinicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCancelacionventaclinicas = null;

            $this->collClinicaempleados = null;

            $this->collEgresoclinicas = null;

            $this->collEmpleadorecesos = null;

            $this->collEmpleadoreportes = null;

            $this->collEncargadoclinicas = null;

            $this->collInsumoclinicas = null;

            $this->collPacientes = null;

            $this->collPacienteseguimientos = null;

            $this->collProductoclinicas = null;

            $this->collServicioclinicas = null;

            $this->collTransferenciasRelatedByIdclinicadestinataria = null;

            $this->collTransferenciasRelatedByIdclinicaremitente = null;

            $this->collVisitas = null;

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
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClinicaQuery::create()
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
            $con = Propel::getConnection(ClinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ClinicaPeer::addInstanceToPool($this);
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

            if ($this->cancelacionventaclinicasScheduledForDeletion !== null) {
                if (!$this->cancelacionventaclinicasScheduledForDeletion->isEmpty()) {
                    CancelacionventaclinicaQuery::create()
                        ->filterByPrimaryKeys($this->cancelacionventaclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cancelacionventaclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collCancelacionventaclinicas !== null) {
                foreach ($this->collCancelacionventaclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clinicaempleadosScheduledForDeletion !== null) {
                if (!$this->clinicaempleadosScheduledForDeletion->isEmpty()) {
                    ClinicaempleadoQuery::create()
                        ->filterByPrimaryKeys($this->clinicaempleadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clinicaempleadosScheduledForDeletion = null;
                }
            }

            if ($this->collClinicaempleados !== null) {
                foreach ($this->collClinicaempleados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->egresoclinicasScheduledForDeletion !== null) {
                if (!$this->egresoclinicasScheduledForDeletion->isEmpty()) {
                    EgresoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->egresoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->egresoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collEgresoclinicas !== null) {
                foreach ($this->collEgresoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadorecesosScheduledForDeletion !== null) {
                if (!$this->empleadorecesosScheduledForDeletion->isEmpty()) {
                    EmpleadorecesoQuery::create()
                        ->filterByPrimaryKeys($this->empleadorecesosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadorecesosScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadorecesos !== null) {
                foreach ($this->collEmpleadorecesos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadoreportesScheduledForDeletion !== null) {
                if (!$this->empleadoreportesScheduledForDeletion->isEmpty()) {
                    EmpleadoreporteQuery::create()
                        ->filterByPrimaryKeys($this->empleadoreportesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadoreportesScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadoreportes !== null) {
                foreach ($this->collEmpleadoreportes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->encargadoclinicasScheduledForDeletion !== null) {
                if (!$this->encargadoclinicasScheduledForDeletion->isEmpty()) {
                    EncargadoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->encargadoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->encargadoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collEncargadoclinicas !== null) {
                foreach ($this->collEncargadoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->insumoclinicasScheduledForDeletion !== null) {
                if (!$this->insumoclinicasScheduledForDeletion->isEmpty()) {
                    InsumoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->insumoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->insumoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collInsumoclinicas !== null) {
                foreach ($this->collInsumoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pacientesScheduledForDeletion !== null) {
                if (!$this->pacientesScheduledForDeletion->isEmpty()) {
                    PacienteQuery::create()
                        ->filterByPrimaryKeys($this->pacientesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientesScheduledForDeletion = null;
                }
            }

            if ($this->collPacientes !== null) {
                foreach ($this->collPacientes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pacienteseguimientosScheduledForDeletion !== null) {
                if (!$this->pacienteseguimientosScheduledForDeletion->isEmpty()) {
                    PacienteseguimientoQuery::create()
                        ->filterByPrimaryKeys($this->pacienteseguimientosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacienteseguimientosScheduledForDeletion = null;
                }
            }

            if ($this->collPacienteseguimientos !== null) {
                foreach ($this->collPacienteseguimientos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productoclinicasScheduledForDeletion !== null) {
                if (!$this->productoclinicasScheduledForDeletion->isEmpty()) {
                    ProductoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->productoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collProductoclinicas !== null) {
                foreach ($this->collProductoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->servicioclinicasScheduledForDeletion !== null) {
                if (!$this->servicioclinicasScheduledForDeletion->isEmpty()) {
                    ServicioclinicaQuery::create()
                        ->filterByPrimaryKeys($this->servicioclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->servicioclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collServicioclinicas !== null) {
                foreach ($this->collServicioclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdclinicadestinataria !== null) {
                foreach ($this->collTransferenciasRelatedByIdclinicadestinataria as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdclinicaremitente !== null) {
                foreach ($this->collTransferenciasRelatedByIdclinicaremitente as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->visitasScheduledForDeletion !== null) {
                if (!$this->visitasScheduledForDeletion->isEmpty()) {
                    VisitaQuery::create()
                        ->filterByPrimaryKeys($this->visitasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitasScheduledForDeletion = null;
                }
            }

            if ($this->collVisitas !== null) {
                foreach ($this->collVisitas as $referrerFK) {
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

        $this->modifiedColumns[] = ClinicaPeer::IDCLINICA;
        if (null !== $this->idclinica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClinicaPeer::IDCLINICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClinicaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(ClinicaPeer::CLINICA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`clinica_nombre`';
        }
        if ($this->isColumnModified(ClinicaPeer::CLINICA_DIRECCION)) {
            $modifiedColumns[':p' . $index++]  = '`clinica_direccion`';
        }
        if ($this->isColumnModified(ClinicaPeer::CLINICA_REGISTROPATRONAL)) {
            $modifiedColumns[':p' . $index++]  = '`clinica_registropatronal`';
        }
        if ($this->isColumnModified(ClinicaPeer::CLINICA_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`clinica_telefono`';
        }

        $sql = sprintf(
            'INSERT INTO `clinica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`clinica_nombre`':
                        $stmt->bindValue($identifier, $this->clinica_nombre, PDO::PARAM_STR);
                        break;
                    case '`clinica_direccion`':
                        $stmt->bindValue($identifier, $this->clinica_direccion, PDO::PARAM_STR);
                        break;
                    case '`clinica_registropatronal`':
                        $stmt->bindValue($identifier, $this->clinica_registropatronal, PDO::PARAM_STR);
                        break;
                    case '`clinica_telefono`':
                        $stmt->bindValue($identifier, $this->clinica_telefono, PDO::PARAM_STR);
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
        $this->setIdclinica($pk);

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


            if (($retval = ClinicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCancelacionventaclinicas !== null) {
                    foreach ($this->collCancelacionventaclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClinicaempleados !== null) {
                    foreach ($this->collClinicaempleados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEgresoclinicas !== null) {
                    foreach ($this->collEgresoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadorecesos !== null) {
                    foreach ($this->collEmpleadorecesos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadoreportes !== null) {
                    foreach ($this->collEmpleadoreportes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEncargadoclinicas !== null) {
                    foreach ($this->collEncargadoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collInsumoclinicas !== null) {
                    foreach ($this->collInsumoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacientes !== null) {
                    foreach ($this->collPacientes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacienteseguimientos !== null) {
                    foreach ($this->collPacienteseguimientos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductoclinicas !== null) {
                    foreach ($this->collProductoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collServicioclinicas !== null) {
                    foreach ($this->collServicioclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdclinicadestinataria !== null) {
                    foreach ($this->collTransferenciasRelatedByIdclinicadestinataria as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdclinicaremitente !== null) {
                    foreach ($this->collTransferenciasRelatedByIdclinicaremitente as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitas !== null) {
                    foreach ($this->collVisitas as $referrerFK) {
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
        $pos = ClinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdclinica();
                break;
            case 1:
                return $this->getClinicaNombre();
                break;
            case 2:
                return $this->getClinicaDireccion();
                break;
            case 3:
                return $this->getClinicaRegistropatronal();
                break;
            case 4:
                return $this->getClinicaTelefono();
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
        if (isset($alreadyDumpedObjects['Clinica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Clinica'][$this->getPrimaryKey()] = true;
        $keys = ClinicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdclinica(),
            $keys[1] => $this->getClinicaNombre(),
            $keys[2] => $this->getClinicaDireccion(),
            $keys[3] => $this->getClinicaRegistropatronal(),
            $keys[4] => $this->getClinicaTelefono(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCancelacionventaclinicas) {
                $result['Cancelacionventaclinicas'] = $this->collCancelacionventaclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClinicaempleados) {
                $result['Clinicaempleados'] = $this->collClinicaempleados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEgresoclinicas) {
                $result['Egresoclinicas'] = $this->collEgresoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadorecesos) {
                $result['Empleadorecesos'] = $this->collEmpleadorecesos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadoreportes) {
                $result['Empleadoreportes'] = $this->collEmpleadoreportes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEncargadoclinicas) {
                $result['Encargadoclinicas'] = $this->collEncargadoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInsumoclinicas) {
                $result['Insumoclinicas'] = $this->collInsumoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacientes) {
                $result['Pacientes'] = $this->collPacientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacienteseguimientos) {
                $result['Pacienteseguimientos'] = $this->collPacienteseguimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductoclinicas) {
                $result['Productoclinicas'] = $this->collProductoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collServicioclinicas) {
                $result['Servicioclinicas'] = $this->collServicioclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdclinicadestinataria) {
                $result['TransferenciasRelatedByIdclinicadestinataria'] = $this->collTransferenciasRelatedByIdclinicadestinataria->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdclinicaremitente) {
                $result['TransferenciasRelatedByIdclinicaremitente'] = $this->collTransferenciasRelatedByIdclinicaremitente->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitas) {
                $result['Visitas'] = $this->collVisitas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ClinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdclinica($value);
                break;
            case 1:
                $this->setClinicaNombre($value);
                break;
            case 2:
                $this->setClinicaDireccion($value);
                break;
            case 3:
                $this->setClinicaRegistropatronal($value);
                break;
            case 4:
                $this->setClinicaTelefono($value);
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
        $keys = ClinicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdclinica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClinicaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClinicaDireccion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClinicaRegistropatronal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClinicaTelefono($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClinicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClinicaPeer::IDCLINICA)) $criteria->add(ClinicaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(ClinicaPeer::CLINICA_NOMBRE)) $criteria->add(ClinicaPeer::CLINICA_NOMBRE, $this->clinica_nombre);
        if ($this->isColumnModified(ClinicaPeer::CLINICA_DIRECCION)) $criteria->add(ClinicaPeer::CLINICA_DIRECCION, $this->clinica_direccion);
        if ($this->isColumnModified(ClinicaPeer::CLINICA_REGISTROPATRONAL)) $criteria->add(ClinicaPeer::CLINICA_REGISTROPATRONAL, $this->clinica_registropatronal);
        if ($this->isColumnModified(ClinicaPeer::CLINICA_TELEFONO)) $criteria->add(ClinicaPeer::CLINICA_TELEFONO, $this->clinica_telefono);

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
        $criteria = new Criteria(ClinicaPeer::DATABASE_NAME);
        $criteria->add(ClinicaPeer::IDCLINICA, $this->idclinica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdclinica();
    }

    /**
     * Generic method to set the primary key (idclinica column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdclinica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdclinica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Clinica (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClinicaNombre($this->getClinicaNombre());
        $copyObj->setClinicaDireccion($this->getClinicaDireccion());
        $copyObj->setClinicaRegistropatronal($this->getClinicaRegistropatronal());
        $copyObj->setClinicaTelefono($this->getClinicaTelefono());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCancelacionventaclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCancelacionventaclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClinicaempleados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClinicaempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEgresoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEgresoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadorecesos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreceso($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadoreportes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreporte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEncargadoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEncargadoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInsumoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInsumoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPaciente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacienteseguimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacienteseguimiento($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getServicioclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addServicioclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdclinicadestinataria() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdclinicadestinataria($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdclinicaremitente() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdclinicaremitente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisita($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdclinica(NULL); // this is a auto-increment column, so set to default value
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
     * @return Clinica Clone of current object.
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
     * @return ClinicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClinicaPeer();
        }

        return self::$peer;
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
        if ('Cancelacionventaclinica' == $relationName) {
            $this->initCancelacionventaclinicas();
        }
        if ('Clinicaempleado' == $relationName) {
            $this->initClinicaempleados();
        }
        if ('Egresoclinica' == $relationName) {
            $this->initEgresoclinicas();
        }
        if ('Empleadoreceso' == $relationName) {
            $this->initEmpleadorecesos();
        }
        if ('Empleadoreporte' == $relationName) {
            $this->initEmpleadoreportes();
        }
        if ('Encargadoclinica' == $relationName) {
            $this->initEncargadoclinicas();
        }
        if ('Insumoclinica' == $relationName) {
            $this->initInsumoclinicas();
        }
        if ('Paciente' == $relationName) {
            $this->initPacientes();
        }
        if ('Pacienteseguimiento' == $relationName) {
            $this->initPacienteseguimientos();
        }
        if ('Productoclinica' == $relationName) {
            $this->initProductoclinicas();
        }
        if ('Servicioclinica' == $relationName) {
            $this->initServicioclinicas();
        }
        if ('TransferenciaRelatedByIdclinicadestinataria' == $relationName) {
            $this->initTransferenciasRelatedByIdclinicadestinataria();
        }
        if ('TransferenciaRelatedByIdclinicaremitente' == $relationName) {
            $this->initTransferenciasRelatedByIdclinicaremitente();
        }
        if ('Visita' == $relationName) {
            $this->initVisitas();
        }
    }

    /**
     * Clears out the collCancelacionventaclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addCancelacionventaclinicas()
     */
    public function clearCancelacionventaclinicas()
    {
        $this->collCancelacionventaclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collCancelacionventaclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collCancelacionventaclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCancelacionventaclinicas($v = true)
    {
        $this->collCancelacionventaclinicasPartial = $v;
    }

    /**
     * Initializes the collCancelacionventaclinicas collection.
     *
     * By default this just sets the collCancelacionventaclinicas collection to an empty array (like clearcollCancelacionventaclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCancelacionventaclinicas($overrideExisting = true)
    {
        if (null !== $this->collCancelacionventaclinicas && !$overrideExisting) {
            return;
        }
        $this->collCancelacionventaclinicas = new PropelObjectCollection();
        $this->collCancelacionventaclinicas->setModel('Cancelacionventaclinica');
    }

    /**
     * Gets an array of Cancelacionventaclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cancelacionventaclinica[] List of Cancelacionventaclinica objects
     * @throws PropelException
     */
    public function getCancelacionventaclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCancelacionventaclinicasPartial && !$this->isNew();
        if (null === $this->collCancelacionventaclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCancelacionventaclinicas) {
                // return empty collection
                $this->initCancelacionventaclinicas();
            } else {
                $collCancelacionventaclinicas = CancelacionventaclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCancelacionventaclinicasPartial && count($collCancelacionventaclinicas)) {
                      $this->initCancelacionventaclinicas(false);

                      foreach ($collCancelacionventaclinicas as $obj) {
                        if (false == $this->collCancelacionventaclinicas->contains($obj)) {
                          $this->collCancelacionventaclinicas->append($obj);
                        }
                      }

                      $this->collCancelacionventaclinicasPartial = true;
                    }

                    $collCancelacionventaclinicas->getInternalIterator()->rewind();

                    return $collCancelacionventaclinicas;
                }

                if ($partial && $this->collCancelacionventaclinicas) {
                    foreach ($this->collCancelacionventaclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collCancelacionventaclinicas[] = $obj;
                        }
                    }
                }

                $this->collCancelacionventaclinicas = $collCancelacionventaclinicas;
                $this->collCancelacionventaclinicasPartial = false;
            }
        }

        return $this->collCancelacionventaclinicas;
    }

    /**
     * Sets a collection of Cancelacionventaclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cancelacionventaclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setCancelacionventaclinicas(PropelCollection $cancelacionventaclinicas, PropelPDO $con = null)
    {
        $cancelacionventaclinicasToDelete = $this->getCancelacionventaclinicas(new Criteria(), $con)->diff($cancelacionventaclinicas);


        $this->cancelacionventaclinicasScheduledForDeletion = $cancelacionventaclinicasToDelete;

        foreach ($cancelacionventaclinicasToDelete as $cancelacionventaclinicaRemoved) {
            $cancelacionventaclinicaRemoved->setClinica(null);
        }

        $this->collCancelacionventaclinicas = null;
        foreach ($cancelacionventaclinicas as $cancelacionventaclinica) {
            $this->addCancelacionventaclinica($cancelacionventaclinica);
        }

        $this->collCancelacionventaclinicas = $cancelacionventaclinicas;
        $this->collCancelacionventaclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cancelacionventaclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cancelacionventaclinica objects.
     * @throws PropelException
     */
    public function countCancelacionventaclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCancelacionventaclinicasPartial && !$this->isNew();
        if (null === $this->collCancelacionventaclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCancelacionventaclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCancelacionventaclinicas());
            }
            $query = CancelacionventaclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collCancelacionventaclinicas);
    }

    /**
     * Method called to associate a Cancelacionventaclinica object to this object
     * through the Cancelacionventaclinica foreign key attribute.
     *
     * @param    Cancelacionventaclinica $l Cancelacionventaclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addCancelacionventaclinica(Cancelacionventaclinica $l)
    {
        if ($this->collCancelacionventaclinicas === null) {
            $this->initCancelacionventaclinicas();
            $this->collCancelacionventaclinicasPartial = true;
        }

        if (!in_array($l, $this->collCancelacionventaclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCancelacionventaclinica($l);

            if ($this->cancelacionventaclinicasScheduledForDeletion and $this->cancelacionventaclinicasScheduledForDeletion->contains($l)) {
                $this->cancelacionventaclinicasScheduledForDeletion->remove($this->cancelacionventaclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cancelacionventaclinica $cancelacionventaclinica The cancelacionventaclinica object to add.
     */
    protected function doAddCancelacionventaclinica($cancelacionventaclinica)
    {
        $this->collCancelacionventaclinicas[]= $cancelacionventaclinica;
        $cancelacionventaclinica->setClinica($this);
    }

    /**
     * @param	Cancelacionventaclinica $cancelacionventaclinica The cancelacionventaclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeCancelacionventaclinica($cancelacionventaclinica)
    {
        if ($this->getCancelacionventaclinicas()->contains($cancelacionventaclinica)) {
            $this->collCancelacionventaclinicas->remove($this->collCancelacionventaclinicas->search($cancelacionventaclinica));
            if (null === $this->cancelacionventaclinicasScheduledForDeletion) {
                $this->cancelacionventaclinicasScheduledForDeletion = clone $this->collCancelacionventaclinicas;
                $this->cancelacionventaclinicasScheduledForDeletion->clear();
            }
            $this->cancelacionventaclinicasScheduledForDeletion[]= clone $cancelacionventaclinica;
            $cancelacionventaclinica->setClinica(null);
        }

        return $this;
    }

    /**
     * Clears out the collClinicaempleados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addClinicaempleados()
     */
    public function clearClinicaempleados()
    {
        $this->collClinicaempleados = null; // important to set this to null since that means it is uninitialized
        $this->collClinicaempleadosPartial = null;

        return $this;
    }

    /**
     * reset is the collClinicaempleados collection loaded partially
     *
     * @return void
     */
    public function resetPartialClinicaempleados($v = true)
    {
        $this->collClinicaempleadosPartial = $v;
    }

    /**
     * Initializes the collClinicaempleados collection.
     *
     * By default this just sets the collClinicaempleados collection to an empty array (like clearcollClinicaempleados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClinicaempleados($overrideExisting = true)
    {
        if (null !== $this->collClinicaempleados && !$overrideExisting) {
            return;
        }
        $this->collClinicaempleados = new PropelObjectCollection();
        $this->collClinicaempleados->setModel('Clinicaempleado');
    }

    /**
     * Gets an array of Clinicaempleado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clinicaempleado[] List of Clinicaempleado objects
     * @throws PropelException
     */
    public function getClinicaempleados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClinicaempleadosPartial && !$this->isNew();
        if (null === $this->collClinicaempleados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClinicaempleados) {
                // return empty collection
                $this->initClinicaempleados();
            } else {
                $collClinicaempleados = ClinicaempleadoQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClinicaempleadosPartial && count($collClinicaempleados)) {
                      $this->initClinicaempleados(false);

                      foreach ($collClinicaempleados as $obj) {
                        if (false == $this->collClinicaempleados->contains($obj)) {
                          $this->collClinicaempleados->append($obj);
                        }
                      }

                      $this->collClinicaempleadosPartial = true;
                    }

                    $collClinicaempleados->getInternalIterator()->rewind();

                    return $collClinicaempleados;
                }

                if ($partial && $this->collClinicaempleados) {
                    foreach ($this->collClinicaempleados as $obj) {
                        if ($obj->isNew()) {
                            $collClinicaempleados[] = $obj;
                        }
                    }
                }

                $this->collClinicaempleados = $collClinicaempleados;
                $this->collClinicaempleadosPartial = false;
            }
        }

        return $this->collClinicaempleados;
    }

    /**
     * Sets a collection of Clinicaempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clinicaempleados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setClinicaempleados(PropelCollection $clinicaempleados, PropelPDO $con = null)
    {
        $clinicaempleadosToDelete = $this->getClinicaempleados(new Criteria(), $con)->diff($clinicaempleados);


        $this->clinicaempleadosScheduledForDeletion = $clinicaempleadosToDelete;

        foreach ($clinicaempleadosToDelete as $clinicaempleadoRemoved) {
            $clinicaempleadoRemoved->setClinica(null);
        }

        $this->collClinicaempleados = null;
        foreach ($clinicaempleados as $clinicaempleado) {
            $this->addClinicaempleado($clinicaempleado);
        }

        $this->collClinicaempleados = $clinicaempleados;
        $this->collClinicaempleadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clinicaempleado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clinicaempleado objects.
     * @throws PropelException
     */
    public function countClinicaempleados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClinicaempleadosPartial && !$this->isNew();
        if (null === $this->collClinicaempleados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClinicaempleados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClinicaempleados());
            }
            $query = ClinicaempleadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collClinicaempleados);
    }

    /**
     * Method called to associate a Clinicaempleado object to this object
     * through the Clinicaempleado foreign key attribute.
     *
     * @param    Clinicaempleado $l Clinicaempleado
     * @return Clinica The current object (for fluent API support)
     */
    public function addClinicaempleado(Clinicaempleado $l)
    {
        if ($this->collClinicaempleados === null) {
            $this->initClinicaempleados();
            $this->collClinicaempleadosPartial = true;
        }

        if (!in_array($l, $this->collClinicaempleados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClinicaempleado($l);

            if ($this->clinicaempleadosScheduledForDeletion and $this->clinicaempleadosScheduledForDeletion->contains($l)) {
                $this->clinicaempleadosScheduledForDeletion->remove($this->clinicaempleadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Clinicaempleado $clinicaempleado The clinicaempleado object to add.
     */
    protected function doAddClinicaempleado($clinicaempleado)
    {
        $this->collClinicaempleados[]= $clinicaempleado;
        $clinicaempleado->setClinica($this);
    }

    /**
     * @param	Clinicaempleado $clinicaempleado The clinicaempleado object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeClinicaempleado($clinicaempleado)
    {
        if ($this->getClinicaempleados()->contains($clinicaempleado)) {
            $this->collClinicaempleados->remove($this->collClinicaempleados->search($clinicaempleado));
            if (null === $this->clinicaempleadosScheduledForDeletion) {
                $this->clinicaempleadosScheduledForDeletion = clone $this->collClinicaempleados;
                $this->clinicaempleadosScheduledForDeletion->clear();
            }
            $this->clinicaempleadosScheduledForDeletion[]= clone $clinicaempleado;
            $clinicaempleado->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Clinicaempleados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clinicaempleado[] List of Clinicaempleado objects
     */
    public function getClinicaempleadosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClinicaempleadoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getClinicaempleados($query, $con);
    }

    /**
     * Clears out the collEgresoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addEgresoclinicas()
     */
    public function clearEgresoclinicas()
    {
        $this->collEgresoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collEgresoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collEgresoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialEgresoclinicas($v = true)
    {
        $this->collEgresoclinicasPartial = $v;
    }

    /**
     * Initializes the collEgresoclinicas collection.
     *
     * By default this just sets the collEgresoclinicas collection to an empty array (like clearcollEgresoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEgresoclinicas($overrideExisting = true)
    {
        if (null !== $this->collEgresoclinicas && !$overrideExisting) {
            return;
        }
        $this->collEgresoclinicas = new PropelObjectCollection();
        $this->collEgresoclinicas->setModel('Egresoclinica');
    }

    /**
     * Gets an array of Egresoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     * @throws PropelException
     */
    public function getEgresoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEgresoclinicasPartial && !$this->isNew();
        if (null === $this->collEgresoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEgresoclinicas) {
                // return empty collection
                $this->initEgresoclinicas();
            } else {
                $collEgresoclinicas = EgresoclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEgresoclinicasPartial && count($collEgresoclinicas)) {
                      $this->initEgresoclinicas(false);

                      foreach ($collEgresoclinicas as $obj) {
                        if (false == $this->collEgresoclinicas->contains($obj)) {
                          $this->collEgresoclinicas->append($obj);
                        }
                      }

                      $this->collEgresoclinicasPartial = true;
                    }

                    $collEgresoclinicas->getInternalIterator()->rewind();

                    return $collEgresoclinicas;
                }

                if ($partial && $this->collEgresoclinicas) {
                    foreach ($this->collEgresoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collEgresoclinicas[] = $obj;
                        }
                    }
                }

                $this->collEgresoclinicas = $collEgresoclinicas;
                $this->collEgresoclinicasPartial = false;
            }
        }

        return $this->collEgresoclinicas;
    }

    /**
     * Sets a collection of Egresoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $egresoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setEgresoclinicas(PropelCollection $egresoclinicas, PropelPDO $con = null)
    {
        $egresoclinicasToDelete = $this->getEgresoclinicas(new Criteria(), $con)->diff($egresoclinicas);


        $this->egresoclinicasScheduledForDeletion = $egresoclinicasToDelete;

        foreach ($egresoclinicasToDelete as $egresoclinicaRemoved) {
            $egresoclinicaRemoved->setClinica(null);
        }

        $this->collEgresoclinicas = null;
        foreach ($egresoclinicas as $egresoclinica) {
            $this->addEgresoclinica($egresoclinica);
        }

        $this->collEgresoclinicas = $egresoclinicas;
        $this->collEgresoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Egresoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Egresoclinica objects.
     * @throws PropelException
     */
    public function countEgresoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEgresoclinicasPartial && !$this->isNew();
        if (null === $this->collEgresoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEgresoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEgresoclinicas());
            }
            $query = EgresoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collEgresoclinicas);
    }

    /**
     * Method called to associate a Egresoclinica object to this object
     * through the Egresoclinica foreign key attribute.
     *
     * @param    Egresoclinica $l Egresoclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addEgresoclinica(Egresoclinica $l)
    {
        if ($this->collEgresoclinicas === null) {
            $this->initEgresoclinicas();
            $this->collEgresoclinicasPartial = true;
        }

        if (!in_array($l, $this->collEgresoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEgresoclinica($l);

            if ($this->egresoclinicasScheduledForDeletion and $this->egresoclinicasScheduledForDeletion->contains($l)) {
                $this->egresoclinicasScheduledForDeletion->remove($this->egresoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Egresoclinica $egresoclinica The egresoclinica object to add.
     */
    protected function doAddEgresoclinica($egresoclinica)
    {
        $this->collEgresoclinicas[]= $egresoclinica;
        $egresoclinica->setClinica($this);
    }

    /**
     * @param	Egresoclinica $egresoclinica The egresoclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeEgresoclinica($egresoclinica)
    {
        if ($this->getEgresoclinicas()->contains($egresoclinica)) {
            $this->collEgresoclinicas->remove($this->collEgresoclinicas->search($egresoclinica));
            if (null === $this->egresoclinicasScheduledForDeletion) {
                $this->egresoclinicasScheduledForDeletion = clone $this->collEgresoclinicas;
                $this->egresoclinicasScheduledForDeletion->clear();
            }
            $this->egresoclinicasScheduledForDeletion[]= clone $egresoclinica;
            $egresoclinica->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     */
    public function getEgresoclinicasJoinConcepto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EgresoclinicaQuery::create(null, $criteria);
        $query->joinWith('Concepto', $join_behavior);

        return $this->getEgresoclinicas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     */
    public function getEgresoclinicasJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EgresoclinicaQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getEgresoclinicas($query, $con);
    }

    /**
     * Clears out the collEmpleadorecesos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addEmpleadorecesos()
     */
    public function clearEmpleadorecesos()
    {
        $this->collEmpleadorecesos = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadorecesosPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadorecesos collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadorecesos($v = true)
    {
        $this->collEmpleadorecesosPartial = $v;
    }

    /**
     * Initializes the collEmpleadorecesos collection.
     *
     * By default this just sets the collEmpleadorecesos collection to an empty array (like clearcollEmpleadorecesos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadorecesos($overrideExisting = true)
    {
        if (null !== $this->collEmpleadorecesos && !$overrideExisting) {
            return;
        }
        $this->collEmpleadorecesos = new PropelObjectCollection();
        $this->collEmpleadorecesos->setModel('Empleadoreceso');
    }

    /**
     * Gets an array of Empleadoreceso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreceso[] List of Empleadoreceso objects
     * @throws PropelException
     */
    public function getEmpleadorecesos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadorecesosPartial && !$this->isNew();
        if (null === $this->collEmpleadorecesos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadorecesos) {
                // return empty collection
                $this->initEmpleadorecesos();
            } else {
                $collEmpleadorecesos = EmpleadorecesoQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadorecesosPartial && count($collEmpleadorecesos)) {
                      $this->initEmpleadorecesos(false);

                      foreach ($collEmpleadorecesos as $obj) {
                        if (false == $this->collEmpleadorecesos->contains($obj)) {
                          $this->collEmpleadorecesos->append($obj);
                        }
                      }

                      $this->collEmpleadorecesosPartial = true;
                    }

                    $collEmpleadorecesos->getInternalIterator()->rewind();

                    return $collEmpleadorecesos;
                }

                if ($partial && $this->collEmpleadorecesos) {
                    foreach ($this->collEmpleadorecesos as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadorecesos[] = $obj;
                        }
                    }
                }

                $this->collEmpleadorecesos = $collEmpleadorecesos;
                $this->collEmpleadorecesosPartial = false;
            }
        }

        return $this->collEmpleadorecesos;
    }

    /**
     * Sets a collection of Empleadoreceso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadorecesos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setEmpleadorecesos(PropelCollection $empleadorecesos, PropelPDO $con = null)
    {
        $empleadorecesosToDelete = $this->getEmpleadorecesos(new Criteria(), $con)->diff($empleadorecesos);


        $this->empleadorecesosScheduledForDeletion = $empleadorecesosToDelete;

        foreach ($empleadorecesosToDelete as $empleadorecesoRemoved) {
            $empleadorecesoRemoved->setClinica(null);
        }

        $this->collEmpleadorecesos = null;
        foreach ($empleadorecesos as $empleadoreceso) {
            $this->addEmpleadoreceso($empleadoreceso);
        }

        $this->collEmpleadorecesos = $empleadorecesos;
        $this->collEmpleadorecesosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreceso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreceso objects.
     * @throws PropelException
     */
    public function countEmpleadorecesos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadorecesosPartial && !$this->isNew();
        if (null === $this->collEmpleadorecesos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadorecesos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadorecesos());
            }
            $query = EmpleadorecesoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collEmpleadorecesos);
    }

    /**
     * Method called to associate a Empleadoreceso object to this object
     * through the Empleadoreceso foreign key attribute.
     *
     * @param    Empleadoreceso $l Empleadoreceso
     * @return Clinica The current object (for fluent API support)
     */
    public function addEmpleadoreceso(Empleadoreceso $l)
    {
        if ($this->collEmpleadorecesos === null) {
            $this->initEmpleadorecesos();
            $this->collEmpleadorecesosPartial = true;
        }

        if (!in_array($l, $this->collEmpleadorecesos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreceso($l);

            if ($this->empleadorecesosScheduledForDeletion and $this->empleadorecesosScheduledForDeletion->contains($l)) {
                $this->empleadorecesosScheduledForDeletion->remove($this->empleadorecesosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadoreceso $empleadoreceso The empleadoreceso object to add.
     */
    protected function doAddEmpleadoreceso($empleadoreceso)
    {
        $this->collEmpleadorecesos[]= $empleadoreceso;
        $empleadoreceso->setClinica($this);
    }

    /**
     * @param	Empleadoreceso $empleadoreceso The empleadoreceso object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeEmpleadoreceso($empleadoreceso)
    {
        if ($this->getEmpleadorecesos()->contains($empleadoreceso)) {
            $this->collEmpleadorecesos->remove($this->collEmpleadorecesos->search($empleadoreceso));
            if (null === $this->empleadorecesosScheduledForDeletion) {
                $this->empleadorecesosScheduledForDeletion = clone $this->collEmpleadorecesos;
                $this->empleadorecesosScheduledForDeletion->clear();
            }
            $this->empleadorecesosScheduledForDeletion[]= clone $empleadoreceso;
            $empleadoreceso->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Empleadorecesos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreceso[] List of Empleadoreceso objects
     */
    public function getEmpleadorecesosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadorecesoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getEmpleadorecesos($query, $con);
    }

    /**
     * Clears out the collEmpleadoreportes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addEmpleadoreportes()
     */
    public function clearEmpleadoreportes()
    {
        $this->collEmpleadoreportes = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadoreportesPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadoreportes collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadoreportes($v = true)
    {
        $this->collEmpleadoreportesPartial = $v;
    }

    /**
     * Initializes the collEmpleadoreportes collection.
     *
     * By default this just sets the collEmpleadoreportes collection to an empty array (like clearcollEmpleadoreportes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadoreportes($overrideExisting = true)
    {
        if (null !== $this->collEmpleadoreportes && !$overrideExisting) {
            return;
        }
        $this->collEmpleadoreportes = new PropelObjectCollection();
        $this->collEmpleadoreportes->setModel('Empleadoreporte');
    }

    /**
     * Gets an array of Empleadoreporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     * @throws PropelException
     */
    public function getEmpleadoreportes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportes) {
                // return empty collection
                $this->initEmpleadoreportes();
            } else {
                $collEmpleadoreportes = EmpleadoreporteQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadoreportesPartial && count($collEmpleadoreportes)) {
                      $this->initEmpleadoreportes(false);

                      foreach ($collEmpleadoreportes as $obj) {
                        if (false == $this->collEmpleadoreportes->contains($obj)) {
                          $this->collEmpleadoreportes->append($obj);
                        }
                      }

                      $this->collEmpleadoreportesPartial = true;
                    }

                    $collEmpleadoreportes->getInternalIterator()->rewind();

                    return $collEmpleadoreportes;
                }

                if ($partial && $this->collEmpleadoreportes) {
                    foreach ($this->collEmpleadoreportes as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadoreportes[] = $obj;
                        }
                    }
                }

                $this->collEmpleadoreportes = $collEmpleadoreportes;
                $this->collEmpleadoreportesPartial = false;
            }
        }

        return $this->collEmpleadoreportes;
    }

    /**
     * Sets a collection of Empleadoreporte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadoreportes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setEmpleadoreportes(PropelCollection $empleadoreportes, PropelPDO $con = null)
    {
        $empleadoreportesToDelete = $this->getEmpleadoreportes(new Criteria(), $con)->diff($empleadoreportes);


        $this->empleadoreportesScheduledForDeletion = $empleadoreportesToDelete;

        foreach ($empleadoreportesToDelete as $empleadoreporteRemoved) {
            $empleadoreporteRemoved->setClinica(null);
        }

        $this->collEmpleadoreportes = null;
        foreach ($empleadoreportes as $empleadoreporte) {
            $this->addEmpleadoreporte($empleadoreporte);
        }

        $this->collEmpleadoreportes = $empleadoreportes;
        $this->collEmpleadoreportesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreporte objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreporte objects.
     * @throws PropelException
     */
    public function countEmpleadoreportes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadoreportes());
            }
            $query = EmpleadoreporteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collEmpleadoreportes);
    }

    /**
     * Method called to associate a Empleadoreporte object to this object
     * through the Empleadoreporte foreign key attribute.
     *
     * @param    Empleadoreporte $l Empleadoreporte
     * @return Clinica The current object (for fluent API support)
     */
    public function addEmpleadoreporte(Empleadoreporte $l)
    {
        if ($this->collEmpleadoreportes === null) {
            $this->initEmpleadoreportes();
            $this->collEmpleadoreportesPartial = true;
        }

        if (!in_array($l, $this->collEmpleadoreportes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreporte($l);

            if ($this->empleadoreportesScheduledForDeletion and $this->empleadoreportesScheduledForDeletion->contains($l)) {
                $this->empleadoreportesScheduledForDeletion->remove($this->empleadoreportesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadoreporte $empleadoreporte The empleadoreporte object to add.
     */
    protected function doAddEmpleadoreporte($empleadoreporte)
    {
        $this->collEmpleadoreportes[]= $empleadoreporte;
        $empleadoreporte->setClinica($this);
    }

    /**
     * @param	Empleadoreporte $empleadoreporte The empleadoreporte object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeEmpleadoreporte($empleadoreporte)
    {
        if ($this->getEmpleadoreportes()->contains($empleadoreporte)) {
            $this->collEmpleadoreportes->remove($this->collEmpleadoreportes->search($empleadoreporte));
            if (null === $this->empleadoreportesScheduledForDeletion) {
                $this->empleadoreportesScheduledForDeletion = clone $this->collEmpleadoreportes;
                $this->empleadoreportesScheduledForDeletion->clear();
            }
            $this->empleadoreportesScheduledForDeletion[]= clone $empleadoreporte;
            $empleadoreporte->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinConceptoincidencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Conceptoincidencia', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinEmpleadoRelatedByIdempleadoreportado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreportado', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }

    /**
     * Clears out the collEncargadoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addEncargadoclinicas()
     */
    public function clearEncargadoclinicas()
    {
        $this->collEncargadoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collEncargadoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collEncargadoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialEncargadoclinicas($v = true)
    {
        $this->collEncargadoclinicasPartial = $v;
    }

    /**
     * Initializes the collEncargadoclinicas collection.
     *
     * By default this just sets the collEncargadoclinicas collection to an empty array (like clearcollEncargadoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEncargadoclinicas($overrideExisting = true)
    {
        if (null !== $this->collEncargadoclinicas && !$overrideExisting) {
            return;
        }
        $this->collEncargadoclinicas = new PropelObjectCollection();
        $this->collEncargadoclinicas->setModel('Encargadoclinica');
    }

    /**
     * Gets an array of Encargadoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Encargadoclinica[] List of Encargadoclinica objects
     * @throws PropelException
     */
    public function getEncargadoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEncargadoclinicasPartial && !$this->isNew();
        if (null === $this->collEncargadoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEncargadoclinicas) {
                // return empty collection
                $this->initEncargadoclinicas();
            } else {
                $collEncargadoclinicas = EncargadoclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEncargadoclinicasPartial && count($collEncargadoclinicas)) {
                      $this->initEncargadoclinicas(false);

                      foreach ($collEncargadoclinicas as $obj) {
                        if (false == $this->collEncargadoclinicas->contains($obj)) {
                          $this->collEncargadoclinicas->append($obj);
                        }
                      }

                      $this->collEncargadoclinicasPartial = true;
                    }

                    $collEncargadoclinicas->getInternalIterator()->rewind();

                    return $collEncargadoclinicas;
                }

                if ($partial && $this->collEncargadoclinicas) {
                    foreach ($this->collEncargadoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collEncargadoclinicas[] = $obj;
                        }
                    }
                }

                $this->collEncargadoclinicas = $collEncargadoclinicas;
                $this->collEncargadoclinicasPartial = false;
            }
        }

        return $this->collEncargadoclinicas;
    }

    /**
     * Sets a collection of Encargadoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $encargadoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setEncargadoclinicas(PropelCollection $encargadoclinicas, PropelPDO $con = null)
    {
        $encargadoclinicasToDelete = $this->getEncargadoclinicas(new Criteria(), $con)->diff($encargadoclinicas);


        $this->encargadoclinicasScheduledForDeletion = $encargadoclinicasToDelete;

        foreach ($encargadoclinicasToDelete as $encargadoclinicaRemoved) {
            $encargadoclinicaRemoved->setClinica(null);
        }

        $this->collEncargadoclinicas = null;
        foreach ($encargadoclinicas as $encargadoclinica) {
            $this->addEncargadoclinica($encargadoclinica);
        }

        $this->collEncargadoclinicas = $encargadoclinicas;
        $this->collEncargadoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Encargadoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Encargadoclinica objects.
     * @throws PropelException
     */
    public function countEncargadoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEncargadoclinicasPartial && !$this->isNew();
        if (null === $this->collEncargadoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEncargadoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEncargadoclinicas());
            }
            $query = EncargadoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collEncargadoclinicas);
    }

    /**
     * Method called to associate a Encargadoclinica object to this object
     * through the Encargadoclinica foreign key attribute.
     *
     * @param    Encargadoclinica $l Encargadoclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addEncargadoclinica(Encargadoclinica $l)
    {
        if ($this->collEncargadoclinicas === null) {
            $this->initEncargadoclinicas();
            $this->collEncargadoclinicasPartial = true;
        }

        if (!in_array($l, $this->collEncargadoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEncargadoclinica($l);

            if ($this->encargadoclinicasScheduledForDeletion and $this->encargadoclinicasScheduledForDeletion->contains($l)) {
                $this->encargadoclinicasScheduledForDeletion->remove($this->encargadoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Encargadoclinica $encargadoclinica The encargadoclinica object to add.
     */
    protected function doAddEncargadoclinica($encargadoclinica)
    {
        $this->collEncargadoclinicas[]= $encargadoclinica;
        $encargadoclinica->setClinica($this);
    }

    /**
     * @param	Encargadoclinica $encargadoclinica The encargadoclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeEncargadoclinica($encargadoclinica)
    {
        if ($this->getEncargadoclinicas()->contains($encargadoclinica)) {
            $this->collEncargadoclinicas->remove($this->collEncargadoclinicas->search($encargadoclinica));
            if (null === $this->encargadoclinicasScheduledForDeletion) {
                $this->encargadoclinicasScheduledForDeletion = clone $this->collEncargadoclinicas;
                $this->encargadoclinicasScheduledForDeletion->clear();
            }
            $this->encargadoclinicasScheduledForDeletion[]= clone $encargadoclinica;
            $encargadoclinica->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Encargadoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Encargadoclinica[] List of Encargadoclinica objects
     */
    public function getEncargadoclinicasJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EncargadoclinicaQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getEncargadoclinicas($query, $con);
    }

    /**
     * Clears out the collInsumoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addInsumoclinicas()
     */
    public function clearInsumoclinicas()
    {
        $this->collInsumoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collInsumoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collInsumoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialInsumoclinicas($v = true)
    {
        $this->collInsumoclinicasPartial = $v;
    }

    /**
     * Initializes the collInsumoclinicas collection.
     *
     * By default this just sets the collInsumoclinicas collection to an empty array (like clearcollInsumoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInsumoclinicas($overrideExisting = true)
    {
        if (null !== $this->collInsumoclinicas && !$overrideExisting) {
            return;
        }
        $this->collInsumoclinicas = new PropelObjectCollection();
        $this->collInsumoclinicas->setModel('Insumoclinica');
    }

    /**
     * Gets an array of Insumoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Insumoclinica[] List of Insumoclinica objects
     * @throws PropelException
     */
    public function getInsumoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInsumoclinicasPartial && !$this->isNew();
        if (null === $this->collInsumoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInsumoclinicas) {
                // return empty collection
                $this->initInsumoclinicas();
            } else {
                $collInsumoclinicas = InsumoclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInsumoclinicasPartial && count($collInsumoclinicas)) {
                      $this->initInsumoclinicas(false);

                      foreach ($collInsumoclinicas as $obj) {
                        if (false == $this->collInsumoclinicas->contains($obj)) {
                          $this->collInsumoclinicas->append($obj);
                        }
                      }

                      $this->collInsumoclinicasPartial = true;
                    }

                    $collInsumoclinicas->getInternalIterator()->rewind();

                    return $collInsumoclinicas;
                }

                if ($partial && $this->collInsumoclinicas) {
                    foreach ($this->collInsumoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collInsumoclinicas[] = $obj;
                        }
                    }
                }

                $this->collInsumoclinicas = $collInsumoclinicas;
                $this->collInsumoclinicasPartial = false;
            }
        }

        return $this->collInsumoclinicas;
    }

    /**
     * Sets a collection of Insumoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $insumoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setInsumoclinicas(PropelCollection $insumoclinicas, PropelPDO $con = null)
    {
        $insumoclinicasToDelete = $this->getInsumoclinicas(new Criteria(), $con)->diff($insumoclinicas);


        $this->insumoclinicasScheduledForDeletion = $insumoclinicasToDelete;

        foreach ($insumoclinicasToDelete as $insumoclinicaRemoved) {
            $insumoclinicaRemoved->setClinica(null);
        }

        $this->collInsumoclinicas = null;
        foreach ($insumoclinicas as $insumoclinica) {
            $this->addInsumoclinica($insumoclinica);
        }

        $this->collInsumoclinicas = $insumoclinicas;
        $this->collInsumoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Insumoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Insumoclinica objects.
     * @throws PropelException
     */
    public function countInsumoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInsumoclinicasPartial && !$this->isNew();
        if (null === $this->collInsumoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInsumoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInsumoclinicas());
            }
            $query = InsumoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collInsumoclinicas);
    }

    /**
     * Method called to associate a Insumoclinica object to this object
     * through the Insumoclinica foreign key attribute.
     *
     * @param    Insumoclinica $l Insumoclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addInsumoclinica(Insumoclinica $l)
    {
        if ($this->collInsumoclinicas === null) {
            $this->initInsumoclinicas();
            $this->collInsumoclinicasPartial = true;
        }

        if (!in_array($l, $this->collInsumoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInsumoclinica($l);

            if ($this->insumoclinicasScheduledForDeletion and $this->insumoclinicasScheduledForDeletion->contains($l)) {
                $this->insumoclinicasScheduledForDeletion->remove($this->insumoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Insumoclinica $insumoclinica The insumoclinica object to add.
     */
    protected function doAddInsumoclinica($insumoclinica)
    {
        $this->collInsumoclinicas[]= $insumoclinica;
        $insumoclinica->setClinica($this);
    }

    /**
     * @param	Insumoclinica $insumoclinica The insumoclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeInsumoclinica($insumoclinica)
    {
        if ($this->getInsumoclinicas()->contains($insumoclinica)) {
            $this->collInsumoclinicas->remove($this->collInsumoclinicas->search($insumoclinica));
            if (null === $this->insumoclinicasScheduledForDeletion) {
                $this->insumoclinicasScheduledForDeletion = clone $this->collInsumoclinicas;
                $this->insumoclinicasScheduledForDeletion->clear();
            }
            $this->insumoclinicasScheduledForDeletion[]= clone $insumoclinica;
            $insumoclinica->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Insumoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Insumoclinica[] List of Insumoclinica objects
     */
    public function getInsumoclinicasJoinInsumo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InsumoclinicaQuery::create(null, $criteria);
        $query->joinWith('Insumo', $join_behavior);

        return $this->getInsumoclinicas($query, $con);
    }

    /**
     * Clears out the collPacientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addPacientes()
     */
    public function clearPacientes()
    {
        $this->collPacientes = null; // important to set this to null since that means it is uninitialized
        $this->collPacientesPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientes($v = true)
    {
        $this->collPacientesPartial = $v;
    }

    /**
     * Initializes the collPacientes collection.
     *
     * By default this just sets the collPacientes collection to an empty array (like clearcollPacientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientes($overrideExisting = true)
    {
        if (null !== $this->collPacientes && !$overrideExisting) {
            return;
        }
        $this->collPacientes = new PropelObjectCollection();
        $this->collPacientes->setModel('Paciente');
    }

    /**
     * Gets an array of Paciente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Paciente[] List of Paciente objects
     * @throws PropelException
     */
    public function getPacientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientesPartial && !$this->isNew();
        if (null === $this->collPacientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientes) {
                // return empty collection
                $this->initPacientes();
            } else {
                $collPacientes = PacienteQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientesPartial && count($collPacientes)) {
                      $this->initPacientes(false);

                      foreach ($collPacientes as $obj) {
                        if (false == $this->collPacientes->contains($obj)) {
                          $this->collPacientes->append($obj);
                        }
                      }

                      $this->collPacientesPartial = true;
                    }

                    $collPacientes->getInternalIterator()->rewind();

                    return $collPacientes;
                }

                if ($partial && $this->collPacientes) {
                    foreach ($this->collPacientes as $obj) {
                        if ($obj->isNew()) {
                            $collPacientes[] = $obj;
                        }
                    }
                }

                $this->collPacientes = $collPacientes;
                $this->collPacientesPartial = false;
            }
        }

        return $this->collPacientes;
    }

    /**
     * Sets a collection of Paciente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setPacientes(PropelCollection $pacientes, PropelPDO $con = null)
    {
        $pacientesToDelete = $this->getPacientes(new Criteria(), $con)->diff($pacientes);


        $this->pacientesScheduledForDeletion = $pacientesToDelete;

        foreach ($pacientesToDelete as $pacienteRemoved) {
            $pacienteRemoved->setClinica(null);
        }

        $this->collPacientes = null;
        foreach ($pacientes as $paciente) {
            $this->addPaciente($paciente);
        }

        $this->collPacientes = $pacientes;
        $this->collPacientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Paciente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Paciente objects.
     * @throws PropelException
     */
    public function countPacientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientesPartial && !$this->isNew();
        if (null === $this->collPacientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientes());
            }
            $query = PacienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collPacientes);
    }

    /**
     * Method called to associate a Paciente object to this object
     * through the Paciente foreign key attribute.
     *
     * @param    Paciente $l Paciente
     * @return Clinica The current object (for fluent API support)
     */
    public function addPaciente(Paciente $l)
    {
        if ($this->collPacientes === null) {
            $this->initPacientes();
            $this->collPacientesPartial = true;
        }

        if (!in_array($l, $this->collPacientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPaciente($l);

            if ($this->pacientesScheduledForDeletion and $this->pacientesScheduledForDeletion->contains($l)) {
                $this->pacientesScheduledForDeletion->remove($this->pacientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Paciente $paciente The paciente object to add.
     */
    protected function doAddPaciente($paciente)
    {
        $this->collPacientes[]= $paciente;
        $paciente->setClinica($this);
    }

    /**
     * @param	Paciente $paciente The paciente object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removePaciente($paciente)
    {
        if ($this->getPacientes()->contains($paciente)) {
            $this->collPacientes->remove($this->collPacientes->search($paciente));
            if (null === $this->pacientesScheduledForDeletion) {
                $this->pacientesScheduledForDeletion = clone $this->collPacientes;
                $this->pacientesScheduledForDeletion->clear();
            }
            $this->pacientesScheduledForDeletion[]= $paciente;
            $paciente->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Pacientes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Paciente[] List of Paciente objects
     */
    public function getPacientesJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getPacientes($query, $con);
    }

    /**
     * Clears out the collPacienteseguimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addPacienteseguimientos()
     */
    public function clearPacienteseguimientos()
    {
        $this->collPacienteseguimientos = null; // important to set this to null since that means it is uninitialized
        $this->collPacienteseguimientosPartial = null;

        return $this;
    }

    /**
     * reset is the collPacienteseguimientos collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacienteseguimientos($v = true)
    {
        $this->collPacienteseguimientosPartial = $v;
    }

    /**
     * Initializes the collPacienteseguimientos collection.
     *
     * By default this just sets the collPacienteseguimientos collection to an empty array (like clearcollPacienteseguimientos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacienteseguimientos($overrideExisting = true)
    {
        if (null !== $this->collPacienteseguimientos && !$overrideExisting) {
            return;
        }
        $this->collPacienteseguimientos = new PropelObjectCollection();
        $this->collPacienteseguimientos->setModel('Pacienteseguimiento');
    }

    /**
     * Gets an array of Pacienteseguimiento objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     * @throws PropelException
     */
    public function getPacienteseguimientos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacienteseguimientosPartial && !$this->isNew();
        if (null === $this->collPacienteseguimientos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacienteseguimientos) {
                // return empty collection
                $this->initPacienteseguimientos();
            } else {
                $collPacienteseguimientos = PacienteseguimientoQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacienteseguimientosPartial && count($collPacienteseguimientos)) {
                      $this->initPacienteseguimientos(false);

                      foreach ($collPacienteseguimientos as $obj) {
                        if (false == $this->collPacienteseguimientos->contains($obj)) {
                          $this->collPacienteseguimientos->append($obj);
                        }
                      }

                      $this->collPacienteseguimientosPartial = true;
                    }

                    $collPacienteseguimientos->getInternalIterator()->rewind();

                    return $collPacienteseguimientos;
                }

                if ($partial && $this->collPacienteseguimientos) {
                    foreach ($this->collPacienteseguimientos as $obj) {
                        if ($obj->isNew()) {
                            $collPacienteseguimientos[] = $obj;
                        }
                    }
                }

                $this->collPacienteseguimientos = $collPacienteseguimientos;
                $this->collPacienteseguimientosPartial = false;
            }
        }

        return $this->collPacienteseguimientos;
    }

    /**
     * Sets a collection of Pacienteseguimiento objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacienteseguimientos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setPacienteseguimientos(PropelCollection $pacienteseguimientos, PropelPDO $con = null)
    {
        $pacienteseguimientosToDelete = $this->getPacienteseguimientos(new Criteria(), $con)->diff($pacienteseguimientos);


        $this->pacienteseguimientosScheduledForDeletion = $pacienteseguimientosToDelete;

        foreach ($pacienteseguimientosToDelete as $pacienteseguimientoRemoved) {
            $pacienteseguimientoRemoved->setClinica(null);
        }

        $this->collPacienteseguimientos = null;
        foreach ($pacienteseguimientos as $pacienteseguimiento) {
            $this->addPacienteseguimiento($pacienteseguimiento);
        }

        $this->collPacienteseguimientos = $pacienteseguimientos;
        $this->collPacienteseguimientosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pacienteseguimiento objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pacienteseguimiento objects.
     * @throws PropelException
     */
    public function countPacienteseguimientos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacienteseguimientosPartial && !$this->isNew();
        if (null === $this->collPacienteseguimientos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacienteseguimientos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacienteseguimientos());
            }
            $query = PacienteseguimientoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collPacienteseguimientos);
    }

    /**
     * Method called to associate a Pacienteseguimiento object to this object
     * through the Pacienteseguimiento foreign key attribute.
     *
     * @param    Pacienteseguimiento $l Pacienteseguimiento
     * @return Clinica The current object (for fluent API support)
     */
    public function addPacienteseguimiento(Pacienteseguimiento $l)
    {
        if ($this->collPacienteseguimientos === null) {
            $this->initPacienteseguimientos();
            $this->collPacienteseguimientosPartial = true;
        }

        if (!in_array($l, $this->collPacienteseguimientos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPacienteseguimiento($l);

            if ($this->pacienteseguimientosScheduledForDeletion and $this->pacienteseguimientosScheduledForDeletion->contains($l)) {
                $this->pacienteseguimientosScheduledForDeletion->remove($this->pacienteseguimientosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to add.
     */
    protected function doAddPacienteseguimiento($pacienteseguimiento)
    {
        $this->collPacienteseguimientos[]= $pacienteseguimiento;
        $pacienteseguimiento->setClinica($this);
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removePacienteseguimiento($pacienteseguimiento)
    {
        if ($this->getPacienteseguimientos()->contains($pacienteseguimiento)) {
            $this->collPacienteseguimientos->remove($this->collPacienteseguimientos->search($pacienteseguimiento));
            if (null === $this->pacienteseguimientosScheduledForDeletion) {
                $this->pacienteseguimientosScheduledForDeletion = clone $this->collPacienteseguimientos;
                $this->pacienteseguimientosScheduledForDeletion->clear();
            }
            $this->pacienteseguimientosScheduledForDeletion[]= clone $pacienteseguimiento;
            $pacienteseguimiento->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinCanalcomunicacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Canalcomunicacion', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }

    /**
     * Clears out the collProductoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addProductoclinicas()
     */
    public function clearProductoclinicas()
    {
        $this->collProductoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collProductoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collProductoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductoclinicas($v = true)
    {
        $this->collProductoclinicasPartial = $v;
    }

    /**
     * Initializes the collProductoclinicas collection.
     *
     * By default this just sets the collProductoclinicas collection to an empty array (like clearcollProductoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductoclinicas($overrideExisting = true)
    {
        if (null !== $this->collProductoclinicas && !$overrideExisting) {
            return;
        }
        $this->collProductoclinicas = new PropelObjectCollection();
        $this->collProductoclinicas->setModel('Productoclinica');
    }

    /**
     * Gets an array of Productoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productoclinica[] List of Productoclinica objects
     * @throws PropelException
     */
    public function getProductoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductoclinicasPartial && !$this->isNew();
        if (null === $this->collProductoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductoclinicas) {
                // return empty collection
                $this->initProductoclinicas();
            } else {
                $collProductoclinicas = ProductoclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductoclinicasPartial && count($collProductoclinicas)) {
                      $this->initProductoclinicas(false);

                      foreach ($collProductoclinicas as $obj) {
                        if (false == $this->collProductoclinicas->contains($obj)) {
                          $this->collProductoclinicas->append($obj);
                        }
                      }

                      $this->collProductoclinicasPartial = true;
                    }

                    $collProductoclinicas->getInternalIterator()->rewind();

                    return $collProductoclinicas;
                }

                if ($partial && $this->collProductoclinicas) {
                    foreach ($this->collProductoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collProductoclinicas[] = $obj;
                        }
                    }
                }

                $this->collProductoclinicas = $collProductoclinicas;
                $this->collProductoclinicasPartial = false;
            }
        }

        return $this->collProductoclinicas;
    }

    /**
     * Sets a collection of Productoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setProductoclinicas(PropelCollection $productoclinicas, PropelPDO $con = null)
    {
        $productoclinicasToDelete = $this->getProductoclinicas(new Criteria(), $con)->diff($productoclinicas);


        $this->productoclinicasScheduledForDeletion = $productoclinicasToDelete;

        foreach ($productoclinicasToDelete as $productoclinicaRemoved) {
            $productoclinicaRemoved->setClinica(null);
        }

        $this->collProductoclinicas = null;
        foreach ($productoclinicas as $productoclinica) {
            $this->addProductoclinica($productoclinica);
        }

        $this->collProductoclinicas = $productoclinicas;
        $this->collProductoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productoclinica objects.
     * @throws PropelException
     */
    public function countProductoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductoclinicasPartial && !$this->isNew();
        if (null === $this->collProductoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductoclinicas());
            }
            $query = ProductoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collProductoclinicas);
    }

    /**
     * Method called to associate a Productoclinica object to this object
     * through the Productoclinica foreign key attribute.
     *
     * @param    Productoclinica $l Productoclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addProductoclinica(Productoclinica $l)
    {
        if ($this->collProductoclinicas === null) {
            $this->initProductoclinicas();
            $this->collProductoclinicasPartial = true;
        }

        if (!in_array($l, $this->collProductoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductoclinica($l);

            if ($this->productoclinicasScheduledForDeletion and $this->productoclinicasScheduledForDeletion->contains($l)) {
                $this->productoclinicasScheduledForDeletion->remove($this->productoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productoclinica $productoclinica The productoclinica object to add.
     */
    protected function doAddProductoclinica($productoclinica)
    {
        $this->collProductoclinicas[]= $productoclinica;
        $productoclinica->setClinica($this);
    }

    /**
     * @param	Productoclinica $productoclinica The productoclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeProductoclinica($productoclinica)
    {
        if ($this->getProductoclinicas()->contains($productoclinica)) {
            $this->collProductoclinicas->remove($this->collProductoclinicas->search($productoclinica));
            if (null === $this->productoclinicasScheduledForDeletion) {
                $this->productoclinicasScheduledForDeletion = clone $this->collProductoclinicas;
                $this->productoclinicasScheduledForDeletion->clear();
            }
            $this->productoclinicasScheduledForDeletion[]= clone $productoclinica;
            $productoclinica->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Productoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productoclinica[] List of Productoclinica objects
     */
    public function getProductoclinicasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoclinicaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getProductoclinicas($query, $con);
    }

    /**
     * Clears out the collServicioclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addServicioclinicas()
     */
    public function clearServicioclinicas()
    {
        $this->collServicioclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collServicioclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collServicioclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialServicioclinicas($v = true)
    {
        $this->collServicioclinicasPartial = $v;
    }

    /**
     * Initializes the collServicioclinicas collection.
     *
     * By default this just sets the collServicioclinicas collection to an empty array (like clearcollServicioclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initServicioclinicas($overrideExisting = true)
    {
        if (null !== $this->collServicioclinicas && !$overrideExisting) {
            return;
        }
        $this->collServicioclinicas = new PropelObjectCollection();
        $this->collServicioclinicas->setModel('Servicioclinica');
    }

    /**
     * Gets an array of Servicioclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Servicioclinica[] List of Servicioclinica objects
     * @throws PropelException
     */
    public function getServicioclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collServicioclinicasPartial && !$this->isNew();
        if (null === $this->collServicioclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collServicioclinicas) {
                // return empty collection
                $this->initServicioclinicas();
            } else {
                $collServicioclinicas = ServicioclinicaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collServicioclinicasPartial && count($collServicioclinicas)) {
                      $this->initServicioclinicas(false);

                      foreach ($collServicioclinicas as $obj) {
                        if (false == $this->collServicioclinicas->contains($obj)) {
                          $this->collServicioclinicas->append($obj);
                        }
                      }

                      $this->collServicioclinicasPartial = true;
                    }

                    $collServicioclinicas->getInternalIterator()->rewind();

                    return $collServicioclinicas;
                }

                if ($partial && $this->collServicioclinicas) {
                    foreach ($this->collServicioclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collServicioclinicas[] = $obj;
                        }
                    }
                }

                $this->collServicioclinicas = $collServicioclinicas;
                $this->collServicioclinicasPartial = false;
            }
        }

        return $this->collServicioclinicas;
    }

    /**
     * Sets a collection of Servicioclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $servicioclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setServicioclinicas(PropelCollection $servicioclinicas, PropelPDO $con = null)
    {
        $servicioclinicasToDelete = $this->getServicioclinicas(new Criteria(), $con)->diff($servicioclinicas);


        $this->servicioclinicasScheduledForDeletion = $servicioclinicasToDelete;

        foreach ($servicioclinicasToDelete as $servicioclinicaRemoved) {
            $servicioclinicaRemoved->setClinica(null);
        }

        $this->collServicioclinicas = null;
        foreach ($servicioclinicas as $servicioclinica) {
            $this->addServicioclinica($servicioclinica);
        }

        $this->collServicioclinicas = $servicioclinicas;
        $this->collServicioclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Servicioclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Servicioclinica objects.
     * @throws PropelException
     */
    public function countServicioclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collServicioclinicasPartial && !$this->isNew();
        if (null === $this->collServicioclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collServicioclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getServicioclinicas());
            }
            $query = ServicioclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collServicioclinicas);
    }

    /**
     * Method called to associate a Servicioclinica object to this object
     * through the Servicioclinica foreign key attribute.
     *
     * @param    Servicioclinica $l Servicioclinica
     * @return Clinica The current object (for fluent API support)
     */
    public function addServicioclinica(Servicioclinica $l)
    {
        if ($this->collServicioclinicas === null) {
            $this->initServicioclinicas();
            $this->collServicioclinicasPartial = true;
        }

        if (!in_array($l, $this->collServicioclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddServicioclinica($l);

            if ($this->servicioclinicasScheduledForDeletion and $this->servicioclinicasScheduledForDeletion->contains($l)) {
                $this->servicioclinicasScheduledForDeletion->remove($this->servicioclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Servicioclinica $servicioclinica The servicioclinica object to add.
     */
    protected function doAddServicioclinica($servicioclinica)
    {
        $this->collServicioclinicas[]= $servicioclinica;
        $servicioclinica->setClinica($this);
    }

    /**
     * @param	Servicioclinica $servicioclinica The servicioclinica object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeServicioclinica($servicioclinica)
    {
        if ($this->getServicioclinicas()->contains($servicioclinica)) {
            $this->collServicioclinicas->remove($this->collServicioclinicas->search($servicioclinica));
            if (null === $this->servicioclinicasScheduledForDeletion) {
                $this->servicioclinicasScheduledForDeletion = clone $this->collServicioclinicas;
                $this->servicioclinicasScheduledForDeletion->clear();
            }
            $this->servicioclinicasScheduledForDeletion[]= clone $servicioclinica;
            $servicioclinica->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Servicioclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Servicioclinica[] List of Servicioclinica objects
     */
    public function getServicioclinicasJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ServicioclinicaQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getServicioclinicas($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdclinicadestinataria collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdclinicadestinataria()
     */
    public function clearTransferenciasRelatedByIdclinicadestinataria()
    {
        $this->collTransferenciasRelatedByIdclinicadestinataria = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdclinicadestinataria collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdclinicadestinataria($v = true)
    {
        $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdclinicadestinataria collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdclinicadestinataria collection to an empty array (like clearcollTransferenciasRelatedByIdclinicadestinataria());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdclinicadestinataria($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdclinicadestinataria && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdclinicadestinataria = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdclinicadestinataria->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdclinicadestinataria($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdclinicadestinatariaPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdclinicadestinataria || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdclinicadestinataria) {
                // return empty collection
                $this->initTransferenciasRelatedByIdclinicadestinataria();
            } else {
                $collTransferenciasRelatedByIdclinicadestinataria = TransferenciaQuery::create(null, $criteria)
                    ->filterByClinicaRelatedByIdclinicadestinataria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdclinicadestinatariaPartial && count($collTransferenciasRelatedByIdclinicadestinataria)) {
                      $this->initTransferenciasRelatedByIdclinicadestinataria(false);

                      foreach ($collTransferenciasRelatedByIdclinicadestinataria as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdclinicadestinataria->contains($obj)) {
                          $this->collTransferenciasRelatedByIdclinicadestinataria->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = true;
                    }

                    $collTransferenciasRelatedByIdclinicadestinataria->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdclinicadestinataria;
                }

                if ($partial && $this->collTransferenciasRelatedByIdclinicadestinataria) {
                    foreach ($this->collTransferenciasRelatedByIdclinicadestinataria as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdclinicadestinataria[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdclinicadestinataria = $collTransferenciasRelatedByIdclinicadestinataria;
                $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdclinicadestinataria;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdclinicadestinataria objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdclinicadestinataria A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdclinicadestinataria(PropelCollection $transferenciasRelatedByIdclinicadestinataria, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdclinicadestinatariaToDelete = $this->getTransferenciasRelatedByIdclinicadestinataria(new Criteria(), $con)->diff($transferenciasRelatedByIdclinicadestinataria);


        $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion = $transferenciasRelatedByIdclinicadestinatariaToDelete;

        foreach ($transferenciasRelatedByIdclinicadestinatariaToDelete as $transferenciaRelatedByIdclinicadestinatariaRemoved) {
            $transferenciaRelatedByIdclinicadestinatariaRemoved->setClinicaRelatedByIdclinicadestinataria(null);
        }

        $this->collTransferenciasRelatedByIdclinicadestinataria = null;
        foreach ($transferenciasRelatedByIdclinicadestinataria as $transferenciaRelatedByIdclinicadestinataria) {
            $this->addTransferenciaRelatedByIdclinicadestinataria($transferenciaRelatedByIdclinicadestinataria);
        }

        $this->collTransferenciasRelatedByIdclinicadestinataria = $transferenciasRelatedByIdclinicadestinataria;
        $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdclinicadestinataria(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdclinicadestinatariaPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdclinicadestinataria || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdclinicadestinataria) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdclinicadestinataria());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinicaRelatedByIdclinicadestinataria($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdclinicadestinataria);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Clinica The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdclinicadestinataria(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdclinicadestinataria === null) {
            $this->initTransferenciasRelatedByIdclinicadestinataria();
            $this->collTransferenciasRelatedByIdclinicadestinatariaPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdclinicadestinataria->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdclinicadestinataria($l);

            if ($this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion and $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->remove($this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdclinicadestinataria $transferenciaRelatedByIdclinicadestinataria The transferenciaRelatedByIdclinicadestinataria object to add.
     */
    protected function doAddTransferenciaRelatedByIdclinicadestinataria($transferenciaRelatedByIdclinicadestinataria)
    {
        $this->collTransferenciasRelatedByIdclinicadestinataria[]= $transferenciaRelatedByIdclinicadestinataria;
        $transferenciaRelatedByIdclinicadestinataria->setClinicaRelatedByIdclinicadestinataria($this);
    }

    /**
     * @param	TransferenciaRelatedByIdclinicadestinataria $transferenciaRelatedByIdclinicadestinataria The transferenciaRelatedByIdclinicadestinataria object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdclinicadestinataria($transferenciaRelatedByIdclinicadestinataria)
    {
        if ($this->getTransferenciasRelatedByIdclinicadestinataria()->contains($transferenciaRelatedByIdclinicadestinataria)) {
            $this->collTransferenciasRelatedByIdclinicadestinataria->remove($this->collTransferenciasRelatedByIdclinicadestinataria->search($transferenciaRelatedByIdclinicadestinataria));
            if (null === $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion) {
                $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion = clone $this->collTransferenciasRelatedByIdclinicadestinataria;
                $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdclinicadestinatariaScheduledForDeletion[]= clone $transferenciaRelatedByIdclinicadestinataria;
            $transferenciaRelatedByIdclinicadestinataria->setClinicaRelatedByIdclinicadestinataria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdclinicadestinataria from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdclinicadestinatariaJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getTransferenciasRelatedByIdclinicadestinataria($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdclinicadestinataria from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdclinicadestinatariaJoinEmpleadoRelatedByIdempleadoreceptor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreceptor', $join_behavior);

        return $this->getTransferenciasRelatedByIdclinicadestinataria($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdclinicaremitente collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdclinicaremitente()
     */
    public function clearTransferenciasRelatedByIdclinicaremitente()
    {
        $this->collTransferenciasRelatedByIdclinicaremitente = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdclinicaremitentePartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdclinicaremitente collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdclinicaremitente($v = true)
    {
        $this->collTransferenciasRelatedByIdclinicaremitentePartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdclinicaremitente collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdclinicaremitente collection to an empty array (like clearcollTransferenciasRelatedByIdclinicaremitente());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdclinicaremitente($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdclinicaremitente && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdclinicaremitente = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdclinicaremitente->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdclinicaremitente($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdclinicaremitentePartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdclinicaremitente || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdclinicaremitente) {
                // return empty collection
                $this->initTransferenciasRelatedByIdclinicaremitente();
            } else {
                $collTransferenciasRelatedByIdclinicaremitente = TransferenciaQuery::create(null, $criteria)
                    ->filterByClinicaRelatedByIdclinicaremitente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdclinicaremitentePartial && count($collTransferenciasRelatedByIdclinicaremitente)) {
                      $this->initTransferenciasRelatedByIdclinicaremitente(false);

                      foreach ($collTransferenciasRelatedByIdclinicaremitente as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdclinicaremitente->contains($obj)) {
                          $this->collTransferenciasRelatedByIdclinicaremitente->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdclinicaremitentePartial = true;
                    }

                    $collTransferenciasRelatedByIdclinicaremitente->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdclinicaremitente;
                }

                if ($partial && $this->collTransferenciasRelatedByIdclinicaremitente) {
                    foreach ($this->collTransferenciasRelatedByIdclinicaremitente as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdclinicaremitente[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdclinicaremitente = $collTransferenciasRelatedByIdclinicaremitente;
                $this->collTransferenciasRelatedByIdclinicaremitentePartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdclinicaremitente;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdclinicaremitente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdclinicaremitente A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdclinicaremitente(PropelCollection $transferenciasRelatedByIdclinicaremitente, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdclinicaremitenteToDelete = $this->getTransferenciasRelatedByIdclinicaremitente(new Criteria(), $con)->diff($transferenciasRelatedByIdclinicaremitente);


        $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion = $transferenciasRelatedByIdclinicaremitenteToDelete;

        foreach ($transferenciasRelatedByIdclinicaremitenteToDelete as $transferenciaRelatedByIdclinicaremitenteRemoved) {
            $transferenciaRelatedByIdclinicaremitenteRemoved->setClinicaRelatedByIdclinicaremitente(null);
        }

        $this->collTransferenciasRelatedByIdclinicaremitente = null;
        foreach ($transferenciasRelatedByIdclinicaremitente as $transferenciaRelatedByIdclinicaremitente) {
            $this->addTransferenciaRelatedByIdclinicaremitente($transferenciaRelatedByIdclinicaremitente);
        }

        $this->collTransferenciasRelatedByIdclinicaremitente = $transferenciasRelatedByIdclinicaremitente;
        $this->collTransferenciasRelatedByIdclinicaremitentePartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdclinicaremitente(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdclinicaremitentePartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdclinicaremitente || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdclinicaremitente) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdclinicaremitente());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinicaRelatedByIdclinicaremitente($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdclinicaremitente);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Clinica The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdclinicaremitente(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdclinicaremitente === null) {
            $this->initTransferenciasRelatedByIdclinicaremitente();
            $this->collTransferenciasRelatedByIdclinicaremitentePartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdclinicaremitente->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdclinicaremitente($l);

            if ($this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion and $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->remove($this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdclinicaremitente $transferenciaRelatedByIdclinicaremitente The transferenciaRelatedByIdclinicaremitente object to add.
     */
    protected function doAddTransferenciaRelatedByIdclinicaremitente($transferenciaRelatedByIdclinicaremitente)
    {
        $this->collTransferenciasRelatedByIdclinicaremitente[]= $transferenciaRelatedByIdclinicaremitente;
        $transferenciaRelatedByIdclinicaremitente->setClinicaRelatedByIdclinicaremitente($this);
    }

    /**
     * @param	TransferenciaRelatedByIdclinicaremitente $transferenciaRelatedByIdclinicaremitente The transferenciaRelatedByIdclinicaremitente object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdclinicaremitente($transferenciaRelatedByIdclinicaremitente)
    {
        if ($this->getTransferenciasRelatedByIdclinicaremitente()->contains($transferenciaRelatedByIdclinicaremitente)) {
            $this->collTransferenciasRelatedByIdclinicaremitente->remove($this->collTransferenciasRelatedByIdclinicaremitente->search($transferenciaRelatedByIdclinicaremitente));
            if (null === $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion) {
                $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion = clone $this->collTransferenciasRelatedByIdclinicaremitente;
                $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdclinicaremitenteScheduledForDeletion[]= clone $transferenciaRelatedByIdclinicaremitente;
            $transferenciaRelatedByIdclinicaremitente->setClinicaRelatedByIdclinicaremitente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdclinicaremitente from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdclinicaremitenteJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getTransferenciasRelatedByIdclinicaremitente($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdclinicaremitente from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdclinicaremitenteJoinEmpleadoRelatedByIdempleadoreceptor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreceptor', $join_behavior);

        return $this->getTransferenciasRelatedByIdclinicaremitente($query, $con);
    }

    /**
     * Clears out the collVisitas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clinica The current object (for fluent API support)
     * @see        addVisitas()
     */
    public function clearVisitas()
    {
        $this->collVisitas = null; // important to set this to null since that means it is uninitialized
        $this->collVisitasPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitas($v = true)
    {
        $this->collVisitasPartial = $v;
    }

    /**
     * Initializes the collVisitas collection.
     *
     * By default this just sets the collVisitas collection to an empty array (like clearcollVisitas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitas($overrideExisting = true)
    {
        if (null !== $this->collVisitas && !$overrideExisting) {
            return;
        }
        $this->collVisitas = new PropelObjectCollection();
        $this->collVisitas->setModel('Visita');
    }

    /**
     * Gets an array of Visita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visita[] List of Visita objects
     * @throws PropelException
     */
    public function getVisitas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitasPartial && !$this->isNew();
        if (null === $this->collVisitas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitas) {
                // return empty collection
                $this->initVisitas();
            } else {
                $collVisitas = VisitaQuery::create(null, $criteria)
                    ->filterByClinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitasPartial && count($collVisitas)) {
                      $this->initVisitas(false);

                      foreach ($collVisitas as $obj) {
                        if (false == $this->collVisitas->contains($obj)) {
                          $this->collVisitas->append($obj);
                        }
                      }

                      $this->collVisitasPartial = true;
                    }

                    $collVisitas->getInternalIterator()->rewind();

                    return $collVisitas;
                }

                if ($partial && $this->collVisitas) {
                    foreach ($this->collVisitas as $obj) {
                        if ($obj->isNew()) {
                            $collVisitas[] = $obj;
                        }
                    }
                }

                $this->collVisitas = $collVisitas;
                $this->collVisitasPartial = false;
            }
        }

        return $this->collVisitas;
    }

    /**
     * Sets a collection of Visita objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clinica The current object (for fluent API support)
     */
    public function setVisitas(PropelCollection $visitas, PropelPDO $con = null)
    {
        $visitasToDelete = $this->getVisitas(new Criteria(), $con)->diff($visitas);


        $this->visitasScheduledForDeletion = $visitasToDelete;

        foreach ($visitasToDelete as $visitaRemoved) {
            $visitaRemoved->setClinica(null);
        }

        $this->collVisitas = null;
        foreach ($visitas as $visita) {
            $this->addVisita($visita);
        }

        $this->collVisitas = $visitas;
        $this->collVisitasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Visita objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Visita objects.
     * @throws PropelException
     */
    public function countVisitas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitasPartial && !$this->isNew();
        if (null === $this->collVisitas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitas());
            }
            $query = VisitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClinica($this)
                ->count($con);
        }

        return count($this->collVisitas);
    }

    /**
     * Method called to associate a Visita object to this object
     * through the Visita foreign key attribute.
     *
     * @param    Visita $l Visita
     * @return Clinica The current object (for fluent API support)
     */
    public function addVisita(Visita $l)
    {
        if ($this->collVisitas === null) {
            $this->initVisitas();
            $this->collVisitasPartial = true;
        }

        if (!in_array($l, $this->collVisitas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisita($l);

            if ($this->visitasScheduledForDeletion and $this->visitasScheduledForDeletion->contains($l)) {
                $this->visitasScheduledForDeletion->remove($this->visitasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Visita $visita The visita object to add.
     */
    protected function doAddVisita($visita)
    {
        $this->collVisitas[]= $visita;
        $visita->setClinica($this);
    }

    /**
     * @param	Visita $visita The visita object to remove.
     * @return Clinica The current object (for fluent API support)
     */
    public function removeVisita($visita)
    {
        if ($this->getVisitas()->contains($visita)) {
            $this->collVisitas->remove($this->collVisitas->search($visita));
            if (null === $this->visitasScheduledForDeletion) {
                $this->visitasScheduledForDeletion = clone $this->collVisitas;
                $this->visitasScheduledForDeletion->clear();
            }
            $this->visitasScheduledForDeletion[]= clone $visita;
            $visita->setClinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getVisitas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinEmpleadoRelatedByIdempleadocreador($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadocreador', $join_behavior);

        return $this->getVisitas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clinica is new, it will return
     * an empty collection; or if this Clinica has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getVisitas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idclinica = null;
        $this->clinica_nombre = null;
        $this->clinica_direccion = null;
        $this->clinica_registropatronal = null;
        $this->clinica_telefono = null;
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
            if ($this->collCancelacionventaclinicas) {
                foreach ($this->collCancelacionventaclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClinicaempleados) {
                foreach ($this->collClinicaempleados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEgresoclinicas) {
                foreach ($this->collEgresoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadorecesos) {
                foreach ($this->collEmpleadorecesos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadoreportes) {
                foreach ($this->collEmpleadoreportes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEncargadoclinicas) {
                foreach ($this->collEncargadoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInsumoclinicas) {
                foreach ($this->collInsumoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacientes) {
                foreach ($this->collPacientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacienteseguimientos) {
                foreach ($this->collPacienteseguimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductoclinicas) {
                foreach ($this->collProductoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collServicioclinicas) {
                foreach ($this->collServicioclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdclinicadestinataria) {
                foreach ($this->collTransferenciasRelatedByIdclinicadestinataria as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdclinicaremitente) {
                foreach ($this->collTransferenciasRelatedByIdclinicaremitente as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitas) {
                foreach ($this->collVisitas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCancelacionventaclinicas instanceof PropelCollection) {
            $this->collCancelacionventaclinicas->clearIterator();
        }
        $this->collCancelacionventaclinicas = null;
        if ($this->collClinicaempleados instanceof PropelCollection) {
            $this->collClinicaempleados->clearIterator();
        }
        $this->collClinicaempleados = null;
        if ($this->collEgresoclinicas instanceof PropelCollection) {
            $this->collEgresoclinicas->clearIterator();
        }
        $this->collEgresoclinicas = null;
        if ($this->collEmpleadorecesos instanceof PropelCollection) {
            $this->collEmpleadorecesos->clearIterator();
        }
        $this->collEmpleadorecesos = null;
        if ($this->collEmpleadoreportes instanceof PropelCollection) {
            $this->collEmpleadoreportes->clearIterator();
        }
        $this->collEmpleadoreportes = null;
        if ($this->collEncargadoclinicas instanceof PropelCollection) {
            $this->collEncargadoclinicas->clearIterator();
        }
        $this->collEncargadoclinicas = null;
        if ($this->collInsumoclinicas instanceof PropelCollection) {
            $this->collInsumoclinicas->clearIterator();
        }
        $this->collInsumoclinicas = null;
        if ($this->collPacientes instanceof PropelCollection) {
            $this->collPacientes->clearIterator();
        }
        $this->collPacientes = null;
        if ($this->collPacienteseguimientos instanceof PropelCollection) {
            $this->collPacienteseguimientos->clearIterator();
        }
        $this->collPacienteseguimientos = null;
        if ($this->collProductoclinicas instanceof PropelCollection) {
            $this->collProductoclinicas->clearIterator();
        }
        $this->collProductoclinicas = null;
        if ($this->collServicioclinicas instanceof PropelCollection) {
            $this->collServicioclinicas->clearIterator();
        }
        $this->collServicioclinicas = null;
        if ($this->collTransferenciasRelatedByIdclinicadestinataria instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdclinicadestinataria->clearIterator();
        }
        $this->collTransferenciasRelatedByIdclinicadestinataria = null;
        if ($this->collTransferenciasRelatedByIdclinicaremitente instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdclinicaremitente->clearIterator();
        }
        $this->collTransferenciasRelatedByIdclinicaremitente = null;
        if ($this->collVisitas instanceof PropelCollection) {
            $this->collVisitas->clearIterator();
        }
        $this->collVisitas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClinicaPeer::DEFAULT_STRING_FORMAT);
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
