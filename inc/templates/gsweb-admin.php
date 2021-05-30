<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://juanjimeneztj.github.io/cdn/css/bootstrap/5.0.0/bootstrap.min.css" rel="stylesheet" />
    <style>
        #wpcontent{
            padding-left: 0!important;
        }
        #wpbody-content{
            height: 90vh;
        }
        #wpbody{
            background-image: url('<?=get_template_directory_uri()?>/img/background/welcome.jpeg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 90vh;
            position: relative;
        }
        #wpbody::after{
            content:'';
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            background: rgba(255,255,255,0.1);
            height: 100%;
            width: 100%;
        }
        #wpbody > *{
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body class="h-100">
    <section class="h-100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col">
                    <h4 class="text-center text-white fw-lighter">Thank you very much for choosing our theme, do not hesitate to get in touch if <br class="d-none d-lg-block" />you need support or have any problem, we are here to serve you.</h4>
                    <h1 class="text-white fw-bolder text-center display-1"><?=bloginfo('name')?></h1>
                </div>
            </div>
        </div>
    </section>

    <script src="https://juanjimeneztj.github.io/cdn/js/bootstrap/5.0.0-beta3/bootstrap.min.js"></script>
</body>

</html>