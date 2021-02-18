<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\app.css">
    <script src="\js\log.js"></script>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <title>nmi</title>
</head>
<body>
    <h1 class="text-center">login here </h1>
    <form action="" method="POST" class="center">
        <label class="mdc-text-field mdc-text-field--filled username m-4">
        <span class="mdc-text-field__ripple"></span>
        <input type="text" class="mdc-text-field__input" aria-labelledby="username-label" name="username">
        <span class="mdc-floating-label" id="username-label">Username</span>
        <span class="mdc-line-ripple"></span>
        </label>

        <label class="mdc-text-field mdc-text-field--filled password m-4">
        <span class="mdc-text-field__ripple"></span>
        <input type="password" class="mdc-text-field__input" aria-labelledby="password-label" name="password">
        <span class="mdc-floating-label" id="password-label">Password</span>
        <span class="mdc-line-ripple"></span>
        </label>

    </form>
</body>
</html>