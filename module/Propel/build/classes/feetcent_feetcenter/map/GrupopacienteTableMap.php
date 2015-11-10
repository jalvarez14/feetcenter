<?php



/**
 * This class defines the structure of the 'grupopaciente' table.
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
class GrupopacienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.GrupopacienteTableMap';

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
        $this->setName('grupopaciente');
        $this->setPhpName('Grupopaciente');
        $this->setClassname('Grupopaciente');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idgrupopaciente', 'Idgrupopaciente', 'INTEGER', true, null, null);
        $this->addForeignKey('idgrupo', 'Idgrupo', 'INTEGER', 'grupo', 'idgrupo', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Grupo', 'Grupo', RelationMap::MANY_TO_ONE, array('idgrupo' => 'idgrupo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // GrupopacienteTableMap
