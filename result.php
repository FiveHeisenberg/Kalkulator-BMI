<?php

    $bb = $_POST["txt_bb"];
    $tb = $_POST["txt_tb"];
    $bmi = number_format($bb / ($tb * $tb), 1);

    if ($bmi < 16.9) {
        $hasil = "Berat Badan Sangat Kurang";
        $result = "Anda Sangat Kekurangan Berat Banda";
    } elseif ($bmi >= 17.0 && $bmi <= 18.4) {
        $hasil = "Berat Badan Kurang";
        $result = "Anda Kekurangan Berat Badan";
    } elseif ($bmi >= 18.5 && $bmi <= 22.9) {
        $hasil = "Berat Badan Normal";
        $result = "Anda Memiliki Berat Badan Ideal<br>". "Mantap!";
    } elseif ($bmi >= 23.0 && $bmi <= 25.0) {
        $hasil = "Berat Badan Gemuk (Overweight)";
        $result = "Anda Memiliki Berat Badan Berlebih";
    } elseif ($bmi > 25.0) {
        $hasil = "Obesitas";
        $result = "Anda Berada Dalam Kategori Obesitas <br>". "Diet Sekarang!";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator BMI</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Kalkulator BMI</h1>
            <table border="1">
                <thead>
                    <tr>
                        <td>Nilai BMI</td>
                        <td>Kategori</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>< 16.9</td>
                        <td>Sangat Kurus</td>
                    </tr>
                    <tr>
                        <td>17.0 - 18.4</td>
                        <td>Kurus</td>
                    </tr>
                    <tr>
                        <td>18.5 - 22.9</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>23.0 - 25.0</td>
                        <td>Gemuk (Overweight)</td>
                    </tr>
                    <tr>
                        <td>> 25.0</td>
                        <td>Gemuk (Obesitas)</td>
                    </tr>
                </tbody>
            </table>
            <small>*Data Dari Kemenkes 2014</small>
        </div>

        <div class="result">
            <h3>Hasil</h3>
            <h4><?php echo $hasil; ?></h4>
            <h2><?php echo $bmi;?></h2>
            <p><?php echo $result?></p>
        </div>

        <div class="credit">
            <h6>Reyza Maulana Putra / 2023573010052 / TI.1D</h6>
        </div>
    </div>

    <style>

        .container {
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 5px 5px 10px #5a5a66;
            border-radius: 5%;
        }

        .content {
            text-align: center;
            justify-content: center;
        }

        body {
            font-family: arial;
        }

        h1 {
            text-align: center;
            background-color: #5A5A66;
            padding: 10px;
            color: #fff;
        }

        table {
            border-collapse: collapse; 
            width: 80%;
            max-width: 600px;
            margin: 1rem auto;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        thead {
            background-color: #E1BB80;
        }

        body small {
            text-align: left;
            display: block;
            margin-left: 60px;
            box-sizing: border-box;
        }

        h3 {
            text-align: left;
            padding-left: 1rem;
        }

        .result {
            text-align: center;
            background-color: #48A9A6;
            padding: 1rem;
            border-radius: 2rem;
            max-width: 500px;
            margin: 1px auto;
            margin-top: 2rem;
            padding-bottom: 3rem;
        }

        .credit {
            margin-top: 5rem;
            text-align: center;
            padding: .01px;
            background-color: #e9e2ec;
            border-radius: 5rem;
        }
    </style>
</body>
</html>