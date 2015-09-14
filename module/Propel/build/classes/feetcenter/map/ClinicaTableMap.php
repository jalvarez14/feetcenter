<?php



/**
 * This class defines the structure of the 'clinica' table.
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
class ClinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.ClinicaTableMap';

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
        $this->setName('clinica');
        $this->setPhpName('Clinica');
        $this->setClassname('Clinica');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idclinica', 'Idclinica', 'INTEGER', true, null, null);
        $this->addColumn('clinica_nombre', 'ClinicaNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('clinica_direccion', 'ClinicaDireccion', 'VARCHAR', true, 45, null);
        $this->addColumn('clinica_registropatronal', 'ClinicaRegistropatronal', 'VARCHAR', true, 45, null);
        $this->addColumn('clinica_telefono', 'ClinicaTelefono', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cancelacionventaclinica', 'Cancelacionventaclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Cancelacionventaclinicas');
        $this->addRelation('Clinicaempleado', 'Clinicaempleado', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Clinicaempleados');
        $this->addRelation('Egresoclinica', 'Egresoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Egresoclinicas');
        $this->addRelation('Empleadoreceso', 'Empleadoreceso', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Empleadorecesos');
        $this->addRelation('Empleadoreporte', 'Empleadoreporte', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Empleadoreportes');
        $this->addRelation('Encargadoclinica', 'Encargadoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Encargadoclinicas');
        $this->addRelation('Insumoclinica', 'Insumoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Insumoclinicas');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Productoclinicas');
        $this->addRelation('TransferenciaRelatedByIdclinicadestinataria', 'Transferencia', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinicadestinataria', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdclinicadestinataria');
        $this->addRelation('TransferenciaRelatedByIdclinicaremitente', 'Transferencia', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinicaremitente', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdclinicaremitente');
        $this->addRelation('Visita', 'Visita', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Visitas');
    } // buildRelations()

} // ClinicaTableMap
