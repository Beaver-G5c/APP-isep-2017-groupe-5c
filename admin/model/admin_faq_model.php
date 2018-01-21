<?php


function getFaqList($bdd){
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

    function getQuestionData($bdd,$id_faq){
        $req = $bdd->query('SELECT * FROM faq WHERE id_faq=" '.$id_faq.'"');
        $donnees = $req->fetch();
        return $donnees;
        
    }
    
    
    function getFaqCategories($bdd){
        $reponse = $bdd->query('SELECT * FROM faq_categories');
        $dataArray=array("category_name"=>array(),"id_category"=>array());
        $i=0;
        while ($donnees = $reponse->fetch())
        {
            $dataArray['category_name'][$i]=$donnees['category_name'];
            $dataArray['id_category'][$i]=$donnees['id_category'];
           
            $i++;
            
        }
        return $dataArray;
        
     }
    
    ?>
