<h3>Liste des Bus </h3>
<table border="1">
    <tr>
        <td> ID Bus </td>
        <td> Matricule </td>
        <td> Marque </td>
        <td> Capacité </td>
        <td> Energie </td>
    </tr>
    <?php
        foreach ($lesBus as $unBus) {
            echo"<tr>";
            echo"<td>".$unBus['idbus']."</td>";
            echo"<td>".$unBus['matricule']."</td>";
            echo"<td>".$unBus['marque']."</td>";
            echo"<td>".$unBus['capacite']."</td>";
            echo"<td>".$unBus['energie']."</td>";
            echo"</tr>";
        }
    ?>
</table>