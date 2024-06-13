<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>
        @vite('resources/css/app.css')
        @vite('resources/js/j.js')
    </head>
    <body>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">

        @extends('friend_top_navbar')
        {{--好友清單--}}
        <div class="h-full px-3 pb-4  overflow-y-auto bg-white dark:bg-gray-800">

            <div class="px-2 sm:pb-1">
                <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="pb-3 sm:pb-5 py-1">
                        <form class="max-w-md mx-auto">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                            </div>
                        </form>
                    </li>
                </ul>
            </div>

            <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="pb-3 sm:py-4">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

{{--    聊天訊息--}}
    <div class="flex p-4 sm:ml-64">
            @extends('chat_room')
    </div>
    </body>
</html>
