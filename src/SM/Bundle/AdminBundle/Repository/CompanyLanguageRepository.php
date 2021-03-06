<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * CompanyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompanyLanguageRepository extends EntityRepository
{
    /**
     * @param type $criteria criteria
     *
     * @return type
     */
    public function getTotal($criteria = array()) {
        $rst = $this->findBy($criteria);

        return count($rst);
    }

    /**
     * @param type $companyId comtypeId
     *
     * @return type
     */
    public function findByCompanyId($companyId) {
        $rst = array();
        if (!empty($companyId)) {
            $rst = $this->findBy(array('company' => $companyId));
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
    public function deleteByIds($ids = array()) {
        $em = $this->getEntityManager();
        $repComtype = $em->getRepository('SMAdminBundle:Company');

        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $idCom = $entity->getCompany()->getId();

                $em->remove($entity);

                //Get all company type language by idComtype
                //If to have 1 item we need to delete company type too
                //else we need delete company type language
                $lstComtypeLangs = $this->findByCompanyId($idCom);
                if (count($lstComtypeLangs) == 1) {
                    if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                        $rst[] = $id;
                    }
                    $em->persist($entity);
                    //delete article too
                    $em->flush();
                    //delete article language
                    $repComtype->deleteByIds(array($idCom));
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
     * find company language by language, name and type
     *
     * @param type $langId
     * @param type $name
     * @param type $typeId
     * @param array $criteria
     * @return array
     */
    public function findByLangAndNameAndType($langId, $name = '', $typeId = '', $limit = null, $offset = null, $criteria = array())
    {
        $rst = array();
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('cl');

            $qb->select('cl, c')
                    ->join('cl.company', 'c')
                    ->where('cl.language=:langId');

            if (!empty($limit)) {
                $qb->setMaxResults($limit);
            }

            if (!empty($offset)) {
                $qb->setFirstResult($offset);
            }

            if (!empty($typeId)) {
                $qb->andWhere('c.type=:typeId');
                $qb->setParameter('typeId', $typeId);
            }

            if (!empty($name)) {
                $qb->andWhere('cl.name LIKE ?1');
                $qb->setParameter(1, "%$name%");
            }

            $qb->setParameter('langId', $langId);
            
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
            
            $qb->orderBy('c.updated_at', 'DESC');
            //echo $qb->getQuery()->getSQL();die;
            return $qb->getQuery()->getResult();
        }

        return $rst;
    }

    /**
     * @param type $productId productId
     *
     * @return type
     */
    public function findByCompanyIdAndLang($id, $lang)
    {
        $rst = null;
        if (!empty($id)) {
            $rst = $this->findBy(array('company' => $id, 'language' => $lang));
            if (!empty($rst[0])) {
                $rst = $rst[0];
            }
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
    public function getTotalByLangAndNameAndType($langId, $name = '', $typeId = '', $criteria = array())
    {
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('cl');

            $qb->select('cl, c')
                    ->join('cl.company', 'c')
                    ->where('cl.language=:langId');

            if (!empty($typeId)) {
                $qb->andWhere('c.type=:typeId');
                $qb->setParameter('typeId', $typeId);
            }

            if (!empty($name)) {
                $qb->andWhere('cl.name LIKE ?1');
                $qb->setParameter(1, "%$name%");
            }

            $qb->setParameter('langId', $langId);
            
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
            
            return count($qb->getQuery()->getResult());
        }
        return 0;
    }
    
    /**
     *
     * @param type $langId
     * @param type $limit
     * @param type $offset
     * @param type $orders
     * @return array 
     */
    public function getNewCompany($langId, $limit = null, $offset = null, $orders = '')
    {
        $rst = array();
        if (!empty($langId)) {
            $qb = $this->createQueryBuilder('cl');

            $qb->select('cl, c')
                    ->join('cl.company', 'c')
                    ->where('cl.language=:langId')
                    ->andWhere('c.status=1');

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
                $qb->orderBy('c.created_at', 'DESC');
            }

            //echo $qb->getQuery()->getSQL();die;
            return $qb->getQuery()->getResult();
        }

        return $rst;
    }
}
