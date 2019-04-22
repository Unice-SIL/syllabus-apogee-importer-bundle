<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ElementPedagogiRepository
 * @package UniceSIL\SyllabusApogeeImporterBundle\Repository
 */
class ElementPedagogiRepository extends EntityRepository
{
    /**
     * @param array $natures
     * @return mixed
     */
    public function findLeafByNatures(array $natures){
        $qb = $this->createQueryBuilder('elp');
        $qb
            ->where('elp.codElp NOT IN (SELECT ere.codElpPere FROM UniceSILSyllabusApogeeImporterBundle:ElpRegroupeElp ere WHERE ere.codElpPere=elp.codElp)')
            ->andWhere($qb->expr()->eq('elp.etaElp', ':etaElp'))
            ->andWhere($qb->expr()->eq('elp.temSusElp', ':temSusElp'))
            ->andWhere($qb->expr()->in('elp.codNel', ':natures'))
            ->setParameter('etaElp', 'O')
            ->setParameter('temSusElp', 'N')
            ->setParameter('natures', $natures);
        return $qb->getQuery()->getResult();
    }

    /**
     * @param string $codlElp
     * @return mixed
     */
    public function findParents(string $codlElp){
        $qb = $this->createQueryBuilder('elp');
        $qb
            ->innerJoin('UniceSILSyllabusApogeeImporterBundle:ElpRegroupeElp', 'ere', 'WITH', 'ere.codElpPere = elp.codElp')
            ->where($qb->expr()->eq('ere.codElpFils', ':codElpFils'))
            ->andWhere($qb->expr()->eq('ere.etaElpFils', ':etaElpFils'))
            ->andWhere($qb->expr()->eq('ere.etaElpPere', ':etaElpPere'))
            ->andWhere($qb->expr()->not($qb->expr()->eq('ere.temSusElpFils', ':temSusElpFils')))
            ->andWhere($qb->expr()->not($qb->expr()->eq('ere.temSusElpPere', ':temSusElpPere')))
            ->andWhere($qb->expr()->eq('elp.etaElp', ':etaElp'))
            ->andWhere($qb->expr()->eq('elp.temSusElp', ':temSusElp'))
            ->setParameter('codElpFils', $codlElp)
            ->setParameter('etaElpFils', 'O')
            ->setParameter('etaElpPere', 'O')
            ->setParameter('temSusElpFils', 'O')
            ->setParameter('temSusElpPere', 'O')
            ->setParameter('etaElp', 'O')
            ->setParameter('temSusElp', 'N');
        return $qb->getQuery()->getResult();
    }
}