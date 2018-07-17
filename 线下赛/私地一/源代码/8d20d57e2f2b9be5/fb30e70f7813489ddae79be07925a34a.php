<?php
show_source(__FILE__);
$a = @$_REQUEST['a'];
@eval("var_dump($$a);");
?>