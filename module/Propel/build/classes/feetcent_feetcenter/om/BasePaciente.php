<?php


/**
 * Base class that represents a row from the 'paciente' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BasePaciente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PacientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PacientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the paciente_nombre field.
     * @var        string
     */
    protected $paciente_nombre;

    /**
     * The value for the paciente_celular field.
     * @var        string
     */
    protected $paciente_celular;

    /**
     * The value for the paciente_telefono field.
     * @var        string
     */
    protected $paciente_telefono;

    /**
     * The value for the paciente_calle field.
     * @var        string
     */
    protected $paciente_calle;

    /**
     * The value for the paciente_numero field.
     * @var        string
     */
    protected $paciente_numero;

    /**
     * The value for the paciente_colonia field.
     * @var        string
     */
    protected $paciente_colonia;

    /**
     * The value for the paciente_codigopostal field.
     * @var        string
     */
    protected $paciente_codigopostal;

    /**
     * The value for the paciente_ciudad field.
     * @var        string
     */
    protected $paciente_ciudad;

    /**
     * The value for the paciente_estado field.
     * @var        string
     */
    protected $paciente_estado;

    /**
     * The value for the paciente_sexo field.
     * @var        string
     */
    protected $paciente_sexo;

    /**
     * The value for the paciente_fechanacimiento field.
     * @var        string
     */
    protected $paciente_fechanacimiento;

    /**
     * The value for the paciente_fecharegistro field.
     * @var        string
     */
    protected $paciente_fecharegistro;

    /**
     * The value for the paciente_name field.
     * @var        string
     */
    protected $paciente_name;

    /**
     * The value for the paciente_ap field.
     * @var        string
     */
    protected $paciente_ap;

    /**
     * The value for the paciente_am field.
     * @var        string
     */
    protected $paciente_am;

    /**
     * @var        Clinica
     */
    protected $aClinica;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        PropelObjectCollection|Grupopaciente[] Collection to store aggregation of Grupopaciente objects.
     */
    protected $collGrupopacientes;
    protected $collGrupopacientesPartial;

    /**
     * @var        PropelObjectCollection|Grupopersonal[] Collection to store aggregation of Grupopersonal objects.
     */
    protected $collGrupopersonalsRelatedByIdpaciente;
    protected $collGrupopersonalsRelatedByIdpacientePartial;

    /**
     * @var        PropelObjectCollection|Grupopersonal[] Collection to store aggregation of Grupopersonal objects.
     */
    protected $collGrupopersonalsRelatedByIdpacienteagregado;
    protected $collGrupopersonalsRelatedByIdpacienteagregadoPartial;

    /**
     * @var        PropelObjectCollection|Pacientemembresia[] Collection to store aggregation of Pacientemembresia objects.
     */
    protected $collPacientemembresias;
    protected $collPacientemembresiasPartial;

    /**
     * @var        PropelObjectCollection|Pacienteseguimiento[] Collection to store aggregation of Pacienteseguimiento objects.
     */
    protected $collPacienteseguimientos;
    protected $collPacienteseguimientosPartial;

    /**
     * @var        PropelObjectCollection|Visita[] Collection to store aggregation of Visita objects.
     */
    protected $collVisitas;
    protected $collVisitasPartial;

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
    protected $grupopacientesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $grupopersonalsRelatedByIdpacienteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacientemembresiasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacienteseguimientosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitasScheduledForDeletion = null;

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
     * Get the [paciente_nombre] column value.
     *
     * @return string
     */
    public function getPacienteNombre()
    {

        return $this->paciente_nombre;
    }

    /**
     * Get the [paciente_celular] column value.
     *
     * @return string
     */
    public function getPacienteCelular()
    {

        return $this->paciente_celular;
    }

    /**
     * Get the [paciente_telefono] column value.
     *
     * @return string
     */
    public function getPacienteTelefono()
    {

        return $this->paciente_telefono;
    }

    /**
     * Get the [paciente_calle] column value.
     *
     * @return string
     */
    public function getPacienteCalle()
    {

        return $this->paciente_calle;
    }

    /**
     * Get the [paciente_numero] column value.
     *
     * @return string
     */
    public function getPacienteNumero()
    {

        return $this->paciente_numero;
    }

    /**
     * Get the [paciente_colonia] column value.
     *
     * @return string
     */
    public function getPacienteColonia()
    {

        return $this->paciente_colonia;
    }

    /**
     * Get the [paciente_codigopostal] column value.
     *
     * @return string
     */
    public function getPacienteCodigopostal()
    {

        return $this->paciente_codigopostal;
    }

    /**
     * Get the [paciente_ciudad] column value.
     *
     * @return string
     */
    public function getPacienteCiudad()
    {

        return $this->paciente_ciudad;
    }

    /**
     * Get the [paciente_estado] column value.
     *
     * @return string
     */
    public function getPacienteEstado()
    {

        return $this->paciente_estado;
    }

    /**
     * Get the [paciente_sexo] column value.
     *
     * @return string
     */
    public function getPacienteSexo()
    {

        return $this->paciente_sexo;
    }

    /**
     * Get the [optionally formatted] temporal [paciente_fechanacimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPacienteFechanacimiento($format = '%x')
    {
        if ($this->paciente_fechanacimiento === null) {
            return null;
        }

        if ($this->paciente_fechanacimiento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->paciente_fechanacimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->paciente_fechanacimiento, true), $x);
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
     * Get the [optionally formatted] temporal [paciente_fecharegistro] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPacienteFecharegistro($format = '%x')
    {
        if ($this->paciente_fecharegistro === null) {
            return null;
        }

        if ($this->paciente_fecharegistro === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->paciente_fecharegistro);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->paciente_fecharegistro, true), $x);
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
     * Get the [paciente_name] column value.
     *
     * @return string
     */
    public function getPacienteName()
    {

        return $this->paciente_name;
    }

    /**
     * Get the [paciente_ap] column value.
     *
     * @return string
     */
    public function getPacienteAp()
    {

        return $this->paciente_ap;
    }

    /**
     * Get the [paciente_am] column value.
     *
     * @return string
     */
    public function getPacienteAm()
    {

        return $this->paciente_am;
    }

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = PacientePeer::IDPACIENTE;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [idclinica] column.
     *
     * @param  int $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setIdclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idclinica !== $v) {
            $this->idclinica = $v;
            $this->modifiedColumns[] = PacientePeer::IDCLINICA;
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
     * @return Paciente The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = PacientePeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [paciente_nombre] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_nombre !== $v) {
            $this->paciente_nombre = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NOMBRE;
        }


        return $this;
    } // setPacienteNombre()

    /**
     * Set the value of [paciente_celular] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_celular !== $v) {
            $this->paciente_celular = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CELULAR;
        }


        return $this;
    } // setPacienteCelular()

    /**
     * Set the value of [paciente_telefono] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_telefono !== $v) {
            $this->paciente_telefono = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_TELEFONO;
        }


        return $this;
    } // setPacienteTelefono()

    /**
     * Set the value of [paciente_calle] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_calle !== $v) {
            $this->paciente_calle = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CALLE;
        }


        return $this;
    } // setPacienteCalle()

    /**
     * Set the value of [paciente_numero] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_numero !== $v) {
            $this->paciente_numero = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NUMERO;
        }


        return $this;
    } // setPacienteNumero()

    /**
     * Set the value of [paciente_colonia] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_colonia !== $v) {
            $this->paciente_colonia = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_COLONIA;
        }


        return $this;
    } // setPacienteColonia()

    /**
     * Set the value of [paciente_codigopostal] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_codigopostal !== $v) {
            $this->paciente_codigopostal = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CODIGOPOSTAL;
        }


        return $this;
    } // setPacienteCodigopostal()

    /**
     * Set the value of [paciente_ciudad] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_ciudad !== $v) {
            $this->paciente_ciudad = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CIUDAD;
        }


        return $this;
    } // setPacienteCiudad()

    /**
     * Set the value of [paciente_estado] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_estado !== $v) {
            $this->paciente_estado = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_ESTADO;
        }


        return $this;
    } // setPacienteEstado()

    /**
     * Set the value of [paciente_sexo] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteSexo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_sexo !== $v) {
            $this->paciente_sexo = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_SEXO;
        }


        return $this;
    } // setPacienteSexo()

    /**
     * Sets the value of [paciente_fechanacimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteFechanacimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->paciente_fechanacimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->paciente_fechanacimiento !== null && $tmpDt = new DateTime($this->paciente_fechanacimiento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->paciente_fechanacimiento = $newDateAsString;
                $this->modifiedColumns[] = PacientePeer::PACIENTE_FECHANACIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setPacienteFechanacimiento()

    /**
     * Sets the value of [paciente_fecharegistro] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteFecharegistro($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->paciente_fecharegistro !== null || $dt !== null) {
            $currentDateAsString = ($this->paciente_fecharegistro !== null && $tmpDt = new DateTime($this->paciente_fecharegistro)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->paciente_fecharegistro = $newDateAsString;
                $this->modifiedColumns[] = PacientePeer::PACIENTE_FECHAREGISTRO;
            }
        } // if either are not null


        return $this;
    } // setPacienteFecharegistro()

    /**
     * Set the value of [paciente_name] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_name !== $v) {
            $this->paciente_name = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NAME;
        }


        return $this;
    } // setPacienteName()

    /**
     * Set the value of [paciente_ap] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteAp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_ap !== $v) {
            $this->paciente_ap = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_AP;
        }


        return $this;
    } // setPacienteAp()

    /**
     * Set the value of [paciente_am] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteAm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_am !== $v) {
            $this->paciente_am = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_AM;
        }


        return $this;
    } // setPacienteAm()

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

            $this->idpaciente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idclinica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleado = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->paciente_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->paciente_celular = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->paciente_telefono = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->paciente_calle = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->paciente_numero = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->paciente_colonia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->paciente_codigopostal = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->paciente_ciudad = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->paciente_estado = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->paciente_sexo = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->paciente_fechanacimiento = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->paciente_fecharegistro = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->paciente_name = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->paciente_ap = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->paciente_am = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = PacientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Paciente object", $e);
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

        if ($this->aClinica !== null && $this->idclinica !== $this->aClinica->getIdclinica()) {
            $this->aClinica = null;
        }
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PacientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClinica = null;
            $this->aEmpleado = null;
            $this->collGrupopacientes = null;

            $this->collGrupopersonalsRelatedByIdpaciente = null;

            $this->collGrupopersonalsRelatedByIdpacienteagregado = null;

            $this->collPacientemembresias = null;

            $this->collPacienteseguimientos = null;

            $this->collVisitas = null;

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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PacienteQuery::create()
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PacientePeer::addInstanceToPool($this);
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

            if ($this->grupopacientesScheduledForDeletion !== null) {
                if (!$this->grupopacientesScheduledForDeletion->isEmpty()) {
                    GrupopacienteQuery::create()
                        ->filterByPrimaryKeys($this->grupopacientesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->grupopacientesScheduledForDeletion = null;
                }
            }

            if ($this->collGrupopacientes !== null) {
                foreach ($this->collGrupopacientes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->grupopersonalsRelatedByIdpacienteScheduledForDeletion !== null) {
                if (!$this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->isEmpty()) {
                    GrupopersonalQuery::create()
                        ->filterByPrimaryKeys($this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion = null;
                }
            }

            if ($this->collGrupopersonalsRelatedByIdpaciente !== null) {
                foreach ($this->collGrupopersonalsRelatedByIdpaciente as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion !== null) {
                if (!$this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->isEmpty()) {
                    GrupopersonalQuery::create()
                        ->filterByPrimaryKeys($this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion = null;
                }
            }

            if ($this->collGrupopersonalsRelatedByIdpacienteagregado !== null) {
                foreach ($this->collGrupopersonalsRelatedByIdpacienteagregado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pacientemembresiasScheduledForDeletion !== null) {
                if (!$this->pacientemembresiasScheduledForDeletion->isEmpty()) {
                    PacientemembresiaQuery::create()
                        ->filterByPrimaryKeys($this->pacientemembresiasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientemembresiasScheduledForDeletion = null;
                }
            }

            if ($this->collPacientemembresias !== null) {
                foreach ($this->collPacientemembresias as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->visitasScheduledForDeletion !== null) {
                if (!$this->visitasScheduledForDeletion->isEmpty()) {
                    VisitaQuery::create()
                        ->filterByPrimaryKeys($this->visitasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitasScheduledForDeletion = null;
                }
            }

            if ($this->collVisitas !== null) {
                foreach ($this->collVisitas as $referrerFK) {
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

        $this->modifiedColumns[] = PacientePeer::IDPACIENTE;
        if (null !== $this->idpaciente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PacientePeer::IDPACIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PacientePeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(PacientePeer::IDCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idclinica`';
        }
        if ($this->isColumnModified(PacientePeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_nombre`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_celular`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_telefono`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_calle`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_numero`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_colonia`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_codigopostal`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_ciudad`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_estado`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_SEXO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_sexo`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_FECHANACIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_fechanacimiento`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_FECHAREGISTRO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_fecharegistro`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_name`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_AP)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_ap`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_AM)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_am`';
        }

        $sql = sprintf(
            'INSERT INTO `paciente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idclinica`':
                        $stmt->bindValue($identifier, $this->idclinica, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`paciente_nombre`':
                        $stmt->bindValue($identifier, $this->paciente_nombre, PDO::PARAM_STR);
                        break;
                    case '`paciente_celular`':
                        $stmt->bindValue($identifier, $this->paciente_celular, PDO::PARAM_STR);
                        break;
                    case '`paciente_telefono`':
                        $stmt->bindValue($identifier, $this->paciente_telefono, PDO::PARAM_STR);
                        break;
                    case '`paciente_calle`':
                        $stmt->bindValue($identifier, $this->paciente_calle, PDO::PARAM_STR);
                        break;
                    case '`paciente_numero`':
                        $stmt->bindValue($identifier, $this->paciente_numero, PDO::PARAM_STR);
                        break;
                    case '`paciente_colonia`':
                        $stmt->bindValue($identifier, $this->paciente_colonia, PDO::PARAM_STR);
                        break;
                    case '`paciente_codigopostal`':
                        $stmt->bindValue($identifier, $this->paciente_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`paciente_ciudad`':
                        $stmt->bindValue($identifier, $this->paciente_ciudad, PDO::PARAM_STR);
                        break;
                    case '`paciente_estado`':
                        $stmt->bindValue($identifier, $this->paciente_estado, PDO::PARAM_STR);
                        break;
                    case '`paciente_sexo`':
                        $stmt->bindValue($identifier, $this->paciente_sexo, PDO::PARAM_STR);
                        break;
                    case '`paciente_fechanacimiento`':
                        $stmt->bindValue($identifier, $this->paciente_fechanacimiento, PDO::PARAM_STR);
                        break;
                    case '`paciente_fecharegistro`':
                        $stmt->bindValue($identifier, $this->paciente_fecharegistro, PDO::PARAM_STR);
                        break;
                    case '`paciente_name`':
                        $stmt->bindValue($identifier, $this->paciente_name, PDO::PARAM_STR);
                        break;
                    case '`paciente_ap`':
                        $stmt->bindValue($identifier, $this->paciente_ap, PDO::PARAM_STR);
                        break;
                    case '`paciente_am`':
                        $stmt->bindValue($identifier, $this->paciente_am, PDO::PARAM_STR);
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
        $this->setIdpaciente($pk);

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

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = PacientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGrupopacientes !== null) {
                    foreach ($this->collGrupopacientes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGrupopersonalsRelatedByIdpaciente !== null) {
                    foreach ($this->collGrupopersonalsRelatedByIdpaciente as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGrupopersonalsRelatedByIdpacienteagregado !== null) {
                    foreach ($this->collGrupopersonalsRelatedByIdpacienteagregado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacientemembresias !== null) {
                    foreach ($this->collPacientemembresias as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacienteseguimientos !== null) {
                    foreach ($this->collPacienteseguimientos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitas !== null) {
                    foreach ($this->collVisitas as $referrerFK) {
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
        $pos = PacientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpaciente();
                break;
            case 1:
                return $this->getIdclinica();
                break;
            case 2:
                return $this->getIdempleado();
                break;
            case 3:
                return $this->getPacienteNombre();
                break;
            case 4:
                return $this->getPacienteCelular();
                break;
            case 5:
                return $this->getPacienteTelefono();
                break;
            case 6:
                return $this->getPacienteCalle();
                break;
            case 7:
                return $this->getPacienteNumero();
                break;
            case 8:
                return $this->getPacienteColonia();
                break;
            case 9:
                return $this->getPacienteCodigopostal();
                break;
            case 10:
                return $this->getPacienteCiudad();
                break;
            case 11:
                return $this->getPacienteEstado();
                break;
            case 12:
                return $this->getPacienteSexo();
                break;
            case 13:
                return $this->getPacienteFechanacimiento();
                break;
            case 14:
                return $this->getPacienteFecharegistro();
                break;
            case 15:
                return $this->getPacienteName();
                break;
            case 16:
                return $this->getPacienteAp();
                break;
            case 17:
                return $this->getPacienteAm();
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
        if (isset($alreadyDumpedObjects['Paciente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Paciente'][$this->getPrimaryKey()] = true;
        $keys = PacientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpaciente(),
            $keys[1] => $this->getIdclinica(),
            $keys[2] => $this->getIdempleado(),
            $keys[3] => $this->getPacienteNombre(),
            $keys[4] => $this->getPacienteCelular(),
            $keys[5] => $this->getPacienteTelefono(),
            $keys[6] => $this->getPacienteCalle(),
            $keys[7] => $this->getPacienteNumero(),
            $keys[8] => $this->getPacienteColonia(),
            $keys[9] => $this->getPacienteCodigopostal(),
            $keys[10] => $this->getPacienteCiudad(),
            $keys[11] => $this->getPacienteEstado(),
            $keys[12] => $this->getPacienteSexo(),
            $keys[13] => $this->getPacienteFechanacimiento(),
            $keys[14] => $this->getPacienteFecharegistro(),
            $keys[15] => $this->getPacienteName(),
            $keys[16] => $this->getPacienteAp(),
            $keys[17] => $this->getPacienteAm(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClinica) {
                $result['Clinica'] = $this->aClinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGrupopacientes) {
                $result['Grupopacientes'] = $this->collGrupopacientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGrupopersonalsRelatedByIdpaciente) {
                $result['GrupopersonalsRelatedByIdpaciente'] = $this->collGrupopersonalsRelatedByIdpaciente->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGrupopersonalsRelatedByIdpacienteagregado) {
                $result['GrupopersonalsRelatedByIdpacienteagregado'] = $this->collGrupopersonalsRelatedByIdpacienteagregado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacientemembresias) {
                $result['Pacientemembresias'] = $this->collPacientemembresias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacienteseguimientos) {
                $result['Pacienteseguimientos'] = $this->collPacienteseguimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitas) {
                $result['Visitas'] = $this->collVisitas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PacientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpaciente($value);
                break;
            case 1:
                $this->setIdclinica($value);
                break;
            case 2:
                $this->setIdempleado($value);
                break;
            case 3:
                $this->setPacienteNombre($value);
                break;
            case 4:
                $this->setPacienteCelular($value);
                break;
            case 5:
                $this->setPacienteTelefono($value);
                break;
            case 6:
                $this->setPacienteCalle($value);
                break;
            case 7:
                $this->setPacienteNumero($value);
                break;
            case 8:
                $this->setPacienteColonia($value);
                break;
            case 9:
                $this->setPacienteCodigopostal($value);
                break;
            case 10:
                $this->setPacienteCiudad($value);
                break;
            case 11:
                $this->setPacienteEstado($value);
                break;
            case 12:
                $this->setPacienteSexo($value);
                break;
            case 13:
                $this->setPacienteFechanacimiento($value);
                break;
            case 14:
                $this->setPacienteFecharegistro($value);
                break;
            case 15:
                $this->setPacienteName($value);
                break;
            case 16:
                $this->setPacienteAp($value);
                break;
            case 17:
                $this->setPacienteAm($value);
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
        $keys = PacientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpaciente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdclinica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleado($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPacienteNombre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPacienteCelular($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPacienteTelefono($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPacienteCalle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPacienteNumero($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPacienteColonia($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPacienteCodigopostal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPacienteCiudad($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPacienteEstado($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPacienteSexo($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPacienteFechanacimiento($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPacienteFecharegistro($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPacienteName($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPacienteAp($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPacienteAm($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PacientePeer::DATABASE_NAME);

        if ($this->isColumnModified(PacientePeer::IDPACIENTE)) $criteria->add(PacientePeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(PacientePeer::IDCLINICA)) $criteria->add(PacientePeer::IDCLINICA, $this->idclinica);
        if ($this->isColumnModified(PacientePeer::IDEMPLEADO)) $criteria->add(PacientePeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOMBRE)) $criteria->add(PacientePeer::PACIENTE_NOMBRE, $this->paciente_nombre);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CELULAR)) $criteria->add(PacientePeer::PACIENTE_CELULAR, $this->paciente_celular);
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONO)) $criteria->add(PacientePeer::PACIENTE_TELEFONO, $this->paciente_telefono);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CALLE)) $criteria->add(PacientePeer::PACIENTE_CALLE, $this->paciente_calle);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NUMERO)) $criteria->add(PacientePeer::PACIENTE_NUMERO, $this->paciente_numero);
        if ($this->isColumnModified(PacientePeer::PACIENTE_COLONIA)) $criteria->add(PacientePeer::PACIENTE_COLONIA, $this->paciente_colonia);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CODIGOPOSTAL)) $criteria->add(PacientePeer::PACIENTE_CODIGOPOSTAL, $this->paciente_codigopostal);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CIUDAD)) $criteria->add(PacientePeer::PACIENTE_CIUDAD, $this->paciente_ciudad);
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADO)) $criteria->add(PacientePeer::PACIENTE_ESTADO, $this->paciente_estado);
        if ($this->isColumnModified(PacientePeer::PACIENTE_SEXO)) $criteria->add(PacientePeer::PACIENTE_SEXO, $this->paciente_sexo);
        if ($this->isColumnModified(PacientePeer::PACIENTE_FECHANACIMIENTO)) $criteria->add(PacientePeer::PACIENTE_FECHANACIMIENTO, $this->paciente_fechanacimiento);
        if ($this->isColumnModified(PacientePeer::PACIENTE_FECHAREGISTRO)) $criteria->add(PacientePeer::PACIENTE_FECHAREGISTRO, $this->paciente_fecharegistro);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NAME)) $criteria->add(PacientePeer::PACIENTE_NAME, $this->paciente_name);
        if ($this->isColumnModified(PacientePeer::PACIENTE_AP)) $criteria->add(PacientePeer::PACIENTE_AP, $this->paciente_ap);
        if ($this->isColumnModified(PacientePeer::PACIENTE_AM)) $criteria->add(PacientePeer::PACIENTE_AM, $this->paciente_am);

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
        $criteria = new Criteria(PacientePeer::DATABASE_NAME);
        $criteria->add(PacientePeer::IDPACIENTE, $this->idpaciente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpaciente();
    }

    /**
     * Generic method to set the primary key (idpaciente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpaciente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpaciente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Paciente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdclinica($this->getIdclinica());
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setPacienteNombre($this->getPacienteNombre());
        $copyObj->setPacienteCelular($this->getPacienteCelular());
        $copyObj->setPacienteTelefono($this->getPacienteTelefono());
        $copyObj->setPacienteCalle($this->getPacienteCalle());
        $copyObj->setPacienteNumero($this->getPacienteNumero());
        $copyObj->setPacienteColonia($this->getPacienteColonia());
        $copyObj->setPacienteCodigopostal($this->getPacienteCodigopostal());
        $copyObj->setPacienteCiudad($this->getPacienteCiudad());
        $copyObj->setPacienteEstado($this->getPacienteEstado());
        $copyObj->setPacienteSexo($this->getPacienteSexo());
        $copyObj->setPacienteFechanacimiento($this->getPacienteFechanacimiento());
        $copyObj->setPacienteFecharegistro($this->getPacienteFecharegistro());
        $copyObj->setPacienteName($this->getPacienteName());
        $copyObj->setPacienteAp($this->getPacienteAp());
        $copyObj->setPacienteAm($this->getPacienteAm());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGrupopacientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGrupopaciente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGrupopersonalsRelatedByIdpaciente() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGrupopersonalRelatedByIdpaciente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGrupopersonalsRelatedByIdpacienteagregado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGrupopersonalRelatedByIdpacienteagregado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacientemembresias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacientemembresia($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacienteseguimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacienteseguimiento($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisita($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpaciente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Paciente Clone of current object.
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
     * @return PacientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PacientePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clinica object.
     *
     * @param                  Clinica $v
     * @return Paciente The current object (for fluent API support)
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
            $v->addPaciente($this);
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
                $this->aClinica->addPacientes($this);
             */
        }

        return $this->aClinica;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Paciente The current object (for fluent API support)
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
            $v->addPaciente($this);
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
                $this->aEmpleado->addPacientes($this);
             */
        }

        return $this->aEmpleado;
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
        if ('Grupopaciente' == $relationName) {
            $this->initGrupopacientes();
        }
        if ('GrupopersonalRelatedByIdpaciente' == $relationName) {
            $this->initGrupopersonalsRelatedByIdpaciente();
        }
        if ('GrupopersonalRelatedByIdpacienteagregado' == $relationName) {
            $this->initGrupopersonalsRelatedByIdpacienteagregado();
        }
        if ('Pacientemembresia' == $relationName) {
            $this->initPacientemembresias();
        }
        if ('Pacienteseguimiento' == $relationName) {
            $this->initPacienteseguimientos();
        }
        if ('Visita' == $relationName) {
            $this->initVisitas();
        }
    }

    /**
     * Clears out the collGrupopacientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addGrupopacientes()
     */
    public function clearGrupopacientes()
    {
        $this->collGrupopacientes = null; // important to set this to null since that means it is uninitialized
        $this->collGrupopacientesPartial = null;

        return $this;
    }

    /**
     * reset is the collGrupopacientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialGrupopacientes($v = true)
    {
        $this->collGrupopacientesPartial = $v;
    }

    /**
     * Initializes the collGrupopacientes collection.
     *
     * By default this just sets the collGrupopacientes collection to an empty array (like clearcollGrupopacientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGrupopacientes($overrideExisting = true)
    {
        if (null !== $this->collGrupopacientes && !$overrideExisting) {
            return;
        }
        $this->collGrupopacientes = new PropelObjectCollection();
        $this->collGrupopacientes->setModel('Grupopaciente');
    }

    /**
     * Gets an array of Grupopaciente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Grupopaciente[] List of Grupopaciente objects
     * @throws PropelException
     */
    public function getGrupopacientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGrupopacientesPartial && !$this->isNew();
        if (null === $this->collGrupopacientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGrupopacientes) {
                // return empty collection
                $this->initGrupopacientes();
            } else {
                $collGrupopacientes = GrupopacienteQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGrupopacientesPartial && count($collGrupopacientes)) {
                      $this->initGrupopacientes(false);

                      foreach ($collGrupopacientes as $obj) {
                        if (false == $this->collGrupopacientes->contains($obj)) {
                          $this->collGrupopacientes->append($obj);
                        }
                      }

                      $this->collGrupopacientesPartial = true;
                    }

                    $collGrupopacientes->getInternalIterator()->rewind();

                    return $collGrupopacientes;
                }

                if ($partial && $this->collGrupopacientes) {
                    foreach ($this->collGrupopacientes as $obj) {
                        if ($obj->isNew()) {
                            $collGrupopacientes[] = $obj;
                        }
                    }
                }

                $this->collGrupopacientes = $collGrupopacientes;
                $this->collGrupopacientesPartial = false;
            }
        }

        return $this->collGrupopacientes;
    }

    /**
     * Sets a collection of Grupopaciente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $grupopacientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setGrupopacientes(PropelCollection $grupopacientes, PropelPDO $con = null)
    {
        $grupopacientesToDelete = $this->getGrupopacientes(new Criteria(), $con)->diff($grupopacientes);


        $this->grupopacientesScheduledForDeletion = $grupopacientesToDelete;

        foreach ($grupopacientesToDelete as $grupopacienteRemoved) {
            $grupopacienteRemoved->setPaciente(null);
        }

        $this->collGrupopacientes = null;
        foreach ($grupopacientes as $grupopaciente) {
            $this->addGrupopaciente($grupopaciente);
        }

        $this->collGrupopacientes = $grupopacientes;
        $this->collGrupopacientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Grupopaciente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Grupopaciente objects.
     * @throws PropelException
     */
    public function countGrupopacientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGrupopacientesPartial && !$this->isNew();
        if (null === $this->collGrupopacientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGrupopacientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGrupopacientes());
            }
            $query = GrupopacienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collGrupopacientes);
    }

    /**
     * Method called to associate a Grupopaciente object to this object
     * through the Grupopaciente foreign key attribute.
     *
     * @param    Grupopaciente $l Grupopaciente
     * @return Paciente The current object (for fluent API support)
     */
    public function addGrupopaciente(Grupopaciente $l)
    {
        if ($this->collGrupopacientes === null) {
            $this->initGrupopacientes();
            $this->collGrupopacientesPartial = true;
        }

        if (!in_array($l, $this->collGrupopacientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGrupopaciente($l);

            if ($this->grupopacientesScheduledForDeletion and $this->grupopacientesScheduledForDeletion->contains($l)) {
                $this->grupopacientesScheduledForDeletion->remove($this->grupopacientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Grupopaciente $grupopaciente The grupopaciente object to add.
     */
    protected function doAddGrupopaciente($grupopaciente)
    {
        $this->collGrupopacientes[]= $grupopaciente;
        $grupopaciente->setPaciente($this);
    }

    /**
     * @param	Grupopaciente $grupopaciente The grupopaciente object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeGrupopaciente($grupopaciente)
    {
        if ($this->getGrupopacientes()->contains($grupopaciente)) {
            $this->collGrupopacientes->remove($this->collGrupopacientes->search($grupopaciente));
            if (null === $this->grupopacientesScheduledForDeletion) {
                $this->grupopacientesScheduledForDeletion = clone $this->collGrupopacientes;
                $this->grupopacientesScheduledForDeletion->clear();
            }
            $this->grupopacientesScheduledForDeletion[]= clone $grupopaciente;
            $grupopaciente->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Grupopacientes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Grupopaciente[] List of Grupopaciente objects
     */
    public function getGrupopacientesJoinGrupo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GrupopacienteQuery::create(null, $criteria);
        $query->joinWith('Grupo', $join_behavior);

        return $this->getGrupopacientes($query, $con);
    }

    /**
     * Clears out the collGrupopersonalsRelatedByIdpaciente collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addGrupopersonalsRelatedByIdpaciente()
     */
    public function clearGrupopersonalsRelatedByIdpaciente()
    {
        $this->collGrupopersonalsRelatedByIdpaciente = null; // important to set this to null since that means it is uninitialized
        $this->collGrupopersonalsRelatedByIdpacientePartial = null;

        return $this;
    }

    /**
     * reset is the collGrupopersonalsRelatedByIdpaciente collection loaded partially
     *
     * @return void
     */
    public function resetPartialGrupopersonalsRelatedByIdpaciente($v = true)
    {
        $this->collGrupopersonalsRelatedByIdpacientePartial = $v;
    }

    /**
     * Initializes the collGrupopersonalsRelatedByIdpaciente collection.
     *
     * By default this just sets the collGrupopersonalsRelatedByIdpaciente collection to an empty array (like clearcollGrupopersonalsRelatedByIdpaciente());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGrupopersonalsRelatedByIdpaciente($overrideExisting = true)
    {
        if (null !== $this->collGrupopersonalsRelatedByIdpaciente && !$overrideExisting) {
            return;
        }
        $this->collGrupopersonalsRelatedByIdpaciente = new PropelObjectCollection();
        $this->collGrupopersonalsRelatedByIdpaciente->setModel('Grupopersonal');
    }

    /**
     * Gets an array of Grupopersonal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Grupopersonal[] List of Grupopersonal objects
     * @throws PropelException
     */
    public function getGrupopersonalsRelatedByIdpaciente($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGrupopersonalsRelatedByIdpacientePartial && !$this->isNew();
        if (null === $this->collGrupopersonalsRelatedByIdpaciente || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGrupopersonalsRelatedByIdpaciente) {
                // return empty collection
                $this->initGrupopersonalsRelatedByIdpaciente();
            } else {
                $collGrupopersonalsRelatedByIdpaciente = GrupopersonalQuery::create(null, $criteria)
                    ->filterByPacienteRelatedByIdpaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGrupopersonalsRelatedByIdpacientePartial && count($collGrupopersonalsRelatedByIdpaciente)) {
                      $this->initGrupopersonalsRelatedByIdpaciente(false);

                      foreach ($collGrupopersonalsRelatedByIdpaciente as $obj) {
                        if (false == $this->collGrupopersonalsRelatedByIdpaciente->contains($obj)) {
                          $this->collGrupopersonalsRelatedByIdpaciente->append($obj);
                        }
                      }

                      $this->collGrupopersonalsRelatedByIdpacientePartial = true;
                    }

                    $collGrupopersonalsRelatedByIdpaciente->getInternalIterator()->rewind();

                    return $collGrupopersonalsRelatedByIdpaciente;
                }

                if ($partial && $this->collGrupopersonalsRelatedByIdpaciente) {
                    foreach ($this->collGrupopersonalsRelatedByIdpaciente as $obj) {
                        if ($obj->isNew()) {
                            $collGrupopersonalsRelatedByIdpaciente[] = $obj;
                        }
                    }
                }

                $this->collGrupopersonalsRelatedByIdpaciente = $collGrupopersonalsRelatedByIdpaciente;
                $this->collGrupopersonalsRelatedByIdpacientePartial = false;
            }
        }

        return $this->collGrupopersonalsRelatedByIdpaciente;
    }

    /**
     * Sets a collection of GrupopersonalRelatedByIdpaciente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $grupopersonalsRelatedByIdpaciente A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setGrupopersonalsRelatedByIdpaciente(PropelCollection $grupopersonalsRelatedByIdpaciente, PropelPDO $con = null)
    {
        $grupopersonalsRelatedByIdpacienteToDelete = $this->getGrupopersonalsRelatedByIdpaciente(new Criteria(), $con)->diff($grupopersonalsRelatedByIdpaciente);


        $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion = $grupopersonalsRelatedByIdpacienteToDelete;

        foreach ($grupopersonalsRelatedByIdpacienteToDelete as $grupopersonalRelatedByIdpacienteRemoved) {
            $grupopersonalRelatedByIdpacienteRemoved->setPacienteRelatedByIdpaciente(null);
        }

        $this->collGrupopersonalsRelatedByIdpaciente = null;
        foreach ($grupopersonalsRelatedByIdpaciente as $grupopersonalRelatedByIdpaciente) {
            $this->addGrupopersonalRelatedByIdpaciente($grupopersonalRelatedByIdpaciente);
        }

        $this->collGrupopersonalsRelatedByIdpaciente = $grupopersonalsRelatedByIdpaciente;
        $this->collGrupopersonalsRelatedByIdpacientePartial = false;

        return $this;
    }

    /**
     * Returns the number of related Grupopersonal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Grupopersonal objects.
     * @throws PropelException
     */
    public function countGrupopersonalsRelatedByIdpaciente(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGrupopersonalsRelatedByIdpacientePartial && !$this->isNew();
        if (null === $this->collGrupopersonalsRelatedByIdpaciente || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGrupopersonalsRelatedByIdpaciente) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGrupopersonalsRelatedByIdpaciente());
            }
            $query = GrupopersonalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPacienteRelatedByIdpaciente($this)
                ->count($con);
        }

        return count($this->collGrupopersonalsRelatedByIdpaciente);
    }

    /**
     * Method called to associate a Grupopersonal object to this object
     * through the Grupopersonal foreign key attribute.
     *
     * @param    Grupopersonal $l Grupopersonal
     * @return Paciente The current object (for fluent API support)
     */
    public function addGrupopersonalRelatedByIdpaciente(Grupopersonal $l)
    {
        if ($this->collGrupopersonalsRelatedByIdpaciente === null) {
            $this->initGrupopersonalsRelatedByIdpaciente();
            $this->collGrupopersonalsRelatedByIdpacientePartial = true;
        }

        if (!in_array($l, $this->collGrupopersonalsRelatedByIdpaciente->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGrupopersonalRelatedByIdpaciente($l);

            if ($this->grupopersonalsRelatedByIdpacienteScheduledForDeletion and $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->contains($l)) {
                $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->remove($this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GrupopersonalRelatedByIdpaciente $grupopersonalRelatedByIdpaciente The grupopersonalRelatedByIdpaciente object to add.
     */
    protected function doAddGrupopersonalRelatedByIdpaciente($grupopersonalRelatedByIdpaciente)
    {
        $this->collGrupopersonalsRelatedByIdpaciente[]= $grupopersonalRelatedByIdpaciente;
        $grupopersonalRelatedByIdpaciente->setPacienteRelatedByIdpaciente($this);
    }

    /**
     * @param	GrupopersonalRelatedByIdpaciente $grupopersonalRelatedByIdpaciente The grupopersonalRelatedByIdpaciente object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeGrupopersonalRelatedByIdpaciente($grupopersonalRelatedByIdpaciente)
    {
        if ($this->getGrupopersonalsRelatedByIdpaciente()->contains($grupopersonalRelatedByIdpaciente)) {
            $this->collGrupopersonalsRelatedByIdpaciente->remove($this->collGrupopersonalsRelatedByIdpaciente->search($grupopersonalRelatedByIdpaciente));
            if (null === $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion) {
                $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion = clone $this->collGrupopersonalsRelatedByIdpaciente;
                $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion->clear();
            }
            $this->grupopersonalsRelatedByIdpacienteScheduledForDeletion[]= clone $grupopersonalRelatedByIdpaciente;
            $grupopersonalRelatedByIdpaciente->setPacienteRelatedByIdpaciente(null);
        }

        return $this;
    }

    /**
     * Clears out the collGrupopersonalsRelatedByIdpacienteagregado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addGrupopersonalsRelatedByIdpacienteagregado()
     */
    public function clearGrupopersonalsRelatedByIdpacienteagregado()
    {
        $this->collGrupopersonalsRelatedByIdpacienteagregado = null; // important to set this to null since that means it is uninitialized
        $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = null;

        return $this;
    }

    /**
     * reset is the collGrupopersonalsRelatedByIdpacienteagregado collection loaded partially
     *
     * @return void
     */
    public function resetPartialGrupopersonalsRelatedByIdpacienteagregado($v = true)
    {
        $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = $v;
    }

    /**
     * Initializes the collGrupopersonalsRelatedByIdpacienteagregado collection.
     *
     * By default this just sets the collGrupopersonalsRelatedByIdpacienteagregado collection to an empty array (like clearcollGrupopersonalsRelatedByIdpacienteagregado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGrupopersonalsRelatedByIdpacienteagregado($overrideExisting = true)
    {
        if (null !== $this->collGrupopersonalsRelatedByIdpacienteagregado && !$overrideExisting) {
            return;
        }
        $this->collGrupopersonalsRelatedByIdpacienteagregado = new PropelObjectCollection();
        $this->collGrupopersonalsRelatedByIdpacienteagregado->setModel('Grupopersonal');
    }

    /**
     * Gets an array of Grupopersonal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Grupopersonal[] List of Grupopersonal objects
     * @throws PropelException
     */
    public function getGrupopersonalsRelatedByIdpacienteagregado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial && !$this->isNew();
        if (null === $this->collGrupopersonalsRelatedByIdpacienteagregado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGrupopersonalsRelatedByIdpacienteagregado) {
                // return empty collection
                $this->initGrupopersonalsRelatedByIdpacienteagregado();
            } else {
                $collGrupopersonalsRelatedByIdpacienteagregado = GrupopersonalQuery::create(null, $criteria)
                    ->filterByPacienteRelatedByIdpacienteagregado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial && count($collGrupopersonalsRelatedByIdpacienteagregado)) {
                      $this->initGrupopersonalsRelatedByIdpacienteagregado(false);

                      foreach ($collGrupopersonalsRelatedByIdpacienteagregado as $obj) {
                        if (false == $this->collGrupopersonalsRelatedByIdpacienteagregado->contains($obj)) {
                          $this->collGrupopersonalsRelatedByIdpacienteagregado->append($obj);
                        }
                      }

                      $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = true;
                    }

                    $collGrupopersonalsRelatedByIdpacienteagregado->getInternalIterator()->rewind();

                    return $collGrupopersonalsRelatedByIdpacienteagregado;
                }

                if ($partial && $this->collGrupopersonalsRelatedByIdpacienteagregado) {
                    foreach ($this->collGrupopersonalsRelatedByIdpacienteagregado as $obj) {
                        if ($obj->isNew()) {
                            $collGrupopersonalsRelatedByIdpacienteagregado[] = $obj;
                        }
                    }
                }

                $this->collGrupopersonalsRelatedByIdpacienteagregado = $collGrupopersonalsRelatedByIdpacienteagregado;
                $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = false;
            }
        }

        return $this->collGrupopersonalsRelatedByIdpacienteagregado;
    }

    /**
     * Sets a collection of GrupopersonalRelatedByIdpacienteagregado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $grupopersonalsRelatedByIdpacienteagregado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setGrupopersonalsRelatedByIdpacienteagregado(PropelCollection $grupopersonalsRelatedByIdpacienteagregado, PropelPDO $con = null)
    {
        $grupopersonalsRelatedByIdpacienteagregadoToDelete = $this->getGrupopersonalsRelatedByIdpacienteagregado(new Criteria(), $con)->diff($grupopersonalsRelatedByIdpacienteagregado);


        $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion = $grupopersonalsRelatedByIdpacienteagregadoToDelete;

        foreach ($grupopersonalsRelatedByIdpacienteagregadoToDelete as $grupopersonalRelatedByIdpacienteagregadoRemoved) {
            $grupopersonalRelatedByIdpacienteagregadoRemoved->setPacienteRelatedByIdpacienteagregado(null);
        }

        $this->collGrupopersonalsRelatedByIdpacienteagregado = null;
        foreach ($grupopersonalsRelatedByIdpacienteagregado as $grupopersonalRelatedByIdpacienteagregado) {
            $this->addGrupopersonalRelatedByIdpacienteagregado($grupopersonalRelatedByIdpacienteagregado);
        }

        $this->collGrupopersonalsRelatedByIdpacienteagregado = $grupopersonalsRelatedByIdpacienteagregado;
        $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Grupopersonal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Grupopersonal objects.
     * @throws PropelException
     */
    public function countGrupopersonalsRelatedByIdpacienteagregado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial && !$this->isNew();
        if (null === $this->collGrupopersonalsRelatedByIdpacienteagregado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGrupopersonalsRelatedByIdpacienteagregado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGrupopersonalsRelatedByIdpacienteagregado());
            }
            $query = GrupopersonalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPacienteRelatedByIdpacienteagregado($this)
                ->count($con);
        }

        return count($this->collGrupopersonalsRelatedByIdpacienteagregado);
    }

    /**
     * Method called to associate a Grupopersonal object to this object
     * through the Grupopersonal foreign key attribute.
     *
     * @param    Grupopersonal $l Grupopersonal
     * @return Paciente The current object (for fluent API support)
     */
    public function addGrupopersonalRelatedByIdpacienteagregado(Grupopersonal $l)
    {
        if ($this->collGrupopersonalsRelatedByIdpacienteagregado === null) {
            $this->initGrupopersonalsRelatedByIdpacienteagregado();
            $this->collGrupopersonalsRelatedByIdpacienteagregadoPartial = true;
        }

        if (!in_array($l, $this->collGrupopersonalsRelatedByIdpacienteagregado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGrupopersonalRelatedByIdpacienteagregado($l);

            if ($this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion and $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->contains($l)) {
                $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->remove($this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GrupopersonalRelatedByIdpacienteagregado $grupopersonalRelatedByIdpacienteagregado The grupopersonalRelatedByIdpacienteagregado object to add.
     */
    protected function doAddGrupopersonalRelatedByIdpacienteagregado($grupopersonalRelatedByIdpacienteagregado)
    {
        $this->collGrupopersonalsRelatedByIdpacienteagregado[]= $grupopersonalRelatedByIdpacienteagregado;
        $grupopersonalRelatedByIdpacienteagregado->setPacienteRelatedByIdpacienteagregado($this);
    }

    /**
     * @param	GrupopersonalRelatedByIdpacienteagregado $grupopersonalRelatedByIdpacienteagregado The grupopersonalRelatedByIdpacienteagregado object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeGrupopersonalRelatedByIdpacienteagregado($grupopersonalRelatedByIdpacienteagregado)
    {
        if ($this->getGrupopersonalsRelatedByIdpacienteagregado()->contains($grupopersonalRelatedByIdpacienteagregado)) {
            $this->collGrupopersonalsRelatedByIdpacienteagregado->remove($this->collGrupopersonalsRelatedByIdpacienteagregado->search($grupopersonalRelatedByIdpacienteagregado));
            if (null === $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion) {
                $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion = clone $this->collGrupopersonalsRelatedByIdpacienteagregado;
                $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion->clear();
            }
            $this->grupopersonalsRelatedByIdpacienteagregadoScheduledForDeletion[]= clone $grupopersonalRelatedByIdpacienteagregado;
            $grupopersonalRelatedByIdpacienteagregado->setPacienteRelatedByIdpacienteagregado(null);
        }

        return $this;
    }

    /**
     * Clears out the collPacientemembresias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addPacientemembresias()
     */
    public function clearPacientemembresias()
    {
        $this->collPacientemembresias = null; // important to set this to null since that means it is uninitialized
        $this->collPacientemembresiasPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientemembresias collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientemembresias($v = true)
    {
        $this->collPacientemembresiasPartial = $v;
    }

    /**
     * Initializes the collPacientemembresias collection.
     *
     * By default this just sets the collPacientemembresias collection to an empty array (like clearcollPacientemembresias());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientemembresias($overrideExisting = true)
    {
        if (null !== $this->collPacientemembresias && !$overrideExisting) {
            return;
        }
        $this->collPacientemembresias = new PropelObjectCollection();
        $this->collPacientemembresias->setModel('Pacientemembresia');
    }

    /**
     * Gets an array of Pacientemembresia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     * @throws PropelException
     */
    public function getPacientemembresias($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiasPartial && !$this->isNew();
        if (null === $this->collPacientemembresias || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresias) {
                // return empty collection
                $this->initPacientemembresias();
            } else {
                $collPacientemembresias = PacientemembresiaQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientemembresiasPartial && count($collPacientemembresias)) {
                      $this->initPacientemembresias(false);

                      foreach ($collPacientemembresias as $obj) {
                        if (false == $this->collPacientemembresias->contains($obj)) {
                          $this->collPacientemembresias->append($obj);
                        }
                      }

                      $this->collPacientemembresiasPartial = true;
                    }

                    $collPacientemembresias->getInternalIterator()->rewind();

                    return $collPacientemembresias;
                }

                if ($partial && $this->collPacientemembresias) {
                    foreach ($this->collPacientemembresias as $obj) {
                        if ($obj->isNew()) {
                            $collPacientemembresias[] = $obj;
                        }
                    }
                }

                $this->collPacientemembresias = $collPacientemembresias;
                $this->collPacientemembresiasPartial = false;
            }
        }

        return $this->collPacientemembresias;
    }

    /**
     * Sets a collection of Pacientemembresia objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientemembresias A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacientemembresias(PropelCollection $pacientemembresias, PropelPDO $con = null)
    {
        $pacientemembresiasToDelete = $this->getPacientemembresias(new Criteria(), $con)->diff($pacientemembresias);


        $this->pacientemembresiasScheduledForDeletion = $pacientemembresiasToDelete;

        foreach ($pacientemembresiasToDelete as $pacientemembresiaRemoved) {
            $pacientemembresiaRemoved->setPaciente(null);
        }

        $this->collPacientemembresias = null;
        foreach ($pacientemembresias as $pacientemembresia) {
            $this->addPacientemembresia($pacientemembresia);
        }

        $this->collPacientemembresias = $pacientemembresias;
        $this->collPacientemembresiasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pacientemembresia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pacientemembresia objects.
     * @throws PropelException
     */
    public function countPacientemembresias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientemembresiasPartial && !$this->isNew();
        if (null === $this->collPacientemembresias || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientemembresias) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientemembresias());
            }
            $query = PacientemembresiaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collPacientemembresias);
    }

    /**
     * Method called to associate a Pacientemembresia object to this object
     * through the Pacientemembresia foreign key attribute.
     *
     * @param    Pacientemembresia $l Pacientemembresia
     * @return Paciente The current object (for fluent API support)
     */
    public function addPacientemembresia(Pacientemembresia $l)
    {
        if ($this->collPacientemembresias === null) {
            $this->initPacientemembresias();
            $this->collPacientemembresiasPartial = true;
        }

        if (!in_array($l, $this->collPacientemembresias->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPacientemembresia($l);

            if ($this->pacientemembresiasScheduledForDeletion and $this->pacientemembresiasScheduledForDeletion->contains($l)) {
                $this->pacientemembresiasScheduledForDeletion->remove($this->pacientemembresiasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pacientemembresia $pacientemembresia The pacientemembresia object to add.
     */
    protected function doAddPacientemembresia($pacientemembresia)
    {
        $this->collPacientemembresias[]= $pacientemembresia;
        $pacientemembresia->setPaciente($this);
    }

    /**
     * @param	Pacientemembresia $pacientemembresia The pacientemembresia object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removePacientemembresia($pacientemembresia)
    {
        if ($this->getPacientemembresias()->contains($pacientemembresia)) {
            $this->collPacientemembresias->remove($this->collPacientemembresias->search($pacientemembresia));
            if (null === $this->pacientemembresiasScheduledForDeletion) {
                $this->pacientemembresiasScheduledForDeletion = clone $this->collPacientemembresias;
                $this->pacientemembresiasScheduledForDeletion->clear();
            }
            $this->pacientemembresiasScheduledForDeletion[]= clone $pacientemembresia;
            $pacientemembresia->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacientemembresias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     */
    public function getPacientemembresiasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getPacientemembresias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacientemembresias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacientemembresia[] List of Pacientemembresia objects
     */
    public function getPacientemembresiasJoinMembresia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacientemembresiaQuery::create(null, $criteria);
        $query->joinWith('Membresia', $join_behavior);

        return $this->getPacientemembresias($query, $con);
    }

    /**
     * Clears out the collPacienteseguimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
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
     * If this Paciente is new, it will return
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
                    ->filterByPaciente($this)
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
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteseguimientos(PropelCollection $pacienteseguimientos, PropelPDO $con = null)
    {
        $pacienteseguimientosToDelete = $this->getPacienteseguimientos(new Criteria(), $con)->diff($pacienteseguimientos);


        $this->pacienteseguimientosScheduledForDeletion = $pacienteseguimientosToDelete;

        foreach ($pacienteseguimientosToDelete as $pacienteseguimientoRemoved) {
            $pacienteseguimientoRemoved->setPaciente(null);
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
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collPacienteseguimientos);
    }

    /**
     * Method called to associate a Pacienteseguimiento object to this object
     * through the Pacienteseguimiento foreign key attribute.
     *
     * @param    Pacienteseguimiento $l Pacienteseguimiento
     * @return Paciente The current object (for fluent API support)
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
        $pacienteseguimiento->setPaciente($this);
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to remove.
     * @return Paciente The current object (for fluent API support)
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
            $pacienteseguimiento->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinCanalcomunicacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Canalcomunicacion', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
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
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
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
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
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
     * Clears out the collVisitas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addVisitas()
     */
    public function clearVisitas()
    {
        $this->collVisitas = null; // important to set this to null since that means it is uninitialized
        $this->collVisitasPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitas($v = true)
    {
        $this->collVisitasPartial = $v;
    }

    /**
     * Initializes the collVisitas collection.
     *
     * By default this just sets the collVisitas collection to an empty array (like clearcollVisitas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitas($overrideExisting = true)
    {
        if (null !== $this->collVisitas && !$overrideExisting) {
            return;
        }
        $this->collVisitas = new PropelObjectCollection();
        $this->collVisitas->setModel('Visita');
    }

    /**
     * Gets an array of Visita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visita[] List of Visita objects
     * @throws PropelException
     */
    public function getVisitas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitasPartial && !$this->isNew();
        if (null === $this->collVisitas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitas) {
                // return empty collection
                $this->initVisitas();
            } else {
                $collVisitas = VisitaQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitasPartial && count($collVisitas)) {
                      $this->initVisitas(false);

                      foreach ($collVisitas as $obj) {
                        if (false == $this->collVisitas->contains($obj)) {
                          $this->collVisitas->append($obj);
                        }
                      }

                      $this->collVisitasPartial = true;
                    }

                    $collVisitas->getInternalIterator()->rewind();

                    return $collVisitas;
                }

                if ($partial && $this->collVisitas) {
                    foreach ($this->collVisitas as $obj) {
                        if ($obj->isNew()) {
                            $collVisitas[] = $obj;
                        }
                    }
                }

                $this->collVisitas = $collVisitas;
                $this->collVisitasPartial = false;
            }
        }

        return $this->collVisitas;
    }

    /**
     * Sets a collection of Visita objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setVisitas(PropelCollection $visitas, PropelPDO $con = null)
    {
        $visitasToDelete = $this->getVisitas(new Criteria(), $con)->diff($visitas);


        $this->visitasScheduledForDeletion = $visitasToDelete;

        foreach ($visitasToDelete as $visitaRemoved) {
            $visitaRemoved->setPaciente(null);
        }

        $this->collVisitas = null;
        foreach ($visitas as $visita) {
            $this->addVisita($visita);
        }

        $this->collVisitas = $visitas;
        $this->collVisitasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Visita objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Visita objects.
     * @throws PropelException
     */
    public function countVisitas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitasPartial && !$this->isNew();
        if (null === $this->collVisitas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitas());
            }
            $query = VisitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collVisitas);
    }

    /**
     * Method called to associate a Visita object to this object
     * through the Visita foreign key attribute.
     *
     * @param    Visita $l Visita
     * @return Paciente The current object (for fluent API support)
     */
    public function addVisita(Visita $l)
    {
        if ($this->collVisitas === null) {
            $this->initVisitas();
            $this->collVisitasPartial = true;
        }

        if (!in_array($l, $this->collVisitas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisita($l);

            if ($this->visitasScheduledForDeletion and $this->visitasScheduledForDeletion->contains($l)) {
                $this->visitasScheduledForDeletion->remove($this->visitasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Visita $visita The visita object to add.
     */
    protected function doAddVisita($visita)
    {
        $this->collVisitas[]= $visita;
        $visita->setPaciente($this);
    }

    /**
     * @param	Visita $visita The visita object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeVisita($visita)
    {
        if ($this->getVisitas()->contains($visita)) {
            $this->collVisitas->remove($this->collVisitas->search($visita));
            if (null === $this->visitasScheduledForDeletion) {
                $this->visitasScheduledForDeletion = clone $this->collVisitas;
                $this->visitasScheduledForDeletion->clear();
            }
            $this->visitasScheduledForDeletion[]= clone $visita;
            $visita->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getVisitas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getVisitas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Visitas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasJoinEmpleadoRelatedByIdempleadocreador($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadocreador', $join_behavior);

        return $this->getVisitas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpaciente = null;
        $this->idclinica = null;
        $this->idempleado = null;
        $this->paciente_nombre = null;
        $this->paciente_celular = null;
        $this->paciente_telefono = null;
        $this->paciente_calle = null;
        $this->paciente_numero = null;
        $this->paciente_colonia = null;
        $this->paciente_codigopostal = null;
        $this->paciente_ciudad = null;
        $this->paciente_estado = null;
        $this->paciente_sexo = null;
        $this->paciente_fechanacimiento = null;
        $this->paciente_fecharegistro = null;
        $this->paciente_name = null;
        $this->paciente_ap = null;
        $this->paciente_am = null;
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
            if ($this->collGrupopacientes) {
                foreach ($this->collGrupopacientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGrupopersonalsRelatedByIdpaciente) {
                foreach ($this->collGrupopersonalsRelatedByIdpaciente as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGrupopersonalsRelatedByIdpacienteagregado) {
                foreach ($this->collGrupopersonalsRelatedByIdpacienteagregado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacientemembresias) {
                foreach ($this->collPacientemembresias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacienteseguimientos) {
                foreach ($this->collPacienteseguimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitas) {
                foreach ($this->collVisitas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClinica instanceof Persistent) {
              $this->aClinica->clearAllReferences($deep);
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGrupopacientes instanceof PropelCollection) {
            $this->collGrupopacientes->clearIterator();
        }
        $this->collGrupopacientes = null;
        if ($this->collGrupopersonalsRelatedByIdpaciente instanceof PropelCollection) {
            $this->collGrupopersonalsRelatedByIdpaciente->clearIterator();
        }
        $this->collGrupopersonalsRelatedByIdpaciente = null;
        if ($this->collGrupopersonalsRelatedByIdpacienteagregado instanceof PropelCollection) {
            $this->collGrupopersonalsRelatedByIdpacienteagregado->clearIterator();
        }
        $this->collGrupopersonalsRelatedByIdpacienteagregado = null;
        if ($this->collPacientemembresias instanceof PropelCollection) {
            $this->collPacientemembresias->clearIterator();
        }
        $this->collPacientemembresias = null;
        if ($this->collPacienteseguimientos instanceof PropelCollection) {
            $this->collPacienteseguimientos->clearIterator();
        }
        $this->collPacienteseguimientos = null;
        if ($this->collVisitas instanceof PropelCollection) {
            $this->collVisitas->clearIterator();
        }
        $this->collVisitas = null;
        $this->aClinica = null;
        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PacientePeer::DEFAULT_STRING_FORMAT);
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
