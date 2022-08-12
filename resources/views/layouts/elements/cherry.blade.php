<div class="my-12">
    <div id="all"></div>
</div>

@push('scripts')
<script>
    (function(w, d, s, o, f, js, fjs) {
        w[o] = w[o] || function() {
            (w[o].q = w[o].q || []).push(arguments);
        };
        (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
        js.id = o;
        js.src = f;
        js.async = 1;
        fjs.parentNode.insertBefore(js, fjs);
    })(window, document, "script", "_hw", ' https://files.withcherry.com/widgets/widget.js');
    _hw("init", {
        debug: false,
        variables: {
            slug: 'beyondesthetics',
            name: 'Beyond Esthetics',
        },
        styles: {
            primaryColor: '#7e7db4',
            secondaryColor: '#00000000',
            fontFamily: 'Montserrat',
        },
    }, ["all", "hero", "howitworks", "testimony", "faq", "calculator"]);
</script>
@endpush