<?php

namespace Classes;

class Db {
    const HOST = '127.0.0.1';
    const USER = 'root';
    const PASS = 'root01';
    const DB =  'new_db';
  function getAssocResult($sql){
    
    $db = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);
  
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    
    $result = mysqli_query($db, $sql);
  
    $array_result = array();
    while($row = mysqli_fetch_assoc($result)) {
      $array_result[] = $row;
    }
  
    mysqli_close($db);
    
    return $array_result;
  }
  function executeQuery($sql){
    $db = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);
	  $result = mysqli_query($db, $sql);
    mysqli_close($db);
	return $result;
}
}