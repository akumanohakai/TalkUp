<?
//FUNCIONES PARA LA TABLA RESPONSABLES EN LA BASE DE DATOS
	//TRAE DATOS EN RESPONSABLES
	public function index4()
	{
		$data['title']='Inicio';
		
		$this->load->model('model_usuario');
		$data['usuario']=$this->model_usuario->leer_usuario();
		
		$this->load->model('model_sucursal');
		$data['sucursal']=$this->model_sucursal->leer_sucursal();		
		$data['selectUbicacion']=$this->model_sucursal->leer_idubicacion();
		$data['selectResponsable']=$this->model_sucursal->leer_idresponsable();
		
		$this->load->model('model_responsable');
		$data['responsable']=$this->model_responsable->leer_responsable();

		$this->load->model('model_articulo');
		$data['articulo']=$this->model_articulo->leer_articulo();

		$this->load->model('model_ubicacion');
		$data['ubicacion']=$this->model_ubicacion->leer_ubicacion();
		
		$data['contenido_principal']='inicio';
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['ubicacion_actualizar']=
			$this->model_ubicacion->traer_ubicacion($id);
		}
		
		$this->load->view('templete_principal',$data);	
	}
	//ELIMINA DATOS EN RESPONSABLES	
	public function eliminarresponsable() 
	{
		$this->load->model('model_sucursal');
		$data['sucursal']=$this->model_sucursal->leer_sucursal();
		$data['selectUbicacion']=$this->model_sucursal->leer_idubicacion();
		$data['selectResponsable']=$this->model_sucursal->leer_idresponsable();
		
		$this->load->model('model_responsable');
		$data['responsable']=$this->model_responsable->leer_responsable();

		$this->load->model('model_articulo');
		$data['articulo']=$this->model_articulo->leer_articulo();

		$this->load->model('model_ubicacion');
		$data['ubicacion']=$this->model_ubicacion->leer_ubicacion();
		
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['ubicacion'] = 
			$this->model_ubicacion->eliminar_ubicacion($id);
		}
		
		redirect (base_url());
	}
	//BUSCA DATOS EN RESPONSABLES	
	public function buscarresponsable() 
	{
		$data['title']='Inicio';
		
		$this->load->model('model_sucursal');
		$data['sucursal']=$this->model_sucursal->leer_sucursal();
		$data['selectUbicacion']=$this->model_sucursal->leer_idubicacion();
		$data['selectResponsable']=$this->model_sucursal->leer_idresponsable();
		
		$this->load->model('model_responsable');
		$data['responsable']=$this->model_responsable->leer_responsable();

		$this->load->model('model_articulo');
		$data['articulo']=$this->model_articulo->leer_articulo();

		$this->load->model('model_ubicacion');
		$data['ubicacion']=$this->model_ubicacion->leer_ubicacion();

		$keywords=$this->input->get('keywords');		
		$data['ubicacion'] = 
		$this->model_ubicacion->buscar_ubicacion($keywords);

		$data['contenido_principal']='inicio';
		$this->load->view('templete_principal', $data);
	}
	//INSERTA DATOS EN RESPONSABLES	
	public function insertarresponsable()
	{
		$responsable=array(
			'DESCRIPCION'=>$this->input->post('DESCRIPCION')
		);
		
		$this->load->model('model_ubicacion');
		$this->model_ubicacion->insertar_ubicacion($ubicacion);
		
		redirect (base_url());
	}
	//ACTUALIZA DATOS EN RESPONSABLES	
	public function actualizarresponsable()
	{
		$responsable=array(
			'DESCRIPCION'=>$this->input->post('DESCRIPCION')
		); 
		
		$id=$this->input->post('ID');		
		$this->load->model('model_ubicacion');
		
		{
		if($this->model_ubicacion->actualizar_ubicacion($id,$ubicacion))		
			redirect (base_url());
		}
	}
?>