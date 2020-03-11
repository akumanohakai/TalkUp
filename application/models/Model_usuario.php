<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	 public function insertar_usuario($usuario)
	{
		if($this->db->insert('usuarios',$usuario)){
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function leer_usuario()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('usuarios');
		return $query->result();
	}
	function traer_usuario($id){

		$this->db->where('ID',$id);
		$query=$this->db->get('usuarios');
		return $query->row();
	} 
	
	public function actualizar_usuario($id,$usuario)
	{
		$this->db->where('ID',$id);
		if($this->db->update('usuarios',$usuario))
			return true;
		else
			return false;
	}
	public function eliminar_usuario($usuario)
	{
		$this->db->where('ID',$usuario);
		$this->db->delete('usuarios');
	}
	
	public function login($user, $pass)
	{
		$this->db->where('NICK',$user);
		$this->db->where('CLAVE',$pass);
		$query= $this->db->get('USUARIOS');
     
		if($query->num_rows()>0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
		 
	}
	public function leer_idgrupo()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('grupos');
		return $query->result();
	}
	public function leer_idrol()
	{
		$this->db->order_by('ID desc');
		$query=$this->db->get('roles');
		return $query->result();
	}
	
}
