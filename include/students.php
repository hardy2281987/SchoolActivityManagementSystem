<?php
require_once(LIB_PATH.DS.'database.php');
class Student {
	protected static  $tblname = "tblstudent";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
	function listofstudents(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname);
		return $cur;
	}
	function find_students($id="",$name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE IDNO = {$id} OR LNAME = '{$name}'"); 
		$row_count = $mydb->num_rows();
		return $row_count;
	}

	function find_all_students($name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE LNAME = '{$name}'"); 
		$row_count = $mydb->num_rows();
		return $row_count;
	}
		static function studentAuthentication($email,$h_pass){
		global $mydb;
	     $mydb->setQuery("SELECT * FROM `tblstudent` WHERE `USERNAME` = '". $email ."' and `STUDPASS` = '". $h_pass ."'");  
		$row_count = $mydb->num_rows();//get the number of count
		 if ($row_count >0){
		 $user_found = $mydb->loadSingleResult();
		 	$_SESSION['IDNO']   		= $user_found->IDNO;
		 	$_SESSION['FNAME']      	= $user_found->FNAME;
		 	$_SESSION['LNAME']      	= $user_found->LNAME;
		 	$_SESSION['USERNAME'] 		= $user_found->USERNAME;
		 	$_SESSION['STUDPASS'] 		= $user_found->STUDPASS; 
		   return true;
		 }else{
		 	return false;
		 }
	}
	function find_pass($id="",$pass=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE IDNO = {$id} and STUDPASS = '{$pass}'"); 
		$row_count = $mydb->num_rows();
		return $row_count;
	}

	 
	function single_students($id=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where IDNO= '{$id}' LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')"; 
	
	 if($mydb->setQuery($sql)) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id="") {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE IDNO='". $id."'";
	 	if(! $mydb->setQuery($sql)) return false; 	
	}

	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tblname;
		  $sql .= " WHERE IDNO=". $id;
		  $sql .= " LIMIT 1 ";
	 	if(! $mydb->setQuery($sql)) return false; 	
	
	}	


}
?>