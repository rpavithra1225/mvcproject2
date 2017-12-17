<?php

namespace utility;


class htmlTableGeneratorHelper
{
    public static function getTableHeadings(){
        $tableGen = '';
        $arr = array('Task Message', 'Created Date', 'Due Date', 'Status', 'Actions');
        foreach ($arr as $heading) {
            $tableGen .= '<th scope="col">' . $heading . '</th>';
        }
        return $tableGen;
    }

    public static function getTableHead(){
        $tableGen = '';
        $tableGen .= '<thead>';
        $tableGen .= '<tr>';
        $tableGen .= \utility\htmlTableGeneratorHelper::getTableHeadings();
        $tableGen .= '</tr>';
        $tableGen .= '</thead>';
        return $tableGen;

    }

    public static function getTableBody($array){
        $tableGen = '';
        foreach ($array as $record) {
            $tableGen .= '</tbody>';
            $tableGen .= '<tr>';
            $tableGen .= \utility\htmlTableGeneratorHelper::getTableData($record->message);
            $tableGen .= \utility\htmlTableGeneratorHelper::getTableData(\utility\controllerHelper::trimDate($record->createddate));
            $tableGen .= \utility\htmlTableGeneratorHelper::getTableData(\utility\controllerHelper::trimDate($record->duedate));
            $tableGen .= \utility\htmlTableGeneratorHelper::getStatusTableData($record->isdone);
            $tableGen .= \utility\htmlTableGeneratorHelper::getActionsTableData($record->id);
            $tableGen .= '</tr>';
        }
        $tableGen .= '</tbody>';
        return $tableGen;
    }

    public static function getTableData($data){
        $tableGen = '';
        $tableGen .= '<td>';
        $tableGen .= $data;
        $tableGen .= '</td>';
        return $tableGen;
    }

    public static function getStatusTableData($data){
        $tableGen = '';
        if ($data == '0') {
            $tableGen .= '<td class="table-danger">NOT DONE</td>';
        } else {
            $tableGen .= '<td class="table-success">DONE</td>';
        }
        return $tableGen;
    }

    public static function getActionsTableData($data){
        $tableGen = '';
        $tableGen .= '<td>';
        $tableGen .= "<div class='row' id='actionrow'>";
        $tableGen .= "<a href='index.php?page=tasks&action=show&id=" . $data . "' method='POST'>";
        $tableGen .= "<img src='img/view.png' width='20' height='20' alt='' align='right'></a>";
        $tableGen .= "<a href='index.php?page=tasks&action=edit&id=" . $data . "'>";
        $tableGen .= "<img src='img/edit1.png' width='20' height='20' alt='' align='right'></a>";
        $tableGen .= "<a href='index.php?page=tasks&action=delete&id=" . $data . "' method='POST'>";
        $tableGen .= "<img src='img/delete1.png' width='20' height='20' alt='' align='right'></a>";
        $tableGen .= "</div>";
        $tableGen .= '</td>';
        return $tableGen;
    }
}