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
 * @package    propel.generator.feetcenter.map
 */
class EmpleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.EmpleadoTableMap';

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
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
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
        $this->addColumn('empleado_diadescanso', 'EmpleadoDiadescanso', 'CHAR', true, null, null);
        $this->getColumn('empleado_diadescanso', false)->setValueSet(array (
  0 => 'lunes',
  1 => 'martes',
  2 => 'miercoles',
  3 => 'jueves',
  4 => 'viernes',
  5 => 'sabado',
  6 => 'domingo',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Clinicaempleado', 'Clinicaempleado', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Clinicaempleados');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Egresoclinica', 'Egresoclinica', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Egresoclinicas');
        $this->addRelation('Empleadocomision', 'Empleadocomision', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempledo', ), 'CASCADE', 'CASCADE', 'Empleadocomisions');
        $this->addRelation('Empleadohorario', 'Empleadohorario', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Empleadohorarios');
        $this->addRelation('FaltanteRelatedByIdempleadodeudor', 'Faltante', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadodeudor', ), 'CASCADE', 'CASCADE', 'FaltantesRelatedByIdempleadodeudor');
        $this->addRelation('FaltanteRelatedByIdempleadogenerador', 'Faltante', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadogenerador', ), 'CASCADE', 'CASCADE', 'FaltantesRelatedByIdempleadogenerador');
        $this->addRelation('TransferenciaRelatedByIdempleado', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), null, null, 'TransferenciasRelatedByIdempleado');
        $this->addRelation('TransferenciaRelatedByIdempleadoreceptor', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadoreceptor', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdempleadoreceptor');
        $this->addRelation('VisitaRelatedByIdempleado', 'Visita', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), null, null, 'VisitasRelatedByIdempleado');
        $this->addRelation('VisitaRelatedByIdempleadocreador', 'Visita', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadocreador', ), 'CASCADE', 'CASCADE', 'VisitasRelatedByIdempleadocreador');
    } // buildRelations()

} // EmpleadoTableMap
