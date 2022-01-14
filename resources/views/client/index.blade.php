<?php '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($projects as $project)
        <url>
            <loc>{{ $project }}</loc>
            <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>https://mebelmilana.ru/hall</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelmilana.ru/commercial</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelmilana.ru/wardrobe</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelmilana.ru/children</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelmilana.ru/kitchen</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelmilana.ru/</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
