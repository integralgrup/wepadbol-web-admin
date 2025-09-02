@extends('admin.layouts.main')
@section('title', 'Sabit Kelime Yönetimi')
@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Sabit Kelime Yönetimi</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sabit Kelime Yönetimi</li>
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
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12">           
                <!-- /.card -->
                <div class="card mb-4">
                  <div class="card-header" >
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h3 style="display:inline-block;" class="card-title">Sabit Kelime Yönetimi</h3>
                        <a style="display:inline-block;" href="{{ route('admin.static_text.create') }}" class="btn btn-sm btn-primary">Sabit Kelime Ekle</a>
                    </div>
                    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 30px">#</th>
                          <th>Başlık</th>
                          <th>Sayfa Adı</th>
                          <th  style="width: 300px">İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($staticTexts as $staticText)
                        <tr class="align-middle">
                          <td>{{ $staticText->id }}</td>
                          <td>{{ strip_tags($staticText->title) }}</td>
                          <td>{{ strip_tags($staticText->page_name) }}</td>
                          <td>
                            <!-- Katalog Dosyaları -->
                            <a href="{{ route('admin.static_text.edit', $staticText->text_id) }}" class="btn btn-primary btn-sm">Düzenle</a>
                            <form action="{{ route('admin.static_text.destroy', $staticText->text_id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                <!-- /.col -->
                </div>
            <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
@endsection
