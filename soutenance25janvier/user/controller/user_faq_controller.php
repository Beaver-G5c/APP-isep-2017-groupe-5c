<?php

require ($localisation.'user/model/user_faq_model.php');
require ($localisation.'user/view/user_faq_view.php');
$data=getFaqTable($bdd);

displayFaq($data);

 