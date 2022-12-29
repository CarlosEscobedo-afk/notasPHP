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
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nota:</h5>
            <a class="btn btn-primary stretched-link" href="?view=view&id=<?php echo $nota->_id; ?>">
                <?php echo $nota->title; ?>
            </a>
        </div>
    </div>
<?php } ?>
<?php require_once 'src/views/resources/scripts.php'; ?>