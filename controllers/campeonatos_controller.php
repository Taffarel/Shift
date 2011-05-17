<?php
Class CampeonatosController extends AppController{
	
	var $name = 'Campeonatos';
	
	var $paginate = array('limit'=> 20, 
						  'order'=>array('Campeonato.horarioInicio'=> 'ASC'), 
						  'conditions'=>array('Campeonato.status'=>1));
	
	/*
	 * Método Index
	 * 
	 */
	function index(){
		
		$this->set('campeonatos', $this->paginate('Campeonato'));
		
	}
		
	/*
	 * Método NovoCadastro
	 * 
	 */
	function novoCadastro(){
	
		if(isset($this->data)){
			
			$this->data['Campeonato']['valor'] = preg_replace('/,/', '.', $this->data['Campeonato']['valor']);
			
			if($this->Campeonato->save($this->data)){
				$this->Session->setFlash('Campeonato cadastrado com sucesso!', 'msg-sucesso');
				$this->redirect(array('controller'=>'campeonatos', 'action'=>'index'));
			}
			
		}
		
	}
	
	/*
	 * Método Visualizar Campeonato
	 * 
	 */
	function visualizarCampeonato(){
		$campetonato = $this->Campeonato->find('all', array('limit'=> 7 , 'conditions'=>array('Campeonato.status' => 1)));
				
		if($this->params['requested']){
			return $campetonato;
		}
	}
	
	/*
	 * Método Json Campeonato
	 * @param ID
	 * 
	 */
	function jsonCampeonato($id){
		$this->autoRender = false;
		$campeonato = $this->Campeonato->find('first', array('conditions'=>array('Campeonato.id' => $id)));
		return json_encode($campeonato);
		
	}
	
	/*
	 * Método para vizualizar tabela
	 * $param ID Campetonato
	 * 
	 */
	function vizualizarTabela($id){
		
		$this->autoRender = false;
		
		$tabela = $this->Campeonato->Tabela->find('all', array('conditions' => array('Tabela.campeonato_id' => $id)));
		
		return json_encode($tabela);
		
	}
	
	/*
	 * Método para Avançar tabela
	 * @param ID
	 * 
	 */
	function avancarTabela2($id, $idCampeonato){
		$this->Campeonato->Tabela->updateAll(array('Tabela.posicaoCampeonato1' => 2), array('Tabela.jogadore_id' => $id, 'Tabela.campeonato_id' => $idCampeonato));
	}
	
	/*
	 * Método para Avançar tabela3
	 * @param ID
	 * 
	 */
	function avancarTabela3($id, $idCampeonato){
		$this->Campeonato->Tabela->updateAll(array('Tabela.posicaoCampeonato2' => 3), array('Tabela.jogadore_id' => $id, 'Tabela.campeonato_id' => $idCampeonato));
	}
	
	/*
	 * Método para Avançar tabela4
	 * @param ID
	 * 
	 */
	function avancarTabela4($id, $idCampeonato){
		$this->Campeonato->Tabela->updateAll(array('Tabela.posicaoCampeonato3' => 3), array('Tabela.jogadore_id' => $id, 'Tabela.campeonato_id' => $idCampeonato));
	}
	
	/*
	 * Método para finalizar a inscrição
	 * @param ID Campetonato
	 * @param ID Jogador 
	 */
	function finalizarInscricao($idCampeonato, $idJogador){
		
		$jogadore[] = null;
				
		$this->autoRender = false;
		
		$ultimaPosicaoTabela = $this->Campeonato->Tabela->find('all', array('conditions' => array('Tabela.campeonato_id' => $idCampeonato)));
		$vagasQuantidade = $this->Campeonato->find('first', array('conditions' => array('Campeonato.id' => $idCampeonato)));
		$temRegistro = $this->Campeonato->Tabela->find('all', array('conditions'=> array('Tabela.campeonato_id' => $idCampeonato)));
		
		
		foreach($temRegistro as $k){
			$jogadore[] = $k['Jogadore']['id'];

		}
					
		if(!in_array($idJogador, $jogadore)){
			
			if(count($ultimaPosicaoTabela) == $vagasQuantidade['Tipo']['quantidadeCompetidores']){
				
				return 3;
				//Error 3 = Campeonato Full
				
			}else{
				
				$data['Tabela']['campeonato_id'] = $idCampeonato;
				$data['Tabela']['jogadore_id'] = $idJogador;
				$data['Tabela']['posicaoTabela'] = count($ultimaPosicaoTabela)+1;
				
				if($this->Campeonato->Tabela->save($data)){
					
					return 1;
					//Error 1 = OK 'Check'
				}else{
					
					return 2;
					//Error 2 = Erro Sistema 'Check'
				}
			}
			
		}else{
			
			return 4;
			
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
		
		$this->autoRender = false;
		
		if($this->Campeonato->updateAll(array('Campeonato.status' => '0'), array('Campeonato.id' => $id))){
			return 1;
		}else{
			return 2;
		}
		
	}
}