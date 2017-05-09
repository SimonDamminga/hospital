<?php

require(ROOT . "model/ClientModel.php"); 

function index()
{
	render("client/index", array(
		'client' => getAllClients() 
	));
}

function create()
{
	//formulier tonen
	render("client/create");
}

function createSave()
{
	if (!createClient()) {
		header("Location:" . URL . "error/index");  
		exit();
	}

	header("Location:" . URL . "client/index");
}

function edit($id)
{
		render("client/edit", array(
		'client' => getClient($id)
		));	
}

function editSave()
{
	if (!editClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
} 

function delete($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}