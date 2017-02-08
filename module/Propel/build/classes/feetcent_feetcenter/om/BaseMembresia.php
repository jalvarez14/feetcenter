<?php


/**
 * Base class that represents a row from the 'membresia' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseMembresia extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MembresiaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MembresiaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idmembresia field.
     * @var        int
     */
    protected $idmembresia;

    /**
     * The value for the membresia_nombre field.
     * @var        string
     */
    protected $membresia_nombre;

    /**
     * The value for the membresia_descripcion field.
     * @var        string
     */
    protected $membresia_descripcion;

    /**
     * The value for the membresia_servicios field.
     * @var        string
     */
    protected $membresia_servicios;

    /**
     * The value for the membresia_cupones field.
     * @var        string
     */
    protected $membresia_cupones;

    /**
     * The value for the servicio_generaingreso field.
     * @var        boolean
     */
    protected $servicio_generaingreso;

    /**
     * The value for the servicio_generacomision field.
     * @var        boolean
     */
    protected $servicio_generacomision;

    /**
     * The value for the servicio_tipocomision field.
     * @var        string
     */
    protected $servicio_tipocomision;

    /**
     * The value for the servicio_comision field.
     * @var        string
     */
    protected $servicio_comision;

    /**
     * The value for the membresia_precio field.
     * @var        string
     */
    protected $membresia_precio;

    /**
     * @var        PropelObjectCollection|Membresiaclinica[] Collection to store aggregation of Membresiaclinica objects.
     */
    protected $collMembresiaclinicas;
    protected $collMembresiaclinicasPartial;

    /**
     * @var        PropelObjectCollection|Pacientemembresia[] Collection to store aggregation of Pacientemembresia objects.
     */
    protected $collPacientemembresias;
    protected $collPacientemembresiasPartial;

    /**
     * @var        PropelObjectCollection|Visitadetalle[] Collection to store aggregation of Visitadetalle objects.
     */
    protected $collVisitadetalles;
    protected $collVisitadetallesPartial;

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
    protected $membresiaclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacientemembresiasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitadetallesScheduledForDeletion = null;

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
     * Get the [membresia_nombre] column value.
     *
     * @return string
     */
    public function getMembresiaNombre()
    {

        return $this->membresia_nombre;
    }

    /**
     * Get the [membresia_descripcion] column value.
     *
     * @return string
     */
    public function getMembresiaDescripcion()
    {

        return $this->membresia_descripcion;
    }

    /**
     * Get the [membresia_servicios] column value.
     *
     * @return string
     */
    public function getMembresiaServicios()
    {

        return $this->membresia_servicios;
    }

    /**
     * Get the [membresia_cupones] column value.
     *
     * @return string
     */
    public function getMembresiaCupones()
    {

        return $this->membresia_cupones;
    }

    /**
     * Get the [servicio_generaingreso] column value.
     *
     * @return boolean
     */
    public function getServicioGeneraingreso()
    {

        return $this->servicio_generaingreso;
    }

    /**
     * Get the [servicio_generacomision] column value.
     *
     * @return boolean
     */
    public function getServicioGeneracomision()
    {

        return $this->servicio_generacomision;
    }

    /**
     * Get the [servicio_tipocomision] column value.
     *
     * @return string
     */
    public function getServicioTipocomision()
    {

        return $this->servicio_tipocomision;
    }

    /**
     * Get the [servicio_comision] column value.
     *
     * @return string
     */
    public function getServicioComision()
    {

        return $this->servicio_comision;
    }

    /**
     * Get the [membresia_precio] column value.
     *
     * @return string
     */
    public function getMembresiaPrecio()
    {

        return $this->membresia_precio;
    }

    /**
     * Set the value of [idmembresia] column.
     *
     * @param  int $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setIdmembresia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmembresia !== $v) {
            $this->idmembresia = $v;
            $this->modifiedColumns[] = MembresiaPeer::IDMEMBRESIA;
        }


        return $this;
    } // setIdmembresia()

    /**
     * Set the value of [membresia_nombre] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->membresia_nombre !== $v) {
            $this->membresia_nombre = $v;
            $this->modifiedColumns[] = MembresiaPeer::MEMBRESIA_NOMBRE;
        }


        return $this;
    } // setMembresiaNombre()

    /**
     * Set the value of [membresia_descripcion] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->membresia_descripcion !== $v) {
            $this->membresia_descripcion = $v;
            $this->modifiedColumns[] = MembresiaPeer::MEMBRESIA_DESCRIPCION;
        }


        return $this;
    } // setMembresiaDescripcion()

    /**
     * Set the value of [membresia_servicios] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaServicios($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->membresia_servicios !== $v) {
            $this->membresia_servicios = $v;
            $this->modifiedColumns[] = MembresiaPeer::MEMBRESIA_SERVICIOS;
        }


        return $this;
    } // setMembresiaServicios()

    /**
     * Set the value of [membresia_cupones] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaCupones($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->membresia_cupones !== $v) {
            $this->membresia_cupones = $v;
            $this->modifiedColumns[] = MembresiaPeer::MEMBRESIA_CUPONES;
        }


        return $this;
    } // setMembresiaCupones()

    /**
     * Sets the value of the [servicio_generaingreso] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setServicioGeneraingreso($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->servicio_generaingreso !== $v) {
            $this->servicio_generaingreso = $v;
            $this->modifiedColumns[] = MembresiaPeer::SERVICIO_GENERAINGRESO;
        }


        return $this;
    } // setServicioGeneraingreso()

    /**
     * Sets the value of the [servicio_generacomision] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setServicioGeneracomision($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->servicio_generacomision !== $v) {
            $this->servicio_generacomision = $v;
            $this->modifiedColumns[] = MembresiaPeer::SERVICIO_GENERACOMISION;
        }


        return $this;
    } // setServicioGeneracomision()

    /**
     * Set the value of [servicio_tipocomision] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setServicioTipocomision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_tipocomision !== $v) {
            $this->servicio_tipocomision = $v;
            $this->modifiedColumns[] = MembresiaPeer::SERVICIO_TIPOCOMISION;
        }


        return $this;
    } // setServicioTipocomision()

    /**
     * Set the value of [servicio_comision] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setServicioComision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicio_comision !== $v) {
            $this->servicio_comision = $v;
            $this->modifiedColumns[] = MembresiaPeer::SERVICIO_COMISION;
        }


        return $this;
    } // setServicioComision()

    /**
     * Set the value of [membresia_precio] column.
     *
     * @param  string $v new value
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaPrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->membresia_precio !== $v) {
            $this->membresia_precio = $v;
            $this->modifiedColumns[] = MembresiaPeer::MEMBRESIA_PRECIO;
        }


        return $this;
    } // setMembresiaPrecio()

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

            $this->idmembresia = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->membresia_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->membresia_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->membresia_servicios = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->membresia_cupones = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->servicio_generaingreso = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->servicio_generacomision = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->servicio_tipocomision = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->servicio_comision = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->membresia_precio = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = MembresiaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Membresia object", $e);
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
            $con = Propel::getConnection(MembresiaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MembresiaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collMembresiaclinicas = null;

            $this->collPacientemembresias = null;

            $this->collVisitadetalles = null;

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
            $con = Propel::getConnection(MembresiaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MembresiaQuery::create()
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
            $con = Propel::getConnection(MembresiaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MembresiaPeer::addInstanceToPool($this);
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

            if ($this->membresiaclinicasScheduledForDeletion !== null) {
                if (!$this->membresiaclinicasScheduledForDeletion->isEmpty()) {
                    MembresiaclinicaQuery::create()
                        ->filterByPrimaryKeys($this->membresiaclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->membresiaclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collMembresiaclinicas !== null) {
                foreach ($this->collMembresiaclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pacientemembresiasScheduledForDeletion !== null) {
                if (!$this->pacientemembresiasScheduledForDeletion->isEmpty()) {
                    PacientemembresiaQuery::create()
                        ->filterByPrimaryKeys($this->pacientemembresiasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientemembresiasScheduledForDeletion = null;
                }
            }

            if ($this->collPacientemembresias !== null) {
                foreach ($this->collPacientemembresias as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->visitadetallesScheduledForDeletion !== null) {
                if (!$this->visitadetallesScheduledForDeletion->isEmpty()) {
                    VisitadetalleQuery::create()
                        ->filterByPrimaryKeys($this->visitadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collVisitadetalles !== null) {
                foreach ($this->collVisitadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = MembresiaPeer::IDMEMBRESIA;
        if (null !== $this->idmembresia) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MembresiaPeer::IDMEMBRESIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MembresiaPeer::IDMEMBRESIA)) {
            $modifiedColumns[':p' . $index++]  = '`idmembresia`';
        }
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`membresia_nombre`';
        }
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`membresia_descripcion`';
        }
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_SERVICIOS)) {
            $modifiedColumns[':p' . $index++]  = '`membresia_servicios`';
        }
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_CUPONES)) {
            $modifiedColumns[':p' . $index++]  = '`membresia_cupones`';
        }
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_GENERAINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_generaingreso`';
        }
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_GENERACOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_generacomision`';
        }
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_TIPOCOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_tipocomision`';
        }
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_COMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_comision`';
        }
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`membresia_precio`';
        }

        $sql = sprintf(
            'INSERT INTO `membresia` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmembresia`':
                        $stmt->bindValue($identifier, $this->idmembresia, PDO::PARAM_INT);
                        break;
                    case '`membresia_nombre`':
                        $stmt->bindValue($identifier, $this->membresia_nombre, PDO::PARAM_STR);
                        break;
                    case '`membresia_descripcion`':
                        $stmt->bindValue($identifier, $this->membresia_descripcion, PDO::PARAM_STR);
                        break;
                    case '`membresia_servicios`':
                        $stmt->bindValue($identifier, $this->membresia_servicios, PDO::PARAM_STR);
                        break;
                    case '`membresia_cupones`':
                        $stmt->bindValue($identifier, $this->membresia_cupones, PDO::PARAM_STR);
                        break;
                    case '`servicio_generaingreso`':
                        $stmt->bindValue($identifier, (int) $this->servicio_generaingreso, PDO::PARAM_INT);
                        break;
                    case '`servicio_generacomision`':
                        $stmt->bindValue($identifier, (int) $this->servicio_generacomision, PDO::PARAM_INT);
                        break;
                    case '`servicio_tipocomision`':
                        $stmt->bindValue($identifier, $this->servicio_tipocomision, PDO::PARAM_STR);
                        break;
                    case '`servicio_comision`':
                        $stmt->bindValue($identifier, $this->servicio_comision, PDO::PARAM_STR);
                        break;
                    case '`membresia_precio`':
                        $stmt->bindValue($identifier, $this->membresia_precio, PDO::PARAM_STR);
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
        $this->setIdmembresia($pk);

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


            if (($retval = MembresiaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collMembresiaclinicas !== null) {
                    foreach ($this->collMembresiaclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacientemembresias !== null) {
                    foreach ($this->collPacientemembresias as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitadetalles !== null) {
                    foreach ($this->collVisitadetalles as $referrerFK) {
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
        $pos = MembresiaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmembresia();
                break;
            case 1:
                return $this->getMembresiaNombre();
                break;
            case 2:
                return $this->getMembresiaDescripcion();
                break;
            case 3:
                return $this->getMembresiaServicios();
                break;
            case 4:
                return $this->getMembresiaCupones();
                break;
            case 5:
                return $this->getServicioGeneraingreso();
                break;
            case 6:
                return $this->getServicioGeneracomision();
                break;
            case 7:
                return $this->getServicioTipocomision();
                break;
            case 8:
                return $this->getServicioComision();
                break;
            case 9:
                return $this->getMembresiaPrecio();
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
        if (isset($alreadyDumpedObjects['Membresia'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Membresia'][$this->getPrimaryKey()] = true;
        $keys = MembresiaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmembresia(),
            $keys[1] => $this->getMembresiaNombre(),
            $keys[2] => $this->getMembresiaDescripcion(),
            $keys[3] => $this->getMembresiaServicios(),
            $keys[4] => $this->getMembresiaCupones(),
            $keys[5] => $this->getServicioGeneraingreso(),
            $keys[6] => $this->getServicioGeneracomision(),
            $keys[7] => $this->getServicioTipocomision(),
            $keys[8] => $this->getServicioComision(),
            $keys[9] => $this->getMembresiaPrecio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collMembresiaclinicas) {
                $result['Membresiaclinicas'] = $this->collMembresiaclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacientemembresias) {
                $result['Pacientemembresias'] = $this->collPacientemembresias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitadetalles) {
                $result['Visitadetalles'] = $this->collVisitadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MembresiaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmembresia($value);
                break;
            case 1:
                $this->setMembresiaNombre($value);
                break;
            case 2:
                $this->setMembresiaDescripcion($value);
                break;
            case 3:
                $this->setMembresiaServicios($value);
                break;
            case 4:
                $this->setMembresiaCupones($value);
                break;
            case 5:
                $this->setServicioGeneraingreso($value);
                break;
            case 6:
                $this->setServicioGeneracomision($value);
                break;
            case 7:
                $this->setServicioTipocomision($value);
                break;
            case 8:
                $this->setServicioComision($value);
                break;
            case 9:
                $this->setMembresiaPrecio($value);
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
        $keys = MembresiaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmembresia($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMembresiaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMembresiaDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMembresiaServicios($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMembresiaCupones($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setServicioGeneraingreso($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setServicioGeneracomision($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setServicioTipocomision($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setServicioComision($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMembresiaPrecio($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MembresiaPeer::DATABASE_NAME);

        if ($this->isColumnModified(MembresiaPeer::IDMEMBRESIA)) $criteria->add(MembresiaPeer::IDMEMBRESIA, $this->idmembresia);
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_NOMBRE)) $criteria->add(MembresiaPeer::MEMBRESIA_NOMBRE, $this->membresia_nombre);
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_DESCRIPCION)) $criteria->add(MembresiaPeer::MEMBRESIA_DESCRIPCION, $this->membresia_descripcion);
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_SERVICIOS)) $criteria->add(MembresiaPeer::MEMBRESIA_SERVICIOS, $this->membresia_servicios);
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_CUPONES)) $criteria->add(MembresiaPeer::MEMBRESIA_CUPONES, $this->membresia_cupones);
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_GENERAINGRESO)) $criteria->add(MembresiaPeer::SERVICIO_GENERAINGRESO, $this->servicio_generaingreso);
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_GENERACOMISION)) $criteria->add(MembresiaPeer::SERVICIO_GENERACOMISION, $this->servicio_generacomision);
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_TIPOCOMISION)) $criteria->add(MembresiaPeer::SERVICIO_TIPOCOMISION, $this->servicio_tipocomision);
        if ($this->isColumnModified(MembresiaPeer::SERVICIO_COMISION)) $criteria->add(MembresiaPeer::SERVICIO_COMISION, $this->servicio_comision);
        if ($this->isColumnModified(MembresiaPeer::MEMBRESIA_PRECIO)) $criteria->add(MembresiaPeer::MEMBRESIA_PRECIO, $this->membresia_precio);

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
        $criteria = new Criteria(MembresiaPeer::DATABASE_NAME);
        $criteria->add(MembresiaPeer::IDMEMBRESIA, $this->idmembresia);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmembresia();
    }

    /**
     * Generic method to set the primary key (idmembresia column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmembresia($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmembresia();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Membresia (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMembresiaNombre($this->getMembresiaNombre());
        $copyObj->setMembresiaDescripcion($this->getMembresiaDescripcion());
        $copyObj->setMembresiaServicios($this->getMembresiaServicios());
        $copyObj->setMembresiaCupones($this->getMembresiaCupones());
        $copyObj->setServicioGeneraingreso($this->getServicioGeneraingreso());
        $copyObj->setServicioGeneracomision($this->getServicioGeneracomision());
        $copyObj->setServicioTipocomision($this->getServicioTipocomision());
        $copyObj->setServicioComision($this->getServicioComision());
        $copyObj->setMembresiaPrecio($this->getMembresiaPrecio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getMembresiaclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMembresiaclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacientemembresias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacientemembresia($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdmembresia(NULL); // this is a auto-increment column, so set to default value
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
     * @return Membresia Clone of current object.
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
     * @return MembresiaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MembresiaPeer();
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
        if ('Membresiaclinica' == $relationName) {
            $this->initMembresiaclinicas();
        }
        if ('Pacientemembresia' == $relationName) {
            $this->initPacientemembresias();
        }
        if ('Visitadetalle' == $relationName) {
            $this->initVisitadetalles();
        }
    }

    /**
     * Clears out the collMembresiaclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Membresia The current object (for fluent API support)
     * @see        addMembresiaclinicas()
     */
    public function clearMembresiaclinicas()
    {
        $this->collMembresiaclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collMembresiaclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collMembresiaclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialMembresiaclinicas($v = true)
    {
        $this->collMembresiaclinicasPartial = $v;
    }

    /**
     * Initializes the collMembresiaclinicas collection.
     *
     * By default this just sets the collMembresiaclinicas collection to an empty array (like clearcollMembresiaclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMembresiaclinicas($overrideExisting = true)
    {
        if (null !== $this->collMembresiaclinicas && !$overrideExisting) {
            return;
        }
        $this->collMembresiaclinicas = new PropelObjectCollection();
        $this->collMembresiaclinicas->setModel('Membresiaclinica');
    }

    /**
     * Gets an array of Membresiaclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Membresia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Membresiaclinica[] List of Membresiaclinica objects
     * @throws PropelException
     */
    public function getMembresiaclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMembresiaclinicasPartial && !$this->isNew();
        if (null === $this->collMembresiaclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMembresiaclinicas) {
                // return empty collection
                $this->initMembresiaclinicas();
            } else {
                $collMembresiaclinicas = MembresiaclinicaQuery::create(null, $criteria)
                    ->filterByMembresia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMembresiaclinicasPartial && count($collMembresiaclinicas)) {
                      $this->initMembresiaclinicas(false);

                      foreach ($collMembresiaclinicas as $obj) {
                        if (false == $this->collMembresiaclinicas->contains($obj)) {
                          $this->collMembresiaclinicas->append($obj);
                        }
                      }

                      $this->collMembresiaclinicasPartial = true;
                    }

                    $collMembresiaclinicas->getInternalIterator()->rewind();

                    return $collMembresiaclinicas;
                }

                if ($partial && $this->collMembresiaclinicas) {
                    foreach ($this->collMembresiaclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collMembresiaclinicas[] = $obj;
                        }
                    }
                }

                $this->collMembresiaclinicas = $collMembresiaclinicas;
                $this->collMembresiaclinicasPartial = false;
            }
        }

        return $this->collMembresiaclinicas;
    }

    /**
     * Sets a collection of Membresiaclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $membresiaclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Membresia The current object (for fluent API support)
     */
    public function setMembresiaclinicas(PropelCollection $membresiaclinicas, PropelPDO $con = null)
    {
        $membresiaclinicasToDelete = $this->getMembresiaclinicas(new Criteria(), $con)->diff($membresiaclinicas);


        $this->membresiaclinicasScheduledForDeletion = $membresiaclinicasToDelete;

        foreach ($membresiaclinicasToDelete as $membresiaclinicaRemoved) {
            $membresiaclinicaRemoved->setMembresia(null);
        }

        $this->collMembresiaclinicas = null;
        foreach ($membresiaclinicas as $membresiaclinica) {
            $this->addMembresiaclinica($membresiaclinica);
        }

        $this->collMembresiaclinicas = $membresiaclinicas;
        $this->collMembresiaclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Membresiaclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Membresiaclinica objects.
     * @throws PropelException
     */
    public function countMembresiaclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMembresiaclinicasPartial && !$this->isNew();
        if (null === $this->collMembresiaclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMembresiaclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMembresiaclinicas());
            }
            $query = MembresiaclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMembresia($this)
                ->count($con);
        }

        return count($this->collMembresiaclinicas);
    }

    /**
     * Method called to associate a Membresiaclinica object to this object
     * through the Membresiaclinica foreign key attribute.
     *
     * @param    Membresiaclinica $l Membresiaclinica
     * @return Membresia The current object (for fluent API support)
     */
    public function addMembresiaclinica(Membresiaclinica $l)
    {
        if ($this->collMembresiaclinicas === null) {
            $this->initMembresiaclinicas();
            $this->collMembresiaclinicasPartial = true;
        }

        if (!in_array($l, $this->collMembresiaclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMembresiaclinica($l);

            if ($this->membresiaclinicasScheduledForDeletion and $this->membresiaclinicasScheduledForDeletion->contains($l)) {
                $this->membresiaclinicasScheduledForDeletion->remove($this->membresiaclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Membresiaclinica $membresiaclinica The membresiaclinica object to add.
     */
    protected function doAddMembresiaclinica($membresiaclinica)
    {
        $this->collMembresiaclinicas[]= $membresiaclinica;
        $membresiaclinica->setMembresia($this);
    }

    /**
     * @param	Membresiaclinica $membresiaclinica The membresiaclinica object to remove.
     * @return Membresia The current object (for fluent API support)
     */
    public function removeMembresiaclinica($membresiaclinica)
    {
        if ($this->getMembresiaclinicas()->contains($membresiaclinica)) {
            $this->collMembresiaclinicas->remove($this->collMembresiaclinicas->search($membresiaclinica));
            if (null === $this->membresiaclinicasScheduledForDeletion) {
                $this->membresiaclinicasScheduledForDeletion = clone $this->collMembresiaclinicas;
                $this->membresiaclinicasScheduledForDeletion->clear();
            }
            $this->membresiaclinicasScheduledForDeletion[]= clone $membresiaclinica;
            $membresiaclinica->setMembresia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Membresiaclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Membresiaclinica[] List of Membresiaclinica objects
     */
    public function getMembresiaclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MembresiaclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getMembresiaclinicas($query, $con);
    }

    /**
     * Clears out the collPacientemembresias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Membresia The current object (for fluent API support)
     * @see        addPacientemembresias()
     */
    public function clearPacientemembresias()
    {
        $this->collPacientemembresias = null; // important to set this to null since that means it is uninitialized
        $this->collPacientemembresiasPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientemembresias collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientemembresias($v = true)
    {
        $this->collPacientemembresiasPartial = $v;
    }

    /**
     * Initializes the collPacientemembresias collection.
     *
     * By default this just sets the collPacientemembresias collection to an empty array (like clearcollPacientemembresias());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientemembresias($overrideExisting = true)
    {
        if (null !== $this->collPacientemembresias && !$overrideExisting) {
            return;
        }
        $this->collPacientemembresias = new PropelObjectCollection();
        $this->collPacientemembresias->setModel('Pacientemembresia');
    }

    /**
     * Gets an array of Pacientemembresia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Membresia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     * @throws PropelException
     */
    public function getPacientemembresias($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiasPartial && !$this->isNew();
        if (null === $this->collPacientemembresias || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresias) {
                // return empty collection
                $this->initPacientemembresias();
            } else {
                $collPacientemembresias = PacientemembresiaQuery::create(null, $criteria)
                    ->filterByMembresia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientemembresiasPartial && count($collPacientemembresias)) {
                      $this->initPacientemembresias(false);

                      foreach ($collPacientemembresias as $obj) {
                        if (false == $this->collPacientemembresias->contains($obj)) {
                          $this->collPacientemembresias->append($obj);
                        }
                      }

                      $this->collPacientemembresiasPartial = true;
                    }

                    $collPacientemembresias->getInternalIterator()->rewind();

                    return $collPacientemembresias;
                }

                if ($partial && $this->collPacientemembresias) {
                    foreach ($this->collPacientemembresias as $obj) {
                        if ($obj->isNew()) {
                            $collPacientemembresias[] = $obj;
                        }
                    }
                }

                $this->collPacientemembresias = $collPacientemembresias;
                $this->collPacientemembresiasPartial = false;
            }
        }

        return $this->collPacientemembresias;
    }

    /**
     * Sets a collection of Pacientemembresia objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientemembresias A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Membresia The current object (for fluent API support)
     */
    public function setPacientemembresias(PropelCollection $pacientemembresias, PropelPDO $con = null)
    {
        $pacientemembresiasToDelete = $this->getPacientemembresias(new Criteria(), $con)->diff($pacientemembresias);


        $this->pacientemembresiasScheduledForDeletion = $pacientemembresiasToDelete;

        foreach ($pacientemembresiasToDelete as $pacientemembresiaRemoved) {
            $pacientemembresiaRemoved->setMembresia(null);
        }

        $this->collPacientemembresias = null;
        foreach ($pacientemembresias as $pacientemembresia) {
            $this->addPacientemembresia($pacientemembresia);
        }

        $this->collPacientemembresias = $pacientemembresias;
        $this->collPacientemembresiasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pacientemembresia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pacientemembresia objects.
     * @throws PropelException
     */
    public function countPacientemembresias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiasPartial && !$this->isNew();
        if (null === $this->collPacientemembresias || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresias) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientemembresias());
            }
            $query = PacientemembresiaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMembresia($this)
                ->count($con);
        }

        return count($this->collPacientemembresias);
    }

    /**
     * Method called to associate a Pacientemembresia object to this object
     * through the Pacientemembresia foreign key attribute.
     *
     * @param    Pacientemembresia $l Pacientemembresia
     * @return Membresia The current object (for fluent API support)
     */
    public function addPacientemembresia(Pacientemembresia $l)
    {
        if ($this->collPacientemembresias === null) {
            $this->initPacientemembresias();
            $this->collPacientemembresiasPartial = true;
        }

        if (!in_array($l, $this->collPacientemembresias->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPacientemembresia($l);

            if ($this->pacientemembresiasScheduledForDeletion and $this->pacientemembresiasScheduledForDeletion->contains($l)) {
                $this->pacientemembresiasScheduledForDeletion->remove($this->pacientemembresiasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pacientemembresia $pacientemembresia The pacientemembresia object to add.
     */
    protected function doAddPacientemembresia($pacientemembresia)
    {
        $this->collPacientemembresias[]= $pacientemembresia;
        $pacientemembresia->setMembresia($this);
    }

    /**
     * @param	Pacientemembresia $pacientemembresia The pacientemembresia object to remove.
     * @return Membresia The current object (for fluent API support)
     */
    public function removePacientemembresia($pacientemembresia)
    {
        if ($this->getPacientemembresias()->contains($pacientemembresia)) {
            $this->collPacientemembresias->remove($this->collPacientemembresias->search($pacientemembresia));
            if (null === $this->pacientemembresiasScheduledForDeletion) {
                $this->pacientemembresiasScheduledForDeletion = clone $this->collPacientemembresias;
                $this->pacientemembresiasScheduledForDeletion->clear();
            }
            $this->pacientemembresiasScheduledForDeletion[]= clone $pacientemembresia;
            $pacientemembresia->setMembresia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Pacientemembresias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     */
    public function getPacientemembresiasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getPacientemembresias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Pacientemembresias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     */
    public function getPacientemembresiasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getPacientemembresias($query, $con);
    }

    /**
     * Clears out the collVisitadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Membresia The current object (for fluent API support)
     * @see        addVisitadetalles()
     */
    public function clearVisitadetalles()
    {
        $this->collVisitadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collVisitadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitadetalles($v = true)
    {
        $this->collVisitadetallesPartial = $v;
    }

    /**
     * Initializes the collVisitadetalles collection.
     *
     * By default this just sets the collVisitadetalles collection to an empty array (like clearcollVisitadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitadetalles($overrideExisting = true)
    {
        if (null !== $this->collVisitadetalles && !$overrideExisting) {
            return;
        }
        $this->collVisitadetalles = new PropelObjectCollection();
        $this->collVisitadetalles->setModel('Visitadetalle');
    }

    /**
     * Gets an array of Visitadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Membresia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     * @throws PropelException
     */
    public function getVisitadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitadetallesPartial && !$this->isNew();
        if (null === $this->collVisitadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitadetalles) {
                // return empty collection
                $this->initVisitadetalles();
            } else {
                $collVisitadetalles = VisitadetalleQuery::create(null, $criteria)
                    ->filterByMembresia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitadetallesPartial && count($collVisitadetalles)) {
                      $this->initVisitadetalles(false);

                      foreach ($collVisitadetalles as $obj) {
                        if (false == $this->collVisitadetalles->contains($obj)) {
                          $this->collVisitadetalles->append($obj);
                        }
                      }

                      $this->collVisitadetallesPartial = true;
                    }

                    $collVisitadetalles->getInternalIterator()->rewind();

                    return $collVisitadetalles;
                }

                if ($partial && $this->collVisitadetalles) {
                    foreach ($this->collVisitadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collVisitadetalles[] = $obj;
                        }
                    }
                }

                $this->collVisitadetalles = $collVisitadetalles;
                $this->collVisitadetallesPartial = false;
            }
        }

        return $this->collVisitadetalles;
    }

    /**
     * Sets a collection of Visitadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Membresia The current object (for fluent API support)
     */
    public function setVisitadetalles(PropelCollection $visitadetalles, PropelPDO $con = null)
    {
        $visitadetallesToDelete = $this->getVisitadetalles(new Criteria(), $con)->diff($visitadetalles);


        $this->visitadetallesScheduledForDeletion = $visitadetallesToDelete;

        foreach ($visitadetallesToDelete as $visitadetalleRemoved) {
            $visitadetalleRemoved->setMembresia(null);
        }

        $this->collVisitadetalles = null;
        foreach ($visitadetalles as $visitadetalle) {
            $this->addVisitadetalle($visitadetalle);
        }

        $this->collVisitadetalles = $visitadetalles;
        $this->collVisitadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Visitadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Visitadetalle objects.
     * @throws PropelException
     */
    public function countVisitadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitadetallesPartial && !$this->isNew();
        if (null === $this->collVisitadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitadetalles());
            }
            $query = VisitadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMembresia($this)
                ->count($con);
        }

        return count($this->collVisitadetalles);
    }

    /**
     * Method called to associate a Visitadetalle object to this object
     * through the Visitadetalle foreign key attribute.
     *
     * @param    Visitadetalle $l Visitadetalle
     * @return Membresia The current object (for fluent API support)
     */
    public function addVisitadetalle(Visitadetalle $l)
    {
        if ($this->collVisitadetalles === null) {
            $this->initVisitadetalles();
            $this->collVisitadetallesPartial = true;
        }

        if (!in_array($l, $this->collVisitadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisitadetalle($l);

            if ($this->visitadetallesScheduledForDeletion and $this->visitadetallesScheduledForDeletion->contains($l)) {
                $this->visitadetallesScheduledForDeletion->remove($this->visitadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Visitadetalle $visitadetalle The visitadetalle object to add.
     */
    protected function doAddVisitadetalle($visitadetalle)
    {
        $this->collVisitadetalles[]= $visitadetalle;
        $visitadetalle->setMembresia($this);
    }

    /**
     * @param	Visitadetalle $visitadetalle The visitadetalle object to remove.
     * @return Membresia The current object (for fluent API support)
     */
    public function removeVisitadetalle($visitadetalle)
    {
        if ($this->getVisitadetalles()->contains($visitadetalle)) {
            $this->collVisitadetalles->remove($this->collVisitadetalles->search($visitadetalle));
            if (null === $this->visitadetallesScheduledForDeletion) {
                $this->visitadetallesScheduledForDeletion = clone $this->collVisitadetalles;
                $this->visitadetallesScheduledForDeletion->clear();
            }
            $this->visitadetallesScheduledForDeletion[]= $visitadetalle;
            $visitadetalle->setMembresia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinProductoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Productoclinica', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinServicioclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Servicioclinica', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Membresia is new, it will return
     * an empty collection; or if this Membresia has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Membresia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinVisita($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Visita', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmembresia = null;
        $this->membresia_nombre = null;
        $this->membresia_descripcion = null;
        $this->membresia_servicios = null;
        $this->membresia_cupones = null;
        $this->servicio_generaingreso = null;
        $this->servicio_generacomision = null;
        $this->servicio_tipocomision = null;
        $this->servicio_comision = null;
        $this->membresia_precio = null;
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
            if ($this->collMembresiaclinicas) {
                foreach ($this->collMembresiaclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacientemembresias) {
                foreach ($this->collPacientemembresias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitadetalles) {
                foreach ($this->collVisitadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collMembresiaclinicas instanceof PropelCollection) {
            $this->collMembresiaclinicas->clearIterator();
        }
        $this->collMembresiaclinicas = null;
        if ($this->collPacientemembresias instanceof PropelCollection) {
            $this->collPacientemembresias->clearIterator();
        }
        $this->collPacientemembresias = null;
        if ($this->collVisitadetalles instanceof PropelCollection) {
            $this->collVisitadetalles->clearIterator();
        }
        $this->collVisitadetalles = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MembresiaPeer::DEFAULT_STRING_FORMAT);
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
