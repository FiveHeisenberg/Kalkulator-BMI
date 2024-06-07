<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator BMI</title>
</head>
<body>
    <div class="container">
        <h1>Kalkulator BMI</h1>
        <p>Body Mass Index atau disingkat BMI adalah salah satu cara mengetahui berat badan ideal yang diukur berdasarkan berat dan tinggi badan Anda. Dengan menghitungnya menggunakan rumus BMI, Anda bisa melihat apakah status berat badan Anda termasuk kategori normal, kurang, berlebih, atau bahkan obesitas</p>

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

        <h3>MARI HITUNG BMI ANDA</h3>
        <form action="result.php" method="POST">
            <label for="txt_bb">Berat Badan (Kg)</label><br>
            <input type="text" name="txt_bb" id="input"> <br>
            <label for="txt_tb">Tinggi Badan (m)</label> <br>
            <input type="text" name="txt_tb" id="input"> <br>
            <input type="submit" value="Hitung" id="submit">
        </form>
    </div>

    <style>

        .container {
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 5px 5px 10px #5a5a66;
            padding-bottom: 2rem;
            border-radius: 5%;
        }

        body {
            text-align: center;
            justify-content: center;
            font-family: arial;
        }

        h1 {
            text-align: center;
            background-color: #5A5A66;
            padding: 10px;
            color: #fff;
        }

        p {
            max-width: 600px;
            margin: 0 auto;
            padding: 10px;
            background-color: #48A9A6;
            font-size: 1.1rem;
            border-radius: 5px;
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

        form {
            margin-top: 20px;
            max-width: 300px;
            text-align: left;
            margin: 0 auto;
        }

        input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        #input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #submit {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #5A5A66;
            color: white;
        }

    </style>
</body>
</html>