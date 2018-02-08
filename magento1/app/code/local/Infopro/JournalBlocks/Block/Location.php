<?php
class Cwdons_JournalBlocks_Block_Location extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
  protected function _toHtml(){
    $searchCollection = Mage::getModel('catalogsearch/query')
      ->getResourceCollection()
      ->setOrder('popularity', 'desc');
   
   $searchCollection->getSelect()->limit(3,0);
   
   $html  = '<div id="widget-topsearches-container">' ;
   $html .= '<div class="widget-topsearches-title">Location</div>';
   foreach($searchCollection as $search){
     $html .= '<div class="widget-topsearches-searchtext">' . $search->query_text . "</div>";
   }
   $html .= "</div>";
   return $html;
 }
};