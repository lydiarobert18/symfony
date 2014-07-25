<?php

namespace Xiaomei\XiaomeiBundle\Entity;

use Doctrine\ORM\EntityRepository;
use \Datetime;

/**
 * CoursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class CoursRepository extends EntityRepository
{
	// public function findHomeContents(){

	// 	$query = $this->getEntityManager()->createQuery('
	// 		SELECT cou, cat FROM XiaomeiXiaomeiBundle:Cours cou 
	// 		LEFT JOIN cou.category cat ');
 //         //order by limit by 
	// 	$contents = $query->getResult();

	// 	return $contents;
	// 	}

	public function findHomeContents($tri='c.dateCours'){

		//$tri="c.nrPlaceReste"
		//$tri='c.categorie.name'
		//$tri='c.lieu'

		//utiliser formulaire get pour obtenir le valeur de $tri: 
        $datecours=new Datetime();
		$query = $this->createQueryBuilder('c')
				->select('c, cat,user')	//hyper facile à oublier
				//->where('c.dateCours >= :dateCours')	
				//->andWhere('c.isannulation' =:isannulation')					    
			    ->leftJoin('c.category', 'cat')	
			    ->leftJoin('c.user', 'user')
			   //  ->setParameter('dateCours', $datecours)
			   // ->setParameter('isannulation', false)
			    ->orderBy($tri,'DESC')
			    //LIMIT $offset;
			    //->LIMIT 30
	       	    ->getQuery();
       
		$contents = $query->getResult();

		return $contents;
		}
		

	public function findFullSingleContent($id){

		$query = $this->createQueryBuilder('c')
				->select('c, cat,user,inscription')	//hyper facile à oublier
			    ->where('c.id = :id')
			    ->leftJoin('c.category', 'cat')
			    ->leftJoin('c.user', 'user')
			    ->leftJoin('c.inscription', 'inscription')		
			    ->setParameter('id', $id)
			    ->getQuery();

		$content = $query->getSingleResult();
       
		return $content;
	}

	public function findcount(){
          $query = $this->createQueryBuilder('i')
				->select( "COUNT ( i)"	)
				->getQuery();
				$nombrecours = $query->getSingleResult();
       
		return $nombrecours;
    }


}

 