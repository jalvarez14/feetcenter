<?php



/**
 * This class defines the structure of the 'productoinventario' table.
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
class ProductoinventarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ProductoinventarioTableMap';

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
        $this->setName('productoinventario');
        $this->setPhpName('Productoinventario');
        $this->setClassname('Productoinventario');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductoinventario', 'Idproductoinventario', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idproductoclinica', 'Idproductoclinica', 'INTEGER', 'productoclinica', 'idproductoclinica', true, null, null);
        $this->addColumn('productoinventario_fecha', 'ProductoinventarioFecha', 'DATE', true, null, null);
        $this->addColumn('productoinventario_cantidad', 'ProductoinventarioCantidad', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::MANY_TO_ONE, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ProductoinventarioTableMap
