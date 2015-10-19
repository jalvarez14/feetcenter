<?php



/**
 * This class defines the structure of the 'empleadocomision' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.feetcenter.map
 */
class EmpleadocomisionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.EmpleadocomisionTableMap';

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
        $this->setName('empleadocomision');
        $this->setPhpName('Empleadocomision');
        $this->setClassname('Empleadocomision');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadocomision', 'Idempleadocomision', 'INTEGER', true, null, null);
        $this->addForeignKey('idempledo', 'Idempledo', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('empleadocomision_fecha', 'EmpleadocomisionFecha', 'DATE', true, null, null);
        $this->addColumn('empleadocomision_comisionservicios', 'EmpleadocomisionComisionservicios', 'DECIMAL', true, 10, null);
        $this->addColumn('empleadocomision_comisionproductos', 'EmpleadocomisionComisionproductos', 'DECIMAL', true, 10, null);
        $this->addColumn('empleadocomision_serviciosvendidos', 'EmpleadocomisionServiciosvendidos', 'INTEGER', true, null, null);
        $this->addColumn('empleadocomision_productosvendidos', 'EmpleadocomisionProductosvendidos', 'INTEGER', true, null, null);
        $this->addColumn('empleadocomision_acumulado', 'EmpleadocomisionAcumulado', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempledo' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpleadocomisionTableMap
