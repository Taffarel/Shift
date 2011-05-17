<?php
Class EventosController extends AppController{
	
	var $name = 'Eventos';
	var $paginate = array('limit'=> 20, 
						  'order'=>array('Evento.nome'=> 'ASC'), 
						  'conditions'=>array('Evento.status'=>1));
	
	/*
	 * Método Index
	 * 
	 */
	function index(){
		
		$this->set('eventos', $this->paginate('Evento'));
		
	}
		
	/*
	 * Método NovoCadastro
	 * 
	 */
	function novoCadastro(){
		
		if(isset($this->data)){
			
			if(empty($this->data['Evento']['nome'])){
				$this->Session->setFlash('O campo NOME está vazio.', 'msg-error');
				$this->redirect(array('controller'=>'eventos', 'action'=>'novoCadastro'));
			}
			
			if($this->Evento->save($this->data)){
				$this->Session->setFlash('Evento cadastrado com sucesso!', 'msg-sucesso');
				$this->redirect(array('controller'=>'eventos', 'action'=>'index'));
			}
			
		}
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
}