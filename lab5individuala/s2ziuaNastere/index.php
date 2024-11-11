<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Countdown to Birthday</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
</head>
<body>
<audio src="./sources/song2.mp3" id="audio"></audio>
<div class="info">
    <p id="announcement"><?php echo getBirthdayMessage(); ?></p>
    <p id="time"><?php echo getTimeUntilBirthday(); ?></p>
    <p id="age"></p>
</div>
<button id="button" class="shake" onclick="displayBirthdayMessage()">
    <img src="./sources/gift.png" alt="gift" id="img">
</button>
<script>
    function displayBirthdayMessage() {
        <?php if (isBirthdayToday()) : ?>
        const announcement = document.getElementById('announcement');
        announcement.innerText = 'La mulți ani!';
        announcement.style.fontFamily = "CandyLove";
        announcement.style.fontSize = "80px";
        announcement.style.marginTop = "20px";
        document.getElementById('age').innerText = 'Felicitări! Ai împlinit <?php echo getAge(); ?> ani!';
        document.getElementById('audio').play();

        const defaults = {
            spread: 360,
            gravity: 0,
            decay: 0.94,
            startVelocity: 30,
            shapes: ["heart"],
            colors: ["FFC0CB", "FF69B4", "FF1493", "C71585"],
        };
        confetti({ ...defaults, particleCount: 50, scalar: 7 });
        confetti({ ...defaults, particleCount: 25, scalar: 3 });
        <?php endif; ?>
    }
</script>
</body>
</html>

<?php
function getBirthdayMessage() {
    if (isBirthdayToday()) {
        return "La mulți ani!";
    }
    return "Până la ziua ta mai sunt:";
}

function getTimeUntilBirthday() {
    $birthDate = new DateTime('2005-11-06 23:00:00');
    $currentDate = new DateTime();
    $birthDate->setDate((int)$currentDate->format('Y'), $birthDate->format('m'), $birthDate->format('d'));

    if ($currentDate > $birthDate) {
        $birthDate->modify('+1 year');
    }

    $interval = $currentDate->diff($birthDate);
    return "{$interval->days} zile, {$interval->h} ore, {$interval->i} minute, {$interval->s} secunde.";
}

function isBirthdayToday() {
    $birthDate = new DateTime('2005-11-06');
    $currentDate = new DateTime();
    return $birthDate->format('m-d') === $currentDate->format('m-d');
}

function getAge() {
    $birthDate = new DateTime('2005-03-26');
    $currentDate = new DateTime();
    return $currentDate->diff($birthDate)->y;
}
?>
