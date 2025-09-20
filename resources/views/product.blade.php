@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $product->title;
$breadcrumbTitle = $product->title;
?>

<main class="main-field header-space blue-menu sm:!mt-[-80px]">

    <!-- CONTENT -->
    <section class="product-detail-section pt-[40px] pb-[80px] 2xl:pb-0 2xl:pt-[80px] xl:pt-[60px] lg:pt-[45px] md:pt-[30px]">
        <div class="container max-w-[1740px] group/container animContainer">
            <div class="wrapper">
                <div class="grid relative grid-cols-[minmax(0,6.5fr)_minmax(0,5.5fr)] gap-[150px] items-center xl:grid-cols-2 xl:gap-[60px] sm:grid-cols-1 sm:gap-[30px]">
                    <div class="rectangle absolute left-0 top-[70px] size-[70px]">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="triangle absolute right-0 top-0 size-[130px] md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="product-image-wrapper">
                        <!-- EN AZ 6 ADET GÖRSEL GİRİLMELİ, 3 ADET GİRİLİRSE LOOP İLE 6 YA TAMAMLANMALI -->
                        <div class="product-main-image-carousel swiper size-auto aspect-[85/62] overflow-hidden rounded-[8px] sm:mt-[60px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($product->images as $key => $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="image size-full aspect-[85/62] overflow-hidden sm:aspect-video">
                                            <img src="{{asset( getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $item->image )}}" alt="" class="size-full object-contain object-center" data-swiper-parallax-x="50%">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                                <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                    <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                                </div>
                            </div>
                        </div>
                        <div class="product-sub-wrapper flex items-center mt-[25px] sm:gap-[15px]">
                            <!-- EN AZ 6 ADET GÖRSEL GİRİLMELİ, 3 ADET GİRİLİRSE LOOP İLE 6 YA TAMAMLANMALI -->
                            <div class="product-sub-image-carousel swiper relative max-w-[650px] ml-0 size-full overflow-hidden xl:max-w-[500px] lg:max-w-[450px] md:max-w-[340px] sm:max-w-full">
                                <div class="swiper-wrapper">
                                    <?php foreach ($product->images as $key => $item) : ?>
                                        <div class="swiper-slide cursor-pointer">
                                            <div class="item group/item border border-solid border-blue/10 rounded-[8px] overflow-hidden px-[35px] h-[120px] sm:h-[120px] md:h-[70px] lg:px-[15px]">
                                                <img src="{{asset( getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $item->image )}}" alt="" class="size-full object-contain object-center">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                            <div class="carousel-navigation flex min-sm:flex-col items-center sm:gap-[15px]">
                                <div class="product-prev size-[40px] leading-normal min-sm:ml-[-90px] min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                    <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                                </div>
                                <div class="product-next size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-blue/70 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100 sm:size-[30px]">
                                    <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 sm:text-[25px] sm:size-[25px]"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-content-wrapper">
                        <div class="page-navigation flex items-center gap-[5px] mb-[30px] [&>*:last-child]:hidden sm:mb-[15px]">
                            <a href="index.php" class="text text-[18px] text-[#52555C]/65 leading-[28px]">Home</a>
                            <div class="text text-[18px] text-[#52555C]/65 leading-[28px]">/</div>
                            <a href="products.php" class="text text-[18px] text-[#52555C]/65 leading-[28px]">Products</a>
                            <div class="text text-[18px] text-[#52555C]/65 leading-[28px]">/</div>
                            <a href="" class="text text-[18px] text-[#52555C]/65 leading-[28px]">{{$product->category->title}}</a>
                            <div class="text text-[18px] text-[#52555C]/65 leading-[28px]">/</div>
                        </div>
                        <h2 class="title text-blue text-[48px] font-bold leading-[64px] opacity-90 mb-[50px] xl:text-[40px] lg:text-2xl lg:mb-[15px]">{{ $product->title }}</h2>
                        <p class="expo text-[#52555C] text-[18px] font-normal leading-[28px] opacity-65 mb-[60px] lg:mb-[15px] lg:text-base md:[&>_br]:hidden">{{ $product->description }}</p>
                        <div class="buttons-field flex items-center gap-[40px] mb-[60px] lg:mb-[30px] xs:flex-col xs:gap-[15px]">
                            <a href="#contact-form" data-fancybox class="button group/button relative fx fx-text-hover-with-child bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                <small class="text relative z-2 fx-child text-white text-[16px] font-medium leading-[19px]">Get Offer</small>
                                <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                            </a>
                            <a href="{{asset( getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $product->pdf_file )}}" data-fancybox class="button group/button relative fx fx-text-hover-with-child bg-white border-[4px] border-solid border-blue border-opacity-6 flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[45px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] min-sm:hover:border-transparent md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                <small class="text relative z-2 fx-child text-blue text-[16px] font-bold leading-[19px] duration-350 min-sm:group-hover/button:text-white">PDF Document</small>
                                <i class="icon relative z-2 icon-pdf text-green text-[20px] h-[20px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                            </a>
                        </div>
                        <div class="product-customization-field flex flex-col gap-[25px] xsm:flex-col sm:flex-row sm:items-center sm:justify-between">
                            <div class="product-customization-content text-[#52555C]/50 text-[18px] font-semibold leading-[28px]">Grass Types Used : <span class="product-theme text-green font-semibold">Padel Turf Red</span> </div>
                            <div class="product-customization-image flex items-center gap-[20px]">
                                <?php foreach ($product->types as $key => $item) : ?>
                                    <div data-code="<?= $item['title'] ?>" class="customization-item <?= $key == 2 ? 'is-active' : '' ?> size-[85px] rounded-full overflow-hidden border-[2px] border-solid border-transparent p-[7px] flex justify-center items-center cursor-pointer duration-350 hover:border-blue/5 [&.is-active]:border-green sm:size-[70px]">
                                        <img src="{{ asset(getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $item['image']) }}" alt="" class="size-full object-cover object-center rounded-full overflow-hidden">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT INFORMATION SECTION -->
    <section class="product-information-section mb-[90px] px-[30px] 2xl:mb-0 2xl:pt-[80px] xl:pt-[60px] lg:pt-[45px] lg:mb-0 md:pt-[30px]">
        <div class="container relative max-w-[1740px] pt-[40px] pb-[60px] rounded-[16px] overflow-hidden bg-blue group/container animContainer xl:pb-0">
            <div class="rectangle absolute left-[90px] top-[120px] size-[70px] xl:left-[30px]">
                <img src="../assets/svg/white-rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="triangle absolute right-[50px] top-[150px] size-[130px] md:size-[100px] xl:right-[30px]">
                <img src="../assets/svg/white-triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
            </div>
            <div class="wrapper">
                <?php $list = [
                    ['title' => 'General Features', 'id' => 'general-features',],
                    ['title' => 'Technical Information', 'id' => 'technical-information',],
                    ['title' => 'Gallery', 'id' => 'gallery',],
                    ['title' => 'Frequently Asked Questions', 'id' => 'faq',],
                    ['title' => 'Get Offer', 'id' => 'offer-form',]
                ]; ?>
                <div class="tab-wrapper mb-[75px] sm:overflow-x-auto md:mb-[50px]">
                    <div class="flex items-center justify-center gap-[50px] lg:gap-[15px] sm:overflow-x-auto sm:justify-normal sm:w-max">
                        <?php foreach ($list as $key => $item) : ?>
                            <div class="product-filter-item <?= $key == 0 ? 'is-active' : '' ?> group/item relative overflow-hidden cursor-pointer rounded-[8px] w-auto h-[60px] border-[3px] border-solid border-white border-opacity-15 bg-transparent px-[30px] flex justify-center items-center text-white duration-350 [&.is-active]:[box-shadow:_10px_10px_30px_0px_rgba(117,_191,_0,_0.25);] [&.is-active]:bg-green [&.is-active]:border-opacity-0  md:h-[60px] sm:h-[50px] sm:whitespace-pre-wrap lg:whitespace-nowrap" data-filter="<?= $item['id'] ?>"><?= $item['title'] ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="product-information-carousel swiper overflow-hidden max-w-[1280px] mx-auto h-[700px] rounded-[16px] md:h-auto md:pb-[50px]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-slide="general-features">
                            <div class="general-features-section h-full flex  flex-col justify-center items-center max-w-[1065px] mx-auto xl:max-w-[1100px]">
                                <div class="text-editor max-w-full text-center editor-p:text-white">
                                    <p>{{ $product->features_description }}</p>
                                </div>
                                <div class="background-image relative rounded-[8px] overflow-hidden mt-[40px] max-w-[1000px] mx-auto">
                                    <div class="image size-full aspect-[20/11]">
                                        <img src="{{ asset(getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $product->features_image) }}" alt="" class="size-full object-cover object-center">
                                    </div>
                                    <?php foreach ($product->features as $key => $item) : ?>
                                        <div class="general-dots group/dots absolute sm:hidden" style="left:<?= $item['left'] ?>%; top:<?= $item['top'] ?>%;">
                                            <div class="size-[55px] bg-green rounded-full p-[15px] flex justify-center items-center mb-[20px] duration-350 group-hover/dots:rotate-45 group-hover/dots:bg-blue xsm:size-[30px]">
                                                <i class="icon icon-plus text-white text-[24px] h-[24px] leading-normal flex xsm:text-[15px] xsm:h-[15px]"></i>
                                            </div>
                                            <div class="general-tooltip border border-solid border-green bg-blue/10 backdrop-blur-[15px] absolute left-[50%] translate-x-[-50%] top-full flex flex-col justify-center items-center gap-[15px] min-w-[385px] mx-auto rounded-[20px] p-[30px] text-center ease-in-out scale-50 opacity-0 invisible pointer-events-none duration-350 group-hover/dots:visible group-hover/dots:pointer-events-auto group-hover/dots:scale-100 group-hover/dots:opacity-100 hover:bg-blue/80 md:min-w-[320px] sm:min-w-full">
                                                <h3 class="title text-white text-[24px] font-bold leading-[26px]">{{ $item['title'] }}</h3>
                                                <p class="text text-white text-[16px] font-normal leading-[20px] opacity-65">{{ $item['description'] }}</p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide="technical-information">
                            <div class="max-w-[1260px] mx-auto h-full flex justify-center items-center xl:max-w-[1100px]">
                                <div class="table-main-wrapper relative group/table overflow-hidden is-show">
                                    <!-- SONA GELİNDİĞİ ZAMAN ELİN KAYBOLMASI İSTENİYOR İSE: group-[&.is-end]/table:!opacity-0 EKLENEBİLİR. -->
                                    <div class="hand-field absolute right-[30px] top-[30px] w-[30px] h-[30px] z-20 duration-350 opacity-0 group-hover/table:opacity-0 group-[&.is-end]/table:!opacity-0 group-[&.is-show]/table:opacity-100 hidden sm:block">
                                        <div class="image aspect-square max-w-[30px] w-full overflow-hidden translate-z-0 hidden sm:block animate-translate-x">
                                            <img src="../assets/image/static/hand.png" class="size-full object-cover object-center" alt="">
                                        </div>
                                    </div>
                                    <div class="table-wrapper relative [&_table]:rounded-[20px] [&_table]:overflow-hidden [&_table]:border [&_table]:border-solid [&_table]:border-white/7 [&_table_tr:first-child]:!bg-[#fff]/15 [&_table_tr:first-child:hover]:bg-[#fff]/30 [&_table_tr:first-child_td]:text-white [&_table_tr:first-child_td]:border [&_table_tr:first-child_td]:border-b-0 [&_table_tr:first-child_td]:border-t-0 [&_table_tr:first-child_td]:border-solid [&_table_tr:first-child_td]:border-[#fff]/5 [&_table_tr:nth-child(odd)]:bg-white/5 [&_table_tr:nth-child(even)]:bg-[#fff]/10 [&_table_tr]:duration-350 [&_table_tr:hover]:!bg-[#fff]/20 [&_table_tr_td]:text-[#fff] [&_table_tr_td]:px-[20px] [&_table_tr_td]:py-[15px] [&_table_tr_td]:border [&_table_tr_td]:border-t-0 [&_table_tr_td]:border-solid [&_table_tr_td]:border-white/7 max-w-[calc(100%-1px)] lg:[&_table]:!w-[125%]">
                                        {!! $product->technical_info !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide="gallery">
                            <div class="gallery-section h-full flex justify-center items-center max-w-[1300px] mx-auto xl:max-w-[1100px]">
                                <div class="product-gallery-carousel swiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($product->gallery as $key => $item) : ?>
                                            <div class="swiper-slide group/slide">
                                                <a href="{{ asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/'. $item->image ) }}" class="flex flex-col gap-[20px] items-center" data-fancybox>
                                                    <div class="image relative size-full aspect-square overflow-hidden rounded-[16px] md:aspect-video">
                                                        <img src="{{ asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/'. $item->image ) }}" alt="" class="size-full object-cover object-center duration-350 group-hover/slide:scale-105">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="text text-white text-[23px] leading-[30px]">{{ $item->title }}</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="carousel-navigation flex items-center justify-center mt-[70px] gap-[40px] sm:gap-[15px]">
                                        <div class="gallery-prev size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-white/35 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100">
                                            <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                        </div>
                                        <div class="gallery-next size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-white/35 min-sm:[&.swiper-button-disabled_.icon]:scale-x-100">
                                            <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide="faq">
                            <div class="faq-section flex justify-center items-center max-w-[1200px] mx-auto xsm:max-h-[720px]  md:overflow-y-auto md:max-h-[520px] min-2xl:max-h-[660px] h-full min-2xl:overflow-y-auto xl:max-w-[1100px]">
                                <div class="faq-container flex flex-col gap-[40px]">
                                    <?php foreach ($product->faqs as $key => $item) : ?>
                                        <div class="faq-item group/faq cursor-pointer w-full px-[70px] h-auto py-[32px] rounded-[8px] overflow-hidden ease-manidar bg-white/5 border border-solid border-white/20 flex flex-col justify-center gap-0 duration-350 [&.is-active]:gap-[40px] [&.is-active]:[box-shadow:_10px_10px_20px_0px_rgba(117,_191,_0,_0.15);] [&.is-active]:border-green [&.is-active]:bg-white/10 lg:px-[15px]">
                                            <div class="title-field flex justify-between items-center xsm:gap-[15px]">
                                                <h4 class="title text-white text-[20px] font-medium leading-[30px]"><?= $key + 1 ?>. <?= $item->title ?></h4>
                                                <i class="icon icon-chevron-down2 text-[16px] h-[16px] text-green leading-normal flex duration-350 group-[&.is-active]/faq:-rotate-180"></i>
                                            </div>
                                            <p class="faq-text text-white text-[18px] font-normal leading-[28px] opacity-0 invisible h-0 duration-350 group-[&.is-active]/faq:visible group-[&.is-active]/faq:opacity-100"><?= $item->description ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide="offer-form">
                            <div class="max-w-[1280px] mx-auto h-full flex justify-center items-center xl:max-w-[1100px]">
                                <div class="grid grid-cols-[5.4fr_6.6fr] items-center gap-[65px] xl:grid-cols-2 xl:gap-[30px] sm:grid-cols-1">
                                    <div class="image-field relative size-full">
                                        <div class="bg-image size-full aspect-square overflow-hidden rounded-[16px] sm:aspect-video">
                                            <img src="../assets/image/jpg/image-12.jpg" alt="" class="size-full object-cover object-center">
                                        </div>
                                        <div class="logo-image w-full h-[27px] max-w-[123px] absolute left-[70px] bottom-[30px] sm:left-[30px]">
                                            <img src="../assets/image/trademark/color-logo.png" alt="" class="size-full object-contain object-center">
                                        </div>
                                    </div>
                                    <div class="form-field relative">
                                        <div class="title-field flex items-center gap-[20px]">
                                            <i class="icon icon-paper text-[30px] text-white h-[30px] leading-normal flex"></i>
                                            <h3 class="title text-[24px] text-white font-medium leading-[19px]">Contact Form</h3>
                                        </div>
                                        <form action="">
                                            <div class="form-wrapper grid grid-cols-2 mt-[40px] sm:grid-cols-1 gap-x-[26px] gap-y-[30px]">
                                                <div class="form-el group/form relative col-span-1 sm:col-span-1"> <!-- error için bu div'e class="error" eklenecek -->
                                                    <input type="text" placeholder="Adınız Soyadınız" required="" class="w-full h-[60px] sm:h-[50px] rounded-[10px] bg-transparent outline-none px-[24px] sm:px-[20px] text-[16px] leading-[19px] sm:text-[14px] text-white duration-350 placeholder:text-white hover:bg-blue/15 border-[2px] border-solid border-white/15 group-hover/form:border-green group-focus/form:border-green group-[&.error]/form:border-red-500">
                                                    <div class="tooltip text-red-500 text-[12px] mt-[5px] hidden group-[&.error]/form:block">Lütfen alanı boş bırakmayın.</div>
                                                </div>
                                                <div class="form-el group/form relative col-span-1 sm:col-span-1"> <!-- error için bu div'e class="error" eklenecek -->
                                                    <input type="text" placeholder="E-Postanız" required="" class="w-full h-[60px] sm:h-[50px] rounded-[10px] bg-transparent outline-none px-[24px] sm:px-[20px] text-[16px] leading-[19px] sm:text-[14px] text-white duration-350 placeholder:text-white hover:bg-blue/15 border-[2px] border-solid border-white/15 group-hover/form:border-green group-focus/form:border-green group-[&.error]/form:border-red-500">
                                                    <div class="tooltip text-red-500 text-[12px] mt-[5px] hidden group-[&.error]/form:block">Lütfen alanı boş bırakmayın.</div>
                                                </div>
                                                <div class="form-el group/form relative col-span-1 sm:col-span-1"> <!-- error için bu div'e class="error" eklenecek -->
                                                    <input type="tel" placeholder="Telefon Numaranız" required="" class="w-full h-[60px] sm:h-[50px] rounded-[10px] bg-transparent outline-none px-[24px] sm:px-[20px] text-[16px] leading-[19px] sm:text-[14px] text-white duration-350 placeholder:text-white hover:bg-blue/15 border-[2px] border-solid border-white/15 group-hover/form:border-green group-focus/form:border-green group-[&.error]/form:border-red-500">
                                                    <div class="tooltip text-red-500 text-[12px] mt-[5px] hidden group-[&.error]/form:block">Lütfen alanı boş bırakmayın.</div>
                                                </div>
                                                <div class="form-el group/form relative col-span-1 sm:col-span-1"> <!-- error için bu div'e class="error" eklenecek -->
                                                    <input type="mail" placeholder="Firma Adınız" required="" class="w-full h-[60px] sm:h-[50px] rounded-[10px] bg-transparent outline-none px-[24px] sm:px-[20px] text-[16px] leading-[19px] sm:text-[14px] text-white duration-350 placeholder:text-white hover:bg-blue/15 border-[2px] border-solid border-white/15 group-hover/form:border-green group-focus/form:border-green group-[&.error]/form:border-red-500">
                                                    <div class="tooltip text-red-500 text-[12px] mt-[5px] hidden group-[&.error]/form:block">Lütfen alanı boş bırakmayın.</div>
                                                </div>
                                                <div class="form-el group/form relative col-span-2 sm:col-span-1"> <!-- error için bu div'e class="error" eklenecek -->
                                                    <textarea name="" id="" placeholder="Mesajınız" class="w-full min-h-[170px] rounded-[10px] bg-transparent outline-none px-[24px] py-[15px] sm:px-[20px] text-[16px] leading-[19px] sm:text-[14px] text-white duration-350 placeholder:text-white hover:bg-blue/15 border-[2px] border-solid border-white/15 resize-none group-hover/form:border-green group-focus/form:border-green group-[&.error]/form:border-red-500"></textarea>
                                                    <div class="tooltip text-red-500 text-[12px] mt-[5px] hidden group-[&.error]/form:block">Lütfen alanı boş bırakmayın.</div>
                                                </div>
                                            </div>
                                            <div class="submit-field flex justify-between items-center max-w-[465px] ml-[30px] gap-[60px] mt-[50px] lg:gap-[20px] sm:mx-0 sm:justify-between sm:max-w-full xsm:items-start xsm:flex-col">
                                                <div class="item group/item lg:col-span-2 relative">
                                                    <div class="form-el flex items-center gap-[15px] h-full">
                                                        <input type="checkbox" class="peer cursor-pointer absolute left-0 top-0 w-[20px] h-full opacity-0 z-10">
                                                        <div class="box relative shrink-0 h-[21px] w-[21px] rounded-[3px] overflow-hidden before:absolute before:duration-350 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-[#fff] duration-350 shadow-[0_0_0_1px_rgb(0_0_0/.0)] bg-transparent border border-solid border-white/16"></div>
                                                        <label for="acceptance" class="text-[15px] text-white leading-normal font-light"><a href="#popup-gdpr" class="inline-block relative text-white underline font-normal underline-offset-8" data-fancybox="">Aydınlatma Metni</a>’ni Okudum. Kabul ediyorum.</label>
                                                    </div>
                                                </div>
                                                <div class="item group/item col-span-1 xsm:w-full lg:col-span-2 relative">
                                                    <div class="button-field flex justify-end">
                                                        <button class="button group/button relative fx fx-text-hover-with-child bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-white before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] md:h-[60px] sm:h-[50px]">
                                                            <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px] duration-350 min-md:group-hover/button:text-green">Send</small>
                                                            <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:translate-x-[5px] min-md:group-hover/button:text-green"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                        <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                            <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SECTION -->
    <?php $productTitle = 'OTHER'; ?>
        <section class="product-section relative overflow-hidden pt-[90px] pb-[140px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]">
        <?php if ($shape  ?? true == 'true') : ?>
            <div class="left-shape srl size-full max-w-[180px] ml-auto rounded-r-[14px] bg-blue absolute left-0 top-0 sm:hidden"></div>
        <?php endif; ?>
        <div class="max-w-[1920px] relative overflow-visible container group/container animContainer">
            <div class="wrapper">
                <div class="grid grid-cols-[minmax(0,5.5fr)_minmax(0,6.5fr)] md:grid-cols-1 xl:gap-[50px]">
                    <?php $list = ['image-2.jpg', 'image-7.jpg', 'image-4.jpg', 'image-3.jpg', 'image-1.jpg', 'image-5.jpg', 'image-6.jpg', 'image-8.jpg', 'image-9.jpg', 'image-10.jpg']; ?>
                    <div class="product-image-field flex flex-col gap-[85px] md:hidden xl:gap-[30px]">
                        <div class="product-image-carosuel swiper size-full overflow-hidden rounded-[14px] flex flex-col gap-[85px]">
                            <div class="swiper-wrapper [&>*:swiper-slide-next_.swiper-slide_.item]">
                                <?php foreach ($list as $key => $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="image relative size-full aspect-[52/47] overflow-hidden">
                                            <img src="../assets/image/jpg/<?= $item ?>" alt="" class="size-full object-cover object-center" data-swiper-parallax-x="50%">
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
                                <?php for ($d = 0; $d < 10; $d++) : ?>
                                    <div class="swiper-slide group/slide duration-350">
                                        <div class="item group/item translate-z-0 min-md:opacity-0 relative bg-gradient-to-b from-green to-blue md:!p-[2px] rounded-[14px] overflow-hidden min-md:group-[&.swiper-slide-active]/slide:p-[2px] min-md:[box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] duration-350 min-md:group-[&.swiper-slide-next]/slide:opacity-100 min-md:group-[&.swiper-slide-active]/slide:opacity-100 min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100 md:shadow-lg">
                                            <div class="content bg-white size-full pb-[60px] rounded-[12px]">
                                                <a href="" class="flex flex-col items-center duration-350">
                                                    <div class="product-detail-carousel swiper size-full overflow-hidden">
                                                        <div class="swiper-wrapper">
                                                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                                                <div class="swiper-slide duration-350 [&.swiper-slide-active]:!pointer-events-auto [&.swiper-slide-next]:!pointer-events-auto">
                                                                    <div class="image size-full aspect-[23/18] md:aspect-video">
                                                                        <img src="../assets/image/png/image-6.png" alt="" class="size-full object-contain object-center">
                                                                    </div>
                                                                </div>
                                                            <?php endfor; ?>
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
                                                        <a href="" class="text text-[#52555C] text-[18px] leading-[28px] opacity-65">We Origins</a>
                                                        <h4 class="title text-blue text-[24px] font-bold leading-[36px] opacity-90 xl:text-[20px]">Origin Discover Padel Court</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
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