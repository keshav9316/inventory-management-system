<?php

require 'connect.php';

 echo '<form action="idpass.php" method="POST"><INPUT TYPE="HIDDEN" NAME="userid" VALUE=$userid ><INPUT TYPE="HIDDEN" NAME="password" VALUE=$password ></form>';

require 'closeconnection.php';

?>