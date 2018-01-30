<?php
function idtotype($bdd,$id)
{
    
    $reponse = $bdd->query("SELECT Nom FROM type_device WHERE ID_type = $id");
    while ($donnees = $reponse->fetch()) 
    {
    echo "<td>"; echo($donnees['Nom']); echo"</td>";
    }
}
function add_comment($bdd,$nom,$text,$ID_catalogue)
{
    
    $req=$bdd->prepare("INSERT INTO `avis` (`Nom`,`Texte`,`Date`,`ID_catalogue`) VALUES(:Nom,:Texte,NOW(),:ID_catalogue)");
        $req-> execute(array(
        'Nom'=>$nom,
        'Texte'=>$text,
        'ID_catalogue'=>$ID_catalogue
        ));
}
function show_comment($bdd,$id)
{
    
    $reponse = $bdd->query("SELECT * FROM avis WHERE ID_catalogue = $id");
    while ($donnees = $reponse->fetch()) 
    {
    echo "<h3>"; echo($donnees['Nom']); echo"</h3>";
    echo "<p>"; echo($donnees['Texte']); echo"</p><br>";
    }
}

function show_product($bdd)
{
    
    $reponse = $bdd->query('SELECT * FROM catalogue');
    while ($donnees = $reponse->fetch()) 
    {  
        echo '<tr>
        <td>'; echo($donnees['ID']); echo '</td>
        <td>'; echo($donnees['product_name']); echo '</td>
        <td>'; echo($donnees['price']); echo '</td>   
        <td>'; echo($donnees['conso']); echo '</td>
        <td>'; echo($donnees['description']); echo '</td>';
        idtotype($bdd,$donnees['ID_type']);
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='ID' value= '";echo($donnees['ID']);echo"' class='Avis'/>";
        echo "<input type='hidden' name='product_name' value= '";echo($donnees['product_name']);echo"' class='Avis'/>";
        echo "<input type='hidden' name='price' value= '";echo($donnees['price']);echo"' class='Avis'/>";
        echo "<input type='hidden' name='conso' value= '";echo($donnees['conso']);echo"' class='Avis'/>";
        echo"<input type='hidden' name='description' value= '";echo($donnees['description']);echo"' class='Avis'/>";
        echo"<input type='hidden' name='ID_type' value= '";idtotype($bdd,$donnees['ID_type']);echo"' class='Avis'/>";
        echo "<td><input type='submit' name='submit' value= 'Avis' class='button_avis'/></td>
        </form>";
    } 
}
?>