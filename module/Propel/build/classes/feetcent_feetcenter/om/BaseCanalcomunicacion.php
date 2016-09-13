<?php


/**
 * Base class that represents a row from the 'canalcomunicacion' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseCanalcomunicacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CanalcomunicacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CanalcomunicacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcanalcomunicacion field.
     * @var        int
     */
    protected $idcanalcomunicacion;

    /**
     * The value for the canalcomunicacion_nombre field.
     * @var        string
     */
    protected $canalcomunicacion_nombre;

    /**
     * The value for the canalcomunicacion_descripcion field.
     * @var        string
     */
    protected $canalcomunicacion_descripcion;

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
     * Get the [idcanalcomunicacion] column value.
     *
     * @return int
     */
    public function getIdcanalcomunicacion()
    {

        return $this->idcanalcomunicacion;
    }

    /**
     * Get the [canalcomunicacion_nombre] column value.
     *
     * @return string
     */
    public function getCanalcomunicacionNombre()
    {

        return $this->canalcomunicacion_nombre;
    }

    /**
     * Get the [canalcomunicacion_descripcion] column value.
     *
     * @return string
     */
    public function getCanalcomunicacionDescripcion()
    {

        return $this->canalcomunicacion_descripcion;
    }

    /**
     * Set the value of [idcanalcomunicacion] column.
     *
     * @param  int $v new value
     * @return Canalcomunicacion The current object (for fluent API support)
     */
    public function setIdcanalcomunicacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcanalcomunicacion !== $v) {
            $this->idcanalcomunicacion = $v;
            $this->modifiedColumns[] = CanalcomunicacionPeer::IDCANALCOMUNICACION;
        }


        return $this;
    } // setIdcanalcomunicacion()

    /**
     * Set the value of [canalcomunicacion_nombre] column.
     *
     * @param  string $v new value
     * @return Canalcomunicacion The current object (for fluent API support)
     */
    public function setCanalcomunicacionNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->canalcomunicacion_nombre !== $v) {
            $this->canalcomunicacion_nombre = $v;
            $this->modifiedColumns[] = CanalcomunicacionPeer::CANALCOMUNICACION_NOMBRE;
        }


        return $this;
    } // setCanalcomunicacionNombre()

    /**
     * Set the value of [canalcomunicacion_descripcion] column.
     *
     * @param  string $v new value
     * @return Canalcomunicacion The current object (for fluent API support)
     */
    public function setCanalcomunicacionDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->canalcomunicacion_descripcion !== $v) {
            $this->canalcomunicacion_descripcion = $v;
            $this->modifiedColumns[] = CanalcomunicacionPeer::CANALCOMUNICACION_DESCRIPCION;
        }


        return $this;
    } // setCanalcomunicacionDescripcion()

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

            $this->idcanalcomunicacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->canalcomunicacion_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->canalcomunicacion_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = CanalcomunicacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Canalcomunicacion object", $e);
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
            $con = Propel::getConnection(CanalcomunicacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CanalcomunicacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CanalcomunicacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CanalcomunicacionQuery::create()
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
            $con = Propel::getConnection(CanalcomunicacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CanalcomunicacionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CanalcomunicacionPeer::IDCANALCOMUNICACION;
        if (null !== $this->idcanalcomunicacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CanalcomunicacionPeer::IDCANALCOMUNICACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CanalcomunicacionPeer::IDCANALCOMUNICACION)) {
            $modifiedColumns[':p' . $index++]  = '`idcanalcomunicacion`';
        }
        if ($this->isColumnModified(CanalcomunicacionPeer::CANALCOMUNICACION_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`canalcomunicacion_nombre`';
        }
        if ($this->isColumnModified(CanalcomunicacionPeer::CANALCOMUNICACION_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`canalcomunicacion_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `canalcomunicacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcanalcomunicacion`':
                        $stmt->bindValue($identifier, $this->idcanalcomunicacion, PDO::PARAM_INT);
                        break;
                    case '`canalcomunicacion_nombre`':
                        $stmt->bindValue($identifier, $this->canalcomunicacion_nombre, PDO::PARAM_STR);
                        break;
                    case '`canalcomunicacion_descripcion`':
                        $stmt->bindValue($identifier, $this->canalcomunicacion_descripcion, PDO::PARAM_STR);
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
        $this->setIdcanalcomunicacion($pk);

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


            if (($retval = CanalcomunicacionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CanalcomunicacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcanalcomunicacion();
                break;
            case 1:
                return $this->getCanalcomunicacionNombre();
                break;
            case 2:
                return $this->getCanalcomunicacionDescripcion();
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
        if (isset($alreadyDumpedObjects['Canalcomunicacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Canalcomunicacion'][$this->getPrimaryKey()] = true;
        $keys = CanalcomunicacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcanalcomunicacion(),
            $keys[1] => $this->getCanalcomunicacionNombre(),
            $keys[2] => $this->getCanalcomunicacionDescripcion(),
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
        $pos = CanalcomunicacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcanalcomunicacion($value);
                break;
            case 1:
                $this->setCanalcomunicacionNombre($value);
                break;
            case 2:
                $this->setCanalcomunicacionDescripcion($value);
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
        $keys = CanalcomunicacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcanalcomunicacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCanalcomunicacionNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCanalcomunicacionDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CanalcomunicacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CanalcomunicacionPeer::IDCANALCOMUNICACION)) $criteria->add(CanalcomunicacionPeer::IDCANALCOMUNICACION, $this->idcanalcomunicacion);
        if ($this->isColumnModified(CanalcomunicacionPeer::CANALCOMUNICACION_NOMBRE)) $criteria->add(CanalcomunicacionPeer::CANALCOMUNICACION_NOMBRE, $this->canalcomunicacion_nombre);
        if ($this->isColumnModified(CanalcomunicacionPeer::CANALCOMUNICACION_DESCRIPCION)) $criteria->add(CanalcomunicacionPeer::CANALCOMUNICACION_DESCRIPCION, $this->canalcomunicacion_descripcion);

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
        $criteria = new Criteria(CanalcomunicacionPeer::DATABASE_NAME);
        $criteria->add(CanalcomunicacionPeer::IDCANALCOMUNICACION, $this->idcanalcomunicacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcanalcomunicacion();
    }

    /**
     * Generic method to set the primary key (idcanalcomunicacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcanalcomunicacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcanalcomunicacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Canalcomunicacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCanalcomunicacionNombre($this->getCanalcomunicacionNombre());
        $copyObj->setCanalcomunicacionDescripcion($this->getCanalcomunicacionDescripcion());

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
            $copyObj->setIdcanalcomunicacion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Canalcomunicacion Clone of current object.
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
     * @return CanalcomunicacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CanalcomunicacionPeer();
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
     * @return Canalcomunicacion The current object (for fluent API support)
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
     * If this Canalcomunicacion is new, it will return
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
                    ->filterByCanalcomunicacion($this)
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
     * @return Canalcomunicacion The current object (for fluent API support)
     */
    public function setPacienteseguimientos(PropelCollection $pacienteseguimientos, PropelPDO $con = null)
    {
        $pacienteseguimientosToDelete = $this->getPacienteseguimientos(new Criteria(), $con)->diff($pacienteseguimientos);


        $this->pacienteseguimientosScheduledForDeletion = $pacienteseguimientosToDelete;

        foreach ($pacienteseguimientosToDelete as $pacienteseguimientoRemoved) {
            $pacienteseguimientoRemoved->setCanalcomunicacion(null);
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
                ->filterByCanalcomunicacion($this)
                ->count($con);
        }

        return count($this->collPacienteseguimientos);
    }

    /**
     * Method called to associate a Pacienteseguimiento object to this object
     * through the Pacienteseguimiento foreign key attribute.
     *
     * @param    Pacienteseguimiento $l Pacienteseguimiento
     * @return Canalcomunicacion The current object (for fluent API support)
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
        $pacienteseguimiento->setCanalcomunicacion($this);
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to remove.
     * @return Canalcomunicacion The current object (for fluent API support)
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
            $pacienteseguimiento->setCanalcomunicacion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Canalcomunicacion is new, it will return
     * an empty collection; or if this Canalcomunicacion has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Canalcomunicacion.
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
     * Otherwise if this Canalcomunicacion is new, it will return
     * an empty collection; or if this Canalcomunicacion has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Canalcomunicacion.
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
     * Otherwise if this Canalcomunicacion is new, it will return
     * an empty collection; or if this Canalcomunicacion has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Canalcomunicacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinEstatusseguimiento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Estatusseguimiento', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Canalcomunicacion is new, it will return
     * an empty collection; or if this Canalcomunicacion has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Canalcomunicacion.
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
        $this->idcanalcomunicacion = null;
        $this->canalcomunicacion_nombre = null;
        $this->canalcomunicacion_descripcion = null;
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
        return (string) $this->exportTo(CanalcomunicacionPeer::DEFAULT_STRING_FORMAT);
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
