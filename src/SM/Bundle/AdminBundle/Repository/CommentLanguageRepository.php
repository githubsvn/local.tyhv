<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * GroupsLanguageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentLanguageRepository extends EntityRepository
{

    /**
     * @param type $criteria criteria
     *
     * @return type
     */
    public function getTotal($criteria = array())
    {
        $rst = $this->findBy($criteria);

        return count($rst);
    }

    /**
     * @param type $productId productId
     *
     * @return type
     */
    public function findByCommentId($id)
    {
        $rst = array();
        if (!empty($id)) {
            $rst = $this->findBy(array('comment' => $id));
        }

        return $rst;
    }

    /**
     * @param type $productId productId
     *
     * @return type
     */
    public function findByCommentIdAndLang($id, $lang)
    {
        $rst = null;
        if (!empty($id)) {
            $rst = $this->findBy(array('comment' => $id, 'language' => $lang));
            if (!empty($rst[0])) {
                $rst = $rst[0];
            }
        }

        return $rst;
    }

    /**
     * Delete language by array id
     *
     * @param array $ids
     *
     * @return array
     */
    public function deleteByIds($ids = array())
    {
        $em = $this->getEntityManager();
        $rep = $em->getRepository('SMAdminBundle:Comment');

        $rst = array();

        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                if ($entity instanceof \SM\Bundle\AdminBundle\Entity\CommentLanguage) {
                    $catId = $entity->getComment()->getId();
                    $em->remove($entity);
                    //Get all product language by idComtype
                    //If to have 1 item we need to delete product too
                    //else we need delete product language
                    $lstCommentLangs = $this->findByCommentId($catId);
                    if (count($lstCommentLangs) == 1) {
                        if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                            $rst[] = $id;
                        }
                        $em->persist($entity);
                        //delete product too
                        $em->flush();
                        //delete product language
                        $rep->deleteByIds(array($catId));
                    } else {
                        if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                            $rst[] = $id;
                        }
                        //Onlye delete article language
                        $em->flush();
                    }
                }
            }
        }

        return $rst;
    }
    
    /**
     *
     * @param type $langId
     * @param type $productId
     * @param type $limit
     * @param type $offset
     * @param type $criteria
     * @param type $orders
     * @return array 
     */
    public function findByLangAndProductId($langId, $productId = '', $limit = null, $offset = null, $criteria = array(), $orders = array())
    {
        $rst = array();
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('cl');

            $qb->select('cl, c')
                    ->join('cl.comment', 'c')
                    ->join('c.products', 'p')
                    ->where('cl.language=:langId');

            if (!empty($limit)) {
                $qb->setMaxResults($limit);
            }

            if (!empty($offset)) {
                $qb->setFirstResult($offset);
            }

            if (!empty($productId)) {
                $qb->andWhere('c.products=:productId');
                $qb->setParameter('productId', $productId);
            }

            if (is_array($criteria) && count($criteria) > 0) {
                foreach ($criteria as $key => $cri) {
                    $qb->andWhere("c." . $cri['fieldName'] . " " . $cri['op'] . " " . " ?$key");

                    if ($cri['op'] == 'LIKE') {
                        $qb->setParameter($key, "%" . $cri['fieldValue'] . "%");
                    } else {
                        $qb->setParameter($key, $cri['fieldValue']);
                    }
                }
            }

            $qb->setParameter('langId', $langId);

            if (!empty($orders)) {
                $qb->orderBy($orders);
            } else if (is_array($orders) && count($orders) > 0) {
                foreach ($orders as $k => $v) {
                    $qb->orderBy($k, $v);
                }
            } else {
                $qb->orderBy('c.created_at', 'DESC');
            }

            //echo $qb->getQuery()->getSQL();die;
            return $qb->getQuery()->getResult();
        }

        return $rst;
    }
    
    /**
     *
     * @param type $langId
     * @param type $name
     * @param type $catId
     * @param type $criteria
     * @return type 
     */
    public function getTotalByLangAndProduct($langId, $productId = '', $criteria = array())
    {
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('cl');

            $qb->select('cl, c')
                    ->join('cl.comment', 'c')
                    ->join('c.products', 'p')
                    ->where('cl.language=:langId');

            if (!empty($limit)) {
                $qb->setMaxResults($limit);
            }

            if (!empty($offset)) {
                $qb->setFirstResult($offset);
            }

            if (!empty($productId)) {
                $qb->andWhere('c.products=:productId');
                $qb->setParameter('productId', $productId);
            }

            if (is_array($criteria) && count($criteria) > 0) {
                foreach ($criteria as $key => $cri) {
                    $qb->andWhere("c." . $cri['fieldName'] . " " . $cri['op'] . " " . " ?$key");

                    if ($cri['op'] == 'LIKE') {
                        $qb->setParameter($key, "%" . $cri['fieldValue'] . "%");
                    } else {
                        $qb->setParameter($key, $cri['fieldValue']);
                    }
                }
            }

            $qb->setParameter('langId', $langId);
            //echo $qb->getQuery()->getSQL();die;
            return count($qb->getQuery()->getResult());
        }
        return 0;
    }
}
