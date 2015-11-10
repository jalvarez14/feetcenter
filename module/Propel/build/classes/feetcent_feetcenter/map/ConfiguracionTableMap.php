<?php



/**
 * This class defines the structure of the 'configuracion' table.
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
class ConfiguracionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.ConfiguracionTableMap';

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
        $this->setName('configuracion');
        $this->setPhpName('Configuracion');
        $this->setClassname('Configuracion');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconfiguracion', 'Idconfiguracion', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('configuracion_numerocancelaciones', 'ConfiguracionNumerocancelaciones', 'INTEGER', true, null, null);
        $this->addColumn('configuracion_valormaximocancelacion', 'ConfiguracionValormaximocancelacion', 'DECIMAL', true, 10, null);
        $this->addColumn('configuracion_hastacuantosdias', 'ConfiguracionHastacuantosdias', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ConfiguracionTableMap
