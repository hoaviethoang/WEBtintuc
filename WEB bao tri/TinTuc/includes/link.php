<section>
             
    <nav class="navDropWrapper" id="navb">
        <div class="navSlide">
            <div class="topLevel">            
                    <ul class="navDrop">
                        <li><a href="index.php" title="Trang chủ" class="active">Trang chủ</a></li>
                        <li><a href="thoisu.php" title="Thời sự">Thời sự</a></li>
                        <li><a href="thegioi.php" title="Thế giới">Thế giới</a></li>
                        <li><a href="taichinh.php" title="Tài chín- kinh doanh">Tài chính-kinh doanh</a></li>
                        <li><a href="doisong.php" title="Đời sống">Đời sống</a></li>
                        <li><a href="thethao.php" title="Thể thao">Thể thao</a></li>
                        
                        <li><a href="khoahoc.php" title="Khoa học">Khoa học</a></li>
                        <li><a href="congnghe.php" title="Công nghệ">Công nghệ</a></li>
                        <li><a href="giaitri.php" title="Giải trí">Giải trí</a></li>
                        <li><a href="suckhoe.php" title="Thời sự">Sức khỏe</a></li>
                        <li><a href="kinhte.php" title="Kinh tế">Kinh tế</a></li>
                        <li><a href="phapluat.php" title="pháp luật">Pháp luật</a></li>
                        <li><a href="video.php" title="video">Video</a></li>
                    </ul>
                
            </div>
        </div>
    </nav>
    
</section>
<script>
var list = document.querySelectorAll('.topLevel .navDrop a');
var link = window.location.href;
for (var i = 0; i < list.length; i++) {
if (link.includes(list[i].getAttribute("href"))) {
list[i].style.backgroundColor = 'rgb(169 81 81) ';
}
}
</script>