<?php
namespace Etl\Contracts;
interface Extract{
    public function setData(array $data);
    public function getData();
}
