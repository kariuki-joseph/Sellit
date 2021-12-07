<?php
include 'dbConnect.php';
class Table{
	function __construct($tableName){
		$this->tableName = $tableName;
	}

//insert 
	function insert($objArr){
foreach ($objArr as $key => $value) {
	
}
$sql = "INSERT INTO $this->tableName VALUES()";
$query=mysqli_query($conn,$sql);
//check if insert
if ($query) {
	return true;
}else{
	return false;
}
}

}
?>