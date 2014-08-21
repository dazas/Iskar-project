<?php
session_start();
include './functions.php';
my_header('Shavarite - Contact us');
?>
<div id="main-content">
        <h2 class="page-title" id="title-1">contact us</h2>
    <div class="page-content contacts-bg"> 

        <div class="contact-info">
            <p>Sofia, Bulgaria <br/>
                180 vitosha str</p>
            <!--
            <p><a href="#">A:  info@welcomehome.bg</a></p>
            <p><a href="#">P:  +359 2 980 99 99</a></p>
            -->
<form method="POST" id="contact-form" name="contactform" action="send_form_email.php">
                <div class="field">
                    <label for="first_name">Name:</label><input class="input" id="user_name" type="text" placeholder="your name" name="first_name" maxlength="30"  required/>

                </div>

                <div class="field">
                    <label for="email">email:</label><input class="input" type="text" placeholder="your email" name="email" maxlength="30" id="email" required/>

                </div>

                <div class="field">
                    <label for="comments">message:</label><textarea id="user_message" class="input" name="comments" required>
                    </textarea>
                </div>
                <div class="field">
                    <label for="captcha">enter code:</label><input class="input half" name="captcha" type="text" placeholder="enter code"><img src="../captcha.php" />
                </div>
                <div class="field">
                    <input class="button-send" type="submit" value="send" name="submit" /> 
                </div>
            </form>
        </div>
    </div>
</div>
<?php
my_footer();