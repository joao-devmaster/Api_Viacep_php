<?php
//para inicializar a pagina vazia (inputs)
$addres = (object) [
    'cep' => '',
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => ''
];
//aplicando o metodo post para possibilitar a pesquisa na pagina, passando o cep como referencia

if( isset ( $_POST ['cep'])){
    $cep = $_POST ['cep'];

    //tratando de erros {expressoes regulares} (inserção errada do usuario ao digitar no campo cep)

    //tudo que não for numero retorne 0 para meu cep {expressoes regulares} (^oposto)

    $cep = preg_replace('/[^0-9]/','',$cep);

    //para selecionar um cep valido de até 8 numeros, (numero de [0 a 9] {5 vezes} e também de [0 a 9] {3vezes} que somado resulta nos 8 numeros de cep) 
    //para iniciar obrigatoriamente com numero colocamos o (^) o simbolo dentro do array significa negar lista e fora do array significa a obrigatoriedade (inicio de linha)
    //para finalizar a linha com o numero (ou letra, mas nesse caso é numero) obrigatoriamente usamos o ($)
    //(-? para os casos de poder ou não ter o traço, então colocamos a ?)

    if ( preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep) ){

    //declarando a URL
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    //criando uma variavel decodificadora passando a ser tornar um objeto json e incluindo a url
    $addres = json_decode(file_get_contents($url)) ;
    
    //se o formato de cep inserido pelo usuario não se enquadrar o addres passa para o cep(input msg) a mensagem que esta invalida
    }else{
        $addres->cep = 'cep invalido!';
    }
   
}


?>