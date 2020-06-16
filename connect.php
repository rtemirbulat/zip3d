<?php
                $post = $_POST;
                $bot_token = "1115547191:AAFhaRnaPLxb7Uctwy_NUcnBqRfZ5izDgPM";	
              $chatID=846357847; //Сбда пишешь чат айди
              $url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chatID;
              $url = $url . "&text=" . urlencode("К вам обратился человек по имени:".$post["name"]." , c номером телефона:".$post["telephone"].", тип работы : ".$post["jobtype"]);
      	     file_get_contents($url);
 ?>
<h1>Ваша заявка отправлена!</h1>
