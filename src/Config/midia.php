<?php
return [
    // DEFAULT Target directory
    'directory' => storage_path('media'),
    // For URL (e.g: http://base/media/filename.ext)
    'directory_name' => 'media',
    'url_prefix' => 'media',
    'prefix' => 'midia',

    // 404
    '404' => function() {
    	return abort(404);
    },
    
    // Multiple target directories
    'directories' => [
    	// Examples:
    	// ---------
    	// 'home' => [
    	// 	'path' => storage_path('media/home'),
    	// 	'name' => 'media/home' // as url prefix
    	// ],
    	// 'documents' => [
    	// 	'path' => storage_path('media/documents'),
    	// 	'name' => 'media/documents' // as url prefix
    	// ],
    ]
];
