
<?php 

session_start();

if(!empty($_SESSION['Universidad'])){

    echo $_SESSION['Universidad'];
    echo "---";
    echo "---";
    echo $_SESSION['Nombres'];
    
}
else{
    
    echo "No inicio sesion";
}


?>
