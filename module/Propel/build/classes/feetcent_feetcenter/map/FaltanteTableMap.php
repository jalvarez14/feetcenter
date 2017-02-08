<?php



/**
 * This class defines the structure of the 'faltante' table.
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
class FaltanteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.FaltanteTableMap';

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
        $this->setName('faltante');
        $this->setPhpName('Faltante');
        $this->setClassname('Faltante');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idfaltante', 'Idfaltante', 'INTEGER', true, null, null);
        $this->addColumn('idclinica', 'Idclinica', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleadogenerador', 'Idempleadogenerador', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadodeudor', 'Idempleadodeudor', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('faltante_creadaen', 'FaltanteCreadaen', 'TIMESTAMP', false, null, null);
        $this->addColumn('faltante_fecha', 'FaltanteFecha', 'DATE', true, null, null);
        $this->addColumn('faltante_hora', 'FaltanteHora', 'TIME', true, null, null);
        $this->addColumn('faltante_cantidad', 'FaltanteCantidad', 'DECIMAL', false, 10, null);
        $this->addColumn('faltante_comentario', 'FaltanteComentario', 'LONGVARCHAR', false, null, null);
        $this->addColumn('faltante_comprobante', 'FaltanteComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('faltante_comprobantefirmado', 'FaltanteComprobantefirmado', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EmpleadoRelatedByIdempleadodeudor', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadodeudor' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadogenerador', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadogenerador' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // FaltanteTableMap
