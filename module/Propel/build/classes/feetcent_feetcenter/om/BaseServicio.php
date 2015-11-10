<?php


/**
 * Base class that represents a row from the 'servicio' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseServicio extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ServicioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ServicioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idservicio field.
     * @var        int
     */
    protected $idservicio;

    /**
     * The value for the servicio_nombre field.
     * @var        string
     */
    protected $servicio_nombre;

    /**
     * The value for the servicio_descripcion field.
     * @var        string
     */
    protected $servicio_descripcion;

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
     * The value for the servicio_dependencia field.
     * @var        string
     */
    protected $servicio_dependencia;

    /**
     * @var        PropelObjectCollection|Servicioclinica[] Collection to store aggregation of Servicioclinica objects.
     */
    protected $collServicioclinicas;
    protected $collServicioclinicasPartial;

    /**
     * @var        PropelObjectCollection|Servicioinsumo[] Collection to store aggregation of Servicioinsumo objects.
     */
    protected $collServicioinsumos;
    protected $collServicioinsumosPartial;

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
    protected $servicioclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $servicioinsumosScheduledForDeletion = null;

    /**
     * Get the [idservicio] column value.
     *
     * @return int
     */
    public function getIdservicio()
    {

        return $this->idservicio;
    }

    /**
     * Get the [servicio_nombre] column value.
     *
     * @return string
     */
    public function getServicioNombre()
    {

        return $this->servicio_nombre;
    }

    /**
     * Get the [servicio_descripcion] column value.
     *
     * @return string
     */
    public function getServicioDescripcion()
    {

        return $this->servicio_descripcion;
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
     * Get the [servicio_dependencia] column value.
     *
     * @return string
     */
    public function getServicioDependencia()
    {

        return $this->servicio_dependencia;
    }

    /**
     * Set the value of [idservicio] column.
     *
     * @param  int $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setIdservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicio !== $v) {
            $this->idservicio = $v;
            $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        }


        return $this;
    } // setIdservicio()

    /**
     * Set the value of [servicio_nombre] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_nombre !== $v) {
            $this->servicio_nombre = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_NOMBRE;
        }


        return $this;
    } // setServicioNombre()

    /**
     * Set the value of [servicio_descripcion] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_descripcion !== $v) {
            $this->servicio_descripcion = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_DESCRIPCION;
        }


        return $this;
    } // setServicioDescripcion()

    /**
     * Sets the value of the [servicio_generaingreso] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Servicio The current object (for fluent API support)
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
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_GENERAINGRESO;
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
     * @return Servicio The current object (for fluent API support)
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
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_GENERACOMISION;
        }


        return $this;
    } // setServicioGeneracomision()

    /**
     * Set the value of [servicio_tipocomision] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioTipocomision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_tipocomision !== $v) {
            $this->servicio_tipocomision = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_TIPOCOMISION;
        }


        return $this;
    } // setServicioTipocomision()

    /**
     * Set the value of [servicio_comision] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioComision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicio_comision !== $v) {
            $this->servicio_comision = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_COMISION;
        }


        return $this;
    } // setServicioComision()

    /**
     * Set the value of [servicio_dependencia] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioDependencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_dependencia !== $v) {
            $this->servicio_dependencia = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_DEPENDENCIA;
        }


        return $this;
    } // setServicioDependencia()

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

            $this->idservicio = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->servicio_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->servicio_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->servicio_generaingreso = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->servicio_generacomision = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->servicio_tipocomision = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->servicio_comision = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->servicio_dependencia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = ServicioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Servicio object", $e);
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ServicioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collServicioclinicas = null;

            $this->collServicioinsumos = null;

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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ServicioQuery::create()
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ServicioPeer::addInstanceToPool($this);
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

            if ($this->servicioinsumosScheduledForDeletion !== null) {
                if (!$this->servicioinsumosScheduledForDeletion->isEmpty()) {
                    ServicioinsumoQuery::create()
                        ->filterByPrimaryKeys($this->servicioinsumosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->servicioinsumosScheduledForDeletion = null;
                }
            }

            if ($this->collServicioinsumos !== null) {
                foreach ($this->collServicioinsumos as $referrerFK) {
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

        $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        if (null !== $this->idservicio) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ServicioPeer::IDSERVICIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicio`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_nombre`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_descripcion`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_GENERAINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_generaingreso`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_GENERACOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_generacomision`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_TIPOCOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_tipocomision`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_COMISION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_comision`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DEPENDENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_dependencia`';
        }

        $sql = sprintf(
            'INSERT INTO `servicio` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idservicio`':
                        $stmt->bindValue($identifier, $this->idservicio, PDO::PARAM_INT);
                        break;
                    case '`servicio_nombre`':
                        $stmt->bindValue($identifier, $this->servicio_nombre, PDO::PARAM_STR);
                        break;
                    case '`servicio_descripcion`':
                        $stmt->bindValue($identifier, $this->servicio_descripcion, PDO::PARAM_STR);
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
                    case '`servicio_dependencia`':
                        $stmt->bindValue($identifier, $this->servicio_dependencia, PDO::PARAM_STR);
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
        $this->setIdservicio($pk);

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


            if (($retval = ServicioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collServicioclinicas !== null) {
                    foreach ($this->collServicioclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collServicioinsumos !== null) {
                    foreach ($this->collServicioinsumos as $referrerFK) {
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdservicio();
                break;
            case 1:
                return $this->getServicioNombre();
                break;
            case 2:
                return $this->getServicioDescripcion();
                break;
            case 3:
                return $this->getServicioGeneraingreso();
                break;
            case 4:
                return $this->getServicioGeneracomision();
                break;
            case 5:
                return $this->getServicioTipocomision();
                break;
            case 6:
                return $this->getServicioComision();
                break;
            case 7:
                return $this->getServicioDependencia();
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
        if (isset($alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()] = true;
        $keys = ServicioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdservicio(),
            $keys[1] => $this->getServicioNombre(),
            $keys[2] => $this->getServicioDescripcion(),
            $keys[3] => $this->getServicioGeneraingreso(),
            $keys[4] => $this->getServicioGeneracomision(),
            $keys[5] => $this->getServicioTipocomision(),
            $keys[6] => $this->getServicioComision(),
            $keys[7] => $this->getServicioDependencia(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collServicioclinicas) {
                $result['Servicioclinicas'] = $this->collServicioclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collServicioinsumos) {
                $result['Servicioinsumos'] = $this->collServicioinsumos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdservicio($value);
                break;
            case 1:
                $this->setServicioNombre($value);
                break;
            case 2:
                $this->setServicioDescripcion($value);
                break;
            case 3:
                $this->setServicioGeneraingreso($value);
                break;
            case 4:
                $this->setServicioGeneracomision($value);
                break;
            case 5:
                $this->setServicioTipocomision($value);
                break;
            case 6:
                $this->setServicioComision($value);
                break;
            case 7:
                $this->setServicioDependencia($value);
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
        $keys = ServicioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdservicio($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setServicioNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setServicioDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setServicioGeneraingreso($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setServicioGeneracomision($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setServicioTipocomision($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setServicioComision($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setServicioDependencia($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);

        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) $criteria->add(ServicioPeer::SERVICIO_NOMBRE, $this->servicio_nombre);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) $criteria->add(ServicioPeer::SERVICIO_DESCRIPCION, $this->servicio_descripcion);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_GENERAINGRESO)) $criteria->add(ServicioPeer::SERVICIO_GENERAINGRESO, $this->servicio_generaingreso);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_GENERACOMISION)) $criteria->add(ServicioPeer::SERVICIO_GENERACOMISION, $this->servicio_generacomision);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_TIPOCOMISION)) $criteria->add(ServicioPeer::SERVICIO_TIPOCOMISION, $this->servicio_tipocomision);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_COMISION)) $criteria->add(ServicioPeer::SERVICIO_COMISION, $this->servicio_comision);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DEPENDENCIA)) $criteria->add(ServicioPeer::SERVICIO_DEPENDENCIA, $this->servicio_dependencia);

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
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);
        $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdservicio();
    }

    /**
     * Generic method to set the primary key (idservicio column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdservicio($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdservicio();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Servicio (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setServicioNombre($this->getServicioNombre());
        $copyObj->setServicioDescripcion($this->getServicioDescripcion());
        $copyObj->setServicioGeneraingreso($this->getServicioGeneraingreso());
        $copyObj->setServicioGeneracomision($this->getServicioGeneracomision());
        $copyObj->setServicioTipocomision($this->getServicioTipocomision());
        $copyObj->setServicioComision($this->getServicioComision());
        $copyObj->setServicioDependencia($this->getServicioDependencia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getServicioclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addServicioclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getServicioinsumos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addServicioinsumo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdservicio(NULL); // this is a auto-increment column, so set to default value
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
     * @return Servicio Clone of current object.
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
     * @return ServicioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ServicioPeer();
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
        if ('Servicioclinica' == $relationName) {
            $this->initServicioclinicas();
        }
        if ('Servicioinsumo' == $relationName) {
            $this->initServicioinsumos();
        }
    }

    /**
     * Clears out the collServicioclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
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
     * If this Servicio is new, it will return
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
                    ->filterByServicio($this)
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
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioclinicas(PropelCollection $servicioclinicas, PropelPDO $con = null)
    {
        $servicioclinicasToDelete = $this->getServicioclinicas(new Criteria(), $con)->diff($servicioclinicas);


        $this->servicioclinicasScheduledForDeletion = $servicioclinicasToDelete;

        foreach ($servicioclinicasToDelete as $servicioclinicaRemoved) {
            $servicioclinicaRemoved->setServicio(null);
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
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collServicioclinicas);
    }

    /**
     * Method called to associate a Servicioclinica object to this object
     * through the Servicioclinica foreign key attribute.
     *
     * @param    Servicioclinica $l Servicioclinica
     * @return Servicio The current object (for fluent API support)
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
        $servicioclinica->setServicio($this);
    }

    /**
     * @param	Servicioclinica $servicioclinica The servicioclinica object to remove.
     * @return Servicio The current object (for fluent API support)
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
            $servicioclinica->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Servicioclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Servicioclinica[] List of Servicioclinica objects
     */
    public function getServicioclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ServicioclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getServicioclinicas($query, $con);
    }

    /**
     * Clears out the collServicioinsumos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addServicioinsumos()
     */
    public function clearServicioinsumos()
    {
        $this->collServicioinsumos = null; // important to set this to null since that means it is uninitialized
        $this->collServicioinsumosPartial = null;

        return $this;
    }

    /**
     * reset is the collServicioinsumos collection loaded partially
     *
     * @return void
     */
    public function resetPartialServicioinsumos($v = true)
    {
        $this->collServicioinsumosPartial = $v;
    }

    /**
     * Initializes the collServicioinsumos collection.
     *
     * By default this just sets the collServicioinsumos collection to an empty array (like clearcollServicioinsumos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initServicioinsumos($overrideExisting = true)
    {
        if (null !== $this->collServicioinsumos && !$overrideExisting) {
            return;
        }
        $this->collServicioinsumos = new PropelObjectCollection();
        $this->collServicioinsumos->setModel('Servicioinsumo');
    }

    /**
     * Gets an array of Servicioinsumo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Servicioinsumo[] List of Servicioinsumo objects
     * @throws PropelException
     */
    public function getServicioinsumos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collServicioinsumosPartial && !$this->isNew();
        if (null === $this->collServicioinsumos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collServicioinsumos) {
                // return empty collection
                $this->initServicioinsumos();
            } else {
                $collServicioinsumos = ServicioinsumoQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collServicioinsumosPartial && count($collServicioinsumos)) {
                      $this->initServicioinsumos(false);

                      foreach ($collServicioinsumos as $obj) {
                        if (false == $this->collServicioinsumos->contains($obj)) {
                          $this->collServicioinsumos->append($obj);
                        }
                      }

                      $this->collServicioinsumosPartial = true;
                    }

                    $collServicioinsumos->getInternalIterator()->rewind();

                    return $collServicioinsumos;
                }

                if ($partial && $this->collServicioinsumos) {
                    foreach ($this->collServicioinsumos as $obj) {
                        if ($obj->isNew()) {
                            $collServicioinsumos[] = $obj;
                        }
                    }
                }

                $this->collServicioinsumos = $collServicioinsumos;
                $this->collServicioinsumosPartial = false;
            }
        }

        return $this->collServicioinsumos;
    }

    /**
     * Sets a collection of Servicioinsumo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $servicioinsumos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioinsumos(PropelCollection $servicioinsumos, PropelPDO $con = null)
    {
        $servicioinsumosToDelete = $this->getServicioinsumos(new Criteria(), $con)->diff($servicioinsumos);


        $this->servicioinsumosScheduledForDeletion = $servicioinsumosToDelete;

        foreach ($servicioinsumosToDelete as $servicioinsumoRemoved) {
            $servicioinsumoRemoved->setServicio(null);
        }

        $this->collServicioinsumos = null;
        foreach ($servicioinsumos as $servicioinsumo) {
            $this->addServicioinsumo($servicioinsumo);
        }

        $this->collServicioinsumos = $servicioinsumos;
        $this->collServicioinsumosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Servicioinsumo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Servicioinsumo objects.
     * @throws PropelException
     */
    public function countServicioinsumos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collServicioinsumosPartial && !$this->isNew();
        if (null === $this->collServicioinsumos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collServicioinsumos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getServicioinsumos());
            }
            $query = ServicioinsumoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collServicioinsumos);
    }

    /**
     * Method called to associate a Servicioinsumo object to this object
     * through the Servicioinsumo foreign key attribute.
     *
     * @param    Servicioinsumo $l Servicioinsumo
     * @return Servicio The current object (for fluent API support)
     */
    public function addServicioinsumo(Servicioinsumo $l)
    {
        if ($this->collServicioinsumos === null) {
            $this->initServicioinsumos();
            $this->collServicioinsumosPartial = true;
        }

        if (!in_array($l, $this->collServicioinsumos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddServicioinsumo($l);

            if ($this->servicioinsumosScheduledForDeletion and $this->servicioinsumosScheduledForDeletion->contains($l)) {
                $this->servicioinsumosScheduledForDeletion->remove($this->servicioinsumosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Servicioinsumo $servicioinsumo The servicioinsumo object to add.
     */
    protected function doAddServicioinsumo($servicioinsumo)
    {
        $this->collServicioinsumos[]= $servicioinsumo;
        $servicioinsumo->setServicio($this);
    }

    /**
     * @param	Servicioinsumo $servicioinsumo The servicioinsumo object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeServicioinsumo($servicioinsumo)
    {
        if ($this->getServicioinsumos()->contains($servicioinsumo)) {
            $this->collServicioinsumos->remove($this->collServicioinsumos->search($servicioinsumo));
            if (null === $this->servicioinsumosScheduledForDeletion) {
                $this->servicioinsumosScheduledForDeletion = clone $this->collServicioinsumos;
                $this->servicioinsumosScheduledForDeletion->clear();
            }
            $this->servicioinsumosScheduledForDeletion[]= clone $servicioinsumo;
            $servicioinsumo->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Servicioinsumos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Servicioinsumo[] List of Servicioinsumo objects
     */
    public function getServicioinsumosJoinInsumo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ServicioinsumoQuery::create(null, $criteria);
        $query->joinWith('Insumo', $join_behavior);

        return $this->getServicioinsumos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idservicio = null;
        $this->servicio_nombre = null;
        $this->servicio_descripcion = null;
        $this->servicio_generaingreso = null;
        $this->servicio_generacomision = null;
        $this->servicio_tipocomision = null;
        $this->servicio_comision = null;
        $this->servicio_dependencia = null;
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
            if ($this->collServicioclinicas) {
                foreach ($this->collServicioclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collServicioinsumos) {
                foreach ($this->collServicioinsumos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collServicioclinicas instanceof PropelCollection) {
            $this->collServicioclinicas->clearIterator();
        }
        $this->collServicioclinicas = null;
        if ($this->collServicioinsumos instanceof PropelCollection) {
            $this->collServicioinsumos->clearIterator();
        }
        $this->collServicioinsumos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ServicioPeer::DEFAULT_STRING_FORMAT);
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
