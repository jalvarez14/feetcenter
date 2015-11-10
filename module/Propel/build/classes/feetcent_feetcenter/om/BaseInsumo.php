<?php


/**
 * Base class that represents a row from the 'insumo' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseInsumo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'InsumoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        InsumoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idinsumo field.
     * @var        int
     */
    protected $idinsumo;

    /**
     * The value for the insumo_nombre field.
     * @var        string
     */
    protected $insumo_nombre;

    /**
     * The value for the insumo_descripcion field.
     * @var        string
     */
    protected $insumo_descripcion;

    /**
     * The value for the insumo_costo field.
     * @var        string
     */
    protected $insumo_costo;

    /**
     * @var        PropelObjectCollection|Insumoclinica[] Collection to store aggregation of Insumoclinica objects.
     */
    protected $collInsumoclinicas;
    protected $collInsumoclinicasPartial;

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
    protected $insumoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $servicioinsumosScheduledForDeletion = null;

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
     * Get the [insumo_nombre] column value.
     *
     * @return string
     */
    public function getInsumoNombre()
    {

        return $this->insumo_nombre;
    }

    /**
     * Get the [insumo_descripcion] column value.
     *
     * @return string
     */
    public function getInsumoDescripcion()
    {

        return $this->insumo_descripcion;
    }

    /**
     * Get the [insumo_costo] column value.
     *
     * @return string
     */
    public function getInsumoCosto()
    {

        return $this->insumo_costo;
    }

    /**
     * Set the value of [idinsumo] column.
     *
     * @param  int $v new value
     * @return Insumo The current object (for fluent API support)
     */
    public function setIdinsumo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinsumo !== $v) {
            $this->idinsumo = $v;
            $this->modifiedColumns[] = InsumoPeer::IDINSUMO;
        }


        return $this;
    } // setIdinsumo()

    /**
     * Set the value of [insumo_nombre] column.
     *
     * @param  string $v new value
     * @return Insumo The current object (for fluent API support)
     */
    public function setInsumoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insumo_nombre !== $v) {
            $this->insumo_nombre = $v;
            $this->modifiedColumns[] = InsumoPeer::INSUMO_NOMBRE;
        }


        return $this;
    } // setInsumoNombre()

    /**
     * Set the value of [insumo_descripcion] column.
     *
     * @param  string $v new value
     * @return Insumo The current object (for fluent API support)
     */
    public function setInsumoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insumo_descripcion !== $v) {
            $this->insumo_descripcion = $v;
            $this->modifiedColumns[] = InsumoPeer::INSUMO_DESCRIPCION;
        }


        return $this;
    } // setInsumoDescripcion()

    /**
     * Set the value of [insumo_costo] column.
     *
     * @param  string $v new value
     * @return Insumo The current object (for fluent API support)
     */
    public function setInsumoCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->insumo_costo !== $v) {
            $this->insumo_costo = $v;
            $this->modifiedColumns[] = InsumoPeer::INSUMO_COSTO;
        }


        return $this;
    } // setInsumoCosto()

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

            $this->idinsumo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->insumo_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->insumo_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->insumo_costo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = InsumoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Insumo object", $e);
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
            $con = Propel::getConnection(InsumoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = InsumoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collInsumoclinicas = null;

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
            $con = Propel::getConnection(InsumoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = InsumoQuery::create()
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
            $con = Propel::getConnection(InsumoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                InsumoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = InsumoPeer::IDINSUMO;
        if (null !== $this->idinsumo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . InsumoPeer::IDINSUMO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(InsumoPeer::IDINSUMO)) {
            $modifiedColumns[':p' . $index++]  = '`idinsumo`';
        }
        if ($this->isColumnModified(InsumoPeer::INSUMO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`insumo_nombre`';
        }
        if ($this->isColumnModified(InsumoPeer::INSUMO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`insumo_descripcion`';
        }
        if ($this->isColumnModified(InsumoPeer::INSUMO_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`insumo_costo`';
        }

        $sql = sprintf(
            'INSERT INTO `insumo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idinsumo`':
                        $stmt->bindValue($identifier, $this->idinsumo, PDO::PARAM_INT);
                        break;
                    case '`insumo_nombre`':
                        $stmt->bindValue($identifier, $this->insumo_nombre, PDO::PARAM_STR);
                        break;
                    case '`insumo_descripcion`':
                        $stmt->bindValue($identifier, $this->insumo_descripcion, PDO::PARAM_STR);
                        break;
                    case '`insumo_costo`':
                        $stmt->bindValue($identifier, $this->insumo_costo, PDO::PARAM_STR);
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
        $this->setIdinsumo($pk);

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


            if (($retval = InsumoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collInsumoclinicas !== null) {
                    foreach ($this->collInsumoclinicas as $referrerFK) {
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
        $pos = InsumoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdinsumo();
                break;
            case 1:
                return $this->getInsumoNombre();
                break;
            case 2:
                return $this->getInsumoDescripcion();
                break;
            case 3:
                return $this->getInsumoCosto();
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
        if (isset($alreadyDumpedObjects['Insumo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Insumo'][$this->getPrimaryKey()] = true;
        $keys = InsumoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdinsumo(),
            $keys[1] => $this->getInsumoNombre(),
            $keys[2] => $this->getInsumoDescripcion(),
            $keys[3] => $this->getInsumoCosto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collInsumoclinicas) {
                $result['Insumoclinicas'] = $this->collInsumoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = InsumoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdinsumo($value);
                break;
            case 1:
                $this->setInsumoNombre($value);
                break;
            case 2:
                $this->setInsumoDescripcion($value);
                break;
            case 3:
                $this->setInsumoCosto($value);
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
        $keys = InsumoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdinsumo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setInsumoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInsumoDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setInsumoCosto($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(InsumoPeer::DATABASE_NAME);

        if ($this->isColumnModified(InsumoPeer::IDINSUMO)) $criteria->add(InsumoPeer::IDINSUMO, $this->idinsumo);
        if ($this->isColumnModified(InsumoPeer::INSUMO_NOMBRE)) $criteria->add(InsumoPeer::INSUMO_NOMBRE, $this->insumo_nombre);
        if ($this->isColumnModified(InsumoPeer::INSUMO_DESCRIPCION)) $criteria->add(InsumoPeer::INSUMO_DESCRIPCION, $this->insumo_descripcion);
        if ($this->isColumnModified(InsumoPeer::INSUMO_COSTO)) $criteria->add(InsumoPeer::INSUMO_COSTO, $this->insumo_costo);

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
        $criteria = new Criteria(InsumoPeer::DATABASE_NAME);
        $criteria->add(InsumoPeer::IDINSUMO, $this->idinsumo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdinsumo();
    }

    /**
     * Generic method to set the primary key (idinsumo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdinsumo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdinsumo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Insumo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInsumoNombre($this->getInsumoNombre());
        $copyObj->setInsumoDescripcion($this->getInsumoDescripcion());
        $copyObj->setInsumoCosto($this->getInsumoCosto());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getInsumoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInsumoclinica($relObj->copy($deepCopy));
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
            $copyObj->setIdinsumo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Insumo Clone of current object.
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
     * @return InsumoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new InsumoPeer();
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
        if ('Insumoclinica' == $relationName) {
            $this->initInsumoclinicas();
        }
        if ('Servicioinsumo' == $relationName) {
            $this->initServicioinsumos();
        }
    }

    /**
     * Clears out the collInsumoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Insumo The current object (for fluent API support)
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
     * If this Insumo is new, it will return
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
                    ->filterByInsumo($this)
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
     * @return Insumo The current object (for fluent API support)
     */
    public function setInsumoclinicas(PropelCollection $insumoclinicas, PropelPDO $con = null)
    {
        $insumoclinicasToDelete = $this->getInsumoclinicas(new Criteria(), $con)->diff($insumoclinicas);


        $this->insumoclinicasScheduledForDeletion = $insumoclinicasToDelete;

        foreach ($insumoclinicasToDelete as $insumoclinicaRemoved) {
            $insumoclinicaRemoved->setInsumo(null);
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
                ->filterByInsumo($this)
                ->count($con);
        }

        return count($this->collInsumoclinicas);
    }

    /**
     * Method called to associate a Insumoclinica object to this object
     * through the Insumoclinica foreign key attribute.
     *
     * @param    Insumoclinica $l Insumoclinica
     * @return Insumo The current object (for fluent API support)
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
        $insumoclinica->setInsumo($this);
    }

    /**
     * @param	Insumoclinica $insumoclinica The insumoclinica object to remove.
     * @return Insumo The current object (for fluent API support)
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
            $insumoclinica->setInsumo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumo is new, it will return
     * an empty collection; or if this Insumo has previously
     * been saved, it will retrieve related Insumoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Insumoclinica[] List of Insumoclinica objects
     */
    public function getInsumoclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InsumoclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getInsumoclinicas($query, $con);
    }

    /**
     * Clears out the collServicioinsumos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Insumo The current object (for fluent API support)
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
     * If this Insumo is new, it will return
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
                    ->filterByInsumo($this)
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
     * @return Insumo The current object (for fluent API support)
     */
    public function setServicioinsumos(PropelCollection $servicioinsumos, PropelPDO $con = null)
    {
        $servicioinsumosToDelete = $this->getServicioinsumos(new Criteria(), $con)->diff($servicioinsumos);


        $this->servicioinsumosScheduledForDeletion = $servicioinsumosToDelete;

        foreach ($servicioinsumosToDelete as $servicioinsumoRemoved) {
            $servicioinsumoRemoved->setInsumo(null);
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
                ->filterByInsumo($this)
                ->count($con);
        }

        return count($this->collServicioinsumos);
    }

    /**
     * Method called to associate a Servicioinsumo object to this object
     * through the Servicioinsumo foreign key attribute.
     *
     * @param    Servicioinsumo $l Servicioinsumo
     * @return Insumo The current object (for fluent API support)
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
        $servicioinsumo->setInsumo($this);
    }

    /**
     * @param	Servicioinsumo $servicioinsumo The servicioinsumo object to remove.
     * @return Insumo The current object (for fluent API support)
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
            $servicioinsumo->setInsumo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Insumo is new, it will return
     * an empty collection; or if this Insumo has previously
     * been saved, it will retrieve related Servicioinsumos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Insumo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Servicioinsumo[] List of Servicioinsumo objects
     */
    public function getServicioinsumosJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ServicioinsumoQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getServicioinsumos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idinsumo = null;
        $this->insumo_nombre = null;
        $this->insumo_descripcion = null;
        $this->insumo_costo = null;
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
            if ($this->collInsumoclinicas) {
                foreach ($this->collInsumoclinicas as $o) {
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

        if ($this->collInsumoclinicas instanceof PropelCollection) {
            $this->collInsumoclinicas->clearIterator();
        }
        $this->collInsumoclinicas = null;
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
        return (string) $this->exportTo(InsumoPeer::DEFAULT_STRING_FORMAT);
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
