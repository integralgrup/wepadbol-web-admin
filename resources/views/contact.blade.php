@extends('layouts.contact')

@section('content')

<?php $pageTitle = 'İletişim';?>

<main class="main-field header-space blue-menu sm:!mt-[-80px]">
    <!-- CONTENT -->
    <section class="contact-section h-[calc(100dvh_-_90px)] sm:h-full lg:mt-0 xl:pt-[30px]">
        <div class="container relative max-w-[1920px] h-[calc(100dvh_-_90px)] md:overflow-hidden sm:h-full">
            <div class="wrapper">
                <div class="sm:flex sm:flex-col sm:gap-[15px]">
                    <div class="map-field sm:relative">
                        <div id="map" class="background-image zoom-field absolute left-0 top-0 w-full h-full max-w-[1880px] mx-auto aspect-[7/5] overflow-hidden rounded-[20px] translate-z-0 before:absolute before:left-0 before:top-0 before:pointer-events-none before:w-full before:h-full before:[background:_radial-gradient(50%_50%_at_50%_50%,_rgba(255,_255,_255,_0.00)_0%,_#FFF_100%);] before:z-2 xsm:aspect-square sm:aspect-video md:rounded-none lg:rounded-[20px] lg:overflow-hidden lg:aspect-[35/10] md:left-[60px] sm:left-0 sm:relative sm:order-1"></div>
                        <div class="mapChangeOverlay group/overlay absolute left-0 top-[-80px] w-full h-[100dvh] overflow-hidden pointer-events-none bg-black/20 backdrop-blur-[20px] flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                            <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                            </div>
                        </div>
                    </div>
                    <div class="information-wrapper flex items-end max-w-[600px] w-full h-[calc(100dvh_-_90px)] translate-y-full z-50 duration-350 delay-350 [&.is-active]:translate-y-0 md:max-w-[500px] sm:h-full sm:max-w-full sm:order-3">
                        
                        <div class="information-field flex flex-col max-w-[600px] w-full gap-[20px] relative left-[-30px] overflow-hidden rounded-r-[14px] rounded-b-none [box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] md:max-w-[500px] sm:max-w-full sm:left-0 sm:rounded-r-none sm:rounded-t-[14px]">
                            <div class="image absolute left-0 top-0 size-full">
                                <img src="../assets/image/jpg/image-37.jpg" alt="" class="size-full object-cover object-center">
                            </div>
                            <ul class="flex flex-col gap-[30px] p-[50px]">
                                <?php foreach ($offices as $key => $item) : ?>
                                    <li class="item group/li <?= $key == 0 ? 'is-active' : '' ?> flex flex-col scrollable gap-[20px]" data-map="" data-lat="<?= $item['lat'] ?>" data-lng="<?= $item['long'] ?>" data-scrollable="#map">
                                        <div class="title flex justify-between items-center cursor-pointer translate-z-0 before:absolute before:bottom-[-25px] before:left-0 before:w-full before:h-[1px] before:bg-white/10 before:max-w-[370px] before:duration-350 group-[&.is-active]/li:before:bottom-[-180px] sm:before:max-w-full">
                                            <p class="text-white text-[32px] font-normal leading-[36px] opacity-75 duration-350 group-hover/li:opacity-100 group-[&.is-active]/li:opacity-100"><?= $item['title'] ?></p>
                                            <i class="icon icon-chevron-down-3 text-[16px] h-[16px] leading-normal text-white flex duration-350 group-[&.is-active]/li:rotate-180"></i>
                                        </div>
                                        <div class="expo-field flex flex-col gap-[20px] w-full max-w-[270px] invisible pointer-events-none translate-z-0 opacity-0 h-0 mb-0 duration-350 group-[&.is-active]/li:mb-[30px] group-[&.is-active]/li:visible group-[&.is-active]/li:opacity-100 group-[&.is-active]/li:pointer-events-auto">
                                            <a href="" class="item group/item flex items-center gap-[20px]">
                                                <i class="icon icon-phone text-[18px] h-[18px] text-green"></i>
                                                <p class="text text-[16px] text-white leading-[19px] opacity-75 duration-350 group-hover/item:opacity-100">{{$item['phone']}}</p>
                                            </a>
                                            <a href="" class="item group/item flex items-center gap-[20px]">
                                                <i class="icon icon-mail text-[18px] h-[18px] text-green"></i>
                                                <p class="text text-[16px] text-white leading-[19px] opacity-75 duration-350 group-hover/item:opacity-100">{{$item['email']}}</p>
                                            </a>
                                            <a href="" class="item group/item flex items-center gap-[20px]">
                                                <i class="icon icon-map text-[18px] h-[18px] text-green"></i>
                                                <p class="text text-[16px] text-white leading-[19px] opacity-75 duration-350 group-hover/item:opacity-100">{{$item['address']}}</p>
                                            </a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="button-map-wrapper max-w-[1040px] mx-auto absolute bottom-[80px] right-[160px] w-full h-[60px] flex justify-between items-center 2xl:max-w-[700px] xl:max-w-[600px] lg:max-w-[400px] lg:flex-col lg:gap-[30px] lg:bottom-[15px] lg:h-auto md:right-[60px] sm:relative sm:left-0 sm:right-0 sm:top-0 sm:bottom-0 sm:order-1">
                        <div class="buttons-field flex items-center gap-[40px] xs:gap-[15px]">
                            <!-- VARSAYILAN MAP URL -->
                            <a href="https://maps.app.goo.gl/91aFgFR6ZiQJrCcc8" class="button fx fx-text-hover-with-child direction-button group/button relative bg-white border-[4px] border-solid border-blue border-opacity-6 flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[45px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[4.8] min-sm:hover:border-transparent md:h-[60px] sm:h-[50px] sm:px-[15px] lg:w-full">
                                <small class="text fx-child relative z-2 text-blue text-[16px] font-bold leading-[19px] lg:whitespace-nowrap duration-350 min-sm:group-hover/button:text-white">Get Direction</small>
                                <i class="icon relative z-2 icon-map text-green text-[20px] h-[20px] flex items-center leading-normal duration-350"></i>
                            </a>
                            <a href="#contact-form" data-fancybox class="button fx fx-text-hover-with-child group/button relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[6.9] md:h-[60px] sm:h-[50px] sm:px-[15px] lg:w-full">
                                <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px] lg:whitespace-nowrap">Contact Form</small>
                                <i class="icon relative z-2 icon-mail-2 text-white text-[20px] h-[20px] flex items-center leading-normal duration-350"></i>
                            </a>
                        </div>
                        <div class="zoom-field flex items-center">
                            <div class="zoom-in cursor-pointer relative border border-solid border-[#9D9D9D] p-[25px] flex justify-center items-center rounded-r-none rounded-l-[14px] duration-350 hover:border-green">
                                <div class="line w-[13px] h-[2px] bg-green absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></div>
                                <div class="line w-[2px] h-[13px] bg-green absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></div>
                            </div>
                            <div class="zoom-out cursor-pointer relative border border-solid border-l-0 border-[#9D9D9D] p-[25px] flex justify-center items-center rounded-l-none rounded-r-[14px] duration-350 hover:border-l hover:border-green">
                                <div class="line w-[13px] h-[2px] bg-green absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection