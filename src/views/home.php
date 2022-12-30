<?php

require_once 'src/lib/Database.php';
require_once 'src/models/Note.php';
require_once 'src/views/resources/header.php';
$crud = new Note();
$datos = $crud->get();
?>
<h1> Home</h1>
<div style="  display: flex;
flex-wrap: wrap;
gap: 5px;
padding: 10px;">
<?php foreach ($datos as $nota) {
?>
    <div style="background-color: white;
  width: 400px;
  height: 400px;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  border: solid 2px transparent;
  border-radius: 5px;">

        <h5><?php echo $nota->title; ?></h5>
        <a class="btn btn-primary" href="?view=view&id=<?php echo $nota->_id; ?>">
            Ir <i class="fas fa-arrow-right-from-bracket"></i>
        </a>
    </div>
    <?php } ?>
</div>
<?php require_once 'src/views/resources/scripts.php'; ?>