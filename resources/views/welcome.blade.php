<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}/*@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}} */
        </style>

        <style>
            /*body */
            body {
                font-family: 'Nunito';
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                overflow: auto;
                background: linear-gradient(-45deg, #f1d4bb, #f5e7b9, #f1d4bb, #f5e7b9);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite alternate-reverse;

            }
            .pounce {
                z-index: -1;
                width: 380px;
                height: 150px;
                box-sizing: content-box;
                box-shadow: 0 25px 10px -20px rgba(0,0,0,0.6);
                transform: translatey(0px);
                animation: float 7s ease-in-out infinite;
            img { width: 100%; height: auto; }
            }
            /* Keyframes */
            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }
            @keyframes float {
                0% {
                    box-shadow: 0 25px 10px -20px rgba(0,0,0,0.6);
                    transform: translatey(0px);
                }
                50% {
                    box-shadow: 0 45px 10px -20px rgba(0,0,0,0.2);
                    transform: translatey(-6px);
                }
                100% {
                    box-shadow: 0 25px 10px -20px rgba(0,0,0,0.6);
                    transform: translatey(0px);
                }
            }
            .header{
                z-index: 1;
                width: 100%;
                display: block;
                background: #FFF;
                height: 30px;
                color: #ccc;
                font-family: sans-serif;
                font-weight: bold;
                box-shadow: 0px 2px 0px 0px rgba(125,121,125,0.3);
                overflow: hidden;
            }
            .header a{
                display: inline-block;
                font-size: .8rem;
                margin: 0px;
                line-height: 30px;
                text-decoration: none;
                /*background-color: #eee;*/
                color: #999;
                padding: 0 20px;
                transition: all ease-in-out .3s;
            }
            .header a:hover{
                background-color: #fd8700;
                color: #eee;
                margin-left: -6px;
                margin-right: 6px;
            }
            .spu {
                background: #ffe7f8;
                transition: all ease-in-out .3s
            }
            .spu:hover {
                background: rgba(255, 188, 236, 0);
            }
            .spf {
                background: #e9ffe7;
                transition: all ease-in-out .3s
            }
            .spf:hover {
                background: rgba(255, 188, 236, 0);
            }
            .spa {
                background: #fffae7;
                transition: all ease-in-out .3s
            }
            .spa:hover {
                background: rgba(255, 188, 236, 0);
            }
            .spai {
                background: #e7efff;
                transition: all ease-in-out .3s
            }
            .spai:hover {
                background: rgba(255, 188, 236, 0);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-10 " >
            @if (Route::has('login'))
                <div class="hidden header fixed top-0 right-0 px-6 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pt-8">
                <div class="flex pounce justify-center pt-8 sm:justify-start sm:pt-0">
                    <x-tcms-logo class="block  h-5 w-auto fill-current text-gray-600" />
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 spf">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path fill="#fff" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">SISTEM PENGURUSAN asdasdsadsa</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Sistem yang menawarkan kemudahan dari segi penyelenggaraan menggunakan sumber sedia ada atau kontraktor.
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Memaparkan rekod penyelenggaraan setiap asset untuk membantu pengurusan tertinggi dalam membuat keputusan berkaitan pembaikan atau penggantian.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 spa border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path fill="#fff" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">SISTEM PENGURUSAN ADUAN</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Sistem yang mengumpulkan aduan daripada pelbagai pusat tanggungjawab.
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Mampu menjana laporan aduan untuk membolehkan setiap pusat tanggungjawab menambahbaik cara kerja.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 spu border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path fill="#fff" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">SISTEM PENYELIDIKAN UNIVERSITI</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Sistem yang mendaftar dan menyimpan profil setiap penyelidik.
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Mempunyai papan pemuka bagi memudahkan pengurusan geran penyelidikan.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 spai border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 128 128" class="w-8 h-8 text-gray-500"><path fill="currentColor" d="M66.3,28.1c-0.8-1-2.1-1.4-3.3-0.9l-48,17c-0.7,0.2-1.2,0.7-1.6,1.3l-12,20c-0.7,1.1-0.6,2.5,0.2,3.4C2.3,69.6,3.1,70,4,70c0.3,0,0.7-0.1,1-0.2l48-17c0.7-0.2,1.2-0.7,1.6-1.3l12-20C67.2,30.5,67.1,29.1,66.3,28.1z"/><path fill="#fff" d="M112 47L64 30 16 47 16 107 64 124 112 107z"/><path fill="#fff" d="M112 47L64 30 16 47 16 107 64 124 112 107zM112 47L64 30"/><path fill="currentColor" d="M64,127c-0.3,0-0.7-0.1-1-0.2l-48-17c-1.2-0.4-2-1.6-2-2.8V47c0-1.3,0.8-2.4,2-2.8l48-17c1.6-0.6,3.3,0.3,3.8,1.8c0.6,1.6-0.3,3.3-1.8,3.8L19,49.1v55.8l46,16.3c1.6,0.6,2.4,2.3,1.8,3.8C66.4,126.2,65.2,127,64,127z"/><path fill="#fff" d="M112 47L64 30M112 47L64 30M64 64L16 47M124 67L76 84 64 64 112 47z"/><path fill="currentColor" d="M126.6,65.5l-12-20c0,0-0.1-0.1-0.1-0.1c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0-0.1c-0.1-0.1-0.1-0.1-0.2-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0,0,0,0,0c0,0,0,0,0,0l-48-17c-0.2-0.1-0.4-0.1-0.6-0.1c0,0-0.1,0-0.1,0c-0.2,0-0.4,0-0.5,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0.1-0.6,0.1l-48,17c-1.2,0.4-2,1.6-2,2.8v60c0,1.3,0.8,2.4,2,2.8l48,17c0,0,0,0,0,0c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.4,0c0,0,0.1,0,0.1,0c0.2,0,0.3,0,0.5,0c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V73.4l10-3.5c0.8-0.3,1.5-1,1.8-1.8S127,66.2,126.6,65.5z M103,47L67,59.8V34.2L103,47z M19,51.2l42,14.9v53.6l-42-14.9V51.2z M109,104.9l-42,14.9V74.8l6.4,10.7C74,86.5,75,87,76,87c0.3,0,0.7-0.1,1-0.2l32-11.3V104.9z M77.3,80.4l-8.9-14.8l42.2-15l8.9,14.8L77.3,80.4z"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">SISTEM PENGURUSAN ASET DAN INVENTORI</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Sistem yang membolehkan setiap aset dan inventori didaftarkan dan dikenalpasti pergerakan.
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Mampu mengenalpasti pergerakan aset termasuk status semasa termasuk aset yang perlu dilupuskan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
