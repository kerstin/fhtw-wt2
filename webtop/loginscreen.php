<div id="logincontainer">
    <div id="loginform">
        <form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="formrow">
                <div class="textinput">
                    <input type="text" id="" name="yourusername" />
                </div>
                <div class="formlabel">
                    user name
                </div>
            </div>
            <div class="formrow">
                <div class="textinput">
                    <input type="password" id="" name="yourpassword" />
                </div>
                <div class="formlabel">
                  password
                </div>
            </div>
            <div class="formrow">
                <div class="checkbox">
                    <input type="checkbox" id="" name="keeplogin" />
                </div>
                <div class="formlabel">
                  stay logged in
                </div>
            </div>
            <div class="formrow">
                <input type="submit" name="login" value="Login"/>
                <input type="submit" name="register" value="Register account"/>
            </div>
        </form>
    </div>
</div>
