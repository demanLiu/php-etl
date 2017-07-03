<?php
namespace Etl\Utils\Common;
/**
 * Class Events
 * @package Etl\Utils\Common
 * @author  demanliu
 */
trait Events {
    public $eventTypes;

    /**
     * @param $types
     */
    public function setEventTypes($types)
    {
        $this->eventTypes = $types;
    }

    /**
     * execute event by type
     * @param $data
     * @param $type
     */
    public function executeEvent($data, $type)
    {
        array_walk($this->$type,function ($func) use ($data){
            $func($data);
        });
    }
    /**
     * set event
     * @param $type
     * @param callable $func
     */
    public function on($type,callable $func){
        if(!in_array($type,$this->eventTypes)){
            return ;
        }
        $this->$type[] = $func;
    }
}
