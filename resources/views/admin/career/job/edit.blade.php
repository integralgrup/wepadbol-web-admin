@extends('admin.layouts.main')
@section('title', 'İş İlanı Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">İş İlanı Güncelleme</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">İş İlanı Güncelleme</li>
                </ol>
            </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            @foreach($languages as $language)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $language->id }}-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $language->id }}"
                                            type="button" role="tab" aria-controls="tab-{{ $language->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        <img src="{{ $language->domain .'/'. getFolder(['uploads_folder', 'images_folder'], $language->lang_code) .'/'.$language->flag_image }}" alt="{{ $language->title }}" style="width: 20px; margin-right: 5px;"> {{ strtoupper($language->lang_code) }}

                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <?php
                        foreach($job as $item){
                            $job_id = $item->job_id;
                            $title[$item->lang] = $item->title;
                            $seo_url[$item->lang] = $item->seo_url;
                            $short_description[$item->lang] = $item->short_description;
                            $description[$item->lang] = $item->description;
                            $outer_url[$item->lang] = $item->outer_url;
                            $button_text[$item->lang] = $item->button_text;
                            $seo_title[$item->lang] = $item->seo_title;
                            $seo_description[$item->lang] = $item->seo_description;
                            $seo_keywords[$item->lang] = $item->seo_keywords;
                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.career.job.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                        <input type="hidden" name="job_id" value="{{ $job_id }}" hidden>
                                        <div class="mb-3">
                                            <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" required value="{{ $title[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- seo_url -->
                                        <div class="mb-3">
                                            <label for="seo_url_{{ $language->lang_code }}" class="form-label">SEO URL ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_url_{{ $language->lang_code }}" name="seo_url_{{ $language->lang_code }}" required value="{{ $seo_url[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- short_description -->
                                        <div class="mb-3">
                                            <label for="short_description_{{ $language->lang_code }}" class="form-label">Kısa Açıklama ({{ $language->lang_code }})</label>
                                            <textarea class="form-control" id="short_description_{{ $language->lang_code }}" name="short_description_{{ $language->lang_code }}" rows="3" required>{{ $short_description[$language->lang_code] ?? '' }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description_{{ $language->lang_code }}" class="form-label">Açıklama ({{ $language->lang_code }})</label>
                                            <textarea class="form-control" id="description_{{ $language->lang_code }}" name="description_{{ $language->lang_code }}" rows="3" required>{{ $description[$language->lang_code] ?? '' }}</textarea>
                                        </div>
                                        <!-- outer_url -->
                                        <div class="mb-3">
                                            <label for="outer_url_{{ $language->lang_code }}" class="form-label">Dış Bağlantı ({{ $language->lang_code }})</label>
                                            <input type="url" class="form-control" id="outer_url_{{ $language->lang_code }}" name="outer_url_{{ $language->lang_code }}" required value="{{ $outer_url[$language->lang_code] ?? '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="button_text_{{ $language->lang_code }}" class="form-label">Buton Metni ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="button_text_{{ $language->lang_code }}" name="button_text_{{ $language->lang_code }}" required value="{{ $button_text[$language->lang_code] ?? '' }}">
                                        </div>
                                       
                                        <!-- seo_title -->
                                        <div class="mb-3">
                                            <label for="seo_title_{{ $language->lang_code }}" class="form-label">SEO Başlığı ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_title_{{ $language->lang_code }}" name="seo_title_{{ $language->lang_code }}" required value="{{ $seo_title[$language->lang_code] ?? '' }}">
                                        </div>

                                        <!-- seo_description -->
                                        <div class="mb-3">
                                            <label for="seo_description_{{ $language->lang_code }}" class="form-label">SEO Açıklaması ({{ $language->lang_code }})</label>
                                            <textarea class="form-control" id="seo_description_{{ $language->lang_code }}" name="seo_description_{{ $language->lang_code }}" rows="3" required>{{ $seo_description[$language->lang_code] ?? '' }}</textarea>
                                        </div>

                                        <!-- seo_keywords -->
                                        <div class="mb-3">
                                            <label for="seo_keywords_{{ $language->lang_code }}" class="form-label">SEO Anahtar Kelimeleri ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_keywords_{{ $language->lang_code }}" name="seo_keywords_{{ $language->lang_code }}" required value="{{ $seo_keywords[$language->lang_code] ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection