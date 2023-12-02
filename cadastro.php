<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro1.css">
    <title>Cadastro - Ajuda contra a Depressão</title>
</head>
<body>
    <div class="signup-container">
        <h2>Cadastre-se para obter ajuda</h2>
        <p>Junte-se à nossa comunidade para acessar recursos de apoio à saúde mental.</p>
        
        <form method = "post" action = "configcadastro.php" class="input">
        <input type="email" name="email" placeholder="E-mail" required />
        <input type="number" name="cpf" placeholder="CPF" required />
        <input type="password" name="senha" placeholder="Senha" required />
        <input type="password" name="senha" placeholder="confirmar senha" required />
        <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>