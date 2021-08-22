<?php require_once('../partail/header.php'); ?>
    <div class="container p-4">
        <form action="create_mode.php" method="post" style="height:60pv" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="Image" name="image" id="image">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="User_id" name="user_id">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category_id" name="category_id">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form> 
    </div>
<?php require_once('../partail/footer.php'); ?>