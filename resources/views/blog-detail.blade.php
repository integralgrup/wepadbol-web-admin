@extends('layouts.main')

@section('content')
    <?php 
        $pageTitle = $blog->title; 
        $breadcrumbImage = "corporate-breadcrumb.jpg";
        $breadcrumbVideo = "breadcrumb-video.mp4";
        $pageLink = "page-corporate.php";
        $imageOrVideo = "image";
    ?> 

<main class="main-field header-space blue-menu sm:!mt-[-10px]">

    <!-- CONTENT -->
    <section class="blog-detail-section overflow-hidden pt-[40px] pb-[250px] 2xl:pt-[80px] xl:pt-[60px] lg:pb-[120px] lg:pt-[45px] md:py-[30px]">
        <div class="container relative max-w-[1740px] group/container animContainer">
            <div class="wrapper">
                <div class="grid relative grid-cols-[minmax(0,5.5fr)_minmax(0,6.5fr)] mt-[70px] gap-[120px] xl:gap-[60px] md:grid-cols-1 md:gap-[30px] md:mt-0">
                    <div class="rectangle absolute left-0 top-[70px] size-[70px] z-5 sm:hidden">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="triangle absolute right-0 top-0 size-[130px] z-5 sm:hidden md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>

                    <?php
                    $page = 'Blog';
                    $moduleClass = 'relative sticky-module h-fit mt-[90px] xl:mt-0';
                    ?>

                    <div class="image-wrapper relative <?= $moduleClass ?>">
                        <div class="three-carousel swiper w-full min-sm:overflow-visible srb" dir="rtl">
                            <div class="swiper-wrapper pointer-events-none">
                                <div class="swiper-slide group/slide duration-350 min-md:z-10 min-md:pointer-events-none min-md:left-[-20px] min-md:[&.swiper-slide-next]:pointer-events-auto min-md:[&.swiper-slide-next]:-z-5 min-md:[&.swiper-slide-next+.swiper-slide]:-z-10 min-md:[&.swiper-slide-next+.swiper-slide]:pointer-events-auto lg:left-0 2xl:left-[50px]">
                                    <div class="image-field relative size-full aspect-[37/28] overflow-hidden rounded-[20px] translate-x-0 duration-350 translate-z-0 min-md:blur-[5px] min-md:opacity-0 min-md:group-[&.swiper-slide-active]/slide:!opacity-100 min-md:group-[&.swiper-slide-active]/slide:blur-0 min-md:group-[&.swiper-slide-next]/slide:scale-[0.8] min-md:group-[&.swiper-slide-next]/slide:!opacity-100 min-md:group-[&.swiper-slide-next]/slide:!translate-x-[620px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1250px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:scale-[0.6] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100 md:aspect-video md:left-0 lg:group-[&.swiper-slide-next]/slide:!translate-x-0 lg:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-0 lg:left-[-20px] xl:group-[&.swiper-slide-next]/slide:!translate-x-[500px] xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1000px] 2xl:group-[&.swiper-slide-next]/slide:!translate-x-[590px] 2xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1190px]">
                                        <img src="{{asset( getFolder(['uploads_folder', 'blog_images_folder'], $blog->lang) .'/'. $blog->image )}}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                        <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                    </div>
                                </div>
                                <?php foreach ($blogSlider as $key => $item) : ?>
                                    <div class="swiper-slide group/slide duration-350 min-md:z-10 min-md:pointer-events-none min-md:left-[-20px] min-md:[&.swiper-slide-next]:pointer-events-auto min-md:[&.swiper-slide-next]:-z-5 min-md:[&.swiper-slide-next+.swiper-slide]:-z-10 min-md:[&.swiper-slide-next+.swiper-slide]:pointer-events-auto lg:left-0 2xl:left-[50px]">
                                        <div class="image-field relative size-full aspect-[37/28] overflow-hidden rounded-[20px] translate-x-0 duration-350 translate-z-0 min-md:blur-[5px] min-md:opacity-0 min-md:group-[&.swiper-slide-active]/slide:!opacity-100 min-md:group-[&.swiper-slide-active]/slide:blur-0 min-md:group-[&.swiper-slide-next]/slide:scale-[0.8] min-md:group-[&.swiper-slide-next]/slide:!opacity-100 min-md:group-[&.swiper-slide-next]/slide:!translate-x-[620px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1250px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:scale-[0.6] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100 md:aspect-video md:left-0 lg:group-[&.swiper-slide-next]/slide:!translate-x-0 lg:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-0 lg:left-[-20px] xl:group-[&.swiper-slide-next]/slide:!translate-x-[500px] xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1000px] 2xl:group-[&.swiper-slide-next]/slide:!translate-x-[590px] 2xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1190px]">
                                            <img src="{{asset( getFolder(['uploads_folder', 'blog_images_folder'], $item->lang) .'/'. $item->media_file )}}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="left-shape absolute left-[-120px] top-[-70px] overflow-hidden rounded-r-[14px] 2xl:left-[-30px] xl:left-[-30px] lg:top-[-50px] md:hidden xl:h-[740px]">
                                <div class="image h-[770px] max-w-[695px] w-full md:h-[680px] xl:h-full">
                                    <img src="../assets/image/jpg/image-22.jpg" alt="" class="size-full object-cover object-center">
                                </div>
                                <div class="page-information-field flex items-center justify-between w-full absolute left-0 bottom-0 pb-[60px] px-[90px] xl:pt-0 xl:px-[30px]" dir="ltr">
                                    <div class="page-navigation flex items-center gap-[5px]">
                                        <a href="index.php" class="text text-[18px] text-white/80 leading-[28px]">Home</a>
                                        <div class="text text-[18px] text-white/80 leading-[28px]">/</div>
                                        <a href="blogs.php" class="text text-[18px] text-white/80 leading-[28px]"><?= $page ?></a>
                                    </div>
                                    <div class="vote-field flex items-center gap-[20px]" x-data="{ count: parseInt(localStorage.getItem('likeCount')) || 0, clicked: localStorage.getItem('likeClicked') === 'true' || false }">
                                        <button class="hearth-field cursor-pointer" x-on:click="if(!clicked) { count++; clicked = true; localStorage.setItem('likeCount', count); localStorage.setItem('likeClicked', true) }" :disabled="clicked">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="38" height="38" rx="7" stroke="#F2F3F5" stroke-opacity="0.25" stroke-width="2" />
                                                <g clip-path="url(#clip0_283_6108)">
                                                    <path d="M23.75 12.9375C22.8818 12.9375 22.0858 13.2126 21.3842 13.7552C20.7115 14.2755 20.2637 14.9381 20 15.4199C19.7363 14.938 19.2885 14.2755 18.6158 13.7552C17.9142 13.2126 17.1182 12.9375 16.25 12.9375C13.8271 12.9375 12 14.9193 12 17.5473C12 20.3865 14.2795 22.329 17.7303 25.2697C18.3163 25.7692 18.9805 26.3352 19.6709 26.9389C19.7619 27.0186 19.8787 27.0625 20 27.0625C20.1213 27.0625 20.2381 27.0186 20.3291 26.939C21.0196 26.3352 21.6838 25.7691 22.2701 25.2694C25.7205 22.329 28 20.3865 28 17.5473C28 14.9193 26.1729 12.9375 23.75 12.9375Z" fill="#75BF00" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_283_6108">
                                                        <rect width="16" height="16" fill="white" transform="translate(12 12)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <div class="text text-[14px] text-white/75 leading-[28px]"><span class="font-bold text-white all-vote" x-text="count">0</span> Beğenme</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-navigation srb flex items-center gap-[30px] absolute right-[-20px] bottom-[-100px] z-20 xl:relative xl:left-0 xl:top-0 xl:justify-center xl:mt-[30px] xl:right-[-40px] 2xl:right-[-40px] 2xl:bottom-[-115px]" dir="ltr">
                            <div class="three-carousel-prev size-[40px] leading-normal cursor-pointer min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                            </div>
                            <div class="three-carousel-next size-[40px] leading-normal cursor-pointer min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content-wrapper bg-white z-2 min-xl:mt-[30px] before:absolute before:right-0 before:top-[-5px] before:size-full before:max-w-[760px] before:bg-white md:before:hidden lg:before:max-w-[600px] xl:before:max-w-[580px]">
                        <div class="heading-wrapper translate-z-0 srt-all flex items-center gap-[60px] mb-[30px] sm:mb-[15px]">
                            <div class="blog-date flex justify-center items-center gap-[10px] p-[10px] bg-green/5 rounded-[8px] w-fit">
                                <i class="icon icon-calendar text-[16px] h-[16px] text-green flex leading-normal"></i>
                                <small class="date text-green text-[18px] font-medium leading-[28px] w-max">11 Ekim 2023</small>
                            </div>
                            <div class="blog-stars">
                                <svg width="115" height="21" viewBox="0 0 115 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4545 0L12.8017 7.22391L20.3974 7.22391L14.2524 11.6885L16.5996 18.9124L10.4545 14.4478L4.30952 18.9124L6.65671 11.6885L0.511682 7.22391L8.10735 7.22391L10.4545 0Z" fill="#FFCD18" />
                                    <path d="M33.9775 0L36.3247 7.22391L43.9204 7.22391L37.7753 11.6885L40.1225 18.9124L33.9775 14.4478L27.8325 18.9124L30.1797 11.6885L24.0346 7.22391L31.6303 7.22391L33.9775 0Z" fill="#FFCD18" />
                                    <path d="M57.5 0L59.8471 7.22391L67.4428 7.22391L61.2978 11.6885L63.645 18.9124L57.5 14.4478L51.3549 18.9124L53.7021 11.6885L47.5571 7.22391L55.1528 7.22391L57.5 0Z" fill="#FFCD18" />
                                    <path d="M81.0229 0L83.3701 7.22391L90.9658 7.22391L84.8207 11.6885L87.1679 18.9124L81.0229 14.4478L74.8779 18.9124L77.2251 11.6885L71.08 7.22391L78.6757 7.22391L81.0229 0Z" fill="#FFCD18" />
                                    <path d="M104.545 0L106.893 7.22391L114.488 7.22391L108.343 11.6885L110.69 18.9124L104.545 14.4478L98.4003 18.9124L100.748 11.6885L94.6025 7.22391L102.198 7.22391L104.545 0Z" fill="#D9D9D9" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="title srt text-blue text-[48px] font-bold leading-[64px] opacity-90 uppercase mb-[50px] xl:text-[40px] lg:text-[30px] lg:leading-normal lg:mb-[15px]">{{ $blog->title }}</h2>
                        <div class="content-field translate-z-0 srt-all flex gap-[80px] sm:flex-col sm:gap-[30px] 2xl:justify-between">
                            <div id="#printPage" class="text-editor gap-[40px] max-w-[600px] 2xl:max-w-full editor-p:opacity-65 editor-p:text-[#52555C] md:gap-[20px]">
                                {!! $blog->description !!}
                            </div>
                            <?php $list = ['facebook2', 'whatsapp', 'linkedin2', 'x',]; ?>
                            <div class="blog-social-media flex min-sm:flex-col items-center gap-[30px] h-fit md:gap-[15px]">
                                <?php foreach ($list as $key => $item) : ?>
                                    <a href="" class="icon icon-<?= $item ?> text-[25px] h-[25px] text-[#B0B0B0] leading-normal flex duration-350 hover:text-green"></a>
                                <?php endforeach; ?>
                                <a href="javascript:;" class="icon icon-copy-link copy-link text-[25px] h-[25px] text-[#B0B0B0] leading-normal flex duration-350 hover:text-green"></a>
                                <a href="javascript:;" class="icon icon-print printer-button text-[25px] h-[25px] text-[#B0B0B0] leading-normal flex duration-350 hover:text-green"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section class="blog-section relative overflow-hidden pt-[100px] pb-[220px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]">
    <div class="max-w-[1920px] container group/container animContainer">
        <div class="rectangle absolute left-[130px] top-0 size-[70px]">
            <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="triangle absolute right-[400px] top-[-4px] size-[130px] md:size-[100px] sm:right-0">
            <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="wrapper">
            <div class="grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] justify-center relative md:grid-cols-1 md:gap-[15px] lg:gap-[30px]">
                <?php $list = ['image-2.jpg', 'image-7.jpg', 'image-5.jpg', 'image-4.jpg', 'image-1.jpg']; ?>
                <div class="blog-general-carousel swiper size-full min-md:overflow-visible md:order-3" dir="rtl">
                    <div class="swiper-wrapper">
                        <?php foreach ($blogs as $key => $item) : ?>
                            <div class="swiper-slide group/slide min-md:!pointer-events-none duration-350 [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto">
                                <a href="blog-detail.php" class="blog-item flex relative min-md:opacity-0 min-md:pointer-events-none min-md:scale-75 duration-350 min-md:group-[&.swiper-slide-active]/slide:scale-100 min-md:group-[&.swiper-slide-active]/slide:pointer-events-auto min-md:group-[&.swiper-slide-active]/slide:opacity-100 min-md:group-[&.swiper-slide-next]/slide:blur-[5px] group-[&.swiper-slide-next]/slide:pointer-events-auto group-[&.swiper-slide-next]/slide:opacity-100 md:h-full md:flex-col md:gap-[15px]" dir="ltr">
                                    <div class="blog-image aspect-[13/10] size-full rounded-[14px] relative overflow-hidden xsm:aspect-video sm:aspect-square md:aspect-video">
                                        <img src="{{asset( getFolder(['uploads_folder', 'blog_images_folder'], $item->lang) .'/'. $item->image )}}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                        <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                    </div>
                                    <div class="blog-content size-auto bg-gradient-to-b from-green to-blue p-[2px] rounded-[14px] absolute top-[50px] right-[-420px] max-w-[500px] !pointer-events-none min-md:scale-50 min-md:opacity-0 min-md:invisible z-10 duration-350 group-[&.swiper-slide-active]/slide:scale-100 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:pointer-events-auto [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto md:left-0 md:top-0 md:translate-y-0 md:max-w-full md:relative lg:left-[320px]">
                                        <div class="content bg-white size-auto [box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] pt-[34px] pr-[34px] pb-[50px] pl-[55px] rounded-[12px] md:p-[30px]">
                                            <div class="fx-hover-repulse group/button pointer-events-auto w-fit ml-auto">
                                                <div class="inner">
                                                    <button class="button item relative overflow-hidden translate-z-0 size-[66px] p-[20px] rounded-full bg-green flex items-center justify-end before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:scale-0 before:rounded-full before:bg-blue before:duration-350 before:size-[33px] group-hover/button:before:scale-[2] lg:before:size-[20px] lg:size-[33px] lg:p-[10px] xl:before:size-[25px] xl:size-[44px] xl:p-[15px]">
                                                        <i class="icon item icon-arrow-top relative z-2 text-[10px] size-[24px] text-white leading-normal flex justify-center items-center duration-350 group-hover/button:rotate-45 xl:size-[12px] xl:text-[8px]"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="blog-date flex justify-center items-center gap-[10px] p-[10px] bg-green/5 rounded-[8px] mb-[15px] w-fit">
                                                <i class="icon icon-calendar text-[16px] h-[16px] text-green flex leading-normal"></i>
                                                <small class="date text-green text-[18px] font-medium leading-[28px] w-max">{{ date('d M Y', strtotime($item->created_at)) }}</small>
                                            </div>
                                            <div class="blog-title text-blue text-[24px] font-bold leading-[36px] opacity-90 line-clamp-2 sm:text-[20px]">{{ $item->title }}</div>
                                            <div class="blog-expo text-[#52555C] text-[18px] font-normal leading-[28px] opacity-65 mt-[20px] max-w-[390px] line-clamp-2 md:max-w-full">{{ mb_substr($item->description, 0, 100) }}...</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="blog-title-wrapper flex items-center justify-end gap-[60px] relative z-2 w-fit min-md:ml-[530px] md:mx-auto md:order-1 md:flex-col md:justify-center md:w-full md:gap-[15px] lg:ml-[290px] xl:relative xl:ml-[370px] xl:gap-[30px] 2xl:ml-[430px]">
                    <div class="title-field srr relative min-md:w-fit min-md:mb-[90px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-full before:mt-[45px] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] md:before:hidden">
                        <h1 class="title text-[64px] text-blue leading-[80px] whitespace-nowrap min-md:[writing-mode:_vertical-rl;] min-md:rotate-180 xsm:text-[30px] sm:leading-normal md:[&>_br]:hidden xl:text-[50px]"><strong>WEPADBOL</strong> NEWS</h1>
                    </div>
                    <a href="blogs.php" class="button srr group/button relative border border-solid border-blue/6 bg-transparent flex flex-col justify-center items-center gap-[15px] px-[34px] py-[20px] min-md:h-auto min-md:min-h-[150px] w-auto overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-green before:rounded-full before:translate-z-0 before:duration-350 min-md:hover:before:scale-[5.5] sm:h-[50px] md:flex-row lg:p-[30px] xl:p-[35px]">
                        <i class="icon relative z-2 translate-z-0 icon-chevron-right text-green text-[10px] h-[10px] flex items-center leading-normal min-md:-rotate-90 duration-350 min-md:group-hover/button:text-white min-md:group-hover/button:rotate-90 md:order-2"></i>
                        <small class="text relative z-2 translate-z-0 text-blue text-[16px] font-medium leading-[19px] min-md:[writing-mode:_vertical-rl;] min-md:rotate-180 duration-350 min-md:group-hover/button:text-white md:order-1">All News</small>
                    </a>
                </div>
                <div class="blog-controller srb absolute right-[600px] bottom-[50px] z-2 flex items-center gap-[125px] max-w-[100px] mx-auto md:relative md:left-0 md:top-0 md:!translate-x-0 md:order-2 xl:max-w-full xl:right-0 xl:left-[50%] xl:translate-x-[-20%] xl:bottom-0 xl:justify-center xl:items-center">
                    <div class="carousel-navigation flex min-md:flex-col items-center md:gap-[15px]">
                        <div class="blog-prev cursor-pointer size-[40px] leading-normal min-md:ml-[-90px] min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
                            <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                        </div>
                        <div class="blog-next cursor-pointer size-[40px] leading-normal min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
                            <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

@endsection