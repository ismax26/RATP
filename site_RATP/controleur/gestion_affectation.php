<h2> Gestion des Affectations</h2>
<?php
    require_once("vue/vue_insert_affectation.php");
    if(isset($_POST['Valider'])){
        insertAffectation($_POST);
        echo"<br> Insertion rÃ©ussie de l'affectation";
    }
    $lesAffectations = selectAllAffectation();
    require_once("vue/vue_select_affectation.php");
?>