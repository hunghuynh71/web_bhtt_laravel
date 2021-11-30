@php
$list_menu = config('admin_menu');
$mod_active = session('mod_active');
@endphp

<div id="sidebar" class="bg-white">
    <ul id="sidebar-menu">
        @if(!empty($list_menu))
        @foreach($list_menu as $menu)
        <li class="nav-link <?php echo $mod_active==$menu['module']?'active':''; ?>">
            <a href="{{route($menu['route'])}}">
                <div class="nav-link-icon d-inline-flex">
                    <i class="{{$menu['icon']}}"></i>
                </div>
                {{$menu['name']}}
            </a>
            @if(isset($menu['items']))
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
                @foreach($menu['items'] as $item)
                <li><a href="{{route($item['route'])}}">{{$item['name']}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
        @endif
    </ul>
</div>