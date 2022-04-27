<?php

fazer {
    $ playerOne = readline ( 'Jogador 1 (X) - Digite o seu nome: ' );
    $ playerTwo = readline ( 'Player 2 (O) - Digite o seu nome: ' );

    $ jogador = 'X' ;

    $ placa = [
        '.' , '.' , '.' ,
        '.' , '.' , '.' ,
        '.' , '.' , '.' ,
    ];

    $ vencedor = null ;

    while ( $ vencedor === null ) {
        eco <<<EOL
             Posições: | Tabuleiro
                       |
               0|1|2 | $board[0]|$board[1]|$board[2]
               3|4|5 | $board[3]|$board[4]|$board[5]
               6|7|8 | $board[6]|$board[7]|$board[8]
            EOL
        ;

        $ position = ( int ) readline ( "Jogador {$player}, digite sua posição: " );

        if (! in_array ( $ position , [ 0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 ])) {
            echo  "\nPosição inexistente, digite novamente.\n" ;
            continuar ;
        }

        if ( $ board [ $ position ] !== '.' ) {
            echo  "\nPosição ocupada, digite novamente.\n" ;
            continuar ;
        }

        $ board [ $ position ] = $ player ;

        se (
            ( $ placa [ 0 ] === 'X' && $ placa [ 1 ] === 'X' && $ placa [ 2 ] === 'X' ) ||
            ( $ placa [ 3 ] === 'X' && $ placa [ 4 ] === 'X' && $ placa [ 5 ] === 'X' ) ||
            ( $ placa [ 6 ] === 'X' && $ placa [ 7 ] === 'X' && $ placa [ 8 ] === 'X' ) ||
            ( $ placa [ 0 ] === 'X' && $ placa [ 3 ] === 'X' && $ placa [ 6 ] === 'X' ) ||
            ( $ placa [ 1 ] === 'X' && $ placa [ 4 ] === 'X' && $ placa [ 7 ] === 'X' ) ||
            ( $ placa [ 2 ] === 'X' && $ placa [ 5 ] === 'X' && $ placa [ 8 ] === 'X' ) ||
            ( $ placa [ 0 ] === 'X' && $ placa [ 4 ] === 'X' && $ placa [ 8 ] === 'X' ) ||
            ( $ placa [ 2 ] === 'X' && $ placa [ 4 ] === 'X' && $ placa [ 6 ] === 'X' )
        ) {
            $ vencedor = 'X' ;
        }

        se (
            ( $ placa [ 0 ] === 'O' && $ placa [ 1 ] === 'O' && $ placa [ 2 ] === 'O' ) ||
            ( $ placa [ 3 ] === 'O' && $ placa [ 4 ] === 'O' && $ placa [ 5 ] === 'O' ) ||
            ( $ placa [ 6 ] === 'O' && $ placa [ 7 ] === 'O' && $ placa [ 8 ] === 'O' ) ||
            ( $ placa [ 0 ] === 'O' && $ placa [ 3 ] === 'O' && $ placa [ 6 ] === 'O' ) ||
            ( $ placa [ 1 ] === 'O' && $ placa [ 4 ] === 'O' && $ placa [ 7 ] === 'O' ) ||
            ( $ placa [ 2 ] === 'O' && $ placa [ 5 ] === 'O' && $ placa [ 8 ] === 'O' ) ||
            ( $ placa [ 0 ] === 'O' && $ placa [ 4 ] === 'O' && $ placa [ 8 ] === 'O' ) ||
            ( $ placa [ 2 ] === 'O' && $ placa [ 4 ] === 'O' && $ placa [ 6 ] === 'O' )
        ) {
            $ vencedor = 'O' ;
        }

        if (! in_array ( '.' , $ board )) {
            quebrar ;
        }

        if ( $ jogador === 'X' ) {
            $ jogador = 'O' ;
        } senão {
            $ jogador = 'X' ;
        }
    }

    eco <<<EOL
         Posições: | Tabuleiro
                   |
           0|1|2 | $board[0]|$board[1]|$board[2]
           3|4|5 | $board[3]|$board[4]|$board[5]
           6|7|8 | $board[6]|$board[7]|$board[8]
        EOL
    ;

    if ( $ vencedor === 'X' ) {
        eco  "VENCEDOR: {$playerOne}.\n" ;
    } elseif ( $ vencedor === 'O' ) {
        eco  "VENCEDOR: {$playerTwo}.\n" ;
    } senão {
        echo  "EMPATE.\n" ;
    }

    $ playAgain = filter_var (
        readline ( "\nDeseja jogar novamente? (true/false): " ),
        FILTER_VALIDATE_BOOLEAN
    );

    echo  "\n" ;
} while ( $ playAgain === true );
