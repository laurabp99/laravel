@extends('auth.layout.master')

@section('content')
  <body>
    <main>
      <form method="POST" action="{{route('login')}}">

      @csrf 

      <div class="form-elements">
        <div class="form-element">
          <div class="email-label">
              <label>Email</label>
          </div>
          <div class="form-input">
              <input name="email" type="email">
          </div>
        </div>
        <div class="form-element ">
          <div class="password-label">
            <label>Contraseña</label>
          </div>
          <div class="form-input">
              <input name="password" type="password">
          </div>
        </div>
        <div class="buttons">
          <div class="password-forget">
            <h2>¿Olvidaste la contraseña?
            </h2>
          </div>
          <button class="login">
            Iniciar sesión
          </button>
        </div>
      </div>
    </form>
    </main>
  </body>
@endsection 