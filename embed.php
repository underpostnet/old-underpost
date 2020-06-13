<?php
if (filter_var($_GET['url'], FILTER_VALIDATE_URL) === FALSE) {
    //header ('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang='en'>

    <head>

        <!-- meta -->

        <meta http-equiv='Content-Type' content='text/html; charset=euc-jp'>

        <meta http-equiv='expires' content='0'>

        <meta http-equiv='Cache-Control' content='no-cache'>

        <meta http-equiv='Pragma' content='no-cache'>

        <meta name='description' content='Embed Code App Web - UNDERpost.net'>

        <meta name='keywords' content='cyberpunk, web, app, developer, service, ciberpunk, desarrollo, servicio, aplicacion, gallery, css, html5, javaScript, programming, Multi Platform, Applications'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/embed.php'>

        <meta name='identifier-URL' content='https://www.underpost.net/embed.php'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="UNDERpost.net" />

        <meta property="og:title" content="UNDERpost.net" />

        <meta property="og:type" content="EMDEB IFRAME WEB APP" />

        <meta property="og:url" content="https://underpost.net/embed.php" />

        <meta property="og:image" content="https://underpost.net/img/logo.PNG" />

        <meta property="og:description" content="EMBED CODE APP WEB" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/embed.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='assets/underpost.png' />

        <!-- <link rel='alternate' hreflang='es' href='URL'> -->

        <!--  android -->

        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

        <!--  ios -->

        <meta name='viewport' content='width=device-width, user-scalable=no' />

        <!--  css -->

        <link rel=StyleSheet href='embed.css' type='text/css' media=all>

        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

        <style>

        .fa_custom {

            color: white;

        }

        </style>

        <style>

        .content {

            position: relative;
            width: 100%;
            max-width: 800px;
            height: auto;
            top: 0px;
            transform: translate(-50%, 0%);
            left: 50%;
            background: #111111;
            text-align: center;

        }

        .cover {

            position: absolute;
            width: 100%;
            max-width: 800px;
            height: 100%;
            top: 0px;
            transform: translate(-50%, 0%);
            left: 50%;
            background: #111111;

        }

        .subcontent {

            width: 90%;
            height: 200px;
            background: black;
            color: white;
            font-size: 20px;
            font-family: courier;
            border: none;
            resize: none;
            /* resize: vertical; */

        }

        .copyButton {

          position: relative;
          top: 10px;
          width: 220px;
          border: 2px solid white;
          background: none;
          margin: auto;
          cursor: pointer;
          padding: 10px;
          font-weight: bold;

        }

        .copyButton:hover {

          color: red;
          border: 2px solid red;

        }

        .resource {

            width: 100%;
            position: fixed;
            bottom: 20px;
            text-align: center;

        }

        .linkButton {

            position: relative;
            top: 10px;
            width: 220px;
            border: 2px solid white;
            background: none;
            margin: auto;
            cursor: pointer;
            padding: 10px;
            font-weight: bold;

        }

        .linkButton:hover {

          border: 2px solid red;

        }

        </style>

        <!--  jquery -->

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

        <!-- title -->

        <title>UNDERpost.net</title>

    </head>

    <body>

        <div class='cover'></div>

        <div class='description' style='display: none;'><h1>Embed Code App Web</h1></div>

        <div class='content'>

            <br>

            <span style='font-size: 16px;'>

                Insert this HTML code in your Web Site

            </span>

            <br>

            <br>

            <!-- <textarea disabled> -->

            <textarea disabled autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='subcontent'><iframe src='<?php echo $_GET["url"]; ?>' style='width: 330px; height: 530px; border: none;'></iframe></textarea>

            <br> <br>

            <div class='copyButton'>COPY</div>

            <br>

            <a target="_blank" href='<?php echo $_GET["url"]; ?>'>

                <div class='linkButton'>
                            LINK <i class="fa fa-external-link fa_custom"></i>

                </div>

            </a>

            <br><br>

            <div class='copymsg'></div>

        </div>

        <a href='index.php'>

                <div class='resource'>Powered By <strong>UNDER</strong>post.net</div>

        </a>

        <script>

            function copyToClipboard(elemento) {

                var $temp = $('<input>')

                $('body').append($temp);

                $temp.val($(elemento).text()).select();

                document.execCommand('copy');

                $temp.remove();

            }


            $(document).on("click", ".copyButton", function(){


                $('.copymsg').html('<strong>COPY TO CLIPBOARD</strong>');

                setTimeout(function(e){

                  $('.copymsg').html('');


                }, 1500);

                copyToClipboard('.subcontent');


            });


        </script>

    </body>

</html>
