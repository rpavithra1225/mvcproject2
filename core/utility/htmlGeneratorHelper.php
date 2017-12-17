<?php

namespace utility;


class htmlTableGenerator
{
    public static function getTableHeadings(){
        $tableGen = '';
        $arr = array('Task Message', 'Created Date', 'Due Date', 'Status', 'Actions');
        foreach ($arr as $heading) {
            $tableGen .= '<th scope="col">' . $heading . '</th>';
        }
        return $tableGen;
    }



}