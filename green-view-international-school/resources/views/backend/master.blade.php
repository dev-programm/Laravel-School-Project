
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        @include('backend.includes.style')
    </head>
    <body class="sb-nav-fixed">
        {{-- header start --}}
      @include('backend.includes.header')

      {{-- header end --}}
              {{-- content start --}}
                    @yield('content')
                {{-- content end --}}
              {{-- footer start --}}
                @include('backend.includes.fotter')
              {{-- footer end --}}
            </div>
        </div>
        {{-- script start --}}
       @include('backend.includes.script')
        {{-- script end --}}
    </body>
</html>
