<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

require_once('librerias/cabe.php');


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Datos personales</h1>
            
            <ul>
                
                <li>ESTUDIANTES: Univ Jorge Luis Paxi Apaza	</li>
                <li>R.U.: 200020662</li>
                <li>C.I.: 9076572</li>
            </ul>
        </div>
    </div>
</div>
<?php
require_once('librerias/pie.php');
?>