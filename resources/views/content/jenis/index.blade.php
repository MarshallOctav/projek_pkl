<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jenis Jenis Kepribadian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* menggunakan min-height untuk mengatasi viewport kecil */
        }

        .rectangle {
            width: 100%;
            height: 100px;
            background-color: #54ca98;
            color: #ffffff;
            text-align: center;
            line-height: 100px;
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 0px;
        }

        .perhatian {
            width: 100%;
            height: 80px;
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            line-height: 80px; /* Mengubah line-height agar sesuai dengan tinggi */
            font-size: 1rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Mengatur 4 kolom dengan lebar yang sama */
            gap: 20px;
            max-width: 800px; /* Maksimum lebar kontainer */
            margin: 0 auto;
        }

        .box {
            height: 150px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.2s ease;
            position: relative; /* Menambahkan posisi relatif untuk overlay */
            margin-bottom: 20px; /* Menambahkan margin bawah agar tidak terlalu rapat */
        }

        .box:hover {
            transform: translateY(-5px); /* Efek sedikit naik saat dihover */
            box-shadow: 0 8px 12px rgba(0,0,0,0.2);
        }

        .box-content {
            padding: 20px;
            text-align: center;
        }

        .box h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .box p {
            font-size: 1rem;
            color: #666;
        }

        .box a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }

        @media (max-width: 1000px) {
            .container {
                grid-template-columns: repeat(2, 1fr); /* Mengubah menjadi 2 kolom per baris pada layar yang lebih kecil */
            }
        }

        @media (max-width: 600px) {
            .container {
                grid-template-columns: 1fr; /* Mengubah menjadi satu kolom pada layar yang sangat kecil */
            }

            .box {
                width: calc(100% - 20px); /* 100% lebar satu kotak pada layar sangat kecil */
                flex: 1 0 100%;
            }
        }
    </style>
</head>
<body>

    <div class="rectangle">
        Test Mars mbti
    </div>

    <div class="perhatian">
       Jenis Jenis Kepribadian
    </div>

    <div class="container">
        <!-- Kotak 1 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/entp/">
                <div class="box-content">
                    <h3>ENTP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 2 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/enfp/">
                <div class="box-content">
                    <h3>ENFP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 3 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/entj/">
                <div class="box-content">
                    <h3>ENTJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 4 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/enfj/">
                <div class="box-content">
                    <h3>ENFJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 5 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/intp/">
                <div class="box-content">
                    <h3>INTP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 6 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/infp/">
                <div class="box-content">
                    <h3>INFP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 7 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/intj/">
                <div class="box-content">
                    <h3>INTJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 8 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/infj/">
                <div class="box-content">
                    <h3>INFJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 9 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/estp/">
                <div class="box-content">
                    <h3>ESTP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 10 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/esfp/">
                <div class="box-content">
                    <h3>ESFP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 11 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/estj/">
                <div class="box-content">
                    <h3>ESTJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 12 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/isfj/">
                <div class="box-content">
                    <h3>ISFJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 13 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/istp/">
                <div class="box-content">
                    <h3>ISTP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 14 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/isfp/">
                <div class="box-content">
                    <h3>ISFP</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 15 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/istj/">
                <div class="box-content">
                    <h3>ISTJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>

        <!-- Kotak 16 -->
        <div class="box">
            <a href="http://127.0.0.1:8000/isfj/">
                <div class="box-content">
                    <h3>ISFJ</h3>
                    <p>Klik Untuk Detailnya</p>
                </div>
            </a>
        </div>
    </div>

</body>
</html>
