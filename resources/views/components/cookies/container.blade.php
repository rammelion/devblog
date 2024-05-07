

@php
    $functionalityCookie = config('cookies_consent.cookie_prefix')  . 'cookies_consent_functionality';
    $performanceCookie = config('cookies_consent.cookie_prefix')  . 'cookies_consent_performance';
    $statisticalCookie = config('cookies_consent.cookie_prefix')  . 'cookies_consent_statistical';
    $targetingCookie = config('cookies_consent.cookie_prefix')  . 'cookies_consent_targeting';
@endphp

@if(
    isset($_COOKIE[$functionalityCookie])
)
    <x-cookies.functionality />
@endif

@if(
    isset($_COOKIE[$performanceCookie])
)
    <x-cookies.performance />
@endif

@if(
    isset($_COOKIE[$statisticalCookie])
)
    <x-cookies.statistical />
@endif

@if(
    isset($_COOKIE[$targetingCookie])
    )
    <x-cookies.targeting />
@endif