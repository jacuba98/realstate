<x-guest-layout>
  <div class="login">
      <div class="form-container">
          <img src="./logos/logo_yard_sale.svg" alt="logo" class="logo">
          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors" />


          <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
              <label for="email" class="label">Email address</label>
              <input type="text" id="email" placeholder="email@example.com" class="input input-email">

              <label for="password" class="label">Password</label>
              <input type="password" id="password" placeholder="*********" class="input input-password">

              <input type="submit" value="Login" class="primary-button login-button">
              @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot my password</a>
              @endif
          </form>

          <button class="secondary-button signup-button"><a href="{{ route('register') }}">Sign Up</a></button>
      </div>
  </div>
</x-guest-layout>
