<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        // Implement the logic for listing all articles
    }

    public function store(ArticleRequest $request)
    {
        // Implement the logic for creating a new article
    }

    public function show($id)
    {
        // Implement the logic for retrieving an article by ID
    }

    public function update(ArticleRequest $request, $id)
    {
        // Implement the logic for updating an article
    }

    public function destroy($id)
    {
        // Implement the logic for deleting an article
    }
}