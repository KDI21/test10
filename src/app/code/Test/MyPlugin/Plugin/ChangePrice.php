<?php
namespace Test\MyPlugin\Plugin;


/**
 *
 */
class ChangePrice {

  public function afterGetValue(
      \Magento\Catalog\Pricing\Price\BasePrice $subject, $price
  ){
      // var_dump('hgf');
      return $price*2;
  }
}
