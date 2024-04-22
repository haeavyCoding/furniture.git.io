<?php include "layout/header.php" ?>
<main>
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <h2>Checkout</h2>
            </div>
        </div>
    </section>

    <!-- section 2 will be started here -->
    <section class="cart-section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 border p-4">
                    Returning customer? <a class="text-black" href="#">Click here</a> to login
                </div>
                <div class="row py-5">
                    <div class="col-lg-6">
                        <h3>Billing Details</h3>
                        <form class="bg-white p-5 shadow-sm border rounded  d-flex flex-column gap-2">
                            <select class="mb-3 form-select border shadow-sm text-decoration-none p-2 rounded"
                                aria-label="Default select example">
                                <option class="p-5" selected>Select Country</option>
                                <option class="p-5" value="1">Bharat</option>
                                <option class="p-5" value="2">BanglaDesh</option>
                                <option class="p-5" value="3">Algiria</option>
                                <option class="p-5" value="3">America</option>
                                <option class="p-5" value="3">Roosh</option>
                            </select>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control p-2" placeholder="First name"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="email" class="form-control" id="company" placeholder="Company Name">
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Address *</label>
                                <input type="text" class="form-control" id="company" placeholder="Street Address">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="company"
                                    placeholder="Apartment suit unit (Optional)">
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="company" class="form-label">State/Country *</label>
                                    <input type="text" class="form-control p-2" placeholder="First name"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="company" class="form-label">Posta / Zip *</label>
                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control p-2" placeholder="First name" name="email"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="company" class="form-label">Phone *</label>
                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>


                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <input type="checkbox" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                    Create an Account
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body fs-20 lh-sm text-secondary">Create an account by
                                            entering the information below. If you are a returning customer please login
                                            at the top of the page.</div>
                                        <div class="mb-3">
                                            <label for="accountpassword" class="form-label">Accont Password</label>
                                            <input type="password" class="form-control" id="accountpassword"
                                                placeholder="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <input type="checkbox" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                Ship To A Different Address?
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form class="bg-white p-5 shadow-sm border rounded  d-flex flex-column gap-2">
                                            <select
                                                class="mb-3 form-select border shadow-sm text-decoration-none p-2 rounded"
                                                aria-label="Default select example">
                                                <option class="p-5" selected>Select Country</option>
                                                <option class="p-5" value="1">Bharat</option>
                                                <option class="p-5" value="2">BanglaDesh</option>
                                                <option class="p-5" value="3">Algiria</option>
                                                <option class="p-5" value="3">America</option>
                                                <option class="p-5" value="3">Roosh</option>
                                            </select>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <input type="text" class="form-control p-2" placeholder="First name"
                                                        aria-label="First name">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                                        aria-label="Last name">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="company" class="form-label">Company</label>
                                                <input type="email" class="form-control" id="company"
                                                    placeholder="Company Name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="company" class="form-label">Address *</label>
                                                <input type="text" class="form-control" id="company"
                                                    placeholder="Street Address">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="company"
                                                    placeholder="Apartment suit unit (Optional)">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="company" class="form-label">State/Country *</label>
                                                    <input type="text" class="form-control p-2" placeholder="First name"
                                                        aria-label="First name">
                                                </div>
                                                <div class="col">
                                                    <label for="company" class="form-label">Posta / Zip *</label>
                                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                                        aria-label="Last name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="email" class="form-label">Email Address *</label>
                                                    <input type="email" class="form-control p-2"
                                                        placeholder="First name" name="email" aria-label="First name">
                                                </div>
                                                <div class="col">
                                                    <label for="company" class="form-label">Phone *</label>
                                                    <input type="text" class="form-control p-2" placeholder="Last name"
                                                        aria-label="Last name">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Order Notes</label>
                                <textarea class="form-control resise-none" id="exampleFormControlTextarea1" rows="4"
                                    placeholder="Write Your Notes here"></textarea>
                            </div>
                        </form>
                    </div>









                    <div class="col-lg-6">
                        <h3>Coupon Code</h3>
                            <div class="bg-white p-5 shadow-sm border rounded  d-flex flex-column gap-2">
                                <p>Enter your coupon code if you have one</p>
                                <div class="row mb-3">
                                                <div class="col">
                                                    <input type="text" class="form-control p-2" placeholder="Coupon Code"
                                                        aria-label="First name">
                                                </div>
                                                <div class="col">
                                                    <input type="submit" class=" border rounded-pill py-2 px-4 bg-black text-white" value="Apply" >
                                                </div>
                                            </div>
                            </div>

                            <h3 class="mt-4">Your Order</h3>
                            <div class="bg-white p-5 shadow-sm border rounded  d-flex flex-column gap-2">
                            <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                <td>Top Up T-Shirt x 1</td>
                                <td>$250.00</td>
                                </tr>
                                <tr>
                                <td>Polo Shirt x 1</td>
                                <td>	$100.00</td>
                                </tr>
                                <tr>
                                <td>Cart Subtotal</td>
                                <td>	$350.00</td>
                                </tr>
                                <tr>
                                <td>Order Total</td>
                                <td>$350.00</td>
                                </tr>
                            </tbody>
                            </table>
                            <div class="row py-3 border">
                                <a class="text-secondary" href="#">Direct Bank Transfer</a>
                            </div>
                            <div class="row py-3 border">
                                <a class="text-secondary" href="#">Cheque Payment</a>
                            </div>
                            <div class="row py-3 border">
                                <a class="text-secondary" href="#">Paypal</a>
                            </div>
                            <a href="#" class="btn btn-dark rounded-pill p-2 mt-2">Order Place</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include "layout/footer.php" ?>