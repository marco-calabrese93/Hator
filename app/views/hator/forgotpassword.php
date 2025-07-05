<?php $this->view("hator/header",$data);?>
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index-cosmetic.html">Home</a></li>
                    <li class="breadcrumb-item active">Forgot Password</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Forgot Password Start Here -->
        <div class="lost-pass white-bg ptb-90">
            <div class="container">
                <div class="register-title">
                    <h3 class="login-header">Register Account</h3>
                </div>
                <form class="password-forgot clearfix" action="mail.php">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group row">
                            <label class="control-label col-lg-2 col-md-3" for="email"><span
                                    class="require">*</span>Enter you email address here...</label>
                            <div class="col-lg-10 col-md-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-start float-sm-start">
                            <a class="customer-btn mr-20" href="login">Back</a>
                        </div>
                        <div class="float-end float-sm-end">
                            <input type="submit" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Container End -->
        </div>
        <!-- Forgot Password End Here -->
<?php $this->view("hator/footer",$data);?>