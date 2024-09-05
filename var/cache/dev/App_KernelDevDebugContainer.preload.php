<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\Container9jWrJU4\App_KernelDevDebugContainer::class, null);
require __DIR__.'/Container9jWrJU4/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/Container9jWrJU4/getValidator_ExpressionService.php';
require __DIR__.'/Container9jWrJU4/getValidator_EmailService.php';
require __DIR__.'/Container9jWrJU4/getValidator_BuilderService.php';
require __DIR__.'/Container9jWrJU4/getValidatorService.php';
require __DIR__.'/Container9jWrJU4/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/Container9jWrJU4/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/Container9jWrJU4/getTwig_Form_RendererService.php';
require __DIR__.'/Container9jWrJU4/getTwig_Form_EngineService.php';
require __DIR__.'/Container9jWrJU4/getTwigService.php';
require __DIR__.'/Container9jWrJU4/getSession_FactoryService.php';
require __DIR__.'/Container9jWrJU4/getServicesResetterService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_User_Provider_Concrete_AppClientProviderService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_User_Provider_Concrete_AllUsersService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_HttpUtilsService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_HelperService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_ChannelListenerService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/Container9jWrJU4/getSecurity_AccessListenerService.php';
require __DIR__.'/Container9jWrJU4/getSecrets_VaultService.php';
require __DIR__.'/Container9jWrJU4/getRouting_LoaderService.php';
require __DIR__.'/Container9jWrJU4/getPropertyAccessorService.php';
require __DIR__.'/Container9jWrJU4/getFragment_Renderer_InlineService.php';
require __DIR__.'/Container9jWrJU4/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/Container9jWrJU4/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/Container9jWrJU4/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/Container9jWrJU4/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/Container9jWrJU4/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/Container9jWrJU4/getForm_Type_FormService.php';
require __DIR__.'/Container9jWrJU4/getForm_Type_FileService.php';
require __DIR__.'/Container9jWrJU4/getForm_Type_EntityService.php';
require __DIR__.'/Container9jWrJU4/getForm_Type_ColorService.php';
require __DIR__.'/Container9jWrJU4/getForm_Type_ChoiceService.php';
require __DIR__.'/Container9jWrJU4/getForm_ServerParamsService.php';
require __DIR__.'/Container9jWrJU4/getForm_RegistryService.php';
require __DIR__.'/Container9jWrJU4/getForm_FactoryService.php';
require __DIR__.'/Container9jWrJU4/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/Container9jWrJU4/getErrorController2Service.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/Container9jWrJU4/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/Container9jWrJU4/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/Container9jWrJU4/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/Container9jWrJU4/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/Container9jWrJU4/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/Container9jWrJU4/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container9jWrJU4/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container9jWrJU4/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container9jWrJU4/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container9jWrJU4/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/Container9jWrJU4/getCache_SystemClearerService.php';
require __DIR__.'/Container9jWrJU4/getCache_SystemService.php';
require __DIR__.'/Container9jWrJU4/getCache_GlobalClearerService.php';
require __DIR__.'/Container9jWrJU4/getCache_AppClearerService.php';
require __DIR__.'/Container9jWrJU4/getCache_AppService.php';
require __DIR__.'/Container9jWrJU4/getTemplateControllerService.php';
require __DIR__.'/Container9jWrJU4/getRedirectControllerService.php';
require __DIR__.'/Container9jWrJU4/getAppAuthentificatorAuthenticatorService.php';
require __DIR__.'/Container9jWrJU4/getUtilisateurRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getUserRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getTacheRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getSprintRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getSecureRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getRoleRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getRessourceRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getProjetRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getProjetClientRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getPrioriteRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getNotificationRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getNoticationSprintRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getFonctionRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getFactureRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getEtatRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getEquipeRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getEmployeRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getDomaineRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getCompetanceRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getClientRepositoryService.php';
require __DIR__.'/Container9jWrJU4/getTacheTypeService.php';
require __DIR__.'/Container9jWrJU4/getSprintTypeService.php';
require __DIR__.'/Container9jWrJU4/getRoleTypeService.php';
require __DIR__.'/Container9jWrJU4/getRessourceTypeService.php';
require __DIR__.'/Container9jWrJU4/getRegistrationFormClientTypeService.php';
require __DIR__.'/Container9jWrJU4/getRegistrationEmployeFormTypeService.php';
require __DIR__.'/Container9jWrJU4/getProjetTypeService.php';
require __DIR__.'/Container9jWrJU4/getPrioriteTypeService.php';
require __DIR__.'/Container9jWrJU4/getNotificationTypeService.php';
require __DIR__.'/Container9jWrJU4/getFonctionTypeService.php';
require __DIR__.'/Container9jWrJU4/getFactureTypeService.php';
require __DIR__.'/Container9jWrJU4/getEtatTypeService.php';
require __DIR__.'/Container9jWrJU4/getEquipeTypeService.php';
require __DIR__.'/Container9jWrJU4/getEmployeTypeService.php';
require __DIR__.'/Container9jWrJU4/getDomaineTypeService.php';
require __DIR__.'/Container9jWrJU4/getCompetanceTypeService.php';
require __DIR__.'/Container9jWrJU4/getClientTypeService.php';
require __DIR__.'/Container9jWrJU4/getUserProjectControllerService.php';
require __DIR__.'/Container9jWrJU4/getUserControllerService.php';
require __DIR__.'/Container9jWrJU4/getTacheControllerService.php';
require __DIR__.'/Container9jWrJU4/getSprintControllerService.php';
require __DIR__.'/Container9jWrJU4/getSprintChefContronllerControllerService.php';
require __DIR__.'/Container9jWrJU4/getSecurityControllerService.php';
require __DIR__.'/Container9jWrJU4/getRoleControllerService.php';
require __DIR__.'/Container9jWrJU4/getRessourceControllerService.php';
require __DIR__.'/Container9jWrJU4/getRegistrationControllerService.php';
require __DIR__.'/Container9jWrJU4/getProjetControllerService.php';
require __DIR__.'/Container9jWrJU4/getPrioriteControllerService.php';
require __DIR__.'/Container9jWrJU4/getNotificationControllerService.php';
require __DIR__.'/Container9jWrJU4/getHomeControllerService.php';
require __DIR__.'/Container9jWrJU4/getFonctionControllerService.php';
require __DIR__.'/Container9jWrJU4/getFactureControllerService.php';
require __DIR__.'/Container9jWrJU4/getEtatControllerService.php';
require __DIR__.'/Container9jWrJU4/getErrorControllerService.php';
require __DIR__.'/Container9jWrJU4/getEquipeControllerService.php';
require __DIR__.'/Container9jWrJU4/getEmployeControllerService.php';
require __DIR__.'/Container9jWrJU4/getDomaineControllerService.php';
require __DIR__.'/Container9jWrJU4/getCompetanceControllerService.php';
require __DIR__.'/Container9jWrJU4/getClientControllerService.php';
require __DIR__.'/Container9jWrJU4/getChefTaskControllerService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_WEXECxService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_U4h9UhgService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_TqE_ZGOService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Rv0q7kYService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_R8eZeNuService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Q48KU4QService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_PjiRLIgService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_OFNnoQHService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_OB26OpHService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_LPGiacUService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_LJf_WFvService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_L2QwsaZService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_L1ae_QzService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_JebdhuCService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_IPzJNuwService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_IHhMHZQService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_GrCA6h2Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_FhZDZ7kService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_D0B0RJlService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_BPe7bSNService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_A2UKxPjService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Y3X3dDService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_WFmNc4MService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_WAid7fkService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Qgevfm_Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_QDkw4M0Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_O7MMxHXService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Nl_QkWeService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_NJQOe3Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_NDu3VVKService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_L_7_AhFService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_JVUHItZService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_JSK008jService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_IVXDdiZService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_GaEeKCbService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_GInIfSIService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_G6VsHmhService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Fqqk3KIService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_EnQ2Q_IService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_Ei9Nk6Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_CZ1jTUxService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_CDhANYIService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_C4g18P_Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_A7qJMg1Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_9LDLbReService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_7okKI4bService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_7PH019EService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_6etVjkpService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_6Vk5gGaService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_6PnRK8BService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_5n_1ufeService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_5miB8XService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_4u5os03Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_4HNHIcLService.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator_2lBK97Service.php';
require __DIR__.'/Container9jWrJU4/get_ServiceLocator__7XRJaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ChefTaskController';
$classes[] = 'App\Controller\ClientController';
$classes[] = 'App\Controller\CompetanceController';
$classes[] = 'App\Controller\DomaineController';
$classes[] = 'App\Controller\EmployeController';
$classes[] = 'App\Controller\EquipeController';
$classes[] = 'App\Controller\ErrorController';
$classes[] = 'App\Controller\EtatController';
$classes[] = 'App\Controller\FactureController';
$classes[] = 'App\Controller\FonctionController';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\NotificationController';
$classes[] = 'App\Controller\PrioriteController';
$classes[] = 'App\Controller\ProjetController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Controller\RessourceController';
$classes[] = 'App\Controller\RoleController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\SprintChefContronllerController';
$classes[] = 'App\Controller\SprintController';
$classes[] = 'App\Controller\TacheController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Controller\UserProjectController';
$classes[] = 'App\Form\ClientType';
$classes[] = 'App\Form\CompetanceType';
$classes[] = 'App\Form\DomaineType';
$classes[] = 'App\Form\EmployeType';
$classes[] = 'App\Form\EquipeType';
$classes[] = 'App\Form\EtatType';
$classes[] = 'App\Form\FactureType';
$classes[] = 'App\Form\FonctionType';
$classes[] = 'App\Form\NotificationType';
$classes[] = 'App\Form\PrioriteType';
$classes[] = 'App\Form\ProjetType';
$classes[] = 'App\Form\RegistrationEmployeFormType';
$classes[] = 'App\Form\RegistrationFormClientType';
$classes[] = 'App\Form\RessourceType';
$classes[] = 'App\Form\RoleType';
$classes[] = 'App\Form\SprintType';
$classes[] = 'App\Form\TacheType';
$classes[] = 'App\Repository\ClientRepository';
$classes[] = 'App\Repository\CompetanceRepository';
$classes[] = 'App\Repository\DomaineRepository';
$classes[] = 'App\Repository\EmployeRepository';
$classes[] = 'App\Repository\EquipeRepository';
$classes[] = 'App\Repository\EtatRepository';
$classes[] = 'App\Repository\FactureRepository';
$classes[] = 'App\Repository\FonctionRepository';
$classes[] = 'App\Repository\NoticationSprintRepository';
$classes[] = 'App\Repository\NotificationRepository';
$classes[] = 'App\Repository\PrioriteRepository';
$classes[] = 'App\Repository\ProjetClientRepository';
$classes[] = 'App\Repository\ProjetRepository';
$classes[] = 'App\Repository\RessourceRepository';
$classes[] = 'App\Repository\RoleRepository';
$classes[] = 'App\Repository\SecureRepository';
$classes[] = 'App\Repository\SprintRepository';
$classes[] = 'App\Repository\TacheRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\UtilisateurRepository';
$classes[] = 'App\Security\AppAuthentificatorAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Logging\Middleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Core\User\ChainUserProvider';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
