<?php



/**
 * This class defines the structure of the 'transferenciadetalle' table.
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
class TransferenciadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.TransferenciadetalleTableMap';

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
        $this->setName('transferenciadetalle');
        $this->setPhpName('Transferenciadetalle');
        $this->setClassname('Transferenciadetalle');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtransferenciadetalle', 'Idtransferenciadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idtransferencia', 'Idtransferencia', 'INTEGER', 'transferencia', 'idtransferencia', true, null, null);
        $this->addForeignKey('idproductoclinica', 'Idproductoclinica', 'INTEGER', 'productoclinica', 'idproductoclinica', false, null, null);
        $this->addForeignKey('idinsumoclinica', 'Idinsumoclinica', 'INTEGER', 'insumoclinica', 'idinsumoclinica', false, null, null);
        $this->addColumn('transferenciadetalle_cantidad', 'TransferenciadetalleCantidad', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Insumoclinica', 'Insumoclinica', RelationMap::MANY_TO_ONE, array('idinsumoclinica' => 'idinsumoclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::MANY_TO_ONE, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Transferencia', 'Transferencia', RelationMap::MANY_TO_ONE, array('idtransferencia' => 'idtransferencia', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TransferenciadetalleTableMap
