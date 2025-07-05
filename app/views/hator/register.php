<?php $this->view("hator/header",$data);?>
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index-cosmetic.html">Home</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area ptb-90">
            <div class="container">
                <h3 class="login-header">Create an account </h3>
                <div class="row">
                    <div class="offset-xl-1 col-xl-10">
                        <div class="register-form login-form clearfix">
                            <form method="POST" action="<?=ROOT?>register">
                                <p>Already have an account? <a href="<?=ROOT?>login">Log in instead!</a></p>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-md-3 col-form-label">Social title</label>
                                    <div class="col-lg-6 col-md-6">
                                        <span class="custom-radio">
                                            <input type="radio" name="user_title" value="Mr."> Mr.
                                        </span>
                                        <span class="custom-radio">
                                            <input type="radio" name="user_title" value="Mrs."> Mrs.
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row mb-20">
                                    <label for="f-name" class="col-lg-3 col-md-3 col-form-label">First Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" name="user_first_name" id="f-name">
                                    </div>
                                </div>
                                <div class="form-group row mb-20">
                                    <label for="l-name" class="col-lg-3 col-md-3 col-form-label">Last Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" name="user_last_name" id="l-name">
                                    </div>
                                </div>
                                <div class="form-group row mb-20">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group row mb-20">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                                    <div class="position-relative col-lg-6 col-md-6">
                                        <input type="password" class="form-control" name="password" id="inputPassword">
                                        <button class="btn show-btn" type="button" data-target="inputPassword">Show</button>
                                    </div>
                                </div>
<!--  rimozione della data di nascita  <div class="form-group row mb-20 align-items-center">
                                    <label for="birth" class="col-lg-3 col-md-3 col-form-label">Birthdate</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="birth" placeholder="MM/DD/YYYY">
                                    </div>
                                    <span class="col-sm-3 form-control-comment">optional</span>
                                </div> 
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-6 offset-md-3">
                                        <input class="form-check-input" value="#" id="offer" type="checkbox">
                                        <label class="form-check-label" for="offer">Receive offers from our
                                            partners</label>
                                    </div>
                                </div>
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-8 offset-md-3">
                                        <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                        <label class="form-check-label" for="subscribe">Sign up for our
                                            newsletter<br>Subscribe to our newsletters now and stay up-to-date with new
                                            collections, the latest lookbooks and exclusive offers..</label>
                                    </div>
                                </div> -->
                                <div class="register-box mt-40">
                                    <button type="submit" class="login-btn float-right">Register</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Page End Here -->
<?php $this->view("hator/footer",$data);?>