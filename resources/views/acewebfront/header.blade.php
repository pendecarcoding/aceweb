<header>
      <nav id="myTopnav" class="topnav">
         @foreach(getnav() as $v)
        <a href="{{ url($v['link']) }}" @if(Request::is($v['link'].'*'))class="active"@endif>{{ $v['name'] }}</a>
        @endforeach
        <a class="ace-button" href="https://gtp.ace2u.com/">Login GTP</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
