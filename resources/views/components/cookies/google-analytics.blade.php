<!-- Google tag (gtag.js) -->
@if(('app.google_tag_set')!==null)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{config('app.google_tag_id')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());
        gtag('config', '{{config('app.google_tag_id')}}');
    </script>

    <!-- Create one update function for each consent parameter -->
    <script>
        function consentGrantedAnalyticsStorage() {
            gtag('consent', 'update', {
                'analytics_storage': 'granted'
            });
        }
    </script>
@endif