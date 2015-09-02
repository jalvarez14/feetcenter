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
 * @package    propel.generator.feetcenter.map
 */
class EmpleadoreporteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.EmpleadoreporteTableMap';

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
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadoreporte', 'Idempleadoreporte', 'INTEGER', true, null, null);
        $this->addColumn('idclinica', 'Idclinica', 'INTEGER', false, null, null);
        $this->addColumn('idempleado', 'Idempleado', 'INTEGER', false, null, null);
        $this->addColumn('idempleadoreportado', 'Idempleadoreportado', 'INTEGER', false, null, null);
        $this->addColumn('empleadoreporte_comentario', 'EmpleadoreporteComentario', 'LONGVARCHAR', false, null, null);
        $this->addColumn('empleadoreporte_fechasuceso', 'EmpleadoreporteFechasuceso', 'DATE', false, null, null);
        $this->addColumn('empleadoreporte_fechacreacion', 'EmpleadoreporteFechacreacion', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EmpleadoreporteTableMap
