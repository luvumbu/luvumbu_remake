
 


<style>
    .qr_code{
        text-align: center;
        margin-bottom: 150px;
    }
    .qr_code img{
        width: 250px;
    }
</style>

<?php 

 

$filename = 'qr_code_1/temp/'.$url_.'.png';

if (file_exists($filename)) {
  ?>
<div class="qr_code">
    <img src="../qr_code_1/temp/<?= $url_?>.png" alt="" srcset="">
</div>
<?php
} else {

    $_SESSION["qr_code_page"] = $url_ ;  
    ?>
    <meta http-equiv="refresh" content="0;URL=../qr_code_1/index3.php">
    <?php 
    
}

 
?>