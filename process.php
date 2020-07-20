<?php
    /*
    apakah ada atribut dengan nama 'save' yang dikirim dari form menggunakan method=POST
    cek menggunakan isset()
    jika ada, proses script bawahnya
    */
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
        $result = $totalScore * 20;
        echo "score : " . $result;
    }
?>