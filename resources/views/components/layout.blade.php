<html>
<head>
    <title>{{ $title ?? 'website' }}</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- navbar -->
<nav x-data="{ mobileMenuOpen: false }" class="shadow sticky top-0 z-50">
    <div
        class="flex items-center lg:items-end justify-between bg-gradient-to-r from-cyan-500 to-blue-500 bg-opacity-80 py-5 px-7 text-white border-b-8">
        <!-- left menu -->
        <div class="lg:basis-2/5 hidden lg:block">
            <ul class="flex justify-around">
                <li class='hover:border-b-4 transition-all active:border-b-4'>
                    <a href="/#carousel ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li class='hover:border-b-4 transition-all active:border-b-4'>
                    <a href="/#about-us">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>
                        About us
                    </a>
                </li>
            </ul>
        </div>

        <!-- logo -->
        <div class="lg:basis-1/5 flex justify-center items-center">
            <a href="/#about-us">
                <img class="h-[120px] lg:h-[60px]"
                     src="https://www.jeronimomartins.com/wp-content/uploads/2017/09/Logo_JM.svg">
            </a>
        </div>

        <!-- right menu -->
        <div class="lg:basis-2/5 hidden lg:block">
            <ul class="flex justify-around">
                <li class='hover:border-b-4 transition-all active:border-b-4'>
                    <a href="/#services">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                            <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z" clip-rule="evenodd" />
                        </svg>
                        Services
                    </a>
                </li>
                <li class='hover:border-b-4 transition-all active:border-b-4'>
                    <a href="/#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                        </svg>
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        <!-- mobile menu opener -->
        <a href="javascript:void(0);" class="icon text-6xl lg:hidden" @click="mobileMenuOpen=!mobileMenuOpen">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- mobile menu -->
    <div id="mobile-menu" x-cloak x-collapse x-show="mobileMenuOpen"
         class="bg-gradient-to-t from-cyan-500 to-blue-500 text-5xl text-white text-center py-4 lg:hidden">
        <ul>
            <li class="transition-all my-4">
                <a href="/#carousel" @click="mobileMenuOpen=false">
                    Home
                </a>
            </li>
            <li class="transition-all my-4">
                <a href="/#about-us" @click="mobileMenuOpen=false">
                    About us
                </a>
            </li>
            <li class="transition-all my-4">
                <a href="/#services" @click="mobileMenuOpen=false">
                    Services
                </a>
            </li>
            <li class="transition-all my-4">
                <a href="/#contact" @click="mobileMenuOpen=false">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

{{$slot}}

<footer id="contact"
        class="shadow border-t-8 border-opacity-80 flex flex-col lg:flex-row h-[500px] lg:h-[200px] bg-gradient-to-r p-3 from-cyan-500 to-blue-500 text-white justify-around sticky top-[100vh]">
    <div class="basis-1/2 lg:basis-2/3 rounded overflow-hidden">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.7516091201419!2d44.76763122466263!3d41.72198568783745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044735ca641f991%3A0x92a82c5faddf1682!2z4YOh4YOc4YOU4YOeIOGDpOGDmOGDouGDnOGDlOGDoeGDmA!5e0!3m2!1ska!2sge!4v1676396423130!5m2!1ska!2sge"
            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="basis-1/2 lg:basis-1/3 my-1 lg:my-0 text-5xl lg:text-2xl flex flex-col items-center justify-center">
        <div>
            <address>
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                    Tbilisi, Shartava str. 18
                </h3>
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 inline">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                    </svg>
                    <a href="mailto:vaja@runbyit.com">vaja@runbyit.com</a>
                </h3>
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 inline">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    <a href="tel:+995574218774">+995574218774</a>
                </h3>
            </address>
        </div>
    </div>
</footer>
</body>
</html>
