<?php 
    include "connect.php";
    $value = $_GET['NEWS_ID'];
    $sql = "SELECT * FROM `news_information` WHERE NEWS_ID=$value";
    $query=mysqli_query($objCon,$sql);
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
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
    <a href="index.php" class="logo"><img src="images/logo.gif" alt="" style="height: 100px;width: 100px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>&nbsp;&nbsp;&nbsp;เทศบาลตำบลหางดง</h1>
                    <br>&nbsp;&nbsp;&nbsp;Hangdong Subdistrict Municipality
                    <div class="nav mobile">
                    <div class="title">รายการ <span class="fa "></span></div>
                    <ul><br>

                    <li class="dropdown"><a href="#faqs_part" >ข้อมูลพื้นฐาน</a>
                        <div class="dropdown-content">
                        <a href="baseinfo.php">ข้อมูลพื้นฐาน</a><br>
                        <a href="sign.php">ตราสัญลักษณ์</a><br>
                        <a href="history.php">ประวัติความเป็นมา</a><br>
                        <a href="general.php">ข้อมูลทั่วไป</a><br>
                        <a href="structure.php">โครงสร้างหน่วยงาน</a><br>
                        <a href="power.php">อำนาจและหน้าที่ของเทศบาล</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#features">คณะผู้บริหาร</a>
                    <div class="dropdown-content">
                        <a href="manager.php">คณะผู้บริหาร</a><br>
                        <a href="want.php">เจตจำนงสุจริตของผู้บริหาร</a><br>
                        <a href="manteam.php">สมาชิกสภาเทศบาล</a><br>
                        <a href="handgor.php">หัวหน้าส่วนราชการ</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#testimonials_part">หน่วยงาน </a>
                        <div class="dropdown-content">
                        <a href="unit.php">หน่วยงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="palad.php">สำนักปลัดเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="money.php">กองคลัง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
                        <a href="machunic.php">กองช่าง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="education.php">กองการศึกษา</a><br>
                        <a href="sanitary.php">กองสาธารณสุขและสิ่งแวดล้อม</a><br>
                        <a href="organ.php">กองสวัสดิการสังคม&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="jamnam.php">สถานธนานุบาล</a><br>
                        <a href="school.php">โรงเรียนเทศบาลหางดง (ประชาคมสร้างสรรค์)</a><br>
                        <a href="nursary.php">ศูนย์พัฒนาเด็กเล็ก</a><br>
                        <a href="it.php">ศูนย์บริการสารสนเทศ</a>
                    </div></li>
                    <li class="dropdown"><a href="#contact_part1">นโยบาย</a>
                        <div class="dropdown-content">
                        <a href="policy.php">นโยบาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="policydata.php">นโยบายและแผน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="ordinance.php">เทศบัญญัติฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="mumplan.php">แผนพัฒนาเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="processplan.php">แผนการดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="tracEvaReport.php">รายงานติดตามและประเมินผลฯ</a><br>
                        <a href="internalReport.php">รายงานการประเมินผลการควบคุมภายใน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="purchase.php">แผนการจัดซื้อจัดจ้าง</a><br>
                        <a href="corruptplan.php">แผนปฏิบัติการป้องกันการทุจริต ๒๕๖๐ - ๒๕๖๔</a><br>
                        <a href="complaintguide.php">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริต</a><br>
                        <a href="process6mount.php">รายงานการกำกับติดตามการดำเนินงานรอบ ๖ เดือน</a><br>
                        <a href="processyear.php">รายงานผลการดำเนินงานประจำปี</a><br>
                        <a href="tracReportmoney6.php">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ ๖ เดือน</a><br>
                        <a href="reportmoneyyear.php">รายงานผลการใช้จ่ายงบประมาณประจำปี</a><br>
                        <a href="corrupt6mount.php">รายงานการกำกับติดตามการดำเนินงานการป้องกันการทุจริต รอบ ๖ เดือน</a><br>
                    </div></li>
                    <li class="dropdown"><a href="#pricing_part2">แผนอัตรากำลัง ๓ ปี</a>
                     <div class="dropdown-content">
                        <a href="#">แผนอัตรากำลัง ๓ ปี</a><br>
                        <a href="powerplan3y.php">๒๕๖๑ - ๓๕๖๓</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part3">ยุทธศาสตร์การพัฒนาฯ</a>
                        <div class="dropdown-content">
                        <a href="devstratigy.php">ยุทธศาสตร์การพัฒนาฯ</a><br>
                        <a href="purchaseparcel.php">การจัดซื้อจัดจ้างหรือจัดหาพัสดุ</a><br>
                        <a href="annourceparcel.php">ประกาศต่างๆ เกี่ยวกับการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</a><br>
                        <a href="parcelsummount.php">สรุปการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a><br>
                        <a href="parcelsumyear.php">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="#contact_part4">รายงาน</a>
                         <div class="dropdown-content">
                        <a href="report.php">รายงาน</a><br>
                        <a href="keep.php">การจัดเก็บและการจัดเก็บรายได้</a><br>
                        <a href="income.php">สถิติรายได้ของเทศบาล</a><br>
                        <a href="reportmag.php">วารสาร/รายงานผลการปฏิบัติงานประจำปี</a><br>
                        <a href="meeting.php">การประชุมสภาเทศบาล</a><br>
                        <a href="regisman.php">งานทะเบียนราชฎร</a><br>
                        <a href="regiscom.php">งานทะเบียนพานิชย์</a><br>
                        <a href="ems.php">งานป้องกันและบรรเทาสาธารณภัย</a><br>
                        <a href="servicesanitary.php">งานบริการกองสาธารณสุขฯ</a><br>
                        <a href="organunit.php">งานกองสวัสดิการสังคม</a><br>
                        <a href="machanicunit.php">งานบริหารกองช่าง</a><br>
                        <a href="manageunit.php">งานบริหารการกองศึกษา</a><br>
                        <a href="reportcorruption.php">รายงานผลการดำเนินการป้องกันการทุจริต</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part5">ศูนย์ข้อมูลข่าวสาร</a>
                        <div class="dropdown-content">
                        <a href="#">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="lawabout.php">ระเบียบ พรบ. กฏหมายที่เกี่ยวข้อง</a><br>
                        <a href="standard.php">มาตรฐานการปฏิบัติงาน</a><br><br>
                        <a href="data.php">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="announe.php">ปรกาศเทศบาลฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="command.php">คำสั่งเทศบาลฯ</a><br>
                        <a href="election.php">ศูนย์ประสานงานการเลือกตั้ง</a><br>
                        <a href="archives.php">คลังข้อมมูล</a><br>
                        <a href="km.php">มุม KM</a><br>
                        <a href="complaint.php">ร้องเรียนงานบุคคล</a><br>
                        <a href="servicestandard.php">มาตรฐานการให้บริการ</a><br>
                        <a href="servicestat.php">ข้อมูลเชิงสถิติการให้บริการ</a><br>
                        <a href="landtax.php">ภาษีโรงเรือนและที่ดิน</a><br>
                        <a href="prspend.php">ประชาสัมพันธ์งบประมาณรายจ่าย</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="index.php">หน้าหลัก</a>
                    </li>

                  

                    <!-- <li><a href="login.html"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;เข้าสู่ระบบ</a></li> -->
                    </ul>
                    </div>
    </div>




        
        


		<div class="wrapper">
        <div class="feature_section" id="features">
        <div class="container">
        
        				
                        <div class="leftside">
                            <img src="images/<?php echo $row["NEWS_PICTURE"];?>" alt=""  width="100%" height="100%" class="wow bounceInLeft animated" data-wow-duration="2s" data-wow-offset="300" data-wow-delay="0.2s" />
                        </div>
                        
                        
                        <div class="rightside">
                            <h2>หัวข้อข่าว</h2>
                            <h2><?php echo $row["NEWS_NAME"]; ?></h2>
                        <p>
                            <h3>รายละเอียด</h3>
                            <br>
                            <?php echo $row["NEWS_DETAILS"]; ?>
                        </p>
                        <p>
                            <h3>ลิ๊งค์เว็ปไซด์</h3>
                            <br>
                            <?php echo $row["NEWS_LINK"]; ?>
                        </p>
                        <p>
                            <h3>เนื้อหาที่ดาวโหลดได้</h3>
                            <br>
                            <a href="myfile/<?=$row["NEWS_FILE"];?>"><?=$row["NEWS_FILE"];?>
                        </p>
                        </div>
                        <div class="fb-comments" data-href="http://www.hangdong.go.th/detail.php?NEWS_ID=<?php echo $value; ?>" data-numposts="5"></div>	
        
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
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

		
</body>
</html>
