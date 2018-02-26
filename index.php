<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Quote</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php
        $randomNumber = rand(0, 7);
        $backgrounds = ["arch.jpg", "bridge.jpg", "city.jpg", "hotel.jpg", "house.jpg", "luxury.jpg", "night.jpg", "sea.jpg"];
        $quotes = [
            ["name" => "annonymous", "text" => "When all you have is God, you have all you need. "],
            ["name" => "annonymous", "text" => "He is no fool who gives what he cannot keep, to gain what he cannot lose"],
            ["name" => "annonymous", "text" => "Our greatest fear should not be of failure but of succeeding at things in life that don’t really matter."],
            ["name" => "Anto", "text" => "Your perception of rality determines your experience it"],
            ["name" => "Me", "text" => "Your perception of rality determines your experience it"],
            ["name" => "Me", "text" => "Beauty is more than the seen"],
            ["name" => "Me", "text" => "seek truth, not philosophy"],
            ["name" => "Annonymous", "text" => "I dont care how much you plan for your future; you still havent lived it"]
        ];
    ?>
</head>
<body style="background-image:url('images/<?php echo $backgrounds[$randomNumber]; ?>'); background-size:cover;" >
    <div class="quote">
     <blockquote>
         <h1><?php echo '"'.$quotes[$randomNumber]['text'].'" <i> - '.$quotes[$randomNumber]['name'].'</i>' ?></h1>
     </blockquote>
    </div>
</body>
</html>