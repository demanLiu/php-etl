<?php
namespace Etl\Contracts;
interface Extract{
    public function loadConfig();
    public function __before();
    public function getData();
    public function __after();
}
