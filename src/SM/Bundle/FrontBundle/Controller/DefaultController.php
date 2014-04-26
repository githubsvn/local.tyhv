<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Utilities;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\CounterHelper;
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

    private $counter;
    /**
     * 
     */
    public function __construct()
    {
        //to count user visiting website
        $this->counter = new CounterHelper();
        
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
        $lang = $this->getDefaultLang();

        $perNewsHotItemPage = Utilities::getConfig('per_video_item');
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:VideoLanguage")
                ->getHotVideo($lang, $perNewsHotItemPage, 0);

        $countWordNewsTitle = $this->container->getParameter('countWordNewsTitle');

        return $this->render('SMFrontBundle:Default:video.html.twig', array(
            'entities' => $entities,
            'countWordNewsTitle' => $countWordNewsTitle
        ));
    }

    /**
     * To count visitor
     * 
     * @return type 
     */
    public function counterAction()
    {
        
        return $this->render('SMFrontBundle:Default:counter.html.twig', array('counter' => $this->counter));
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
        $idFooterLogo = Utilities::getConfig('id_footer_logo_img ');
        $objMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media')
                ->find($idFooterLogo);
        
        $logoFooterImg = '/web/front/images/logo-toi-yeu-hang-viet-2.png';
        $logoFooterLink = "#";
        if (!is_null($objMedia)) {
            $logoFooterImg = $this->uploadPath . $objMedia->getName();
            $logoFooterLink = $objMedia->getLink();
        }
        
        $footerAdd = Utilities::getConfig('footer_add');
        $phone = Utilities::getConfig('phone');
        $fax = Utilities::getConfig('fax');
        $infoEmail = Utilities::getConfig('info_email');
        $facebookPage = Utilities::getConfig('facebook_page');
        $twitterPage = Utilities::getConfig('twitter_page');
        $youtubePage = Utilities::getConfig('youtube_page');
        $total = $this->counter->getTotal() . '';
        $arrCounter = array();
        for ($i = 0; $i < (strlen($total)); $i ++) {
            $arrCounter[] = $total[$i];
        }
        return $this->render('SMFrontBundle:Default:footer.html.twig', array(
            'footerAdd' => $footerAdd,
            'phone' => $phone,
            'fax' => $fax,
            'infoEmail' => $infoEmail,
            'facebookPage' => $facebookPage,
            'twitterPage' => $twitterPage,
            'youtubePage' => $youtubePage,
            'arrCounter' => $arrCounter,
            'logoFooterImg' => $logoFooterImg,
            'logoFooterLink' => $logoFooterLink
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

        $idLogo = Utilities::getConfig('id_logo_img');
        $idBannerRight = Utilities::getConfig('id_banner_header ');
        
        $objMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media')
                ->find($idLogo);
        
        $logoImg = '/web/front/images/logo-toi-yeu-hang-viet.png';
        $logoLink = "#";
        if (!is_null($objMedia)) {
            $logoImg = $this->uploadPath . $objMedia->getName();
            $logoLink = $objMedia->getLink();
        }
        
        $objMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media')
                ->find($idBannerRight);
        $bannerRightImg = '/web/front/images/advertise-vietnam-airlines.png';
        $bannerRightLink = "#";
        if (!is_null($objMedia)) {
            $bannerRightImg = $this->uploadPath . $objMedia->getName();
            $bannerRightLink = $objMedia->getLink();
        }
        
        return $this->render('SMFrontBundle:Default:header.html.twig', array(
                    'hotLine' => $hotLine,
                    'advNumber' => $advNumber,
                    'name' => $name,
                    'logoImg' => $logoImg,
                    'logoLink' => $logoLink,
                    'bannerRightImg' => $bannerRightImg,
                    'bannerRightLink' => $bannerRightLink,
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
        $menuTop = $repMenu->getOnlyParentMenus($mnuPosTop, $lang);
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
        $urlHost = $this->container->getParameter('host');
        $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        $entities = $this->getLeftMenuItems();
        return $this->render('SMFrontBundle:Default:left-menu.html.twig', array(
            'entities' => $entities,
            'urlHost' => $urlHost,
            'currentUrl' => $currentUrl
        ));
    }
    
    public function getLeftMenuItems()
    {
        $urlHost = $this->container->getParameter('host');
        $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        $partMenus = explode("/", $currentUrl);
        
        if (!empty($partMenus[1]) && in_array($partMenus[1], array('product'))) {
            $slug = $currentUrl = $this->getRequest()->getUri();
            $currentBranchId = Helper::getIdFromUrl($slug); //to get current branch id
        } else {
            $currentBranchId = Utilities::getConfig('menu_left_parent_id_product');
        }
        
        $entities = $this->getDoctrine()
                    ->getRepository("SMAdminBundle:Branch")
                    ->getChildren($currentBranchId);
        
        $lang = $this->getDefaultLang();
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        foreach ($entities as $ent) {
            $ent->setLanguage($currentLanguage);
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
    
    public function metaAction()
    {
        $metaDes = Utilities::getConfig('meta_description');
        $metaKeywords = Utilities::getConfig('meta_keywords');
        $metaContent = Utilities::getConfig('meta_content');
        return $this->render('SMFrontBundle:Default:meta.html.twig', array(
            'metaDes' => $metaDes,
            'metaKeywords' => $metaKeywords,
            'metaContent' => $metaContent,
        ));
    }
    
    public function footerMenuAction()
    {
        $lang = $this->getDefaultLang();
        $currentUrl = $this->getRequest()->getUri();
        $menus = array();
        $repMenu = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Menu');

        $mnuPosBottom = $this->container->getParameter('menu_position_bottom');
        $menuBottom = $repMenu->getOptionParent($mnuPosBottom, $lang);
        unset($menuBottom[0]); //unset for menu Lua Chon
        $menuBottom = $this->removeHostUrl($menuBottom);

        $urlHost = $this->container->getParameter('host');
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        //$currentUrl = rtrim("/", $currentUrl);
        return $this->render('SMFrontBundle:Default:footer-menu.html.twig', array(
                    'menuBottom' => $menuBottom,
                    'currentUrl' => $currentUrl,
                    'urlHost' => $urlHost
        ));
    }
    
    public function leftAdsAction()
    {
        $idLeftAds = Utilities::getConfig('left_ads_id_img');
        $idRightAds = Utilities::getConfig('right_ads_id_img ');
        
        $objMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media')
                ->find($idLeftAds);
        
        $leftImg = '/web/front/images/120x600.jpg';
        $leftLink = "#";
        if (!is_null($objMedia)) {
            $leftImg = $this->uploadPath . $objMedia->getName();
            $leftLink = $objMedia->getLink();
        }
        
        $objMedia = $this->getDoctrine()
                ->getRepository('SMAdminBundle:Media')
                ->find($idRightAds);
        $rightImg = '/web/front/images/120x600.jpg';
        $rightLink = "#";
        if (!is_null($objMedia)) {
            $rightImg = $this->uploadPath . $objMedia->getName();
            $rightLink = $objMedia->getLink();
        }
        
        return $this->render('SMFrontBundle:Default:left-ads.html.twig', array(
            'leftImg' => $leftImg,
            'leftLink' => $leftLink,
            'rightImg' => $rightImg,
            'rightLink' => $rightLink,
        ));
    }
}
