<h2> Gestion des Chauffeurs</h2>
<?php
    require_once("vue/vue_insert_chauffeur.php");
    if(isset($_POST['Valider'])){
        insertChauffeur($_POST);
        echo"<br> Insertion rÃ©ussie du Chauffeur";
    }
    $lesChauffeurs = selectAllChauffeur();
    require_once("vue/vue_select_chauffeur.php");
?>