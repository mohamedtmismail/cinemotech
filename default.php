<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Soon</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background-color: #F4F5FF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'DM Sans', sans-serif;
        }

        .container {
            text-align: center;
            padding: 24px;
            max-width: 520px;
            width: 100%;
        }

        h1 {
            font-size: 36px;
            font-weight: 700;
            color: #36344D;
            margin-bottom: 16px;
            min-height: 44px;
            animation: fade 2.5s ease-in-out infinite;
        }

        p {
            font-size: 16px;
            color: #727586;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        .divider {
            width: 60px;
            height: 4px;
            background-color: #673DE6;
            margin: 0 auto 32px;
            border-radius: 2px;
        }

        form {
            display: flex;
            gap: 12px;
            flex-direction: column;
        }

        input[type="email"] {
            padding: 14px 16px;
            border-radius: 8px;
            border: 1px solid #D6D8F0;
            font-size: 15px;
            outline: none;
        }

        input[type="email"]:focus {
            border-color: #673DE6;
        }

        button {
            padding: 14px 16px;
            border-radius: 8px;
            border: none;
            background-color: #673DE6;
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background-color: #5a33d6;
        }

        @keyframes fade {
            0% { opacity: 0; }
            20% { opacity: 1; }
            80% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 id="hello-text">Coming Soon</h1>

        <p>
            We’re building something meaningful.  
            Leave your email and be the first to know.
        </p>

        <div class="divider"></div>

        <form method="POST" action="#">
            <!-- Replace action with your backend endpoint -->
            <input type="email" name="email" placeholder="Your email address" required />
            <button type="submit">Notify Me</button>
        </form>
    </div>

    <script>
        const texts = [
            "Coming Soon",
            "قريبًا",
            "Bientôt disponible",
            "Próximamente",
            "Demnächst"
        ];

        let index = 0;
        const el = document.getElementById("hello-text");

        setInterval(() => {
            index = (index + 1) % texts.length;
            el.textContent = texts[index];
        }, 2500);
    </script>
</body>
</html>
