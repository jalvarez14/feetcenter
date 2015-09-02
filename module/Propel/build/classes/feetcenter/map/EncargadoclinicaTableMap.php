<?php



/**
 * This class defines the structure of the 'encargadoclinica' table.
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
class EncargadoclinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.EncargadoclinicaTableMap';

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
        $this->setName('encargadoclinica');
        $this->setPhpName('Encargadoclinica');
        $this->setClassname('Encargadoclinica');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idencargadoclinica', 'Idencargadoclinica', 'INTEGER', true, null, null);
        $this->addColumn('idclinica', 'Idclinica', 'INTEGER', true, null, null);
        $this->addColumn('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EncargadoclinicaTableMap
