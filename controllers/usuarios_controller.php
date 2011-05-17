<?php
Class UsuariosController extends AppController{
	
	var $name = 'Usuarios';
	var $paginate = array('limit'=> 20, 
						  'order'=>array('Usuario.nome'=> 'ASC'), 
						  'conditions'=>array('Usuario.status'=>1));
	
	/*
	 * Método Index
	 * 
	 */
	function index(){
		
	}
	
	/*
	 * Método Visualizar
	 * @param ID
	 */
	function visualizar($id){
		
	}
	
	/*
	 * Método NovoCadastro
	 * 
	 */
	function novoCadastro(){
		
	}
	
	/*
	 * Método AlterarCadastro
	 * @param ID
	 * 
	 */
	function alterarCadastro($id){
		
	}
	
	/*
	 * Método ExcluirCadastro
	 * @param ID
	 * 
	 */
	function excluirCadastro($id){
		
	}
	
	/*
	 * Método Login
	 * 
	 */
	function login(){
		
		if(isset($this->data)){
						
			$data = $this->Usuario->find('first', array('conditions'=>array('Usuario.login'=>$this->data['Usuario']['login'])));
			
			if(empty($data)){
				$this->Session->setFlash('Operação inválida¹', 'msg-error');
				$this->redirect('/');
			}
			
			if($data['Usuario']['senha'] == md5($this->data['Usuario']['senha'])){
				
				$this->_sessionUsuario($data);
				$this->Session->setFlash('Bem-vindo ao Shift', 'msg-sucesso');
				$this->redirect('/pages/home');
				
			}else{
				
				$this->Session->setFlash('Senha inválida²', 'msg-error');
				$this->redirect('/');
			}
		}
		 
	}
	
	/*
	 * Método Logout
	 * 
	 */
	function logout(){
		$this->Session->delete('Usuario');
		$this->Session->setFlash('Até logo', 'msg-sucesso');
		$this->redirect('/');
	}
}