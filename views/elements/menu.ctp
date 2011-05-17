				<ul id="menu">
					<li>
						<a href="<?php echo $this->Html->url(array('controller'=>'pages', 'action'=>'display', 'home'))?>">Pagina Inicial</a>
					</li>
					
					<li id="games-menu">
						<a href="<?php echo $this->Html->url(array('controller'=>'games', 'action'=>'index'))?>">Games</a>
					</li>

					<li id="jogadores-menu">
						<a href="<?php echo $this->Html->url(array('controller'=>'jogadores', 'action'=>'index'))?>" >Jogadores</a>
					</li>
					
					<li id="campeonatos-menu">
						<a href="<?php echo $this->Html->url(array('controller'=>'campeonatos', 'action'=>'index'))?>">Campeonatos</a>
					</li>
					
					<li id="eventos-menu">
						<a href="<?php echo $this->Html->url(array('controller'=>'eventos', 'action'=>'index'))?>">Eventos</a>
					</li>
					
					<li id="admin-menu">
						<a href="#">Admin</a>
						<ul id="admin-menu-2" class="sub-menu">
							<li><a href="#">Novo Cadastro</a></li>
							<li><a href="#">Visualizar Cadastro</a></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'usuarios', 'action'=>'logout'))?>">Logout</a></li>
						</ul>
					</li>

				</ul>