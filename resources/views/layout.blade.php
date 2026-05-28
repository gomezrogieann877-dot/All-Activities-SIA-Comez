<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MindfulBite Diet Advisor</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            color: #333;
        }

        header {
            background: rgba(255,255,255,0.9);
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        header h1 {
            margin: 0;
            color: #ff6f91;
            font-size: 2.5em;
            text-shadow: 1px 1px 2px #fff;
        }

        main {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255,255,255,0.95);
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        select, button {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border-radius: 12px;
            border: 1px solid #ddd;
            font-size: 1em;
            transition: 0.3s;
        }

        select:focus, button:focus {
            outline: none;
            border-color: #ff6f91;
        }

        button {
            background: #ff6f91;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #ff4b6e;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .diet-card {
            background: #fff3f3;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            font-size: 1.2em;
            color: #ff4b6e;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            color: #fff;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <header>
        <h1>MindfulBite Diet Advisor</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 MindfulBite
    </footer>
</body>
</html>