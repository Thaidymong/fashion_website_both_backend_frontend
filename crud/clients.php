<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-clients'])){
        $name         = $_POST['txt_name'];
        $feeling      = $_POST['txt_feeling'];
        $title        = $_POST['txt_title'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../client_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "INSERT INTO `tb_clients`(`name`, `feeling`, `title`, `image`) 
                        VALUES ('$name','$feeling','$title','$file')";
        $result       = $connect->query($sql_homepage);
        if($result){echo "success";}else echo "error";

    }
 
    if(isset($_POST['btn-update-client'])){
        $id           = $_POST['txt_id'];
        $name         = $_POST['txt_name'];
        $feeling      = $_POST['txt_feeling'];
        $title        = $_POST['txt_title'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../client_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "UPDATE `tb_clients` SET `name`='$name',
                        `feeling`='$feeling',`title`='$title',`image`='$file' WHERE id = $id";
        $result       = $connect->query($sql_homepage);

    }

    if(isset($_POST['btn-delete-client'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_clients` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }
?>