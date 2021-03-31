<?php
namespace Test\MyPlugin\Plugin;
/**
*
*/
class Breadcrumbs
{
         public function beforeAddCrumb
         (\Magento\Theme\Block\Html\Breadcrumbs $subject
           ,$crumbName, $crumbInfo
     ) {
//             $this->qwe = $subject;
//             var_dump('<pre>', $crumbName, '</pre>');
//             $crumbInfo['label'] = $crumbInfo['label'].'!';
             $a = $crumbInfo['label'];
//             var_dump($a);
//             die;
         }
}
