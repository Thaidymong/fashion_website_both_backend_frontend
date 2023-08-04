<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-banner-product'])){
        $para      = $_POST['txt_para'];
        $title     = $_POST['txt_title'];
        $sale      = $_POST['txt_sale'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../bannerproduct_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_bannerhome = "INSERT INTO `tb_bannerproduct`(`para`, `title`, `sale`, `image`) 
                            VALUES ('$para','$title','$sale','$file')";
        $result       = $connect->query($sql_bannerhome);

        // if($result){echo "success";} else echo "error";
    }
    if(isset($_POST['btn-product-update'])){
        $id        = $_POST['txt_id'];
        $para      = $_POST['txt_para'];
        $title     = $_POST['txt_title'];
        $sale      = $_POST['txt_sale'];

        $banner       = $_FILES['txt_image']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../bannerproduct_image/".$file;
        move_uploaded_file($_FILES['txt_image']['tmp_name'],$path);

        $sql_bannerhome =  "UPDATE `tb_bannerproduct` SET `para`='$para',`title`='$title',`sale`='$sale',`image`='$file' WHERE id = $id";

        $result       = $connect->query($sql_bannerhome);
    }

    if(isset($_POST['btn-product-banner'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_bannerproduct` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }
?>