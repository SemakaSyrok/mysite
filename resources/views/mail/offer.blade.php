<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>

    <style type="text/css">
        body {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
            font-size: 1.3em;
            min-height: 100px;
            background: #ffffff;
            width: 80%;
        }
        p, h1, h2, h3, h4, li, a, ul {
            font-family: "Roboto";
            font-weight: normal;
            line-height: 24px;
            font-size: 20px;
            color: #222222;
        }
        h2{
            font-size: 30px;
        }
        header {
            background: linear-gradient(to right, #51a3ff, #51a3ff);
            padding: 1.5rem;
            box-shadow: 0 7px 4px 1px rgba(0, 0, 0, 0.10);
        }
        header > h2 {
            margin-block-start: 0;
            margin-block-end: 0;
        }
        .main, .footer {
            margin-left: 12px;
            padding-bottom: 0;
        }

        hr{
            width: 80%;
        }

        .footer {
            padding-top: 0;
            margin-top: 0;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer > p, a {
            line-height: 26px;
        }

        .footer > div {
            display: inline-block;
            width: 100%;
        }

        .footer > div > div {
            display: inline-block;
            width: 49%;
        }

        .text-center{
            text-align: center;
        }

        .tryit {
            font-weight: 400;
            border: 1px solid #e3e3e3;
            padding: 1px 20px 1px 20px;
            color: white;
            border-radius: 6px;
            background: #00ff00;
            margin-left: 4px;
            margin-right: 4px;
            transition: .5s;
            font-size: 24px;
            cursor: pointer;
            border-bottom: 1px solid silver;
        }

        .tryit > a {
            color: white;
        }

        #app{
            border-left: 2px solid #51a3ff;
            border-right: 2px solid #51a3ff;
            border-bottom: 2px solid #51a3ff;
            border-top: 2px solid #51a3ff;
            margin: 0 auto;
            background: #f6f6f6;
        }

        a {
            color: #3f8aff;
        }

    </style>

</head>
<body>


<div id="app">
    <header class="">
        <h2 class="text-center" style="margin-top: 6px;">Dear {{ $name }}</h2>
    </header>

    <div class="main">
        <p >
            I am writing to offer you a
            <span class="text-center highlight-big my-shadow"
                  style="word-break: unset">Video&nbsp;Management&nbsp;System</span> <br>
            It is Web/Mobile Application created special for building companies like you.
        </p>

        <hr>

        <p >
            It provides next services:
        </p>

        <ul>
            <li>New items.</li>
            <li>Bonuses</li>
            <li>Cameras</li>
            <li>Users</li>
            <li>Chats</li>
            <li>Completed works</li>
            <li>Prices</li>
            <li>FAQ</li>
            <li>Helpful information</li>
            <li>Projects</li>
        </ul>

        <hr>

        <p>
            All our clients increased the number of customers thanks to the services provided by our system. <br>
            You can try it here:

            <button class="tryit">
                <a href="https://vms.simon-svirkov.com"> CLICK</a>
            </button>

        </p>

        <p>
            Reply to the message and I will provide a login and password for system testing.
        </p>

        <p>
            Looking forward for an early response.
        </p>

        <hr>
    </div>

    <div class="footer">
        <div >
            <div  style="margin-left: 0px">
                <p >
                    Regards, <br>
                    Simon Svirkov <br>
                    <a href="https://simon-svirkov.com"
                       class="highlight-big my-shadow hoverable"
                       style="margin-left: -5px; margin-top: 2px;"
                    >simon-svirkov.com</a>
                </p>
            </div>
            <div  style="margin-right: 0px" style="float:right;">
                <img src="https://simon-svirkov.com/favicon-96x96.png" alt="Logo" style="float:right;">
            </div>
        </div>

    </div>


</div>


</body>
</html>
