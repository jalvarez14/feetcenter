<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Inventario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ExistenciasController extends AbstractActionController
{
    public function indexAction()
    {
        
        $collection = array();
         
        $productoclinicas = \ProductoclinicaQuery::create()->filterByIdclinica(1)->withColumn('SUM(productoclinica_existencia)','total_existencias')->groupBy('idproducto')->find();
        foreach ($productoclinicas as $productoclinica){
            $tmp['id'] = $productoclinica->getIdproductoclinica();
            $tmp['tipo'] = 'producto';
            $tmp['nombre'] = $productoclinica->getProducto()->getProductoNombre();
            $tmp['existencias'] = (int)$productoclinica->getVirtualColumn('total_existencias');
            $collection[] = $tmp;
        }
        
        $insumoclinicas = \InsumoclinicaQuery::create()->filterByIdclinica(1)->withColumn('SUM(insumoclinica_existencia)','total_existencias')->groupBy('idinsumo')->find();
        foreach ($insumoclinicas as $insumoclinica){
            $tmp['id'] = $insumoclinica->getIdinsumoclinica();
            $tmp['tipo'] = 'insumo';
            $tmp['nombre'] = $insumoclinica->getInsumo()->getInsumoNombre();
            $tmp['existencias'] = (int)$insumoclinica->getVirtualColumn('total_existencias');
            $collection[] = $tmp;
        }

        return new ViewModel(array(
            'collection' => $collection,
        ));
    }

}
