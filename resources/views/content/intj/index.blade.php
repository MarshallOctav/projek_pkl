<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mars Mbti</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .text-box {
            background-color: #f0f0f0;
            padding: 20px;
            border: 2px solid #000000;
            border-radius: 10px;
            text-align: left;
            max-width: 800px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
        }

        .text-box h3 {
            font-size: 1.8rem;
            margin: 0;
        }

        .text-box p {
            font-size: 1.6rem;
            margin: 0;
        }

        .kelebihan-kekurangan {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .kelebihan {
            grid-column: 1 / span 1;
            grid-row: 1;
            text-align: center;
        }

        .kekurangan {
            grid-column: 2 / span 1;
            grid-row: 1;
            text-align: center;
        }

        .back-button {
            margin-top: 20px;
            background-color: #54ca98;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 1.6rem;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .back-button:hover {
            background-color: #45a984;
        }
    </style>
</head>
<body>
    <div class="rectangle">
        Test Mars mbti
    </div>
    <div class="perhatian">
        Hasil tes
    </div>

    <div class="text-box">
        <h3>Hiii tipe kepribadian kamu adalahh INTJ(Si ahli strategi)</h3>
        <p>
            INTJ adalah singkatan dari Introverted, Intuitive, Thinking, dan Judging. Sekitar 1–4% populasi dunia diperkirakan memiliki kepribadian INTJ. Orang dengan tipe kepribadian ini dikenal sebagai individu yang analitis, logis, dan kreatif. Oleh sebab itu, orang dengan kepribadian INTJ dijuluki sebagai “Si Ahli Strategi”.
        </p>
    </div>

    <div class="kelebihan-kekurangan">
        <div class="kelebihan">
            <h2>Kelebihan</h2>
            <ul>
                <li>Objektif</li>
                    <li>Logis</li>
                    <li>Rasional</li>
                    <li>Percaya diri</li>
                    <li>Pekerja keras</li>
                    <li>Pendengar yang baik</li>
                    <li>Berorientasi pada masa depan</li>
                    <li>Bisa menerima kritik dengan baik</li>
            </ul>
        </div>
        <div class="kekurangan">
            <h2>Kekurangan</h2>
            <ul>
                <li>Kaku</li>
                <li>Kurang sensitif</li>
                <li>Sangat perfeksionis</li>
                <li>Tidak suka membicarakan perasaan</li>
            </ul>
        </div>
    </div>

    <button class="back-button" onclick="location.href='/';">Kembali ke Beranda</button>

</body>
</html>
