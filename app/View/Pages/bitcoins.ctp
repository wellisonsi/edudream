<div class="container default-margin">
	<div class="row">
		<div class="span12 content-box">
			
			<div class="default-padding-2">
				<div>
					<?php
						if($this->Session->check('coinbase_user')){
							$coinbase = $this->Session->read('coinbase_user');
							echo "<h2>Minha Carteira Coinbase</h2>";
							echo "<img src='".$coinbase->getUser()->avatar_url."' style='float:left'/>";
							echo "Nome:" . $coinbase->getUser()->name . "<br>";
							echo "E-mail:" . $coinbase->getUser()->email . "<br>";
							echo "Saldo:" . $coinbase->getBalance() . "BTC" ."<br><br><br>";
						}
					?>
				</div>
				<h2>
				Meus Ganhos
				</h2>
				<?php
					$login_url = $coinbase_auth->createAuthorizeUrl("user", "balance", "buttons","transfer","request");
				if($this->Session->read("tokens")==null){
				?>
				<a href="<?php echo $login_url; ?>" class="btn btn-success default-margin-bottom">
					Conectar Coinbase para receber
				</a>
				<?php
				}
				?>
				<p style="font-style: italic">
					Abaixo a lista dos ganhos obtidos.
				</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Valor</th>
							<th>Tipo de Ganho</th>
							<th>Data</th>
							<th>Obs</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>
								0,01 BTC
							</td>
							<td>
								Conquista
							</td>
							<td>
								27/02/2015
							</td>
							<td>
								<span class="little-message">
									Primeiro Acesso
								</span>
							</td>
							<td>
								<?php if($this->Session->check('coinbase_user')): ?>
								<a href="recebimento/0.01">
									Receber
								</a>
								<br>
								<?php endif; ?>
								<a href="#">
									Doar
								</a>
							</td>
						</tr>
						<tr>
							<td>
								0,1 BTC
							</td>
							<td>
								Conquista
							</td>
							<td>
								27/02/2015
							</td>
							<td>
								<span class="little-message">
									Resposta do Dia
								</span>
							</td>
							<td>
								<?php if($this->Session->check('coinbase_user')): ?>
								<a href="recebimento/0.1">
									Receber
								</a>
								<br>
								<?php endif; ?>
								<a href="#">
									Doar
								</a>
							</td>
						</tr>
						<tr>
							<td>
								0,08 BTC
							</td>
							<td>
								Conquista
							</td>
							<td>
								27/02/2015
							</td>
							<td>
								<span class="little-message">
									Usuário Popular
								</span>
							</td>
							<td>
								<?php if($this->Session->check('coinbase_user')): ?>
								<a href="recebimento/0.8">
									Receber
								</a>
								<br>
								<?php endif; ?>
								<a href="#">
									Doar
								</a>
							</td>
						</tr>
						<tr>
							<td>
								0,02 BTC
							</td>
							<td>
								Doação
							</td>
							<td>
								27/02/2015
							</td>
							<td>
								<span class="little-message">
									Doado por misterx
								</span>
							</td>
							<td>
								<?php if($this->Session->check('coinbase_user')): ?>
								<a href="recebimento/0.02">
									Receber
								</a>
								<br>
								<?php endif; ?>
								<a href="#">
									Doar
								</a>
							</td>
						</tr>
						
					</tbody>
				</table>
				
				
				
			</div>
		</div>
	</div>
</div>