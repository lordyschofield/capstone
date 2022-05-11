@extends('layouts.base')


@section('content')

<div class="card w-1/2 bg-blue-300 rounded shadow-2xl p-8 ml-64">
    <div class="card-header mx-5 my-5">
        {{ trans('CREATE') }} {{ trans('NEW DEAL') }}
    </div>
    <div class="card-body text-center items-center">
    <div class="card-body">
        <form method="POST" action="{{ route("deals.store") }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-group">
                <label class="required" for="deal_name">Deal Name</label>
                <input class="form-control {{ $errors->has('deal_name') ? 'is-invalid' : '' }}" type="text" name="deal_name" id="deal_name" value="{{ old('deal_name', '') }}" required>
                @if($errors->has('deal_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_name') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="deal_owner">Deal Owner</label>
                <input class="form-control {{ $errors->has('deal_owner') ? 'is-invalid' : '' }}" type="text" name="deal_owner" value="{{ old('deal_owner', '') }}" required>
                @if($errors->has('deal_owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_owner') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="deal_progress">Deal Progress</label>
                <input list="progress" class="form-control {{ $errors->has('deal_progress') ? 'is-invalid' : '' }}" type="text" name="deal_progress" value="{{ old('deal_progress', '') }}" required>
                @if($errors->has('deal_progress'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_progress') }}
                    </div>
                @endif
                <datalist id="progress">
                    <option value="10%">
                    <option value="25%">
                    <option value="50%">
                    <option value="75%">
                    <option value="100%">
                </datalist>
            </div>

            <div class="form-group">
                <label class="required" for="dealcontractno">Contract No</label>
                <input class="form-control {{ $errors->has('dealcontractno') ? 'is-invalid' : '' }}" type="number" name="dealcontractno" value="{{ old('dealcontractno', '') }}" required>
                @if($errors->has('dealcontractno'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dealcontractno') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="deal_value">Deal Value</label>
                <input class="form-control {{ $errors->has('deal_value') ? 'is-invalid' : '' }}" type="text" name="deal_value" value="{{ old('deal_value', '') }}" required>
                @if($errors->has('deal_value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_value') }}
                    </div>
                @endif
                
            </div>
            


            <div class="form-group">
                <label class="required" for="dealopendate">Open Date</label>
                <input class="form-control w-56 {{ $errors->has('dealopendate') ? 'is-invalid' : '' }}" type="date" name="dealopendate" value="{{ old('dealopendate', '') }}" required>
                @if($errors->has('dealopendate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dealopendate') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="deal_closedate">Closed Date</label>
                <input class="form-control w-56 {{ $errors->has('deal_closedate') ? 'is-invalid' : '' }}" type="date" name="deal_closedate" value="{{ old('deal_closedate', '') }}" required>
                @if($errors->has('deal_closedate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_closedate') }}
                    </div>
                @endif
                
            </div>

            
            <div class="form-group">
                <label class="required" for="deal_closed">Deal Closed?</label>
                <input list="closed" class="form-control {{ $errors->has('deal_closed') ? 'is-invalid' : '' }}" type="text" name="deal_closed" value="{{ old('deal_closed', '') }}" required>
                @if($errors->has('deal_closed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_closed') }}
                    </div>
                @endif
                <datalist id="closed">
                    <option value="YES">
                    <option value="NO">
                </datalist>
            </div>


            <div class="form-group my-2">
                <button class="btn btn-danger" type="submit" method="POST">
                    SAVE
                </button>
            </div>
        </div>
    </div>
        </form>
</div>
</div>




@endsection