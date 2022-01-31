

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors Game</title>
    <link rel="stylesheet" href="gameStyle.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/prerna142002">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="https://drive.google.com/file/d/16CvBkWi1SelvT-tPIfm_-0Ddjje9lv7g/view?usp=sharing">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="https://www.linkedin.com/in/prerna-verma-6737081a3/">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="../reg.php">Logout</a>
                </li>
              </ul>
        </nav>
    <header>
        <h1>
            Rock Paper Scissors
        </h1>
        <a id="profileName" href='../profile.php'>
                <!-- High Score -->
                <?php
                    session_start();
                    $email = $_SESSION['email'];
                    echo $email;
                ?>
                <br>             
            </a>
            <!-- <a id="profileName" href='../reg.php'>Logout</a> -->
    </header>

    <div class="score-board">
        <div id="user-label" class="badge">user</div>
        <div id="computer-label" class="badge">comp</div>
        <span id="user-score">0</span>:<span id="comp-score">0</span>
    </div>

    <div class="result">
        <p>RESULTS HERE</p>
    </div>

    

    <div class="choices">
        <div id="r" class="choice">
            <img src="rockicon.png" alt="">
        </div>
        <div id="p" class="choice">
            <img src="papericon.png" alt="">
        </div>
        <div id="s" class="choice">
            <img src="scissorsicon.png" alt="">
        </div>
    </div>

    <p class="action-message">Make Your Move</p>
    <div id="btnEndGame"><button class="end-bt action-message" onclick="buttonCall()">End Game</button></div>
    <!-- <form action="score.php?id=
        // $dom = new DOMDocument('1.0', 'iso-8859-1');
        
        // // Enable validate on parse
        // $dom->validateOnParse = true;
        // $tagcontent = $dom->getElementById('user')->textContent;
        // echo $tagcontent;
    // "> <button class="end-bt action-message" type="submit">End Game</button> </form> -->
<script src="app.js" charset="utf-8"></script>
<script>
    function buttonCall()
    {
        const userScore_span = document.getElementById("user-score");
        const compScore_span = document.getElementById("comp-score");
        // var a = userScore_span.innerText;
        // var b = compScore_span.innerText;
        // console.log(a);
        const name1 = "user-score";
        const name2 = "comp-score";
        var value1 = userScore;
        var value2 = compScore;
        var expires;
        var days = 1;
        if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
        }
        else {
        expires = "";
        }
        document.cookie = escape(name1) + "=" + escape(value1) + expires + "; path=/";
        document.cookie = escape(name2) + "=" + escape(value2) + expires + "; path=/";
        window.location.href = "../score.php";
    }
    
</script>
</body>

</html>



<!-- <a href="../score.php?id
        // $dom = new DOMDocument('1.0', 'iso-8859-1');
        // // Enable validate on parse
        // $dom->validateOnParse = true;
        // $tagcontent = $dom->getElementById('user-score')->textContent;
        // echo "<script>document.writeln(userScore);</script>";
        // echo $tagcontent;
            // echo "sdklkn";
        // ">End Game</a>