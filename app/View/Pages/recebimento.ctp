<div class="container">
	<div class="content-panel content-box padding-container">
		<div class="row content-content">
			<div class="span6">
				<div class="progress-bar">
					
				</div>
			</div>
		</div>
		<div class="content-core"><input type="hidden" id="contentType" value="lesson-end">
		<div class="lesson-end">
			<div class="row">
				<div class="span12">
					<h3 style="text-align: center;">Sua solicitação de pagamento foi efetuada.</h3>
					<h5 style="text-align: center;">
					
					Aguarde e em breve os BTCS serão depositados.
					</h5>
					<h5 style="text-align: center;">
					<div style="display: inline-block; position: relative; height: 200px;">
						<?php echo $this->Html->image("bitcoin.png");?>
						<div style="position: absolute; top: 88%; width: 100%;">
							<strong>
							
							Valor solicitado
							</strong>
							
							<br>
							+ <?php echo $valor;?> BTC's
							
							<a class="btn btn-info ga-tracked" type="button" style="width: 150px" href="../bitcoins" data-ga-category="dashboard" data-ga-action="" data-ga-label="">
						Continuar
					</a>
					<br>
						</div>
					</div>
					</h5>
				</div>
			</div>
		</div>
	</div>
</div>
</div>