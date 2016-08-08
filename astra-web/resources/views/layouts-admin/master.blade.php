<!doctype html>
<html lang="en">
    <head>
        @include('layouts-admin.partials._head')
    </head>
    <body>
        <div class="admin-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            @include('layouts-admin.partials._header')
            <div class="admin-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                @include('layouts-admin.partials._nav_header')
                @include('layouts-admin.partials._navigation')
            </div>
            <div class="bootstrap-iso">
                @include('layouts-admin.partials._modal')
            </div>
            <main class="bootstrap-iso mdl-layout__content mdl-color--white-100" id="content">
            </main>
        </div>
    </body>
    {!! HTML::script('/asset/js/material.min.js') !!}
    {!! HTML::script('/asset/js/jquery.js') !!}
    {!! HTML::script('/asset/js/admin.js') !!}
    {!! HTML::script('/asset/app/init.js') !!}
    {!! HTML::script('/asset/app/menu.js') !!}
    {!! HTML::script('/asset/jbox/jBox.min.js') !!}
    {!! HTML::script('asset/js/bootstrap.min.js') !!}
</html>
