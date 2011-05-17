<h1><b>Campeonatos</b></h1>
<br />
<br />
<a href="" class="botao" id="botao-cadastrar-campeonato">ADICIONAR NOVO CAMPEONATO</a>
<br />
<br />
<?php foreach($campeonatos as $campeonato){?>
<ul class="menu-content">
	<li style="width: 200px"><b>#<?php echo $campeonato['Campeonato']['horarioInicio']?></b> <?php echo $campeonato['Game']['nome']?></li>
	<li>R$ <?php echo number_format($campeonato['Campeonato']['valor'], 2, ',', '')?></li>
	<li class="action" style="color: #fff"><a href="">Alterar</a> / <div id="encerrar-campeonato"><a href="" id="<?php echo $campeonato['Campeonato']['id']?>">Encerrar</a></div></li>
	<div id="campeonato-box" class="extras">
	<br />
		<p>Começa: <?php echo $campeonato['Campeonato']['horarioInicio']?></p>
		<p>Numero de Vagas: <?php echo $campeonato['Tipo']['nome']?></p>
		<p>Vagas disponíveis: <?php echo $campeonato['Tipo']['quantidadeCompetidores'] - count($campeonato['Tabela'])?></p>
		<br />
		<div id="botao-inscricao-box"><a href="#" class="botao-2" id="<?php echo $campeonato['Campeonato']['id']?>">INSCREVA-SE</a></div> <a href="#" class="botao-2">INSCRITOS</a> <div id="tabela-visualizar-box"><a href="#" id="<?php echo $campeonato['Campeonato']['id']?>" class="botao-2 tabela-ver">VER TABELA</a></div>
	</div>
</ul>
<?php } ?>

