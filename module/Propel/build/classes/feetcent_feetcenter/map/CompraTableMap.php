<?php



/**
 * This class defines the structure of the 'compra' table.
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
class CompraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.CompraTableMap';

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
        $this->setName('compra');
        $this->setPhpName('Compra');
        $this->setClassname('Compra');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompra', 'Idcompra', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('compra_creadaen', 'CompraCreadaen', 'TIMESTAMP', true, null, null);
        $this->addColumn('compra_fecha', 'CompraFecha', 'DATE', true, null, null);
        $this->addColumn('compra_importe', 'CompraImporte', 'DECIMAL', true, 10, null);
        $this->addColumn('compra_status', 'CompraStatus', 'CHAR', true, null, null);
        $this->getColumn('compra_status', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
));
        $this->addColumn('compra_pagaren', 'CompraPagaren', 'DATE', true, null, null);
        $this->addColumn('compra_comprobante', 'CompraComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('compra_folio', 'CompraFolio', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE', 'Compradetalles');
    } // buildRelations()

} // CompraTableMap
