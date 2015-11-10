<?php



/**
 * This class defines the structure of the 'servicio' table.
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
class ServicioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ServicioTableMap';

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
        $this->setName('servicio');
        $this->setPhpName('Servicio');
        $this->setClassname('Servicio');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idservicio', 'Idservicio', 'INTEGER', true, null, null);
        $this->addColumn('servicio_nombre', 'ServicioNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('servicio_descripcion', 'ServicioDescripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('servicio_generaingreso', 'ServicioGeneraingreso', 'BOOLEAN', true, 1, null);
        $this->addColumn('servicio_generacomision', 'ServicioGeneracomision', 'BOOLEAN', true, 1, null);
        $this->addColumn('servicio_tipocomision', 'ServicioTipocomision', 'CHAR', false, null, null);
        $this->getColumn('servicio_tipocomision', false)->setValueSet(array (
  0 => 'porcentaje',
  1 => 'cantidad',
));
        $this->addColumn('servicio_comision', 'ServicioComision', 'DECIMAL', false, 10, null);
        $this->addColumn('servicio_dependencia', 'ServicioDependencia', 'CHAR', true, null, null);
        $this->getColumn('servicio_dependencia', false)->setValueSet(array (
  0 => 'ninguno',
  1 => 'membresia',
  2 => 'cupon',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Servicioclinica', 'Servicioclinica', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Servicioclinicas');
        $this->addRelation('Servicioinsumo', 'Servicioinsumo', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Servicioinsumos');
    } // buildRelations()

} // ServicioTableMap
