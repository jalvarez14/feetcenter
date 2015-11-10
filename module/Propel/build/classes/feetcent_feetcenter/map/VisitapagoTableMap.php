<?php



/**
 * This class defines the structure of the 'visitapago' table.
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
class VisitapagoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.VisitapagoTableMap';

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
        $this->setName('visitapago');
        $this->setPhpName('Visitapago');
        $this->setClassname('Visitapago');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idvisitapago', 'Idvisitapago', 'INTEGER', true, null, null);
        $this->addForeignKey('idvisita', 'Idvisita', 'INTEGER', 'visita', 'idvisita', true, null, null);
        $this->addColumn('visitapago_tipo', 'VisitapagoTipo', 'CHAR', true, null, null);
        $this->getColumn('visitapago_tipo', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'tarjeta',
  2 => 'tarjeta de puntos',
));
        $this->addColumn('visitapago_cantidad', 'VisitapagoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('visitapago_fecha', 'VisitapagoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('visitapago_referencia', 'VisitapagoReferencia', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Visita', 'Visita', RelationMap::MANY_TO_ONE, array('idvisita' => 'idvisita', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // VisitapagoTableMap
