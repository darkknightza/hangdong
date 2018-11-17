<?php 
    include "connect.php";
    $sql = "SELECT * FROM `news_information`";
    $query=mysqli_query($objCon,$sql);
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
.leftside{

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
                        <a href="baseinfo.html">ข้อมูลพื้นฐาน</a><br>
                        <a href="sign.html">ตราสัญลักษณ์</a><br>
                        <a href="#">ประวัติความเป็นมา</a><br>
                        <a href="#">ข้อมูลทั่วไป</a><br>
                        <a href="#">โครงสร้างหน่วยงาน</a><br>
                        <a href="#">อำนาจและหน้าที่ของเทศบาล</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#features">คณะผู้บริหาร</a>
                    <div class="dropdown-content">
                        <a href="#">คณะผู้บริหาร</a><br>
                        <a href="#">เจตจำนงสุจริตของผู้บริหาร</a><br>
                        <a href="#">คณะผู้บริหาร</a><br>
                        <a href="#">สมาชิกสภาเทศบาล</a><br>
                        <a href="#">หัวหน้าส่วนราชการ</a><br>
                    </div></li>

                    <li class="dropdown"><a href="#testimonials_part">หน่วยงาน </a>
                        <div class="dropdown-content">
                        <a href="#">หน่วยงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">สำนักปลัดเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">กองคลัง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
                        <a href="#">กองช่าง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">กองการศึกษา</a><br>
                        <a href="#">กองสาธารณสุขและสิ่งแวดล้อม</a><br>
                        <a href="#">กองสวัสดิการสังคม&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">สถานธนานุบาล</a><br>
                        <a href="#">โรงเรียนเทศบาลหางดง (ประชาคมสร้างสรรค์)</a><br>
                        <a href="#">ศูนย์พัฒนาเด็กเล็ก</a><br>
                        <a href="#">ศูนย์บริการสารสนเทศ</a>
                    </div></li>
                    <li class="dropdown"><a href="#contact_part1">นโยบาย</a>
                        <div class="dropdown-content">
                        <a href="#">นโยบาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">นโยบายและแผน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">เทศบัญญัติฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">แผนพัฒนาเทศบาล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">แผนการดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">รายงานติดตามและประเมินผลฯ</a><br>
                        <a href="#">รายงานการประเมินผลการควบคุมภายใน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">แผนการจัดซื้อจัดจ้าง</a><br>
                        <a href="#">แผนปฏิบัติการป้องกันการทุจริต ๒๕๖๐ - ๒๕๖๔</a><br>
                        <a href="#">แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริต</a><br>
                        <a href="#">รายงานการกำกับติดตามการดำเนินงานรอบ ๖ เดือน</a><br>
                        <a href="#">รายงานผลการดำเนินงานประจำปี</a><br>
                        <a href="#">รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ ๖ เดือน</a><br>
                        <a href="#">รายงานผลการใช้จ่ายงบประมาณประจำปี</a><br>
                        <a href="#">รายงานการกำกับติดตามการดำเนินงานการป้องกันการทุจริต รอบ ๖ เดือน</a><br>
                    </div></li>
                    <li class="dropdown"><a href="#pricing_part2">แผนอัตรากำลัง ๓ ปี</a>
                     <div class="dropdown-content">
                        <a href="#">แผนอัตรากำลัง ๓ ปี</a><br>
                        <a href="#">๒๕๖๑ - ๓๕๖๓</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part3">ยุทธศาสตร์การพัฒนาฯ</a>
                        <div class="dropdown-content">
                        <a href="#">ยุทธศาสตร์การพัฒนาฯ</a><br>
                        <a href="#">การจัดซื้อจัดจ้างหรือจัดหาพัสดุ</a><br>
                        <a href="#">สรุปการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a><br>
                        <a href="#">สรุปการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="#contact_part4">รายงาน</a>
                         <div class="dropdown-content">
                        <a href="#">รายงาน</a><br>
                        <a href="#">การจัดเก็บและการจัดเก็บรายได้</a><br>
                        <a href="#">สถิติรายได้ของเทศบาล</a><br>
                        <a href="#">วารสาร/รายงานผลการปฏิบัติงานประจำปี</a><br>
                        <a href="#">การประชุมสภาเทศบาล</a><br>
                        <a href="#">งานทะเบียนราชฎร</a><br>
                        <a href="#">งานทะเบียนพานิชย์</a><br>
                        <a href="#">งานป้องกันและบรรเทาสาธารณภัย</a><br>
                        <a href="#">งานบริการกองสาธารณสุขฯ</a><br>
                        <a href="#">งานกองสวัสดิการสังคม</a><br>
                        <a href="#">งานบริหารกองช่าง</a><br>
                        <a href="#">งานบริหารการกองศึกษา</a><br>
                        <a href="#">รายงานผลการดำเนินการป้องกันการทุจริต</a><br>

                    </div>
                    </li>

                    <li class="dropdown"><a href="#contact_part5">ศูนย์ข้อมูลข่าวสาร</a>
                        <div class="dropdown-content">
                        <a href="#">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="#">ระเบียบ พรบ. กฏหมายที่เกี่ยวข้อง</a><br>
                        <a href="#">มาตรฐานการปฏิบัติงาน</a><br><br>
                        <a href="#">ศูนย์ข้อมูลข่าวสาร</a><br>
                        <a href="#">ปรกาศเทศบาลฯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                        <a href="#">คำสั่งเทศบาลฯ</a><br>
                        <a href="#">ศูนย์ประสานงานการเลือกตั้ง</a><br>
                        <a href="#">คลังข้อมมูล</a><br>
                        <a href="#">งานบริการกองสาธารณสุขฯ</a><br>
                        <a href="#">งานกองสวัสดิการสังคม</a><br>
                        <a href="#">งานบริหารกองช่าง</a><br>
                        <a href="#">งานบริหารการกองศึกษา</a><br>
                        <a href="#">รายงานผลการดำเนินการป้องกันการทุจริต</a><br>

                    </div>
                    </li>
                    <li class="dropdown"><a href="login.html">ข่าว</a>
                        <div class="dropdown-content">
                        <a href="creatnews.html">สร้างข่าว</a><br>
                        <a href="NewsList.php">ดูข้อมูลข่าว</a><br>
                    </li>

                  

                    <li><a href="login.html"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;เข้าสู่ระบบ</a></li>
                    </ul>
                    </div>
    </div>




        
        


        <div class="wrapper">
        
        
        <div class="common_section" id="contact_part">
        <div class="container">
                <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" /> -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.bootstrap.min.css" type="text/css" />
<!-- data Table State -->
<div class="container contact-form">
        <table border="2" class="datatable table table-hover table-bordered" cellspacing="0" width="100%" id='datatable'>
        <thead>
            <tr>
                <th>ที่</th>
                <th>ชื่อ</th>
                <th>วันที่</th>
                <th>รายละเอียด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1;
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["NEWS_NAME"] ?></td>
                <td><?php echo $row["NEWS_DETAILS"] ?></td>
                <td><?php echo $row["SUBMIT_DATE"] ?></td>
                <td><a class="w3-button w3-blue" href="Edit-News.php?ID=<?php echo $row["NEWS_ID"] ?>">แก้ไข</a></td>
                <td><button class="w3-button w3-red" onclick="DeleteNews('<?php echo $row["NEWS_ID"] ?>')">ลบ</button></td>
            </tr>
        <?php $i++; } ?>
        </tbody>
    </table>
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<!-- Responsive extension -->
<script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
<!-- Buttons extension -->
<script src="//cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>

<script>
  var dataTable = $('#datatable').DataTable();
function DeleteNews(id) {
    var r = confirm("Press a button!");
    if (r == true) {
        $.ajax({
	        method: "POST",
	        url: "/deletenews.php",
	        async: false,
            cache: false,
            data: { id: id },
	        success: function(data){
                alert(data);
                location.reload();
            }
        });
    } 
}
</script>
                    
        
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
