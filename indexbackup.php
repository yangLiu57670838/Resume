<?php // include('session.php'); ?>
<?php
require("asset/php/connect.php");


?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Resume</title>
    <link rel="stylesheet" href="asset/stylesheets/css/style.css">
    <link rel="stylesheet" href="asset/stylesheets/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="asset/stylesheets/css/style-flat-ui.css">
    <link rel="stylesheet" href="asset/stylesheets/css/formValidation.css">
    <style>
        body {
            padding-top: 20px;
        }
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
    $("#toggle2").click(function(){
          var title2=document.getElementById("title2");
        title2.value = '';
        var institution2=document.getElementById("institution2");
        institution2.value = '';
        var educationfrom2=document.getElementById("educationfrom2");
        educationfrom2.value = '';
        var educationto2=document.getElementById("educationto2");
        educationto2.value = '';
      
         var title3=document.getElementById("title3");
        title3.value = '';
        var institution3=document.getElementById("institution3");
        institution3.value = '';
        var educationfrom3=document.getElementById("educationfrom3");
        educationfrom3.value = '';
        var educationto3=document.getElementById("educationto3");
        educationto3.value = '';
        
        var tt2=document.getElementById("toggle2");
        if (tt2.innerHTML == 'Add more Education..')
            {
                tt2.innerHTML = 'Hide';
            }else
                {
                    tt2.innerHTML = 'Add more Education..';
                }
        $("#t2").toggle();
        
    });
});
</script>
    
        <script>
$(document).ready(function(){
    $("#toggle3").click(function(){
          var title3=document.getElementById("title3");
        title3.value = '';
        var institution3=document.getElementById("institution3");
        institution3.value = '';
        var educationfrom3=document.getElementById("educationfrom3");
        educationfrom3.value = '';
        var educationto3=document.getElementById("educationto3");
        educationto3.value = '';
      
        var tt3=document.getElementById("toggle3");
        if (tt3.innerHTML == 'Add more Education..')
            {
                tt3.innerHTML = 'Hide';
            }else
                {
                    tt3.innerHTML = 'Add more Education..';
                }
        $("#t3").toggle();
        
    });
});
</script>
    
    
<!-- add more job -->    
<script>
$(document).ready(function(){
    $("#togglej2").click(function(){
        var jtitle2=document.getElementById("jtitle2");
        jtitle2.value = '';
        var cname2=document.getElementById("cname2");
        cname2.value = '';
        var cwebsite2=document.getElementById("cwebsite2");
        cwebsite2.value = '';
        var jfrom2=document.getElementById("jfrom2");
        jfrom2.value = '';
        var jto2=document.getElementById("jto2");
        jto2.value = '';
        var duty2=document.getElementById("duty2");
        duty2.value = '';
        
          var jtitle3=document.getElementById("jtitle3");
        jtitle3.value = '';
        var cname3=document.getElementById("cname3");
        cname3.value = '';
        var cwebsite3=document.getElementById("cwebsite3");
        cwebsite3.value = '';
        var jfrom3=document.getElementById("jfrom3");
        jfrom3.value = '';
        var jto3=document.getElementById("jto3");
        jto3.value = '';
        var duty3=document.getElementById("duty3");
        duty3.value = '';
        
          var jtitle4=document.getElementById("jtitle4");
        jtitle4.value = '';
        var cname4=document.getElementById("cname4");
        cname4.value = '';
        var cwebsite4=document.getElementById("cwebsite4");
        cwebsite4.value = '';
        var jfrom4=document.getElementById("jfrom4");
        jfrom4.value = '';
        var jto4=document.getElementById("jto4");
        jto4.value = '';
        var duty4=document.getElementById("duty4");
        duty4.value = '';
        
        var jtitle5=document.getElementById("jtitle5");
        jtitle5.value = '';
        var cname5=document.getElementById("cname5");
        cname5.value = '';
        var cwebsite5=document.getElementById("cwebsite5");
        cwebsite5.value = '';
        var jfrom5=document.getElementById("jfrom5");
        jfrom5.value = '';
        var jto5=document.getElementById("jto5");
        jto5.value = '';
        var duty5=document.getElementById("duty5");
        duty5.value = '';
        
        var tj2=document.getElementById("togglej2");
        if (tj2.innerHTML == 'Add more Job..')
            {
                tj2.innerHTML = 'Delete';
            }else
                {
                    tj2.innerHTML = 'Add more Job..';
                }
        $("#j2").toggle();
        
    });
});
</script>    
    
<script>
$(document).ready(function(){
    $("#togglej3").click(function(){
        var jtitle3=document.getElementById("jtitle3");
        jtitle3.value = '';
        var cname3=document.getElementById("cname3");
        cname3.value = '';
        var cwebsite3=document.getElementById("cwebsite3");
        cwebsite3.value = '';
        var jfrom3=document.getElementById("jfrom3");
        jfrom3.value = '';
        var jto3=document.getElementById("jto3");
        jto3.value = '';
        var duty3=document.getElementById("duty3");
        duty3.value = '';
        
          var jtitle4=document.getElementById("jtitle4");
        jtitle4.value = '';
        var cname4=document.getElementById("cname4");
        cname4.value = '';
        var cwebsite4=document.getElementById("cwebsite4");
        cwebsite4.value = '';
        var jfrom4=document.getElementById("jfrom4");
        jfrom4.value = '';
        var jto4=document.getElementById("jto4");
        jto4.value = '';
        var duty4=document.getElementById("duty4");
        duty4.value = '';
        
        var jtitle5=document.getElementById("jtitle5");
        jtitle5.value = '';
        var cname5=document.getElementById("cname5");
        cname5.value = '';
        var cwebsite5=document.getElementById("cwebsite5");
        cwebsite5.value = '';
        var jfrom5=document.getElementById("jfrom5");
        jfrom5.value = '';
        var jto5=document.getElementById("jto5");
        jto5.value = '';
        var duty5=document.getElementById("duty5");
        duty5.value = '';
        
        var tj3=document.getElementById("togglej3");
        if (tj3.innerHTML == 'Add more Job..')
            {
                tj3.innerHTML = 'Delete';
            }else
                {
                    tj3.innerHTML = 'Add more Job..';
                }
        $("#j3").toggle();
        
    });
});
</script>
    
<script>
$(document).ready(function(){
    $("#togglej4").click(function(){
        var jtitle4=document.getElementById("jtitle4");
        jtitle4.value = '';
        var cname4=document.getElementById("cname4");
        cname4.value = '';
        var cwebsite4=document.getElementById("cwebsite4");
        cwebsite4.value = '';
        var jfrom4=document.getElementById("jfrom4");
        jfrom4.value = '';
        var jto4=document.getElementById("jto4");
        jto4.value = '';
        var duty4=document.getElementById("duty4");
        duty4.value = '';
        
        var jtitle5=document.getElementById("jtitle5");
        jtitle5.value = '';
        var cname5=document.getElementById("cname5");
        cname5.value = '';
        var cwebsite5=document.getElementById("cwebsite5");
        cwebsite5.value = '';
        var jfrom5=document.getElementById("jfrom5");
        jfrom5.value = '';
        var jto5=document.getElementById("jto5");
        jto5.value = '';
        var duty5=document.getElementById("duty5");
        duty5.value = '';
        
        var tj4=document.getElementById("togglej4");
        if (tj4.innerHTML == 'Add more Job..')
            {
                tj4.innerHTML = 'Delete';
            }else
                {
                    tj4.innerHTML = 'Add more Job..';
                }
        $("#j4").toggle();
        
    });
});
</script>
    
<script>
$(document).ready(function(){
    $("#togglej5").click(function(){
        var jtitle5=document.getElementById("jtitle5");
        jtitle5.value = '';
        var cname5=document.getElementById("cname5");
        cname5.value = '';
        var cwebsite5=document.getElementById("cwebsite5");
        cwebsite5.value = '';
        var jfrom5=document.getElementById("jfrom5");
        jfrom5.value = '';
        var jto5=document.getElementById("jto5");
        jto5.value = '';
        var duty5=document.getElementById("duty5");
        duty5.value = '';
        var tj5=document.getElementById("togglej5");
        if (tj5.innerHTML == 'Add more Job..')
            {
                tj5.innerHTML = 'Delete';
            }else
                {
                    tj5.innerHTML = 'Add more Job..';
                }
        $("#j5").toggle();
        
    });
});
</script>

    <!--[if IE]>
<script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <section id="section-container" class="">
        <div class="container">
           <div class="row">
               <div class="col-md-3 col-xs-6 column">
                   <div class="logo"></div>
               </div>
               <div class="col-md-9 col-xs-6 column" id="#top">
                   <div class="tel-progress" data-placement="bottom" data-toggle="tooltip" data-original-title="Need help? Call us now!"></div>
               </div>
           </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5 hidden-xs column">
                    <ul class="prog-bar">
                        <li>
                            <a href="#contact" data-toggle="tab" id="contact-step">
                                <div class="icon icon-welcome"></div>
                                <div class="description">
                                    <span class="first">Contact Details & Photo</span>
                                    <span class="second"></span>
                                </div>
                                <span class="checking"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#introduction" data-toggle="" id="introduction-step">
                                <div class="icon icon-personal"></div>
                                <div class="description">
                                    <span class="first">Introduction & Objective</span>
                                    <span class="second"></span>
                                </div>
                                <span class="checking"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#skills" data-toggle="" id="skills-step">
                                <div class="icon icon-program"></div>
                                <div class="description">
                                    <span class="first">Skills & Education</span>
                                    <span class="second"></span>
                                </div>
                                <span class="checking"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#certificates" data-toggle="" id="certificates-step">
                                <div class="icon icon-addons"></div>
                                <div class="description">
                                    <span class="first">Certificates & Licenses</span>
                                    <span class="second"></span>
                                </div>
                                <span class="checking"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#employment" data-toggle="" id="employment-step">
                                <div class="icon icon-travel"></div>
                                <div class="description">
                                    <span class="first">Employment History</span>
                                    <span class="second"></span>
                                </div>
                                <span class="checking"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7 column">
                    <div class="tab-content">

                        <div class="tab-pane active fade in" id="contact">
                            <form id="contact-form" name="contact-form" action="upload.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input id="fname" data-validation="mand" name="fname" type="text" class="form-control" tabindex="1">
                                    </div>

                                </div>
                           <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="lname">Middle Name</label>
                                        <input id="mname" data-validation="mand" name="mname" type="text" class="form-control" tabindex="1">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input id="lname" data-validation="mand" name="lname" type="text" class="form-control" tabindex="1">                                   
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input id="email" data-validation="mand" name="email" type="email" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="photo">Profile Photo</label>
                                        <input type="file" name="photo" id="photo" tabindex="3">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="skype">Skype I.D.</label>
                                        <input id="skype" name="skype" data-validation="" type="text" placeholder="Optional" class="form-control" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="phone-no">Phone Number</label>
                                        <input id="phone-no" data-validation="mand" name="phone-no" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                


                            <div class="row next text-center">

                                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 column">
                                    <button type="submit" id="contact-btn" class="btn btn-primary btn-hg step disabled"  tabindex="18">
                                        Next
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="introduction">
                            <form id="introduction-form">
                           <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Introduction</label>
                                    <textarea class="form-control" rows="5" name="introduce" id="introduce" placeholder="Introduce yourself here"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Objective</label>
                                    <textarea class="form-control" rows="5" name="objective" id="objective" placeholder="Explain your objectives here – e.g. To work for a company that gives me the platform to develop a new skill set while utilizing my present knowledge."></textarea>
                                </div>
                            </div>

                            <div class="row next text-center">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3  column">
                                    <button type="button" class="btn btn-primary btn-hg step btn-prv" tabindex="18">
                                        Previous
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 column">
                                    <button type="button" id="introduction-btn" class="btn btn-primary btn-hg step disabled"  tabindex="18">
                                        Next
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="skills">
                            <form id="skills-form">
                           <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Skills</label>
                                    <textarea class="form-control" rows="5" name="skill1" id="skill1" placeholder="Describe your skills & attributes here; do not include your work experience or certificates here"></textarea>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="title1">Title</label>
                                        <input id="title1" data-validation="mand" name="title1" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>

                            </div>   
                                
                      <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="institution1">Institution</label>
                                        <input id="institution1" data-validation="mand" name="institution1" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>
                          
                            </div>
                                
                        <div class="row">
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="educationfrom1">  From</label>
                                        <div class="input-group date">
                                            <input id="educationfrom1" name="educationfrom1" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="educationto1">To</label>
                                        <div class="input-group date">
                                            <input id="educationto1" name="educationto1" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                            
                            </div>
                          
                                <a id="toggle2" style="cursor:pointer">Add more Education..</a>
                                <div id="t2" style="display: none;">
                               <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="title2">Title</label>
                                        <input id="title2" data-validation="mand" name="title2" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>

                            </div>   
                                
                      <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="institution2">Institution</label>
                                        <input id="institution2" data-validation="mand" name="institution2" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>
                          
                            </div>  
                                                            <div class="row">
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="educationfrom2">  From</label>
                                        <div class="input-group date">
                                            <input id="educationfrom2" name="educationfrom2" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="educationto2">To</label>
                                        <div class="input-group date">
                                            <input id="educationto2" name="educationto2" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                            
                            </div>
                                    
                                    
                                    
           <a id="toggle3" style="cursor:pointer">Add more Education..</a>
                                <div id="t3" style="display: none;">
                               <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="title3">Title</label>
                                        <input id="title3" data-validation="mand" name="title3" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>

                            </div>   
                                
                      <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="institution3">Institution</label>
                                        <input id="institution3" data-validation="mand" name="institution3" type="text" class="form-control" tabindex="2">
                                    </div>
                                </div>
                          
                            </div>  
                                                            <div class="row">
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="educationfrom3">  From</label>
                                        <div class="input-group date">
                                            <input id="educationfrom3" name="educationfrom3" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="educationto3">To</label>
                                        <div class="input-group date">
                                            <input id="educationto3" name="educationto3" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                            
                            </div>
                                
                                </div>
                                    
                                    
                                
                                </div>
                            <div class="row next text-center">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3  column">
                                    <button type="button" class="btn btn-primary btn-hg step btn-prv" tabindex="18">
                                        Previous
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 column">
                                    <button type="button" id="skills-btn" class="btn btn-primary btn-hg step disabled"  tabindex="18">
                                        Next
                                    </button>
                                </div>
                            </div>
                            </form>

            
 
                        </div>
                        <div class="tab-pane fade" id="certificates">
                            <form id="certificates-form">
                           <div class="row">
                                <div class="col-lg-6 column">
                                    <label>Certificates</label>
                                    <textarea class="form-control" rows="5" name="certificate" id="certificate" placeholder="Enter your certificates here"></textarea>
                                </div>
                                <div class="col-lg-6 column">
                                    <label>Licenses</label>
                                    <textarea class="form-control" rows="5" name="license" id="license" placeholder="Enter your licences here; leave empty if none"></textarea>
                                </div>
                            </div>

                            <div class="row next text-center">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3  column">
                                    <button type="button" class="btn btn-primary btn-hg step btn-prv" tabindex="18">
                                        Previous
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 column">
                                    <button type="button" id="certificates-btn" class="btn btn-primary btn-hg step disabled"  tabindex="18">
                                        Next
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="employment">
                           <form id="employment-form">
                      <div class="row">
                                <div class="col-lg-7 column">
                                    <div class="form-group">
                                        <label for="jtitle1">Job Title</label>
                                        <input id="jtitle1" data-validation="mand" name="jtitle1" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                      <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cname1">Company Name</label>
                                        <input id="cname1" data-validation="mand" name="cname1" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cwebsite1">Company Website</label>
                                        <input id="cwebsite1" data-validation="mand" name="cwebsite1" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                              <div class="row">                                  
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="jfrom1">  From</label>
                                        <div class="input-group date">
                                            <input id="jfrom1" name="jfrom1" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>       
                                    </div>
                                       </div></div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="jto1">To</label>
                                        <div class="input-group date">
                                            <input id="jto1" name="jto1" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                           
                                </div>  
                             <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Job Duties</label>
                                    <textarea class="form-control" rows="5" name="duty1" id="duty1" placeholder="e.g. Respond to customer enquires daily through phone, email and in-person"></textarea>
                                </div>
                            </div>  
                               <br>
           <a id="togglej2" style="cursor:pointer">Add more Job..</a>
                                <div id="j2" style="display: none;">
                       <div class="row">
                                <div class="col-lg-7 column">
                                    <div class="form-group">
                                        <label for="jtitle2">Job Title</label>
                                        <input id="jtitle2" data-validation="mand" name="jtitle2" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                      <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cname2">Company Name</label>
                                        <input id="cname2" data-validation="mand" name="cname2" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cwebsite2">Company Website</label>
                                        <input id="cwebsite2" data-validation="mand" name="cwebsite2" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                              <div class="row">                                  
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="jfrom2">  From</label>
                                        <div class="input-group date">
                                            <input id="jfrom2" name="jfrom2" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>       
                                    </div>
                                       </div></div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="jto2">To</label>
                                        <div class="input-group date">
                                            <input id="jto2" name="jto2" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                           
                                </div>  
                             <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Job Duties</label>
                                    <textarea class="form-control" rows="5" name="duty2" id="duty2" placeholder="e.g. Respond to customer enquires daily through phone, email and in-person"></textarea>
                                </div>
                            </div> 
                <a id="togglej3" style="cursor:pointer">Add more Job..</a>
                                <div id="j3" style="display: none;">
                       <div class="row">
                                <div class="col-lg-7 column">
                                    <div class="form-group">
                                        <label for="jtitle3">Job Title</label>
                                        <input id="jtitle3" data-validation="mand" name="jtitle3" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                      <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cname3">Company Name</label>
                                        <input id="cname3" data-validation="mand" name="cname3" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cwebsite3">Company Website</label>
                                        <input id="cwebsite3" data-validation="mand" name="cwebsite3" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                              <div class="row">                                  
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="jfrom3">  From</label>
                                        <div class="input-group date">
                                            <input id="jfrom3" name="jfrom3" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>       
                                    </div>
                                       </div></div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="jto3">To</label>
                                        <div class="input-group date">
                                            <input id="jto3" name="jto3" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                           
                                </div>  
                             <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Job Duties</label>
                                    <textarea class="form-control" rows="5" name="duty3" id="duty3" placeholder="e.g. Respond to customer enquires daily through phone, email and in-person"></textarea>
                                </div>
                            </div> 
                                  <a id="togglej4" style="cursor:pointer">Add more Job..</a>
                                <div id="j4" style="display: none;">
                       <div class="row">
                                <div class="col-lg-7 column">
                                    <div class="form-group">
                                        <label for="jtitle4">Job Title</label>
                                        <input id="jtitle4" data-validation="mand" name="jtitle4" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                      <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cname4">Company Name</label>
                                        <input id="cname4" data-validation="mand" name="cname4" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cwebsite4">Company Website</label>
                                        <input id="cwebsite4" data-validation="mand" name="cwebsite4" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                              <div class="row">                                  
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="jfrom4">  From</label>
                                        <div class="input-group date">
                                            <input id="jfrom4" name="jfrom4" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>       
                                    </div>
                                       </div></div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="jto4">To</label>
                                        <div class="input-group date">
                                            <input id="jto4" name="jto4" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                           
                                </div>  
                             <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Job Duties</label>
                                    <textarea class="form-control" rows="5" name="duty4" id="duty4" placeholder="e.g. Respond to customer enquires daily through phone, email and in-person"></textarea>
                                </div>
                            </div> 
                        <a id="togglej5" style="cursor:pointer">Add more Job..</a>
                                <div id="j5" style="display: none;">
                       <div class="row">
                                <div class="col-lg-7 column">
                                    <div class="form-group">
                                        <label for="jtitle5">Job Title</label>
                                        <input id="jtitle5" data-validation="mand" name="jtitle5" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                      <div class="row">
                                <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cname5">Company Name</label>
                                        <input id="cname5" data-validation="mand" name="cname5" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                        <label for="cwebsite5">Company Website</label>
                                        <input id="cwebsite5" data-validation="mand" name="cwebsite5" type="text" class="form-control" tabindex="1">
                                    </div>
                                </div>
                            </div>
                                              <div class="row">                                  
                                   <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="jfrom5">  From</label>
                                        <div class="input-group date">
                                            <input id="jfrom5" name="jfrom5" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>       
                                    </div>
                                       </div></div>
                           <div class="col-lg-5 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="jto4">To</label>
                                        <div class="input-group date">
                                            <input id="jto5" name="jto5" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                    </div>
                                </div>                           
                                </div>  
                             <div class="row">
                                <div class="col-lg-12 column">
                                    <label>Job Duties</label>
                                    <textarea class="form-control" rows="5" name="duty5" id="duty5" placeholder="e.g. Respond to customer enquires daily through phone, email and in-person"></textarea>
                                </div>
                            </div> 
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>                 
          
                                </div>                  
                                
                                </div>
                               
                               </div>            
                               
                          

               
                            <div class="row next text-center">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3  column">
                                    <button type="button" class="btn btn-primary btn-hg step btn-prv" tabindex="18">
                                        Previous
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 column">
                                    <button type="button" id="employment-btn" class="btn btn-primary btn-hg step disabled"  tabindex="18">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <footer>
                <div class="row address text-center-xs">
                    <div class="col-md-4 column">
                        <ul>
                            <li>Australia & New Zealand</li>
                            <li>The Global Work & Travel Co. (Asia Pacific) Pty. Ltd.</li>
                            <li>ABN: 38 600 280 331</li>
                            <li>-</li>
                            <li>Level 16, 50 Cavill Ave,</li>
                            <li>Surfers Paradise, Queensland</li>
                            <li>Australia, 4217</li>
                            <li>T: 1300 40 11 90 (AU)</li>
                            <li>T: 09 925 0387 (NZ)</li>
                        </ul>
                    </div>
                    <div class="col-md-4 column">
                        <ul >
                            <li>Canada & USA</li>
                            <li>The Global Work & Travel Co. Inc.</li>
                            <li>Inc.#: BC0848469 - Travel Agency License: 66496</li>
                            <li>-</li>
                            <li>Level 6, 1525 Robson St,</li>
                            <li>Vancouver, British Columbia</li>
                            <li>Canada, V6G 1C3</li>
                            <li>T: 1877 744 5622 (Toll Free)</li>
                        </ul>
                    </div>
                    <div class="col-md-3 column">
                        <ul >
                            <li>UK & Europe</li>
                            <li>The Global Work & Travel Co. Ltd.</li>
                            <li>Reg.#: 8087039 - ABTA#: Y6197</li>
                            <li>-</li>
                            <li>Level 4, 5-7 John Prince's St,</li>
                            <li>London, England</li>
                            <li>UK, W1G 0JN</li>
                            <li>T: 0203 002 2138</li>
                        </ul>
                    </div>
                </div>
                <div class="row privacytc text-center">
                    <span><a href="/privacy-policy-australia" target="_blank">Privacy Policy</a></span>
                </div>
            <!--Term End-->
            <!--Copy Start-->
            <div class="row text-center copy">
                <p>Copyright&copy; 2015 The Global Work & Travel Co. All rights and lefts reserved.</p>
            </div>
            </footer>
        </div>
</section>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="asset/javascripts/init.js"></script>
    <script src="asset/javascripts/flat-ui-pro.js"></script>
    <script src="asset/javascripts/prettify.js"></script>
    <script src="asset/javascripts/application.js"></script>
    <script src="asset/javascripts/bootstrap-datepicker.js"></script>
    <script src="asset/javascripts/jquery.card.js"></script>
    <script src="asset/javascripts/main.js"></script>
    <script src="asset/javascripts/tell-top.js"></script>
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="asset/javascripts/validation/formValidation.min.js"></script>
    <script src="asset/javascripts/validation/framework/bootstrap.min.js"></script>
<!--    <script src="asset/javascripts/validation/mandatoryIcon.min.js"></script>-->
</body>

</html>
