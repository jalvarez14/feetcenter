<?php


/**
 * Base class that represents a row from the 'estatusvisita' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEstatusvisita extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EstatusvisitaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EstatusvisitaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idestatusvisita field.
     * @var        int
     */
    protected $idestatusvisita;

    /**
     * The value for the estatusvisita_nombre field.
     * @var        string
     */
    protected $estatusvisita_nombre;

    /**
     * The value for the estatusvisita_color field.
     * @var        string
     */
    protected $estatusvisita_color;

    /**
     * The value for the estatusvisita_cssname field.
     * @var        string
     */
    protected $estatusvisita_cssname;

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
     * Get the [idestatusvisita] column value.
     *
     * @return int
     */
    public function getIdestatusvisita()
    {

        return $this->idestatusvisita;
    }

    /**
     * Get the [estatusvisita_nombre] column value.
     *
     * @return string
     */
    public function getEstatusvisitaNombre()
    {

        return $this->estatusvisita_nombre;
    }

    /**
     * Get the [estatusvisita_color] column value.
     *
     * @return string
     */
    public function getEstatusvisitaColor()
    {

        return $this->estatusvisita_color;
    }

    /**
     * Get the [estatusvisita_cssname] column value.
     *
     * @return string
     */
    public function getEstatusvisitaCssname()
    {

        return $this->estatusvisita_cssname;
    }

    /**
     * Set the value of [idestatusvisita] column.
     *
     * @param  int $v new value
     * @return Estatusvisita The current object (for fluent API support)
     */
    public function setIdestatusvisita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idestatusvisita !== $v) {
            $this->idestatusvisita = $v;
            $this->modifiedColumns[] = EstatusvisitaPeer::IDESTATUSVISITA;
        }


        return $this;
    } // setIdestatusvisita()

    /**
     * Set the value of [estatusvisita_nombre] column.
     *
     * @param  string $v new value
     * @return Estatusvisita The current object (for fluent API support)
     */
    public function setEstatusvisitaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatusvisita_nombre !== $v) {
            $this->estatusvisita_nombre = $v;
            $this->modifiedColumns[] = EstatusvisitaPeer::ESTATUSVISITA_NOMBRE;
        }


        return $this;
    } // setEstatusvisitaNombre()

    /**
     * Set the value of [estatusvisita_color] column.
     *
     * @param  string $v new value
     * @return Estatusvisita The current object (for fluent API support)
     */
    public function setEstatusvisitaColor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatusvisita_color !== $v) {
            $this->estatusvisita_color = $v;
            $this->modifiedColumns[] = EstatusvisitaPeer::ESTATUSVISITA_COLOR;
        }


        return $this;
    } // setEstatusvisitaColor()

    /**
     * Set the value of [estatusvisita_cssname] column.
     *
     * @param  string $v new value
     * @return Estatusvisita The current object (for fluent API support)
     */
    public function setEstatusvisitaCssname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatusvisita_cssname !== $v) {
            $this->estatusvisita_cssname = $v;
            $this->modifiedColumns[] = EstatusvisitaPeer::ESTATUSVISITA_CSSNAME;
        }


        return $this;
    } // setEstatusvisitaCssname()

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

            $this->idestatusvisita = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->estatusvisita_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->estatusvisita_color = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->estatusvisita_cssname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = EstatusvisitaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Estatusvisita object", $e);
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
            $con = Propel::getConnection(EstatusvisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EstatusvisitaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(EstatusvisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EstatusvisitaQuery::create()
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
            $con = Propel::getConnection(EstatusvisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EstatusvisitaPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EstatusvisitaPeer::IDESTATUSVISITA;
        if (null !== $this->idestatusvisita) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EstatusvisitaPeer::IDESTATUSVISITA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EstatusvisitaPeer::IDESTATUSVISITA)) {
            $modifiedColumns[':p' . $index++]  = '`idestatusvisita`';
        }
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`estatusvisita_nombre`';
        }
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_COLOR)) {
            $modifiedColumns[':p' . $index++]  = '`estatusvisita_color`';
        }
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_CSSNAME)) {
            $modifiedColumns[':p' . $index++]  = '`estatusvisita_cssname`';
        }

        $sql = sprintf(
            'INSERT INTO `estatusvisita` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idestatusvisita`':
                        $stmt->bindValue($identifier, $this->idestatusvisita, PDO::PARAM_INT);
                        break;
                    case '`estatusvisita_nombre`':
                        $stmt->bindValue($identifier, $this->estatusvisita_nombre, PDO::PARAM_STR);
                        break;
                    case '`estatusvisita_color`':
                        $stmt->bindValue($identifier, $this->estatusvisita_color, PDO::PARAM_STR);
                        break;
                    case '`estatusvisita_cssname`':
                        $stmt->bindValue($identifier, $this->estatusvisita_cssname, PDO::PARAM_STR);
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
        $this->setIdestatusvisita($pk);

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


            if (($retval = EstatusvisitaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EstatusvisitaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdestatusvisita();
                break;
            case 1:
                return $this->getEstatusvisitaNombre();
                break;
            case 2:
                return $this->getEstatusvisitaColor();
                break;
            case 3:
                return $this->getEstatusvisitaCssname();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Estatusvisita'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Estatusvisita'][$this->getPrimaryKey()] = true;
        $keys = EstatusvisitaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdestatusvisita(),
            $keys[1] => $this->getEstatusvisitaNombre(),
            $keys[2] => $this->getEstatusvisitaColor(),
            $keys[3] => $this->getEstatusvisitaCssname(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = EstatusvisitaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdestatusvisita($value);
                break;
            case 1:
                $this->setEstatusvisitaNombre($value);
                break;
            case 2:
                $this->setEstatusvisitaColor($value);
                break;
            case 3:
                $this->setEstatusvisitaCssname($value);
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
        $keys = EstatusvisitaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdestatusvisita($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEstatusvisitaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEstatusvisitaColor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEstatusvisitaCssname($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EstatusvisitaPeer::DATABASE_NAME);

        if ($this->isColumnModified(EstatusvisitaPeer::IDESTATUSVISITA)) $criteria->add(EstatusvisitaPeer::IDESTATUSVISITA, $this->idestatusvisita);
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_NOMBRE)) $criteria->add(EstatusvisitaPeer::ESTATUSVISITA_NOMBRE, $this->estatusvisita_nombre);
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_COLOR)) $criteria->add(EstatusvisitaPeer::ESTATUSVISITA_COLOR, $this->estatusvisita_color);
        if ($this->isColumnModified(EstatusvisitaPeer::ESTATUSVISITA_CSSNAME)) $criteria->add(EstatusvisitaPeer::ESTATUSVISITA_CSSNAME, $this->estatusvisita_cssname);

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
        $criteria = new Criteria(EstatusvisitaPeer::DATABASE_NAME);
        $criteria->add(EstatusvisitaPeer::IDESTATUSVISITA, $this->idestatusvisita);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdestatusvisita();
    }

    /**
     * Generic method to set the primary key (idestatusvisita column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdestatusvisita($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdestatusvisita();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Estatusvisita (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEstatusvisitaNombre($this->getEstatusvisitaNombre());
        $copyObj->setEstatusvisitaColor($this->getEstatusvisitaColor());
        $copyObj->setEstatusvisitaCssname($this->getEstatusvisitaCssname());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdestatusvisita(NULL); // this is a auto-increment column, so set to default value
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
     * @return Estatusvisita Clone of current object.
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
     * @return EstatusvisitaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EstatusvisitaPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idestatusvisita = null;
        $this->estatusvisita_nombre = null;
        $this->estatusvisita_color = null;
        $this->estatusvisita_cssname = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EstatusvisitaPeer::DEFAULT_STRING_FORMAT);
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
