<?php echo $this->Html->doctype()?>
<html>
<head>
<title>Shift 2.0</title>
<?php echo $this->Html->css(array('reset', 'shift'))?>
<?php echo $this->Html->script(array('jquery', 'validarFormulario', 'jquery.funcoes'))?>
<?php echo $this->Html->charset()?>
<script type="text/javascript">
		$(document).ready(function(){
		
			$("#botao-cadastrar-jogador").click(function(){
				$("#cover").fadeIn();
				$("#cadastro-jogadores").fadeIn();
				return false;
				
			});
			
			$("#botao-cadastrar-game").click(function(){
				$("#cover").fadeIn();
				$("#cadastro-games").fadeIn();
				return false;
				
			});
			
			$("#botao-cadastrar-campeonato").click(function(){
				$("#cover").fadeIn();
				$("#cadastro-campeonatos").fadeIn();
				return false;
				
			});

			//Encerrar Campeonato
			$("#encerrar-campeonato a").click(function(){
				var id = $(this).attr("id");

				$.ajax({
					url: '<?php echo $this->Html->url('/campeonatos/excluirCadastro/')?>' + id,
					dataType: 'html',
					success: function(data){
						if(data == 1){
							$("#msg-box").fadeIn();
							$("#msg-box p").html('Campeonato encerrado com sucesso!');

							location.reload();
						}	
						
					}
				});
			});


			//Visualizar Tabela
			$("#campeonato-box #tabela-visualizar-box a").click(function(){
				$("#cover").fadeIn();
				$(".tabela-campeonato").fadeIn();

				var idCampeonato = $(this).attr("id");
				
				$.ajax({
					url: '<?php echo $this->Html->url('/campeonatos/vizualizarTabela/')?>' + idCampeonato,
					dataType: 'json',
					success: function(data){

						$(".tabela-campeonato h1 b").html(data.Game);

						$.each(data, function(key, val){

							if(val.Tabela.posicaoCampeonato == 1){

								if(val.Tabela.posicaoTabela == 1){
									$(".tabela-impar-1 #1").html(val.Jogadore.nome);
									$(".tabela-impar-1 #1").click(function(){

										$(".tabela-impar-1 #3").empty();

										$(".tabela-impar-2 #impar-2-1").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-1").click(function(){

											$(".tabela-impar-2 #impar-2-3").empty();
											
											$(".tabela-impar-3 #impar-3-1").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-1").click(function(){

												$(".tabela-impar-3 #impar-3-3").empty();
												
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);
											});//CLICK3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 1

								if(val.Tabela.posicaoTabela == 2){
									$(".tabela-par-1 #2").html(val.Jogadore.nome);

									$(".tabela-par-1 #2").click(function(){

										$(".tabela-par-1 #4").empty();

										$(".tabela-par-2 #par-2-2").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-2").click(function(){

											$(".tabela-par-2 #par-2-4").empty();
											
											$(".tabela-par-3 #par-3-2").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-2").click(function(){

												$(".tabela-par-3 #impar-3-4").empty();
												
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);
											});//CLICK3
											
										})//CLICK2
										
									});//CLICK 1
									
								}//FIM IF 2

								if(val.Tabela.posicaoTabela == 3){
									$(".tabela-impar-1 #3").html(val.Jogadore.nome);
									$(".tabela-impar-1 #3").click(function(){

										$(".tabela-impar-1 #1").empty();
										
										$(".tabela-impar-2 #impar-2-1").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-1").click(function(){

											$(".tabela-impar-2 #impar-2-3").empty();
											
											$(".tabela-impar-3 #impar-3-1").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-1").click(function(){
												$(".tabela-impar-3 #impar-2-3").empty();
												
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);
												
											})//CLICK3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 3

								if(val.Tabela.posicaoTabela == 4){
									$(".tabela-par-1 #4").html(val.Jogadore.nome);

									$(".tabela-par-1 #4").click(function(){

										$(".tabela-par-1 #2").empty();
										
										$(".tabela-par-2 #par-2-2").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-2").click(function(){

											$(".tabela-par-2 #par-2-4").empty();
											
											$(".tabela-par-3 #par-3-2").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-2").click(function(){
												$(".tabela-par-3 #par-2-4").empty();
												
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);
												
											})//CLICK3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 4

								if(val.Tabela.posicaoTabela == 5){
									$(".tabela-impar-1 #5").html(val.Jogadore.nome);
									$(".tabela-impar-1 #5").click(function(){

										$(".tabela-impar-1 #7").empty();
										
										$(".tabela-impar-2 #impar-2-3").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-3").click(function(){

											$(".tabela-impar-2 #impar-2-1").empty();
											
											$(".tabela-impar-3 #impar-3-1").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-1").click(function(){

												$(".tabela-impar-3 #impar-3-3").empty();

												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//CLICK 3
											
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 5

								if(val.Tabela.posicaoTabela == 6){
									$(".tabela-par-1 #6").html(val.Jogadore.nome);

									$(".tabela-par-1 #6").click(function(){

										$(".tabela-par-1 #8").empty();
										
										$(".tabela-par-2 #par-2-4").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-4").click(function(){

											$(".tabela-par-2 #par-2-2").empty();
											
											$(".tabela-par-3 #par-3-2").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-2").click(function(){

												$(".tabela-par-3 #par-3-4").empty();

												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//CLICK 3
											
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 6

								if(val.Tabela.posicaoTabela == 7){
									$(".tabela-impar-1 #7").html(val.Jogadore.nome);
									$(".tabela-impar-1 #7").click(function(){
										
										$(".tabela-impar-1 #5").empty();
										
										$(".tabela-impar-2 #impar-2-3").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-3").click(function(){

											$(".tabela-impar-2 #impar-2-1").empty();
											$(".tabela-impar-3 #impar-3-1").html(val.Jogadore.nome);
											
											$(".tabela-impar-3 #impar-3-1").click(function(){

												$(".tabela-impar-3 #impar-3-3").empty();

												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//CLICK 3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 7

								if(val.Tabela.posicaoTabela == 8){
									$(".tabela-par-1 #8").html(val.Jogadore.nome);

									$(".tabela-par-1 #8").click(function(){
										
										$(".tabela-par-1 #6").empty();
										
										$(".tabela-par-2 #par-2-4").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-4").click(function(){

											$(".tabela-par-2 #par-2-2").empty();
											$(".tabela-par-3 #par-3-2").html(val.Jogadore.nome);
											
											$(".tabela-par-3 #par-3-2").click(function(){

												$(".tabela-par-3 #par-3-4").empty();

												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//CLICK 3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 8

								if(val.Tabela.posicaoTabela == 9){
									$(".tabela-impar-1 #9").html(val.Jogadore.nome);
									$(".tabela-impar-1 #9").click(function(){
										
										$(".tabela-impar-1 #11").empty();
										
										$(".tabela-impar-2 #impar-2-5").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-5").click(function(){
											
											$(".tabela-impar-2 #impar-2-7").empty();
											
											$(".tabela-impar-3 #impar-3-3").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-3").click(function(){

												$(".tabela-impar-3 #impar-3-1").empty();
												
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//Click3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 9

								if(val.Tabela.posicaoTabela == 10){
									$(".tabela-par-1 #10").html(val.Jogadore.nome);

										$(".tabela-par-1 #10").click(function(){
										
										$(".tabela-par-1 #12").empty();
										
										$(".tabela-par-2 #par-2-6").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-6").click(function(){
											
											$(".tabela-par-2 #par-2-8").empty();
											
											$(".tabela-par-3 #par-3-4").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-4").click(function(){

												$(".tabela-par-3 #par-3-2").empty();
												
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//Click3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 10

								if(val.Tabela.posicaoTabela == 11){
									$(".tabela-impar-1 #11").html(val.Jogadore.nome);
									$(".tabela-impar-1 #11").click(function(){
										
										$(".tabela-impar-1 #9").empty();
										
										$(".tabela-impar-2 #impar-2-5").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-5").click(function(){

											$(".tabela-impar-2 #impar-2-7").empty();
											
											$(".tabela-impar-3 #impar-3-3").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-3").click(function(){

												$(".tabela-impar-3 #impar-3-1").empty();
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//click3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 11

								if(val.Tabela.posicaoTabela == 12){
									$(".tabela-par-1 #12").html(val.Jogadore.nome);

										$(".tabela-par-1 #12").click(function(){
										
										$(".tabela-par-1 #10").empty();
										
										$(".tabela-par-2 #par-2-6").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-6").click(function(){

											$(".tabela-par-2 #par-2-8").empty();
											
											$(".tabela-par-3 #par-3-4").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-4").click(function(){

												$(".tabela-par-3 #par-3-2").empty();
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//click3
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 12

								if(val.Tabela.posicaoTabela == 13){
									$(".tabela-impar-1 #13").html(val.Jogadore.nome);
									$(".tabela-impar-1 #13").click(function(){
										
										$(".tabela-impar-1 #15").empty();
										
										$(".tabela-impar-2 #impar-2-7").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-7").click(function(){

											$(".tabela-impar-2 #impar-2-5").empty();

											$(".tabela-impar-3 #impar-3-3").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-3").click(function(){

												$(".tabela-impar-3 #impar-3-1").empty();
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//click3

											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 13

								if(val.Tabela.posicaoTabela == 14){
									$(".tabela-par-1 #14").html(val.Jogadore.nome);

										$(".tabela-par-1 #14").click(function(){
										
										$(".tabela-par-1 #16").empty();
										
										$(".tabela-par-2 #par-2-8").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-8").click(function(){

											$(".tabela-par-2 #par-2-6").empty();

											$(".tabela-par-3 #par-3-4").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-4").click(function(){

												$(".tabela-par-3 #par-3-2").empty();
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//click3

											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 14

								if(val.Tabela.posicaoTabela == 15){
									$(".tabela-impar-1 #15").html(val.Jogadore.nome);
									$(".tabela-impar-1 #15").click(function(){
										
										$(".tabela-impar-1 #13").empty();
										
										$(".tabela-impar-2 #impar-2-7").html(val.Jogadore.nome);
										$(".tabela-impar-2 #impar-2-7").click(function(){

											$(".tabela-impar-2 #impar-2-5").empty();

											$(".tabela-impar-3 #impar-3-3").html(val.Jogadore.nome);
											$(".tabela-impar-3 #impar-3-3").click(function(){

												$(".tabela-impar-3 #impar-3-1").empty();
												$(".tabela-impar-4 #impar-4-1").html(val.Jogadore.nome);

											})//click3
											
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 15

								if(val.Tabela.posicaoTabela == 16){
									$(".tabela-par-1 #16").html(val.Jogadore.nome);

									$(".tabela-par-1 #16").click(function(){
										
										$(".tabela-par-1 #14").empty();
										
										$(".tabela-par-2 #par-2-8").html(val.Jogadore.nome);
										$(".tabela-par-2 #par-2-8").click(function(){

											$(".tabela-par-2 #par-2-6").empty();

											$(".tabela-par-3 #par-3-4").html(val.Jogadore.nome);
											$(".tabela-par-3 #par-3-4").click(function(){

												$(".tabela-par-3 #par-3-2").empty();
												$(".tabela-par-4 #par-4-2").html(val.Jogadore.nome);

											})//click3
											
											
										})//CLICK2
										
									});//CLICK 1
								}//FIM IF 16
								
							}//FIM IF POSICAOCAMPEONATO 1

							
						});//FIM EACH

						
					}//SUCESS1
				
				});//AJAX1
				
			});//CLICK

			// Botao Inscrever-se
			$("#campeonato-box #botao-inscricao-box a").click(function(){
				$("#cover").fadeIn();
				$("#caixa-inscricao").fadeIn();

				var idCampeonato = $(this).attr("id");
				var idJogador;
				
				$.ajax({
					url: '<?php echo $this->Html->url('/campeonatos/jsonCampeonato/')?>' + idCampeonato,
					dataType: 'json',
					success: function(data){
						$("#caixa-inscricao ul .id").html(data.Campeonato.id);
						$("#caixa-inscricao ul .horario b").html('#' + data.Campeonato.horarioInicio);
						$("#caixa-inscricao ul .game").html('Game: ' + data.Game.nome);
						$("#caixa-inscricao ul .vagas").html('Vagas: ' + data.Tipo.quantidadeCompetidores);
						var quantosJogadores =  data.Tabela;
						var vagasDisponiveis = (data.Tipo.quantidadeCompetidores - quantosJogadores.length);
						$("#caixa-inscricao ul .vagas-disponiveis").html('Vagas disponíveis: ' + vagasDisponiveis);

						$("#jogador-nome").keyup(function(){
							$.ajax({
								type: 'POST',
								  url: '<?php echo $this->Html->url('/jogadores/ajaxName/')?>' + $("#jogador-nome").val(),
								  dataType: 'html',
								  success: function(data){
									  if(data.length > 0) {
						                   $('#suggestions').show();
						                   $('#autoSuggestionsList').html(data);

						                   $("#autoSuggestionsList li").click(function(){
						   						var idJogador2 = $(this).attr("id");
						   						var data = $(this).attr("data");
						   						$("#jogador-nome").val(idJogador2);
						   						$("#jogador-id").val(data);
						   						$('#suggestions').hide();
						   						idJogador = $("#jogador-id").val();

						   					});
						                 	
						             }else{
						            	 $('#suggestions').hide();
						             }//FIM IF
						             
									 $("#finalizar-inscricao").click(function(){
											$.ajax({
												url: '<?php echo $this->Html->url('/campeonatos/finalizarInscricao/')?>' + idCampeonato + '/' + idJogador ,
												success: function(data){

													if(data == 1){
														$("#caixa-inscricao").hide();		
														$("#msg-box").fadeIn();
														$("#msg-box p").html('Inscrição feita com sucesso!');

														$("#jogador-nome").val('');
														$("#jogador-id").val('');

														idCampeonato = null;
														idJogador = null;

														location.reload();
														
													}else if(data == 2){
														$("#caixa-inscricao").hide();		
														$("#msg-box").fadeIn();
														$("#msg-box p").html('Inscrição não foi feita! Procura O Taffa');

														$("#jogador-nome").val('');
														$("#jogador-id").val('');

														idCampeonato = null;
														idJogador = null;

														location.reload();

													}else if(data == 3){
														$("#caixa-inscricao").hide();		
														$("#msg-box").fadeIn();
														$("#msg-box p").html('Sem vagas. =( ');

														$("#jogador-nome").val('');
														$("#jogador-id").val('');

														idCampeonato = null;
														idJogador = null;

														location.reload();
														
													}else if(data == 4){
														$("#caixa-inscricao").hide();		
														$("#msg-box").fadeIn();
														$("#msg-box p").html('Ops, você já está cadastrado. xD ');

														$("#jogador-nome").val('');
														$("#jogador-id").val('');

														idCampeonato = null;
														idJogador = null;

														location.reload();
														
													}//FIM IF
													
												}//FIM Succes 3
											
											});//FIM 3 AJAX
											
									 });//FIM Click 2
							             
								  }//FIM 2 Success
							  
							});//FIM 2 AJAX
							
						});//Fim Keyup
						
					}//Fim 1 Success
				
				});//FIM 1 AJAX
				
			});//FIM Click
			
		});//FIM Document
		</script>
</head>

<body>

	<div id="wrap">

		<div id="header">
			<div id="header-caixa">
				<h1>
					<b>Shift</b> - Gerenciador de Campeonatos
				</h1>
				<?php if($this->Session->read('Usuario.logado') == 1){?>
				<?php echo $this->element('menu')?>
				<?php } ?>

			</div>
		</div>
		<!-- Elementos -->
		<div id="cover"></div>
		
		<div id="msg-box" class="msg msg-successo">
			<span class="x">X</span>
    		<p></p>
		</div>
		
		<div id="caixa-inscricao" class="msg-box">
			<span class="x">X</span>
			<ul class="caixa-inscricao-box">
				<li class="id" style="display: none"></li>
				<li class="horario"><b></b>
				</li>
				<li class="game"></li>
				<li class="vagas"></li>
				<li class="vagas-disponiveis"></li>
				<br />
				<div class="linha"></div>
				<br />
				<?php echo $this->Form->hidden('jogador-id', array('id'=>'jogador-id'))?>
				<li>Nome do Jogador: <?php echo $this->Form->input('jogador-nome', array('label'=>'', 'id'=>'jogador-nome'))?>
				</li>
				<div class="suggestionsBox" id="suggestions" style="display: none;">
					<div class="suggestionList" id="autoSuggestionsList"></div>
				</div>
				<br />
				<br />
				<br />
				<a href="#" class="botao" id="finalizar-inscricao">FINALIZAR</a>
			</ul>
		</div>
		
		<div class="tabela-campeonato">
			<span class="x">X</span>
						
			<div id="tabela-impar">
				<ul class="tabela-impar-1">
					<li id="1" class="botao"></li>
					<li id="3" class="botao"></li>
					<li id="5" class="botao"></li>
					<li id="7" class="botao"></li>
					<li id="9" class="botao"></li>
					<li id="11" class="botao"></li>
					<li id="13" class="botao"></li>
					<li id="15" class="botao"></li>
				</ul>
				
				<ul class="tabela-impar-2">
					<li id="impar-2-1" class="botao"></li>
					<li id="impar-2-3" class="botao"></li>
					<li id="impar-2-5" class="botao"></li>
					<li id="impar-2-7" class="botao"></li>
				</ul>
				
				<ul class="tabela-impar-3">
					<li id="impar-3-1" class="botao"></li>
					<li id="impar-3-3" class="botao"></li>
				</ul>
				
				<ul class="tabela-impar-4">
					<li id="impar-4-1" class="botao"></li>
				</ul>
			</div>
			
			<div id="tabela-par">
				
				<ul class="tabela-par-4">
					<li id="par-4-2" class="botao"></li>
				</ul>
				
				<ul class="tabela-par-3">
					<li id="par-3-2" class="botao"></li>
					<li id="par-3-4" class="botao"></li>
				</ul>
				
				<ul class="tabela-par-2">
					<li id="par-2-2" class="botao"></li>
					<li id="par-2-4" class="botao"></li>
					<li id="par-2-6" class="botao"></li>
					<li id="par-2-8" class="botao"></li>
				</ul>
				
				<ul class="tabela-par-1">
					<li id="2" class="botao"></li>
					<li id="4" class="botao"></li>
					<li id="6" class="botao"></li>
					<li id="8" class="botao"></li>
					<li id="10" class="botao"></li>
					<li id="12" class="botao"></li>
					<li id="14" class="botao"></li>
					<li id="16" class="botao"></li>
				</ul>
				
			</div>
			
			
		</div>
		
		<div id="cadastro-jogadores" class="box-cadastro">
			<span class="x">X</span>
			<h1><b>CADASTRO DE JOGADORES</b></h1>
			<br />
			<ul class="painel-cadastro">
			<?php echo $this->Form->create('Jogadore', array('id'=>'form-cadastro-jogador', 'action'=>'novoCadastro'))?>
				<li>Nome: <?php echo $this->Form->input('nome', array('label'=>'', 'id'=>'nome-cadastro-jogador'))?></li>
				<li>E-mail: <?php echo $this->Form->input('email', array('label'=>'', 'id'=>'email-cadastro-jogador'))?></li>
				<li>Nickname: <?php echo $this->Form->input('apelido', array('label'=>'', 'id'=>'apelido-cadastro-jogador'))?></li>
				<li>Idade: <?php echo $this->Form->input('idade', array('label'=>'', 'id'=>'idade-cadastro-jogador'))?></li>
				<li>Sexo: <?php echo $this->Form->input('sexo', array('label'=>'', 'id'=>'sexo-cadastro-jogador', 'type'=>'select', 'options'=>array('1'=>'Masculino', '2'=>'Feminino')))?></li>
			</ul>
			
			<br />
			<?php echo $this->Form->submit('FINALIZAR CADASTRO', array('id'=>'finaliza-cadastro-jogador', 'class'=>'botao'));?>
			<?php echo $this->Form->end()?>
			<br />
		</div>
		
		<div id="cadastro-games" class="box-cadastro">
			<span class="x">X</span>
			<h1><b>CADASTRO DE GAMES</b></h1>
			<br />
			<ul class="painel-cadastro">
			<?php echo $this->Form->create('Game', array('id'=>'form-cadastro-jogador', 'action'=>'novoCadastro'))?>
				<li>Nome: <?php echo $this->Form->input('nome', array('label'=>'', 'id'=>'nome-cadastro-jogador'))?></li>
				<li>Descrição: <?php echo $this->Form->input('descricao', array('label'=>'', 'id'=>'email-cadastro-jogador'))?></li>
			</ul>
			
			<br />
			<?php echo $this->Form->submit('FINALIZAR CADASTRO', array('id'=>'finaliza-cadastro-jogador', 'class'=>'botao'));?>
			<?php echo $this->Form->end()?>
			<br />
		</div>
		
		<div id="cadastro-campeonatos" class="box-cadastro">
			<span class="x">X</span>
			<h1><b>CADASTRO DE CAMPEONATO</b></h1>
			<br />
			<ul class="painel-cadastro">
			<?php $gamesLista = $this->requestAction(array('controller'=>'games', 'action'=>'listarGames'))?>
			<?php echo $this->Form->create('Campeonato', array('id'=>'form-cadastro-jogador', 'action'=>'novoCadastro'))?>
				<li>Game: <?php echo $this->Form->input('game_id', array('label'=>'', 'options'=> $gamesLista, 'type'=>'select'))?></li>
				<li>Tipo: <?php echo $this->Form->input('tipo_id', array('label'=>'', 'options'=>array('1'=>'16')))?></li>
				<li>Hora: <?php echo $this->Form->input('horarioInicio', array('label'=>''))?></li>
				<li>Valor R$: <?php echo $this->Form->input('valor', array('label'=>'', 'id'=>'email-cadastro-jogador'))?></li>
			</ul>
			
			<br />
			<?php echo $this->Form->submit('FINALIZAR CADASTRO', array('id'=>'finaliza-cadastro-jogador', 'class'=>'botao'));?>
			<?php echo $this->Form->end()?>
			<br />
		</div>
		
		<!-- FIM DE ELEMENTOS -->
		
		
		<?php echo $this->Session->flash(); ?>
		<div id="content">

			<div id="caixa-content">
				<?php if($this->Session->read('Usuario.logado') == 1){?>
				<div id="side">
					<div id="proximos-campeonatos" class="box-side">
						<h3>Próximos Campeonatos</h3>
						<?php $campeonatos = $this->requestAction(array('controller'=>'campeonatos', 'action'=>'visualizarCampeonato'))?>
						<?php foreach($campeonatos as $campeonato){?>
						<ul id="campeonato-box" class="proximo-campeonato-side">
							<li><b>#<?php echo $campeonato['Campeonato']['horarioInicio']?>
							</b>
							</li>
							<li>Game: <?php echo $campeonato['Game']['nome']?>
							</li>
							<li>Vagas: <?php echo $campeonato['Tipo']['nome']?>
							</li>
							<li>Vagas disponíveis: <?php echo $campeonato['Tipo']['quantidadeCompetidores'] - count($campeonato['Tabela'])?>
							</li>
							<br />
							<div id="botao-inscricao-box"><a href="#" id="<?php echo $campeonato['Campeonato']['id']?>">INSCREVA-SE</a></div>
						</ul>
						<?php } ?>
					</div>
				</div>
				<?php } ?>

				<div id="conteudo">
					<?php echo $content_for_layout; ?>
				</div>
			</div>
		</div>

	</div>
</body>
</html>