<div class="card mt-5 offset-3 col-6">
    <div class="card-header">
      Register
    </div>
    <div class="card-body">
        <form wire:submit="register">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
              @error('name') <span class="error text-danger">{{ $message }}</span> @enderror

            </div>
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

            {{-- <button wire:navigate href="/customers" class="btn btn-secondary btn-sm"> Back </button>  --}}
            <button type="submit" class="btn btn-primary  btn-sm">Register</button>
        </form>
        <div class="mb-3">
            Already have an account? <button wire:navigate href="/login" type="submit" class="btn btn-success  btn-sm">Login</button>
        </div>
    </div>
</div>