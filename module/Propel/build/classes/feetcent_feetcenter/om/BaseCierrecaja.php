<?php


/**
 * Base class that represents a row from the 'cierrecaja' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseCierrecaja extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CierrecajaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CierrecajaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcierrecaja field.
     * @var        int
     */
    protected $idcierrecaja;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the cierrecaja_cantidad field.
     * @var        string
     */
    protected $cierrecaja_cantidad;

    /**
     * The value for the cierrecaja_efectivo field.
     * @var        string
     */
    protected $cierrecaja_efectivo;

    /**
     * The value for the cierrecaja_tarjeta field.
     * @var        string
     */
    protected $cierrecaja_tarjeta;

    /**
     * The value for the idempleado field.
     * @var        string
     */
    protected $idempleado;

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
     * Get the [idcierrecaja] column value.
     *
     * @return int
     */
    public function getIdcierrecaja()
    {

        return $this->idcierrecaja;
    }

    /**
     * Get the [idsucursal] column value.
     *
     * @return int
     */
    public function getIdsucursal()
    {

        return $this->idsucursal;
    }

    /**
     * Get the [cierrecaja_cantidad] column value.
     *
     * @return string
     */
    public function getCierrecajaCantidad()
    {

        return $this->cierrecaja_cantidad;
    }

    /**
     * Get the [cierrecaja_efectivo] column value.
     *
     * @return string
     */
    public function getCierrecajaEfectivo()
    {

        return $this->cierrecaja_efectivo;
    }

    /**
     * Get the [cierrecaja_tarjeta] column value.
     *
     * @return string
     */
    public function getCierrecajaTarjeta()
    {

        return $this->cierrecaja_tarjeta;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return string
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Set the value of [idcierrecaja] column.
     *
     * @param  int $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setIdcierrecaja($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcierrecaja !== $v) {
            $this->idcierrecaja = $v;
            $this->modifiedColumns[] = CierrecajaPeer::IDCIERRECAJA;
        }


        return $this;
    } // setIdcierrecaja()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = CierrecajaPeer::IDSUCURSAL;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [cierrecaja_cantidad] column.
     *
     * @param  string $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setCierrecajaCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cierrecaja_cantidad !== $v) {
            $this->cierrecaja_cantidad = $v;
            $this->modifiedColumns[] = CierrecajaPeer::CIERRECAJA_CANTIDAD;
        }


        return $this;
    } // setCierrecajaCantidad()

    /**
     * Set the value of [cierrecaja_efectivo] column.
     *
     * @param  string $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setCierrecajaEfectivo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cierrecaja_efectivo !== $v) {
            $this->cierrecaja_efectivo = $v;
            $this->modifiedColumns[] = CierrecajaPeer::CIERRECAJA_EFECTIVO;
        }


        return $this;
    } // setCierrecajaEfectivo()

    /**
     * Set the value of [cierrecaja_tarjeta] column.
     *
     * @param  string $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setCierrecajaTarjeta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cierrecaja_tarjeta !== $v) {
            $this->cierrecaja_tarjeta = $v;
            $this->modifiedColumns[] = CierrecajaPeer::CIERRECAJA_TARJETA;
        }


        return $this;
    } // setCierrecajaTarjeta()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  string $v new value
     * @return Cierrecaja The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = CierrecajaPeer::IDEMPLEADO;
        }


        return $this;
    } // setIdempleado()

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

            $this->idcierrecaja = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idsucursal = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->cierrecaja_cantidad = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cierrecaja_efectivo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cierrecaja_tarjeta = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->idempleado = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CierrecajaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cierrecaja object", $e);
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
            $con = Propel::getConnection(CierrecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CierrecajaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CierrecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CierrecajaQuery::create()
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
            $con = Propel::getConnection(CierrecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CierrecajaPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CierrecajaPeer::IDCIERRECAJA;
        if (null !== $this->idcierrecaja) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CierrecajaPeer::IDCIERRECAJA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CierrecajaPeer::IDCIERRECAJA)) {
            $modifiedColumns[':p' . $index++]  = '`idcierrecaja`';
        }
        if ($this->isColumnModified(CierrecajaPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`cierrecaja_cantidad`';
        }
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_EFECTIVO)) {
            $modifiedColumns[':p' . $index++]  = '`cierrecaja_efectivo`';
        }
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_TARJETA)) {
            $modifiedColumns[':p' . $index++]  = '`cierrecaja_tarjeta`';
        }
        if ($this->isColumnModified(CierrecajaPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }

        $sql = sprintf(
            'INSERT INTO `cierrecaja` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcierrecaja`':
                        $stmt->bindValue($identifier, $this->idcierrecaja, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`cierrecaja_cantidad`':
                        $stmt->bindValue($identifier, $this->cierrecaja_cantidad, PDO::PARAM_STR);
                        break;
                    case '`cierrecaja_efectivo`':
                        $stmt->bindValue($identifier, $this->cierrecaja_efectivo, PDO::PARAM_STR);
                        break;
                    case '`cierrecaja_tarjeta`':
                        $stmt->bindValue($identifier, $this->cierrecaja_tarjeta, PDO::PARAM_STR);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_STR);
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
        $this->setIdcierrecaja($pk);

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


            if (($retval = CierrecajaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CierrecajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcierrecaja();
                break;
            case 1:
                return $this->getIdsucursal();
                break;
            case 2:
                return $this->getCierrecajaCantidad();
                break;
            case 3:
                return $this->getCierrecajaEfectivo();
                break;
            case 4:
                return $this->getCierrecajaTarjeta();
                break;
            case 5:
                return $this->getIdempleado();
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
        if (isset($alreadyDumpedObjects['Cierrecaja'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cierrecaja'][$this->getPrimaryKey()] = true;
        $keys = CierrecajaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcierrecaja(),
            $keys[1] => $this->getIdsucursal(),
            $keys[2] => $this->getCierrecajaCantidad(),
            $keys[3] => $this->getCierrecajaEfectivo(),
            $keys[4] => $this->getCierrecajaTarjeta(),
            $keys[5] => $this->getIdempleado(),
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
        $pos = CierrecajaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcierrecaja($value);
                break;
            case 1:
                $this->setIdsucursal($value);
                break;
            case 2:
                $this->setCierrecajaCantidad($value);
                break;
            case 3:
                $this->setCierrecajaEfectivo($value);
                break;
            case 4:
                $this->setCierrecajaTarjeta($value);
                break;
            case 5:
                $this->setIdempleado($value);
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
        $keys = CierrecajaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcierrecaja($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdsucursal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCierrecajaCantidad($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCierrecajaEfectivo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCierrecajaTarjeta($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdempleado($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CierrecajaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CierrecajaPeer::IDCIERRECAJA)) $criteria->add(CierrecajaPeer::IDCIERRECAJA, $this->idcierrecaja);
        if ($this->isColumnModified(CierrecajaPeer::IDSUCURSAL)) $criteria->add(CierrecajaPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_CANTIDAD)) $criteria->add(CierrecajaPeer::CIERRECAJA_CANTIDAD, $this->cierrecaja_cantidad);
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_EFECTIVO)) $criteria->add(CierrecajaPeer::CIERRECAJA_EFECTIVO, $this->cierrecaja_efectivo);
        if ($this->isColumnModified(CierrecajaPeer::CIERRECAJA_TARJETA)) $criteria->add(CierrecajaPeer::CIERRECAJA_TARJETA, $this->cierrecaja_tarjeta);
        if ($this->isColumnModified(CierrecajaPeer::IDEMPLEADO)) $criteria->add(CierrecajaPeer::IDEMPLEADO, $this->idempleado);

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
        $criteria = new Criteria(CierrecajaPeer::DATABASE_NAME);
        $criteria->add(CierrecajaPeer::IDCIERRECAJA, $this->idcierrecaja);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcierrecaja();
    }

    /**
     * Generic method to set the primary key (idcierrecaja column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcierrecaja($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcierrecaja();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cierrecaja (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setCierrecajaCantidad($this->getCierrecajaCantidad());
        $copyObj->setCierrecajaEfectivo($this->getCierrecajaEfectivo());
        $copyObj->setCierrecajaTarjeta($this->getCierrecajaTarjeta());
        $copyObj->setIdempleado($this->getIdempleado());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcierrecaja(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cierrecaja Clone of current object.
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
     * @return CierrecajaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CierrecajaPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcierrecaja = null;
        $this->idsucursal = null;
        $this->cierrecaja_cantidad = null;
        $this->cierrecaja_efectivo = null;
        $this->cierrecaja_tarjeta = null;
        $this->idempleado = null;
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
        return (string) $this->exportTo(CierrecajaPeer::DEFAULT_STRING_FORMAT);
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
