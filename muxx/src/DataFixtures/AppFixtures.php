<?php

namespace App\DataFixtures;

// use App\Entity\Article;
use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // Génération d'événements aléatoires pour décembre 2023
        $startDate = new \DateTime('2023-12-01');
        $endDate = new \DateTime('2023-12-31');

        for ($i = 0; $i < 10; $i++) {
            $event = new Event();
            $event->setTitle($this->faker->sentence())
                ->setDescription($this->faker->paragraph())
                ->setStartDate($this->faker->dateTimeBetween($startDate, $endDate))
                ->setEndDate($this->faker->dateTimeBetween($startDate, $endDate));

            $manager->persist($event);
        }

        $manager->flush();
    }
}


// class AppFixtures extends Fixture
//{
//    /**
//     * @var Generator
//     */
//    private Generator $faker;
//
 //   public function __construct()
 //   {
 //       $this->faker = Factory::create('fr_FR');
 //   }

 //   public function load(ObjectManager $manager): void
 //   {
 //       for ($i = 1; $i <= 10; $i++) {
 //           $article = new Article();
 //           $article->setTitle($this->faker->sentence())
 //               ->setContent($this->faker->paragraph());

 //           $manager->persist($article);
 //       }

 //       $manager->flush();
 //   }
// }

