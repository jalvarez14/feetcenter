<?php



/**
 * This class defines the structure of the 'paciente' table.
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
class PacienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.PacienteTableMap';

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
        $this->setName('paciente');
        $this->setPhpName('Paciente');
        $this->setClassname('Paciente');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpaciente', 'Idpaciente', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', false, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', false, null, null);
        $this->addColumn('paciente_nombre', 'PacienteNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('paciente_celular', 'PacienteCelular', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_telefono', 'PacienteTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('paciente_calle', 'PacienteCalle', 'VARCHAR', false, 100, null);
        $this->addColumn('paciente_numero', 'PacienteNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('paciente_colonia', 'PacienteColonia', 'VARCHAR', false, 100, null);
        $this->addColumn('paciente_codigopostal', 'PacienteCodigopostal', 'VARCHAR', false, 5, null);
        $this->addColumn('paciente_ciudad', 'PacienteCiudad', 'VARCHAR', false, 100, null);
        $this->addColumn('paciente_estado', 'PacienteEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('paciente_sexo', 'PacienteSexo', 'CHAR', false, null, null);
        $this->getColumn('paciente_sexo', false)->setValueSet(array (
  0 => 'Hombre',
  1 => 'Mujer',
));
        $this->addColumn('paciente_fechanacimiento', 'PacienteFechanacimiento', 'DATE', false, null, null);
        $this->addColumn('paciente_fecharegistro', 'PacienteFecharegistro', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Grupopaciente', 'Grupopaciente', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Grupopacientes');
        $this->addRelation('GrupopersonalRelatedByIdpaciente', 'Grupopersonal', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'GrupopersonalsRelatedByIdpaciente');
        $this->addRelation('GrupopersonalRelatedByIdpacienteagregado', 'Grupopersonal', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpacienteagregado', ), 'CASCADE', 'CASCADE', 'GrupopersonalsRelatedByIdpacienteagregado');
        $this->addRelation('Pacienteseguimiento', 'Pacienteseguimiento', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Pacienteseguimientos');
        $this->addRelation('Visita', 'Visita', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Visitas');
    } // buildRelations()

} // PacienteTableMap
