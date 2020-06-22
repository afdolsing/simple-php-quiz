<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Quiz</title>
</head>
<body>
    <div class="container">
        <div class ="header">
            <h1 class="title">Simple PHP Quiz</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Result</a></li>
            </ul>
        </div>
        <div class="quiz">
        <form action="result.php" method="POST">
        <ol type="1" >
        <div class="question-quiz" >
            <li><h3 class="question" id="1" >What does PHP stand for?</h3></li>
            <input type="radio" name="answer-1" value="A" >Private Home Page<br>
            <input type="radio" name="answer-1" value="B" >Personal Home Project<br>
            <input type="radio" name="answer-1" value="C" >Personal Hypertext Processor<br>
            <input type="radio" name="answer-1" value="D" >PHP: Hypertext Preprocessor<br>
        </div>
    
        <div class="question-quiz">
            <li><h3 class="question" id="2" >All variable in PHP start with which symbol?</h3></li>
            <input type="radio" name="answer-2" value="A" >var<br>
            <input type="radio" name="answer-2" value="B" >const<br>
            <input type="radio" name="answer-2" value="C" >$<br>
            <input type="radio" name="answer-2" value="D" >@<br>
        </div>  
        
        <div class="question-quiz">
            <li><h3 class="question" id="3" >The is statement is used to execute some code only if a specified condition is true</h3></li>
            <input type="radio" name="answer-3" value="A" >True<br>
            <input type="radio" name="answer-3" value="B" >False<br>
        </div>
    
        <div class="question-quiz">
            <li><h3 class="question" id="4" >What is the correct way to create a function in PHP?</h3></li>
            <input type="radio" name="answer-4" value="A" >new_function myFunction()<br>
            <input type="radio" name="answer-4" value="B" >def myFunction()<br>
            <input type="radio" name="answer-4" value="C" >create myFunction()<br>
            <input type="radio" name="answer-4" value="D" >function myFunction()<br>
        </div>
    
        <div class="question-quiz">
            <li><h3 class="question" id="5" >How do you create a cookie in PHP</h3></li>
            <input type="radio" name="answer-5" value="A" >createcookie()<br>
            <input type="radio" name="answer-5" value="B" >makecookie()<br>
            <input type="radio" name="answer-5" value="C" >eatcookie()<br>
            <input type="radio" name="answer-5" value="D" >setcookie()<br>
        </div>
        
        <button name="save" type="submit" class="btn">Submit</button>
            </ol>
        </form>
        <div>
            <div class="footer">
                <p class="copy">Copyright 2020 @afdolsing</p>
            </div>
        </div>
    </div>
    
</body>
</html>