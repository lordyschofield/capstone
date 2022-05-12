@extends('layouts.base')


@section('content')


    <div style="margin-bottom: 10px;" class="row float-right" >
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('contacts.create') }}">
                {{ trans('Create') }} {{ trans('Contacts') }}
            </a>
        </div>
    </div>


    <form action="{{route('search-contacts')}}" method="GET">
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
                              {{ trans('Contact NAME') }}
                          </th>
                          
                          <th>
                            {{ trans('account') }}
                        </th>

                        <th>
                            {{ trans('EMAIL') }}
                        </th>
                        
                        <th>
                            {{ trans('PHONE') }}
                        </th>
                        <th>
                            {{ trans('type') }}
                        </th>
                        <th>
                            {{ trans('source') }}
                        </th>

                        <th>
                            {{ trans('contact owner') }}
                        </th>

                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($contacts as $key => $contact)
                          <tr class="" data-entry-id="{{ $contact->id }}">
                                <td></td>
                              <td>
                                  {{ $contact->id ?? '' }}
                              </td>
                              <td>
                                  {{ $contact->contact_name ?? '' }}
                              </td>
                              <td>
                                {{ $contact->account ?? '' }}
                              </td>
                              <td>
                                {{ $contact->email ?? '' }}
                            </td>
                            <td>
                                {{ $contact->phone ?? '' }}
                            </td>
                            <td>
                                {{ $contact->type ?? '' }}
                            </td>
                            <td>
                                {{ $contact->source ?? '' }}
                            </td>
                            <td>
                                {{ $contact->contact_owner ?? '' }}
                            </td>
                                            
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  
  
  
  
  

          

  
          
</div>

<footer class="p-4 mt-96 footer bg-base-300 text-base-content footer-center">
    <div>
      <p>Copyright © 2022 - All right reserved by Philippine Medical Supplies</p>
    </div>
  </footer>

      
@endsection