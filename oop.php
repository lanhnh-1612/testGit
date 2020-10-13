<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
        class DongVat {
            
            public $name;

            function __construct ($name){
                $this-> name=$name;
            }
            function an () {
                echo "<p>$this->name ăn.</p>";
            }
            function ngu () {
                echo "<p>$this->name ngủ.</p>";
            }
            function diChuyen () {
                echo "<p>$this->name di chuyển.</p>";
            }
        }
        class DongVat2Chan extends DongVat{
           
            function diChuyen(){
                echo "<p>$this->name di chuyển bằng 2 chân.</p>";
            }
        }
        class DongVat4Chan extends DongVat{
            function diChuyen(){
                echo "<p>$this->name di chuyển bằng 4 chân.</p>";
            }
        }
        $conVit = new DongVat2Chan('Con Vịt');
        $conMeo = new DongVat4Chan('Con Mèo');
        $conVit->diChuyen();
        $conMeo->diChuyen();
        $conMeo->an();
        
    ?>
</body>
</html>