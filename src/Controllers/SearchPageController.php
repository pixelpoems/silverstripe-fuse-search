<?php

namespace Pixelpoems\FuseSearch\Controllers;

use SilverStripe\View\Requirements;

class SearchPageController extends \PageController
{
    protected function init()
    {
        Requirements::javascript('pixelpoems/silverstripe-fuse-search:client/dist/javascript/search.min.js');
        parent::init();
    }
}
