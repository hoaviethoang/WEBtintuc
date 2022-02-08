<?php
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo Thanh Niên</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <?php include('back-top.php');?>
    
     <!-- Navigation -->
   <?php include('includes/header.php');?>
   
      <!--link-->
    <?php include('includes/link.php');?>
	
    

    <div class="main">

        <div class="left">
            <div class="left_1">
                <a href="thethao.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Thể thao</h3>
                </a>
                <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Thể thao'and tintuc.NgayDang = '2021-10-05 15:13:14'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Thể thao'and tintuc.NgayDang = '2021-10-05 19:35:16'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>


                </ul>
            </div>
		<!--  -->
        <div class="left">
            <div class="left_1">
                <a href="#">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red ; padding-top:0; padding-bottom:0" >Tin 24h</h3>
                </a>
                <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Tin 24h'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?> 
                        <div class="muc3">
                            <li>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <img class="img" src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 100%; height: 150px;" />
                                </a>
                                <h2>
                                    <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                        <?php echo htmlentities($row['TieuDe']) ?>
                                    </a>
                                </h2>
                                <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                                <!-- <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p> -->
                            </li>
                        </div>
                        
                    <?php } ?>

                </ul>
            </div>
        </div>
        <!--  -->
		<div class="left_1">
                <a href="thoisu.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Thời sự</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Thời sự'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
			<div class="left_1">
                <a href="giaitri.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Giải trí</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Giải trí'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
			<div class="left_1">
                <a href="khoahoc.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Khoa học</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Khoa học'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
			<div class="left_1">
                <a href="congnghe.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Công nghệ</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Cộng nghệ'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="thegioi.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Thế giới</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Thế Giới'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="taichinh.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Tài chính - kinh doanh</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Tài chính - kinh doanh'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="doisong.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Đời sống</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Đời sống'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="suckhoe.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Sức khỏe</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Sức khỏe'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="kinhte.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Kinh tế</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Kinh tế'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="left_1">
                <a href="phapluat.php">
                    <h3 style="font-family: 'Times New Roman', Times, serif; color:red">Pháp Luật</h3>
                </a>
               <ul>
                    <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from tintuc, theloai where theloai.MaTL = tintuc.MaTL and theloai.TenTL = 'Pháp Luật'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li>
                            <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 200px; height: 150px;" />
                            </a>
                            <h2>
                                <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                                    <?php echo htmlentities($row['TieuDe']) ?>
                                </a>
                            </h2>
                            <p style=" font-size:13px; color:gray; "><?php echo htmlentities($row['NgayDang']) ?></p>
                            <p style=" font-size:13px; color:gray;margin-bottom: 60px; "><?php echo htmlentities($row['MoTa']) ?></p>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            
            
            
            
            
        </div>
        <?php include('includes/quangcao.php');?>

		

		
    </div>
                        
     <!-- Footer -->
      <?php include('includes/footer.php');?>
          
    <script src="js/index.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->

</body>

</html>
