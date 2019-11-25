<html>
<head>
</head>
<body>
<?php
        $a=2;
        echo is_int($a)."<br>";
        $a=1.7;
        echo is_int($a)."<br>";
        $a;
        echo is_int($a)."<br>";
        $a = "abc";
        echo is_int($a)."<br>";
        $a=true;
        echo is_int($a)."<br>";
            ?>
</body>
</html>
