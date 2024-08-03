<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cashed</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <main class="d-flex justify-content-center align-items-center">
        <section
            class="d-flex justify-content-center align-items-center flex-column p-2 shadow-lg min-vh-100 main-content">
            <div class="ms-auto mb-0 mt-4 me-3">
                <form action="{{ route('language.change') }}" method="get">
                    <select class="locale form-select" aria-label="Language selector" name="locale"
                        onchange="this.form.submit()">
                        @foreach ($available_locales as $locale_name => $locale_value)
                            <option value="{{ $locale_value }}" @selected($locale_value === $current_locale)>
                                {{ strtoupper($locale_value) }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <div class="w-75 mt-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="3.5rem" height="3.5rem" viewBox="0 0 24 24"
                    class="mb-4">
                    <path fill="currentColor"
                        d="M12 21v-2h7V5h-7V3h7q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm-2-4l-1.375-1.45l2.55-2.55H3v-2h8.175l-2.55-2.55L10 7l5 5z" />
                </svg>
                <div class="mb-5">
                    <h2 class="fw-bold">{{ __('Log In to') }} <span class="main-text">Cashed</span></h2>
                    <p class="mb-0">
                        {!! __('Welcome back! Continue using this site by entering your credentials.') !!}
                    </p>
                </div>
                <form>
                    <div class="d-flex flex-column gap-2 mb-5">
                        <div class="input-group mb-2">
                            <div class="input-group-text bg-white">
                                <label for="email">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2.243 6.854L11.49 1.31a1 1 0 0 1 1.028 0l9.24 5.545a.5.5 0 0 1 .242.429V20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.283a.5.5 0 0 1 .243-.429m16.103 1.39l-6.285 5.439l-6.414-5.445l-1.294 1.524l7.72 6.555l7.581-6.56z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control border-start-0 ps-1" id="email"
                                    name="email" placeholder="Email" autocomplete="email">
                                <label for="email" class="ps-1">Email</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text bg-white">
                                <label for="password">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control border-start-0 border-end-0 ps-1"
                                    id="password" name="password" placeholder="Password"
                                    autocomplete="current-password">
                                <label for="password" class="ps-1">{{ __('Password') }}</label>
                            </div>
                            <div class="input-group-text bg-white">
                                <button type="button" for="password" id="btn-toggle-password-visibility"
                                    class="bg-white border-0 p-0 text-primary fw-bold">{{ __('Show') }}</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                            <a href="" class="text-end ms-2 forgot-password">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">{{ __('Log In') }}</button>
                </form>
            </div>
            <footer class="mt-auto d-flex flex-column align-items-center text-center">
                <div class="social-icons mb-3 mt-5 d-flex gap-3">
                    <a href="mailto:daffafaiqhs@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M2.243 6.854L11.49 1.31a1 1 0 0 1 1.028 0l9.24 5.545a.5.5 0 0 1 .242.429V20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.283a.5.5 0 0 1 .243-.429m16.103 1.39l-6.285 5.439l-6.414-5.445l-1.294 1.524l7.72 6.555l7.581-6.56z" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/daffafaiqhs/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18.336 18.339h-2.665v-4.177c0-.996-.02-2.278-1.39-2.278c-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387c2.7 0 3.2 1.778 3.2 4.092v4.714M7.004 8.575a1.546 1.546 0 0 1-1.548-1.549a1.548 1.548 0 1 1 1.547 1.549m1.336 9.764H5.667V9.75H8.34zM19.67 3H4.33C3.594 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.339C20.4 21 21 20.42 21 19.703V4.297C21 3.581 20.4 3 19.666 3z" />
                        </svg>
                    </a>
                    <a href="https://github.com/daffafaiqhs">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12.001 2c-5.525 0-10 4.475-10 10a9.99 9.99 0 0 0 6.837 9.488c.5.087.688-.213.688-.476c0-.237-.013-1.024-.013-1.862c-2.512.463-3.162-.612-3.362-1.175c-.113-.288-.6-1.175-1.025-1.413c-.35-.187-.85-.65-.013-.662c.788-.013 1.35.725 1.538 1.025c.9 1.512 2.337 1.087 2.912.825c.088-.65.35-1.087.638-1.337c-2.225-.25-4.55-1.113-4.55-4.938c0-1.088.387-1.987 1.025-2.687c-.1-.25-.45-1.275.1-2.65c0 0 .837-.263 2.75 1.024a9.3 9.3 0 0 1 2.5-.337c.85 0 1.7.112 2.5.337c1.913-1.3 2.75-1.024 2.75-1.024c.55 1.375.2 2.4.1 2.65c.637.7 1.025 1.587 1.025 2.687c0 3.838-2.337 4.688-4.562 4.938c.362.312.675.912.675 1.85c0 1.337-.013 2.412-.013 2.75c0 .262.188.574.688.474A10.02 10.02 0 0 0 22 12c0-5.525-4.475-10-10-10" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/daffafaiqh">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5" />
                        </svg>
                    </a>
                </div>
                <p class="footer-text">{!! __('Feel free to report any bugs you may find!') !!}<br>
                    Cashed {{ __('Version') }} 2.0 | {!! __('Created with &#x1F4BB by Daffa Faiq') !!}</p>
            </footer>
        </section>
    </main>

    <script>
        const passwordInput = document.getElementById("password");
        const toggleButton = document.getElementById("btn-toggle-password-visibility");

        function showPasswordField() {
            passwordInput.type = "text";
            toggleButton.innerHTML = "{{ __('Hide') }}";
        }

        function hidePasswordField() {
            passwordInput.type = "password";
            toggleButton.innerHTML = "{{ __('Show') }}";
        }

        toggleButton.addEventListener("click", togglePasswordVisibility);

        function togglePasswordVisibility() {
            if (passwordInput.type === "password") {
                showPasswordField();
            } else {
                hidePasswordField();
            }
        }

        function updateToggleButton() {
            const isEmpty = !(passwordInput.value) && passwordInput != document.activeElement
            if (isEmpty) {
                hidePasswordField();
            }

            if (passwordInput.value || passwordInput === document.activeElement) {
                toggleButton.style.display = "inline";
            } else {
                toggleButton.style.display = "none";
            }
        }

        passwordInput.addEventListener("focus", updateToggleButton);
        passwordInput.addEventListener("blur", updateToggleButton);
        passwordInput.addEventListener("input", updateToggleButton);

        // Initial call to hide the button if the password field is empty
        updateToggleButton();
    </script>
</body>

</html>
