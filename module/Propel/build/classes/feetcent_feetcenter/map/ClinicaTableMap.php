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
 * @package    propel.generator.feetcent_feetcenter.map
 */
class ClinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ClinicaTableMap';

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
        $this->setPackage('feetcent_feetcenter');
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
        $this->addRelation('Clinicaempleado', 'Clinicaempleado', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Clinicaempleados');
        $this->addRelation('Configuracion', 'Configuracion', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Configuracions');
        $this->addRelation('Egresoclinica', 'Egresoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Egresoclinicas');
        $this->addRelation('Empleadocomision', 'Empleadocomision', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Empleadocomisions');
        $this->addRelation('Empleadoreceso', 'Empleadoreceso', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Empleadorecesos');
        $this->addRelation('Empleadoreporte', 'Empleadoreporte', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Empleadoreportes');
        $this->addRelation('Encargadoclinica', 'Encargadoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Encargadoclinicas');
        $this->addRelation('Faltante', 'Faltante', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Faltantes');
        $this->addRelation('Insumoclinica', 'Insumoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Insumoclinicas');
        $this->addRelation('Membresiaclinica', 'Membresiaclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Membresiaclinicas');
        $this->addRelation('Metaclinica', 'Metaclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Metaclinicas');
        $this->addRelation('Paciente', 'Paciente', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Pacientes');
        $this->addRelation('Pacientemembresia', 'Pacientemembresia', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Pacientemembresias');
        $this->addRelation('Pacienteseguimiento', 'Pacienteseguimiento', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Pacienteseguimientos');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Productoclinicas');
        $this->addRelation('Productoinventario', 'Productoinventario', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Productoinventarios');
        $this->addRelation('Servicioclinica', 'Servicioclinica', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Servicioclinicas');
        $this->addRelation('TransferenciaRelatedByIdclinicadestinataria', 'Transferencia', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinicadestinataria', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdclinicadestinataria');
        $this->addRelation('TransferenciaRelatedByIdclinicaremitente', 'Transferencia', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinicaremitente', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdclinicaremitente');
        $this->addRelation('Visita', 'Visita', RelationMap::ONE_TO_MANY, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE', 'Visitas');
    } // buildRelations()

} // ClinicaTableMap
