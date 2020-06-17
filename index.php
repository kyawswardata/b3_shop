<?php include('header.php');
include_once('db/config.php');
 $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
 // echo $sql; exit();
 $result = mysqli_query($con,$sql);
?>
<div class="jumbotron">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="display-3">SFU Shopping</h1>
        <p class="lead">Buy one GET ONE</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, reprehenderit est veritatis esse perferendis voluptates? Debitis tempora reiciendis distinctio laborum expedita at, aliquam nobis rem ut dolore. Laboriosam, quidem nobis.</p>
        <p class="lead">
            <a class="btn btn-primary" href="Jumbo action link" role="button">Get Now</a>
        </p>
        </div>
    </div>
   </div>
</div>
<div class="container">
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)){
                    ?>
                       <div class="col-md-4">
                        <div class="card">
                        <img src="upload/<?php echo $row['item_image'];?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['item_name'];?></h5>
                            <p class="card-text"><?php echo $row['item_code'];?> <span class="badge badge-danger"><?php echo $row['item_price'];?></span></p>
                            <div class="text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="btn btn-primary pull-right">More Info</a>
                        </div>
                        </div>
                        </div>
                    <?php
                    }
                    ?>

    </div>
</div>
<?php include('footer.php');?>