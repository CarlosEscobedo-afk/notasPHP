<?php
require_once "src/lib/Database.php";
require_once "src/models/Note.php";
require_once 'src/views/resources/header.php';

$crud = new Note();
if (count($_POST)>0) {
$datos = array(
    'title' => $_POST['title'] ?? '',
    'content' => $_POST['content'] ?? ''
);
$respuesta = $crud->save($datos);
}

?>
<h1>Create Nota</h1>

    <form action="?view=create" method="post">
        <div class="row" style="padding: 10px;">
            <input type="text" name="title" placeholder="Title...">
        </div>
        <div class="row" style="padding: 10px;">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="row-6" style="padding: 10px;">
            <button class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Crear Nota
            </button>
        </div>
    </form>
<?php
require_once 'src/views/resources/scripts.php';
?>