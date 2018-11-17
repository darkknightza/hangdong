<?php

	session_start();
	include "connect.php";

	$strSQL = "SELECT * FROM user_login WHERE USERNAME = '".$_SESSION['USERNAME']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    

    $sql = "SELECT * FROM `news_information`";
    $query=mysqli_query($objCon,$sql);

    $sql1 = "SELECT * FROM `news_information` ORDER BY NEWS_ID DESC LIMIT 2";
    $query1=mysqli_query($objCon,$sql1);
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- TITLE -->
        <title>เทศบาลตำบลหางดง</title>

        <!-- Main StyleSheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="style-responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/libs/animate.css">


		<!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />


        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
        <!-- External libraries: jQuery & GreenSock -->
        <script src="layerslider/js/jquery.js" type="text/javascript"></script>
        <script src="layerslider/js/greensock.js" type="text/javascript"></script>
        <!-- LayerSlider script files -->
        <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        

		<!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script>
		$(document).ready(function(){
		$('.bxslider').bxSlider({
								
								pager: false,
								controls: true,
								auto: true
								
								
								});
		});
		</script>



		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="lightbox/jquery.fancybox.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                                           
                    $('.fancybox').fancybox();
 		
                });
        </script>


        <!-- GOTO TOP JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();	
                } else {
                    $('#gotop').fadeOut();
                }
            });
         
            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},800);
            });	
        });
        </script>
            


		<!-- HEADER JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() >= 200) {
                    $('.header').addClass("header_fix");	
                } else {
                   $('.header').removeClass("header_fix");
                }
            });	
        });
        </script>
        
        
        <script type="text/javascript">
        
		if($(window).width() <= 900){
		$(document).ready(function() {
                                    
									
									
                    $('.mobile .title').click(function() {
												
												$(this).next("ul").slideToggle();
												$(this).toggleClass("minus");
												
												});
					
					
 		
                });
		
		}
        </script>
                            
</head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;

}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: lightblue;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #99ccff;
    min-width: 20px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.hed {
    background-image: url('images/hj1.png');
     background-size: 100% 100%;
}
body {background-color: #e6f2ff;}
.header {
   background-image: url('images/hj.png');
     background-size: 100% 100%;
}
.hed1 {
    background-image: url('images/hj.png');
     background-size: 100% 100%;
}


</style>

<body>
    <div class="hed1">
    <a href="#" class="logo"><img src="images/logo.gif" alt="" style="height: 100px;width: 100px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>&nbsp;&nbsp;&nbsp;เทศบาลตำบลหางดง</h1>
                    <br>&nbsp;&nbsp;&nbsp;Hangdong Subdistrict Municipality
                    <br>
                    <br>
                    <br>
    </div>
                    

      <div class="slider_main">
        <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:473px;">
        
        
                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/t1.jpg" class="ls-bg" alt="Slide background"/>
                                
                                
                                <div class="ls-l videopreview" style="top:87px;left:0px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;">
                                <!--<iframe src="http://player.vimeo.com/video/34134308?portrait=0&amp;color=ff9933&autoplay=1" width="443" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <img src="images/y1.jpg" alt=""  style="height: 300px;width: 450px"/>
                                </div>
                                
                                
                                <div class="ls-l" style="top:140px;left:638px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">ข่าวที่ 1</h2>
                                </div>
                                
                                <div class="ls-l" style="top:200px;left:583px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">เปิดตลาดเทศบาลแห่งใหม่</h2>
                                </div>
                                
                            
                                
                                <div class="ls-l" style="top:265px;left:598px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="detail.html" class="button2">ดูรายละเอียด</a>
                                </div>


                                
                                
                                
                                
                               
                                </div><!--FIRST SLIDE-->
                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/t2.jpg" class="ls-bg" alt="Slide background"/>
                                
                                
                                <div class="ls-l videopreview" style="top:87px;left:0px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;">
                                <!--<iframe src="http://player.vimeo.com/video/34134308?portrait=0&amp;color=ff9933&autoplay=1" width="443" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <img src="images/y2.jpg" alt=""  style="height: 300px;width: 450px"/>
                                </div>
                                
                                
                                <div class="ls-l" style="top:140px;left:638px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">ข่าวที่ 2</h2>
                                </div>
                                
                                <div class="ls-l" style="top:200px;left:583px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">เปิดอาคารเรียนหลังใหม่</h2>
                                </div>
                                
                            
                                
                                <div class="ls-l" style="top:265px;left:598px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="detail.html" class="button2">ดูรายละเอียด</a>
                                </div>

                                
                                
                                
                                
                                
                               
                                </div><!--FIRST SLIDE-->
                                
                                
                                
                                                               
                     
           
            
        </div>
        </div> 
        </div>

        <div class="service_section">
            <div class="hed">
                <div class="container">
                    
                

                            <h2>ยินดีต้อนรับเข้าสู่เว็ปไซต์เทศบาลตำบลหางดง</h2>
                            <h4>Welcomr to Hangdong Subdistrict Municipality Website</h4>
                            
                        
                
                </div>
            </div>

        </div>
        
    
   
        <div class="header" >
        			<a href="#" class="logo"><img src="images/logo.gif" alt="" style="height: 100px;width: 100px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>&nbsp;&nbsp;&nbsp;เทศบาลตำบลหางดง</h1>
                    <br>&nbsp;&nbsp;&nbsp;Hangdong Subdistrict Municipality
                    
                    <div class="nav mobile">
                    <div class="title">รายการ <span class="fa "></span></div>
                    <ul><br>

                    <li class="dropdown"><a href="#faqs_part" >ข้อมูลพื้นฐาน</a>
                        <div class="dropdown-content">
                        <a href="baseinfo.html">ข้อมูลพื้นฐาน</a><br>
                        <a href="sign.html">ตราสัญลักษณ์</a><br>
                        <a href="history.html">ประวัติความเป็นมา</a><br>
                        <a href="general.html">ข้อมูลทั่วไป</a><br>
                        <a href="structure.html">โครงสร้างหน่วยงาน</a><br>
                        <a href="power.html">อำนาจและหน้าที่ของเทศบาล</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#features">คณะผู้บริหาร</a>
                    <div class="dropdown-content">
                        <a href="manager.html">คณะผู้บริหาร</a><br>
                        <a href="want.html">เจตจำนงสุจริตของผู้บริหาร</a><br>\
                        <a href="manteam.html">สมาชิกสภาเทศบาล</a><br>
                        <a href="handgor.html">หัวหน้าส่วนราชการ</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#testimonials_part">หน่วยงาน </a>
                        <div class="dropdown-content">
                        <a href="unit.html">หน่วยงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="palad.html">สำนักปลัดเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="money.html">กองคลัง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
                        <a href="machunic.html">กองช่าง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="education.html">กองการศึกษา</a><br>
                        <a href="sanitary.html">กองสาธารณสุขและสิ่งแวดล้อม</a><br>
                        <a href="organ.html">กองสวัสดิการสังคม&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="jamnam.html">สถานธนานุบาล</a><br>
                        <a href="school.html">โรงเรียนเทศบาลหางดง (ประชาคมสร้างสรรค์)</a><br>
                        <a href="nursary.html">ศูนย์พัฒนาเด็กเล็ก</a><br>
                        <a href="it.html">ศูนย์บริการสารสนเทศ</a>
                    </div></li>
                    <li class="dropdown"><a href="#contact_part1">นโยบาย</a>
                        <div class="dropdown-content">
                        <a href="policy.html">นโยบาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="policydata.html">นโยบายและแผน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="ordinance.html">เทศบัญญัติฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="mumplan.html">แผนพัฒนาเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="processplan.html">แผนการดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="tracEvaReport.html">รายงานติดตามและประเมินผลฯ</a><br>
                        <a href="internalReport.html">รายงานการประเมินผลการควบคุมภายใน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="purchase.html">แผนการจัดซื้อจัดจ้าง</a><br>
                        <a href="corruptplan.htm">แผนปฏิบัติการป้องกันการทุจริต ๒๕๖๐ - ๒๕๖๔</a><br>
                        <a href="complaintguide.html">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริต</a><br>
                        <a href="process6mount.html">รายงานการกำกับติดตามการดำเนินงานรอบ ๖ เดือน</a><br>
                        <a href="processyear.html">รายงานผลการดำเนินงานประจำปี</a><br>
                        <a href="tracReportmoney6.html">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ ๖ เดือน</a><br>
                        <a href="reportmoneyyear.html">รายงานผลการใช้จ่ายงบประมาณประจำปี</a><br>
                        <a href="corrupt6mount.html">รายงานการกำกับติดตามการดำเนินงานการป้องกันการทุจริต รอบ ๖ เดือน</a><br>
                    </div></li>
                    <li class="dropdown"><a href="#pricing_part2">แผนอัตรากำลัง ๓ ปี</a>
                     <div class="dropdown-content">
                        <a href="#">แผนอัตรากำลัง ๓ ปี</a><br>
                        <a href="powerplan3y.html">๒๕๖๑ - ๓๕๖๓</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part3">ยุทธศาสตร์การพัฒนาฯ</a>
                        <div class="dropdown-content">
                        <a href="devstratigy.html">ยุทธศาสตร์การพัฒนาฯ</a><br>
                        <a href="purchaseparcel.html">การจัดซื้อจัดจ้างหรือจัดหาพัสดุ</a><br>
                        <a href="annourceparcel.html">ประกาศต่างๆ เกี่ยวกับการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</a><br>
                        <a href="parcelsummount.html">สรุปการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a><br>
                        <a href="parcelsumyear.html">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="#contact_part4">รายงาน</a>
                         <div class="dropdown-content">
                        <a href="report.html">รายงาน</a><br>
                        <a href="keep.html">การจัดเก็บและการจัดเก็บรายได้</a><br>
                        <a href="income.html">สถิติรายได้ของเทศบาล</a><br>
                        <a href="reportmag.html">วารสาร/รายงานผลการปฏิบัติงานประจำปี</a><br>
                        <a href="meeting.html">การประชุมสภาเทศบาล</a><br>
                        <a href="regisman.html">งานทะเบียนราชฎร</a><br>
                        <a href="regiscom.html">งานทะเบียนพานิชย์</a><br>
                        <a href="ems.html">งานป้องกันและบรรเทาสาธารณภัย</a><br>
                        <a href="servicesanitary.html">งานบริการกองสาธารณสุขฯ</a><br>
                        <a href="organunit.html">งานกองสวัสดิการสังคม</a><br>
                        <a href="machanicunit.html">งานบริหารกองช่าง</a><br>
                        <a href="manageunit.html">งานบริหารการกองศึกษา</a><br>
                        <a href="reportcorruption.html">รายงานผลการดำเนินการป้องกันการทุจริต</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part5">ศูนย์ข้อมูลข่าวสาร</a>
                        <div class="dropdown-content">
                        <a href="#">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="lawabout.html">ระเบียบ พรบ. กฏหมายที่เกี่ยวข้อง</a><br>
                        <a href="standard.html">มาตรฐานการปฏิบัติงาน</a><br><br>
                        <a href="data.html">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="announe.html">ปรกาศเทศบาลฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="command.html">คำสั่งเทศบาลฯ</a><br>
                        <a href="election.html">ศูนย์ประสานงานการเลือกตั้ง</a><br>
                        <a href="archives.html">คลังข้อมมูล</a><br>
                        <a href="km.html">มุม KM</a><br>
                        <a href="complaint.html">ร้องเรียนงานบุคคล</a><br>
                        <a href="servicestandard.html">มาตรฐานการให้บริการ</a><br>
                        <a href="servicestat.html">ข้อมูลเชิงสถิติการให้บริการ</a><br>
                        <a href="landtax.html">ภาษีโรงเรือนและที่ดิน</a><br>
                        <a href="prspend.html">ประชาสัมพันธ์งบประมาณรายจ่าย</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="login.html">ข่าว</a>
                        <div class="dropdown-content">
                        <a href="creatnews.html">สร้างข่าว</a><br>
                        <a href="#">ดูข้อมูลข่าว</a><br>
                    </li>

                  

                    <li><a href="logout.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;ออกจากระบบ</a></li>
                    </ul>
                    </div>
        
        </div>




        
        


		<div class="wrapper">


        
        <div class="common_section" id="faqs_part">
        <div class="container">
        
        			<h2>ประชาสัมพันธ์จากเทศบาลตำบลหางดง</h2>
                    <h4>News From Hangdong Subdistrict Municipality Office</h4>
                    
                    <?php $i=1;
                                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                            ?>
                        <a href="detail.php?NEWS_ID=<?php echo $row['NEWS_ID']; ?>"><div class="faqbox">
                        <div class="title"><?php echo $row["NEWS_NAME"]; ?></div>
                        <img src="images/<?php echo $row["NEWS_PICTURE"];?>" alt="..." class="img-thumbnail" style="height: 250px;width: 500px">
                        <p>
                        .....

                        </p>

                        </div></a>
                    <?php $i++; } ?>
                    
                    
                    
                    
        
        </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="common_section">
        <div class="container">
        
        	
            		
                   
					<div class="copyright">Copyright 2016 All Right Reserved - <a href="http://www.pfind.com/goodies/landiya/">Landiya</a> Theme By <a href="http://www.pfind.com/goodies/">pFind.com Goodies</a>.</div>                    
        
        </div>
        </div>
        
        
        </div><!--wrapper-->


		<script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1100,
                layersContainer: 1100,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'layerslider/skins/'
            });
        
        
        </script>

		<script src="js/wow.js"></script>
        <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
        </script>

		<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top - 132
		}, 2000);
		return false;
		}
		}
		});
		});
        </script>
        
        
		<script type="text/javascript">
        
        
        $(document).ready(function() {
        
        if($(window).width() <= 1200){
        
        
        $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top - 132
        }, 2000);
        return false;
        }
        }
        });
        });
        
        
        
        }
        
        });
        
        
        </script> 
             

		
</body>
</html>
