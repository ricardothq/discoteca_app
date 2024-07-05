<div class="row mt-3">
    <div class="col-sm-12">

        <div class="connect-sorting">

            <h5 class="text-center mb-2">DENOMINACIONES</h5>

            <div class="container">
                <div class="row">
                    @foreach ($denominations as $d)
                        <div class="col-sm mt-2">

                            <button wire:click.prevent="ACash({{ $d->value }})" class="btn btn-dark btn-block den">
                                {{ $d->value > 0 ? '$' . number_format($d->value, 2, '.', '') : 'Exacto' }}
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="connect-sorting-content mt-4">
                <div class="card simple-title-task ui-sortable-handle">
                    <div class="card-body">
                        <div class="input-group input-group-md mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-gp hideonsm"
                                    style="background: #3B3F5C;
                                color:white">Efectivo F8
                                </span>
                            </div>
                            <input type="number" id="cash" wire:model="efectivo" wire:keydown.enter="saveSale"
                                class="form-control text-center" value="{{ $efectivo }}">
                            <div class="input-group-append">
                                <span wireL:click="$set('efectivo', 0)" class="input-group-text"
                                    style="background: #3B3F5C; color:white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                        <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <h4 class="text-muted">Cambio: ${{ number_format($change, 2) }}</h4>

                        <div class="row justify-content-between mt-5">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                @if ($total > 0)
                                    <button onclick="Confirm('' , 'clearCart', 'SEGURO DE ELIMINAR EL CARRITO?')"
                                        class="btn btn-dark mtmobile">
                                        CANCELAR F4
                                    </button>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                @if ($efectivo >= $total && $total > 0)
                                    <button wire:click.prevent="saveSale" class="btn btn-dark btn-md btn-block">GUARDAR
                                        F9</button>
                                @endif

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
