<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\Bundle\AdminBundle\Entity\Video;
use SM\Bundle\AdminBundle\Form\VideoType;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\Utilities;


/**
 * File controller.
 *
 */
class VideoController extends Controller
{
    /**
     * Lists all Products entities.
     *
     */
    public function indexAction($page, $lang)
    {
        if ($this->getRequest()->isMethod('POST')) {
            $_SESSION['lang'] = $this->getRequest()->request->get('language', '');
            $_SESSION['name'] = $this->getRequest()->request->get('name', '');
        }

        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $lang;
        $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';

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
                ->getRepository("SMAdminBundle:VideoLanguage")
                ->getTotalByLangAndName($lang, $name);

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:VideoLanguage")
                ->findByLangAndName($lang, $name, $perPage, ($page - 1) * $perPage);

        return $this->render('SMAdminBundle:Video:index.html.twig', array(
            'entities' => $entities,
            'lastPage' => $lastPage,
            'previousPage' => $previousPage,
            'currentPage' => $page,
            'nextPage' => $nextPage,
            'total' => $total,
            'lang' => intval($lang),
            'name' => $name,
            'langList' => $langList,
        ));
    }

    /**
     * Finds and displays a Products entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Video')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Products entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Video:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Products entity.
     *
     */
    public function newAction()
    {
        $entity = new Video();
        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $oLanguage = new \SM\Bundle\AdminBundle\Entity\VideoLanguage();
                $oLanguage->setLanguage($language);
                $oLanguage->setVideo($entity);
                $entity->addVideoLanguage($oLanguage);

                if ($language->getIsDefault()) {
                    $defaultLanguage = $language;
                }
            }
        }

        if (!$this->getRequest()->isMethod('POST')) {
            // set referrer redirect
            $session = $this->getRequest()->getSession();
            $session->set('referrer', $this->getRequest()->server->get('HTTP_REFERER'));
        }

        $form = $this->createForm(new VideoType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getVideoLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();
                    if (empty($name)) {
                        $entity->removeVideoLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                $entityManager->flush();

                $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_success', $this->get('translator')->trans('The operation is success'));

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                        $this->generateUrl('admin_video')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_error', $this->get('translator')->trans('The data input is invalid'));
            }
        }

        return $this->render('SMAdminBundle:Video:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
        ));
    }

    /**
     * Displays a form to edit an existing Products entity.
     *
     */
    public function editAction($id)
    {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:Video")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_error', $this->get('translator')->trans('Unable to find entity'));

            return $this->redirect($this->generateUrl('admin_video'));
        }

        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $oLanguage = new \SM\Bundle\AdminBundle\Entity\VideoLanguage();
                    $oLanguage->setLanguage($language);
                    $oLanguage->setVideo($entity);

                    $entity->addVideoLanguage($oLanguage);
                }
                if ($language->getIsDefault()) {
                    $defaultLanguage = $language;
                }
            }
        }

        if (!$this->getRequest()->isMethod('POST')) {
            // set referrer redirect
            $session = $this->getRequest()->getSession();
            $session->set('referrer', $this->getRequest()->server->get('HTTP_REFERER'));
        }

        $form = $this->createForm(new VideoType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getVideoLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();

                    if (empty($name)) {
                        $entity->removeVideoLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }
                $entityManager->flush();

                $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_success', $this->get('translator')->trans('The operation is success'));

                $referrer = $this->getRequest()->getSession()->get('referrer');
                if (!$referrer) {
                    return $this->redirect(
                                    $this->generateUrl('admin_video')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_success', $this->get('translator')->trans('The data input is invalid'));
            }
        }

        return $this->render('SMAdminBundle:Video:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
        ));

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
                ->getRepository("SMAdminBundle:VideoLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if ($rst) {
            $this->getRequest()
                     ->getSession()
                     ->getFlashBag()
                     ->add('sm_flash_success', $this->get('translator')->trans('The operation is success'));

            return $this->redirect(
                $this->generateUrl('admin_video')
            );
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
                ->getRepository("SMAdminBundle:VideoLanguage");

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

            return $this->redirect(
                $this->generateUrl('admin_video')
            );
        } else {

            return $this->redirect($referrer);
        }
    }
}