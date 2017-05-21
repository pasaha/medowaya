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

/*	{
		"title": "Opinions",
		"id":  "opinions",
		"tpl":   "template/index/opinions.php"
	 },
*/

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$portfolio_items = json_decode('[
	{
		"title":   "Street",
		"preview": "/images/portfolio/500x400-street.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-street&v1"
	 },
	{
		"title":   "Portraits",
		"preview": "/images/portfolio/500x400-portrait.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-portrait&v1"
	 },
	{
		"title":   "Fashion",
		"preview": "/images/portfolio/500x400-fashion_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-fashion&v1"
	 },
	{
		"title":   "Art project &ldquo;Shadow&rdquo;",
		"preview": "/images/portfolio/500x400-shadow_2.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-shadow&v1"
	 },
	{
		"title":   "Inspiration &ldquo;Anna&rdquo;",
		"preview": "/images/portfolio/500x400-anna.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-anna&v1"
	 },
	{
		"title":   "Love story",
		"preview": "/images/portfolio/500x400-lovestory.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-lovestory&v1"
	 },
	{
		"title":   "Gardens",
		"preview": "/images/portfolio/500x400-gardens.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-gardens&v1"
	 },
	{
		"title":   "Red door",
		"preview": "/images/portfolio/500x400-reddoor.jpg"
	}
]',true);
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
?>