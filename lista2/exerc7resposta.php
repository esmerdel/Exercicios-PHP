<?php
  // Verifica se o formulário foi submetido
  if(isset($_POST['submit'])){
    // Inicializa arrays para armazenar alunos aprovados e reprovados
    $aprovados = array();
    $reprovados = array();

    // Itera sobre os alunos submetidos pelo formulário
    foreach ($_POST['alunos'] as $aluno) {
      // Extrai informações do aluno
      $nome = $aluno['nome'];
      $nota1 = $aluno['nota1'];
      $nota2 = $aluno['nota2'];

      // Calcula a média do aluno
      $media = ($nota1 + $nota2) / 2;
      $aluno['media'] = $media;

      // Verifica se o aluno está aprovado ou reprovado e os adiciona aos respectivos arrays
      if ($media >= 6) {
        $aprovados[] = $aluno;
      } else {
        $reprovados[] = $aluno;
      }
    }

    // Exibe a lista de alunos aprovados
    echo "<p>Lista de aprovados:</p>";
    echo "<ul>";
    foreach ($aprovados as $aluno) {
      echo "<li>{$aluno['nome']} - Média: {$aluno['media']}</li>";
    }
    echo "</ul>";

    // Exibe a lista de alunos reprovados
    echo "<p>Lista de reprovados:</p>";
    echo "<ul>";
    foreach ($reprovados as $aluno) {
      echo "<li>{$aluno['nome']}</li>";
    }
    echo "</ul>";
  }
?>
