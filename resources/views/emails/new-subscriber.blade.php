@component('mail::message')
# Good News!

We have added another subscriber, {{ $subscriber->first_name . ' ' . $subscriber->last_name }}.

@component('mail::button', ['url' => 'https://staging.beyondestheticsmedspa.com/admin'])
Admin Panel Log In
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
