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
                ->getRepository('theBundle:places');
        foreach ($r as $key => $produit) {
            $product_id = $key;
            $prix = $repository->find($product_id)->getPrix();
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

        $form = $this->createForm(new BilletType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            if ($form->get('secteurB')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurC')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurD')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurE')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurF')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurG')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurH')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurI')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurJ')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurK')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }
        if ($form->isValid()) {
            if ($form->get('secteurL')->isClicked()) {
                $this->addElemCart($request, $value->getId());
            }
        }

        return $this->render('theBundle:Default:billeterie.html.twig', array('form' => $form->createView(), 'secteurs' => $secteurs));
    }

    public function panierAction(Request $request) {
        $session = $request->getSession();
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('theBundle:places');
        $places = $repository->findAll();
        $total = $this->totalCart($request);
        $panier = $session->get('panier');
        $formulaires;
        $a = 0;
        foreach ($places as $value) {
            $form = $this->createForm(new CartType($value->getPrix()));
            $formulaires[$value->getId()] = $form->createView();
            $form->handleRequest($request);

            if ($form->isValid()) {
                if ($form->get('plus')->isClicked()) {
                    $this->addElemCart($request, $value->getId());
                    return $this->redirect($this->generateUrl('theatre_panier'));
                }
                if ($form->get('moins')->isClicked()) {
                    $this->minusElemCart($request, $value->getId());
                    return $this->redirect($this->generateUrl('theatre_panier'));
                }
            }
            $a++;
        }


        return $this->render('theBundle:Default:panier.html.twig', array('places' => $places, 'panier' => $panier, 'total' => $total, 'form' => $form->createView(), 'formulaires' => $formulaires));
    }

}
