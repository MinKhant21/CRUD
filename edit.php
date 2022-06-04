<?php

require_once 'inc/header.php'; 

$id =  $_GET['id'];

$sql = "SELECT * FROM info where id='$id'";
$res = $db->prepare($sql);
$res->execute();
$data = $res->fetch(PDO::FETCH_OBJ);
// echo "<pre>";
// print_r($data);

if(!$data){
    header("location:index.php");
}

if(isset($_REQUEST['name'])){
    $file = $_FILES;
    $name=$_REQUEST['name'];
    if($file['image']['name'] !== ''){
    
        $tmp_name = $file['image']['tmp_name'];
        $file_name = uniqid().$file['image']['name'];

        move_uploaded_file($tmp_name,'./image/'.$file_name);
    }else{
        $file_name = $data->image;
    }
    $sql = "update info set name='$name',image='$file_name' WHERE id='$id'";
    $db->exec($sql);
    header('location:index.php');
}





?>


                <div class="card">
                    <div class="card-header">
                        <a href="index.php" class="btn btn-sm btn-black">Back</a>
                    </div>
                    <div class="card-body">
                    <div class="container">

                    <form action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text " name="name" value="<?= $data->name ?>"> <br>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image">
                                <img src="'image/'.<?= $data->image?>" alt="<?= $data->image?>"">
                                
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary mt-3">Update</button>
                        </form>
                    </div>
                    </div>
                </div>

<?php require_once 'inc/footer.php'  ?>