<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body> 
    
     <table id="table_details" class="table table-striped table-bordered" style="width:100%">
      
    
    <thead>
        <tr>
            <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการทำงาน</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width:160px;">ชื่อบริษัท</td>
            <td><?php echo $work['company'];  ?></td>
        </tr>
        <tr>
            <td>ตำแหน่งงาน</td>
            <td><?php echo $work['position']; ?> </td>
        </tr>
        <tr>
            <td>ที่อยู่</td>
            <td><?php echo $work['c_number']." ".$work['c_road']." ".$work['c_district']." ".$work['c_amphoe']." ".$work['c_province']." ".$work['c_zipcode']; ?></td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์บริษัท</td>
            <td><?php echo $work['c_tel']; ?>  </td>
        </tr>
    </tbody>
    

</table>

            
</body>
</html>
