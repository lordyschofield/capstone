@extends('layouts.base')


@section('content')

<div class="cardw-1/2 bg-blue-300 rounded shadow-2xl p-8 ml-64bg-gray-300 ">
    <div class="card-header mx-5 my-5">
        {{ trans('CREATE') }} {{ trans('NEW ACTIVITY') }}
    </div>

    <div class="card-body text-center items-center">
        <form method="POST" action="{{ route("activities.store") }}" enctype="multipart/form-data"autocomplete="off">
            @csrf
            <div class="form-group">
                <label class="required" for="activity_type">Activity Type</label>
                <input list="ActivityType" class="form-control {{ $errors->has('activity_type') ? 'is-invalid' : '' }}" type="text" name="activity_type" id="activity_type" value="{{ old('activity_type', '') }}" required>
                @if($errors->has('activity_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('activity_type') }}
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
                <label class="required" for="subject">Subject</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" value="{{ old('subject', '') }}" required>
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="email">Status</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" value="{{ old('status', '') }}" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="date">Date</label>
                <input class="form-control w-56 {{ $errors->has('date') ? 'is-invalid' : '' }}" type="date" name="date" value="{{ old('date', '') }}" required>
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="time">Time</label>
                <input class="form-control w-56 {{ $errors->has('time') ? 'is-invalid' : '' }}" type="time" name="time" value="{{ old('time', '') }}" required>
                @if($errors->has('time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time') }}
                    </div>
                @endif
                
            </div>

            <div class="form-group">
                <label class="required" for="priority">Priority</label>
                <input list="Priority" class="form-control {{ $errors->has('priority') ? 'is-invalid' : '' }}" type="text" name="priority" value="{{ old('priority', '') }}" required>
                @if($errors->has('priority'))
                    <div class="invalid-feedback">
                        {{ $errors->first('priority') }}
                    </div>
                @endif
                <datalist id="Priority">
                    <option value="High">
                    <option value="Low">
                
                </datalist>
            </div>

            
            <div class="form-group">
                <label class="required" for="activity_owner">Activity Owner</label>
                <input class="form-control {{ $errors->has('activity_owner') ? 'is-invalid' : '' }}" type="text" name="activity_owner" value="{{ old('activity_owner', '') }}" required>
                @if($errors->has('activity_owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('activity_owner') }}
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