<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>

    <h1>Cadastrar Novo Cliente</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf <div>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <br>

        <div>
            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" required>
        </div>
        <br>

        <div>
            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required>
        </div>
        <br>

        <div>
            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" required>
        </div>
        <br>

        <div>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha" required>
        </div>
        <br>

        <button type="submit">Salvar Cliente</button>
        <a href="{{ route('clientes.index') }}">Cancelar</a>
    </form>

</body>
</html>
