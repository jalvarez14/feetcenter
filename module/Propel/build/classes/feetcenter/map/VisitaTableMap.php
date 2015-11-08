<?php



/**
 * This class defines the structure of the 'visita' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.feetcenter.map
 */
class VisitaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.VisitaTableMap';

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
        $this->setName('visita');
        $this->setPhpName('Visita');
        $this->setClassname('Visita');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idvisita', 'Idvisita', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadocreador', 'Idempleadocreador', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idclinica', 'Idclinica', 'INTEGER', 'clinica', 'idclinica', true, null, null);
        $this->addColumn('visita_tipo', 'VisitaTipo', 'CHAR', true, null, null);
        $this->getColumn('visita_tipo', false)->setValueSet(array (
  0 => 'consulta',
  1 => 'servicio',
));
        $this->addColumn('visita_creadaen', 'VisitaCreadaen', 'TIMESTAMP', true, null, null);
        $this->addColumn('visita_fechainicio', 'VisitaFechainicio', 'TIMESTAMP', true, null, null);
        $this->addColumn('visita_fechafin', 'VisitaFechafin', 'TIMESTAMP', true, null, null);
        $this->addColumn('visita_status', 'VisitaStatus', 'CHAR', true, null, null);
        $this->getColumn('visita_status', false)->setValueSet(array (
  0 => 'por confirmar',
  1 => 'confimada',
  2 => 'cancelo',
  3 => 'no se presento',
  4 => 'reprogramda',
  5 => 'en servicio',
  6 => 'terminado',
));
        $this->addColumn('visita_estatuspago', 'VisitaEstatuspago', 'CHAR', false, null, null);
        $this->getColumn('visita_estatuspago', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
  2 => 'cancelada',
));
        $this->addColumn('visita_total', 'VisitaTotal', 'DECIMAL', false, 10, null);
        $this->addColumn('visita_nota', 'VisitaNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('visita_canceladaen', 'VisitaCanceladaen', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clinica', 'Clinica', RelationMap::MANY_TO_ONE, array('idclinica' => 'idclinica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadocreador', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadocreador' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Visitadetalle', 'Visitadetalle', RelationMap::ONE_TO_MANY, array('idvisita' => 'idvisita', ), 'CASCADE', 'CASCADE', 'Visitadetalles');
        $this->addRelation('Visitapago', 'Visitapago', RelationMap::ONE_TO_MANY, array('idvisita' => 'idvisita', ), 'CASCADE', 'CASCADE', 'Visitapagos');
    } // buildRelations()

} // VisitaTableMap
