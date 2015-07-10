<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="margintop-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>West Penn Wire 2015 Catalog</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-4">
                         <img src="assets/img/catalog-cover.jpg" class="img-responsive center-block" />
                    </div>
                    <div class="col-lg-8" id="intro-p">
                        <h1 style="font-weight:900;color:#009344;"><em>Stay Connected</em></h1>

                        <h3>Order your West Penn Wire 2015 Catalog today!</h3>

                        <h4>(5 per customer)</h4>
                     <div id="errors">
                         
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="order" class="form-horizontal" method="POST" action="">
        
        <div class="col-lg-12 form-1">
            <legend>
                <h3>Contact / Shipping Information</h3>
                <div class="form-group">
                    <label for="name" class="col-xs-3">Name <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="name" placeholder="Name" required/>
                    </div>
                </div>

               <div class="form-group">
                   <label for="name" class="col-xs-3">Job Title <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="title" placeholder="Job Title" required/>
                    </div>
               </div>
                
               <div class="form-group">
                   <label for="name" class="col-xs-3">Company <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="company" placeholder="Company"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name" class="col-xs-3">Email <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="email" placeholder="Email"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name" class="col-xs-3">Phone</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="phone" placeholder="Phone"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name" class="col-xs-3">Cell Phone</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="cell" placeholder="Cell Phone"/>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">Address <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="address" placeholder="Address"/>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">City <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="city" placeholder="City"/>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">Country <span>*</span></label>
                    <div class="col-xs-6">
                          <select name="country" class="form-control country">
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="MX">Mexico</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="Other">Other</option>
                          </select>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">State <span>*</span></label>
                    <div class="col-xs-6">
                        <select name="state" class="form-control state">
                                    <option value="">&mdash; Select &mdash; </option>
                                    <option value="NA">Not Applicable</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">ZIP / Postal Code  <span>*</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="zip" placeholder="ZIP / Postal Code"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name" class="col-xs-3">Quantity  <span>*</span></label>
                    <div class="col-xs-6">
                        <select name="quantity" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group center-block text-center">
                    <button type="submit" class="btn btn-success">Place Order</button>
                </div>
        </div>
                
            </legend>
        </div>
</div>