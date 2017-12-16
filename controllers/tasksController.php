<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->createddate = \utility\accountsControllerHelper::trimDate($record->createddate);
        $record->duedate = \utility\accountsControllerHelper::trimDate($record->duedate);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        //$records = todos::findAll();
        session_start();
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        //if($records != null) {
            self::getTemplate('all_tasks', $records);
        //}else
           // echo 'You have finished all your tasks in the list!';

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        session_start();
        self::getTemplate('create_task');
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->duedate = \utility\accountsControllerHelper::trimDate($record->duedate);
        self::getTemplate('edit_task', $record);
    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
        $todo = null;
        session_start();
        if(isset($_REQUEST['id'])){
            $todo = todos::findOne($_REQUEST['id']);
        }

        if(is_null($todo)) {
            $todo = new todo();
            $todo->id = '';
        } else {
            $todo->id=$_REQUEST['id'];
        }
            $todo->owneremail = $_SESSION['email'];
            $todo->ownerid = $_SESSION['userID'];
            //$todo->createddate = date("Y-m-d");
            $todo->duedate = $_POST['duedate'];
            $todo->message = $_POST['message'];
            $todo->isdone = $_POST['isdone'];
            $todo->save();
            header("Location: index.php?page=tasks&action=all");
            //print_r($_POST);

    }

    /*public static function save()
    {
        $todo = todos::findOne($_REQUEST['id']);
        $todo->id=$_POST['id'];
        $todo->owneremail=$_POST['owneremail'];
        $todo->ownerid=$_POST['ownerid'];
        $todo->createddate=$_POST['createddate'];
        $todo->duedate=$_POST['duedate'];
        $todo->message=$_POST['message'];
        $todo->isdone=$_POST['isdone'];
        $todo->save();
        header("Location: index.php?page=tasks&action=all");
        //print_r($_POST);
    }*/

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        if(is_object($record)){
            $record->delete();
            header("Location: index.php?page=tasks&action=all");
        }


    }

}