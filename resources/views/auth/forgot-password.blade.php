<x-guest-layout>
  <div class="forgot-password">
      <div class="form-container-forgot-password">
          <img src="./logos/logo_yard_sale.svg" alt="logo" class="logo">

          <h1 class="title">Email has been sent!</h1>
          <p class="subtitle">Please check your inbox for instruction on how to reset the password</p>

          <div class="email-image">
              <img src="./icons/email.svg" alt="email">
          </div>

          <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <label for="email" class="label">Email address</label>
              <input type="text" id="email" placeholder="email@example.com" class="input input-email" required autofocus>

              <button class="primary-button login-button">Send Email</button>
          </form>
      </div>
  </div>
</x-guest-layout>
