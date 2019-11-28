<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/index');
		
		$this->load->view('Administrador/plantillas/footer');
	}

	//Entidades politicas
	public function candidatos(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Entidades/Candidatos');
		$this->load->view('plantillas/footer');		
	}
	
	public function partidos(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Entidades/partidos');
		$this->load->view('Administrador/plantillas/footer');		
	}
	//Votaciones Presidenciales
	public function eleccionesPre(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Votaciones/Presidenciales');
		$this->load->view('Administrador/plantillas/footer');
	}
	public function eleccionesViPre(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Votaciones Presidenciales/Senadores');
		$this->load->view('Administrador/plantillas/footer');
	}
	//Elecciones Congresuales
	public function eleccionesDipu(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Votaciones Presidenciales/Diputado');
		$this->load->view('Administrador/plantillas/footer');
	}
	
	//Elecciones municipales
	public function eleccionesAlcalde(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Votaciones municipales/Alcalde');
		$this->load->view('Administrador/plantillas/footer');
	}
	public function eleccionesVAlcalde(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Votaciones municipales/ViceAlcalde');
		$this->load->view('Administrador/plantillas/footer');
	}
	//Colegios
	public function colegiosTabla(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Colegios/Colegios');
		$this->load->view('Administrador/plantillas/footer');
	}
	
	public function colegioMesa(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Colegios/Mesas');
		$this->load->view('Administrador/plantillas/footer');
	}
	
	public function mesasVotantes(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Colegios/Votantes');
		$this->load->view('Administrador/plantillas/footer');
	}
}