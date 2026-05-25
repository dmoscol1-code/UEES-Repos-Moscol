% operadores en prolog
%  reglas de uso de =
X is 2. Y is 2, X = Y. % esto es cierto porque X e Y tienen el mismo valor

X is 2, X = Y % Si un valor no esta instanciado, la instanciada le asigna un valor a la otra variable.

X = Y, X is 2. % Si las dos no estan instanciadas, entonces las variables COMPARTEN MEMORIA.

% ESTRUCTURAS Y VARIABLES.

lugar(X,Y) = lugar(2,3). % para comprobar si variables estan INSTANCIADAS.

[X,Y]=[a,b]. 

% Si se usa == cuando una variable no esta instanciada bota FALSE.
% Se usa =:= solo con operaciones artimeticas, sin variables no instanciadas

X is 2, 3 * X =:= 6.

% como usar \= (NO ES IGUAL)
% \== (NO ES IGUAL considerando orden de argumentos, no importa instancias.)
% =\= (Solo se usa con expresiones artimeticas. Variables siempre instanciadas.)
