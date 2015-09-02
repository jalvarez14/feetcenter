<?php



/**
 * This class defines the structure of the 'servicioclinica' table.
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
class ServicioclinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.ServicioclinicaTableMap';

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
        $this->setName('servicioclinica');
        $this->setPhpName('Servicioclinica');
        $this->setClassname('Servicioclinica');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idservicioclinica', 'Idservicioclinica', 'INTEGER', true, null, null);
        $this->addColumn('idservicio', 'Idservicio', 'INTEGER', true, null, null);
        $this->addColumn('idclinica', 'Idclinica', 'INTEGER', true, null, null);
        $this->addColumn('servicioclinica_precio', 'ServicioclinicaPrecio', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Visitadetalle', 'Visitadetalle', RelationMap::ONE_TO_MANY, array('idservicioclinica' => 'idservicioclinica', ), 'CASCADE', 'CASCADE', 'Visitadetalles');
    } // buildRelations()

} // ServicioclinicaTableMap
