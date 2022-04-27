FLUXO DA APLICAÇÃO
O jogador 1 (X) digita o seu nome;

O jogador 2 (O) digita o seu nome;

Repetição:

O tabuleiro é visualizado;
O jogador 1 ou 2 escolhe a posição desejada;
Se escolher uma posição já ocupada ou inexistente:
Uma mensagem de alerta é exibida;
Volta a execução da estrutura de repetição.
Uma seleção de alternativas é feita;
Se alguma coisa foi alcançada:
O player 1 ou 2 é como vencedor;
Sai da estrutura de repetição.
Veja todas as que estão ocupadas:
Sai da estrutura de repetição.
Se nenhuma tentativa for alcançada:
É financiador.
Troca de jogador.
Exibir o vencedor;

Perguntar se deseja jogar novamente;

Se sim, autorize;

Se não, finalizando.

VARIÁVEIS
Jogador 1 : string;
Jogador 2 : string;
Tabuleiro : array<string> com 9 posições;
Jogador : string('X', 'O');
Posição : int;
Vencedor : string|null('X', 'O', null);
Jogar novamente : bool;
