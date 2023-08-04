<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-aboutUs'])){
        $text         = $_POST['txt_text'];
        $sql_homepage = "INSERT INTO `tb_aboutus`(`text`) VALUES ('$text')";
        $result       = $connect->query($sql_homepage);

    }
 
    if(isset($_POST['btn-update-aboutUs'])){
        $id           = $_POST['txt_id'];
        $text         = $_POST['txt_text'];
        $sql_homepage = "UPDATE `tb_aboutus` SET `text`='$text' WHERE id = $id";
        $result       = $connect->query($sql_homepage);

    }

    if(isset($_POST['btn-delete-client'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_aboutus` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }
?>