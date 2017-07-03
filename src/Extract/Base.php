<?php
namespace Etl\Extract;
use Etl\Contracts\Extract;
use Etl\Utils\Common\Events;

/**
 * Class Base
 * @package Etl\Extract
 * @author  demanliu
 */
class Base  implements  Extract
{
    private  $data;
    private $_before;
    private $_after;
    use Events;
    public function __construct()
    {
        $this->data = [];
        $this->_before = [];
        $this->_after = [];
        $this->setEventTypes(['_before','_after']);
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function __before()
    {
        $this->executeEvent($this->data,'_before');
    }

    public function __after()
    {
        $this->executeEvent($this->data,'_after');
    }

    public function getData()
    {
        return $this->data;
    }
}