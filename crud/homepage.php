<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-banner'])){
        $span         = $_POST['txt_span'];
        $hthree       = $_POST['txt_hthree'];

        $banner       = $_FILES['txt_banner']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../home_image/".$file;
        move_uploaded_file($_FILES['txt_banner']['tmp_name'],$path);

        $sql_homepage = "INSERT INTO `tb_home`(`span`, `hthree`, `img`) VALUES ('$span','$hthree','$file')";
        $result       = $connect->query($sql_homepage);
        if($result){echo "sdss";}else echo "err";

    }
    if(isset($_POST['btn-edit-banner'])){
        $id           = $_POST['txt_id'];
        $span         = $_POST['txt_span'];
        $hthree       = $_POST['txt_hthree'];

        $banner       = $_FILES['txt_banner']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../home_image/".$file;
        move_uploaded_file($_FILES['txt_banner']['tmp_name'],$path);

        $banner_edit  = "UPDATE `tb_home` SET `span`='$span',`hthree`='$hthree',`img`='$file' WHERE id = $id";
        $result_edit  = $connect->query($banner_edit);
    }

    if(isset($_POST['btn-delete-banner'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_home` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }

?>