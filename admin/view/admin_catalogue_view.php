<a href="index.php?page=admin_homepage_management"><input type="button" value="Gestion de la page d'accueil"></a>
<a href="index.php?page=admin_mentions_legales"><input type="button" value='Gestion des mentions légales'></a>
<a href="index.php?page=admin_catalogue"><input type="button" value ='Gestion du catalogue'></a>
<h1 id='ajout_produit_titre'>Ajout de produit</h1>
    <div id='ajout_produit'>
        <form method='POST' action=''>
            <label>Nom du produit : <br><input type='text' name='product_name' class='product_name' placeholder='Ex:CC560'autofocus required maxlength=256/> </label><br>
            <label>Prix : <br><input type='tel' name='price' class='price' placeholder=' Ex:250'required/></label><br>
            <label>Consommation : <br><input type='tel'name='conso' class='conso' placeholder='404040404040' required maxlength=256/></label><br>
            <label>Description : <textarea rows='5' cols='70' name='description' class='description' placeholder='Ex:un tres bon capteur' required></textarea></label><br>
            <label>Type : <select id='type_device' name='type_device'>
            <?php get_device_category($bdd); ?>
            </select></label><br/>   
            <label><input type='submit' name='submit' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
    <div id='montrer_produit'>
        <h1 id='montre_produit_titre'>Nos produits en vente</h1>
    <table id='table_produit'>
    <tr>
    <td><b>ID</b></td>
    <td><b>Nom du produit</b></td>
    <td><b>Prix</b></td>
    <td><b>Consommation</b></td>
    <td><b>Description</b></td>
    <td><b>Type</b></td>
    <?php show_product($bdd); ?>
    </table>
</div>

