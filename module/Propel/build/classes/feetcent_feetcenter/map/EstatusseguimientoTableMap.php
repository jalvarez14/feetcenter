<?php



/**
 * This class defines the structure of the 'estatusseguimiento' table.
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
class EstatusseguimientoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EstatusseguimientoTableMap';

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
        $this->setName('estatusseguimiento');
        $this->setPhpName('Estatusseguimiento');
        $this->setClassname('Estatusseguimiento');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idestatusseguimiento', 'Idestatusseguimiento', 'INTEGER', true, null, null);
        $this->addColumn('estatusseguimiento_nombre', 'EstatusseguimientoNombre', 'VARCHAR', false, 100, null);
        $this->addColumn('estatusseguimiento_color', 'EstatusseguimientoColor', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pacienteseguimiento', 'Pacienteseguimiento', RelationMap::ONE_TO_MANY, array('idestatusseguimiento' => 'idestatusseguimiento', ), 'CASCADE', 'CASCADE', 'Pacienteseguimientos');
    } // buildRelations()

} // EstatusseguimientoTableMap
