@extends('layouts.base')
@section('page', 'Setting/Employee/Profile')
@section('title', __('Profile'))

@section('content')
    <div class="card rounded-md shadow bg-white mb-5">
        <div class="card-body pb-0">
            <div class="flex flex-row items-center space-x-5">
                <div>
                    <div class="avatar">
                        <div class="rounded-btn w-20 h-20">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-1">{{ $info->firstLastName }}</h2>
                    
                </div>
                <div class="self-start">
                    <div class="flex space-x-2 flex-0">
                        <button class="btn btn-sm btn-square btn-outline btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 class="inline-block w-6 h-6 stroke-current"><!----> <!----> <!----> <!----> <!---->
                                <!---->
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!---->
                                <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tabs font-semibold mt-8">
                <a class="tab tab-bordered mr-4 tab-active" @click="activateTab('info', $event)">
                    Personal Information
                </a>
            </div>
        </div>
    </div>

    <!-- Tab Contents -->
    <personal-info :info="{{ $info }}" v-if="activeTab === 'info'"></personal-info>
    
@endsection
