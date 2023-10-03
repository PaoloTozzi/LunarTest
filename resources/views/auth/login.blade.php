<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">



                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="inputEmail"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
