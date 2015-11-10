<?php



/**
 * This class defines the structure of the 'grupopersonal' table.
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
class GrupopersonalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.GrupopersonalTableMap';

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
        $this->setName('grupopersonal');
        $this->setPhpName('Grupopersonal');
        $this->setClassname('Grupopersonal');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idgrupopersonal', 'Idgrupopersonal', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idpacienteagregado', 'Idpacienteagregado', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PacienteRelatedByIdpaciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('PacienteRelatedByIdpacienteagregado', 'Paciente', RelationMap::MANY_TO_ONE, array('idpacienteagregado' => 'idpaciente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // GrupopersonalTableMap
