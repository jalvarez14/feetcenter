<?php


/**
 * Base class that represents a row from the 'concepto' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseConcepto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConceptoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConceptoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idconcepto field.
     * @var        int
     */
    protected $idconcepto;

    /**
     * The value for the concepto_nombre field.
     * @var        string
     */
    protected $concepto_nombre;

    /**
     * The value for the concepto_descripcion field.
     * @var        string
     */
    protected $concepto_descripcion;

    /**
     * @var        PropelObjectCollection|Egresoclinica[] Collection to store aggregation of Egresoclinica objects.
     */
    protected $collEgresoclinicas;
    protected $collEgresoclinicasPartial;

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
    protected $egresoclinicasScheduledForDeletion = null;

    /**
     * Get the [idconcepto] column value.
     *
     * @return int
     */
    public function getIdconcepto()
    {

        return $this->idconcepto;
    }

    /**
     * Get the [concepto_nombre] column value.
     *
     * @return string
     */
    public function getConceptoNombre()
    {

        return $this->concepto_nombre;
    }

    /**
     * Get the [concepto_descripcion] column value.
     *
     * @return string
     */
    public function getConceptoDescripcion()
    {

        return $this->concepto_descripcion;
    }

    /**
     * Set the value of [idconcepto] column.
     *
     * @param  int $v new value
     * @return Concepto The current object (for fluent API support)
     */
    public function setIdconcepto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconcepto !== $v) {
            $this->idconcepto = $v;
            $this->modifiedColumns[] = ConceptoPeer::IDCONCEPTO;
        }


        return $this;
    } // setIdconcepto()

    /**
     * Set the value of [concepto_nombre] column.
     *
     * @param  string $v new value
     * @return Concepto The current object (for fluent API support)
     */
    public function setConceptoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->concepto_nombre !== $v) {
            $this->concepto_nombre = $v;
            $this->modifiedColumns[] = ConceptoPeer::CONCEPTO_NOMBRE;
        }


        return $this;
    } // setConceptoNombre()

    /**
     * Set the value of [concepto_descripcion] column.
     *
     * @param  string $v new value
     * @return Concepto The current object (for fluent API support)
     */
    public function setConceptoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->concepto_descripcion !== $v) {
            $this->concepto_descripcion = $v;
            $this->modifiedColumns[] = ConceptoPeer::CONCEPTO_DESCRIPCION;
        }


        return $this;
    } // setConceptoDescripcion()

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

            $this->idconcepto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->concepto_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->concepto_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = ConceptoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Concepto object", $e);
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
            $con = Propel::getConnection(ConceptoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConceptoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEgresoclinicas = null;

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
            $con = Propel::getConnection(ConceptoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConceptoQuery::create()
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
            $con = Propel::getConnection(ConceptoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ConceptoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ConceptoPeer::IDCONCEPTO;
        if (null !== $this->idconcepto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConceptoPeer::IDCONCEPTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConceptoPeer::IDCONCEPTO)) {
            $modifiedColumns[':p' . $index++]  = '`idconcepto`';
        }
        if ($this->isColumnModified(ConceptoPeer::CONCEPTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`concepto_nombre`';
        }
        if ($this->isColumnModified(ConceptoPeer::CONCEPTO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`concepto_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `concepto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idconcepto`':
                        $stmt->bindValue($identifier, $this->idconcepto, PDO::PARAM_INT);
                        break;
                    case '`concepto_nombre`':
                        $stmt->bindValue($identifier, $this->concepto_nombre, PDO::PARAM_STR);
                        break;
                    case '`concepto_descripcion`':
                        $stmt->bindValue($identifier, $this->concepto_descripcion, PDO::PARAM_STR);
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
        $this->setIdconcepto($pk);

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


            if (($retval = ConceptoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEgresoclinicas !== null) {
                    foreach ($this->collEgresoclinicas as $referrerFK) {
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
        $pos = ConceptoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdconcepto();
                break;
            case 1:
                return $this->getConceptoNombre();
                break;
            case 2:
                return $this->getConceptoDescripcion();
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
        if (isset($alreadyDumpedObjects['Concepto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Concepto'][$this->getPrimaryKey()] = true;
        $keys = ConceptoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdconcepto(),
            $keys[1] => $this->getConceptoNombre(),
            $keys[2] => $this->getConceptoDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collEgresoclinicas) {
                $result['Egresoclinicas'] = $this->collEgresoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ConceptoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdconcepto($value);
                break;
            case 1:
                $this->setConceptoNombre($value);
                break;
            case 2:
                $this->setConceptoDescripcion($value);
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
        $keys = ConceptoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdconcepto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConceptoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConceptoDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConceptoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ConceptoPeer::IDCONCEPTO)) $criteria->add(ConceptoPeer::IDCONCEPTO, $this->idconcepto);
        if ($this->isColumnModified(ConceptoPeer::CONCEPTO_NOMBRE)) $criteria->add(ConceptoPeer::CONCEPTO_NOMBRE, $this->concepto_nombre);
        if ($this->isColumnModified(ConceptoPeer::CONCEPTO_DESCRIPCION)) $criteria->add(ConceptoPeer::CONCEPTO_DESCRIPCION, $this->concepto_descripcion);

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
        $criteria = new Criteria(ConceptoPeer::DATABASE_NAME);
        $criteria->add(ConceptoPeer::IDCONCEPTO, $this->idconcepto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdconcepto();
    }

    /**
     * Generic method to set the primary key (idconcepto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdconcepto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdconcepto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Concepto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConceptoNombre($this->getConceptoNombre());
        $copyObj->setConceptoDescripcion($this->getConceptoDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEgresoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEgresoclinica($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdconcepto(NULL); // this is a auto-increment column, so set to default value
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
     * @return Concepto Clone of current object.
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
     * @return ConceptoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConceptoPeer();
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
        if ('Egresoclinica' == $relationName) {
            $this->initEgresoclinicas();
        }
    }

    /**
     * Clears out the collEgresoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Concepto The current object (for fluent API support)
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
     * If this Concepto is new, it will return
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
                    ->filterByConcepto($this)
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
     * @return Concepto The current object (for fluent API support)
     */
    public function setEgresoclinicas(PropelCollection $egresoclinicas, PropelPDO $con = null)
    {
        $egresoclinicasToDelete = $this->getEgresoclinicas(new Criteria(), $con)->diff($egresoclinicas);


        $this->egresoclinicasScheduledForDeletion = $egresoclinicasToDelete;

        foreach ($egresoclinicasToDelete as $egresoclinicaRemoved) {
            $egresoclinicaRemoved->setConcepto(null);
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
                ->filterByConcepto($this)
                ->count($con);
        }

        return count($this->collEgresoclinicas);
    }

    /**
     * Method called to associate a Egresoclinica object to this object
     * through the Egresoclinica foreign key attribute.
     *
     * @param    Egresoclinica $l Egresoclinica
     * @return Concepto The current object (for fluent API support)
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
        $egresoclinica->setConcepto($this);
    }

    /**
     * @param	Egresoclinica $egresoclinica The egresoclinica object to remove.
     * @return Concepto The current object (for fluent API support)
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
            $egresoclinica->setConcepto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Concepto is new, it will return
     * an empty collection; or if this Concepto has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Concepto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     */
    public function getEgresoclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EgresoclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEgresoclinicas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Concepto is new, it will return
     * an empty collection; or if this Concepto has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Concepto.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idconcepto = null;
        $this->concepto_nombre = null;
        $this->concepto_descripcion = null;
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
            if ($this->collEgresoclinicas) {
                foreach ($this->collEgresoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEgresoclinicas instanceof PropelCollection) {
            $this->collEgresoclinicas->clearIterator();
        }
        $this->collEgresoclinicas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConceptoPeer::DEFAULT_STRING_FORMAT);
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
