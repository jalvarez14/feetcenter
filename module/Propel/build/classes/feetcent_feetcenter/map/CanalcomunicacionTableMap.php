<?php



/**
 * This class defines the structure of the 'canalcomunicacion' table.
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
class CanalcomunicacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.CanalcomunicacionTableMap';

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
        $this->setName('canalcomunicacion');
        $this->setPhpName('Canalcomunicacion');
        $this->setClassname('Canalcomunicacion');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcanalcomunicacion', 'Idcanalcomunicacion', 'INTEGER', true, null, null);
        $this->addColumn('canalcomunicacion_nombre', 'CanalcomunicacionNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('canalcomunicacion_descripcion', 'CanalcomunicacionDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pacienteseguimiento', 'Pacienteseguimiento', RelationMap::ONE_TO_MANY, array('idcanalcomunicacion' => 'idcanalcomunicacion', ), 'CASCADE', 'CASCADE', 'Pacienteseguimientos');
    } // buildRelations()

} // CanalcomunicacionTableMap
