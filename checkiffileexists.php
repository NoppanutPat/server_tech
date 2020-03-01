<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
$filename = 'test.php';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
 </body>
</html>

