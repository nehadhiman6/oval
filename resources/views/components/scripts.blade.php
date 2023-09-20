
<script>
    var appname = "{{ config('app.name') }}";
    window[appname] = {
        base_url: "{{ url('/') }}",
        today: "{{ getToday('d-m-Y') }}",
    };

    console.log(appname);

</script>
<script defer src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>
<script type="text/javascript" defer src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/cr-1.5.6/fc-4.1.0/fh-3.2.4/r-2.3.0/rr-1.2.8/sl-1.4.0/datatables.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script type="module">
    $(document).on('mouseenter', '.iw-sidebar', function() {
        if ($('body').hasClass('sidebar-mini')) {
            $(this).removeClass('expand');   //chnaged by neha because of a bug // replaced toggleClass with removeClass
            $('.iw-sidenav').toggleClass('expand');
            $('.iw-logo').toggleClass('expand');
        }
    });

    $(document).on('mouseleave', '.iw-sidebar', function() {
        if ($('body').hasClass('sidebar-mini')) {
            $(this).addClass('expand'); // replaced toggleClass with addClass
            $('.iw-sidenav').toggleClass('expand');
            $('.iw-logo').toggleClass('expand');
        }
    });
</script>
