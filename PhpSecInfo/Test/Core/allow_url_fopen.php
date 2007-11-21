<?php
/**
 * Test Class for allow_url_fopen
 *
 * @package PhpSecInfo
 * @author Ed Finkler <coj@funkatron.com>
 */


/**
 * require the PhpSecInfo_Test_Core class
 */
require_once('PhpSecInfo/Test/Test_Core.php');

/**
 * Test Class for allow_url_fopen
 *
 * @package PhpSecInfo
 *
 *
 */
class PhpSecInfo_Test_Core_Allow_Url_Fopen extends PhpSecInfo_Test_Core
{
	/**
	 * This should be a <b>unique</b>, human-readable identifier for this test
	 *
	 * @var string
	 */
	var $test_name = "allow_url_fopen";
	
	/**
	 * The recommended setting value
	 *
	 * @var mixed
	 */
	var $recommended_value = FALSE;


	
	function _retrieveCurrentValue() {
		$this->current_value = $this->getBooleanIniValue('allow_url_fopen');
	}
	
	
	/**
	 * Checks to see if allow_url_fopen is enabled
	 *
	 */
	function _execTest() {
		if ($this->current_value == $this->recommended_value) {
			return PHPSECINFO_TEST_RESULT_OK;
		}

		return PHPSECINFO_TEST_RESULT_WARN;
	}


	/**
	 * Set the messages specific to this test
	 *
	 */
	function _setMessages() {
		parent::_setMessages();

		$this->setMessageForResult(PHPSECINFO_TEST_RESULT_OK, 'en', 'allow_url_fopen is disabled, which is the recommended setting');
		$this->setMessageForResult(PHPSECINFO_TEST_RESULT_WARN, 'en', 'allow_url_fopen is enabled.  This could be a serious security risk.  You should disable allow_url_fopen and consider using the <a href="http://php.net/manual/en/ref.curl.php" target="_blank">PHP cURL functions</a> instead.');
	}


}