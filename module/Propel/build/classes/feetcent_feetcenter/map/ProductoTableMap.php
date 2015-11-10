<?php



/**
 * This class defines the structure of the 'producto' table.
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
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ProductoTableMap';

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
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addColumn('producto_nombre', 'ProductoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('producto_descripcion', 'ProductoDescripcion', 'VARCHAR', true, 45, null);
        $this->addColumn('producto_costo', 'ProductoCosto', 'VARCHAR', true, 45, null);
        $this->addColumn('producto_precio', 'ProductoPrecio', 'VARCHAR', true, 45, null);
        $this->addColumn('producto_generaingreso', 'ProductoGeneraingreso', 'BOOLEAN', true, 1, null);
        $this->addColumn('producto_generacomision', 'ProductoGeneracomision', 'BOOLEAN', true, 1, null);
        $this->addColumn('producto_tipocomision', 'ProductoTipocomision', 'CHAR', false, null, null);
        $this->getColumn('producto_tipocomision', false)->setValueSet(array (
  0 => 'cantidad',
  1 => 'porcentaje',
));
        $this->addColumn('producto_comision', 'ProductoComision', 'DECIMAL', false, 10, null);
        $this->addColumn('producto_fotografia', 'ProductoFotografia', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Productoclinica', 'Productoclinica', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productoclinicas');
    } // buildRelations()

} // ProductoTableMap
