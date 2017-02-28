<?php



/**
 * This class defines the structure of the 'cierrecaja' table.
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
class CierrecajaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.CierrecajaTableMap';

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
        $this->setName('cierrecaja');
        $this->setPhpName('Cierrecaja');
        $this->setClassname('Cierrecaja');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcierrecaja', 'Idcierrecaja', 'INTEGER', true, null, null);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('cierrecaja_cantidad', 'CierrecajaCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('cierrecaja_efectivo', 'CierrecajaEfectivo', 'DECIMAL', true, 10, null);
        $this->addColumn('cierrecaja_tarjeta', 'CierrecajaTarjeta', 'DECIMAL', true, 10, null);
        $this->addColumn('idempleado', 'Idempleado', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CierrecajaTableMap
