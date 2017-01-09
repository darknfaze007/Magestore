<?php  
namespace Magestore\Multivendor\Controller\Adminhtml;
use Magento\Framework\View\Result\LayoutFactory;
abstract class Vendor extends \Magento\Backend\App\Action {
    /**      * @param \Magento\Backend\App\Action\Context $context      */
    protected $resultPageFactory;
    protected $resultLayoutFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry,
        LayoutFactory $resultLayoutFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultLayoutFactory = $resultLayoutFactory;
        $this->_coreRegistry = $registry;
        parent::__construct($context);
    }
    protected function _isAllowed(){ 
        return $this->_authorization->isAllowed('Magestore_Multivendor::vendor_manage');
        
    }
}
