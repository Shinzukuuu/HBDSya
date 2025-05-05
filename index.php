<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBD Syaa Sayang <3 </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .slide-container {
            width: 80%;
            height: 80%;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            border: 5px solid purple;
            position: relative;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .slide-container img {
            max-width: 50%;
            max-height: 50%;
            margin-bottom: 20px;
            object-fit: contain;
        }

        .slide-container h1 {
            margin: 0;
            font-size: 1.5rem;
            color: purple;
        }

        .slide-container h1 span {
            display: inline-block;
            text-align: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .next-button {
            background-color: purple;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Animation for slide-in effect */
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slide-in {
            animation: slideInFromLeft 0.5s ease-out;
        }

        .slide-container p {
            color: purple;
        }
    </style>
</head>
<body>
    <audio id="bgm" loop>
        <source src="BGM.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="slide-container">
        <img id="slide-image" src="" alt="Slide Image">
        <h1 id="slide-text"></h1>
        <button class="next-button" onclick="nextSlide()">Mwah 💕</button>
        <p>From Your Love One EL 💖 </p>
    </div>

    <script>
        // Define slide data
        const slides = [
            {
                image: 'slide0.png',
                text: 'Naikin volume hp ato laptop kamu 🔊 dan Tekan tombol yang ada di bawah 👇 ya sayang Mwah <3'
            },
            {
                image: 'slide1.jpg',
                text: 'Cie ada yang ulang tahun nih yeee 🎉, selamat makin tua ya sayang 😘 maap aku cuman bisa ngasih kamu hadiah kecil ini 😅'
            },
            {
                image: 'slide2.jpg',
                text: 'Semoga di umur yang sekarang ini kamu bisa menjadi pribadi yang lebih baik 😊👍'
            },
            {
                image: 'slide3.jpg',
                text: 'Semoga kamu selalu diberi kesehatan, kebahagiaan, dan keberkahan di setiap langkah yang kamu ambil 😋'
            },
            {
                image: 'slide4.jpg',
                text: 'Ga terasa ya kita udah bareng berapa lama ini 🥲 dan aku berkesempatan untuk bisa ngerayain ulang tahun kamu tahun ini!! 🎂'
            },
            {
                image: 'slide5.jpg',
                text: 'Aku bersyukur banget bisa kenal sama kamu dan aku bahagia banget bisa jadi bagian dari hidup kamu😙'
            },
            {
                image: 'slide6.jpg',
                text: 'Di ulang tahun kamu yang ke 19 tahun ini, aku mau agar kamu bisa bahagia selalu dan selalu bisa menjadi bagian penting dari hidup semua orang 🤗'
            },
            {
                image: 'slide7.jpg',
                text: 'Happy Birthday Raisya Sayangku 💕'
            }
        ];

        // Current slide index
        let currentSlide = 0;
        let isAudioPlaying = false;

        // Function to play BGM after user interaction
        function playBGM() {
            const bgm = document.getElementById('bgm');
            if (!isAudioPlaying) {
                bgm.play().catch(error => {
                    console.error('Failed to play audio:', error);
                });
                isAudioPlaying = true;
            }
        }

        // Function to update the slide content
        function updateSlide() {
            const slide = slides[currentSlide];

            const slideImage = document.getElementById('slide-image');
            const slideText = document.getElementById('slide-text');

            // Add animation class
            slideImage.classList.add('animate-slide-in');
            slideText.classList.add('animate-slide-in');

            // Update the slide content
            slideImage.src = slide.image;

            const words = slide.text.split(' ');
            const chunkSize = 6; // Number of words per line
            let formattedText = '';
            for (let i = 0; i < words.length; i += chunkSize) {
                formattedText += `<span>${words.slice(i, i + chunkSize).join(' ')}</span><br>`;
            }
            slideText.innerHTML = formattedText;

            // Remove animation class after animation ends
            setTimeout(() => {
                slideImage.classList.remove('animate-slide-in');
                slideText.classList.remove('animate-slide-in');
            }, 500); // Match the animation duration
        }

        // Function to go to the next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length; // Loop back to first slide
            updateSlide();
            playBGM(); // Play BGM when the user interacts
        }

        // Initialize the first slide
        updateSlide();
    </script>
</body>
</html> 