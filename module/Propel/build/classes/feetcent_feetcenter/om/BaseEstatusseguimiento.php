<?php


/**
 * Base class that represents a row from the 'estatusseguimiento' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEstatusseguimiento extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EstatusseguimientoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EstatusseguimientoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idestatusseguimiento field.
     * @var        int
     */
    protected $idestatusseguimiento;

    /**
     * The value for the estatusseguimiento_nombre field.
     * @var        string
     */
    protected $estatusseguimiento_nombre;

    /**
     * The value for the estatusseguimiento_color field.
     * @var        string
     */
    protected $estatusseguimiento_color;

    /**
     * @var        PropelObjectCollection|Pacienteseguimiento[] Collection to store aggregation of Pacienteseguimiento objects.
     */
    protected $collPacienteseguimientos;
    protected $collPacienteseguimientosPartial;

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
    protected $pacienteseguimientosScheduledForDeletion = null;

    /**
     * Get the [idestatusseguimiento] column value.
     *
     * @return int
     */
    public function getIdestatusseguimiento()
    {

        return $this->idestatusseguimiento;
    }

    /**
     * Get the [estatusseguimiento_nombre] column value.
     *
     * @return string
     */
    public function getEstatusseguimientoNombre()
    {

        return $this->estatusseguimiento_nombre;
    }

    /**
     * Get the [estatusseguimiento_color] column value.
     *
     * @return string
     */
    public function getEstatusseguimientoColor()
    {

        return $this->estatusseguimiento_color;
    }

    /**
     * Set the value of [idestatusseguimiento] column.
     *
     * @param  int $v new value
     * @return Estatusseguimiento The current object (for fluent API support)
     */
    public function setIdestatusseguimiento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idestatusseguimiento !== $v) {
            $this->idestatusseguimiento = $v;
            $this->modifiedColumns[] = EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO;
        }


        return $this;
    } // setIdestatusseguimiento()

    /**
     * Set the value of [estatusseguimiento_nombre] column.
     *
     * @param  string $v new value
     * @return Estatusseguimiento The current object (for fluent API support)
     */
    public function setEstatusseguimientoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatusseguimiento_nombre !== $v) {
            $this->estatusseguimiento_nombre = $v;
            $this->modifiedColumns[] = EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_NOMBRE;
        }


        return $this;
    } // setEstatusseguimientoNombre()

    /**
     * Set the value of [estatusseguimiento_color] column.
     *
     * @param  string $v new value
     * @return Estatusseguimiento The current object (for fluent API support)
     */
    public function setEstatusseguimientoColor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatusseguimiento_color !== $v) {
            $this->estatusseguimiento_color = $v;
            $this->modifiedColumns[] = EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_COLOR;
        }


        return $this;
    } // setEstatusseguimientoColor()

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

            $this->idestatusseguimiento = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->estatusseguimiento_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->estatusseguimiento_color = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = EstatusseguimientoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Estatusseguimiento object", $e);
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
            $con = Propel::getConnection(EstatusseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EstatusseguimientoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collPacienteseguimientos = null;

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
            $con = Propel::getConnection(EstatusseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EstatusseguimientoQuery::create()
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
            $con = Propel::getConnection(EstatusseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EstatusseguimientoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO;
        if (null !== $this->idestatusseguimiento) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`idestatusseguimiento`';
        }
        if ($this->isColumnModified(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`estatusseguimiento_nombre`';
        }
        if ($this->isColumnModified(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_COLOR)) {
            $modifiedColumns[':p' . $index++]  = '`estatusseguimiento_color`';
        }

        $sql = sprintf(
            'INSERT INTO `estatusseguimiento` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idestatusseguimiento`':
                        $stmt->bindValue($identifier, $this->idestatusseguimiento, PDO::PARAM_INT);
                        break;
                    case '`estatusseguimiento_nombre`':
                        $stmt->bindValue($identifier, $this->estatusseguimiento_nombre, PDO::PARAM_STR);
                        break;
                    case '`estatusseguimiento_color`':
                        $stmt->bindValue($identifier, $this->estatusseguimiento_color, PDO::PARAM_STR);
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
        $this->setIdestatusseguimiento($pk);

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


            if (($retval = EstatusseguimientoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPacienteseguimientos !== null) {
                    foreach ($this->collPacienteseguimientos as $referrerFK) {
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
        $pos = EstatusseguimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdestatusseguimiento();
                break;
            case 1:
                return $this->getEstatusseguimientoNombre();
                break;
            case 2:
                return $this->getEstatusseguimientoColor();
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
        if (isset($alreadyDumpedObjects['Estatusseguimiento'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Estatusseguimiento'][$this->getPrimaryKey()] = true;
        $keys = EstatusseguimientoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdestatusseguimiento(),
            $keys[1] => $this->getEstatusseguimientoNombre(),
            $keys[2] => $this->getEstatusseguimientoColor(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collPacienteseguimientos) {
                $result['Pacienteseguimientos'] = $this->collPacienteseguimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EstatusseguimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdestatusseguimiento($value);
                break;
            case 1:
                $this->setEstatusseguimientoNombre($value);
                break;
            case 2:
                $this->setEstatusseguimientoColor($value);
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
        $keys = EstatusseguimientoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdestatusseguimiento($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEstatusseguimientoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEstatusseguimientoColor($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EstatusseguimientoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO)) $criteria->add(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $this->idestatusseguimiento);
        if ($this->isColumnModified(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_NOMBRE)) $criteria->add(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_NOMBRE, $this->estatusseguimiento_nombre);
        if ($this->isColumnModified(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_COLOR)) $criteria->add(EstatusseguimientoPeer::ESTATUSSEGUIMIENTO_COLOR, $this->estatusseguimiento_color);

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
        $criteria = new Criteria(EstatusseguimientoPeer::DATABASE_NAME);
        $criteria->add(EstatusseguimientoPeer::IDESTATUSSEGUIMIENTO, $this->idestatusseguimiento);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdestatusseguimiento();
    }

    /**
     * Generic method to set the primary key (idestatusseguimiento column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdestatusseguimiento($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdestatusseguimiento();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Estatusseguimiento (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEstatusseguimientoNombre($this->getEstatusseguimientoNombre());
        $copyObj->setEstatusseguimientoColor($this->getEstatusseguimientoColor());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPacienteseguimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacienteseguimiento($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdestatusseguimiento(NULL); // this is a auto-increment column, so set to default value
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
     * @return Estatusseguimiento Clone of current object.
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
     * @return EstatusseguimientoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EstatusseguimientoPeer();
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
        if ('Pacienteseguimiento' == $relationName) {
            $this->initPacienteseguimientos();
        }
    }

    /**
     * Clears out the collPacienteseguimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Estatusseguimiento The current object (for fluent API support)
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
     * If this Estatusseguimiento is new, it will return
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
                    ->filterByEstatusseguimiento($this)
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
     * @return Estatusseguimiento The current object (for fluent API support)
     */
    public function setPacienteseguimientos(PropelCollection $pacienteseguimientos, PropelPDO $con = null)
    {
        $pacienteseguimientosToDelete = $this->getPacienteseguimientos(new Criteria(), $con)->diff($pacienteseguimientos);


        $this->pacienteseguimientosScheduledForDeletion = $pacienteseguimientosToDelete;

        foreach ($pacienteseguimientosToDelete as $pacienteseguimientoRemoved) {
            $pacienteseguimientoRemoved->setEstatusseguimiento(null);
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
                ->filterByEstatusseguimiento($this)
                ->count($con);
        }

        return count($this->collPacienteseguimientos);
    }

    /**
     * Method called to associate a Pacienteseguimiento object to this object
     * through the Pacienteseguimiento foreign key attribute.
     *
     * @param    Pacienteseguimiento $l Pacienteseguimiento
     * @return Estatusseguimiento The current object (for fluent API support)
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
        $pacienteseguimiento->setEstatusseguimiento($this);
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to remove.
     * @return Estatusseguimiento The current object (for fluent API support)
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
            $pacienteseguimiento->setEstatusseguimiento(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Estatusseguimiento is new, it will return
     * an empty collection; or if this Estatusseguimiento has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Estatusseguimiento.
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
     * Otherwise if this Estatusseguimiento is new, it will return
     * an empty collection; or if this Estatusseguimiento has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Estatusseguimiento.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Estatusseguimiento is new, it will return
     * an empty collection; or if this Estatusseguimiento has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Estatusseguimiento.
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
     * Otherwise if this Estatusseguimiento is new, it will return
     * an empty collection; or if this Estatusseguimiento has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Estatusseguimiento.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idestatusseguimiento = null;
        $this->estatusseguimiento_nombre = null;
        $this->estatusseguimiento_color = null;
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
            if ($this->collPacienteseguimientos) {
                foreach ($this->collPacienteseguimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPacienteseguimientos instanceof PropelCollection) {
            $this->collPacienteseguimientos->clearIterator();
        }
        $this->collPacienteseguimientos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EstatusseguimientoPeer::DEFAULT_STRING_FORMAT);
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
