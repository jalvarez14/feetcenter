<?php



/**
 * This class defines the structure of the 'empleadoacceso' table.
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
class EmpleadoaccesoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EmpleadoaccesoTableMap';

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
        $this->setName('empleadoacceso');
        $this->setPhpName('Empleadoacceso');
        $this->setClassname('Empleadoacceso');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadoacceso', 'Idempleadoacceso', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
        $this->addColumn('empleadoacceso_username', 'EmpleadoaccesoUsername', 'VARCHAR', true, 45, null);
        $this->addColumn('empleadoacceso_password', 'EmpleadoaccesoPassword', 'VARCHAR', true, 45, null);
        $this->addColumn('empleadoacceso_ensesion', 'EmpleadoaccesoEnsesion', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpleadoaccesoTableMap
