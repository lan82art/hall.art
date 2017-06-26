<div class="jumbotron">
    <div class="row">
        <div class="col-xs-6">
            <form action="/user/registerForm" method="post">
                <input type="submit" class="btn btn-primary" name="register" value="Зарегистрироваться" />
            </form>
        </div>
        <div class="col-xs-6">
            <form action="/user/login" method="post">
                <p style="color: red;"><?= $data?></p>
                <p><input type="text" name="login" placeholder="login"/></p>
                <p><input type="password" name="password" placeholder="password"/></p>
                <input type="submit" class="btn btn-primary" name="enter" value="Войти"/>
            </form>
        </div>
    </div>
</div>
