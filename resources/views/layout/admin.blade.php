<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin GalonKu')</title>

    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>

<body>
    @yield('content')
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/js/coreui.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('template/js/coreui.bundle.min.js') }}"></script>

    <script>
        const storedTheme = localStorage.getItem('coreui-theme');

        const getPreferredTheme = () => {
        if (storedTheme) {
            return storedTheme;
        }

        return window.matchMedia('(prefers-color-scheme: dark)').matches ?
            'dark' :
            'light';
        }

        const setTheme = theme => {
            document.documentElement.setAttribute('data-coreui-theme', theme);
            localStorage.setItem('coreui-theme', theme);
        }
        setTheme(getPreferredTheme());


        document.querySelectorAll('[data-coreui-theme-value]')
            .forEach(function(button) {
                button.addEventListener('click', function() {
                    const theme = this.getAttribute('data-coreui-theme-value');
                    setTheme(theme);
                    document.querySelectorAll('[data-coreui-theme-value]')
                        .forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });

            });
    </script>

</body>

</html>
