<?php

namespace intradesys\api\ebay\trading;

require_once 'EbatNs_Logger.php';
require_once 'EbatNs_Session.php';
require_once 'EbatNs_ServiceProxy.php';
require_once 'AbstractResponseType.php';
require_once 'AckCodeType.php';

/**
 * Prepares an environment for testing ebatNs calls
 *
 */
class EbatNs_Environment
{
    /**
     * @var EbatNs_Session
     */
    protected $session;

    /**
     * @var EbatNs_Logger
     */
    protected $logger = null;
    
    /**
     * @var EbatNs_ServiceProxy
     */
    protected $proxy = null;
    
    /**
     * Fullpath to config-file
     *
     * @var string
     */
    protected $configFile = null;
    
    public function __construct($logger, $configFile,$converter='EbatNs_DataConverterIso')
    {
        $this->init($logger, $configFile,$converter);
    }
    
    public function init($logger, $configFile,$converter='EbatNs_DataConverterIso')
    {
        /*if ($logLevel >= 1)
            $this->logger = new EbatNs_Logger();
            */
        $this->logger = $logger;
        $this->configFile = $configFile;
        $this->session = new EbatNs_Session($this->configFile);
        $this->proxy = new EbatNs_ServiceProxy($this->session,$converter);
        $this->proxy->setLoggingOptions(array('LOG_TIMEPOINTS' => false, 'LOG_API_USAGE' => false));
        $this->proxy->setTransportOptions(array('HTTP_VERBOSE' => false));
        
        /*if ($this->logger)
	        $this->proxy->attachLogger($this->logger);*/
    }
    
    public function dispatchCall()
    {
    }
    
    /**
     * Tests if a response is valid and prints out
     * a error trace if not
     *
     * @param AbstractResponseType $res
     * @return boolean
     */
    protected function testValid($res)
    {
        if ($res->getAck() == AckCodeType::CodeType_Success)
        {
            return true;
        }
        else
        {
            echo $this->proxy->getErrorsToString($res, true);
            return false;    
        }
    }
    
    protected function dumpObject($data)
    {
        echo  "<br>---------------------<br>"
            . "Object Dump:<br><pre>" . print_r($data, true) . "</pre>";
    }
}
?>
