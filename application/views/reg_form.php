<div class="row">
    <div class="col-xs-12">
        <form method="post" action="/user/apply_register">

            <div class="form-group">
                <label for="Name">Your name</label>
                <input type="text" class="form-control" id="Name" placeholder="Your name" name="name" value="<?= $data['form']['name']?>">
                <p style="color: red; font-weight: bold;"><?= $data['err']['name'];?></p>
            </div>

            <div class="form-group">
                <label for="Pass">Password</label>
                <input type="password" class="form-control" id="Pass" placeholder="Password" name="pass" >
                <label for="Pass2">Repeat password</label>
                <input type="password" class="form-control" id="Pass2" placeholder="Repeat password" name="pass2" >
                <p style="color: red; font-weight: bold;"><?= $data['err']['pass'];?></p>

            </div>

            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="text" class="form-control" id="Email" placeholder="Email" name="email" value="<?=$data['form']['email']?>">
                <p style="color: red; font-weight: bold;"><?= $data['err']['email'];?></p>
            </div>

            <button type="submit" name="regsubmit" class="btn btn-primary">Подтвердить</button>

        </form>
    </div>
</div>