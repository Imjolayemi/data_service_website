<?php

require ("session_controller.php");
$searc_level=$_GET['load_id'];

if ($searc_level=="data"){
    
  $checker2="SELECT * FROM `web_settings`";
          $result22 = mysqli_query($con, $checker2);  
          $row22 = mysqli_fetch_array($result22);
          
          
          function wer($aa,$sec){
              if($aa==$sec){
                  return 'selected';
              }
          }
          
$message='
<form id="form-data">
    <label>MTN-SME *</label>
    <select class="form-control" id="mtnsme_data" required> 
    <option value="salabeb_mtnsme.php" '.wer('salabeb_mtnsme.php',$row22['api_mtn']).'>salabeb</option>
    </select>

    <br/>
    <label>MTN-CG *</label>
    <select class="form-control" id="mtncg_data" required>
    <option value="salabeb_mtncg.php" '.wer('salabeb_mtncg.php',$row22['api_gift']).'>salabeb</option>
    </select>

    <br/>
    <label>GLO *</label>
    <select class="form-control" id="glo_data" required>
    <option value="salabeb_glo.php" '.wer('salabeb_glo.php',$row22['api_glo']).'>salabeb</option>
    
    </select>

    
       <br/>
    <label>GLO-CG*</label>
    <select class="form-control" id="glocg_data" required>
    <option value="glocg_salabeb.php" '.wer('glocg_salabeb.php',$row22['api_glocg']).'>salabeb</option>
    
    </select>

    <br/>
    <label>AIRTEL *</label>
    <select class="form-control" id="airtel_data" required>
   <option value="airtel_salabeb.php" '.wer('airtel_salabeb.php',$row22['api_airtel']).'>salabeb</option>
    
    </select>

    <br/>
    <label>AIRTEL-CG *</label>
 
    <select class="form-control" id="airtelcg_data" required>
.<option value="airtelcg_salabeb.php" '.wer('airtelcg_salabeb.php',$row22['api_airtelcg']).'>salabeb</option>

    </select>

    <br/>
    <label>9MOBILE *</label>
    <select class="form-control" id="mobile_data" required>
    <option value="salabeb_mobile.php" '.wer('salabeb_mobile.php',$row22['api_mobile']).'>salabeb</option>
    </select>

    <br/>
<button class="btn btn-success" type="button" onclick="saveDATA()">Save</button>

</form>
';

$response=array(
'status' => 'success',
'data' => $message,
);

echo json_encode($response);
exit();
}

///////DATA END

if ($searc_level=="datacard"){
    
  $checker2="SELECT * FROM `web_settings`";
          $result22 = mysqli_query($con, $checker2);  
          $row22 = mysqli_fetch_array($result22);
          
          
          function wer($aa,$sec){
              if($aa==$sec){
                  return 'selected';
              }
          }
          
$message='
<form id="form-data">
    <label>MTN-DATA-CARD *</label>
    <select class="form-control" id="mtn_datacard" required> 
    <option value="mtndatacard_salabeb.php" '.wer('mtndatacard_salabeb.php',$row22['api_mtndatacard']).'>salabeb</option>

    </select>

    <br/>
<button class="btn btn-success" type="button" onclick="saveDATACARD()">Save</button>

</form>
';

$response=array(
'status' => 'success',
'data' => $message,
);

echo json_encode($response);
exit();
}

///////DATA CARD END

if ($searc_level=="vtu"){

$message='
<form id="form-data">
    <label>MTN *</label>
    <select class="form-control" id="mtn_vtu" required>
    <option value="airtimevtu_salabeb.php">salabeb</option>
    </select>

    <br/>
    <label>GLO *</label>
    <select class="form-control" id="glo_vtu" required>
    <option value="airtimevtu_salabeb.php">salabeb</option>
    </select>

    <br/>
    <label>AIRTEL *</label>
    <select class="form-control" id="airtel_vtu" required>
    <option value="airtimevtu_salabeb.php">salabeb</option>
    </select>

    <br/>
    <label>9MOBILE *</label>
    <select class="form-control" id="mobile_vtu" required>
    <option value="airtimevtu_salabeb.php">salabeb</option>
    </select>

    <br/>
<button class="btn btn-success" type="button" onclick="saveVTU()">Save</button>

</form>
';

$response=array(
'status' => 'success',
'data' => $message,
);

echo json_encode($response);
exit();
}
///VTULOCK END

if ($searc_level=="sns"){

$message='
<form id="form-data">
    <label>MTN *</label>
    <select class="form-control" id="mtn_sns" required>

    <option value="airtimesns_sms.php">BULKSMS</option>
    </select>

    <br/>
    <label>GLO *</label>
    <select class="form-control" id="glo_sns" required>

    <option value="airtimesns_sms.php">BULKSMS</option>
    </select>

    <br/>
    <label>AIRTEL *</label>
    <select class="form-control" id="airtel_sns" required>

    <option value="airtimesns_sms.php">BULKSMS</option>
    </select>

    <br/>
    <label>9MOBILE *</label>
    <select class="form-control" id="mobile_sns" required>

    <option value="airtimesns_sms.php">BULKSMS</option>
    </select>

    <br/>
<button class="btn btn-success" type="button" onclick="saveSNS()">Save</button>

</form>
';

$response=array(
'status' => 'success',
'data' => $message,
);

echo json_encode($response);
exit();
}

////SNSLOCK END

?>