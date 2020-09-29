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
<?php
      echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

  

            echo'<thead>

                    <tr>

                        <th colspan="3" style="background-color:#e7ab3c;color:#fff;" >ข้อมูลส่วนตัว</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td style="width:130px;">ชื่อ - นามสกุล</td>
                        <td>';echo $information['name']." ".$information['lastname']; echo' </td>
    
                    </tr>

                    <tr>

                        <td>เพศ</td>
                        <td>';echo $information['gender']; echo' </td>

                    </tr>

                    <tr>

                        <td>วันเดือนปีเกิด</td>
                        <td>';echo $information['birthday']; echo' </td>

                    </tr>

                </tbody>';


             echo'</table>';

            

       ?>