<?php
function GetSQLValueString($theValue, $theType) 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
  }
  return $theValue;
}
?>
