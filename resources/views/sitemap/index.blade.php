@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<urlset 
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

    <!-- Homepage -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Dynamic Posts -->
    @foreach ($menus as $menu)
    
        

        <url>
            <loc>{{ url('/' . $menu->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d', strtotime($menu->created_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach

    <!-- Dynamic Blogs -->
    @foreach ($blogs as $blog)
        <url>
            <loc>{{ url('/' . getUrl('blog_url') . '/' . $blog->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d', strtotime($blog->created_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach

</urlset>
