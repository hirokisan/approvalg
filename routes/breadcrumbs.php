<?php

/**
 * Laravel 5.4 runs a htmlentities when injecting a variable into a '@section'
 *
 * @url https://stackoverflow.com/questions/42759869/laravel-breadcrumbs-not-rendering-html-in-laravel-5-4
 */

// home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('home', route('home'));
});

// home > service.index
Breadcrumbs::register('service.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('service', route('service.index'));
});

// home > service.create
Breadcrumbs::register('service.create', function ($breadcrumbs) {
    $breadcrumbs->parent('service.index');
    $breadcrumbs->push('service.create', route('service.create'));
});

// home > service.show
Breadcrumbs::register('service.show', function ($breadcrumbs, $service) {
    $breadcrumbs->parent('service.index');
    $breadcrumbs->push($service->name, route('service.show', $service->id));
});

// home > project.show
Breadcrumbs::register('project.show', function ($breadcrumbs, $service, $project) {
    $breadcrumbs->parent('service.show', $service);
    $breadcrumbs->push($project->name, route('project.show', $project->id));
});

// home > project.create
Breadcrumbs::register('project.create', function ($breadcrumbs, $service) {
    $breadcrumbs->parent('service.show', $service);
    $breadcrumbs->push('project.create', route('project.create', $service->id));
});

// home > option
Breadcrumbs::register('option', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('option', route('option'));
});

// home > option > category.index
Breadcrumbs::register('category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('option');
    $breadcrumbs->push('category', route('category.index'));
});

// home > option > item_category.index
Breadcrumbs::register('item_category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('option');
    $breadcrumbs->push('item_category', route('item_category.index'));
});
