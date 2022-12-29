
<?php
if (isset($_GET['view'])) {
    $view = $_GET['view'];
    require 'src/views/'.$view.'.php';
}else{
    echo $view;
    require 'src/views/home.php';
}

