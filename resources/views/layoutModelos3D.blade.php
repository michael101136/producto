<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <style>
            body {
                color: #fff;
                font-family:Monospace;
                font-size:13px;
                margin: 0px;
                text-align:center;
                overflow: hidden;
            }

            #info {
                color: #fff;
                position: absolute;
                top: 10px;
                width: 100%;
                text-align: center;
                display:block;
            }
            
            #waitScreen {
                color: #000;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -50px;
                margin-left: -50px;
                width: 100px;
                height: 100px;
            }
            
            .hide {
                display:none;
            }

            a { color: white }

            body {
                color: #aaa;
                font-family:Monospace;
                font-size:13px;
                text-align:center;
                background-color: #000;
                margin: 0px;
                overflow: hidden;
            }
            #info {
                position: absolute;
                top: 0px; width: 100%;
                padding: 5px;
                z-index:100;
            }
            .lbl { color:#fff; font-size:16px; font-weight:bold; position: absolute; bottom:0px; z-index:100; text-shadow:#000 1px 1px 1px; background-color:rgba(0,0,0,0.85); padding:1em }
            #lbl_left { text-align:left; left:0px }
            #lbl_right { text-align:left; right:0px }
            .g { color:#aaa }
            .c { color:#fa0 }
            a { color:red }
        </style>
        <title>Spaziour.com</title>
    </head>
    <body>
        <div>
               @yield('contenido')
        </div>
    </body>
</html>
