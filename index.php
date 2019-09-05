<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Assignment 2 - Slot Machine</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <form action="./index.php" method="POST" class="form">
        <div class="container">
            <div class="title">
                <h1>The Virtual Slot Machine!</h1>
            </div>
            <div class="body">
                <div class="wrap">
                    <div id="col1" class="col">
                        <div class="frame"><img class="img" src="./images/cherry.png" /></div>
                    </div>
                    <div id="col2" class="col">
                        <div class="frame"><img class="img" src="./images/cherry.png" /></div>
                    </div>
                    <div id="col3" class="col">
                        <div class="frame"><img class="img" src="./images/cherry.png" /></div>
                    </div>
                    <input type="submit" class="col spin" value="SPIN">
                </div>
            </div>
            <div class="input">
                <div class="top">
                    <span id="creditLabel">Credit: </span>
                    <input type="text" id="credit" name="credit" value="100" readonly="true">
                    <span class="new" id="new">New</span>
                </div>
                <div class="bottom">
                    <span id="nameLabel">Name: </span>
                    <input type="text" id='name' name="name" placeholder="Your name" maxlength="20" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="betLabel">Your Bet: </span>
                    <input type="number" id="bet" name="bet" min="1" value="10" max="100000000"><br>
                    <input type="text" name="img1" value="1" hidden>
                    <input type="text" name="img2" value="1" hidden>
                    <input type="text" name="img3" value="1" hidden>
                </div>

            </div>
            <div id="result">
            </div>
        </div>
    </form>
    <?php
    $name = $_POST["name"];
    $bet = $_POST["bet"];
    $credit = $_POST["credit"];
    $img1 = $_POST["img1"];
    $img2 = $_POST["img2"];
    $img3 = $_POST["img3"];
    ?>
    <script>
        var name, bet, credit;
        name = "<?php echo $name ?>";
        bet = parseInt("<?php echo $bet ?>");
        credit = parseInt("<?php echo $credit ?>");
        img1 = parseInt("<?php echo $img1 ?>");
        img2 = parseInt("<?php echo $img2 ?>");
        img3 = parseInt("<?php echo $img3 ?>");
    </script>
    <script src="./js/slotMachine.js"></script>
</body>

</html>