<?php require_once 'inc/header.php'; ?>

                <div class="card">
                    <div class="card-header">
                        <a href="create.php" class="btn btn-sm btn-success">Create</a>
                    </div>
                    <div class="card-body">

                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Option</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $d){ ?>
                                    <tr>
                                    <td><?= $d->name; ?></td>
                                    <td>
                                        
                                        <img src='"./Users/kaungminkhant/Desktop/code/crud/image/".<?= $d->image; ?>' alt="photo" class="img-thumbnail" style="width:100px;height:100px;">
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $d->id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="delete.php?id=<?= $d->id; ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php }?>


                                
                            </tbody>
                        </table>

                    </div>
                </div>
<?php require_once 'inc/footer.php' ?> 