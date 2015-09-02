<?php



/**
 * This class defines the structure of the 'pacienteseguimiento' table.
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
class PacienteseguimientoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcenter.map.PacienteseguimientoTableMap';

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
        $this->setName('pacienteseguimiento');
        $this->setPhpName('Pacienteseguimiento');
        $this->setClassname('Pacienteseguimiento');
        $this->setPackage('feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpacienteseguimiento', 'Idpacienteseguimiento', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addColumn('idcanalcomunicacion', 'Idcanalcomunicacion', 'INTEGER', true, null, null);
        $this->addColumn('pacienteseguimiento_fechacreacion', 'PacienteseguimientoFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('pacienteseguimiento_comentario', 'PacienteseguimientoComentario', 'LONGVARCHAR', true, null, null);
        $this->addColumn('pacienteseguimiento_fecha', 'PacienteseguimientoFecha', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PacienteseguimientoTableMap
