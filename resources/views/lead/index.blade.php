@extends('layouts.base')


@section('content')


    <div style="margin-bottom: 10px;" class="row float-right" >
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('leads.create') }}">
                {{ trans('Create') }} {{ trans('Leads') }}
            </a>
        </div>
    </div>

    <form action="{{route('search-leads')}}" method="GET">
        @csrf
    <div class="flex items-center pb-3">
        <div class="flex border-2 rounded">
            <input type="text" name="query" id="query" class="px-4 py-2 w-80" value="" placeholder="Search...">
            <input type="submit" class="flex items-center justify-center px-4 border-l">
                
            </input>
        </div>  
      </div>
    </form>

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
                                            
                            <td>
                                <form action="{{ route('leads.destroy',$lead->id) }}" method="POST">
   
                                    <a class="btn btn-primary" href="{{ route('leads.edit',$lead->id) }}">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  
  
  <footer class="p-4 mt-96 footer bg-base-300 text-base-content footer-center">
    <div>
      <p>Copyright © 2022 - All right reserved by Philippine Medical Supplies</p>
    </div>
  </footer>
  

  
      
@endsection