<div class="right">
            <div class="quangcao">
                <li><a href="https://www.asus.com/vn/" >
                    <img src="images/quangcao.png" alt="quang cao" style=" height: 550px; width: 311.663px; margin-top: 20px;">
                </a></li>
            </div>
            <div class="danhmuc">
                <h3>Danh mục tin tức nổi bật</h3>
                <?php
                    $query = mysqli_query($con, "select MaTinTuc, TieuDe, tintuc.MoTa, Anh, NgayDang, url from theloai, tintuc where tintuc.MaTL = theloai.MaTL and tintuc.NgayDang = '2021-10-05 15:13:14'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                <ul>
                    <li>    
                        <div class="l1"> <img src="admin/post-images/<?php echo htmlentities($row['Anh']) ?>" style="width: 60px; height: 60px; padding-top:5px;" />
                        <a href="<?php echo "detail.php?url=" . htmlentities($row['url']) ?>" title="<?php echo htmlentities($row['TieuDe']) ?>" target="_blank">
                            <?php echo htmlentities($row['TieuDe']) ?>
                         </a> 
                        </div>    
                    </li>
                
                </ul>
                <?php } ?>
            </div>
            <div class="quangcao1">
                <li><a href="https://www.asus.com/vn/" >
                    <img src="images/quangcao.png" alt="quang cao" style=" height: 550px; width: 300px; margin-top: 0px;">
                </a></li>
            </div>
        </div>