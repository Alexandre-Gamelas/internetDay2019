


<style>
<?php include "css/navbar.css"?>
</style>
<nav class="navbar navbar-expand navbar-bg  pl-0 pr-0">

    <div class="navbar-layer-preto" ></div>




<?php if(isset($_SESSION["username"])){
        $paginaback="menu.php";

}else{
    $paginaback="index.php";
}?>
    <div class="collapse navbar-collapse" id="navbarsExample02">
        <a class="navbar-brand pl-4" href="<?=$paginaback?>"> <img class="icon_back" src="assets/img/navbar/back-arrow.svg"></a>
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link nav-texto pos-center" href="#"> <?php if(isset($pagina)) echo $pagina ?> </a>
            </li>

        </ul>

    </div>
</nav>



