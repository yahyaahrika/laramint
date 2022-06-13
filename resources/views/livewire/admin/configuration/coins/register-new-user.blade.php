<div class="card shadow mb-4 border-left-danger">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __("Email Configuration") }}</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="row">
            <div class="col-3 p-4">
                <div class="form-group">


                    <label for="coins">{{ __('coins to new user register') }}</label>
                    <input wire:model="config_value" wire:change="config_changed()" type="text" class="form-control" value="{{ $config_value }}">
                    @error('config_value') <span class="alert alert-danger">{{ $message }}</span> @enderror

                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>