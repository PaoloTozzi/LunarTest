<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">



                <form method="POST" action="{{ route('register') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="inputFirstName" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="inputFirstName">
                    </div>

                    <div class="mb-3">
                        <label for="inputLastName" class="form-label">Cognome</label>
                        <input name="last_name" type="text" class="form-control" id="inputLastName">
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="inputEmail"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>

                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="inputPasswordConfirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
