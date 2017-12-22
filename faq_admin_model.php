
<?php


//On créé une fonction qui nous permet d'ajouter des infos dans la bdd
function add_faq ($question, $answer,$category){
        require ("connect.php");
    $req = $bdd->prepare('INSERT INTO `faq` (`question`, `answer`,`category`) VALUES (:question, :answer, :category)');
    $req-> execute (array(
        'question' => $question,
        'answer' => $answer,
        'category' => $category   
        ));
    
    echo 'Nous avons rajouté vos questions';
}

//On créé un tableau qui affiche nos valeurs de bdd pour l'administrateur
function table_faq_admin($reponse,$bdd,$donnees){
    require("connect.php");
   $reponse = $bdd->query('SELECT * FROM faq');

    echo "<table>";
       echo "<tr>";
            echo "<th>Clé</th>";
            echo "<th>Catégorie</th>";
            echo "<th>Question</th>";
            echo "<th>Réponse</th>";
        while ($donnees = $reponse->fetch())
        {
       echo "</tr>";
    
       echo	 "<tr>";
            echo "<td>".$donnees['id_faq']."</td>";
            echo "<td>".$donnees['category']."</td>";
            echo "<td>".$donnees['question']."</td>";
            echo "<td>".$donnees['answer']."</td>";
            echo "<form method='POST' action='' >";
            echo "<td><label><input type='submit' name='supprimer' class='supprimer' value='Supprimer'/></label></td>";
            echo "<td><label><input type='submit' name='modifier' class='Modifier' value='Modifier'/></label></td>";
       echo "</tr>";
        }

    echo "</table>";
    
    //On refait le même tableau mais pour le client, on ne peut pas modifier et supprimer les questions
    
// function table_faq($reponse,$bdd,$donnees){
//         require("connect.php");
//         $reponse = $bdd->query('SELECT * FROM faq');
        
//         echo "<table>";
//         echo "<tr>";
//         echo "<th>Clé</th>";
//         echo "<th>Catégorie</th>";
//         echo "<th>Question</th>";
//         echo "<th>Réponse</th>";
//         while ($donnees = $reponse->fetch())
//         {
//             echo "</tr>";
            
//             echo	 "<tr>";
//             echo "<td>".$donnees['id_faq']."</td>";
//             echo "<td>".$donnees['category']."</td>";
//             echo "<td>".$donnees['question']."</td>";
//             echo "<td>".$donnees['answer']."</td>";
//             echo "<form method='POST' action='' >";
//             echo "</tr>";
//         }
        
//         echo "</table>";
//     }
// }
 ?>
