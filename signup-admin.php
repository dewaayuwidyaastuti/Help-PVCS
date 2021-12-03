<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>
	
					<div class="auth-form-container text-start mx-auto">
                        <?php
                            if(isset($_GET['notif'])){
                                //validasi username
                                if($_GET['notif'] == "validusername"){
                                   echo "<div class='alert alert-danger' role='alert'>Sorry, username already register!</div>";
                                }else{
                                    echo "<div class='alert alert-danger' role='alert'>Sorry, sign up was fail!</div>";
                                }
                            }
                        ?>
						<form class="auth-form auth-signup-form" action="php/proses-admin.php" method="POST">
                            <div class="email mb-3">
<!--                                OPTION VALUE DIGANTI DENGAN RUMAH SAKIT PUNYA MU-->
                                <label class="sr-only" for="signup-email">Centre Name</label>
                                <select type="text" class="form-control signup-name" name="centreName">
                                    <option value="#" disabled selected>--- CENTRE NAME ---</option>
                                    <option value="Bali Med">Bali Med</option>
                                    <option value="Prima Medika">Prima Medika</option>
                                </select>
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Username</label>
                                <input id="signup-name" name="username" type="text" class="form-control signup-name" placeholder="Username" required="required">
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Full Name</label>
                                <input id="signup-name" name="fullname" type="text" class="form-control signup-name" placeholder="Fullname" required="required">
                            </div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Password" required="required">
							</div>
                            <input name="level" type="hidden" class="form-control signup-name" value="administrator">
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

