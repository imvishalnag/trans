<?php 
include "../config/db_connect.php";
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $purpose=$_POST['purpose'];
    $pin=$_POST['pin'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $address=$_POST['address'];
    $inst_name=$_POST['inst_name'];
    $inst=$_POST['inst'];
    $sex=$_POST['sex'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $sql="INSERT INTO `payment`(`name`, `fname`, `dob`, `sex`, `phone`, `email`, `inst`, `inst_name`, `purpose`, `address`, `state`, `district`, `pin`, `amount`) VALUES ('$name','$fname','$dob','$sex','$phone','$email','$inst','$inst_name','$purpose','$address','$state','$district','$pin','$amount')";
    $result=mysqli_query($connect,$sql);
    $id=mysqli_insert_id($connect);
    


    // Run query for store data
}

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('c540e553c793addbd4a521fbfdd4199b', 'f471010a33eb00c6024b44b65dd77579');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://www.allassamtransgenderassociation.com/thankyou.php",
        "webhook" => "http://www.allassamtransgenderassociation.com/insta/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    $sql_insert_id="UPDATE `payment` SET `payment_request_id`='$response[id]' WHERE `id`=$id";
    $result_insert=mysqli_query($connect,$sql_insert_id);
    
    //Redirect($response['longurl'],302); //Go to Payment page
    

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>