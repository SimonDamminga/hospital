<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("patient/index", array(
		'patient' => getAllPatients(),  

	)); 
}

function create()
{
	render("patient/create", array(
		'species' => getAllSpecies(), 
		'client' => getAllClients()
		));
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");  
		exit();
	}

	header("Location:" . URL . "patient/index");
}

function edit($id)
{
		render("patient/edit", array(
		'patient' => getPatient($id),
		'client' => getAllClients(),
		'species' => getAllSpecies()
		));	
}

function editSave()
{
	if (!editPatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
} 

function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
}