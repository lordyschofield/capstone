@extends('layouts.base')


@section('content')

<div class="card bg-gray-300 ">
    <div class="card-header mx-5 my-5">
        {{ trans('CREATE') }} {{ trans('NEW DEAL') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("deals.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="deal_name">Deal Name</label>
                <input list="ActivityType" class="form-control {{ $errors->has('deal_name') ? 'is-invalid' : '' }}" type="text" name="deal_name" id="deal_name" value="{{ old('deal_name', '') }}" required>
                @if($errors->has('deal_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_name') }}
                    </div>
                @endif
                <datalist id="ActivityType">
                    <option value="Internet Explorer">
                    <option value="Firefox">
                    <option value="Chrome">
                    <option value="Opera">
                    <option value="Safari">
                </datalist>

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
                <label class="required" for="dealContractNo">Contract No</label>
                <input class="form-control {{ $errors->has('dealContractNo') ? 'is-invalid' : '' }}" type="number" name="dealContractNo" value="{{ old('dealContractNo', '') }}" required>
                @if($errors->has('dealContractNo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dealContractNo') }}
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
                <label class="required" for="dealOpenDate">Open Date</label>
                <input class="form-control {{ $errors->has('dealOpenDate') ? 'is-invalid' : '' }}" type="date" name="dealOpenDate" value="{{ old('dealOpenDate', '') }}" required>
                @if($errors->has('dealOpenDate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dealOpenDate') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="deal_CloseDate">Closed Date</label>
                <input class="form-control {{ $errors->has('deal_CloseDate') ? 'is-invalid' : '' }}" type="date" name="deal_CloseDate" value="{{ old('deal_CloseDate', '') }}" required>
                @if($errors->has('deal_CloseDate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deal_CloseDate') }}
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
        </form>
    </div>
</div>




@endsection