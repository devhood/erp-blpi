<?php


namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class BaseController extends AbstractActionController
{
	const DBNS = "Database\\Entity\\";
	protected $em = null;
	
	protected function _setEntityManager(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}
	
	protected function _getEntityManager()
	{
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		}
		return $this->em;
	}
	
	protected function _getOptions($table, $key, $value, $colFilter = null, $colValue = null)
	{

		$queryBuilder = $this->_getEntityManager()->createQueryBuilder();
		$queries = $queryBuilder->select('t')
			->from(self::DBNS.$table, 't');
		
		
		if($colFilter){
			$queries->where("t.".$colFilter.'= ?1')
			->setParameter(1, $colValue);
		}
		$queries = $queryBuilder->getQuery();
		$results = $queries->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
		
		$content = array();
		for($i=0;$i<count($results);$i++){
			$content[$results[$i][$key]] = $results[$i][$value];
		}
		return $content;
	}
	
	protected function _getContents($table)
	{
		
		$queryBuilder = $this->_getEntityManager()->createQueryBuilder();
		$queryBuilder->select('t')
			->from(self::DBNS.$table, 't');
		$results = $queryBuilder->getQuery()
			->getResult();
		return $results;
	}
	
	protected function _saveRecord($table, $record, $id=null)
	{
		try{
			$table = ucwords($table);
			$request = (array)$record;
			$table = self::DBNS.$table;
			if($id){
				$object = $this->getEntityManager()
				->find($table, $id);
			}
			else{
				$object = new $table();
			}
			$hydrator = new DoctrineHydrator($this->getEntityManager());
			$object = $hydrator->hydrate($request, $object);
			$this->getEntityManager()->persist($object);
			$this->getEntityManager()->flush();
			return true;
		}catch(\Exception $e){
			return false;
		}
			
	}
}