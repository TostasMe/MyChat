@extends ("layouts.main")

@section ("title", "Sign Up")
@section ("content")
<main class="form-signin">
    <form action="/signup" method="post">
    {{ csrf_field() }}
        <img class="mb-4" src="https://cdn.icon-icons.com/icons2/827/PNG/512/user_icon-icons.com_66546.png" alt="" width="70" height="70">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input name="repeat_password" type="password" class="form-control" id="repeatPassword" placeholder="Repeat password"> 
            <label for="floatingPassword">Repeat password</label>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color:darkred">{{ $error }}</p>
            @endforeach
        @endif
        <button class="w-100 btn btn-lg btn-primary">Sign up</button>
    </form>
    <a href="/login"><button class="w-100 btn btn-lg btn-primary">Login</button></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</main>
@endsection
