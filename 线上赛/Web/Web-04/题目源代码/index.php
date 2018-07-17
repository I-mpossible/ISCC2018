<!DOCTYPE html>
<html lang="en">
<head>
    <title>导航页</title>
    <meta charset="UTF-8">
</head>
<body>
    <a href='index.php?f=articles&id=1'>ID: 1</href>
    </br>
    <a href='index.php?f=articles&id=2'>ID: 2</href>
    </br>
    <a href='index.php?f=articles&id=3'>ID: 3</href>
    </br>
    <a href='index.php?f=articles&id=4'>ID: 4</href>
    </br>
</body>
</html>

<?php
    #flag{LFIOOOOOOOOOOOOOO}
    if(isset($_GET['f'])){
        if(strpos($_GET['f'],"php") !== False){
            die("error...");
        }
        else{
            include($_GET['f'] . '.php');
        }
    }
    
?>

