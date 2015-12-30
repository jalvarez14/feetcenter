<?php



/**
 * This class defines the structure of the 'pacienteseguimiento' table.
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
class PacienteseguimientoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.PacienteseguimientoTableMap';

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
        $this->setName('pacienteseguimiento');
        $this->setPhpName('Pacienteseguimiento');
        $this->setClassname('Pacienteseguimiento');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpacienteseguimiento', 'Idpacienteseguimiento', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idcanalcomunicacion', 'Idcanalcomunicacion', 'INTEGER', 'canalcomunicacion', 'idcanalcomunicacion', true, null, null);
        $this->addForeignKey('idestatusseguimiento', 'Idestatusseguimiento', 'INTEGER', 'estatusseguimiento', 'idestatusseguimiento', true, null, null);
        $this->addColumn('pacienteseguimiento_fechacreacion', 'PacienteseguimientoFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('pacienteseguimiento_comentario', 'PacienteseguimientoComentario', 'LONGVARCHAR', true, null, null);
        $this->addColumn('pacienteseguimiento_fecha', 'PacienteseguimientoFecha', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Canalcomunicacion', 'Canalcomunicacion', RelationMap::MANY_TO_ONE, array('idcanalcomunicacion' => 'idcanalcomunicacion', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Estatusseguimiento', 'Estatusseguimiento', RelationMap::MANY_TO_ONE, array('idestatusseguimiento' => 'idestatusseguimiento', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PacienteseguimientoTableMap
