<!DOCTYPE html>
<html lang="en">
<head>
    <title>Help PCVS View Vaccine Batch Information</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="../../assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../../assets/css/portal.css">
</head>

<body class="app">
<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                        </a>
                    </div><!--//col-->

                    <div class="app-utilities col-auto">
                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="../../assets/images/user.png" alt="user profile"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href="../proses-logout.php" onClick="return confirm('are you sure you want to logout?');">Log Out</a></li>
                            </ul>
                        </div><!--//app-user-dropdown-->
                    </div><!--//app-utilities-->
                </div><!--//row-->
            </div><!--//app-header-content-->
        </div><!--//container-fluid-->
    </div><!--//app-header-inner-->

    <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="../../assets/images/app-logo.svg" alt="logo"><span class="logo-text">HELP PCVS</span></a>
            </div><!--//app-branding-->

            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item">

                        <!-- ICON KIRI-->
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="../../dashboard-admin.php">
						        <span class="nav-icon">
						            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                                          <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    </svg>
						         </span>
                            <span class="nav-link-text">Overview</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                    <li class="nav-item">
                        <br>
                    </li><!--//nav-item-->

                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link active" href="index.php">
						        <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                          <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                                    </svg>
                                </span>
                            <span class="nav-link-text">Send Email</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link " href="index6.php">
						        <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                          <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                                    </svg>
                                </span>
                            <span class="nav-link-text">Manage (Confrim, Reject, Record) </span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="orders.html"> </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//app-menu-->
            </nav><!--//app-nav-->
        </div><!--//sidepanel-inner-->
    </div><!--//app-sidepanel-->
</header><!--//app-header-->

<!--DISPLAY MENU-->
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">


                <!-- BATCH INFORMATION -->
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                            <h3>Input any remark by send an email!</h3>
                        <?php
                        if (isset($_POST['kirim'])) {

                            require 'PHPMailer/PHPMailerAutoload.php';
                            $email_pengirim = "dewaayu16091999@gmail.com";
                            $isi=$_POST['isi'];
                            $subjek=$_POST['subjek'];
                            $email_tujuan=$_POST['email_tujuan'];

                            $mail = new PHPMailer();

                            $mail->IsHTML(true);    // set email format to HTML
                            $mail->IsSMTP();   // we are going to use SMTP
                            $mail->SMTPAuth   = true; // enabled SMTP authentication
                            $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
                            $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
                            $mail->Port       = 465;                   // SMTP port to connect to GMail
                            $mail->Username   = $email_pengirim;  // alamat email kamu
                            $mail->Password   = "1234567890";            // password GMail
                            $mail->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
                            $mail->Subject    = $subjek;
                            $mail->Body       = $isi;
                            $mail->AddAddress($email_tujuan);

                            if(!$mail->Send()) {
                                echo "Eror: ".$mail->ErrorInfo;
                                exit;
                            }else {
                                echo "<div class='alert alert-success'><strong>Berhasil!</strong> Email telah berhasil dikirim.</div>";
                            }
                        }
                        ?>
                        <br>
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <div class="form-group">
                                <input class="form-control" name="email_tujuan" placeholder="Send To :">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subjek" placeholder="Subject :">
                            </div>
                            <div class="form-group">
                                <textarea id="compose-textarea" name="isi" class="form-control" style="height: 300px" placeholder="Remaks"></textarea>
                            </div>

                            <br>

                            <button type="submit" name="kirim" class="btn btn-primary">Send</button>

                        </form>
                    </div><!--//app-wrapper-->

                    <!-- Javascript -->
                    <script src="assets/plugins/popper.min.js"></script>
                    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                    <!-- Charts JS -->
                    <script src="assets/plugins/chart.js/chart.min.js"></script>
                    <script src="assets/js/index-charts.js"></script>

                    <!-- Page Specific JS -->
                    <script src="assets/js/app.js"></script>
                </div><!--//inner-->

            </div>
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<!--FOOTER-->
<footer class="app-footer">
    <div class="container text-center py-3">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
    </div>
</footer><!--//app-footer-->
</div><!--//app-wrapper-->

<!-- Javascript -->
<script src="../../assets/plugins/popper.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="../../assets/js/app.js"></script>
</body>
</html>





