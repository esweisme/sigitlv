
<?php 
header('content-type:application/xml; charset=utf-8');
echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
?>
<urlset xmlns='http://www.sitemap.org/schemas/sitemap/0.9'>

	<url>
		<loc> <?=  url('/') ?> </loc>
		<changefreq>weekly</changefreq>
		<priority> 0.6 </priority>
	</url>

	<url>
		<loc> <?=  url('/kontak') ?> </loc>
		<changefreq>weekly</changefreq>
		<priority> 0.6 </priority>
	</url>

	<url>
		<loc> <?=  url('/blog') ?> </loc>
		<changefreq>weekly</changefreq>
		<priority> 0.6 </priority>
	</url>

	<url>
		<loc> <?=  url('/catatan') ?> </loc>
		<changefreq>weekly</changefreq>
		<priority> 0.6 </priority>
	</url>

	<?php foreach($posts as $post){ ?>
		
	<url>
		<loc> <?php echo url('/')."/post/"; echo $post->url_seo;?> </loc> <?= "\n" ?>
		<changefreq>weekly</changefreq>
		<priority> 0.6 </priority>
	</url>
	<?php } ?>
</urlset>