<div class="card mt-5 offset-3 col-6">
    <div class="card-header">
      Login
    </div>
    <div class="card-body">
        <form wire:submit="login">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
              @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input wire:model="password" type="password" class="form-control" id="password">
              @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Login</button>
        </form>
        <div class="mb-3">
            Don't' have an account? <button wire:navigate href="/register" type="submit" class="btn btn-success  btn-sm">Register</button>
        </div>
    </div>
</div>