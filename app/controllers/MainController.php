<?php

class MainController
{
	public function index()
	{
		Response::render("home");
	}
	public function registrar()
	{
		Response::render("registrar");		
	}
	public function concurso()
	{
		Response::render("concurso");
	}
	public function ganador()
	{
		Response::render("ganador",["greeting" => "modelado de vistas"]);		
	}
}