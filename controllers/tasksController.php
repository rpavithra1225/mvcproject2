<?php

class tasksController extends http\controller
{
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record = \utility\controllerHelper::getRecordWithTrimmedDates($record);
        self::getTemplate('show_task', $record);
    }

    public static function all()
    {
        $userID = \utility\controllerHelper::getSessionID();
        $records = todos::findTasksbyID($userID);
        self::getTemplate('all_tasks', $records);
    }

    public static function create()
    {
        //session_start();
        self::getTemplate('create_task');
    }

    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->duedate = \utility\controllerHelper::trimDate($record->duedate);
        self::getTemplate('edit_task', $record);
    }

    public static function store()
    {
        $todo = null;

        if(isset($_REQUEST['id'])){
            $todo = todos::findOne($_REQUEST['id']);
        }

        if(is_null($todo)) {
            $todo = new todo();
            $todo->id = '';
            $todo->createddate = \utility\controllerHelper::getCurrentDate();
        } else {
            $todo->id=$_REQUEST['id'];
        }
        \utility\controllerHelper::todoSave($todo);
        \utility\controllerHelper::getHeader("Location: index.php?page=tasks&action=all");
    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        if(is_object($record)){
            $record->delete();
            header("Location: index.php?page=tasks&action=all");
        }
    }
}