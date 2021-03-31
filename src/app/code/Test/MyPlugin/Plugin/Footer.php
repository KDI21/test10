<?php
namespace Test\MyPlugin\Plugin;
/**
 *
 */
class Footer
{
    public function afterGetCopyright(
        \Magento\Theme\Block\Html\Footer $subject
    ) {
        return 'Customized copyright!';
    }
}
