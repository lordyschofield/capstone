@extends('layouts.base')


@section('content')

<div class="card bg-gray-300 ">
    <div class="card-header mx-5 my-5">
        {{ trans('CREATE') }} {{ trans('LEADS') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("leads.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="lead_name">Lead Name</label>
                <input class="form-control {{ $errors->has('lead_name') ? 'is-invalid' : '' }}" type="text" name="lead_name" id="lead_name" value="{{ old('lead_name', '') }}" required>
                @if($errors->has('lead_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lead_name') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="company">Company</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" value="{{ old('company', '') }}" required>
                @if($errors->has('company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="phone">Phone</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="0912-345-6789" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" name="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="lead_source">Lead Source</label>
                <input class="form-control {{ $errors->has('lead_source') ? 'is-invalid' : '' }}" type="text" name="lead_source" value="{{ old('lead_source', '') }}" required>
                @if($errors->has('lead_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lead_source') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="lead_owner">Lead Owner</label>
                <input class="form-control {{ $errors->has('lead_owner') ? 'is-invalid' : '' }}" type="text" name="lead_owner" value="{{ old('lead_owner', '') }}" required>
                @if($errors->has('lead_owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lead_owner') }}
                    </div>
                @endif
                
            </div>

            
            <div class="form-group">
                <label class="required" for="lead_status">Lead Status</label>
                <input class="form-control {{ $errors->has('lead_status') ? 'is-invalid' : '' }}" type="text" name="lead_status" value="{{ old('lead_status', '') }}" required>
                @if($errors->has('lead_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lead_status') }}
                    </div>
                @endif
                
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