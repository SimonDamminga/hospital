<?php

function getSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_ID = :id ";  
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id)); 

	$db = null;
	return $query->fetch();
}

function getAllspecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species"; 
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
  
}

function editSpecies() 
{
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($species) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_Description = :description WHERE species_ID = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $species,
		':id' => $id)); 

	$db = null;
	
	return true;
}
 
function deleteSpecies($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_ID = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createSpecies() 
{
	$species = isset($_POST['species']) ? $_POST['species'] : null;	
	
	if (strlen($species) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_Description) VALUES (:description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $species
		));

	$db = null;

	return true;
}