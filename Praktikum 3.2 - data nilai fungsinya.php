<?php
function kelulusan($rata_rata) {
    if ($rata_rata <= 55){
        return "Maaf anda harus ngulang!";
    }else{
        return "Selamat anda lulus, tidak usah ngulang! :D";
    }
}

function grade($rata_rata) {
    if ($rata_rata >= 85){
        return "A";
    }

    elseif ($rata_rata >= 70){
        return "B";
    }

    elseif ($rata_rata >= 56){
        return "C";
    }

    elseif ($rata_rata >= 36){
        return "D";
    }

    elseif ($rata_rata >= 10){
        return "E";
    }
    
    else{
        return "Tidak ada nilai";
    } 
}

function predikat($grade) {
    switch ($grade) {
        case "A" : 
            return "Sangat memuaskan!";
            break;
        
        case "B" : 
            return "Memuaskan!";
            break;

        case "C" : 
            return "Cukup!";
            break;

        case "D" : 
            return "Kurang!";
            break;
        
        case "E" : 
            return "Sangat kurang!";
            break;

        case "I" : 
            return "Tidak ada!";
            break;
    }
}
?>