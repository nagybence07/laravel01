<!DOCTYPE html>
<html lang="hu">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        article{
            width: clamp(200px, 50%, 600px);
        }

        .container{
            width: 100%;
            height: 100vh;
            background: linear-gradient(245.59deg, #2590a2 0%, #4768b5 28.53%, #1d4a6e 75.52%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            background-color: azure;
            display: flex;
            flex-direction: column;
            padding: 2vw 4vw;
            width: 90%;
            max-width: 600px;
            border-radius: 30px;
        }

        form h3{
            color: black;
            font-weight: 800;
            margin-bottom: 20px;
        }

        form input, form textarea{
            border: 0;
            margin: 10px 0;
            padding: 20px;
            outline: none;
            background:whitesmoke;
            font-size: 18px;
            resize: none;
        }
        form button{
            padding: 15px;
            border-radius: 25px;
            background: tomato;
            font-size: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            width: 150px;
            margin: 20px auto 0;
        }


        @media (max-width: 584px){
            form{
                max-width: 100%;
            }
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Kapcsolat</title>
</head>
<body>
<div class="container">
    <form>
        <h3>Feliratkozom a weblap!</h3>
        <input type="text" id="name" placeholder="Neved" required>
        <input type="email" id="email" placeholder="Email cimed" required>
        <p><a href="{{asset('main') }}">Feliratkozás a hírlevélre!</a></p>
        <p><a href="{{asset('main') }}">Vissza a főoldalra!</a></p>
    </form>
</div>
</body>
</html>
