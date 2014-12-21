<?php

namespace theBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use theBundle\Entity\Article;

class AdminController extends Controller {

    public function adminAction() {
        return $this->render('theBundle:Admin:admin.html.twig');
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

    public function modifierArticleAction($id, Request $request) {
        $article = new Article();
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
                ->getRepository('theBundle:Article')
                ->find($id);
        $form = $this->createFormBuilder($article)
                ->add('date', 'text')
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('contenu', 'genemu_tinymce', array('attr' => array('rows' => '15')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
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

    public function ajouteArticleAction(Request $request) {
        $article = new Article();
        $em = $this->container->get('doctrine')->getManager();

        $form = $this->createFormBuilder()
                ->add('date', 'text')
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('content', 'genemu_tinymce', array('attr' => array('rows' => '15')))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
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

}
