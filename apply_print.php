<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="StudyPress | Education & Courses HTML Template"/>
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning,"/>
    <meta name="author" content="ThemeMascot"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Page Title -->
    <title>Rashtriya Navodaya Vidya Kendra</title>

    <!-- Favicon and Touch Icons -->
    <link href="online-application/img/favicon.png" rel="shortcut icon" type="image/png">
    <link href="online-application/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="online-application/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="online-application/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="online-application/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="online-application/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="online-application/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="online-application/css/animate.css" rel="stylesheet" type="text/css">
    <link href="online-application/css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="online-application/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="online-application/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->

    <!-- CSS | Custom Margin Padding Collection -->
    <link href="online-application/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="online-application/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="online-application/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="online-application/js/jquery-2.2.4.min.js"></script>
    <script src="online-application/js/jquery-ui.min.js"></script>
    <script src="online-application/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="online-application/js/jquery-plugin-collection.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .frmhd {
            background: #fff;
        }

        .frmhd h5 {
            font-size: 16px;
        }

        .form-control {
            color: black;
            font-size: 15px;
            border-radius: 0;
            box-shadow: none;
            height: 40px;
            border: 1px solid #565656;
        }

    </style>


</head>
<body class="">


<?php
include 'dbconfig.php';
if (isset($_GET['application_no']) || isset($_POST['application_no'])) {
    if (isset($_GET['st'])) {
        $st = 1;
    } else {
        $st = 0;
    }
    if (isset($_GET['application_no'])) {
        $application_no = $_GET['application_no'];


    } else if (isset($_POST['application_no'])) {
        $application_no = $_POST['application_no'];
    }

    $q = mysqli_query($connect, "select * from online1 where application_no='$application_no'");
    while ($row = mysqli_fetch_array($q)) {

        $stu_id = $row['stu_id'];
        $stu_name = $row['stu_name'];
        $stu_dob = $row['stu_dob'];
        $gender = $row['gender'];
        $stu_aad_num = $row['stu_aad_num'];
        $fat_name = $row['fat_name'];
        $con_no_fat = $row['con_no_fat'];
        $occ_of_fat = $row['occ_of_fat'];
        $mot_name = $row['mot_name'];
        $con_no_mot = $row['con_no_mot'];
        $occ_of_mot = $row['occ_of_mot'];
        $address = $row['address'];
        $name_of_guard = $row['name_of_guard'];
        $con_no_guard = $row['con_no_guard'];
        $rel_with_stu = $row['rel_with_stu'];
        $nationality = $row['nationality'];
        $religion = $row['religion'];
        $caste = $row['caste'];
        $mot_ton = $row['mot_ton'];
        $last_stu_add = $row['last_stu_add'];
        $class_last_stu = $row['class_last_stu'];
        $adm_see_class = $row['adm_see_class'];
        $place = $row['place'];
        $date = $row['date'];
        $admit_to = $row['admit_to'];
        $date_of_admit = $row['date_of_admit'];
        $add_no = $row['add_no'];
        $status = $row['status'];
        $image = $row['image'];
        $age = $row['age'];
        $ann_inc = $row['ann_inc'];
        $email_id = $row['email_id'];
        $distnc = $row['distnc'];
        $office_address = $row['office_address'];
        $permnt_addres = $row['permnt_addres'];
        $edu_fat = $row['edu_fat'];
        $edu_mot = $row['edu_mot'];

        $id = 0;


    }
} else if (isset($_POST['stu_name'])) {
    $id = 1;
    $stu_id = $_POST['stu_id'];
    $stu_name = $_POST['stu_name'];
    $stu_dob = $_POST['stu_dob'];
    $gender = $_POST['gender'];
    $stu_aad_num = $_POST['stu_aad_num'];
    $fat_name = $_POST['fat_name'];
    $con_no_fat = $_POST['con_no_fat'];
    $occ_of_fat = $_POST['occ_of_fat'];
    $mot_name = $_POST['mot_name'];
    $con_no_mot = $_POST['con_no_mot'];
    $occ_of_mot = $_POST['occ_of_mot'];
    $address = $_POST['address'];
    $name_of_guard = $_POST['name_of_guard'];
    $con_no_guard = $_POST['con_no_guard'];
    $rel_with_stu = $_POST['rel_with_stu'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $mot_ton = $_POST['mot_ton'];
    $last_stu_add = $_POST['last_stu_add'];
    $class_last_stu = $_POST['class_last_stu'];
    $adm_see_class = $_POST['adm_see_class'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $admit_to = $_POST['admit_to'];
    $date_of_admit = $_POST['date_of_admit'];
    $add_no = $_POST['add_no'];
    $age = $_POST['age'];
    $ann_inc = $_POST['ann_inc'];
    $email_id = $_POST['email_id'];
    $distnc = $_POST['distnc'];
    $office_address = $_POST['office_address'];
    $permnt_addres = $_POST['permnt_addres'];
    $edu_fat = $_POST['edu_fat'];
    $edu_mot = $_POST['edu_mot'];

    $application_no = null;
} else {
    header('Location:https://rnvk.in/apply-online.html');
}

?>
<div id="wrapper" class="clearfix">
    <!-- preloader -->


    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell" style='background-color:#eeeeee'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-push-3 frmhd">
                                <?php
                                if ($st) {

                                    echo '<center>
				            <div class="alert alert-success  mt-2">
				                <h5>Successfully Submitted</h5>
                                <h3>Please Note down Your application No:<strong>' . '' . $application_no . '</strong> </h3>
                            </div></center>
                            
                             ';

                                    echo '<div class="alert alert-success  mt-2">
                                <form action="/pay/pgRedirect.php" method="post">
                          <input type="hidden" value="' . $application_no . '" name="application_no" id="application_no"/>
                          <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "  data-loading-text="Please wait..." name="btn-upload">Pay And Procced</button>
                      </form>
                             
                             </div>';
                                } else if (!$st) {
                                    if ($status == 'TXN_SUCCESS') {
                                        if ($adm_see_class == '1st PUC' || $adm_see_class == '2nd PUC') {
                                            print'
                            <div class="alert alert-success  mt-2">
                                    <center> Application No:' . $application_no . '</center>
                                <form action="/print_rece11.php" method="post">
                                      <input type="hidden" value="' . $application_no . '" name="application_no" id="application_no"/>
                                      <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "  data-loading-text="Please wait..." name="btn-upload">Print Application' . $adm_see_class . '</button>
                                 </form>
                             
                             </div>
                            
                                
                            ';
                                        } else {
                                            print'
                            <div class="alert alert-success  mt-2">
                                    <center> Application No:' . $application_no . '</center>
                                <form action="/print_rece.php" method="Post">
                                      <input type="hidden" value="' . $application_no . '" name="application_no" id="application_no"/>
                                      <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "  data-loading-text="Please wait..." name="btn-upload">Print Application' . $adm_see_class . '</button>
                                 </form>
                             
                             </div>
                            
                                
                            ';
                                        }
                                    } else {
                                        if ($application_no) {
                                            echo '<div class="alert alert-success  mt-2">
                                    <center> Application No:' . $application_no . '</center>
                                <form action="/pay/pgRedirect.php" method="post">
                                      <input type="hidden" value="' . $application_no . '" name="application_no" id="application_no"/>
                                      <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "  data-loading-text="Please wait..." name="btn-upload">Pay And Procced</button>
                                 </form>
                             
                             </div>';
                                        }
                                    }
                                }

                                ?>
                                <div class="text-center mb-60 hidden-xs hidden-sm visible-lg"><a class="">

                                        <img src="img/logo.png" alt="" style='height:50px;margin-left:-30px'>

                                        <h5>YASHASWINI EDUCATION SOCIETY (R)</h5>
                                        <span style='color:#23527c;font-size:24px; font-weight: 600;'>RASHTRIYA NAVODAYA VIDYA KENDRA (RNVK)</span><br>
                                        <h4>(Recognized by Govt of Karnataka)</h4>
                                        <h5>#52/3A Veerabadrappa Layout Thigalarapalya Main Road Peenya 2nd Stage
                                            Bangalore 560058</h5>
                                        <span style='color:#23527c;font-size:23px;margin-bottom:-180px'>APPLICATION FORM FOR THE YEAR 2022-2023</span>

                                    </a></div>
                                <div class="text-center mb-60 visible-xs visible-sm hidden-lg"><a class="">


                                        <img src="img/logo.png" alt="" style='height:50px;margin-left:-30px'>

                                        <h5>YASHASWINI EDUCATION SOCIETY (R)</h5>
                                        <span style='color:#23527c;font-size:24px; font-weight: 600;'>RASHTRIYA NAVODAYA VIDYA KENDRA (RNVK)</span><br>
                                        <h4>(Recognized by Govt of Karnataka)</h4>
                                        <h5>#52/3A Veerabadrappa Layout Thigalarapalya Main Road Peenya 2nd Stage
                                            Bangalore 560058</h5>
                                        <span style='color:#23527c;font-size:23px;margin-bottom:-180px'>APPLICATION FORM FOR THE YEAR 2022-2023</span>


                                    </a></div>

                                <div class=" border-1px p-30 mb-0" style='background-color:#fff;margin-top:-40px'>
                                    <div class="row">
                                        <input disabled name="application_no" type="hidden"
                                               value="<?php echo $application_no; ?>" required class="form-control">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Name of the Student<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="stu_name" type="text"
                                                       value="<?php echo $stu_name; ?>" placeholder="Enter Name"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Date of Birth <small>*</small></label>
                                                <input disabled name="stu_dob" type="date"
                                                       value="<?php echo $stu_dob; ?>" placeholder="Date of Birth"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Gender <small>*</small></label>
                                                <select name="gender" disabled class="form-control">
                                                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?> </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Age of the Student<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="age" type="text" value="<?php echo $age; ?>"
                                                       placeholder="Age of the Student" required class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Student Aadhar Number<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="stu_aad_num" type="text"
                                                       value="<?php echo $stu_aad_num; ?>"
                                                       placeholder="Enter Aadhar Number" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Father’s Name<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="fat_name" type="text"
                                                       value="<?php echo $fat_name; ?>"
                                                       placeholder="Enter Father’s Name" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Contact No<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="con_no_fat" type="text"
                                                       value="<?php echo $con_no_fat; ?>" placeholder="Enter Contact No"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Father Qualification<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="edu_fat" type="text"
                                                       value="<?php echo $edu_fat; ?>"
                                                       placeholder=">Father Qualification" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Occupation of Father<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="occ_of_fat" type="text"
                                                       value="<?php echo $occ_of_fat; ?>"
                                                       placeholder="Enter Occupation of Father" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Mother’s Name<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="mot_name" type="text"
                                                       value="<?php echo $mot_name; ?>"
                                                       placeholder="Enter Mother’s Name" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Contact No<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="con_no_mot" type="text"
                                                       value="<?php echo $con_no_mot; ?>" placeholder="Enter Contact No"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Mother Qualification<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="edu_mot" type="text"
                                                       value="<?php echo $edu_mot; ?>"
                                                       placeholder=">Mother Qualification" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Occupation of Mother<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="occ_of_mot" type="text"
                                                       value="<?php echo $occ_of_mot; ?>"
                                                       placeholder="Enter Occupation of Mother" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Residential Address<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="address" type="text"
                                                       value="<?php echo $address; ?>"
                                                       placeholder="Enter Residential Address" required
                                                       class="form-control">
                                                <!--<textarea  disabled name="address" type="text" value="<?php echo $address; ?>" placeholder="Enter Residential Address" required="" class="form-control">  </textarea>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Office Address<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="office_address" type="text"
                                                       value="<?php echo $office_address; ?>"
                                                       placeholder="Residential Address" required class="form-control">
                                                <!--<textarea  disabled name="office_address" type="text" value="<?php echo $office_address; ?>" placeholder="Residential Address" required="" class="form-control">  </textarea>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Permanent Address<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="permnt_addres" type="text"
                                                       value="<?php echo $permnt_addres; ?>"
                                                       placeholder="Permanent Address" required class="form-control">
                                                <!--<textarea  disabled name="permnt_address" type="text" value="<?php echo $permnt_address; ?>" placeholder="Permanent Address" required="" class="form-control">  </textarea>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Annual Income<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="ann_inc" type="text"
                                                       value="<?php echo $ann_inc; ?>" placeholder="Annual Income"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Name of Guardian (if in case of
                                                    emergency)<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="name_of_guard" type="text"
                                                       value="<?php echo $name_of_guard; ?>"
                                                       placeholder="Enter Name of Guardian" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Contact No<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="con_no_guard" type="text"
                                                       value="<?php echo $con_no_guard; ?>"
                                                       placeholder="Enter Contact No" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Relationship With
                                                    Student<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="rel_with_stu" type="text"
                                                       value="<?php echo $rel_with_stu; ?>"
                                                       placeholder="Enter Relationship With Student" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Email ID<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="email_id" type="text"
                                                       value="<?php echo $email_id; ?>" placeholder="Email ID" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Nationality:<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="nationality" type="text"
                                                       value="<?php echo $nationality; ?>"
                                                       placeholder="Enter Nationality" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Religion:<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="religion" type="text"
                                                       value="<?php echo $religion; ?>" placeholder="Enter Religion"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Caste:<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="caste" type="text" value="<?php echo $caste; ?>"
                                                       placeholder="Enter Caste" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Mother Tongue: <small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="mot_ton" type="text"
                                                       value="<?php echo $mot_ton; ?>" placeholder="Enter Mother Tongue"
                                                       required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Admission Seeking for the
                                                    class<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <select class='w-100 p-2 mt-1 text-uppercase form-control'
                                                        onchange='checkAdmission(this.value)' name="adm_see_class"
                                                        style='color:gray' disabled>
                                                    <option value="<?php echo $adm_see_class; ?>"><?php echo $adm_see_class; ?> </option>
                                                    <option value="PREKG">PREKG</option>
                                                    <option value="LKG">LKG</option>
                                                    <option value="UKG">UKG</option>
                                                    <option value="Class-1">Class-1</option>
                                                    <option value="Class-2">Class-2</option>
                                                    <option value="Class-3">Class-3</option>
                                                    <option value="Class-4">Class-4</option>
                                                    <option value="Class-5">Class-5</option>
                                                    <option value="Class-6">Class-6</option>
                                                    <option value="Class-7">Class-7</option>
                                                    <option value="Class-8">Class-8</option>
                                                    <option value="Class-9">Class-9</option>
                                                    <option value="Class-10">Class-10</option>
                                                    <option value="1st PUC">1st PUC</option>
                                                    <option value="2nd PUC">2nd PUC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Approximate Distance from Residence to School
                                                    <small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="distnc" type="text" value="<?php echo $distnc; ?>"
                                                       placeholder="Distance from Residence to School" required
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row sel " style='display:none'>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>School in which last Studied &
                                                    Address<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="last_stu_add" type="text"
                                                       value="<?php echo $last_stu_add; ?>"
                                                       placeholder="Enter School in which last Studied & Address"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row sel" style='display:none'>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Class in which last
                                                    studied<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class='w-100 p-2 mt-1 text-uppercase form-control'
                                                        name="class_last_stu" disabled style='color:gray' required>
                                                    <option value="<?php echo $class_last_stu; ?>"><?php echo $class_last_stu; ?></option>
                                                    <option value="PREKG">PREKG</option>
                                                    <option value="LKG">LKG</option>
                                                    <option value="UKG">UKG</option>
                                                    <option value="Class-1">Class-1</option>
                                                    <option value="Class-2">Class-2</option>
                                                    <option value="Class-3">Class-3</option>
                                                    <option value="Class-4">Class-4</option>
                                                    <option value="Class-5">Class-5</option>
                                                    <option value="Class-6">Class-6</option>
                                                    <option value="Class-7">Class-7</option>
                                                    <option value="Class-8">Class-8</option>
                                                    <option value="Class-9">Class-9</option>
                                                    <option value="Class-10">Class-10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row " style='color:gray;'>
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <label for='file' style='color:gray'>Upload
                                                    Image<small>*</small></label>
                                                <input type='file' class='file' id='file' onchange='image(event)'
                                                       name='file'/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <img class=" mr-3 border" id="im1"
                                                     src="/Uploads_application/<?php echo $image ?>" height="180px"
                                                     width="150px" alt="">

                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <h3 class="text-theme-colored mt-0 pt-5">
                                        <center>DECLARATION BY THE PARENT/GUARDIAN</center>
                                    </h3>
                                    <hr>

                                    <h5 class="text-theme-colored mt-0 pt-5">• I here by declare that the Date of birth
                                        of my son / daughter stated above is correct and i will not demand any change on
                                        any subsequent date.</h5>
                                    <h5 class="text-theme-colored mt-0 pt-5">• I agree to abide by the rules of the
                                        school as laid down by the management from time to time.</h5>
                                    <h5 class="text-theme-colored mt-0 pt-5">• An annual fee increase of 10 to 15
                                        percent is effective to offset the increasing expenditure by way of salary,
                                        maintenance and material expenditure etc. RNVK, THIGALARAPALYA is a private self
                                        - financing institution.</h5>
                                    <h5 class="text-theme-colored mt-0 pt-5">• Any direct or indirect influence will
                                        entail outright rejection of such applications.</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Place:<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="place" type="text" value="<?php echo $place; ?>"
                                                       placeholder="Enter Place:" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'>Date:<small>*</small></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input disabled name="date" type="date" value="<?php echo $date; ?>"
                                                       placeholder="Date of Birth" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style='color:gray'></label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>


                                    <?php if ($id) { ?>

                                        <div class="row ">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input disabled name="form_botcheck" class="form-control"
                                                           type="hidden" value=""/>
                                                    <div class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10 submit-button"
                                                         data-loading-text="Please wait..." name="btn-upload">Final
                                                        Submission
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input disabled name="form_botcheck" class="form-control"
                                                           type="hidden" value=""/>
                                                    <div class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10 edit-button"
                                                         data-loading-text="Please wait..." name="btn-upload">Edit
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--</form>-->

                                        <div class='al'></div>
                                        <div class='pay-print' style='display:none' height='30px'>
                                            <form action="/pay/pgRedirect.php" method='post'>
                                                <input type='hidden' value='<?php echo $application_no; ?>'
                                                       name='application_no' id='application_no'/>
                                                <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "
                                                        data-loading-text="Please wait..." name="btn-upload">Pay And
                                                    Procced
                                                </button>
                                            </form>

                                        </div>

                                    <?php } else {
                                        if ($status != 'TXN_SUCCESS') { ?>

                                            <div class='al'></div>
                                            <div class='pay-print' style='' height='30px'>
                                                <form action="/pay/pgRedirect.php" method='post'>
                                                    <input type='hidden' value='<?php echo $application_no; ?>'
                                                           name='application_no' id='application_no'/>
                                                    <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "
                                                            data-loading-text="Please wait..." name="btn-upload">Pay And
                                                        Procced
                                                    </button>
                                                </form>

                                            </div>


                                        <?php } else {
                                            if ($adm_see_class == '1st PUC' || $adm_see_class == '2nd PUC') {
                                                ?>

                                                <div class='pay-print' style='' height='30px'>
                                                    <form action="/print_rece11.php" method='POST'>
                                                        <input type='hidden' value='<?php echo $application_no; ?>'
                                                               name='application_no' id='application_no'/>
                                                        <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "
                                                                data-loading-text="Please wait..." name="btn-upload">
                                                            Print Application <?php echo $adm_see_class; ?></button>
                                                    </form>

                                                </div>
                                            <?php } else {
                                                ?>
                                                <div class='pay-print' style='' height='30px'>
                                                    <form action="/print_rece.php" method='POST'>
                                                        <input type='hidden' value='<?php echo $application_no; ?>'
                                                               name='application_no' id='application_no'/>
                                                        <button class="btn btn-block btn-primary  btn-sm mt-20 pt-10 pb-10 "
                                                                data-loading-text="Please wait..." name="btn-upload">
                                                            Print Application <?php echo $adm_see_class; ?></button>
                                                    </form>

                                                </div>

                                                <?php
                                            }


                                        }
                                    } ?>
                                    <script>
                                        $('.edit-button').on('click', function () {
                                            event.preventDefault();
                                            $(':input').prop("disabled", false);
                                        });

                                        $('.submit-button').on('click', function (e) {
                                            if ($('#file').val() == '') {
                                                alert('Select Image');
                                                return 0;
                                            }
                                            $('.submit-button').attr("disabled", "disabled");
                                            $('.submit-button').html('Please Wait...');
                                            var file_data = $('#file').prop('files')[0];
                                            var form_data = new FormData();
                                            form_data.append('file', file_data);
                                            form_data.append('application_no', $("input[name=application_no]").val());
                                            form_data.append('stu_name', $("input[name=stu_name]").val());
                                            form_data.append('stu_dob', $("input[name=stu_dob]").val());
                                            form_data.append('gender', $("select[name=gender]").val());
                                            form_data.append('stu_aad_num', $("input[name=stu_aad_num]").val());
                                            form_data.append('fat_name', $("input[name=fat_name]").val());
                                            form_data.append('con_no_fat', $("input[name=con_no_fat]").val());
                                            form_data.append('occ_of_fat', $("input[name=occ_of_fat]").val());
                                            form_data.append('mot_name', $("input[name=mot_name]").val());
                                            form_data.append('con_no_mot', $("input[name=con_no_mot]").val());
                                            form_data.append('occ_of_mot', $("input[name=occ_of_mot]").val());
                                            form_data.append('address', $("input[name=address]").val());
                                            form_data.append('name_of_guard', $("input[name=name_of_guard]").val());
                                            form_data.append('con_no_guard', $("input[name=con_no_guard]").val());
                                            form_data.append('rel_with_stu', $("input[name=rel_with_stu]").val());
                                            form_data.append('nationality', $("input[name=nationality]").val());
                                            form_data.append('religion', $("input[name=religion]").val());
                                            form_data.append('caste', $("input[name=caste]").val());
                                            form_data.append('mot_ton', $("input[name=mot_ton]").val());
                                            form_data.append('last_stu_add', $("input[name=last_stu_add]").val());
                                            form_data.append('class_last_stu', $("select[name=class_last_stu]").val());
                                            form_data.append('adm_see_class', $("select[name=adm_see_class]").val());
                                            form_data.append('place', $("input[name=place]").val());
                                            form_data.append('date', $("input[name=date]").val());
                                            form_data.append('admit_to', $("input[name=admit_to]").val());
                                            form_data.append('date_of_admit', $("input[name=date_of_admit]").val());
                                            form_data.append('add_no', $("input[name=add_no]").val());

                                            form_data.append('age', $("input[name=age]").val());
                                            form_data.append('ann_inc', $("input[name=ann_inc]").val());
                                            form_data.append('email_id', $("input[name=email_id]").val());
                                            form_data.append('distnc', $("input[name=distnc]").val());
                                            form_data.append('office_address', $("input[name=office_address]").val());
                                            form_data.append('permnt_addres', $("input[name=permnt_addres]").val());
                                            form_data.append('edu_fat', $("input[name=edu_fat]").val());
                                            form_data.append('edu_mot', $("input[name=edu_mot]").val());

                                            $.ajax({
                                                url: 'online1.php',
                                                dataType: 'text',
                                                cache: false,
                                                contentType: false,
                                                processData: false,
                                                data: form_data,
                                                enctype: 'multipart/form-data',
                                                type: 'post',
                                                success: function (data) {
                                                    alert('done');
                                                    $('.edit-button').css('display', 'none');
                                                    $('.submit-button').css('display', 'none');
                                                    $('.pay-print').css('display', '');
                                                    $('.application_no').val(data);
                                                    $('.al').append('<div alert class="text-primary"> Please Note down Your application No <b>' + data + '</b></div>');
                                                    window.location = 'apply_print.php?application_no=' + data + '&st=dsa ohdo sads adas dsai duos avdu sad sau';
                                                },
                                                error: function (data) {
                                                    $('.submit-button').prop("disabled", false);
                                                    alert(json.error);
                                                },
                                            });

                                        });


                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-222">
        <div class="container p-20">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Copyright &copy;2017 Rashtriya Navodaya Vidya Kendra. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
    function checkAdmission(str) {
        if (str == 'PREKG') {
            $('.sel').hide();
        } else {
            $('.sel').show();
        }
    }

    var image = function (event) {
        var output = document.getElementById('im1');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

</body>
</html>