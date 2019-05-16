<?php
if(session_id() == '' || !isset($_SESSION)) {

}
if (!isset($_SESSION['nome']) || $_SESSION['nome']=="") {
    header("Location: ../index.php?msg=expirou");
}