<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>

<script src="{{ asset('assets/admin/vendors/global/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/demo1/pages/dashboard.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/demo1/pages/custom/apps/user/list-datatable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/assets/vendors/jquery.min.js') }}"></script>
<script>
    $('#type').click(function(){
        $d_val = $('#type').val();
        if($d_val == "debit"){
            $('#porfolio').show();
        }else {
            $('#porfolio').hide();
        }
    })
</script>