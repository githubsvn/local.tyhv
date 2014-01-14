<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\Utilities;

class ProductController extends Controller {
   
    /**
     * get default language
     * @return type 
     */
    private function getDefaultLang()
    {
        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : null;
        //get list language
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();
        if (is_null($lang)) {
            foreach ($langList as $langData) {
                $isDefault = $langData->getIsDefault();
                if ($isDefault == 1) {
                    $lang = $langData->getId();
                    break;
                }
            }
        }
        
        return $lang;
    }
    
    /**
     * View cat product by slug
     * 
     * @param type $slug
     * @return type 
     */
    public function viewCatAction($page, $slug)
    {
        //Get branch id
        $branchId = Helper::getIdFromUrl($slug);
        $lastUrl = Helper::getLastUrlFromUrl($slug);
        
        $lang = $this->getDefaultLang();
        
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        $allBranchId = $this->getDoctrine()
                            ->getRepository("SMAdminBundle:Branch")
                            ->getAllChildrenIds($branchId);
        
        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getTotalByLangAndNameAndType($lang, '', $allBranchId, $criterias);
        //Total of item for each page
        $perItemPage = Utilities::getConfig('per_product_item_view_category');
        //Total of page for each paginator
        $perPage = Utilities::getConfig('per_quantity_page_view_category');
        
        //Total page
        $totalPage = ceil($total / $perItemPage);
        if ($page > $totalPage) {
            $page = $totalPage;
        } 
        if ($page <= 0) {
            $page = 1;
        }
        
        //Get total page range
        $totalRange = ceil($total / ($perItemPage * $perPage) );
        //Get current range of page
        $currentPageRange = ceil( ($page * $perItemPage) / ($perItemPage * $perPage));
        //Get start page of the current range
        $startPageOfCurrentRange = ceil((( ($currentPageRange - 1) * ($perItemPage * $perPage)) + 1) / $perItemPage);
        //previous range
        $previousPage = $startPageOfCurrentRange - 1;
        if ($previousPage <= 0) {
            $previousPage = 1;
        }
        //next page
        $nextPage = $startPageOfCurrentRange + $perPage;
        if ($nextPage >= $totalPage) {
            $nextPage = $totalPage;
        }
        
        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, '', $allBranchId, $perItemPage, ($page - 1) * $perItemPage, $criterias);
        
        //Get Branch by branchId
        $branch = $this->getDoctrine()
                ->getRepository("SMAdminBundle:BranchLanguage")
                ->findByBranchIdAndLangId($branchId, $lang);
        
        $countWordProductTitle = $this->container->getParameter('countWordProductTitle');
        
        $topEnt = null;
        if (!empty($entities[0])) {
            $topEnt = $entities[0];
            unset($entities[0]);
                    
        }
        
        return $this->render('SMFrontBundle:Product:view-cat.html.twig', array(
            'entities' => $entities,
            'topEnt' => $topEnt,
            'branch' => $branch,
            'thumbPath' => Utilities::getThumbPath(),
            'uploadPath' => Utilities::getUploadPath(),
            'totalRange' => $totalRange,
            'currentPage' => $page,
            'currentPageRange' => $currentPageRange,
            'startPageOfCurrentRange' => $startPageOfCurrentRange,
            'previousPage' => $previousPage,
            'nextPage' => $nextPage,
            'perPage' => $perPage,
            'totalPage' => $totalPage,
            'total' => $total,
            'lastUrl' => $lastUrl,
            'countWordProductTitle' => $countWordProductTitle
        ));
    }
    
    /**
     * View product detail
     * 
     * @param type $slug
     * @return type 
     */
    public function detailAction($slug)
    {
        $countWordProductTitle = $this->container->getParameter('countWordProductTitle');
        
        //Get branch id
        $id = Helper::getIdFromUrl($slug);
        
        $lang = $this->getDefaultLang();
        
        $entity = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByProductIdAndLang($id, $lang);
        
        $branch = $entity->getProduct()->getBranch();
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $branch->setLanguage($currentLanguage);
        
        $branchId = $branch->getId();
        
        $productsRelative = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getRelateProductByBranchAndLang($id, $lang, $branchId, 8);
        
        $medias = $entity->getProduct()->getMediaId();
        $urlHost = $this->container->getParameter('host');
        return $this->render('SMFrontBundle:Product:detail.html.twig', array(
            'entity' => $entity,
            'branch' => $branch,
            'urlHost' => $urlHost,
            'productsRelative' => $productsRelative,
            'medias' => $medias,
            'uploadPath' => Utilities::getUploadPath(),
            'thumbPath' => Utilities::getThumbPath(),
            'countWordProductTitle' => $countWordProductTitle
        ));
    }
    
    public function searchAction($page)
    {
        if ($this->getRequest()->isMethod('POST')) {
            $_SESSION['name'] = $this->getRequest()->request->get('product_name', '');
            $_SESSION['branch'] = $this->getRequest()->request->get('branch', null);
        }
        $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $branchId = isset($_SESSION['branch']) ? $_SESSION['branch'] : '';
        
        $lang = $this->getDefaultLang();
        
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        
        $criterias = array();
        //$criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        $allBranchId = $this->getDoctrine()
                            ->getRepository("SMAdminBundle:Branch")
                            ->getAllChildrenIds($branchId);
        
        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getTotalByLangAndNameAndType($lang, $name, $allBranchId, $criterias);
        
        //Total of item for each page
        $perItemPage = $this->container->getParameter('per_item_page_front') + 1;
        //Total of page for each paginator
        $perPage = $this->container->getParameter('per_page_front');
        //Total page
        $totalPage = ceil($total / $perItemPage);
        if ($page > $totalPage) {
            $page = $totalPage;
        } 
        if ($page <= 0) {
            $page = 1;
        }
        
        //Get total page range
        $totalRange = ceil($total / ($perItemPage * $perPage) );
        //Get current range of page
        $currentPageRange = ceil( ($page * $perItemPage) / ($perItemPage * $perPage));
        //Get start page of the current range
        $startPageOfCurrentRange = ceil((( ($currentPageRange - 1) * ($perItemPage * $perPage)) + 1) / $perItemPage);
        //previous range
        $previousPage = $startPageOfCurrentRange - 1;
        if ($previousPage <= 0) {
            $previousPage = 1;
        }
        //next page
        $nextPage = $startPageOfCurrentRange + $perPage;
        if ($nextPage >= $totalPage) {
            $nextPage = $totalPage;
        }
        
        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, $name, $allBranchId, $perItemPage, ($page - 1) * $perItemPage, $criterias);
        
        //Get Branch by branchId
        //Get branch and product group
        $criteria = array();
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');
        $repBranch = $this->getDoctrine()->getRepository('SMAdminBundle:Branch');
        $optBranchs = $repBranch->getList(null, null, $criteria, array('lft' => 'ASC'));
        foreach ($optBranchs as $oItem) {
            $oItem->setLanguage($currentLanguage);
        }
        
        $countWordProductTitle = $this->container->getParameter('countWordProductTitle');
        
        return $this->render('SMFrontBundle:Product:search.html.twig', array(
            'entities' => $entities,
            'branchId' => $branchId,
            'name' => $name,
            'optBranchs' => $optBranchs,
            'thumbPath' => Utilities::getThumbPath(),
            'uploadPath' => Utilities::getUploadPath(),
            'totalRange' => $totalRange,
            'currentPage' => $page,
            'currentPageRange' => $currentPageRange,
            'startPageOfCurrentRange' => $startPageOfCurrentRange,
            'previousPage' => $previousPage,
            'nextPage' => $nextPage,
            'perPage' => $perPage,
            'totalPage' => $totalPage,
            'total' => $total,
            'countWordProductTitle' => $countWordProductTitle
        ));
        
    }
}