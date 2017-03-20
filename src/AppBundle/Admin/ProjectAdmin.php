<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProjectAdmin extends AbstractAdmin
{
	
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->tab('Post')
				->with('Content', ['class' => 'c ol-md-9'])
					->add('title', 'text')
					->add('description', 'textarea')
				->end()
			->end()
			->tab('Publish Options')
				->with('Meta data', ['class' => 'c ol-md-3'])
					->add('workspace', 'sonata_type_model', array(
						'class' => 'AppBundle\Entity\Workspace',
						'property' => 'name'
					))
					->add('dueDate', 'date', [
						'input' => 'datetime',
						'widget' => 'single_text',
						'format' => 'yyyy-MM-dd'
					])
				->end()
			->end();
	}

	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('title')
			->add('description');
	}

	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper->addIdentifier('title')->add('description');
	}
}