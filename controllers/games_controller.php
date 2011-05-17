<?php
Class GamesController extends AppController{
	
	var $name = 'Games';
	var $paginate = array('limit'=> 20, 
						  'order'=>array('Game.nome'=> 'ASC'), 
						  'conditions'=>array('Game.status'=>1));
	
/*
	 * Método Index
	 * 
	 */
	function index(){
		$this->set('games', $this->paginate('Game'));
	}
		
	/*
	 * Método NovoCadastro
	 * 
	 */
	function novoCadastro(){
	
			if(isset($this->data)){
			
			if(empty($this->data['Game']['nome'])){
				$this->Session->setFlash('O campo NOME está vazio.', 'msg-error');
				$this->redirect(array('controller'=>'jogadores', 'action'=>'index'));
			}
			
			if($this->Game->save($this->data)){
				$this->Session->setFlash('Game cadastrado com sucesso!', 'msg-sucesso');
				$this->redirect(array('controller'=>'games', 'action'=>'index'));
			}
			
		}
		
	}
	
	/*
	 * Método ListarGames
	 *
	 */
	 function listarGames(){
		
		$games = $this->Game->find('list', array('fields' => array('Game.nome')));
		
	 	if($this->params['requested']){
			return $games;
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