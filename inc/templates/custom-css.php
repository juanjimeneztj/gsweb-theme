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
        #wpcontent .notice{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 8888;
            background: var(--bs-success);
            color:#fff;
            font-size: 22px;
            width: 100%;
            max-width: 300px;
            padding: 15px;
            border-radius: 7px;
            box-shadow: 0 0 20px rgb(0 0 0 / 50%);
        }
        #wpcontent .notice .notice-dismiss::before{
            color:#fff!important;
        }
    </style>
</head>

<body>
    <section class="py-3">
        <form method="post" action="options.php">
            <?php settings_fields( 'gsweb-settings-group' ) ?>
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h1 class="fw-bolder text-center">Custom CSS:</h1>
                    </div>
                </div>
                <div class="row px-4 py-5">
                    <div class="col-12 col-lg">
                        <?php do_settings_sections( 'gsweb' ) ?>
                        <?php submit_button( 'Save Changes' , 'btn btn-success' ) ?>
                    </div>
                    <div class="col-12 col-lg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quod at quo numquam rem, similique repellat ipsam nihil eveniet fugiat eligendi nobis dolore perferendis vel adipisci consequuntur, ducimus natus reiciendis.</p>
                    </div>
                    <div class="col-12 col-lg">
                        <?php settings_errors() ?>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde consequatur voluptatibus, quibusdam fugiat fuga earum, itaque nemo nostrum quaerat sunt ipsa eaque commodi non sint optio porro eveniet saepe.</p>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://juanjimeneztj.github.io/cdn/js/bootstrap/5.0.0-beta3/bootstrap.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>
        let $document = $(document);

        $document.ready(()=>{
            $('#wpcontent').find('#submit').removeClass('button');
        });
    </script>
</body>

</html>