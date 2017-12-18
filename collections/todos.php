<?php

final class todos extends database\collection
{
    protected static $modelName = 'todo';

    public static  function findTasksbyID($userid) {

        $tableName = get_called_class();
        //$sql = 'select message \'Task Message\', createddate \'Created Date\', duedate \'Due Date\', isdone \'Status\', id \'Actions\' from ' . $tableName . ' where ownerid = ? order by id';
        $sql = 'select * from ' . $tableName . ' where ownerid = ? order by id';

        $recordsSet = self::getResults($sql, $userid);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet;
        }
    }
}

?>
