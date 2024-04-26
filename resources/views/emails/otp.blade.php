<x-mail::message>
    # Introduction

    Here is your OTP: {{ $otp }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>

