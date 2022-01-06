<?php

include("auth.php");
include("template.php");

head();
pre_loader();
horizontal_bar($userdept,$username);
menu($userdept,$username);

context($userdept,$username);

footer();

?>