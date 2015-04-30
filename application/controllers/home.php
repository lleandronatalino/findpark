<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();

		//Carregando os Helpers do CI
		$this->load->helper('form');
		$this->load->helper('array');

		//Carregando os LIBRARY do CI
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('index-view');
	}

	public function selecionaTodasEmpresas(){

		$this->load->model('global_model');

		$result = $this->global_model->SelectAllEstacionamentos();

		$aux = json_encode($result->result());

		echo $aux;
	}

	public function empresa()
	{
		$this->load->view('empresa-view');	
	}

	public function empresa_cadastro()
	{
		// MODEL Validate Empresa
		$this->load->model('validate');
		$validaEmpresa = $this->validate->ValidarCamposEmpresa();
		$validaUsuario = $this->validate->ValidarCamposUsuario();

		if(!$validaEmpresa || !$validaUsuario)
			return $this->load->view('empresa_cadastro-view');

		//Preenchendo um ARRAY 
		$dataEstacionamento = elements(array('txtNmFantasia', 'txtDsRazaoSocial', 'txtCnpj', 'txtCepEmpresa', 'txtRuaEmpresa', 'txtNumEmpresa', 
			'txtBairroEmpresa', 'txtCidadeEmpresa','txtUfEmpresa', 'txtCompEmpresa', 'txtTelEmpresa', 'txtLatitude', 'txtLongitude'),$this->input->post());

		$dataUsuario = elements(array('txtNome', 'txtCPF', 'txtRuaResp', 'txtNumResp', 'txtBairroResp', 'txtCidadeResp', 
			'txtUfResp', 'txtCompResp','txtTelResp', 'txtCepResp', 'txtEmail', 'txtLogin','codigoEmail'),$this->input->post());

		$dataUsuario['txtSenha'] = criptografia($this->input->post('txtSenha'));
		$dataUsuario['codigoEmail'] = geraSenha();

		//Carregando MODEL
		$this->load->model('estacionamento_model');
		$this->load->model('usuario_model');

		//OPEN TRANSACTION
		$this->db->trans_begin();

		$this->estacionamento_model->Insert($dataEstacionamento);
		//Obtendo o ID do ULTIMO INSERT
		$PK_Estacionamento = $this->db->insert_id();

		$this->usuario_model->Insert($dataUsuario);
		//Obtendo o ID do ULTIMO INSERT
		$PK_Usuario = $this->db->insert_id();

		//Preenchendo um ARRAY 
		$data = array("PK_Estacionamento"=> $PK_Estacionamento , "PK_Usuario"=> $PK_Usuario, "DtCriacao" => date("Y-m-d"), "FlgProprietario" => TRUE);

		$this->usuario_model->InsertUsuarioEstacionamento($data);

		//Verifica o STATUS da Transação
		if ($this->db->trans_status() === FALSE){
			//FAIL TRANSATION
			$this->db->trans_rollback();

			//Retornando o erro
			$error['erro'] = "Não foi possivel concluir a operação.";
			return $this->load->view('empresa_cadastro-view',$error);
		}
		else{
			//SUCESS TRANSACTION
			$this->db->trans_commit();

			//Enviando E-MAIL
			$this->load->model('email_model');
			//Carregando o TEMPLATE para enviar e-mail
			$dataEmail = array('codigo' => $dataUsuario['codigoEmail']);
			$template = $this->load->view('template_email-view', $dataEmail, TRUE);

			$this->email_model->EnviarEmail('Validação de Acesso ao Sistema', 'lv.lucasvin@gmail.com', $dataUsuario['txtEmail'], $template);
			
			//Condition 
			$condition = array(
				'login' => $this->input->post('txtLogin'),
				'email' => $this->input->post('txtEmail'),
				'senha' => criptografia($this->input->post('txtSenha')));

			// MODELO MEMBERSHIP
			$this->load->model('membership_model');
			$query = $this->membership_model->user_validate($condition);

			$sessao = array(
				'username' => $this->input->post('txtLogin'),
				'userPassword' => $this->input->post('txtSenha'),
				'logged' => TRUE
				);

			//Invoke o controller 'estacionamento'
			$this->session->set_userdata($sessao);
			redirect('estacionamento');
		}
	}

	public function sobre()
	{
		$this->load->view('sobre-view');	
	}

	public function logout()
	{
		$this->session->unset_userdata("logged");
		$this->session->sess_destroy();
		redirect(base_url());	
	}

	public function email(){
		$this->load->view('template_email-view');
	}

	public function login()
	{	
		//Validação do FRM
		$this->form_validation->set_rules('username','EMAIL','required');//|valid_email
		$this->form_validation->set_rules('userpassword','SENHA','required');

		//SE o FRM não estiver VALIDO
		if (!$this->form_validation->run())
			return $this->load->view('login-view');

		//Condition 
		$condition = array(
			'login' => $this->input->post('username'),
			'email' => $this->input->post('username'),
			'senha' => criptografia($this->input->post('userpassword')));

		// MODELO MEMBERSHIP
		$this->load->model('membership_model', 'membership');
		$query = $this->membership->user_validate($condition);

		if(!$query){
			//Retornando o erro
			$data['userInvalid'] = "Email/Senha incorretos";
			return $this->load->view('login-view', $data);
		}

		$sessao = array(
			'username' => $this->input->post('username'),
			'userPassword' => $this->input->post('userpassword'),
			'logged' => TRUE
			);

		//Invoke o controller 'estacionamento'
		$this->session->set_userdata($sessao);
		redirect('estacionamento');
		}
	}