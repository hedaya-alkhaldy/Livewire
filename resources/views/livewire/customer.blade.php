<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="enterName" class="form-label">Name</label>
                <input type="text" wire:model='name' class="form-control" id="enterName" aria-describedby="emailHelp">
                <div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" wire:model='email' class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="text" wire:model='phone' class="form-control" id="exampleInputPhone">
                <div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
