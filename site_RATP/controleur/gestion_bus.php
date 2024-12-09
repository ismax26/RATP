<h2> Gestion des Bus</h2>
<?php
    require_once("vue/vue_insert_bus.php");
    if(isset($_POST['Valider'])){
        insertBus($_POST);
        echo"<br> Insertion rÃ©ussie du Bus";
    }
    $lesBus = selectAllBus();
    require_once("vue/vue_select_bus.php");
?>