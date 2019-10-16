<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Battambang&display=swap" rel="stylesheet">
    <title>Array</title>
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
$person = [
    'name'=>'ទុន ចំរ៉ើន',
    'dob'=>'១០ មករា ១៩៩៩',
    'sex'=>'ប្រុស',
    'generation'=>'១០',
    'major'=>'ពត៌មានវិទ្យា',
    'pob'=>'ភូមិស្វាយជ្រំុ ឃុំសំរោង ស្រុកសូទ្រនិគម ខេត្តសៀមរាប',
    'cur_addr'=>'ភូមិបាណយ សង្កាត់ទឹកថ្លា ក្រុងសិរីសោភ័ណ ខេត្តបន្ទាយមានជ័យ',
];
echo '<div class="box">
    <h3 class="text-center">
        ពត៌មានរបស់ខ្ញុំជា Array
    </h3>
    <table>
        <tr>
            <td class="tb-head">ឈ្មោះ</td>
            <td> :'.$person['name'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ថ្ងៃខែឆ្នាំកំណើត</td>
            <td> :'.$person['dob'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ភេទ</td>
            <td> :'.$person['sex'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ជំនាន់</td>
            <td> :'.$person['generation'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ជំនាញ</td>
            <td> :'.$person['major'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ទីកន្លែងកំណើត</td>
            <td> :'.$person['pob'].'</td>
        </tr>
        <tr>
            <td class="tb-head">ទីកលំនៅបច្ចុប្បន្ន</td>
            <td> :'.$person['cur_addr'].'</td>
        </tr>
    </table>
</div>';
?>
</body>
</html>