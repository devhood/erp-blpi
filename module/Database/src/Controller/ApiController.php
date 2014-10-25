<?php

namespace Database\Controller;


use Zend\Mvc\Controller\AbstractRestfulController,
	Zend\View\Model\JsonModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class ApiController extends AbstractRestfulController
{
	const DBNS = "Database\\Entity\\";
	protected $em = null;

	public function setEntityManager(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}
  
	public function getEntityManager()
	{
		if (null === $this->em) {
					$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		}
		return $this->em;
	}
	public function listAction()
	{
		$table = ucwords($this->params()->fromRoute('table'));

		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select('t')
			->from(self::DBNS.$table, 't');
		
		$results = $queryBuilder->getQuery()
			->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_RECORD);
		return new JsonModel($results);
	}
	public function addAction()
	{
		$table = ucwords($this->params()->fromRoute('table'));
		$request = (array)$this->getRequest()->getPost();
		$table = self::DBNS.$table;
		$object = new $table();
		$hydrator = new DoctrineHydrator($this->getEntityManager());
		$object = $hydrator->hydrate($request, $object);
		$this->getEntityManager()->persist($object);
		$this->getEntityManager()->flush();
		$return = $hydrator->extract($object);
		return new JsonModel($return);
	}
	public function editAction()
	{
		$request = (array)$this->getRequest()->getPost();
		$table = ucwords($this->params()->fromRoute('table'));
		$id = (int) $this->params()->fromRoute('id');
		$table = self::DBNS.$table;
		$object = $this->getEntityManager()
			->find($table, $id);
		$hydrator = new DoctrineHydrator($this->getEntityManager());
		$object = $hydrator->hydrate($request, $object);
		$this->getEntityManager()->persist($object);
		$this->getEntityManager()->flush();
		$return = $hydrator->extract($object);
		return new JsonModel($return);
	}
	public function optionAction()
	{
		$table = ucwords($this->params()->fromRoute('table'));
		$key = $this->params()->fromRoute('key');
		$value = $this->params()->fromRoute('value');
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		$queryBuilder->select('t')
			->from(self::DBNS.$table, 't');
		$results = $queryBuilder->getQuery()
			->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
		$content = array();
		for($i=0;$i<count($results);$i++){
			$content[] = $results[$i][$value];
		}
		return new JsonModel($content);
	}
	
}