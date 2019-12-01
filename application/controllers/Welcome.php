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

	 
	 public function __construct()
	 {
		 parent::__construct();
		 
	 }
	 
	public function index()
	{
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/index');
		
		$this->load->view('Administrador/plantillas/footer');
	}

	//Entidades politicas
	
	public function registrarCandidato(){
		$this->load->model('candidato_model','',true);
		
		$datosSession = array(
			'_token' => null
		);
		//
		$datos= array(
			'Puestos'=>$this->candidato_model->obtenerPuestos()

		);
		$this->session->set_userdata($datos);
		
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Entidades/Registrar_Candidato',$datos);
		$this->load->view('Administrador/plantillas/footer');		
	}
	//Entidades partido
	public function registrarPartidos(){
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Entidades/Registrar_Partido');
		$this->load->view('Administrador/plantillas/footer');		
		
	}
	
	
	public function registrarColegio(){
		$this->load->model('Colegio_model','',true);
			
		$datos=array(
				'Sectores'=>$this->Colegio_model->getSectores(),
			);
		$this->load->view('Administrador/plantillas/encabezado');
		$this->load->view('Administrador/plantillas/left');
		$this->load->view('Administrador/Colegios/RegistrarColegio',$datos);
		$this->load->view('Administrador/Colegios/plantilla/footer');
	}
	
	
}
