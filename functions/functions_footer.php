<?php
function footer($statut){
    if ($statut=='admin')
        footer_admin();
    else
        footer_website();
    
}
function footer_website(){ ?>

<footer>

     
     <div id="conteneur-footer">

       <div class="element_footer">©2017 <a href="#">Domisep</a> tous droits réservés </div>




       <div class="element_footer"><a href="index.php?page=visitor_cgu">Mentions légales</a></div>





       <div class="element_footer"><a href="index.php?page=website_assistance">Assistance</a></div>

 
       <div class="element_footer"><a href='index.php?page=user_faq'>FAQ</a></div>

      
   </div>
</footer>

<?php } 

function footer_admin(){ ?>

<footer>

     
     <div id="conteneur-footer" style='display : center'>

       <div class="element_footer">©2017 <a href="#">Domisep</a> tous droits réservés </div>


       
   </div>
</footer>
<?php } ?>