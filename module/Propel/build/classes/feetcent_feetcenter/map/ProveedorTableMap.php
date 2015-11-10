<?php



/**
 * This class defines the structure of the 'proveedor' table.
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
class ProveedorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ProveedorTableMap';

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
        $this->setName('proveedor');
        $this->setPhpName('Proveedor');
        $this->setClassname('Proveedor');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedor', 'Idproveedor', 'INTEGER', true, null, null);
        $this->addColumn('proveedor_nombre', 'ProveedorNombre', 'VARCHAR', false, 255, null);
        $this->addColumn('proveedor_rfc', 'ProveedorRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_telefono', 'ProveedorTelefono', 'VARCHAR', false, 255, null);
        $this->addColumn('proveedor_celular', 'ProveedorCelular', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_contacto', 'ProveedorContacto', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_direccion', 'ProveedorDireccion', 'VARCHAR', false, 255, null);
        $this->addColumn('proveedor_codigopostal', 'ProveedorCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_ciudad', 'ProveedorCiudad', 'VARCHAR', false, 255, null);
        $this->addColumn('proveedor_estado', 'ProveedorEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_email', 'ProveedorEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE', 'Compras');
    } // buildRelations()

} // ProveedorTableMap
