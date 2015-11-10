<?php



/**
 * This class defines the structure of the 'visitadetalle' table.
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
class VisitadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.VisitadetalleTableMap';

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
        $this->setName('visitadetalle');
        $this->setPhpName('Visitadetalle');
        $this->setClassname('Visitadetalle');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idvisitadetalle', 'Idvisitadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idvisita', 'Idvisita', 'INTEGER', 'visita', 'idvisita', true, null, null);
        $this->addForeignKey('idproductoclinica', 'Idproductoclinica', 'INTEGER', 'productoclinica', 'idproductoclinica', false, null, null);
        $this->addForeignKey('idservicioclinica', 'Idservicioclinica', 'INTEGER', 'servicioclinica', 'idservicioclinica', false, null, null);
        $this->addForeignKey('idmembresia', 'Idmembresia', 'INTEGER', 'membresia', 'idmembresia', false, null, null);
        $this->addColumn('visitadetalle_cargo', 'VisitadetalleCargo', 'CHAR', true, null, null);
        $this->getColumn('visitadetalle_cargo', false)->setValueSet(array (
  0 => 'producto',
  1 => 'servicio',
  2 => 'membresia',
));
        $this->addColumn('visitadetalle_preciounitario', 'VisitadetallePreciounitario', 'DECIMAL', true, 10, null);
        $this->addColumn('visitadetalle_cantidad', 'VisitadetalleCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('visitadetalle_subtotal', 'VisitadetalleSubtotal', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Membresia', 'Membresia', RelationMap::MANY_TO_ONE, array('idmembresia' => 'idmembresia', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::MANY_TO_ONE, array('idproductoclinica' => 'idproductoclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicioclinica', 'Servicioclinica', RelationMap::MANY_TO_ONE, array('idservicioclinica' => 'idservicioclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Visita', 'Visita', RelationMap::MANY_TO_ONE, array('idvisita' => 'idvisita', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pacientemembresiadetalle', 'Pacientemembresiadetalle', RelationMap::ONE_TO_MANY, array('idvisitadetalle' => 'idvisitadetalle', ), 'CASCADE', 'CASCADE', 'Pacientemembresiadetalles');
    } // buildRelations()

} // VisitadetalleTableMap
