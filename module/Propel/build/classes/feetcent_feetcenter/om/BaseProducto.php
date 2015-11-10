<?php


/**
 * Base class that represents a row from the 'producto' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseProducto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the producto_nombre field.
     * @var        string
     */
    protected $producto_nombre;

    /**
     * The value for the producto_descripcion field.
     * @var        string
     */
    protected $producto_descripcion;

    /**
     * The value for the producto_costo field.
     * @var        string
     */
    protected $producto_costo;

    /**
     * The value for the producto_precio field.
     * @var        string
     */
    protected $producto_precio;

    /**
     * The value for the producto_generaingreso field.
     * @var        boolean
     */
    protected $producto_generaingreso;

    /**
     * The value for the producto_generacomision field.
     * @var        boolean
     */
    protected $producto_generacomision;

    /**
     * The value for the producto_tipocomision field.
     * @var        string
     */
    protected $producto_tipocomision;

    /**
     * The value for the producto_comision field.
     * @var        string
     */
    protected $producto_comision;

    /**
     * The value for the producto_fotografia field.
     * @var        string
     */
    protected $producto_fotografia;

    /**
     * @var        PropelObjectCollection|Productoclinica[] Collection to store aggregation of Productoclinica objects.
     */
    protected $collProductoclinicas;
    protected $collProductoclinicasPartial;

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
    protected $productoclinicasScheduledForDeletion = null;

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
     * Get the [producto_nombre] column value.
     *
     * @return string
     */
    public function getProductoNombre()
    {

        return $this->producto_nombre;
    }

    /**
     * Get the [producto_descripcion] column value.
     *
     * @return string
     */
    public function getProductoDescripcion()
    {

        return $this->producto_descripcion;
    }

    /**
     * Get the [producto_costo] column value.
     *
     * @return string
     */
    public function getProductoCosto()
    {

        return $this->producto_costo;
    }

    /**
     * Get the [producto_precio] column value.
     *
     * @return string
     */
    public function getProductoPrecio()
    {

        return $this->producto_precio;
    }

    /**
     * Get the [producto_generaingreso] column value.
     *
     * @return boolean
     */
    public function getProductoGeneraingreso()
    {

        return $this->producto_generaingreso;
    }

    /**
     * Get the [producto_generacomision] column value.
     *
     * @return boolean
     */
    public function getProductoGeneracomision()
    {

        return $this->producto_generacomision;
    }

    /**
     * Get the [producto_tipocomision] column value.
     *
     * @return string
     */
    public function getProductoTipocomision()
    {

        return $this->producto_tipocomision;
    }

    /**
     * Get the [producto_comision] column value.
     *
     * @return string
     */
    public function getProductoComision()
    {

        return $this->producto_comision;
    }

    /**
     * Get the [producto_fotografia] column value.
     *
     * @return string
     */
    public function getProductoFotografia()
    {

        return $this->producto_fotografia;
    }

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [producto_nombre] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_nombre !== $v) {
            $this->producto_nombre = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_NOMBRE;
        }


        return $this;
    } // setProductoNombre()

    /**
     * Set the value of [producto_descripcion] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_descripcion !== $v) {
            $this->producto_descripcion = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_DESCRIPCION;
        }


        return $this;
    } // setProductoDescripcion()

    /**
     * Set the value of [producto_costo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoCosto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_costo !== $v) {
            $this->producto_costo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_COSTO;
        }


        return $this;
    } // setProductoCosto()

    /**
     * Set the value of [producto_precio] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoPrecio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_precio !== $v) {
            $this->producto_precio = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_PRECIO;
        }


        return $this;
    } // setProductoPrecio()

    /**
     * Sets the value of the [producto_generaingreso] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoGeneraingreso($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->producto_generaingreso !== $v) {
            $this->producto_generaingreso = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_GENERAINGRESO;
        }


        return $this;
    } // setProductoGeneraingreso()

    /**
     * Sets the value of the [producto_generacomision] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoGeneracomision($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->producto_generacomision !== $v) {
            $this->producto_generacomision = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_GENERACOMISION;
        }


        return $this;
    } // setProductoGeneracomision()

    /**
     * Set the value of [producto_tipocomision] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoTipocomision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_tipocomision !== $v) {
            $this->producto_tipocomision = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_TIPOCOMISION;
        }


        return $this;
    } // setProductoTipocomision()

    /**
     * Set the value of [producto_comision] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoComision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->producto_comision !== $v) {
            $this->producto_comision = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_COMISION;
        }


        return $this;
    } // setProductoComision()

    /**
     * Set the value of [producto_fotografia] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoFotografia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_fotografia !== $v) {
            $this->producto_fotografia = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_FOTOGRAFIA;
        }


        return $this;
    } // setProductoFotografia()

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

            $this->idproducto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->producto_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->producto_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->producto_costo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->producto_precio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->producto_generaingreso = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->producto_generacomision = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->producto_tipocomision = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->producto_comision = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->producto_fotografia = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = ProductoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Producto object", $e);
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collProductoclinicas = null;

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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductoQuery::create()
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProductoPeer::addInstanceToPool($this);
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

            if ($this->productoclinicasScheduledForDeletion !== null) {
                if (!$this->productoclinicasScheduledForDeletion->isEmpty()) {
                    ProductoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->productoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collProductoclinicas !== null) {
                foreach ($this->collProductoclinicas as $referrerFK) {
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

        $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        if (null !== $this->idproducto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductoPeer::IDPRODUCTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`producto_nombre`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`producto_descripcion`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_costo`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_precio`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_GENERAINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_generaingreso`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_GENERACOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`producto_generacomision`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_TIPOCOMISION)) {
            $modifiedColumns[':p' . $index++]  = '`producto_tipocomision`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COMISION)) {
            $modifiedColumns[':p' . $index++]  = '`producto_comision`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_FOTOGRAFIA)) {
            $modifiedColumns[':p' . $index++]  = '`producto_fotografia`';
        }

        $sql = sprintf(
            'INSERT INTO `producto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`producto_nombre`':
                        $stmt->bindValue($identifier, $this->producto_nombre, PDO::PARAM_STR);
                        break;
                    case '`producto_descripcion`':
                        $stmt->bindValue($identifier, $this->producto_descripcion, PDO::PARAM_STR);
                        break;
                    case '`producto_costo`':
                        $stmt->bindValue($identifier, $this->producto_costo, PDO::PARAM_STR);
                        break;
                    case '`producto_precio`':
                        $stmt->bindValue($identifier, $this->producto_precio, PDO::PARAM_STR);
                        break;
                    case '`producto_generaingreso`':
                        $stmt->bindValue($identifier, (int) $this->producto_generaingreso, PDO::PARAM_INT);
                        break;
                    case '`producto_generacomision`':
                        $stmt->bindValue($identifier, (int) $this->producto_generacomision, PDO::PARAM_INT);
                        break;
                    case '`producto_tipocomision`':
                        $stmt->bindValue($identifier, $this->producto_tipocomision, PDO::PARAM_STR);
                        break;
                    case '`producto_comision`':
                        $stmt->bindValue($identifier, $this->producto_comision, PDO::PARAM_STR);
                        break;
                    case '`producto_fotografia`':
                        $stmt->bindValue($identifier, $this->producto_fotografia, PDO::PARAM_STR);
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
        $this->setIdproducto($pk);

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


            if (($retval = ProductoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collProductoclinicas !== null) {
                    foreach ($this->collProductoclinicas as $referrerFK) {
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproducto();
                break;
            case 1:
                return $this->getProductoNombre();
                break;
            case 2:
                return $this->getProductoDescripcion();
                break;
            case 3:
                return $this->getProductoCosto();
                break;
            case 4:
                return $this->getProductoPrecio();
                break;
            case 5:
                return $this->getProductoGeneraingreso();
                break;
            case 6:
                return $this->getProductoGeneracomision();
                break;
            case 7:
                return $this->getProductoTipocomision();
                break;
            case 8:
                return $this->getProductoComision();
                break;
            case 9:
                return $this->getProductoFotografia();
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
        if (isset($alreadyDumpedObjects['Producto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Producto'][$this->getPrimaryKey()] = true;
        $keys = ProductoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproducto(),
            $keys[1] => $this->getProductoNombre(),
            $keys[2] => $this->getProductoDescripcion(),
            $keys[3] => $this->getProductoCosto(),
            $keys[4] => $this->getProductoPrecio(),
            $keys[5] => $this->getProductoGeneraingreso(),
            $keys[6] => $this->getProductoGeneracomision(),
            $keys[7] => $this->getProductoTipocomision(),
            $keys[8] => $this->getProductoComision(),
            $keys[9] => $this->getProductoFotografia(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collProductoclinicas) {
                $result['Productoclinicas'] = $this->collProductoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproducto($value);
                break;
            case 1:
                $this->setProductoNombre($value);
                break;
            case 2:
                $this->setProductoDescripcion($value);
                break;
            case 3:
                $this->setProductoCosto($value);
                break;
            case 4:
                $this->setProductoPrecio($value);
                break;
            case 5:
                $this->setProductoGeneraingreso($value);
                break;
            case 6:
                $this->setProductoGeneracomision($value);
                break;
            case 7:
                $this->setProductoTipocomision($value);
                break;
            case 8:
                $this->setProductoComision($value);
                break;
            case 9:
                $this->setProductoFotografia($value);
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
        $keys = ProductoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproducto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProductoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProductoDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProductoCosto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProductoPrecio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProductoGeneraingreso($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductoGeneracomision($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductoTipocomision($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductoComision($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductoFotografia($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_NOMBRE)) $criteria->add(ProductoPeer::PRODUCTO_NOMBRE, $this->producto_nombre);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DESCRIPCION)) $criteria->add(ProductoPeer::PRODUCTO_DESCRIPCION, $this->producto_descripcion);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) $criteria->add(ProductoPeer::PRODUCTO_COSTO, $this->producto_costo);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIO)) $criteria->add(ProductoPeer::PRODUCTO_PRECIO, $this->producto_precio);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_GENERAINGRESO)) $criteria->add(ProductoPeer::PRODUCTO_GENERAINGRESO, $this->producto_generaingreso);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_GENERACOMISION)) $criteria->add(ProductoPeer::PRODUCTO_GENERACOMISION, $this->producto_generacomision);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_TIPOCOMISION)) $criteria->add(ProductoPeer::PRODUCTO_TIPOCOMISION, $this->producto_tipocomision);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COMISION)) $criteria->add(ProductoPeer::PRODUCTO_COMISION, $this->producto_comision);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_FOTOGRAFIA)) $criteria->add(ProductoPeer::PRODUCTO_FOTOGRAFIA, $this->producto_fotografia);

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
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproducto();
    }

    /**
     * Generic method to set the primary key (idproducto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproducto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproducto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Producto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProductoNombre($this->getProductoNombre());
        $copyObj->setProductoDescripcion($this->getProductoDescripcion());
        $copyObj->setProductoCosto($this->getProductoCosto());
        $copyObj->setProductoPrecio($this->getProductoPrecio());
        $copyObj->setProductoGeneraingreso($this->getProductoGeneraingreso());
        $copyObj->setProductoGeneracomision($this->getProductoGeneracomision());
        $copyObj->setProductoTipocomision($this->getProductoTipocomision());
        $copyObj->setProductoComision($this->getProductoComision());
        $copyObj->setProductoFotografia($this->getProductoFotografia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getProductoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductoclinica($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproducto(NULL); // this is a auto-increment column, so set to default value
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
     * @return Producto Clone of current object.
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
     * @return ProductoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductoPeer();
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
        if ('Productoclinica' == $relationName) {
            $this->initProductoclinicas();
        }
    }

    /**
     * Clears out the collProductoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductoclinicas()
     */
    public function clearProductoclinicas()
    {
        $this->collProductoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collProductoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collProductoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductoclinicas($v = true)
    {
        $this->collProductoclinicasPartial = $v;
    }

    /**
     * Initializes the collProductoclinicas collection.
     *
     * By default this just sets the collProductoclinicas collection to an empty array (like clearcollProductoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductoclinicas($overrideExisting = true)
    {
        if (null !== $this->collProductoclinicas && !$overrideExisting) {
            return;
        }
        $this->collProductoclinicas = new PropelObjectCollection();
        $this->collProductoclinicas->setModel('Productoclinica');
    }

    /**
     * Gets an array of Productoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productoclinica[] List of Productoclinica objects
     * @throws PropelException
     */
    public function getProductoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductoclinicasPartial && !$this->isNew();
        if (null === $this->collProductoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductoclinicas) {
                // return empty collection
                $this->initProductoclinicas();
            } else {
                $collProductoclinicas = ProductoclinicaQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductoclinicasPartial && count($collProductoclinicas)) {
                      $this->initProductoclinicas(false);

                      foreach ($collProductoclinicas as $obj) {
                        if (false == $this->collProductoclinicas->contains($obj)) {
                          $this->collProductoclinicas->append($obj);
                        }
                      }

                      $this->collProductoclinicasPartial = true;
                    }

                    $collProductoclinicas->getInternalIterator()->rewind();

                    return $collProductoclinicas;
                }

                if ($partial && $this->collProductoclinicas) {
                    foreach ($this->collProductoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collProductoclinicas[] = $obj;
                        }
                    }
                }

                $this->collProductoclinicas = $collProductoclinicas;
                $this->collProductoclinicasPartial = false;
            }
        }

        return $this->collProductoclinicas;
    }

    /**
     * Sets a collection of Productoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoclinicas(PropelCollection $productoclinicas, PropelPDO $con = null)
    {
        $productoclinicasToDelete = $this->getProductoclinicas(new Criteria(), $con)->diff($productoclinicas);


        $this->productoclinicasScheduledForDeletion = $productoclinicasToDelete;

        foreach ($productoclinicasToDelete as $productoclinicaRemoved) {
            $productoclinicaRemoved->setProducto(null);
        }

        $this->collProductoclinicas = null;
        foreach ($productoclinicas as $productoclinica) {
            $this->addProductoclinica($productoclinica);
        }

        $this->collProductoclinicas = $productoclinicas;
        $this->collProductoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productoclinica objects.
     * @throws PropelException
     */
    public function countProductoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductoclinicasPartial && !$this->isNew();
        if (null === $this->collProductoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductoclinicas());
            }
            $query = ProductoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductoclinicas);
    }

    /**
     * Method called to associate a Productoclinica object to this object
     * through the Productoclinica foreign key attribute.
     *
     * @param    Productoclinica $l Productoclinica
     * @return Producto The current object (for fluent API support)
     */
    public function addProductoclinica(Productoclinica $l)
    {
        if ($this->collProductoclinicas === null) {
            $this->initProductoclinicas();
            $this->collProductoclinicasPartial = true;
        }

        if (!in_array($l, $this->collProductoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductoclinica($l);

            if ($this->productoclinicasScheduledForDeletion and $this->productoclinicasScheduledForDeletion->contains($l)) {
                $this->productoclinicasScheduledForDeletion->remove($this->productoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productoclinica $productoclinica The productoclinica object to add.
     */
    protected function doAddProductoclinica($productoclinica)
    {
        $this->collProductoclinicas[]= $productoclinica;
        $productoclinica->setProducto($this);
    }

    /**
     * @param	Productoclinica $productoclinica The productoclinica object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductoclinica($productoclinica)
    {
        if ($this->getProductoclinicas()->contains($productoclinica)) {
            $this->collProductoclinicas->remove($this->collProductoclinicas->search($productoclinica));
            if (null === $this->productoclinicasScheduledForDeletion) {
                $this->productoclinicasScheduledForDeletion = clone $this->collProductoclinicas;
                $this->productoclinicasScheduledForDeletion->clear();
            }
            $this->productoclinicasScheduledForDeletion[]= clone $productoclinica;
            $productoclinica->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productoclinica[] List of Productoclinica objects
     */
    public function getProductoclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getProductoclinicas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproducto = null;
        $this->producto_nombre = null;
        $this->producto_descripcion = null;
        $this->producto_costo = null;
        $this->producto_precio = null;
        $this->producto_generaingreso = null;
        $this->producto_generacomision = null;
        $this->producto_tipocomision = null;
        $this->producto_comision = null;
        $this->producto_fotografia = null;
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
            if ($this->collProductoclinicas) {
                foreach ($this->collProductoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collProductoclinicas instanceof PropelCollection) {
            $this->collProductoclinicas->clearIterator();
        }
        $this->collProductoclinicas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductoPeer::DEFAULT_STRING_FORMAT);
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
