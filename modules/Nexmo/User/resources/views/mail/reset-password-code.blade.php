@component('mail::message')
    # بازیابی رمز عبور

    لطفا کد مورد نظر که برای شما ارسال شده است ان را در فیلد مربوطه قرار دهید

    @component('mail::panel', ['url' => ''])
        کد بازیابی شما : {{$code}}
    @endcomponent

    تشکر,<br>
    {{ config('app.name') }}
@endcomponent
