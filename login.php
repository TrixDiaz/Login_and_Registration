<?php 
require './partials/database.php';  // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
require './partials/functions.php'; // will only produce a warning (E_WARNING) and the script will continue
include './partials/header.php';
include './partials/styles/style.php';
?>
  <div class="container mt-5" align="center">
       <div class="form-group col-md-5" >
       <div class="card">
            <div class="card-body mt-5 mb-5">
                <h2 class="mt-3 text-white">LOGIN FORM</h2>
                    <form method="POST">
                        <div class="form-group mt-3">  
                               <?php 
                                if($msg)
                                {
                                    ?> 
                                    <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                                         <?php echo $msg  ?>  <!--Notification alert if Username and Password is not Correct-->
                                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                                    </div>
                                    <?php
                                }
                                ?>

                            <div class="col-sm-8">
                                <div class="input-field">
                                    <input type="text" class="text-white text-capitalize form-control" id="id" name="id" hidden>
                                    <input type="text" class="text-white text-capitalize form-control" id="name" name="name" required>
                                    <label for="Username" class="text-white h6">Username</label>
                                </div>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-8">            
                            <div class="input-field">
                                    <input type="password" class="text-white form-control" id="password" name="password" required>
                                    <label for="password" class="text-white h6">Password</label>
                                </div>
                            </div>
                            <label class="d-flex justify-content-start mx-5">
                                    <input type="checkbox" id="togglecheck" onclick="showPassword()"/>
                                    <span class="mx-5" >Show</span>
                             </label>
                        </div>
                        
                        <div class="form-group mt-4"> 
                            <div class="col-sm col-sm-8">  
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" name="login" value="LOGIN" class="btn btn-outline-primary form-control mb-3"/>
                                    </div>
                                    <div class="row">
                                        <a href="register.php" class="link mx-2 text-uppercase">Create an Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
               </div>
           </div>
       </div>
    </div>
<?php include './partials/footer.php'; ?>