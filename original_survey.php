<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="margintop-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>West Penn Wire Survey</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-8" id="intro-p">
                     <h4>Please take a few minutes to complete this short survey, and you’ll be entered in a drawing to win 1 of 3 $250 Visa Gift Cards.</h4>
                     <div id="errors">
                         
                     </div>
                    </div>
                    <div class="col-lg-4">
                         <img src="assets/img/visa.png" class="img-responsive center-block" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="survey" class="form-horizontal" method="POST" action="">
        
        <div class="col-lg-12 form-1">
            <legend>
                <h3>Contact Information</h3>
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
                   <label for="name" class="col-xs-3">Address</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="address" placeholder="Address"/>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">City</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="city" placeholder="City"/>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="name" class="col-xs-3">Country</label>
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
                   <label for="name" class="col-xs-3">State</label>
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
                   <label for="name" class="col-xs-3">ZIP / Postal Code</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control col-sm-10" name="zip" placeholder="ZIP / Postal Code"/>
                    </div>
                </div>
                
            </legend>
        </div>
        
        <div class="col-lg-12 form-2">
            <legend>
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>1. Which markets do you serve?  (please click all that apply)</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-xs-12">
                            <ul class="list-group" id="markets">
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Commercial">
                                Commercial
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Education">
                                Education
                                
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Entertainment">
                                Entertainment
                                
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Government">
                                Government
                                
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Health Care">
                                Health Care
                                
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="House of Worship">
                                House of Worship
                                
                            </li>
                            <li class="list-group-item list-group-item-success toggle" data-name="markets" data-value="Sports Facilities">
                                Sports Facilities
                                
                            </li>
                          </ul>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>2. Which kinds of applications do you install? (please click all that apply)</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-xs-12">
                           <ul class="list-group" id="applications">
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="A/V">A/V</li>
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="DataCom">DataCom</li>
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="Mass Notifications">Mass Notification</li>
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="Nurse Call">Nurse Call</li>
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="Paging">Paging</li>
                            <li class="list-group-item list-group-item-success toggle" data-name="applications" data-value="Security">Security (Fire Alarm, Access Control, CCTV)</li>
                          </ul>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>3. How many employees does your company have?</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-xs-12">
                           <ul class="list-group" id="employees">
                            <li class="list-group-item list-group-item-success single toggle" data-name="employees" data-value="Under 25">Under 25</li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="employees" data-value="25-50">25-50</li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="employees" data-value="50-75">50-75</li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="employees" data-value="75-100">75-100</li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="employees" data-value="More Than 100">More Than 100</li>
                          </ul>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>4. On a scale of 1 to 10, with 10 being a high priority, how important are these services and product features?</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-xs-12">
                           <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                Availability
                                <input type="number" class="col-xs-2 pull-right form-control" name="availability" placeholder="" min="1" max="10" />
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Online Ordering
                                <input type="number" class="col-xs-2 pull-right form-control" name="ordering" placeholder="" min="1" max="10" />
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Quality
                                <input type="number" class="col-xs-2 pull-right form-control" name="quality" placeholder="" min="1" max="10" />
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Sales Support
                                <input type="number" class="col-xs-2 pull-right form-control" name="sales" placeholder="" min="1" max="10" />
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Technical Support
                                <input type="number" class="col-xs-2 pull-right form-control" name="techsupport" placeholder="" min="1" max="10" />
                                <span class="clearfix"></span>
                            </li>
                          </ul>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>5. Network cable accounts for what percentage of your cable footage used?</p>
                            </div>
                        </div>
                         <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-xs-12">
                           <ul class="list-group" id="cable">
                            <li class="list-group-item list-group-item-success single toggle" data-name="cable" data-value="Less Than 10%">
                                Less Than 10%
                            </li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="cable" data-value="10%-25%">
                                10%-25%
                            </li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="cable" data-value="25%-50%">
                                25%-50%
                            </li>
                            <li class="list-group-item list-group-item-success single toggle" data-name="cable" data-value="More Than 50%">
                               More Than 50%
                            </li>
                          </ul>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-xs-12">
                            <div class="question">
                                <p>6. Is there anything else we should know about your needs for wire and cable products and solutions?</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-xs-push-3">
                            <textarea name="comments" class="form-control" style="min-height:300px;"></textarea>
                        </div>
                </div>
                </legend>
            </div>
           
            <div class="form-group text-center">
                    <div class="col-xs-6 col-xs-push-3 text-center">
                        <button type="submit" class="btn btn-success center-block">SUBMIT SURVEY</button>
                    </div>
            </div>
    </form>
</div>
</div>