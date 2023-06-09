<x-layout headerTitle='Registrati'>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center">Registrati!</h1>
                <form class="p-5 shadow" method="POST" action="{{ route('register')}}">

                         {{-- per vedere errori in homepage--}}

                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                         @endforeach
                         </ul>
                        </div>
                         @endif
                        {{-- per vedere errori in homepage --}}
                    
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    
                    <div class="mb-3">
                  <label for="email" class="form-label">Nome utente</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>
                
                
                
                <button type="submit" class="btn btn-primary">Registrati</button>
               <p class="small mt-2">Già registrato? <a href="{{ route('login')}}">Clicca Qui</a></p>
            </form>
            
        </div>
    </div>
</div>

</div>


</x-layout>