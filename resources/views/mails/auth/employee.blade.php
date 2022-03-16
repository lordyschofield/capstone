@component('mail::message')
# Hi {{ $employee->nickname ?? $employee->first_name }},

You can now sign in to your Rethink CRM account! Below is your email and password that you'll use to log in.

<strong>Email: </strong> {{ $employee->email }}
<br>
<strong>Password: </strong> {{ $password }}

@component('mail::button', ['url' => $url])
    Login to Rethink CRM
@endcomponent

<br>
If the button above doesn't work, copy and use this link: <strong><a href="{{ $url }}">{{ $url }}</a></strong>
<br>
<br>
We highly suggest that you immediately change your password upon logging in. Just simply go to Settings > <a href="{{ $url }}/employee/settings/change-password">Change Password</a>.
<br>
<br>
<br>
@endcomponent
