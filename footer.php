<?php
require_once('adminpanel/controller/indexFormController.php');

echo '
<div class="panel panel-info" align="center">
			   <div class="alert">
<p>Copyright &copy; '.date('Y').' | '.IndexForm::getNomEtab().' | <a href="mentions_legales.php" target="_blank"> Mentions l&eacute;gales</a> </p>
</div></div></body>
</html>';
?>
