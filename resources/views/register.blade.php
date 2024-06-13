<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>
        @vite('resources/css/app.css')
        @vite('resources/js/j.js')
    </head>
    <body >

    <section class="bg-gray-200 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center min-h-screen px-6 py-8 mx-auto lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create your Free Account
                    </h1>
                    <div class="flex justify-between space-x-1">
                        <button class="flex items-center justify-center w-full py-2 space-x-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 48 48">
                                <path d="M24 10.1a13.4 13.4 0 0 1 9.5 3.7l6.9-6.9A23.7 23.7 0 0 0 24 0C14.8 0 6.7 5.2 2.3 13.1l7.9 6.2A13.4 13.4 0 0 1 24 10.1Z" fill="#EA4335"/><path d="M46.2 24.6c0-1.5-.1-3-.4-4.5H24v9.1h12.6a10.8 10.8 0 0 1-4.7 7.1l7.3 5.8a23.8 23.8 0 0 0 7-17.5Z" fill="#4285F4"/><path d="M10.2 28.7a13.3 13.3 0 0 1-.7-4.2c0-1.5.3-2.9.7-4.2L2 14a24.1 24.1 0 0 0 0 20l8.2-6.3Z" fill="#FBBC05"/><path d="M24 47.9c6.4 0 11.8-2.1 15.7-5.7l-7.3-5.8c-2.1 1.4-4.7 2.3-8.4 2.3a13.4 13.4 0 0 1-12.7-9.1l-7.9 6.2C6.7 42.8 14.8 48 24 48Z" fill="#34A853"/><path d="M0 0h48v48H0z" fill="none"/>
                            </svg>
                            <span>Sign up with Google</span>
                        </button>
                    </div>
                    <div class="flex items-center my-4">
                        <hr class="flex-1 border-t border-gray-300 dark:border-gray-600">
                        <span class="px-4 text-sm text-gray-500 dark:text-gray-400">or</span>
                        <hr class="flex-1 border-t border-gray-300 dark:border-gray-600">
                    </div>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <select name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Choose a country</option>
                                <!-- More options -->
                            </select>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">By signing up, you are creating a Flowbite account, and you agree to Flowbite's <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms of Use and Privacy Policy</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{route('login')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>



    </body>
</html>
