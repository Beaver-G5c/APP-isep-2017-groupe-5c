4<?php


function getFaqList($bdd){
    // la fonction recupère toute la base de données de faq pour l'afficher
    // la fonction renvoie un tableau avec tous les paramètres 
    // elle sert ensuite principalement d'argument pour la fonction display de la view
    $req=$bdd->query("SELECT * from faq");
    $dataArray=array("id_faq"=>array(),"question"=>array(),"answer"=>array(),"category"=>array());
    $i=0;
    while ($donnees = $req->fetch())
    {
        $dataArray['id_faq'][$i]=$donnees['id_faq'];
        $dataArray['question'][$i]=$donnees['question'];
        $dataArray['answer'][$i]=$donnees['answer'];
        $dataArray['category'][$i]=$donnees['category'];
        $i++;
        
    }
   
    return  $dataArray;
}

//On crÃ©Ã© une fonction qui nous permet d'ajouter des infos dans la bdd
function add_faq ($question,$answer,$category,$bdd)
    {
    // la fonction permet d'ajouter une question et une réponse à la base de données
        
    $req = $bdd->prepare('INSERT INTO `faq` (`question`, `answer`,`category`) VALUES (:question, :answer, :category)');
    $req-> execute (array(
        'question' => $question,
        'answer' => $answer,
        'category' => $category   
        ));
    }
    

//On veut modifier une ligne du tableau
function edit_faq_admin($question,$answer,$category,$id_faq,$bdd)
    {
    // cette fonction permet de modifier la faq dans le cas ou la réponse ou la question évolue
      
        $req = $bdd->prepare( 'UPDATE faq SET question = ?, answer = ?, category = ? WHERE id_faq = ?');
        $req-> execute (array(
            $question,
            $answer,
            $category,
            $id_faq
        
    ));
    

      
   
    }
 
//On veut supprimer une ligne du tableau
function delete_faq_admin($id_faq,$bdd)
    {
    // permet de supprimer une faq
        
        $bdd->exec("DELETE FROM `faq` WHERE id_faq = '".$id_faq."'");
    
    }

    function getQuestionData($bdd,$id_faq){
        // cette fonction sert a getter les données sur une question en particulier
        // quand on tappe sur modifier une question les champs sont déja remplis avec les donnéees déja dans la table pour que l'admin puisse se rappeller
        $req = $bdd->query('SELECT * FROM faq WHERE id_faq=" '.$id_faq.'"');
        $donnees = $req->fetch();
        return $donnees;
        
    }
    
    
    function getFaqCategories($bdd){
        // chaque FAQ est rangée dans une catégorie
        // l'affichage de proposition des ces catégories est dynamique dans le cas ou celles-ci évoluent
        // cette fonction sert a getter l'id et le name de chaque catégorie de fonction
        // elle retourne un tableau contenant toute la table 
        $reponse = $bdd->query('SELECT * FROM faq_categories');
        $dataArray=array("category_name"=>array(),"id_category"=>array());
        $i=0;
        while ($donnees = $reponse->fetch())
        {
            $dataArray['category_name'][$i]=$donnees['category_name'];
            $dataArray['id_category'][$i]=$donnees['id_category'];
            echo ($dataArray['category_name'][$i]);
            $i++;
            
        }
        return $dataArray;
        
     }
    
    ?>
