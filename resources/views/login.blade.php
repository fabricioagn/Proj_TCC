<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<header>
    <h1>Sistema</h1>
</header>

<main>

<h2>Login</h2>

@if ($errors->any())
<p>{{ $errors->first() }}</p>
@endif

<form action="/login" method="POST">

@csrf

<label for="email">Email</label><br>
<input type="email" name="email" required>

<br><br>

<label for="password">Senha</label><br>
<input type="password" name="password" required>

<br><br>

<button type="submit">Entrar</button>

</form>

<br>

<p>
Não possui conta?
<a href="/register">Registrar</a>
</p>

</main>

<footer>
<p>© 2026 Sistema</p>
</footer>

</body>
</html>
