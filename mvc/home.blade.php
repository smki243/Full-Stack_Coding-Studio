<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bucin Arab Berdarah</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: #000;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;

      /* Background darah */
      background-image: url('https://i.ibb.co/jhRgyCk/blood-splatter.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .marquee {
      position: absolute;
      white-space: nowrap;
      animation: move 18s linear infinite;
    }

    .text {
      display: inline-block;
      font-size: 32px;
      color: #ff1c1c;
      font-family: 'Courier New', monospace;
      text-shadow:
        0 0 5px #ff0000,
        0 0 10px #ff0000,
        0 0 15px #ff0000,
        0 0 20px #ff0000;
      animation: wave 2s ease-in-out infinite;
    }

    @keyframes move {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    @keyframes wave {
      0%   { transform: translateY(0px); }
      25%  { transform: translateY(-5px); }
      50%  { transform: translateY(0px); }
      75%  { transform: translateY(5px); }
      100% { transform: translateY(0px); }
    }
  </style>
</head>
<body>
  <div class="marquee">
    <div class="text">
      أَنْNAKAL BOLEH TOLOL JANGAN 🩸
    </div>
  </div>
</body>
</html>
