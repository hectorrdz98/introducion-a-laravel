<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>
    <link href="{{ asset('bulma.min.css') }}" rel="stylesheet">
</head>
<body>
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Ingreso de usuario
                </h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" 
                                name="email"
                                placeholder="Ingresa tu correo...">
                        </div>
                    </div>
                    <div class="control">
                        <button class="button is-primary">Enviar</button>
                    </div>
                </form>
                @foreach($users as $user)
                    <p>{{ $user->email }}</p>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>