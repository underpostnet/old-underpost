<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        <!-- meta -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142681040-1"></script>

      	<script>

      	  window.dataLayer = window.dataLayer || [];

      	  function gtag(){dataLayer.push(arguments);}

      	  gtag('js', new Date());

      	  gtag('config', 'UA-142681040-1');

      	  gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.

      	</script>


        <meta http-equiv='expires' content='0'>

        <meta http-equiv='Cache-Control' content='no-cache'>

        <meta http-equiv='Pragma' content='no-cache'>

        <meta name='description' content='Friendly Back Link Generator - UNDERpost.net'>

        <meta name='keywords' content='Friendly Back Link Generator - UNDERpost.net'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/back'>

        <meta name='identifier-URL' content='https://www.underpost.net/back'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Friendly Back Link Generator - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/back" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Friendly Back Link Generator - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/back/index.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='../assets/underpost.png' />

        <!-- <link rel='alternate' hreflang='es' href='URL'> -->

        <!--  android -->

        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

        <!--  ios -->

        <meta name="viewport" content="width=device-width, user-scalable=no" />

        <!--  css -->

        <link rel=StyleSheet href="index.css" type="text/css" media=all>

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
                height: 103%;
                top: 0px;
                transform: translate(-50%, 0%);
                left: 50%;
                background: #111111;

            }

            .input {

                background: black;
                width: 90%;
                height: 40px;
                text-align: center;
                color: white;
                border: none;

            }

            .go {

                background: white;
                color: black;
                width: 90%;
                height: 40px;
                margin: auto;
                cursor: pointer;

            }

            .linkImg {

                filter: invert(100%);
                width: 30px;
                margin: auto;
                height: 30px;
                position: relative;
                top: 15px;
                left: 5px;

            }

            .resource {

                width: 100%;
                position: absolute;
                bottom: 20px;
                text-align: center;

            }

            .alert {

              position: relative;
              color: white;
              top: 20px;
              text-align: center;
            }

        </style>

        <!--  jquery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <title>UNDERpost.net</title>

    </head>

    <body>

        <div class='description' style='display: none;'><h1>Friendly Back Link Generator</h1></div>

        <div class='cover'></div>

        <div class='content'>





            <a href='../'>

                <br>

                    <div style='width: 100%; height: 15px; text-align: center;'>BackLink Generator - <strong>UNDER</strong>post.net</div>

                <br>



            </a>

            <input type="text"  class="input" spellcheck="false" autocomplete="new-password" placeholder="" value="http://" />

            <br>

            <br>

            <div class='go'>

                <strong style='position: relative; top: 14px;'>

                    GENERATE LINK

                </strong>

            </div>

        </div>

        <div class='alert'></div>

        <script>

        function validURL(str) {

          var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
            '(\\#[-a-z\\d_]*)?$','i'); // fragment locator

          return !!pattern.test(str);

        }

            $(document).on("click", ".go", function(){

                if($('.input').val()!='' && validURL($('.input').val())){

                    var str=$('.input').val();

                    //alert(str);

                    window.location.href = ('../embed.php?url='+str);

                }else{

                    $('.alert').html('<span style="color: red; font-weight: bold;">INVALID URL</span>');

                    setTimeout(function(e){

                      $('.alert').html('');


                    }, 1500);

                }

            });

            $(document).keypress(function(e) {

                e.preventDefault;
                var key = e.which;

                if(key == 13){

                    if($('.input').val()!='' && validURL($('.input').val()) ){

                        var str=$('.input').val();

                        //alert(str);

                        window.location.href = ('../embed.php?url='+str);

                    }else{

                        $('.alert').html('<span style="color: red; font-weight: bold;">INVALID URL</span>');

                        setTimeout(function(e){

                          $('.alert').html('');


                        }, 1500);

                    }

                }

             });



        </script>

    </body>


</html>
