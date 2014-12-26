<?php

namespace theBundle\Controller;

use theBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use theBundle\Entity\panier;
use theBundle\Form\CartType;
use theBundle\Form\BilletType;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('theBundle:Default:index.html.twig');
    }

    public function articlesAction(Request $request) {
//        $session = $request->getSession();
//        $test = $session->get('name');
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:Article');
        $articles = $repository->findAll();

        return $this->render('theBundle:Default:articles.html.twig', array('articles' => $articles));
    }

    public function menuAction() {
        return $this->render('theBundle:Default:menu.html.twig');
    }

    public function addElemCart($request, $product_id) {
        $session = $request->getSession();
        $r = $session->get('panier');

        if (isset($session->get('panier')[$product_id])) {
            $r[$product_id] = $r[$product_id] + 1;
        } else {
            $r[$product_id] = 1;
        }
        $session->set('panier', $r);
    }

    public function minusElemCart($request, $product_id) {
        $session = $request->getSession();
        $r = $session->get('panier');

        if (isset($session->get('panier')[$product_id]) && $session->get('panier')[$product_id] > 0) {
            $r[$product_id] = $r[$product_id] - 1;
        }
        $session->set('panier', $r);
    }

    public function removeElemCart($request, $product_id) {
        $session = $request->getSession();
        $r = $session->get('panier');
        unset($r[$product_id]);
        $session->set('panier', $r);
    }

    public function removeAllCart($request) {
        $session = $request->getSession();
        $session->remove('panier');
    }

    public function addElemQuantityToCart($request, $product_id, $quantity) {
        $session = $request->getSession();
        $r = $session->get('panier');

        if (isset($session->get('panier')[$product_id]) && $quantity >= 0) {
            $r[$product_id] = $quantity;
        }
        $session->set('panier', $r);
    }

    public function totalCart($request) {
        $session = $request->getSession();
        $r = $session->get('panier');
        $total = 0;
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:Secteurs');

        foreach ($r as $key => $produit) {
            $product_id = $key;
            $prix = $repository->findBySecteurs($product_id)[0]->getPrix();
            $quantite = $produit;
            $total = $total + ($prix * $quantite);
        }

        return $total;
    }

    public function billeterieAction(Request $request, $numPlace) {
        $session = $request->getSession();
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:Secteurs');
        $secteurs = $repository->findAll();
        $formulaires;
        $a = 0;
        foreach ($secteurs as $value) {
            $form = $this->createForm(new BilletType($value->getId()));
            $formulaires[$value->getId()] = $form->createView();
            $form->handleRequest($request);
            if ($form->isValid()) {
                if ($form->get('ajouterCont')->isClicked()) {
                    $quantite = $form->getData()['quant'];
                    for ($i = 1; $i <= $quantite; $i++) {
                        $this->addElemCart($request, $value->getSecteurs());
                    }
                }
                if ($form->get('ajouterRest')->isClicked()) {
                    $quantite = $form->getData()['quant'];
                    for ($i = 1; $i <= $quantite; $i++) {
                        $this->addElemCart($request, $value->getSecteurs());
                    }
                    return $this->redirect($this->generateUrl('theatre_panier'));
                }
            }
            $a++;
        }

        return $this->render('theBundle:Default:billeterie.html.twig', array('secteurs' => $secteurs,  'formulaires' => $formulaires));
    }

    public function panierAction(Request $request) {

        $session = $request->getSession();
//        var_dump($session->get('panier'));
//        exit;
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:places');
        $places = $repository->findAll();
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:Secteurs');
        $secteurs = $repository->findAll();
        $total = $this->totalCart($request);
//        $total = $this->removeAllCart($request);
        $panier = $session->get('panier');
        $formulaires;

        foreach ($secteurs as $value) {
            $form = $this->createForm(new CartType($value->getPrix()));
            $formulaires[$value->getSecteurs()] = $form->createView();
            $form->handleRequest($request);

            if ($form->isValid()) {
                if ($form->get('plus')->isClicked()) {
                    if ($_POST['secteur'] == $value->getSecteurs()) {
                        $this->addElemCart($request, $value->getSecteurs());
                        return $this->redirect($this->generateUrl('theatre_panier'));
                    }
                }
                if ($form->get('moins')->isClicked()) {
                    if ($_POST['secteur'] == $value->getSecteurs()) {
                        $this->minusElemCart($request, $value->getSecteurs());
                        return $this->redirect($this->generateUrl('theatre_panier'));
                    }
                }
                if ($form->get('effacer')->isClicked()) {
                    if ($_POST['secteur'] == $value->getSecteurs()) {
                        $this->removeElemCart($request, $value->getSecteurs());
                        return $this->redirect($this->generateUrl('theatre_panier'));
                    }
                }
            }
        }


        return $this->render('theBundle:Default:panier.html.twig', array('secteurs' => $secteurs, 'places' => $places, 'panier' => $panier, 'total' => $total, 'form' => $form->createView(), 'formulaires' => $formulaires));
    }

}
