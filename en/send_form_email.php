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
            <?php
            mb_internal_encoding("UTF-8");
            mb_http_output("UTF-8");
            ob_start("mb_output_handler");

            if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
                if (isset($_POST['email'])) {

                    // EDIT THE 2 LINES BELOW AS REQUIRED
                    $email_to = "frontoffice@vanquish.bg";
                    $email_subject = "A message from Iskar";

                    function died($error) {
                        // your error code can go here
                        echo "<div class=\"send-mail-message \">One of the required fields are not filled with correct data <br /> <br />";
                        echo "Please, go back ";
                        echo "<span class=\"error\">" . $error . "</span>";
                        echo "and send the message again <br /><br /> </div>";
                        die();
                    }

                    // validation expected data exists
                    if (!isset($_POST['first_name']) ||
                            !isset($_POST['email']) ||
                            !isset($_POST['comments'])) {
                        died('Моля, въведете име');
                    }

                    $first_name = $_POST['first_name']; // required
                    $email_from = $_POST['email']; // required
                    $comments = $_POST['comments']; // required

                    $error_message = "";
                    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                    if (!preg_match($email_exp, $email_from)) {
                        $error_message .= 'въведете валиден имейл адрес ';
                    }
                    $string_exp = "/^[A-Za-zА-Яа-я .'-]+$/";
                    if (!preg_match($string_exp, $first_name)) {
                        $error_message .= 'въведете име ';
                    }
                    if (strlen($comments) < 2) {
                        $error_message .= 'въведете съобщение ';
                    }
                    if (strlen($error_message) > 0) {
                        died($error_message);
                    }
                    $email_message = "Детайли на съобщението: <br/><br/>";

                    function clean_string($string) {
                        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                        return str_replace($bad, "", $string);
                    }

                    $email_message .= "Изпратено от: " . clean_string($first_name) . "<br/>";
                    $email_message .= "Email: " . clean_string($email_from) . "<br/>";
                    $email_message .= "Съобщение: " . clean_string($comments) . "<br/>";


// create email headers
                    $headers = 'From: ' . $first_name . "\r\n" .
                            "Content-Type: text/html; charset=utf-8" . "\r\n" .
                            'Reply-To: ' . $email_from . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                    @mail($email_to, $email_subject, $email_message, $headers);


                    echo "<div class=\"send-mail-message \">Благодарим Ви, че се свързахте с нас.<br /> Ще Ви изпратим отговор във възможно най-кратък срок на посочения от Вас имейл:";
                    echo "<span class=\"error\">" . $email_from . "</span></div>";
                }
            } else {
                echo "<div class=\"send-mail-message\">Грешно въведен код за сигурност<br /> <br />";
                echo "go back";
            }
            ?>
        </div>
    </div>
</div>
<?php
my_footer();


