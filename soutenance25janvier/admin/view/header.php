<?php 

function  header_admin($name)
{?>
    <header class='code_header'>
    

        <div class="element_logo"><a href='#'><img class = img src="logopetit.png" alt="Logo" title="Logo"/></a></div>

        <div class="element_texte"><a href=' <?php header('Location: index.php?page=admin_user'); ?>'>Utilisateurs</a></div>

        <div class="element_texte">|</div>

        <div class="element_texte"><a href='<?php header('Location: index.php?page=admin_catalogue'); ?>'>Catalogue</a></div>

        <div class="element_texte">|</div>

        <div class="element_texte"><a href='#'>FAQ</a></div>

        <div class="element_texte">|</div>

        <div class="element_texte"><a href='<?php header('Location: index.php?page=admin_cgu'); ?>'>CGU</a></div>

        <div class="element_texte">|</div>

        <div class="element_texte"><a href= "<?php header('Location: index.php?page=admin_install_number'); ?>">Numéro d'installation</a></div>

    	<div class="element_texte">|</div>

    	<div class="element_texte"><a href='#'><img class = img src="logout.png" alt="Log out" title="Log out"/></a></div>

	</header>



<?php }?>
