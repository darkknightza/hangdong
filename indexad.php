<?php

	session_start();
	include "connect.php";

	$strSQL = "SELECT * FROM user_login WHERE USERNAME = '".$_SESSION['USERNAME']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    

    $sql = "SELECT * FROM `news_information`";
    $query=mysqli_query($objCon,$sql);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
    <title>เทศบาลตำบลหางดง</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


</style>

                               <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      
                    </li>
                    <li class="nav-item">
                      
                    </li>
                    <li class="nav-item dropdown">
                      
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                      </div>
                    </li>
                    <li class="nav-item">
                    <a href="Create_News.php">สร้างข่าว</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  <?php if($_SESSION['USERNAME'] != "") { ?>
						<li><a href="profile.php"><?php echo $_SESSION["USERNAME"]; ?></a></li>
						<li><a href="logout.php">ออกจากระบบ</a></li>
						<?php } ?>
						<?php if($_SESSION['USERNAME'] == "") { ?>
						<li><a href="login.php">เข้าสู่ระบบ</a></li>
						<?php } ?>
                  </form>
                </div>
              </nav>


            <header class="tm-site-header">
                 <img src="img/logo.gif" width="150px" height="150px">
                <p class="tm-site-description">เทศบาลตำบลหางดง</p>
                
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <li class="nav-item">
                                <div class="dropdown">
                                <a class="nav-link active" href="basic.html" style="color: rgb(255, 255, 255);">ข้อมูลพื้นฐาน<i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="brand.html">ตราสัญลักษณ์</a>
                                  <a href="history.html">ประวัติความเป็นมา</a>
                                  <a href="general.html">ข้อมูลทั่วไป</a>
                                  <a href="structure.html">โครงสร้างหน่วยงาน</a>
                                  <a href="power.html">อำนาจและหน้าที่ของเทศบาล</a>
                                </div>
                              </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                <a class="nav-link active" href="manager.html" style="color: rgb(255, 255, 255);">คณะผู้บริหาร<i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="คำกล่าวแสดงเจตจำนงของผู้บริหาร-ข้อ-028.html">เจตจำนงสุจริตของผู้บริหาร</a>
                                  <a href="mangroup.html">คณะผู้บริหาร</a>
                                  <a href="manteam.html">สมาชิกสภาเทศบาล</a>
                                  <a href="handgor.html">หัวหน้าส่วนราชการ</a>
                                </div>
                              </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" href="unit.html" style="color: rgb(255, 255, 255);">หน่วยงาน<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="palad.html">สำนักปลัดเทศบาล</a>
                                        <a href="money.html">กองคลัง</a>
                                        <a href="machunic.html">กองช่าง</a>
                                        <a href="education.html">กองการศึกษา</a>
                                        <a href="sanitary.html">กองสาธารณสุขและสิ่งแวดล้อม</a>
                                        <a href="organ.html">กองสวัสดิการสังคม</a>
                                        <a href="jamnam.html">สถานธนานุบาล</a>
                                        <a href="school.html">โรงเรียนเทศบาลหางดง (ประชาคมสร้างสรรค์)</a>
                                        <a href="nursary.html">ศูนย์พัฒนาเด็กเล็ก</a>
                                        <a href="it.html">ศูนย์บริการสารสนเทศ</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="nav-link active" href="policy.html" style="color: rgb(255, 255, 255);">นโยบายและแผน<i class="fa fa-caret-down"></i></a>
                                        <div class="dropdown-content">
                                            <a href="policydata.html">นโยบายและแผน</a>
                                            <a href="ordinance.html">เทศบัญญัติฯ</a>
                                            <a href="mumplan.html">เเผนพัฒนาเทศบาล</a>
                                            <a href="processplan.html">เเผนการดำเนินงาน</a>
                                            <a href="tracEvaReport.html">รายงานติดตามและประเมินผลฯ</a>
                                            <a href="internalReport.html">รายงานการประเมินผลการควบคุมภายใน</a>
                                            <a href="purchase.html">แผนการจัดซื้อจัดจ้าง</a>
                                            <a href="corruptplan.html">แผนปฏิบัติการป้องกันการทุจริต ๒๕๖๐ - ๒๕๖๔</a>
                                            <a href="complaintguide.html">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริต</a>
                                            <a href="process6mount.html">รายงานการกำกับติดตามการดำเนินงานรอบ 6 เดือน</a>
                                            <a href="processyear.html">รายงานผลการดำเนินงานประจำปี</a>
                                            <a href="tracReportmoney6.html">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ 6 เดือน</a>
                                            <a href="reportmoneyyear.html">รายงานผลการใช้จ่ายงบประมาณประจำปี</a>
                                            <a href="corrupt6mount.html">รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต รอบ 6 เดือน</a>
                                        </div>
                                    </div>
                                </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" style="color: rgb(255, 255, 255);">แผนอัตรากำลัง ๓ ปี<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="แผนอัตรากำลัง-๓-ปีทต.หางดง-61-63.html">(พ.ศ. ๒๕๖๑ - ๒๕๖๓)</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" href="devstratigy.html" style="color: rgb(255, 255, 255);" href="ยุทธศาสตร์องค์กรปกครองส่วนท้องถิ่น-2560-2564.html">ยุทธศาสตร์การพัฒนาฯ<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="purchaseparcel.html">การจัดซื้อจัดจ้างหรือจัดหาพัสดุ</a>
                                        <a href="annourceparcel.html">ประกาศต่างๆ เกี่ยวกับการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</a>
                                        <a href="parcelsummount.html">สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a>
                                        <a href="parcelsumyear.htmk=l">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" href="report.html" style="color: rgb(255, 255, 255);">รายงาน<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="keep.html">การจัดเก็บและจัดหารายได้</a>
                                        <a href="income.html">สถิติรายได้ของเทศบาล</a>
                                        <a href="reportmag.html">วารสาร/รายงานผลการปฏิบัติงานประจำปี</a>
                                        <a href="meeting.html">การประชุมสภาเทศบาลฯ</a>
                                        <a href="regisman.html">งานทะเบียนราษฎร </a>
                                        <a href="regiscom.html">งานทะเบียนพาณิชย์</a>
                                        <a href="การให้บริการงานป้องกันและบรรเทาสาธารณภัย.html">งานป้องกันและบรรเทาสาธารณภัย</a>
                                        <a href="servicesanitary.html">งานบริการกองสาธารณสุขฯ</a>
                                        <a href="organunit.html">งานกองสวัสดิการสังคม</a>
                                        <a href="machanicunit.html">งานบริหารกองช่าง</a>
                                        <a href="manageunit.html">งานบริหารกองการศึกษา</a>
                                        <a href="reportcorruption.html">รายงานผลการดำเนินการป้องกันการทุจริต</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" style="color: rgb(255, 255, 255);">ศูนย์ข้อมูลข่าวสาร<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="lawabout.html">ระเบียบ พรบ. กฏหมายที่เกี่ยวข้อง</a>
                                        <a href="standard.html">มาตรฐานการปฏิบัติงาน</a>
                                        <a href="data.html">ศุนย์ข้อมูลข่าวสาร</a>
                                        <a href="announe.html">ประกาศเทศบาลฯ</a>
                                        <a href="command.html">คำสั่งเทศบาลฯ </a>
                                        <a href="election.html">ศูนย์ประสานงานการเลือกตั้ง</a>
                                        <a href="archives.html">คลังข้อมูล</a>
                                        <a href="km.html">มุม KM</a>
                                        <a href="complaint.html">ร้องเรียนงานบุคคล</a>
                                        <a href="servicestandard.html">มาตรฐานการให้บริการ</a>
                                        <a href="servicestat.html">ข้อมูลเชิงสถิติการให้บริการ</a>
                                        <a href="landtax.html">ภาษีโรงเรือนและที่ดิน</a>
                                        <a href="prspend.html">ประชาสัมพันธ์งบประมาณรายจ่าย</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link active" style="color: rgb(255, 255, 255);">ข่าว<i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="Create_News.php">สร้างข่าว</a>
                                        <a href="NewsList.php">ดูข่าว</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                
            </header> 
            <div class="tm-main-content">

                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="img/image-01.jpg" style="width:1000px; height: 300px;">
                    <img class="mySlides" src="img/h1.jpg" style="width:1000px; height: 300px;">
                    <img class="mySlides" src="img/image-02.jpg" style="width:1000px; height: 300px;">
                    <img class="mySlides" src="img/image-03.jpg" style="width:1000px; height: 300px;">

                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>
            </div>

            
            <div class="tm-main-content">
               
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">ยินดีต้อนรับเข้าสู่เว้ปไซต์เทศบาลตำบลหางดง</h2>    
                    </header>
                    
                    
                    
                    <div class="tm-gallery">
                        <div class="row">
                        <?php $i=1;
                                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                            ?>

                                <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                    <a href="newsDetail.php?NEWS_ID=<?php echo $row['NEWS_ID']; ?>">
                                        <div class="tm-gallery-item-overlay">
                                            <img src="img/<?php echo $row["NEWS_PICTURE"];?>" alt="Image" class="img-fluid tm-img-center">
                                        </div>
                                        
                                        <p class="tm-figcaption"><?php echo $row["NEWS_NAME"]; ?></p>
                                    </a>
                                </figure> 


                            <?php $i++; } ?>
                            
                            
                        
                            
                        </div>   
                    </div>
                    
                    <nav class="tm-gallery-nav">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">4</a></li>                    
                        </ul>
                    </nav>
                </section>

                
            </div>

            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
                
                - Designed by <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a>
            </footer>    
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>     
        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>       

</body>
</html>