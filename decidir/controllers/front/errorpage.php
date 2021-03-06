<?php

Class DecidirErrorPageModuleFrontController extends ModuleFrontController
{	
	private $errorCode;
	private $paymentMethod;
	private $message;


	public function init()
	{
	    $this->page_name = 'Error page'; // page_name and body id
	    $this->display_column_left = false;
		$this->display_column_right = false;
	    parent::init();
	}

	
	public function initContent()
	{	
		global $smarty;
	    parent::initContent();

	    if (version_compare(_PS_VERSION_, '1.7.0.0') < 0) {
	    	$this->setTemplate('errorpage.tpl');
	    }else{
			$this->setTemplate('module:decidir/views/templates/front/errorpage17.tpl');
		}

		/*
		$smarty->assign(array(
			'errorCode' => $this->Code(),
			'errorMessage' => $this->Message()
		));
		*/
	}
	
	/*
	public function Code(){

		$id_error = Tools::getValue('id_error');

		return $id_error; 
	}

	public function Message(){

		$instErroData = new DecidirErrorData($this->paymentMethod, $this->errorCode);
        $message = $instErroData->errorPage();

		return $message;
	}
	*/
}
