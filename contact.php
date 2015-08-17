<?php 

if (isset($_GET["id"])) {
    $technology_id = $_GET["id"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try{
    include_once('inc/phpmailer/class.phpmailer.php');
    require_once('inc/phpmailer/class.smtp.php');


    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);


    if ($name == "" OR $email == "" OR $message == "") {
        throw new Exception("You must specify a value for name, email address, and message.");
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
        throw new Exception("There was a problem with the information you entered.");    
        }
    }

    if ($_POST["address"] != "") {
        throw new Exception("Your form submission has an error.");
    }

    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)){
        throw new Exception("You must specify a valid email address.");
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;


    $mail->Host = 'localhost';
    $mail->SetFrom($email, $name);
    $address = "paskclothing@gmail.com";
    $mail->AddAddress($address, "Technology request");
    $mail->Subject    = "Request about technology ". $technology_id . "by" . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      throw new Exception("There was a problem sending the email: " . $mail->ErrorInfo);
    }

    header("Location: contact.php?status=thanks");
    exit;
} catch (Exception $e) {
    $message = $e->getMessage();
}
}
?><?php 
$pageTitle = "Contact | BYU Tech Transfer";
$section = "contact";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">
<div class="breadcrumb"><a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a>
            <h1>Contact</h1>
            

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p class="thank-you-text">Thanks for the email! We&rsquo;ll be in touch shortly!</p>
                <a href="technologies.php"><button class="contact-thanks">Find more technologies</button></a>
            <?php } else { ?>

                <p class="contact-text">We&rsquo;d love to hear from you! Complete the form to send me an email.</p>

                <div class="error"><?php if (isset($message)) {
                    echo $message;
                } ?></div>


                <form class="contact-form" method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "";?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "";?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"><?php echo isset($_POST['message']) ? $_POST['message'] : "";?></textarea>
                            </td>
                        </tr> 
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>

                    <p class="contact-text-sm">* Please enter the ID # of the technologies you are interested in.</p>



                    <input type="submit" value="Send">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>