<div class="container">
    <div class="row">
        <form wire:submit.prevent='create' class="col-6 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input wire:model='form.name' id="name" class="form-control" />
                @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="middlename" class="form-label">Apellido Paterno</label>
                <input wire:model='form.middlename' id="middlename" class="form-control" />
                @error('form.middlename') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido Materno</label>
                <input wire:model='form.lastname' id="lastname" class="form-control" />
                @error('form.lastname') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input wire:model="form.gender" class="form-check-input" type="radio" id="gender1" value="0">
                    <label class="form-check-label" for="gender1">Hombre</label>
                </div>
                <div class="form-check">
                    <input wire:model="form.gender" class="form-check-input" type="radio" id="gender2" value="1">
                    <label class="form-check-label" for="gender2">Mujer</label>
                </div>
                @error('form.gender') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
    <div class="row">
        @if (session()->has('message'))
        <div class="alert alert-success col-6 mx-auto">
            {{ session('message') }}
        </div>
        @endif
    </div>
</div>
