@if(('app.google_tag_set')!==null)
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.ga_tracking_id') }}"></script>
    <script>function gtag_set(tracking_id) {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', tracking_id);
    }
    gtag_set({{ config('app.ga_tracking_id') }});
    </script>
@endif