<header class="admin-drawer-header">
    <img src="{{ asset('asset/img/brand.jpg') }}" class="admin-avatar">
    <div class="admin-avatar-dropdown">
        <span>ADMIN</span>
        <div class="mdl-layout-spacer">
        </div>
        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons">arrow_drop_down</i>
        </button>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <li class="mdl-menu__item"><a href="/auth/logout" class="mdl-button mdl-js-button mdl-js-ripple-effect">logout</a></li>
        </ul>
    </div>
</header>