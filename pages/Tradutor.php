<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_POST['idioma']) && !isset($_SESSION['idioma'])) {
    $_SESSION['idioma'] = 'pt-br';
} else if (isset($_POST['idioma'])) {
    $_SESSION['idioma'] = basename($_POST['idioma']);
}
if (file_exists('traducoes/' . $_SESSION['idioma'] . '.php')) {
    include 'traducoes/' . $_SESSION['idioma'] . '.php';
} else {
    include 'traducoes/pt-br.php';
}
$traducoesPath = __DIR__ . '/traducoes/';
if (file_exists($traducoesPath . $_SESSION['idioma'] . '.php')) {
    #echo "Incluindo: " . $traducoesPath . $_SESSION['idioma'] . '.php';
    include $traducoesPath . $_SESSION['idioma'] . '.php';
    //var_dump($trad['cadastrar']); // Exibe o conteúdo do array de tradução
} else {
    #echo "Arquivo não encontrado, usando padrão: " . $traducoesPath . 'pt-br.php';
    include $traducoesPath . 'pt-br.php';
    //var_dump($trad['cadastrar']); // Exibe o conteúdo do array de tradução
}

?>