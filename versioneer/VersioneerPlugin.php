<?php
/**
 * Versioneer plugin for Craft CMS
 *
 * A fieldtype for getting at the rest of those entry versions.
 *
 * @author    Working Concept
 * @copyright Copyright (c) 2017 Working Concept
 * @link      https://workingconcept.com
 * @package   DprTools
 * @since     0.0.1
 */

namespace Craft;

class VersioneerPlugin extends BasePlugin
{

    public function getName()
    {
         return Craft::t('Versioneer');
    }

    public function getDescription()
    {
        return Craft::t('A fieldtype for getting at the rest of those entry versions.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/workingconcept/versioneer-craft-plugin/blob/master/readme.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/workingconcept/versioneer-craft-plugin/master/releases.json';
    }

    public function getVersion()
    {
        return '0.0.1';
    }

    public function getSchemaVersion()
    {
        return '0.0.0';
    }

    public function getDeveloper()
    {
        return 'Working Concept';
    }

    public function getDeveloperUrl()
    {
        return 'https://workingconcept.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function onBeforeInstall()
    {
    }

    public function onAfterInstall()
    {
    }

    public function onBeforeUninstall()
    {
    }

    public function onAfterUninstall()
    {
    }
}