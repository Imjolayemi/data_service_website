<?php require ("session_controller.php"); ?>
<!DOCTYPE html>
<html lang="en" style="background-color: white !important;">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title><?php echo $sitename; ?> - <?php echo $fullname; ?></title>
    <link href="../homepage/assets/img/1.png" rel="icon">
	
		<!-- toast -->

	 <link rel="stylesheet" type="text/css" href="assets/css/jquery.toast.min.css">
  <script type="text/javascript" src="static/dashboard/assets/js/sweetalert2.all.min.js"></script>

<link rel="stylesheet" href="backend/css/bootstrap1.min.css" />

<link rel="stylesheet" href="backend/vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="backend/vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="backend/vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="backend/vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="backend/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="backend/vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="backend/vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="backend/vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="backend/vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="backend/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="backend/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="backend/vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="backend/vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="backend/vendors/morris/morris.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="backend/vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="backend/css/metisMenu.css">

<link rel="stylesheet" href="backend/css/style1.css" />
<link rel="stylesheet" href="backend/css/colors/default.css" id="colorSkinCSS">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-loading-overlay@1.1.0/dist/js-loading-overlay.min.js"></script>
<script type="text/javascript" src="backend/js/overlay.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css">
    .centered {
position: realtive;
text-align: center;
top: 2px;
left: 5px;
margin: 0 auto;
transform:translateY(-50%);
}

.parent {
background: #CCCCCC;
height: 650px;
width: 100%;
border-radius:10px;
position: relative;
}
.child {
background: #FFFF00;
width: 130px;
height: 74px;
top: 1%;
right: 7%;
}

.child2 {
background: #FFFF00;
width: 130px;
height: 74px;
top: 1%;
left: 4%;
}

</style>
</head>
<body class="crm_body_bg" style="background-color: white !important;">


<nav class="sidebar">
<div class="logo">

<h5 class="">Available Balance. <br/> <span style="color: rgb(113,2,192);font-weight: bold;font-size: 30px;"> ₦<?php echo number_format($Account_Balance,2); ?></span></h5>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li>
<a href="<?php echo $baseurl; ?>/dashboard" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-home"></i>
</div>
<div class="nav_title">
<span>Dashboard</span>
</div>
</a>
</li>


<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-credit-card"></i>
</div>
<div class="nav_title">
<span>Fund Wallet</span>
</div>
</a>
<ul>
    <!--card_payment-->
<li><a href="<?php echo $baseurl; ?>/deposit_payment">Deposit/Transfer</a></li>
<li><a href="<?php echo $baseurl; ?>/automated_pay">Auto Funding (Transfer)</a></li>
</ul>
</li>


<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-shopping-cart"></i>
</div>
<div class="nav_title">
<span>Transactions</span>
</div>
</a>
<ul>
 <li><a href="<?php echo $baseurl; ?>/transactions">All Transactions</a></li>
<li><a href="<?php echo $baseurl; ?>/success_transactions">Success Transactions</a></li>
<li><a href="<?php echo $baseurl; ?>/fail_transactions">Failed Transactions</a></li>
<li><a href="<?php echo $baseurl; ?>/wallet_summary">Wallet Summary</a></li>
<li><a href="<?php echo $baseurl; ?>/sales_analysis">Sales Analysis</a></li>
</ul>
</li>

<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-users"></i>
</div>
<div class="nav_title">
<span>My Referrals</span>
</div>
</a>
<ul>
 <li><a href="<?php echo $baseurl; ?>/ref_downlines">My Downlines</a></li>
<li><a href="<?php echo $baseurl; ?>/cashback_earn">Cashback Earn.</a></li>
</ul>
</li>

<li>
<a href="<?php echo $baseurl; ?>/generate_api" aria-expanded="false">
<div class="nav_icon_small">
<i class="fas fa-code"></i>
</div>
<div class="nav_title">
<span>Developer's API</span>
</div>
</a>
</li>

<h4 class="menu-text"><span>Quick Links</span> <i class="fas fa-ellipsis-h"></i> </h4>

<li>
<a href="<?php echo $baseurl; ?>/data" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-signal"></i>
</div>
<div class="nav_title">
<span>Buy Data Bundle </span>
</div>
</a>
</li>
<li>
<a href="<?php echo $baseurl; ?>/data_card" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-circle-nodes"></i>
</div>
<div class="nav_title">
<span>Print Data Card <i class="fa-solid fa-dial-max"></i></span>
</div>
</a>
</li>
<li>
<a href="<?php echo $baseurl; ?>/airtime_vtu" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-mobile-button"></i>
</div>
<div class="nav_title">
<span>Buy Airtime VTU </span>
</div>
</a>
</li>


<li>
<a href="<?php echo $baseurl; ?>/airtime_sns" aria-expanded="false">
<div class="nav_icon_small">
<i class="fas fa-phone"></i>
</div>
<div class="nav_title">
<span>Buy Airtime SnS </span>
</div>
</a>
</li>

<li>
<a href="<?php echo $baseurl; ?>/exchange_airtime" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-arrow-right-arrow-left"></i>
</div>
<div class="nav_title">
<span>Exchange Airtime </span>
</div>
</a>
</li>

<li>
<a href="<?php echo $baseurl; ?>/cable" aria-expanded="false">
<div class="nav_icon_small">
<i class="fas fa-tv"></i>
</div>
<div class="nav_title">
<span>TV Subscription </span>
</div>
</a>
</li>

<li>
<a href="<?php echo $baseurl; ?>/bills" aria-expanded="false">
<div class="nav_icon_small">
<i class="fas fa-lightbulb"></i>
</div>
<div class="nav_title">
<span>Bills Payment </span>
</div>
</a>
</li>

<li>
<a href="<?php echo $baseurl; ?>/epins" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa fa-qrcode"></i>
</div>
<div class="nav_title">
<span>Buy Result E-pins </span>
</div>
</a>
</li>

<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<i class="fas fa-gear"></i>
</div>
<div class="nav_title">
<span>Update Settings</span>
</div>
</a>
<ul>
<li><a href="<?php echo $baseurl; ?>/profile">My Profile</a></li>
<li><a href="<?php echo $baseurl; ?>/change_password">Change Password</a></li>
<li><a href="<?php echo $baseurl; ?>/kyc_register">KYC Registration</a></li>
</ul>
</li>

<li>
<a href="<?php echo $baseurl; ?>/logout" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-power-off"></i>
</div>
<div class="nav_title">
<span>Logout </span>
</div>
</a>
</li>

</ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0" style="background-color: #fff;">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none" style="cursor: pointer;">
<i class="ti-menu"></i>
</div>
<label class="form-label switch_toggle d-none d-lg-block" for="checkbox">
<input type="checkbox" id="checkbox">
<div class="slider round open_miniSide"></div>
</label>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>

</li>
<li>
<a class="bell_notification_clicker" href="#" onclick="PopUp()"> <img src="backend/img/icon/notification_bell.png" alt="" style="height: 80px; width: 80px; margin-right: -1em">
<span>1</span>
</a>

</li>

<?php

if ($rating ==0){
echo '<li>
<a class="CHATBOX_open" onclick="openRate()" href="#"> <img src="backend/img/icon/rate_icon.png" alt="" style="height: 80px; width: 80px; margin-right: -1em"> </a>
</li>';
}
?>

</div>
<div class="profile_info">
<img src="backend/img/profile.jpg" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>Welcome </p>
<h5><?php echo $fullname; ?></h5>
</div>
<div class="profile_info_details">
    <a href="<?php echo $baseurl; ?>/profile">My Profile </a>
    <a href="<?php echo $baseurl; ?>/change_password">Settings</a>
    <a href="<?php echo $baseurl; ?>/logout">Log Out </a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h2 class="h6 modal-title">Announcements!</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="Closepopup()"></button>
            </div>
            <div class="modal-body"> <?php echo $notification; ?> </div>

             <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="Closepopup()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<div id="successModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <br/>
            <br/>

            <center><img src="backend/img/success2.png" height="100"></center>
            <div class="modal-body" style="text-align: center;">
                
            </div>

             <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" onclick="closeSuccessModal()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<div id="errorModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <br/>
            <br/>

            <center><img src="backend/img/error.png" height="100"></center>
            <div class="modal-body" style="text-align: center;">
                
            </div>

             <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" onclick="closeErrorModal()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<div id="rateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><h2 class="h6 modal-title">Rate Us ! <i class="fa fa-smile" style="color: orange"></i><i class="fa fa-smile" style="color: orange"></i></h2>
                <button class="btn-close" aria-label="Close" onclick="closeRate()"></button>
            </div>
            <div class="modal-body">
                <textarea id="rate_comment" class="form-control"></textarea>
            </div>

             <div class="modal-footer">
                <button class="btn btn-success" id="submitRate">Submit</button>
                <button class="btn btn-danger" data-dismiss="modal" onclick="closeRate()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<div id="rateRes" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><h2 class="h6 modal-title">Rate Response ! <i class="fa fa-smile" style="color: red;"></i></h2>
                <button class="btn-close" aria-label="Close" onclick="closeRateX()"></button>
            </div>
            <div class="modal-body"></div>

             <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" onclick="closeRateX()">Close</button>
            </div>
            
        </div>
    </div>
</div>

<?php

if ($monnify_mode=="ON" && $wema=="" || $monnify_mode=="ON" && $wema==0){
    
    require("monnify.php");
}


?>

<script>
	function Closepopup(){
	$("#myModal3").modal("hide");
	}
	function PopUp() {
	$("#myModal3").modal("show");
	}
    function openRate() {
     $("#rateModal").modal("show");
    }
    function closeRate() {
     $("#rateModal").modal("hide");
    }
    function closeRateX() {
     $("#rateRes").modal("hide");
    }
    function closeSuccessModal() {
     $("#successModal").modal("hide");
    }
    function closeErrorModal() {
     $("#errorModal").modal("hide");
    }
</script>