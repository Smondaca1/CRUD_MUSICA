<?php 
    include "../controller/change_password.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Recuperar contraseña</title>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-auto w-80" src="../assets/CRUD_logo.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Recupera tu contraseña</h2>
            <span class="block text-center text-2xl leading-9 tracking-tight text-gray-500 italic">o</span>
            <a href="login.php" class="block text-center text-2xl font-bold leading-9 tracking-tight text-indigo-600 underline underline-offset-8 hover:text-indigo-500 italic">Inicia sesión</a>
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
                        <label for="newPassword" class="block text-sm font-medium leading-6 text-gray-900">Nueva contraseña</label>
                    </div>
                    <div class="mt-2">
                        <input id="newPassword" name="newPassword" type="password" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                
                <div>
                    <div class="flex items-center justify-between">
                        <label for="confirmPassword" class="block text-sm font-medium leading-6 text-gray-900">Confirmar contraseña</label>
                    </div>
                    <div class="mt-2">
                        <input id="confirmPassword" name="confirmPassword" type="password" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <input name="submitBtn" type="submit" value="Confirmar" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
    <script>
        const timerContent = document.querySelector("#timerContent");
        let number = 5;
        const timer = setInterval(() => {
            number--;
            if(number == 0) {
                clearInterval(timer);
            }
            timerContent.textContent = number
        }, 1000);
    </script>
</body>
</html>