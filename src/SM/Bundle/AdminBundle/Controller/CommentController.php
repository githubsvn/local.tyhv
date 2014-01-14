<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\Bundle\AdminBundle\Entity\News;
use SM\Bundle\AdminBundle\Form\NewsType;
use SM\Bundle\AdminBundle\Utilities\Utilities;
use SM\Bundle\AdminBundle\Utilities\Helper;

/**
 * News controller.
 *
 */
class CommentController extends Controller
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
        $this->uploadPath = $container->getParameter('upload');
        $this->host = $this->host . $container->getParameter('host');
        $this->thumbPath = $this->host . $container->getParameter('thumbUpload');
    }

    /**
     * Lists all Products entities.
     *
     */
    public function indexAction($product, $page, $lang)
    {
        if ($this->getRequest()->isMethod('POST')) {
            $_SESSION['lang'] = $this->getRequest()->request->get('language', '');
            $_SESSION['name'] = $this->getRequest()->request->get('name', '');
            $_SESSION['product'] = $this->getRequest()->request->get('product', null);
        }

        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $lang;
        $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $productId = isset($_SESSION['product']) ? $_SESSION['product'] : $product;
        $_SESSION['product'] = $productId;
                
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

        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);

        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CommentLanguage")
                ->getTotalByLangAndProduct($lang, $productId);

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CommentLanguage")
                ->findByLangAndProductId($lang, $productId, $perPage, ($page - 1) * $perPage);
        
        //Get branch and product group
        $criteria = array('status'=> '1');
        $repProducts = $this->getDoctrine()->getRepository('SMAdminBundle:Products');
        $optProducts = $repProducts->getList(null, null, $criteria, array('id' => 'ASC'));
        foreach ($optProducts as $oItem) {
            $oItem->setLanguage($currentLanguage);
        }

        return $this->render('SMAdminBundle:Comment:index.html.twig', array(
            'entities' => $entities,
            'lastPage' => $lastPage,
            'previousPage' => $previousPage,
            'currentPage' => $page,
            'nextPage' => $nextPage,
            'total' => $total,
            'lang' => intval($lang),
            'name' => $name,
            'productId' => $productId,
            'langList' => $langList,
            'optProducts' => $optProducts,
        ));
    }

    /**
     * Finds and displays a Products entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException($this->get('translator')->trans('Unable to find entity'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:News:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Products entity.
     *
     */
    public function changeStatusAction($product, $id, $status)
    {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:Comment")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()
                    ->getSession()
                    ->getFlashBag()
                    ->add('sm_flash_error', $this->get('translator')->trans('Unable to find entity'));

            return $this->redirect($this->generateUrl('admin_comment', array('product' => $product)));
        }

        $entity->setStatus($status);
        $entityManager = $this->getDoctrine()->getEntityManager();
        $entityManager->persist($entity);
        $entityManager->flush();
                
        return $this->redirect($this->generateUrl('admin_comment', array('product' => $product)));
   }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request request
     * @param int                                       $id      the id
     *
     * @return type
     */
    public function deleteAction(Request $request, $id)
    {
        $rep = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CommentLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if ($rst) {

            $this->getRequest()
                    ->getSession()
                    ->getFlashBag()
                    ->add('sm_flash_success', $this->get('translator')->trans('The operation is success'));

            return $this->redirect($this->generateUrl('admin_comment', array('product' => $product)));
        } else {
            $this->getRequest()
                    ->getSession()
                    ->getFlashBag()
                    ->add('sm_flash_error', $this->get('translator')->trans('The operation is fail'));

            return $this->redirect($referrer);
        }
    }

    /**
     * Delete all item
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     */
    public function deleteAllAction(Request $request)
    {
        $id = $request->get('checklist');
        $rep = $this->getDoctrine()
                ->getRepository("SMAdminBundle:CommentLanguage");

        $rst = $rep->deleteByIds($id);

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if ($rst) {
            $this->getRequest()
                    ->getSession()
                    ->getFlashBag()
                    ->add('sm_flash_success', $this->get('translator')->trans('The operation is success'));
        } else {
            $this->getRequest()
                    ->getSession()
                    ->getFlashBag()
                    ->add('sm_flash_error', $this->get('translator')->trans('The operation is fail'));
        }

        if (!$referrer) {

            return $this->redirect($this->generateUrl('admin_comment', array('product' => $product)));
        } else {

            return $this->redirect($referrer);
        }
    }
    
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param type $product
     * @param type $status
     * @return type
     */
    public function changeStatusAllAction(Request $request, $product, $status)
    {
        $ids = $request->get('checklist');
        if (is_array($ids) && count($ids) > 0) {
            foreach ($ids as $id) {
                $entityLang = $this->getDoctrine()
                                ->getRepository("SMAdminBundle:CommentLanguage")
                                ->find($id);
                $entity = $entityLang->getComment();
                $entity->setStatus($status);
                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
            }
            $entityManager->flush();
        }

        return $this->redirect($this->generateUrl('admin_comment', array('product' => $product)));
    }
    
    
}
