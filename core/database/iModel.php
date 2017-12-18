<?php
namespace database;

use http\controller;

/*---------This interface specifies methods a model class must implement ---------*/
interface iModel
{
    public function save();
    public function insert();
    public function delete();
    public function update();
}
?>