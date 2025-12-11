@extends('app')
@section('body')

    <div class="itim bg-cover bg-center min-h-screen bg-no-repeat"
        style="background-image: url('{{ asset('imgs/fundoCrud.png') }}')">
        <div class="flex justify-start pt-2">
            <a href="{{ url('/') }}"
                class=" bg-white px-5 py-1 rounded-r-lg text-marrom-escuro shadow-md shadow-marrom-escuro">Home</a>
        </div>

        <div class="flex flex-col justify-center items-center min-h-screen">
            @if ($errors->any())
                <div style="color: red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- EStilização do formulário --}}
            <div class="bg-white px-12 py-12 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">
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
            </div>
        </div>
    </div>
@endsection
