@if(session()->has('success'))
    <script>
       new Noty({
            type    :'success',
            layout  :'topRight',
            text    : "{{session()->get('success')}}",
            timeout : 60000,
            killer  : true,
       }).show();
    </script>
@endif