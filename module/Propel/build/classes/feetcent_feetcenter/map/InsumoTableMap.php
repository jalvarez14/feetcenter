<?php



/**
 * This class defines the structure of the 'insumo' table.
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
class InsumoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.InsumoTableMap';

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
        $this->setName('insumo');
        $this->setPhpName('Insumo');
        $this->setClassname('Insumo');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idinsumo', 'Idinsumo', 'INTEGER', true, null, null);
        $this->addColumn('insumo_nombre', 'InsumoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('insumo_descripcion', 'InsumoDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('insumo_costo', 'InsumoCosto', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Insumoclinica', 'Insumoclinica', RelationMap::ONE_TO_MANY, array('idinsumo' => 'idinsumo', ), 'CASCADE', 'CASCADE', 'Insumoclinicas');
        $this->addRelation('Servicioinsumo', 'Servicioinsumo', RelationMap::ONE_TO_MANY, array('idinsumo' => 'idinsumo', ), 'CASCADE', 'CASCADE', 'Servicioinsumos');
    } // buildRelations()

} // InsumoTableMap
