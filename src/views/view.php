
<?php 

require_once 'src/lib/Database.php';
require_once 'src/models/Note.php';
require_once 'src/views/resources/header.php';
$crud = new Note();
if (count($_POST)>0) {
    $id = $_POST['id'];
    $datos = array(
        'title'=>$_POST['title'] ?? '',
        'content'=>$_POST['content'] ?? ''
    );
    $respuesta = $crud->update($id,$datos);
    $nota = $crud->getOnce($id);

}else if (isset($_GET['id'])) {
    $nota = $crud->getOnce($_GET['id']);
}else{
    header('Location: http://localhost:3000/?view=home');
}

?>
    <h1>View</h1>
    <form action="?view=view&id=<?php echo $nota->_id; ?>" method="post" >
    <div class="row" style="padding: 10px;">
        <input type="text" name="title" placeholder="Title..." value="<?php echo $nota->title?>" >
    </div>
        <input type="hidden" name="id" value="<?php echo $nota->_id?>">
        <div class="row" style="padding: 10px;">
        <textarea name="content" id="" cols="30" rows="10"><?php echo $nota->content ?></textarea>
        </div>
        <div class="row-6" style="padding: 10px;">
            <button class="btn btn-primary">
                <i class="fas fa-retweet"></i>
                Update note
            </button>
        </div>
    </form>

<?php 
require_once 'src/views/resources/scripts.php';
?>