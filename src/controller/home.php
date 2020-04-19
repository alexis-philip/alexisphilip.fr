<?php

include("src/model/MarkdownModel.php");
include("src/model/RepositoryModel.php");

// Sets the page's title.
RenderManager::setPageTitleSuffix("Full stack web developer");

// Sets the meta description.
RenderManager::setMetaDescription("I'm a full stack web developer based in Aix-en-Provence, France.
Contact me or checkout my open sources projects, articles and posts in my blog.");

$file_path = "content/pages-html/home.php";

// Gets the 5 latest articles.
$data["articles"] = MarkdownModel::getArticles(5);

// Gets all the repositories.
$data["repositories"] = RepositoryModel::getRepositories();

// Loads the selected template and renders it.
RenderManager::loadTemplate("html", $file_path, $data);