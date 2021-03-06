<?php
/**
 * Created by PhpStorm.
 * User: CTA
 * Date: 16/11/2017
 * Time: 18:39
 */

namespace CTA\Noticias\Model\ResourceModel\Noticia;

use CTA\Noticias\Model\Noticia;
use CTA\Noticias\Model\ResourceModel\Noticia as NoticiaResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'CTA_noticias_noticia_collection';
    protected $_eventObject = 'noticia_collection';

    protected function _construct()
    {
        $this->_init(Noticia::class, NoticiaResourceModel::class);
    }

//    public function getSelectCountSql()
//    {
//        $numResultados = parent::getSelectCountSql();
//    }
}
