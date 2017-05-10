<?php


do {
    print "1. Mega-Sena" . "\n" . "2. Quina" . "\n" . "3. Lotomania" . "\n" . "4. Lotofacil" . "\n" . "5. Sair"."\n"."Qual sera o jogo: ";

    $jogo = trim(fgets(STDIN));


}while($jogo > 6);