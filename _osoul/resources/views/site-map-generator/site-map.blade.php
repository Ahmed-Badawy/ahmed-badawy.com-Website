<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
<url>

        @foreach($site_map_links as $link)
            <url>
                <loc>{{$link}}</loc>
                <lastmod>{{$time}}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
            </url>
        @endforeach

        @foreach($site_map_imgs as $img)
            <image:image>
                <image:loc>{{$img}}</image:loc>
            </image:image>
        @endforeach

        @foreach($site_map_vids as $vid)
            <video:video>
                <video:content_loc>{{ $vid }}</video:content_loc>
            </video:video>
        @endforeach

</url>
</urlset>
