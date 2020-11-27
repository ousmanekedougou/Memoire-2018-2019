<?php

use App\User;
use App\Model\Admin\Tag;
use App\Model\Admin\Info;
use App\Model\Admin\Role;
use App\Model\Admin\Admin;
use App\Model\Admin\Region;
use App\Model\Admin\Social;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use App\Model\Admin\Category;
use App\Model\Admin\Permission;
use Illuminate\Database\Seeder;
use App\Model\Admin\Departement;
use App\Model\Admin\Disponibilite;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // Insertio Info

        Info::create([
            'email' => 'contactrvmedical@gmail.com',
            'adresse' => 'AFI-UE (Universite de l\'entreprise), Point E',
            'phone' => '+221 33 098 34 56',
            'bp' => '28 345',
            'fax' => '876358',
        ]);

        // Fin Insertion Info

        // Insertion de Client
        Admin::create(
            // Insertiion Admin
            [
                'nom' => "Ousmane Diallo",
                'email' => "Admin@gmail.com",
                'phone' => "778909876",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'status' => "0",
            ]   );
            // Fin Insertion Admin

            // Insertiom Mededin
            Medecin::create(
            [
                'prenom' => "Ousmane Diallo",
                'email' => "medecin@gmail.com",
                'phone' => "778909876",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'status' => "0",
                'prix' => "2000",
                'proffession' => "Medecin",
                'specialite' => "Dérmatologue",
                'departement_id' => 1,
                'hopital_id' => 1,
            ]);
            Medecin::create(
                [
                    'prenom' => "Amadou Diallo",
                    'email' => "medecin1@gmail.com",
                    'phone' => "778909873",
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'status' => "1",
                    'prix' => "2500",
                    'proffession' => "Medecin",
                    'specialite' => "Dérmatologue",
                    'departement_id' => 1,
                    'hopital_id' => 1,
                ]);
            // Fin Isertion Medecin

            Departement::create([
                'name' => 'Dakar',
                'region_id' => 1
            ]);
            Hopital::create([
                'name' => 'Hôpital Aristide Le Dantec',
                'departement_id' => 1
            ]);
            
            // Insertion Client
            User::create(
            [
            'prenom' => "Ousmane",
            'nom' => "Diallo",
            'email' => "patient@gmail.com",
            'phone' => "778909876",
            'adresse' => "Kedougou",
            'date' => "12/12/2009",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => "0",
            'departement_id' => 1
            
            ]);
        //Fin Insertion de Client

         // les roles
         $roles = [
             'Creer','Modifier','Publier','Ecrire',
         ];
          foreach ($roles as $r) { 
             Role::create([
                'nom' => $r
             ]);
         }
        //  foreach ($roles as $k => $v) { 
        //      Role::create([
        //         'nom' => $v[$k]
        //      ]);
        //  }

          // les roles
          $disponibilites = [
            'Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'
        ];
        foreach ($disponibilites as $d) { 
            Disponibilite::create([
               'jour' => $d
            ]);
        }

         //Creer les permissions
         $permission = [
            'Creer-Article' => 'Article',
            'Modifier-Article' => 'Article',
            'Supprimer-Article' => 'Article',
            'Publier-Article' => 'Article',
            'Creer-Medecin' => 'Medecin',
            'Modifier-Medecin' => 'Medecin',
            'Supprimer-Medecin' => 'Medecin',
            'Publier-Medecin' => 'Medecin',
        ];

        foreach ($permission as $k => $v) { 
            Permission::create([
               'nom' => $k,
               'for' => $v,

            ]);
        }

        // Insertion Reseau Sociaux

        $sociale = [
            'facebook' => 'www.facebook.com',
            'youtube' => 'www.youtube.com',
            'twitter' => 'www.twitter.com',
            'whatsapp' => 'www.whatsapp.com',
            'instagram' => 'www.instagram.com',
          
        ];

        foreach ($sociale as $k => $v) { 
            Social::create([
               'nom' => $k,
               'lien' => $v,

            ]);
        }
          
            $regions = [
                  
                    'Dakar','Thiès','Diourbel','Fatick' ,'Kaolack' ,'Kafrine' ,
                    'Ziguinchor','Saint-Louis' ,'Kolda','Sédhiou' ,'Matam',
                    'Tambacounda' ,'Kédougou','Louga' 
                ];

            foreach($regions as  $region){
                    Region::create([
                    'name' => $region,
                ]);
              
            }
    }
}

//A ajouter dans le composer pour regler les problemes d'image sur heroku
// "post-install-cmd": [
//     "ln -sr storage/app/public public/storage"
//     ]



