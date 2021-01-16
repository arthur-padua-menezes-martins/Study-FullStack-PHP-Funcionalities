<?php

/**
* verifica se todos os valores do array atendem a determinado filtro
* @param array $itens valores a verificar
* @param callable $callback filtro de verificação
*/
function array_every(array $itens, callable $callback) {
   return !in_array(false, array_map($callback, $itens));
}

?>
