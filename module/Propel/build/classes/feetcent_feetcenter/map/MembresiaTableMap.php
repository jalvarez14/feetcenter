<?php



/**
 * This class defines the structure of the 'membresia' table.
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
class MembresiaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.MembresiaTableMap';

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
        $this->setName('membresia');
        $this->setPhpName('Membresia');
        $this->setClassname('Membresia');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmembresia', 'Idmembresia', 'INTEGER', true, null, null);
        $this->addColumn('membresia_nombre', 'MembresiaNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('membresia_descripcion', 'MembresiaDescripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('membresia_servicios', 'MembresiaServicios', 'DECIMAL', true, 10, null);
        $this->addColumn('membresia_cupones', 'MembresiaCupones', 'DECIMAL', true, 10, null);
        $this->addColumn('servicio_generaingreso', 'ServicioGeneraingreso', 'BOOLEAN', true, 1, null);
        $this->addColumn('servicio_generacomision', 'ServicioGeneracomision', 'BOOLEAN', true, 1, null);
        $this->addColumn('servicio_tipocomision', 'ServicioTipocomision', 'CHAR', false, null, null);
        $this->getColumn('servicio_tipocomision', false)->setValueSet(array (
  0 => 'porcentaje',
  1 => 'cantidad',
));
        $this->addColumn('servicio_comision', 'ServicioComision', 'DECIMAL', false, 10, null);
        $this->addColumn('membresia_precio', 'MembresiaPrecio', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Membresiaclinica', 'Membresiaclinica', RelationMap::ONE_TO_MANY, array('idmembresia' => 'idmembresia', ), 'CASCADE', 'CASCADE', 'Membresiaclinicas');
        $this->addRelation('Pacientemembresia', 'Pacientemembresia', RelationMap::ONE_TO_MANY, array('idmembresia' => 'idmembresia', ), 'CASCADE', 'CASCADE', 'Pacientemembresias');
        $this->addRelation('Visitadetalle', 'Visitadetalle', RelationMap::ONE_TO_MANY, array('idmembresia' => 'idmembresia', ), 'CASCADE', 'CASCADE', 'Visitadetalles');
    } // buildRelations()

} // MembresiaTableMap
