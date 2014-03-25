<?
?>
        <div id="logincontainer">
            <div id="loginform">
                <form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
                    <p>
                        <label for="yourusername">
                          <span>Username: </span>
                          <input type="text" id="" name="yourusername" />
                        </label>
                    </p>
                    <p>
                        <label for="yourpassword">
                          <span>Password: </span>
                          <input type="password" id="" name="yourpassword" />
                        </label>
                    </p>

                    <p>
                          <input type="submit" id="button" name="submit" value="Login"/>
                    </p>
                </form>
            </div>
        </div>
