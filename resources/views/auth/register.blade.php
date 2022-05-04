<x-guest-layout>
  <div class="login">
        <div class="form-container">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h1 class="title">My account</h1>

            <form method="POST" action="{{ route('register') }}" class="form">
                @csrf
                <div>
                    <x-label for="name" :value="__('Name')" class="label"/>
                    <x-input id="name" type="text" name="name" placeholder="Juan Perez" class="input input-name" required />

                    <label for="email" class="label">Email address</label>
                    <input type="email" id="email" name="email" placeholder="email@example.com" class="input input-email">

                    <label for="password" class="label">Password</label>
                    <input type="password" id="password" name="password" placeholder="*********" class="input input-password">

                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="*********" class="input input-password">
                </div>

                <input type="submit" value="Create" class="primary-button login-button">
            </form>
        </div>
    </div>
</x-guest-layout>
