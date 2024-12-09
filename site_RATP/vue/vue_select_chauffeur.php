<h3>Liste des Chauffeurs </h3>
<table border="1">
    <tr>
        <td> Nom </td>
        <td> Prénom </td>
        <td> Email </td>
        <td> MDP </td>
        <td> Adresse </td>
    </tr>
    <?php
        foreach ($lesChauffeurs as $unChauffeur) {
            echo"<tr>";
            echo"<td>".$unChauffeur['nom']."</td>";
            echo"<td>".$unChauffeur['prenom']."</td>";
            echo"<td>".$unChauffeur['email']."</td>";
            echo"<td>".$unChauffeur['mdp']."</td>";
            echo"<td>".$unChauffeur['adresse']."</td>";
            echo"</tr>";
        }
    ?>
</table>