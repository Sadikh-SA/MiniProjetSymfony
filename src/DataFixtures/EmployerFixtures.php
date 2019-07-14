<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Employer;
use App\Entity\Service;

class EmployerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*$employer = new Employer();
        $employer-> setMatricule("SA960820")
                 -> setNomcomplet("Ababacar Sadikh GUEYE")
                 -> setAdresse("101 Hamo 4 Guédiawaye")
                 -> setSalaire(300000);
        $manager->persist($employer);

        $manager->flush();*/
    }
}
