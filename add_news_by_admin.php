<?php
// session_start();

// include('../conn/dbcon.php');
include("dbconnection1.php");

// $student_id = $_SESSION['stud_logdetail'];

// $student_id = 3102;
// $student_id = 4591;
// $student_id = 369;

// if (!isset($_SESSION['stud_logdetail'])) {
// 	header('location:../index.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <title>SRGI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha512-xnwMSDv7Nv5JmXb48gKD5ExVOnXAbNpBWVAXTo9BJWRJRygG8nwQI81o5bYe8myc9kiEF/qhMGPjkSsF06hyHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        body {
            font-size: 11px !important;
        }

        .table thead th,
        .table tbody td,
        .table tfoot th {
            border-bottom-width: 2px;
            font-size: 12px !important;
        }

        #studlist_tbodyy tr td:hover {
            background: #f3f3f3 !important;
        }

        #studlist_tbodyy tr td {
            background: #fff;
            padding: 2px 10px;
            border-bottom: 1px solid #f3f3f3;
            cursor: pointer;
            border-right: 1px solid #f3f3f3;
        }

        #year,
        #year1 {
            padding: 5px;
            width: 100%;
            border-radius: 20px;
            border-width: 0px;
            border-color: grey;
            padding-left: 20px;
            background-color: #e6f5ff;
        }

        textarea {
            border-radius: 20px;
            border-width: 0px;
            padding-left: 20px;
            padding-top: 5px;
            background-color: #e6f5fe;

        }

        label {
            font-size: 16px;
        }

        .modal-dialog {
            width: 960px;
        }

        #exampleModalLabel {
            background: linear-gradient(90deg, rgba(93, 177, 247, 1) 0%, rgba(181, 226, 238, 1) 100%);
            padding: 10px;
            border-radius: 20px;

        }

        #insert_data {
            display: none;
            font-size: 16px;
            background-color: #B0C4DE;
            padding: 8px;
            width: 190px;
        }

        #file_name {
            cursor: pointer;
        }

        #fupForm {
            /* border: 1px solid black; */
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        }

        .input-group {
            margin-bottom: 28px;
        }

        .form-control,
        .input-group-text {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
        }

        .input-group-text {
            background-color: ghostwhite;

        }

        body {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        }

        .banner {
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;

        }

        .fab,
        .fal {
            margin-right: 15px;
            color: white;
        }

        .fab:hover,
        .fal:hover {
            cursor: pointer;
        }

        #alert-for-input-box {
            font-size: 16px;
            color: red;
        }

        #alert-for-input-box1 {
            font-size: 16px;
            color: green;
        }
        #alert-for-input-box2{
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
        }
        .web-link{
            background-color: #4d6a91;
        }
        #alert-for-input-box2 a {
            font-size: 16px;
            color: white;
            font-weight: bold;

        }
    </style>
</head>

<body style="height: 100vh;">

    <br><br>
    <div class="container col-lg-12 row">
        <!-- <h3 align="center" style="padding:10px; color:#d68000;"> Staff Entry And Exit Details</h3> -->
        <h1 class="col-lg-6" style="font-size: 25px;">Create Own Gallery</h1></span>
        <span class="col-lg-6"> <div id="alert-for-input-box2" style="float: right; display:none"><a href="show_news_images.php" target="_blank" class="btn web-link">Click Here, Seen Created Gallery</a></div></span>
        <br>
    </div>
    <br>

    <!-- <hr /> -->
    <div class="col-lg-12 row">
        <div class="col-lg-6">
            <img class="banner" src="banner1.jpg" width="600" height="550" alt="" st>
        </div>
        <div class="col-lg-6">

            <form id="fupForm" enctype="multipart/form-data">

                <div class="container" style="text-align:center;padding:30px;">
                    <!-- <div class="row"> -->

                    <div class="col-md-12 col-md-6 col-lg-8 col-xl-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Gallery Heading</span>
                            </div>
                            <textarea class="form-control" name="" id="heading" cols="65" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-lg-8 col-xl-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Gallery Date</span>
                            </div>
                            <input class="form-control" type="date" id="add_date"></input>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-lg-12 col-xl-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Thumbnail Image</span>
                            </div>
                            <input class="form-control" type="file" id="file_thumb" name="thumb_img" style="height: 46px;" />
                        </div>
                    </div>
                    <div class="col-md-6 col-md-6 col-lg-6 col-xl-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Select All Image</span>
                            </div>
                            <input class="form-control" type="file" id="file_name" name="files[]" multiple="multiple" style="height: 46px;" />
                        </div>
                    </div>

                    <div id="img_data"></div>
                    <br>
                    <div class="col-md-6 col-md-6 col-lg-6 col-xl-12">
                        <input class="btn btn-primary form-control" type="submit" id="submit" />
                    </div>
                    <br>
                    <div id="alert-for-input-box"></div>
                    <div id="alert-for-input-box1"></div>
                   
                    <br>
                    <br>
                    <div class="some-icons" style="font-size: 25px;">
                        <span style="font-size: 18px;">Connected With Different Platform Like </span>
                        <a href="https://wa.me/919179640957"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/devvrat_verma_01"><i class="fab fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/in/devvrat-verma-299881192"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:devvratverma2001@gmail.com"><i class="fal fa-mail-bulk"></i></a>

                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <br>
                </div>

            </form>


        </div>
    </div>

    <!-- edit model open------------------------------------------------------------------------------------------------------------------------>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {

    });


    $('#heading').on('click', function() {
        $('#alert-for-input-box').css('display', 'none');
    })
    $('#add_date').on('click', function() {
        $('#alert-for-input-box').css('display', 'none');
    })
    $('#file_thumb').on('click', function() {
        $('#alert-for-input-box').css('display', 'none');
    })
    $('#file_name').on('click', function() {
        $('#alert-for-input-box').css('display', 'none');
    })

    $('#submit').on('click', function(event) {


        event.preventDefault();


        var heading = $('#heading').val();
        var news_date = $('#add_date').val();

        var thumb_img = document.getElementById("file_thumb").files[0];

        var form_data = new FormData();

        form_data.append("heading", heading);
        form_data.append("add_date", news_date);
        form_data.append("heelo_dev", "heelo_dev");
        form_data.append("file_thumb", document.getElementById("file_thumb").files[0]);


        var totalfiles = document.getElementById('file_name').files.length;

        for (var files_value = 0; files_value < totalfiles; files_value++) {
            form_data.append("files[]", document.getElementById('file_name').files[files_value]);

        }

        if (heading != "" && news_date != "" && totalfiles != "" && thumb_img != "") {


            $.ajax({
                url: "save_news.php",
                method: "POST",
                dataType: "json",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    if (response.length > 0) {
                        $('#heading').val('');
                        $('#add_date').val('');
                        $('#file_thumb').val('');
                        $('#file_name').val('');
                        $('#alert-for-input-box1').html('Gallery is Successfully Created.');
                        

                    }
                    setTimeout(myFunction, 5000);

                    function myFunction() {
                        document.getElementById("alert-for-input-box1").style.display = "none";    
                    }

                    document.getElementById("alert-for-input-box2").style.display = "block";


                }
            })
        } else {
            // alert('please fill all required');
            $('#alert-for-input-box').css('display', 'block');
            $('#alert-for-input-box').html('Please Fill All Required Fileds.');
        }
    })
</script>

</html>