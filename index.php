<?php require_once 'headernews.php';?>
<?php require_once 'header.php'; ?>


        <div class="service_section">
            <div class="hed">
                <div class="container">
                    
                

                            <h2>ยินดีต้อนรับเข้าสู่เว็ปไซต์เทศบาลตำบลหางดง</h2>
                            <h4>Welcomr to Hangdong Subdistrict Municipality Website</h4>
                            
                        
                
                </div>
            </div>

        </div>
<?php require_once 'headerdown.php'; ?>
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
                        <?php echo $row["SUBMIT_DATE"];?>

                        </p>

                        </div></a>
                    <?php $i++; } ?>
                    
                    
        
        </div>
        </div>
        
        
        <?php require_once 'footer.php'; ?>