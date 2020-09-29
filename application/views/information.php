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
defined('BASEPATH') OR exit('No direct script access allowed');?>
   <div class="container">

<br>

<div class="row">

    <div class="col-lg-2">

    </div>

    <div class="col-lg-8">

        <div class="contact-widget">

            <div class="cw-item">

                <div class="ci-text">

                    <h3>ลงทะเบียน</h3>

                </div>

            </div>

        </div>

        <form action="./index.php/manage/information" method="post" enctype="multipart/form-data" id="form1">
         <br>

            <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลส่วนตัว</span></h3>

            <hr>

            <div class="form-row">

                <div class="form-group col-md-2">

                    <label>คำนำหน้า</label>

                    <select id="" class="form-control" name="prefix">

                        <option selected>-</option>

                        <option value="นาย">นาย</option>

                        <option value="นางสาว">นางสาว</option>

                        <option value="นาง">นาง</option>

                    </select>

                </div>

                <div class="form-group col-md-5">

                    <label>ชื่อ</label>

                    <input type="text" class="form-control" name="fname" value="">

                </div>

                <div class="form-group col-md-5">

                    <label for="inputPassword4">นามสกุล</label>

                    <input type="text" class="form-control" name="lname">

                </div>

                <div class="form-group col-md-6">

                    <label>เพศ</label>

                    <select id="" class="form-control" name="gender">

                        <option selected>-</option>

                        <option value="ชาย">ชาย</option>

                        <option value="หญิง">หญิง</option>

                    </select>

                </div>

                <div class="form-group col-md-6">

                    <label>วันเดือนปีเกิด</label>

                    <input type="date" class="form-control" name="birthday">

                </div>
            </div>

            <br>



            <div>

                <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ลงทะเบียน</button>

                <button type="reset" class="btn btn-secondary">รีข้อมูล</button>

            </div>







        </form>



    </div>

</div>

<br>

<br>

</div>