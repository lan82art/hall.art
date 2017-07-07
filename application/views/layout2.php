<!DOCTYPE html>
<html>
<head>
    <title>Hall of fame :)</title>
    <meta charset="UTF-8">
    <meta name = "robots" content="NOINDEX,NOFOLLOW" />
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div class="wrap">
    <div class="container">
        <nav id="w4" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"><div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w4-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><a class="navbar-brand" href="/"></a></div>
                <div id="w4-collapse" class="navbar-collapse collapse in" aria-expanded="true">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Главная<span class="sr-only">(current)</span></a></li>
                    </ul>
                    <ul id="w5" class="nav navbar-nav navbar-right">
                        <?php if($_SESSION['auth']){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['name']?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Заказы</a></li>
                                    <li><a href="#">Редактировать профиль</a></li>
                                    <li><a href="/user/logout">Выход</a></li>
                                </ul>
                            </li>
                            <!--<li class="glyphicon glyphicon-shopping-cart"></li>-->
                        <?php } else {?>
                            <li><a href="/user/loginForm">Войти</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <?php require_once 'application/views/'.$content; ?>
            </div>
            <div class="col-xs-1"></div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <p class="pull-left"><span class="glyphicon glyphicon-copyright-mark"></span> Artem <?php echo date('Y');?></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>