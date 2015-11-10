<?php


/**
 * Base class that represents a row from the 'empleadohorario' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleadohorario extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadohorarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadohorarioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleadohorario field.
     * @var        int
     */
    protected $idempleadohorario;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the empleadohorario_entrada field.
     * @var        string
     */
    protected $empleadohorario_entrada;

    /**
     * The value for the empleadohorario_salida field.
     * @var        string
     */
    protected $empleadohorario_salida;

    /**
     * The value for the empleadohorario_dia field.
     * @var        string
     */
    protected $empleadohorario_dia;

    /**
     * The value for the empleadohorario_descanso field.
     * @var        boolean
     */
    protected $empleadohorario_descanso;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

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
     * Get the [idempleadohorario] column value.
     *
     * @return int
     */
    public function getIdempleadohorario()
    {

        return $this->idempleadohorario;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [optionally formatted] temporal [empleadohorario_entrada] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadohorarioEntrada($format = '%X')
    {
        if ($this->empleadohorario_entrada === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->empleadohorario_entrada);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleadohorario_entrada, true), $x);
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
     * Get the [optionally formatted] temporal [empleadohorario_salida] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadohorarioSalida($format = '%X')
    {
        if ($this->empleadohorario_salida === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->empleadohorario_salida);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleadohorario_salida, true), $x);
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
     * Get the [empleadohorario_dia] column value.
     *
     * @return string
     */
    public function getEmpleadohorarioDia()
    {

        return $this->empleadohorario_dia;
    }

    /**
     * Get the [empleadohorario_descanso] column value.
     *
     * @return boolean
     */
    public function getEmpleadohorarioDescanso()
    {

        return $this->empleadohorario_descanso;
    }

    /**
     * Set the value of [idempleadohorario] column.
     *
     * @param  int $v new value
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setIdempleadohorario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadohorario !== $v) {
            $this->idempleadohorario = $v;
            $this->modifiedColumns[] = EmpleadohorarioPeer::IDEMPLEADOHORARIO;
        }


        return $this;
    } // setIdempleadohorario()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadohorarioPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Sets the value of [empleadohorario_entrada] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setEmpleadohorarioEntrada($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleadohorario_entrada !== null || $dt !== null) {
            $currentDateAsString = ($this->empleadohorario_entrada !== null && $tmpDt = new DateTime($this->empleadohorario_entrada)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleadohorario_entrada = $newDateAsString;
                $this->modifiedColumns[] = EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA;
            }
        } // if either are not null


        return $this;
    } // setEmpleadohorarioEntrada()

    /**
     * Sets the value of [empleadohorario_salida] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setEmpleadohorarioSalida($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleadohorario_salida !== null || $dt !== null) {
            $currentDateAsString = ($this->empleadohorario_salida !== null && $tmpDt = new DateTime($this->empleadohorario_salida)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleadohorario_salida = $newDateAsString;
                $this->modifiedColumns[] = EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA;
            }
        } // if either are not null


        return $this;
    } // setEmpleadohorarioSalida()

    /**
     * Set the value of [empleadohorario_dia] column.
     *
     * @param  string $v new value
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setEmpleadohorarioDia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadohorario_dia !== $v) {
            $this->empleadohorario_dia = $v;
            $this->modifiedColumns[] = EmpleadohorarioPeer::EMPLEADOHORARIO_DIA;
        }


        return $this;
    } // setEmpleadohorarioDia()

    /**
     * Sets the value of the [empleadohorario_descanso] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empleadohorario The current object (for fluent API support)
     */
    public function setEmpleadohorarioDescanso($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empleadohorario_descanso !== $v) {
            $this->empleadohorario_descanso = $v;
            $this->modifiedColumns[] = EmpleadohorarioPeer::EMPLEADOHORARIO_DESCANSO;
        }


        return $this;
    } // setEmpleadohorarioDescanso()

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

            $this->idempleadohorario = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->empleadohorario_entrada = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleadohorario_salida = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleadohorario_dia = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleadohorario_descanso = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = EmpleadohorarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleadohorario object", $e);
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

        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
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
            $con = Propel::getConnection(EmpleadohorarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadohorarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
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
            $con = Propel::getConnection(EmpleadohorarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadohorarioQuery::create()
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
            $con = Propel::getConnection(EmpleadohorarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpleadohorarioPeer::addInstanceToPool($this);
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

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
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

        $this->modifiedColumns[] = EmpleadohorarioPeer::IDEMPLEADOHORARIO;
        if (null !== $this->idempleadohorario) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadohorarioPeer::IDEMPLEADOHORARIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadohorarioPeer::IDEMPLEADOHORARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadohorario`';
        }
        if ($this->isColumnModified(EmpleadohorarioPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA)) {
            $modifiedColumns[':p' . $index++]  = '`empleadohorario_entrada`';
        }
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA)) {
            $modifiedColumns[':p' . $index++]  = '`empleadohorario_salida`';
        }
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_DIA)) {
            $modifiedColumns[':p' . $index++]  = '`empleadohorario_dia`';
        }
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_DESCANSO)) {
            $modifiedColumns[':p' . $index++]  = '`empleadohorario_descanso`';
        }

        $sql = sprintf(
            'INSERT INTO `empleadohorario` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleadohorario`':
                        $stmt->bindValue($identifier, $this->idempleadohorario, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`empleadohorario_entrada`':
                        $stmt->bindValue($identifier, $this->empleadohorario_entrada, PDO::PARAM_STR);
                        break;
                    case '`empleadohorario_salida`':
                        $stmt->bindValue($identifier, $this->empleadohorario_salida, PDO::PARAM_STR);
                        break;
                    case '`empleadohorario_dia`':
                        $stmt->bindValue($identifier, $this->empleadohorario_dia, PDO::PARAM_STR);
                        break;
                    case '`empleadohorario_descanso`':
                        $stmt->bindValue($identifier, (int) $this->empleadohorario_descanso, PDO::PARAM_INT);
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
        $this->setIdempleadohorario($pk);

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

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = EmpleadohorarioPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EmpleadohorarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempleadohorario();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getEmpleadohorarioEntrada();
                break;
            case 3:
                return $this->getEmpleadohorarioSalida();
                break;
            case 4:
                return $this->getEmpleadohorarioDia();
                break;
            case 5:
                return $this->getEmpleadohorarioDescanso();
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
        if (isset($alreadyDumpedObjects['Empleadohorario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleadohorario'][$this->getPrimaryKey()] = true;
        $keys = EmpleadohorarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleadohorario(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getEmpleadohorarioEntrada(),
            $keys[3] => $this->getEmpleadohorarioSalida(),
            $keys[4] => $this->getEmpleadohorarioDia(),
            $keys[5] => $this->getEmpleadohorarioDescanso(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = EmpleadohorarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempleadohorario($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setEmpleadohorarioEntrada($value);
                break;
            case 3:
                $this->setEmpleadohorarioSalida($value);
                break;
            case 4:
                $this->setEmpleadohorarioDia($value);
                break;
            case 5:
                $this->setEmpleadohorarioDescanso($value);
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
        $keys = EmpleadohorarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleadohorario($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadohorarioEntrada($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadohorarioSalida($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadohorarioDia($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadohorarioDescanso($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadohorarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadohorarioPeer::IDEMPLEADOHORARIO)) $criteria->add(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $this->idempleadohorario);
        if ($this->isColumnModified(EmpleadohorarioPeer::IDEMPLEADO)) $criteria->add(EmpleadohorarioPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA)) $criteria->add(EmpleadohorarioPeer::EMPLEADOHORARIO_ENTRADA, $this->empleadohorario_entrada);
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA)) $criteria->add(EmpleadohorarioPeer::EMPLEADOHORARIO_SALIDA, $this->empleadohorario_salida);
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_DIA)) $criteria->add(EmpleadohorarioPeer::EMPLEADOHORARIO_DIA, $this->empleadohorario_dia);
        if ($this->isColumnModified(EmpleadohorarioPeer::EMPLEADOHORARIO_DESCANSO)) $criteria->add(EmpleadohorarioPeer::EMPLEADOHORARIO_DESCANSO, $this->empleadohorario_descanso);

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
        $criteria = new Criteria(EmpleadohorarioPeer::DATABASE_NAME);
        $criteria->add(EmpleadohorarioPeer::IDEMPLEADOHORARIO, $this->idempleadohorario);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleadohorario();
    }

    /**
     * Generic method to set the primary key (idempleadohorario column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleadohorario($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleadohorario();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleadohorario (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setEmpleadohorarioEntrada($this->getEmpleadohorarioEntrada());
        $copyObj->setEmpleadohorarioSalida($this->getEmpleadohorarioSalida());
        $copyObj->setEmpleadohorarioDia($this->getEmpleadohorarioDia());
        $copyObj->setEmpleadohorarioDescanso($this->getEmpleadohorarioDescanso());

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
            $copyObj->setIdempleadohorario(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empleadohorario Clone of current object.
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
     * @return EmpleadohorarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadohorarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Empleadohorario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addEmpleadohorario($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addEmpleadohorarios($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleadohorario = null;
        $this->idempleado = null;
        $this->empleadohorario_entrada = null;
        $this->empleadohorario_salida = null;
        $this->empleadohorario_dia = null;
        $this->empleadohorario_descanso = null;
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
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadohorarioPeer::DEFAULT_STRING_FORMAT);
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
