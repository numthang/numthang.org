<?php namespace Numthang\BlogSearch\Components;

use Cms\Classes\ComponentBase,
    Cms\Classes\Page;
use Input;
use PKleindienst\BlogSearch\Components\SearchResult as PKBlogSearch;
use RainLab\Blog\Models\Category as BlogCategory;
use RainLab\Blog\Models\Post as BlogPost;
use Redirect;
use DB;

class SearchResult extends PKBlogSearch
{
  public function onRun()
  {
      $this->prepareVars();

      // map get request to :search param
      $searchTerm = Input::get('search');
      if (!$this->property('disableUrlMapping') && \Request::isMethod('get') && $searchTerm) {
          // add ?cats[] query string
          $cats = Input::get('cat');
          $query = http_build_query(['cat' => $cats]);
          $query = preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', $query);
          $query = !empty($query) ? '?' . $query : '';

          return Redirect::to(
              $this->currentPageUrl([
                  $this->searchParam => urlencode($searchTerm)
              ])
              . $query
          );
      }

      // load posts
      $this->posts = $this->page[ 'posts' ] = $this->listPosts();

      /*
       * If the page number is not valid, redirect
       */
      if ($pageNumberParam = $this->paramName('pageNumber')) {
          $currentPage = $this->property('pageNumber');

          if ($currentPage > ($lastPage = $this->posts->lastPage()) && $currentPage > 1) {
              return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
          }
      }
  }
  protected function listPosts()
  {
    //looking in attachment first
    $files = Db::table('system_files')
        ->where('title', 'LIKE', "%{$this->searchTerm}%")
        ->orwhere('description', 'LIKE', "%{$this->searchTerm}%")
        ->where('attachment_type', '=', "RainLab\Blog\Models\Post")
        ->get();
    $founded = array();
    foreach ($files as $key => $value)
        $founded[] = $value->attachment_id;
    #dump($founded);
    $posts = BlogPost::whereIn('id', $founded)
            ->orwhere('title', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('content', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('refno', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_1_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_1_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_1_3', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_1_4', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_1_5', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_2_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_2_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_2_3', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_2_4', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_3_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_3_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_3_3', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_3_4', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_4_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_4_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_4_3', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_4_4', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_4_5', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_5_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_5_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_5_3', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_5_4', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_6_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_7_1', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_7_2', 'LIKE', "%{$this->searchTerm}%")
            ->orWhere('archives_7_3', 'LIKE', "%{$this->searchTerm}%");
    #dump($posts);
    if (!is_null($this->property('includeCategories'))) {
        $posts = $posts->whereHas('categories', function ($q) {
            $q->whereIn('id', $this->property('includeCategories'));
        });
    }

    if (!is_null($this->property('excludeCategories'))) {
        $posts = $posts->whereDoesntHave('categories', function ($q) {
            $q->whereIn('id', $this->property('excludeCategories'));
        });
    }

    // filter categories
    $cat = Input::get('cat');
    if ($cat) {
        $cat = is_array($cat) ? $cat : [$cat];
        $posts->filterCategories($cat);
    }

    // List all the posts that match search terms, eager load their categories
    $posts = $posts->listFrontEnd([
        'page'    => $this->property('pageNumber'),
        'sort'    => $this->property('sortOrder'),
        'perPage' => $this->property('postsPerPage'),
    ]);

    /*
    * Add a "url" helper attribute for linking to each post and category
    */
    $posts->each(function ($post) {
        $post->setUrl($this->postPage, $this->controller);

        $post->categories->each(function ($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });

        // apply highlight of search result
        $this->highlight($post);
    });

    return $posts;
  }
}
