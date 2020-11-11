{{ Request::header('Content-Type : text/xml') }}



<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">



@foreach ($news as $new)
<url>
    <loc>https://gagarin-digital.ru/</loc>
    <lastmod>2020-11-11T14:29:28+00:00</lastmod>
    <priority>1.00</priority>
</url>
<url>
    <loc>https://gagarin-digital.ru/news</loc>
    <lastmod>2020-11-11T14:29:28+00:00</lastmod>
    <priority>0.80</priority>
</url>
<url>
    <loc>https://gagarin-digital.ru/shares</loc>
    <lastmod>2020-11-11T14:29:28+00:00</lastmod>
    <priority>0.80</priority>
</url>
<url>
    <loc>{{ url($new->slug) }}</loc>
    <lastmod>{{ $new->updated_at->tz('GMT')->toAtomString() }}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.80</priority>
</url>
@endforeach


</urlset>