<?php
	header("Content-Type:text/html;charset=utf-8");
	echo "请ping我的IP 看你会ping通吗";
	$target = $_REQUEST[ 'ip' ];
 
	$target=trim($target);

	$substitutions = array(
		'&'  => '',
		';' => '',
		'|' => '',
		'-'  => '',
		'$'  => '',
		'('  => '',
		')'  => '',
		'`'  => '',
		'||' => '',
	);


	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
    


	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		
		$cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 1 ' . $target );
	}


	echo  "<pre>{$cmd}</pre>";
	

?>
