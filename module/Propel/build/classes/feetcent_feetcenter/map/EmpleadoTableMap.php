<?php



/**
 * This class defines the structure of the 'empleado' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.feetcent_feetcenter.map
 */
class EmpleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EmpleadoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('empleado');
        $this->setPhpName('Empleado');
        $this->setClassname('Empleado');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addColumn('empleado_registradoen', 'EmpleadoRegistradoen', 'TIMESTAMP', true, null, null);
        $this->addColumn('empleado_nombre', 'EmpleadoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('empleado_nss', 'EmpleadoNss', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_rfc', 'EmpleadoRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_calle', 'EmpleadoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_numero', 'EmpleadoNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_colonia', 'EmpleadoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_codigopostal', 'EmpleadoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_ciudad', 'EmpleadoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_sexo', 'EmpleadoSexo', 'CHAR', false, null, null);
        $this->getColumn('empleado_sexo', false)->setValueSet(array (
  0 => 'Hombre',
  1 => 'Mujer',
));
        $this->addColumn('empleado_fechanacimiento', 'EmpleadoFechanacimiento', 'DATE', false, null, null);
        $this->addColumn('empleado_telefono', 'EmpleadoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_celular', 'EmpleadoCelular', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_comprobantedomiclio', 'EmpleadoComprobantedomiclio', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empleado_comprobanteidentificacion', 'EmpleadoComprobanteidentificacion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empleado_sueldo', 'EmpleadoSueldo', 'DECIMAL', false, 10, null);
        $this->addColumn('empleado_foto', 'EmpleadoFoto', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empleado_tipocomisionproducto', 'EmpleadoTipocomisionproducto', 'CHAR', false, null, null);
        $this->getColumn('empleado_tipocomisionproducto', false)->setValueSet(array (
  0 => 'porcentaje',
  1 => 'cantidad',
));
        $this->addColumn('empleado_cantidadcomisionproducto', 'EmpleadoCantidadcomisionproducto', 'DECIMAL', false, 10, null);
        $this->addColumn('empleado_tipocomisionservicio', 'EmpleadoTipocomisionservicio', 'CHAR', false, null, null);
        $this->getColumn('empleado_tipocomisionservicio', false)->setValueSet(array (
  0 => 'porcentaje',
  1 => 'cantidad',
));
        $this->addColumn('empleado_cantidadcomisionservicio', 'EmpleadoCantidadcomisionservicio', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ausenciaempleado', 'Ausenciaempleado', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Ausenciaempleados');
        $this->addRelation('Clinicaempleado', 'Clinicaempleado', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Clinicaempleados');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Egresoclinica', 'Egresoclinica', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Egresoclinicas');
        $this->addRelation('Empleadoacceso', 'Empleadoacceso', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Empleadoaccesos');
        $this->addRelation('Empleadocomision', 'Empleadocomision', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempledo', ), 'CASCADE', 'CASCADE', 'Empleadocomisions');
        $this->addRelation('Empleadohorario', 'Empleadohorario', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Empleadohorarios');
        $this->addRelation('Empleadoreceso', 'Empleadoreceso', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Empleadorecesos');
        $this->addRelation('EmpleadoreporteRelatedByIdempleado', 'Empleadoreporte', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'EmpleadoreportesRelatedByIdempleado');
        $this->addRelation('EmpleadoreporteRelatedByIdempleadoreportado', 'Empleadoreporte', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadoreportado', ), 'CASCADE', 'CASCADE', 'EmpleadoreportesRelatedByIdempleadoreportado');
        $this->addRelation('Encargadoclinica', 'Encargadoclinica', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Encargadoclinicas');
        $this->addRelation('FaltanteRelatedByIdempleadodeudor', 'Faltante', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadodeudor', ), 'CASCADE', 'CASCADE', 'FaltantesRelatedByIdempleadodeudor');
        $this->addRelation('FaltanteRelatedByIdempleadogenerador', 'Faltante', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadogenerador', ), 'CASCADE', 'CASCADE', 'FaltantesRelatedByIdempleadogenerador');
        $this->addRelation('Metaempleado', 'Metaempleado', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Metaempleados');
        $this->addRelation('Paciente', 'Paciente', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Pacientes');
        $this->addRelation('Pacienteseguimiento', 'Pacienteseguimiento', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Pacienteseguimientos');
        $this->addRelation('TransferenciaRelatedByIdempleado', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdempleado');
        $this->addRelation('TransferenciaRelatedByIdempleadoreceptor', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadoreceptor', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdempleadoreceptor');
        $this->addRelation('VisitaRelatedByIdempleado', 'Visita', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'VisitasRelatedByIdempleado');
        $this->addRelation('VisitaRelatedByIdempleadocreador', 'Visita', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadocreador', ), 'CASCADE', 'CASCADE', 'VisitasRelatedByIdempleadocreador');
    } // buildRelations()

} // EmpleadoTableMap
