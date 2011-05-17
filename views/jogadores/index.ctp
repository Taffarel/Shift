<h1><b>Jogadores</b></h1>

<br />
<br />
<a href="#" class="botao" id="botao-cadastrar-jogador">ADICIONAR NOVO JOGADOR</a>
<br />
<br />
<?php foreach($jogadores as $jogadore){?>
<ul class="menu-content">
	<li><?php echo $jogadore['Jogadore']['nome']?></li>
	<li><?php echo $jogadore['Jogadore']['email']?></li>
	<li class="action" style="color: #fff"><a href="">Alterar</a> / <a href="">Excluir</a></li>
	<div class="extras">
	<br />
		<p>Nickname: <?php echo $jogadore['Jogadore']['apelido']?></p>
		<p>Celular: <?php echo $jogadore['Jogadore']['ddd']?> - <?php echo $jogadore['Jogadore']['celular']?></p>
		<p>Sexo: <?php switch($jogadore['Jogadore']['sexo']){ case 1: echo 'Masculino'; break; case 2: echo 'Feminino'; break;}?></p>
	</div>
</ul>
<?php } ?>