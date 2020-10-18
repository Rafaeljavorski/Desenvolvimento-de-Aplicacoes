var value;
var resultado;
function botao(num){
    value = document.calc.visor.value  += num;
}
function reset(){
    document.calc.visor.value ='';
}
function calcular(){
    resultado = eval(value);
    document.calc.visor.value = resultado;


}