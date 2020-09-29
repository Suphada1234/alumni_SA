
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
<form action="./index.php/manage/add_work" method="post" enctype="multipart/form-data" id="form1">
<h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการทำงาน</span></h3>
<hr>
<div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" class="form-control" name="position">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ชื่อบริษัท</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เบอร์โทรศัพท์บริษัท</label>
                        <input type="text" class="form-control" name="c_tel">
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีที่เข้าทำงาน</label>
                        <select id="" class="form-control" name="year_int">
                            <option selected>-</option>
                            <option value="2553">2553</option>
                            <option value="2554">2554</option>
                            <option value="2555">2555</option>
                            <option value="2556">2556</option>
                            <option value="2557">2557</option>
                            <option value="2558">2558</option>
                            <option value="2559">2559</option>
                            <option value="2560">2560</option>
                            <option value="2561">2561</option>
                            <option value="2562">2562</option>
                            <option value="2563">2563</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีที่เลิกทำงาน</label>
                        <select id="" class="form-control" name="year_out">
                            <option selected>-</option>
                            <option value="2553">2553</option>
                            <option value="2554">2554</option>
                            <option value="2555">2555</option>
                            <option value="2556">2556</option>
                            <option value="2557">2557</option>
                            <option value="2558">2558</option>
                            <option value="2559">2559</option>
                            <option value="2560">2560</option>
                            <option value="2561">2561</option>
                            <option value="2562">2562</option>
                            <option value="2563">2563</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>เลขที่ / หมู่</label>
                        <input type="text" class="form-control" name="c_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>ถนน</label>
                        <input type="text" class="form-control" name="c_road">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ตำบล/แขวง</label>
                        <input type="text" class="form-control" name="c_district">
                    </div>
                    <div class="form-group col-md-5">
                        <label>อำเภอ/เขต</label>
                        <input type="text" class="form-control" name="c_amphoe">
                    </div>
                    <div class="form-group col-md-5">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="c_province">
                    </div>
                    <div class="form-group col-md-2">
                        <label>ไปรษณีย์</label>
                        <input type="text" class="form-control" name="c_zipcode">
                    </div>
                </div>
                <br>

                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ลงทะเบียน</button>
                    <button type="reset" class="btn btn-secondary">รีข้อมูล</button>
                </div>



            </form>
</div>