<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllersWish extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new LendrModelsWishlist();
  	if ( $model->store() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_LENDR_WISHLIST_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_LENDR_WISHLIST_FAILURE');
  	}

  	echo json_encode($return);

  }

}