<?php 
        //getting the database connection
 require_once 'DbConnect.php';
 
 //an array to display response
 $response = array();
 
 //if it is an api call 
 //that means a get parameter named api call is set in the URL 
 //and with this parameter we are concluding that it is an api call 
 if(isset($_GET['apicall'])){
 
 switch($_GET['apicall']){
 
 case 'signup':
 
 //in this part we will handle the registration
  //checking the parameters required are available or not 
  if(isTheseParametersAvailable(array('nama','unit_induk','up3','ulp','username','password'))){
 
    //getting the values 
    $nama = $_POST['nama']; 
    $unit_induk = $_POST['unit_induk']; 
    $up3 = $_POST['up3'];
    $ulp = $_POST['ulp'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    //checking if the user is already exist with this username or email
    //as the email and username should be unique for every user 
    $stmt = $conn->prepare("SELECT kode_user FROM master_user WHERE username = ? OR nama = ?");
    $stmt->bind_param("ss", $username, $nama);
    $stmt->execute();
    $stmt->store_result();
    
    //if the user already exist in the database 
    if($stmt->num_rows > 0){
    $response['error'] = true;
    $response['message'] = 'User already registered';
    $stmt->close();
    }else{
    
      $today = date('YmdHis');
      $acak = str_shuffle($today);
      $kode_user_generate = 'USRMBL' . $acak;
    //if user is new creating an insert query 
    $stmt = $conn->prepare("INSERT INTO master_user (kode_user,nama, unit_induk, up3, ulp, username, password, role) VALUES ('.$kode_user_generate.',?, ?, ?, ?, ?, ?,'user')");
    $stmt->bind_param("ssssss", $nama, $unit_induk, $up3, $ulp, $username, $password);
    
    //if the user is successfully added to the database 
    if($stmt->execute()){
    
    //fetching the user back 
    $stmt = $conn->prepare("SELECT kode_user, username, nama FROM master_user WHERE username = ?"); 
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->bind_result($kode_user, $username, $nama);
    $stmt->fetch();
    
    $user = array(
    'id'=>$kode_user, 
    'username'=>$username, 
    'nama'=>$nama,
    );
    
    $stmt->close();
    
    //adding the user data in response 
    $response['error'] = false; 
    $response['message'] = 'User registered successfully'; 
    $response['user'] = $user; 
    }
    }
    
    }else{
    $response['error'] = true; 
    $response['message'] = 'required parameters are not available'; 
    }
    
 
 break; 
 
 case 'login':
 
 //this part will handle the login 
 //for login we need the username and password 
 if(isTheseParametersAvailable(array('username', 'password'))){
 //getting values 
 $username = $_POST['username'];
 $password = md5($_POST['password']); 
 
 //creating the query 
 $stmt = $conn->prepare("SELECT kode_user, username, nama, unit_induk FROM master_user WHERE username = ? AND password = ?");
 $stmt->bind_param("ss",$username, $password);
 
 $stmt->execute();
 
 $stmt->store_result();
 
 //if the user exist with given credentials 
 if($stmt->num_rows > 0){
 
 $stmt->bind_result($kode_user, $username, $nama, $unit_induk);
 $stmt->fetch();
 
 $user = array(
 'kode_user'=>$kode_user, 
 'username'=>$username, 
 'nama'=>$nama,
 'unit_induk'=>$unit_induk,
 );
 
 $response['error'] = false; 
 $response['message'] = 'Login successfull'; 
 $response['user'] = $user; 
 }else{
 //if the user not found 
 $response['error'] = false; 
 $response['message'] = 'Invalid username or password';
 }
 }
 
 break; 

 case 'createData':
 
   //in this part we will handle the registration
    //checking the parameters required are available or not 
    if(isTheseParametersAvailable(array('no_meter','kriteria_garansi','gangguan','tahun_buat','tahun_ganti','tanggal_pendataan'))){
   
      //getting the values 
      $no_meter = $_POST['no_meter']; 
      $kriteria_garansi = $_POST['kriteria_garansi']; 
      $gangguan = $_POST['gangguan'];
      $tahun_buat = $_POST['tahun_buat'];
      $tahun_ganti = $_POST['tahun_ganti'];
      $tanggal_pendataan = $_POST['tanggal_pendataan'];
      
      //checking if the user is already exist with this username or email
      //as the email and username should be unique for every user 
      $stmt = $conn->prepare("SELECT no_meter FROM master_data WHERE no_meter = ?");
      $stmt->bind_param("s", $no_meter );
      $stmt->execute();
      $stmt->store_result();
      
      //if the user already exist in the database 
      if($stmt->num_rows > 0){
      $response['error'] = true;
      $response['message'] = 'Data Sudah Ada';
      $stmt->close();
      }else{
      
      //if user is new creating an insert query 
      $stmt = $conn->prepare("INSERT INTO master_data (no_meter, kriteria_garansi, gangguan, tahun_buat, tahun_ganti, tanggal_pendataan) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $no_meter, $kriteria_garansi, $gangguan, $tahun_buat, $tahun_ganti, $tanggal_pendataan);
      
      //if the user is successfully added to the database 
      if($stmt->execute()){
      
      //fetching the user back 
      $stmt = $conn->prepare("SELECT no_meter, kriteria_garansi, tanggal_pendataan FROM master_data WHERE no_meter = ?"); 
      $stmt->bind_param("s",$no_meter);
      $stmt->execute();
      $stmt->bind_result($no_meter, $kriteria_garansi, $tanggal_pendataan);
      $stmt->fetch();
      
      $user = array(
      'nomor_meter'=>$no_meter, 
      'kriteria_garansi'=>$kriteria_garansi,
      'tanggal_pendataan'=>$tanggal_pendataan
      );
      
      $stmt->close();
      
      //adding the user data in response 
      $response['error'] = false; 
      $response['message'] = 'Data Berhasil Di Tambahkan'; 
      $response['user'] = $user; 
      }
      }
      
      }else{
      $response['error'] = true; 
      $response['message'] = 'required parameters are not available'; 
      }
      
   
   break;

   case 'getData':

    $sql = "SELECT * FROM master_data ORDER BY tanggal_pendataan DESC";

    $result = $conn->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($data);

    break;

    case 'cekData':

     //this part will handle the login 
 //for login we need the username and password 
 if(isTheseParametersAvailable(array('no_meter'))){
  //getting values 
  $no_meter = $_POST['no_meter'];
  
  //creating the query 
  $stmt = $conn->prepare("SELECT no_meter, kriteria_garansi, gangguan, tahun_buat, tahun_ganti, tanggal_pendataan FROM master_data WHERE no_meter = ?");
  $stmt->bind_param("s",$no_meter, );
  
  $stmt->execute();
  
  $stmt->store_result();
  
  //if the user exist with given credentials 
  if($stmt->num_rows > 0){
  
  $stmt->bind_result($no_meter, $kriteria_garansi, $gangguan, $tahun_buat, $tahun_ganti, $tanggal_pendataan);
  $stmt->fetch();
  
  $data = array(
  'no_meter'=>$no_meter, 
  'kriteria_garansi'=>$kriteria_garansi, 
  'gangguan'=>$gangguan,
  'tahun_buat'=>$tahun_buat,
  'tahun_ganti'=>$tahun_ganti,
  'tanggal_pendataan'=>$tanggal_pendataan
  );
  
  $response['error'] = false; 
  $response['message'] = 'Get Data successfull'; 
  $response['user'] = $data; 
  }else{
  //if the user not found 
  $response['error'] = false; 
  $response['message'] = 'Cek Kembali No Meter Atau Cek Apakah Data Sudah Ada Di Server';
  }
  }

      break;
 
 default: 
 $response['error'] = true; 
 $response['message'] = 'Invalid Operation Called';
 }
 
 }else{
 //if it is not api call 
 //pushing appropriate values to response array 
 $response['error'] = true; 
 $response['message'] = 'Invalid API Call';
 }

 
        //function validating all the paramters are available
 //we will pass the required parameters to this function 
 function isTheseParametersAvailable($params){
 
    //traversing through all the parameters 
    foreach($params as $param){
    //if the paramter is not available
    if(!isset($_POST[$param])){
    //return false 
    return false; 
    }
    }
    //return true if every param is available 
    return true; 
    }
 
 //displaying the response in json structure 
 echo json_encode($response);