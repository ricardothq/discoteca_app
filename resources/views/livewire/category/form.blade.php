@include('common.modalHead')

<div class="row">

    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="fas fa edit">

                </span>

            </div>
            <input type="text" wire:model.lazy="name" class="form-control"
                placeholder="Inserte el Nombre de la nueva Categoría">
        </div>
        @error('name')
            <span class="text-danger er">{{ @message }}</span>
        @enderror
    </div>
    <div class="col-sm-12 mt-3">
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image"
                accept="image/x-png, image/gif, image/jpeg">
            <label class="custom-file-label">Eliga una imagen {{ $image }}</label>
            @error('image')
                <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>

    </div>


</div>

@include('common.modalFooter')
