<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kustunmu</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background-color: #6973f7;
            background-image: url("askim.png");
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            text-align: center;
        }

        #question {
            font-size: 50px;
            color: white;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        #btn-yes {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.2s ease;
        }

        #btn-no {
            background-color: #ff0800;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>


    <h1 id="question">Küstün mü?</h1>
    
    <div class="container" id="main-container">

        <button id="btn-yes" onclick="kutlamaYap()">Hayır tabiki aşkım</button>
   
        <button id="btn-no" onclick="boyutuArtir()">Evet :(</button>
    </div>

    <script>
        let fontBoyutu = 18;
        let dikeyBosluk = 15;
        let yatayBosluk = 30;

     
        function boyutuArtir() {
            const yesButton = document.getElementById('btn-yes');
            fontBoyutu += 20;
            dikeyBosluk += 15;
            yatayBosluk += 25;

            yesButton.style.fontSize = fontBoyutu + "px";
            yesButton.style.padding = dikeyBosluk + "px " + yatayBosluk + "px";
        }

   
        function kutlamaYap() {
  
            document.getElementById('question').innerHTML = "Yaşasın! ❤️";
            
            document.getElementById('main-container').style.display = "none";
        }
    </script>

</body>
</html>
