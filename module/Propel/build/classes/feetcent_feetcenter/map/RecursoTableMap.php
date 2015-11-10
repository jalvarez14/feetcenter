<?php



/**
 * This class defines the structure of the 'recurso' table.
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
class RecursoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.RecursoTableMap';

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
        $this->setName('recurso');
        $this->setPhpName('Recurso');
        $this->setClassname('Recurso');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrecurso', 'Idrecurso', 'INTEGER', true, null, null);
        $this->addColumn('recurso_nombre', 'RecursoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('recurso_descripcion', 'RecursoDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rolrecurso', 'Rolrecurso', RelationMap::ONE_TO_MANY, array('idrecurso' => 'idrecurso', ), 'CASCADE', 'CASCADE', 'Rolrecursos');
    } // buildRelations()

} // RecursoTableMap
