<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form method="GET">
            Username: <input type="text" name="username" value=""/> <br/>
            
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
        </form>
        <div class="a">
        <?php
        if (isset($_GET['username'])){
           
           echo 'Xin chào : '. $_GET['username'];
        }
        ?>
        </div>
    </body>
</html>