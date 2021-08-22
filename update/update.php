<?php require_once('../partail/header.php'); ?>
    <div class="container p-4">
    <?php 
        require_once('../database.php');
        $id = $_GET['id'];
        $dogs=  selectPost($id);
        foreach($dogs as $dog):
    ?>
        <form action="update_mode.php" method="post">
        <input type="hidden"value="<?=$dog['post_id']?>" name="PostId">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?=$dog['name']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description" value="<?=$dog['description']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$dog['price']?>">
            </div>
            </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('../partail/footer.php'); ?>