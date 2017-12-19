
<?php

function add_faq ($question, $answer,$category){
    
    // On ajoute les nouvelles infos dans la bdd
    require ("connect.php");
    $req = $bdd->prepare('INSERT INTO `faq` (`question`, `answer`,`category`) VALUES (:question, :answer, :category)');
    $req-> execute (array(
        'question' => $question,
        'answer' => $answer,
        'category' => $category   
        ));
    
    echo 'Nous avons rajouté vos questions';
}

?>
