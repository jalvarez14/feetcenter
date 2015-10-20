<?php


/**
 * Base class that represents a row from the 'visitadetalle' table.
 *
 *
 *
 * @package    propel.generator.feetcenter.om
 */
abstract class BaseVisitadetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VisitadetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VisitadetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idvisitadetalle field.
     * @var        int
     */
    protected $idvisitadetalle;

    /**
     * The value for the idvisita field.
     * @var        int
     */
    protected $idvisita;

    /**
     * The value for the idproductoclinica field.
     * @var        int
     */
    protected $idproductoclinica;

    /**
     * The value for the idservicioclinica field.
     * @var        int
     */
    protected $idservicioclinica;

    /**
     * The value for the idmembresia field.
     * @var        int
     */
    protected $idmembresia;

    /**
     * The value for the visitadetalle_cargo field.
     * @var        string
     */
    protected $visitadetalle_cargo;

    /**
     * The value for the visitadetalle_preciounitario field.
     * @var        string
     */
    protected $visitadetalle_preciounitario;

    /**
     * The value for the visitadetalle_cantidad field.
     * @var        string
     */
    protected $visitadetalle_cantidad;

    /**
     * The value for the visitadetalle_subtotal field.
     * @var        string
     */
    protected $visitadetalle_subtotal;

    /**
     * @var        Membresia
     */
    protected $aMembresia;

    /**
     * @var        Productoclinica
     */
    protected $aProductoclinica;

    /**
     * @var        Servicioclinica
     */
    protected $aServicioclinica;

    /**
     * @var        Visita
     */
    protected $aVisita;

    /**
     * @var        PropelObjectCollection|Pacientemembresiadetalle[] Collection to store aggregation of Pacientemembresiadetalle objects.
     */
    protected $collPacientemembresiadetalles;
    protected $collPacientemembresiadetallesPartial;

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
    protected $pacientemembresiadetallesScheduledForDeletion = null;

    /**
     * Get the [idvisitadetalle] column value.
     *
     * @return int
     */
    public function getIdvisitadetalle()
    {

        return $this->idvisitadetalle;
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
     * Get the [idproductoclinica] column value.
     *
     * @return int
     */
    public function getIdproductoclinica()
    {

        return $this->idproductoclinica;
    }

    /**
     * Get the [idservicioclinica] column value.
     *
     * @return int
     */
    public function getIdservicioclinica()
    {

        return $this->idservicioclinica;
    }

    /**
     * Get the [idmembresia] column value.
     *
     * @return int
     */
    public function getIdmembresia()
    {

        return $this->idmembresia;
    }

    /**
     * Get the [visitadetalle_cargo] column value.
     *
     * @return string
     */
    public function getVisitadetalleCargo()
    {

        return $this->visitadetalle_cargo;
    }

    /**
     * Get the [visitadetalle_preciounitario] column value.
     *
     * @return string
     */
    public function getVisitadetallePreciounitario()
    {

        return $this->visitadetalle_preciounitario;
    }

    /**
     * Get the [visitadetalle_cantidad] column value.
     *
     * @return string
     */
    public function getVisitadetalleCantidad()
    {

        return $this->visitadetalle_cantidad;
    }

    /**
     * Get the [visitadetalle_subtotal] column value.
     *
     * @return string
     */
    public function getVisitadetalleSubtotal()
    {

        return $this->visitadetalle_subtotal;
    }

    /**
     * Set the value of [idvisitadetalle] column.
     *
     * @param  int $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setIdvisitadetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idvisitadetalle !== $v) {
            $this->idvisitadetalle = $v;
            $this->modifiedColumns[] = VisitadetallePeer::IDVISITADETALLE;
        }


        return $this;
    } // setIdvisitadetalle()

    /**
     * Set the value of [idvisita] column.
     *
     * @param  int $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setIdvisita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idvisita !== $v) {
            $this->idvisita = $v;
            $this->modifiedColumns[] = VisitadetallePeer::IDVISITA;
        }

        if ($this->aVisita !== null && $this->aVisita->getIdvisita() !== $v) {
            $this->aVisita = null;
        }


        return $this;
    } // setIdvisita()

    /**
     * Set the value of [idproductoclinica] column.
     *
     * @param  int $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setIdproductoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductoclinica !== $v) {
            $this->idproductoclinica = $v;
            $this->modifiedColumns[] = VisitadetallePeer::IDPRODUCTOCLINICA;
        }

        if ($this->aProductoclinica !== null && $this->aProductoclinica->getIdproductoclinica() !== $v) {
            $this->aProductoclinica = null;
        }


        return $this;
    } // setIdproductoclinica()

    /**
     * Set the value of [idservicioclinica] column.
     *
     * @param  int $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setIdservicioclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicioclinica !== $v) {
            $this->idservicioclinica = $v;
            $this->modifiedColumns[] = VisitadetallePeer::IDSERVICIOCLINICA;
        }

        if ($this->aServicioclinica !== null && $this->aServicioclinica->getIdservicioclinica() !== $v) {
            $this->aServicioclinica = null;
        }


        return $this;
    } // setIdservicioclinica()

    /**
     * Set the value of [idmembresia] column.
     *
     * @param  int $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setIdmembresia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmembresia !== $v) {
            $this->idmembresia = $v;
            $this->modifiedColumns[] = VisitadetallePeer::IDMEMBRESIA;
        }

        if ($this->aMembresia !== null && $this->aMembresia->getIdmembresia() !== $v) {
            $this->aMembresia = null;
        }


        return $this;
    } // setIdmembresia()

    /**
     * Set the value of [visitadetalle_cargo] column.
     *
     * @param  string $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setVisitadetalleCargo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visitadetalle_cargo !== $v) {
            $this->visitadetalle_cargo = $v;
            $this->modifiedColumns[] = VisitadetallePeer::VISITADETALLE_CARGO;
        }


        return $this;
    } // setVisitadetalleCargo()

    /**
     * Set the value of [visitadetalle_preciounitario] column.
     *
     * @param  string $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setVisitadetallePreciounitario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visitadetalle_preciounitario !== $v) {
            $this->visitadetalle_preciounitario = $v;
            $this->modifiedColumns[] = VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO;
        }


        return $this;
    } // setVisitadetallePreciounitario()

    /**
     * Set the value of [visitadetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setVisitadetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visitadetalle_cantidad !== $v) {
            $this->visitadetalle_cantidad = $v;
            $this->modifiedColumns[] = VisitadetallePeer::VISITADETALLE_CANTIDAD;
        }


        return $this;
    } // setVisitadetalleCantidad()

    /**
     * Set the value of [visitadetalle_subtotal] column.
     *
     * @param  string $v new value
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setVisitadetalleSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visitadetalle_subtotal !== $v) {
            $this->visitadetalle_subtotal = $v;
            $this->modifiedColumns[] = VisitadetallePeer::VISITADETALLE_SUBTOTAL;
        }


        return $this;
    } // setVisitadetalleSubtotal()

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

            $this->idvisitadetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idvisita = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproductoclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idservicioclinica = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idmembresia = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->visitadetalle_cargo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->visitadetalle_preciounitario = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->visitadetalle_cantidad = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->visitadetalle_subtotal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = VisitadetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Visitadetalle object", $e);
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
        if ($this->aProductoclinica !== null && $this->idproductoclinica !== $this->aProductoclinica->getIdproductoclinica()) {
            $this->aProductoclinica = null;
        }
        if ($this->aServicioclinica !== null && $this->idservicioclinica !== $this->aServicioclinica->getIdservicioclinica()) {
            $this->aServicioclinica = null;
        }
        if ($this->aMembresia !== null && $this->idmembresia !== $this->aMembresia->getIdmembresia()) {
            $this->aMembresia = null;
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
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VisitadetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMembresia = null;
            $this->aProductoclinica = null;
            $this->aServicioclinica = null;
            $this->aVisita = null;
            $this->collPacientemembresiadetalles = null;

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
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VisitadetalleQuery::create()
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
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VisitadetallePeer::addInstanceToPool($this);
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

            if ($this->aMembresia !== null) {
                if ($this->aMembresia->isModified() || $this->aMembresia->isNew()) {
                    $affectedRows += $this->aMembresia->save($con);
                }
                $this->setMembresia($this->aMembresia);
            }

            if ($this->aProductoclinica !== null) {
                if ($this->aProductoclinica->isModified() || $this->aProductoclinica->isNew()) {
                    $affectedRows += $this->aProductoclinica->save($con);
                }
                $this->setProductoclinica($this->aProductoclinica);
            }

            if ($this->aServicioclinica !== null) {
                if ($this->aServicioclinica->isModified() || $this->aServicioclinica->isNew()) {
                    $affectedRows += $this->aServicioclinica->save($con);
                }
                $this->setServicioclinica($this->aServicioclinica);
            }

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

            if ($this->pacientemembresiadetallesScheduledForDeletion !== null) {
                if (!$this->pacientemembresiadetallesScheduledForDeletion->isEmpty()) {
                    PacientemembresiadetalleQuery::create()
                        ->filterByPrimaryKeys($this->pacientemembresiadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientemembresiadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPacientemembresiadetalles !== null) {
                foreach ($this->collPacientemembresiadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = VisitadetallePeer::IDVISITADETALLE;
        if (null !== $this->idvisitadetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VisitadetallePeer::IDVISITADETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VisitadetallePeer::IDVISITADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idvisitadetalle`';
        }
        if ($this->isColumnModified(VisitadetallePeer::IDVISITA)) {
            $modifiedColumns[':p' . $index++]  = '`idvisita`';
        }
        if ($this->isColumnModified(VisitadetallePeer::IDPRODUCTOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idproductoclinica`';
        }
        if ($this->isColumnModified(VisitadetallePeer::IDSERVICIOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idservicioclinica`';
        }
        if ($this->isColumnModified(VisitadetallePeer::IDMEMBRESIA)) {
            $modifiedColumns[':p' . $index++]  = '`idmembresia`';
        }
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_CARGO)) {
            $modifiedColumns[':p' . $index++]  = '`visitadetalle_cargo`';
        }
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO)) {
            $modifiedColumns[':p' . $index++]  = '`visitadetalle_preciounitario`';
        }
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`visitadetalle_cantidad`';
        }
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`visitadetalle_subtotal`';
        }

        $sql = sprintf(
            'INSERT INTO `visitadetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idvisitadetalle`':
                        $stmt->bindValue($identifier, $this->idvisitadetalle, PDO::PARAM_INT);
                        break;
                    case '`idvisita`':
                        $stmt->bindValue($identifier, $this->idvisita, PDO::PARAM_INT);
                        break;
                    case '`idproductoclinica`':
                        $stmt->bindValue($identifier, $this->idproductoclinica, PDO::PARAM_INT);
                        break;
                    case '`idservicioclinica`':
                        $stmt->bindValue($identifier, $this->idservicioclinica, PDO::PARAM_INT);
                        break;
                    case '`idmembresia`':
                        $stmt->bindValue($identifier, $this->idmembresia, PDO::PARAM_INT);
                        break;
                    case '`visitadetalle_cargo`':
                        $stmt->bindValue($identifier, $this->visitadetalle_cargo, PDO::PARAM_STR);
                        break;
                    case '`visitadetalle_preciounitario`':
                        $stmt->bindValue($identifier, $this->visitadetalle_preciounitario, PDO::PARAM_STR);
                        break;
                    case '`visitadetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->visitadetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`visitadetalle_subtotal`':
                        $stmt->bindValue($identifier, $this->visitadetalle_subtotal, PDO::PARAM_STR);
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
        $this->setIdvisitadetalle($pk);

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

            if ($this->aMembresia !== null) {
                if (!$this->aMembresia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMembresia->getValidationFailures());
                }
            }

            if ($this->aProductoclinica !== null) {
                if (!$this->aProductoclinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductoclinica->getValidationFailures());
                }
            }

            if ($this->aServicioclinica !== null) {
                if (!$this->aServicioclinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aServicioclinica->getValidationFailures());
                }
            }

            if ($this->aVisita !== null) {
                if (!$this->aVisita->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVisita->getValidationFailures());
                }
            }


            if (($retval = VisitadetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPacientemembresiadetalles !== null) {
                    foreach ($this->collPacientemembresiadetalles as $referrerFK) {
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
        $pos = VisitadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdvisitadetalle();
                break;
            case 1:
                return $this->getIdvisita();
                break;
            case 2:
                return $this->getIdproductoclinica();
                break;
            case 3:
                return $this->getIdservicioclinica();
                break;
            case 4:
                return $this->getIdmembresia();
                break;
            case 5:
                return $this->getVisitadetalleCargo();
                break;
            case 6:
                return $this->getVisitadetallePreciounitario();
                break;
            case 7:
                return $this->getVisitadetalleCantidad();
                break;
            case 8:
                return $this->getVisitadetalleSubtotal();
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
        if (isset($alreadyDumpedObjects['Visitadetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Visitadetalle'][$this->getPrimaryKey()] = true;
        $keys = VisitadetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdvisitadetalle(),
            $keys[1] => $this->getIdvisita(),
            $keys[2] => $this->getIdproductoclinica(),
            $keys[3] => $this->getIdservicioclinica(),
            $keys[4] => $this->getIdmembresia(),
            $keys[5] => $this->getVisitadetalleCargo(),
            $keys[6] => $this->getVisitadetallePreciounitario(),
            $keys[7] => $this->getVisitadetalleCantidad(),
            $keys[8] => $this->getVisitadetalleSubtotal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMembresia) {
                $result['Membresia'] = $this->aMembresia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductoclinica) {
                $result['Productoclinica'] = $this->aProductoclinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aServicioclinica) {
                $result['Servicioclinica'] = $this->aServicioclinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVisita) {
                $result['Visita'] = $this->aVisita->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPacientemembresiadetalles) {
                $result['Pacientemembresiadetalles'] = $this->collPacientemembresiadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VisitadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdvisitadetalle($value);
                break;
            case 1:
                $this->setIdvisita($value);
                break;
            case 2:
                $this->setIdproductoclinica($value);
                break;
            case 3:
                $this->setIdservicioclinica($value);
                break;
            case 4:
                $this->setIdmembresia($value);
                break;
            case 5:
                $this->setVisitadetalleCargo($value);
                break;
            case 6:
                $this->setVisitadetallePreciounitario($value);
                break;
            case 7:
                $this->setVisitadetalleCantidad($value);
                break;
            case 8:
                $this->setVisitadetalleSubtotal($value);
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
        $keys = VisitadetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdvisitadetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdvisita($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproductoclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdservicioclinica($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdmembresia($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVisitadetalleCargo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVisitadetallePreciounitario($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVisitadetalleCantidad($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVisitadetalleSubtotal($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(VisitadetallePeer::IDVISITADETALLE)) $criteria->add(VisitadetallePeer::IDVISITADETALLE, $this->idvisitadetalle);
        if ($this->isColumnModified(VisitadetallePeer::IDVISITA)) $criteria->add(VisitadetallePeer::IDVISITA, $this->idvisita);
        if ($this->isColumnModified(VisitadetallePeer::IDPRODUCTOCLINICA)) $criteria->add(VisitadetallePeer::IDPRODUCTOCLINICA, $this->idproductoclinica);
        if ($this->isColumnModified(VisitadetallePeer::IDSERVICIOCLINICA)) $criteria->add(VisitadetallePeer::IDSERVICIOCLINICA, $this->idservicioclinica);
        if ($this->isColumnModified(VisitadetallePeer::IDMEMBRESIA)) $criteria->add(VisitadetallePeer::IDMEMBRESIA, $this->idmembresia);
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_CARGO)) $criteria->add(VisitadetallePeer::VISITADETALLE_CARGO, $this->visitadetalle_cargo);
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO)) $criteria->add(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO, $this->visitadetalle_preciounitario);
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_CANTIDAD)) $criteria->add(VisitadetallePeer::VISITADETALLE_CANTIDAD, $this->visitadetalle_cantidad);
        if ($this->isColumnModified(VisitadetallePeer::VISITADETALLE_SUBTOTAL)) $criteria->add(VisitadetallePeer::VISITADETALLE_SUBTOTAL, $this->visitadetalle_subtotal);

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
        $criteria = new Criteria(VisitadetallePeer::DATABASE_NAME);
        $criteria->add(VisitadetallePeer::IDVISITADETALLE, $this->idvisitadetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdvisitadetalle();
    }

    /**
     * Generic method to set the primary key (idvisitadetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdvisitadetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdvisitadetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Visitadetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdvisita($this->getIdvisita());
        $copyObj->setIdproductoclinica($this->getIdproductoclinica());
        $copyObj->setIdservicioclinica($this->getIdservicioclinica());
        $copyObj->setIdmembresia($this->getIdmembresia());
        $copyObj->setVisitadetalleCargo($this->getVisitadetalleCargo());
        $copyObj->setVisitadetallePreciounitario($this->getVisitadetallePreciounitario());
        $copyObj->setVisitadetalleCantidad($this->getVisitadetalleCantidad());
        $copyObj->setVisitadetalleSubtotal($this->getVisitadetalleSubtotal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPacientemembresiadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacientemembresiadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdvisitadetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Visitadetalle Clone of current object.
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
     * @return VisitadetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VisitadetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Membresia object.
     *
     * @param                  Membresia $v
     * @return Visitadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMembresia(Membresia $v = null)
    {
        if ($v === null) {
            $this->setIdmembresia(NULL);
        } else {
            $this->setIdmembresia($v->getIdmembresia());
        }

        $this->aMembresia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Membresia object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Membresia object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Membresia The associated Membresia object.
     * @throws PropelException
     */
    public function getMembresia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMembresia === null && ($this->idmembresia !== null) && $doQuery) {
            $this->aMembresia = MembresiaQuery::create()->findPk($this->idmembresia, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMembresia->addVisitadetalles($this);
             */
        }

        return $this->aMembresia;
    }

    /**
     * Declares an association between this object and a Productoclinica object.
     *
     * @param                  Productoclinica $v
     * @return Visitadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductoclinica(Productoclinica $v = null)
    {
        if ($v === null) {
            $this->setIdproductoclinica(NULL);
        } else {
            $this->setIdproductoclinica($v->getIdproductoclinica());
        }

        $this->aProductoclinica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productoclinica object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Productoclinica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productoclinica The associated Productoclinica object.
     * @throws PropelException
     */
    public function getProductoclinica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductoclinica === null && ($this->idproductoclinica !== null) && $doQuery) {
            $this->aProductoclinica = ProductoclinicaQuery::create()->findPk($this->idproductoclinica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductoclinica->addVisitadetalles($this);
             */
        }

        return $this->aProductoclinica;
    }

    /**
     * Declares an association between this object and a Servicioclinica object.
     *
     * @param                  Servicioclinica $v
     * @return Visitadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setServicioclinica(Servicioclinica $v = null)
    {
        if ($v === null) {
            $this->setIdservicioclinica(NULL);
        } else {
            $this->setIdservicioclinica($v->getIdservicioclinica());
        }

        $this->aServicioclinica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Servicioclinica object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Servicioclinica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Servicioclinica The associated Servicioclinica object.
     * @throws PropelException
     */
    public function getServicioclinica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aServicioclinica === null && ($this->idservicioclinica !== null) && $doQuery) {
            $this->aServicioclinica = ServicioclinicaQuery::create()->findPk($this->idservicioclinica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aServicioclinica->addVisitadetalles($this);
             */
        }

        return $this->aServicioclinica;
    }

    /**
     * Declares an association between this object and a Visita object.
     *
     * @param                  Visita $v
     * @return Visitadetalle The current object (for fluent API support)
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
            $v->addVisitadetalle($this);
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
                $this->aVisita->addVisitadetalles($this);
             */
        }

        return $this->aVisita;
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
        if ('Pacientemembresiadetalle' == $relationName) {
            $this->initPacientemembresiadetalles();
        }
    }

    /**
     * Clears out the collPacientemembresiadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Visitadetalle The current object (for fluent API support)
     * @see        addPacientemembresiadetalles()
     */
    public function clearPacientemembresiadetalles()
    {
        $this->collPacientemembresiadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPacientemembresiadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientemembresiadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientemembresiadetalles($v = true)
    {
        $this->collPacientemembresiadetallesPartial = $v;
    }

    /**
     * Initializes the collPacientemembresiadetalles collection.
     *
     * By default this just sets the collPacientemembresiadetalles collection to an empty array (like clearcollPacientemembresiadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientemembresiadetalles($overrideExisting = true)
    {
        if (null !== $this->collPacientemembresiadetalles && !$overrideExisting) {
            return;
        }
        $this->collPacientemembresiadetalles = new PropelObjectCollection();
        $this->collPacientemembresiadetalles->setModel('Pacientemembresiadetalle');
    }

    /**
     * Gets an array of Pacientemembresiadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Visitadetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pacientemembresiadetalle[] List of Pacientemembresiadetalle objects
     * @throws PropelException
     */
    public function getPacientemembresiadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiadetallesPartial && !$this->isNew();
        if (null === $this->collPacientemembresiadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresiadetalles) {
                // return empty collection
                $this->initPacientemembresiadetalles();
            } else {
                $collPacientemembresiadetalles = PacientemembresiadetalleQuery::create(null, $criteria)
                    ->filterByVisitadetalle($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientemembresiadetallesPartial && count($collPacientemembresiadetalles)) {
                      $this->initPacientemembresiadetalles(false);

                      foreach ($collPacientemembresiadetalles as $obj) {
                        if (false == $this->collPacientemembresiadetalles->contains($obj)) {
                          $this->collPacientemembresiadetalles->append($obj);
                        }
                      }

                      $this->collPacientemembresiadetallesPartial = true;
                    }

                    $collPacientemembresiadetalles->getInternalIterator()->rewind();

                    return $collPacientemembresiadetalles;
                }

                if ($partial && $this->collPacientemembresiadetalles) {
                    foreach ($this->collPacientemembresiadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPacientemembresiadetalles[] = $obj;
                        }
                    }
                }

                $this->collPacientemembresiadetalles = $collPacientemembresiadetalles;
                $this->collPacientemembresiadetallesPartial = false;
            }
        }

        return $this->collPacientemembresiadetalles;
    }

    /**
     * Sets a collection of Pacientemembresiadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientemembresiadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function setPacientemembresiadetalles(PropelCollection $pacientemembresiadetalles, PropelPDO $con = null)
    {
        $pacientemembresiadetallesToDelete = $this->getPacientemembresiadetalles(new Criteria(), $con)->diff($pacientemembresiadetalles);


        $this->pacientemembresiadetallesScheduledForDeletion = $pacientemembresiadetallesToDelete;

        foreach ($pacientemembresiadetallesToDelete as $pacientemembresiadetalleRemoved) {
            $pacientemembresiadetalleRemoved->setVisitadetalle(null);
        }

        $this->collPacientemembresiadetalles = null;
        foreach ($pacientemembresiadetalles as $pacientemembresiadetalle) {
            $this->addPacientemembresiadetalle($pacientemembresiadetalle);
        }

        $this->collPacientemembresiadetalles = $pacientemembresiadetalles;
        $this->collPacientemembresiadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pacientemembresiadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pacientemembresiadetalle objects.
     * @throws PropelException
     */
    public function countPacientemembresiadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiadetallesPartial && !$this->isNew();
        if (null === $this->collPacientemembresiadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresiadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientemembresiadetalles());
            }
            $query = PacientemembresiadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVisitadetalle($this)
                ->count($con);
        }

        return count($this->collPacientemembresiadetalles);
    }

    /**
     * Method called to associate a Pacientemembresiadetalle object to this object
     * through the Pacientemembresiadetalle foreign key attribute.
     *
     * @param    Pacientemembresiadetalle $l Pacientemembresiadetalle
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function addPacientemembresiadetalle(Pacientemembresiadetalle $l)
    {
        if ($this->collPacientemembresiadetalles === null) {
            $this->initPacientemembresiadetalles();
            $this->collPacientemembresiadetallesPartial = true;
        }

        if (!in_array($l, $this->collPacientemembresiadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPacientemembresiadetalle($l);

            if ($this->pacientemembresiadetallesScheduledForDeletion and $this->pacientemembresiadetallesScheduledForDeletion->contains($l)) {
                $this->pacientemembresiadetallesScheduledForDeletion->remove($this->pacientemembresiadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pacientemembresiadetalle $pacientemembresiadetalle The pacientemembresiadetalle object to add.
     */
    protected function doAddPacientemembresiadetalle($pacientemembresiadetalle)
    {
        $this->collPacientemembresiadetalles[]= $pacientemembresiadetalle;
        $pacientemembresiadetalle->setVisitadetalle($this);
    }

    /**
     * @param	Pacientemembresiadetalle $pacientemembresiadetalle The pacientemembresiadetalle object to remove.
     * @return Visitadetalle The current object (for fluent API support)
     */
    public function removePacientemembresiadetalle($pacientemembresiadetalle)
    {
        if ($this->getPacientemembresiadetalles()->contains($pacientemembresiadetalle)) {
            $this->collPacientemembresiadetalles->remove($this->collPacientemembresiadetalles->search($pacientemembresiadetalle));
            if (null === $this->pacientemembresiadetallesScheduledForDeletion) {
                $this->pacientemembresiadetallesScheduledForDeletion = clone $this->collPacientemembresiadetalles;
                $this->pacientemembresiadetallesScheduledForDeletion->clear();
            }
            $this->pacientemembresiadetallesScheduledForDeletion[]= clone $pacientemembresiadetalle;
            $pacientemembresiadetalle->setVisitadetalle(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Visitadetalle is new, it will return
     * an empty collection; or if this Visitadetalle has previously
     * been saved, it will retrieve related Pacientemembresiadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Visitadetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresiadetalle[] List of Pacientemembresiadetalle objects
     */
    public function getPacientemembresiadetallesJoinPacientemembresia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiadetalleQuery::create(null, $criteria);
        $query->joinWith('Pacientemembresia', $join_behavior);

        return $this->getPacientemembresiadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idvisitadetalle = null;
        $this->idvisita = null;
        $this->idproductoclinica = null;
        $this->idservicioclinica = null;
        $this->idmembresia = null;
        $this->visitadetalle_cargo = null;
        $this->visitadetalle_preciounitario = null;
        $this->visitadetalle_cantidad = null;
        $this->visitadetalle_subtotal = null;
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
            if ($this->collPacientemembresiadetalles) {
                foreach ($this->collPacientemembresiadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aMembresia instanceof Persistent) {
              $this->aMembresia->clearAllReferences($deep);
            }
            if ($this->aProductoclinica instanceof Persistent) {
              $this->aProductoclinica->clearAllReferences($deep);
            }
            if ($this->aServicioclinica instanceof Persistent) {
              $this->aServicioclinica->clearAllReferences($deep);
            }
            if ($this->aVisita instanceof Persistent) {
              $this->aVisita->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPacientemembresiadetalles instanceof PropelCollection) {
            $this->collPacientemembresiadetalles->clearIterator();
        }
        $this->collPacientemembresiadetalles = null;
        $this->aMembresia = null;
        $this->aProductoclinica = null;
        $this->aServicioclinica = null;
        $this->aVisita = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VisitadetallePeer::DEFAULT_STRING_FORMAT);
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
