<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Mbti</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .test-kepribadian {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 7px;
        }

        .mars {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }

        .styled-button {
            display: inline-block;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            color: #000;
            background-color: #fff;
            border: 2px solid #000;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            transition: color 0.3s, background-color 0.3s;
            margin-bottom: 20px;
        }

        .styled-button::before {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 200%;
            height: 200%;
            background-color: #000;
            transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: translateX(-50%) translateY(100%);
        }

        .styled-button:hover::before {
            transform: translateX(-50%) translateY(-50%);
        }

        .styled-button:hover {
            color: #fff;
            background-color: #000;
        }

        .button-image {
            position: absolute;
            bottom: -100%;
            left: 50%;
            transform: translateX(-50%) translateY(10%);
            width: 350px;
            height: auto;
            transition: bottom 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="test-kepribadian">
        Test Kepribadian
    </div>
    <div class="mars">
        mars mbti
    </div>
    <a class="styled-button" href="http://127.0.0.1:8000/jenis/">jenis jenis kepribadian</a>
    <a class="styled-button" href="http://127.0.0.1:8000/tes/">mulai tes</a>
    <!-- You can add more buttons as needed -->
    <img class="button-image" src="{{ asset('storage/images/d2.gif')}}" alt="Gambar di bawah tombol">
</div>

<script>
    const buttons = document.querySelectorAll('.styled-button');
    const buttonImage = document.querySelector('.button-image');

    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            buttonImage.style.bottom = '0';
        });

        button.addEventListener('mouseleave', function() {
            buttonImage.style.bottom = '-50%';
        });
    });
</script>

</body>
</html>
