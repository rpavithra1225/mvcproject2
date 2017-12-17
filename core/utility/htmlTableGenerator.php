<?php

namespace utility;

class htmlTableGenerator
{
    public static function genarateTableFromArray($array)
    {
        /*-------------Bootstrap table for displaying the selected rows from DB------------*/
        if ($array != null) {
            $tableGen = '<table class="table table-hover">';
            $tableGen .= \utility\htmlTableGeneratorHelper::getTableHead();
            $tableGen .= \utility\htmlTableGeneratorHelper::getTableBody($array);
            $tableGen .= '</table>';
            return $tableGen;
        }
    }
}

?>