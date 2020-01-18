<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>funtasktic</title>

        <!-- Styles -->
        <style>
        @font-face {
			font-family: "Helvetica Neue";
			src: url('fonts/HelveticaNeue-Roman.otf')
		}

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Helvetica Neue', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <div id="example"></div>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    funtasktic
                </div>
                <div id="tasks"></div>
                    
                <div class="links">
                    <a href="/login">login</a>
                    <a href="/register">register</a>
                </div>
            </div>
        </div>
        <script src="js/app.js" type="text/javascript" async defer></script>
        <script src="../js/app.js" type="text/javascript" async defer></script>
    </body>
</html>