<?php
session_start();
function loadClass($class){
    require('models/classes/'.lcfirst($class).'.php');
}
spl_autoload_register('loadClass');

require('controllers/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] === 'home'){
        home();
    }
}
else{
    home();
}

?>