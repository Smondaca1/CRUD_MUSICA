<?php 
    include "../controller/user.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Login</title>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-auto w-80" src="../assets/CRUD_logo.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Ingresa a tu cuenta</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Usuario</label>
                    <div class="mt-2">
                        <input id="user" name="user" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                        <div class="text-sm">
                            <a href="reset_password.php" class="font-semibold text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <input name="submitBtn" type="submit" value="Iniciar sesión" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>