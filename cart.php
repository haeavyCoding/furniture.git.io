<?php 
if(isset($_SESSION['product'])){
    header('Location:index.php');
} 

?>
<?php include "layout/header.php" ;
?>

    <main>
        <section class="cart-section">
            <div class="container">
                <div class="row">
                <h2>Cart</h2>
                </div>
            </div>
        </section>
        <section class="cart-section2">
        <div class="container">
                <div class="row justify-content-center">
                <table class="cart-table">
                    <tr class="cart-th">
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    <?php foreach($_SESSION['product'] as  $value){
                        ?>
                    <tr class="cart-td">
                        <td><img class="img-fluid" src="admin/productimage/<?= $value['image']; ?>" alt="cart-chair"></td>
                        <td><h5><?= $value['productname']; ?></5></td>
                        <td><?= $value['price']; ?></td>
                        <td>
                            <div class="quantity-counter d-flex align-item-center shadow-sm rounded">
                            <span id="minus-count" onclick="minusC()" class="">-</span>
                            <span id="num-count" class=" border-start border-end">01</span>
                            <span id="plus-count" class="" onclick="plusC()">+</span>
                        </div></td>
                        <td><?= $value['price'] ?></td>
                        <td>X</td>
                    </tr>
                    <?php } ?>
                  
                </table>
                <div class="row py-5 justify-content-between">
                    <div class="col-lg-6"> 
                        <div class="col-lg-12 d-flex justify-content-between w-100">
                            <a class="text-black text-decoration-none badge rounded-pill text-bg-dark d-block py-3 px-5 text-white" href="#">Update Cart</a>
                            <a class="text-black text-decoration-none badge rounded-pill text-bg-dark d-block py-3 px-5 text-white letter-spacing-2 tracking-widest" href="">Continue Shopping</a>
                        </div>
                        <div class="col-lg-12 pt-5 row">
                            <div class="col-lg-8">
                                <h4>Coupon</h4>
                                <p>Enter your coupon code if you have one.</p>
                                <input type="text" class="border-0 border-opacity-25 shadow rounded w-100 p-2" placeholder="Coupon Code">
                            </div>
                            <div class="col-lg-4 align-self-end">
                            <a class="text-black text-decoration-none badge rounded-pill text-bg-dark text-center d-block py-3 px-3 text-white" href="#">Aply Coupon</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-item-center">
                        <h5 class="carts-total text-center border-bottom pb-2">
                        CART TOTALS
                        </h5>
                        <table class="cart-total-table text-center">
                            <tr>
                                <td>Subtotal</td>
                                <td class="fw-medium">$230.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="fw-medium">$230.00</td>
                            </tr>
                        </table>
                        <a class="text-black text-decoration-none badge rounded-pill text-bg-dark d-block py-4 px-5 text-white fs-5" href="checkout.php">Proceed To Checkout</a>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>

<?php include "layout/footer.php"?>