<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do Cliente</title>
</head>
<body>

    <h1>Acesso do Cliente</h1>

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login.cliente.submit') }}" method="POST">
        @csrf

        <div>
            <label>Nome:</label><br>
            <input type="text" name="nome" value="{{ old('nome') }}" required>
        </div>
        <br>

        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <br>

        <div>
            <label>Senha:</label><br>
            <input type="password" name="senha" required>
        </div>
        <br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>
