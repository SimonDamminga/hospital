<?php

function getClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM client WHERE client_ID = :id "; 
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id)); 

	$db = null;
	return $query->fetch();
}

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM client";
	$query = $db->prepare($sql); 
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editClient() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;	
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($phone) == 0 || strlen($email) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE client SET client_Firstname = :firstname, client_Lastname = :lastname, client_Phone = :phone, client_Email = :email WHERE client_ID = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':phone' => $phone,
		':email' => $email,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteClient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM client WHERE client_ID = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createClient() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;	
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($phone) == 0 || strlen($email) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO client(client_Firstname, client_Lastname, client_Phone, client_Email) VALUES (:firstname, :lastname, :phone, :email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':phone' => $phone,
		':email' => $email));

	$db = null;
	
	return true;
}