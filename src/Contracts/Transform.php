<?php
namespace Etl\Contracts;
interface Transform{
    public function loadConfig();
    public function transform();
    public function getResult();
}
