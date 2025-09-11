<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Language;

class ClubController extends Controller
{
    public function index()
    {
        // code to list all clubs where lang is en
        $clubs = Club::where('lang', 'en')->get();
        $languages = Language::all(); // Assuming you have a Language model to fetch languages
        return view('admin.club.index', compact('clubs', 'languages'));
    }

    public function create()
    {
        // code to show create club form
        $languages = Language::all();
        return view('admin.club.create', compact('languages'));
    }

    public function store(Request $request)
    {
        // code to store new club

        //dd($request->all());

        if ($request->has('club_id')) {
                $club_id = $request->club_id; // Use the provided club_id
            }else{

                //if club count is > 0
                if (Club::count() > 0) {
                    $club_id = Club::max('club_id') + 1; // Increment the maximum club_id by 1
                } else {
                    $club_id = 1; // If no club items exist, start with 1
                }
            }
        try {

             $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'title_1_' . $language->lang_code => 'required|max:100',
                        'title_2_' . $language->lang_code => 'required|max:100',
                        'seo_url_' . $language->lang_code => 'required|max:255',
                        'button_text_' . $language->lang_code => 'required|max:100',
                        'pdf_button_text_' . $language->lang_code => 'required|max:100',
                        'description_1_' . $language->lang_code => 'required',
                        'description_2_' . $language->lang_code => 'required',
                        'pdf_file_' . $language->lang_code => 'nullable|file|mimes:pdf|max:2048', // Assuming PDF is optional
                        'seo_title_' . $language->lang_code => 'nullable|max:255',
                        'seo_description_' . $language->lang_code => 'nullable|max:255',
                        'seo_keywords_' . $language->lang_code => 'nullable|max:255',
                    ]);
                }

                if ($request->hasFile('pdf_file_en') || $request->hasFile('pdf_file_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'pdf_file_en', $languages[0]);
                    $fileName = moveFile($request,$language,'pdf_file_' . $language->lang_code, 'pdf_file_en', 'alt_' . $language->lang_code, 'title_en', $language->club_images_folder, $tmpImgPath);
                    //dd($fileName);
                }else{
                    $fileName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                Club::updateOrCreate(
                    ['club_id' => $club_id, 'lang' => $language->lang_code],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'title_1' => $request->input('title_1_' . $language->lang_code) ?? $request->input('title_1_en'),
                        'title_2' => $request->input('title_2_' . $language->lang_code) ?? $request->input('title_2_en'),
                        'description_1' => $request->input('description_1_' . $language->lang_code) ?? $request->input('description_1_en'),
                        'description_2' => $request->input('description_2_' . $language->lang_code) ?? $request->input('description_2_en'),
                        'pdf_file' => $fileName,
                        'button_text' => $request->input('button_text_' . $language->lang_code) ?? $request->input('button_text_en'),
                        'pdf_button_text' => $request->input('pdf_button_text_' . $language->lang_code) ?? $request->input('pdf_button_text_en'),
                        'seo_url' => $request->input('seo_url_' . $language->lang_code) ?? $request->input('seo_url_en'),
                        'seo_title' => $request->input('seo_title_' . $language->lang_code) ?? $request->input('seo_title_en'),
                        'seo_description' => $request->input('seo_description_' . $language->lang_code) ?? $request->input('seo_description_en'),
                        'seo_keywords' => $request->input('seo_keywords_' . $language->lang_code) ?? $request->input('seo_keywords_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en'),
                    ]
                );

            }



            return redirect()->route('admin.club.index')->with('success', 'Kulüp başarıyla kaydedildi.');
        } catch (\Exception $e) {
            throw $e;
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        // code to show edit club form
        $clubs = Club::where('club_id', $id)->get();
        //dd($clubs);
        $languages = Language::all();
        
        return view('admin.club.edit', compact('clubs', 'languages'));
    }

    public function destroy($id)
    {
        // code to delete club
        Club::where('club_id', $id)->delete();
        //ClubSlider::where('club_id', $id)->delete();
        return redirect()->route('admin.club.index')->with('success', 'Club başarıyla silindi.');
    }
}
