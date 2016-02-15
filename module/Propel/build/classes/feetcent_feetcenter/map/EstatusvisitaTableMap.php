<?php



/**
 * This class defines the structure of the 'estatusvisita' table.
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
class EstatusvisitaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EstatusvisitaTableMap';

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
        $this->setName('estatusvisita');
        $this->setPhpName('Estatusvisita');
        $this->setClassname('Estatusvisita');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idestatusvisita', 'Idestatusvisita', 'INTEGER', true, null, null);
        $this->addColumn('estatusvisita_nombre', 'EstatusvisitaNombre', 'VARCHAR', true, 100, null);
        $this->addColumn('estatusvisita_color', 'EstatusvisitaColor', 'VARCHAR', true, 100, null);
        $this->addColumn('estatusvisita_cssname', 'EstatusvisitaCssname', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EstatusvisitaTableMap
