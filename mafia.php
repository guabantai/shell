<!DOCTYPE html>
<html lang="en">
<head><title>Hacked By Raizo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)),
                        url('https://wallpapers.com/images/high/pablo-escobar-smoking-a-cigarette-yrg10di95odrgzll.webp') no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
            color: #fff;
            text-align: center;
            position: relative;
        }
 
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            animation: fadeIn 1.5s ease-out;
            z-index: 10;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 0 0 10px #fff, 0 0 20px #ff0000, 0 0 30px #ff0000;
            animation: glow 2s infinite alternate, bounce 2s infinite;
        }

        p {
            font-size: 1.2rem;
        }

        .timer {
            font-size: 2rem;
            font-weight: 600;
            background: rgba(31, 27, 27, 0.2);
            padding: 15px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: slideDown 1s ease-out;
        }

        .rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .raindrop {
            position: absolute;
            top: -10px;
            width: 2px;
            height: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            animation: fall 2s linear infinite;
            opacity: 0.6;
        }

        @keyframes fall {
            0% {
                transform: translateY(0);
                opacity: 0.6;
            }
            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="rain"></div>

    <div class="container">
    <h1>Raizo Was Here</h1>
    <p><br><i>Saya Tidak Ingin Menjadi Baik, Saya Akan Menjadi Hebat</i></p>
    <p><a href="https://t.me/skkteam2025" target="_blank">JOIN SKK GRUP</a></p>
    <marquee>
              <font size="3">
                 No One Can Stop The Nature 
        </marquee>
    <div class="timer" id="countdown"></div>
</div> 
    <audio id="bgMusic" autoplay loop>
        <source src="https://d.top4top.io/m_34758hcdl1.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung elemen audio.
    </audio>
    <button onclick="playAudio()">Listen</button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let audio = document.getElementById("bgMusic");
            let playPromise = audio.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    console.log("Autoplay diblokir, tombol Play ditampilkan.");
                });
            }
        });

        function playAudio() {
            let audio = document.getElementById("bgMusic");
            audio.play();
        }

        const countdownElement = document.getElementById('countdown');
        const targetDate = new Date('2025-01-15T00:00:00').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = targetDate - now;

            if (timeLeft <= 0) {
                countdownElement.textContent = "SKK TEAM";
                clearInterval(interval);
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            countdownElement.textContent = `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;
        }

        const interval = setInterval(updateCountdown, 1000);
        updateCountdown();

        // Tambahkan efek hujan kembali
        const rainContainer = document.querySelector('.rain');
        const numRaindrops = 150;

        for (let i = 0; i < numRaindrops; i++) {
            const raindrop = document.createElement('div');
            raindrop.classList.add('raindrop');
            raindrop.style.left = `${Math.random() * 100}vw`;
            raindrop.style.animationDuration = `${Math.random() * 1 + 1}s`;
            rainContainer.appendChild(raindrop);
        }
    </script>
</body>
</html>
