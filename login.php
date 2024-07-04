<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aqui você pode adicionar a lógica de autenticação, como verificar o usuário e a senha em um banco de dados
    // Para fins de demonstração, vamos apenas exibir os dados recebidos

    echo "Usuário: " . htmlspecialchars($username) . "<br>";
    echo "Senha: " . htmlspecialchars($password) . "<br>";

    // Se a autenticação for bem-sucedida, você pode redirecionar o usuário para outra página
    // header('Location: dashboard.php');
    // exit();
} else {
    echo "Método de solicitação inválido.";
}
?>