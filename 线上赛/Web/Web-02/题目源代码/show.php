<?php
error_reporting(0);
ini_set('display_errors','Off');

include('config.php');

$img = $_GET['img'];
if(isset($img) && !empty($img))
{
    if(strpos($img,'jpg') !== false)
    {
        if(strpos($img,'resource=') !== false && preg_match('/resource=.*jpg/i',$img) === 0)
        {
            die('File not found.');
        }

        preg_match('/^php:\/\/filter.*resource=([^|]*)/i',trim($img),$matches);
        if(isset($matches[1]))
        {
            $img = $matches[1];
        }

        header('Content-Type: image/jpeg');
        $data = get_contents($img);
        echo $data;
    }
    else
    {
        die('File not found.');
    }

}
else
{
    ?>
    <img src="1.jpg">
    <?php
}
?>  