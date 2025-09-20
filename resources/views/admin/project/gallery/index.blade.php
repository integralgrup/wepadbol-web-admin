@extends('admin.layouts.main')
@section('title', 'Proje Galeri Listesi')

@section('content')

<?php 
// get id parameter from route
$id = request()->route('id');
$imageId = request()->route('imageId');
?>

<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Proje Galeri Listesi</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Proje Galeri Yönetimi</li>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Proje Galeri Listesi</h5>
                            <a href="{{ route('admin.project.gallery.create', $project->id) }}" class="btn btn-primary">
                                <i class="bi bi-plus"></i> Ekle
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Görsel</th>
                                    <th style="width: 350px;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gallery as $key => $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ $languages[0]->domain .'/'. getFolder(['uploads_folder', 'project_images_folder'], $item->lang) . '/' . $item->image }}" alt="{{ $item->alt }}" class="img-thumbnail" width="100">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.project.gallery.edit', [$id, $item->image_id]) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Düzenle
                                            </a>
                                            <form action="{{ route('admin.project.gallery.destroy', [$id, $item->image_id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')">
                                                    <i class="bi bi-trash"></i> Sil
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection
