<?php 

    $peliharaan = "Kambing";

    switch ($peliharaan){
        case 'Kucing':
            // menampilkan pesan peliharaan kucing apabila case sesuai
            echo "Kamu memelihara kucing";
            break;
        case 'Anjing':
            // menampilkan pesan peliharaan kucing apabila case sesuai
            echo "Kamu memelihara anjing";
            break;
        default:
            // menampilkan pesan default apabila tidak ada case sesuai
            echo "peliharaan kamu tidak dikenali";
            break;
    }
?>