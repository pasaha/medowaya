<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
$menu_items = json_decode('[
	{
		"title": "Home",
		"id":  "home",
		"tpl":   "template/index/home.php"
	 },
	{
		"title": "About",
		"id":  "about",
		"tpl":   "template/index/about.php"
	 },
	{
		"title": "Opinions",
		"id":  "opinions",
		"tpl":   "template/index/opinions.php"
	 },
	{
		"title": "Works",
		"id":  "work",
		"tpl":   "template/index/work.php"
	 },
	{
		"title": "Contact",
		"id":  "contact",
		"tpl":   "template/index/contact.php"
	 }
]',true);


// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$portfolio_items = json_decode('[
	{
		"title":   "Fashion",
		"preview": "/images/portfolio/500x400-fashion_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-fashion"
	 },
	{
		"title":   "Portrait",
		"preview": "/images/portfolio/500x400-portrait_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-portrait"
	 },
	{
		"title":   "Shadow",
		"preview": "/images/portfolio/500x400-shadow_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-shadow"
	 },
	{
		"title":   "Street",
		"preview": "/images/portfolio/500x400-street_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-street"
	 }
]',true);
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
?>