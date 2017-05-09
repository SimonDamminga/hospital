<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array(
		'species' => getAllspecies()    
	));
}

function create()
{
	//formulier tonen
	render("species/create");
}

function createSave()
{
	if (!createSpecies()) {
		header("Location:" . URL . "error/index");  
		exit();
	}

	header("Location:" . URL . "species/index");
}

function edit($id)
{
		render("species/edit", array(
		'species' => getSpecies($id)
		));	
}

function editSave()
{ 
	if (!editSpecies($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
} 

function delete($id)
{
	if (isset($id)) {
		deleteSpecies($id);
	}

	header("Location:" . URL . "species/index");
}