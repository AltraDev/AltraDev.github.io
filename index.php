
<html>
<head>
  
 
   
</head>
<body>
       
<?php

$host = 'www.hypixel.net';
$up = ping($host);

// if site is up, send them to the site.
if( $up ) {
        echo '<script language="javascript">';
        echo 'alert("Webpage up")';
        echo '</script>';
}
// otherwise, take them to another one of our sites and show them a descriptive message
else {
        echo '<script language="javascript">';
        echo 'alert("Webpage Down")';
        echo '</script>';
}

?>
    
</body>
</html>