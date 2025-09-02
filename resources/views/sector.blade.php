@extends('layouts.main')

@section('content')
    <main class="main-field header-space">
    <?php
        $pageTitle = $sector->title ?? 'Sektör Detay';
        $breadcrumbImage = "corporate-breadcrumb.jpg";
        $breadcrumbVideo = "breadcrumb-video.mp4";
        $pageLink = "page-sector-detail.php";
        $imageOrVideo = "image";
    ?>
    @include('partials.breadcrumb')
    <section class="content mt-[130px] xl:mt-[100px] mb:mt-[70px] sm:mt-[50px]">

        <section class=" sector-detail relative mb-[150px] xl:mb-[120px] lg:mb-[90px] md:mb-[60px]">
            <img src="../assets/image/static/vectorel-sector.svg" alt="Vektör" width="670" height="588" class="pointer-events-none absolute top-1/2 -translate-y-1/2 right-0 ">
            <div class="container max-w-[1650px]">
                <div class="flex flex-wrap items-center">
                    <div class="w-2/5 md:w-full md:!pr-0">
                        <div class="image-wrapper reveal w-full h-[650px] md:h-[580px] sm:h-[320px] relative">
                            <img src="../assets/image/general/mega-menu-image.jpg" alt="Sektör Detay" width="1045" height="539" class="w-full h-full object-cover relative z-2">
                            <div class="bg-primary-main absolute -top-[38px] sm:-top-[20px] -right-[38px] sm:-right-[20px] w-[421px] sm:w-[320px] aspect-square"></div>
                        </div>
                    </div>
                    <div class="w-3/5 md:w-full pl-[178px] 2xl:pl-[89px] xl:pl-[50px] md:p-0 md:mt-[30px] [@media(min-width:1760px)]:translate-x-[-20px]">
                        <div class="flex flex-col text-editor reveal">
                            <span class="text-[16px] leading-[32px] font-light text-paragraph opacity-65 tracking-[7.2px] block mb-[30px] lg:mb-[5px]">Bizi Tanıyın</span>
                            <h2 class="text-[46px] xl:text-[32px] lg:text-[24px] leading-[60px] xl:leading-[50px] lg:leading-[40px] md:leading-[36px] tracking-[-0.46px] font-light text-secondary-main mb-[80px] 2xl:mb-[50px] md:mb-[30px] xs:mb-[20px]">
                                <?= $sector->title_1 ?>
                            </h2>
                            <p class="text-[22px] lg:text-[18px] leading-[45px] lg:leading-[40px] font-light tracking-[-0.22px] text-paragraph mb-[30px] xs:mb-[20px]"></p>
                            <p class="text-[18px] lg:text-[16px] leading-[32px] font-light text-paragraph mb-[60px] xl:mb-[40px] md:mb-[30px]">
                                <?= $sector->description ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="career-slider-area overflow-hidden md:bg-secondary-main mb-[180px] xl:mb-[120px] lg:mb-[90px] md:mb-[60px] relative">
            <div class="max-w-[1920px] mx-auto relative overflow-hidden">
                <div class="container max-w-[1800px]">
                    <div class="bg-primary-main absolute -z-[1] -bottom-[90px] xl:-bottom-[60px] lg:-bottom-[20px] -right-0 max-w-[440px] [@media(max-width:1780px)_and_(min-width:1441px)]:max-w-[400px] xl:max-w-[360px] w-full h-[426px] md:hidden"></div>
                    <div class="wrapper min-sm:overflow-hidden bg-secondary-main md:bg-transparent p-[50px] pl-[105px] xl:pl-[80px] lg:pl-[30px] lg:p-[30px] sm:p-[20px_0] relative">
                        <img src="../assets/image/static/vectorel-2.svg" alt="Vektör" width="610" height="535" class="reveal max-w-[610px] xl:max-w-[500px] sm:max-w-full sm:w-full h-auto absolute z-2 pointer-events-none left-1/2 top-1/2 sm:top-[30px] -translate-x-1/2 min-sm:-translate-y-1/2">
                        <div class="sector-slider reveal overflow-hidden relative z-4">
                            <div class="swiper-wrapper">
                                <?php foreach ($slider1 as $key => $item) { ?>
                                    <div class="swiper-slide overflow-hidden" data-slide-name="<?= $item->title ?>" data-slide-id="<?= $key + 1 ?>">
                                        <div class="item w-full grid grid-cols-2 sm:grid-cols-1 items-end gap-[200px] 2xl:gap-[160px] xl:gap-[100px] lg:gap-[60px] md:gap-[30px]">
                                            <div class="left mb-[90px] 2xl:mb-[60px] xl:mb-[45px] lg:mb-[30px] md:mb-0">
                                                <span class="block mb-[50px] md:mb-[30px] text-[16px] leading-[32px] font-light text-white opacity-65 tracking-[7.2px]"><?= $item->title_1 ?></span>
                                                <div class="flex flex-col gap-[30px] sm:gap-[20px] text-editor">
                                                    <h3 class="text-[46px] xl:text-[32px] lg:text-[24px] leading-[60px] xl:leading-[50px] lg:leading-[40px] md:leading-[36px] tracking-[-0.46px] font-light text-white [&_span]:font-bold"><?= $item->title ?></h3>
                                                    <p class="text-[17px] md:text-[16px] sm:text-[15px] leading-[32px] sm:leading-[28px] font-light text-white mb-[20px] sm:mb-[5px]"><?= $item->description ?></p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="image-wrapper w-full h-[500px]  xl:h-[450px] sm:h-[320px]  xsm:mt-[40px]">
                                                    <img src="<?= env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder','sector_images_folder'], app()->getLocale()).'/'. $item->image ?>" alt="<?= $item->title ?>" width="745" height="535" class="w-full h-full object-cover" data-swiper-parallax="50%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-navigation flex items-end gap-[112px] pt-[40px] xsm:pt-[20px] xs:pt-0 pb-[20px] md:pb-[40px] lg:gap-[50px] pl-[95px] 2xl:pl-[45px] xl:pl-0 pr-[85px] xl:pr-0 relative z-5 xsm:absolute xsm:bottom-[370px] xs:bottom-[360px] xsm:w-[calc(100%-60px)] xsm:p-0">
                        <div class="reveal sector-pagination flex items-center gap-[30px] xl:gap-[20px] xsm:gap-[15px] xs:gap-[10px] [&_.swiper-pagination-bullet]:!max-w-[234px] xsm:hidden"></div>
                        <div class="reveal nav-buttons pb-[5px] flex items-center gap-[30px] sm:hidden">
                            <div class="sector-prev cursor-pointer flex items-center gap-[9px] transition-all duration-300 [&.sector-disabled]:opacity-65 relative [&.sector-disabled]:after:hidden after:absolute after:bottom-0 after:right-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-300 hover:after:right-auto hover:after:left-0 hover:after:w-full">
                                <i class="icon-angle-left text-[12px] leading-none text-white"></i>
                                <span class="text-[16px] leading-[32px] text-white md:hidden"><?=getStaticText(2)?></span>
                            </div>

                            <div class="separator w-[1px] h-[22px] bg-white/20"></div>

                            <div class="sector-next cursor-pointer flex items-center gap-[9px] transition-all duration-300 [&.sector-disabled]:opacity-65 relative [&.sector-disabled]:after:hidden after:absolute after:bottom-0 after:right-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-300 hover:after:right-auto hover:after:left-0 hover:after:w-full">
                                <span class="text-[16px] leading-[32px] text-white md:hidden"><?=getStaticText(3)?></span>
                                <i class="icon-angle-right text-[12px] leading-none text-white "></i>
                            </div>
                        </div>
                        <div class="swiper-scrollbar hidden xsm:block bg-white/15 [&_.swiper-scrollbar-drag]:bg-white relative left-0 w-full">
                            <div class="swiper-scrollbar-drag relative flex flex-col-reverse items-center">
                                <span class="block mb-[10px] text-white text-[13px] whitespace-nowrap pointer-events-none" id="scrollbar-name"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery mb-[170px] xl:mb-[120px] lg:mb-[90px] md:mb-[60px] overflow-hidden">
            <div class="container max-w-[1650px]">
                <h3 class="reveal text-[46px] xl:text-[32px] lg:text-[24px] leading-[60px] xl:leading-[50px] lg:leading-[40px] md:leading-[36px] tracking-[-0.46px] font-light text-secondary-main mb-[60px] xs:mb-[30px] text-center">
                    Wepadbol <br> <span class="font-bold">Galeri Medyası</span>
                </h3>

                <div class="gallery-slider reveal overflow-[revert]">
                    <div class="swiper-wrapper items-center h-[700px] xl:h-[600px] md:h-[500px] sm:h-[400px]">
                        <?php foreach ($slider2 as $slide): ?>
                            <div class="swiper-slide h-max group/slide sm:opacity-0 [&.swiper-slide-active]:sm:opacity-100 duration-300 transition-all">
                                <a href="<?= env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder','sector_images_folder'], app()->getLocale()).'/'. $slide->image ?>" class="overflow-hidden grid place-items-center item w-full h-[600px] group-[&.swiper-slide-active]/slide:h-[700px] group-[&.swiper-slide-active]/slide:xl:h-[600px] xl:h-[500px] group-[&.swiper-slide-active]/slide:md:h-[500px] md:h-[400px] sm:h-[320px] group-[&.swiper-slide-active]/slide:sm:h-[400px] transition-all duration-500 opacity-50 group-[&.swiper-slide-active]/slide:opacity-100 group/gallery" data-fancybox="gallery">
                                    <img src="<?= env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder','sector_images_folder'], app()->getLocale()).'/'. $slide->image ?>" alt="Galeri Görsel" class="w-full h-full object-cover transition-transform duration-450 hover:scale-105" data-swiper-parallax="50%">
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div class="reveal nav-buttons w-full grid place-items-center">
                        <div class="flex items-center gap-[30px] px-[45px] md:px-[25px] py-[15px] sm:p-[5px] bg-primary-main">
                            <div class="gallery-prev cursor-pointer flex items-center gap-[9px] md:w-[40px] md:h-[40px] md:justify-center transition-all duration-300 [&.gallery-disabled]:opacity-65 relative [&.gallery-disabled]:after:hidden after:absolute after:bottom-0 after:right-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-300 hover:after:right-auto hover:after:left-0 hover:after:w-full">
                                <i class="icon-angle-left text-[12px] leading-none text-white"></i>
                                <span class="text-[16px] leading-[32px] text-white md:hidden"><?=getStaticText(2)?></span>
                            </div>

                            <div class="separator w-[1px] h-[22px] bg-white/20"></div>

                            <div class="gallery-next cursor-pointer flex items-center gap-[9px] md:w-[40px] md:h-[40px] md:justify-center transition-all duration-300 [&.gallery-disabled]:opacity-65 relative [&.gallery-disabled]:after:hidden after:absolute after:bottom-0 after:right-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-300 hover:after:right-auto hover:after:left-0 hover:after:w-full">
                                <span class="text-[16px] leading-[32px] text-white md:hidden"><?=getStaticText(3)?></span>
                                <i class="icon-angle-right text-[12px] leading-none text-white "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php //include 'layout/brands.php'; ?>
    </section>

</main>
@endsection