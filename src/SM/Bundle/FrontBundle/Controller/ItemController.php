<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\Utilities;

class ItemController extends Controller {
    
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
     * @param type $page
     * @param type $slug
     * 
     * @return type 
     */
    public function viewAllAction($page)
    {
        $lang = $this->getDefaultLang();
        
        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        
        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ItemLanguage")
                ->getTotalByLangAndNameAndItemType($lang, '', '', $criterias);
        
        //Total of item for each page
        $perItemPage = $this->container->getParameter('per_item_news_front');
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
        
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ItemLanguage")
                ->findByLangAndNameAndItemType($lang, '', '', $perItemPage, ($page - 1) * $perItemPage, $criterias);
        
        return $this->render('SMFrontBundle:Item:view-cat.html.twig', array(
            'entities' => $entities,
            'totalRange' => $totalRange,
            'currentPage' => $page,
            'currentPageRange' => $currentPageRange,
            'startPageOfCurrentRange' => $startPageOfCurrentRange,
            'previousPage' => $previousPage,
            'nextPage' => $nextPage,
            'perPage' => $perPage,
            'totalPage' => $totalPage,
            'total' => $total,
        ));
        
    }
}
