<style>
h1{
    color:green;
    text-align:center;
}
h2{
    font-family: 'Brush Script MT';
    color:white;

}
.container{
    background:yellow;
    margin:100px;
    margin-top:0;
}
</style>
    <h1>This is the munue You can click buy if</h1>
    <div class="container p-4">
        <form  action="" method="post" >
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by title" name="search">
            <div class="input-group-append">
            <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
        </form>
        <div class="d-flex justify-content-end p-2">
            <a href="update/create.php" class="btn btn-primary">Add +</a>
        </div>
        <?php 
            require_once('./database.php');
            $dogs="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //SEARCH
                $dogs=seachByTitle($_POST);
            }else{
                //select
                $dogs=getAll();
            }
            foreach($dogs as $dog):
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3"> 
                    <div class="card-body">
                        <h4 class="display-3 text-capitalize"><?= $dog['name'] ?></h4>
                        <div class="d-flex">
                            <span><?= $dog['date'] ?></span>                                                                                                                      
                        </div>
                        <img width="300" src="images/<?= $dog['image'] ?>" alt=""><br>
                        <strong class="badge"> <?= $dog['description'] ?></strong><br>
                        <strong class="badge badge-success"> <?= $dog['price'] ?>$</strong><br>
                    </div>
                    <a href="http://localhost/project_php/?page=contact" method="post">
                        <button type="submit">Order Now</button>
                    </a> 
                    <div class="action d-flex justify-content-end">
                        <a href="update/update.php?id=<?= $dog['post_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="update/delete.php?id=<?= $dog['post_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
               </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ©2021 Sreyhon khim: WEB 2021B
    </div>
    </footer>
