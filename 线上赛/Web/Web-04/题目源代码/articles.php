<?php

if(isset($_GET['id'])){
    if(stripos($_GET['id'],'sleep') !== False){
        sleep(10);
    }
    $_GET['id'] = intval($_GET['id']);
    echo "contents:" . $_GET['id'];
}

?>