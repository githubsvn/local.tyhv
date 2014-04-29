<?php
namespace SM\Bundle\AdminBundle\Validator\Custom;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


class IsNotParent extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        var_dump($value);
        var_dump($this->constraint->getCurrentId());
        
        die;
    }
}