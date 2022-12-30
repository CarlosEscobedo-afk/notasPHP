<?php

require_once 'src/lib/Database.php';
require_once 'src/models/Note.php';
require_once 'src/views/resources/header.php';
$crud = new Note();
$datos = $crud->get();
?>
<h1> Home</h1>
<?php foreach ($datos as $nota) {
?>
    <div style="padding-top: 20px;">
        <h5>Nota: <?php echo $nota->title; ?></h5>
        <a class="btn btn-primary" href="?view=view&id=<?php echo $nota->_id; ?>">
            Ir <i class="fas fa-arrow-right-from-bracket"></i>
        </a>
    </div>
<?php } ?>
<?php require_once 'src/views/resources/scripts.php'; ?>