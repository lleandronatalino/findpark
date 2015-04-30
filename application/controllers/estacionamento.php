<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estacionamento extends CI_Controller
{

	protected $userValidate;
	protected $userCondition;

	//Propriedades da classe
	public function getUserValidate(){
		return $this->userValidate;
	}

	public function setUserValidate($_validate){
		$this->userValidate = $_validate;
	}

	public function getUserCondition(){
		return $this->userCondition;
	}

	public function setUserCondition($_condition){
		$this->userCondition = $_condition;
	}

	public function __construct()
	{
		//Invoke o construtor pai
		parent::__construct();

		//Carregando os Helpers do CI
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('array');

		//Carregando os MODELS do CI
		$this->load->model('estacionamento_model');
		$this->load->model('usuario_model');
		$this->load->model('membership_model');
		$this->load->model('email_model');

		//Verifica USUARIO LOGADO
		$this->membership_model->user_logged();

		$this->setUserCondition( array(
			'login' => $this->session->userdata('username'),
			'email' => $this->session->userdata('username')));

		//Validação de USUARIO - FLGVALIDO
		$this->setUserValidate($this->membership_model->user_email_valid($this->getUserCondition()));

		//ADICIONANDO Permissões de URL'S
		$url = base_url('/estacionamento/valida_email');
		$urlAutenticacao = base_url('/estacionamento/validacao_email');
		$urlReenviar = base_url('/estacionamento/reenviar_email');
		$urlAtual = current_url();

		//Se Não tiver Valido e URL for diferente
		if($urlAtual != $url && $urlAtual != $urlAutenticacao && $urlAtual != $urlReenviar && !$this->getUserValidate()){
			$a = array('b' => 'teste');
			redirect('/estacionamento/valida_email', $a);
		}
	}

	public function index()
	{
		$query = $this->estacionamento_model->SelectByID($this->getUserCondition());

		if($query->num_rows() != 1){
			$data = array('erro' => "Não foi possivel identificar o Usuario.");
            return $this->load->view('administrativo/dashboard-view',$data);
        }

        $row = $query->row();
        $this->load->view('administrativo/dashboard-view',$row);
	}

	public function valida_email(){

		if($this->getUserValidate())
			redirect('/estacionamento/index');

		//Recupera o e-mail do usuario
		$data = array('emailUser' => $this->membership_model->get_email_user($this->getUserCondition()));

		$this->load->view('administrativo/valida_email-view', $data);
	}

	public function reenviar_email(){

		//Recuperando dados USUARIO
		$emailUser = $this->membership_model->get_email_user($this->getUserCondition());
		$codigoEmailUser =  $this->usuario_model->SelectCodigoEmail($this->getUserCondition());
		
		//Carregando o TEMPLATE para enviar e-mail
		$dataEmail = array('codigo' => $codigoEmailUser);
		$template = $this->load->view('template_email-view',$dataEmail,TRUE);

		//REENVIAR E-MAIL
		$this->email_model->EnviarEmail('Validação de Acesso ao Sistema', 'lv.lucasvin@gmail.com', $emailUser, $template);

		$data = array('sendEmail' => 'E-mail enviado com sucesso');

		redirect('/estacionamento/index');
		//return $this->load->view('login/valida_email-view', $data);
	}

	public function validacao_email(){

		$this->form_validation->set_rules('txtCodigoEmail', 'CODIGO', 'required');

		//Recupera EMAIL usuario
		$data['emailUser']= $this->membership_model->get_email_user($this->getUserCondition());

		//SE o FRM não estiver VALIDO
		if (!$this->form_validation->run())
			return $this->load->view('administrativo/valida_email-view', $data);

		//Monta as condições para atualizar
		$condition = array(
			'Login' => $this->session->userdata('username'), 
			'Email' => $this->membership_model->get_email_user($this->getUserCondition()),
			'txtCodigoEmail' => $this->input->post());

		//carregar model 
		$query = $this->estacionamento_model->UpdateCodigoEmail($condition);

		if(!$query){
			//Retornando o erro
			$data['userInvalid'] = "O código não é válido";

			return $this->load->view('administrativo/valida_email-view',$data);
		}

		redirect('/estacionamento/index');
	}
}