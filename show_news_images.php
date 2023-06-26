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

// $_SESSION['devvrat'] = 'Hello devvrat verma';

// echo $_SESSION['devvrat'];

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
    <!-- <link href="vendors/%40coreui/icons/css/coreui-icons.min.css" rel="stylesheet" /> -->

    <!-- <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" /> -->

    <!-- <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" /> -->

    <!-- <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" /> -->

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" /> -->

    <!-- <link rel='stylesheet' href='../datatable_files/css/jquery.dataTables.min.css'> -->
    <!-- <link rel='stylesheet' href='../datatable_files/css/buttons.dataTables.min.css'> -->

    <link href="css/style.css" rel="stylesheet" />

    <!-- <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet" /> -->

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

        #year,#year1 {
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

        #lebel_tag {
            position: relative;
            top: 9em;
            right: 14em;
        }

        #response_data {
            border-width: 5px;
            border-color: red;
        }

        #thumb_st {
            display: inline-block;
            margin-right: 8em;
            margin-bottom: 5em;
            background-color: ghostwhite;
            /* color: white; */
            padding: 10px;
            border-color: grey;
            border-width: 10px;
            border-style: solid;
            border-width: 0.5px;
            /* border-radius: 8px; */
            box-shadow: 1px 1px 2px 2px grey;

        }

        #heading_name {
            margin-top: 1em;
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 13px;
        }

        /* 
        #thumb_st {
         padding: 10px;
         border-width: 2px;
         border-color: red;
        } */

        /* #heading_name{
            position:absolute;
            bottom: 18em;
            
        } */
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <div class="app-body">

        <!-- <?php
                // include('sidebar.php');
                ?> -->

        <main class="main">
            <div class="container-fluid">
                <div id="ui-view">
                    <br><br>

                    <form action="" method="POST">

                        <div class="col-lg-12">
                            <h1 style="font-weight: bold;"> GALLERY</h1>
                            <!-- <?php echo $_SESSION['devvrat']; ?> -->
                        </div>
                        <br><br>
                        <!-- <div>
                        <img src="news_gallery/DEVVRAT VERMA DEC 2022/23051601.png" width="250" height="250" alt="">
                        <label for="" id="lebel_tag">MEDIA SNIPPETS SEP 2020</label>
                    </div> -->

                        <?php

                        // $dir = "news_gallery/";

                        // $a = scandir($dir);

                        // $x = "news_gallery/".$a[2].'/';

                        // print_r($x);

                        // $len = count((array)$x);
                        // echo $len;
                        // echo "\n";
                        // $y = scandir($x);



                        // print_r($y[11]);

                        // $z12= "news_gallery/".$a[2].'/'.$y[11].'/';
                        // $scan_z = scandir($z12);
                        // print_r($scan_z);

                        // for($i=0;$i<5;$i++){
                        //     // echo $i;
                        // }

                        // $z= "news_gallery/".$a[2].'/'.$y[2];
                        // $z1= "news_gallery/".$a[2].'/'.$y[3];
                        // $z2= "news_gallery/".$a[2].'/'.$y[4];
                        // $z3= "news_gallery/".$a[2].'/'.$y[5];

                        // echo $z;


                        ?>
                        <!-- 
                     <div>
                        <img src="<?php echo $z ?>" class="mr-5" width="200px" height="200px" alt="">
                        <img src="<?php echo $z1 ?>" class="mr-5" width="200px" height="200px" alt="">
                        <img src="<?php echo $z2 ?>" class="mr-5" width="200px" height="200px" alt="">
                        <img src="<?php echo $z3 ?>" width="200px" height="200px" alt="">
                    </div> -->
                        <div style="border-width:2px;border-color:black;">
                            <div id="response_data"></div>

                        </div>

                    </form>

                </div>
            </div>
        </main>
    </div>



    <footer class="app-footer">
        <div>
            <span>� 2021 <a href="https://www.rungtacolleges.com/">Sanjay Rungta Group</a>. All Rights Reserved.</span>
        </div>

        <div class="ml-auto">
        </div>

    </footer>



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

<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->

<script>
    $(document).ready(function() {
        getData();
    });


    function getData() {

        $.ajax({
            url: 'save_news.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                select_data: 'salect_data',
            },
            success: function(response) {
                if (response.length > 0) {
                    var serial = 0;
                    var struct_body = "";
                    for (order = 0; order < response.length; order++) {
                        serial++;
                        var id = response[order].id;
                        var heading_name = response[order].gallery_heading;
                        var thumb_img_name = response[order].thumb_image;
                        var heading_replace = heading_name.replaceAll('_',' ');
                        // alert(heading_replace);

                        // $('#heading').html(heading_replace);

                        var url_link = heading_name.toLowerCase();

                        // var remove_space = url_link.replaceAll(' ','-');

                        var remove_space = url_link.replace(/ +/g, ' ');

                        var add_dash = remove_space.split(' ').join('-');

                        struct_body = struct_body + '<span id="thumb_st">' +

                            '<a href="news_index.php?use_id='+id+'"><img src="news_gallery/' + heading_name + '/thumb/' + thumb_img_name + '"width="180px" height="200px" style="object-fit: cover;"></a>' +

                            '<label id="heading_name">' + heading_replace + '</label>' +

                            '</span>';
                    }
                    $('#response_data').html(struct_body);

                }
            }


        })
    }
</script>

</html>