<?php



/**
 * This class defines the structure of the 'rolrecurso' table.
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
class RolrecursoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.RolrecursoTableMap';

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
        $this->setName('rolrecurso');
        $this->setPhpName('Rolrecurso');
        $this->setClassname('Rolrecurso');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrolrecurso', 'Idrolrecurso', 'INTEGER', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
        $this->addForeignKey('idrecurso', 'Idrecurso', 'INTEGER', 'recurso', 'idrecurso', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Recurso', 'Recurso', RelationMap::MANY_TO_ONE, array('idrecurso' => 'idrecurso', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // RolrecursoTableMap
