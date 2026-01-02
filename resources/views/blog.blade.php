@extends('layouts.main')


@section('content')
<?php $pageTitle = 'Haberler'; ?>
<main class="main-field header-space blue-menu sm:!mt-[-20px]">
    <!-- CONTENT -->
    <section class="featured-blog-section overflow-hidden pt-[120px] pb-[150px] xl:pb-[190px] md:py-[45px]">
        <div class="container relative max-w-[1920px]">
            <div class="left-shape absolute left-0 top-0 h-[770px] max-w-[645px] w-full 2xl:left-[-50px] lg:top-[-50px] md:max-w-[500px] sm:hidden">
                <img src="../assets/image/jpg/image-22.jpg" alt="" class="size-full object-cover object-center">
            </div>
            <div class="wrapper">
                <div class="grid relative grid-cols-[minmax(0,5.5fr)_minmax(0,6.5fr)] gap-[120px] items-center 2xl:grid-cols-[minmax(0,4.5fr)_minmax(0,7.5fr)] xl:grid-cols-2 xl:gap-[60px] sm:grid-cols-1 sm:gap-[30px]">
                    <div class="rectangle absolute left-0 top-[70px] size-[70px] z-10">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="triangle absolute right-0 top-0 size-[130px] z-10 md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="blog-image-wrapper">
                        <?php $list = ['image-7.jpg', 'image-6.jpg', 'image-5.jpg', 'image-4.jpg']; ?>
                        <div class="blog-carousel swiper w-full overflow-visible srb ml-[160px] sm:overflow-hidden xl:ml-0 2xl:ml-[100px]" dir="rtl">
                            <div class="swiper-wrapper">
                                <?php foreach ($blogs as $key => $item) : ?>
                                    <div class="swiper-slide group/slide z-10 duration-350 [&.swiper-slide-next]:-z-10">
                                        <div class="image-field relative size-full aspect-[74/56] min-sm:opacity-0 overflow-hidden rounded-[20px] translate-x-0 sm:group-[&.swiper-slide-next]/slide:!translate-x-0 2xl:aspect-square 2xl:group-[&.swiper-slide-next]/slide:!translate-x-[450px] min-sm:group-[&.swiper-slide-next]/slide:scale-[0.8] min-sm:group-[&.swiper-slide-next]/slide:blur-[5px] min-sm:group-[&.swiper-slide-active]/slide:!opacity-100 min-sm:group-[&.swiper-slide-next]/slide:!opacity-100 min-sm:group-[&.swiper-slide-next]/slide:!translate-x-[500px] duration-350 sm:aspect-video">
                                            <img src="{{asset( getFolder(['uploads_folder', 'blog_images_folder'], $item->lang) .'/'. $item->image )}}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content-wrapper max-w-[710px] ml-auto min-md:bg-white z-5 before:absolute before:right-0 before:top-0 before:size-full before:max-w-[800px] before:bg-white 2xl:mx-auto sm:max-w-full sm:before:hidden md:before:max-w-[500px] xl:before:max-w-[620px]">
                        <div class="blog-content-carousel swiper" dir="rtl">
                            <div class="swiper-wrapper">
                                <?php foreach ($blogs as $key => $item) : ?>
                                    <div class="swiper-slide overflow-hidden" dir="ltr">
                                        <div class="blog-date flex justify-center items-center gap-[10px] p-[10px] bg-green/5 rounded-[8px] mb-[30px] w-fit" data-swiper-parallax-x="50%">
                                            <i class="icon icon-calendar text-[16px] h-[16px] text-green flex leading-normal"></i>
                                            <small class="date text-green text-[18px] font-medium leading-[28px] w-max">{{ date('d/m/Y', strtotime($item->created_at)) }}</small>
                                        </div>
                                        <a href="{{ env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $item->seo_url }}" class="title flex text-blue text-[48px] font-bold leading-[64px] opacity-90 mb-[40px] uppercase xl:text-[40px] lg:text-2xl lg:mb-[15px]" data-swiper-parallax-x="50%">{{ $item->title }}</a>
                                        <p class="expo text-[#52555C] text-[18px] font-normal leading-[28px] opacity-65 mb-[40px] lg:mb-[15px] lg:text-base md:[&>_br]:hidden" data-swiper-parallax-x="50%">{{ strip_tags(mb_substr($item->description, 0, 300)) }}...</p>
                                        <div class="button-controller-field mb-[60px] lg:mb-[30px] xsm:mb-0" data-swiper-parallax-x="50%">
                                            <a href="{{ env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $item->seo_url }}" class="button group/button fx fx-text-hover-with-child relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[6] md:h-[60px] sm:h-[50px] sm:px-[15px]">
                                                <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px]">{{getStaticText(41)}}</small>
                                                <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-navigation flex items-center gap-[30px] absolute left-[260px] bottom-[70px] z-10 lg:left-[50%] lg:gap-[15px] lg:bottom-[40px] xsm:bottom-0" dir="ltr">
                                <div class="blog-prev cursor-pointer size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                    <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                                </div>
                                <div class="blog-next cursor-pointer size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                    <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-navigation flex items-center gap-[5px] absolute left-[30px] bottom-[-100px]">
                <a href="index.php" class="text text-[18px] text-white/80 leading-[28px]">{{getStaticText(23)}}</a>
                <div class="text text-[18px] text-white/80 leading-[28px]">/</div>
                <a href="blogs.php" class="text text-[18px] text-white/80 leading-[28px]">{{getStaticText(37)}}</a>
            </div>
        </div>
    </section>

    <section class="blog-filter-section relative mt-[-50px] z-10 xl:mt-[60px] lg:mt-[45px] md:mt-[30px] md:px-[30px] sm:mt-0">
        <div class="max-w-[1150px] mx-auto w-full">
            <div class="bg-white p-[30px] flex justify-center items-center gap-[25px] [box-shadow:_0px_10px_40px_0px_rgba(14,_42,_67,_0.15);] rounded-[8px] xs:flex-col">
                <div class="filter-item group/select relative overflow-hidden bg-green h-[70px] w-full min-w-[255px] max-w-[255px] flex justify-center items-center rounded-[8px] gap-[10px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[35px] before:scale-0 before:bg-secondary-700 before:rounded-full before:translate-z-0 before:duration-350 min-sm:hover:before:scale-[8] md:h-[60px] sm:max-w-full">
                    <select name="" id="" class="text relative z-2 text-[18px] text-white leading-[30px] w-full h-full pl-[30px]">
                        <option value="" selected>{{getStaticText(38)}}</option>
                        <option value="">{{getStaticText(39)}}</option>
                        <option value="">{{getStaticText(40)}}</option>
                    </select>
                    <i class="icon icon-chevron-down2 text-[10px] h-[10px] text-white flex leading-normal absolute right-[30px] top-[50%] translate-y-[-50%] z-2 duration-350 group-hover/select:rotate-180"></i>
                </div>
                <div class="search-field w-full relative sm:order-1">
                    <input type="text" name="" id="" placeholder="{{getStaticText(45)}}" class="search-bar w-full h-[70px] bg-[#F7F7F7] rounded-[8px] pl-[35px] pr-[60px] md:h-[60px] xsm:pl-[27px]">
                    <i class="icon icon-search text-[25px] h-[25px] text-black absolute right-[30px] top-[50%] translate-y-[-50%] flex leading-normal cursor-pointer xsm:text-[20px] xsm:h-[20px] xsm:right-[27px]"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section pb-[120px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1800px] group/container animContainer 2xl:max-w-[1600px]">
            <div class="wrapper">
                <div class="inner-wrapper relative flex flex-col gap-[65px] mt-[60px] xl:gap-[60px] lg:mt-[40px] lg:gap-[40px] md:mt-[45px]">
                    <div class="second-filter-field relative flex justify-between items-center xs:flex-col">
                        <div class="total-field srl text text-[18px] text-[#52555C]/50 leading-[28px] xsm:text-[16px]">{{getStaticText(42) }} <span class="text-green"> {{ count($blogs)}} </span> </div>
                        <div class="date-filter-field srr group/date relative flex items-center gap-[15px]">
                            <div class="date-title text-[18px] text-[#52555C] font-medium leading-[28px] opacity-65 duration-350 group-hover/date:opacity-100 xsm:text-[16px]">{{getStaticText(43) }} :</div>
                            <select name="" id="" class="text relative z-2 text-[18px] text-green leading-[30px] pr-[50px] xsm:text-[16px] xs:pr-0">
                                <option value="" selected>{{ getStaticText(44) }}</option>
                            </select>
                            <i class="icon icon-chevron-down2 text-[10px] h-[10px] text-[#52555CA6] flex leading-normal absolute right-[30px] top-[50%] translate-y-[-50%] z-2 duration-350 group-hover/date:rotate-180 group-hover/date:text-green xs:right-[-20px]"></i>
                        </div>
                    </div>
                    <div class="blog-field grid grid-cols-3 gap-x-[45px] gap-y-[80px] 2xl:gap-[75px] xl:gap-[60px] xl:grid-cols-2 lg:gap-[40px] md:gap-[30px] xsm:grid-cols-1">
                        <?php foreach ($blogs as $key => $item) : ?>
                            <div class="blog-item focus group/item w-full h-max">
                                <a href="{{ env('HTTP_DOMAIN') . '/' . getUrl('blog_url') . '/' . $item['seo_url'] }}" class="flex flex-col items-center">
                                    <div class="image relative size-full aspect-[55/42] overflow-hidden rounded-[14px] sm:rounded-b-none">
                                        <img src="{{ asset( getFolder(['uploads_folder', 'blog_images_folder'], $item['lang']) . '/'. $item['image']) }}" alt="" class="size-full object-cover object-center animImage scale-125 duration-500 [&.is-active]:scale-100 grayscale group-[&.focus]/item:grayscale-0">
                                        <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                    </div>
                                    <div class="blog-content size-auto relative bg-gradient-to-b from-green to-blue p-[2px] rounded-[14px] max-w-[470px] z-10 mt-[-80px] [box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] min-md:scale-50 min-md:opacity-0 min-md:delay-300 group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:scale-100 duration-350 group-hover/item:[box-shadow:_0px_25px_75px_0px_rgba(117,_191,_0,_0.15);] xl:max-w-[550px] md:max-w-[440px] sm:max-w-full sm:mt-0 sm:rounded-t-none sm:pt-0">
                                        <div class="content bg-white size-auto py-[25px] px-[40px] rounded-[12px] md:p-[30px] sm:rounded-t-none">
                                            <div class="fx-hover-repulse anim-button group/button absolute right-[30px] top-[-30px] duration-350 min-sm:opacity-0 min-sm:scale-0 min-sm:group-hover/item:opacity-100 min-sm:group-hover/item:scale-100 sm:hidden">
                                                <div class="inner">
                                                <!-- group-hover/button:before:scale-[2] -->
                                                    <button class="button item relative overflow-hidden translate-z-0 size-[66px] p-[20px] rounded-full bg-green flex items-center justify-end before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:scale-0 before:rounded-full before:translate-z-0 before:bg-blue before:duration-350  before:size-[33px] sm:before:hidden sm:w-[70px] sm:h-[40px] sm:justify-center sm:items-center sm:p-0 sm:rounded-t-none sm:rounded-b-[8px]">
                                                    <!-- group-hover/button:rotate-45 -->
                                                        <i class="icon icon-arrow-top relative z-2 text-[10px] size-[24px] text-white leading-normal flex justify-center items-center duration-350  sm:size-[12px] sm:text-[8px]"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="blog-date flex justify-center items-center gap-[10px] p-[10px] bg-green/5 rounded-[8px] mb-[15px] w-fit">
                                                <i class="icon icon-calendar text-[16px] h-[16px] text-green flex leading-normal"></i>
                                                <small class="date text-green text-[18px] font-medium leading-[28px] w-max">{{ date('d/m/Y', strtotime($item['created_at'])) }}</small>
                                            </div>
                                            <div class="blog-title text-blue text-[24px] font-bold leading-[36px] opacity-90 line-clamp-2 sm:text-[17px] sm:leading-normal">{{ $item['title'] }}</div>
                                            <div class="blog-expo text-[#52555C] text-[18px] font-normal leading-[28px] opacity-65 mt-[20px] max-w-[390px] line-clamp-2 lg:max-w-full sm:text-[16px]">{!! mb_substr($item['description'], 0, 100) !!}... </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="max-w-[600px] mx-auto py-4 min-md:hidden">
	                    <div id="load-more" class="button group/button cursor-pointer fx fx-text-hover-with-child relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[6] md:h-[60px] sm:h-[50px] sm:px-[15px]">
	                        <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px]">{{getStaticText(48)}}</small>
	                        <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
	                    </a>
                    </div>	
                </div>
            </div>
        </div>
    </section>

    <!--<section class="blog-section relative overflow-hidden pt-[100px] pb-[220px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]">
        <div class="max-w-[1920px] container group/container animContainer">
            <div class="rectangle absolute left-[130px] top-0 size-[70px]">
                <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="triangle absolute right-[400px] top-[-4px] size-[130px] md:size-[100px] sm:right-0">
                <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="wrapper">
                <div
                    class="grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] justify-center relative md:grid-cols-1 md:gap-[15px] lg:gap-[30px]">
                    <div class="blog-general-carousel swiper size-full min-md:overflow-visible md:order-3 rtl:order-2">
                        <div class="swiper-wrapper">
                            <?php foreach ($blogs as $key => $item) : ?>
                                <div
                                    class="swiper-slide group/slide min-md:!pointer-events-none duration-350 [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto">
                                    <a href="{{ env('HTTP_DOMAIN') . '/' . getUrl('blog_url') . '/' . $item['seo_url'] }}"
                                        class="blog-item flex relative min-md:opacity-0 min-md:pointer-events-none min-md:scale-75 duration-350 min-md:group-[&.swiper-slide-active]/slide:scale-100 min-md:group-[&.swiper-slide-active]/slide:pointer-events-auto min-md:group-[&.swiper-slide-active]/slide:opacity-100 min-md:group-[&.swiper-slide-next]/slide:blur-[5px] group-[&.swiper-slide-next]/slide:pointer-events-auto group-[&.swiper-slide-next]/slide:opacity-100 md:h-full md:flex-col md:gap-[15px]">
                                        <div
                                            class="blog-image aspect-[13/10] size-full rounded-[14px] relative overflow-hidden xsm:aspect-video sm:aspect-square md:aspect-video">
                                            <img src="{{ asset( getFolder(['uploads_folder', 'blog_images_folder'], $item['lang']) . '/'. $item['image']) }}" alt=""
                                                class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                            <div
                                                class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full">
                                            </div>
                                        </div>
                                        <div
                                            class="blog-content size-auto bg-gradient-to-b from-green to-blue p-[2px] rounded-[14px] absolute top-[20px] right-[20px] lg:top-[0px] lg:right-[0px] max-w-[500px] min-md:opacity-0 min-md:invisible duration-350 group-[&.swiper-slide-active]/slide:scale-100 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:pointer-events-auto [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto md:left-0 md:top-0 md:translate-y-0 md:max-w-full md:relative z-10">
                                            <div
                                                class="content bg-white size-auto [box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] pt-[34px] pr-[34px] pb-[50px] pl-[55px] lg:py-[10px] lg:px-[10px] rounded-[12px] md:p-[30px] z-10">
                                                <div class="fx-hover-repulse group/button pointer-events-auto w-fit ml-auto">
                                                    <div class="inner">
                                                        <button
                                                            class="button item relative overflow-hidden translate-z-0 size-[66px] p-[20px] rounded-full bg-green flex items-center justify-end before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:scale-0 before:rounded-full before:bg-blue before:duration-350 before:size-[33px] group-hover/button:before:scale-[2] lg:before:size-[20px] lg:size-[33px] lg:p-[10px] xl:before:size-[25px] xl:size-[44px] xl:p-[15px]">
                                                            <i
                                                                class="icon item icon-arrow-top relative z-2 text-[10px] size-[24px] text-white leading-normal flex justify-center items-center duration-350 group-hover/button:rotate-45 xl:size-[12px] xl:text-[8px]"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="blog-date flex justify-center items-center gap-[10px] p-[10px] bg-green/5 rounded-[8px] min-lg:mb-[15px] w-fit">
                                                    <i
                                                        class="icon icon-calendar text-[16px] h-[16px] text-green flex leading-normal"></i>
                                                    <small
                                                        class="date text-green text-[18px] lg:text-[16px] font-medium leading-[28px] w-max">{{ date('d/m/Y', strtotime($item['created_at'])) }}</small>
                                                </div>
                                                <div
                                                    class="blog-title text-blue text-[24px] font-bold leading-[36px] opacity-90 line-clamp-2 lg:text-[20px]">
                                                    {{ $item['title'] }}</div>
                                                <div
                                                    class="blog-expo text-[#52555C] text-[18px] lg:text-[16px font-normal leading-[28px] opacity-65 min-lg:mt-[20px] max-w-[390px] line-clamp-2 md:max-w-full">
                                                    {!! mb_substr($item['description'], 0, 100) !!}...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div
                        class="blog-title-wrapper flex items-center justify-end gap-[60px] relative z-2 w-fit min-md:ml-[530px] md:mx-auto md:order-1 md:flex-col md:justify-center md:w-full md:gap-[15px] lg:ml-[290px] xl:relative xl:ml-[370px] xl:gap-[30px] 2xl:ml-[430px]">
                        <div
                            class="title-field srr relative min-md:w-fit min-md:mb-[90px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-full before:mt-[45px] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] md:before:hidden">
                            <h1
                                class="title text-[64px] text-blue leading-[80px] whitespace-nowrap min-md:[writing-mode:_vertical-rl;] min-md:rotate-180 xsm:text-[30px] sm:leading-normal md:[&>_br]:hidden xl:text-[50px]">
                                {!! getStaticText(5) !!}
                            </h1>
                        </div>
                        <a href="blogs.php"
                            class="button srr group/button relative border border-solid border-blue/6 bg-transparent flex flex-col justify-center items-center gap-[15px] px-[34px] py-[20px] min-md:h-auto min-md:min-h-[150px] w-auto overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-green before:rounded-full before:translate-z-0 before:duration-350 min-md:hover:before:scale-[5.5] sm:h-[50px] md:flex-row lg:p-[30px] xl:p-[35px]">
                            <i
                                class="icon relative z-2 translate-z-0 icon-chevron-right text-green text-[10px] h-[10px] flex items-center leading-normal min-md:-rotate-90 duration-350 min-md:group-hover/button:text-white min-md:group-hover/button:rotate-90 md:order-2"></i>
                            <small
                                class="text relative z-2 translate-z-0 text-blue text-[16px] font-medium leading-[19px] min-md:[writing-mode:_vertical-rl;] min-md:rotate-180 duration-350 min-md:group-hover/button:text-white md:order-1">{{getStaticText(6)}}</small>
                        </a>
                    </div>
                    <div
                        class="blog-controller srb absolute right-[600px] bottom-[50px] z-2 flex items-center gap-[125px] max-w-[100px] mx-auto md:relative md:left-0 md:top-0 md:!translate-x-0 md:order-2 xl:max-w-full xl:right-0 xl:left-[50%] xl:translate-x-[-20%] xl:bottom-0 xl:justify-center xl:items-center">
                        <div class="carousel-navigation flex min-md:flex-col items-center md:gap-[15px]">
                            <div
                                class="blog-prev cursor-pointer size-[40px] leading-normal min-md:ml-[-90px] min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
                                <i
                                    class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                            </div>
                            <div
                                class="blog-next cursor-pointer size-[40px] leading-normal min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
                                <i
                                    class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
</main>
@endsection 