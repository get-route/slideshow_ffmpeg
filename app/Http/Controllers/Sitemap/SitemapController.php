<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use App\Models\Metric;
use App\Models\Tag;


class SitemapController extends Controller
{
    protected $count_tag;
    protected $count_metrik;
    public function index()
    {

        $dir_sitemaps = scandir('./sitemap');
        return response()->view('frontend.sitemap.sitemap', compact('dir_sitemaps'))->header('Content-Type', 'text/xml');
    }
    public function store(){
        $metrik_sitemap = $this->data_metrik();
        $tags_sitemap = $this->data_tags();
        $count_tag = $this->count_tag;
        $count_metrik = $this->count_metrik;
        return view('frontend.sitemap.update',compact('metrik_sitemap','tags_sitemap','count_metrik','count_tag'));
    }

    public function data_tags()
    {
        $tags = Tag::all('updated_at', 'url')->toArray();
        $this->count_tag = count($tags);
        return $this->sitemap_template($tags, 3000, 'url', 'updated_at', 'tags_sitemap','/tag');
    }

    public function data_metrik()
    {
        $metriks = Metric::all('updated_at', 'url')->toArray();
        $this->count_metrik = count($metriks);
        return $this->sitemap_template($metriks,3000,'url','updated_at','metrik_sitemap','/metrika');
    }
//    Для работы с генератором карты сайта необходимо указать: $input_dat - переменную где хранится выгрузка из БД
//$url - Название поля в БД для запроса урла,$date - Название поля в БД для запроса даты,$name_file - Имя конечного файла после обработки, $paginate - насколько нужно разделить вашу выгрузку.
// To work with the sitemap generator, you must specify:
// $input_dat - the variable where the upload from the database is stored
//$url - The name of the field in the database to request the url
//$date - The name of the field in the database to request the date
//$name_file - The name of the final file after processing
    public function sitemap_template($input_data, $paginate, String $url, String $date, String $name_file,$category = null)
    {

        $page_number = $paginate;
        $steps = 3000;
        $page_start = 0;
        $step = (count($input_data) / $page_number) + 1;//10
        for ($sitemap = 1; $sitemap <= $step; $sitemap++) {


            $dom = new \DOMDocument('1.0', 'utf-8');
            $urlset = $dom->createElement('urlset');
            $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');


            for ($i = $page_start; $i < $page_number; $i++) {//0-3000
                if (!empty($input_data[$i])) {

                    //Формируем валидную дату
                    $date_valid = date('Y-m-d', strtotime($input_data[$i]["$date"]));

                    $urls = $dom->createElement('url');

                    // Элемент <loc> - URL статьи.
                    $loc = $dom->createElement('loc');
                    $text = $dom->createTextNode(
                        route('index').$category . "/" . $input_data[$i]["$url"]
                    );
                    $loc->appendChild($text);
                    $urls->appendChild($loc);

                    // Элемент <lastmod> - дата последнего изменения статьи.
                    $lastmod = $dom->createElement('lastmod');
                    $text = $dom->createTextNode($date_valid);
                    $lastmod->appendChild($text);
                    $urls->appendChild($lastmod);

                    // Элемент <priority> - приоритетность (от 0 до 1.0, по умолчанию 0.5).
                    // Если дата публикации/изменения статьи была меньше недели назад ставим приоритет 1.
                    $priority = $dom->createElement('priority');
                    $text = $dom->createTextNode('1');
                    $priority->appendChild($text);
                    $urls->appendChild($priority);

                    $urlset->appendChild($urls);
                }
            }


            $dom->appendChild($urlset);
            $dom->save('./sitemap/' . $name_file . $sitemap . '.xml');
            $page_start = $page_number;
            $page_number = $page_number + $steps;
        }
    }


}
