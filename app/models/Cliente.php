<?php

namespace app\models;

use \Model;

class Cliente extends Model
{
	protected $table = "cliente";

	public $nombre;
	public $apellido;
	public $departamento;
	public $ciudad;
	public $celular;
	public $correo;
	public $idConcurso;

	


}