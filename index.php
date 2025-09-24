
<script type="text/javascript">
	var custo = "0";
	var descricao_chk = "Checker AMAZON US";
	var audio = new Audio('live.mp3');
</script>
<!DOCTYPE html>
<html>
<head>
	<title>CHECKER Viking Staff | AMAZON US</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style type="text/css">
		body {
			background: linear-gradient(135deg, #0c0e1a 0%, #1a1d2e 50%, #0c0e1a 100%);
			color: #e0e0e0;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			min-height: 100vh;
		}
		
		.nav-tabs{
			background: linear-gradient(135deg, #1e2235 0%, #2a2f4a 100%);
			border-radius: 8px;
			border: 1px solid #3a3f5c;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
		}
		
		.nav-tabs li a{
			color: #b8c1ec;
			font-weight: 500;
			transition: all 0.3s ease;
		}
		
		.nav-tabs li a:hover{
			color: #e0e0e0;
			background: rgba(120, 119, 198, 0.1) !important;
		}
		
		.nav-tabs > li > a.active{
			background: linear-gradient(135deg, #7877c6 0%, #5a58b9 100%) !important;
			color: #ffffff;
			border-radius: 6px;
			border: none;
		}
		
		.tab-content{
			background: linear-gradient(135deg, #1e2235 0%, #2a2f4a 100%);
			color: #e0e0e0;
			padding: 20px;
			border-radius: 8px;
			border: 1px solid #3a3f5c;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
		}
		
		.container.text-white.rounded.shadow {
			background: linear-gradient(135deg, #1e2235 0%, #2a2f4a 100%);
			border: 1px solid #3a3f5c;
			box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
		}
		
		textarea, .cookie-input {
			background: #15182b;
			color: #e0e0e0;
			border: 1px solid #4a4f73;
			border-radius: 6px;
			transition: all 0.3s ease;
		}
		
		textarea:focus, .cookie-input:focus {
			background: #1a1e32;
			border-color: #7877c6;
			box-shadow: 0 0 0 2px rgba(120, 119, 198, 0.2);
			color: #ffffff;
		}
		
		button, .btn {
			background: linear-gradient(135deg, #7877c6 0%, #5a58b9 100%);
			border: none;
			border-radius: 6px;
			color: #ffffff;
			font-weight: 500;
			transition: all 0.3s ease;
			box-shadow: 0 2px 8px rgba(120, 119, 198, 0.3);
		}
		
		button:hover, .btn:hover {
			background: linear-gradient(135deg, #8a89d4 0%, #6c6ac7 100%);
			transform: translateY(-1px);
			box-shadow: 0 4px 12px rgba(120, 119, 198, 0.4);
		}
		
		.btn-dark {
			background: linear-gradient(135deg, #2a2f4a 0%, #3a3f5c 100%);
		}
		
		.btn-dark:hover {
			background: linear-gradient(135deg, #3a3f5c 0%, #4a4f73 100%);
		}
		
		.badge {
			font-size: 0.85em;
			font-weight: 600;
			padding: 8px 12px;
			border-radius: 20px;
		}
		
		.badge-warning {
			background: linear-gradient(135deg, #ffb74d 0%, #ff9800 100%);
			color: #2a2f4a;
		}
		
		.badge-success {
			background: linear-gradient(135deg, #81c784 0%, #4caf50 100%);
			color: #ffffff;
		}
		
		.badge-danger {
			background: linear-gradient(135deg, #e57373 0%, #f44336 100%);
			color: #ffffff;
		}
		
		.badge-info {
			background: linear-gradient(135deg, #4fc3f7 0%, #29b6f6 100%);
			color: #ffffff;
		}
		
		.badge-secondary {
			background: linear-gradient(135deg, #78909c 0%, #546e7a 100%);
			color: #ffffff;
		}
		
		/* Scrollbar personalizado */
		::-webkit-scrollbar {
			width: 8px;
		}
		
		::-webkit-scrollbar-track {
			background: #1a1e32;
			border-radius: 4px;
		}
		
		::-webkit-scrollbar-thumb {
			background: linear-gradient(135deg, #7877c6 0%, #5a58b9 100%);
			border-radius: 4px;
		}
		
		::-webkit-scrollbar-thumb:hover {
			background: linear-gradient(135deg, #8a89d4 0%, #6c6ac7 100%);
		}
		
		/* Animaciones */
		@keyframes fadeIn {
			from { opacity: 0; transform: translateY(10px); }
			to { opacity: 1; transform: translateY(0); }
		}
		
		.container {
			animation: fadeIn 0.5s ease-out;
		}
		
		/* Efectos de hover para tarjetas */
		.tab-content, .container.text-white.rounded.shadow {
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		
		.tab-content:hover, .container.text-white.rounded.shadow:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
		}
		
		/* Estilos para los resultados */
		#lives, #dies, #errors {
			max-height: 400px;
			overflow-y: auto;
			padding: 10px;
			background: #15182b;
			border-radius: 6px;
			border: 1px solid #3a3f5c;
		}
		
		.text-success { color: #81c784 !important; }
		.text-danger { color: #e57373 !important; }
		.text-warning { color: #ffb74d !important; }
		.text-white { color: #e0e0e0 !important; }
		
		/* Header estilizado */
		h3 {
			background: linear-gradient(135deg, #7877c6 0%, #b8c1ec 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			font-weight: 700;
			text-align: center;
			margin-bottom: 0;
		}
		
		/* Stats counters */
		.val-lives, .val-dies, .val-errors, .val-tested, .val-total {
			font-weight: 700;
			font-size: 1.1em;
		}
		
		.val-lives { color: #81c784; }
		.val-dies { color: #e57373; }
		.val-errors { color: #ffb74d; }
		.val-tested { color: #4fc3f7; }
		.val-total { color: #b8c1ec; }
		
		/* Header container mejorado */
		.header-container {
			border-bottom: 2px solid #7877c6;
			padding-bottom: 15px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body class="p-3">
    
    <input type="hidden" value="<?php echo $base64Value; ?>" name="token_api" id="token_api">
	
	<!-- Header Principal -->
	<div class="container text-white rounded shadow p-3 my-4">
		<div class="header-container">
			<h3><i class="fas fa-shield-alt"></i> CHECKER VIKING STAFF AMAZON US</h3>
			<div class="text-center mt-2">
				<small class="text-muted">Sistema de verificación de tarjetas</small>
			</div>
		</div>
		
		<!-- botoes de ação -->
		<div class="container-fluid mt-3">
			<div class="buttons text-center">
				<button class="btn mr-2" id="chk-start"><i class="fas fa-play"></i> Iniciar</button>
				<button class="btn mr-2" id="chk-pause" disabled><i class="fas fa-pause"></i> Pausar</button>
				<button class="btn mr-2" id="chk-stop" disabled><i class="fas fa-stop"></i> Parar</button>
				<button class="btn" id="chk-clean"><i class="fas fa-trash-alt"></i> Limpar</button>
			</div>
		</div>
		
		<!-- status do checker -->
		<div class="container-fluid mt-3 text-center">
			<span class="badge badge-warning" id="estatus">Aguardando inicio...</span>
		</div>
	</div>

	<!-- tabs -->
	<div class="container p-0 shadow">
		<ul class="nav nav-tabs" id="myTab" role="tablist" style="border: none;">
			<li class="nav-item">
				<a class="nav-link active" style="border: none;" id="home-tab" data-toggle="tab" href="#chk-home" role="tab" aria-controls="home" aria-selected="true">
					<i class="far fa-credit-card"></i> Checker
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="profile-tab" data-toggle="tab" href="#chk-lives" role="tab" aria-controls="profile" aria-selected="false">
					<i class="fa fa-thumbs-up fa-lg"></i> Aprovadas
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-dies" role="tab" aria-controls="contact" aria-selected="false">
					<i class="fa fa-thumbs-down fa-lg"></i> Reprovadas
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-errors" role="tab" aria-controls="contact" aria-selected="false">
					<i class="fas fa-times fa-lg"></i> Erros
				</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
		
			<!-- HOME DO CHECKER -->
			<div class="tab-pane fade show active" id="chk-home" role="tabpanel" aria-labelledby="home-tab">
				<div class="my-3 p-3" style="background: #15182b; border-radius: 6px;">
					<div class="row text-center">
						<div class="col">
							<small>Aprovadas</small><br>
							<span class="val-lives">0</span>
						</div>
						<div class="col">
							<small>Reprovadas</small><br>
							<span class="val-dies">0</span>
						</div>
						<div class="col">
							<small>Errors</small><br>
							<span class="val-errors">0</span>
						</div>
						<div class="col">
							<small>Testadas</small><br>
							<span class="val-tested">0</span>
						</div>
						<div class="col">
							<small>Total</small><br>
							<span class="val-total">0</span>
						</div>
					</div>
				</div>
				
				<div class="container-fluid p-0 mt-3">
					<label class="text-light mb-2"><i class="fas fa-cookie"></i> Cookie Amazon.com</label>
					<input type="text" id="cookie-input-1" placeholder="Cookie Amazon.com (session-token)" class="cookie-input rounded shadow p-3">
				</div>
				
				<div class="container-fluid p-0 mt-3">
					<label class="text-light mb-2"><i class="fas fa-credit-card"></i> Lista de Cartas</label>
					<textarea id="lista_cartoes" placeholder="Insira sua lista no formato: NÚMERO|MES|ANO|CVV" rows="10" class="rounded shadow"></textarea>
				</div>
			</div>
			
			<script>
function apagarValoresLives() {
  var tabela = document.getElementById("lives");
  tabela.innerHTML = "";
}
</script>
			
			<!-- LIVES DO CHECKERS -->
			<div class="tab-pane fade show" id="chk-lives" role="tabpanel" aria-labelledby="home-tab">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="mb-0"><i class="fas fa-check-circle text-success"></i> Aprovadas</h5>
					<div>
						<span class="text-light">Total: <span class="val-lives">0</span></span>
						<button class="btn ml-2" id="copyButton"><i class="fas fa-copy"></i> Copiar</button>
						<button class="btn ml-2" onclick="apagarValoresLives()"><i class="fas fa-trash-alt"></i> Limpar</button>
					</div>
				</div>
				<div id="lives" style="overflow:auto;">
				</div>
			</div>
			
			<script>
        const copyButton = document.getElementById('copyButton');
        const livesDiv = document.getElementById('lives');

        copyButton.addEventListener('click', () => {
            const range = document.createRange();
            range.selectNode(livesDiv);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);

            try {
                const successful = document.execCommand('copy');
                const message = successful ? 'Copiado para a área de transferência!' : 'Não foi possível copiar.';
                toastr["success"](message);
            } catch (err) {
                console.error('Erro ao copiar: ', err);
                toastr["error"]('Erro ao copiar');
            }

            window.getSelection().removeAllRanges();
        });
    </script>
			
			<script>
function apagarValoresDies() {
  var tabela = document.getElementById("dies");
  tabela.innerHTML = "";
}
</script>

			<script>
function apagarValoresErrors() {
  var tabela = document.getElementById("errors");
  tabela.innerHTML = "";
}
</script>
			
			<!-- DIES DO CHECKER -->
			<div class="tab-pane fade fade show" id="chk-dies" role="tabpanel" aria-labelledby="home-tab">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="mb-0"><i class="fas fa-times-circle text-danger"></i> Reprovadas</h5>
					<div>
						<span class="text-light">Total: <span class="val-dies">0</span></span>
						<button class="btn ml-2" onclick="apagarValoresDies()"><i class="fas fa-trash-alt"></i> Limpar</button>
					</div>
				</div>
				<div id="dies" style="overflow:auto;">
				</div>
			</div>
			
			<!-- ERRORS DO CHECKER -->
			<div class="tab-pane fade show" id="chk-errors" role="tabpanel" aria-labelledby="home-tab">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="mb-0"><i class="fas fa-exclamation-triangle text-warning"></i> Erros</h5>
					<div>
						<span class="text-light">Total: <span class="val-errors">0</span></span>
						<button class="btn ml-2" onclick="apagarValoresErrors()"><i class="fas fa-trash-alt"></i> Limpar</button>
					</div>
				</div>
				<div id="errors" style="overflow:auto;">
				</div>
			</div>
		</div>	
	</div>
	
	<!-- Footer -->
	<div class="container text-center mt-4">
		<small class="text-muted">Checker VIKING STAFF hecho por @Yayo561 y @Morganbennie </small>
	</div>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	
	<!-- Configuração do Toastr -->
	<script>
		toastr.options = {
			"closeButton": true,
			"progressBar": true,
			"positionClass": "toast-top-right",
			"timeOut": "3000"
		};
	</script>

<script type="text/javascript">
	$(document).ready(function() {
		// variaveis de informação
		var testadas = [];
		var total = 0;
		var tested = 0;
		var lives = 0;
		var dies = 0;
		var errors = 0;
		var stopped = true;
		var paused = true;
        var token_api = document.getElementById("token_api").value;

		function removelinha() {
			var lines = $("textarea").val().split('\n');
			lines.splice(0, 1);
			$("textarea").val(lines.join("\n"));
		}

		function testar(tested, total, lista, tentativas = 3) {
		    if (stopped == true) {
		        return false;
		    }

		    if (paused == true) {
		        return false;
		    }

		    if (tested >= total) {
		        console.log('finalizado ' + tested + " de " + total);
		        $("#estatus").attr("class", "badge badge-success").text("Teste finalizado");
		        toastr["success"]("Teste de " + total + " itens finalizado");
		        $("#chk-start").removeAttr('disabled');
		        $("#chk-clean").removeAttr('disabled');
		        $("#chk-stop").attr("disabled", "true");
		        $("#chk-pause").attr("disabled", "true");
		        return false;
		    }

		    var conteudo = lista[tested];
		    var token_api = document.getElementById("token_api").value;
		    var cookie1 = $("#cookie-input-1").val().trim();

		    if (!cookie1) {
		        $("#estatus").attr("class", "badge badge-danger").text("Nenhum cookie fornecido!");
		        toastr["error"]("Insira um cookie Amazon.com!");
		        return false;
		    }

		    $.ajax({
		        url: 'api.php',
		        type: 'GET',
		        data: { lista: conteudo, token_api: token_api, cookie1: cookie1, tries: tested },
		    })
		    .done(function(response) {
		        if (response.indexOf("ERROR") >= 0) {
		            retry();
		        } else if (response.trim() === "") {
		            retry();
		        } else {
		            handleResponse(response);
		        }
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        retry();
		    });

		    function retry() {
		        if (tentativas > 0) {
		            $("#estatus").attr("class", "badge badge-warning").text("Tentando novamente... (" + (4 - tentativas) + "/3)");
		            toastr["warning"]("Tentando novamente para: " + conteudo);
		            setTimeout(function() {
		                testar(tested, total, lista, tentativas - 1);
		            }, 1000);
		        } else {
		            handleRetryFailure();
		        }
		    }

		    function handleResponse(response) {
		        tested++;

		        if (response.indexOf("Aprovada") >= 0) {
		            lives++;
		            $("#estatus").attr("class", "badge badge-success").text(conteudo + " -> LIVE");
		            toastr["success"]("Aprovada! " + conteudo);
		            $("#lives").append('<div class="p-2 mb-2 rounded" style="background: rgba(129, 199, 132, 0.1); border-left: 4px solid #81c784;">' + response + '</div>');
		            removelinha();
		        } else if (response.indexOf("Reprovada") >= 0) {
		            dies++;
		            $("#estatus").attr("class", "badge badge-danger").text(conteudo + " -> DIE");
		            toastr["error"]("Reprovada! " + conteudo);
		            $("#dies").append('<div class="p-2 mb-2 rounded" style="background: rgba(229, 115, 115, 0.1); border-left: 4px solid #e57373;">' + response + '</div>');
		            removelinha();
		        } else {
		            errors++;
		            $("#estatus").attr("class", "badge badge-warning").text(conteudo + " -> ERROR");
		            toastr["warning"]("Ocorreu um erro! " + conteudo);
		            $("#errors").append('<div class="p-2 mb-2 rounded" style="background: rgba(255, 183, 77, 0.1); border-left: 4px solid #ffb74d;">' + response + '</div>');
		        }

		        $(".val-total").text(total);
		        $(".val-lives").text(lives);
		        $(".val-dies").text(dies);
		        $(".val-errors").text(errors);
		        $(".val-tested").text(tested);

		        setTimeout(function() {
		            testar(tested, total, lista);
		        }, 1000);
		    }

		    function handleRetryFailure() {
		        errors++;
		        $("#estatus").attr("class", "badge badge-warning").text(conteudo + " -> ERROR");
		        toastr["warning"]("Ocorreu um erro! " + conteudo);
		        $("#errors").append('<div class="p-2 mb-2 rounded" style="background: rgba(255, 183, 77, 0.1); border-left: 4px solid #ffb74d;">Erro na tentativa de teste: ' + conteudo + '</div>');
		        
		        $(".val-total").text(total);
		        $(".val-lives").text(lives);
		        $(".val-dies").text(dies);
		        $(".val-errors").text(errors);
		        $(".val-tested").text(tested);
		        
		        removelinha();
		        testar(tested + 1, total, lista);
		    }
		}

		// ========== START ========== //
		function start() {
			var lista = $("textarea").val().trim().split('\n');
			var total = lista.length;

			$(".val-total").text(total);
			stopped = false;
			paused = false;
			toastr["success"]("Checker Iniciado.");
			$("#estatus").attr("class", "badge badge-success").text("Checker iniciado, aguarde...");

			// Libera os botões
			$("#chk-stop").removeAttr('disabled');
			$("#chk-pause").removeAttr('disabled');
			$("#chk-start").attr("disabled", "true");
			$("#chk-clean").attr("disabled", "true");

			// Inicia o teste
			testar(tested, total, lista);
		}

		$("#chk-start").click(function() {
			if ($('textarea').val().trim() == "") {
				$('textarea').focus();
				toastr["warning"]("Insira a lista de cartões!");
			} else if ($('#cookie-input-1').val().trim() == "") {
				$('#cookie-input-1').focus();
				toastr["warning"]("Insira o cookie Amazon.com!");
			} else {
				start();
			}
		});

		// ========== PAUSE ========== //
		function pause() {
			$("#chk-start").removeAttr('disabled');
			$("#chk-pause").attr("disabled", "true");
			paused = true;
			console.log('checker pausado');
			toastr["info"]("Checker Pausado!");
			$("#estatus").attr("class", "badge badge-info").text("Checker pausado...");
		}

		$("#chk-pause").click(function() {
			pause();
		});

		// ========== STOP ========== //
		function stop() {
			stopped = true;
			$("#chk-start").removeAttr('disabled');
			$("#chk-clean").removeAttr('disabled');
			$("#chk-stop").attr("disabled", "true");
			$("#chk-pause").attr("disabled", "true");
			console.log('checker parado');
			toastr["info"]("Checker Parado!");
			$("#estatus").attr("class", "badge badge-secondary").text("Checker parado...");
		}

		$("#chk-stop").click(function() {
			stop();
		});
	// ========== CLEAN ========== //
		function clean() {
			testadas = [];
			total = 0;
			tested = 0;
			lives = 0;
			dies = 0;
			errors = 0;
			stopped = true;

			// atualiza resultados
			$(".val-total").text(total);
			$(".val-lives").text(lives);
			$(".val-dies").text(dies);
			$(".val-errors").text(errors);
			$(".val-tested").text(tested);
			$("textarea").val("");
			$("#cookie-input-1").val("");
			$("#lives").html("");
			$("#dies").html("");
			$("#errors").html("");
			toastr["info"]("Checker Limpo!");
		}

		$("#chk-clean").click(function() {
			clean();
		});

		// Validação do cookie
		$("#validate-cookie-1").click(function() {
			var cookie = $("#cookie-input-1").val().trim();
			if (cookie) {
				$.ajax({
					url: 'api.php',
					type: 'GET',
					data: { validate_cookie: cookie, token_api: token_api },
					success: function(response) {
						if (response.includes("Cookie ativo")) {
							toastr["success"]("Cookie válido e ativo");
						} else {
							toastr["error"]("Cookie inválido ou inativo");
						}
					},
					error: function() {
						toastr["error"]("Erro na validação do cookie");
					}
				});
			} else {
				toastr["warning"]("Insira um cookie para validar!");
			}
		});
	});
</script>

</body>
</html>
```
