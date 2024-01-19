<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo CSS de Tailwind CSS a través de CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4d45c1fbd4.js" crossorigin="anonymous"></script>
    <title>Biblioteca</title>
</head>
<body>
<body>
    <nav class="bg-indigo-600 border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex left-0 space-x-3 rtl:space-x-reverse">
        <img src="https://cdn2.iconfinder.com/data/icons/user-interface-music/32/Mp3_player_music_play_playing_recordings_song_sound-512.png" class="h-8 w-8 mr-2" alt="Play logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only"></span>

    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="bg-indigo-600 font-medium flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        <li>
          <a href="../dashboard/create.php" class=" bg-indigo-600 py-2 px-3 text-white  md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Crear</a>
        </li>
        <li>
          <a href="../crud/index.php" class=" bg-indigo-600 py-2 px-3 text-white  md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Librería</a>
        </li>
        <li>
          <a href="#" class=" bg-indigo-600 py-2 px-3 text-white md:border-0 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Playlist</a>
        </li>
        <li>
          <a href="../controller/logout.php" class=" bg-indigo-600 py-2 px-3 text-white md:border-0 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Desconectarse</a>
        </li>
      </ul>
    </div>
  </div>
</nav>