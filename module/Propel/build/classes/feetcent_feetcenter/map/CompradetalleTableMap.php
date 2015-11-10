<?php



/**
 * This class defines the structure of the 'compradetalle' table.
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
class CompradetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.CompradetalleTableMap';

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
        $this->setName('compradetalle');
        $this->setPhpName('Compradetalle');
        $this->setClassname('Compradetalle');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompradetalle', 'Idcompradetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idcompra', 'Idcompra', 'INTEGER', 'compra', 'idcompra', true, null, null);
        $this->addForeignKey('idproductoclinica', 'Idproductoclinica', 'INTEGER', 'productoclinica', 'idproductoclinica', false, null, null);
        $this->addForeignKey('idinsumoclinica', 'Idinsumoclinica', 'INTEGER', 'insumoclinica', 'idinsumoclinica', false, null, null);
        $this->addColumn('compradetalle_cantidad', 'CompradetalleCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('compradetalle_costounitario', 'CompradetalleCostounitario', 'DECIMAL', true, 10, null);
        $this->addColumn('compradetalle_subtotal', 'CompradetalleSubtotal', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::MANY_TO_ONE, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Insumoclinica', 'Insumoclinica', RelationMap::MANY_TO_ONE, array('idinsumoclinica' => 'idinsumoclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::MANY_TO_ONE, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CompradetalleTableMap
