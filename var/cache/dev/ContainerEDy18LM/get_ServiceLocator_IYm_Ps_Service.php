<?php

namespace ContainerEDy18LM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IYm_Ps_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iYm.ps.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iYm.ps.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\SubjectCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\SubjectCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\SubjectCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\SubjectCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\SubjectCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\SubjectCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\SubjectCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\LessonController::plan' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\PasswordController::index' => ['privates', '.service_locator.JNHOdfb', 'get_ServiceLocator_JNHOdfbService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.BNwQwAj', 'get_ServiceLocator_BNwQwAjService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\StudentGroupCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\SubjectCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\SubjectCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\SubjectCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\SubjectCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\SubjectCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\SubjectCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\SubjectCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\SubjectCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\SubjectCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\SubjectCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\LessonController:plan' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\PasswordController:index' => ['privates', '.service_locator.JNHOdfb', 'get_ServiceLocator_JNHOdfbService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.BNwQwAj', 'get_ServiceLocator_BNwQwAjService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::delete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::detail' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::edit' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::index' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::new' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::delete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::detail' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::edit' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::index' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::new' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\LessonController::plan' => '?',
            'App\\Controller\\PasswordController::index' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:delete' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:detail' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:edit' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:index' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:new' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\StudentGroupCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:delete' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:detail' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:edit' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:index' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:new' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\SubjectCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\LessonController:plan' => '?',
            'App\\Controller\\PasswordController:index' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
