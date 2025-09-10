<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductImage;
use App\Models\ProductFaq;
use App\Models\ProductType;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use Illuminate\Support\Facades\DB; // For database operations

class ProductController extends Controller
{
    protected $languages;

    public function __construct()
    {
        $this->languages = Language::all();
        view()->share('languages', $this->languages);
    }
    // Display a list of products
    public function index()
    {
        $products = Product::where('lang', app()->getLocale())->get();
        return view('admin.product.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('admin.product.create');
    }

    // Store new product in database
    public function store(Request $request)
    {
        if ($request->has('product_id')) {
                $product_id = $request->product_id; // Use the provided product_id
            }else{
                $product_id = Product::max('product_id') + 1; // Increment the maximum product_id by 1
                if (!$product_id) {
                    $product_id = 1; // If no product items exist, start with 1
                }
            }
        try {
            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'lang_'.$language->lang_code => 'required|string|max:10',
                        'title_'.$language->lang_code => 'required|string|max:100',
                        'seo_url_'.$language->lang_code => 'required|string|max:255',
                        'description_'.$language->lang_code => 'required|string',
                        'technical_info_'.$language->lang_code => 'required|string',
                        'image_'.$language->lang_code => 'nullable|image',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'feature_image_'.$language->lang_code => 'nullable|image',
                        'feature_description_'.$language->lang_code => 'nullable|string',
                        'pdf_file_'.$language->lang_code => 'nullable|file|mimes:pdf|max:2048',
                        'seo_title_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_description_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_keywords_'.$language->lang_code => 'nullable|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('features_image_en') || $request->hasFile('features_image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'features_image_en', $this->languages[0]);
                    $featuresImageName = moveFile($request,$language,'features_image_' . $language->lang_code, 'features_image_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $tmpImgPath);
                    //dd($featuresImageName);
                }else{
                    $featuresImageName = $request->input('old_features_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('pdf_file_en') || $request->hasFile('pdf_file_' . $language->lang_code)) {
                    $pdfTmpPath = createTmpFile($request, 'pdf_file_en', $this->languages[0]);
                    $pdfFileName = moveFile($request,$language,'pdf_file_' . $language->lang_code,'pdf_file_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $pdfTmpPath);
                    //dd($pdfFileName);
                }else{
                    $pdfFileName = $request->input('old_pdf_file_' . $language->lang_code, null); // Use old file if no new file is uploaded
                }

                $data = [
                    'product_id' => $product_id,
                    'lang' => $language->lang_code,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'seo_url' => $request->input('seo_url_'.$language->lang_code) ?? $request->input('seo_url_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'technical_info' => $request->input('technical_info_'.$language->lang_code) ?? $request->input('technical_info_en'),
                    'image' => $imageName,
                    'features_image' => $featuresImageName,
                    'features_description' => $request->input('features_description_'.$language->lang_code) ?? $request->input('features_description_en'),
                    'pdf_file' => $pdfFileName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'seo_title' => $request->input('seo_title_'.$language->lang_code) ?? $request->input('seo_title_en'),
                    'seo_description' => $request->input('seo_description_'.$language->lang_code) ?? $request->input('seo_description_en'),
                    'seo_keywords' => $request->input('seo_keywords_'.$language->lang_code) ?? $request->input('seo_keywords_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? $request->input('sort_en') ?? 0,
                ];

                Product::updateOrCreate(
                    ['product_id' => $product_id, 'lang' => $language->lang_code],
                    $data
                );

                
            }

            return redirect()->route('admin.product.index')->with('success', 'Ürün başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.product.index')->with('error', 'Ürün kaydedilirken bir hata oluştu!');
        }
    }

    // Show form to edit product
    public function edit($id)
    {
        $languages = Language::all();
        $products = Product::where('product_id', $id)->get();
        
        return view('admin.product.edit', compact('products', 'languages'));
    }

   

    // Delete sector
    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('admin.sector.index')->with('success', 'Sector deleted successfully!');
    }

    // Additional methods for managing product images will go here
    // Display a list of images for a specific product
    public function imagesIndex($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $images = $product->images; // Using the relationship defined in the Product model
        return view('admin.product.images.index', compact('product', 'images'));
    }

    // Show form to add a new image to a specific product
    public function imagesCreate($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        return view('admin.product.images.create', compact('product'));
    }

    // Store new image for a specific product
    public function imagesStore(Request $request, $id)
    {
        //dd($request->all());
        try {
        
            $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('product_image')->where('product_id', $id)->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific product
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this product, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'product_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                ProductImage::updateOrCreate(
                    ['product_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );


            }

            return redirect()->route('admin.product.images.index', $id)->with('success', 'Image added successfully!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.product.images.index', $id)->with('error', 'An error occurred while adding the image.');
        }
    }

    // Show form to edit an image of a specific product
    public function imagesEdit($id, $imageId)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $images = ProductImage::where('product_id', $id)->where('image_id', $imageId)->get();
        return view('admin.product.images.edit', compact('product', 'images'));
    }

    // image destroy method
    public function imagesDestroy($id, $imageId)
    {
        try {
            $images = ProductImage::where('product_id', $id)->where('image_id', $imageId)->get();
            foreach ($images as $image) {
                // Delete the image file from storage if needed
                // Storage::delete('path/to/image/' . $image->image);
                $image->delete();
            }
            return redirect()->route('admin.product.images.index', $id)->with('success', 'Image deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.product.images.index', $id)->with('error', 'An error occurred while deleting the image.');
        }
    }


    // Product Gallery methods will go here
    public function galleryIndex($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = ProductGallery::where('product_id', $id)->get();
        return view('admin.product.gallery.index', compact('product', 'gallery'));
    }

    public function galleryCreate($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.gallery.create', compact('product'));
    }

    public function galleryStore(Request $request, $id)
    {
        try {
        
            $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('product_gallery')->where('product_id', $id)->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific product
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this product, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'product_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                ProductGallery::updateOrCreate(
                    ['product_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.product.gallery.index', $id)->with('success', 'Galeri görseli başarıyla kaydedildi!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.product.gallery.index', $id)->with('error', 'Galeri görseli eklenirken bir hata oluştu.');
        }
    }

    public function galleryEdit($id, $galleryId)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = ProductGallery::where('product_id', $id)->where('image_id', $galleryId)->get();
        return view('admin.product.gallery.edit', compact('product', 'gallery'));
    }

    

    public function galleryDestroy($id, $galleryId)
    {
        try {
            $gallery = ProductGallery::findOrFail($galleryId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $gallery->image);
            $gallery->delete();
            return redirect()->route('admin.product.galleries.index', $id)->with('success', 'Gallery image deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.product.galleries.index', $id)->with('error', 'An error occurred while deleting the gallery image.');
        }
    }

    // Product faq methods will go here
    public function faqIndex($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $faqs = $product->faqs; // Using the relationship defined in the Product model
        return view('admin.product.faq.index', compact('product', 'faqs'));
    }

    public function faqCreate($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        return view('admin.product.faq.create', compact('product'));
    }

    public function faqStore(Request $request, $id)
    {
        try {
        
            $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('question_id')){
                $question_id = $request->question_id; // Use the provided question_id
            }else{
                $question_id = DB::table('product_faq')->where('product_id', $id)->max('question_id') + 1; // Increment the maximum question_id by 1 for the specific product
                if (!$question_id) {
                    $question_id = 1; // If no faqs exist for this product, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'description_'.$language->lang_code => 'required|string',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                $data = [
                    'product_id' => $id,
                    'question_id' => $question_id,
                    'lang' => $language->lang_code,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                ProductFaq::updateOrCreate(
                    ['product_id' => $id, 'question_id' => $question_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.product.faq.index', $id)->with('success', 'FAQ başarıyla kaydedildi!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.product.faq.index', $id)->with('error', 'FAQ eklenirken bir hata oluştu.');
        }
    }

    public function faqEdit($id, $questionId)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $faqs = ProductFaq::where('product_id', $id)->where('question_id', $questionId)->get();
        return view('admin.product.faq.edit', compact('product', 'faqs'));
    }

    public function faqDestroy($id, $questionId)
    {
        try {
            $faqs = ProductFaq::where('product_id', $id)->where('question_id', $questionId)->get();
            foreach ($faqs as $faq) {
                $faq->delete();
            }
            return redirect()->route('admin.product.faq.index', $id)->with('success', 'FAQ deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.product.faq.index', $id)->with('error', 'An error occurred while deleting the FAQ.');
        }
    }

    // Product type methods will go here
    public function typeIndex($id)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $types = ProductType::where('product_id', $id)->get();
        return view('admin.product.type.index', compact('product', 'types'));
    }

    public function typeCreate($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.type.create', compact('product'));
    }

    public function typeStore(Request $request, $id)
    {
        try {
        
            $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('type_id')){
                $type_id = $request->type_id; // Use the provided type_id
            }else{
                $type_id = DB::table('product_type')->where('product_id', $id)->max('type_id') + 1; // Increment the maximum type_id by 1 for the specific product
                if (!$type_id) {
                    $type_id = 1; // If no types exist for this product, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->product_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'product_id' => $id,
                    'type_id' => $type_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                ProductType::updateOrCreate(
                    ['product_id' => $id, 'type_id' => $type_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.product.type.index', $id)->with('success', 'Ürün tipi başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.product.type.index', $id)->with('error', 'Ürün tipi eklenirken bir hata oluştu.');
        }
    }

    public function typeEdit($id, $typeId)
    {
        $product = Product::where('product_id', $id)->where('lang', app()->getLocale())->get();
        $types = ProductType::where('product_id', $id)->where('type_id', $typeId)->get();
        return view('admin.product.type.edit', compact('product', 'types'));
    }

    

    public function typeDestroy($id, $typeId)
    {
        try {
            $type = ProductType::findOrFail($typeId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $type->image);
            $type->delete();
            return redirect()->route('admin.product.type.index', $id)->with('success', 'Product type deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.product.type.index', $id)->with('error', 'An error occurred while deleting the product type.');
        }
    }

}
