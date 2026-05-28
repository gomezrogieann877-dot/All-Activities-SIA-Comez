<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diet Page</title>
    <style>
        body {
            background-color: #ffe6f0;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ffb6c1;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .banner {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .banner img {
            width: 60px;
            height: 60px;
        }
        .form-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: inline-block;
            padding: 20px 40px;
        }
        select, button {
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin: 10px;
        }
        button {
            background-color: #ff6699;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff3366;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <header>Diet Recommendation</header>

    <div class="banner">
        <img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" alt="Broccoli">
        <img src="https://cdn-icons-png.flaticon.com/512/415/415734.png" alt="Avocado">
        <img src="https://cdn-icons-png.flaticon.com/512/415/415735.png" alt="Salmon">
        <img src="https://cdn-icons-png.flaticon.com/512/415/415736.png" alt="Carrot">
    </div>

   <form action="{{ route('diet.recommend') }}" method="POST">
        @csrf
        <label for="goal">Your Goal:</label>
        <select name="goal" id="goal">
            <option value="weightloss" {{ isset($goal) && $goal == 'weightloss' ? 'selected' : '' }}>Weight Loss</option>
            <option value="muscle" {{ isset($goal) && $goal == 'muscle' ? 'selected' : '' }}>Muscle Gain</option>
            <option value="balanced" {{ isset($goal) && $goal == 'balanced' ? 'selected' : '' }}>Balanced Diet</option>
        </select>
        <button type="submit">Get Diet</button>
    </form>

    @if(isset($diet))
        <div class="result">
            <p><strong>Recommended Diet:</strong> {{ $diet }}</p>
        </div>
    @endif
</body>
</html>
