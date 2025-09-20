@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $about->title;
$breadcrumbTitle = $about->title;
$breadcrumbImage = $about->image;
?>
    <main class="main-field fixed-header">
    <!-- BREADCRUMB -->
    <section class="breadcrumb-field relative overflow-hidden">
        <div class="image-wrapper overflow-hidden absolute left-0 top-0 w-full h-[100vh]">
            <div class="content relative w-full h-[100vh]">
                <div class="background [background:_linear-gradient(180deg,_rgba(0,_0,_0,_0.50)_0%,_rgba(0,_0,_0,_0.15)_100%);] absolute top-0 left-0 size-full z-2 translate-z-0 overflow-hidden"></div>
                <div class="image w-full h-[100vh] overflow-hidden translate-z-0">
                    <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $about->lang ) . '/' . $breadcrumbImage) }}" alt="{{ $breadcrumbTitle }}" class="size-full object-cover object-center" />
                </div>
            </div>
        </div>
        <div class="container max-w-[1690px] px-[30px] sm:px-[20px] mx-auto pt-[405px] pb-[140px] relative w-full h-[100vh] z-20 md:py-[60px]">
            <div class="flex srb items-end justify-center h-full gap-[70px] xsm:gap-[30px]">
                <div class="content-wrapper flex flex-col justify-center items-end w-fit md:gap-[15px]">
                    <div class="navigation-wrapper xsm:hidden">
                        <ul class="flex gap-[5px] flex-wrap">
                            <li>
                                <a href="index.php" class="flex items-center group/link">
                                    <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">Home</span>
                                </a>
                            </li>
                            <li>
                                <p class="split text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">/</p>
                            </li>
                            <li>
                                <a href="index.php" class="flex items-center group/link">
                                    <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">Wepadel</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="page-name-wrapper">
                        <h2 class="title text-[48px] text-[#eee] font-bold leading-[64px] uppercase 2xl:text-[60px] xl:text-[32px] lg:text-[26px] lg:leading-normal md:text-[24px] sm:text-[22px] xsm:h-[95px] xsm:flex xsm:items-center"><?= $breadcrumbTitle ?></h2>
                    </div>

                </div>
                <div class="scroll-and-expo-field flex gap-[70px] md:items-center xsm:gap-[30px]">
                    <div class="scroll-field group/scroll cursor-pointer scrollable relative overflow-hidden w-[5px] h-[95px] duration-350 xsm:order-2" data-scrollable="#about-section">
                        <svg width="5" height="96" viewBox="0 0 5 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="5" height="96" rx="2.5" fill="white" fill-opacity="0.2" />
                            <rect class="duration-350 ease-kagitmiadam group-hover/scroll:translate-y-[55%]" width="5" height="41" rx="2.5" fill="#75BF00" />
                        </svg>
                    </div>
                    <p class="expo text-[32px] 2xl:text-[30px] xl:text-[26px] lg:text-[24px] sm:text-[14px] max-w-[510px] text-white/80 leading-[48px] duration-350 md:max-w-[250px] md:leading-normal sm:h-min xsm:order-1">
                        Discover the Power of the Game That Brings Passion to the Field!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="tab-section sticky top-0 z-50 pb-[120px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-0">
        <div class="container relative max-w-[1340px] h-full z-90 sm:px-0">
            <div class="wrapper">
                <?php $list = [
                    ['title' => 'Who We Are', 'data-scroll' => '#about-section'],
                    ['title' => 'Certificates', 'data-scroll' => '#c'],
                    ['title' => 'How We Do It', 'data-scroll' => '#card-section'],
                    ['title' => 'What We Are Doıng', 'data-scroll' => '#wwad'],
                    ['title' => 'Vision &  Mission', 'data-scroll' => '#vm'],
                    ['title' => 'Our Other Brands', 'data-scroll' => '#oob'],
                ];
                ?>
                <div class="page-filter-wrapper sm:hidden">
                    <div class="page-field p-[15px] srb w-full h-[120px] mx-auto mt-[-45px] bg-white relative flex items-center justify-between [box-shadow:_0px_10px_40px_0px_rgba(14,_42,_67,_0.15);] rounded-[8px] md:p-0 md:px-[30px] md:mt-0">
                        <?php foreach ($list as $key => $item) : ?>
                            <div class="page-item group/item <?= $key == 0 ? 'is-active' : '' ?>  scrollable relative overflow-hidden cursor-pointer py-[15px] px-[25px] h-[60px] flex justify-center items-center bg-transparent rounded-[8px] duration-350 before:absolute before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[50%] before:h-[50px] before:rounded-full before:duration-350 before:bg-green before:scale-0 [&.is-active]:before:scale-[2.2] md:h-[50px] md:px-[12px]" data-scrollable="<?= $item['data-scroll'] ?>">
                                <small class="text relative z-2 text-[18px] text-[#52555C]/50 font-medium leading-[28px] duration-350 group-[&.is-active]/item:text-white group-hover/item:text-[#52555C]/80 md:text-[16px]"> <?= $item['title'] ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
   <section class="two-image-section overflow-hidden pt-[90px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="about-section">
    <div class="container max-w-[1800px] group/container x-anim-container">
        <div class="wrapper">
            <div class="grid grid-cols-[minmax(0,6fr)_minmax(0,6fr)] items-center gap-[160px] relative xsm:grid-cols-1 sm:gap-[30px] xl:gap-[60px]">
                <div class="rectangle absolute right-[450px] top-[70px] size-[70px] z-10">
                    <img src="../assets/svg/rectangle.svg" alt="Rectangle" class="size-full object-contain object-center rotate-anim-x">
                </div>
                <div class="triangle absolute right-[100px] top-0 size-[130px] z-10 md:size-[100px]">
                    <img src="../assets/svg/triangle.svg" alt="Triangle" class="size-full object-contain object-center rotate-anim-x">
                </div>
                <div class="two-image-carousel swiper w-full min-sm:overflow-visible srb" dir="rtl">
                    <div class="swiper-wrapper">
                        <?php foreach ($about_slider as $key => $item) : ?>
                            <div class="swiper-slide group/slide min-sm:[&.swiper-slide-next]:-z-10 min-sm:[&.swiper-slide-active]:z-20">
                                <div class="image-field relative size-full aspect-[75/79] min-sm:opacity-0 overflow-hidden rounded-[20px] duration-350 min-sm:group-[&.swiper-slide-next]/slide:blur-[10px] min-sm:group-[&.swiper-slide-next]/slide:left-[680px] min-sm:group-[&.swiper-slide-next]/slide:scale-90 min-sm:group-[&.swiper-slide-next]/slide:opacity-100 min-sm:group-[&.swiper-slide-active]/slide:scale-100 min-sm:group-[&.swiper-slide-active]/slide:opacity-100 lg:group-[&.swiper-slide-next]/slide:left-0 xl:group-[&.swiper-slide-next]/slide:left-[400px] sm:aspect-square xsm:aspect-video">
                                    <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $about->lang ) . '/' . $item->image) }}" alt="{{ $item->alt }}" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                    <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="about-pagination !w-full !flex !justify-end !z-2 !relative !left-[50px] !bottom-[50px] [&_.swiper-pagination-bullet-active]:!opacity-100 [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:!size-[12px] [&_.swiper-pagination-bullet]:!rounded-none [&_.swiper-pagination-bullet]:opacity-30 [&_.swiper-pagination-bullet]:!bg-primary-400/0 [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:!border-solid [&_.swiper-pagination-bullet]:!border-white [&_.swiper-pagination-bullet-active]:!outline-[5px]"></div>
                </div>
                <div class="homepage-about-content group/content relative z-5 srt flex justify-center flex-col h-full bg-white">
                    <div class="text-editor max-w-full mb-[60px] gap-[40px] editor-p:text-[#52555C] editor-h2:uppercase editor-h2:relative editor-h2:text-blue editor-h2:before:absolute editor-h2:before:top-[-30px] editor-h2:before:left-0 editor-h2:before:w-[20px] editor-h2:before:h-0 editor-h2:before:bg-green editor-h2:before:-rotate-180 editor-h2:before:duration-350 group-[&.is-active]/container:editor-h2:before:h-[20px] sm:gap-[15px] sm:mb-[15px] sm:editor-h2:text-[22px] sm:editor-h2:before:hidden md:editor-h2:leading-normal">
                        <h2>{{$about->title_1}}</h2>
                        <p>{{$about->description}}</p>
                    </div>
                    <a href="about.php" class="button fx fx-text-hover-with-child group/button relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] sm:h-[50px] md:h-[60px]">
                        <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px]">About Us</small>
                        <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- REFERANCE SECTION -->
    <?php
        $moduleId = 'id="c"';
    ?>
    <section class="referance-section py-[120px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" <?= $moduleId ?>>
    <div class="max-w-[1800px] container">
        <div class="wrapper">
            <div class="grid grid-cols-5 justify-between srb-all">
                <?php foreach ($certificates as $key => $item) : ?>
                    <div class="item w-full h-[50px] opacity-50 flex justify-center items-center duration-350 hover:opacity-100">
                        <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $about->lang ) . '/' . $item->image) }}" alt="{{ $item->alt }}" class="size-full object-contain object-center">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
    

    <!-- HOW WE DO IT SECTION -->
    <?php
    $moduleTitle = 'How We Do It';
    $moduleImage = 'image-11.png';
    $moduleClass = 'pb-[200px]';
    $slideTitle = 'Section <?= $i ?>';
    ?>
    <section class="cards-section rounded-[20px] <?= $moduleClass ?> 2xl:px-[30px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="card-section">
    <div class="max-w-[1860px] relative mx-auto bg-blue rounded-[20px] animContainer group/container overflow-hidden">
        <div class="rectangle absolute left-[90px] bottom-[120px] size-[70px] xl:left-[30px]">
            <img src="../assets/svg/white-rectangle.svg" alt="White Rectangle" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="triangle absolute right-[50px] top-[150px] size-[130px] md:size-[100px] xl:right-[30px] z-10">
            <img src="../assets/svg/white-triangle.svg" alt="White Triangle" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="wrapper">
            <div class="flex items-center pl-[80px] lg:pl-0 md:flex-col xsm:p-[30px]">
                <div class="card-image-carousel swiper w-full overflow-visible max-w-[725px] srb py-[170px] xsm:max-w-[380px] md:py-[30px] md:order-2 lg:max-w-[650px] 2xl:max-w-[675px]" dir="rtl">
                    <div class="swiper-wrapper pointer-events-none">
                        <?php foreach ($how_we_do as $key => $item) : ?>
                            <div class="swiper-slide group/slide min-md:z-10 min-md:pointer-events-none min-md:left-0 duration-350 min-md:[&.swiper-slide-next]:pointer-events-auto min-md:[&.swiper-slide-next]:-z-5 min-md:[&.swiper-slide-next+.swiper-slide]:-z-10 min-md:[&.swiper-slide-next+.swiper-slide]:pointer-events-auto">
                                <div class="image-field relative size-full aspect-[37/28] min-md:blur-[5px] min-md:opacity-0 overflow-hidden rounded-[20px] translate-x-0 duration-350 min-md:group-[&.swiper-slide-active]/slide:!opacity-100 min-md:group-[&.swiper-slide-active]/slide:blur-0 min-md:group-[&.swiper-slide-next]/slide:scale-[0.8] min-md:group-[&.swiper-slide-next]/slide:!opacity-100 min-md:group-[&.swiper-slide-next]/slide:!translate-x-[600px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1200px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:scale-[0.6] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100  md:aspect-video 2xl:aspect-[30/25]">
                                    <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $item->lang ) . '/' . $item->image) }}" alt="{{ $item->alt }}" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                    <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="overlay size-[768px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] [background:_radial-gradient(50%_50%_at_50%_50%,_rgba(228,_236,_255,_0.50)_0%,_rgba(255,_255,_255,_0.00)_100%);] md:hidden"></div>
                </div>
                <div class="card-fields flex justify-center flex-col h-full bg-blue py-[170px] srb z-2 sm:p-0 sm:pt-[30px] md:pt-0 md:pb-[30px] md:order-1 lg:pl-0 lg:pr-[30px] xl:pl-[30px] ">
                    <div class="title-field relative sm:w-fit sm:mx-auto">
                        <h2 class="title relative ml-[50px] text-white text-[64px] font-bold leading-[80px] before:absolute before:left-[-50px] before:top-[50%] before:translate-y-[-50%] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] xsm:text-[30px] sm:ml-0 sm:text-[40px] sm:leading-normal sm:before:hidden md:text-center md:[&>_br]:hidden xl:text-[50px] "><?= $moduleTitle ?></h2>
                    </div>
                    <div class="carousel-field flex items-center mt-[85px] ml-[70px] gap-[65px] lg:gap-[15px] lg:ml-[40px] md:flex-col md:m-0">
                        <div class="carousel-navigation flex min-md:flex-col items-center md:gap-[15px]">
                            <div class="card-prev size-[40px] leading-normal min-md:ml-[-90px] min-md:[&.swiper-button-disabled_.icon]:text-white/35 min-md:[&.swiper-button-disabled_.icon]:scale-x-100 md:size-[30px]">
                                <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 md:text-[25px] md:size-[25px]"></i>
                            </div>
                            <div class="card-next size-[40px] leading-normal min-md:[&.swiper-button-disabled_.icon]:text-white/35 min-md:[&.swiper-button-disabled_.icon]:scale-x-100 md:size-[30px]">
                                <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 md:text-[25px] md:size-[25px]"></i>
                            </div>
                        </div>
                        <div class="card-carousel swiper w-full mx-auto max-w-[590px] overflow-hidden mr-0 lg:max-w-[370px] md:max-w-[1000px] xsm:max-w-[320px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($how_we_do as $key => $item) : ?>
                                    <div class="swiper-slide group/slide border-[4px] border-solid border-white/14 bg-white/3 overflow-hidden rounded-[16px]">
                                        <div class="card w-full max-w-[355px] h-[330px] opacity-50 py-[40px] px-[35px] flex justify-center items-center flex-col gap-[18px] duration-350 group-[&.swiper-slide-active]/slide:opacity-100 md:mx-auto">
                                            <div class="image size-[60px]">
                                                <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $item->lang ) . '/' . $item->icon_image) }}" alt="{{ $item->alt }}" class="size-full object-contain object-center">
                                            </div>
                                            <h3 class="title text-white text-[32px] font-bold leading-[48px]">{{ $item->title }}</h3>
                                            <p class="expo text-white text-[16px] leading-[28px] text-center">{{ $item->description }}</p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- WHAT WE ARE DOING SECTION -->
    <section class="job-section pt-[60px] pb-[120px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="wwad">
        <div class="max-w-[1830px] container group/container x-anim-container">
            <div class="wrapper">
                <div class="relative grid grid-cols-[minmax(0,1fr)_minmax(0,11fr)] items-end sm:grid-cols-1">
                    <div class="triangle fast-triangle absolute right-0 top-0 size-[130px] md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="Triangle" class="size-full object-contain object-center rotate-anim-x">
                    </div>
                    <div class="rectangle fast-rectangle absolute right-[500px] bottom-[200px] size-[70px]">
                        <img src="../assets/svg/rectangle.svg" alt="Rectangle" class="size-full object-contain object-center rotate-anim-x">
                    </div>
                    <div class="title-field srb relative min-sm:w-fit min-sm:mb-[90px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-full before:mt-[45px] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] md:mb-[60px] md:before:hidden xl:my-auto">
                        <h1 class="title text-[64px] text-blue leading-[80px] uppercase min-sm:[writing-mode:_vertical-rl;] min-sm:rotate-180 xl:text-[50px] md:[&>_br]:hidden sm:text-center sm:leading-normal xsm:text-[30px]"><strong>What</strong> We Are Doıng</h1>
                    </div>
                    <div class="image-and-carosuel-field flex items-center gap-[100px] lg:gap-[30px] xsm:flex-col">
                        <!-- IMAGE -->
                        <div class="job-image-carousel swiper relative overflow-hidden max-w-[820px] max-h-[770px] size-full rounded-[14px] md:max-h-auto xsm:max-h-[350px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($what_we_do as $key => $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="image aspect-[82/77] size-full overflow-hidden">
                                            <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $item->lang ) . '/' . $item->image) }}" alt="{{ $item->alt }}" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100" data-swiper-parallax-y-="-50%">
                                            <?php if ($key == 0) : ?>
                                                <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                                <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                    <img src="../assets/image/trademark/logo.png" alt="Trademark Logo" class="size-full object-contain object-center">
                                </div>
                            </div>
                        </div>
                        <!-- CONTROLLER -->
                        <div class="carousel-navigation max-w-[125px] flex min-sm:flex-col items-center gap-[35px] sm:gap-[15px]">
                            <div class="job-prev size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-blue/35 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                <i class="icon icon-arrow-left rotate-90 text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                            </div>
                            <div class="job-next size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-blue/35 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                <i class="icon icon-arrow-left -rotate-90 text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                            </div>
                        </div>
                        <!-- CONTENT -->
                        <?php $list = ['Design', 'Installation', 'Manufacture', 'Design',]; ?>
                        <div class="job-content-carousel swiper relative overflow-hidden max-w-[490px] max-h-[590px] size-full xsm:max-h-[300px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($what_we_do as $key => $item) : ?>
                                    <div class="swiper-slide group/slide">
                                        <div class="content flex flex-col gap-0 duration-350 group-[&.swiper-slide-next]/slide:mt-[40px]" data-swiper-parallax-y="50%">
                                            <div class="title text-blue/65 text-[64px] leading-[80px] font-normal relative pl-[30px] duration-350 group-[&.swiper-slide-active]/slide:font-bold group-[&.swiper-slide-active]/slide:text-blue md:text-[40px]"><?= $item->title ?></div>
                                            <div class="description text-[#52555C] text-[18px] leading-[28px] h-0 invisible pl-[30px] opacity-0 duration-350 group-[&.swiper-slide-next]/slide:mt-[40px] group-[&.swiper-slide-active]/slide:opacity-65 group-[&.swiper-slide-active]/slide:visible"><?= $item->description ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION VISION SECTION -->
    <section class="mission-vision-section pb-[175px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="vm">
        <div class="max-w-[1800px] container group/container mv-anim-container">
            <div class="wrapper">
                <?php $list = ['VISION', 'MISSION',]; ?>
                <div class="grid grid-cols-2 gap-[100px] xl:gap-[30px] xsm:grid-cols-1">
                    <div class="mv-item group/item relative overflow-hidden rounded-[16px] border-[5px] border-solid border-blue/6 duration-350 hover:border-blue/0">
                        <div class="right-triangle opacity-0 absolute z-2 right-[-100px] top-[60px] size-[130px] duration-350 group-hover/item:opacity-100 md:size-[100px]">
                            <img src="../assets/svg/white-triangle.svg" alt="White Triangle" class="size-full object-contain object-center anim-mv">
                        </div>
                        <div class="overlay absolute left-0 top-0 size-full bg-blue opacity-0 duration-350 group-hover/item:opacity-100"></div>
                        <div class="image absolute left-0 top-0 size-full mix-blend-plus-lighter rounded-full opacity-0 duration-350 group-hover/item:opacity-100 group-hover/item:rounded-none">
                            <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $about->lang ) . '/' . $about->vision_image) }}" alt="{{ $about->vision_title }}" class="size-full object-cover object-center">
                        </div>
                        <div class="text-editor max-w-full px-[115px] py-[120px] relative editor-h2:text-blue editor-h2:pl-[50px] editor-h2:relative editor-h2:before:absolute editor-h2:before:left-0 editor-h2:before:top-[50%] editor-h2:before:translate-y-[-50%] editor-h2:before:bg-green editor-h2:before:size-[24px] editor-h2:duration-350 editor-p:text-[#52555C] group-hover/item:editor-h2:text-white group-hover/item:editor-p:text-white/55 xl:p-[80px] md:p-[40px]">
                            <h2>{{ $about->vision_title }}</h2>
                            <p>{{ $about->vision_text }}</p>
                        </div>
                    </div>
                    <div class="mv-item group/item relative overflow-hidden rounded-[16px] border-[5px] border-solid border-blue/6 duration-350 hover:border-blue/0">
                        <div class="left-triangle opacity-0 absolute z-2 left-[-100px] top-[60px] size-[130px] duration-350 group-hover/item:opacity-100 md:size-[100px]">
                            <img src="../assets/svg/white-triangle.svg" alt="White Triangle" class="size-full object-contain object-center anim-mv-left">
                        </div>
                        <div class="overlay absolute left-0 top-0 size-full bg-blue opacity-0 duration-350 group-hover/item:opacity-100"></div>
                        <div class="image absolute left-0 top-0 size-full mix-blend-plus-lighter rounded-full opacity-0 duration-350 group-hover/item:opacity-100 group-hover/item:rounded-none">
                            <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $about->lang ) . '/' . $about->mission_image) }}" alt="{{ $about->mission_title }}" class="size-full object-cover object-center">
                        </div>
                        <div class="text-editor max-w-full px-[115px] py-[120px] relative editor-h2:text-blue editor-h2:pl-[50px] editor-h2:relative editor-h2:before:absolute editor-h2:before:left-0 editor-h2:before:top-[50%] editor-h2:before:translate-y-[-50%] editor-h2:before:bg-green editor-h2:before:size-[24px] editor-h2:duration-350 editor-p:text-[#52555C] group-hover/item:editor-h2:text-white group-hover/item:editor-p:text-white/55 xl:p-[80px] md:p-[40px]">
                            <h2>{{ $about->mission_title }}</h2>
                            <p>{{ $about->mission_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER BRANDS -->
    <section class="brands-section relative overflow-hidden pb-[210px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="oob">
        <div class="max-w-[1920px] container group/container animContainer">
            <div class="rectangle absolute left-[130px] top-0 size-[70px]">
                <img src="../assets/svg/rectangle.svg" alt="Rectangle" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="triangle absolute right-[400px] top-[-4px] size-[130px] md:size-[100px] sm:right-0">
                <img src="../assets/svg/triangle.svg" alt="Triangle" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="wrapper">
                <div class="grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] items-center justify-center relative md:grid-cols-1 md:gap-[15px]">
                    <!-- BU YAPININ DÜZGÜN ÇALIŞABİLMESİ İÇİN EN AZ 4 ADETTEN BAŞLAMALIDIR -->
                    <div class="brand-general-carousel swiper size-full relative  before:absolute before:left-0 before:top-0 before:bg-white before:w-[75%] before:h-full min-md:overflow-visible md:order-3" dir="rtl">
                        <div class="swiper-wrapper">
                            <?php foreach ($brands as $key => $item) : ?>
                                <div class="swiper-slide group/slide min-md:!pointer-events-none duration-350 [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto">
                                    <a href="brand-detail.php" class="brand-item flex relative min-md:opacity-0 min-md:pointer-events-none min-md:scale-75 duration-350 min-md:group-[&.swiper-slide-active]/slide:scale-100 min-md:group-[&.swiper-slide-active]/slide:pointer-events-auto min-md:group-[&.swiper-slide-active]/slide:opacity-100 min-md:group-[&.swiper-slide-next]/slide:blur-[5px] group-[&.swiper-slide-next]/slide:pointer-events-auto group-[&.swiper-slide-next]/slide:opacity-100 md:h-full md:flex-col md:gap-[15px]" dir="ltr">
                                        <div class="brand-image aspect-[13/10] size-full rounded-[14px] relative overflow-hidden md:aspect-video">
                                            <img src="{{ asset(getFolder( ['uploads_folder', 'brand_images_folder'], $item->lang ) . '/' . $item->slider_image) }}" alt="{{ $item->alt }}" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="brand-content-wrapper flex items-center justify-end gap-[60px] -z-2 relative w-full md:order-1 md:justify-center md:flex-col">
                        <!-- BU YAPININ DÜZGÜN ÇALIŞABİLMESİ İÇİN EN AZ 4 ADETTEN BAŞLAMALIDIR -->
                        <div class="brand-content-carousel swiper overflow-visible max-w-[370px] size-full md:order-2">
                            <div class="swiper-wrapper">
                                <?php foreach ($brands as $key => $item) : ?>
                                    <div class="swiper-slide group/slide">
                                        <div class="item relative duration-350 opacity-0 group-[&.swiper-slide-prev]/slide:opacity-35 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-next]/slide:opacity-0">
                                            <div class="image max-w-[285px] h-[80px] w-full xsm:mx-auto">
                                                <img src="{{ asset(getFolder( ['uploads_folder', 'brand_images_folder'], $item->lang ) . '/' . $item->image) }}" alt="{{ $item->alt }}" class="size-full object-contain object-center grayscale duration-350 group-[&.swiper-slide-active]/slide:grayscale-0">
                                            </div>
                                            <div class="content w-full max-w-[385px] mt-[60px] opacity-0 scale-0 pointer-events-none duration-350 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:scale-100 group-[&.swiper-slide-active]/slide:pointer-events-auto xl:mt-[30px]">
                                                <p class="expo text-[18px] text-[#52555C]/65 leading-[28px] xsm:text-center">{{ $item->description }}</p>
                                                <a href="" class="button group/button fx fx-text-hover-with-child relative mt-[70px] bg-green flex justify-center items-center gap-[15px] px-[25px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[35px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] sm:h-[50px] sm:px-[15px] sm:w-full  md:h-[60px] xl:mt-[30px]">
                                                    <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px]">Visit Website</small>
                                                    <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="title-field srr relative min-md:w-fit min-md:mb-[90px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-full before:mt-[45px] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] md:before:hidden md:order-1">
                            <h1 class="title text-[64px] text-blue leading-[80px] whitespace-nowrap min-md:[writing-mode:_vertical-rl;] min-md:rotate-180 xsm:text-[30px] sm:leading-normal md:[&>_br]:hidden xl:text-[50px]"><strong>OTHER</strong> BRANDS</h1>
                        </div>
                    </div>
                    <div class="brand-controller srb absolute right-[285px] bottom-[115px] z-5 flex items-center gap-[125px] max-w-[100px] mx-auto md:relative md:left-0 md:top-0 md:!translate-x-0 md:order-2 lg:right-[200px] xl:right-[250px] xl:bottom-[100px]">
                        <div class="carousel-navigation flex min-md:flex-col items-center md:gap-[15px]">
                            <div class="brand-prev size-[40px] leading-normal cursor-pointer min-md:ml-[-90px] min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
                                <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                            </div>
                            <div class="brand-next size-[40px] leading-normal cursor-pointer min-md:[&.swiper-button-disabled_.icon]:text-white/70 min-md:[&.swiper-button-disabled_.icon]:scale-x-100">
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