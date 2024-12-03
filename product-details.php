<?php include 'include/header.php'; ?>
<!-- Single Product -->
<style>
   .slick-list {
      height: 570px !important;
   }

   .top-img {
      width: 160px;
   }

   .product-img--main {
      position: relative;
      overflow: hidden;
      /* margin-bottom: 30px; */
      width: 600px;
      height: 600px;
      float: left;
      margin: 10px;
   }

   .product-img--main::after {
      position: absolute;
      font-size: 3rem;
      color: #333;
   }

   .product-img--main__image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      -webkit-transition: -webkit-transform .5s ease-out;
      transition: -webkit-transform .5s ease-out;
      transition: transform .5s ease-out;
      transition: transform .5s ease-out, -webkit-transform .5s ease-out;
   }

   .quick-box {
      border: 2px solid #B2BEB5;
      padding: 10px;
   }

   .attr-color,
   .attr-size {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
   }

   .list-filter {
      display: flex;
      gap: 10px;
      list-style-type: none;
   }

   .color-option {
      height: 30px;
      width: 30px;
      border-radius: 50%;
      /* Makes the box round */
      display: inline-block;
      border: 4px solid white;
      /* Ensures proper display */
   }

   .color-option:hover {
      -webkit-box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      -moz-box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      border: 4px solid #434E6E;
      transition: border-color 0.6s ease;
   }

   .size-option {
      height: 35px;
      min-width: 40px;
      padding: 5px;
      font-weight: bold;
      text-align: center;
      display: inline-block;
      border-radius: 20px;
      border: 2px solid #808080;
      color: #000;
      transition: background-color 0.6s ease;
      /* Smooth color transition */
   }

   .size-option:hover {
      -webkit-box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      -moz-box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      box-shadow: 0px 3px 17px 2px rgba(0, 0, 0, 0.26);
      background: #808080;
      /* Change to your desired hover color */
      color: #fff;
      /* Optional: Change text color on hover */
      cursor: pointer;
   }

   .tagsocial li :hover {
      color: blue;
   }
</style>
<div class="product-details-area ptb-100">
   <div class="container">
      <div class="top">
         <div class="row align-items-center mt-4 mb-4">
            <div class="col-lg-7">
               <div class="outer">
                  <div class="row">
                     <div class="col-sm-3 col-lg-3">
                        <div class="products-nav">
                           <div class="item">
                              <div class="top-img align-middle">
                                 <img src="assets/images/p1.avif" alt="Product">
                              </div>
                           </div>
                           <div class="item">
                              <div class="top-img">
                                 <img src="assets/images/p2.avif" alt="Product">
                              </div>
                           </div>
                           <div class="item">
                              <div class="top-img ">
                                 <img src="assets/images/p3.avif" alt="Product">
                              </div>
                           </div>
                           <div class="item">
                              <div class="top-img">
                                 <img src="assets/images/p4.avif" alt="Product">
                              </div>
                           </div>
                           <div class="item">
                              <div class="top-img">
                                 <img src="assets/images/p4.avif" alt="Product">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-9 col-lg-9 mt-2">
                        <div class="product-preview">
                           <div class="item">
                              <div class="product-img--main" data-scale="2" data-image="assets/images/p1.avif"
                                 style="width: 555.984px;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="product-img--main" data-scale="2" data-image="assets/images/p2.avif"
                                 style="width: 555.984px;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="product-img--main" data-scale="2" data-image="assets/images/p3.avif"
                                 style="width: 555.984px;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="product-img--main" data-scale="2" data-image="assets/images/p4.avif"
                                 style="width: 555.984px;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="product-img--main" data-scale="2" data-image="assets/images/p4.avif"
                                 style="width: 555.984px;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="top-content">
                  <h2>Royal Yellow Arm Chair</h2>
                  <ul class="reviews">
                     <!-- <li>
                        <i class="bx bxs-star checked"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star checked"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star checked"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star checked"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <span>(2 Reviews)</span>
                     </li> -->
                     <li class="pt-3 pb-3">
                        <span class="text-primary"><i class="fa-solid fa-bangladeshi-taka-sign text-primary"
                              style="font-size: 26px;"> 400.00</i></span>
                        <span class=" ps-2 text-secondary-emphasis"> <del><i
                                 class="fa-solid fa-bangladeshi-taka-sign text-secondary-emphasis"
                                 style="font-size: 16px;"> 600.00</del></i></span>
                     </li>
                  </ul>
                  <ul class="tag">
                     <div class="row quick-box">
                        <h5 class="mb-10">Quick Overview</h5>
                        <div class="col-12 d-flex justify-content-between">
                           <div class="col-6">
                              <li><span>Fabric Type: </span>Bi-elastic</li>
                              <li><span>Size: </span>S, M, L, XL, XXL, XXXL</li>
                           </div>
                           <div class="col-6">
                              <li><span>Weight: </span>Light weight</li>
                              <li><span>Color: </span>Black, Carbon, Navy</li>
                           </div>
                        </div>
                     </div>
                  </ul>
                  <ul>
                     <div class="attr-detail attr-color mt-20 mb-20">
                        <strong class="color-size mr-10">Color</strong>
                        <ul class="list-filter color-filter">
                           <li>
                              <div class="color-option bg-black">
                                 <span class=""></span>
                              </div>
                              <p class="color-stock-preview position-absolute" style="font-size: 12px; display:none;">11
                                 Items Left</p>
                           </li>
                           <li>
                              <div class="color-option bg-primary">
                                 <span class=""></span>
                              </div>
                              <p class="color-stock-preview position-absolute" style="font-size: 12px; display:none;">11
                                 Items Left</p>
                           </li>
                           <li>
                              <div class="color-option bg-secondary">
                                 <span class=""></span>
                              </div>
                              <p class="color-stock-preview position-absolute" style="font-size: 12px; display:none;">11
                                 Items Left</p>
                           </li>
                           <li>
                              <div class="color-option bg-info">
                                 <span class=""></span>
                              </div>
                              <p class="color-stock-preview position-absolute" style="font-size: 12px; display:none;">11
                                 Items Left</p>
                           </li>
                        </ul>
                     </div>
                  </ul>
                  <ul>
                     <div class="attr-detail attr-size mt-4 mb-4">
                        <strong class="color-size mr-10">Size</strong>
                        <ul class="list-filter size-filter font-small" id="sizeOptions" wire:ignore="">
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="S" wire:click="itemSize(40)">
                                 <span>S</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute" style="font-size: 12px;"> 2
                                 Items</p>
                           </li>
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="M" wire:click="itemSize(41)">
                                 <span>M</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute"
                                 style="display: none; font-size: 12px;"> 2 Items</p>
                           </li>
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="L" wire:click="itemSize(42)">
                                 <span>L</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute"
                                 style="display: none; font-size: 12px;"> 4 Items</p>
                           </li>
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="XL" disabled="" wire:click="itemSize(43)">
                                 <span>XL</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute"
                                 style="display: none; font-size: 12px;"> 0 Items</p>
                           </li>
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="XXL" disabled="" wire:click="itemSize(43)">
                                 <span>XXL</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute"
                                 style="display: none; font-size: 12px;"> 0 Items</p>
                           </li>
                           <li class="" wire:ignore="">
                              <div class="size-option" data-size="XXXL" disabled="" wire:click="itemSize(43)">
                                 <span>XXXL</span>
                              </div>
                              <p wire:ignore="" class="size-stock-preview position-absolute"
                                 style="display: none; font-size: 12px;"> 0 Items</p>
                           </li>
                        </ul>
                     </div>

                  </ul>

                  <ul class="cart">
                     <li>
                        <ul class="number">
                           <li>
                              <span class="minus">-</span>
                              <input type="text" value="1">
                              <span class="plus">+</span>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a class="common-btn" href="#">
                           Buy
                        </a>
                     </li>
                     <li>
                        <a class="common-btn" href="#">
                           Add To Cart
                        </a>
                     </li>
                     <li>
                        <a class="common-btn" data-bs-toggle="modal" data-bs-target="#chartModal">
                           Chart
                        </a>
                     </li>
                  </ul>
                  <ul class="tag">
                     <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                           <div class="col-6">
                              <li>SKU: <span>042</span></li>
                              <li>Category: <span>Sofa</span></li>
                           </div>
                           <div class="col-6">
                              <li>Tag: <span>Furniture</span></li>
                              <li>Status: <span>In Stock</span></li>
                           </div>
                        </div>
                     </div>
                  </ul>
                  <div class="social-links">
                     <ul>
                        <li class="fs-5 m-2"><i class="fa-solid fa-share-nodes"></i></li>
                        <li>
                           <a href="https://www.facebook.com/" target="_blank">
                              <i class="bx bxl-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.twitter.com/" target="_blank">
                              <i class="bx bxl-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/" target="_blank">
                              <i class="bx bxl-linkedin"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.skype.com/" target="_blank">
                              <i class="bx bxl-skype"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.youtube.com/" target="_blank">
                              <i class="bx bxl-youtube"></i>
                           </a>
                        </li>
                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <div class="bottom">
         <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-info-tab" data-bs-toggle="pill" href="#pills-info" role="tab"
                  aria-controls="pills-info" aria-selected="false" tabindex="-2">Additional Info</a>

            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false" tabindex="-1">Reviews</a>
            </li>

         </ul>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               <div class="bottom-description">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                     labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                     dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                     amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                     invidunt ut labore et dolore magna</p>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                     when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                     distribution of letters, as opposed to using 'Content here, content here', making it look like
                     readable English</p>
                  <ul>
                     <li><span></span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</li>
                     <li><span></span> Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                     </li>
                     <li><span></span> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                        gubergren</li>
                     <li><span></span> No sea takimata sanctus est Lorem ipsum dolor sit amet</li>
                     <li><span></span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor</li>
                  </ul>
               </div>
            </div>
            <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
               <div class="bottom-description">

                  <div class="row">
                     <h5 class="mb-10">Additional Information</h5>
                     <div class="col-12 d-flex justify-content-between">
                        <div class="col-6">
                           <li><span>Fabric Type: </span>Bi-elastic</li>
                           <li><span>Size: </span>S, M, L, XL, XXL, XXXL</li>
                        </div>
                        <div class="col-6">
                           <li><span>Weight: </span>Light weight</li>
                           <li><span>Color: </span>Black, Carbon, Navy</li>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
               <div class="bottom-comment">
                  <ul class="comments">
                     <li>
                        <img src="assets/images/blog/comment1.jpg" alt="Blog">
                        <h4>Tom Henry</h4>
                        <span>01 December, 2024</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                           invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                           et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                        <ul class="reviews">
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star"></i>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <img src="assets/images/blog/comment2.jpg" alt="Blog">
                        <h4>Angele Carter</h4>
                        <span>02 December, 2024</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                           invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                           et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                        <ul class="reviews">
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star checked"></i>
                           </li>
                           <li>
                              <i class="bx bxs-star"></i>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <div class="bottom-review">
                  <h3>Leave A Review</h3>
                  <form>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                     </div>
                     <div class="form-group">
                        <textarea id="your-comments" rows="8" class="form-control" placeholder="Comments"></textarea>
                     </div>
                     <button type="submit" class="btn common-btn">
                        Post A Review
                        <img src="assets/images/shape1.png" alt="Shape">
                        <img src="assets/images/shape2.png" alt="Shape">
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Single Product -->
<!-- Products -->
<div class="products-area pb-70">
   <div class="container">
      <div class="section-title">
         <h2>Related Products</h2>
      </div>
      <div class="row">
         <div class="col-sm-6 col-lg-3">
            <div class="products-item">
               <div class="top">
                  <a class="wishlist" href="#">
                     <i class="bx bx-heart"></i>
                  </a>
                  <img src="assets/images/products/products10.png" alt="Products">
                  <div class="inner">
                     <h3>
                        <a href="single-product.html">White Luxury Wardrobe</a>
                     </h3>
                     <span>$200.00</span>
                  </div>
               </div>
               <div class="bottom">
                  <a class="cart-text" href="#">Add To Cart</a>
                  <i class="bx bx-plus"></i>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3">
            <div class="products-item">
               <div class="top">
                  <a class="wishlist" href="#">
                     <i class="bx bx-heart"></i>
                  </a>
                  <img src="assets/images/products/products11.png" alt="Products">
                  <div class="inner">
                     <h3>
                        <a href="single-product.html">Wooden Wardrobe</a>
                     </h3>
                     <span>$180.00</span>
                  </div>
               </div>
               <div class="bottom">
                  <a class="cart-text" href="#">Add To Cart</a>
                  <i class="bx bx-plus"></i>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3">
            <div class="products-item">
               <div class="top">
                  <a class="wishlist" href="#">
                     <i class="bx bx-heart"></i>
                  </a>
                  <img src="assets/images/products/products12.png" alt="Products">
                  <div class="inner">
                     <h3>
                        <a href="single-product.html">Three Door Wardrobe</a>
                     </h3>
                     <span>$170.00</span>
                  </div>
               </div>
               <div class="bottom">
                  <a class="cart-text" href="#">Add To Cart</a>
                  <i class="bx bx-plus"></i>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-3">
            <div class="products-item">
               <div class="top">
                  <a class="wishlist" href="#">
                     <i class="bx bx-heart"></i>
                  </a>
                  <img src="assets/images/products/products13.png" alt="Products">
                  <div class="inner">
                     <h3>
                        <a href="single-product.html">Classic Wooden Table</a>
                     </h3>
                     <span>$190.00</span>
                  </div>
               </div>
               <div class="bottom">
                  <a class="cart-text" href="#">Add To Cart</a>
                  <i class="bx bx-plus"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Products -->
<div class="products-area pb-70">
   <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="chartModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="chartModalLabel">Chart</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

                  <div class="col-12 d-flex pt-2 pb-4">
                     <div class="col-4 d-flex justify-content-center">
                        <img src="assets/images/p4.avif" alt="Image" style="width: 170px;">
                     </div>
                     <div class="col-8 d-flex flex-column justify-content-center">
                        <p class="mb-0 fs-3 fw-bold">White Comfy Stool</p>
                        <p class="mb-0 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="pt-0 pb-1">
                           <span class="text-primary fs-4">৳400.00</span>
                           <span class="ps-2 text-secondary-emphasis"><del>৳600.00</del></span>
                        </div>
                     </div>
                  </div>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                           data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                           aria-selected="true">Product</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                           data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                           aria-selected="false">How To Measure</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active mt-4 mb-4" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                           <div class="col-12 d-flex align-items-center">
                              <div class="col-12 table-responsive">
                                 <table class="table table-bordered table-striped text-center">
                                    <thead class="table-dark">
                                       <tr>
                                          <th>Select</th>
                                          <th>Size</th>
                                          <th>Length (inches)</th>
                                          <th>Chest (inches)</th>
                                          <th>Shoulder (inches)</th>
                                       </tr>
                                    </thead>
                                    <tbody id="sizeTable">
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>S</td>
                                          <td>26</td>
                                          <td>34-36</td>
                                          <td>18</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>M</td>
                                          <td>27</td>
                                          <td>38-40</td>
                                          <td>20</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>L</td>
                                          <td>28</td>
                                          <td>42-44</td>
                                          <td>22</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>XL</td>
                                          <td>29</td>
                                          <td>46-48</td>
                                          <td>24</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>XXL</td>
                                          <td>30</td>
                                          <td>50-52</td>
                                          <td>26</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <input type="radio" name="size" class="form-check-input"
                                                onclick="highlightRow(this)">
                                          </td>
                                          <td>XXXL</td>
                                          <td>31</td>
                                          <td>54-56</td>
                                          <td>28</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade mt-4 mb-4" id="profile-tab-pane" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="row">
                           <div class="col-12 d-flex">
                              <div class="col-12 d-flex justify-content-center">
                                 <img src="assets/images/measurement-men.jpg" alt="Image">
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'include/footer.php';?>