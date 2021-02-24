@component('mail::message')
# کد فعالسازی

یک کد برای شما کاربر عزیز فرستاده شد لطفا وریفای کنید

@component('mail::panel', ['url' => ''])
کد فعالسازی:{{$code}}
@endcomponent

با تشکر وب سایت قاسمی,<br>
{{ config('app.name') }}
@endcomponent
