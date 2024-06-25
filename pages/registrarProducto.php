<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/tailwind.js"></script>
</head>

<body class="flex">
    <nav id="contMenu"
        class="w-full h-24 min-w-96 bg-slate-900 flex justify-between items-center px-10 shadow-2xl fixed">
        <div id="logo" class="w-1/4 flex justify-start items-center">
            <img src="../img/logo.png" class="w-20">
            <h1 class="text-white">BioNova Pharma</h1>
        </div>

        <div>
            <h1 class="text-white">Productos</h1>
        </div>
    </nav>
    <nav class="w-1/6 h-screen bg-slate-300 shadow-2xl flex flex-col justify-center items-center">
        <ul class="w-full">
            <li class="w-full flex">
                <a class="w-full p-5 bg-slate-400 hover:bg-slate-500 flex items-center gap-4" href="#">
                    <svg class="w-10" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M7,2A1,1,0,0,1,8,1h8a1,1,0,0,1,0,2H8A1,1,0,0,1,7,2ZM3,20V8A3,3,0,0,1,6,5H18a3,3,0,0,1,3,3V20a3,3,0,0,1-3,3H6A3,3,0,0,1,3,20Zm16-1H5v1a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1ZM5,8v9H19V8a1,1,0,0,0-1-1H6A1,1,0,0,0,5,8Zm6,7h2V13h2V11H13V9H11v2H9v2h2Z">
                            </path>
                        </g>
                    </svg>
                    Productos
                </a>
            </li>
            <li class="w-full flex">
                <a class="w-full p-5 hover:bg-slate-500 flex items-center gap-4" href="#">
                    <svg class="w-10" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect width="16" height="16" id="icon-bound" fill="none"></rect>
                            <path
                                d="M16,12.5C16,11.837 15.737,11.201 15.268,10.732C14.799,10.263 14.163,10 13.5,10C11.447,10 8.553,10 6.5,10C5.837,10 5.201,10.263 4.732,10.732C4.263,11.201 4,11.837 4,12.5C4,14.147 4,15 4,15L16,15C16,15 16,14.147 16,12.5ZM3,13L0,13C0,13 0,12.147 0,10.5C0,9.837 0.263,9.201 0.732,8.732C1.201,8.263 1.837,8 2.5,8L6.536,8C6.754,8.376 7.031,8.714 7.355,9L6.5,9C4.567,9 3,10.567 3,12.5L3,13ZM10,3C11.656,3 13,4.344 13,6C13,7.656 11.656,9 10,9C8.344,9 7,7.656 7,6C7,4.344 8.344,3 10,3ZM6.126,6.997C6.084,6.999 6.042,7 6,7C4.344,7 3,5.656 3,4C3,2.344 4.344,1 6,1C7.026,1 7.932,1.516 8.473,2.302C7.022,2.903 6,4.333 6,6C6,6.344 6.044,6.679 6.126,6.997Z">
                            </path>
                        </g>
                    </svg>
                    Clientes
                </a>
            </li>
            <li class="w-full flex">
                <a class="w-full p-5 hover:bg-slate-500 flex items-center gap-4" href="#">
                    <svg class="w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M16.5098 5.01L14.5498 3.05C13.1498 1.65 10.8498 1.65 9.44977 3.05L7.48977 5.01C7.09977 5.4 7.09977 6.04 7.48977 6.43L11.2998 10.24C11.6898 10.63 12.3198 10.63 12.7098 10.24L16.5198 6.43C16.8998 6.04 16.8998 5.4 16.5098 5.01Z"
                                fill="#000000"></path>
                            <path
                                d="M5.01 7.49172L3.05 9.45172C1.65 10.8517 1.65 13.1517 3.05 14.5517L5.01 16.5117C5.4 16.9017 6.03 16.9017 6.42 16.5117L10.23 12.7017C10.62 12.3117 10.62 11.6817 10.23 11.2917L6.43 7.49172C6.04 7.10172 5.4 7.10172 5.01 7.49172Z"
                                fill="#000000"></path>
                            <path
                                d="M20.9491 9.45172L18.9891 7.49172C18.5991 7.10172 17.9691 7.10172 17.5791 7.49172L13.7691 11.3017C13.3791 11.6917 13.3791 12.3217 13.7691 12.7117L17.5791 16.5217C17.9691 16.9117 18.5991 16.9117 18.9891 16.5217L20.9491 14.5617C22.3491 13.1517 22.3491 10.8517 20.9491 9.45172Z"
                                fill="#000000"></path>
                            <path
                                d="M7.48907 18.9891L9.44907 20.9491C10.8491 22.3491 13.1491 22.3491 14.5491 20.9491L16.5091 18.9891C16.8991 18.5991 16.8991 17.9691 16.5091 17.5791L12.6991 13.7691C12.3091 13.3791 11.6791 13.3791 11.2891 13.7691L7.47907 17.5791C7.09907 17.9591 7.09907 18.5991 7.48907 18.9891Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                    Proveedores
                </a>
            </li>
        </ul>
    </nav>

    <main class="w-5/6 h-screen  bg-slate-700 flex flex-col justify-center items-center">

        <form class="w-5/6 mx-auto bg-slate-900 p-10 mt-20 rounded-3xl">
            <h2 class="text-white mb-5">Registrar Producto</h2>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="floating_email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nombre Del Producto
                    </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="floating_password" id="floating_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cantidad</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="repeat_password" id="floating_repeat_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_repeat_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Lote</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Categoria
                        </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fecha Caducidad
                        </label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_phone"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Descripcion</label>
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>


    </main>

</body>

</html>