<?php

require_once("DatabaseAccess.php");

class Description {
	public $id;
	public $description;
	
	public function __construct($id, $description){
		$this->id = $id;
		$this->description = $description;
	}
	
	public static function getDescriptions(){
		$descriptions = array();
		$dbAccess = Description::getDbAccess();
		
		$rows = $dbAccess->executeQuery("SELECT * FROM Descriptions;");
		
		foreach($rows as $row){
			$descriptions[] = new Description($row[0], $row[1]);
		}
		
		return $descriptions;
	}
	
	public static function editDescription ($id, $newDescription){
		$dbAccess = Description::getDbAccess();
		
		$dbAccess->executeQuery("UPDATE Descriptions SET Description='$newDescription' WHERE ID='$id';");
	}
	
	private static function getDbAccess(){
		return new DatabaseAccess(
			"localhost",	//lokacija do DB servera
			"",			//naziv baze
			"",			//korisnik
			""		//lozinka
		);
	}
}
		