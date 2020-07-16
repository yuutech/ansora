/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	// Define changes to default configuration here.
	// For complete reference see:
	// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html
	config.filebrowserBrowseUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'browse.php?type=files');
	config.filebrowserImageBrowseUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'browse.php?type=images');
	config.filebrowserFlashBrowseUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'browse.php?type=flash');
	config.filebrowserUploadUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'upload.php?type=files');
	config.filebrowserImageUploadUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'upload.php?type=images');
	config.filebrowserFlashUploadUrl = CKEDITOR.getUrl(CKEDITOR.plugins.getPath('kcfinder-2.51') + 'upload.php?type=flash');

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [{
			name: 'clipboard',
			groups: ['clipboard', 'undo']
		},
		{
			name: 'editing',
			groups: ['find', 'selection', 'spellchecker']
		},
		{
			name: 'links'
		},
		{
			name: 'insert'
		},
		{
			name: 'forms'
		},
		{
			name: 'tools'
		},
		{
			name: 'document',
			groups: ['mode', 'document', 'doctools']
		},
		{
			name: 'others'
		},
		'/',
		{
			name: 'basicstyles',
			groups: ['basicstyles', 'cleanup']
		},
		{
			name: 'paragraph',
			groups: ['list', 'indent', 'blocks', 'align', 'bidi']
		},
		{
			name: 'styles'
		},
		{
			name: 'colors'
		},
		{
			name: 'about'
		}
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};
