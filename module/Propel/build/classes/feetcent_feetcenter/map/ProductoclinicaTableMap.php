<?php



/**
 * This class defines the structure of the 'productoclinica' table.
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
class ProductoclinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ProductoclinicaTableMap';

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
        $this->setName('productoclinica');
        $this->setPhpName('Productoclinica');
        $this->setClassname('Productoclinica');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductoclinica', 'Idproductoclinica', 'INTEGER', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('productoclinica_existencia', 'ProductoclinicaExistencia', 'DECIMAL', true, 10, null);
        $this->addColumn('productoclinica_minimo', 'ProductoclinicaMinimo', 'DECIMAL', true, 10, null);
        $this->addColumn('productoclinica_maximo', 'ProductoclinicaMaximo', 'DECIMAL', true, 10, null);
        $this->addColumn('productoclinica_reorden', 'ProductoclinicaReorden', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Productoinventario', 'Productoinventario', RelationMap::ONE_TO_MANY, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE', 'Productoinventarios');
        $this->addRelation('Transferenciadetalle', 'Transferenciadetalle', RelationMap::ONE_TO_MANY, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE', 'Transferenciadetalles');
        $this->addRelation('Visitadetalle', 'Visitadetalle', RelationMap::ONE_TO_MANY, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE', 'Visitadetalles');
    } // buildRelations()

} // ProductoclinicaTableMap
