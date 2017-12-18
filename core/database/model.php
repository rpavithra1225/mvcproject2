<?php
namespace database;

use http\controller;

abstract class model implements iModel
{
    // Force Extending class to define this method
    abstract public function validate();

    public function save() {

        /*------added validation before saving to the DB ------*/
        /*------ ------------------------------------------------------------------------
        this will print appropriate validation error messages like the one below:

            Failed validation. The reason is:
            Enter a valid due date

         --------------------------------------------------------------------------------*/
        $data = $this->validate();
        \utility\modelHelper::getValidation($data);

        if ($this->id != '') {
            $sql = $this->update();
            $INSERT = FALSE;
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);

        if ($INSERT == TRUE) {
            unset($array['id']);
        }

        foreach (array_flip($array) as $key => $value) {
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();
        if ($INSERT == TRUE) {
            $this->id = $db->lastInsertId();
        }
        return $this->id;
        }

    public function insert() {

        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        unset($array['id']);
        $columnString = implode(',', array_flip($array));
        $valueString = ':' . implode(',:', array_flip($array));
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString . ') VALUES (' . $valueString . ')';
        return $sql;
    }

    public function update(){

        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $comma = " ";
        $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (!empty($value)) {
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id=' . $this->id;
        return $sql;
    }

    public function delete() {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $tableName . ' WHERE id=' . $this->id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

?>
