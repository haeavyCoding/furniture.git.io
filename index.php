<?php include "layout/header.php" ?>
    <!-- hero section start -->
    <section>
    <?php
    include 'dbconnect/config.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['productid'];
        $productsel = "select * from addproduct where pid=$id";
        $product = mysqli_query($con, $productsel);
        if(mysqli_num_rows($product)>0){
            $productarray = mysqli_fetch_assoc($product) ;

            $data = [
                "productname"=>$productarray['productname'], 
                "category"=>$productarray['category'],
                "brand"=>$productarray['brand'],
                "price"=>$productarray['price'],
                "image"=>$productarray['image'],
                "description"=>$productarray['description']
            ];
            $_SESSION['product'][]=$data;
        }
        else
        $data=null;
    }
    // print_r($_SESSION['product']); 
?>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
  <?php 
  $count=0;
  $slider = "select * from slider";
  $res = mysqli_query($con,$slider);
  if(mysqli_num_rows($res) >0){
    while($slide = mysqli_fetch_assoc($res)){
        $count++;
        ?>
  
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $count-1; ?>" class="<?= $count-1==0?'active':''?>" aria-current="true" aria-label="Slide <?= $count ?>"></button>
    <?php
      }
    }
    ?>
  </div>
  <div class="carousel-inner">
    <?php
        $slider ="Select * from slider";
        $res = mysqli_query($con,$slider);
        $i=0;
        if(mysqli_num_rows($res) >0)
{
    while($slide = mysqli_fetch_assoc($res)){
        $i++;
        ?>
    <div class="carousel-item active <?php $i==1 ? 'active':'';?>">
      <img src="admin/productimage/<?= $slide['image']?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?= $slide['title']?></h5>
        <p><?= $slide['content']?></p>
        <button><?= $slide['button']?></button>
      </div>
    </div>
    <?php
    }
}
?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    <!-- hero section End -->
    <!-- material section start -->
    <section class="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 material-content">
                    <h2 class="material-heading pb-4">Crafted with excellent material.</h2>
                    <p class="material-des pb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                        Aliquam vulputate velit imperdiet dolor tempor tristique.
                        Aliquam vulputate velit imperdiet dolor.</p>
                    <button class="btn btn-dark rounded-pill px-5 py-2">Explore</button>
                </div>
               
                <?php include "dbconnect/config.php";
                    $query ="SELECT  * FROM addproduct LIMIT 3";
                    $result= mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                  
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 material-image">
                    <img src="admin/productimage/<?= $row['image'] ?>" alt="material Image" class="img-fluid">
                    <span class=" brandname"><?= $row['brand']?></span>
                    <div class="d-flex justify-content-between align-items-center pe-5">
                    <h3 class="material-title"><?= $row['productname']?></h3>
                    <strong class="material-price"><?php echo "Rs." .number_format($row['price'],2)?></strong>
                    
                
                    </div>
                    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                            <input type="hidden" value="<?= $row['pid']?>" name="productid">
                            <button class="btn btn-primary rounded-pill px-5 py-2" type="submit">Add Cart</button> 
                    </form>
                    
                </div>
                <?php           
                        }
                    } ?>
            </div>
        </div>
    </section>
    <!-- material section end -->
    <!-- choose section start -->
    <section class="choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="choose-content">Why Choose Us</h2>
                    <p class="choose-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.</p>
                    <div class="row">
                        <div class="col-lg-6  col-md-6 col-sm-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/truck.svg" alt="choose icon" class="img-fluid ">
                            </div>
                            <h3 class="choose-icon-content">Fast & Free Shipping</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/bag.svg" alt="choose icon" class="img-fluid ">
                            </div>
                            <h3 class="choose-icon-content">Easy to Shop</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/support.svg" alt="choose icon" class="img-fluid ">
                            </div>
                            <h3 class="choose-icon-content">24/7 Support</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/return.svg" alt="choose icon" class="img-fluid ">
                            </div>
                            <h3 class="choose-icon-content">Hassle Free Returns</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-6  col-sm-12"></div>
                <div class="col-lg-5 col-md-6  col-sm-12 choose-image">
                    <img src="images/why-choose-us-img.jpg" alt="choose image" class="img-fluid">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- choose section end -->
    <!-- Interior section start -->
    <section class="interior">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 interior-image">
                    <img src="images/img-grid-1.jpg" alt="interior Image" class="img-fluid">
                    <div class="img-grid2">
                        <img src="images/img-grid-2.jpg" alt="interior Image" class="img-fluid">
                    </div>
                    <div class="img-grid3">
                        <img src="images/img-grid-3.jpg" alt="interior Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12"></div>
                <div class="col-lg-5 col-md-6 col-sm-12 interior-content">
                    <h3 class="interior-heading">We Help You Make Modern Interior Design</h3>
                    <p class="interior-des">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl
                        dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
                        tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                    <ul class="interior-list">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2">Explore</button>
                </div>
            </div>
        </div>
    </section>
    <section class="interior-sub">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-1.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-2.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-3.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Interior section end -->
    <!-- Testimonials section start -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Testimonials</h2>
                <div class="owl-carousel owl-theme testimonial">
                    <div class="item">
                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada.
                            Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                        <div class="test-image">
                            <img src="images/person_1.jpg" alt="testimonial">

                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada.
                            Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                        <div class="test-image">
                            <img src="images/person_2.jpg" alt="testimonial">

                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada.
                            Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                        <div class="test-image">
                            <img src="images/person_3.jpg" alt="testimonial">

                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section end -->
    <!-- Blog section start -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="blog-heading">
                    <h2>Recent Blog</h2>
                    <a href="#">View All Post</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 post-image">
                    <img src="images/post-1.jpg" alt="Post Image" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="#">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 post-image">
                    <img src="images/post-2.jpg" alt="Post Image" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="#">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 post-image">
                    <img src="images/post-3.jpg" alt="Post Image" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="#">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
    <?php include "layout/footer.php" ?>
    