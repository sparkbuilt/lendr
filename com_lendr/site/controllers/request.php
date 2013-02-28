<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllersRequest extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new LendrModelsWaitlist();
  	if ( $model->store() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_LENDR_BOOK_REQUEST_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_LENDR_BOOK_REQUEST_FAILURE');
  	}

  	echo json_encode($return);

  }

}