<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - Registrar</title>
</head>

<body>

<header>
    <h1>Sistema</h1>
</header>

<main>

<h2>Cadastro de Usuário</h2>

<form action="/registrar" method="POST">

    <!-- CSRF do Laravel -->
    @csrf

    <div>
        <label for="name">Nome</label><br>
        <input type="text" id="name" name="name" required>
    </div>

    <br>

    <div>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required>
    </div>

    <br>

    <div>
        <label for="password">Senha</label><br>
        <input type="password" id="password" name="password" required>
    </div>

    <br>

    <div>
        <label for="password_confirmation">Confirmar Senha</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <br>

    <div>
        <button type="submit">Cadastrar</button>
    </div>

</form>

<br>

<p>
    Já possui conta?
    <a href="/login">Fazer login</a>
</p>

</main>

<footer>
    <p>© 2026 Sistema</p>
</footer>

</body>
</html>
