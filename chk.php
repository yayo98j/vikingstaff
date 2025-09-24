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
		
		/* Botón de idioma */
		.language-selector {
			position: absolute;
			top: 20px;
			right: 20px;
			z-index: 1000;
		}
		
		.language-btn {
			background: linear-gradient(135deg, #2a2f4a 0%, #3a3f5c 100%);
			border: 1px solid #4a4f73;
			color: #b8c1ec;
			font-size: 0.9rem;
			padding: 5px 10px;
		}
		
		.language-btn:hover {
			background: linear-gradient(135deg, #3a3f5c 0%, #4a4f73 100%);
			color: #e0e0e0;
		}
		
		.language-dropdown {
			background: #1e2235;
			border: 1px solid #4a4f73;
			border-radius: 6px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
		}
		
		.language-option {
			color: #e0e0e0;
			padding: 8px 15px;
			cursor: pointer;
			transition: all 0.3s ease;
		}
		
		.language-option:hover {
			background: rgba(120, 119, 198, 0.1);
		}
		
		.language-option.active {
			background: linear-gradient(135deg, #7877c6 0%, #5a58b9 100%);
			color: #ffffff;
		}
	</style>
</head>
<body class="p-3">
    
    <input type="hidden" value="<?php echo $base64Value; ?>" name="token_api" id="token_api">
	
	<!-- Selector de idioma -->
	<div class="language-selector">
		<button class="btn language-btn" id="languageToggle">
			<i class="fas fa-language"></i> <span id="currentLanguage">ES</span> <i class="fas fa-chevron-down"></i>
		</button>
		<div class="language-dropdown mt-1" id="languageDropdown" style="display: none;">
			<div class="language-option active" data-lang="es">Español</div>
			<div class="language-option" data-lang="en">English</div>
		</div>
	</div>
	
	<!-- Header Principal -->
	<div class="container text-white rounded shadow p-3 my-4">
		<div class="header-container">
			<h3><i class="fas fa-shield-alt"></i> CHECKER VIKING STAFF AMAZON US</h3>
			<div class="text-center mt-2">
				<small class="text-muted" data-i18n="system_description">Sistema de verificación de tarjetas</small>
			</div>
		</div>
		
		<!-- botoes de ação -->
		<div class="container-fluid mt-3">
			<div class="buttons text-center">
				<button class="btn mr-2" id="chk-start"><i class="fas fa-play"></i> <span data-i18n="start">Iniciar</span></button>
				<button class="btn mr-2" id="chk-pause" disabled><i class="fas fa-pause"></i> <span data-i18n="pause">Pausar</span></button>
				<button class="btn mr-2" id="chk-stop" disabled><i class="fas fa-stop"></i> <span data-i18n="stop">Parar</span></button>
				<button class="btn" id="chk-clean"><i class="fas fa-trash-alt"></i> <span data-i18n="clean">Limpar</span></button>
			</div>
		</div>
		
		<!-- status do checker -->
		<div class="container-fluid mt-3 text-center">
			<span class="badge badge-warning" id="estatus" data-i18n="waiting_start">Aguardando inicio...</span>
		</div>
	</div>

	<!-- tabs -->
	<div class="container p-0 shadow">
		<ul class="nav nav-tabs" id="myTab" role="tablist" style="border: none;">
			<li class="nav-item">
				<a class="nav-link active" style="border: none;" id="home-tab" data-toggle="tab" href="#chk-home" role="tab" aria-controls="home" aria-selected="true">
					<i class="far fa-credit-card"></i> <span data-i18n="checker">Checker</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="profile-tab" data-toggle="tab" href="#chk-lives" role="tab" aria-controls="profile" aria-selected="false">
					<i class="fa fa-thumbs-up fa-lg"></i> <span data-i18n="approved">Aprobadas</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-dies" role="tab" aria-controls="contact" aria-selected="false">
					<i class="fa fa-thumbs-down fa-lg"></i> <span data-i18n="rejected">Reprobadas</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-errors" role="tab" aria-controls="contact" aria-selected="false">
					<i class="fas fa-times fa-lg"></i> <span data-i18n="errors">Errores</span>
				</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
		
			<!-- HOME DO CHECKER -->
			<div class="tab-pane fade show active" id="chk-home" role="tabpanel" aria-labelledby="home-tab">
				<div class="my-3 p-3" style="background: #15182b; border-radius: 6px;">
					<div class="row text-center">
						<div class="col">
							<small data-i18n="approved">Aprobadas</small><br>
							<span class="val-lives">0</span>
						</div>
						<div class="col">
							<small data-i18n="rejected">Reprobadas</small><br>
							<span class="val-dies">0</span>
						</div>
						<div class="col">
							<small data-i18n="errors">Errores</small><br>
							<span class="val-errors">0</span>
						</div>
						<div class="col">
							<small data-i18n="tested">Testeadas</small><br>
							<span class="val-tested">0</span>
						</div>
						<div class="col">
							<small data-i18n="total">Total</small><br>
							<span class="val-total">0</span>
						</div>
					</div>
				</div>
				
				<div class="container-fluid p-0 mt-3">
					<label class="text-light mb-2"><i class="fas fa-cookie"></i> <span data-i18n="cookie_amazon">Cookie Amazon.com</span></label>
					<input type="text" id="cookie-input-1" placeholder="Cookie Amazon.com (session-token)" class="cookie-input rounded shadow p-3">
				</div>
				
				<div class="container-fluid p-0 mt-3">
					<label class="text-light mb-2"><i class="fas fa-credit-card"></i> <span data-i18n="card_list">Lista de Cartas</span></label>
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
					<h5 class="mb-0"><i class="fas fa-check-circle text-success"></i> <span data-i18n="approved">Aprobadas</span></h5>
					<div>
						<span class="text-light" data-i18n="total">Total: <span class="val-lives">0</span></span>
						<button class="btn ml-2" id="copyButton"><i class="fas fa-copy"></i> <span data-i18n="copy">Copiar</span></button>
						<button class="btn ml-2" onclick="apagarValoresLives()"><i class="fas fa-trash-alt"></i> <span data-i18n="clean">Limpiar</span></button>
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
					<h5 class="mb-0"><i class="fas fa-times-circle text-danger"></i> <span data-i18n="rejected">Reprobadas</span></h5>
					<div>
						<span class="text-light" data-i18n="total">Total: <span class="val-dies">0</span></span>
						<button class="btn ml-2" onclick="apagarValoresDies()"><i class="fas fa-trash-alt"></i> <span data-i18n="clean">Limpiar</span></button>
					</div>
				</div>
				<div id="dies" style="overflow:auto;">
				</div>
			</div>
			
			<!-- ERRORS DO CHECKER -->
			<div class="tab-pane fade show" id="chk-errors" role="tabpanel" aria-labelledby="home-tab">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="mb-0"><i class="fas fa-exclamation-triangle text-warning"></i> <span data-i18n="errors">Errores</span></h5>
					<div>
						<span class="text-light" data-i18n="total">Total: <span class="val-errors">0</span></span>
						<button class="btn ml-2" onclick="apagarValoresErrors()"><i class="fas fa-trash-alt"></i> <span data-i18n="clean">Limpiar</span></button>
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

	<!-- Sistema de traducción -->
	<script>
		// Definir las traducciones
		const translations = {
			es: {
				// Textos de interfaz
				"system_description": "Sistema de verificación de tarjetas",
				"start": "Iniciar",
				"pause": "Pausar",
				"stop": "Parar",
				"clean": "Limpiar",
				"waiting_start": "Esperando inicio...",
				"checker": "Checker",
				"approved": "Aprobadas",
				"rejected": "Reprobadas",
				"errors": "Errores",
				"tested": "Testeadas",
				"total": "Total",
				"cookie_amazon": "Cookie Amazon.com",
				"card_list": "Lista de Cartas",
				"copy": "Copiar",
				
				// Mensajes del sistema
				"insert_card_list": "¡Inserta la lista de cartas!",
				"insert_cookie": "¡Inserta el cookie Amazon.com!",
				"checker_started": "Checker Iniciado.",
				"checker_paused": "Checker Pausado!",
				"checker_stopped": "Checker Parado!",
				"checker_cleaned": "Checker Limpiado!",
				"test_completed": "Test de {total} ítems completado",
				"approved_card": "¡Aprobada! {card}",
				"rejected_card": "¡Reprobada! {card}",
				"error_card": "¡Ocurrió un error! {card}",
				"retrying": "Reintentando... ({attempt}/3)",
				"copy_success": "¡Copiado al portapapeles!",
				"copy_error": "Error al copiar"
			},
			en: {
				// Textos de interfaz
				"system_description": "Card verification system",
				"start": "Start",
				"pause": "Pause",
				"stop": "Stop",
				"clean": "Clean",
				"waiting_start": "Waiting to start...",
				"checker": "Checker",
				"approved": "Approved",
				"rejected": "Rejected",
				"errors": "Errors",
				"tested": "Tested",
				"total": "Total",
				"cookie_amazon": "Cookie Amazon.com",
				"card_list": "Card List",
				"copy": "Copy",
				
				// Mensajes del sistema
				"insert_card_list": "Insert the card list!",
				"insert_cookie": "Insert the Amazon.com cookie!",
				"checker_started": "Checker Started.",
				"checker_paused": "Checker Paused!",
				"checker_stopped": "Checker Stopped!",
				"checker_cleaned": "Checker Cleaned!",
				"test_completed": "Test of {total} items completed",
				"approved_card": "Approved! {card}",
				"rejected_card": "Rejected! {card}",
				"error_card": "An error occurred! {card}",
				"retrying": "Retrying... ({attempt}/3)",
				"copy_success": "Copied to clipboard!",
				"copy_error": "Error copying"
			}
		};

		// Función para cambiar el idioma
		function changeLanguage(lang) {
			// Actualizar todos los elementos con data-i18n
			document.querySelectorAll('[data-i18n]').forEach(element => {
				const key = element.getAttribute('data-i18n');
				if (translations[lang] && translations[lang][key]) {
					element.textContent = translations[lang][key];
				}
			});
			
			// Actualizar el botón de idioma
			document.getElementById('currentLanguage').textContent = lang.toUpperCase();
			
			// Actualizar las opciones activas
			document.querySelectorAll('.language-option').forEach(option => {
				if (option.getAttribute('data-lang') === lang) {
					option.classList.add('active');
				} else {
					option.classList.remove('active');
				}
			});
			
			// Guardar preferencia
			localStorage.setItem('preferredLanguage', lang);
		}

		// Inicializar el sistema de idiomas
		document.addEventListener('DOMContentLoaded', function() {
			// Obtener el idioma guardado o usar español por defecto
			const savedLang = localStorage.getItem('preferredLanguage') || 'es';
			changeLanguage(savedLang);
			
			// Configurar el menú desplegable de idiomas
			document.getElementById('languageToggle').addEventListener('click', function() {
				const dropdown = document.getElementById('languageDropdown');
				dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
			});
			
			// Configurar las opciones de idioma
			document.querySelectorAll('.language-option').forEach(option => {
				option.addEventListener('click', function() {
					const lang = this.getAttribute('data-lang');
					changeLanguage(lang);
					document.getElementById('languageDropdown').style.display = 'none';
				});
			});
			
			// Cerrar el menú al hacer clic fuera
			document.addEventListener('click', function(event) {
				if (!event.target.closest('.language-selector')) {
					document.getElementById('languageDropdown').style.display = 'none';
				}
			});
		});
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

		// Obtener función de traducción
		function t(key, params = {}) {
			const lang = localStorage.getItem('preferredLanguage') || 'es';
			let text = translations[lang] && translations[lang][key] ? translations[lang][key] : key;
			
			// Reemplazar parámetros
			for (const [param, value] of Object.entries(params)) {
				text = text.replace(`{${param}}`, value);
			}
			
			return text;
		}

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
		        toastr["success"](t("test_completed", {total: total}));
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
		        $("#estatus").attr("class", "badge badge-danger").text(t("insert_cookie"));
		        toastr["error"](t("insert_cookie"));
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
		            $("#estatus").attr("class", "badge badge-warning").text(t("retrying", {attempt: 4 - tentativas}));
		            toastr["warning"](t("retrying", {attempt: 4 - tentativas}) + ": " + conteudo);
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
		            toastr["success"](t("approved_card", {card: conteudo}));
		            $("#lives").append('<div class="p-2 mb-2 rounded" style="background: rgba(129, 199, 132, 0.1); border-left: 4px solid #81c784;">' + response + '</div>');
		            removelinha();
		        } else if (response.indexOf("Reprovada") >= 0) {
		            dies++;
		            $("#estatus").attr("class", "badge badge-danger").text(conteudo + " -> DIE");
		            toastr["error"](t("rejected_card", {card: conteudo}));
		            $("#dies").append('<div class="p-2 mb-2 rounded" style="background: rgba(229, 115, 115, 0.1); border-left: 4px solid #e57373;">' + response + '</div>');
		            removelinha();
		        } else {
		            errors++;
		            $("#estatus").attr("class", "badge badge-warning").text(conteudo + " -> ERROR");
		            toastr["warning"](t("error_card", {card: conteudo}));
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
		        toastr["warning"](t("error_card", {card: conteudo}));
		        $("#errors").append('<div class="p-2 mb-2 rounded" style="background: rgba(255, 183, 77, 0.1); border-left: 4px solid #ffb74d;">Erro na tentativa de teste: ' + conteudo + '</div>');
		        
		        $(".val-total").text(total);
		        $(".val-lives").text(lives);
		        $(".val-dies").text(dies);
		        $(".val-errors").text(errors);
		        $(".val-tested").text(tested);
		        
		        removelinha();
		        testar(tested, total, lista);
		    }
		}

		// iniciar checker
		$("#chk-start").click(function() {
			var lista = $("#lista_cartoes").val().split('\n');
			var cookie1 = $("#cookie-input-1").val();

			if (lista == "") {
				$("#estatus").attr("class", "badge badge-danger").text(t("insert_card_list"));
				toastr["error"](t("insert_card_list"));
				return false;
			}

			if (cookie1 == "") {
				$("#estatus").attr("class", "badge badge-danger").text(t("insert_cookie"));
				toastr["error"](t("insert_cookie"));
				return false;
			}

			total = lista.length;
			$(".val-total").text(total);
			$("#estatus").attr("class", "badge badge-success").text(t("checker_started"));
			toastr["success"](t("checker_started"));
			stopped = false;
			paused = false;
			$("#chk-start").attr("disabled", "true");
			$("#chk-clean").attr("disabled", "true");
			$("#chk-stop").removeAttr('disabled');
			$("#chk-pause").removeAttr('disabled');
			testar(tested, total, lista);
		});

		// pausar checker
		$("#chk-pause").click(function() {
			if (paused == false) {
				paused = true;
				$("#estatus").attr("class", "badge badge-warning").text(t("checker_paused"));
				toastr["warning"](t("checker_paused"));
				$("#chk-pause").html('<i class="fas fa-play"></i> ' + t("resume"));
			} else {
				paused = false;
				$("#estatus").attr("class", "badge badge-success").text("Checker Rodando...");
				toastr["success"]("Checker Rodando...");
				$("#chk-pause").html('<i class="fas fa-pause"></i> ' + t("pause"));
				var lista = $("#lista_cartoes").val().split('\n');
				testar(tested, total, lista);
			}
		});

		// parar checker
		$("#chk-stop").click(function() {
			stopped = true;
			paused = true;
			$("#estatus").attr("class", "badge badge-danger").text(t("checker_stopped"));
			toastr["error"](t("checker_stopped"));
			$("#chk-start").removeAttr('disabled');
			$("#chk-clean").removeAttr('disabled');
			$("#chk-stop").attr("disabled", "true");
			$("#chk-pause").attr("disabled", "true");
		});

		// limpar checker
		$("#chk-clean").click(function() {
			$("#estatus").attr("class", "badge badge-warning").text(t("checker_cleaned"));
			toastr["success"](t("checker_cleaned"));
			$("#lives").html("");
			$("#dies").html("");
			$("#errors").html("");
			$(".val-total").text("0");
			$(".val-lives").text("0");
			$(".val-dies").text("0");
			$(".val-errors").text("0");
			$(".val-tested").text("0");
			testadas = [];
			total = 0;
			tested = 0;
			lives = 0;
			dies = 0;
			errors = 0;
			stopped = true;
			paused = true;
		});
	});
</script>
</body>
</html>
