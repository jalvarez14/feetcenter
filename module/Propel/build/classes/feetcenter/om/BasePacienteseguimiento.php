<?php


/**
 * Base class that represents a row from the 'pacienteseguimiento' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BasePacienteseguimiento extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PacienteseguimientoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PacienteseguimientoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpacienteseguimiento field.
     * @var        int
     */
    protected $idpacienteseguimiento;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the idcanalcomunicacion field.
     * @var        int
     */
    protected $idcanalcomunicacion;

    /**
     * The value for the pacienteseguimiento_fechacreacion field.
     * @var        string
     */
    protected $pacienteseguimiento_fechacreacion;

    /**
     * The value for the pacienteseguimiento_comentario field.
     * @var        string
     */
    protected $pacienteseguimiento_comentario;

    /**
     * The value for the pacienteseguimiento_fecha field.
     * @var        string
     */
    protected $pacienteseguimiento_fecha;

    /**
     * @var        Canalcomunicacion
     */
    protected $aCanalcomunicacion;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

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
     * Get the [idpacienteseguimiento] column value.
     *
     * @return int
     */
    public function getIdpacienteseguimiento()
    {

        return $this->idpacienteseguimiento;
    }

    /**
     * Get the [idpaciente] column value.
     *
     * @return int
     */
    public function getIdpaciente()
    {

        return $this->idpaciente;
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
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

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
     * Get the [optionally formatted] temporal [pacienteseguimiento_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPacienteseguimientoFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->pacienteseguimiento_fechacreacion === null) {
            return null;
        }

        if ($this->pacienteseguimiento_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pacienteseguimiento_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pacienteseguimiento_fechacreacion, true), $x);
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
     * Get the [pacienteseguimiento_comentario] column value.
     *
     * @return string
     */
    public function getPacienteseguimientoComentario()
    {

        return $this->pacienteseguimiento_comentario;
    }

    /**
     * Get the [optionally formatted] temporal [pacienteseguimiento_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPacienteseguimientoFecha($format = '%x')
    {
        if ($this->pacienteseguimiento_fecha === null) {
            return null;
        }

        if ($this->pacienteseguimiento_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pacienteseguimiento_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pacienteseguimiento_fecha, true), $x);
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
     * Set the value of [idpacienteseguimiento] column.
     *
     * @param  int $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setIdpacienteseguimiento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpacienteseguimiento !== $v) {
            $this->idpacienteseguimiento = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO;
        }


        return $this;
    } // setIdpacienteseguimiento()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [idcanalcomunicacion] column.
     *
     * @param  int $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setIdcanalcomunicacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcanalcomunicacion !== $v) {
            $this->idcanalcomunicacion = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::IDCANALCOMUNICACION;
        }

        if ($this->aCanalcomunicacion !== null && $this->aCanalcomunicacion->getIdcanalcomunicacion() !== $v) {
            $this->aCanalcomunicacion = null;
        }


        return $this;
    } // setIdcanalcomunicacion()

    /**
     * Sets the value of [pacienteseguimiento_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setPacienteseguimientoFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pacienteseguimiento_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->pacienteseguimiento_fechacreacion !== null && $tmpDt = new DateTime($this->pacienteseguimiento_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pacienteseguimiento_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setPacienteseguimientoFechacreacion()

    /**
     * Set the value of [pacienteseguimiento_comentario] column.
     *
     * @param  string $v new value
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setPacienteseguimientoComentario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacienteseguimiento_comentario !== $v) {
            $this->pacienteseguimiento_comentario = $v;
            $this->modifiedColumns[] = PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO;
        }


        return $this;
    } // setPacienteseguimientoComentario()

    /**
     * Sets the value of [pacienteseguimiento_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pacienteseguimiento The current object (for fluent API support)
     */
    public function setPacienteseguimientoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pacienteseguimiento_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->pacienteseguimiento_fecha !== null && $tmpDt = new DateTime($this->pacienteseguimiento_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pacienteseguimiento_fecha = $newDateAsString;
                $this->modifiedColumns[] = PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setPacienteseguimientoFecha()

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

            $this->idpacienteseguimiento = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idempleado = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idcanalcomunicacion = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->pacienteseguimiento_fechacreacion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pacienteseguimiento_comentario = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pacienteseguimiento_fecha = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = PacienteseguimientoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pacienteseguimiento object", $e);
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

        if ($this->aPaciente !== null && $this->idpaciente !== $this->aPaciente->getIdpaciente()) {
            $this->aPaciente = null;
        }
        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
        }
        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
        }
        if ($this->aCanalcomunicacion !== null && $this->idcanalcomunicacion !== $this->aCanalcomunicacion->getIdcanalcomunicacion()) {
            $this->aCanalcomunicacion = null;
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
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PacienteseguimientoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCanalcomunicacion = null;
            $this->aClinica = null;
            $this->aEmpleado = null;
            $this->aPaciente = null;
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
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PacienteseguimientoQuery::create()
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
            $con = Propel::getConnection(PacienteseguimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PacienteseguimientoPeer::addInstanceToPool($this);
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

            if ($this->aCanalcomunicacion !== null) {
                if ($this->aCanalcomunicacion->isModified() || $this->aCanalcomunicacion->isNew()) {
                    $affectedRows += $this->aCanalcomunicacion->save($con);
                }
                $this->setCanalcomunicacion($this->aCanalcomunicacion);
            }

            if ($this->aClinica !== null) {
                if ($this->aClinica->isModified() || $this->aClinica->isNew()) {
                    $affectedRows += $this->aClinica->save($con);
                }
                $this->setClinica($this->aClinica);
            }

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
            }

            if ($this->aPaciente !== null) {
                if ($this->aPaciente->isModified() || $this->aPaciente->isNew()) {
                    $affectedRows += $this->aPaciente->save($con);
                }
                $this->setPaciente($this->aPaciente);
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

        $this->modifiedColumns[] = PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO;
        if (null !== $this->idpacienteseguimiento) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`idpacienteseguimiento`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::IDCANALCOMUNICACION)) {
            $modifiedColumns[':p' . $index++]  = '`idcanalcomunicacion`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`pacienteseguimiento_fechacreacion`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO)) {
            $modifiedColumns[':p' . $index++]  = '`pacienteseguimiento_comentario`';
        }
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`pacienteseguimiento_fecha`';
        }

        $sql = sprintf(
            'INSERT INTO `pacienteseguimiento` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpacienteseguimiento`':
                        $stmt->bindValue($identifier, $this->idpacienteseguimiento, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`idcanalcomunicacion`':
                        $stmt->bindValue($identifier, $this->idcanalcomunicacion, PDO::PARAM_INT);
                        break;
                    case '`pacienteseguimiento_fechacreacion`':
                        $stmt->bindValue($identifier, $this->pacienteseguimiento_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`pacienteseguimiento_comentario`':
                        $stmt->bindValue($identifier, $this->pacienteseguimiento_comentario, PDO::PARAM_STR);
                        break;
                    case '`pacienteseguimiento_fecha`':
                        $stmt->bindValue($identifier, $this->pacienteseguimiento_fecha, PDO::PARAM_STR);
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
        $this->setIdpacienteseguimiento($pk);

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

            if ($this->aCanalcomunicacion !== null) {
                if (!$this->aCanalcomunicacion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCanalcomunicacion->getValidationFailures());
                }
            }

            if ($this->aClinica !== null) {
                if (!$this->aClinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClinica->getValidationFailures());
                }
            }

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = PacienteseguimientoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PacienteseguimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpacienteseguimiento();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getIdclinica();
                break;
            case 3:
                return $this->getIdempleado();
                break;
            case 4:
                return $this->getIdcanalcomunicacion();
                break;
            case 5:
                return $this->getPacienteseguimientoFechacreacion();
                break;
            case 6:
                return $this->getPacienteseguimientoComentario();
                break;
            case 7:
                return $this->getPacienteseguimientoFecha();
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
        if (isset($alreadyDumpedObjects['Pacienteseguimiento'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pacienteseguimiento'][$this->getPrimaryKey()] = true;
        $keys = PacienteseguimientoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpacienteseguimiento(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getIdclinica(),
            $keys[3] => $this->getIdempleado(),
            $keys[4] => $this->getIdcanalcomunicacion(),
            $keys[5] => $this->getPacienteseguimientoFechacreacion(),
            $keys[6] => $this->getPacienteseguimientoComentario(),
            $keys[7] => $this->getPacienteseguimientoFecha(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCanalcomunicacion) {
                $result['Canalcomunicacion'] = $this->aCanalcomunicacion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = PacienteseguimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpacienteseguimiento($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setIdclinica($value);
                break;
            case 3:
                $this->setIdempleado($value);
                break;
            case 4:
                $this->setIdcanalcomunicacion($value);
                break;
            case 5:
                $this->setPacienteseguimientoFechacreacion($value);
                break;
            case 6:
                $this->setPacienteseguimientoComentario($value);
                break;
            case 7:
                $this->setPacienteseguimientoFecha($value);
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
        $keys = PacienteseguimientoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpacienteseguimiento($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdempleado($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdcanalcomunicacion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPacienteseguimientoFechacreacion($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPacienteseguimientoComentario($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPacienteseguimientoFecha($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO)) $criteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $this->idpacienteseguimiento);
        if ($this->isColumnModified(PacienteseguimientoPeer::IDPACIENTE)) $criteria->add(PacienteseguimientoPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(PacienteseguimientoPeer::IDCLINICA)) $criteria->add(PacienteseguimientoPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(PacienteseguimientoPeer::IDEMPLEADO)) $criteria->add(PacienteseguimientoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(PacienteseguimientoPeer::IDCANALCOMUNICACION)) $criteria->add(PacienteseguimientoPeer::IDCANALCOMUNICACION, $this->idcanalcomunicacion);
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION)) $criteria->add(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHACREACION, $this->pacienteseguimiento_fechacreacion);
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO)) $criteria->add(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_COMENTARIO, $this->pacienteseguimiento_comentario);
        if ($this->isColumnModified(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA)) $criteria->add(PacienteseguimientoPeer::PACIENTESEGUIMIENTO_FECHA, $this->pacienteseguimiento_fecha);

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
        $criteria = new Criteria(PacienteseguimientoPeer::DATABASE_NAME);
        $criteria->add(PacienteseguimientoPeer::IDPACIENTESEGUIMIENTO, $this->idpacienteseguimiento);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpacienteseguimiento();
    }

    /**
     * Generic method to set the primary key (idpacienteseguimiento column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpacienteseguimiento($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpacienteseguimiento();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pacienteseguimiento (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setIdcanalcomunicacion($this->getIdcanalcomunicacion());
        $copyObj->setPacienteseguimientoFechacreacion($this->getPacienteseguimientoFechacreacion());
        $copyObj->setPacienteseguimientoComentario($this->getPacienteseguimientoComentario());
        $copyObj->setPacienteseguimientoFecha($this->getPacienteseguimientoFecha());

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
            $copyObj->setIdpacienteseguimiento(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pacienteseguimiento Clone of current object.
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
     * @return PacienteseguimientoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PacienteseguimientoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Canalcomunicacion object.
     *
     * @param                  Canalcomunicacion $v
     * @return Pacienteseguimiento The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCanalcomunicacion(Canalcomunicacion $v = null)
    {
        if ($v === null) {
            $this->setIdcanalcomunicacion(NULL);
        } else {
            $this->setIdcanalcomunicacion($v->getIdcanalcomunicacion());
        }

        $this->aCanalcomunicacion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Canalcomunicacion object, it will not be re-added.
        if ($v !== null) {
            $v->addPacienteseguimiento($this);
        }


        return $this;
    }


    /**
     * Get the associated Canalcomunicacion object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Canalcomunicacion The associated Canalcomunicacion object.
     * @throws PropelException
     */
    public function getCanalcomunicacion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCanalcomunicacion === null && ($this->idcanalcomunicacion !== null) && $doQuery) {
            $this->aCanalcomunicacion = CanalcomunicacionQuery::create()->findPk($this->idcanalcomunicacion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCanalcomunicacion->addPacienteseguimientos($this);
             */
        }

        return $this->aCanalcomunicacion;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Pacienteseguimiento The current object (for fluent API support)
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
            $v->addPacienteseguimiento($this);
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
                $this->aClinica->addPacienteseguimientos($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Pacienteseguimiento The current object (for fluent API support)
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
            $v->addPacienteseguimiento($this);
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
                $this->aEmpleado->addPacienteseguimientos($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Pacienteseguimiento The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPaciente(Paciente $v = null)
    {
        if ($v === null) {
            $this->setIdpaciente(NULL);
        } else {
            $this->setIdpaciente($v->getIdpaciente());
        }

        $this->aPaciente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Paciente object, it will not be re-added.
        if ($v !== null) {
            $v->addPacienteseguimiento($this);
        }


        return $this;
    }


    /**
     * Get the associated Paciente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paciente The associated Paciente object.
     * @throws PropelException
     */
    public function getPaciente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaciente === null && ($this->idpaciente !== null) && $doQuery) {
            $this->aPaciente = PacienteQuery::create()->findPk($this->idpaciente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPaciente->addPacienteseguimientos($this);
             */
        }

        return $this->aPaciente;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpacienteseguimiento = null;
        $this->idpaciente = null;
        $this->idclinica = null;
        $this->idempleado = null;
        $this->idcanalcomunicacion = null;
        $this->pacienteseguimiento_fechacreacion = null;
        $this->pacienteseguimiento_comentario = null;
        $this->pacienteseguimiento_fecha = null;
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
            if ($this->aCanalcomunicacion instanceof Persistent) {
              $this->aCanalcomunicacion->clearAllReferences($deep);
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCanalcomunicacion = null;
        $this->aClinica = null;
        $this->aEmpleado = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PacienteseguimientoPeer::DEFAULT_STRING_FORMAT);
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
