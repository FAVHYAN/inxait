<?php

namespace app\models;

use \Model;

class Cliente extends Model
{
	protected $table = "cliente";

	protected $nombre;
	protected $apellido;
	protected $departamento;
	protected $ciudad;
	protected $celular;
	protected $correo;
	protected $idConcurso;

	


}