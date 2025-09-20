@extends('layouts.main')

@section('content')
<?php 
    $pageTitle = 'Projects';
?>
<main class="main-field header-space blue-menu sm:!mt-[-10px]">

    <!-- PROJECT CONTENT SECTION -->
    <section class="project-detail-section overflow-hidden pt-[40px] pb-[250px] 2xl:pt-[80px] xl:pt-[60px] xl:pb-[260px] lg:pt-[45px] md:py-[30px]">
        <div class="container relative max-w-[1740px] group/container animContainer">
            <div class="wrapper">
                <div class="grid relative grid-cols-[minmax(0,5.7fr)_minmax(0,6.3fr)] items-center mt-[70px] gap-[120px]  2xl:grid-cols-[minmax(0,5.5fr)_minmax(0,6.5fr)] 2xl:gap-[80px] lg:grid-cols-2 xl:gap-[80px] md:grid-cols-1 md:gap-[30px] md:mt-0">
                    <div class="rectangle absolute left-0 top-[70px] size-[70px] z-3">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="triangle absolute right-0 top-0 size-[130px] z-3 md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>

                    <?php
                    $moduleClass = 'mt-[60px] xl:mt-0';
                    $page = 'Projects';
                    ?>

                    <div class="image-wrapper relative <?= $moduleClass ?>">
                    <div class="three-carousel swiper w-full min-sm:overflow-visible srb" dir="rtl">
                        <div class="swiper-wrapper pointer-events-none">
                            <?php foreach ($project->gallery as $key => $item) : ?>
                                <div class="swiper-slide group/slide duration-350 min-md:z-10 min-md:pointer-events-none min-md:left-[-20px] min-md:[&.swiper-slide-next]:pointer-events-auto min-md:[&.swiper-slide-next]:-z-5 min-md:[&.swiper-slide-next+.swiper-slide]:-z-10 min-md:[&.swiper-slide-next+.swiper-slide]:pointer-events-auto lg:left-0 2xl:left-[50px]">
                                    <div class="image-field relative size-full aspect-[37/28] overflow-hidden rounded-[20px] translate-x-0 duration-350 translate-z-0 min-md:blur-[5px] min-md:opacity-0 min-md:group-[&.swiper-slide-active]/slide:!opacity-100 min-md:group-[&.swiper-slide-active]/slide:blur-0 min-md:group-[&.swiper-slide-next]/slide:scale-[0.8] min-md:group-[&.swiper-slide-next]/slide:!opacity-100 min-md:group-[&.swiper-slide-next]/slide:!translate-x-[620px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1250px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:scale-[0.6] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100 md:aspect-video md:left-0 lg:group-[&.swiper-slide-next]/slide:!translate-x-0 lg:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-0 lg:left-[-20px] xl:group-[&.swiper-slide-next]/slide:!translate-x-[500px] xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1000px] 2xl:group-[&.swiper-slide-next]/slide:!translate-x-[590px] 2xl:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1190px]">
                                        <img src="{{asset( getFolder(['uploads_folder', 'project_images_folder'], $item->lang) .'/'. $item->image )}}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
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

                    <div class="content-wrapper srt bg-white z-2">
                        <div class="project-location flex items-center gap-[15px] mb-[30px] md:mb-[15px]">
                            <i class="icon icon-marker relative z-2 text-green text-[18px] h-[18px] leading-none flex items-center"></i>
                            <small class="text relative z-2 text-[24px] text-[#52555C] opacity-65 font-medium leading-[30px] duration-350">{{ $project->country->title }}</small>
                        </div>
                        <h2 class="title text-blue text-[48px] font-bold leading-[64px] opacity-90 mb-[50px] uppercase xl:text-[40px] lg:text-2xl lg:mb-[15px]">{{ $project->title_1 }}</h2>
                        <p class="expo text-[#52555C] text-[18px] font-normal leading-[28px] opacity-65 mb-[60px] lg:mb-[15px] lg:text-base md:[&>_br]:hidden">{{ $project->short_description }}</p>
                        <div class="buttons-field flex items-center gap-[40px] mb-[60px] lg:mb-[30px] xs:flex-col xs:gap-[15px] md:mb-0">
                            <a href="#contact-form" data-fancybox class="button group/button fx fx-text-hover-with-child relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px]">Get Offer</small>
                                <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                            </a>
                            <a href="projects.php" class="button group/button fx fx-text-hover-with-child relative bg-white border-[4px] border-solid border-blue border-opacity-6 flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[45px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5] min-sm:hover:border-transparent md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                <small class="text fx-child relative z-2 text-blue text-[16px] font-bold leading-[19px] duration-350 min-sm:group-hover/button:text-white">Next Project</small>
                                <i class="icon relative z-2 icon-arrow-right text-green text-[20px] h-[20px] flex items-center leading-normal duration-350 min-sm:group-hover/button:text-white min-sm:group-hover/button:translate-x-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECT EXPO SECTION -->
    <section class="project-expo-section pb-[180px] 2xl:pb-[80px] xl:py-[60px] lg:py-[45px] md:pb-0  md:pt-[30px]">
        <div class="max-w-[1580px] container group/container animContainer">
            <div class="wrapper">
                <div class="text-editor srt max-w-full text-center gap-[40px] editor-p:text-[#52555C] editor-p:opacity-65 editor-h3:w-fit editor-h3:mx-auto editor-h3:relative editor-h3:uppercase editor-h3:text-blue editor-h3:before:absolute editor-h3:before:bottom-[15px] editor-h3:before:left-[-35px] editor-h3:before:w-[15px] editor-h3:before:h-0 editor-h3:before:bg-green editor-h3:before:-rotate-180 editor-h3:before:duration-350 group-[&.is-active]/container:editor-h3:before:h-[15px] md:editor-h3:leading-normal sm:gap-[15px] sm:mb-[15px] sm:editor-h3:text-[22px] sm:editor-h3:before:hidden">
                    <h3>{{ $project->title_2 }}</h3>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SECTION -->
    <?php
    $productTitle = 'USED';
    $shape = 'true';
    ?>

        <section class="product-section relative overflow-hidden pt-[90px] pb-[140px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]">
        <?php if ($shape  ?? true == 'true') : ?>
            <div class="left-shape srl size-full max-w-[180px] ml-auto rounded-r-[14px] bg-blue absolute left-0 top-0 sm:hidden"></div>
        <?php endif; ?>
        <div class="max-w-[1920px] relative overflow-visible container group/container animContainer">
            <div class="wrapper">
                <div class="grid grid-cols-[minmax(0,5.5fr)_minmax(0,6.5fr)] md:grid-cols-1 xl:gap-[50px]">
                    <div class="product-image-field flex flex-col gap-[85px] md:hidden xl:gap-[30px]">
                        <div class="product-image-carosuel swiper size-full overflow-hidden rounded-[14px] flex flex-col gap-[85px]">
                            <div class="swiper-wrapper [&>*:swiper-slide-next_.swiper-slide_.item]">
                                <?php foreach ($products as $key => $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="image relative size-full aspect-[52/47] overflow-hidden">
                                            <img src="{{ asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) . '/' . $item->slider_image ) }}" alt="" class="size-full object-cover object-center" data-swiper-parallax-x="50%">
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="swiper-slide"></div>
                            </div>
                            <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                                <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                    <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                                </div>
                            </div>
                        </div>
                        <div class="product-controller relative z-2 flex items-center gap-[125px] max-w-[333px] mx-auto xl:mr-0">
                            <div class="product-pagination text-[24px] text-[#52555C]/30 font-medium leading-[36px] [&_.swiper-pagination-current]:text-[32px] [&_.swiper-pagination-current]:text-green">
                            </div>
                            <div class="carousel-navigation flex items-center gap-[40px]">
                                <div class="product-prev cursor-pointer size-[40px] leading-normal [&.swiper-button-disabled_.icon]:text-[#52555C]/35 [&.swiper-button-disabled_.icon]:scale-x-100">
                                    <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                </div>
                                <div class="product-next cursor-pointer size-[40px] leading-normal [&.swiper-button-disabled_.icon]:text-[#52555C]/35 [&.swiper-button-disabled_.icon]:scale-x-100">
                                    <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-field relative flex flex-col gap-[90px] xsm:gap-[30px] xl:gap-[50px]">
                        <div class="rectangle absolute left-[-30px] top-[-35px] size-[70px]">
                            <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                        </div>
                        <div class="triangle absolute right-0 top-[-90px] size-[130px] md:size-[100px]">
                            <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                        </div>
                        <div class="title-field flex flex-col gap-[20px] ml-[120px] md:justify-center md:items-center xl:ml-0 xl:gap-0">
                            <h5 class="mini-title text-[#52555C] text-[24px] italic leading-[60px] opacity-75 xsm:text-[20px]">A Brand New Experience</h5>
                            <h2 class="title relative ml-[50px] text-blue text-[64px] font-bold leading-[80px] before:absolute before:left-[-50px] before:top-[50%] before:translate-y-[-50%] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] xsm:text-[30px] sm:ml-0 sm:text-[40px] sm:before:hidden sm:leading-normal md:[&>_br]:hidden xl:text-[50px]"><strong><?= $productTitle ?></strong> PRODUCTS</h2>
                        </div>
                        <div class="carousel-navigation items-center justify-center hidden gap-[40px] md:flex">
                            <div class="product-prev cursor-pointer size-[40px] leading-normal [&.swiper-button-disabled_.icon]:text-[#52555C]/35 [&.swiper-button-disabled_.icon]:scale-x-100">
                                <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                            </div>
                            <div class="product-next cursor-pointer size-[40px] leading-normal [&.swiper-button-disabled_.icon]:text-[#52555C]/35 [&.swiper-button-disabled_.icon]:scale-x-100">
                                <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                            </div>
                        </div>
                        <div class="product-carousel swiper w-full h-fit overflow-visible ml-[-200px] xsm:overflow-hidden xl:ml-0">
                            <div class="swiper-wrapper">
                                <?php foreach ($products as $key => $item) : ?>
                                    <div class="swiper-slide group/slide duration-350">
                                        <div class="item group/item translate-z-0 min-md:opacity-0 relative bg-gradient-to-b from-green to-blue md:!p-[2px] rounded-[14px] overflow-hidden min-md:group-[&.swiper-slide-active]/slide:p-[2px] min-md:[box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] duration-350 min-md:group-[&.swiper-slide-next]/slide:opacity-100 min-md:group-[&.swiper-slide-active]/slide:opacity-100 min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100 md:shadow-lg">
                                            <div class="content bg-white size-full pb-[60px] rounded-[12px]">
                                                <a href="" class="flex flex-col items-center duration-350">
                                                    <div class="product-detail-carousel swiper size-full overflow-hidden">
                                                        <div class="swiper-wrapper">
                                                                <div class="swiper-slide duration-350 [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto">
                                                                    <div class="image size-full aspect-[23/18] md:aspect-video">
                                                                        <img src="{{ asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) . '/' . $item->image ) }}" alt="" class="size-full object-contain object-center">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="pag-and-button-field w-full grid grid-cols-3 items-center gap-[65px]">
                                                        <div></div>
                                                        <div class="product-detail-pagination pointer-events-auto !w-full !flex !justify-center !gap-[15px] !z-2 !relative [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:!size-[12px] [&_.swiper-pagination-bullet]:!rounded-none [&_.swiper-pagination-bullet]:!mx-0 [&_.swiper-pagination-bullet]:bg-blue/10 [&_.swiper-pagination-bullet-active]:!bg-green lg:!gap-[5px]"></div>
                                                        <div class="fx-hover-repulse group/button pointer-events-auto">
                                                            <div class="inner">
                                                                <button class="button item relative overflow-hidden translate-z-0 size-[66px] p-[20px] rounded-full bg-green flex items-center justify-center before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:scale-0 before:size-[40px] before:rounded-full before:bg-blue before:duration-350 group-hover/button:before:scale-[2] lg:before:size-[20px] lg:size-[33px] lg:p-[10px] xl:before:size-[25px] xl:size-[44px] xl:p-[15px]">
                                                                    <i class="icon icon-arrow-top relative z-2 text-[10px] size-[24px] text-white leading-normal flex justify-center items-center duration-350 group-hover/button:rotate-45 xl:size-[12px] xl:text-[8px]"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content flex flex-col items-center pointer-events-auto">
                                                        <a href="" class="text text-[#52555C] text-[18px] leading-[28px] opacity-65">{{ $item->category->title }}</a>
                                                        <h4 class="title text-blue text-[24px] font-bold leading-[36px] opacity-90 xl:text-[20px]">{{ $item->title }}</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="swiper-slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

@endsection

<!-- script --> 
@section('script') 

@endsection