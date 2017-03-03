<?php


/**
 * Base class that represents a row from the 'productoclinica' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProductoclinica extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductoclinicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductoclinicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproductoclinica field.
     * @var        int
     */
    protected $idproductoclinica;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the idclinica field.
     * @var        int
     */
    protected $idclinica;

    /**
     * The value for the productoclinica_existencia field.
     * @var        string
     */
    protected $productoclinica_existencia;

    /**
     * The value for the productoclinica_minimo field.
     * @var        string
     */
    protected $productoclinica_minimo;

    /**
     * The value for the productoclinica_maximo field.
     * @var        string
     */
    protected $productoclinica_maximo;

    /**
     * The value for the productoclinica_reorden field.
     * @var        string
     */
    protected $productoclinica_reorden;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Productoinventario[] Collection to store aggregation of Productoinventario objects.
     */
    protected $collProductoinventarios;
    protected $collProductoinventariosPartial;

    /**
     * @var        PropelObjectCollection|Transferenciadetalle[] Collection to store aggregation of Transferenciadetalle objects.
     */
    protected $collTransferenciadetalles;
    protected $collTransferenciadetallesPartial;

    /**
     * @var        PropelObjectCollection|Visitadetalle[] Collection to store aggregation of Visitadetalle objects.
     */
    protected $collVisitadetalles;
    protected $collVisitadetallesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productoinventariosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitadetallesScheduledForDeletion = null;

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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
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
     * Get the [productoclinica_existencia] column value.
     *
     * @return string
     */
    public function getProductoclinicaExistencia()
    {

        return $this->productoclinica_existencia;
    }

    /**
     * Get the [productoclinica_minimo] column value.
     *
     * @return string
     */
    public function getProductoclinicaMinimo()
    {

        return $this->productoclinica_minimo;
    }

    /**
     * Get the [productoclinica_maximo] column value.
     *
     * @return string
     */
    public function getProductoclinicaMaximo()
    {

        return $this->productoclinica_maximo;
    }

    /**
     * Get the [productoclinica_reorden] column value.
     *
     * @return string
     */
    public function getProductoclinicaReorden()
    {

        return $this->productoclinica_reorden;
    }

    /**
     * Set the value of [idproductoclinica] column.
     *
     * @param  int $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setIdproductoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductoclinica !== $v) {
            $this->idproductoclinica = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::IDPRODUCTOCLINICA;
        }


        return $this;
    } // setIdproductoclinica()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [productoclinica_existencia] column.
     *
     * @param  string $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setProductoclinicaExistencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productoclinica_existencia !== $v) {
            $this->productoclinica_existencia = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA;
        }


        return $this;
    } // setProductoclinicaExistencia()

    /**
     * Set the value of [productoclinica_minimo] column.
     *
     * @param  string $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setProductoclinicaMinimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productoclinica_minimo !== $v) {
            $this->productoclinica_minimo = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO;
        }


        return $this;
    } // setProductoclinicaMinimo()

    /**
     * Set the value of [productoclinica_maximo] column.
     *
     * @param  string $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setProductoclinicaMaximo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productoclinica_maximo !== $v) {
            $this->productoclinica_maximo = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO;
        }


        return $this;
    } // setProductoclinicaMaximo()

    /**
     * Set the value of [productoclinica_reorden] column.
     *
     * @param  string $v new value
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setProductoclinicaReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productoclinica_reorden !== $v) {
            $this->productoclinica_reorden = $v;
            $this->modifiedColumns[] = ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN;
        }


        return $this;
    } // setProductoclinicaReorden()

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

            $this->idproductoclinica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproducto = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->productoclinica_existencia = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->productoclinica_minimo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->productoclinica_maximo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->productoclinica_reorden = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ProductoclinicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Productoclinica object", $e);
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

        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
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
            $con = Propel::getConnection(ProductoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductoclinicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aProducto = null;
            $this->collCompradetalles = null;

            $this->collProductoinventarios = null;

            $this->collTransferenciadetalles = null;

            $this->collVisitadetalles = null;

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
            $con = Propel::getConnection(ProductoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductoclinicaQuery::create()
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
            $con = Propel::getConnection(ProductoclinicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProductoclinicaPeer::addInstanceToPool($this);
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

            if ($this->aClinica !== null) {
                if ($this->aClinica->isModified() || $this->aClinica->isNew()) {
                    $affectedRows += $this->aClinica->save($con);
                }
                $this->setClinica($this->aClinica);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
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

            if ($this->productoinventariosScheduledForDeletion !== null) {
                if (!$this->productoinventariosScheduledForDeletion->isEmpty()) {
                    ProductoinventarioQuery::create()
                        ->filterByPrimaryKeys($this->productoinventariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productoinventariosScheduledForDeletion = null;
                }
            }

            if ($this->collProductoinventarios !== null) {
                foreach ($this->collProductoinventarios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciadetallesScheduledForDeletion !== null) {
                if (!$this->transferenciadetallesScheduledForDeletion->isEmpty()) {
                    TransferenciadetalleQuery::create()
                        ->filterByPrimaryKeys($this->transferenciadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciadetalles !== null) {
                foreach ($this->collTransferenciadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->visitadetallesScheduledForDeletion !== null) {
                if (!$this->visitadetallesScheduledForDeletion->isEmpty()) {
                    VisitadetalleQuery::create()
                        ->filterByPrimaryKeys($this->visitadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collVisitadetalles !== null) {
                foreach ($this->collVisitadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = ProductoclinicaPeer::IDPRODUCTOCLINICA;
        if (null !== $this->idproductoclinica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductoclinicaPeer::IDPRODUCTOCLINICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductoclinicaPeer::IDPRODUCTOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idproductoclinica`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`productoclinica_existencia`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`productoclinica_minimo`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO)) {
            $modifiedColumns[':p' . $index++]  = '`productoclinica_maximo`';
        }
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`productoclinica_reorden`';
        }

        $sql = sprintf(
            'INSERT INTO `productoclinica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproductoclinica`':
                        $stmt->bindValue($identifier, $this->idproductoclinica, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`productoclinica_existencia`':
                        $stmt->bindValue($identifier, $this->productoclinica_existencia, PDO::PARAM_STR);
                        break;
                    case '`productoclinica_minimo`':
                        $stmt->bindValue($identifier, $this->productoclinica_minimo, PDO::PARAM_STR);
                        break;
                    case '`productoclinica_maximo`':
                        $stmt->bindValue($identifier, $this->productoclinica_maximo, PDO::PARAM_STR);
                        break;
                    case '`productoclinica_reorden`':
                        $stmt->bindValue($identifier, $this->productoclinica_reorden, PDO::PARAM_STR);
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
        $this->setIdproductoclinica($pk);

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

            if ($this->aClinica !== null) {
                if (!$this->aClinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClinica->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }


            if (($retval = ProductoclinicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductoinventarios !== null) {
                    foreach ($this->collProductoinventarios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciadetalles !== null) {
                    foreach ($this->collTransferenciadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitadetalles !== null) {
                    foreach ($this->collVisitadetalles as $referrerFK) {
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
        $pos = ProductoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproductoclinica();
                break;
            case 1:
                return $this->getIdproducto();
                break;
            case 2:
                return $this->getIdclinica();
                break;
            case 3:
                return $this->getProductoclinicaExistencia();
                break;
            case 4:
                return $this->getProductoclinicaMinimo();
                break;
            case 5:
                return $this->getProductoclinicaMaximo();
                break;
            case 6:
                return $this->getProductoclinicaReorden();
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
        if (isset($alreadyDumpedObjects['Productoclinica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Productoclinica'][$this->getPrimaryKey()] = true;
        $keys = ProductoclinicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproductoclinica(),
            $keys[1] => $this->getIdproducto(),
            $keys[2] => $this->getIdclinica(),
            $keys[3] => $this->getProductoclinicaExistencia(),
            $keys[4] => $this->getProductoclinicaMinimo(),
            $keys[5] => $this->getProductoclinicaMaximo(),
            $keys[6] => $this->getProductoclinicaReorden(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductoinventarios) {
                $result['Productoinventarios'] = $this->collProductoinventarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciadetalles) {
                $result['Transferenciadetalles'] = $this->collTransferenciadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitadetalles) {
                $result['Visitadetalles'] = $this->collVisitadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProductoclinicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproductoclinica($value);
                break;
            case 1:
                $this->setIdproducto($value);
                break;
            case 2:
                $this->setIdclinica($value);
                break;
            case 3:
                $this->setProductoclinicaExistencia($value);
                break;
            case 4:
                $this->setProductoclinicaMinimo($value);
                break;
            case 5:
                $this->setProductoclinicaMaximo($value);
                break;
            case 6:
                $this->setProductoclinicaReorden($value);
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
        $keys = ProductoclinicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproductoclinica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproducto($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProductoclinicaExistencia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProductoclinicaMinimo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProductoclinicaMaximo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductoclinicaReorden($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductoclinicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductoclinicaPeer::IDPRODUCTOCLINICA)) $criteria->add(ProductoclinicaPeer::IDPRODUCTOCLINICA, $this->idproductoclinica);
        if ($this->isColumnModified(ProductoclinicaPeer::IDPRODUCTO)) $criteria->add(ProductoclinicaPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(ProductoclinicaPeer::IDCLINICA)) $criteria->add(ProductoclinicaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA)) $criteria->add(ProductoclinicaPeer::PRODUCTOCLINICA_EXISTENCIA, $this->productoclinica_existencia);
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO)) $criteria->add(ProductoclinicaPeer::PRODUCTOCLINICA_MINIMO, $this->productoclinica_minimo);
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO)) $criteria->add(ProductoclinicaPeer::PRODUCTOCLINICA_MAXIMO, $this->productoclinica_maximo);
        if ($this->isColumnModified(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN)) $criteria->add(ProductoclinicaPeer::PRODUCTOCLINICA_REORDEN, $this->productoclinica_reorden);

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
        $criteria = new Criteria(ProductoclinicaPeer::DATABASE_NAME);
        $criteria->add(ProductoclinicaPeer::IDPRODUCTOCLINICA, $this->idproductoclinica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproductoclinica();
    }

    /**
     * Generic method to set the primary key (idproductoclinica column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproductoclinica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproductoclinica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Productoclinica (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setProductoclinicaExistencia($this->getProductoclinicaExistencia());
        $copyObj->setProductoclinicaMinimo($this->getProductoclinicaMinimo());
        $copyObj->setProductoclinicaMaximo($this->getProductoclinicaMaximo());
        $copyObj->setProductoclinicaReorden($this->getProductoclinicaReorden());

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

            foreach ($this->getProductoinventarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductoinventario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproductoclinica(NULL); // this is a auto-increment column, so set to default value
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
     * @return Productoclinica Clone of current object.
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
     * @return ProductoclinicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductoclinicaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Productoclinica The current object (for fluent API support)
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
            $v->addProductoclinica($this);
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
                $this->aClinica->addProductoclinicas($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Productoclinica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addProductoclinica($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addProductoclinicas($this);
             */
        }

        return $this->aProducto;
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
        if ('Productoinventario' == $relationName) {
            $this->initProductoinventarios();
        }
        if ('Transferenciadetalle' == $relationName) {
            $this->initTransferenciadetalles();
        }
        if ('Visitadetalle' == $relationName) {
            $this->initVisitadetalles();
        }
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productoclinica The current object (for fluent API support)
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
     * If this Productoclinica is new, it will return
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
                    ->filterByProductoclinica($this)
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
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setProductoclinica(null);
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
                ->filterByProductoclinica($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Productoclinica The current object (for fluent API support)
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
        $compradetalle->setProductoclinica($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Productoclinica The current object (for fluent API support)
     */
    public function removeCompradetalle($compradetalle)
    {
        if ($this->getCompradetalles()->contains($compradetalle)) {
            $this->collCompradetalles->remove($this->collCompradetalles->search($compradetalle));
            if (null === $this->compradetallesScheduledForDeletion) {
                $this->compradetallesScheduledForDeletion = clone $this->collCompradetalles;
                $this->compradetallesScheduledForDeletion->clear();
            }
            $this->compradetallesScheduledForDeletion[]= $compradetalle;
            $compradetalle->setProductoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
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
     * Clears out the collProductoinventarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productoclinica The current object (for fluent API support)
     * @see        addProductoinventarios()
     */
    public function clearProductoinventarios()
    {
        $this->collProductoinventarios = null; // important to set this to null since that means it is uninitialized
        $this->collProductoinventariosPartial = null;

        return $this;
    }

    /**
     * reset is the collProductoinventarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductoinventarios($v = true)
    {
        $this->collProductoinventariosPartial = $v;
    }

    /**
     * Initializes the collProductoinventarios collection.
     *
     * By default this just sets the collProductoinventarios collection to an empty array (like clearcollProductoinventarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductoinventarios($overrideExisting = true)
    {
        if (null !== $this->collProductoinventarios && !$overrideExisting) {
            return;
        }
        $this->collProductoinventarios = new PropelObjectCollection();
        $this->collProductoinventarios->setModel('Productoinventario');
    }

    /**
     * Gets an array of Productoinventario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productoclinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productoinventario[] List of Productoinventario objects
     * @throws PropelException
     */
    public function getProductoinventarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductoinventariosPartial && !$this->isNew();
        if (null === $this->collProductoinventarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductoinventarios) {
                // return empty collection
                $this->initProductoinventarios();
            } else {
                $collProductoinventarios = ProductoinventarioQuery::create(null, $criteria)
                    ->filterByProductoclinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductoinventariosPartial && count($collProductoinventarios)) {
                      $this->initProductoinventarios(false);

                      foreach ($collProductoinventarios as $obj) {
                        if (false == $this->collProductoinventarios->contains($obj)) {
                          $this->collProductoinventarios->append($obj);
                        }
                      }

                      $this->collProductoinventariosPartial = true;
                    }

                    $collProductoinventarios->getInternalIterator()->rewind();

                    return $collProductoinventarios;
                }

                if ($partial && $this->collProductoinventarios) {
                    foreach ($this->collProductoinventarios as $obj) {
                        if ($obj->isNew()) {
                            $collProductoinventarios[] = $obj;
                        }
                    }
                }

                $this->collProductoinventarios = $collProductoinventarios;
                $this->collProductoinventariosPartial = false;
            }
        }

        return $this->collProductoinventarios;
    }

    /**
     * Sets a collection of Productoinventario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productoinventarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setProductoinventarios(PropelCollection $productoinventarios, PropelPDO $con = null)
    {
        $productoinventariosToDelete = $this->getProductoinventarios(new Criteria(), $con)->diff($productoinventarios);


        $this->productoinventariosScheduledForDeletion = $productoinventariosToDelete;

        foreach ($productoinventariosToDelete as $productoinventarioRemoved) {
            $productoinventarioRemoved->setProductoclinica(null);
        }

        $this->collProductoinventarios = null;
        foreach ($productoinventarios as $productoinventario) {
            $this->addProductoinventario($productoinventario);
        }

        $this->collProductoinventarios = $productoinventarios;
        $this->collProductoinventariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productoinventario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productoinventario objects.
     * @throws PropelException
     */
    public function countProductoinventarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductoinventariosPartial && !$this->isNew();
        if (null === $this->collProductoinventarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductoinventarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductoinventarios());
            }
            $query = ProductoinventarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductoclinica($this)
                ->count($con);
        }

        return count($this->collProductoinventarios);
    }

    /**
     * Method called to associate a Productoinventario object to this object
     * through the Productoinventario foreign key attribute.
     *
     * @param    Productoinventario $l Productoinventario
     * @return Productoclinica The current object (for fluent API support)
     */
    public function addProductoinventario(Productoinventario $l)
    {
        if ($this->collProductoinventarios === null) {
            $this->initProductoinventarios();
            $this->collProductoinventariosPartial = true;
        }

        if (!in_array($l, $this->collProductoinventarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductoinventario($l);

            if ($this->productoinventariosScheduledForDeletion and $this->productoinventariosScheduledForDeletion->contains($l)) {
                $this->productoinventariosScheduledForDeletion->remove($this->productoinventariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productoinventario $productoinventario The productoinventario object to add.
     */
    protected function doAddProductoinventario($productoinventario)
    {
        $this->collProductoinventarios[]= $productoinventario;
        $productoinventario->setProductoclinica($this);
    }

    /**
     * @param	Productoinventario $productoinventario The productoinventario object to remove.
     * @return Productoclinica The current object (for fluent API support)
     */
    public function removeProductoinventario($productoinventario)
    {
        if ($this->getProductoinventarios()->contains($productoinventario)) {
            $this->collProductoinventarios->remove($this->collProductoinventarios->search($productoinventario));
            if (null === $this->productoinventariosScheduledForDeletion) {
                $this->productoinventariosScheduledForDeletion = clone $this->collProductoinventarios;
                $this->productoinventariosScheduledForDeletion->clear();
            }
            $this->productoinventariosScheduledForDeletion[]= clone $productoinventario;
            $productoinventario->setProductoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Productoinventarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productoinventario[] List of Productoinventario objects
     */
    public function getProductoinventariosJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoinventarioQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getProductoinventarios($query, $con);
    }

    /**
     * Clears out the collTransferenciadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productoclinica The current object (for fluent API support)
     * @see        addTransferenciadetalles()
     */
    public function clearTransferenciadetalles()
    {
        $this->collTransferenciadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciadetalles($v = true)
    {
        $this->collTransferenciadetallesPartial = $v;
    }

    /**
     * Initializes the collTransferenciadetalles collection.
     *
     * By default this just sets the collTransferenciadetalles collection to an empty array (like clearcollTransferenciadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciadetalles($overrideExisting = true)
    {
        if (null !== $this->collTransferenciadetalles && !$overrideExisting) {
            return;
        }
        $this->collTransferenciadetalles = new PropelObjectCollection();
        $this->collTransferenciadetalles->setModel('Transferenciadetalle');
    }

    /**
     * Gets an array of Transferenciadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productoclinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     * @throws PropelException
     */
    public function getTransferenciadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                // return empty collection
                $this->initTransferenciadetalles();
            } else {
                $collTransferenciadetalles = TransferenciadetalleQuery::create(null, $criteria)
                    ->filterByProductoclinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciadetallesPartial && count($collTransferenciadetalles)) {
                      $this->initTransferenciadetalles(false);

                      foreach ($collTransferenciadetalles as $obj) {
                        if (false == $this->collTransferenciadetalles->contains($obj)) {
                          $this->collTransferenciadetalles->append($obj);
                        }
                      }

                      $this->collTransferenciadetallesPartial = true;
                    }

                    $collTransferenciadetalles->getInternalIterator()->rewind();

                    return $collTransferenciadetalles;
                }

                if ($partial && $this->collTransferenciadetalles) {
                    foreach ($this->collTransferenciadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciadetalles[] = $obj;
                        }
                    }
                }

                $this->collTransferenciadetalles = $collTransferenciadetalles;
                $this->collTransferenciadetallesPartial = false;
            }
        }

        return $this->collTransferenciadetalles;
    }

    /**
     * Sets a collection of Transferenciadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setTransferenciadetalles(PropelCollection $transferenciadetalles, PropelPDO $con = null)
    {
        $transferenciadetallesToDelete = $this->getTransferenciadetalles(new Criteria(), $con)->diff($transferenciadetalles);


        $this->transferenciadetallesScheduledForDeletion = $transferenciadetallesToDelete;

        foreach ($transferenciadetallesToDelete as $transferenciadetalleRemoved) {
            $transferenciadetalleRemoved->setProductoclinica(null);
        }

        $this->collTransferenciadetalles = null;
        foreach ($transferenciadetalles as $transferenciadetalle) {
            $this->addTransferenciadetalle($transferenciadetalle);
        }

        $this->collTransferenciadetalles = $transferenciadetalles;
        $this->collTransferenciadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferenciadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferenciadetalle objects.
     * @throws PropelException
     */
    public function countTransferenciadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciadetalles());
            }
            $query = TransferenciadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductoclinica($this)
                ->count($con);
        }

        return count($this->collTransferenciadetalles);
    }

    /**
     * Method called to associate a Transferenciadetalle object to this object
     * through the Transferenciadetalle foreign key attribute.
     *
     * @param    Transferenciadetalle $l Transferenciadetalle
     * @return Productoclinica The current object (for fluent API support)
     */
    public function addTransferenciadetalle(Transferenciadetalle $l)
    {
        if ($this->collTransferenciadetalles === null) {
            $this->initTransferenciadetalles();
            $this->collTransferenciadetallesPartial = true;
        }

        if (!in_array($l, $this->collTransferenciadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciadetalle($l);

            if ($this->transferenciadetallesScheduledForDeletion and $this->transferenciadetallesScheduledForDeletion->contains($l)) {
                $this->transferenciadetallesScheduledForDeletion->remove($this->transferenciadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to add.
     */
    protected function doAddTransferenciadetalle($transferenciadetalle)
    {
        $this->collTransferenciadetalles[]= $transferenciadetalle;
        $transferenciadetalle->setProductoclinica($this);
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to remove.
     * @return Productoclinica The current object (for fluent API support)
     */
    public function removeTransferenciadetalle($transferenciadetalle)
    {
        if ($this->getTransferenciadetalles()->contains($transferenciadetalle)) {
            $this->collTransferenciadetalles->remove($this->collTransferenciadetalles->search($transferenciadetalle));
            if (null === $this->transferenciadetallesScheduledForDeletion) {
                $this->transferenciadetallesScheduledForDeletion = clone $this->collTransferenciadetalles;
                $this->transferenciadetallesScheduledForDeletion->clear();
            }
            $this->transferenciadetallesScheduledForDeletion[]= $transferenciadetalle;
            $transferenciadetalle->setProductoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinInsumoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Insumoclinica', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinTransferencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Transferencia', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }

    /**
     * Clears out the collVisitadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productoclinica The current object (for fluent API support)
     * @see        addVisitadetalles()
     */
    public function clearVisitadetalles()
    {
        $this->collVisitadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collVisitadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitadetalles($v = true)
    {
        $this->collVisitadetallesPartial = $v;
    }

    /**
     * Initializes the collVisitadetalles collection.
     *
     * By default this just sets the collVisitadetalles collection to an empty array (like clearcollVisitadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitadetalles($overrideExisting = true)
    {
        if (null !== $this->collVisitadetalles && !$overrideExisting) {
            return;
        }
        $this->collVisitadetalles = new PropelObjectCollection();
        $this->collVisitadetalles->setModel('Visitadetalle');
    }

    /**
     * Gets an array of Visitadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productoclinica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     * @throws PropelException
     */
    public function getVisitadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitadetallesPartial && !$this->isNew();
        if (null === $this->collVisitadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitadetalles) {
                // return empty collection
                $this->initVisitadetalles();
            } else {
                $collVisitadetalles = VisitadetalleQuery::create(null, $criteria)
                    ->filterByProductoclinica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitadetallesPartial && count($collVisitadetalles)) {
                      $this->initVisitadetalles(false);

                      foreach ($collVisitadetalles as $obj) {
                        if (false == $this->collVisitadetalles->contains($obj)) {
                          $this->collVisitadetalles->append($obj);
                        }
                      }

                      $this->collVisitadetallesPartial = true;
                    }

                    $collVisitadetalles->getInternalIterator()->rewind();

                    return $collVisitadetalles;
                }

                if ($partial && $this->collVisitadetalles) {
                    foreach ($this->collVisitadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collVisitadetalles[] = $obj;
                        }
                    }
                }

                $this->collVisitadetalles = $collVisitadetalles;
                $this->collVisitadetallesPartial = false;
            }
        }

        return $this->collVisitadetalles;
    }

    /**
     * Sets a collection of Visitadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productoclinica The current object (for fluent API support)
     */
    public function setVisitadetalles(PropelCollection $visitadetalles, PropelPDO $con = null)
    {
        $visitadetallesToDelete = $this->getVisitadetalles(new Criteria(), $con)->diff($visitadetalles);


        $this->visitadetallesScheduledForDeletion = $visitadetallesToDelete;

        foreach ($visitadetallesToDelete as $visitadetalleRemoved) {
            $visitadetalleRemoved->setProductoclinica(null);
        }

        $this->collVisitadetalles = null;
        foreach ($visitadetalles as $visitadetalle) {
            $this->addVisitadetalle($visitadetalle);
        }

        $this->collVisitadetalles = $visitadetalles;
        $this->collVisitadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Visitadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Visitadetalle objects.
     * @throws PropelException
     */
    public function countVisitadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitadetallesPartial && !$this->isNew();
        if (null === $this->collVisitadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitadetalles());
            }
            $query = VisitadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductoclinica($this)
                ->count($con);
        }

        return count($this->collVisitadetalles);
    }

    /**
     * Method called to associate a Visitadetalle object to this object
     * through the Visitadetalle foreign key attribute.
     *
     * @param    Visitadetalle $l Visitadetalle
     * @return Productoclinica The current object (for fluent API support)
     */
    public function addVisitadetalle(Visitadetalle $l)
    {
        if ($this->collVisitadetalles === null) {
            $this->initVisitadetalles();
            $this->collVisitadetallesPartial = true;
        }

        if (!in_array($l, $this->collVisitadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisitadetalle($l);

            if ($this->visitadetallesScheduledForDeletion and $this->visitadetallesScheduledForDeletion->contains($l)) {
                $this->visitadetallesScheduledForDeletion->remove($this->visitadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Visitadetalle $visitadetalle The visitadetalle object to add.
     */
    protected function doAddVisitadetalle($visitadetalle)
    {
        $this->collVisitadetalles[]= $visitadetalle;
        $visitadetalle->setProductoclinica($this);
    }

    /**
     * @param	Visitadetalle $visitadetalle The visitadetalle object to remove.
     * @return Productoclinica The current object (for fluent API support)
     */
    public function removeVisitadetalle($visitadetalle)
    {
        if ($this->getVisitadetalles()->contains($visitadetalle)) {
            $this->collVisitadetalles->remove($this->collVisitadetalles->search($visitadetalle));
            if (null === $this->visitadetallesScheduledForDeletion) {
                $this->visitadetallesScheduledForDeletion = clone $this->collVisitadetalles;
                $this->visitadetallesScheduledForDeletion->clear();
            }
            $this->visitadetallesScheduledForDeletion[]= $visitadetalle;
            $visitadetalle->setProductoclinica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinMembresia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Membresia', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinServicioclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Servicioclinica', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productoclinica is new, it will return
     * an empty collection; or if this Productoclinica has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productoclinica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinVisita($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Visita', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproductoclinica = null;
        $this->idproducto = null;
        $this->idclinica = null;
        $this->productoclinica_existencia = null;
        $this->productoclinica_minimo = null;
        $this->productoclinica_maximo = null;
        $this->productoclinica_reorden = null;
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
            if ($this->collProductoinventarios) {
                foreach ($this->collProductoinventarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciadetalles) {
                foreach ($this->collTransferenciadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitadetalles) {
                foreach ($this->collVisitadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collProductoinventarios instanceof PropelCollection) {
            $this->collProductoinventarios->clearIterator();
        }
        $this->collProductoinventarios = null;
        if ($this->collTransferenciadetalles instanceof PropelCollection) {
            $this->collTransferenciadetalles->clearIterator();
        }
        $this->collTransferenciadetalles = null;
        if ($this->collVisitadetalles instanceof PropelCollection) {
            $this->collVisitadetalles->clearIterator();
        }
        $this->collVisitadetalles = null;
        $this->aClinica = null;
        $this->aProducto = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductoclinicaPeer::DEFAULT_STRING_FORMAT);
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
