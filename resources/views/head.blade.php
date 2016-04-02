<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Doscom University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Doscom University (DU) adalah kegiatan belajar mengajar yang berbentuk workshop dengan para dosen pengurus Doscom. DU tahun 2016 membuka 5 kelas yaitu Linux, Pemrograman Mobile, Pemrograman Web, Jaringan Komputer, dan Multimedia. Masing-masing kelas terdapat 5 pertemuan dengan jumlah peserta maksimal 25 orang/ kelas.">
    <link rel="shortcut icon" type="image/png" href="http://www.doscom.org/favicon.png" />
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/main.css" rel="stylesheet">
    <!-- Bootstrap Material Design -->
    <link href="assetmaterial/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="assetmaterial/css/style.css" rel="stylesheet">
    <link href="assetmaterial/css/ripples.min.css" rel="stylesheet">
    <!--  iamge picker-->
    <link href="css/image-picker.css" rel="stylesheet">
    <style media="screen">
        .image_picker_selector  p{
            text-align: center;
            font-weight: bold;
        }

        .selected p{
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row form-box">
        @yield('content')
    </div>
</div>
</div>

<script src="assetmaterial/js/jquery.js"></script>
<script src="asset/css/bootstrap.min.css"></script>
<script src="efect2.js"></script>
<script src="assetmaterial/js/ripples.min.js"></script>
<script src="assetmaterial/js/material.min.js"></script>
<script src="assetmaterial/js/efect.js"></script>
<script src="js/image-picker.js"></script>

<script type="text/javascript">
    $("#kelas").imagepicker({
        show_label: true,
    });
</script>
</body>
</html>
