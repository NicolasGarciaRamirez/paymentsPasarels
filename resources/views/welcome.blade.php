<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Payments Passarels</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div class="container-fluid" id="app">
            <div class="m=auto pt-5">
                <div>
                    <Index />
                </div>
            </div>
        </div>
        <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_TEST_CLIENT_ID') }}"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
