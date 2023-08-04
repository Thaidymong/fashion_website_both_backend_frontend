<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-banner-home'])){
        $offer     = $_POST['txt_offer'];
        $upto      = $_POST['txt_upto'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../bannerhome_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_bannerhome = "INSERT INTO `tb_bannerhome`(`offer`, `upto`, `image`) 
                            VALUES ('$offer','$upto','$file')";
        $result       = $connect->query($sql_bannerhome);

        // if($result){echo "success";} else echo "error";
    }
    if(isset($_POST['btn-banner-update'])){
        $id        = $_POST['txt_id'];
        $offer     = $_POST['txt_offer'];
        $upto      = $_POST['txt_upto'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../bannerhome_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_bannerhome =  "UPDATE `tb_bannerhome` SET `offer`='$offer',`upto`='$upto',`image`='$file' WHERE id = $id";

        $result       = $connect->query($sql_bannerhome);
    }

    if(isset($_POST['btn-delete-banner'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_bannerhome` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }
?>