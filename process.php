<?php

    if(isset($_POST['save'])){

        $totalScore = 0; // total nilai
        $totalQuestion = 5; // banyaknya soal
    
        // kunci jawaban
        $answer = array('undefined',
                    'D',
                    'C',
                    'B',
                    'A',
                    'D');
    
        for ($i=1; $i<= $totalQuestion; $i++){
            if(isset($_POST['answer-'.$i])){
                if($_POST['answer-'.$i] == $answer[$i] ){
                    $totalScore++;
                }    
            }
        }
        echo "score : ";
        $result = $totalScore * 20;
        echo "$result";
    }
?>