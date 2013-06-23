<?php
namespace Composer\Installers;

class PhpCsInstaller extends BaseInstaller
{
    protected $locations = array(
        'standard' => 'vendor/squizlabs/php_codesniffer/CodeSniffer/Standards',
    );

}
