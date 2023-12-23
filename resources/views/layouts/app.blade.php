<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Laravel Crud</title>
    </head>
<body>
<nav>
    <ul class="nav navbar-expand-sm bg-dark">
        <li class="nav-item">
          <a class="nav-link text-light" href="/">Tikets</a>
        </li>
      </ul>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>

    @endif

    @yield('main')

</body>
</html>
