<?php
// default.php – coming soon (multi-language)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Coming Soon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                 Roboto, Helvetica, Arial, sans-serif;
    color: #111;
  }

  #text {
    font-size: clamp(2.5rem, 6vw, 4rem);
    font-weight: 600;
    letter-spacing: -0.02em;
    opacity: 0;
    transform: translateY(12px);
    animation: fadeUp 0.8s ease forwards;
    text-align: center;
  }

  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(12px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .fade {
    animation: fadeUp 0.6s ease forwards;
  }
</style>
</head>

<body>

<div id="text">Coming Soon</div>

<script>
  const phrases = [
    "Coming Soon",
    "قريباً",
    "Próximamente",
    "Bientôt disponible",
    "Prossimamente",
    "Kommt bald",
    "近日公開",
    "곧 공개",
    "Em breve",
    "Скоро"
  ];

  const textEl = document.getElementById("text");
  let index = 0;

  setInterval(() => {
    textEl.style.opacity = 0;
    textEl.style.transform = "translateY(12px)";

    setTimeout(() => {
      index = (index + 1) % phrases.length;
      textEl.textContent = phrases[index];
      textEl.classList.remove("fade");
      void textEl.offsetWidth; // restart animation
      textEl.classList.add("fade");
    }, 3000);
  }, 2200);
</script>

</body>
</html>
