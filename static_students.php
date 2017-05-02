<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        class Student {
            static $total_students=0;
            
            static function welcome_students($var="hello") {
                echo "$var students.";
            }
            
            static function add_students($var=50){
                Student::$total_students+=$var;
            }
            
        }
    echo Student::$total_students . "<br />";
    echo Student::welcome_students() ."<br/>";
    
    Student::add_students();
    echo Student::$total_students . "<br />";
    
    ?>
</body>
</html>
