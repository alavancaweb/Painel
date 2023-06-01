<?php

session_start();

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}?>


<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile not-navigation-link">
            <div class="nav-link"></div>
        </li>

        <li class="nav-item {{ active_class(['/clientes']) }}">
            <a class="nav-link" href="{{ url('/clientes') }}">
                <i class="menu-icon mdi mdi-account-key"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li>
    </ul>
</nav>
