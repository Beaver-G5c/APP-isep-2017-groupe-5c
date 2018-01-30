<?php
/*
 Chacune de ses fonctions active ou desactive un ou plusieurs actionneurs.
 On considere dans la bdd que si pour un activateur on a actif=1, alors l'élément fonctionne, et que si actif=0, il est éteint.
 
 On a donc des fonctions associees a chaque bouton de la page gestion manuelle.
 Par exemple, si on appuie sur le bouton eteindre toutes les lumieres, on active la fonction et_lum qui eteint tous les activateurs dont le type=3, ce qui correspond aux lumières
 Les autres fonctions agissent de la meme maniere
 */
function define_reveil($heure,$minutes,$bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    
    $req=$bdd->prepare("UPDATE capteurs SET valeur1=:valeur1 , valeur2=:valeur2, actif=1 WHERE id_insta=$ID_install && type=11");
    $req-> execute(array(
        'valeur1'=>$heure,
        'valeur2'=>$minutes,
    ));
    
    
    echo'<p class="notif"><span>Le r&eacuteveil a &eacutet&eacute enregistr&eacutee !</span></p>';
}

function define_reveil_des($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    
    $req=$bdd->exec("UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install && type=11");
    echo'<p class="notif"><span>Le r&eacuteveil a &eacutet&eacute desactiv&eacute</span></p>';
    
}


function define_chauffer($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $req=$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install AND type=8 ");
    echo'<p class="notif"><span>Le chauffage a &eacutet&eacute activ&eacute !</span></p>';
    
}

function define_chauffer_des($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $req=$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install AND type=8 ");
    echo'<p class="notif"><span>Le chauffage a &eacutet&eacute desactiv&eacute !</span></p>';
    
}

function open_win($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    
    $bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=9 ");
    
}

function close_win($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=9 ");
    
}

function allum_lum($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=1 ");
    
}

function et_lum($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=1 ");
    
}




function alarme($bdd)
{
    
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=7 ");
    
}

function ouvrevolets($bdd)
{
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=10 ");
}

function fermevolets($bdd)
{
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=10 ");
}
?>