<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body {
            background-image: url(img/pic.png);
            background-color: #bbb;
        }

        .error-template {
            padding: 40px 15px;
            text-align: center;
        }

        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        a{
             text-decoration: none;
             border:1px solid green;
             border-radius: 8px;
             padding: 10px;
             color: gold;
        }
        a:hover{
            background-color: #4CAF50;
            color: #fff;
        }
        div .design{
            border:1px solid gold;
            border-radius: 5px;
            padding: 8px;
            color: #fff;
            width: 480px;
            margin-left: 380px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1 style="color:#fff;font-size:50px">
                        Oops!
                    </h1>
                    <h2 style="color:red">
                        Error
                    </h2>
                    <div class="error-details" style="color:#fff"> An error occurred while processing your request.</div>
                    <div class="error-actions"><br/>
                        <a href="index.php" class="">
                            <span class=""></span>
                            Take Me Home
                        </a>
                    </div>
                </div>

            </div>
                <br/>
             <div class="design" align="center">
                    <label>&copy;2015-2016 | Doctor Patient Portal | All right reserved | Faisal Porag</label>
                </div>
        </div>
    </div>
</body>
</html>