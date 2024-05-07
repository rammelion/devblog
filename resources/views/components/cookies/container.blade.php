<script>
    // Define dataLayer and the gtag function.
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    // Set default consent to 'denied' as a placeholder
    // Determine actual values based on your own requirements
    gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied'
    });
</script>

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