<?php



namespace App\Controller;

use App\Entity\Homme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;


class SesameConrollerController extends AbstractController
{
    /**
     * @Route("/sesame/page1", name="sesame_cour")
     */
    public function page1(): Response
    {
        return $this->render('sesame_conroller/page1.html.twig', [
            'controller_name' => 'SesameConrollerController',
        ]);
    }
   

    /**
     * @Route("/sesame/page2", name="sesame_tp")
     */
    public function page2(): Response
    {
        return $this->render('sesame_conroller/page2.html.twig', [
            'controller_name' => 'SesameConrollerController',
        ]);
    }
     /**
     * @Route("/sesame/connexion", name="sesame_td")
     * Method({"GET","POST"})
     */
    public function page3(): Response
    {
        return $this->render('sesame_conroller/connexion.html.twig', [
            'controller_name' => 'SesameConrollerController',
        ]);
    }


        
        /**
     * @Route("sesame/add", name="add")
     */
    public function ajouter(Request $request): Response
    {
        $nom=$request->request->get('nom') ;
        $word=$request->request->get('word') ;
     
        //($request->request->get('nom')) ;
        $entityManager = $this->getDoctrine()->getManager();
        $homme = new Homme();
        $homme->setnom($nom);
        $homme->setword($word);
       

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($homme);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Homme '.$homme->getId().'est enregistré  !! ');

    }




    /**
     * @Route("sesame/page4", name="page4")
     */
    public function page4(): Response
    {

        $repo = $this->getDoctrine()->getRepository(Homme::class);
        $homme= $repo->findAll() ;

       //dd($etudiants);


        return $this->render('sesame_conroller/page4.html.twig', [
            'controller_name' => 'Page3',
            'items'=>$homme,

        ]);

    }



 /**
     * @Route("sesame/loginfn", name="loginfn")
     */

    public function loginfn(Request $request): Response
    {
        $user= new Homme();
        $repository = $this->getDoctrine()->getRepository(Homme::class);
        $nom=$request->request->get('nom');
        $word=$request->request->get('word');
        $user = $repository->findOneBy([
            'nom' => $nom,
            'word' => $word,
        ]);

        if ($user)
        {
            $this->get('session')->getFlashBag()->add(
                'notice',
                'Succés!'
            );
            return $this->render('sesame_conroller/pagekoi.html.twig');
        }
        else {
            $this->get('session')->getFlashBag()->add(
                'notice2',
                'Login ou mot de passe incorrect!'
            );
            return $this->render('sesame_conroller/indexkoi.html.twig');
        }

    }








 
    


   }