<?php

namespace theBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use theBundle\Entity\Article;
use theBundle\Entity\Zeus;
use theBundle\Entity\Interet;
use theBundle\Entity\Creation;
use theBundle\Entity\Lieu;
use theBundle\Entity\Comite;
use theBundle\Form\InteretType;
use theBundle\Form\creationType;
use theBundle\Form\LieuType;
use theBundle\Form\ComiteType;

class AdminController extends Controller {

    public function adminAction() {
        return $this->render('theBundle:Admin:admin.html.twig');
    }

    public function modifierLieuAction(Request $request) {
        $lieuContenu = $this->getDoctrine()
                ->getRepository('theBundle:Lieu')
                ->find(1);
        $form = $this->createForm(new LieuType(), $lieuContenu);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $contenu = $form->get('contenu')->getData();
            $lieuContenu->setContenu($contenu);
            $em->persist($lieuContenu);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_lieu'));
        }
        return $this->render('theBundle:Admin:modifierLieu.html.twig', array('form' => $form->createView()));
    }
    public function modifierComiteAction(Request $request) {
        $comiteContenu = $this->getDoctrine()
                ->getRepository('theBundle:Comite')
                ->find(1);
        $form = $this->createForm(new ComiteType(), $comiteContenu);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $contenu = $form->get('contenu')->getData();
            $comiteContenu->setContenu($contenu);
            $em->persist($comiteContenu);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_comite'));
        }
        return $this->render('theBundle:Admin:modifierComite.html.twig', array('form' => $form->createView()));
    }
    public function modifierInteretAction(Request $request) {
        $interetContenu = $this->getDoctrine()
                ->getRepository('theBundle:Interet')
                ->find(1);
        $form = $this->createForm(new InteretType(), $interetContenu);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $contenu = $form->get('contenu')->getData();
            $interetContenu->setContenu($contenu);
            $em->persist($interetContenu);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_interesse'));
        }
        return $this->render('theBundle:Admin:modifierInteret.html.twig', array('form' => $form->createView()));
    }
    public function modifierCreationAction(Request $request) {
        $creationContenu = $this->getDoctrine()
                ->getRepository('theBundle:Creation')
                ->find(1);
        $form = $this->createForm(new creationType(), $creationContenu);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $contenu = $form->get('contenu')->getData();
            $creationContenu->setContenu($contenu);
            $em->persist($creationContenu);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_creation'));
        }
        return $this->render('theBundle:Admin:modifierCreation.html.twig', array('form' => $form->createView()));
    }

    public function effacerArticleAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
                ->getRepository('theBundle:Article')
                ->find($id);
        $form = $this->createFormBuilder($article)
                ->add('oui', 'submit')
                ->add('non', 'submit')
                ->getForm();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isValid()) {
            if ($form->get('oui')->isClicked()) {
                $em->remove($article);
            }
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_articles'));
        }
        return $this->render('theBundle:Admin:effacerArticle.html.twig', array('article' => $article, 'form' => $form->createView()));
    }

    public function effacerArticleZeusAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
                ->getRepository('theBundle:Zeus')
                ->find($id);
        $form = $this->createFormBuilder($article)
                ->add('oui', 'submit')
                ->add('non', 'submit')
                ->getForm();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isValid()) {
            if ($form->get('oui')->isClicked()) {
                $em->remove($article);
            }
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_zeus'));
        }
        return $this->render('theBundle:Admin:effacerArticleZeus.html.twig', array('article' => $article, 'form' => $form->createView()));
    }

    public function modifierArticleAction($id, Request $request) {
        $article = new Article();
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
                ->getRepository('theBundle:Article')
                ->find($id);
        $form = $this->createFormBuilder($article)
                ->add('date', 'genemu_jquerydate', array('widget' => 'single_text'))
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('contenu', 'genemu_tinymce', array('attr' => array('rows' => '30')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            var_dump($form['contenu']->getData());
            $article->setTitre($form['titre']->getData());
            $article->setDescription($form['description']->getData());
            $article->setDate($form['date']->getData());
            $article->setContenu($form['contenu']->getData());

            $em->flush();
            return $this->redirect($this->generateUrl('theatre_articles'));
        }
        return $this->render('theBundle:Admin:modifierArticle.html.twig', array(
                    'form' => $form->createView()));
    }

    public function modifierArticleZeusAction($id, Request $request) {
        $article = new Zeus();
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
                ->getRepository('theBundle:Zeus')
                ->find($id);
        $form = $this->createFormBuilder($article)
                ->add('date', 'genemu_jquerydate', array('widget' => 'single_text'))
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('contenu', 'genemu_tinymce', array('attr' => array('rows' => '30')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {

            $article->setTitre($form['titre']->getData());
            $article->setDescription($form['description']->getData());
            $article->setDate($form['date']->getData());
            $article->setContenu($form['contenu']->getData());

            $em->flush();
            return $this->redirect($this->generateUrl('theatre_zeus'));
        }
        return $this->render('theBundle:Admin:modifierArticleZeus.html.twig', array(
                    'form' => $form->createView()));
    }

    public function ajouteArticleAction(Request $request) {
        $article = new Article();
        $em = $this->container->get('doctrine')->getManager();

        $form = $this->createFormBuilder()
                ->add('date', 'genemu_jquerydate', array('widget' => 'single_text'))
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('content', 'genemu_tinymce', array('attr' => array('rows' => '30')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            var_dump($form['content']->getData());

            $article->setTitre($form['titre']->getData());
            $article->setDescription($form['description']->getData());
            $article->setDate($form['date']->getData());
            $article->setContenu($form['content']->getData());
            $em->persist($article);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_articles'));
        }
        return $this->render('theBundle:Admin:ajouteArticle.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function ajouteArticleZeusAction(Request $request) {
        $article = new Zeus();
        $em = $this->container->get('doctrine')->getManager();

        $form = $this->createFormBuilder()
                ->add('date', 'genemu_jquerydate', array('widget' => 'single_text'))
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('content', 'genemu_tinymce', array('attr' => array('rows' => '30')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $article->setTitre($form['titre']->getData());
            $article->setDescription($form['description']->getData());
            $article->setDate($form['date']->getData());
            $article->setContenu($form['content']->getData());
            $em->persist($article);
            $em->flush();
            return $this->redirect($this->generateUrl('theatre_zeus'));
        }
        return $this->render('theBundle:Admin:ajouteArticleZeus.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
