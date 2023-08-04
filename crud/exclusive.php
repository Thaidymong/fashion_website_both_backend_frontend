<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-feature'])){
        $name         = $_POST['txt_name'];
        $amount       = $_POST['txt_amount'];
        $cut          = $_POST['txt_cut'];
        $offer        = $_POST['txt_offer'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../feature_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "INSERT INTO `tb_product`(`name`, `pro_amount`, `pro_cut`, `pro_offer`, `image`) 
                        VALUES ('$name','$amount','$cut','$offer','$file')";
        $result       = $connect->query($sql_homepage);
        // if($result){echo "sdss";}else echo "err";

    }
    if(isset($_POST['btn-update-feature'])){
        $id           = $_POST['txt_id'];
        $name         = $_POST['txt_name'];
        $amount       = $_POST['txt_amount'];
        $cut          = $_POST['txt_cut'];
        $offer        = $_POST['txt_offer'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../feature_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_homepage = "UPDATE `tb_product` SET `name`='$name',`pro_amount`='$amount',
                        `pro_cut`='$cut',`pro_offer`='$offer',`image`='$file' WHERE id = $id";
        
        $result       = $connect->query($sql_homepage);
    }

    if(isset($_POST['btn-delete-feature'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_product` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }

?>