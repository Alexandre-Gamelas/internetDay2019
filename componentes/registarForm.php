<?php require_once "connections/connection.php";



?>


<section class="row justify-content-center">
    <article class="col-12 text-center mt-5">
        <p class="txtRegistar">Para aproveitares o melhor da aplicação regista-te para que possas criar contacto rapidamente com as várias empresas.</p>
    </article>


    <button class="btn col-4 mt-4 btnRegistar" id="role_estudante">ESTUDANTE</button>
    <span>&nbsp</span>
    <button class="btn col-4 mt-4 btnRegistar" id="role_scout">SCOUT</button>

    <article class="col-12 text-center mt-5">
        <p class="txtRegistar">Qual é o teu perfil?</p>
    </article>

</section>
<?php


?>
<section class="row justify-content-center mt-3">
    <article class="col-4">
        <img src="assets/img/registar/pic.png" alt="" class="img-fluid">
    </article>
</section>

        <form class="form row justify-content-center" id="form_estudante"  method="post" action="scripts/registar_script.php?role=1">
        <input class="col-8 form-control inputRegistar mt-4" type="text" name="nome" placeholder="Nome*">
        <input class="col-8 form-control inputRegistar mt-4" type="text" name="apelido" placeholder="Apelido*">
        <input class="col-8 form-control inputRegistar mt-4" type="text" name="mail" placeholder="Mail*">
        <input class="col-8 form-control inputRegistar mt-4" type="password" name="pass" placeholder="Password*">
        <input class="col-8 form-control inputRegistar mt-4" type="text" name="linkdin" placeholder="LinkdIn*">
        <input class="col-8 form-control inputRegistar mt-4" type="text" placeholder="Curriculo" name="curriculo">


        <input class="col-8 form-control inputRegistar mt-4" type="text" placeholder="Nº de Aluno" name="n_aluno">
        <select class="col-8 form-control inputRegistar mt-4" type="text" form="curso" name="curso">
            <option value="null">Curso</option>
            <?php $link = new_db_connection();
            $stmt = mysqli_stmt_init($link);
            $query = "SELECT  nome  FROM cursos";
            if (mysqli_stmt_prepare($stmt, $query)){
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $curso);
                while(mysqli_stmt_fetch($stmt)){
                    echo "<option value='$curso'>$curso</option>";}
                mysqli_stmt_close($stmt);}
                mysqli_close($link);

            ?></select>
        <input class="col-8 form-control inputRegistar mt-4" type="date" name="nascimento" placeholder="Nascimento*">
        <select class="col-8 form-control inputRegistar mt-4 data" name="nacionalidade" form="nacionalidade">
        <option value="null">Nacionalidade</option>
        <?php
        $link = new_db_connection();
        $stmt = mysqli_stmt_init($link);
        $query = "SELECT  nome  FROM nacionalidades ";
        if (mysqli_stmt_prepare($stmt, $query)){
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nacionalidade);
        while(mysqli_stmt_fetch($stmt)){
            echo "<option value='$nacionalidade'>$nacionalidade</option>";}
            mysqli_stmt_close($stmt);}
            mysqli_close($link);

        ?></select>
        </select>
        <article class="col-12"></article>
        <button style="border-radius: 36px" class="col-4 mt-5 mb-5 p-2 inputRegistar" type="submit btn">REGISTAR</button>
        </form>


    <form class="form row justify-content-center" method="post" id="form_scout" action="scripts/registar_script.php?role=2">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="nome" placeholder="Nome*">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="apelido" placeholder="Apelido*">
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="mail" placeholder="Mail*">
    <input class="col-8 form-control inputRegistar mt-4" type="password" name="pass" placeholder="Password*">
   <select class="col-8 form-control inputRegistar mt-4" type="text" name="empresa" form="empresa">
       <option value="null">Empresa</option>
       <?php
       $link = new_db_connection();
       $stmt = mysqli_stmt_init($link);
       $query = "SELECT  nome  FROM empresas ";
       if (mysqli_stmt_prepare($stmt, $query)){
           mysqli_stmt_execute($stmt);
           mysqli_stmt_bind_result($stmt, $empresa);
           while(mysqli_stmt_fetch($stmt)){
               echo "<script>console.log('to')</script>";
               echo "<option value='$empresa'>$empresa</option>";}
           mysqli_stmt_close($stmt);
       }
       mysqli_close($link);
       ?></select>
    <select class="col-8 form-control inputRegistar mt-4" type="text" name="cargo" form="cargo">
       <option value="null">Cargo</option>
       <?php
       $link = new_db_connection();
       $stmt = mysqli_stmt_init($link);
       $query = "SELECT  nome  FROM cargos ";
       if (mysqli_stmt_prepare($stmt, $query)){
           mysqli_stmt_execute($stmt);
           mysqli_stmt_bind_result($stmt, $cargo);
           while(mysqli_stmt_fetch($stmt)){
               echo "<option value='$cargo'>$cargo</option>";}
           mysqli_stmt_close($stmt);
       }mysqli_close($link);
       ?></select>
    <input class="col-8 form-control inputRegistar mt-4" type="text" name="linkdin" placeholder="LinkdIn*">
    <input class="col-8 form-control inputRegistar mt-4" type="date" name="nascimento" placeholder="Nascimento*">
    <select class="col-8 form-control inputRegistar mt-4 data" name="nacionalidade" form="nacionalidade">
        <option value="null">Nacionalidade</option>
    <?php
    $link = new_db_connection();
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT  nome  FROM nacionalidades ";
    if (mysqli_stmt_prepare($stmt, $query)){
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nacionalidade);
    while(mysqli_stmt_fetch($stmt)){
        echo "<option value='$nacionalidade'>$nacionalidade</option>";}
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
?>
</select>
<article class="col-12"></article>
<button style="border-radius: 36px" class="col-4 mt-5 mb-5 p-2 inputRegistar" type="submit btn">REGISTAR</button>
</form>

