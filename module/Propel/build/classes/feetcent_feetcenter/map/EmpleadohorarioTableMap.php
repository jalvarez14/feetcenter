<?php



/**
 * This class defines the structure of the 'empleadohorario' table.
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
class EmpleadohorarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EmpleadohorarioTableMap';

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
        $this->setName('empleadohorario');
        $this->setPhpName('Empleadohorario');
        $this->setClassname('Empleadohorario');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadohorario', 'Idempleadohorario', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('empleadohorario_entrada', 'EmpleadohorarioEntrada', 'TIME', true, null, null);
        $this->addColumn('empleadohorario_salida', 'EmpleadohorarioSalida', 'TIME', true, null, null);
        $this->addColumn('empleadohorario_dia', 'EmpleadohorarioDia', 'CHAR', true, null, null);
        $this->getColumn('empleadohorario_dia', false)->setValueSet(array (
  0 => 'lunes',
  1 => 'martes',
  2 => 'miercoles',
  3 => 'jueves',
  4 => 'viernes',
  5 => 'sabado',
  6 => 'domingo',
));
        $this->addColumn('empleadohorario_descanso', 'EmpleadohorarioDescanso', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpleadohorarioTableMap
