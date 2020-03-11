<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_puntaje extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	 public function insertar_puntaje($puntaje)
	{
		if($this->db->insert('puntajes',$puntaje)){
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function leer_puntaje()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('puntajes');
		return $query->result();
	}
	function traer_puntaje($id){

		$this->db->where('ID',$id);
		$query=$this->db->get('puntajes');
		return $query->row();
	} 
	
	public function actualizar_puntaje($id,$puntaje)
	{
		$this->db->where('ID',$id);
		if($this->db->update('puntajes',$puntaje))
			return true;
		else
			return false;
	}
	public function eliminar_puntaje($puntaje)
	{
		$this->db->where('ID',$puntaje);
		$this->db->delete('puntajes');
	}
	
	public function leer_idusuario()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('usuarios');
		return $query->result();
	}
	public function leer_idjuego()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('juegos');
		return $query->result();
	}
	
}
