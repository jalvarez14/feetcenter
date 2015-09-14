<?php


/**
 * Base class that represents a row from the 'compra' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseCompra extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CompraPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CompraPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcompra field.
     * @var        int
     */
    protected $idcompra;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the compra_creadaen field.
     * @var        string
     */
    protected $compra_creadaen;

    /**
     * The value for the compra_fecha field.
     * @var        string
     */
    protected $compra_fecha;

    /**
     * The value for the compra_importe field.
     * @var        string
     */
    protected $compra_importe;

    /**
     * The value for the compra_status field.
     * @var        string
     */
    protected $compra_status;

    /**
     * The value for the compra_pagaren field.
     * @var        string
     */
    protected $compra_pagaren;

    /**
     * The value for the compra_comprobante field.
     * @var        string
     */
    protected $compra_comprobante;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

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
     * Get the [idcompra] column value.
     *
     * @return int
     */
    public function getIdcompra()
    {

        return $this->idcompra;
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
     * Get the [idproveedor] column value.
     *
     * @return int
     */
    public function getIdproveedor()
    {

        return $this->idproveedor;
    }

    /**
     * Get the [optionally formatted] temporal [compra_creadaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraCreadaen($format = 'Y-m-d H:i:s')
    {
        if ($this->compra_creadaen === null) {
            return null;
        }

        if ($this->compra_creadaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_creadaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_creadaen, true), $x);
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
     * Get the [optionally formatted] temporal [compra_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFecha($format = '%x')
    {
        if ($this->compra_fecha === null) {
            return null;
        }

        if ($this->compra_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fecha, true), $x);
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
     * Get the [compra_importe] column value.
     *
     * @return string
     */
    public function getCompraImporte()
    {

        return $this->compra_importe;
    }

    /**
     * Get the [compra_status] column value.
     *
     * @return string
     */
    public function getCompraStatus()
    {

        return $this->compra_status;
    }

    /**
     * Get the [optionally formatted] temporal [compra_pagaren] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraPagaren($format = '%x')
    {
        if ($this->compra_pagaren === null) {
            return null;
        }

        if ($this->compra_pagaren === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_pagaren);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_pagaren, true), $x);
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
     * Get the [compra_comprobante] column value.
     *
     * @return string
     */
    public function getCompraComprobante()
    {

        return $this->compra_comprobante;
    }

    /**
     * Set the value of [idcompra] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdcompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcompra !== $v) {
            $this->idcompra = $v;
            $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        }


        return $this;
    } // setIdcompra()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = CompraPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = CompraPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Sets the value of [compra_creadaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraCreadaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_creadaen !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_creadaen !== null && $tmpDt = new DateTime($this->compra_creadaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_creadaen = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_CREADAEN;
            }
        } // if either are not null


        return $this;
    } // setCompraCreadaen()

    /**
     * Sets the value of [compra_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fecha !== null && $tmpDt = new DateTime($this->compra_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fecha = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setCompraFecha()

    /**
     * Set the value of [compra_importe] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraImporte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_importe !== $v) {
            $this->compra_importe = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_IMPORTE;
        }


        return $this;
    } // setCompraImporte()

    /**
     * Set the value of [compra_status] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_status !== $v) {
            $this->compra_status = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_STATUS;
        }


        return $this;
    } // setCompraStatus()

    /**
     * Sets the value of [compra_pagaren] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraPagaren($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_pagaren !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_pagaren !== null && $tmpDt = new DateTime($this->compra_pagaren)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_pagaren = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_PAGAREN;
            }
        } // if either are not null


        return $this;
    } // setCompraPagaren()

    /**
     * Set the value of [compra_comprobante] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_comprobante !== $v) {
            $this->compra_comprobante = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_COMPROBANTE;
        }


        return $this;
    } // setCompraComprobante()

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

            $this->idcompra = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproveedor = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->compra_creadaen = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->compra_fecha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->compra_importe = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->compra_status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->compra_pagaren = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->compra_comprobante = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CompraPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Compra object", $e);
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
        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CompraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
            $this->aProveedor = null;
            $this->collCompradetalles = null;

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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CompraQuery::create()
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CompraPeer::addInstanceToPool($this);
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

            if ($this->aProveedor !== null) {
                if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
                    $affectedRows += $this->aProveedor->save($con);
                }
                $this->setProveedor($this->aProveedor);
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

        $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        if (null !== $this->idcompra) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CompraPeer::IDCOMPRA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idcompra`';
        }
        if ($this->isColumnModified(CompraPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_CREADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`compra_creadaen`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fecha`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_IMPORTE)) {
            $modifiedColumns[':p' . $index++]  = '`compra_importe`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`compra_status`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_PAGAREN)) {
            $modifiedColumns[':p' . $index++]  = '`compra_pagaren`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`compra_comprobante`';
        }

        $sql = sprintf(
            'INSERT INTO `compra` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcompra`':
                        $stmt->bindValue($identifier, $this->idcompra, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`compra_creadaen`':
                        $stmt->bindValue($identifier, $this->compra_creadaen, PDO::PARAM_STR);
                        break;
                    case '`compra_fecha`':
                        $stmt->bindValue($identifier, $this->compra_fecha, PDO::PARAM_STR);
                        break;
                    case '`compra_importe`':
                        $stmt->bindValue($identifier, $this->compra_importe, PDO::PARAM_STR);
                        break;
                    case '`compra_status`':
                        $stmt->bindValue($identifier, $this->compra_status, PDO::PARAM_STR);
                        break;
                    case '`compra_pagaren`':
                        $stmt->bindValue($identifier, $this->compra_pagaren, PDO::PARAM_STR);
                        break;
                    case '`compra_comprobante`':
                        $stmt->bindValue($identifier, $this->compra_comprobante, PDO::PARAM_STR);
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
        $this->setIdcompra($pk);

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

            if ($this->aProveedor !== null) {
                if (!$this->aProveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
                }
            }


            if (($retval = CompraPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcompra();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getIdproveedor();
                break;
            case 3:
                return $this->getCompraCreadaen();
                break;
            case 4:
                return $this->getCompraFecha();
                break;
            case 5:
                return $this->getCompraImporte();
                break;
            case 6:
                return $this->getCompraStatus();
                break;
            case 7:
                return $this->getCompraPagaren();
                break;
            case 8:
                return $this->getCompraComprobante();
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
        if (isset($alreadyDumpedObjects['Compra'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Compra'][$this->getPrimaryKey()] = true;
        $keys = CompraPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcompra(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getIdproveedor(),
            $keys[3] => $this->getCompraCreadaen(),
            $keys[4] => $this->getCompraFecha(),
            $keys[5] => $this->getCompraImporte(),
            $keys[6] => $this->getCompraStatus(),
            $keys[7] => $this->getCompraPagaren(),
            $keys[8] => $this->getCompraComprobante(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcompra($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setIdproveedor($value);
                break;
            case 3:
                $this->setCompraCreadaen($value);
                break;
            case 4:
                $this->setCompraFecha($value);
                break;
            case 5:
                $this->setCompraImporte($value);
                break;
            case 6:
                $this->setCompraStatus($value);
                break;
            case 7:
                $this->setCompraPagaren($value);
                break;
            case 8:
                $this->setCompraComprobante($value);
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
        $keys = CompraPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcompra($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproveedor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCompraCreadaen($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCompraFecha($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCompraImporte($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCompraStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCompraPagaren($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCompraComprobante($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);

        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);
        if ($this->isColumnModified(CompraPeer::IDEMPLEADO)) $criteria->add(CompraPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) $criteria->add(CompraPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(CompraPeer::COMPRA_CREADAEN)) $criteria->add(CompraPeer::COMPRA_CREADAEN, $this->compra_creadaen);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHA)) $criteria->add(CompraPeer::COMPRA_FECHA, $this->compra_fecha);
        if ($this->isColumnModified(CompraPeer::COMPRA_IMPORTE)) $criteria->add(CompraPeer::COMPRA_IMPORTE, $this->compra_importe);
        if ($this->isColumnModified(CompraPeer::COMPRA_STATUS)) $criteria->add(CompraPeer::COMPRA_STATUS, $this->compra_status);
        if ($this->isColumnModified(CompraPeer::COMPRA_PAGAREN)) $criteria->add(CompraPeer::COMPRA_PAGAREN, $this->compra_pagaren);
        if ($this->isColumnModified(CompraPeer::COMPRA_COMPROBANTE)) $criteria->add(CompraPeer::COMPRA_COMPROBANTE, $this->compra_comprobante);

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
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);
        $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcompra();
    }

    /**
     * Generic method to set the primary key (idcompra column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcompra($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcompra();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Compra (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setCompraCreadaen($this->getCompraCreadaen());
        $copyObj->setCompraFecha($this->getCompraFecha());
        $copyObj->setCompraImporte($this->getCompraImporte());
        $copyObj->setCompraStatus($this->getCompraStatus());
        $copyObj->setCompraPagaren($this->getCompraPagaren());
        $copyObj->setCompraComprobante($this->getCompraComprobante());

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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcompra(NULL); // this is a auto-increment column, so set to default value
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
     * @return Compra Clone of current object.
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
     * @return CompraPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CompraPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aEmpleado->addCompras($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Compra The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProveedor(Proveedor $v = null)
    {
        if ($v === null) {
            $this->setIdproveedor(NULL);
        } else {
            $this->setIdproveedor($v->getIdproveedor());
        }

        $this->aProveedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Proveedor object, it will not be re-added.
        if ($v !== null) {
            $v->addCompra($this);
        }


        return $this;
    }


    /**
     * Get the associated Proveedor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Proveedor The associated Proveedor object.
     * @throws PropelException
     */
    public function getProveedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProveedor === null && ($this->idproveedor !== null) && $doQuery) {
            $this->aProveedor = ProveedorQuery::create()->findPk($this->idproveedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProveedor->addCompras($this);
             */
        }

        return $this->aProveedor;
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
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Compra The current object (for fluent API support)
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
     * If this Compra is new, it will return
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
                    ->filterByCompra($this)
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
     * @return Compra The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setCompra(null);
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
                ->filterByCompra($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Compra The current object (for fluent API support)
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
        $compradetalle->setCompra($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Compra The current object (for fluent API support)
     */
    public function removeCompradetalle($compradetalle)
    {
        if ($this->getCompradetalles()->contains($compradetalle)) {
            $this->collCompradetalles->remove($this->collCompradetalles->search($compradetalle));
            if (null === $this->compradetallesScheduledForDeletion) {
                $this->compradetallesScheduledForDeletion = clone $this->collCompradetalles;
                $this->compradetallesScheduledForDeletion->clear();
            }
            $this->compradetallesScheduledForDeletion[]= clone $compradetalle;
            $compradetalle->setCompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinInsumoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Insumoclinica', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcompra = null;
        $this->idempleado = null;
        $this->idproveedor = null;
        $this->compra_creadaen = null;
        $this->compra_fecha = null;
        $this->compra_importe = null;
        $this->compra_status = null;
        $this->compra_pagaren = null;
        $this->compra_comprobante = null;
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
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        $this->aEmpleado = null;
        $this->aProveedor = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CompraPeer::DEFAULT_STRING_FORMAT);
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
