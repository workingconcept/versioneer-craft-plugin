<?php

namespace Craft;

class Versioneer_VersionHistoryFieldType extends BaseFieldType
{

	public function getName()
	{
		return Craft::t('Version History');
	}

	public function getInputHtml($name, $value)
	{
		return craft()->templates->render('versioneer/fieldtypes/history', array(
			'versions' => craft()->entryRevisions->getVersionsByEntryId($this->element->id, $this->element->locale, 500, true),
			'entry'    => $this->element,
			'id'       => craft()->templates->formatInputId($name),
			'name'     => $name,
			'value'    => $value,
		));
	}

}