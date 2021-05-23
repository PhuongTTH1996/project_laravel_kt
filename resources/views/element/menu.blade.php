<div class="topnav"  id="menu">
    <a  class="{{ Request::path() ==  'home' ? 'active' : '' }}" href="/home">Trang chủ</a>
    <a  class="{{ Request::path() ==  'product' ? 'active' : '' }}" href="/product">Bán hàng</a>
    <a href="#">Khách hàng</a>
    <a href="#">Quản lý kho </a>
    <a href="#">Liên hệ</a>
    <div class="topnav-right">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

</div>

@section('script')

    <script type="text/javascript">

    $("#menu a").click(function(e) {
        // $(this).addClass('active');
        // $(this).parent().addClass('selected').siblings().removeClass('selected');
        $('a .active').removeClass('active');
        $(this).addClass('active')

    });
    </script>


@stop
