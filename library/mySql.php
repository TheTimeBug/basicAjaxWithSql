<?php

function mySqlError($dbCon){
    echo "Error description: " . mysqli_error($dbCon). "<br>";
}
// get Single output Sql and DbCon as parameter return single Row
function mySqlRetriveSingle($sql,$dbCon){
    $sql_execute = mysqli_query($dbCon, $sql);
    if(!$sql_execute){
        mySqlError($dbCon);
    }
    $row = mysqli_fetch_assoc($sql_execute);
    return $row;
}

// get Multiple output Sql and DbCon as parameter 
// return Multiple Row
function mySqlRetriveMultiple($sql,$dbCon){
    $result = array();
    $sql_execute = mysqli_query($dbCon, $sql);
    if(!$sql_execute){
        mySqlError($dbCon);
    }
    while($row = mysqli_fetch_assoc($sql_execute)){
        array_push($result,$row);
    }
    return $result;
  }

  //Get Query and DBcon 
  //return execution True or false
  function mySqlInsertUpdate($sql,$dbCon){
    $sql_execute = mysqli_query($dbCon, $sql);
    if(!$sql_execute){
        mySqlError($dbCon);
        return false;
    }else{
        return true;
    }
  }
?>