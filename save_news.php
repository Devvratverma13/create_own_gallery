<?php

session_start();

include('dbconnection1.php');

// $admin_logid = $_SESSION["admin_logid"];
// $admin_logid = 333;

function strchange($val)
{
    return str_replace("'", "\'", $val);
}

// if((isset($_FILES["file_name"]["name"]))){
if ((isset($_REQUEST['heelo_dev']))) {

    $news_heading = strchange($_REQUEST['heading']);
    $heading_lower = strtolower($_REQUEST['heading']);
    $heading = strtoupper($news_heading);
    // echo $news_heading;
    // echo $heading_lower;
    // echo $heading;

    $output = preg_replace('/\s+/', '_',$heading);

    $news_date = $_REQUEST['add_date'];
    $string_date = strtotime($news_date);

    $month_name = date('M', $string_date);
    $month_lower = strtolower($month_name);

    $month = strtoupper($month_name);
    $year = date('Y', $string_date);

    $x = $output . "_" . $month . "_" . $year;

    $directory = "news_gallery/";

    $thumb_dir = "thumb";

    // use mkdir function for create folder--------------------------

    $location_news_images = mkdir($directory . $output . "_" . $month . "_" . $year) . '/';

    $location_thumb_img = mkdir($directory . $output . "_" . $month . "_" . $year . '/' . $thumb_dir) . '/';

    $thumb_img = $_FILES['file_thumb']['name'];

    // explode image name with dot(.)---- like :- devvrat verma.png
    // [0] = devvrat verma;
    // [1] = png;

    $explode_thumb = explode('.', $thumb_img);

    $thumb_ext = strtolower(end($explode_thumb));

    $thumb_rand = "thumb_" .rand(100, 99999999999) . '.' . $thumb_ext;

    $thumb_path = $directory . $output . "_" . $month . "_" . $year . '/' . $thumb_dir . '/' . $thumb_rand;

    move_uploaded_file($_FILES['file_thumb']['tmp_name'], $thumb_path);


    // $create_php_file = fopen('gallery_pages',$heading_lower.'-'.$month_lower.'-')

    $select_query = "select gallery_heading from gallery_master where gallery_heading = '$x'";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_num_rows($result);
    // echo $row.'<br>';   

    // $name = $row['gallery_heading'] === null?0:$row['gallery_heading'];

    if($row==0){
       $sql = "insert into gallery_master(gallery_heading,news_upload_date,thumb_image,create_on,create_by) values('" . $x . "','" . $news_date . "','" . $thumb_rand . "',now(),'329')";

        $query = mysqli_query($conn, $sql);
  
    }


    $image_id = mysqli_insert_id($conn);

    // use count function and count files numbers------------------
    $count_files = count((array)$_FILES["files"]["name"]);

    $file_arr = array();
    $img_arr = array();

    $dev = "";
    for ($file_value = 0; $file_value < $count_files; $file_value++) {

        if (isset($_FILES['files']['name'][$file_value]) != "") {

            $exploade_img_name = explode(".", $_FILES['files']['name'][$file_value]);
            // print_r($exploade_img_name);
            // echo"\n";

            $ext_image = strtolower(end($exploade_img_name));
            // echo "explode == ".$ext_image;
            // echo "\n";

            $rand_image_name = rand(100, 99999999) . '.' . $ext_image;

            // $img_arr[] = $rand_image_name;
            // $x = implode(",",$img_arr);
            // echo "print comma separated == ".$x;


            // $x = $dev.','.$rand_image_name;

            // $xyz = implode(" ",array($rand_image_name));

            // $x = implode(",",$xyz);

            // echo "array to string == ".$xyz;

            $select_query1 = "select album_id from image_master where album_id = '$image_id'";
            $result1 = mysqli_query($conn, $select_query1);
            $row1 = mysqli_num_rows($result1);
            // echo $row1;

            // $album_image_id = $row['album_id'];
            if($row1!=''){

                $sql1 = "insert into image_master(album_id,multi_images) values('" . $image_id . "','" . $rand_image_name . "')";
    
                $query1 = mysqli_query($conn, $sql1);
            }


            // echo "explode == " . $rand_image_name;

            // $filename = $_FILES['files']['name'][$file_value];

            // echo "--------------------".$filename;

            // $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));/

            $valid_ext = array("png", "jpeg", "jpg", "webp");

            if (in_array($ext_image, $valid_ext)) {

                $path = $directory . $output . "_" . $month . "_" . $year . '/' . $rand_image_name;

                if (move_uploaded_file($_FILES["files"]["tmp_name"][$file_value], $path)) {
                    $file_arr[] = $path;
                }
            }
        }
    }
    echo json_encode($file_arr);
}

if (isset($_REQUEST['select_data'])) {
    $sql = "select id,gallery_heading,thumb_image from gallery_master";
    $query = mysqli_query($conn, $sql);

    $arr = array();
    while ($row = mysqli_fetch_array($query)) {
        $arr[] = $row;
    }
    echo json_encode($arr);
}

if (isset($_REQUEST['select_gallery_data'])) {
    $id = $_REQUEST['image_id'];
    $sql1 = "select id,multi_images,(select gallery_heading from gallery_master where gallery_master.id = image_master.album_id) as gallery_heading_name from image_master where album_id = '$id'";
    // echo $sql1;
    $query1 = mysqli_query($conn, $sql1);

    $arr1 = array();
    while ($row1 = mysqli_fetch_array($query1)) {
        $arr1[] = $row1;
    }
    echo json_encode($arr1);
}
if (isset($_REQUEST['select_single_image_data'])) {
    $id = $_REQUEST['img_id'];
    $sql1 = "select id,multi_images,(select gallery_heading from gallery_master where gallery_master.id = image_master.album_id) as gallery_heading_name from image_master where id = '$id'";
    $query1 = mysqli_query($conn, $sql1);

    $arr1 = array();
    while ($row1 = mysqli_fetch_array($query1)) {
        $arr1[] = $row1;
    }
    echo json_encode($arr1);
}
