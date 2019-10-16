<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Battambang&display=swap" rel="stylesheet">
    <title>Variable</title>
    <style>
        body{
            font-family: 'Battambang', cursive;
        }
        .box {
            width: 700px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 1px 6px 0 rgba(32, 33, 36, .28);
        }
    </style>
</head>
<body>
<?
$number = 123; $string = 'string';$boolean = true; $array = [1,2,3];
echo '<div class="box">
    <h3 class="text-center">
        អថេរ
    </h3>
   <table border="1">
        <tr>
            <td>តម្លៃ</td>
            <td>ប្រភេទ</td>
        </tr>
        <tr>
            <td>'.$number.'</td>
            <td>'.gettype($number).'</td>
        </tr>
        <tr>
            <td>'.$string.'</td>
            <td>'.gettype($string).'</td>
        </tr>
        <tr>
            <td>'.$boolean.'</td>
            <td>'.gettype($boolean).'</td>
        </tr>
        <tr>
            <td>'.print_r($array).'</td>
            <td>'.gettype($array).'</td>
        </tr>
    </table>
</div>';
?>
</body>
</html>