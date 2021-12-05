<style>
.form-signin input[type="text"] 
{
  background-color: #17212b;
  border: 1px solid #696969;
  border-radius: 20px;
  color: #e4ecf2;
  margin-bottom: 40px;
}
</style>

@extends ("layouts.main")

@section ("title", "Settings")
@section ("content")
<main class="form-signin">
    <form action="/settings" method="post">
    {{ csrf_field() }}
        <p class="text" style="color:#fff">Change name</p>
        <div class="form-floating">
            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name">
            <label for="floatingInput">Name</label>
        </div>
        <p class="text" style="color:#fff">Change image</p>
        <div class="form-floating">
            <input name="image" type="text" class="form-control" id="floatingInput" placeholder="URL">
            <label for="floatingInput">URL</label>
        </div>
        <p class="text" style="color:#fff">Change password</p>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">New password</label>
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
        <button class="w-100 btn btn-lg btn-primary">Save changes</button>
    </form>
    <a href="/" class="btn-else">Back to chat</a>
</main>
@endsection
