<?php



/**
 * This class defines the structure of the 'empleadoreporte' table.
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
class EmpleadoreporteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EmpleadoreporteTableMap';

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
        $this->setName('empleadoreporte');
        $this->setPhpName('Empleadoreporte');
        $this->setClassname('Empleadoreporte');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadoreporte', 'Idempleadoreporte', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadoreportado', 'Idempleadoreportado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idconceptoincidencia', 'Idconceptoincidencia', 'INTEGER', 'conceptoincidencia', 'idconceptoincidencia', true, null, null);
        $this->addColumn('empleadoreporte_fechacreacion', 'EmpleadoreporteFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('empleadoreporte_comentario', 'EmpleadoreporteComentario', 'LONGVARCHAR', true, null, null);
        $this->addColumn('empleadoreporte_fechasuceso', 'EmpleadoreporteFechasuceso', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Conceptoincidencia', 'Conceptoincidencia', RelationMap::MANY_TO_ONE, array('idconceptoincidencia' => 'idconceptoincidencia', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadoreportado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadoreportado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpleadoreporteTableMap
