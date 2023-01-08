<?php 
require './partials/database.php';  // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include './partials/functions.php'; // will only produce a warning (E_WARNING) and the script will continue
include './partials/header.php';
?>
<link rel="stylesheet" href="./css/style.css">
  <div class="container mt-5" align="center">
       <div class="form-group col-md-5" >
       <div class="card">
            <div class="card-body mt-5 mb-5">
                <h2 class="mt-3 text-white">REGISTER FORM</h2>
                    <form method="POST">
                        <div class="form-group mt-3">
                        <?php 
                                if($empty)
                                {
                                    ?> 
                                    <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                                         <?php echo $empty  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php
                                }
                                if($passwordlenght)
                                {
                                    ?> 
                                    <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                                         <?php echo $passwordlenght  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php
                                }
                                if($namelenght)
                                {
                                    ?> 
                                    <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                                         <?php echo $namelenght  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php
                                }
                                if($passwordmsg)
                                {
                                    ?> 
                                    <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                                         <?php echo $passwordmsg  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php
                                }
                                if($registersuccess)
                                {
                                    ?> 
                                    <div class="alert alert-success alert-dismissible fade show w-75" role="alert">
                                         <?php echo $registersuccess  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php 
                                }
                                
                                ?>
                            <div class="col-sm-8">
                                <div class="input-field">
                                    <input type="text" class="text-white text-capitalize form-control" id="name" name="name">
                                    <label for="email" class="text-white h6">Email address</label>
                                </div>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-8">            
                                 <div class="input-field">
                                    <input type="password" class="text-white form-control" id="password" name="password">
                                    <label for="password" class="text-white h6">Password</label>
                                </div>
                            </div>
                            <label class="d-flex justify-content-start mx-5">
                                    <input type="checkbox" onclick="showPassword()"/>
                                    <span class="mx-5">Show</span>
                             </label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8">            
                                <div class="input-field">
                                    <input type="password" class="text-white form-control" id="confirmpassword" name="confirmpassword">
                                    <label for="confirmpassword" class="text-white h6">Confirm Password</label>
                                </div>
                            </div>
                            <label class="d-flex justify-content-start mx-5">
                                    <input type="checkbox" onclick="confirmPassword()"/>
                                    <span class="mx-5">Show</span>
                             </label>
                        </div>
                        <div class="form-group mt-4"> 
                            <div class="col-sm col-sm-8">  
                             <div class="row">
                             <div class="col">
                              <input type="submit" name="register" value="REGISTER" class="btn btn-outline-success form-control mb-3"/>
                              </div>
                              <div class="row">
                             <a href="login.php" class="link mx-2 text-uppercase">Back to Login</a>
                              </div>

                             </div>
                            </div>
                        </div>
                     </form>
               </div>
           </div>
       </div>
    </div>
<?php include './partials/footer.php' ?>