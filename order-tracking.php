<?php 
   include 'include/header.php';
   ?>

<!-- Order Tracking -->
<div class="order-tracking-area pt-100 pb-70 mt-4">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="order-img">
                    <img src="assets/images/order-main1.png" alt="Order">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="order-content">
                    <form>
                        <h2>Track Your Order</h2>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Order ID">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Billing Email">
                        </div>
                        <button type="submit" class="btn common-btn">
                            Track Order
                            <img src="assets/images/shape1.png" alt="Shape">
                            <img src="assets/images/shape2.png" alt="Shape">
                        </button>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">
                                I accept all <a href="terms-conditions.html">Terms & Conditions.</a> Lorem ipsum dolor
                                sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Order Tracking -->

<!-- Start Tracking  -->
<style>
    .tracking-header {
        padding: 10px 15px;
    }

    .step {
        position: relative;
        text-align: center;
        flex: 1;
    }

    .step-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #621991;
        color: white;
        font-size: 24px;
        margin: auto;
        z-index: 2;
    }

    .step-label {
        margin-top: 10px;
        font-size: 14px;
        color: #333;
    }

    .step-line-container {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 4px;
        background-color: transparent;

    }

    .step-line {
        position: absolute;
        top: -500%;
        left: -30%;
        transform: translateY(-50%);
        height: 4px;
        width: 60%;
        background-color: #621991;
        z-index: 1;
    }

    .step.disabled .step-icon {
        background-color: #e9ecef;
        color: #6c757d;
    }

    .step.disabled~.step-line-container .step-line {
        background-color: #e9ecef;
    }

    .step.disabled .step-line {
        background-color: #e9ecef;
    }
</style>
<div class="order-tracking-area">
<div class="container pb-4">
    <div class="card">
        <div class="tracking-header bg-secondary text-white">
            <strong>TRACKING ORDER NO - 001698653lp</strong>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Shipped Via:</strong> UPS Ground
                </div>
                <div class="col-md-4 text-center">
                    <strong>Status:</strong> Checking Quality
                </div>
                <div class="col-md-4 text-end">
                    <strong>Expected Date:</strong> SEP 09, 2017
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="step">
                    <div class="step-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p class="step-label">Confirmed Order</p>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <p class="step-label">Processing Order</p>
                    <div class="step-line-container">
                        <div class="step-line"></div>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <p class="step-label">Quality Check</p>
                    <div class="step-line-container">
                        <div class="step-line"></div>
                    </div>
                </div>
                <div class="step disabled">
                    <div class="step-icon">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <p class="step-label">Product Dispatched</p>
                    <div class="step-line-container">
                        <div class="step-line"></div>
                    </div>
                </div>
                <div class="step disabled">
                    <div class="step-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <p class="step-label">Product Delivered</p>
                    <div class="step-line-container">
                        <div class="step-line"></div>
                    </div>
                </div>
            </div>
            <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" id="notifyMe">
                <label class="form-check-label" for="notifyMe">Notify me when order is delivered</label>
            </div>
            <div class="text-end mt-3">
                <button class="common-btn">View Order Details</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Tracking  -->

<!-- Support -->
<div class="support-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="fa-solid fa-truck"></i>
                    <h3>Free Next Day Delivery</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="fa-solid fa-headset"></i>
                    <h3>24/7 Online Support</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="fa-solid fa-gift"></i>
                    <h3>Weekly Gift Voucher</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Support -->

<!-- Brand -->
<section class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Trusted Brand</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand1.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand2.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand3.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand4.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand5.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand6.png" alt="Brand">
                    </a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/images/brand/brand7.png" alt="Brand">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Brand -->

<?php include 'include/footer.php';?>