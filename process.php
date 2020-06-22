<?php

    if(isset($_POST['save'])){

        $total_score = 0; // total nilai
        $total_ques = 5; // banyaknya soal
    
        // kunci jawaban
        $ans = array('undef',
                    'D',
                    'C',
                    'B',
                    'A',
                    'D');
    
        for ($i=1; $i<= $total_ques; $i++){
            if(isset($_POST['answer-'.$i])){
                if($_POST['answer-'.$i] == $ans[$i] ){
                    $total_score++;
                }    
            }
        }
        echo "score : ";
        $result = $total_score * 20;
        echo "$result";
    }
?>