<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }

    public static function generateListFromArray($array){
        $referingPage = $_REQUEST['page'];
        $tableGen = '';
        if($array!=null) {
            $tableGen .="<div class=\"container\" id=\"tablecon\"> <div class=\"row\"><div class=\"panel-heading\">To-Do List</div>";
            $tableGen .= '<div class="container-fluid">';
            $tableGen.= '<ul class="list-group">';

            foreach ($array as $record) {
                $tableGen .= '<li class="list-group-item" style="border-style:none; border-bottom: 2px dotted rgba(0,0,0,.125); ">';
                $tableGen .= "<div class='row' id='tablerow'>";
                $tableGen .= "<div class='row' id='checkbox'>";
                $tableGen .="<input type='checkbox' />";
                $tableGen .="<label for='checkbox'>";
                $tableGen .= $record->message;
                $tableGen .= "</label>";
                $tableGen .="<label for='checkbox'>";
                $tableGen .= $record->message;
                $tableGen .= "</label>";

                $tableGen .= "</div></div>";

                /* Panel to show View, Edit, Delete icons */
                $tableGen.="<div class='float-md-right'>";
                $tableGen .= "<a href='index.php?page=tasks&action=delete&id=" . $record->id . "' method='POST'>";
                $tableGen .= "<img src='img/delete1.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "<a href='index.php?page=tasks&action=edit&id=" . $record->id . "'>";
                $tableGen .= "<img src='img/edit1.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "<a href='index.php?page=tasks&action=show&id=" . $record->id . "' method='POST'>";
                $tableGen .= "<img src='img/view.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "</div>";
                $tableGen .= "</div>";
                $tableGen .= '</li>';
            }

        $tableGen.='</ul> </div>';
    }
        $tableGen.= '</div>';
        return $tableGen;
    }

    public static function genarateTableFromArray($array)
    {
        if ($array != null) {
            $tableGen = '<table class="table table-hover">';
            $tableGen .= '<thead>';
            $tableGen .= '<tr>';
            $tableGen .= \utility\htmlTableGenerator::getTableHeadings();
            $tableGen .= '</tr>';
            $tableGen .= '</thead>';
            foreach ($array as $record) {
                $tableGen .= '</tbody>';
                $tableGen .= '<tr>';
                $tableGen .= '<td>';
                $tableGen .= $record->message;
                $tableGen .= '</td>';
                $tableGen .= '<td>';
                $tableGen .= \utility\controllerHelper::trimDate($record->createddate);
                $tableGen .= '</td>';
                $tableGen .= '<td>';
                $tableGen .= \utility\controllerHelper::trimDate($record->duedate);
                $tableGen .= '</td>';
                if ($record->isdone == '0') {
                    $tableGen .= '<td class="table-danger">NOT DONE</td>';
                } else {
                    $tableGen .= '<td class="table-success">DONE</td>';
                }
                $tableGen .= '<td>';
                $tableGen .= "<div class='row' id='actionrow'>";
                $tableGen .= "<a href='index.php?page=tasks&action=show&id=" . $record->id . "' method='POST'>";
                $tableGen .= "<img src='img/view.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "<a href='index.php?page=tasks&action=edit&id=" . $record->id . "'>";
                $tableGen .= "<img src='img/edit1.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "<a href='index.php?page=tasks&action=delete&id=" . $record->id . "' method='POST'>";
                $tableGen .= "<img src='img/delete1.png' width='20' height='20' alt='' align='right'></a>";
                $tableGen .= "</div>";
                $tableGen .= '</td>';
                $tableGen .= '</tr>';
            }
            $tableGen .= '</tbody>';
            $tableGen .= '</table>';

            return $tableGen;
        }
    }
}

?>