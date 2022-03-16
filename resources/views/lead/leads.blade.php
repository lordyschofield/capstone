@extends('layouts.base')


@section('content')


    <div style="margin-bottom: 10px;" class="row float-right" >
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('leads.create') }}">
                {{ trans('Create') }} {{ trans('Leads') }}
            </a>
        </div>
    </div>

    <div class="card">
      <div class="card-header ml-2">
          {{ trans('LEADS TABLE') }} {{ trans('') }}
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
                              {{ trans('LEAD NAME') }}
                          </th>
                          
                          <th>
                            {{ trans('COMPANY') }}
                        </th>

                        <th>
                            {{ trans('EMAIL') }}
                        </th>
                        
                        <th>
                            {{ trans('PHONE') }}
                        </th>
                        <th>
                            {{ trans('LEAD SOURCE') }}
                        </th>
                        <th>
                            {{ trans('LEAD OWNER') }}
                        </th>

                        <th>
                            {{ trans('LEAD STATUS') }}
                        </th>

                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($leads as $key => $lead)
                          <tr class="" data-entry-id="{{ $lead->id }}">
                                <td></td>
                              <td>
                                  {{ $lead->id ?? '' }}
                              </td>
                              <td>
                                  {{ $lead->lead_name ?? '' }}
                              </td>
                              <td>
                                {{ $lead->company ?? '' }}
                              </td>
                              <td>
                                {{ $lead->email ?? '' }}
                            </td>
                            <td>
                                {{ $lead->phone ?? '' }}
                            </td>
                            <td>
                                {{ $lead->lead_source ?? '' }}
                            </td>
                            <td>
                                {{ $lead->lead_owner ?? '' }}
                            </td>
                            <td>
                                {{ $lead->lead_status ?? '' }}
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