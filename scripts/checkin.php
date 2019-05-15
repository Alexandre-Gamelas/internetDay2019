<?php
if(session_id() == '' || !isset($_SESSION)) {

}
if (!isset($_SESSION['nome']) || $_SESSION['nome']=="") {
    echo "<script>alert('Sessão expirou ou não está logado!'); window.location.href = 'https://internetday2019.web.ua.pt/internetDay/index.php'</script>";
}