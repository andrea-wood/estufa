<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // fos_user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_registration',);
        }

        // fos_user_resetting
        if ('/resetting' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_resetting',);
        }

        if (0 === strpos($pathinfo, '/pro')) {
            // fos_user_password
            if ('/profile' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_password',);
            }

            if (0 === strpos($pathinfo, '/produtos')) {
                // produtos
                if ('/produtos' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::produtosAction',  '_route' => 'produtos',);
                }

                // produto
                if (preg_match('#^/produtos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produto')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::produtoAction',));
                }

            }

            // add_produto
            if ('/produto/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addProdutoAction',  '_route' => 'add_produto',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'fos_user_security_check',);
            }

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/estufa')) {
            // estufa
            if (preg_match('#^/estufa/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estufa')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::estufaAction',));
            }

            // mesa
            if (preg_match('#^/estufa/(?P<type>[^/]++)/mesas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesa')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::mesaAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/semente')) {
            if (0 === strpos($pathinfo, '/sementes')) {
                // semente
                if (preg_match('#^/sementes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semente')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sementeAction',));
                }

                // sementes
                if ('/sementes' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sementesAction',  '_route' => 'sementes',);
                }

            }

            elseif (0 === strpos($pathinfo, '/sementeira')) {
                // add_sementeira
                if ('/sementeira/add' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addSementeiraAction',  '_route' => 'add_sementeira',);
                }

                // sementeiras
                if ('/sementeiras' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sementeirasAction',  '_route' => 'sementeiras',);
                }

                // sementeira
                if (preg_match('#^/sementeira/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sementeira')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sementeiraAction',));
                }

            }

            // add_semente
            if ('/semente/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addSementeAction',  '_route' => 'add_semente',);
            }

        }

        elseif (0 === strpos($pathinfo, '/tanques')) {
            // tanque
            if (preg_match('#^/tanques/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tanque')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tanqueAction',));
            }

            // tanques
            if ('/tanques' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tanquesAction',  '_route' => 'tanques',);
            }

        }

        // add_tanque
        if ('/tanque/add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addTanqueAction',  '_route' => 'add_tanque',);
        }

        if (0 === strpos($pathinfo, '/nutrientes')) {
            // nutriente
            if (preg_match('#^/nutrientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nutriente')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::nutrienteAction',));
            }

            // nutrientes
            if ('/nutrientes' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::nutrientesAction',  '_route' => 'nutrientes',);
            }

        }

        // add_nutriente
        if ('/nutriente/add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addNutrienteAction',  '_route' => 'add_nutriente',);
        }

        // export_mesas
        if ('/mesas/export' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::exportAction',  '_route' => 'export_mesas',);
        }

        if (0 === strpos($pathinfo, '/mesas/export/ciclos/print')) {
            // print_ciclo
            if (preg_match('#^/mesas/export/ciclos/print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_ciclo')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::exportCicloAction',));
            }

            // print_month
            if (preg_match('#^/mesas/export/ciclos/print/(?P<id>[^/]++)/year/(?P<year>[^/]++)/month/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_month')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::exportMonthAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/qrcode')) {
            // qrcode
            if ('/qrcode/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::qrcodeListAction',  '_route' => 'qrcode',);
            }

            if (0 === strpos($pathinfo, '/qrcode/print')) {
                // qrc_print_all
                if ('/qrcode/print/all' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::qrcPrtAllAction',  '_route' => 'qrc_print_all',);
                }

                // qrcode_print
                if (preg_match('#^/qrcode/print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qrcode_print')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::qrcodePrintOneAction',));
                }

            }

            // endroid_qrcode_generate
            if (preg_match('#^/qrcode/(?P<text>[\\w\\W]+)\\.(?P<extension>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endroid_qrcode_generate')), array (  '_controller' => 'Endroid\\QrCode\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',));
            }

            // endroid_qrcode_twig_functions
            if ('/qrcode/twig' === $pathinfo) {
                return array (  '_controller' => 'Endroid\\QrCode\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::twigFunctionsAction',  '_route' => 'endroid_qrcode_twig_functions',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
