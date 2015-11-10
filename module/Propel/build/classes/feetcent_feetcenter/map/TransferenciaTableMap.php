<?php



/**
 * This class defines the structure of the 'transferencia' table.
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
class TransferenciaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.TransferenciaTableMap';

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
        $this->setName('transferencia');
        $this->setPhpName('Transferencia');
        $this->setClassname('Transferencia');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtransferencia', 'Idtransferencia', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadoreceptor', 'Idempleadoreceptor', 'INTEGER', 'empleado', 'idempleado', false, null, null);
        $this->addForeignKey('idclinicaremitente', 'Idclinicaremitente', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addForeignKey('idclinicadestinataria', 'Idclinicadestinataria', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('transferencia_creadaen', 'TransferenciaCreadaen', 'TIMESTAMP', true, null, null);
        $this->addColumn('transferencia_estatus', 'TransferenciaEstatus', 'CHAR', true, null, null);
        $this->getColumn('transferencia_estatus', false)->setValueSet(array (
  0 => 'enviada',
  1 => 'aceptada',
  2 => 'rechazada',
  3 => 'cancelada',
));
        $this->addColumn('transferencia_fechamovimiento', 'TransferenciaFechamovimiento', 'DATE', true, null, null);
        $this->addColumn('transferencia_comprobante', 'TransferenciaComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('transferencia_nota', 'TransferenciaNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClinicaRelatedByIdclinicadestinataria', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinicadestinataria' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('ClinicaRelatedByIdclinicaremitente', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinicaremitente' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadoreceptor', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadoreceptor' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Transferenciadetalle', 'Transferenciadetalle', RelationMap::ONE_TO_MANY, array('idtransferencia' => 'idtransferencia', ), 'CASCADE', 'CASCADE', 'Transferenciadetalles');
    } // buildRelations()

} // TransferenciaTableMap
