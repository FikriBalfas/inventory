<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./protected/css/login/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body{
    background: url(./protected/img/back.png);
    background-color: #444;
    background: url(./protected/img/pinlayer2.png),url(./protected/img/pinlayer1.png),url(./protected/img/back.png);    
}

.vertical-offset-100{
    padding-top:100px;
}
    </style>
    <script src="./protected/css/login/jquery-1.10.2.min.js"></script>
    <script src="./protected/css/login/bootstrap2.min.css"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
    <script src="./protected/css/login/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<center>
    <h1 style="color:white; font-weight: bold;" >INVENTORY<br />PT.WAINDO SPECTERRA INDONESIA</h1>
</center>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Daftar">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <footer>
        @include('includes.footer')
    </footer>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
    </script>


</body>
</html>
