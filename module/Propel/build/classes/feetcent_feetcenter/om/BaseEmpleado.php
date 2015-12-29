<?php


/**
 * Base class that represents a row from the 'empleado' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseEmpleado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the empleado_registradoen field.
     * @var        string
     */
    protected $empleado_registradoen;

    /**
     * The value for the empleado_nombre field.
     * @var        string
     */
    protected $empleado_nombre;

    /**
     * The value for the empleado_nss field.
     * @var        string
     */
    protected $empleado_nss;

    /**
     * The value for the empleado_rfc field.
     * @var        string
     */
    protected $empleado_rfc;

    /**
     * The value for the empleado_calle field.
     * @var        string
     */
    protected $empleado_calle;

    /**
     * The value for the empleado_numero field.
     * @var        string
     */
    protected $empleado_numero;

    /**
     * The value for the empleado_colonia field.
     * @var        string
     */
    protected $empleado_colonia;

    /**
     * The value for the empleado_codigopostal field.
     * @var        string
     */
    protected $empleado_codigopostal;

    /**
     * The value for the empleado_ciudad field.
     * @var        string
     */
    protected $empleado_ciudad;

    /**
     * The value for the empleado_sexo field.
     * @var        string
     */
    protected $empleado_sexo;

    /**
     * The value for the empleado_fechanacimiento field.
     * @var        string
     */
    protected $empleado_fechanacimiento;

    /**
     * The value for the empleado_telefono field.
     * @var        string
     */
    protected $empleado_telefono;

    /**
     * The value for the empleado_celular field.
     * @var        string
     */
    protected $empleado_celular;

    /**
     * The value for the empleado_comprobantedomiclio field.
     * @var        string
     */
    protected $empleado_comprobantedomiclio;

    /**
     * The value for the empleado_comprobanteidentificacion field.
     * @var        string
     */
    protected $empleado_comprobanteidentificacion;

    /**
     * The value for the empleado_sueldo field.
     * @var        string
     */
    protected $empleado_sueldo;

    /**
     * The value for the empleado_foto field.
     * @var        string
     */
    protected $empleado_foto;

    /**
     * The value for the empleado_tipocomisionproducto field.
     * @var        string
     */
    protected $empleado_tipocomisionproducto;

    /**
     * The value for the empleado_cantidadcomisionproducto field.
     * @var        string
     */
    protected $empleado_cantidadcomisionproducto;

    /**
     * The value for the empleado_tipocomisionservicio field.
     * @var        string
     */
    protected $empleado_tipocomisionservicio;

    /**
     * The value for the empleado_cantidadcomisionservicio field.
     * @var        string
     */
    protected $empleado_cantidadcomisionservicio;

    /**
     * @var        PropelObjectCollection|Clinicaempleado[] Collection to store aggregation of Clinicaempleado objects.
     */
    protected $collClinicaempleados;
    protected $collClinicaempleadosPartial;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

    /**
     * @var        PropelObjectCollection|Egresoclinica[] Collection to store aggregation of Egresoclinica objects.
     */
    protected $collEgresoclinicas;
    protected $collEgresoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Empleadoacceso[] Collection to store aggregation of Empleadoacceso objects.
     */
    protected $collEmpleadoaccesos;
    protected $collEmpleadoaccesosPartial;

    /**
     * @var        PropelObjectCollection|Empleadocomision[] Collection to store aggregation of Empleadocomision objects.
     */
    protected $collEmpleadocomisions;
    protected $collEmpleadocomisionsPartial;

    /**
     * @var        PropelObjectCollection|Empleadohorario[] Collection to store aggregation of Empleadohorario objects.
     */
    protected $collEmpleadohorarios;
    protected $collEmpleadohorariosPartial;

    /**
     * @var        PropelObjectCollection|Empleadoreceso[] Collection to store aggregation of Empleadoreceso objects.
     */
    protected $collEmpleadorecesos;
    protected $collEmpleadorecesosPartial;

    /**
     * @var        PropelObjectCollection|Empleadoreporte[] Collection to store aggregation of Empleadoreporte objects.
     */
    protected $collEmpleadoreportesRelatedByIdempleado;
    protected $collEmpleadoreportesRelatedByIdempleadoPartial;

    /**
     * @var        PropelObjectCollection|Empleadoreporte[] Collection to store aggregation of Empleadoreporte objects.
     */
    protected $collEmpleadoreportesRelatedByIdempleadoreportado;
    protected $collEmpleadoreportesRelatedByIdempleadoreportadoPartial;

    /**
     * @var        PropelObjectCollection|Encargadoclinica[] Collection to store aggregation of Encargadoclinica objects.
     */
    protected $collEncargadoclinicas;
    protected $collEncargadoclinicasPartial;

    /**
     * @var        PropelObjectCollection|Faltante[] Collection to store aggregation of Faltante objects.
     */
    protected $collFaltantesRelatedByIdempleadodeudor;
    protected $collFaltantesRelatedByIdempleadodeudorPartial;

    /**
     * @var        PropelObjectCollection|Faltante[] Collection to store aggregation of Faltante objects.
     */
    protected $collFaltantesRelatedByIdempleadogenerador;
    protected $collFaltantesRelatedByIdempleadogeneradorPartial;

    /**
     * @var        PropelObjectCollection|Paciente[] Collection to store aggregation of Paciente objects.
     */
    protected $collPacientes;
    protected $collPacientesPartial;

    /**
     * @var        PropelObjectCollection|Pacienteseguimiento[] Collection to store aggregation of Pacienteseguimiento objects.
     */
    protected $collPacienteseguimientos;
    protected $collPacienteseguimientosPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdempleado;
    protected $collTransferenciasRelatedByIdempleadoPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdempleadoreceptor;
    protected $collTransferenciasRelatedByIdempleadoreceptorPartial;

    /**
     * @var        PropelObjectCollection|Visita[] Collection to store aggregation of Visita objects.
     */
    protected $collVisitasRelatedByIdempleado;
    protected $collVisitasRelatedByIdempleadoPartial;

    /**
     * @var        PropelObjectCollection|Visita[] Collection to store aggregation of Visita objects.
     */
    protected $collVisitasRelatedByIdempleadocreador;
    protected $collVisitasRelatedByIdempleadocreadorPartial;

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
    protected $clinicaempleadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $comprasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $egresoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadoaccesosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadocomisionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadohorariosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadorecesosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadoreportesRelatedByIdempleadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $encargadoclinicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $faltantesRelatedByIdempleadodeudorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $faltantesRelatedByIdempleadogeneradorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacientesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pacienteseguimientosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdempleadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitasRelatedByIdempleadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $visitasRelatedByIdempleadocreadorScheduledForDeletion = null;

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
     * Get the [optionally formatted] temporal [empleado_registradoen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadoRegistradoen($format = 'Y-m-d H:i:s')
    {
        if ($this->empleado_registradoen === null) {
            return null;
        }

        if ($this->empleado_registradoen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empleado_registradoen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleado_registradoen, true), $x);
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
     * Get the [empleado_nombre] column value.
     *
     * @return string
     */
    public function getEmpleadoNombre()
    {

        return $this->empleado_nombre;
    }

    /**
     * Get the [empleado_nss] column value.
     *
     * @return string
     */
    public function getEmpleadoNss()
    {

        return $this->empleado_nss;
    }

    /**
     * Get the [empleado_rfc] column value.
     *
     * @return string
     */
    public function getEmpleadoRfc()
    {

        return $this->empleado_rfc;
    }

    /**
     * Get the [empleado_calle] column value.
     *
     * @return string
     */
    public function getEmpleadoCalle()
    {

        return $this->empleado_calle;
    }

    /**
     * Get the [empleado_numero] column value.
     *
     * @return string
     */
    public function getEmpleadoNumero()
    {

        return $this->empleado_numero;
    }

    /**
     * Get the [empleado_colonia] column value.
     *
     * @return string
     */
    public function getEmpleadoColonia()
    {

        return $this->empleado_colonia;
    }

    /**
     * Get the [empleado_codigopostal] column value.
     *
     * @return string
     */
    public function getEmpleadoCodigopostal()
    {

        return $this->empleado_codigopostal;
    }

    /**
     * Get the [empleado_ciudad] column value.
     *
     * @return string
     */
    public function getEmpleadoCiudad()
    {

        return $this->empleado_ciudad;
    }

    /**
     * Get the [empleado_sexo] column value.
     *
     * @return string
     */
    public function getEmpleadoSexo()
    {

        return $this->empleado_sexo;
    }

    /**
     * Get the [optionally formatted] temporal [empleado_fechanacimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadoFechanacimiento($format = '%x')
    {
        if ($this->empleado_fechanacimiento === null) {
            return null;
        }

        if ($this->empleado_fechanacimiento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empleado_fechanacimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleado_fechanacimiento, true), $x);
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
     * Get the [empleado_telefono] column value.
     *
     * @return string
     */
    public function getEmpleadoTelefono()
    {

        return $this->empleado_telefono;
    }

    /**
     * Get the [empleado_celular] column value.
     *
     * @return string
     */
    public function getEmpleadoCelular()
    {

        return $this->empleado_celular;
    }

    /**
     * Get the [empleado_comprobantedomiclio] column value.
     *
     * @return string
     */
    public function getEmpleadoComprobantedomiclio()
    {

        return $this->empleado_comprobantedomiclio;
    }

    /**
     * Get the [empleado_comprobanteidentificacion] column value.
     *
     * @return string
     */
    public function getEmpleadoComprobanteidentificacion()
    {

        return $this->empleado_comprobanteidentificacion;
    }

    /**
     * Get the [empleado_sueldo] column value.
     *
     * @return string
     */
    public function getEmpleadoSueldo()
    {

        return $this->empleado_sueldo;
    }

    /**
     * Get the [empleado_foto] column value.
     *
     * @return string
     */
    public function getEmpleadoFoto()
    {

        return $this->empleado_foto;
    }

    /**
     * Get the [empleado_tipocomisionproducto] column value.
     *
     * @return string
     */
    public function getEmpleadoTipocomisionproducto()
    {

        return $this->empleado_tipocomisionproducto;
    }

    /**
     * Get the [empleado_cantidadcomisionproducto] column value.
     *
     * @return string
     */
    public function getEmpleadoCantidadcomisionproducto()
    {

        return $this->empleado_cantidadcomisionproducto;
    }

    /**
     * Get the [empleado_tipocomisionservicio] column value.
     *
     * @return string
     */
    public function getEmpleadoTipocomisionservicio()
    {

        return $this->empleado_tipocomisionservicio;
    }

    /**
     * Get the [empleado_cantidadcomisionservicio] column value.
     *
     * @return string
     */
    public function getEmpleadoCantidadcomisionservicio()
    {

        return $this->empleado_cantidadcomisionservicio;
    }

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        }


        return $this;
    } // setIdempleado()

    /**
     * Sets the value of [empleado_registradoen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoRegistradoen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleado_registradoen !== null || $dt !== null) {
            $currentDateAsString = ($this->empleado_registradoen !== null && $tmpDt = new DateTime($this->empleado_registradoen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleado_registradoen = $newDateAsString;
                $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_REGISTRADOEN;
            }
        } // if either are not null


        return $this;
    } // setEmpleadoRegistradoen()

    /**
     * Set the value of [empleado_nombre] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombre !== $v) {
            $this->empleado_nombre = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBRE;
        }


        return $this;
    } // setEmpleadoNombre()

    /**
     * Set the value of [empleado_nss] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNss($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nss !== $v) {
            $this->empleado_nss = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NSS;
        }


        return $this;
    } // setEmpleadoNss()

    /**
     * Set the value of [empleado_rfc] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_rfc !== $v) {
            $this->empleado_rfc = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_RFC;
        }


        return $this;
    } // setEmpleadoRfc()

    /**
     * Set the value of [empleado_calle] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_calle !== $v) {
            $this->empleado_calle = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CALLE;
        }


        return $this;
    } // setEmpleadoCalle()

    /**
     * Set the value of [empleado_numero] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_numero !== $v) {
            $this->empleado_numero = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NUMERO;
        }


        return $this;
    } // setEmpleadoNumero()

    /**
     * Set the value of [empleado_colonia] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_colonia !== $v) {
            $this->empleado_colonia = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COLONIA;
        }


        return $this;
    } // setEmpleadoColonia()

    /**
     * Set the value of [empleado_codigopostal] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_codigopostal !== $v) {
            $this->empleado_codigopostal = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CODIGOPOSTAL;
        }


        return $this;
    } // setEmpleadoCodigopostal()

    /**
     * Set the value of [empleado_ciudad] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_ciudad !== $v) {
            $this->empleado_ciudad = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CIUDAD;
        }


        return $this;
    } // setEmpleadoCiudad()

    /**
     * Set the value of [empleado_sexo] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoSexo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_sexo !== $v) {
            $this->empleado_sexo = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_SEXO;
        }


        return $this;
    } // setEmpleadoSexo()

    /**
     * Sets the value of [empleado_fechanacimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoFechanacimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleado_fechanacimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->empleado_fechanacimiento !== null && $tmpDt = new DateTime($this->empleado_fechanacimiento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleado_fechanacimiento = $newDateAsString;
                $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_FECHANACIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setEmpleadoFechanacimiento()

    /**
     * Set the value of [empleado_telefono] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_telefono !== $v) {
            $this->empleado_telefono = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TELEFONO;
        }


        return $this;
    } // setEmpleadoTelefono()

    /**
     * Set the value of [empleado_celular] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_celular !== $v) {
            $this->empleado_celular = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CELULAR;
        }


        return $this;
    } // setEmpleadoCelular()

    /**
     * Set the value of [empleado_comprobantedomiclio] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoComprobantedomiclio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_comprobantedomiclio !== $v) {
            $this->empleado_comprobantedomiclio = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO;
        }


        return $this;
    } // setEmpleadoComprobantedomiclio()

    /**
     * Set the value of [empleado_comprobanteidentificacion] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoComprobanteidentificacion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_comprobanteidentificacion !== $v) {
            $this->empleado_comprobanteidentificacion = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION;
        }


        return $this;
    } // setEmpleadoComprobanteidentificacion()

    /**
     * Set the value of [empleado_sueldo] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoSueldo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->empleado_sueldo !== $v) {
            $this->empleado_sueldo = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_SUELDO;
        }


        return $this;
    } // setEmpleadoSueldo()

    /**
     * Set the value of [empleado_foto] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoFoto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_foto !== $v) {
            $this->empleado_foto = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_FOTO;
        }


        return $this;
    } // setEmpleadoFoto()

    /**
     * Set the value of [empleado_tipocomisionproducto] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTipocomisionproducto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_tipocomisionproducto !== $v) {
            $this->empleado_tipocomisionproducto = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TIPOCOMISIONPRODUCTO;
        }


        return $this;
    } // setEmpleadoTipocomisionproducto()

    /**
     * Set the value of [empleado_cantidadcomisionproducto] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCantidadcomisionproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->empleado_cantidadcomisionproducto !== $v) {
            $this->empleado_cantidadcomisionproducto = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONPRODUCTO;
        }


        return $this;
    } // setEmpleadoCantidadcomisionproducto()

    /**
     * Set the value of [empleado_tipocomisionservicio] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTipocomisionservicio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_tipocomisionservicio !== $v) {
            $this->empleado_tipocomisionservicio = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TIPOCOMISIONSERVICIO;
        }


        return $this;
    } // setEmpleadoTipocomisionservicio()

    /**
     * Set the value of [empleado_cantidadcomisionservicio] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCantidadcomisionservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->empleado_cantidadcomisionservicio !== $v) {
            $this->empleado_cantidadcomisionservicio = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONSERVICIO;
        }


        return $this;
    } // setEmpleadoCantidadcomisionservicio()

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

            $this->idempleado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empleado_registradoen = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->empleado_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleado_nss = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleado_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleado_calle = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empleado_numero = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->empleado_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->empleado_codigopostal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->empleado_ciudad = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->empleado_sexo = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->empleado_fechanacimiento = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->empleado_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->empleado_celular = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->empleado_comprobantedomiclio = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->empleado_comprobanteidentificacion = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->empleado_sueldo = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->empleado_foto = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->empleado_tipocomisionproducto = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->empleado_cantidadcomisionproducto = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->empleado_tipocomisionservicio = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->empleado_cantidadcomisionservicio = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = EmpleadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleado object", $e);
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collClinicaempleados = null;

            $this->collCompras = null;

            $this->collEgresoclinicas = null;

            $this->collEmpleadoaccesos = null;

            $this->collEmpleadocomisions = null;

            $this->collEmpleadohorarios = null;

            $this->collEmpleadorecesos = null;

            $this->collEmpleadoreportesRelatedByIdempleado = null;

            $this->collEmpleadoreportesRelatedByIdempleadoreportado = null;

            $this->collEncargadoclinicas = null;

            $this->collFaltantesRelatedByIdempleadodeudor = null;

            $this->collFaltantesRelatedByIdempleadogenerador = null;

            $this->collPacientes = null;

            $this->collPacienteseguimientos = null;

            $this->collTransferenciasRelatedByIdempleado = null;

            $this->collTransferenciasRelatedByIdempleadoreceptor = null;

            $this->collVisitasRelatedByIdempleado = null;

            $this->collVisitasRelatedByIdempleadocreador = null;

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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadoQuery::create()
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpleadoPeer::addInstanceToPool($this);
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

            if ($this->clinicaempleadosScheduledForDeletion !== null) {
                if (!$this->clinicaempleadosScheduledForDeletion->isEmpty()) {
                    ClinicaempleadoQuery::create()
                        ->filterByPrimaryKeys($this->clinicaempleadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clinicaempleadosScheduledForDeletion = null;
                }
            }

            if ($this->collClinicaempleados !== null) {
                foreach ($this->collClinicaempleados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->comprasScheduledForDeletion !== null) {
                if (!$this->comprasScheduledForDeletion->isEmpty()) {
                    CompraQuery::create()
                        ->filterByPrimaryKeys($this->comprasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comprasScheduledForDeletion = null;
                }
            }

            if ($this->collCompras !== null) {
                foreach ($this->collCompras as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->egresoclinicasScheduledForDeletion !== null) {
                if (!$this->egresoclinicasScheduledForDeletion->isEmpty()) {
                    EgresoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->egresoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->egresoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collEgresoclinicas !== null) {
                foreach ($this->collEgresoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadoaccesosScheduledForDeletion !== null) {
                if (!$this->empleadoaccesosScheduledForDeletion->isEmpty()) {
                    EmpleadoaccesoQuery::create()
                        ->filterByPrimaryKeys($this->empleadoaccesosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadoaccesosScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadoaccesos !== null) {
                foreach ($this->collEmpleadoaccesos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadocomisionsScheduledForDeletion !== null) {
                if (!$this->empleadocomisionsScheduledForDeletion->isEmpty()) {
                    EmpleadocomisionQuery::create()
                        ->filterByPrimaryKeys($this->empleadocomisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadocomisionsScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadocomisions !== null) {
                foreach ($this->collEmpleadocomisions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadohorariosScheduledForDeletion !== null) {
                if (!$this->empleadohorariosScheduledForDeletion->isEmpty()) {
                    EmpleadohorarioQuery::create()
                        ->filterByPrimaryKeys($this->empleadohorariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadohorariosScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadohorarios !== null) {
                foreach ($this->collEmpleadohorarios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadorecesosScheduledForDeletion !== null) {
                if (!$this->empleadorecesosScheduledForDeletion->isEmpty()) {
                    EmpleadorecesoQuery::create()
                        ->filterByPrimaryKeys($this->empleadorecesosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadorecesosScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadorecesos !== null) {
                foreach ($this->collEmpleadorecesos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadoreportesRelatedByIdempleadoScheduledForDeletion !== null) {
                if (!$this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->isEmpty()) {
                    EmpleadoreporteQuery::create()
                        ->filterByPrimaryKeys($this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadoreportesRelatedByIdempleado !== null) {
                foreach ($this->collEmpleadoreportesRelatedByIdempleado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion !== null) {
                if (!$this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->isEmpty()) {
                    EmpleadoreporteQuery::create()
                        ->filterByPrimaryKeys($this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadoreportesRelatedByIdempleadoreportado !== null) {
                foreach ($this->collEmpleadoreportesRelatedByIdempleadoreportado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->encargadoclinicasScheduledForDeletion !== null) {
                if (!$this->encargadoclinicasScheduledForDeletion->isEmpty()) {
                    EncargadoclinicaQuery::create()
                        ->filterByPrimaryKeys($this->encargadoclinicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->encargadoclinicasScheduledForDeletion = null;
                }
            }

            if ($this->collEncargadoclinicas !== null) {
                foreach ($this->collEncargadoclinicas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->faltantesRelatedByIdempleadodeudorScheduledForDeletion !== null) {
                if (!$this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->isEmpty()) {
                    FaltanteQuery::create()
                        ->filterByPrimaryKeys($this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion = null;
                }
            }

            if ($this->collFaltantesRelatedByIdempleadodeudor !== null) {
                foreach ($this->collFaltantesRelatedByIdempleadodeudor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion !== null) {
                if (!$this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->isEmpty()) {
                    FaltanteQuery::create()
                        ->filterByPrimaryKeys($this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion = null;
                }
            }

            if ($this->collFaltantesRelatedByIdempleadogenerador !== null) {
                foreach ($this->collFaltantesRelatedByIdempleadogenerador as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pacientesScheduledForDeletion !== null) {
                if (!$this->pacientesScheduledForDeletion->isEmpty()) {
                    PacienteQuery::create()
                        ->filterByPrimaryKeys($this->pacientesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pacientesScheduledForDeletion = null;
                }
            }

            if ($this->collPacientes !== null) {
                foreach ($this->collPacientes as $referrerFK) {
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

            if ($this->transferenciasRelatedByIdempleadoScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdempleadoScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdempleadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdempleadoScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdempleado !== null) {
                foreach ($this->collTransferenciasRelatedByIdempleado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdempleadoreceptor !== null) {
                foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->visitasRelatedByIdempleadoScheduledForDeletion !== null) {
                if (!$this->visitasRelatedByIdempleadoScheduledForDeletion->isEmpty()) {
                    VisitaQuery::create()
                        ->filterByPrimaryKeys($this->visitasRelatedByIdempleadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitasRelatedByIdempleadoScheduledForDeletion = null;
                }
            }

            if ($this->collVisitasRelatedByIdempleado !== null) {
                foreach ($this->collVisitasRelatedByIdempleado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->visitasRelatedByIdempleadocreadorScheduledForDeletion !== null) {
                if (!$this->visitasRelatedByIdempleadocreadorScheduledForDeletion->isEmpty()) {
                    VisitaQuery::create()
                        ->filterByPrimaryKeys($this->visitasRelatedByIdempleadocreadorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->visitasRelatedByIdempleadocreadorScheduledForDeletion = null;
                }
            }

            if ($this->collVisitasRelatedByIdempleadocreador !== null) {
                foreach ($this->collVisitasRelatedByIdempleadocreador as $referrerFK) {
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

        $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        if (null !== $this->idempleado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadoPeer::IDEMPLEADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_REGISTRADOEN)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_registradoen`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombre`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nss`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_rfc`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_calle`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_numero`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_colonia`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_codigopostal`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_ciudad`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_SEXO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_sexo`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_fechanacimiento`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_telefono`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_celular`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_comprobantedomiclio`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_comprobanteidentificacion`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_SUELDO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_sueldo`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FOTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_foto`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TIPOCOMISIONPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_tipocomisionproducto`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_cantidadcomisionproducto`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TIPOCOMISIONSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_tipocomisionservicio`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_cantidadcomisionservicio`';
        }

        $sql = sprintf(
            'INSERT INTO `empleado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`empleado_registradoen`':
                        $stmt->bindValue($identifier, $this->empleado_registradoen, PDO::PARAM_STR);
                        break;
                    case '`empleado_nombre`':
                        $stmt->bindValue($identifier, $this->empleado_nombre, PDO::PARAM_STR);
                        break;
                    case '`empleado_nss`':
                        $stmt->bindValue($identifier, $this->empleado_nss, PDO::PARAM_STR);
                        break;
                    case '`empleado_rfc`':
                        $stmt->bindValue($identifier, $this->empleado_rfc, PDO::PARAM_STR);
                        break;
                    case '`empleado_calle`':
                        $stmt->bindValue($identifier, $this->empleado_calle, PDO::PARAM_STR);
                        break;
                    case '`empleado_numero`':
                        $stmt->bindValue($identifier, $this->empleado_numero, PDO::PARAM_STR);
                        break;
                    case '`empleado_colonia`':
                        $stmt->bindValue($identifier, $this->empleado_colonia, PDO::PARAM_STR);
                        break;
                    case '`empleado_codigopostal`':
                        $stmt->bindValue($identifier, $this->empleado_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`empleado_ciudad`':
                        $stmt->bindValue($identifier, $this->empleado_ciudad, PDO::PARAM_STR);
                        break;
                    case '`empleado_sexo`':
                        $stmt->bindValue($identifier, $this->empleado_sexo, PDO::PARAM_STR);
                        break;
                    case '`empleado_fechanacimiento`':
                        $stmt->bindValue($identifier, $this->empleado_fechanacimiento, PDO::PARAM_STR);
                        break;
                    case '`empleado_telefono`':
                        $stmt->bindValue($identifier, $this->empleado_telefono, PDO::PARAM_STR);
                        break;
                    case '`empleado_celular`':
                        $stmt->bindValue($identifier, $this->empleado_celular, PDO::PARAM_STR);
                        break;
                    case '`empleado_comprobantedomiclio`':
                        $stmt->bindValue($identifier, $this->empleado_comprobantedomiclio, PDO::PARAM_STR);
                        break;
                    case '`empleado_comprobanteidentificacion`':
                        $stmt->bindValue($identifier, $this->empleado_comprobanteidentificacion, PDO::PARAM_STR);
                        break;
                    case '`empleado_sueldo`':
                        $stmt->bindValue($identifier, $this->empleado_sueldo, PDO::PARAM_STR);
                        break;
                    case '`empleado_foto`':
                        $stmt->bindValue($identifier, $this->empleado_foto, PDO::PARAM_STR);
                        break;
                    case '`empleado_tipocomisionproducto`':
                        $stmt->bindValue($identifier, $this->empleado_tipocomisionproducto, PDO::PARAM_STR);
                        break;
                    case '`empleado_cantidadcomisionproducto`':
                        $stmt->bindValue($identifier, $this->empleado_cantidadcomisionproducto, PDO::PARAM_STR);
                        break;
                    case '`empleado_tipocomisionservicio`':
                        $stmt->bindValue($identifier, $this->empleado_tipocomisionservicio, PDO::PARAM_STR);
                        break;
                    case '`empleado_cantidadcomisionservicio`':
                        $stmt->bindValue($identifier, $this->empleado_cantidadcomisionservicio, PDO::PARAM_STR);
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
        $this->setIdempleado($pk);

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


            if (($retval = EmpleadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClinicaempleados !== null) {
                    foreach ($this->collClinicaempleados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEgresoclinicas !== null) {
                    foreach ($this->collEgresoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadoaccesos !== null) {
                    foreach ($this->collEmpleadoaccesos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadocomisions !== null) {
                    foreach ($this->collEmpleadocomisions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadohorarios !== null) {
                    foreach ($this->collEmpleadohorarios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadorecesos !== null) {
                    foreach ($this->collEmpleadorecesos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadoreportesRelatedByIdempleado !== null) {
                    foreach ($this->collEmpleadoreportesRelatedByIdempleado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmpleadoreportesRelatedByIdempleadoreportado !== null) {
                    foreach ($this->collEmpleadoreportesRelatedByIdempleadoreportado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEncargadoclinicas !== null) {
                    foreach ($this->collEncargadoclinicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFaltantesRelatedByIdempleadodeudor !== null) {
                    foreach ($this->collFaltantesRelatedByIdempleadodeudor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFaltantesRelatedByIdempleadogenerador !== null) {
                    foreach ($this->collFaltantesRelatedByIdempleadogenerador as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPacientes !== null) {
                    foreach ($this->collPacientes as $referrerFK) {
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

                if ($this->collTransferenciasRelatedByIdempleado !== null) {
                    foreach ($this->collTransferenciasRelatedByIdempleado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdempleadoreceptor !== null) {
                    foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitasRelatedByIdempleado !== null) {
                    foreach ($this->collVisitasRelatedByIdempleado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVisitasRelatedByIdempleadocreador !== null) {
                    foreach ($this->collVisitasRelatedByIdempleadocreador as $referrerFK) {
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempleado();
                break;
            case 1:
                return $this->getEmpleadoRegistradoen();
                break;
            case 2:
                return $this->getEmpleadoNombre();
                break;
            case 3:
                return $this->getEmpleadoNss();
                break;
            case 4:
                return $this->getEmpleadoRfc();
                break;
            case 5:
                return $this->getEmpleadoCalle();
                break;
            case 6:
                return $this->getEmpleadoNumero();
                break;
            case 7:
                return $this->getEmpleadoColonia();
                break;
            case 8:
                return $this->getEmpleadoCodigopostal();
                break;
            case 9:
                return $this->getEmpleadoCiudad();
                break;
            case 10:
                return $this->getEmpleadoSexo();
                break;
            case 11:
                return $this->getEmpleadoFechanacimiento();
                break;
            case 12:
                return $this->getEmpleadoTelefono();
                break;
            case 13:
                return $this->getEmpleadoCelular();
                break;
            case 14:
                return $this->getEmpleadoComprobantedomiclio();
                break;
            case 15:
                return $this->getEmpleadoComprobanteidentificacion();
                break;
            case 16:
                return $this->getEmpleadoSueldo();
                break;
            case 17:
                return $this->getEmpleadoFoto();
                break;
            case 18:
                return $this->getEmpleadoTipocomisionproducto();
                break;
            case 19:
                return $this->getEmpleadoCantidadcomisionproducto();
                break;
            case 20:
                return $this->getEmpleadoTipocomisionservicio();
                break;
            case 21:
                return $this->getEmpleadoCantidadcomisionservicio();
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
        if (isset($alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()] = true;
        $keys = EmpleadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleado(),
            $keys[1] => $this->getEmpleadoRegistradoen(),
            $keys[2] => $this->getEmpleadoNombre(),
            $keys[3] => $this->getEmpleadoNss(),
            $keys[4] => $this->getEmpleadoRfc(),
            $keys[5] => $this->getEmpleadoCalle(),
            $keys[6] => $this->getEmpleadoNumero(),
            $keys[7] => $this->getEmpleadoColonia(),
            $keys[8] => $this->getEmpleadoCodigopostal(),
            $keys[9] => $this->getEmpleadoCiudad(),
            $keys[10] => $this->getEmpleadoSexo(),
            $keys[11] => $this->getEmpleadoFechanacimiento(),
            $keys[12] => $this->getEmpleadoTelefono(),
            $keys[13] => $this->getEmpleadoCelular(),
            $keys[14] => $this->getEmpleadoComprobantedomiclio(),
            $keys[15] => $this->getEmpleadoComprobanteidentificacion(),
            $keys[16] => $this->getEmpleadoSueldo(),
            $keys[17] => $this->getEmpleadoFoto(),
            $keys[18] => $this->getEmpleadoTipocomisionproducto(),
            $keys[19] => $this->getEmpleadoCantidadcomisionproducto(),
            $keys[20] => $this->getEmpleadoTipocomisionservicio(),
            $keys[21] => $this->getEmpleadoCantidadcomisionservicio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collClinicaempleados) {
                $result['Clinicaempleados'] = $this->collClinicaempleados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEgresoclinicas) {
                $result['Egresoclinicas'] = $this->collEgresoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadoaccesos) {
                $result['Empleadoaccesos'] = $this->collEmpleadoaccesos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadocomisions) {
                $result['Empleadocomisions'] = $this->collEmpleadocomisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadohorarios) {
                $result['Empleadohorarios'] = $this->collEmpleadohorarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadorecesos) {
                $result['Empleadorecesos'] = $this->collEmpleadorecesos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadoreportesRelatedByIdempleado) {
                $result['EmpleadoreportesRelatedByIdempleado'] = $this->collEmpleadoreportesRelatedByIdempleado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmpleadoreportesRelatedByIdempleadoreportado) {
                $result['EmpleadoreportesRelatedByIdempleadoreportado'] = $this->collEmpleadoreportesRelatedByIdempleadoreportado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEncargadoclinicas) {
                $result['Encargadoclinicas'] = $this->collEncargadoclinicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFaltantesRelatedByIdempleadodeudor) {
                $result['FaltantesRelatedByIdempleadodeudor'] = $this->collFaltantesRelatedByIdempleadodeudor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFaltantesRelatedByIdempleadogenerador) {
                $result['FaltantesRelatedByIdempleadogenerador'] = $this->collFaltantesRelatedByIdempleadogenerador->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacientes) {
                $result['Pacientes'] = $this->collPacientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPacienteseguimientos) {
                $result['Pacienteseguimientos'] = $this->collPacienteseguimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdempleado) {
                $result['TransferenciasRelatedByIdempleado'] = $this->collTransferenciasRelatedByIdempleado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdempleadoreceptor) {
                $result['TransferenciasRelatedByIdempleadoreceptor'] = $this->collTransferenciasRelatedByIdempleadoreceptor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitasRelatedByIdempleado) {
                $result['VisitasRelatedByIdempleado'] = $this->collVisitasRelatedByIdempleado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVisitasRelatedByIdempleadocreador) {
                $result['VisitasRelatedByIdempleadocreador'] = $this->collVisitasRelatedByIdempleadocreador->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempleado($value);
                break;
            case 1:
                $this->setEmpleadoRegistradoen($value);
                break;
            case 2:
                $this->setEmpleadoNombre($value);
                break;
            case 3:
                $this->setEmpleadoNss($value);
                break;
            case 4:
                $this->setEmpleadoRfc($value);
                break;
            case 5:
                $this->setEmpleadoCalle($value);
                break;
            case 6:
                $this->setEmpleadoNumero($value);
                break;
            case 7:
                $this->setEmpleadoColonia($value);
                break;
            case 8:
                $this->setEmpleadoCodigopostal($value);
                break;
            case 9:
                $this->setEmpleadoCiudad($value);
                break;
            case 10:
                $this->setEmpleadoSexo($value);
                break;
            case 11:
                $this->setEmpleadoFechanacimiento($value);
                break;
            case 12:
                $this->setEmpleadoTelefono($value);
                break;
            case 13:
                $this->setEmpleadoCelular($value);
                break;
            case 14:
                $this->setEmpleadoComprobantedomiclio($value);
                break;
            case 15:
                $this->setEmpleadoComprobanteidentificacion($value);
                break;
            case 16:
                $this->setEmpleadoSueldo($value);
                break;
            case 17:
                $this->setEmpleadoFoto($value);
                break;
            case 18:
                $this->setEmpleadoTipocomisionproducto($value);
                break;
            case 19:
                $this->setEmpleadoCantidadcomisionproducto($value);
                break;
            case 20:
                $this->setEmpleadoTipocomisionservicio($value);
                break;
            case 21:
                $this->setEmpleadoCantidadcomisionservicio($value);
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
        $keys = EmpleadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpleadoRegistradoen($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadoNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadoNss($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadoRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadoCalle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpleadoNumero($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpleadoColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmpleadoCodigopostal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmpleadoCiudad($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmpleadoSexo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmpleadoFechanacimiento($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmpleadoTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmpleadoCelular($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEmpleadoComprobantedomiclio($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEmpleadoComprobanteidentificacion($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEmpleadoSueldo($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEmpleadoFoto($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEmpleadoTipocomisionproducto($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEmpleadoCantidadcomisionproducto($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEmpleadoTipocomisionservicio($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEmpleadoCantidadcomisionservicio($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_REGISTRADOEN)) $criteria->add(EmpleadoPeer::EMPLEADO_REGISTRADOEN, $this->empleado_registradoen);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBRE, $this->empleado_nombre);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) $criteria->add(EmpleadoPeer::EMPLEADO_NSS, $this->empleado_nss);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) $criteria->add(EmpleadoPeer::EMPLEADO_RFC, $this->empleado_rfc);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) $criteria->add(EmpleadoPeer::EMPLEADO_CALLE, $this->empleado_calle);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMERO)) $criteria->add(EmpleadoPeer::EMPLEADO_NUMERO, $this->empleado_numero);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) $criteria->add(EmpleadoPeer::EMPLEADO_COLONIA, $this->empleado_colonia);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) $criteria->add(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $this->empleado_codigopostal);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) $criteria->add(EmpleadoPeer::EMPLEADO_CIUDAD, $this->empleado_ciudad);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_SEXO)) $criteria->add(EmpleadoPeer::EMPLEADO_SEXO, $this->empleado_sexo);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO)) $criteria->add(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $this->empleado_fechanacimiento);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) $criteria->add(EmpleadoPeer::EMPLEADO_TELEFONO, $this->empleado_telefono);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CELULAR)) $criteria->add(EmpleadoPeer::EMPLEADO_CELULAR, $this->empleado_celular);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO)) $criteria->add(EmpleadoPeer::EMPLEADO_COMPROBANTEDOMICLIO, $this->empleado_comprobantedomiclio);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION)) $criteria->add(EmpleadoPeer::EMPLEADO_COMPROBANTEIDENTIFICACION, $this->empleado_comprobanteidentificacion);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_SUELDO)) $criteria->add(EmpleadoPeer::EMPLEADO_SUELDO, $this->empleado_sueldo);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FOTO)) $criteria->add(EmpleadoPeer::EMPLEADO_FOTO, $this->empleado_foto);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TIPOCOMISIONPRODUCTO)) $criteria->add(EmpleadoPeer::EMPLEADO_TIPOCOMISIONPRODUCTO, $this->empleado_tipocomisionproducto);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONPRODUCTO)) $criteria->add(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONPRODUCTO, $this->empleado_cantidadcomisionproducto);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TIPOCOMISIONSERVICIO)) $criteria->add(EmpleadoPeer::EMPLEADO_TIPOCOMISIONSERVICIO, $this->empleado_tipocomisionservicio);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONSERVICIO)) $criteria->add(EmpleadoPeer::EMPLEADO_CANTIDADCOMISIONSERVICIO, $this->empleado_cantidadcomisionservicio);

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
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
        $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleado();
    }

    /**
     * Generic method to set the primary key (idempleado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpleadoRegistradoen($this->getEmpleadoRegistradoen());
        $copyObj->setEmpleadoNombre($this->getEmpleadoNombre());
        $copyObj->setEmpleadoNss($this->getEmpleadoNss());
        $copyObj->setEmpleadoRfc($this->getEmpleadoRfc());
        $copyObj->setEmpleadoCalle($this->getEmpleadoCalle());
        $copyObj->setEmpleadoNumero($this->getEmpleadoNumero());
        $copyObj->setEmpleadoColonia($this->getEmpleadoColonia());
        $copyObj->setEmpleadoCodigopostal($this->getEmpleadoCodigopostal());
        $copyObj->setEmpleadoCiudad($this->getEmpleadoCiudad());
        $copyObj->setEmpleadoSexo($this->getEmpleadoSexo());
        $copyObj->setEmpleadoFechanacimiento($this->getEmpleadoFechanacimiento());
        $copyObj->setEmpleadoTelefono($this->getEmpleadoTelefono());
        $copyObj->setEmpleadoCelular($this->getEmpleadoCelular());
        $copyObj->setEmpleadoComprobantedomiclio($this->getEmpleadoComprobantedomiclio());
        $copyObj->setEmpleadoComprobanteidentificacion($this->getEmpleadoComprobanteidentificacion());
        $copyObj->setEmpleadoSueldo($this->getEmpleadoSueldo());
        $copyObj->setEmpleadoFoto($this->getEmpleadoFoto());
        $copyObj->setEmpleadoTipocomisionproducto($this->getEmpleadoTipocomisionproducto());
        $copyObj->setEmpleadoCantidadcomisionproducto($this->getEmpleadoCantidadcomisionproducto());
        $copyObj->setEmpleadoTipocomisionservicio($this->getEmpleadoTipocomisionservicio());
        $copyObj->setEmpleadoCantidadcomisionservicio($this->getEmpleadoCantidadcomisionservicio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClinicaempleados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClinicaempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCompras() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompra($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEgresoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEgresoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadoaccesos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoacceso($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadocomisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadocomision($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadohorarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadohorario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadorecesos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreceso($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadoreportesRelatedByIdempleado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreporteRelatedByIdempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmpleadoreportesRelatedByIdempleadoreportado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreporteRelatedByIdempleadoreportado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEncargadoclinicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEncargadoclinica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFaltantesRelatedByIdempleadodeudor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFaltanteRelatedByIdempleadodeudor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFaltantesRelatedByIdempleadogenerador() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFaltanteRelatedByIdempleadogenerador($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPaciente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPacienteseguimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPacienteseguimiento($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdempleado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdempleadoreceptor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdempleadoreceptor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitasRelatedByIdempleado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitaRelatedByIdempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVisitasRelatedByIdempleadocreador() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVisitaRelatedByIdempleadocreador($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdempleado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empleado Clone of current object.
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
     * @return EmpleadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadoPeer();
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
        if ('Clinicaempleado' == $relationName) {
            $this->initClinicaempleados();
        }
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
        if ('Egresoclinica' == $relationName) {
            $this->initEgresoclinicas();
        }
        if ('Empleadoacceso' == $relationName) {
            $this->initEmpleadoaccesos();
        }
        if ('Empleadocomision' == $relationName) {
            $this->initEmpleadocomisions();
        }
        if ('Empleadohorario' == $relationName) {
            $this->initEmpleadohorarios();
        }
        if ('Empleadoreceso' == $relationName) {
            $this->initEmpleadorecesos();
        }
        if ('EmpleadoreporteRelatedByIdempleado' == $relationName) {
            $this->initEmpleadoreportesRelatedByIdempleado();
        }
        if ('EmpleadoreporteRelatedByIdempleadoreportado' == $relationName) {
            $this->initEmpleadoreportesRelatedByIdempleadoreportado();
        }
        if ('Encargadoclinica' == $relationName) {
            $this->initEncargadoclinicas();
        }
        if ('FaltanteRelatedByIdempleadodeudor' == $relationName) {
            $this->initFaltantesRelatedByIdempleadodeudor();
        }
        if ('FaltanteRelatedByIdempleadogenerador' == $relationName) {
            $this->initFaltantesRelatedByIdempleadogenerador();
        }
        if ('Paciente' == $relationName) {
            $this->initPacientes();
        }
        if ('Pacienteseguimiento' == $relationName) {
            $this->initPacienteseguimientos();
        }
        if ('TransferenciaRelatedByIdempleado' == $relationName) {
            $this->initTransferenciasRelatedByIdempleado();
        }
        if ('TransferenciaRelatedByIdempleadoreceptor' == $relationName) {
            $this->initTransferenciasRelatedByIdempleadoreceptor();
        }
        if ('VisitaRelatedByIdempleado' == $relationName) {
            $this->initVisitasRelatedByIdempleado();
        }
        if ('VisitaRelatedByIdempleadocreador' == $relationName) {
            $this->initVisitasRelatedByIdempleadocreador();
        }
    }

    /**
     * Clears out the collClinicaempleados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addClinicaempleados()
     */
    public function clearClinicaempleados()
    {
        $this->collClinicaempleados = null; // important to set this to null since that means it is uninitialized
        $this->collClinicaempleadosPartial = null;

        return $this;
    }

    /**
     * reset is the collClinicaempleados collection loaded partially
     *
     * @return void
     */
    public function resetPartialClinicaempleados($v = true)
    {
        $this->collClinicaempleadosPartial = $v;
    }

    /**
     * Initializes the collClinicaempleados collection.
     *
     * By default this just sets the collClinicaempleados collection to an empty array (like clearcollClinicaempleados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClinicaempleados($overrideExisting = true)
    {
        if (null !== $this->collClinicaempleados && !$overrideExisting) {
            return;
        }
        $this->collClinicaempleados = new PropelObjectCollection();
        $this->collClinicaempleados->setModel('Clinicaempleado');
    }

    /**
     * Gets an array of Clinicaempleado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clinicaempleado[] List of Clinicaempleado objects
     * @throws PropelException
     */
    public function getClinicaempleados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClinicaempleadosPartial && !$this->isNew();
        if (null === $this->collClinicaempleados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClinicaempleados) {
                // return empty collection
                $this->initClinicaempleados();
            } else {
                $collClinicaempleados = ClinicaempleadoQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClinicaempleadosPartial && count($collClinicaempleados)) {
                      $this->initClinicaempleados(false);

                      foreach ($collClinicaempleados as $obj) {
                        if (false == $this->collClinicaempleados->contains($obj)) {
                          $this->collClinicaempleados->append($obj);
                        }
                      }

                      $this->collClinicaempleadosPartial = true;
                    }

                    $collClinicaempleados->getInternalIterator()->rewind();

                    return $collClinicaempleados;
                }

                if ($partial && $this->collClinicaempleados) {
                    foreach ($this->collClinicaempleados as $obj) {
                        if ($obj->isNew()) {
                            $collClinicaempleados[] = $obj;
                        }
                    }
                }

                $this->collClinicaempleados = $collClinicaempleados;
                $this->collClinicaempleadosPartial = false;
            }
        }

        return $this->collClinicaempleados;
    }

    /**
     * Sets a collection of Clinicaempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clinicaempleados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setClinicaempleados(PropelCollection $clinicaempleados, PropelPDO $con = null)
    {
        $clinicaempleadosToDelete = $this->getClinicaempleados(new Criteria(), $con)->diff($clinicaempleados);


        $this->clinicaempleadosScheduledForDeletion = $clinicaempleadosToDelete;

        foreach ($clinicaempleadosToDelete as $clinicaempleadoRemoved) {
            $clinicaempleadoRemoved->setEmpleado(null);
        }

        $this->collClinicaempleados = null;
        foreach ($clinicaempleados as $clinicaempleado) {
            $this->addClinicaempleado($clinicaempleado);
        }

        $this->collClinicaempleados = $clinicaempleados;
        $this->collClinicaempleadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clinicaempleado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clinicaempleado objects.
     * @throws PropelException
     */
    public function countClinicaempleados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClinicaempleadosPartial && !$this->isNew();
        if (null === $this->collClinicaempleados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClinicaempleados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClinicaempleados());
            }
            $query = ClinicaempleadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collClinicaempleados);
    }

    /**
     * Method called to associate a Clinicaempleado object to this object
     * through the Clinicaempleado foreign key attribute.
     *
     * @param    Clinicaempleado $l Clinicaempleado
     * @return Empleado The current object (for fluent API support)
     */
    public function addClinicaempleado(Clinicaempleado $l)
    {
        if ($this->collClinicaempleados === null) {
            $this->initClinicaempleados();
            $this->collClinicaempleadosPartial = true;
        }

        if (!in_array($l, $this->collClinicaempleados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClinicaempleado($l);

            if ($this->clinicaempleadosScheduledForDeletion and $this->clinicaempleadosScheduledForDeletion->contains($l)) {
                $this->clinicaempleadosScheduledForDeletion->remove($this->clinicaempleadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Clinicaempleado $clinicaempleado The clinicaempleado object to add.
     */
    protected function doAddClinicaempleado($clinicaempleado)
    {
        $this->collClinicaempleados[]= $clinicaempleado;
        $clinicaempleado->setEmpleado($this);
    }

    /**
     * @param	Clinicaempleado $clinicaempleado The clinicaempleado object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeClinicaempleado($clinicaempleado)
    {
        if ($this->getClinicaempleados()->contains($clinicaempleado)) {
            $this->collClinicaempleados->remove($this->collClinicaempleados->search($clinicaempleado));
            if (null === $this->clinicaempleadosScheduledForDeletion) {
                $this->clinicaempleadosScheduledForDeletion = clone $this->collClinicaempleados;
                $this->clinicaempleadosScheduledForDeletion->clear();
            }
            $this->clinicaempleadosScheduledForDeletion[]= clone $clinicaempleado;
            $clinicaempleado->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Clinicaempleados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clinicaempleado[] List of Clinicaempleado objects
     */
    public function getClinicaempleadosJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClinicaempleadoQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getClinicaempleados($query, $con);
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addCompras()
     */
    public function clearCompras()
    {
        $this->collCompras = null; // important to set this to null since that means it is uninitialized
        $this->collComprasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompras collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompras($v = true)
    {
        $this->collComprasPartial = $v;
    }

    /**
     * Initializes the collCompras collection.
     *
     * By default this just sets the collCompras collection to an empty array (like clearcollCompras());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompras($overrideExisting = true)
    {
        if (null !== $this->collCompras && !$overrideExisting) {
            return;
        }
        $this->collCompras = new PropelObjectCollection();
        $this->collCompras->setModel('Compra');
    }

    /**
     * Gets an array of Compra objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compra[] List of Compra objects
     * @throws PropelException
     */
    public function getCompras($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                // return empty collection
                $this->initCompras();
            } else {
                $collCompras = CompraQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collComprasPartial && count($collCompras)) {
                      $this->initCompras(false);

                      foreach ($collCompras as $obj) {
                        if (false == $this->collCompras->contains($obj)) {
                          $this->collCompras->append($obj);
                        }
                      }

                      $this->collComprasPartial = true;
                    }

                    $collCompras->getInternalIterator()->rewind();

                    return $collCompras;
                }

                if ($partial && $this->collCompras) {
                    foreach ($this->collCompras as $obj) {
                        if ($obj->isNew()) {
                            $collCompras[] = $obj;
                        }
                    }
                }

                $this->collCompras = $collCompras;
                $this->collComprasPartial = false;
            }
        }

        return $this->collCompras;
    }

    /**
     * Sets a collection of Compra objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compras A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setEmpleado(null);
        }

        $this->collCompras = null;
        foreach ($compras as $compra) {
            $this->addCompra($compra);
        }

        $this->collCompras = $compras;
        $this->collComprasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compra objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compra objects.
     * @throws PropelException
     */
    public function countCompras(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompras());
            }
            $query = CompraQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Empleado The current object (for fluent API support)
     */
    public function addCompra(Compra $l)
    {
        if ($this->collCompras === null) {
            $this->initCompras();
            $this->collComprasPartial = true;
        }

        if (!in_array($l, $this->collCompras->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompra($l);

            if ($this->comprasScheduledForDeletion and $this->comprasScheduledForDeletion->contains($l)) {
                $this->comprasScheduledForDeletion->remove($this->comprasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compra $compra The compra object to add.
     */
    protected function doAddCompra($compra)
    {
        $this->collCompras[]= $compra;
        $compra->setEmpleado($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= clone $compra;
            $compra->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

        return $this->getCompras($query, $con);
    }

    /**
     * Clears out the collEgresoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEgresoclinicas()
     */
    public function clearEgresoclinicas()
    {
        $this->collEgresoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collEgresoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collEgresoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialEgresoclinicas($v = true)
    {
        $this->collEgresoclinicasPartial = $v;
    }

    /**
     * Initializes the collEgresoclinicas collection.
     *
     * By default this just sets the collEgresoclinicas collection to an empty array (like clearcollEgresoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEgresoclinicas($overrideExisting = true)
    {
        if (null !== $this->collEgresoclinicas && !$overrideExisting) {
            return;
        }
        $this->collEgresoclinicas = new PropelObjectCollection();
        $this->collEgresoclinicas->setModel('Egresoclinica');
    }

    /**
     * Gets an array of Egresoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     * @throws PropelException
     */
    public function getEgresoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEgresoclinicasPartial && !$this->isNew();
        if (null === $this->collEgresoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEgresoclinicas) {
                // return empty collection
                $this->initEgresoclinicas();
            } else {
                $collEgresoclinicas = EgresoclinicaQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEgresoclinicasPartial && count($collEgresoclinicas)) {
                      $this->initEgresoclinicas(false);

                      foreach ($collEgresoclinicas as $obj) {
                        if (false == $this->collEgresoclinicas->contains($obj)) {
                          $this->collEgresoclinicas->append($obj);
                        }
                      }

                      $this->collEgresoclinicasPartial = true;
                    }

                    $collEgresoclinicas->getInternalIterator()->rewind();

                    return $collEgresoclinicas;
                }

                if ($partial && $this->collEgresoclinicas) {
                    foreach ($this->collEgresoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collEgresoclinicas[] = $obj;
                        }
                    }
                }

                $this->collEgresoclinicas = $collEgresoclinicas;
                $this->collEgresoclinicasPartial = false;
            }
        }

        return $this->collEgresoclinicas;
    }

    /**
     * Sets a collection of Egresoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $egresoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEgresoclinicas(PropelCollection $egresoclinicas, PropelPDO $con = null)
    {
        $egresoclinicasToDelete = $this->getEgresoclinicas(new Criteria(), $con)->diff($egresoclinicas);


        $this->egresoclinicasScheduledForDeletion = $egresoclinicasToDelete;

        foreach ($egresoclinicasToDelete as $egresoclinicaRemoved) {
            $egresoclinicaRemoved->setEmpleado(null);
        }

        $this->collEgresoclinicas = null;
        foreach ($egresoclinicas as $egresoclinica) {
            $this->addEgresoclinica($egresoclinica);
        }

        $this->collEgresoclinicas = $egresoclinicas;
        $this->collEgresoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Egresoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Egresoclinica objects.
     * @throws PropelException
     */
    public function countEgresoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEgresoclinicasPartial && !$this->isNew();
        if (null === $this->collEgresoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEgresoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEgresoclinicas());
            }
            $query = EgresoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEgresoclinicas);
    }

    /**
     * Method called to associate a Egresoclinica object to this object
     * through the Egresoclinica foreign key attribute.
     *
     * @param    Egresoclinica $l Egresoclinica
     * @return Empleado The current object (for fluent API support)
     */
    public function addEgresoclinica(Egresoclinica $l)
    {
        if ($this->collEgresoclinicas === null) {
            $this->initEgresoclinicas();
            $this->collEgresoclinicasPartial = true;
        }

        if (!in_array($l, $this->collEgresoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEgresoclinica($l);

            if ($this->egresoclinicasScheduledForDeletion and $this->egresoclinicasScheduledForDeletion->contains($l)) {
                $this->egresoclinicasScheduledForDeletion->remove($this->egresoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Egresoclinica $egresoclinica The egresoclinica object to add.
     */
    protected function doAddEgresoclinica($egresoclinica)
    {
        $this->collEgresoclinicas[]= $egresoclinica;
        $egresoclinica->setEmpleado($this);
    }

    /**
     * @param	Egresoclinica $egresoclinica The egresoclinica object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEgresoclinica($egresoclinica)
    {
        if ($this->getEgresoclinicas()->contains($egresoclinica)) {
            $this->collEgresoclinicas->remove($this->collEgresoclinicas->search($egresoclinica));
            if (null === $this->egresoclinicasScheduledForDeletion) {
                $this->egresoclinicasScheduledForDeletion = clone $this->collEgresoclinicas;
                $this->egresoclinicasScheduledForDeletion->clear();
            }
            $this->egresoclinicasScheduledForDeletion[]= clone $egresoclinica;
            $egresoclinica->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     */
    public function getEgresoclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EgresoclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEgresoclinicas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Egresoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Egresoclinica[] List of Egresoclinica objects
     */
    public function getEgresoclinicasJoinConcepto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EgresoclinicaQuery::create(null, $criteria);
        $query->joinWith('Concepto', $join_behavior);

        return $this->getEgresoclinicas($query, $con);
    }

    /**
     * Clears out the collEmpleadoaccesos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadoaccesos()
     */
    public function clearEmpleadoaccesos()
    {
        $this->collEmpleadoaccesos = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadoaccesosPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadoaccesos collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadoaccesos($v = true)
    {
        $this->collEmpleadoaccesosPartial = $v;
    }

    /**
     * Initializes the collEmpleadoaccesos collection.
     *
     * By default this just sets the collEmpleadoaccesos collection to an empty array (like clearcollEmpleadoaccesos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadoaccesos($overrideExisting = true)
    {
        if (null !== $this->collEmpleadoaccesos && !$overrideExisting) {
            return;
        }
        $this->collEmpleadoaccesos = new PropelObjectCollection();
        $this->collEmpleadoaccesos->setModel('Empleadoacceso');
    }

    /**
     * Gets an array of Empleadoacceso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoacceso[] List of Empleadoacceso objects
     * @throws PropelException
     */
    public function getEmpleadoaccesos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoaccesosPartial && !$this->isNew();
        if (null === $this->collEmpleadoaccesos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoaccesos) {
                // return empty collection
                $this->initEmpleadoaccesos();
            } else {
                $collEmpleadoaccesos = EmpleadoaccesoQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadoaccesosPartial && count($collEmpleadoaccesos)) {
                      $this->initEmpleadoaccesos(false);

                      foreach ($collEmpleadoaccesos as $obj) {
                        if (false == $this->collEmpleadoaccesos->contains($obj)) {
                          $this->collEmpleadoaccesos->append($obj);
                        }
                      }

                      $this->collEmpleadoaccesosPartial = true;
                    }

                    $collEmpleadoaccesos->getInternalIterator()->rewind();

                    return $collEmpleadoaccesos;
                }

                if ($partial && $this->collEmpleadoaccesos) {
                    foreach ($this->collEmpleadoaccesos as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadoaccesos[] = $obj;
                        }
                    }
                }

                $this->collEmpleadoaccesos = $collEmpleadoaccesos;
                $this->collEmpleadoaccesosPartial = false;
            }
        }

        return $this->collEmpleadoaccesos;
    }

    /**
     * Sets a collection of Empleadoacceso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadoaccesos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoaccesos(PropelCollection $empleadoaccesos, PropelPDO $con = null)
    {
        $empleadoaccesosToDelete = $this->getEmpleadoaccesos(new Criteria(), $con)->diff($empleadoaccesos);


        $this->empleadoaccesosScheduledForDeletion = $empleadoaccesosToDelete;

        foreach ($empleadoaccesosToDelete as $empleadoaccesoRemoved) {
            $empleadoaccesoRemoved->setEmpleado(null);
        }

        $this->collEmpleadoaccesos = null;
        foreach ($empleadoaccesos as $empleadoacceso) {
            $this->addEmpleadoacceso($empleadoacceso);
        }

        $this->collEmpleadoaccesos = $empleadoaccesos;
        $this->collEmpleadoaccesosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoacceso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoacceso objects.
     * @throws PropelException
     */
    public function countEmpleadoaccesos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoaccesosPartial && !$this->isNew();
        if (null === $this->collEmpleadoaccesos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoaccesos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadoaccesos());
            }
            $query = EmpleadoaccesoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEmpleadoaccesos);
    }

    /**
     * Method called to associate a Empleadoacceso object to this object
     * through the Empleadoacceso foreign key attribute.
     *
     * @param    Empleadoacceso $l Empleadoacceso
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadoacceso(Empleadoacceso $l)
    {
        if ($this->collEmpleadoaccesos === null) {
            $this->initEmpleadoaccesos();
            $this->collEmpleadoaccesosPartial = true;
        }

        if (!in_array($l, $this->collEmpleadoaccesos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoacceso($l);

            if ($this->empleadoaccesosScheduledForDeletion and $this->empleadoaccesosScheduledForDeletion->contains($l)) {
                $this->empleadoaccesosScheduledForDeletion->remove($this->empleadoaccesosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadoacceso $empleadoacceso The empleadoacceso object to add.
     */
    protected function doAddEmpleadoacceso($empleadoacceso)
    {
        $this->collEmpleadoaccesos[]= $empleadoacceso;
        $empleadoacceso->setEmpleado($this);
    }

    /**
     * @param	Empleadoacceso $empleadoacceso The empleadoacceso object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadoacceso($empleadoacceso)
    {
        if ($this->getEmpleadoaccesos()->contains($empleadoacceso)) {
            $this->collEmpleadoaccesos->remove($this->collEmpleadoaccesos->search($empleadoacceso));
            if (null === $this->empleadoaccesosScheduledForDeletion) {
                $this->empleadoaccesosScheduledForDeletion = clone $this->collEmpleadoaccesos;
                $this->empleadoaccesosScheduledForDeletion->clear();
            }
            $this->empleadoaccesosScheduledForDeletion[]= clone $empleadoacceso;
            $empleadoacceso->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Empleadoaccesos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoacceso[] List of Empleadoacceso objects
     */
    public function getEmpleadoaccesosJoinRol($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoaccesoQuery::create(null, $criteria);
        $query->joinWith('Rol', $join_behavior);

        return $this->getEmpleadoaccesos($query, $con);
    }

    /**
     * Clears out the collEmpleadocomisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadocomisions()
     */
    public function clearEmpleadocomisions()
    {
        $this->collEmpleadocomisions = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadocomisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadocomisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadocomisions($v = true)
    {
        $this->collEmpleadocomisionsPartial = $v;
    }

    /**
     * Initializes the collEmpleadocomisions collection.
     *
     * By default this just sets the collEmpleadocomisions collection to an empty array (like clearcollEmpleadocomisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadocomisions($overrideExisting = true)
    {
        if (null !== $this->collEmpleadocomisions && !$overrideExisting) {
            return;
        }
        $this->collEmpleadocomisions = new PropelObjectCollection();
        $this->collEmpleadocomisions->setModel('Empleadocomision');
    }

    /**
     * Gets an array of Empleadocomision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadocomision[] List of Empleadocomision objects
     * @throws PropelException
     */
    public function getEmpleadocomisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadocomisionsPartial && !$this->isNew();
        if (null === $this->collEmpleadocomisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadocomisions) {
                // return empty collection
                $this->initEmpleadocomisions();
            } else {
                $collEmpleadocomisions = EmpleadocomisionQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadocomisionsPartial && count($collEmpleadocomisions)) {
                      $this->initEmpleadocomisions(false);

                      foreach ($collEmpleadocomisions as $obj) {
                        if (false == $this->collEmpleadocomisions->contains($obj)) {
                          $this->collEmpleadocomisions->append($obj);
                        }
                      }

                      $this->collEmpleadocomisionsPartial = true;
                    }

                    $collEmpleadocomisions->getInternalIterator()->rewind();

                    return $collEmpleadocomisions;
                }

                if ($partial && $this->collEmpleadocomisions) {
                    foreach ($this->collEmpleadocomisions as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadocomisions[] = $obj;
                        }
                    }
                }

                $this->collEmpleadocomisions = $collEmpleadocomisions;
                $this->collEmpleadocomisionsPartial = false;
            }
        }

        return $this->collEmpleadocomisions;
    }

    /**
     * Sets a collection of Empleadocomision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadocomisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadocomisions(PropelCollection $empleadocomisions, PropelPDO $con = null)
    {
        $empleadocomisionsToDelete = $this->getEmpleadocomisions(new Criteria(), $con)->diff($empleadocomisions);


        $this->empleadocomisionsScheduledForDeletion = $empleadocomisionsToDelete;

        foreach ($empleadocomisionsToDelete as $empleadocomisionRemoved) {
            $empleadocomisionRemoved->setEmpleado(null);
        }

        $this->collEmpleadocomisions = null;
        foreach ($empleadocomisions as $empleadocomision) {
            $this->addEmpleadocomision($empleadocomision);
        }

        $this->collEmpleadocomisions = $empleadocomisions;
        $this->collEmpleadocomisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadocomision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadocomision objects.
     * @throws PropelException
     */
    public function countEmpleadocomisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadocomisionsPartial && !$this->isNew();
        if (null === $this->collEmpleadocomisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadocomisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadocomisions());
            }
            $query = EmpleadocomisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEmpleadocomisions);
    }

    /**
     * Method called to associate a Empleadocomision object to this object
     * through the Empleadocomision foreign key attribute.
     *
     * @param    Empleadocomision $l Empleadocomision
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadocomision(Empleadocomision $l)
    {
        if ($this->collEmpleadocomisions === null) {
            $this->initEmpleadocomisions();
            $this->collEmpleadocomisionsPartial = true;
        }

        if (!in_array($l, $this->collEmpleadocomisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadocomision($l);

            if ($this->empleadocomisionsScheduledForDeletion and $this->empleadocomisionsScheduledForDeletion->contains($l)) {
                $this->empleadocomisionsScheduledForDeletion->remove($this->empleadocomisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadocomision $empleadocomision The empleadocomision object to add.
     */
    protected function doAddEmpleadocomision($empleadocomision)
    {
        $this->collEmpleadocomisions[]= $empleadocomision;
        $empleadocomision->setEmpleado($this);
    }

    /**
     * @param	Empleadocomision $empleadocomision The empleadocomision object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadocomision($empleadocomision)
    {
        if ($this->getEmpleadocomisions()->contains($empleadocomision)) {
            $this->collEmpleadocomisions->remove($this->collEmpleadocomisions->search($empleadocomision));
            if (null === $this->empleadocomisionsScheduledForDeletion) {
                $this->empleadocomisionsScheduledForDeletion = clone $this->collEmpleadocomisions;
                $this->empleadocomisionsScheduledForDeletion->clear();
            }
            $this->empleadocomisionsScheduledForDeletion[]= clone $empleadocomision;
            $empleadocomision->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Empleadocomisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadocomision[] List of Empleadocomision objects
     */
    public function getEmpleadocomisionsJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadocomisionQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEmpleadocomisions($query, $con);
    }

    /**
     * Clears out the collEmpleadohorarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadohorarios()
     */
    public function clearEmpleadohorarios()
    {
        $this->collEmpleadohorarios = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadohorariosPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadohorarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadohorarios($v = true)
    {
        $this->collEmpleadohorariosPartial = $v;
    }

    /**
     * Initializes the collEmpleadohorarios collection.
     *
     * By default this just sets the collEmpleadohorarios collection to an empty array (like clearcollEmpleadohorarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadohorarios($overrideExisting = true)
    {
        if (null !== $this->collEmpleadohorarios && !$overrideExisting) {
            return;
        }
        $this->collEmpleadohorarios = new PropelObjectCollection();
        $this->collEmpleadohorarios->setModel('Empleadohorario');
    }

    /**
     * Gets an array of Empleadohorario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadohorario[] List of Empleadohorario objects
     * @throws PropelException
     */
    public function getEmpleadohorarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadohorariosPartial && !$this->isNew();
        if (null === $this->collEmpleadohorarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadohorarios) {
                // return empty collection
                $this->initEmpleadohorarios();
            } else {
                $collEmpleadohorarios = EmpleadohorarioQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadohorariosPartial && count($collEmpleadohorarios)) {
                      $this->initEmpleadohorarios(false);

                      foreach ($collEmpleadohorarios as $obj) {
                        if (false == $this->collEmpleadohorarios->contains($obj)) {
                          $this->collEmpleadohorarios->append($obj);
                        }
                      }

                      $this->collEmpleadohorariosPartial = true;
                    }

                    $collEmpleadohorarios->getInternalIterator()->rewind();

                    return $collEmpleadohorarios;
                }

                if ($partial && $this->collEmpleadohorarios) {
                    foreach ($this->collEmpleadohorarios as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadohorarios[] = $obj;
                        }
                    }
                }

                $this->collEmpleadohorarios = $collEmpleadohorarios;
                $this->collEmpleadohorariosPartial = false;
            }
        }

        return $this->collEmpleadohorarios;
    }

    /**
     * Sets a collection of Empleadohorario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadohorarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadohorarios(PropelCollection $empleadohorarios, PropelPDO $con = null)
    {
        $empleadohorariosToDelete = $this->getEmpleadohorarios(new Criteria(), $con)->diff($empleadohorarios);


        $this->empleadohorariosScheduledForDeletion = $empleadohorariosToDelete;

        foreach ($empleadohorariosToDelete as $empleadohorarioRemoved) {
            $empleadohorarioRemoved->setEmpleado(null);
        }

        $this->collEmpleadohorarios = null;
        foreach ($empleadohorarios as $empleadohorario) {
            $this->addEmpleadohorario($empleadohorario);
        }

        $this->collEmpleadohorarios = $empleadohorarios;
        $this->collEmpleadohorariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadohorario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadohorario objects.
     * @throws PropelException
     */
    public function countEmpleadohorarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadohorariosPartial && !$this->isNew();
        if (null === $this->collEmpleadohorarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadohorarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadohorarios());
            }
            $query = EmpleadohorarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEmpleadohorarios);
    }

    /**
     * Method called to associate a Empleadohorario object to this object
     * through the Empleadohorario foreign key attribute.
     *
     * @param    Empleadohorario $l Empleadohorario
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadohorario(Empleadohorario $l)
    {
        if ($this->collEmpleadohorarios === null) {
            $this->initEmpleadohorarios();
            $this->collEmpleadohorariosPartial = true;
        }

        if (!in_array($l, $this->collEmpleadohorarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadohorario($l);

            if ($this->empleadohorariosScheduledForDeletion and $this->empleadohorariosScheduledForDeletion->contains($l)) {
                $this->empleadohorariosScheduledForDeletion->remove($this->empleadohorariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadohorario $empleadohorario The empleadohorario object to add.
     */
    protected function doAddEmpleadohorario($empleadohorario)
    {
        $this->collEmpleadohorarios[]= $empleadohorario;
        $empleadohorario->setEmpleado($this);
    }

    /**
     * @param	Empleadohorario $empleadohorario The empleadohorario object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadohorario($empleadohorario)
    {
        if ($this->getEmpleadohorarios()->contains($empleadohorario)) {
            $this->collEmpleadohorarios->remove($this->collEmpleadohorarios->search($empleadohorario));
            if (null === $this->empleadohorariosScheduledForDeletion) {
                $this->empleadohorariosScheduledForDeletion = clone $this->collEmpleadohorarios;
                $this->empleadohorariosScheduledForDeletion->clear();
            }
            $this->empleadohorariosScheduledForDeletion[]= clone $empleadohorario;
            $empleadohorario->setEmpleado(null);
        }

        return $this;
    }

    /**
     * Clears out the collEmpleadorecesos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadorecesos()
     */
    public function clearEmpleadorecesos()
    {
        $this->collEmpleadorecesos = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadorecesosPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadorecesos collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadorecesos($v = true)
    {
        $this->collEmpleadorecesosPartial = $v;
    }

    /**
     * Initializes the collEmpleadorecesos collection.
     *
     * By default this just sets the collEmpleadorecesos collection to an empty array (like clearcollEmpleadorecesos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadorecesos($overrideExisting = true)
    {
        if (null !== $this->collEmpleadorecesos && !$overrideExisting) {
            return;
        }
        $this->collEmpleadorecesos = new PropelObjectCollection();
        $this->collEmpleadorecesos->setModel('Empleadoreceso');
    }

    /**
     * Gets an array of Empleadoreceso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreceso[] List of Empleadoreceso objects
     * @throws PropelException
     */
    public function getEmpleadorecesos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadorecesosPartial && !$this->isNew();
        if (null === $this->collEmpleadorecesos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadorecesos) {
                // return empty collection
                $this->initEmpleadorecesos();
            } else {
                $collEmpleadorecesos = EmpleadorecesoQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadorecesosPartial && count($collEmpleadorecesos)) {
                      $this->initEmpleadorecesos(false);

                      foreach ($collEmpleadorecesos as $obj) {
                        if (false == $this->collEmpleadorecesos->contains($obj)) {
                          $this->collEmpleadorecesos->append($obj);
                        }
                      }

                      $this->collEmpleadorecesosPartial = true;
                    }

                    $collEmpleadorecesos->getInternalIterator()->rewind();

                    return $collEmpleadorecesos;
                }

                if ($partial && $this->collEmpleadorecesos) {
                    foreach ($this->collEmpleadorecesos as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadorecesos[] = $obj;
                        }
                    }
                }

                $this->collEmpleadorecesos = $collEmpleadorecesos;
                $this->collEmpleadorecesosPartial = false;
            }
        }

        return $this->collEmpleadorecesos;
    }

    /**
     * Sets a collection of Empleadoreceso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadorecesos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadorecesos(PropelCollection $empleadorecesos, PropelPDO $con = null)
    {
        $empleadorecesosToDelete = $this->getEmpleadorecesos(new Criteria(), $con)->diff($empleadorecesos);


        $this->empleadorecesosScheduledForDeletion = $empleadorecesosToDelete;

        foreach ($empleadorecesosToDelete as $empleadorecesoRemoved) {
            $empleadorecesoRemoved->setEmpleado(null);
        }

        $this->collEmpleadorecesos = null;
        foreach ($empleadorecesos as $empleadoreceso) {
            $this->addEmpleadoreceso($empleadoreceso);
        }

        $this->collEmpleadorecesos = $empleadorecesos;
        $this->collEmpleadorecesosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreceso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreceso objects.
     * @throws PropelException
     */
    public function countEmpleadorecesos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadorecesosPartial && !$this->isNew();
        if (null === $this->collEmpleadorecesos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadorecesos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadorecesos());
            }
            $query = EmpleadorecesoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEmpleadorecesos);
    }

    /**
     * Method called to associate a Empleadoreceso object to this object
     * through the Empleadoreceso foreign key attribute.
     *
     * @param    Empleadoreceso $l Empleadoreceso
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadoreceso(Empleadoreceso $l)
    {
        if ($this->collEmpleadorecesos === null) {
            $this->initEmpleadorecesos();
            $this->collEmpleadorecesosPartial = true;
        }

        if (!in_array($l, $this->collEmpleadorecesos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreceso($l);

            if ($this->empleadorecesosScheduledForDeletion and $this->empleadorecesosScheduledForDeletion->contains($l)) {
                $this->empleadorecesosScheduledForDeletion->remove($this->empleadorecesosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadoreceso $empleadoreceso The empleadoreceso object to add.
     */
    protected function doAddEmpleadoreceso($empleadoreceso)
    {
        $this->collEmpleadorecesos[]= $empleadoreceso;
        $empleadoreceso->setEmpleado($this);
    }

    /**
     * @param	Empleadoreceso $empleadoreceso The empleadoreceso object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadoreceso($empleadoreceso)
    {
        if ($this->getEmpleadorecesos()->contains($empleadoreceso)) {
            $this->collEmpleadorecesos->remove($this->collEmpleadorecesos->search($empleadoreceso));
            if (null === $this->empleadorecesosScheduledForDeletion) {
                $this->empleadorecesosScheduledForDeletion = clone $this->collEmpleadorecesos;
                $this->empleadorecesosScheduledForDeletion->clear();
            }
            $this->empleadorecesosScheduledForDeletion[]= clone $empleadoreceso;
            $empleadoreceso->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Empleadorecesos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreceso[] List of Empleadoreceso objects
     */
    public function getEmpleadorecesosJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadorecesoQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEmpleadorecesos($query, $con);
    }

    /**
     * Clears out the collEmpleadoreportesRelatedByIdempleado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadoreportesRelatedByIdempleado()
     */
    public function clearEmpleadoreportesRelatedByIdempleado()
    {
        $this->collEmpleadoreportesRelatedByIdempleado = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadoreportesRelatedByIdempleadoPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadoreportesRelatedByIdempleado collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadoreportesRelatedByIdempleado($v = true)
    {
        $this->collEmpleadoreportesRelatedByIdempleadoPartial = $v;
    }

    /**
     * Initializes the collEmpleadoreportesRelatedByIdempleado collection.
     *
     * By default this just sets the collEmpleadoreportesRelatedByIdempleado collection to an empty array (like clearcollEmpleadoreportesRelatedByIdempleado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadoreportesRelatedByIdempleado($overrideExisting = true)
    {
        if (null !== $this->collEmpleadoreportesRelatedByIdempleado && !$overrideExisting) {
            return;
        }
        $this->collEmpleadoreportesRelatedByIdempleado = new PropelObjectCollection();
        $this->collEmpleadoreportesRelatedByIdempleado->setModel('Empleadoreporte');
    }

    /**
     * Gets an array of Empleadoreporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     * @throws PropelException
     */
    public function getEmpleadoreportesRelatedByIdempleado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportesRelatedByIdempleado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportesRelatedByIdempleado) {
                // return empty collection
                $this->initEmpleadoreportesRelatedByIdempleado();
            } else {
                $collEmpleadoreportesRelatedByIdempleado = EmpleadoreporteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadoreportesRelatedByIdempleadoPartial && count($collEmpleadoreportesRelatedByIdempleado)) {
                      $this->initEmpleadoreportesRelatedByIdempleado(false);

                      foreach ($collEmpleadoreportesRelatedByIdempleado as $obj) {
                        if (false == $this->collEmpleadoreportesRelatedByIdempleado->contains($obj)) {
                          $this->collEmpleadoreportesRelatedByIdempleado->append($obj);
                        }
                      }

                      $this->collEmpleadoreportesRelatedByIdempleadoPartial = true;
                    }

                    $collEmpleadoreportesRelatedByIdempleado->getInternalIterator()->rewind();

                    return $collEmpleadoreportesRelatedByIdempleado;
                }

                if ($partial && $this->collEmpleadoreportesRelatedByIdempleado) {
                    foreach ($this->collEmpleadoreportesRelatedByIdempleado as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadoreportesRelatedByIdempleado[] = $obj;
                        }
                    }
                }

                $this->collEmpleadoreportesRelatedByIdempleado = $collEmpleadoreportesRelatedByIdempleado;
                $this->collEmpleadoreportesRelatedByIdempleadoPartial = false;
            }
        }

        return $this->collEmpleadoreportesRelatedByIdempleado;
    }

    /**
     * Sets a collection of EmpleadoreporteRelatedByIdempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadoreportesRelatedByIdempleado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoreportesRelatedByIdempleado(PropelCollection $empleadoreportesRelatedByIdempleado, PropelPDO $con = null)
    {
        $empleadoreportesRelatedByIdempleadoToDelete = $this->getEmpleadoreportesRelatedByIdempleado(new Criteria(), $con)->diff($empleadoreportesRelatedByIdempleado);


        $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion = $empleadoreportesRelatedByIdempleadoToDelete;

        foreach ($empleadoreportesRelatedByIdempleadoToDelete as $empleadoreporteRelatedByIdempleadoRemoved) {
            $empleadoreporteRelatedByIdempleadoRemoved->setEmpleadoRelatedByIdempleado(null);
        }

        $this->collEmpleadoreportesRelatedByIdempleado = null;
        foreach ($empleadoreportesRelatedByIdempleado as $empleadoreporteRelatedByIdempleado) {
            $this->addEmpleadoreporteRelatedByIdempleado($empleadoreporteRelatedByIdempleado);
        }

        $this->collEmpleadoreportesRelatedByIdempleado = $empleadoreportesRelatedByIdempleado;
        $this->collEmpleadoreportesRelatedByIdempleadoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreporte objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreporte objects.
     * @throws PropelException
     */
    public function countEmpleadoreportesRelatedByIdempleado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportesRelatedByIdempleado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportesRelatedByIdempleado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadoreportesRelatedByIdempleado());
            }
            $query = EmpleadoreporteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleado($this)
                ->count($con);
        }

        return count($this->collEmpleadoreportesRelatedByIdempleado);
    }

    /**
     * Method called to associate a Empleadoreporte object to this object
     * through the Empleadoreporte foreign key attribute.
     *
     * @param    Empleadoreporte $l Empleadoreporte
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadoreporteRelatedByIdempleado(Empleadoreporte $l)
    {
        if ($this->collEmpleadoreportesRelatedByIdempleado === null) {
            $this->initEmpleadoreportesRelatedByIdempleado();
            $this->collEmpleadoreportesRelatedByIdempleadoPartial = true;
        }

        if (!in_array($l, $this->collEmpleadoreportesRelatedByIdempleado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreporteRelatedByIdempleado($l);

            if ($this->empleadoreportesRelatedByIdempleadoScheduledForDeletion and $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->contains($l)) {
                $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->remove($this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	EmpleadoreporteRelatedByIdempleado $empleadoreporteRelatedByIdempleado The empleadoreporteRelatedByIdempleado object to add.
     */
    protected function doAddEmpleadoreporteRelatedByIdempleado($empleadoreporteRelatedByIdempleado)
    {
        $this->collEmpleadoreportesRelatedByIdempleado[]= $empleadoreporteRelatedByIdempleado;
        $empleadoreporteRelatedByIdempleado->setEmpleadoRelatedByIdempleado($this);
    }

    /**
     * @param	EmpleadoreporteRelatedByIdempleado $empleadoreporteRelatedByIdempleado The empleadoreporteRelatedByIdempleado object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadoreporteRelatedByIdempleado($empleadoreporteRelatedByIdempleado)
    {
        if ($this->getEmpleadoreportesRelatedByIdempleado()->contains($empleadoreporteRelatedByIdempleado)) {
            $this->collEmpleadoreportesRelatedByIdempleado->remove($this->collEmpleadoreportesRelatedByIdempleado->search($empleadoreporteRelatedByIdempleado));
            if (null === $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion) {
                $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion = clone $this->collEmpleadoreportesRelatedByIdempleado;
                $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion->clear();
            }
            $this->empleadoreportesRelatedByIdempleadoScheduledForDeletion[]= clone $empleadoreporteRelatedByIdempleado;
            $empleadoreporteRelatedByIdempleado->setEmpleadoRelatedByIdempleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related EmpleadoreportesRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesRelatedByIdempleadoJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEmpleadoreportesRelatedByIdempleado($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related EmpleadoreportesRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesRelatedByIdempleadoJoinConceptoincidencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Conceptoincidencia', $join_behavior);

        return $this->getEmpleadoreportesRelatedByIdempleado($query, $con);
    }

    /**
     * Clears out the collEmpleadoreportesRelatedByIdempleadoreportado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadoreportesRelatedByIdempleadoreportado()
     */
    public function clearEmpleadoreportesRelatedByIdempleadoreportado()
    {
        $this->collEmpleadoreportesRelatedByIdempleadoreportado = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadoreportesRelatedByIdempleadoreportado collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadoreportesRelatedByIdempleadoreportado($v = true)
    {
        $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = $v;
    }

    /**
     * Initializes the collEmpleadoreportesRelatedByIdempleadoreportado collection.
     *
     * By default this just sets the collEmpleadoreportesRelatedByIdempleadoreportado collection to an empty array (like clearcollEmpleadoreportesRelatedByIdempleadoreportado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadoreportesRelatedByIdempleadoreportado($overrideExisting = true)
    {
        if (null !== $this->collEmpleadoreportesRelatedByIdempleadoreportado && !$overrideExisting) {
            return;
        }
        $this->collEmpleadoreportesRelatedByIdempleadoreportado = new PropelObjectCollection();
        $this->collEmpleadoreportesRelatedByIdempleadoreportado->setModel('Empleadoreporte');
    }

    /**
     * Gets an array of Empleadoreporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     * @throws PropelException
     */
    public function getEmpleadoreportesRelatedByIdempleadoreportado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportesRelatedByIdempleadoreportado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportesRelatedByIdempleadoreportado) {
                // return empty collection
                $this->initEmpleadoreportesRelatedByIdempleadoreportado();
            } else {
                $collEmpleadoreportesRelatedByIdempleadoreportado = EmpleadoreporteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadoreportado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial && count($collEmpleadoreportesRelatedByIdempleadoreportado)) {
                      $this->initEmpleadoreportesRelatedByIdempleadoreportado(false);

                      foreach ($collEmpleadoreportesRelatedByIdempleadoreportado as $obj) {
                        if (false == $this->collEmpleadoreportesRelatedByIdempleadoreportado->contains($obj)) {
                          $this->collEmpleadoreportesRelatedByIdempleadoreportado->append($obj);
                        }
                      }

                      $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = true;
                    }

                    $collEmpleadoreportesRelatedByIdempleadoreportado->getInternalIterator()->rewind();

                    return $collEmpleadoreportesRelatedByIdempleadoreportado;
                }

                if ($partial && $this->collEmpleadoreportesRelatedByIdempleadoreportado) {
                    foreach ($this->collEmpleadoreportesRelatedByIdempleadoreportado as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadoreportesRelatedByIdempleadoreportado[] = $obj;
                        }
                    }
                }

                $this->collEmpleadoreportesRelatedByIdempleadoreportado = $collEmpleadoreportesRelatedByIdempleadoreportado;
                $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = false;
            }
        }

        return $this->collEmpleadoreportesRelatedByIdempleadoreportado;
    }

    /**
     * Sets a collection of EmpleadoreporteRelatedByIdempleadoreportado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadoreportesRelatedByIdempleadoreportado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoreportesRelatedByIdempleadoreportado(PropelCollection $empleadoreportesRelatedByIdempleadoreportado, PropelPDO $con = null)
    {
        $empleadoreportesRelatedByIdempleadoreportadoToDelete = $this->getEmpleadoreportesRelatedByIdempleadoreportado(new Criteria(), $con)->diff($empleadoreportesRelatedByIdempleadoreportado);


        $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion = $empleadoreportesRelatedByIdempleadoreportadoToDelete;

        foreach ($empleadoreportesRelatedByIdempleadoreportadoToDelete as $empleadoreporteRelatedByIdempleadoreportadoRemoved) {
            $empleadoreporteRelatedByIdempleadoreportadoRemoved->setEmpleadoRelatedByIdempleadoreportado(null);
        }

        $this->collEmpleadoreportesRelatedByIdempleadoreportado = null;
        foreach ($empleadoreportesRelatedByIdempleadoreportado as $empleadoreporteRelatedByIdempleadoreportado) {
            $this->addEmpleadoreporteRelatedByIdempleadoreportado($empleadoreporteRelatedByIdempleadoreportado);
        }

        $this->collEmpleadoreportesRelatedByIdempleadoreportado = $empleadoreportesRelatedByIdempleadoreportado;
        $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreporte objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreporte objects.
     * @throws PropelException
     */
    public function countEmpleadoreportesRelatedByIdempleadoreportado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportesRelatedByIdempleadoreportado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportesRelatedByIdempleadoreportado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadoreportesRelatedByIdempleadoreportado());
            }
            $query = EmpleadoreporteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadoreportado($this)
                ->count($con);
        }

        return count($this->collEmpleadoreportesRelatedByIdempleadoreportado);
    }

    /**
     * Method called to associate a Empleadoreporte object to this object
     * through the Empleadoreporte foreign key attribute.
     *
     * @param    Empleadoreporte $l Empleadoreporte
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadoreporteRelatedByIdempleadoreportado(Empleadoreporte $l)
    {
        if ($this->collEmpleadoreportesRelatedByIdempleadoreportado === null) {
            $this->initEmpleadoreportesRelatedByIdempleadoreportado();
            $this->collEmpleadoreportesRelatedByIdempleadoreportadoPartial = true;
        }

        if (!in_array($l, $this->collEmpleadoreportesRelatedByIdempleadoreportado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreporteRelatedByIdempleadoreportado($l);

            if ($this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion and $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->contains($l)) {
                $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->remove($this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	EmpleadoreporteRelatedByIdempleadoreportado $empleadoreporteRelatedByIdempleadoreportado The empleadoreporteRelatedByIdempleadoreportado object to add.
     */
    protected function doAddEmpleadoreporteRelatedByIdempleadoreportado($empleadoreporteRelatedByIdempleadoreportado)
    {
        $this->collEmpleadoreportesRelatedByIdempleadoreportado[]= $empleadoreporteRelatedByIdempleadoreportado;
        $empleadoreporteRelatedByIdempleadoreportado->setEmpleadoRelatedByIdempleadoreportado($this);
    }

    /**
     * @param	EmpleadoreporteRelatedByIdempleadoreportado $empleadoreporteRelatedByIdempleadoreportado The empleadoreporteRelatedByIdempleadoreportado object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadoreporteRelatedByIdempleadoreportado($empleadoreporteRelatedByIdempleadoreportado)
    {
        if ($this->getEmpleadoreportesRelatedByIdempleadoreportado()->contains($empleadoreporteRelatedByIdempleadoreportado)) {
            $this->collEmpleadoreportesRelatedByIdempleadoreportado->remove($this->collEmpleadoreportesRelatedByIdempleadoreportado->search($empleadoreporteRelatedByIdempleadoreportado));
            if (null === $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion) {
                $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion = clone $this->collEmpleadoreportesRelatedByIdempleadoreportado;
                $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion->clear();
            }
            $this->empleadoreportesRelatedByIdempleadoreportadoScheduledForDeletion[]= clone $empleadoreporteRelatedByIdempleadoreportado;
            $empleadoreporteRelatedByIdempleadoreportado->setEmpleadoRelatedByIdempleadoreportado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related EmpleadoreportesRelatedByIdempleadoreportado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesRelatedByIdempleadoreportadoJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEmpleadoreportesRelatedByIdempleadoreportado($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related EmpleadoreportesRelatedByIdempleadoreportado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesRelatedByIdempleadoreportadoJoinConceptoincidencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Conceptoincidencia', $join_behavior);

        return $this->getEmpleadoreportesRelatedByIdempleadoreportado($query, $con);
    }

    /**
     * Clears out the collEncargadoclinicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEncargadoclinicas()
     */
    public function clearEncargadoclinicas()
    {
        $this->collEncargadoclinicas = null; // important to set this to null since that means it is uninitialized
        $this->collEncargadoclinicasPartial = null;

        return $this;
    }

    /**
     * reset is the collEncargadoclinicas collection loaded partially
     *
     * @return void
     */
    public function resetPartialEncargadoclinicas($v = true)
    {
        $this->collEncargadoclinicasPartial = $v;
    }

    /**
     * Initializes the collEncargadoclinicas collection.
     *
     * By default this just sets the collEncargadoclinicas collection to an empty array (like clearcollEncargadoclinicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEncargadoclinicas($overrideExisting = true)
    {
        if (null !== $this->collEncargadoclinicas && !$overrideExisting) {
            return;
        }
        $this->collEncargadoclinicas = new PropelObjectCollection();
        $this->collEncargadoclinicas->setModel('Encargadoclinica');
    }

    /**
     * Gets an array of Encargadoclinica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Encargadoclinica[] List of Encargadoclinica objects
     * @throws PropelException
     */
    public function getEncargadoclinicas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEncargadoclinicasPartial && !$this->isNew();
        if (null === $this->collEncargadoclinicas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEncargadoclinicas) {
                // return empty collection
                $this->initEncargadoclinicas();
            } else {
                $collEncargadoclinicas = EncargadoclinicaQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEncargadoclinicasPartial && count($collEncargadoclinicas)) {
                      $this->initEncargadoclinicas(false);

                      foreach ($collEncargadoclinicas as $obj) {
                        if (false == $this->collEncargadoclinicas->contains($obj)) {
                          $this->collEncargadoclinicas->append($obj);
                        }
                      }

                      $this->collEncargadoclinicasPartial = true;
                    }

                    $collEncargadoclinicas->getInternalIterator()->rewind();

                    return $collEncargadoclinicas;
                }

                if ($partial && $this->collEncargadoclinicas) {
                    foreach ($this->collEncargadoclinicas as $obj) {
                        if ($obj->isNew()) {
                            $collEncargadoclinicas[] = $obj;
                        }
                    }
                }

                $this->collEncargadoclinicas = $collEncargadoclinicas;
                $this->collEncargadoclinicasPartial = false;
            }
        }

        return $this->collEncargadoclinicas;
    }

    /**
     * Sets a collection of Encargadoclinica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $encargadoclinicas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEncargadoclinicas(PropelCollection $encargadoclinicas, PropelPDO $con = null)
    {
        $encargadoclinicasToDelete = $this->getEncargadoclinicas(new Criteria(), $con)->diff($encargadoclinicas);


        $this->encargadoclinicasScheduledForDeletion = $encargadoclinicasToDelete;

        foreach ($encargadoclinicasToDelete as $encargadoclinicaRemoved) {
            $encargadoclinicaRemoved->setEmpleado(null);
        }

        $this->collEncargadoclinicas = null;
        foreach ($encargadoclinicas as $encargadoclinica) {
            $this->addEncargadoclinica($encargadoclinica);
        }

        $this->collEncargadoclinicas = $encargadoclinicas;
        $this->collEncargadoclinicasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Encargadoclinica objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Encargadoclinica objects.
     * @throws PropelException
     */
    public function countEncargadoclinicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEncargadoclinicasPartial && !$this->isNew();
        if (null === $this->collEncargadoclinicas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEncargadoclinicas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEncargadoclinicas());
            }
            $query = EncargadoclinicaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEncargadoclinicas);
    }

    /**
     * Method called to associate a Encargadoclinica object to this object
     * through the Encargadoclinica foreign key attribute.
     *
     * @param    Encargadoclinica $l Encargadoclinica
     * @return Empleado The current object (for fluent API support)
     */
    public function addEncargadoclinica(Encargadoclinica $l)
    {
        if ($this->collEncargadoclinicas === null) {
            $this->initEncargadoclinicas();
            $this->collEncargadoclinicasPartial = true;
        }

        if (!in_array($l, $this->collEncargadoclinicas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEncargadoclinica($l);

            if ($this->encargadoclinicasScheduledForDeletion and $this->encargadoclinicasScheduledForDeletion->contains($l)) {
                $this->encargadoclinicasScheduledForDeletion->remove($this->encargadoclinicasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Encargadoclinica $encargadoclinica The encargadoclinica object to add.
     */
    protected function doAddEncargadoclinica($encargadoclinica)
    {
        $this->collEncargadoclinicas[]= $encargadoclinica;
        $encargadoclinica->setEmpleado($this);
    }

    /**
     * @param	Encargadoclinica $encargadoclinica The encargadoclinica object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEncargadoclinica($encargadoclinica)
    {
        if ($this->getEncargadoclinicas()->contains($encargadoclinica)) {
            $this->collEncargadoclinicas->remove($this->collEncargadoclinicas->search($encargadoclinica));
            if (null === $this->encargadoclinicasScheduledForDeletion) {
                $this->encargadoclinicasScheduledForDeletion = clone $this->collEncargadoclinicas;
                $this->encargadoclinicasScheduledForDeletion->clear();
            }
            $this->encargadoclinicasScheduledForDeletion[]= clone $encargadoclinica;
            $encargadoclinica->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Encargadoclinicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Encargadoclinica[] List of Encargadoclinica objects
     */
    public function getEncargadoclinicasJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EncargadoclinicaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEncargadoclinicas($query, $con);
    }

    /**
     * Clears out the collFaltantesRelatedByIdempleadodeudor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addFaltantesRelatedByIdempleadodeudor()
     */
    public function clearFaltantesRelatedByIdempleadodeudor()
    {
        $this->collFaltantesRelatedByIdempleadodeudor = null; // important to set this to null since that means it is uninitialized
        $this->collFaltantesRelatedByIdempleadodeudorPartial = null;

        return $this;
    }

    /**
     * reset is the collFaltantesRelatedByIdempleadodeudor collection loaded partially
     *
     * @return void
     */
    public function resetPartialFaltantesRelatedByIdempleadodeudor($v = true)
    {
        $this->collFaltantesRelatedByIdempleadodeudorPartial = $v;
    }

    /**
     * Initializes the collFaltantesRelatedByIdempleadodeudor collection.
     *
     * By default this just sets the collFaltantesRelatedByIdempleadodeudor collection to an empty array (like clearcollFaltantesRelatedByIdempleadodeudor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFaltantesRelatedByIdempleadodeudor($overrideExisting = true)
    {
        if (null !== $this->collFaltantesRelatedByIdempleadodeudor && !$overrideExisting) {
            return;
        }
        $this->collFaltantesRelatedByIdempleadodeudor = new PropelObjectCollection();
        $this->collFaltantesRelatedByIdempleadodeudor->setModel('Faltante');
    }

    /**
     * Gets an array of Faltante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Faltante[] List of Faltante objects
     * @throws PropelException
     */
    public function getFaltantesRelatedByIdempleadodeudor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFaltantesRelatedByIdempleadodeudorPartial && !$this->isNew();
        if (null === $this->collFaltantesRelatedByIdempleadodeudor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFaltantesRelatedByIdempleadodeudor) {
                // return empty collection
                $this->initFaltantesRelatedByIdempleadodeudor();
            } else {
                $collFaltantesRelatedByIdempleadodeudor = FaltanteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadodeudor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFaltantesRelatedByIdempleadodeudorPartial && count($collFaltantesRelatedByIdempleadodeudor)) {
                      $this->initFaltantesRelatedByIdempleadodeudor(false);

                      foreach ($collFaltantesRelatedByIdempleadodeudor as $obj) {
                        if (false == $this->collFaltantesRelatedByIdempleadodeudor->contains($obj)) {
                          $this->collFaltantesRelatedByIdempleadodeudor->append($obj);
                        }
                      }

                      $this->collFaltantesRelatedByIdempleadodeudorPartial = true;
                    }

                    $collFaltantesRelatedByIdempleadodeudor->getInternalIterator()->rewind();

                    return $collFaltantesRelatedByIdempleadodeudor;
                }

                if ($partial && $this->collFaltantesRelatedByIdempleadodeudor) {
                    foreach ($this->collFaltantesRelatedByIdempleadodeudor as $obj) {
                        if ($obj->isNew()) {
                            $collFaltantesRelatedByIdempleadodeudor[] = $obj;
                        }
                    }
                }

                $this->collFaltantesRelatedByIdempleadodeudor = $collFaltantesRelatedByIdempleadodeudor;
                $this->collFaltantesRelatedByIdempleadodeudorPartial = false;
            }
        }

        return $this->collFaltantesRelatedByIdempleadodeudor;
    }

    /**
     * Sets a collection of FaltanteRelatedByIdempleadodeudor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $faltantesRelatedByIdempleadodeudor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setFaltantesRelatedByIdempleadodeudor(PropelCollection $faltantesRelatedByIdempleadodeudor, PropelPDO $con = null)
    {
        $faltantesRelatedByIdempleadodeudorToDelete = $this->getFaltantesRelatedByIdempleadodeudor(new Criteria(), $con)->diff($faltantesRelatedByIdempleadodeudor);


        $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion = $faltantesRelatedByIdempleadodeudorToDelete;

        foreach ($faltantesRelatedByIdempleadodeudorToDelete as $faltanteRelatedByIdempleadodeudorRemoved) {
            $faltanteRelatedByIdempleadodeudorRemoved->setEmpleadoRelatedByIdempleadodeudor(null);
        }

        $this->collFaltantesRelatedByIdempleadodeudor = null;
        foreach ($faltantesRelatedByIdempleadodeudor as $faltanteRelatedByIdempleadodeudor) {
            $this->addFaltanteRelatedByIdempleadodeudor($faltanteRelatedByIdempleadodeudor);
        }

        $this->collFaltantesRelatedByIdempleadodeudor = $faltantesRelatedByIdempleadodeudor;
        $this->collFaltantesRelatedByIdempleadodeudorPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Faltante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Faltante objects.
     * @throws PropelException
     */
    public function countFaltantesRelatedByIdempleadodeudor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFaltantesRelatedByIdempleadodeudorPartial && !$this->isNew();
        if (null === $this->collFaltantesRelatedByIdempleadodeudor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFaltantesRelatedByIdempleadodeudor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFaltantesRelatedByIdempleadodeudor());
            }
            $query = FaltanteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadodeudor($this)
                ->count($con);
        }

        return count($this->collFaltantesRelatedByIdempleadodeudor);
    }

    /**
     * Method called to associate a Faltante object to this object
     * through the Faltante foreign key attribute.
     *
     * @param    Faltante $l Faltante
     * @return Empleado The current object (for fluent API support)
     */
    public function addFaltanteRelatedByIdempleadodeudor(Faltante $l)
    {
        if ($this->collFaltantesRelatedByIdempleadodeudor === null) {
            $this->initFaltantesRelatedByIdempleadodeudor();
            $this->collFaltantesRelatedByIdempleadodeudorPartial = true;
        }

        if (!in_array($l, $this->collFaltantesRelatedByIdempleadodeudor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFaltanteRelatedByIdempleadodeudor($l);

            if ($this->faltantesRelatedByIdempleadodeudorScheduledForDeletion and $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->contains($l)) {
                $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->remove($this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FaltanteRelatedByIdempleadodeudor $faltanteRelatedByIdempleadodeudor The faltanteRelatedByIdempleadodeudor object to add.
     */
    protected function doAddFaltanteRelatedByIdempleadodeudor($faltanteRelatedByIdempleadodeudor)
    {
        $this->collFaltantesRelatedByIdempleadodeudor[]= $faltanteRelatedByIdempleadodeudor;
        $faltanteRelatedByIdempleadodeudor->setEmpleadoRelatedByIdempleadodeudor($this);
    }

    /**
     * @param	FaltanteRelatedByIdempleadodeudor $faltanteRelatedByIdempleadodeudor The faltanteRelatedByIdempleadodeudor object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeFaltanteRelatedByIdempleadodeudor($faltanteRelatedByIdempleadodeudor)
    {
        if ($this->getFaltantesRelatedByIdempleadodeudor()->contains($faltanteRelatedByIdempleadodeudor)) {
            $this->collFaltantesRelatedByIdempleadodeudor->remove($this->collFaltantesRelatedByIdempleadodeudor->search($faltanteRelatedByIdempleadodeudor));
            if (null === $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion) {
                $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion = clone $this->collFaltantesRelatedByIdempleadodeudor;
                $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion->clear();
            }
            $this->faltantesRelatedByIdempleadodeudorScheduledForDeletion[]= clone $faltanteRelatedByIdempleadodeudor;
            $faltanteRelatedByIdempleadodeudor->setEmpleadoRelatedByIdempleadodeudor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related FaltantesRelatedByIdempleadodeudor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Faltante[] List of Faltante objects
     */
    public function getFaltantesRelatedByIdempleadodeudorJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FaltanteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getFaltantesRelatedByIdempleadodeudor($query, $con);
    }

    /**
     * Clears out the collFaltantesRelatedByIdempleadogenerador collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addFaltantesRelatedByIdempleadogenerador()
     */
    public function clearFaltantesRelatedByIdempleadogenerador()
    {
        $this->collFaltantesRelatedByIdempleadogenerador = null; // important to set this to null since that means it is uninitialized
        $this->collFaltantesRelatedByIdempleadogeneradorPartial = null;

        return $this;
    }

    /**
     * reset is the collFaltantesRelatedByIdempleadogenerador collection loaded partially
     *
     * @return void
     */
    public function resetPartialFaltantesRelatedByIdempleadogenerador($v = true)
    {
        $this->collFaltantesRelatedByIdempleadogeneradorPartial = $v;
    }

    /**
     * Initializes the collFaltantesRelatedByIdempleadogenerador collection.
     *
     * By default this just sets the collFaltantesRelatedByIdempleadogenerador collection to an empty array (like clearcollFaltantesRelatedByIdempleadogenerador());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFaltantesRelatedByIdempleadogenerador($overrideExisting = true)
    {
        if (null !== $this->collFaltantesRelatedByIdempleadogenerador && !$overrideExisting) {
            return;
        }
        $this->collFaltantesRelatedByIdempleadogenerador = new PropelObjectCollection();
        $this->collFaltantesRelatedByIdempleadogenerador->setModel('Faltante');
    }

    /**
     * Gets an array of Faltante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Faltante[] List of Faltante objects
     * @throws PropelException
     */
    public function getFaltantesRelatedByIdempleadogenerador($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFaltantesRelatedByIdempleadogeneradorPartial && !$this->isNew();
        if (null === $this->collFaltantesRelatedByIdempleadogenerador || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFaltantesRelatedByIdempleadogenerador) {
                // return empty collection
                $this->initFaltantesRelatedByIdempleadogenerador();
            } else {
                $collFaltantesRelatedByIdempleadogenerador = FaltanteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadogenerador($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFaltantesRelatedByIdempleadogeneradorPartial && count($collFaltantesRelatedByIdempleadogenerador)) {
                      $this->initFaltantesRelatedByIdempleadogenerador(false);

                      foreach ($collFaltantesRelatedByIdempleadogenerador as $obj) {
                        if (false == $this->collFaltantesRelatedByIdempleadogenerador->contains($obj)) {
                          $this->collFaltantesRelatedByIdempleadogenerador->append($obj);
                        }
                      }

                      $this->collFaltantesRelatedByIdempleadogeneradorPartial = true;
                    }

                    $collFaltantesRelatedByIdempleadogenerador->getInternalIterator()->rewind();

                    return $collFaltantesRelatedByIdempleadogenerador;
                }

                if ($partial && $this->collFaltantesRelatedByIdempleadogenerador) {
                    foreach ($this->collFaltantesRelatedByIdempleadogenerador as $obj) {
                        if ($obj->isNew()) {
                            $collFaltantesRelatedByIdempleadogenerador[] = $obj;
                        }
                    }
                }

                $this->collFaltantesRelatedByIdempleadogenerador = $collFaltantesRelatedByIdempleadogenerador;
                $this->collFaltantesRelatedByIdempleadogeneradorPartial = false;
            }
        }

        return $this->collFaltantesRelatedByIdempleadogenerador;
    }

    /**
     * Sets a collection of FaltanteRelatedByIdempleadogenerador objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $faltantesRelatedByIdempleadogenerador A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setFaltantesRelatedByIdempleadogenerador(PropelCollection $faltantesRelatedByIdempleadogenerador, PropelPDO $con = null)
    {
        $faltantesRelatedByIdempleadogeneradorToDelete = $this->getFaltantesRelatedByIdempleadogenerador(new Criteria(), $con)->diff($faltantesRelatedByIdempleadogenerador);


        $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion = $faltantesRelatedByIdempleadogeneradorToDelete;

        foreach ($faltantesRelatedByIdempleadogeneradorToDelete as $faltanteRelatedByIdempleadogeneradorRemoved) {
            $faltanteRelatedByIdempleadogeneradorRemoved->setEmpleadoRelatedByIdempleadogenerador(null);
        }

        $this->collFaltantesRelatedByIdempleadogenerador = null;
        foreach ($faltantesRelatedByIdempleadogenerador as $faltanteRelatedByIdempleadogenerador) {
            $this->addFaltanteRelatedByIdempleadogenerador($faltanteRelatedByIdempleadogenerador);
        }

        $this->collFaltantesRelatedByIdempleadogenerador = $faltantesRelatedByIdempleadogenerador;
        $this->collFaltantesRelatedByIdempleadogeneradorPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Faltante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Faltante objects.
     * @throws PropelException
     */
    public function countFaltantesRelatedByIdempleadogenerador(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFaltantesRelatedByIdempleadogeneradorPartial && !$this->isNew();
        if (null === $this->collFaltantesRelatedByIdempleadogenerador || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFaltantesRelatedByIdempleadogenerador) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFaltantesRelatedByIdempleadogenerador());
            }
            $query = FaltanteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadogenerador($this)
                ->count($con);
        }

        return count($this->collFaltantesRelatedByIdempleadogenerador);
    }

    /**
     * Method called to associate a Faltante object to this object
     * through the Faltante foreign key attribute.
     *
     * @param    Faltante $l Faltante
     * @return Empleado The current object (for fluent API support)
     */
    public function addFaltanteRelatedByIdempleadogenerador(Faltante $l)
    {
        if ($this->collFaltantesRelatedByIdempleadogenerador === null) {
            $this->initFaltantesRelatedByIdempleadogenerador();
            $this->collFaltantesRelatedByIdempleadogeneradorPartial = true;
        }

        if (!in_array($l, $this->collFaltantesRelatedByIdempleadogenerador->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFaltanteRelatedByIdempleadogenerador($l);

            if ($this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion and $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->contains($l)) {
                $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->remove($this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FaltanteRelatedByIdempleadogenerador $faltanteRelatedByIdempleadogenerador The faltanteRelatedByIdempleadogenerador object to add.
     */
    protected function doAddFaltanteRelatedByIdempleadogenerador($faltanteRelatedByIdempleadogenerador)
    {
        $this->collFaltantesRelatedByIdempleadogenerador[]= $faltanteRelatedByIdempleadogenerador;
        $faltanteRelatedByIdempleadogenerador->setEmpleadoRelatedByIdempleadogenerador($this);
    }

    /**
     * @param	FaltanteRelatedByIdempleadogenerador $faltanteRelatedByIdempleadogenerador The faltanteRelatedByIdempleadogenerador object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeFaltanteRelatedByIdempleadogenerador($faltanteRelatedByIdempleadogenerador)
    {
        if ($this->getFaltantesRelatedByIdempleadogenerador()->contains($faltanteRelatedByIdempleadogenerador)) {
            $this->collFaltantesRelatedByIdempleadogenerador->remove($this->collFaltantesRelatedByIdempleadogenerador->search($faltanteRelatedByIdempleadogenerador));
            if (null === $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion) {
                $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion = clone $this->collFaltantesRelatedByIdempleadogenerador;
                $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion->clear();
            }
            $this->faltantesRelatedByIdempleadogeneradorScheduledForDeletion[]= clone $faltanteRelatedByIdempleadogenerador;
            $faltanteRelatedByIdempleadogenerador->setEmpleadoRelatedByIdempleadogenerador(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related FaltantesRelatedByIdempleadogenerador from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Faltante[] List of Faltante objects
     */
    public function getFaltantesRelatedByIdempleadogeneradorJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FaltanteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getFaltantesRelatedByIdempleadogenerador($query, $con);
    }

    /**
     * Clears out the collPacientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addPacientes()
     */
    public function clearPacientes()
    {
        $this->collPacientes = null; // important to set this to null since that means it is uninitialized
        $this->collPacientesPartial = null;

        return $this;
    }

    /**
     * reset is the collPacientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialPacientes($v = true)
    {
        $this->collPacientesPartial = $v;
    }

    /**
     * Initializes the collPacientes collection.
     *
     * By default this just sets the collPacientes collection to an empty array (like clearcollPacientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPacientes($overrideExisting = true)
    {
        if (null !== $this->collPacientes && !$overrideExisting) {
            return;
        }
        $this->collPacientes = new PropelObjectCollection();
        $this->collPacientes->setModel('Paciente');
    }

    /**
     * Gets an array of Paciente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Paciente[] List of Paciente objects
     * @throws PropelException
     */
    public function getPacientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPacientesPartial && !$this->isNew();
        if (null === $this->collPacientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPacientes) {
                // return empty collection
                $this->initPacientes();
            } else {
                $collPacientes = PacienteQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPacientesPartial && count($collPacientes)) {
                      $this->initPacientes(false);

                      foreach ($collPacientes as $obj) {
                        if (false == $this->collPacientes->contains($obj)) {
                          $this->collPacientes->append($obj);
                        }
                      }

                      $this->collPacientesPartial = true;
                    }

                    $collPacientes->getInternalIterator()->rewind();

                    return $collPacientes;
                }

                if ($partial && $this->collPacientes) {
                    foreach ($this->collPacientes as $obj) {
                        if ($obj->isNew()) {
                            $collPacientes[] = $obj;
                        }
                    }
                }

                $this->collPacientes = $collPacientes;
                $this->collPacientesPartial = false;
            }
        }

        return $this->collPacientes;
    }

    /**
     * Sets a collection of Paciente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pacientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setPacientes(PropelCollection $pacientes, PropelPDO $con = null)
    {
        $pacientesToDelete = $this->getPacientes(new Criteria(), $con)->diff($pacientes);


        $this->pacientesScheduledForDeletion = $pacientesToDelete;

        foreach ($pacientesToDelete as $pacienteRemoved) {
            $pacienteRemoved->setEmpleado(null);
        }

        $this->collPacientes = null;
        foreach ($pacientes as $paciente) {
            $this->addPaciente($paciente);
        }

        $this->collPacientes = $pacientes;
        $this->collPacientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Paciente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Paciente objects.
     * @throws PropelException
     */
    public function countPacientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPacientesPartial && !$this->isNew();
        if (null === $this->collPacientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPacientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPacientes());
            }
            $query = PacienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collPacientes);
    }

    /**
     * Method called to associate a Paciente object to this object
     * through the Paciente foreign key attribute.
     *
     * @param    Paciente $l Paciente
     * @return Empleado The current object (for fluent API support)
     */
    public function addPaciente(Paciente $l)
    {
        if ($this->collPacientes === null) {
            $this->initPacientes();
            $this->collPacientesPartial = true;
        }

        if (!in_array($l, $this->collPacientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPaciente($l);

            if ($this->pacientesScheduledForDeletion and $this->pacientesScheduledForDeletion->contains($l)) {
                $this->pacientesScheduledForDeletion->remove($this->pacientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Paciente $paciente The paciente object to add.
     */
    protected function doAddPaciente($paciente)
    {
        $this->collPacientes[]= $paciente;
        $paciente->setEmpleado($this);
    }

    /**
     * @param	Paciente $paciente The paciente object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removePaciente($paciente)
    {
        if ($this->getPacientes()->contains($paciente)) {
            $this->collPacientes->remove($this->collPacientes->search($paciente));
            if (null === $this->pacientesScheduledForDeletion) {
                $this->pacientesScheduledForDeletion = clone $this->collPacientes;
                $this->pacientesScheduledForDeletion->clear();
            }
            $this->pacientesScheduledForDeletion[]= $paciente;
            $paciente->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Pacientes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Paciente[] List of Paciente objects
     */
    public function getPacientesJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getPacientes($query, $con);
    }

    /**
     * Clears out the collPacienteseguimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
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
     * If this Empleado is new, it will return
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
                    ->filterByEmpleado($this)
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
     * @return Empleado The current object (for fluent API support)
     */
    public function setPacienteseguimientos(PropelCollection $pacienteseguimientos, PropelPDO $con = null)
    {
        $pacienteseguimientosToDelete = $this->getPacienteseguimientos(new Criteria(), $con)->diff($pacienteseguimientos);


        $this->pacienteseguimientosScheduledForDeletion = $pacienteseguimientosToDelete;

        foreach ($pacienteseguimientosToDelete as $pacienteseguimientoRemoved) {
            $pacienteseguimientoRemoved->setEmpleado(null);
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
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collPacienteseguimientos);
    }

    /**
     * Method called to associate a Pacienteseguimiento object to this object
     * through the Pacienteseguimiento foreign key attribute.
     *
     * @param    Pacienteseguimiento $l Pacienteseguimiento
     * @return Empleado The current object (for fluent API support)
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
        $pacienteseguimiento->setEmpleado($this);
    }

    /**
     * @param	Pacienteseguimiento $pacienteseguimiento The pacienteseguimiento object to remove.
     * @return Empleado The current object (for fluent API support)
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
            $pacienteseguimiento->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
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
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
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
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Pacienteseguimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pacienteseguimiento[] List of Pacienteseguimiento objects
     */
    public function getPacienteseguimientosJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PacienteseguimientoQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getPacienteseguimientos($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdempleado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdempleado()
     */
    public function clearTransferenciasRelatedByIdempleado()
    {
        $this->collTransferenciasRelatedByIdempleado = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdempleadoPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdempleado collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdempleado($v = true)
    {
        $this->collTransferenciasRelatedByIdempleadoPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdempleado collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdempleado collection to an empty array (like clearcollTransferenciasRelatedByIdempleado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdempleado($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdempleado && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdempleado = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdempleado->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdempleado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleado) {
                // return empty collection
                $this->initTransferenciasRelatedByIdempleado();
            } else {
                $collTransferenciasRelatedByIdempleado = TransferenciaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdempleadoPartial && count($collTransferenciasRelatedByIdempleado)) {
                      $this->initTransferenciasRelatedByIdempleado(false);

                      foreach ($collTransferenciasRelatedByIdempleado as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdempleado->contains($obj)) {
                          $this->collTransferenciasRelatedByIdempleado->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdempleadoPartial = true;
                    }

                    $collTransferenciasRelatedByIdempleado->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdempleado;
                }

                if ($partial && $this->collTransferenciasRelatedByIdempleado) {
                    foreach ($this->collTransferenciasRelatedByIdempleado as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdempleado[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdempleado = $collTransferenciasRelatedByIdempleado;
                $this->collTransferenciasRelatedByIdempleadoPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdempleado;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdempleado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdempleado(PropelCollection $transferenciasRelatedByIdempleado, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdempleadoToDelete = $this->getTransferenciasRelatedByIdempleado(new Criteria(), $con)->diff($transferenciasRelatedByIdempleado);


        $this->transferenciasRelatedByIdempleadoScheduledForDeletion = $transferenciasRelatedByIdempleadoToDelete;

        foreach ($transferenciasRelatedByIdempleadoToDelete as $transferenciaRelatedByIdempleadoRemoved) {
            $transferenciaRelatedByIdempleadoRemoved->setEmpleadoRelatedByIdempleado(null);
        }

        $this->collTransferenciasRelatedByIdempleado = null;
        foreach ($transferenciasRelatedByIdempleado as $transferenciaRelatedByIdempleado) {
            $this->addTransferenciaRelatedByIdempleado($transferenciaRelatedByIdempleado);
        }

        $this->collTransferenciasRelatedByIdempleado = $transferenciasRelatedByIdempleado;
        $this->collTransferenciasRelatedByIdempleadoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdempleado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdempleado());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleado($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdempleado);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Empleado The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdempleado(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdempleado === null) {
            $this->initTransferenciasRelatedByIdempleado();
            $this->collTransferenciasRelatedByIdempleadoPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdempleado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdempleado($l);

            if ($this->transferenciasRelatedByIdempleadoScheduledForDeletion and $this->transferenciasRelatedByIdempleadoScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdempleadoScheduledForDeletion->remove($this->transferenciasRelatedByIdempleadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdempleado $transferenciaRelatedByIdempleado The transferenciaRelatedByIdempleado object to add.
     */
    protected function doAddTransferenciaRelatedByIdempleado($transferenciaRelatedByIdempleado)
    {
        $this->collTransferenciasRelatedByIdempleado[]= $transferenciaRelatedByIdempleado;
        $transferenciaRelatedByIdempleado->setEmpleadoRelatedByIdempleado($this);
    }

    /**
     * @param	TransferenciaRelatedByIdempleado $transferenciaRelatedByIdempleado The transferenciaRelatedByIdempleado object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdempleado($transferenciaRelatedByIdempleado)
    {
        if ($this->getTransferenciasRelatedByIdempleado()->contains($transferenciaRelatedByIdempleado)) {
            $this->collTransferenciasRelatedByIdempleado->remove($this->collTransferenciasRelatedByIdempleado->search($transferenciaRelatedByIdempleado));
            if (null === $this->transferenciasRelatedByIdempleadoScheduledForDeletion) {
                $this->transferenciasRelatedByIdempleadoScheduledForDeletion = clone $this->collTransferenciasRelatedByIdempleado;
                $this->transferenciasRelatedByIdempleadoScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdempleadoScheduledForDeletion[]= clone $transferenciaRelatedByIdempleado;
            $transferenciaRelatedByIdempleado->setEmpleadoRelatedByIdempleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoJoinClinicaRelatedByIdclinicadestinataria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('ClinicaRelatedByIdclinicadestinataria', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleado($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoJoinClinicaRelatedByIdclinicaremitente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('ClinicaRelatedByIdclinicaremitente', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleado($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdempleadoreceptor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdempleadoreceptor()
     */
    public function clearTransferenciasRelatedByIdempleadoreceptor()
    {
        $this->collTransferenciasRelatedByIdempleadoreceptor = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdempleadoreceptor collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdempleadoreceptor($v = true)
    {
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdempleadoreceptor collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdempleadoreceptor collection to an empty array (like clearcollTransferenciasRelatedByIdempleadoreceptor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdempleadoreceptor($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdempleadoreceptor && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdempleadoreceptor = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdempleadoreceptor->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdempleadoreceptor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoreceptorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadoreceptor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadoreceptor) {
                // return empty collection
                $this->initTransferenciasRelatedByIdempleadoreceptor();
            } else {
                $collTransferenciasRelatedByIdempleadoreceptor = TransferenciaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadoreceptor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdempleadoreceptorPartial && count($collTransferenciasRelatedByIdempleadoreceptor)) {
                      $this->initTransferenciasRelatedByIdempleadoreceptor(false);

                      foreach ($collTransferenciasRelatedByIdempleadoreceptor as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdempleadoreceptor->contains($obj)) {
                          $this->collTransferenciasRelatedByIdempleadoreceptor->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdempleadoreceptorPartial = true;
                    }

                    $collTransferenciasRelatedByIdempleadoreceptor->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdempleadoreceptor;
                }

                if ($partial && $this->collTransferenciasRelatedByIdempleadoreceptor) {
                    foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdempleadoreceptor[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdempleadoreceptor = $collTransferenciasRelatedByIdempleadoreceptor;
                $this->collTransferenciasRelatedByIdempleadoreceptorPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdempleadoreceptor;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdempleadoreceptor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdempleadoreceptor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdempleadoreceptor(PropelCollection $transferenciasRelatedByIdempleadoreceptor, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdempleadoreceptorToDelete = $this->getTransferenciasRelatedByIdempleadoreceptor(new Criteria(), $con)->diff($transferenciasRelatedByIdempleadoreceptor);


        $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = $transferenciasRelatedByIdempleadoreceptorToDelete;

        foreach ($transferenciasRelatedByIdempleadoreceptorToDelete as $transferenciaRelatedByIdempleadoreceptorRemoved) {
            $transferenciaRelatedByIdempleadoreceptorRemoved->setEmpleadoRelatedByIdempleadoreceptor(null);
        }

        $this->collTransferenciasRelatedByIdempleadoreceptor = null;
        foreach ($transferenciasRelatedByIdempleadoreceptor as $transferenciaRelatedByIdempleadoreceptor) {
            $this->addTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor);
        }

        $this->collTransferenciasRelatedByIdempleadoreceptor = $transferenciasRelatedByIdempleadoreceptor;
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdempleadoreceptor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoreceptorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadoreceptor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadoreceptor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdempleadoreceptor());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadoreceptor($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdempleadoreceptor);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Empleado The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdempleadoreceptor(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdempleadoreceptor === null) {
            $this->initTransferenciasRelatedByIdempleadoreceptor();
            $this->collTransferenciasRelatedByIdempleadoreceptorPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdempleadoreceptor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdempleadoreceptor($l);

            if ($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion and $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->remove($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdempleadoreceptor $transferenciaRelatedByIdempleadoreceptor The transferenciaRelatedByIdempleadoreceptor object to add.
     */
    protected function doAddTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor)
    {
        $this->collTransferenciasRelatedByIdempleadoreceptor[]= $transferenciaRelatedByIdempleadoreceptor;
        $transferenciaRelatedByIdempleadoreceptor->setEmpleadoRelatedByIdempleadoreceptor($this);
    }

    /**
     * @param	TransferenciaRelatedByIdempleadoreceptor $transferenciaRelatedByIdempleadoreceptor The transferenciaRelatedByIdempleadoreceptor object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor)
    {
        if ($this->getTransferenciasRelatedByIdempleadoreceptor()->contains($transferenciaRelatedByIdempleadoreceptor)) {
            $this->collTransferenciasRelatedByIdempleadoreceptor->remove($this->collTransferenciasRelatedByIdempleadoreceptor->search($transferenciaRelatedByIdempleadoreceptor));
            if (null === $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion) {
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = clone $this->collTransferenciasRelatedByIdempleadoreceptor;
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion[]= $transferenciaRelatedByIdempleadoreceptor;
            $transferenciaRelatedByIdempleadoreceptor->setEmpleadoRelatedByIdempleadoreceptor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadoreceptor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoreceptorJoinClinicaRelatedByIdclinicadestinataria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('ClinicaRelatedByIdclinicadestinataria', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadoreceptor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadoreceptor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoreceptorJoinClinicaRelatedByIdclinicaremitente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('ClinicaRelatedByIdclinicaremitente', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadoreceptor($query, $con);
    }

    /**
     * Clears out the collVisitasRelatedByIdempleado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addVisitasRelatedByIdempleado()
     */
    public function clearVisitasRelatedByIdempleado()
    {
        $this->collVisitasRelatedByIdempleado = null; // important to set this to null since that means it is uninitialized
        $this->collVisitasRelatedByIdempleadoPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitasRelatedByIdempleado collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitasRelatedByIdempleado($v = true)
    {
        $this->collVisitasRelatedByIdempleadoPartial = $v;
    }

    /**
     * Initializes the collVisitasRelatedByIdempleado collection.
     *
     * By default this just sets the collVisitasRelatedByIdempleado collection to an empty array (like clearcollVisitasRelatedByIdempleado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitasRelatedByIdempleado($overrideExisting = true)
    {
        if (null !== $this->collVisitasRelatedByIdempleado && !$overrideExisting) {
            return;
        }
        $this->collVisitasRelatedByIdempleado = new PropelObjectCollection();
        $this->collVisitasRelatedByIdempleado->setModel('Visita');
    }

    /**
     * Gets an array of Visita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visita[] List of Visita objects
     * @throws PropelException
     */
    public function getVisitasRelatedByIdempleado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitasRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collVisitasRelatedByIdempleado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitasRelatedByIdempleado) {
                // return empty collection
                $this->initVisitasRelatedByIdempleado();
            } else {
                $collVisitasRelatedByIdempleado = VisitaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitasRelatedByIdempleadoPartial && count($collVisitasRelatedByIdempleado)) {
                      $this->initVisitasRelatedByIdempleado(false);

                      foreach ($collVisitasRelatedByIdempleado as $obj) {
                        if (false == $this->collVisitasRelatedByIdempleado->contains($obj)) {
                          $this->collVisitasRelatedByIdempleado->append($obj);
                        }
                      }

                      $this->collVisitasRelatedByIdempleadoPartial = true;
                    }

                    $collVisitasRelatedByIdempleado->getInternalIterator()->rewind();

                    return $collVisitasRelatedByIdempleado;
                }

                if ($partial && $this->collVisitasRelatedByIdempleado) {
                    foreach ($this->collVisitasRelatedByIdempleado as $obj) {
                        if ($obj->isNew()) {
                            $collVisitasRelatedByIdempleado[] = $obj;
                        }
                    }
                }

                $this->collVisitasRelatedByIdempleado = $collVisitasRelatedByIdempleado;
                $this->collVisitasRelatedByIdempleadoPartial = false;
            }
        }

        return $this->collVisitasRelatedByIdempleado;
    }

    /**
     * Sets a collection of VisitaRelatedByIdempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitasRelatedByIdempleado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setVisitasRelatedByIdempleado(PropelCollection $visitasRelatedByIdempleado, PropelPDO $con = null)
    {
        $visitasRelatedByIdempleadoToDelete = $this->getVisitasRelatedByIdempleado(new Criteria(), $con)->diff($visitasRelatedByIdempleado);


        $this->visitasRelatedByIdempleadoScheduledForDeletion = $visitasRelatedByIdempleadoToDelete;

        foreach ($visitasRelatedByIdempleadoToDelete as $visitaRelatedByIdempleadoRemoved) {
            $visitaRelatedByIdempleadoRemoved->setEmpleadoRelatedByIdempleado(null);
        }

        $this->collVisitasRelatedByIdempleado = null;
        foreach ($visitasRelatedByIdempleado as $visitaRelatedByIdempleado) {
            $this->addVisitaRelatedByIdempleado($visitaRelatedByIdempleado);
        }

        $this->collVisitasRelatedByIdempleado = $visitasRelatedByIdempleado;
        $this->collVisitasRelatedByIdempleadoPartial = false;

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
    public function countVisitasRelatedByIdempleado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitasRelatedByIdempleadoPartial && !$this->isNew();
        if (null === $this->collVisitasRelatedByIdempleado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitasRelatedByIdempleado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitasRelatedByIdempleado());
            }
            $query = VisitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleado($this)
                ->count($con);
        }

        return count($this->collVisitasRelatedByIdempleado);
    }

    /**
     * Method called to associate a Visita object to this object
     * through the Visita foreign key attribute.
     *
     * @param    Visita $l Visita
     * @return Empleado The current object (for fluent API support)
     */
    public function addVisitaRelatedByIdempleado(Visita $l)
    {
        if ($this->collVisitasRelatedByIdempleado === null) {
            $this->initVisitasRelatedByIdempleado();
            $this->collVisitasRelatedByIdempleadoPartial = true;
        }

        if (!in_array($l, $this->collVisitasRelatedByIdempleado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisitaRelatedByIdempleado($l);

            if ($this->visitasRelatedByIdempleadoScheduledForDeletion and $this->visitasRelatedByIdempleadoScheduledForDeletion->contains($l)) {
                $this->visitasRelatedByIdempleadoScheduledForDeletion->remove($this->visitasRelatedByIdempleadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	VisitaRelatedByIdempleado $visitaRelatedByIdempleado The visitaRelatedByIdempleado object to add.
     */
    protected function doAddVisitaRelatedByIdempleado($visitaRelatedByIdempleado)
    {
        $this->collVisitasRelatedByIdempleado[]= $visitaRelatedByIdempleado;
        $visitaRelatedByIdempleado->setEmpleadoRelatedByIdempleado($this);
    }

    /**
     * @param	VisitaRelatedByIdempleado $visitaRelatedByIdempleado The visitaRelatedByIdempleado object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeVisitaRelatedByIdempleado($visitaRelatedByIdempleado)
    {
        if ($this->getVisitasRelatedByIdempleado()->contains($visitaRelatedByIdempleado)) {
            $this->collVisitasRelatedByIdempleado->remove($this->collVisitasRelatedByIdempleado->search($visitaRelatedByIdempleado));
            if (null === $this->visitasRelatedByIdempleadoScheduledForDeletion) {
                $this->visitasRelatedByIdempleadoScheduledForDeletion = clone $this->collVisitasRelatedByIdempleado;
                $this->visitasRelatedByIdempleadoScheduledForDeletion->clear();
            }
            $this->visitasRelatedByIdempleadoScheduledForDeletion[]= clone $visitaRelatedByIdempleado;
            $visitaRelatedByIdempleado->setEmpleadoRelatedByIdempleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VisitasRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasRelatedByIdempleadoJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getVisitasRelatedByIdempleado($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VisitasRelatedByIdempleado from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasRelatedByIdempleadoJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getVisitasRelatedByIdempleado($query, $con);
    }

    /**
     * Clears out the collVisitasRelatedByIdempleadocreador collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addVisitasRelatedByIdempleadocreador()
     */
    public function clearVisitasRelatedByIdempleadocreador()
    {
        $this->collVisitasRelatedByIdempleadocreador = null; // important to set this to null since that means it is uninitialized
        $this->collVisitasRelatedByIdempleadocreadorPartial = null;

        return $this;
    }

    /**
     * reset is the collVisitasRelatedByIdempleadocreador collection loaded partially
     *
     * @return void
     */
    public function resetPartialVisitasRelatedByIdempleadocreador($v = true)
    {
        $this->collVisitasRelatedByIdempleadocreadorPartial = $v;
    }

    /**
     * Initializes the collVisitasRelatedByIdempleadocreador collection.
     *
     * By default this just sets the collVisitasRelatedByIdempleadocreador collection to an empty array (like clearcollVisitasRelatedByIdempleadocreador());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVisitasRelatedByIdempleadocreador($overrideExisting = true)
    {
        if (null !== $this->collVisitasRelatedByIdempleadocreador && !$overrideExisting) {
            return;
        }
        $this->collVisitasRelatedByIdempleadocreador = new PropelObjectCollection();
        $this->collVisitasRelatedByIdempleadocreador->setModel('Visita');
    }

    /**
     * Gets an array of Visita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Visita[] List of Visita objects
     * @throws PropelException
     */
    public function getVisitasRelatedByIdempleadocreador($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVisitasRelatedByIdempleadocreadorPartial && !$this->isNew();
        if (null === $this->collVisitasRelatedByIdempleadocreador || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVisitasRelatedByIdempleadocreador) {
                // return empty collection
                $this->initVisitasRelatedByIdempleadocreador();
            } else {
                $collVisitasRelatedByIdempleadocreador = VisitaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadocreador($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVisitasRelatedByIdempleadocreadorPartial && count($collVisitasRelatedByIdempleadocreador)) {
                      $this->initVisitasRelatedByIdempleadocreador(false);

                      foreach ($collVisitasRelatedByIdempleadocreador as $obj) {
                        if (false == $this->collVisitasRelatedByIdempleadocreador->contains($obj)) {
                          $this->collVisitasRelatedByIdempleadocreador->append($obj);
                        }
                      }

                      $this->collVisitasRelatedByIdempleadocreadorPartial = true;
                    }

                    $collVisitasRelatedByIdempleadocreador->getInternalIterator()->rewind();

                    return $collVisitasRelatedByIdempleadocreador;
                }

                if ($partial && $this->collVisitasRelatedByIdempleadocreador) {
                    foreach ($this->collVisitasRelatedByIdempleadocreador as $obj) {
                        if ($obj->isNew()) {
                            $collVisitasRelatedByIdempleadocreador[] = $obj;
                        }
                    }
                }

                $this->collVisitasRelatedByIdempleadocreador = $collVisitasRelatedByIdempleadocreador;
                $this->collVisitasRelatedByIdempleadocreadorPartial = false;
            }
        }

        return $this->collVisitasRelatedByIdempleadocreador;
    }

    /**
     * Sets a collection of VisitaRelatedByIdempleadocreador objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $visitasRelatedByIdempleadocreador A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setVisitasRelatedByIdempleadocreador(PropelCollection $visitasRelatedByIdempleadocreador, PropelPDO $con = null)
    {
        $visitasRelatedByIdempleadocreadorToDelete = $this->getVisitasRelatedByIdempleadocreador(new Criteria(), $con)->diff($visitasRelatedByIdempleadocreador);


        $this->visitasRelatedByIdempleadocreadorScheduledForDeletion = $visitasRelatedByIdempleadocreadorToDelete;

        foreach ($visitasRelatedByIdempleadocreadorToDelete as $visitaRelatedByIdempleadocreadorRemoved) {
            $visitaRelatedByIdempleadocreadorRemoved->setEmpleadoRelatedByIdempleadocreador(null);
        }

        $this->collVisitasRelatedByIdempleadocreador = null;
        foreach ($visitasRelatedByIdempleadocreador as $visitaRelatedByIdempleadocreador) {
            $this->addVisitaRelatedByIdempleadocreador($visitaRelatedByIdempleadocreador);
        }

        $this->collVisitasRelatedByIdempleadocreador = $visitasRelatedByIdempleadocreador;
        $this->collVisitasRelatedByIdempleadocreadorPartial = false;

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
    public function countVisitasRelatedByIdempleadocreador(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVisitasRelatedByIdempleadocreadorPartial && !$this->isNew();
        if (null === $this->collVisitasRelatedByIdempleadocreador || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVisitasRelatedByIdempleadocreador) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVisitasRelatedByIdempleadocreador());
            }
            $query = VisitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadocreador($this)
                ->count($con);
        }

        return count($this->collVisitasRelatedByIdempleadocreador);
    }

    /**
     * Method called to associate a Visita object to this object
     * through the Visita foreign key attribute.
     *
     * @param    Visita $l Visita
     * @return Empleado The current object (for fluent API support)
     */
    public function addVisitaRelatedByIdempleadocreador(Visita $l)
    {
        if ($this->collVisitasRelatedByIdempleadocreador === null) {
            $this->initVisitasRelatedByIdempleadocreador();
            $this->collVisitasRelatedByIdempleadocreadorPartial = true;
        }

        if (!in_array($l, $this->collVisitasRelatedByIdempleadocreador->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVisitaRelatedByIdempleadocreador($l);

            if ($this->visitasRelatedByIdempleadocreadorScheduledForDeletion and $this->visitasRelatedByIdempleadocreadorScheduledForDeletion->contains($l)) {
                $this->visitasRelatedByIdempleadocreadorScheduledForDeletion->remove($this->visitasRelatedByIdempleadocreadorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	VisitaRelatedByIdempleadocreador $visitaRelatedByIdempleadocreador The visitaRelatedByIdempleadocreador object to add.
     */
    protected function doAddVisitaRelatedByIdempleadocreador($visitaRelatedByIdempleadocreador)
    {
        $this->collVisitasRelatedByIdempleadocreador[]= $visitaRelatedByIdempleadocreador;
        $visitaRelatedByIdempleadocreador->setEmpleadoRelatedByIdempleadocreador($this);
    }

    /**
     * @param	VisitaRelatedByIdempleadocreador $visitaRelatedByIdempleadocreador The visitaRelatedByIdempleadocreador object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeVisitaRelatedByIdempleadocreador($visitaRelatedByIdempleadocreador)
    {
        if ($this->getVisitasRelatedByIdempleadocreador()->contains($visitaRelatedByIdempleadocreador)) {
            $this->collVisitasRelatedByIdempleadocreador->remove($this->collVisitasRelatedByIdempleadocreador->search($visitaRelatedByIdempleadocreador));
            if (null === $this->visitasRelatedByIdempleadocreadorScheduledForDeletion) {
                $this->visitasRelatedByIdempleadocreadorScheduledForDeletion = clone $this->collVisitasRelatedByIdempleadocreador;
                $this->visitasRelatedByIdempleadocreadorScheduledForDeletion->clear();
            }
            $this->visitasRelatedByIdempleadocreadorScheduledForDeletion[]= clone $visitaRelatedByIdempleadocreador;
            $visitaRelatedByIdempleadocreador->setEmpleadoRelatedByIdempleadocreador(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VisitasRelatedByIdempleadocreador from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasRelatedByIdempleadocreadorJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getVisitasRelatedByIdempleadocreador($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VisitasRelatedByIdempleadocreador from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Visita[] List of Visita objects
     */
    public function getVisitasRelatedByIdempleadocreadorJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VisitaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getVisitasRelatedByIdempleadocreador($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleado = null;
        $this->empleado_registradoen = null;
        $this->empleado_nombre = null;
        $this->empleado_nss = null;
        $this->empleado_rfc = null;
        $this->empleado_calle = null;
        $this->empleado_numero = null;
        $this->empleado_colonia = null;
        $this->empleado_codigopostal = null;
        $this->empleado_ciudad = null;
        $this->empleado_sexo = null;
        $this->empleado_fechanacimiento = null;
        $this->empleado_telefono = null;
        $this->empleado_celular = null;
        $this->empleado_comprobantedomiclio = null;
        $this->empleado_comprobanteidentificacion = null;
        $this->empleado_sueldo = null;
        $this->empleado_foto = null;
        $this->empleado_tipocomisionproducto = null;
        $this->empleado_cantidadcomisionproducto = null;
        $this->empleado_tipocomisionservicio = null;
        $this->empleado_cantidadcomisionservicio = null;
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
            if ($this->collClinicaempleados) {
                foreach ($this->collClinicaempleados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCompras) {
                foreach ($this->collCompras as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEgresoclinicas) {
                foreach ($this->collEgresoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadoaccesos) {
                foreach ($this->collEmpleadoaccesos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadocomisions) {
                foreach ($this->collEmpleadocomisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadohorarios) {
                foreach ($this->collEmpleadohorarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadorecesos) {
                foreach ($this->collEmpleadorecesos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadoreportesRelatedByIdempleado) {
                foreach ($this->collEmpleadoreportesRelatedByIdempleado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmpleadoreportesRelatedByIdempleadoreportado) {
                foreach ($this->collEmpleadoreportesRelatedByIdempleadoreportado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEncargadoclinicas) {
                foreach ($this->collEncargadoclinicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFaltantesRelatedByIdempleadodeudor) {
                foreach ($this->collFaltantesRelatedByIdempleadodeudor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFaltantesRelatedByIdempleadogenerador) {
                foreach ($this->collFaltantesRelatedByIdempleadogenerador as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacientes) {
                foreach ($this->collPacientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPacienteseguimientos) {
                foreach ($this->collPacienteseguimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdempleado) {
                foreach ($this->collTransferenciasRelatedByIdempleado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdempleadoreceptor) {
                foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitasRelatedByIdempleado) {
                foreach ($this->collVisitasRelatedByIdempleado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVisitasRelatedByIdempleadocreador) {
                foreach ($this->collVisitasRelatedByIdempleadocreador as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClinicaempleados instanceof PropelCollection) {
            $this->collClinicaempleados->clearIterator();
        }
        $this->collClinicaempleados = null;
        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
        if ($this->collEgresoclinicas instanceof PropelCollection) {
            $this->collEgresoclinicas->clearIterator();
        }
        $this->collEgresoclinicas = null;
        if ($this->collEmpleadoaccesos instanceof PropelCollection) {
            $this->collEmpleadoaccesos->clearIterator();
        }
        $this->collEmpleadoaccesos = null;
        if ($this->collEmpleadocomisions instanceof PropelCollection) {
            $this->collEmpleadocomisions->clearIterator();
        }
        $this->collEmpleadocomisions = null;
        if ($this->collEmpleadohorarios instanceof PropelCollection) {
            $this->collEmpleadohorarios->clearIterator();
        }
        $this->collEmpleadohorarios = null;
        if ($this->collEmpleadorecesos instanceof PropelCollection) {
            $this->collEmpleadorecesos->clearIterator();
        }
        $this->collEmpleadorecesos = null;
        if ($this->collEmpleadoreportesRelatedByIdempleado instanceof PropelCollection) {
            $this->collEmpleadoreportesRelatedByIdempleado->clearIterator();
        }
        $this->collEmpleadoreportesRelatedByIdempleado = null;
        if ($this->collEmpleadoreportesRelatedByIdempleadoreportado instanceof PropelCollection) {
            $this->collEmpleadoreportesRelatedByIdempleadoreportado->clearIterator();
        }
        $this->collEmpleadoreportesRelatedByIdempleadoreportado = null;
        if ($this->collEncargadoclinicas instanceof PropelCollection) {
            $this->collEncargadoclinicas->clearIterator();
        }
        $this->collEncargadoclinicas = null;
        if ($this->collFaltantesRelatedByIdempleadodeudor instanceof PropelCollection) {
            $this->collFaltantesRelatedByIdempleadodeudor->clearIterator();
        }
        $this->collFaltantesRelatedByIdempleadodeudor = null;
        if ($this->collFaltantesRelatedByIdempleadogenerador instanceof PropelCollection) {
            $this->collFaltantesRelatedByIdempleadogenerador->clearIterator();
        }
        $this->collFaltantesRelatedByIdempleadogenerador = null;
        if ($this->collPacientes instanceof PropelCollection) {
            $this->collPacientes->clearIterator();
        }
        $this->collPacientes = null;
        if ($this->collPacienteseguimientos instanceof PropelCollection) {
            $this->collPacienteseguimientos->clearIterator();
        }
        $this->collPacienteseguimientos = null;
        if ($this->collTransferenciasRelatedByIdempleado instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdempleado->clearIterator();
        }
        $this->collTransferenciasRelatedByIdempleado = null;
        if ($this->collTransferenciasRelatedByIdempleadoreceptor instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdempleadoreceptor->clearIterator();
        }
        $this->collTransferenciasRelatedByIdempleadoreceptor = null;
        if ($this->collVisitasRelatedByIdempleado instanceof PropelCollection) {
            $this->collVisitasRelatedByIdempleado->clearIterator();
        }
        $this->collVisitasRelatedByIdempleado = null;
        if ($this->collVisitasRelatedByIdempleadocreador instanceof PropelCollection) {
            $this->collVisitasRelatedByIdempleadocreador->clearIterator();
        }
        $this->collVisitasRelatedByIdempleadocreador = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadoPeer::DEFAULT_STRING_FORMAT);
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
