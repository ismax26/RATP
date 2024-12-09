<?php
    /*
    dans ce fichier, on réalise toutes les fonctions de 
    connexion à la BDD, deconnexion de la BDD et exécution de 
    l'ensemble des requetes sur les tables de la BDD:
    insert,delete,updtae,<select name="" id="" class=""></select>
    */
    function connexion (){
        $connexion =mysqli_connect("localhost","root","","ratp_284_1");
        if ($connexion ==null){
            echo "Erreur de connexion au serveur Mysql.";
        }
        return $connexion;
    }
    function deconnexion ($connexion){
        mysqli_close($connexion);
    }
    /** Gestion des lignes **/
    function insertligne ($tab){
        $requete = "insert into ligne values (null,'"
        .$tab['description']."','"
        .$tab['statdebut']."','"
        .$tab['statfin']."','"
        .$tab['nbStations']."');";

        $con= connexion (); //appel de la connexion
        mysqli_query($con, $requete); //execution de la requete
        deconnexion($con); // deconnexion de la base de données
    }
    function selectAllLignes(){
        $requete ="select * from ligne; ";
        $con= connexion ();
        $lesLignes=mysqli_query($con, $requete);
        deconnexion($con);
        return $lesLignes;
    }
    function deleteLigne ($idligne){
        $requete ="delete from ligne where idligne=".$idligne;
        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function updateLigne ($tab){
        $requete="update ligne set description='"
        .$tab['description']        ."' , stationDebut='"
        .$tab['statdebut']       ."' , stationFin='"
        .$tab['statfin']         ."' , nbStations='"
        .$tab['nbStations']         ."'  where idligne="
        .$tab['idligne'];

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);

    }
    function selectWhereLigne ($idligne){
        $requete="select * from ligne where idligne=".$idligne;

        $con= connexion();
        $resultats =  mysqli_query($con, $requete);
        $laLigne = mysqli_fetch_assoc($resultats);
        deconnexion($con);
        return $laLigne ;

}
    /** Gestion des Bus **/
    function insertBus ($tab){
        $requete = "insert into bus values(null,'"
        .$tab['matricule']."','"
        .$tab['marque']."','"
        .$tab['capacité']."','"
        .$tab['energie']."');";

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectAllBus(){
        $requete ="select * from bus; ";
        $con= connexion ();
        $lesBus=mysqli_query($con, $requete);
        deconnexion($con);
        return $lesBus;
    }
    /** Gestion des Chauffeur **/
    function insertChauffeur ($tab){
        $requete = "insert into chauffeur values(null,'"
        .$tab['nom']."','"
        .$tab['prenom']."','"
        .$tab['email']."','"
        .$tab['mdp']."','"
        .$tab['adresse']."');";

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectAllChauffeur(){
        $requete ="select * from chauffeur; ";
        $con= connexion ();
        $lesChauffeurs=mysqli_query($con, $requete);
        deconnexion($con);
        return $lesChauffeurs;
    }
    /** Gestion des Affectations **/
    function insertAffectation ($tab){
        $requete = "insert into affectation values(null,'"
        .$tab['dateaffectation']."','"
        .$tab['description']."','"
        .$tab['idligne']."','"
        .$tab['idbus']."','"
        .$tab['idchauffeur']."');";

        $con= connexion();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectAllAffectation(){
        $requete ="select * from affectation; ";
        $con= connexion ();
        $lesAffectations=mysqli_query($con, $requete);
        deconnexion($con);
        return $lesAffectations;
    }
?>