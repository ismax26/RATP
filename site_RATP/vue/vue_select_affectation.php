<h3>Liste des Affectation </h3>
<table border="1">
    <tr>
        <td> Description </td>
        <td> Date Affectation </td>
        <td> Ligne </td>
        <td> Bus </td>
        <td> Chauffeur </td>
    </tr>
    <?php
        foreach ($lesAffectations as $uneAffectation) {
            echo"<tr>";
            echo"<td>".$uneAffectation['description']."</td>";
            echo"<td>".$uneAffectation['dateaffectation']."</td>";
            echo"<td>".$uneAffectation['idligne']."</td>";
            echo"<td>".$uneAffectation['idbus']."</td>";
            echo"<td>".$uneAffectation['idchauffeur']."</td>";
            echo"</tr>";
        }
    ?>
</table>