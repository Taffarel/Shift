<h1><b>Eventos</b></h1>

<br />
<br />
<a href="" class="botao">ADICIONAR NOVO EVENTO</a>
<br />
<br />
<?php foreach($eventos as $evento){?>
<ul class="menu-content">
	<li><?php echo $evento['Evento']['nome']?></li>
	<li class="action" style="color: #fff"><a href="">Alterar</a> / <a href="">Excluir</a></li>
	<div class="extras">
	<br />
		<p>Endereço: <?php echo $evento['Evento']['endereco']?></p>
		<p>Andar: <?php echo $evento['Evento']['andar']?> - Sala: <?php echo $evento['Evento']['numeroSala']?></p>
		<p>Do dia: <?php echo date('d/m/Y', strtotime($evento['Evento']['dataInicio']))?> à <?php echo  date('d/m/Y', strtotime($evento['Evento']['dataFim']))?></p>
	</div>
</ul>
<?php } ?>