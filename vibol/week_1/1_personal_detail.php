<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Battambang&display=swap" rel="stylesheet">
    <title>Personal Detail</title>
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
        .text-center{
            text-align: center;
            text-decoration: underline;
            color: teal;
            font-weight: bold;
        }
        .tb-head{
            font-weight: bold; padding-right: 10px
        }
    </style>
</head>
<body>
<?
echo '<div class="box">
    <h3 class="text-center">
        ពត៌មានរបស់ខ្ញុំ
    </h3>
    <table>
        <tr>
            <td class="tb-head">ឈ្មោះ</td>
            <td> :ទុន ចំរ៉ើន</td>
        </tr>
        <tr>
            <td class="tb-head">ថ្ងៃខែឆ្នាំកំណើត</td>
            <td> :១០ មករា ១៩៩៩</td>
        </tr>
        <tr>
            <td class="tb-head">ភេទ</td>
            <td> :ប្រុស</td>
        </tr>
        <tr>
            <td class="tb-head">ជំនាន់</td>
            <td> :១០</td>
        </tr>
        <tr>
            <td class="tb-head">ជំនាញ</td>
            <td> :ពត៌មានវិទ្យា</td>
        </tr>
        <tr>
            <td class="tb-head">ទីកន្លែងកំណើត</td>
            <td> :ភូមិស្វាយជ្រំុ ឃុំសំរោង ស្រុកសូទ្រនិគម ខេត្តសៀមរាប</td>
        </tr>
        <tr>
            <td class="tb-head">ទីកលំនៅបច្ចុប្បន្ន</td>
            <td> :ភូមិបាណយ សង្កាត់ទឹកថ្លា ក្រុងសិរីសោភ័ណ ខេត្តបន្ទាយមានជ័យ</td>
        </tr>
    </table>
</div>';
?>
</body>
</html>