<section id="header-section">
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="img/logo.png">
					<div class="header-subtitle">
						<h1>
							Plataforma de perguntas e respostas que pode lhe render Bitcoins
						</h1>
					</div>
					<div>
						<a href="conquista"
							class="btn-home btn-experimente ga-tracked"
							data-ga-category="webpage-home"
							data-ga-action="experimente"
							data-ga-label=""
							title="Experimente o QuoraCoin">
							Quero ganhar Bitcoins!
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="infog-section" style="margin-top: -10px;">
	<div id="infog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="infog-title">
						<h2>O que é o QuoraCoin?</h2>
					</div>
					<div class="infog-subtitle">
						<p>
							Diferente de um simples sistema de perguntas e respostas, o Quora Coin é uma plataforma que visa engajar usuários através do rankiamento e premiação para as melhores usuários.
						</p>
					</div>
					<div class="infog">
						<img src="img/quoracoin.png">
					</div>
					<div class="infog-itens">
						<div id="professor" class="item-infografico">
							Questionador
						</div>
						<div id="aluno" class="item-infografico">
							Respondedor
						</div>
						<div id="item1" onmouseover="exibeTexto(1);" onmouseout="ocultaTexto(1);" class="item-infografico">
							1.QuoraCoin
						</div>
						<div id="item2" onmouseover="exibeTexto(2);" onmouseout="ocultaTexto(2);" class="item-infografico">
							2.Desafios
						</div>
						<div id="item3" onmouseover="exibeTexto(3);" onmouseout="ocultaTexto(3);" class="item-infografico">
							3.Bitcoins
						</div>
						<div id="item4" onmouseover="exibeTexto(4);" onmouseout="ocultaTexto(4);" class="item-infografico">
							4.Cooperação
						</div>
						<div id="item5" onmouseover="exibeTexto(5);" onmouseout="ocultaTexto(5);" class="item-infografico">
							5.Relatórios
						</div>
						<div id="texto1" class="texto-infografico">
							<p>1. Na primeira etapa <b>o questionador</b> insere sua dúvida na plataforma do QuoraCoin .</p>
							<div class="arrow-right"></div>
						</div>
						<div id="texto2" class="texto-infografico">
							<p>2. Nesta etapa, a partir das questões/dúvidas cadastradas os desáfios vão sendo lançados.</p>
							<div class="arrow-left"></div>
						</div>
						<div id="texto3" class="texto-infografico">
							<p>3. Para cada desafio completado, o Respondedor acumula conquistas que podem sem convertidas em BitCoins.</p>
							<div class="arrow-top"></div>
						</div>
						<div id="texto4" class="texto-infografico">
							<p>4. Esses Bitcoins podem ser trocados entre os Questionadores e o Respondedores.</p>
							<div class="arrow-top"></div>
						</div>
						<div id="texto5" class="texto-infografico">
							<p>5. O QuoraCoin disponibiliza um relatório que contém os melhores Respondedor de cada categoria</b>.</p>
							<div class="arrow-top"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
			var currentId = 0;
			function exibeTexto(id) {
				$('#texto'+id).fadeIn({
					duration: 150
				});
			}
			function ocultaTexto(id) {
				$('#texto'+id).fadeOut({
					duration: 150
				});
			}
</script>

		