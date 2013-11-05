<?php namespace Packettide\BreeWysiwyg;

use Packettide\Bree\FieldType;

class BreeWysiwygAdvanced extends FieldType {

	protected static $assets = array(
			'packettide/bree-wysiwyg/ckeditor/contents.css',
			'packettide/bree-wysiwyg/ckeditor/ckeditor.js',
			'packettide/bree-wysiwyg/ckeditor/adapters/jquery.js',
			'packettide/bree-wysiwyg/wysiwyg.advanced.js'
		);

	public function __construct($name, $data, $options=array())
	{
		parent::__construct($name, $data, $options);

		// add a class for javascript to attach
		$this->attributes['class'][] = 'pt-wysiwyg';
	}

	public function generateField($name, $data, $attributes = array())
	{
		return '<textarea name="'.$name.'" type="text" id="'.$name.'" '.$attributes.'>'.$data.'</textarea>';
	}


}