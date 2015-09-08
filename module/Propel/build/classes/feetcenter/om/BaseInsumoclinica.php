<?php


/**
 * Base class that represents a row from the 'insumoclinica' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseInsumoclinica extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'InsumoclinicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        InsumoclinicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idinsumoclinica field.
     * @var        int
     */
    protected $idinsumoclinica;

    /**
     * The value for the idinsumo field.
     * @var        int
     */
    protected $idinsumo;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the insumoclinica_existencia field.
     * @var        string
     */
    protected $insumoclinica_existencia;

    /**
     * The value for the insumoclinica_minimo field.
     * @var        string
     */
    protected $insumoclinica_minimo;

    /**
     * The value for the insumoclinica_maximo field.
     * @var        string
     */
    protected $insumoclinica_maximo;

    /**
     * The value for the insumoclinica_reorden field.
     * @var        string
     */
    protected $insumoclinica_reorden;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Insumo
     */
    protected $aInsumo;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

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
    protected $compradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciadetallesScheduledForDeletion = null;

    /**
     * Get the [idinsumoclinica] column value.
     *
     * @return int
     */
    public function getIdinsumoclinica()
    {

        return $this->idinsumoclinica;
    }

    /**
     * Get the [idinsumo] column value.
     *
     * @return int
     */
    public function getIdinsumo()
    {

        return $this->idinsumo;
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
     * Get the [insumoclinica_existencia] column value.
     *
     * @return string
     */
    public function getInsumoclinicaExistencia()
    {

        return $this->insumoclinica_existencia;
    }

    /**
     * Get the [insumoclinica_minimo] column value.
     *
     * @return string
     */
    public function getInsumoclinicaMinimo()
    {

        return $this->insumoclinica_minimo;
    }

    /**
     * Get the [insumoclinica_maximo] column value.
     *
     * @return string
     */
    public function getInsumoclinicaMaximo()
    {

        return $this->insumoclinica_maximo;
    }

    /**
     * Get the [insumoclinica_reorden] column value.
     *
     * @return string
     */
    public function getInsumoclinicaReorden()
    {

        return $this->insumoclinica_reorden;
    }

    /**
     * Set the value of [idinsumoclinica] column.
     *
     * @param  int $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setIdinsumoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinsumoclinica !== $v) {
            $this->idinsumoclinica = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::IDINSUMOCLINICA;
        }


        return $this;
    } // setIdinsumoclinica()

    /**
     * Set the value of [idinsumo] column.
     *
     * @param  int $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setIdinsumo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinsumo !== $v) {
            $this->idinsumo = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::IDINSUMO;
        }

        if ($this->aInsumo !== null && $this->aInsumo->getIdinsumo() !== $v) {
            $this->aInsumo = null;
        }


        return $this;
    } // setIdinsumo()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [insumoclinica_existencia] column.
     *
     * @param  string $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setInsumoclinicaExistencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insumoclinica_existencia !== $v) {
            $this->insumoclinica_existencia = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA;
        }


        return $this;
    } // setInsumoclinicaExistencia()

    /**
     * Set the value of [insumoclinica_minimo] column.
     *
     * @param  string $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setInsumoclinicaMinimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insumoclinica_minimo !== $v) {
            $this->insumoclinica_minimo = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::INSUMOCLINICA_MINIMO;
        }


        return $this;
    } // setInsumoclinicaMinimo()

    /**
     * Set the value of [insumoclinica_maximo] column.
     *
     * @param  string $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setInsumoclinicaMaximo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insumoclinica_maximo !== $v) {
            $this->insumoclinica_maximo = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::INSUMOCLINICA_MAXIMO;
        }


        return $this;
    } // setInsumoclinicaMaximo()

    /**
     * Set the value of [insumoclinica_reorden] column.
     *
     * @param  string $v new value
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setInsumoclinicaReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insumoclinica_reorden !== $v) {
            $this->insumoclinica_reorden = $v;
            $this->modifiedColumns[] = InsumoclinicaPeer::INSUMOCLINICA_REORDEN;
        }


        return $this;
    } // setInsumoclinicaReorden()

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

            $this->idinsumoclinica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idinsumo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->insumoclinica_existencia = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->insumoclinica_minimo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->insumoclinica_maximo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->insumoclinica_reorden = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = InsumoclinicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Insumoclinica object", $e);
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

        if ($this->aInsumo !== null && $this->idinsumo !== $this->aInsumo->getIdinsumo()) {
            $this->aInsumo = null;
        }
        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
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
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = InsumoclinicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aInsumo = null;
            $this->collCompradetalles = null;

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
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = InsumoclinicaQuery::create()
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
            $con = Propel::getConnection(InsumoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                InsumoclinicaPeer::addInstanceToPool($this);
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

            if ($this->aInsumo !== null) {
                if ($this->aInsumo->isModified() || $this->aInsumo->isNew()) {
                    $affectedRows += $this->aInsumo->save($con);
                }
                $this->setInsumo($this->aInsumo);
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

            if ($this->compradetallesScheduledForDeletion !== null) {
                if (!$this->compradetallesScheduledForDeletion->isEmpty()) {
                    CompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->compradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->compradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collCompradetalles !== null) {
                foreach ($this->collCompradetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = InsumoclinicaPeer::IDINSUMOCLINICA;
        if (null !== $this->idinsumoclinica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . InsumoclinicaPeer::IDINSUMOCLINICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(InsumoclinicaPeer::IDINSUMOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idinsumoclinica`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::IDINSUMO)) {
            $modifiedColumns[':p' . $index++]  = '`idinsumo`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`insumoclinica_existencia`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_MINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`insumoclinica_minimo`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO)) {
            $modifiedColumns[':p' . $index++]  = '`insumoclinica_maximo`';
        }
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`insumoclinica_reorden`';
        }

        $sql = sprintf(
            'INSERT INTO `insumoclinica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idinsumoclinica`':
                        $stmt->bindValue($identifier, $this->idinsumoclinica, PDO::PARAM_INT);
                        break;
                    case '`idinsumo`':
                        $stmt->bindValue($identifier, $this->idinsumo, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`insumoclinica_existencia`':
                        $stmt->bindValue($identifier, $this->insumoclinica_existencia, PDO::PARAM_STR);
                        break;
                    case '`insumoclinica_minimo`':
                        $stmt->bindValue($identifier, $this->insumoclinica_minimo, PDO::PARAM_STR);
                        break;
                    case '`insumoclinica_maximo`':
                        $stmt->bindValue($identifier, $this->insumoclinica_maximo, PDO::PARAM_STR);
                        break;
                    case '`insumoclinica_reorden`':
                        $stmt->bindValue($identifier, $this->insumoclinica_reorden, PDO::PARAM_STR);
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
        $this->setIdinsumoclinica($pk);

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

            if ($this->aInsumo !== null) {
                if (!$this->aInsumo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInsumo->getValidationFailures());
                }
            }


            if (($retval = InsumoclinicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = InsumoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdinsumoclinica();
                break;
            case 1:
                return $this->getIdinsumo();
                break;
            case 2:
                return $this->getIdclinica();
                break;
            case 3:
                return $this->getInsumoclinicaExistencia();
                break;
            case 4:
                return $this->getInsumoclinicaMinimo();
                break;
            case 5:
                return $this->getInsumoclinicaMaximo();
                break;
            case 6:
                return $this->getInsumoclinicaReorden();
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
        if (isset($alreadyDumpedObjects['Insumoclinica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Insumoclinica'][$this->getPrimaryKey()] = true;
        $keys = InsumoclinicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdinsumoclinica(),
            $keys[1] => $this->getIdinsumo(),
            $keys[2] => $this->getIdclinica(),
            $keys[3] => $this->getInsumoclinicaExistencia(),
            $keys[4] => $this->getInsumoclinicaMinimo(),
            $keys[5] => $this->getInsumoclinicaMaximo(),
            $keys[6] => $this->getInsumoclinicaReorden(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInsumo) {
                $result['Insumo'] = $this->aInsumo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = InsumoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdinsumoclinica($value);
                break;
            case 1:
                $this->setIdinsumo($value);
                break;
            case 2:
                $this->setIdclinica($value);
                break;
            case 3:
                $this->setInsumoclinicaExistencia($value);
                break;
            case 4:
                $this->setInsumoclinicaMinimo($value);
                break;
            case 5:
                $this->setInsumoclinicaMaximo($value);
                break;
            case 6:
                $this->setInsumoclinicaReorden($value);
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
        $keys = InsumoclinicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdinsumoclinica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdinsumo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setInsumoclinicaExistencia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInsumoclinicaMinimo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setInsumoclinicaMaximo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setInsumoclinicaReorden($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(InsumoclinicaPeer::IDINSUMOCLINICA)) $criteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, $this->idinsumoclinica);
        if ($this->isColumnModified(InsumoclinicaPeer::IDINSUMO)) $criteria->add(InsumoclinicaPeer::IDINSUMO, $this->idinsumo);
        if ($this->isColumnModified(InsumoclinicaPeer::IDCLINICA)) $criteria->add(InsumoclinicaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA)) $criteria->add(InsumoclinicaPeer::INSUMOCLINICA_EXISTENCIA, $this->insumoclinica_existencia);
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_MINIMO)) $criteria->add(InsumoclinicaPeer::INSUMOCLINICA_MINIMO, $this->insumoclinica_minimo);
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO)) $criteria->add(InsumoclinicaPeer::INSUMOCLINICA_MAXIMO, $this->insumoclinica_maximo);
        if ($this->isColumnModified(InsumoclinicaPeer::INSUMOCLINICA_REORDEN)) $criteria->add(InsumoclinicaPeer::INSUMOCLINICA_REORDEN, $this->insumoclinica_reorden);

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
        $criteria = new Criteria(InsumoclinicaPeer::DATABASE_NAME);
        $criteria->add(InsumoclinicaPeer::IDINSUMOCLINICA, $this->idinsumoclinica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdinsumoclinica();
    }

    /**
     * Generic method to set the primary key (idinsumoclinica column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdinsumoclinica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdinsumoclinica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Insumoclinica (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdinsumo($this->getIdinsumo());
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setInsumoclinicaExistencia($this->getInsumoclinicaExistencia());
        $copyObj->setInsumoclinicaMinimo($this->getInsumoclinicaMinimo());
        $copyObj->setInsumoclinicaMaximo($this->getInsumoclinicaMaximo());
        $copyObj->setInsumoclinicaReorden($this->getInsumoclinicaReorden());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompradetalle($relObj->copy($deepCopy));
                }
            }

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
            $copyObj->setIdinsumoclinica(NULL); // this is a auto-increment column, so set to default value
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
     * @return Insumoclinica Clone of current object.
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
     * @return InsumoclinicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new InsumoclinicaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Insumoclinica The current object (for fluent API support)
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
            $v->addInsumoclinica($this);
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
                $this->aClinica->addInsumoclinicas($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Insumo object.
     *
     * @param                  Insumo $v
     * @return Insumoclinica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInsumo(Insumo $v = null)
    {
        if ($v === null) {
            $this->setIdinsumo(NULL);
        } else {
            $this->setIdinsumo($v->getIdinsumo());
        }

        $this->aInsumo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Insumo object, it will not be re-added.
        if ($v !== null) {
            $v->addInsumoclinica($this);
        }


        return $this;
    }


    /**
     * Get the associated Insumo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Insumo The associated Insumo object.
     * @throws PropelException
     */
    public function getInsumo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInsumo === null && ($this->idinsumo !== null) && $doQuery) {
            $this->aInsumo = InsumoQuery::create()->findPk($this->idinsumo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInsumo->addInsumoclinicas($this);
             */
        }

        return $this->aInsumo;
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
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Transferenciadetalle' == $relationName) {
            $this->initTransferenciadetalles();
        }
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Insumoclinica The current object (for fluent API support)
     * @see        addCompradetalles()
     */
    public function clearCompradetalles()
    {
        $this->collCompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collCompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collCompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompradetalles($v = true)
    {
        $this->collCompradetallesPartial = $v;
    }

    /**
     * Initializes the collCompradetalles collection.
     *
     * By default this just sets the collCompradetalles collection to an empty array (like clearcollCompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompradetalles($overrideExisting = true)
    {
        if (null !== $this->collCompradetalles && !$overrideExisting) {
            return;
        }
        $this->collCompradetalles = new PropelObjectCollection();
        $this->collCompradetalles->setModel('Compradetalle');
    }

    /**
     * Gets an array of Compradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Insumoclinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     * @throws PropelException
     */
    public function getCompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                // return empty collection
                $this->initCompradetalles();
            } else {
                $collCompradetalles = CompradetalleQuery::create(null, $criteria)
                    ->filterByInsumoclinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCompradetallesPartial && count($collCompradetalles)) {
                      $this->initCompradetalles(false);

                      foreach ($collCompradetalles as $obj) {
                        if (false == $this->collCompradetalles->contains($obj)) {
                          $this->collCompradetalles->append($obj);
                        }
                      }

                      $this->collCompradetallesPartial = true;
                    }

                    $collCompradetalles->getInternalIterator()->rewind();

                    return $collCompradetalles;
                }

                if ($partial && $this->collCompradetalles) {
                    foreach ($this->collCompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collCompradetalles[] = $obj;
                        }
                    }
                }

                $this->collCompradetalles = $collCompradetalles;
                $this->collCompradetallesPartial = false;
            }
        }

        return $this->collCompradetalles;
    }

    /**
     * Sets a collection of Compradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setInsumoclinica(null);
        }

        $this->collCompradetalles = null;
        foreach ($compradetalles as $compradetalle) {
            $this->addCompradetalle($compradetalle);
        }

        $this->collCompradetalles = $compradetalles;
        $this->collCompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compradetalle objects.
     * @throws PropelException
     */
    public function countCompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompradetalles());
            }
            $query = CompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInsumoclinica($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function addCompradetalle(Compradetalle $l)
    {
        if ($this->collCompradetalles === null) {
            $this->initCompradetalles();
            $this->collCompradetallesPartial = true;
        }

        if (!in_array($l, $this->collCompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompradetalle($l);

            if ($this->compradetallesScheduledForDeletion and $this->compradetallesScheduledForDeletion->contains($l)) {
                $this->compradetallesScheduledForDeletion->remove($this->compradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to add.
     */
    protected function doAddCompradetalle($compradetalle)
    {
        $this->collCompradetalles[]= $compradetalle;
        $compradetalle->setInsumoclinica($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function removeCompradetalle($compradetalle)
    {
        if ($this->getCompradetalles()->contains($compradetalle)) {
            $this->collCompradetalles->remove($this->collCompradetalles->search($compradetalle));
            if (null === $this->compradetallesScheduledForDeletion) {
                $this->compradetallesScheduledForDeletion = clone $this->collCompradetalles;
                $this->compradetallesScheduledForDeletion->clear();
            }
            $this->compradetallesScheduledForDeletion[]= $compradetalle;
            $compradetalle->setInsumoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumoclinica is new, it will return
     * an empty collection; or if this Insumoclinica has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumoclinica is new, it will return
     * an empty collection; or if this Insumoclinica has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinProductoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Productoclinica', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }

    /**
     * Clears out the collTransferenciadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Insumoclinica The current object (for fluent API support)
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
     * If this Insumoclinica is new, it will return
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
                    ->filterByInsumoclinica($this)
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
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function setTransferenciadetalles(PropelCollection $transferenciadetalles, PropelPDO $con = null)
    {
        $transferenciadetallesToDelete = $this->getTransferenciadetalles(new Criteria(), $con)->diff($transferenciadetalles);


        $this->transferenciadetallesScheduledForDeletion = $transferenciadetallesToDelete;

        foreach ($transferenciadetallesToDelete as $transferenciadetalleRemoved) {
            $transferenciadetalleRemoved->setInsumoclinica(null);
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
                ->filterByInsumoclinica($this)
                ->count($con);
        }

        return count($this->collTransferenciadetalles);
    }

    /**
     * Method called to associate a Transferenciadetalle object to this object
     * through the Transferenciadetalle foreign key attribute.
     *
     * @param    Transferenciadetalle $l Transferenciadetalle
     * @return Insumoclinica The current object (for fluent API support)
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
        $transferenciadetalle->setInsumoclinica($this);
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to remove.
     * @return Insumoclinica The current object (for fluent API support)
     */
    public function removeTransferenciadetalle($transferenciadetalle)
    {
        if ($this->getTransferenciadetalles()->contains($transferenciadetalle)) {
            $this->collTransferenciadetalles->remove($this->collTransferenciadetalles->search($transferenciadetalle));
            if (null === $this->transferenciadetallesScheduledForDeletion) {
                $this->transferenciadetallesScheduledForDeletion = clone $this->collTransferenciadetalles;
                $this->transferenciadetallesScheduledForDeletion->clear();
            }
            $this->transferenciadetallesScheduledForDeletion[]= $transferenciadetalle;
            $transferenciadetalle->setInsumoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumoclinica is new, it will return
     * an empty collection; or if this Insumoclinica has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumoclinica.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumoclinica is new, it will return
     * an empty collection; or if this Insumoclinica has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinTransferencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Transferencia', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idinsumoclinica = null;
        $this->idinsumo = null;
        $this->idclinica = null;
        $this->insumoclinica_existencia = null;
        $this->insumoclinica_minimo = null;
        $this->insumoclinica_maximo = null;
        $this->insumoclinica_reorden = null;
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
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciadetalles) {
                foreach ($this->collTransferenciadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aInsumo instanceof Persistent) {
              $this->aInsumo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collTransferenciadetalles instanceof PropelCollection) {
            $this->collTransferenciadetalles->clearIterator();
        }
        $this->collTransferenciadetalles = null;
        $this->aClinica = null;
        $this->aInsumo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InsumoclinicaPeer::DEFAULT_STRING_FORMAT);
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
