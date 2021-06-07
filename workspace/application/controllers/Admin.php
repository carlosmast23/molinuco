<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index()
    {
        $this->cargarPlantilla('admin/index.php',array("mensaje"=>""));
    }

	public function usuarioVista()
	{
		$this->cargarPlantilla('admin/usuario.php',array("mensaje"=>""));		
	}

	public function transporteVista()
	{
		$this->cargarPlantilla('admin/transporte.php',array("mensaje"=>""));		
	}

	public function hospedajeVista()
	{
		$this->cargarPlantilla('admin/hospedaje.php',array("mensaje"=>""));		
	}

	public function turistaVista()
	{
		$this->cargarPlantilla('admin/turista.php',array("mensaje"=>""));		
	}

	public function cobroVista()
	{
		$this->cargarPlantilla('admin/cobro.php',array("mensaje"=>""));		
	}
    
    private function cargarPlantilla($pagina,$array)
	{
		$this->load->view('plantilla/cabecera.php');
		$this->load->view('plantilla/menu_administracion.php');
		$this->load->view($pagina,$array);
		$this->load->view('plantilla/pie_pagina.php');
	}
}
