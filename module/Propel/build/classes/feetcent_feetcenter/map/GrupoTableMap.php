<?php



/**
 * This class defines the structure of the 'grupo' table.
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
class GrupoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.GrupoTableMap';

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
        $this->setName('grupo');
        $this->setPhpName('Grupo');
        $this->setClassname('Grupo');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idgrupo', 'Idgrupo', 'INTEGER', true, null, null);
        $this->addColumn('grupo_nombre', 'GrupoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('grupo_descripcion', 'GrupoDescripcion', 'VARCHAR', false, 45, null);
        $this->addColumn('grupo_creadoen', 'GrupoCreadoen', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Grupopaciente', 'Grupopaciente', RelationMap::ONE_TO_MANY, array('idgrupo' => 'idgrupo', ), 'CASCADE', 'CASCADE', 'Grupopacientes');
    } // buildRelations()

} // GrupoTableMap
