<?php


//On créé une fonction qui nous permet d'ajouter des infos dans la bdd
function add_faq ($question,$answer,$category,$bdd)
    {
        
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
        
        $bdd->exec("DELETE FROM `faq` WHERE id_faq = '".$id_faq."'");
    
    }


    
    ?>
