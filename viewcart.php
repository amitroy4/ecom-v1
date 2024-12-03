<?php 
   include 'include/header.php';
   ?>


<style>
   .cart-table table tbody tr td .number li {
      padding: 10px;
      display: flex;
      gap: 5px;
      align-items: center;
   }
</style>
<!-- Checkout -->
<div class="checkout-area pt-100 pb-70">
   <div class="container">
      <div class="section-title">
         <h2><i class="bx bxs-cart"></i> Cart</h2>
      </div>
      <form>
         <div class="row">
            <div class="col-lg-12">
               <div class="checkout-order">
                  <h3>Order List:</h3>
                  <div class="modal-body" style="max-height: calc(100% - 130px); overflow-y: auto;">
                     <div class="cart-table">
                        <table class="table">
                           <thead class="text-center align-middle">
                              <tr>
                                 <th scope="col">Image</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Sub Total</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody class="text-center align-middle">
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart1.png" alt="Cart">
                                 </th>
                                 <td style="width: 400px;">
                                    <h6>White Comfy Stool</h6>
                                    <p>Maboriosam in a tonto nesciung eget Maboriosam in a tonto nesciung eget</p>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td style="width: 90px;">
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00</span>
                                 </td>
                                 <td>
                                    <div>
                                       <i class="bx bx-x fs-3 text-danger"></i>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart2.png" alt="Cart">
                                 </th>
                                 <td style="width: 400px;">
                                    <h6>White Comfy Stool</h6>
                                    <p>Maboriosam in a tonto nesciung eget Maboriosam in a tonto nesciung eget</p>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td style="width: 90px;">
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00</span>
                                 </td>
                                 <td>
                                    <div>
                                       <i class="bx bx-x fs-3 text-danger"></i>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart2.png" alt="Cart">
                                 </th>
                                 <td style="width: 400px;">
                                    <h6>White Comfy Stool</h6>
                                    <p>Maboriosam in a tonto nesciung eget Maboriosam in a tonto nesciung eget</p>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td style="width: 90px;">
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00</span>
                                 </td>
                                 <td>
                                    <div>
                                       <i class="bx bx-x fs-3 text-danger"></i>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart1.png" alt="Cart">
                                 </th>
                                 <td style="width: 400px;">
                                    <h6>White Comfy Stool</h6>
                                    <p>Maboriosam in a tonto nesciung eget Maboriosam in a tonto nesciung eget</p>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td style="width: 90px;">
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00</span>
                                 </td>
                                 <td>
                                    <div>
                                       <i class="bx bx-x fs-3 text-danger"></i>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart2.png" alt="Cart">
                                 </th>
                                 <td style="width: 400px;">
                                    <h6>White Comfy Stool</h6>
                                    <p>Maboriosam in a tonto nesciung eget Maboriosam in a tonto nesciung eget</p>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td style="width: 90px;">
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <span class="rate">৳200.00</span>
                                 </td>
                                 <td>
                                    <div>
                                       <i class="bx bx-x fs-3 text-danger"></i>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="inner">
                     <h3>Shipping: <span>৳15.00</span></h3>
                     <h4>Total: <span>৳395.00</span></h4>
                  </div>
                  <div class=" d-flex justify-content-end mt-4">
                  <!-- <button type="button" class="btn btn-outline-secondary d-flex align-items-center justify-content-center" style="width: 170px; height: 50px;"><b>Update cart</b></button> -->
                  <button type="button" class="btn btn-outline-primary d-flex align-items-center justify-content-center ms-4" style="width: 210px; height: 50px; text-align: center;"><b><i class="bx bx-cart-download"></i> Continue Shopping</b></button>
               </div>
               </div>
            </div>

         </div>
      </form>
   </div>
</div>
<!-- End Checkout -->

<?php include 'include/footer.php';?>