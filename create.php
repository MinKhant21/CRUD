<?php

require_once 'inc/header.php'; 

//name
//upload
if(isset($_REQUEST['name'])){
    //name

    $name = $_POST['name'];


    //upload
    $file = $_FILES;
    
    $tmp_name = $file['image']['tmp_name'];
    $file_name = uniqid().$file['image']['name'];

    move_uploaded_file($tmp_name,'./image/'.$file_name);
    

    //database
    $sql = "insert into info (name,image) values ('$name','$file_name')";
    $db->exec($sql);

    header("location:index.php");


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
                                <input type="text " name="name"> <br>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">Create</button>
                        </form>
                    </div>
                    </div>
                </div>

<?php require_once 'inc/footer.php'  ?>