/* Condição de Alinhado
    if (cond1) {
        bloco1
        } else {
            if (cond2) {
            bloco2
            } else {
                bloco3
            }
        }
    }
*/
var idade = 45;
if (idade<16) {
    console.log('Não vota');
} else if (idade<18){
    console.log('Voto opcional');
} else {
    console.log('Voto obrigatório');
}