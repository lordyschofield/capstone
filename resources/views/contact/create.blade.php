@extends('layouts.base')


@section('content')

<div class="card w-1/2 bg-blue-300 rounded shadow-2xl p-8 ml-64">
    <div class="card-header mx-5 my-5">
        {{ trans('CREATE') }} {{ trans('LEADS') }}
    </div>
    <div class="card-body text-center items-center"> 
    <div class="card-body">
        <form method="POST" action="{{ route("contacts.store") }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-group">
                <label class="required" for="contact_name">Contact Name</label>
                <input class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" type="text" name="contact_name" id="contact_name" value="{{ old('contact_name', '') }}" required>
                @if($errors->has('contact_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_name') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="required" for="account">Account</label>
                <input class="form-control {{ $errors->has('account') ? 'is-invalid' : '' }}" type="text" name="account" value="{{ old('account', '') }}" required>
                @if($errors->has('account'))
                    <div class="invalid-feedback">
                        {{ $errors->first('account') }}
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
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="0912-345-6789" type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="type">Type</label>
                <input list="ContactType" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" value="{{ old('type', '') }}" required>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <datalist id="ContactType">
                    <option value="Internet Explorer">
                    <option value="Firefox">
                    <option value="Chrome">
                    <option value="Opera">
                    <option value="Safari">
                </datalist>
                
            </div>

            <div class="form-group">
                <label class="required" for="source">Source</label>
                <input class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" type="text" name="source" value="{{ old('source', '') }}" required>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                
            </div>

            
            <div class="form-group">
                <label class="required" for="contact_owner">Contact Owner</label>
                <input class="form-control {{ $errors->has('contact_owner') ? 'is-invalid' : '' }}" type="text" name="contact_owner" value="{{ old('contact_owner', '') }}" required>
                @if($errors->has('contact_owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_owner') }}
                    </div>
                @endif
                
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