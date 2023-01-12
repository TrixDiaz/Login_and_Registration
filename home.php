<?php
 require './partials/session_verify.php';
 include './partials/header.php';
?>
<title>Home | Dashboard </title>
    <div class="container mt-5">
                <div class="row">
                    <div align="start" class="col-md-6">
                        <h4>Welcome to Dashboard</h4>
                    </div>
                    <div align="end" class="col-md-6">
                       
                       <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle #ea80fc purple accent-1" data-bs-toggle="dropdown">
                                Settings
                            </button>
                            <ul class="dropdown-menu text-start text-uppercase w-50">
                            <li><h5 class="dropdown-header">Profile Settings</h5></li>
                            <li><a class="dropdown-item text-center" >Profile</a></li>
                            <li><a class="dropdown-item text-center" data-bs-toggle="modal" data-bs-target="#myModal">Security</a></li>
                            <li><a class="dropdown-item text-center" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    </div>

    
<?php include './partials/footer.php'; ?>