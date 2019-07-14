<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Service;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $service = new Service();
        for ($i=1; $i <=5 ; $i++) { 
            if ($i==1) {
                $service->setLibelle("Développeur");
            }
            elseif ($i==2) {
                $service->setLibelle("Manager");
            }
            elseif ($i==3) {
                $service->setLibelle("Chef de Projet");
            }
            elseif ($i==4) {
                $service->setLibelle("Comptable");
            }
            elseif ($i==5) {
                $service->setLibelle("Technicien");
            }
            $manager->persist($service);
        }

        $manager->flush();
    }
}
