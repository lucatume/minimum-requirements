<?php  //[STAMP] 122218524230b4673d45c4aaa0c93107
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use Codeception\Module\Filesystem;
use Codeception\Module\WPLoader;
use Helper\Functional;

trait FunctionalTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enters a directory In local filesystem.
     * Project root directory is used by default
     *
     * @param $path
     * @see \Codeception\Module\Filesystem::amInPath()
     */
    public function amInPath($path) {
        return $this->getScenario()->runStep(new \Codeception\Step\Condition('amInPath', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens a file and stores it's content.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $filename
     * @see \Codeception\Module\Filesystem::openFile()
     */
    public function openFile($filename) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('openFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     *
     * ``` php
     * <?php
     * $I->deleteFile('composer.lock');
     * ?>
     * ```
     *
     * @param $filename
     * @see \Codeception\Module\Filesystem::deleteFile()
     */
    public function deleteFile($filename) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes directory with all subdirectories
     *
     * ``` php
     * <?php
     * $I->deleteDir('vendor');
     * ?>
     * ```
     *
     * @param $dirname
     * @see \Codeception\Module\Filesystem::deleteDir()
     */
    public function deleteDir($dirname) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Copies directory with all contents
     *
     * ``` php
     * <?php
     * $I->copyDir('vendor','old_vendor');
     * ?>
     * ```
     *
     * @param $src
     * @param $dst
     * @see \Codeception\Module\Filesystem::copyDir()
     */
    public function copyDir($src, $dst) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('copyDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function canSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function seeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ?>
     * ```
     *
     * @param int $number New lines
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function canSeeNumberNewLines($number) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeNumberNewLines', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ?>
     * ```
     *
     * @param int $number New lines
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function seeNumberNewLines($number) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeNumberNewLines', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ?>
     * ```
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function canSeeFileContentsEqual($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileContentsEqual', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ?>
     * ```
     *
     * @param $text
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function seeFileContentsEqual($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileContentsEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function cantSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function dontSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('dontSeeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     * @see \Codeception\Module\Filesystem::deleteThisFile()
     */
    public function deleteThisFile() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param $filename
     * @param string $path
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function canSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param $filename
     * @param string $path
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function seeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file does not exist in path
     *
     * @param $filename
     * @param string $path
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function cantSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file does not exist in path
     *
     * @param $filename
     * @param string $path
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function dontSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('dontSeeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Erases directory contents
     *
     * ``` php
     * <?php
     * $I->cleanDir('logs');
     * ?>
     * ```
     *
     * @param $dirname
     * @see \Codeception\Module\Filesystem::cleanDir()
     */
    public function cleanDir($dirname) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('cleanDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Saves contents to file
     *
     * @param $filename
     * @param $contents
     * @see \Codeception\Module\Filesystem::writeToFile()
     */
    public function writeToFile($filename, $contents) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('writeToFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\WPLoader::ensureDbModuleCompat()
     */
    public function ensureDbModuleCompat() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('ensureDbModuleCompat', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\WPLoader::activatePlugins()
     */
    public function activatePlugins() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('activatePlugins', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Loads the plugins required by the test.
     * @see \Codeception\Module\WPLoader::loadPlugins()
     */
    public function loadPlugins() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('loadPlugins', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Calls a list of user-defined actions needed in tests.
     * @see \Codeception\Module\WPLoader::bootstrapActions()
     */
    public function bootstrapActions() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('bootstrapActions', func_get_args()));
    }
}
