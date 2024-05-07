@if(('app.google_tag_set')!==null)
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PJWG2DJF55"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PJWG2DJF55');
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