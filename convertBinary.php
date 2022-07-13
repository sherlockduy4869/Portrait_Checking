<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $file_name = $_FILES['user_image']['name'];
        $file_size = $_FILES['user_image']['size'];
        $file_temp = $_FILES['user_image']['tmp_name'];

        $upload_image ="Uploads/".$file_name;


        if(move_uploaded_file($file_temp,$upload_image)){
            // image to string conversion
            $imagelink = file_get_contents('https://images.app.goo.gl/1Hd5nBwHJB1MB9rm6'); 
            
            // image string data into base64 
            $encdata = base64_encode($imagelink);
            
            // Output
            echo $encdata; 
        }
    }
?>
