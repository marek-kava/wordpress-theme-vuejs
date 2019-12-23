<?php

require_once(get_template_directory()."/backend/admin/Libs/MetaBox.php");
require_once(get_template_directory()."/backend/admin/Libs/MetaBoxTypes.php");

class PageController
{
    public function __construct()
    {
        
    }

    public function initializeMetaBoxes() {
        new MetaBox(
            'page_code',
            'Edycja strony',
            MetaBoxTypes::CODE_EDITOR,
            'page',
            'custom_editor'
        );

    }
}

