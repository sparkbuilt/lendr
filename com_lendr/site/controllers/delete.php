<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllersDelete extends JControllerBase
{
  public function execute()
  {
    $app = JFactory::getApplication();

  	$return = array("success"=>false);
    
    $type = $app->input->get('type','waitlist');
   
  	$modelName = 'LendrModels'.ucfirst($type);    
    $model = new $modelName();

  	if ( $row = $model->delete() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_LENDR_BOOK_DELETE_SUCCESS');
  	}else{
  		$return['msg'] = JText::_('COM_LENDR_BOOK_DELETE_FAILURE');
  	}

  	echo json_encode($return);

  }

}