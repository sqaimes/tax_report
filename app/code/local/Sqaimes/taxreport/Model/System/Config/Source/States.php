<?php
class Atwix_Tweaks_Model_System_Config_Source_States
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
      $orderStatusCollection = Mage::getModel('sales/order_status')->getResourceCollection()->getData();
$status = array();
$status [] = array(
    'value'=>'all','label'=>'All Statuses'
);

foreach($orderStatusCollection as $orderStatus) {
    $status[] = array (
        'value' => $orderStatus['status'], 'label' => $orderStatus['label']
    );
}
        return $status;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
      $orderStatusCollection = Mage::getModel('sales/order_status')->getResourceCollection()->getData();
$status = array();
$status [] = array(
    'value'=>'all','label'=>'All Statuses'
);

foreach($orderStatusCollection as $orderStatus) {
    $status[] = array (
        'value' => $orderStatus['status'], 'label' => $orderStatus['label']
    );
}
        return $status;
    }
}
?>
