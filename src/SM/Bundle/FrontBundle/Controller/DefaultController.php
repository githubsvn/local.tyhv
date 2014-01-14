<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Utilities;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Entity\Comment;
use SM\Bundle\AdminBundle\Form\CommentType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

class DefaultController extends Controller
{

    private $uploadDir;
    private $thumbDir;
    private $uploadPath;
    private $thumbPath;
    private $host;

    /**
     * 
     */
    public function __construct()
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $dirRoot = Utilities::getRootDir();
        $this->uploadDir = $dirRoot . $container->getParameter('upload');
        $this->thumbDir = $dirRoot . $container->getParameter('thumbUpload');
        $this->host = $container->getParameter('host');
        $this->uploadPath = $this->host . $container->getParameter('upload');
        $this->thumbPath = $this->host . $container->getParameter('thumbUpload');
    }

    /**
     * Render content for home page
     * 
     * @return type 
     */
    public function indexAction(Request $request)
    {
        $repConfig = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Config');
        $repConfig->updateByVisitor();

        return $this->render('SMFrontBundle:Default:index.html.twig');
        //return $this->render('SMFrontBundle:Default:constructor.html.twig');
    }

    /**
     * Remove url host that to set active for menu
     * 
     * @param type $menus
     * @return type 
     */
    private function removeHostUrl($menus)
    {
        $urlHost = $this->container->getParameter('host');
        $rst = array();
        if (is_array($menus) && count($menus) > 0) {
            foreach ($menus as $mnu) {
                $mnu->url = str_replace($urlHost, '', $mnu->url);
                $rst[] = $mnu;
            }
        }
        return $rst;
    }

    /**
     * Render image slide
     * 
     * @return type 
     */
    public function slideAction()
    {
        //The quantity will be slide on home page
        $numberSlideShow = $this->container->getParameter('number_slide_show');

        //To get media category id will be slide
        $slideId = Utilities::getConfig('image_slide_id');
        //The slide images will be get follow the media category id 'image_slide_id'
        $repMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media');
        $entities = $repMedia->getList($numberSlideShow, null, array('active' => 1, 'category' => $slideId), array('created_at' => 'DESC'));

        return $this->render('SMFrontBundle:Default:slide.html.twig', array(
                    'entities' => $entities,
                    'path' => $this->uploadPath
        ));
    }

    public function videoAction()
    {
        return $this->render('SMFrontBundle:Default:video.html.twig', array(
        ));
    }

    /**
     * To count visitor
     * 
     * @return type 
     */
    public function counterAction()
    {
        return $this->render('SMFrontBundle:Default:counter.html.twig', array('count' => 999));
    }

    public function advertisementAction()
    {
        //The quantity will be slide on home page
        $numberAdvFront = $this->container->getParameter('number_advertisement_front');

        //To get media category id will be slide
        $advId = Utilities::getConfig('image_advertisement_id');

        //The slide images will be get follow the media category id 'image_slide_id'
        $repMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media');
        $entities = $repMedia->getList($numberAdvFront, null, array('active' => 1, 'category' => $advId), array('created_at' => 'DESC'));

        return $this->render('SMFrontBundle:Default:advertisement.html.twig', array(
                    'entities' => $entities,
                    'path' => $this->uploadPath
        ));
    }

    /**
     * Return support block
     * 
     * @return type 
     */
    public function supportAction()
    {
        $skypes = Utilities::getConfig('support_skype');
        $yahoos = Utilities::getConfig('support_yahoo');
        return $this->render('SMFrontBundle:Default:support.html.twig', array(
                    'skypes' => $skypes,
                    'yahoos' => $yahoos
        ));
    }

    /**
     * Render html fot block Footer
     * 
     * @return type 
     */
    public function footerAction()
    {
        $infos = array();
        return $this->render('SMFrontBundle:Default:footer.html.twig', array(
                    'infos' => $infos
        ));
    }

    /**
     * change language
     *
     * @param type $lang Language key
     *
     * @return type
     */
    public function changeLanguageAction($lang)
    {
        $request = $this->getRequest();
        $session = $this->get('session');
        $locale = strtolower($lang);
        $session->set('_locale', $locale);
        $referer = $request->headers->get('referer');
        if (empty($referer)) {
            return $this->redirect('/');
        }

        return $this->redirect($referer);
    }

    public function showContactAction()
    {
        return $this->render('SMFrontBundle:Default:contact-show.html.twig', array());
    }

    public function headerAction()
    {
        $hotLine = Utilities::getConfig('hot_line');
        $advNumber = Utilities::getConfig('advertisement_number');
        $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        
        return $this->render('SMFrontBundle:Default:header.html.twig', array(
                    'hotLine' => $hotLine,
                    'advNumber' => $advNumber,
                    'name' => $name,
        ));
    }

    public function languageAction()
    {
        return $this->render('SMFrontBundle:Default:language.html.twig', array());
    }

    public function topMenuAction()
    {
        $lang = $this->getDefaultLang();
        
        $currentUrl = $this->getRequest()->getUri();
        $menus = array();

        $repMenu = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Menu');

        $mnuPosTop = $this->container->getParameter('menu_position_top');
        $menuTop = $repMenu->getOptionParent($mnuPosTop, $lang);
        unset($menuTop[0]); //unset for menu Lua Chon
        $menuTop = $this->removeHostUrl($menuTop);

        $urlHost = $this->container->getParameter('host');
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        //$currentUrl = rtrim("/", $currentUrl);
        return $this->render('SMFrontBundle:Default:top-menu.html.twig', array(
                    'menuTop' => $menuTop,
                    'currentUrl' => $currentUrl,
                    'urlHost' => $urlHost
        ));
    }

    public function leftMenuAction()
    {
        $isLeftProductMenu = $this->checkMenuLeftIsProductMenu();
        if ($isLeftProductMenu) {
            $idLeftMenu = Utilities::getConfig('menu_left_parent_id_product');
        } else {
            $idLeftMenu = Utilities::getConfig('menu_left_parent_id_speciality_product');
        }
        $entities = $this->getMenuItemsLeft($idLeftMenu);
        $urlHost = $this->container->getParameter('host');
        $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        return $this->render('SMFrontBundle:Default:left-menu.html.twig', array(
            'entities' => $entities,
            'urlHost' => $urlHost,
            'currentUrl' => $currentUrl
        ));
    }
    
    /**
     * Check left menu is product menu or special product menu
     * 
     * @return boolean
     */
    private function checkMenuLeftIsProductMenu()
    {
        $isLeftProductMenu = false;
        
        $idRootProduct = Utilities::getConfig('menu_left_parent_id_product');

        $urlHost = $this->container->getParameter('host');
        $slug = $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        $partMenus = explode("/", $currentUrl);
        
        if (!empty($partMenus[1]) && in_array($partMenus[1], array('news', 'company'))) {
            $isLeftProductMenu = true; //Left menu is product menu
        } elseif (!empty($partMenus[1]) && in_array($partMenus[1], array('product'))) {
            $currentBranchId = 0;
            
            if (!empty($partMenus[2]) && in_array($partMenus[2], array('view-branch'))) {
                //We're viewing branch product
                $currentBranchId = Helper::getIdFromUrl($slug); //to get current branch id
            } elseif (!empty($partMenus[2]) && in_array($partMenus[2], array('detail'))) {
                //We're viewing detail product
                $currentDetailProductId = Helper::getIdFromUrl($slug); //get current product id
                $entity = $this->getDoctrine()
                        ->getRepository("SMAdminBundle:Products")
                        ->find($currentDetailProductId);    //get entity product
                
                $branch = $entity->getBranch();
                $currentBranchId = $branch->getId(); //get current branch id follow product id
            }
            
            //After get current branch id, we need to get all id of left menu product
            $allProductId = $this->getDoctrine()
                    ->getRepository("SMAdminBundle:Branch")
                    ->getAllChildrenIds($idRootProduct);
            //Check if current id belong left menu or not
            if (in_array($currentBranchId, $allProductId)) {
                $isLeftProductMenu = true;
            }
        } elseif (empty($partMenus[0]) && empty($partMenus[1])) {
            //Current page is home page
            $isLeftProductMenu = true;
        }

        return $isLeftProductMenu;
    }

    private function getMenuItemsLeft($idLeftMenu)
    {
        $lang = $this->getDefaultLang();
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $criteria = array();
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');
        $criteria[] = array('op' => '=', 'fieldName' => 'parent', 'fieldValue' => $idLeftMenu);
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Branch")
                ->getList(null, null, $criteria, array('lft' => 'ASC'));
        foreach ($entities as $theCat) {
            $theCat->setLanguage($currentLanguage);
        }
        return $entities;
    }

    public function pricesMarketAction()
    {
        $lang = $this->getDefaultLang();
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ItemTypeLanguage")
                ->getListItemByCat($lang);
        return $this->render('SMFrontBundle:Default:prices-market.html.twig', array(
            'entities' => $entities
        ));
    }

    public function saleProductAction()
    {
        $lang = $this->getDefaultLang();

        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        $criterias[1] = array('fieldName' => 'promotion', 'op' => '=', 'fieldValue' => 1);
        //The number of product will be displayed in section 'Dac San Moi'
        $perNewSaleProduct = Utilities::getConfig('per_item_sale_product');
        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, '', '', $perNewSaleProduct, 0, $criterias);

        return $this->render('SMFrontBundle:Default:product-sale.html.twig', array(
                    'entities' => $entities,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath(),
                    'countWordProductTitle' => $this->container->getParameter('countWordProductTitle'),
        ));
    }

    public function registerGetProductAction()
    {
        return $this->render('SMFrontBundle:Default:register-get-product.html.twig', array(
        ));
    }

    public function hotNewsAction()
    {
        $lang = $this->getDefaultLang();

        $perNewsHotItemPage = $this->container->getParameter('per_item_news_hot_front');
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:NewsLanguage")
                ->getHotNews($lang, $perNewsHotItemPage, 0);

        $countWordNewsTitle = $this->container->getParameter('countWordNewsTitle');

        return $this->render('SMFrontBundle:Default:hot-news.html.twig', array(
                    'entities' => $entities,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath(),
                    'countWordNewsTitle' => $countWordNewsTitle
        ));
    }

    public function companyAction()
    {
        $lang = $this->getDefaultLang();
        $urlHost = $this->container->getParameter('host');
        $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        $partMenus = explode("/", $currentUrl);
        if (empty($partMenus[0]) && empty($partMenus[1])) {
            $perItemPage = Utilities::getConfig('per_company_item_homepage');
        } else {
            $perItemPage = Utilities::getConfig('per_company_item_homepage') - 1;
        }
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CompanyLanguage")
                ->getNewCompany($lang, $perItemPage);

        $countWordNewsTitle = $this->container->getParameter('countWordNewsTitle');

        return $this->render('SMFrontBundle:Default:company.html.twig', array(
                    'entities' => $entities,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath()
        ));
    }

    /**
     *
     * @return type 
     */
    public function hotProductAction()
    {
        $lang = $this->getDefaultLang();

        $perNewHotProduct = $this->container->getParameter('per_item_new_product_front');
        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getHotProductByLangId($lang, $perNewHotProduct);

        return $this->render('SMFrontBundle:Default:hot-product.html.twig', array(
                    'entities' => $entities,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath(),
                    'countWordProductTitle' => $this->container->getParameter('countWordProductTitle'),
        ));
    }

    /**
     *
     * @return type
     */
    public function topProductAction()
    {
        $lang = $this->getDefaultLang();

        $perNewHotProduct = Utilities::getConfig('per_product_item_homepage');

        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getNewProduct($lang, $perNewHotProduct, 0);
        $topEnt = null;
        if (!empty($entities[0])) {
            $topEnt = $entities[0];
            unset($entities[0]);
        }

        return $this->render('SMFrontBundle:Default:top-product.html.twig', array(
                    'entities' => $entities,
                    'topEnt' => $topEnt,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath(),
                    'countWordProductTitle' => $this->container->getParameter('countWordProductTitle'),
        ));
    }

    public function relativeProductAction()
    {
        return $this->render('SMFrontBundle:Default:relative-product.html.twig', array(
        ));
    }

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

    public function newProductAction()
    {
        $lang = $this->getDefaultLang();

        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);
        //The number of product will be displayed in section 'Dac San Moi'
        $perNewItem = Utilities::getConfig('per_new_product_item');

        $countWordProductTitle = $this->container->getParameter('countWordProductTitle');

        //Get list product by BranchId
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, '', '', $perNewItem, 0, $criterias);

        return $this->render('SMFrontBundle:Default:new-product.html.twig', array(
                    'entities' => $entities,
                    'thumbPath' => Utilities::getThumbPath(),
                    'uploadPath' => Utilities::getUploadPath(),
                    'countWordProductTitle' => $countWordProductTitle
        ));
    }

    public function formCommentAction()
    {
        $currentUrl = $this->getRequest()->getUri();
        $productId = Helper::getIdFromUrl($currentUrl);
        return $this->render('SMFrontBundle:Default:form-comment.html.twig', array(
                    'productId' => $productId,
        ));
    }

    /**
     * 
     */
    public function newCommmentAction()
    {
        $rst = '0';
        if (!empty($_POST['title'])) {
            $lang = $this->getDefaultLang();
            $currentLanguage = $this->getDoctrine()
                    ->getRepository("SMAdminBundle:Language")
                    ->find($lang);

            $entity = new Comment();
            $currUser = $this->get('security.context')->getToken()->getUser();
            $entity->setCreated($currUser);
            $entity->setUpdated($currUser);
            $entity->setStatus(0);
            $product = $this->getDoctrine()
                    ->getRepository("SMAdminBundle:Products")
                    ->find($_POST['product']);
            $entity->setProducts($product);

            $cLanguage = new \SM\Bundle\AdminBundle\Entity\CommentLanguage();
            $cLanguage->setTitle($_POST['title']);
            $cLanguage->setName($_POST['name']);
            //$cLanguage->setEmail($_POST['email']);
            $cLanguage->setContent($_POST['content']);
            $cLanguage->setLanguage($currentLanguage);
            $cLanguage->setComment($entity);

            $entityManager = $this->getDoctrine()->getEntityManager();
            $entityManager->persist($entity);
            $entityManager->persist($cLanguage);
            $entityManager->flush();
            if ($entity->getId()) {
                $rst = '1';
            }
        }
        echo $rst;
        die;
    }

    public function listCommentAction($page = 1)
    {
        //Get branch id
        $currentUrl = $this->getRequest()->getUri();
        $productId = Helper::getIdFromUrl($currentUrl);

        $lang = $this->getDefaultLang();

        $criterias = array();
        $criterias[1] = array('fieldName' => 'status', 'op' => '=', 'fieldValue' => 1);

        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CommentLanguage")
                ->getTotalByLangAndProduct($lang, $productId, $criterias);

        //Total of item for each page
        $perItemPage = $this->container->getParameter('per_item_comment_front');
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
        $totalRange = ceil($total / ($perItemPage * $perPage));
        //Get current range of page
        $currentPageRange = ceil(($page * $perItemPage) / ($perItemPage * $perPage));
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
                ->getRepository("SMAdminBundle:CommentLanguage")
                ->findByLangAndProductId($lang, $productId, $perItemPage, ($page - 1) * $perItemPage, $criterias);
        $topEnt = null;
        if (!empty($entities[0])) {
            $topEnt = $entities[0];
        }

        $countWordNewsIntro = $this->container->getParameter('countWordNewsIntro');
        $countWordNewsTitleList = $this->container->getParameter('countWordNewsTitleList');

        return $this->render('SMFrontBundle:Default:list-comment.html.twig', array(
                    'entities' => $entities,
                    'topEnt' => $topEnt,
                    'totalRange' => $totalRange,
                    'currentPage' => $page,
                    'currentPageRange' => $currentPageRange,
                    'startPageOfCurrentRange' => $startPageOfCurrentRange,
                    'previousPage' => $previousPage,
                    'nextPage' => $nextPage,
                    'perPage' => $perPage,
                    'totalPage' => $totalPage,
                    'total' => $total,
                    'countWordNewsIntro' => $countWordNewsIntro,
                    'countWordNewsTitleList' => $countWordNewsTitleList,
        ));
    }

    public function sendEmailAction()
    {
        if (empty($_POST['email'])) {
            echo '1';
            die;
        }

        $adminEmail = Utilities::getConfig('admin_email');
        $body = $this->renderView('SMFrontBundle:Default:template-email-to-admin.html.twig', array('email' => $_POST['email'])
        );

        $message = \Swift_Message::newInstance()
                ->setContentType("text/html")
                ->setSubject('Đăng ký email nhận sản phẩm')
                ->setFrom($adminEmail)
                ->setTo($adminEmail)
                ->setBody($body);
        $this->get('mailer')->send($message);
        echo '1';
        die;
    }
    
    public function feedbackAction()
    {
        return $this->render('SMFrontBundle:Default:feedback.html.twig', array(
        ));
    }
}
