<?php


do {
    print "1. Mega-Sena" . "\n" . "2. Quina" . "\n" . "3. Lotomania" . "\n" . "4. Lotofacil" . "\n" . "5. Sair"."\n"."Qual sera o jogo: ";

    $jogo = trim(fgets(STDIN));


}while($jogo >= 6);

echo "Quantas dezenas você quer ter? ";
    $dezena = fgets(STDIN);
    echo "Quantas apostas você quer fazer? ";
    $aposta = fgets(STDIN);

    switch ($jogo){
        case 1:
            if ($dezena>15 or $dezena<6){
                print "Numero de dezena invalido (informe um numero de 6 a 15)";
                $dezena = trim(fgets(STDIN));
            }
        switch ($dezena){
            case 6;
            $dinheiro = 3.50;
                break;
            case 7;
            $dinheiro = 24.50;
                break;
            case 8;
            $dinheiro = 98.00;
                break;
            case 9;
            $dinheiro = 294.00;
                break;
            case 10;
            $dinheiro = 735.00;
                break;
            case 11;
            $dinheiro = 1617.00;
                break;
            case 12;
            $dinheiro = 3234.00;
                break;
            case 13;
            $dinheiro = 6006.00;
                break;
            case 14;
            $dinheiro = 10510.00;
                break;
            case 15;
            $dinheiro = 17517.00;
                break;
            default:
                $dinheiro = "???";
        }
        $totalDin = $dinheiro*$aposta;
        break;
        case 2:
            if ($dezena>15 or $dezena<5){
                print "Numero de dezena invalido (informe um numero de 6 a 15)";
                $dezena = trim(fgets(STDIN));
            }
            switch ($dezena){
                case 5;
                    $dinheiro = 1.50;
                    break;
                case 6;
                    $dinheiro = 9.50;
                    break;
                case 7;
                    $dinheiro = 31.50;
                    break;
                case 8;
                    $dinheiro = 84.00;
                    break;
                case 9;
                    $dinheiro = 189.00;
                    break;
                case 10;
                    $dinheiro = 378.00;
                    break;
                case 11;
                    $dinheiro = 693.00;
                    break;
                case 12;
                    $dinheiro = 1188.00;
                    break;
                case 13;
                    $dinheiro = 1930.50;
                    break;
                case 14;
                    $dinheiro = 3003.00;
                    break;
                case 15;
                    $dinheiro = 4504.50;
                    break;
                default:
                    $dinheiro = "???";
            }
            $totalDin = $dinheiro*$aposta;
            break;
        case 3:
            if ($dezena =! 50){
            print "Numero de dezena invalido (informe um numero de 6 a 15)";
            $dezena = trim(fgets(STDIN));
        }
            $dinheiro = 3.50;
            $totalDin = $dinheiro*$aposta;
            break;
        case 4:
            if ($dezena>18 or $dezena<15){
                print "Numero de dezena invalido (informe um numero de 6 a 15)";
                $dezena = trim(fgets(STDIN));
            }
            switch ($dezena){
                case 15;
                    $dinheiro = 2.00;
                    break;
                case 16;
                    $dinheiro = 32.00;
                    break;
                case 17;
                    $dinheiro = 272.00;
                    break;
                case 18;
                    $dinheiro = 1632.00;
                    break;
                default:
                    $dinheiro = "???";
            }
            $totalDin = $dinheiro*$aposta;
            break;
        default:
            break;
    }
print "Total a pagar ".$totalDin;