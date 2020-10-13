<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
         
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
        </form>
        <?php
        if (isset($_POST['username'])){
            echo 'Xin chào '.$_POST['username'];
        }
        ?>
    </body>
</html>