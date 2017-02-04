<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/target.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/add.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/info.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/modal1.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/modal2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/modal3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/modal4.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/modal5.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/normalize.css">
    <link rel="icon" href="<?php echo base_url() ?>/asset/images/Logo.png" type="image/x-icon">
    <title>Renata Home</title>
    <style>
    </style>
</head>
<body>
<div id="full_width">

    <div class="left-col"> <!-- Left Side Bar -->
        <div class="profile container-fluid">
            <a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>asset/images/reneta.png"
                                                        class="main-logo center-block" alt="reneta logo"><img
                    src="<?php echo base_url() ?>asset/images/small-logo.png" class="small-logo center-block"
                    alt="reneta logo"></a>
            <hr class="big_one">
            <hr class="small_one">
        </div>

        <div class="app_dashboard"> <!-- Nav Bar or Nav Links -->
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active appp ungroup">
                            <a href="<?php echo base_url() ?>home">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Home.png"
                                                         alt="reneta_icons">
                                    Home</p>
                            </a>
                        </li>
                        <li class="appp ungroup">
                            <a href="<?php echo base_url() ?>medicine_literature">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Literature.png"
                                                         alt="reneta_icons">
                                    Medicine Literature</p>
                            </a>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#test">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Tests.png"
                                                         alt="reneta_icons">
                                    Tests<span class="pull-right glyphicon glyphicon-triangle-bottom"
                                               aria-hidden="true"></span></p>
                            </a>
                            <ul id="test" class="collapse">
                                <li class="inner-appp"><a href="<?php echo base_url() ?>test/create_test"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            Create Test</p></a></li>
                                <li class="inner-appp"><a href="<?php echo base_url() ?>test/result"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            Results</p></a></li>
                                <li class="inner-appp"><a href="<?php echo base_url() ?>test/test_page"><p
                                            class="app_small_text"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Test Page</p></a></li>
                            </ul>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#target">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Target.png"
                                                         alt="reneta_icons">
                                    Reneta Shop<span
                                        class="pull-right glyphicon glyphicon-triangle-bottom"
                                        aria-hidden="true"></span></p>
                            </a>
                            <ul id="target" class="collapse">
                                <li class="inner-appp"><a href="<?php echo base_url() ?>tar_shop/create_target"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            Create Target or Incentive</p></a></li>
                                <li class="inner-appp"><a href="<?php echo base_url() ?>tar_shop/track_incentive"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Track
                                            Incentive</p></a></li>
                            </ul>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#pso">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/PSO.png"
                                                         alt="reneta_icons">
                                    PSO<span class="pull-right glyphicon glyphicon-triangle-bottom"
                                             aria-hidden="true"></span></p>
                            </a>
                            <ul id="pso" class="collapse">
                                <li class="inner-appp"><a href="<?php echo base_url() ?>pso/add_pso"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Add
                                            PSO</p></a></li>
                                <li class="inner-appp"><a href="<?php echo base_url() ?>pso/manage_pso"><p
                                            class="app_small_text"><span
                                                class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            Manage PSO</p></a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div><!-- app_dashboard -->
    </div><!-- left-col -->

    <div class="right-col"> <!-- Right Part of the BODY -->
        <div class="signup-bar"> <!-- Top SignUp Section, Desktop Size -->
            <div class="signup pull-right">
                <a href="#"><img class="signup_img pull-left" src="<?php echo base_url() ?>asset/images/Photo.png"
                                 alt="profile-picture"></a>
                <div class="dropdown pull-left">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <?php echo $this->session->userdata('admin_name'); ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Name 1</a></li>
                        <li><a href="#">Name 2</a></li>
                        <li><a href="#">Name 3</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url() ?>login/logout">Logout</a></li>
                    </ul>
                </div> <!-- dropdown -->
            </div> <!-- signup -->
        </div> <!-- signup-bar -->

        <div class="banner-wrapper"> <!-- Top Banner -->

            <nav class="navbar small_nav"> <!-- Toggle Nav Bar, Mobile/Phone View -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#small_ver_toggle" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse small-ver" id="small_ver_toggle">
                    <ul class="nav navbar-nav">
                        <li class="appp">
                            <div class="signup">
                                <a href="#"><img class="signup_img pull-left"
                                                 src="<?php echo base_url() ?>asset/images/Photo.png"
                                                 alt="profile-picture"></a>
                                <div class="dropdown pull-left">

                                    <button class="btn btn-primary dropdown-toggle">
                                        <a href="javascript:;" data-toggle="collapse" data-target="#dropped">
                                            <?php echo $this->session->userdata('admin_name'); ?>
                                            <span class="caret"></span>
                                        </a>
                                    </button>

                                    <ul id="dropped" class="collapse">
                                        <li><a href="#"><p class="app_small_text"><span
                                                        class="glyphicon glyphicon-certificate"
                                                        aria-hidden="true"></span> Profile</p></a></li>
                                        <li><a href="#"><p class="app_small_text"><span
                                                        class="glyphicon glyphicon-certificate"
                                                        aria-hidden="true"></span> Dashboard</p></a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo base_url() ?>login/logout"><p class="app_small_text"><span
                                                        class="glyphicon glyphicon-certificate"
                                                        aria-hidden="true"></span> Sign Out</p></a></li>
                                    </ul>
                                </div><!-- dropdown -->
                            </div><!-- signup -->
                        </li>
                        <li class="active appp">
                            <a href="<?php echo base_url() ?>home">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Home.png"
                                                         alt="reneta_icons">
                                    Home</p>
                            </a>
                        </li>
                        <li class="appp">
                            <a href="<?php echo base_url() ?>medicine_literature">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Literature.png"
                                                         alt="reneta_icons">
                                    Medicine Literature</p>
                            </a>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#test0">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Tests.png"
                                                         alt="reneta_icons">
                                    Tests<span class="pull-right glyphicon glyphicon-triangle-bottom"
                                               aria-hidden="true"></span></p>
                            </a>
                            <ul id="test0" class="collapse">
                                <li><a href="<?php echo base_url() ?>test/create_test"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Create Test
                                        </p></a></li>
                                <li><a href="<?php echo base_url() ?>test/result"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Results</p>
                                    </a></li>
                            </ul>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#target0">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/Target.png"
                                                         alt="reneta_icons">
                                    Reneta Shop<span
                                        class="pull-right glyphicon glyphicon-triangle-bottom"
                                        aria-hidden="true"></span></p>
                            </a>
                            <ul id="target0" class="collapse">
                                <li><a href="<?php echo base_url() ?>tar_shop/create_target"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Create Incentive</p></a></li>
                                <li><a href="<?php echo base_url() ?>tar_shop/track_incentive"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Track
                                            Incentive</p></a></li>
                            </ul>
                        </li>

                        <li class="appp">
                            <a href="javascript:;" data-toggle="collapse" data-target="#pso0">
                                <p class="app-text"><img class="app_icons"
                                                         src="<?php echo base_url() ?>asset/images/PSO.png"
                                                         alt="reneta_icons">
                                    PSO<span class="pull-right glyphicon glyphicon-triangle-bottom"
                                             aria-hidden="true"></span></p>
                            </a>
                            <ul id="pso0" class="collapse">
                                <li><a href="<?php echo base_url() ?>pso/add_pso"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Add PSO</p>
                                    </a></li>
                                <li><a href="<?php echo base_url() ?>pso/manage_pso"><p class="app_small_text"><span class="glyphicon glyphicon-certificate"
                                                                                aria-hidden="true"></span> Manage PSO
                                        </p></a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

            <div class="profile-insider container-fluid">
                <a href="#"><img src="<?php echo base_url() ?>asset/images/small-logo.png"
                                 class="small-logo center-block" alt="reneta logo"></a>
                <hr class="big_one">
                <hr class="small_one">
            </div>

            <div class="banner col-md-3 col-sm-3 col-xm-3">
                <div class="banner-icon">
                    <img class="center-block banner-icon-img" src="<?php echo base_url() ?>asset/images/Literature.png"
                         alt="">
                    <p class="text-center banner-text">Literature</p>
                    <h3 class="text-center banner-text">900</h3>
                </div>
            </div>

            <div class="banner col-md-3 col-sm-3 col-xm-3">
                <div class="banner-icon">
                    <img class="center-block banner-icon-img" src="<?php echo base_url() ?>asset/images/PSO.png" alt="">
                    <p class="text-center banner-text"><strong>PSO</strong></p>
                    <h3 class="text-center banner-text">250</h3>
                </div>
            </div>

            <div class="banner col-md-3 col-sm-3 col-xm-3">
                <div class="banner-icon">
                    <img class="center-block banner-icon-img" src="<?php echo base_url() ?>asset/images/Test.png"
                         alt="">
                    <p class="text-center banner-text">Tests</p>
                    <h3 class="text-center banner-text">3500</h3>
                </div>
            </div>

            <div class="banner col-md-3 col-sm-3 col-xm-3">
                <div class="banner-icon">
                    <img class="center-block banner-icon-img" src="<?php echo base_url() ?>asset/images/Offers.png"
                         alt="">
                    <p class="text-center banner-text">Offers</p>
                    <h3 class="text-center banner-text">71</h3>
                </div>
            </div>
        </div><!-- banner-wrapper -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/app.js"></script>
        <script src="<?php echo base_url() ?>asset/js/date.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js" integrity="sha256-1qeNeAAFNi/g6PFChfXQfa6CQ8eXoHXreohinZsoJOQ=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()?>asset/js/new.js"></script>
<!--        <script src="--><?php //echo base_url()?><!--asset/js/jquery-3.1.1.min.js"></script>-->


</body>
</html>


<script>
    function district(division_id) {
        $.ajax(
            {
                type: 'POST',
                data: {division_id: division_id},
                url: '<?php echo site_url('find/find_district')?>',
                success: function (result) {
                    $('.district').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }
    function region(district_id) {
        $.ajax(
            {
                type: 'POST',
                data: {district_id: district_id},
                url: '<?php echo site_url('find/find_region')?>',
                success: function (result) {
                    $('.region').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }
    function update_password() {
        var check = confirm('Are You Sure To Update Password!!!');
        if (check) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_account() {
        var check = confirm('Are You Sure To Delete Pso Account!!!');
        if (check) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_med() {
        var check = confirm('Are You Sure To Delete This!!!');
        if (check) {
            return true;
        }
        else {
            return false;
        }
    }
    function approve_transaction() {
        var check = confirm('Are You Sure To Purchase this Incentive!!!');
        if (check) {
            return true;
        }
        else {
            return false;
        }
    }

    function change() {

        var elems = document.getElementsByClassName("change");
        for(var i = 0; i < elems.length; i++) {
            elems[i].disabled = false;
        }
        document.getElementById('image').type='file';
        document.getElementById('submit').type='submit';
    }

    function hidee() {

        if(document.getElementById('hh1').style.visibility=='hidden')
        {
            document.getElementById('hh1').style.visibility='visible';
            document.getElementById('hh2').style.visibility='visible';
        }
        else
        {
            document.getElementById('hh1').style.visibility='hidden';
            document.getElementById('hh2').style.visibility='hidden';
        }

    }

    var drug_idd;
    var drug_idd2;
    var upload_type;
    var doc_typee;
    function drug_list(gen_id, result)
    {
        $.ajax(
            {
                type:'POST',
                data:{gen_id:gen_id},
                url:'<?php echo site_url('find/find_drugs')?>',
                success:function (result) {
                    $('.drug').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }
    function drug_list2(gen_id, result)
    {
        $.ajax(
            {
                type:'POST',
                data:{gen_id:gen_id},
                url:'<?php echo site_url('find/find_drugs')?>',
                success:function (result) {
                    $('.drug2').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }
    function drug_no(drug_id)
    {
        drug_idd=drug_id;
    }
    function drug_no1(drug_id)
    {
        drug_idd=drug_id;
    }

    function version_find(doc_type, result)
    {
        doc_typee=doc_type;
        $.ajax(
            {
                type:'POST',
                data:{doc_type:doc_type,drug_id:drug_idd},
                url:'<?php echo site_url('find/find_version')?>',
                success:function (result) {
                    $('#version').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }

    function fill_data(version_id) {
        version_id=version_id;
            if(version_id!='0'&&version_id!='-1')
            {
                $.ajax({
                    url: '<?php echo site_url('find/find_version_data')?>',
                    type: "POST",
                    dataType:'json',
                    data: {version_id: version_id},
                    success: function (data) {
                        var id=data[0]['detail_version_id'];
                        var point1=data[0]['point1'];
                        var point2=data[0]['point2'];
                        var point3=data[0]['point3'];
                        var audio1=data[0]['audio1'];
                        var audio2=data[0]['audio2'];
                        var audio3=data[0]['audio3'];
                        var drug_audio=data[0]['drug_name_audio'];
                        var drug_image=data[0]['drug_detail_image'];
                        var all='1. Drug Audio: '+drug_audio+'<br>'+'2.Point 1 audio: '+audio1+'<br>'+'3.Point 2 audio: '+audio2+'<br>'+'4.Point 3 audio: '+audio3+'<br>'+'5. Drug Image: '+drug_image;
                        $('#ver_id').val(id);
                        $('#point1').val(point1);
                        $('#point2').val(point2);
                        $('#point3').val(point3);
                        $('#files1').html(all);
                        $('#audio1_test').val(audio1);
                        $('#audio2_test').val(audio2);
                        $('#audio3_test').val(audio3);
                        $('#drug_audio_test').val(drug_audio);
                        $('#image_test').val(drug_image);
                    },
                    error: function (result) {
                        alert('POST failed.');
                    }
                })
            }
            if(version_id=='0')
            {
                if(confirm('Are you sure you want new version?'))
                {
                    $('#point1').val('');
                    $('#point2').val('');
                    $('#point3').val('');
                    $('#audio1_test').val('');
                    $('#audio2_test').val('');
                    $('#audio3_test').val('');
                    $('#drug_audio_test').val('');
                    $('#image_test').val('');
                    $('#files1').html('');
                    $.ajax(
                        {
                            type:'POST',
                            data:{doc_type:doc_typee,drug_id:drug_idd},
                            url:'<?php echo site_url('find/add_new_version')?>',
                            success:function (result) {
                                $('#ver_id').val(result);
                            },
                            error: function (result) {
                                alert('POST failed.');
                            }
                        }
                    )
                }
            }
            if(version_id=='-1')
            {
                $('#point1').val('');
                $('#point2').val('');
                $('#point3').val('');
                $('#audio1_test').val('');
                $('#audio2_test').val('');
                $('#audio3_test').val('');
                $('#drug_audio_test').val('');
                $('#image_test').val('');
                $('#files1').html('');
            }
    }

    function drug_no2(drug_id) {
        drug_idd2=drug_id;
        var d_id=drug_id;
        $.ajax(
            {
                type:'POST',
                data:{drug_id:d_id},
                url:'<?php echo site_url('find_drug/find_drug_des')?>',
                success:function (result) {
                    $('.views').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )

    }
    function drug_des(upload_file_type, result)
    {
        upload_type=upload_file_type;
        $.ajax(
            {

                type:'POST',
                data:{type:upload_file_type,drug_id:drug_idd},
                url:'<?php echo site_url('find/find_file')?>',
                success:function (result) {
                    $('#typee').html(result);
                },
                error: function (result) {
                    alert('POST failed.');
                }
            }
        )
    }

    function check_upload_drug_des() {

        if ($('#drug').val() == '-1') {
            alert("Please Select Drug");
            return false;
        }
        else if ($('#type').val() == '-1') {
            alert("Please Select Type");
            return false;
        }
        else if ($('#pdf').val() == '') {
            alert("Please Select a File");
            return false;
        }
        else
        {
            return true;
        }
    }

//    $(document).ready(function () {
//        $('#upload_form').on('submit', function (e) {
//            e.preventDefault();
//            if ($('#drug').val() == '-1') {
//                alert("Please Select Drug");
//            }
//            else if ($('#type').val() == '-1') {
//                alert("Please Select Type");
//            }
//            else if ($('#pdf').val() == '') {
//                alert("Please Select a File");
//            }
//            else {
//                $.ajax({
//                    url: "<?php //echo base_url();?>//medicine_literature/drug_dse_upload",
//                    method: "POST",
//                    data: new FormData(this),
//                    contentType: false,
//                    cache: false,
//                    processData: false,
//                    success: function (data) {
//                        $('form').trigger("reset");
////                    $('#message').fadeIn().html(data);
////                    setTimeout(function () {$('#message').fadeOut('slow');
////                    },3000);
//                    },
//                    error: function (result) {
//                        alert('POST failed.');
//                    }
//                });
//            }
//        });
//    });

</script>