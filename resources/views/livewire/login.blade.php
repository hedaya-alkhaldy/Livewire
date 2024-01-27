<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    @if ($registerForm)
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"></div>
                    <label>Name :</label>
                    <input type="text" wire:model="name" id='name' class="form-control">
                    @error('name')
                        <span class="text-danger error">
                            {{ $message }}

                        </span>
                    @enderror

                </div>

                <div class="col-md-12">
                    <div class="form-group"></div>
                    <label>Email :</label>
                    <input type="email" wire:model="email" id='email' class="form-control">
                    @error('email')
                        <span class="text-danger error">
                            {{ $message }}

                        </span>
                    @enderror

                </div>

                <div class="col-md-12">
                    <div class="form-group"></div>
                    <label>Password :</label>
                    <input type="password" wire:model="password" id='password' class="form-control">
                    @error('password')
                        <span class="text-danger error">
                            {{ $message }}

                        </span>
                    @enderror

                </div>

            </div>
            <div class="col-md-12 text-center pt-3">
                <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
            </div>

            <div class="col-md-12 text-center">
                <a class="text-primary" wire:click <button class="btn text-white btn-success"
                    wire:click.prevent="register">Login</button>
            </div>
        </form>
    @else
        <form>
            <div class="row">


                <div class="col-md-12">
                    <div class="form-group"></div>
                    <label>Email :</label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email')
                        <span class="text-danger error">
                            {{ $message }}

                        </span>
                    @enderror

                </div>

                <div class="col-md-12">
                    <div class="form-group"></div>
                    <label>Password :</label>
                    <input type="password" wire:model="password" class="form-control">
                    @error('password')
                        <span class="text-danger error">
                            {{ $message }}

                        </span>
                    @enderror

                </div>

            </div>

            <div class="col-md-12 text-center pt-2">
                <a class="btn text-white btn-success" wire:click.prevent="login">
                    <strong> Login </strong>
                </a>
            </div>
            </br>
            <div class="col-md-12 text-center">
                Dont have account <a class="btn btn-sm text-white btn-primary" wire:click.prevent="register">
                    Click Here
                </a>


            </div>
        </form>
    @endif
</div>
