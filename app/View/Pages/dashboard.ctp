

<div class="user-margin"></div>
<div class="container" style="min-height: 800px;">
	<div class="avatar">
	<!-- <img src="<?php echo $user->avatar_url; ?>"> -->
	</div>
	<div class="row">
		<div class="span12">
			<div class="user-left-side">
				
				<div class="panel-info1 content-box status-user-box">
					<h4>Wellison Souza</h4>
					<h5>Programador</h5>
					<label id="progresso-modulo">
						Exp: 10830/11000
					</label>
					
					<a class="btn btn-info ga-tracked" type="button" style="width: 80%" href="#" data-ga-category="dashboard" data-ga-action="criar-desafio" data-ga-label="">
						Ver missão diária
					</a>
				</div>
				
				<div class="content-box default-margin-half default-padding">
					<div style="clear: both; overflow: hidden;">
						<div style="float: left;">
							<h3>
							Ranking
							</h3>
						</div>
						<div style="float: left; margin-top: 25px; margin-left: 15px;">
							<a href="#"
								class="ga-tracked"
								data-ga-category="ranking"
								data-ga-action="detalhes"
								data-ga-label=""
								title="Ver detalhes do ranking">
								Ver ranking geral
							</a>
						
						</div>
					</div>
					<ul>
						<li>Homem Aranha</li>	
						<li>Super Homem</li>
						<li>Mulher Maravilha</li>
						<li>Batman</li>
						<li>Eu</li>
					</ul>
					
					
				</div>

				

				<div class="content-box default-margin-half default-padding">
					<div style="clear: both; overflow: hidden;">
						<div style="float: left;">
							<h3>
							Últimas Perguntas
							</h3>
						</div>
					</div>
					<ul>
						<li><a href="#">Pq o time de futebol é chamado flamengo?</a></li>
						<li><a href="#">Qual o jogador mais caro da histórica?</a></li>
						<li><a href="#">Com quantos atletas um jogo pode continuar?</a></li>
					</ul>
				</div>

				<div class="content-box default-margin-half default-padding">
					<div style="clear: both; overflow: hidden;">
						<div style="float: left;">
							<h3>
							Doações
							</h3>
						</div>						
					</div>
					
					Doar: 
					<input type="text" maxlength="5" name="bitcoins" value="1" style="width:55px" readonly="readonly" > BTC
					<?php
					//$login_url = $coinbase_auth->createAuthorizeUrl("user", "balance", "buttons");
					
					$botao = $coinbase->createButton("Sua doação para melhoria da plataforma", "1", "BTC",
						array(				           
				            "success_url" => "http://www.google.com"
				        )
						)->embedHtml;
					echo $botao; 
					?>
					
				</div>
			</div>
			<div class="content-box user-subject-status-box">
				<div style="margin: 20px;">
					<h3 style="text-align: center; color: #45a1de;">
					Minhas Conquistas<br>03/100
					</h3>

					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Artes" href="bitcoins">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Primeiro Acesso
							</h4>
							<?php echo $this->Html->image("conquista.png");?>
							<div class="points">
								<div>
									+ 25 pontos<br>
									+ 0,01 BTC
								</div>
								
							</div>
						</div>
					</a>

					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Artes" href="bitcoins">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Resposta do Dia
							</h4>
							<?php echo $this->Html->image("conquista.png");?>
							<div class="points">
								<div>
									+ 100 pontos<br>
									+ 0,1 BTC
								</div>
								
							</div>
						</div>
					</a>

					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Artes" href="bitcoins">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Usuário Popular
							</h4>
							<?php echo $this->Html->image("conquista.png");?>
							<div class="points">
								<div>
									+ 80 pontos<br>
									+ 0,08 BTC
								</div>
								
							</div>
						</div>
					</a>


																								
				</div>
			</div>

			<div class="content-box user-subject-status-box" style="margin-top:20px;">
				<div style="margin: 20px;">
					<h3 style="text-align: center; color: #45a1de;">
					Minhas Habilidades
					</h3>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Artes" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Esportes
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									10
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 88.0%;"></div>
									</div>
								</div>
								<strong>
								10
								</strong>
								
							</div>
						</div>
					</a>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Biologia" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Tecnologia
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									2
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 25%;"></div>
									</div>
								</div>
								<strong>
								0
								</strong>
								
							</div>
						</div>
					</a>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Química" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Saúde
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									1
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 60%;"></div>
									</div>
								</div>
								<strong>
								0
								</strong>
								
							</div>
						</div>
					</a>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Inglês" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Negócios
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									5
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 80%;"></div>
									</div>
								</div>
								<strong>
								0
								</strong>
								
							</div>
						</div>
					</a>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="Geografia" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Educação
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									8
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 30%;"></div>
									</div>
								</div>
								<strong>
								0
								</strong>
								
							</div>
						</div>
					</a>
					
					
					<a class="ga-tracked" data-ga-category="dashboard" data-ga-action="subject" data-ga-label="História" href="#">
						<div class="subject-status" data-toggle="tooltip">
							<h4 style="color: #2c3e50">
							Alimentação
							</h4>
							<div class="subject-image"></div>
							<div class="points">
								<div>
									Nível
									<strong>
									4
									</strong>
									<div class="progress progress-striped" style="margin-bottom: 5px; width: 90%">
										<div class="bar" style="width: 44%;"></div>
									</div>
								</div>
								<strong>
								0
								</strong>
								
							</div>
						</div>
					</a>
																				
				</div>
			</div>
		</div>
	</div>
</div>