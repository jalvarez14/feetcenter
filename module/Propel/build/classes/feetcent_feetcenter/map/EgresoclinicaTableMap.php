<?php



/**
 * This class defines the structure of the 'egresoclinica' table.
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
class EgresoclinicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.EgresoclinicaTableMap';

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
        $this->setName('egresoclinica');
        $this->setPhpName('Egresoclinica');
        $this->setClassname('Egresoclinica');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idegresoclinica', 'Idegresoclinica', 'INTEGER', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idconcepto', 'Idconcepto', 'INTEGER', 'concepto', 'idconcepto', true, null, null);
        $this->addColumn('egresoclinica_fecha', 'EgresoclinicaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('egresoclinica_fechaegreso', 'EgresoclinicaFechaegreso', 'DATE', true, null, null);
        $this->addColumn('egresoclinica_cantidad', 'EgresoclinicaCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('egresoclinica_iva', 'EgresoclinicaIva', 'DECIMAL', true, 10, null);
        $this->addColumn('egresoclinica_comprobante', 'EgresoclinicaComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('egresoclinica_nota', 'EgresoclinicaNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Concepto', 'Concepto', RelationMap::MANY_TO_ONE, array('idconcepto' => 'idconcepto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EgresoclinicaTableMap
