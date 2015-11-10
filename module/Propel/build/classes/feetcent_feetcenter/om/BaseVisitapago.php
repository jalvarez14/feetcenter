<?php


/**
 * Base class that represents a row from the 'visitapago' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitapago extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VisitapagoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VisitapagoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idvisitapago field.
     * @var        int
     */
    protected $idvisitapago;

    /**
     * The value for the idvisita field.
     * @var        int
     */
    protected $idvisita;

    /**
     * The value for the visitapago_tipo field.
     * @var        string
     */
    protected $visitapago_tipo;

    /**
     * The value for the visitapago_cantidad field.
     * @var        string
     */
    protected $visitapago_cantidad;

    /**
     * The value for the visitapago_fecha field.
     * @var        string
     */
    protected $visitapago_fecha;

    /**
     * The value for the visitapago_referencia field.
     * @var        string
     */
    protected $visitapago_referencia;

    /**
     * @var        Visita
     */
    protected $aVisita;

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
     * Get the [idvisitapago] column value.
     *
     * @return int
     */
    public function getIdvisitapago()
    {

        return $this->idvisitapago;
    }

    /**
     * Get the [idvisita] column value.
     *
     * @return int
     */
    public function getIdvisita()
    {

        return $this->idvisita;
    }

    /**
     * Get the [visitapago_tipo] column value.
     *
     * @return string
     */
    public function getVisitapagoTipo()
    {

        return $this->visitapago_tipo;
    }

    /**
     * Get the [visitapago_cantidad] column value.
     *
     * @return string
     */
    public function getVisitapagoCantidad()
    {

        return $this->visitapago_cantidad;
    }

    /**
     * Get the [optionally formatted] temporal [visitapago_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitapagoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->visitapago_fecha === null) {
            return null;
        }

        if ($this->visitapago_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->visitapago_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->visitapago_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [visitapago_referencia] column value.
     *
     * @return string
     */
    public function getVisitapagoReferencia()
    {

        return $this->visitapago_referencia;
    }

    /**
     * Set the value of [idvisitapago] column.
     *
     * @param  int $v new value
     * @return Visitapago The current object (for fluent API support)
     */
    public function setIdvisitapago($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idvisitapago !== $v) {
            $this->idvisitapago = $v;
            $this->modifiedColumns[] = VisitapagoPeer::IDVISITAPAGO;
        }


        return $this;
    } // setIdvisitapago()

    /**
     * Set the value of [idvisita] column.
     *
     * @param  int $v new value
     * @return Visitapago The current object (for fluent API support)
     */
    public function setIdvisita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idvisita !== $v) {
            $this->idvisita = $v;
            $this->modifiedColumns[] = VisitapagoPeer::IDVISITA;
        }

        if ($this->aVisita !== null && $this->aVisita->getIdvisita() !== $v) {
            $this->aVisita = null;
        }


        return $this;
    } // setIdvisita()

    /**
     * Set the value of [visitapago_tipo] column.
     *
     * @param  string $v new value
     * @return Visitapago The current object (for fluent API support)
     */
    public function setVisitapagoTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visitapago_tipo !== $v) {
            $this->visitapago_tipo = $v;
            $this->modifiedColumns[] = VisitapagoPeer::VISITAPAGO_TIPO;
        }


        return $this;
    } // setVisitapagoTipo()

    /**
     * Set the value of [visitapago_cantidad] column.
     *
     * @param  string $v new value
     * @return Visitapago The current object (for fluent API support)
     */
    public function setVisitapagoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visitapago_cantidad !== $v) {
            $this->visitapago_cantidad = $v;
            $this->modifiedColumns[] = VisitapagoPeer::VISITAPAGO_CANTIDAD;
        }


        return $this;
    } // setVisitapagoCantidad()

    /**
     * Sets the value of [visitapago_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Visitapago The current object (for fluent API support)
     */
    public function setVisitapagoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visitapago_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->visitapago_fecha !== null && $tmpDt = new DateTime($this->visitapago_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->visitapago_fecha = $newDateAsString;
                $this->modifiedColumns[] = VisitapagoPeer::VISITAPAGO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setVisitapagoFecha()

    /**
     * Set the value of [visitapago_referencia] column.
     *
     * @param  string $v new value
     * @return Visitapago The current object (for fluent API support)
     */
    public function setVisitapagoReferencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visitapago_referencia !== $v) {
            $this->visitapago_referencia = $v;
            $this->modifiedColumns[] = VisitapagoPeer::VISITAPAGO_REFERENCIA;
        }


        return $this;
    } // setVisitapagoReferencia()

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

            $this->idvisitapago = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idvisita = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->visitapago_tipo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->visitapago_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->visitapago_fecha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->visitapago_referencia = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = VisitapagoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Visitapago object", $e);
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

        if ($this->aVisita !== null && $this->idvisita !== $this->aVisita->getIdvisita()) {
            $this->aVisita = null;
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
            $con = Propel::getConnection(VisitapagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VisitapagoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVisita = null;
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
            $con = Propel::getConnection(VisitapagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VisitapagoQuery::create()
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
            $con = Propel::getConnection(VisitapagoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VisitapagoPeer::addInstanceToPool($this);
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

            if ($this->aVisita !== null) {
                if ($this->aVisita->isModified() || $this->aVisita->isNew()) {
                    $affectedRows += $this->aVisita->save($con);
                }
                $this->setVisita($this->aVisita);
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

        $this->modifiedColumns[] = VisitapagoPeer::IDVISITAPAGO;
        if (null !== $this->idvisitapago) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VisitapagoPeer::IDVISITAPAGO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VisitapagoPeer::IDVISITAPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`idvisitapago`';
        }
        if ($this->isColumnModified(VisitapagoPeer::IDVISITA)) {
            $modifiedColumns[':p' . $index++]  = '`idvisita`';
        }
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`visitapago_tipo`';
        }
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`visitapago_cantidad`';
        }
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`visitapago_fecha`';
        }
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_REFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`visitapago_referencia`';
        }

        $sql = sprintf(
            'INSERT INTO `visitapago` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idvisitapago`':
                        $stmt->bindValue($identifier, $this->idvisitapago, PDO::PARAM_INT);
                        break;
                    case '`idvisita`':
                        $stmt->bindValue($identifier, $this->idvisita, PDO::PARAM_INT);
                        break;
                    case '`visitapago_tipo`':
                        $stmt->bindValue($identifier, $this->visitapago_tipo, PDO::PARAM_STR);
                        break;
                    case '`visitapago_cantidad`':
                        $stmt->bindValue($identifier, $this->visitapago_cantidad, PDO::PARAM_STR);
                        break;
                    case '`visitapago_fecha`':
                        $stmt->bindValue($identifier, $this->visitapago_fecha, PDO::PARAM_STR);
                        break;
                    case '`visitapago_referencia`':
                        $stmt->bindValue($identifier, $this->visitapago_referencia, PDO::PARAM_STR);
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
        $this->setIdvisitapago($pk);

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

            if ($this->aVisita !== null) {
                if (!$this->aVisita->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVisita->getValidationFailures());
                }
            }


            if (($retval = VisitapagoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = VisitapagoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdvisitapago();
                break;
            case 1:
                return $this->getIdvisita();
                break;
            case 2:
                return $this->getVisitapagoTipo();
                break;
            case 3:
                return $this->getVisitapagoCantidad();
                break;
            case 4:
                return $this->getVisitapagoFecha();
                break;
            case 5:
                return $this->getVisitapagoReferencia();
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
        if (isset($alreadyDumpedObjects['Visitapago'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Visitapago'][$this->getPrimaryKey()] = true;
        $keys = VisitapagoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdvisitapago(),
            $keys[1] => $this->getIdvisita(),
            $keys[2] => $this->getVisitapagoTipo(),
            $keys[3] => $this->getVisitapagoCantidad(),
            $keys[4] => $this->getVisitapagoFecha(),
            $keys[5] => $this->getVisitapagoReferencia(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aVisita) {
                $result['Visita'] = $this->aVisita->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = VisitapagoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdvisitapago($value);
                break;
            case 1:
                $this->setIdvisita($value);
                break;
            case 2:
                $this->setVisitapagoTipo($value);
                break;
            case 3:
                $this->setVisitapagoCantidad($value);
                break;
            case 4:
                $this->setVisitapagoFecha($value);
                break;
            case 5:
                $this->setVisitapagoReferencia($value);
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
        $keys = VisitapagoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdvisitapago($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdvisita($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setVisitapagoTipo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVisitapagoCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVisitapagoFecha($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVisitapagoReferencia($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VisitapagoPeer::DATABASE_NAME);

        if ($this->isColumnModified(VisitapagoPeer::IDVISITAPAGO)) $criteria->add(VisitapagoPeer::IDVISITAPAGO, $this->idvisitapago);
        if ($this->isColumnModified(VisitapagoPeer::IDVISITA)) $criteria->add(VisitapagoPeer::IDVISITA, $this->idvisita);
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_TIPO)) $criteria->add(VisitapagoPeer::VISITAPAGO_TIPO, $this->visitapago_tipo);
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_CANTIDAD)) $criteria->add(VisitapagoPeer::VISITAPAGO_CANTIDAD, $this->visitapago_cantidad);
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_FECHA)) $criteria->add(VisitapagoPeer::VISITAPAGO_FECHA, $this->visitapago_fecha);
        if ($this->isColumnModified(VisitapagoPeer::VISITAPAGO_REFERENCIA)) $criteria->add(VisitapagoPeer::VISITAPAGO_REFERENCIA, $this->visitapago_referencia);

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
        $criteria = new Criteria(VisitapagoPeer::DATABASE_NAME);
        $criteria->add(VisitapagoPeer::IDVISITAPAGO, $this->idvisitapago);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdvisitapago();
    }

    /**
     * Generic method to set the primary key (idvisitapago column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdvisitapago($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdvisitapago();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Visitapago (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdvisita($this->getIdvisita());
        $copyObj->setVisitapagoTipo($this->getVisitapagoTipo());
        $copyObj->setVisitapagoCantidad($this->getVisitapagoCantidad());
        $copyObj->setVisitapagoFecha($this->getVisitapagoFecha());
        $copyObj->setVisitapagoReferencia($this->getVisitapagoReferencia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdvisitapago(NULL); // this is a auto-increment column, so set to default value
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
     * @return Visitapago Clone of current object.
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
     * @return VisitapagoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VisitapagoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Visita object.
     *
     * @param                  Visita $v
     * @return Visitapago The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVisita(Visita $v = null)
    {
        if ($v === null) {
            $this->setIdvisita(NULL);
        } else {
            $this->setIdvisita($v->getIdvisita());
        }

        $this->aVisita = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Visita object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitapago($this);
        }


        return $this;
    }


    /**
     * Get the associated Visita object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Visita The associated Visita object.
     * @throws PropelException
     */
    public function getVisita(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVisita === null && ($this->idvisita !== null) && $doQuery) {
            $this->aVisita = VisitaQuery::create()->findPk($this->idvisita, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVisita->addVisitapagos($this);
             */
        }

        return $this->aVisita;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idvisitapago = null;
        $this->idvisita = null;
        $this->visitapago_tipo = null;
        $this->visitapago_cantidad = null;
        $this->visitapago_fecha = null;
        $this->visitapago_referencia = null;
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
            if ($this->aVisita instanceof Persistent) {
              $this->aVisita->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aVisita = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VisitapagoPeer::DEFAULT_STRING_FORMAT);
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
