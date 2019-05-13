<?php require_once "connections/connection.php";

$link = new_db_connection();
$stmt = mysqli_stmt_init($link);
$query = "SELECT  nome  FROM nacionalidades ";
if (mysqli_stmt_prepare($stmt, $query)){
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $nacionalidade);
?>
<section class="row justify-content-center mt-3">
    <article class="col-4">
        <img src="assets/img/registar/pic.png" alt="" class="img-fluid">
    </article>
</section>

<form class="form row justify-content-center" method="post" action="scripts/registar_script.php">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="nome" placeholder="Nome*">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="apelido" placeholder="Apelido*">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="mail" placeholder="Mail*">
    <input class="col-8 form-control inputRegistar mt-4" type="password" name="pass" placeholder="Password*">
   <!-- <input class="col-8 form-control inputRegistar mt-4" type="text" name="empresa" placeholder="Empresa*">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="cargo" placeholder="Cargo">-->
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="linkdin" placeholder="LinkdIn*">
    <!--<input class="col-8 form-control inputRegistar mt-4" type="text" placeholder="Curriculo">-->
    <input class="col-8 form-control inputRegistar mt-4" type="date" name="nascimento" placeholder="Nascimento*">
    <select class="col-8 form-control inputRegistar mt-4 data" name="nacionalidade" form="nacionalidade">
        <option value="null">Nacionalidade</option>
    <?php
    while(mysqli_stmt_fetch($stmt)){
    echo "<option value='$nacionalidade'>$nacionalidade</option>";}
    }
    ?>
    </select>
    <article class="col-12"></article>
    <button style="border-radius: 36px" class="col-4 mt-5 mb-5 p-2 inputRegistar" type="submit btn">REGISTAR</button>
</form>