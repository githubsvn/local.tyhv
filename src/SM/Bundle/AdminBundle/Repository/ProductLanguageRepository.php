<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * ProductLanguageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductLanguageRepository extends EntityRepository
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
    public function findByProductId($productId)
    {
        $rst = array();
        if (!empty($productId)) {
            $rst = $this->findBy(array('product' => $productId));
        }

        return $rst;
    }

    /**
     * @param type $productId productId
     *
     * @return type
     */
    public function findByProductIdAndLang($id, $lang)
    {
        $rst = null;
        if (!empty($id)) {
            $rst = $this->findBy(array('product' => $id, 'language' => $lang));
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
        $repProducts = $em->getRepository('SMAdminBundle:Products');

        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $idProduct = $entity->getProduct()->getId();

                $em->remove($entity);

                //Get all product language by idComtype
                //If to have 1 item we need to delete product too
                //else we need delete product language
                $lstProductLangs = $this->findByProductId($idProduct);
                if (count($lstProductLangs) == 1) {
                    if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                        $rst[] = $id;
                    }
                    $em->persist($entity);
                    //delete product too
                    $em->flush();
                    //delete product language
                    $repProducts->deleteByIds(array($idProduct));
                } else {
                    if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                        $rst[] = $id;
                    }
                    //Onlye delete article language
                    $em->flush();
                }
            }
        }

        return $rst;
    }

    /**
     * Get relative product of branch
     */
    public function getRelateProductByBranchAndLang($id, $lang, $branchId, $limit = 5)
    {
        $criteria = array();
        $criteria[1] = array(
            'fieldName' => 'status',
            'fieldValue' => 1,
            'op' => '=',
        );
        $criteria[2] = array(
            'fieldName' => 'id',
            'fieldValue' => $id,
            'op' => '!=',
        );
        return $this->findByLangAndNameAndBranchAndProductGroup($lang, '', $branchId, $limit, null, $criteria);
    }

    /**
     *
     * @param type $lang
     * @param type $limit
     * @return type 
     */
    public function getHotProductByLangId($lang, $limit = 5)
    {
        $criteria = array();
        $criteria[1] = array(
            'fieldName' => 'status',
            'fieldValue' => 1,
            'op' => '=',
        );
        $criteria[2] = array(
            'fieldName' => 'hot',
            'fieldValue' => 1,
            'op' => '=',
        );

        return $this->findByLangAndNameAndBranchAndProductGroup($lang, null, null, $limit, null, $criteria);
    }

    /**
     * Find product by condition
     *
     * @param type $langId
     * @param type $name
     * @param type $branchId
     * @return array
     */
    public function findByLangAndNameAndBranchAndProductGroup($langId, $name = '', $branchId = '', $limit = null, $offset = null, $criteria = array(), $orders = '')
    {
        $rst = array();
        
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('pl');

            $qb->select('pl, p')
                    ->join('pl.product', 'p')
                    ->join('p.branch', 'b')
                    ->where('pl.language=:langId');
            
            if (!empty($limit)) {
                $qb->setMaxResults($limit);
            }

            if (!empty($offset)) {
                $qb->setFirstResult($offset);
            }
            
            if (is_array($branchId) && count($branchId) > 0) {
                $qb->andWhere($qb->expr()->in('p.branch', $branchId));
            } else {
                if (!empty($branchId)) {
                    $qb->andWhere('p.branch=:branchId');
                    $qb->setParameter('branchId', $branchId);
                }
            }

            if (!empty($name)) {
                $qb->andWhere('pl.name LIKE ?1');
                $qb->setParameter(1, "%$name%");
            }

            $qb->setParameter('langId', $langId);

            if (is_array($criteria) && count($criteria) > 0) {
                foreach ($criteria as $key => $cri) {
                    $qb->andWhere("p." . $cri['fieldName'] . " " . $cri['op'] . " " . " ?$key");

                    if ($cri['op'] == 'LIKE') {
                        $qb->setParameter($key, "%" . $cri['fieldValue'] . "%");
                    } else {
                        $qb->setParameter($key, $cri['fieldValue']);
                    }
                }
            }

            if (!empty($orders)) {
                $qb->orderBy($orders);
            } else if (is_array($orders) && count($orders) > 0) {
                foreach ($orders as $k => $v) {
                    $qb->orderBy($k, $v);
                }
            } else {
                $qb->orderBy('p.updated_at', 'DESC');
            }

            //echo $qb->getQuery()->getSQL();die;
            return $qb->getQuery()->getResult();
        }

        return $rst;
    }

    /**
     *
     * @param type $langId
     * @param type $limit
     * @param type $offset
     * @param type $orders
     * @return array 
     */
    public function getNewProduct($langId, $limit = null, $offset = null, $orders = '')
    {
        $rst = array();
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('pl');

            $qb->select('pl, p')
                    ->join('pl.product', 'p')
                    ->where('pl.language=:langId')
                    ->andWhere('p.status=1');

            if (!empty($limit)) {
                $qb->setMaxResults($limit);
            }

            if (!empty($offset)) {
                $qb->setFirstResult($offset);
            }

            $qb->setParameter('langId', $langId);

            if (!empty($orders)) {
                $qb->orderBy($orders);
            } else if (is_array($orders) && count($orders) > 0) {
                foreach ($orders as $k => $v) {
                    $qb->orderBy($k, $v);
                }
            } else {
                $qb->orderBy('p.updated_at', 'DESC');
            }

            //echo $qb->getQuery()->getSQL();die;
            return $qb->getQuery()->getResult();
        }

        return $rst;
    }

    /**
     * get total
     *
     * @param type $langId
     * @param type $name
     * @param type $typeId
     * @return int
     */
    public function getTotalByLangAndNameAndType($langId, $name = '', $branchId = '', $criteria = array())
    {
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('pl');

            $qb->select('pl, p')
                    ->join('pl.product', 'p')
                    ->join('p.branch', 'b')
                    ->where('pl.language=:langId');

            if (is_array($branchId) && count($branchId) > 0) {
                $qb->andWhere($qb->expr()->in('p.branch', $branchId));
            } else {
                if (!empty($branchId)) {
                    $qb->andWhere('p.branch=:branchId');
                    $qb->setParameter('branchId', $branchId);
                }
            }

            if (!empty($name)) {
                $qb->andWhere('pl.name LIKE ?1');
                $qb->setParameter(1, "%$name%");
            }

            $qb->setParameter('langId', $langId);

            if (is_array($criteria) && count($criteria) > 0) {
                foreach ($criteria as $key => $cri) {
                    $qb->andWhere("p." . $cri['fieldName'] . " " . $cri['op'] . " " . " ?$key");

                    if ($cri['op'] == 'LIKE') {
                        $qb->setParameter($key, "%" . $cri['fieldValue'] . "%");
                    } else {
                        $qb->setParameter($key, $cri['fieldValue']);
                    }
                }
            }

            return count($qb->getQuery()->getResult());
        }
        return 0;
    }

}
