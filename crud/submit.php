<?php
extract($_POST);
$getName=$name;
$getPassword=$Password;
    $sql = "INSERT INTO `user` (`name`, `password`) VALUES ('{$getName}', '{$getPassword}')";
    require('../library/mySql.php');
    require('../dbCon/dbCon.php');
    $catchSqlReturn = mySqlInsertUpdate($sql,$dbCon);
    if($catchSqlReturn){
        echo "Sucessfull";
    }else{
        echo "failed";
    }

?>