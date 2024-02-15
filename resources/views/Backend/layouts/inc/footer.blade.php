

@php
use App\Models\Footer;
$footer=App\Models\Footer::where('id','1')->first();
@endphp
<footer class="main-footer">
    <strong>Copyright &copy;<a href="#">{{ $footer->copy_right }}</a></strong>
    <div class="float-right d-none d-sm-inline-block">
    <b>All rights reserved</b>
    </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>

