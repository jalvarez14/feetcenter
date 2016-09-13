<?php



/**
 * This class defines the structure of the 'pacientemembresia' table.
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
class PacientemembresiaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.PacientemembresiaTableMap';

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
        $this->setName('pacientemembresia');
        $this->setPhpName('Pacientemembresia');
        $this->setClassname('Pacientemembresia');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpacientemembresia', 'Idpacientemembresia', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idmembresia', 'Idmembresia', 'INTEGER', 'membresia', 'idmembresia', true, null, null);
        $this->addColumn('pacientemembresia_folio', 'PacientemembresiaFolio', 'VARCHAR', true, 255, null);
        $this->addColumn('pacientemembresia_fechainicio', 'PacientemembresiaFechainicio', 'TIMESTAMP', true, null, null);
        $this->addColumn('pacientemembresia_serviciosdisponibles', 'PacientemembresiaServiciosdisponibles', 'INTEGER', true, null, null);
        $this->addColumn('pacientemembresia_cuponesdisponibles', 'PacientemembresiaCuponesdisponibles', 'INTEGER', true, null, null);
        $this->addColumn('pacientemembresia_estatus', 'PacientemembresiaEstatus', 'CHAR', true, null, null);
        $this->getColumn('pacientemembresia_estatus', false)->setValueSet(array (
  0 => 'activa',
  1 => 'terminada',
  2 => 'cancelada',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Membresia', 'Membresia', RelationMap::MANY_TO_ONE, array('idmembresia' => 'idmembresia', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pacientemembresiadetalle', 'Pacientemembresiadetalle', RelationMap::ONE_TO_MANY, array('idpacientemembresia' => 'idpacientemembresia', ), 'CASCADE', 'CASCADE', 'Pacientemembresiadetalles');
    } // buildRelations()

} // PacientemembresiaTableMap
