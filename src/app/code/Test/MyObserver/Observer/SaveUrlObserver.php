<?php
namespace Test\MyObserver\Observer;

use Magento\Framework\Event\ObserverInterface;

class SaveUrlObserver implements ObserverInterface
{
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $requestInfo = $observer->getEvent()->getData('request');
        $fullPath1= $requestInfo->getHttpHost();
        $fullPath = $requestInfo->getPathInfo();
        $this->_logger->info('qwe', [$fullPath1.$fullPath]);
    }
}
