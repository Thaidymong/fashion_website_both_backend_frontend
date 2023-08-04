<form  method="post">
    <h3>get in touch</h3>
    <div class="inputBox">
    <input type="text" name="name" placeholder="your name">
    <input type="email" name="email" placeholder="your email">
    </div>
    <div class="inputBox">
        <input type="number" name="number" placeholder="your number">
        <input type="text" name="subject" placeholder="your subject">
    </div>
    <textarea placeholder="your message" name="message" cols="30" rows="10"></textarea>
    <input type="submit" value="send message" class="btn">
</form>
<?php

    if(isset($_POST['submit'])){

        $apiToken = "6105173376:AAEvJqFcD6ZbmDCc57mXSKatbVMbyvkYVlE";
        $data  =[
            'chat_id' => '935604722',
            'text' => $_POST['text'],
            'email' => $_POST['email'],
            'number' => $_POST['number'],
            'subject' => $_POST['subject'],
            'message' => $_POST['message'],
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
        http_build_query($data) );
    }
?>

