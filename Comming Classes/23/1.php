<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../14.php';

if (!empty($_POST)) {
    require '../../Class 2/0.php';
    // echo 'POST';
    // echo '<pre>';
    // per('Lorint_r($_POST);

    $stmt = mysqli_prepare(
        $connection,
        "INSERT INTO posts (user_id, title, body) VALUES ('{$_SESSION['user_id']}', ?, ?);"
    );
    
    mysqli_stmt_bind_param(
        $stmt,
        "ss", // i	int, d	float, s string
        $_POST['title'],
        $_POST['body'],
    );
    
    mysqli_stmt_execute($stmt);    
    // echo 'Post inserted';
	header('Location: ../16.php');
    exit;
}

require '../17.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Post</h1>
    </div>
    <form action="1.php" method="post">
        <div class="form-floating">
            <input name="title" class="form-control" id="floatingInputTitle" placeholder="Post Title">
            <label for="floatingInputTitle">Post Title</label>
        </div>

        <div class="input-group">
              <textarea rows="5" name="body" class="form-control" placeholder="Body" aria-label="With textarea"></textarea>
        </div>
        <br>
        <button class="btn btn-primary py-2" type="submit">Add Post</button>
    </form>
</main>
<?php
require '../18.php';
?>