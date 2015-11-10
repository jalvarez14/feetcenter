<?php



/**
 * This class defines the structure of the 'clinicaempleado' table.
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
class ClinicaempleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ClinicaempleadoTableMap';

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
        $this->setName('clinicaempleado');
        $this->setPhpName('Clinicaempleado');
        $this->setClassname('Clinicaempleado');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idclinicaempleados', 'Idclinicaempleados', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ClinicaempleadoTableMap
