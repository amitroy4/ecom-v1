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
         <h2>Billing Details</h2>
      </div>
      <form>
         <div class="row">

            <div class="col-lg-7">
               <div class="checkout-billing">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Name:">
                  </div>
                  <div class="form-group">
                     <input type="email" class="form-control" placeholder="Email:">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Phone No:">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Street*">
                  </div>
                  <div class="form-group">
                     <select>
                        <option>Town*</option>
                        <option>Some Option</option>
                        <option>Another Option</option>
                        <option>Potato</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <select>
                        <option>State*</option>
                        <option>Some Option</option>
                        <option>Another Option</option>
                        <option>Potato</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <select>
                        <option>Country*</option>
                        <option>Some Option</option>
                        <option>Another Option</option>
                        <option>Potato</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <textarea id="your-notes" rows="4" class="form-control"
                        placeholder="Other Notes (Optional)"></textarea>
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Ship To A Different Address
                        </label>
                     </div>
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn common-btn">
                        Place Order
                        <img src="assets/images/shape1.png" alt="Shape">
                        <img src="assets/images/shape2.png" alt="Shape">
                     </button>
                  </div>
               </div>
            </div>

            <div class="col-lg-5">
               <div class="checkout-order">
                  <h3>Your Order:</h3>
                  <div class="modal-body" style="max-height: calc(100% - 130px); overflow-y: auto;">
                     <div class="cart-table">
                        <table class="table">
                           <tbody class="text-center align-middle">
                              <tr>
                                 <th scope="row">
                                    <img style="width: 100px;" src="assets/images/cart/cart1.png" alt="Cart">
                                 </th>
                                 <td>
                                    <h6>White Comfy Stool</h6>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td>
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
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
                                 <td>
                                    <h6>White Comfy Stool</h6>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td>
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
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
                                 <td>
                                    <h6>White Comfy Stool</h6>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td>
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
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
                                 <td>
                                    <h6>White Comfy Stool</h6>
                                    <span class="rate">৳200.00 x 1</span>
                                 </td>
                                 <td>
                                    <ul class="number m-0 p-0" style="width: 90px;">
                                       <li>
                                          <span class="minus pe-2"><b>-</b></span>
                                          <input type="text" value="1">
                                          <span class="plus ps-1"><b>+</b></span>
                                       </li>
                                    </ul>
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
               </div>
               <div class="checkout-method">
                  <h3>Payment Method:</h3>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                     <label class="form-check-label" for="exampleRadios1">
                        Direct Bank Transfer
                     </label>
                     <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                        reference. Your order will not be shipped until the funds have cleared in your account.</p>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                        value="option2">
                     <label class="form-check-label" for="exampleRadios2">
                        Cash On Delivery
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                        value="option3">
                     <label class="form-check-label" for="exampleRadios3">
                        Paypal
                     </label>
                  </div>
                  <div class="form-check two">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                     <label class="form-check-label" for="flexCheckDefault2">
                        I've read and accept <a href="terms-conditions.html">terms & conditions*</a>
                     </label>
                  </div>
               </div>
            </div>

         </div>
      </form>
   </div>
</div>
<!-- End Checkout -->

<?php include 'include/footer.php';?>