<style>
    .komodo-form-wrapper{
        width: 100% !important;
        max-width: 600px !important;
        margin: 0 auto 15px;
    }

    .komodo-form-wrapper label{
        display: none;
    }

    .komodo-form-wrapper input,
    .komodo-form-wrapper textarea{
        width: 100%;
        margin-bottom: 15px;
        color: #204484;
        background: rgba(0,0,0,0);
        border: none;
        border-bottom: solid 1px #204484;
        padding: 15px;
        outline: none;
    }

    .komodo-form-wrapper input::placeholder,
    .komodo-form-wrapper textarea::placeholder{
        color: #555;
        transition: all ease 250ms;
    }

    .komodo-form-wrapper input:active::placeholder,
    .komodo-form-wrapper input:focus::placeholder,
    .komodo-form-wrapper textarea:active::placeholder,
    .komodo-form-wrapper textarea:focus::placeholder{
        font-size: 0;
    }

    .komodo-form-wrapper input:active,
    .komodo-form-wrapper input:focus,
    .komodo-form-wrapper textarea:active,
    .komodo-form-wrapper textarea:focus{
        background: rgba(255,255,255,0.6);
    }

    .komodo-success,
    .komodo-error {
        background: #c3e5c3;
        border: solid 1px #7ec87e;
        color: #010101;
        padding: 15px;
        font-size: 20px;
        font-family: 'Open Sans', sans-serif;
        max-width: 600px !important;
        margin: 0 auto;
    }

    .komodo-error{
        background: #e5c2c2;
        border-color: #c87e7e;
    }
</style>
<form action method="POST" class="komodo-form-wrapper">
    <label for="komodo_name">Name</label>
    <input type="text" name="komodo_name" placeholder="Name">
    <label for="komodo_address">Address</label>
    <input type="text" name="komodo_address" placeholder="Address">
    <label for="komodo_email">Email</label>
    <input type="email" name="komodo_email" placeholder="Email">
    <label for="komodo_telephone">Telephone</label>
    <input type="tel" name="komodo_telephone" placeholder="Telephone">
    <label for="komodo_message">Message</label>
    <textarea name="komodo_message" placeholder="Message..." rows="5"></textarea>
    <button type="submit" name="komodo_submit" href="#">Submit</button>
</form>
<?php
    include_once 'komodo-connect.php';
    if(isset($_POST['komodo_submit'])){
        $name = sanitize_text_field($_POST['komodo_name']);
        $address = sanitize_text_field($_POST['komodo_address']);
        $email = filter_var($_POST['komodo_email'], FILTER_SANITIZE_EMAIL);
        $telephone = filter_var($_POST['komodo_telephone'], FILTER_SANITIZE_NUMBER_INT);
        $message = sanitize_text_field($_POST['komodo_message']);

        if(empty($name) || empty($address) ||  empty($email) || empty($telephone) || empty($message)){
            //If any field is left blank, display error message
            echo "<div class='komodo-error'>Please fill out all fields!</div>";
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                //If an invalid email format is used, display error message
                echo "<div class='komodo-error'>Invalid Email address, please try again.</div>";
            } else {
                echo "<div class='komodo-success'>Thanks for your submission!</div>";
                if(!$connect) {
                    //If connection cannot be made, display error message
                    die("Connection failed: " . mysqli_connect_error());
                } else {
                    //If connection CAN be made, insert data into table "komodo_submissions"
                    $user_info = "INSERT INTO komodo_submissions (komodo_name, komodo_address, komodo_email, komodo_telephone, komodo_message) VALUES ('$name', '$address', '$email', '$telephone', '$message')";
                    mysqli_query($connect, $user_info);
                }
            }
            
        }
    }
