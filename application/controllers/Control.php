
<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$data['title']='Inicio';
		$this->load->model('model_usuario');
	}
	public function index()
	{	
		$this->load->helper('html');
		$this->load->view('plantillas/header');
		if (isset($_POST['CLAVE'])&&isset($_POST['USUARIO'])) 
		{			
			isset($_SESSION['autenticado']);
			$res=$this->model_usuario->login( $_POST['USUARIO'] , (md5($_POST['CLAVE'])));		
			if ($res) 
			{
				$data= array('USUARIO' => $res->NICK, 'IDROL' => $res->IDROL, 'NOMBRE' => $res->NOMBRE, 'APELLIDO' => $res->APELLIDO, 'ID' => $res->ID);
				$this->session->set_userdata($data);
				$this->session->userdata('ID');
				$this->session->userdata('USUARIO');
				$this->session->userdata('IDROL');
				$_SESSION["user"]= $_POST['USUARIO'];	
				$_SESSION["id"]= $res->ID;	
				$_SESSION["name"]= $res->NOMBRE;		
				$_SESSION["last"]= $res->APELLIDO;				
				$_SESSION["idrol"]= $res->IDROL;
				$_SESSION['autenticado']= 'SI';
			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">Datos erroneos, usuario o contraseña incorrectos.</div>';
			}
		}
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				
				
				$this->load->view('plantillas/header');
				$data['title']='Inicio';
				
				$data['contenido_principal']='inicio';
				$this->load->view('templete_principal',$data);	
			}
		}
		else
		{				
			$this->load->view('login');
		}
	}	
	public function salir() {		
		unset($_SESSION['autenticado']); 		
		redirect(base_url()); 
	}
	
	
	public function usuario()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$this->load->model('model_usuario');		
				$data['usuario']=$this->model_usuario->leer_usuario();
				$data['selectGrupo']=$this->model_usuario->leer_idgrupo();
				$data['selectRol']=$this->model_usuario->leer_idrol();
				$data['contenido_principal']='usuarios';
				$this->load->view('templete_principal',$data);
			}
		}
	}
	public function traerusuario()
	{
		$this->load->model('model_usuario');
		$data['usuario']=$this->model_usuario->leer_usuario();
				$data['selectGrupo']=$this->model_usuario->leer_idgrupo();
				$data['selectRol']=$this->model_usuario->leer_idrol();

		$data['contenido_principal']='usuarios';
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['usuario_actualizar']=
			$this->model_usuario->traer_usuario($id);
		}
		
		$this->load->view('templete_principal',$data);	
	}
	public function eliminarusuario() 
	{
		$this->load->model('model_usuario');
		$data['usuario']=$this->model_usuario->leer_usuario();
		
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['usuario'] = 
			$this->model_usuario->eliminar_usuario($id);
		}
		
		redirect (site_url('control/usuario'));
	}
	public function insertarusuario()
	{
		$usuario=array(
			'NICK'=>$this->input->post('NICK'),
			'CLAVE'=>md5($this->input->post('CLAVE')),
			'NOMBRE'=>$this->input->post('NOMBRE'),
			'APELLIDO'=>$this->input->post('APELLIDO'),
			'DIRECCION'=>$this->input->post('DIRECCION'),
			'TELEFONO'=>$this->input->post('TELEFONO'),
			'EMAIL'=>$this->input->post('EMAIL'),
			'IDROL'=>$this->input->post('IDROL'),
			'IDGRUPO'=>$this->input->post('IDGRUPO')
		);
		
		$this->load->model('model_usuario');
		$this->model_usuario->insertar_usuario($usuario);
		
		redirect (site_url('control/usuario'));
	}	
	public function actualizarusuario()
	{
		$usuario=array(
			'NICK'=>$this->input->post('NICK'),
			'CLAVE'=>md5($this->input->post('CLAVE')),
			'NOMBRE'=>$this->input->post('NOMBRE'),
			'APELLIDO'=>$this->input->post('APELLIDO'),
			'DIRECCION'=>$this->input->post('DIRECCION'),
			'TELEFONO'=>$this->input->post('TELEFONO'),
			'EMAIL'=>$this->input->post('EMAIL'),
			'IDROL'=>$this->input->post('IDROL'),
			'IDGRUPO'=>$this->input->post('IDGRUPO')
		); 
		
		$id=$this->input->post('ID');		
		$this->load->model('model_usuario');
		
		if($this->model_usuario->actualizar_usuario($id,$usuario))		
		{
			redirect (site_url('control/usuario'));
		}
	}
	
	public function puntaje()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$this->load->model('model_puntaje');		
				$data['usuario']=$this->model_puntaje->leer_puntaje();
				$data['selectUsuario']=$this->model_puntaje->leer_idusuario();
				$data['selectJuego']=$this->model_puntaje->leer_idjuego();
				$data['contenido_principal']='puntajes';
				$this->load->view('templete_principal',$data);
			}
		}
	}
	public function traerpuntaje()
	{
		$this->load->model('model_puntaje');		
		$data['usuario']=$this->model_puntaje->leer_puntaje();
		$data['selectUsuario']=$this->model_puntaje->leer_idusuario();
		$data['selectJuego']=$this->model_puntaje->leer_idjuego();
		$data['contenido_principal']='puntajes';
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['puntaje_actualizar']=
			$this->model_puntaje->traer_puntaje($id);
		}
		
		$this->load->view('templete_principal',$data);	
	}
	public function eliminarpuntaje() 
	{
		$this->load->model('model_puntaje');
		$data['puntaje']=$this->model_puntaje->leer_puntaje();
		
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['puntaje'] = 
			$this->model_puntaje->eliminar_puntaje($id);
		}
		
		redirect (site_url('control/puntaje'));
	}
	public function insertarpuntaje()
	{
		$puntaje=array(
			'IDUSUARIO'=>$this->input->post('IDUSUARIO'),
			'IDJUEGO'=>$this->input->post('IDJUEGO'),
			'PUNTUACION'=>$this->input->post('PUNTUACION')
		);
		
		$this->load->model('model_puntaje');
		$this->model_puntaje->insertar_puntaje($puntaje);
		
		redirect (site_url('control/puntaje'));
	}	
	public function actualizarpuntaje()
	{
		$puntaje=array(
			'IDUSUARIO'=>$this->input->post('IDUSUARIO'),
			'IDJUEGO'=>$this->input->post('IDJUEGO'),
			'PUNTUACION'=>$this->input->post('PUNTUACION')
		); 
		
		$id=$this->input->post('ID');		
		$this->load->model('model_puntaje');
		
		if($this->model_puntaje->actualizar_puntaje($id,$puntaje))		
		{
			redirect (site_url('control/puntaje'));
		}
	}
	
	public function juego()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$data['contenido_principal']='emociones';
				$this->load->view('templete_principal',$data);
			}
		}
	}
	
	public function pareja()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$data['contenido_principal']='parejas';
				$this->load->view('templete_principal',$data);
			}
		}
	}
	
	public function memo()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$data['contenido_principal']='juego_memoria';
				$this->load->view('templete_principal',$data);
			}
		}
	}
	
	public function action()
	{
		if(isset($_SESSION['autenticado']))
		{
			if($_SESSION['autenticado']== 'SI')
			{
				$data['contenido_principal']='memoria/action';
				$this->load->view('templete_principal',$data);
			}
		}
	}
}