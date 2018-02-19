<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SNT\ReservationBundle\Entity\reservation;
use SNT\ReservationBundle\Entity\Bien;

class ReservationController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $villes = $em->getRepository('RESERVATIONBundle:ville')->findAll();
        $typesBien = $em->getRepository('RESERVATIONBundle:typeBien')->findAll();

        if ($request->getMethod() == 'POST' && $request->request->get('form_type') == 'rechercher') {
            $lieu = $request->request->get('lieu');
            $typeBien = $request->request->get('typeBien');
            $prix = explode(',', $request->request->get('prix'));
            $prixMin = $prix[0].'000';
            $prixMax = $prix[1].'000';
            $em = $this->getDoctrine()->getManager();
            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien($lieu, $typeBien, $prixMin, $prixMax);

            return $this->render('reservation/catalogue.html.twig', array(
                'biens' => $biens,
            ));
        }

        return $this->render('reservation/index.html.twig', array(
            'villes' => $villes,
            'typesBien' => $typesBien,
        ));
    }

    /**
     * @Route("/catalogue")
     */
    public function catalogueAction()
    {
        return $this->render('reservation/catalogue.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/approuver")
     */
    public function approuverAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            extract($_GET);
            $em = $this->getDoctrine()->getManager();
            $bien = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $bien,
            ));
        }

        return $this->render('reservation/approuver.html.twig', array(
            //...
        ));
    }

    /**
     * @Route("/connexion")
     */
    public function connexionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('GET')) {
            extract($_GET);
            $bien = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/connexion.html.twig', array(
                'bien' => $bien,
            ));
        }

        if ($request->isMethod('POST') && $_POST['typeform'] == 'inscription') {
            extract($_POST);
            $new_client = new client();
            $new_client->setNomClient($nomClient);
            $new_client->setNumCni($numCni);
            $new_client->setAdresse($adresse);
            $new_client->setTelephone($telephone);
            $new_client->setEmail($email);
            $new_client->setLogin($login);
            $new_client->setPassword($password);
            $em->persist($new_client);
            $em->flush();

            $bien = $em->getRepository('RESERVATIONBundle:Bien')->find($idBien);

            $new_reservation = new reservation();
            $new_reservation->setDate(new \DateTime('now'));
            $new_reservation->setEtat(false);
            $new_reservation->setBien($bien);
            $new_reservation->setClient($new_client);
            $em->persist($new_reservation);
            $em->flush();

            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $biens,
            ));
        }

        if ($request->isMethod('POST') && $_POST['typeform'] == 'connexion') {
            extract($_POST);
            $client = $em->getRepository('RESERVATIONBundle:client')->findByLogin($login);

            $bien = $em->getRepository('RESERVATIONBundle:Bien')->find($idBien);

            $new_client = $em->getRepository('RESERVATIONBundle:client')->find($client[0]->getId());

            $new_reservation = new reservation();
            $new_reservation->setDate(new \DateTime('now'));
            $new_reservation->setEtat(false);
            $new_reservation->setBien($bien);
            $new_reservation->setClient($new_client);
            $em->persist($new_reservation);
            $em->flush();

            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $biens,
            ));
        }

        return $this->render('reservation/connexion.html.twig', array(
            // ...
        ));
    }
}
