<?php
$hari=4;
// switch($hari){
//     case 1:
//         echo 'minggu';
//         break;
//         case 2:
//             echo 'senin';
//             break;
//             case 3:
//                 echo 'selasa';
//                 break;
//                 default:
//                     echo 'hari belum dibuat';
//                     break;
// }

$pilihan='simpan';
switch ($pilihan){
    case 'tambah':
        echo 'anda memilih tambah';
        break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
            case 'ubah':
                echo 'anda memilih ubah';
                break;
                default:
                    echo 'pilihan belum ada';
                    break;
}
?>