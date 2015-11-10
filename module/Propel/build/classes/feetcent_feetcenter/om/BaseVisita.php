<?php


/**
 * Base class that represents a row from the 'visita' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisita extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VisitaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VisitaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idvisita field.
     * @var        int
     */
    protected $idvisita;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the idempleadocreador field.
     * @var        int
     */
    protected $idempleadocreador;

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
     * The value for the visita_tipo field.
     * @var        string
     */
    protected $visita_tipo;

    /**
     * The value for the visita_creadaen field.
     * @var        string
     */
    protected $visita_creadaen;

    /**
     * The value for the visita_canceladaen field.
     * @var        string
     */
    protected $visita_canceladaen;

    /**
     * The value for the visita_fechainicio field.
     * @var        string
     */
    protected $visita_fechainicio;

    /**
     * The value for the visita_fechafin field.
     * @var        string
     */
    protected $visita_fechafin;

    /**
     * The value for the visita_status field.
     * @var        string
     */
    protected $visita_status;

    /**
     * The value for the visita_estatuspago field.
     * @var        string
     */
    protected $visita_estatuspago;

    /**
     * The value for the visita_total field.
     * @var        string
     */
    protected $visita_total;

    /**
     * The value for the visita_nota field.
     * @var        string
     */
    protected $visita_nota;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleado;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadocreador;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Visitadetalle[] Collection to store aggregation of Visitadetalle objects.
     */
    protected $collVisitadetalles;
    protected $collVisitadetallesPartial;

    /**
     * @var        PropelObjectCollection|Visitapago[] Collection to store aggregation of Visitapago objects.
     */
    protected $collVisitapagos;
    protected $collVisitapagosPartial;

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
    protected $visitadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitapagosScheduledForDeletion = null;

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
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [idempleadocreador] column value.
     *
     * @return int
     */
    public function getIdempleadocreador()
    {

        return $this->idempleadocreador;
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
     * Get the [visita_tipo] column value.
     *
     * @return string
     */
    public function getVisitaTipo()
    {

        return $this->visita_tipo;
    }

    /**
     * Get the [optionally formatted] temporal [visita_creadaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitaCreadaen($format = 'Y-m-d H:i:s')
    {
        if ($this->visita_creadaen === null) {
            return null;
        }

        if ($this->visita_creadaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->visita_creadaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->visita_creadaen, true), $x);
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
     * Get the [optionally formatted] temporal [visita_canceladaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitaCanceladaen($format = 'Y-m-d H:i:s')
    {
        if ($this->visita_canceladaen === null) {
            return null;
        }

        if ($this->visita_canceladaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->visita_canceladaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->visita_canceladaen, true), $x);
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
     * Get the [optionally formatted] temporal [visita_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitaFechainicio($format = 'Y-m-d H:i:s')
    {
        if ($this->visita_fechainicio === null) {
            return null;
        }

        if ($this->visita_fechainicio === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->visita_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->visita_fechainicio, true), $x);
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
     * Get the [optionally formatted] temporal [visita_fechafin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVisitaFechafin($format = 'Y-m-d H:i:s')
    {
        if ($this->visita_fechafin === null) {
            return null;
        }

        if ($this->visita_fechafin === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->visita_fechafin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->visita_fechafin, true), $x);
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
     * Get the [visita_status] column value.
     *
     * @return string
     */
    public function getVisitaStatus()
    {

        return $this->visita_status;
    }

    /**
     * Get the [visita_estatuspago] column value.
     *
     * @return string
     */
    public function getVisitaEstatuspago()
    {

        return $this->visita_estatuspago;
    }

    /**
     * Get the [visita_total] column value.
     *
     * @return string
     */
    public function getVisitaTotal()
    {

        return $this->visita_total;
    }

    /**
     * Get the [visita_nota] column value.
     *
     * @return string
     */
    public function getVisitaNota()
    {

        return $this->visita_nota;
    }

    /**
     * Set the value of [idvisita] column.
     *
     * @param  int $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setIdvisita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idvisita !== $v) {
            $this->idvisita = $v;
            $this->modifiedColumns[] = VisitaPeer::IDVISITA;
        }


        return $this;
    } // setIdvisita()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = VisitaPeer::IDEMPLEADO;
        }

        if ($this->aEmpleadoRelatedByIdempleado !== null && $this->aEmpleadoRelatedByIdempleado->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [idempleadocreador] column.
     *
     * @param  int $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setIdempleadocreador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadocreador !== $v) {
            $this->idempleadocreador = $v;
            $this->modifiedColumns[] = VisitaPeer::IDEMPLEADOCREADOR;
        }

        if ($this->aEmpleadoRelatedByIdempleadocreador !== null && $this->aEmpleadoRelatedByIdempleadocreador->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadocreador = null;
        }


        return $this;
    } // setIdempleadocreador()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = VisitaPeer::IDPACIENTE;
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
     * @return Visita The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = VisitaPeer::IDCLINICA;
        }

        if ($this->aClinica !== null && $this->aClinica->getIdclinica() !== $v) {
            $this->aClinica = null;
        }


        return $this;
    } // setIdclinica()

    /**
     * Set the value of [visita_tipo] column.
     *
     * @param  string $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visita_tipo !== $v) {
            $this->visita_tipo = $v;
            $this->modifiedColumns[] = VisitaPeer::VISITA_TIPO;
        }


        return $this;
    } // setVisitaTipo()

    /**
     * Sets the value of [visita_creadaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaCreadaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visita_creadaen !== null || $dt !== null) {
            $currentDateAsString = ($this->visita_creadaen !== null && $tmpDt = new DateTime($this->visita_creadaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->visita_creadaen = $newDateAsString;
                $this->modifiedColumns[] = VisitaPeer::VISITA_CREADAEN;
            }
        } // if either are not null


        return $this;
    } // setVisitaCreadaen()

    /**
     * Sets the value of [visita_canceladaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaCanceladaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visita_canceladaen !== null || $dt !== null) {
            $currentDateAsString = ($this->visita_canceladaen !== null && $tmpDt = new DateTime($this->visita_canceladaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->visita_canceladaen = $newDateAsString;
                $this->modifiedColumns[] = VisitaPeer::VISITA_CANCELADAEN;
            }
        } // if either are not null


        return $this;
    } // setVisitaCanceladaen()

    /**
     * Sets the value of [visita_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visita_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->visita_fechainicio !== null && $tmpDt = new DateTime($this->visita_fechainicio)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->visita_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = VisitaPeer::VISITA_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setVisitaFechainicio()

    /**
     * Sets the value of [visita_fechafin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaFechafin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->visita_fechafin !== null || $dt !== null) {
            $currentDateAsString = ($this->visita_fechafin !== null && $tmpDt = new DateTime($this->visita_fechafin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->visita_fechafin = $newDateAsString;
                $this->modifiedColumns[] = VisitaPeer::VISITA_FECHAFIN;
            }
        } // if either are not null


        return $this;
    } // setVisitaFechafin()

    /**
     * Set the value of [visita_status] column.
     *
     * @param  string $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visita_status !== $v) {
            $this->visita_status = $v;
            $this->modifiedColumns[] = VisitaPeer::VISITA_STATUS;
        }


        return $this;
    } // setVisitaStatus()

    /**
     * Set the value of [visita_estatuspago] column.
     *
     * @param  string $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaEstatuspago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visita_estatuspago !== $v) {
            $this->visita_estatuspago = $v;
            $this->modifiedColumns[] = VisitaPeer::VISITA_ESTATUSPAGO;
        }


        return $this;
    } // setVisitaEstatuspago()

    /**
     * Set the value of [visita_total] column.
     *
     * @param  string $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visita_total !== $v) {
            $this->visita_total = $v;
            $this->modifiedColumns[] = VisitaPeer::VISITA_TOTAL;
        }


        return $this;
    } // setVisitaTotal()

    /**
     * Set the value of [visita_nota] column.
     *
     * @param  string $v new value
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitaNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->visita_nota !== $v) {
            $this->visita_nota = $v;
            $this->modifiedColumns[] = VisitaPeer::VISITA_NOTA;
        }


        return $this;
    } // setVisitaNota()

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

            $this->idvisita = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleadocreador = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idpaciente = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idclinica = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->visita_tipo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->visita_creadaen = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->visita_canceladaen = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->visita_fechainicio = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->visita_fechafin = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->visita_status = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->visita_estatuspago = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->visita_total = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->visita_nota = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = VisitaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Visita object", $e);
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

        if ($this->aEmpleadoRelatedByIdempleado !== null && $this->idempleado !== $this->aEmpleadoRelatedByIdempleado->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleado = null;
        }
        if ($this->aEmpleadoRelatedByIdempleadocreador !== null && $this->idempleadocreador !== $this->aEmpleadoRelatedByIdempleadocreador->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadocreador = null;
        }
        if ($this->aPaciente !== null && $this->idpaciente !== $this->aPaciente->getIdpaciente()) {
            $this->aPaciente = null;
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
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VisitaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aEmpleadoRelatedByIdempleado = null;
            $this->aEmpleadoRelatedByIdempleadocreador = null;
            $this->aPaciente = null;
            $this->collVisitadetalles = null;

            $this->collVisitapagos = null;

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
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VisitaQuery::create()
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
            $con = Propel::getConnection(VisitaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VisitaPeer::addInstanceToPool($this);
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

            if ($this->aEmpleadoRelatedByIdempleado !== null) {
                if ($this->aEmpleadoRelatedByIdempleado->isModified() || $this->aEmpleadoRelatedByIdempleado->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleado->save($con);
                }
                $this->setEmpleadoRelatedByIdempleado($this->aEmpleadoRelatedByIdempleado);
            }

            if ($this->aEmpleadoRelatedByIdempleadocreador !== null) {
                if ($this->aEmpleadoRelatedByIdempleadocreador->isModified() || $this->aEmpleadoRelatedByIdempleadocreador->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadocreador->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadocreador($this->aEmpleadoRelatedByIdempleadocreador);
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

            if ($this->visitapagosScheduledForDeletion !== null) {
                if (!$this->visitapagosScheduledForDeletion->isEmpty()) {
                    VisitapagoQuery::create()
                        ->filterByPrimaryKeys($this->visitapagosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitapagosScheduledForDeletion = null;
                }
            }

            if ($this->collVisitapagos !== null) {
                foreach ($this->collVisitapagos as $referrerFK) {
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

        $this->modifiedColumns[] = VisitaPeer::IDVISITA;
        if (null !== $this->idvisita) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VisitaPeer::IDVISITA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VisitaPeer::IDVISITA)) {
            $modifiedColumns[':p' . $index++]  = '`idvisita`';
        }
        if ($this->isColumnModified(VisitaPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(VisitaPeer::IDEMPLEADOCREADOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadocreador`';
        }
        if ($this->isColumnModified(VisitaPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(VisitaPeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`visita_tipo`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_CREADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`visita_creadaen`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_CANCELADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`visita_canceladaen`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`visita_fechainicio`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_FECHAFIN)) {
            $modifiedColumns[':p' . $index++]  = '`visita_fechafin`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`visita_status`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_ESTATUSPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`visita_estatuspago`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`visita_total`';
        }
        if ($this->isColumnModified(VisitaPeer::VISITA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`visita_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `visita` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idvisita`':
                        $stmt->bindValue($identifier, $this->idvisita, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`idempleadocreador`':
                        $stmt->bindValue($identifier, $this->idempleadocreador, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`visita_tipo`':
                        $stmt->bindValue($identifier, $this->visita_tipo, PDO::PARAM_STR);
                        break;
                    case '`visita_creadaen`':
                        $stmt->bindValue($identifier, $this->visita_creadaen, PDO::PARAM_STR);
                        break;
                    case '`visita_canceladaen`':
                        $stmt->bindValue($identifier, $this->visita_canceladaen, PDO::PARAM_STR);
                        break;
                    case '`visita_fechainicio`':
                        $stmt->bindValue($identifier, $this->visita_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`visita_fechafin`':
                        $stmt->bindValue($identifier, $this->visita_fechafin, PDO::PARAM_STR);
                        break;
                    case '`visita_status`':
                        $stmt->bindValue($identifier, $this->visita_status, PDO::PARAM_STR);
                        break;
                    case '`visita_estatuspago`':
                        $stmt->bindValue($identifier, $this->visita_estatuspago, PDO::PARAM_STR);
                        break;
                    case '`visita_total`':
                        $stmt->bindValue($identifier, $this->visita_total, PDO::PARAM_STR);
                        break;
                    case '`visita_nota`':
                        $stmt->bindValue($identifier, $this->visita_nota, PDO::PARAM_STR);
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
        $this->setIdvisita($pk);

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

            if ($this->aEmpleadoRelatedByIdempleado !== null) {
                if (!$this->aEmpleadoRelatedByIdempleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleado->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadocreador !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadocreador->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadocreador->getValidationFailures());
                }
            }

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = VisitaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collVisitadetalles !== null) {
                    foreach ($this->collVisitadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitapagos !== null) {
                    foreach ($this->collVisitapagos as $referrerFK) {
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
        $pos = VisitaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdvisita();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getIdempleadocreador();
                break;
            case 3:
                return $this->getIdpaciente();
                break;
            case 4:
                return $this->getIdclinica();
                break;
            case 5:
                return $this->getVisitaTipo();
                break;
            case 6:
                return $this->getVisitaCreadaen();
                break;
            case 7:
                return $this->getVisitaCanceladaen();
                break;
            case 8:
                return $this->getVisitaFechainicio();
                break;
            case 9:
                return $this->getVisitaFechafin();
                break;
            case 10:
                return $this->getVisitaStatus();
                break;
            case 11:
                return $this->getVisitaEstatuspago();
                break;
            case 12:
                return $this->getVisitaTotal();
                break;
            case 13:
                return $this->getVisitaNota();
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
        if (isset($alreadyDumpedObjects['Visita'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Visita'][$this->getPrimaryKey()] = true;
        $keys = VisitaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdvisita(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getIdempleadocreador(),
            $keys[3] => $this->getIdpaciente(),
            $keys[4] => $this->getIdclinica(),
            $keys[5] => $this->getVisitaTipo(),
            $keys[6] => $this->getVisitaCreadaen(),
            $keys[7] => $this->getVisitaCanceladaen(),
            $keys[8] => $this->getVisitaFechainicio(),
            $keys[9] => $this->getVisitaFechafin(),
            $keys[10] => $this->getVisitaStatus(),
            $keys[11] => $this->getVisitaEstatuspago(),
            $keys[12] => $this->getVisitaTotal(),
            $keys[13] => $this->getVisitaNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleado) {
                $result['EmpleadoRelatedByIdempleado'] = $this->aEmpleadoRelatedByIdempleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadocreador) {
                $result['EmpleadoRelatedByIdempleadocreador'] = $this->aEmpleadoRelatedByIdempleadocreador->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collVisitadetalles) {
                $result['Visitadetalles'] = $this->collVisitadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitapagos) {
                $result['Visitapagos'] = $this->collVisitapagos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VisitaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdvisita($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setIdempleadocreador($value);
                break;
            case 3:
                $this->setIdpaciente($value);
                break;
            case 4:
                $this->setIdclinica($value);
                break;
            case 5:
                $this->setVisitaTipo($value);
                break;
            case 6:
                $this->setVisitaCreadaen($value);
                break;
            case 7:
                $this->setVisitaCanceladaen($value);
                break;
            case 8:
                $this->setVisitaFechainicio($value);
                break;
            case 9:
                $this->setVisitaFechafin($value);
                break;
            case 10:
                $this->setVisitaStatus($value);
                break;
            case 11:
                $this->setVisitaEstatuspago($value);
                break;
            case 12:
                $this->setVisitaTotal($value);
                break;
            case 13:
                $this->setVisitaNota($value);
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
        $keys = VisitaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdvisita($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleadocreador($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdpaciente($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdclinica($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVisitaTipo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVisitaCreadaen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVisitaCanceladaen($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVisitaFechainicio($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVisitaFechafin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVisitaStatus($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVisitaEstatuspago($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVisitaTotal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVisitaNota($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VisitaPeer::DATABASE_NAME);

        if ($this->isColumnModified(VisitaPeer::IDVISITA)) $criteria->add(VisitaPeer::IDVISITA, $this->idvisita);
        if ($this->isColumnModified(VisitaPeer::IDEMPLEADO)) $criteria->add(VisitaPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(VisitaPeer::IDEMPLEADOCREADOR)) $criteria->add(VisitaPeer::IDEMPLEADOCREADOR, $this->idempleadocreador);
        if ($this->isColumnModified(VisitaPeer::IDPACIENTE)) $criteria->add(VisitaPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(VisitaPeer::IDCLINICA)) $criteria->add(VisitaPeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(VisitaPeer::VISITA_TIPO)) $criteria->add(VisitaPeer::VISITA_TIPO, $this->visita_tipo);
        if ($this->isColumnModified(VisitaPeer::VISITA_CREADAEN)) $criteria->add(VisitaPeer::VISITA_CREADAEN, $this->visita_creadaen);
        if ($this->isColumnModified(VisitaPeer::VISITA_CANCELADAEN)) $criteria->add(VisitaPeer::VISITA_CANCELADAEN, $this->visita_canceladaen);
        if ($this->isColumnModified(VisitaPeer::VISITA_FECHAINICIO)) $criteria->add(VisitaPeer::VISITA_FECHAINICIO, $this->visita_fechainicio);
        if ($this->isColumnModified(VisitaPeer::VISITA_FECHAFIN)) $criteria->add(VisitaPeer::VISITA_FECHAFIN, $this->visita_fechafin);
        if ($this->isColumnModified(VisitaPeer::VISITA_STATUS)) $criteria->add(VisitaPeer::VISITA_STATUS, $this->visita_status);
        if ($this->isColumnModified(VisitaPeer::VISITA_ESTATUSPAGO)) $criteria->add(VisitaPeer::VISITA_ESTATUSPAGO, $this->visita_estatuspago);
        if ($this->isColumnModified(VisitaPeer::VISITA_TOTAL)) $criteria->add(VisitaPeer::VISITA_TOTAL, $this->visita_total);
        if ($this->isColumnModified(VisitaPeer::VISITA_NOTA)) $criteria->add(VisitaPeer::VISITA_NOTA, $this->visita_nota);

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
        $criteria = new Criteria(VisitaPeer::DATABASE_NAME);
        $criteria->add(VisitaPeer::IDVISITA, $this->idvisita);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdvisita();
    }

    /**
     * Generic method to set the primary key (idvisita column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdvisita($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdvisita();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Visita (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setIdempleadocreador($this->getIdempleadocreador());
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setVisitaTipo($this->getVisitaTipo());
        $copyObj->setVisitaCreadaen($this->getVisitaCreadaen());
        $copyObj->setVisitaCanceladaen($this->getVisitaCanceladaen());
        $copyObj->setVisitaFechainicio($this->getVisitaFechainicio());
        $copyObj->setVisitaFechafin($this->getVisitaFechafin());
        $copyObj->setVisitaStatus($this->getVisitaStatus());
        $copyObj->setVisitaEstatuspago($this->getVisitaEstatuspago());
        $copyObj->setVisitaTotal($this->getVisitaTotal());
        $copyObj->setVisitaNota($this->getVisitaNota());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getVisitadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitapagos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitapago($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdvisita(NULL); // this is a auto-increment column, so set to default value
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
     * @return Visita Clone of current object.
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
     * @return VisitaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VisitaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Visita The current object (for fluent API support)
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
            $v->addVisita($this);
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
                $this->aClinica->addVisitas($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Visita The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitaRelatedByIdempleado($this);
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
    public function getEmpleadoRelatedByIdempleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleado->addVisitasRelatedByIdempleado($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleado;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Visita The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadocreador(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadocreador(NULL);
        } else {
            $this->setIdempleadocreador($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadocreador = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addVisitaRelatedByIdempleadocreador($this);
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
    public function getEmpleadoRelatedByIdempleadocreador(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadocreador === null && ($this->idempleadocreador !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadocreador = EmpleadoQuery::create()->findPk($this->idempleadocreador, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadocreador->addVisitasRelatedByIdempleadocreador($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadocreador;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Visita The current object (for fluent API support)
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
            $v->addVisita($this);
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
                $this->aPaciente->addVisitas($this);
             */
        }

        return $this->aPaciente;
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
        if ('Visitadetalle' == $relationName) {
            $this->initVisitadetalles();
        }
        if ('Visitapago' == $relationName) {
            $this->initVisitapagos();
        }
    }

    /**
     * Clears out the collVisitadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Visita The current object (for fluent API support)
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
     * If this Visita is new, it will return
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
                    ->filterByVisita($this)
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
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitadetalles(PropelCollection $visitadetalles, PropelPDO $con = null)
    {
        $visitadetallesToDelete = $this->getVisitadetalles(new Criteria(), $con)->diff($visitadetalles);


        $this->visitadetallesScheduledForDeletion = $visitadetallesToDelete;

        foreach ($visitadetallesToDelete as $visitadetalleRemoved) {
            $visitadetalleRemoved->setVisita(null);
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
                ->filterByVisita($this)
                ->count($con);
        }

        return count($this->collVisitadetalles);
    }

    /**
     * Method called to associate a Visitadetalle object to this object
     * through the Visitadetalle foreign key attribute.
     *
     * @param    Visitadetalle $l Visitadetalle
     * @return Visita The current object (for fluent API support)
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
        $visitadetalle->setVisita($this);
    }

    /**
     * @param	Visitadetalle $visitadetalle The visitadetalle object to remove.
     * @return Visita The current object (for fluent API support)
     */
    public function removeVisitadetalle($visitadetalle)
    {
        if ($this->getVisitadetalles()->contains($visitadetalle)) {
            $this->collVisitadetalles->remove($this->collVisitadetalles->search($visitadetalle));
            if (null === $this->visitadetallesScheduledForDeletion) {
                $this->visitadetallesScheduledForDeletion = clone $this->collVisitadetalles;
                $this->visitadetallesScheduledForDeletion->clear();
            }
            $this->visitadetallesScheduledForDeletion[]= clone $visitadetalle;
            $visitadetalle->setVisita(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Visita is new, it will return
     * an empty collection; or if this Visita has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Visita.
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
     * Otherwise if this Visita is new, it will return
     * an empty collection; or if this Visita has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Visita.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visitadetalle[] List of Visitadetalle objects
     */
    public function getVisitadetallesJoinProductoclinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitadetalleQuery::create(null, $criteria);
        $query->joinWith('Productoclinica', $join_behavior);

        return $this->getVisitadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Visita is new, it will return
     * an empty collection; or if this Visita has previously
     * been saved, it will retrieve related Visitadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Visita.
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
     * Clears out the collVisitapagos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Visita The current object (for fluent API support)
     * @see        addVisitapagos()
     */
    public function clearVisitapagos()
    {
        $this->collVisitapagos = null; // important to set this to null since that means it is uninitialized
        $this->collVisitapagosPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitapagos collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitapagos($v = true)
    {
        $this->collVisitapagosPartial = $v;
    }

    /**
     * Initializes the collVisitapagos collection.
     *
     * By default this just sets the collVisitapagos collection to an empty array (like clearcollVisitapagos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitapagos($overrideExisting = true)
    {
        if (null !== $this->collVisitapagos && !$overrideExisting) {
            return;
        }
        $this->collVisitapagos = new PropelObjectCollection();
        $this->collVisitapagos->setModel('Visitapago');
    }

    /**
     * Gets an array of Visitapago objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Visita is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visitapago[] List of Visitapago objects
     * @throws PropelException
     */
    public function getVisitapagos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitapagosPartial && !$this->isNew();
        if (null === $this->collVisitapagos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitapagos) {
                // return empty collection
                $this->initVisitapagos();
            } else {
                $collVisitapagos = VisitapagoQuery::create(null, $criteria)
                    ->filterByVisita($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitapagosPartial && count($collVisitapagos)) {
                      $this->initVisitapagos(false);

                      foreach ($collVisitapagos as $obj) {
                        if (false == $this->collVisitapagos->contains($obj)) {
                          $this->collVisitapagos->append($obj);
                        }
                      }

                      $this->collVisitapagosPartial = true;
                    }

                    $collVisitapagos->getInternalIterator()->rewind();

                    return $collVisitapagos;
                }

                if ($partial && $this->collVisitapagos) {
                    foreach ($this->collVisitapagos as $obj) {
                        if ($obj->isNew()) {
                            $collVisitapagos[] = $obj;
                        }
                    }
                }

                $this->collVisitapagos = $collVisitapagos;
                $this->collVisitapagosPartial = false;
            }
        }

        return $this->collVisitapagos;
    }

    /**
     * Sets a collection of Visitapago objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitapagos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Visita The current object (for fluent API support)
     */
    public function setVisitapagos(PropelCollection $visitapagos, PropelPDO $con = null)
    {
        $visitapagosToDelete = $this->getVisitapagos(new Criteria(), $con)->diff($visitapagos);


        $this->visitapagosScheduledForDeletion = $visitapagosToDelete;

        foreach ($visitapagosToDelete as $visitapagoRemoved) {
            $visitapagoRemoved->setVisita(null);
        }

        $this->collVisitapagos = null;
        foreach ($visitapagos as $visitapago) {
            $this->addVisitapago($visitapago);
        }

        $this->collVisitapagos = $visitapagos;
        $this->collVisitapagosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Visitapago objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Visitapago objects.
     * @throws PropelException
     */
    public function countVisitapagos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitapagosPartial && !$this->isNew();
        if (null === $this->collVisitapagos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitapagos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitapagos());
            }
            $query = VisitapagoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVisita($this)
                ->count($con);
        }

        return count($this->collVisitapagos);
    }

    /**
     * Method called to associate a Visitapago object to this object
     * through the Visitapago foreign key attribute.
     *
     * @param    Visitapago $l Visitapago
     * @return Visita The current object (for fluent API support)
     */
    public function addVisitapago(Visitapago $l)
    {
        if ($this->collVisitapagos === null) {
            $this->initVisitapagos();
            $this->collVisitapagosPartial = true;
        }

        if (!in_array($l, $this->collVisitapagos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisitapago($l);

            if ($this->visitapagosScheduledForDeletion and $this->visitapagosScheduledForDeletion->contains($l)) {
                $this->visitapagosScheduledForDeletion->remove($this->visitapagosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Visitapago $visitapago The visitapago object to add.
     */
    protected function doAddVisitapago($visitapago)
    {
        $this->collVisitapagos[]= $visitapago;
        $visitapago->setVisita($this);
    }

    /**
     * @param	Visitapago $visitapago The visitapago object to remove.
     * @return Visita The current object (for fluent API support)
     */
    public function removeVisitapago($visitapago)
    {
        if ($this->getVisitapagos()->contains($visitapago)) {
            $this->collVisitapagos->remove($this->collVisitapagos->search($visitapago));
            if (null === $this->visitapagosScheduledForDeletion) {
                $this->visitapagosScheduledForDeletion = clone $this->collVisitapagos;
                $this->visitapagosScheduledForDeletion->clear();
            }
            $this->visitapagosScheduledForDeletion[]= clone $visitapago;
            $visitapago->setVisita(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idvisita = null;
        $this->idempleado = null;
        $this->idempleadocreador = null;
        $this->idpaciente = null;
        $this->idclinica = null;
        $this->visita_tipo = null;
        $this->visita_creadaen = null;
        $this->visita_canceladaen = null;
        $this->visita_fechainicio = null;
        $this->visita_fechafin = null;
        $this->visita_status = null;
        $this->visita_estatuspago = null;
        $this->visita_total = null;
        $this->visita_nota = null;
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
            if ($this->collVisitadetalles) {
                foreach ($this->collVisitadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitapagos) {
                foreach ($this->collVisitapagos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleado instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleado->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadocreador instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadocreador->clearAllReferences($deep);
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collVisitadetalles instanceof PropelCollection) {
            $this->collVisitadetalles->clearIterator();
        }
        $this->collVisitadetalles = null;
        if ($this->collVisitapagos instanceof PropelCollection) {
            $this->collVisitapagos->clearIterator();
        }
        $this->collVisitapagos = null;
        $this->aClinica = null;
        $this->aEmpleadoRelatedByIdempleado = null;
        $this->aEmpleadoRelatedByIdempleadocreador = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VisitaPeer::DEFAULT_STRING_FORMAT);
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
