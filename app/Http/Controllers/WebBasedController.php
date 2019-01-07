<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Theme;


class WebBasedController extends Controller{

	protected $theme_name = "default"; 

	/**
     * Theme instance.
     *
     * @var \Teepluss\Theme\Theme
     */
    protected $theme;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        // Using theme as a global.
        $this->theme = Theme::uses('default')->layout('default');
    }

    

}