@extends('layouts.base')


@section('content')


    <div style="margin-bottom: 10px;" class="row float-right" >
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('activities.create') }}">
                {{ trans('Create') }} {{ trans('Contacts') }}
            </a>
        </div>
    </div>

    <div class="card">
      <div class="card-header ml-2">
          {{ trans('Contacts TABLE') }} {{ trans('') }}
      </div>
  
      <div class="card-body">
          <div class="table-responsive">
              <table class=" table table-bordered table-striped table-hover datatable datatable-TimeProject">
                  <thead>
                      <tr>
                          <th width="10">
  
                          </th>
                          <th>
                              {{ trans('ID') }}
                          </th>
                          <th>
                              {{ trans('Activity Type') }}
                          </th>
                          
                          <th>
                            {{ trans('Subject') }}
                        </th>

                        <th>
                            {{ trans('Status') }}
                        </th>
                        
                        <th>
                            {{ trans('Date') }}
                        </th>
                        <th>
                            {{ trans('time') }}
                        </th>
                        <th>
                            {{ trans('priority') }}
                        </th>

                        <th>
                            {{ trans('activity owner') }}
                        </th>

                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($activities as $key => $activity)
                          <tr class="" data-entry-id="{{ $activity->id }}">
                                <td></td>
                              <td>
                                  {{ $activity->id ?? '' }}
                              </td>
                              <td>
                                  {{ $activity->activity_type ?? '' }}
                              </td>
                            
                              <td>
                                {{ $activity->subject ?? '' }}
                            </td>
                                            
                            <td>
                                {{ $activity->status ?? '' }}
                            </td>

                            <td>
                                {{ $activity->date ?? '' }}
                            </td>
                            <td>
                                {{ $activity->time ?? '' }}
                            </td>
                            <td>
                                {{ $activity->priority ?? '' }}
                            </td>
                            <td>
                                {{ $activity->activity_owner ?? '' }}
                            </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  
  
  
  
  

          
<div class="flex items-center pb-3">
  <div class="flex border-2 rounded">
      <input type="text" class="px-4 py-2 w-80" placeholder="Search...">
      <button class="flex items-center justify-center px-4 border-l">
          <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                  d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
          </svg>
      </button>
      
  </div>
  
          
</div>




  
      
@endsection