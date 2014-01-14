<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\Utilities;

class CompanyController extends Controller {
   
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
     * 
     * @param type $page
     * @return type
     */
    public function viewAllAction($page)
    {
        //Get branch id
        $lang = $this->getDefaultLang();
        
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        
        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        
        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CompanyLanguage")
                ->getTotalByLangAndNameAndType($lang, '', '', $criterias);
        
        //Total of item for each page
        $perItemPage = $this->container->getParameter('per_item_page_front'); //1 that mean add for hightlight product
        
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
                ->getRepository("SMAdminBundle:CompanyLanguage")
                ->findByLangAndNameAndType($lang, '', '', $perItemPage, ($page - 1) * $perItemPage, $criterias);
        
        $countWordProductTitle = $this->container->getParameter('countWordProductTitle');
        
        return $this->render('SMFrontBundle:Company:view-all.html.twig', array(
            'entities' => $entities,
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
    
    /**
     * View product detail
     * 
     * @param type $slug
     * @return type 
     */
    public function detailAction($slug)
    {
        $countWordNewsIntro = $this->container->getParameter('countWordNewsIntro');
        $countWordNewsTitleList = $this->container->getParameter('countWordNewsTitleList');
        
        //Get branch id
        $id = Helper::getIdFromUrl($slug);
        $lang = $this->getDefaultLang();
        $entity = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CompanyLanguage")
                ->findByCompanyIdAndLang($id, $lang);
        
        return $this->render('SMFrontBundle:Company:detail.html.twig', array(
            'entity' => $entity,
            'urlHost' => $this->container->getParameter('host'),
            'countWordNewsIntro' => $countWordNewsIntro,
            'countWordNewsTitleList' => $countWordNewsTitleList,
            'uploadPath' => Utilities::getUploadPath(),
        ));
    }
}