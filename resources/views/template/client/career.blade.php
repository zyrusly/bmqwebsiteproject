<x-mail::message>
# Introduction

{{ $data['email'] }}
{{ $message->embed($data['attachment']) }}
{{-- {{ $data }} --}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
