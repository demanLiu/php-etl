<?php
namespace Etl\Contracts;
interface Load{
    public function loadConfig();
    public function process();
}
