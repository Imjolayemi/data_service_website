<?php require("site_header.php"); ?>

<?php 

if ($manage_message==1){



echo '<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left">
<h3 class="f_s_25 f_w_700 dark_text">API Keys</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Default</a></li>
<li class="breadcrumb-item active">API</li>
</ol>
</div>

</div>
</div>
</div>

<div class="row ">
<div class="col-xl-12">
<div class="white_card card_height_100 mb_30 social_media_card" style="background-color:#fff;">
<div class="white_card_header">
<div class="main-title">
<h3 class="m-0">'.strtoupper($domain).'</h3>
<p>Welcome '.$fullname.'</p>
</div>
</div>

<div class="alert">
<br/>

    <div id="resultHandle"></div>
    
    <form id="form-data">

    <label>Vtpass Logins *</label>
    <input type="text" class="form-control" id="vtpass_account" value="'.$vtpass_account.'" placeholder="Vtpass Login">

    <br/>

    <label>SMS Username *</label>
    <input type="text" class="form-control" id="sms_username" value="'.$sms_username.'" placeholder="SMS Username">

    <br/>

     <label>SMS Password *</label>
     <input type="hidden" id="req_token" value="'.$_SESSION['csrftoken'].'">
    <input type="text" class="form-control" id="sms_password" value="'.$sms_password.'" placeholder="SMS Password">

    <br/>

    <button class="btn btn-success btn-block type="submit" style="width:100%">SUBMIT</button>

    </form>

  <br>
  <br>
  <br/>
</div>


</div>
</div>



</div>
</div>
</div>';
}

else{

require ("admin_pushfail.php"); 
echo $admin_pushfail;

}

?>


    <script type="text/javascript">

     $("#form-data").submit(function (event) {
     var formData = {
      vtpass_account: $("#vtpass_account").val(),
      sms_username: $("#sms_username").val(),
      sms_password: $("#sms_password").val(),
      req_token: $("#req_token").val(),
    };
    $.LoadingOverlay("show");
    $.ajax({
      url:'customer/keys',
      method:'POST',
      dataType:'json',
      data:formData,
      success:function(response_fd){
     $.LoadingOverlay("hide");
     if (response_fd.status == 'success'){
      $("#successModal").modal("show");
      $("#successModal .modal-body").html(response_fd.message);
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
     }
    else {
   $("#resultHandle").html(response_fd.message);
    }
}
    });

      event.preventDefault();
     });
  </script>

<?php require("site_footer.php"); ?>
