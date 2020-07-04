<?php

require_once("php/Description.php");

session_start();

class API {
	private static $email = "user@gmail.com";
	private static $password = "password123";
	
	public static function processRequest() {
		$action = API::getParametarValue("action");
		
		switch($action){
			case "isAuthenticated":
				return API::isAuthenticated();
			case "login":
				return API::login();
			case "logout":
				return API::logout();
			case "getDescriptions":
				return API::getDescriptions();
			case "editDescription":
				return API::editDescription();
			default:
				return "Unknown action!";
		}
	}
	
	private static function isAuthenticated(){
		return json_encode(array(
			"isAuthenticated" => API::isLoggedIn()
		));
	}

	private static function login(){
		$email = API::getParametarValue("email");
		$password = API::getParametarValue("password");
		
		if($email == API::$email && $password == API::$password){
			$_SESSION["email"] = $email;
		}

		return json_encode(array(
			"isAuthenticated" => API::isLoggedIn()
		));
	}

	private static function logout(){
		
		session_unregister("email");
		session_destroy();

		return json_encode(array(
			"logout" => true
		));
	}

	private static function isLoggedIn(){
		return isset($_SESSION["email"]);
	}

	private static function getDescriptions(){
		return json_encode(Description::getDescriptions());
	}
	
	private static function editDescription(){
		$id = API::getParametarValue("id");
		$newDescription = API::getParametarValue("newDescription");
		
		if($id != ""){
			Description::editDescription($id, $newDescription);
			return json_encode(array(
			"success" => true));
		}
		else{
			API::sendErrorAndDie("editDescription needs an id");
		}
	}
	
	public static function sendErrorAndDie($message){
		header("HTTP/1.1 400 Invalid Request");
		
		die(json_encode(array(
			"message" => $message
		)));
	}
	
	private static function getParametarValue($key){
		return isset($_REQUEST[$key]) ? $_REQUEST[$key] : "";
	}
}

echo(API::processRequest());