 <?php
$alunos = [
    [
    "nome" => "Miriam",
    "idade"=> "15",
    "curso"=> "ADS",
    "nota"=> 8.5,
    "situacao" => ""
    ],
    [
    "nome" => "Adson",
    "idade"=> "18",
    "curso"=> "ADS",
    "nota"=> 6.5,
    "situacao" => ""
    ]
];
function calcularSituacao($nota) {
if ($nota < 7){
    return "Reprovado";
} else {
    return "Aprovado";
}
}

foreach ($alunos as &$aluno){
    $alunos['situacao'] = calcularSituacao($alunos['nota']);
} 
unset ($aluno);

foreach ($alunos as $aluno){
    echo "Nome: " . $aluno['nome'] . PHP_EOL;
    echo "Idade: " . $aluno['idade'] . PHP_EOL;
    echo "Curso: " . $aluno['curso'] . PHP_EOL;
    echo "Nota: " . $aluno['nota'] . PHP_EOL;
    echo "Situação: " . $aluno['situacao'] . PHP_EOL;
    echo "================================" . PHP_EOL;
} 