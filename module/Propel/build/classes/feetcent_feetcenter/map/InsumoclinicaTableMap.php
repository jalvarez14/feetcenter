<?php



/**
 * This class defines the structure of the 'insumoclinica' table.
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
class InsumoclinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.InsumoclinicaTableMap';

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
        $this->setName('insumoclinica');
        $this->setPhpName('Insumoclinica');
        $this->setClassname('Insumoclinica');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idinsumoclinica', 'Idinsumoclinica', 'INTEGER', true, null, null);
        $this->addForeignKey('idinsumo', 'Idinsumo', 'INTEGER', 'insumo', 'idinsumo', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('insumoclinica_existencia', 'InsumoclinicaExistencia', 'DECIMAL', true, 10, null);
        $this->addColumn('insumoclinica_minimo', 'InsumoclinicaMinimo', 'DECIMAL', false, 10, null);
        $this->addColumn('insumoclinica_maximo', 'InsumoclinicaMaximo', 'DECIMAL', false, 10, null);
        $this->addColumn('insumoclinica_reorden', 'InsumoclinicaReorden', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Insumo', 'Insumo', RelationMap::MANY_TO_ONE, array('idinsumo' => 'idinsumo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idinsumoclinica' => 'idinsumoclinica', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Transferenciadetalle', 'Transferenciadetalle', RelationMap::ONE_TO_MANY, array('idinsumoclinica' => 'idinsumoclinica', ), 'CASCADE', 'CASCADE', 'Transferenciadetalles');
    } // buildRelations()

} // InsumoclinicaTableMap
