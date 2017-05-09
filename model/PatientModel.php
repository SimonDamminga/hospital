<?php

function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT patient.id, patient.name, patient.status, patient.patient_Gender, client.client_Firstname, client.client_Lastname, species.species_Description, 
					patient.client_ID, patient.species_ID 
			FROM patient 
			INNER JOIN client ON patient.client_ID = client.client_ID
			INNER JOIN species ON patient.species_ID = species.species_ID
			WHERE patient.id = :id"; 
	$query = $db->prepare($sql); 
	$query->execute(array(
		":id" => $id));

	$db = null;
	return $query->fetch();  
}
function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT patient.id, patient.name, patient.patient_Gender, patient.status, client.client_Firstname, client.client_Lastname, species.species_Description
			FROM patient
			INNER JOIN client ON patient.client_ID = client.client_ID
			INNER JOIN species ON patient.species_ID = species.species_ID";  
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
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
function getAllSpecies()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();	
}
function editPatient() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($name) == 0 || strlen($status) == 0 || strlen($id) == 0 || strlen($species) == 0 || strlen($client) == 0 || strlen($gender) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE patient SET name = :name, status = :status, species_ID = :species, client_ID = :client, patient_Gender = :gender WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':status' => $status,
		':species' => $species,
		':client' => $client,
		':gender' => $gender,
		':id' => $id));

	$db = null;

	return true;
}

function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patient WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createPatient() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;	
	
	if (strlen($name) == 0 || strlen($status) == 0 || strlen($species) == 0 || strlen($client) == 0 || strlen($gender) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, status, species_ID, client_ID, patient_Gender) VALUES (:name, :status, :species, :client, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':status' => $status,
		':species' => $species,
		':client' => $client,
		':gender' => $gender));

	$db = null;

	return true;
}