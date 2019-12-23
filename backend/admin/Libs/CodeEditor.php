<?php

class CodeEditor
{
    private $meta;
    private $value;

    public function __construct($meta, $value)
    {
        $this->meta  = $meta;
        $this->value = $value;

        $this->createView();
        $this->addActions();
    }

    public function createView()
    {
        ?>
			<fieldset>
				<textarea
						id="code_editor_page_js"
						rows="5"
						class="widefat textarea"
						name="<?= $this->meta ?>">
						<?php echo wp_unslash($this->value); ?>
				</textarea>
			</fieldset>
        <?php

    }

    private function addActions()
    {
        add_action('admin_enqueue_scripts', [$this, 'addScripts']);
        do_action('admin_enqueue_scripts');
    }

    public function addScripts()
    {
        wp_enqueue_code_editor(['type' => 'text/html']);
        wp_enqueue_script(
            'js-code-editor',
            get_template_directory_uri().'/backend/admin/Libs/js/code-editor.js',
            ['jquery'],
            '',
            true
        );
    }
}