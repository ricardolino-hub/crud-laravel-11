<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Novo Usuário</h1>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Criar</button>
    </form>
</body>
</html>