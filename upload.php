<?php
include 'connect.php';
require_once("../book/asset/php/dompdf/dompdf_config.inc.php");
require_once('../book/asset/php/phpmailer/PHPMailerAutoload.php');


$fname = $_POST['fname'];
if (isset($_POST['mname']))
    {
   $mname = $_POST['mname'];
}else
    {
    $mname = "";
}
$lname = $_POST['lname'];

$email = $_POST['email'];
if (isset($_POST['skype']))
    {
   $skype = $_POST['skype'];
}else
    {
    $skype = "";
}
$phoneno = $_POST['phone-no'];
$introduce = $_POST['introduce'];
$objective = $_POST['objective'];
$skill1 = $_POST['skill1'];
$title1 = $_POST['title1'];
$institution1 = $_POST['institution1'];
$educationfrom1 = $_POST['educationfrom1'];
$educationto1 = $_POST['educationto1'];
if (isset($_POST['title2']))
    {
   $title2 = $_POST['title2'];
}else
    {
    $title2 = "";
}
if (isset($_POST['institution2']))
    {
   $institution2 = $_POST['institution2'];
}else
    {
    $institution2 = "";
}
if (isset($_POST['educationfrom2']))
    {
   $educationfrom2 = $_POST['educationfrom2'];
}else
    {
    $educationfrom2 = "";
}
if (isset($_POST['educationto2']))
    {
   $educationto2 = $_POST['educationto2'];
}else
    {
    $educationto2 = "";
}
if (isset($_POST['title3']))
    {
   $title3 = $_POST['title3'];
}else
    {
    $title3 = "";
}
if (isset($_POST['institution3']))
    {
   $institution3 = $_POST['institution3'];
}else
    {
    $institution3 = "";
}
if (isset($_POST['educationfrom3']))
    {
   $educationfrom3 = $_POST['educationfrom3'];
}else
    {
    $educationfrom3 = "";
}
if (isset($_POST['educationto3']))
    {
   $educationto3 = $_POST['educationto3'];
}else
    {
    $educationto3 = "";
}
if (isset($_POST['certificate']))
    {
   $certificate = $_POST['certificate'];
}else
    {
    $certificate = "";
}
if (isset($_POST['license']))
    {
   $license = $_POST['license'];
}else
    {
    $license = "";
}
$jtitle1 = $_POST['jtitle1'];
$cname1 = $_POST['cname1'];
$cwebsite1 = $_POST['cwebsite1'];
$jfrom1 = $_POST['jfrom1'];
$jto1 = $_POST['jto1'];
$duty1 = $_POST['duty1'];
if (isset($_POST['jtitle2']))
    {
   $jtitle2 = $_POST['jtitle2'];
}else
    {
    $jtitle2 = "";
}
if (isset($_POST['cname2']))
    {
   $cname2 = $_POST['cname2'];
}else
    {
    $cname2 = "";
}
if (isset($_POST['cwebsite2']))
    {
   $cwebsite2 = $_POST['cwebsite2'];
}else
    {
    $cwebsite2 = "";
}
if (isset($_POST['jfrom2']))
    {
   $jfrom2 = $_POST['jfrom2'];
}else
    {
    $jfrom2 = "";
}
if (isset($_POST['jto2']))
    {
   $jto2 = $_POST['jto2'];
}else
    {
    $jto2 = "";
}
if (isset($_POST['duty2']))
    {
   $duty2 = $_POST['duty2'];
}else
    {
    $duty2 = "";
}


if (isset($_POST['jtitle3']))
    {
   $jtitle3 = $_POST['jtitle3'];
}else
    {
    $jtitle3 = "";
}
if (isset($_POST['cname3']))
    {
   $cname3 = $_POST['cname3'];
}else
    {
    $cname3 = "";
}
if (isset($_POST['cwebsite3']))
    {
   $cwebsite3 = $_POST['cwebsite3'];
}else
    {
    $cwebsite3 = "";
}
if (isset($_POST['jfrom3']))
    {
   $jfrom3 = $_POST['jfrom3'];
}else
    {
    $jfrom3 = "";
}
if (isset($_POST['jto3']))
    {
   $jto3 = $_POST['jto3'];
}else
    {
    $jto3 = "";
}
if (isset($_POST['duty3']))
    {
   $duty3 = $_POST['duty3'];
}else
    {
    $duty3 = "";
}


if (isset($_POST['jtitle4']))
    {
   $jtitle4 = $_POST['jtitle4'];
}else
    {
    $jtitle4 = "";
}
if (isset($_POST['cname4']))
    {
   $cname4 = $_POST['cname4'];
}else
    {
    $cname4 = "";
}
if (isset($_POST['cwebsite4']))
    {
   $cwebsite4 = $_POST['cwebsite4'];
}else
    {
    $cwebsite4 = "";
}
if (isset($_POST['jfrom4']))
    {
   $jfrom4 = $_POST['jfrom4'];
}else
    {
    $jfrom4 = "";
}
if (isset($_POST['jto4']))
    {
   $jto4 = $_POST['jto4'];
}else
    {
    $jto4 = "";
}
if (isset($_POST['duty4']))
    {
   $duty4 = $_POST['duty4'];
}else
    {
    $duty4 = "";
}


if (isset($_POST['jtitle5']))
    {
   $jtitle5 = $_POST['jtitle5'];
}else
    {
    $jtitle5 = "";
}
if (isset($_POST['cname5']))
    {
   $cname5 = $_POST['cname5'];
}else
    {
    $cname5 = "";
}
if (isset($_POST['cwebsite5']))
    {
   $cwebsite5 = $_POST['cwebsite5'];
}else
    {
    $cwebsite5 = "";
}
if (isset($_POST['jfrom5']))
    {
   $jfrom5 = $_POST['jfrom5'];
}else
    {
    $jfrom5 = "";
}
if (isset($_POST['jto5']))
    {
   $jto5 = $_POST['jto5'];
}else
    {
    $jto5 = "";
}
if (isset($_POST['duty5']))
    {
   $duty5 = $_POST['duty5'];
}else
    {
    $duty5 = "";
}

//change pdf content


    
    
//    if ($title2 == "")
//    {
//$educationString2 = "";
//    
//}else
//    {
//    $educationString2 = "<table class='box' style='margin-bottom: 5px;'><tr><td><label><span> $title2</span></label></td><td style='text-align: right;'><label> <span> $educationfrom2 - $educationto2</span></label></td></tr><tr><td colspan='2'> <label> <span> $institution2</span></label> </td> </tr> </table>  ";
//    
//}
//
//if ($title3 == "")
//    {
//$educationString3 = "";
//    
//}else
//    {
//    $educationString3 = "<table class='box' style='margin-bottom: 5px;'><tr><td><label><span> $title3</span></label></td><td style='text-align: right;'><label> <span> $educationfrom3 - $educationto3</span></label></td></tr><tr><td colspan='2'> <label> <span> $institution3</span></label> </td> </tr> </table>  ";
//    
//}
//                                  
//
//  if ($jtitle2 == "")
//      {
//      $employment2 = "";
//  }else
//      {
//      $employment2 = "<table class='box' style='margin-bottom: 5px;'><tr><td> <label><span> $jtitle2</span></label></td><td style='text-align: right;'><label><span> $jfrom2 - $jto2</span></label></td> </tr><tr><td colspan='2'><label> <span> $cname2</span></label></td></tr><tr> <td colspan='2'> <label><span> $cwebsite2</span></label></td></tr><tr><td colspan='2'><label><span>$duty2</span></label></td></tr></table>";
//  }
//    
//  if ($jtitle3 == "")
//      {
//      $employment3 = "";
//  }else
//      {
//      $employment3 = "<table class='box' style='margin-bottom: 5px;'><tr><td> <label><span> $jtitle3</span></label></td><td style='text-align: right;'><label><span> $jfrom3 - $jto3</span></label></td> </tr><tr><td colspan='2'><label> <span> $cname3</span></label></td></tr><tr> <td colspan='2'> <label><span> $cwebsite3</span></label></td></tr><tr><td colspan='2'><label><span>$duty3</span></label></td></tr></table>";
//  }
//  if ($jtitle4 == "")
//      {
//      $employment4 = "";
//  }else
//      {
//      $employment4 = "<table class='box' style='margin-bottom: 5px;'><tr><td> <label><span> $jtitle4</span></label></td><td style='text-align: right;'><label><span> $jfrom4 - $jto4</span></label></td> </tr><tr><td colspan='2'><label> <span> $cname4</span></label></td></tr><tr> <td colspan='2'> <label><span> $cwebsite4</span></label></td></tr><tr><td colspan='2'><label><span>$duty4</span></label></td></tr></table>";
//  }
//  if ($jtitle5 == "")
//      {
//      $employment5 = "";
//  }else
//      {
//      $employment5 = "<table class='box' style='margin-bottom: 5px;'><tr><td> <label><span> $jtitle5</span></label></td><td style='text-align: right;'> <label><span> $jfrom5 - $jto5</span></label></td> </tr><tr><td colspan='2'><label> <span> $cname5</span></label></td></tr><tr> <td colspan='2'> <label><span> $cwebsite5</span></label></td></tr><tr><td colspan='2'><label><span>$duty5</span></label></td></tr></table>";
//  }
//    

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//assign new name
    $temp = explode(".", $_FILES["photo"]["name"]);
    $d = date("Ymd");
    $newfilename = $fname . $lname . $d . '.' . end($temp);
    $target_file2 = $target_dir . $newfilename;
$src = 'http://www.globalworkandtravel.com/resume/uploads/' . $newfilename;



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
//if (file_exists($target_file2)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}

 // Check file size, no more than 10mb
if ($_FILES["photo"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "GIF" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $newfilename)) {
//        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        
        //create pdf here
//        $html =
//"<!DOCTYPE html>
//<html lang=''>
//<head>
//    <style>
//        body {
//            font-family: 'Lato', Helvetica, Arial, sans-serif;
//            font-size: 18px;
//            line-height: 1.72222;
//            color: #34495e;
//            background-color: #fff;
//        }
//        .overview-tile {
//            border: 2px solid #00BDE3;
//            border-radius: 3px;
//            margin: 0px 10px;
//        }
//        .overview-title {
//            height: 30px;
//            background-color: #00BDE3;
//            padding: 5px 30px 15px 30px !important;
//            color: #7f8c8d;
//            font-size: 18px;
//            font-weight: 700;
//            border-radius: 0px;
//        }
//        .overview-title span{
//            color: white;
//            font-size: 18px;
//            font-weight: 700;
//        }
//        .overview-content {
//            margin: 15px 30px;
//            color: #6e7a87;
//        }
//        .seprator {
//            width: 97%;
//            height: 2px;
//            background-color: #ecf0f1;
//            margin: 15px 10px;
//        }
//        .pageBreak {
//            page-break-after:always;
//        }
//        label {
//            display: block;
//            font-weight: 700;
//            line-height: 25px;
//            font-size: 13px;
//            max-width: 100%;
//            margin-bottom: 5px;
//        }
//        span {
//            font-weight: 300;
//            font-size: 13px;
//        }
//        table {
//            width:100%;
//            page-break-inside: avoid;
//        }
//        td{
//            width:50%;
//        }
//        * {
//            -webkit-box-sizing: border-box;
//            -moz-box-sizing: border-box;
//            box-sizing: border-box;
//        }
//        section {
//            display:block;
//        }
//        img {
//            float:left;
//            padding-top: 8px;
//            padding-right: 5px;
//        }
//        .header-text {
//            font-weight: bold;
//            font-size : 20px;
//            color: #7f8c8d;
//            float : left;
//            width: 550px;
//            padding : 15px;
//        }
//        .header-logo {
//            text-align : right;
//            padding-left:35px;
//        }
//        @page { margin: 100px 30px 75 30px; }
//        #header {
//            position: fixed;
//            left: 0px;
//            top: -75px;
//            right: 0px;
///*            height: 85px;*/
///*            padding-bottom:100px;*/
//        }
//        #footer { position: fixed;
//            left: 0px;
//            bottom: -100px;
//            right: 0px;
//            height: 100px;
//            border-top: 3px solid #fff;
//            font-size : 8pt;
//            color: #7f8c8d;
//            padding: 0px 15px;
//        }
//        p {
//            line-height : 0.7;
//        }
//        hr {
//            border: 0;
//            height: 0;
//            border-top: 1px solid #ecf0f1;
//            border-bottom: 1px solid #ecf0f1;
//        }
//        .box {
//            background-color: #EFFBFD;
//            vertical-align: top;
//            padding: 0px 10px;
//        }
//    </style>
//</head>
//<body>
//    <div id='header'>
//        <div class='header-text'>
//            $fname $mname $lname
//        </div>
//        <div class='header-logo'>
//            <img width='127' height='39' src='http://www.globalworkandtravel.com/book/asset/images/logo2.png'>
//        </div>
//    </div>
//
//    <section>
//        <div class='container'>
//            <div class='row'>
//                <div class='col-md-12 column'>
//                    <div class='row overview-tile'>
//                        <div class='overview-title'>
//                            <span>CONTACT DETAILS & PHOTO</span>
//                        </div>
//                        <div class='overview-content'>
//                        <table>                      
//                        <tr> 
//                            <td colspan='3' width='350'>
//                                <label>E-MAIL ADDRESS</label>
//                            </td>
//                            <td rowspan='6' width='200'>
//                                <img width='170' height='210' src='$src' style='padding-left: 30px; text-align:right'>
//                            </td>
//                        </tr>
//                            <tr>
//                            <td colspan='3' height='27' class='box' style='vertical-align: middle;'>
//                                    <label ><span>$email</span></label>
//                                </td>
//                        </tr>
//                            <tr>
//                            <td colspan='3'>
//                                <label>PHONE NUMBER</label>
//                                </td>
//                            </tr>
//                            <tr>
//                            <td colspan='3' height='27' class='box' style='vertical-align: middle;'>
//                                    <label ><span> $phoneno </span></label>
//                                </td>
//                            </tr>
//                            <tr>
//                            <td colspan='3'>
//                            <label>SKYPE ID</label>
//                                </td>
//                            </tr>
//                            <tr>
//                            <td colspan='3' height='27' class='box' style='vertical-align: middle;'>
//                                    <label ><span> $skype </span></label>
//                                </td>
//                            </tr>
//                           </table>
//                        </div>
//                    </div>
//                    <div class='seprator'></div>
//                    <div class='row overview-tile'>
//                        <div class='overview-title'>
//                            <span>INTRODUCTION & OBJECTIVE</span>
//                        </div>
//                        <div class='overview-content'>
//                            <table>  
//                            <tr>
//                                <td>
//                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'> <label>INTRODUCTION</label>
//                                </td>
//                            </tr>
//                            <tr>
//                                <td height='107' class='box'>
//                                   <label><span> $introduce </span></label>
//                                </td>
//                            </tr>
//                            
//                            <tr>
//                                <td >
//                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>OBJECTIVE</label>
//                                </td>
//                            </tr>
//                            <tr>
//                            <td height='107' class='box'>
//                                    <label><span> $objective </span></label>
//                                </td>
//                            </tr>
//  </table>
//                        </div>
//                    </div>
//                    <div class='pageBreak'></div>
//                    <div class='row overview-tile'>
//                        <div class='overview-title'>
//                            <span>SKILLS & EDUCATION</span>
//                        </div>
//                        <div class='overview-content'>
//                            <table>  
//                                <tr>            
//                                 <td colspan='2'>
//                              <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>SKILLS</label>
//                                </td>
//                            </tr>
//                            <tr>            
//                                 <td colspan='2' class='box' height='107'>
//                                  <label><span> $skill1</span></label>
//                                </td>
//                            </tr>
//                            <tr>            
//                                 <td colspan='2'>
//                              <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>EDUCATION</label>
//                                </td>
//                            </tr>
//                            </table> 
//                            <table class='box' style='margin-bottom: 5px;'> 
//                             
//                            
//                          <tr>          
//                                 <td>
//                                    <span> $title1</span></label>
//                                </td>
//                                 <td style='text-align: right;'>
//                                
//                                   <label><span>$educationfrom1 - $educationto1</span></label>
//                                </td>
//                            </tr>
//                            <tr>          
//                                
//                                 <td colspan='2'>
//                                   <label><span> $institution1</span></label>
//                                </td>
//                            </tr>
//                        </table>" . $educationString2 . $educationString3 . "
//                        </div>
//                    </div>
//                    <div class='seprator'></div>
//                    <div class='row overview-tile'>
//                        <div class='overview-title'>
//                            <span>CERTIFICATES & LICENSES</span>
//                        </div>
//                        <div class='overview-content'>
//                            <table>  
//  <tr>            
//                                 <td>
//                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>CERTIFICATES </label>
//                                </td>
//                                <td>
//                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>LICENSES</label>
//                                </td>
//                            </tr>
//                            <tr>            
//                                 <td class='box' height='85'>
//                                   <label><span> $certificate</span></label>
//                                </td>
//                                       
//                                 <td class='box' height='85'>
//                            <label><span> $license</span></label>
//                                </td>
//                            </tr>
//                          
//                            
//   </table>
//                        </div>
//                    </div>
//                    <div class='pageBreak'></div>
//                    <div class='row overview-tile'>
//                        <div class='overview-title'>
//                            <span>EMPLOYMENT HISTORY</span>
//                        </div>
//                        <div class='overview-content'>
//                            <table class='box' style='margin-bottom: 5px;'>  
//                           <tr>             
//                                 <td>
//                                    <label>
//<span> $jtitle1</span></label>
//                                </td>
//                                <td style='text-align: right;'>
//                                    <label>
//<span> $jfrom1 - $jto1</span></label>
//                                </td>
//                              </tr>
//                           <tr>
//                                 <td colspan='2'>
//                                    <label>
//<span> $cname1</span></label>
//                                </td>
//                          
//                          </tr>
//                          <tr>
//                          <td colspan='2'>
//                                    <label>
//<span> $cwebsite1</span></label>
//                                </td>
//                          </tr>
//                          <tr>
//                          <td colspan='2'>
//<label>
//<span> $duty1</span></label>
//</td>
//</tr>
// </table>" . $employment2 . $employment3 . $employment4 . $employment5 . "</div>
//                    </div>
//            </div>
//            </div>
//        </div>
//    </section>
//</body>
//
//</html>";
  
$time2 = date("Y-m-d");
 //insert into database here
    $sqlU = "INSERT INTO resume (fname, mname, lname, email, photo_url, skype, phoneno, introduce, objective, skill1, title1, institution1, educationfrom1, educationto1, title2, institution2, educationfrom2, educationto2, 	title3, institution3, educationfrom3, educationto3, certificate, license, jtitle1, cname1, cwebsite1, jfrom1, jto1, duty1, jtitle2, cname2, cwebsite2, jfrom2, jto2, duty2, jtitle3, cname3, cwebsite3, jfrom3, jto3, duty3, jtitle4, cname4, cwebsite4, jfrom4, jto4, duty4, jtitle5, cname5, cwebsite5, jfrom5, jto5, duty5, submission_date, action)
VALUES ('$fname', '$mname', '$lname', '$email', '$newfilename', '$skype', '$phoneno', '$introduce', '$objective', '$skill1', '$title1', '$institution1', '$educationfrom1', '$educationto1', '$title2', '$institution2,', '$educationfrom2', '$educationto2', '$title3', '$institution3', '$educationfrom3,', '$educationto3', '$certificate', '$license', '$jtitle1', '$cname1', '$cwebsite1', '$jfrom1', '$jto1', '$duty1', '$jtitle2', '$cname2', '$cwebsite2', '$jfrom2', '$jto2', '$duty2', '$jtitle3', '$cname3', '$cwebsite3', '$jfrom3', '$jto3', '$duty3', '$jtitle4', '$cname4', '$cwebsite4', '$jfrom4', '$jto4', '$duty4', '$jtitle5', '$cname5', '$cwebsite5', '$jfrom5', '$jto5', '$duty5', '$time2', 'incomplete')";
    if (!mysql_query($sqlU)) {
        die('Error: ' . mysql_error());
    }        
        
        
        
 mysql_close();       
        
        
        

// $time = date("Y-m-d-His");
//    $dompdf = new DOMPDF();
//    $dompdf->load_html($html);
//    $dompdf->render();
//    $output = $dompdf->output();
//    $file_to_save = 'uploads/'.$fname.'-'.$mname.'-'.$lname.'-'.$time.'.pdf';
//    file_put_contents($file_to_save, $output);
        
//send pdf        
// $smail2 = "yang@globalworkandtravel.com";
//
//$mail = new PHPMailer();
//$mail->From      = 'travel@globalworkandtravel.com';
//$mail->FromName  = 'The Global Work & Travel Co.';
//$mail->Subject   =  'test';
//$mail->Body      = 'test';
//$mail->addAddress($smail2, $fname);
////$mail->AddBCC($smail);
//$mail->AddBCC($smail2);
//$mail->isHTML(true); 
//$booking_attach = "upload/$fname-$mname-$lname-$time.pdf";
//$booking_attach = 'uploads/'.$fname.'-'.$mname.'-'.$lname.'-'.$time.'.pdf';   
//$tc_attach = "./tc/pdf/tc-$tcName.pdf";

    
//$mail->AddAttachment($booking_attach);
//$mail->AddAttachment($tc_attach, "Booking-Terms-and-Conditions.pdf");

//if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//} else {
//    echo 'Message has been sent';
//    echo '<br>'.$tc_attach;
//    echo "Records added successfully.";
    header( 'Location: thankyou.php' ) ;
    exit();
//}
   
        
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>
