<?php 
    include "connect.php";
    $sql = "SELECT * FROM `news_information`";
    $query=mysqli_query($objCon,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>รายการข่าว</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<body>
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

</body>
</html>