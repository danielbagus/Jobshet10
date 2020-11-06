<li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
            @can('manage-articles')
            <a class="nav-link" href="{{ route('manage') }}">Kelola</a> 
            @endcan
            </li>
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"> 
            @can('user-display')
            <a class="nav-link" href="{{ route('home') }}">Home</a> 
            @endcan
            </li>
            <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"> 
            @can('user-display')
            <a class="nav-link" href="{{ route('about') }}">About</a> 
            @endcan

            <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
 @can('manage-articles')
 <a class="nav-link" href="{{ route('manage') }}">Kelola</a>
 @endcan
</li>