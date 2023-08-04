<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-blog'])){
        $title         = $_POST['txt_title'];
        $subtitle      = $_POST['txt_subtitle'];
        $date          = $_POST['txt_date'];
        $admin         = $_POST['txt_admin'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../blog_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "INSERT INTO `tb_blogggg`(`title`, `subtitle`, `date`, `admin`, `image`) 
                        VALUES ('$title','$subtitle','$date','$admin','$file')";
        $result       = $connect->query($sql_homepage);
        // if($result){echo "success";}else echo "error";
    }
 
    if(isset($_POST['btn-update-blog'])){
        $id           = $_POST['txt_id'];
        $title         = $_POST['txt_title'];
        $subtitle      = $_POST['txt_subtitle'];
        $date          = $_POST['txt_date'];
        $admin         = $_POST['txt_admin'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../blog_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "UPDATE `tb_blogggg` SET `title`='$title',`subtitle`='$subtitle',`date`='$date',
                        `admin`='$admin',`image`='$file' WHERE id = $id";
        $result       = $connect->query($sql_homepage);

    }

    if(isset($_POST['btn-delete-blog'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_blogggg` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }
?>