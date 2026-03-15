<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Home2</title>
</head>

<body>

<header>
    <h1>Sistema</h1>
</header>

<main>

<h2>Bem-vindo</h2>

<p>
Usuário logado: {{ Auth::user()->name }}
</p>

<p>
Email: {{ Auth::user()->email }}
</p>

<br>

<form action="/logout" method="POST">

@csrf

<button type="submit">Logout</button>

</form>

</main>

<footer>
<p>© 2026 Sistema</p>
</footer>

</body>
</html>
