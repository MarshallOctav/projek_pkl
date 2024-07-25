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

        .cards-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .card {
            width: 30%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px; /* Menambahkan margin antar kartu */
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .card:nth-child(1) {
            transition-delay: 0.2s; /* Menunda animasi kartu pertama */
        }

        .card:nth-child(2) {
            transition-delay: 0.4s; /* Menunda animasi kartu kedua */
        }

        .card:nth-child(3) {
            transition-delay: 0.6s; /* Menunda animasi kartu ketiga */
        }

        .cards-container:hover .card {
            transform: translateX(0);
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-content {
            padding: 20px;
            text-align: center; /* Pusatkan teks dalam konten kartu */
        }

        .card h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
        }

        .card-content img {
            max-width: 40%;
            max-height: 40%;
            display: block;
            margin: 0 auto;
        }

        .total {
            color: #000000;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #54ca98;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease;
        }

        .back-to-top:hover {
            background-color: #3f9f72;
        }

        .pertanyaan {
            color: #1c1c1c;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .question {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center; /* Pusatkan teks dalam konten pertanyaan */
        }

        .question p {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .radio-options {
            display: flex;
            flex-direction: column;
            align-items: center; /* Pusatkan opsi radio secara vertikal */
        }

        .radio-option {
            margin-bottom: 10px;
            text-align: left; /* Pusatkan teks label ke kiri */
        }

        .radio-option input[type="radio"] {
            margin-right: 10px;
        }

        .radio-option label {
            font-size: 1rem;
            color: #666;
        }

        .custom-btn {
            display: inline-block;
            background-color: #54ca98;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            border: none;
        }

        .custom-btn:hover {
            background-color: #3f9f72;
        }

    </style>
</head>
<body>

<div class="rectangle">
    Test Mars mbti
</div>

<div class="perhatian">
    baca terlebih dahulu!
</div>

<main>
    <div class="cards-container">
        <div class="card">
            <div class="card-content">
                <img src="https://vignette.wikia.nocookie.net/dumbway2sdie/images/9/94/Knucklehead.png/revision/latest?cb=20141224174518" alt="">
                <h2>Tidak ada jawaban yang salah.</h2>
                <p>Jangan takut salah dalam memilih jawaban dari quiz ini. Tidak ada jawaban yang salah ataupun benar dalam quiz ini.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="https://vignette.wikia.nocookie.net/dumbway2sdie/images/8/8a/Stupa.png/revision/latest?cb=20180407160429" alt="">
                <h2>Jujurlah dengan dirimu sendiri.</h2>
                <p>Jangan membohongi dirimu sendiri dalam mengisi quiz ini. Tidak ada untungnya berbohong dalam mengisi quiz ini.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="https://vignette.wikia.nocookie.net/dumbway2sdie/images/e/e6/Botch_(DWtD3).png/revision/latest?cb=20180225120628" alt="">
                <h2>Pikirkan baik-baik jawabanmu.</h2>
                <p>Tidak perlu terburu-buru. Ambil waktu sejenak untuk memikirkan jawabanmu baik-baik. Hanya 8 pertanyaan kok.</p>
            </div>
        </div>
    </div>
<br>
    <div class="total">
        total pertanyaan : 8
    </div>
    <hr>

    <form id="mbtiForm">
        <div class="question">
            <h3>Pertanyaan ke-1:</h3>
            <p>Ketika mengerjakan tugas sekolah, apakah Anda lebih suka:</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q1a" name="q1" value="J">
                    <label for="q1a">a) Merencanakan segala sesuatu dengan rinci sebelum mulai bekerja</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q1b" name="q1" value="P">
                    <label for="q1b">b) Mulai mengerjakan tugas dan menyesuaikan rencana seiring berjalannya waktu</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="question">
            <h3>Pertanyaan ke-2:</h3>
            <p>Ketika membuat keputusan, Anda lebih dipengaruhi oleh:</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q2a" name="q2" value="T">
                    <label for="q2a">a) Logika dan pemikiran rasional</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q2b" name="q2" value="F">
                    <label for="q2b">b) Perasaan dan dampak keputusan pada orang lain</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="question">
            <h3>Pertanyaan ke-3:</h3>
            <p>Saat menghadapi masalah di sekolah, apakah Anda cenderung:</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q3a" name="q3" value="S">
                    <label for="q3a">a) Mengandalkan fakta dan detail yang konkret</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q3b" name="q3" value="N">
                    <label for="q3b">b) Melihat gambaran besar dan mencari berbagai kemungkinan</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 4 -->
        <div class="question">
            <h3>Pertanyaan ke-4:</h3>
            <p>Dalam berinteraksi dengan teman-teman, apakah Anda lebih:</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q4a" name="q4" value="E">
                    <label for="q4a">a) Energik dan banyak bicara</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q4b" name="q4" value="I">
                    <label for="q4b">b) Tenang dan lebih suka mendengarkan</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 5 -->
        <div class="question">
            <h3>Pertanyaan ke-5:</h3>
            <p>Ketika bekerja dalam kelompok di sekolah, bagaimana Anda berkontribusi?</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q5a" name="q5" value="J">
                    <label for="q5a">a) Saya suka mengatur dan memimpin kelompok</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q5b" name="q5" value="P">
                    <label for="q5b">b) Saya suka bekerja sama dan berdiskusi dengan teman-teman</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 6 -->
        <div class="question">
            <h3>Pertanyaan ke-6:</h3>
            <p>Bagaimana cara belajar yang paling cocok untuk Anda?</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q6a" name="q6" value="S">
                    <label for="q6a">a) Saya lebih suka belajar dengan langkah-langkah yang terstruktur</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q6b" name="q6" value="N">
                    <label for="q6b">b) Saya lebih suka bereksplorasi dan belajar dari berbagai sumber</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 7 -->
        <div class="question">
            <h3>Pertanyaan ke-7:</h3>
            <p>Bagaimana Anda mengelola stres dari tugas sekolah?</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q7a" name="q7" value="T">
                    <label for="q7a">a) Saya cenderung menghadapi masalah langsung dan mencari solusi</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q7b" name="q7" value="F">
                    <label for="q7b">b) Saya cenderung mencari dukungan dari teman dan keluarga</label>
                </div>
            </div>
        </div>

        <!-- Pertanyaan 8 -->
        <div class="question">
            <h3>Pertanyaan ke-8:</h3>
            <p>Apa yang paling Anda cari dalam kegiatan ekstrakurikuler?</p>
            <div class="radio-options">
                <div class="radio-option">
                    <input type="radio" id="q8a" name="q8" value="E">
                    <label for="q8a">a) Kesempatan untuk berkomunikasi dan berinteraksi dengan banyak orang</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q8b" name="q8" value="I">
                    <label for="q8b">b) Keterlibatan dalam pemecahan masalah yang kompleks</label>
                </div>
            </div>
        </div>

        <!-- Button Submit -->
        <center>
        <button type="submit" form="mbtiForm" class="custom-btn btn-5">Kirim</button>
    </center>
    </form>
</main>

<a href="#" class="back-to-top">Kembali ke atas</a>

<script>
    document.getElementById('mbtiForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Retrieve selected answers
        let answers = {
            'E': 0,
            'I': 0,
            'S': 0,
            'N': 0,
            'T': 0,
            'F': 0,
            'J': 0,
            'P': 0
        };

        answers[document.querySelector('input[name="q1"]:checked').value]++;
        answers[document.querySelector('input[name="q2"]:checked').value]++;
        answers[document.querySelector('input[name="q3"]:checked').value]++;
        answers[document.querySelector('input[name="q4"]:checked').value]++;
        answers[document.querySelector('input[name="q5"]:checked').value]++;
        answers[document.querySelector('input[name="q6"]:checked').value]++;
        answers[document.querySelector('input[name="q7"]:checked').value]++;
        answers[document.querySelector('input[name="q8"]:checked').value]++;

        let mbtiType = '';
        mbtiType += (answers['E'] > answers['I']) ? 'E' : 'I';
        mbtiType += (answers['S'] > answers['N']) ? 'S' : 'N';
        mbtiType += (answers['T'] > answers['F']) ? 'T' : 'F';
        mbtiType += (answers['J'] > answers['P']) ? 'J' : 'P';

        // Redirect based on MBTI type
        switch (mbtiType) {
            case 'INTJ':
                window.location.href = '{{route('intj.index')}}';
                break;
            case 'INTP':
                window.location.href = '{{route('intp.index')}}';
                break;
            case 'ENTJ':
                window.location.href = '{{route('entj.index')}}';
                break;
            case 'ENTP':
                window.location.href = '{{route('entp.index')}}';
                break;
            case 'INFJ':
                window.location.href = '{{route('infj.index')}}';
                break;
            case 'INFP':
                window.location.href = '{{route('infp.index')}}';
                break;
            case 'ENFJ':
                window.location.href = '{{route('enfj.index')}}';
                break;
            case 'ENFP':
                window.location.href = '{{route('enfp.index')}}';
                break;
            case 'ISTJ':
                window.location.href = '{{route('istj.index')}}';
                break;
            case 'ISFJ':
                window.location.href = '{{route('isfj.index')}}';
                break;
            case 'ESTJ':
                window.location.href = '{{route('estj.index')}}';
                break;
            case 'ESFJ':
                window.location.href = '{{route('esfj.index')}}';
                break;
            case 'ISTP':
                window.location.href = '{{route('istp.index')}}';
                break;
            case 'ISFP':
                window.location.href = '{{route('isfp.index')}}';
                break;
            case 'ESTP':
                window.location.href = '{{route('estp.index')}}';
                break;
            case 'ESFP':
                window.location.href = '{{route('esfp.index')}}';
                break;
        }
    });
</script>

</body>
</html>
