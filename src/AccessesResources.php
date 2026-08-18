<?php

namespace Buffalo\Api;

use Buffalo\Api\Resources\AdminTelegramBotResource;
use Buffalo\Api\Resources\AdminVaccineConsignmentsResource;
use Buffalo\Api\Resources\AdminVaccineTemplatesResource;
use Buffalo\Api\Resources\AnimalGroupsResource;
use Buffalo\Api\Resources\AnimalParentGroupsResource;
use Buffalo\Api\Resources\AnimalsResource;
use Buffalo\Api\Resources\ApiRolesResource;
use Buffalo\Api\Resources\ApplicationsResource;
use Buffalo\Api\Resources\AuthResource;
use Buffalo\Api\Resources\AuthorizationChainsResource;
use Buffalo\Api\Resources\BrandmarksResource;
use Buffalo\Api\Resources\BseResource;
use Buffalo\Api\Resources\CommoditiesResource;
use Buffalo\Api\Resources\CommunicationsResource;
use Buffalo\Api\Resources\CsvResource;
use Buffalo\Api\Resources\DepotOrdersResource;
use Buffalo\Api\Resources\DerivativesResource;
use Buffalo\Api\Resources\DevicesResource;
use Buffalo\Api\Resources\DiseaseRiskModelsResource;
use Buffalo\Api\Resources\DiseaseRiskPredictionsResource;
use Buffalo\Api\Resources\DiseasesResource;
use Buffalo\Api\Resources\FarmDiseaseRiskTimeseriesResource;
use Buffalo\Api\Resources\FarmsResource;
use Buffalo\Api\Resources\FeaturesResource;
use Buffalo\Api\Resources\FeedlotResource;
use Buffalo\Api\Resources\FilesResource;
use Buffalo\Api\Resources\Google2faResource;
use Buffalo\Api\Resources\HuntsResource;
use Buffalo\Api\Resources\IccDeviceResource;
use Buffalo\Api\Resources\IntegrationsResource;
use Buffalo\Api\Resources\IsolationsResource;
use Buffalo\Api\Resources\KmzResource;
use Buffalo\Api\Resources\KmzFilesResource;
use Buffalo\Api\Resources\LabPdfFilesResource;
use Buffalo\Api\Resources\LabsResource;
use Buffalo\Api\Resources\MailsResource;
use Buffalo\Api\Resources\MapRisksResource;
use Buffalo\Api\Resources\MapboxResource;
use Buffalo\Api\Resources\MarketplaceResource;
use Buffalo\Api\Resources\MedicineResource;
use Buffalo\Api\Resources\MedicineBatchesResource;
use Buffalo\Api\Resources\MedicinePackagesResource;
use Buffalo\Api\Resources\MiscResource;
use Buffalo\Api\Resources\MovementAuthorizationResource;
use Buffalo\Api\Resources\MovementsResource;
use Buffalo\Api\Resources\MysqlCommandsResource;
use Buffalo\Api\Resources\NatconPermitsResource;
use Buffalo\Api\Resources\OrdersResource;
use Buffalo\Api\Resources\OutbreaksResource;
use Buffalo\Api\Resources\PaymentsResource;
use Buffalo\Api\Resources\PermissionsResource;
use Buffalo\Api\Resources\PersonBrandmarksResource;
use Buffalo\Api\Resources\PersonDocumentsResource;
use Buffalo\Api\Resources\PersonMailTemplatesResource;
use Buffalo\Api\Resources\PersonMembersResource;
use Buffalo\Api\Resources\PersonRolesResource;
use Buffalo\Api\Resources\PersonTelegramBotsResource;
use Buffalo\Api\Resources\PersonUserRolesResource;
use Buffalo\Api\Resources\PersonsResource;
use Buffalo\Api\Resources\ProductsResource;
use Buffalo\Api\Resources\PublicTextEntitiesResource;
use Buffalo\Api\Resources\QrAuthResource;
use Buffalo\Api\Resources\RcpResource;
use Buffalo\Api\Resources\RisksResource;
use Buffalo\Api\Resources\SafariTagsResource;
use Buffalo\Api\Resources\ScanTagsResource;
use Buffalo\Api\Resources\ScannerDevicesResource;
use Buffalo\Api\Resources\ScannerVersionResource;
use Buffalo\Api\Resources\SendAnimalsResource;
use Buffalo\Api\Resources\ShapesDrawnResource;
use Buffalo\Api\Resources\ShoppingCartResource;
use Buffalo\Api\Resources\SpeciesResource;
use Buffalo\Api\Resources\SpotterResource;
use Buffalo\Api\Resources\SubscriptionsResource;
use Buffalo\Api\Resources\TelegramResource;
use Buffalo\Api\Resources\TestMethodsResource;
use Buffalo\Api\Resources\TestResultsResource;
use Buffalo\Api\Resources\TestingProtocolsResource;
use Buffalo\Api\Resources\TestsResource;
use Buffalo\Api\Resources\TextEditorResource;
use Buffalo\Api\Resources\TextEntitiesResource;
use Buffalo\Api\Resources\TextEntityViewsResource;
use Buffalo\Api\Resources\TpResource;
use Buffalo\Api\Resources\UnitsResource;
use Buffalo\Api\Resources\UsersResource;
use Buffalo\Api\Resources\VacancyApplicationsResource;
use Buffalo\Api\Resources\VaccineRequestsResource;
use Buffalo\Api\Resources\VaccineSubscriptionsResource;
use Buffalo\Api\Resources\VaccineTrackingResource;
use Buffalo\Api\Resources\VehiclesResource;
use Buffalo\Api\Resources\VerificationPersonResource;
use Buffalo\Api\Resources\VerificationUserEmailResource;
use Buffalo\Api\Resources\WarthogMeatApplicationResource;
use Buffalo\Api\Resources\YoutubeLinksResource;

trait AccessesResources
{
    public function adminTelegramBot(): AdminTelegramBotResource
    {
        return new AdminTelegramBotResource($this);
    }

    public function adminVaccineConsignments(): AdminVaccineConsignmentsResource
    {
        return new AdminVaccineConsignmentsResource($this);
    }

    public function adminVaccineTemplates(): AdminVaccineTemplatesResource
    {
        return new AdminVaccineTemplatesResource($this);
    }

    public function animalGroups(): AnimalGroupsResource
    {
        return new AnimalGroupsResource($this);
    }

    public function animalParentGroups(): AnimalParentGroupsResource
    {
        return new AnimalParentGroupsResource($this);
    }

    public function animals(): AnimalsResource
    {
        return new AnimalsResource($this);
    }

    public function apiRoles(): ApiRolesResource
    {
        return new ApiRolesResource($this);
    }

    public function applications(): ApplicationsResource
    {
        return new ApplicationsResource($this);
    }

    public function auth(): AuthResource
    {
        return new AuthResource($this);
    }

    public function authorizationChains(): AuthorizationChainsResource
    {
        return new AuthorizationChainsResource($this);
    }

    public function brandmarks(): BrandmarksResource
    {
        return new BrandmarksResource($this);
    }

    public function bse(): BseResource
    {
        return new BseResource($this);
    }

    public function commodities(): CommoditiesResource
    {
        return new CommoditiesResource($this);
    }

    public function communications(): CommunicationsResource
    {
        return new CommunicationsResource($this);
    }

    public function csv(): CsvResource
    {
        return new CsvResource($this);
    }

    public function depotOrders(): DepotOrdersResource
    {
        return new DepotOrdersResource($this);
    }

    public function derivatives(): DerivativesResource
    {
        return new DerivativesResource($this);
    }

    public function devices(): DevicesResource
    {
        return new DevicesResource($this);
    }

    public function diseaseRiskModels(): DiseaseRiskModelsResource
    {
        return new DiseaseRiskModelsResource($this);
    }

    public function diseaseRiskPredictions(): DiseaseRiskPredictionsResource
    {
        return new DiseaseRiskPredictionsResource($this);
    }

    public function diseases(): DiseasesResource
    {
        return new DiseasesResource($this);
    }

    public function farmDiseaseRiskTimeseries(): FarmDiseaseRiskTimeseriesResource
    {
        return new FarmDiseaseRiskTimeseriesResource($this);
    }

    public function farms(): FarmsResource
    {
        return new FarmsResource($this);
    }

    public function features(): FeaturesResource
    {
        return new FeaturesResource($this);
    }

    public function feedlot(): FeedlotResource
    {
        return new FeedlotResource($this);
    }

    public function files(): FilesResource
    {
        return new FilesResource($this);
    }

    public function google2fa(): Google2faResource
    {
        return new Google2faResource($this);
    }

    public function hunts(): HuntsResource
    {
        return new HuntsResource($this);
    }

    public function iccDevice(): IccDeviceResource
    {
        return new IccDeviceResource($this);
    }

    public function integrations(): IntegrationsResource
    {
        return new IntegrationsResource($this);
    }

    public function isolations(): IsolationsResource
    {
        return new IsolationsResource($this);
    }

    public function kmz(): KmzResource
    {
        return new KmzResource($this);
    }

    public function kmzFiles(): KmzFilesResource
    {
        return new KmzFilesResource($this);
    }

    public function labPdfFiles(): LabPdfFilesResource
    {
        return new LabPdfFilesResource($this);
    }

    public function labs(): LabsResource
    {
        return new LabsResource($this);
    }

    public function mails(): MailsResource
    {
        return new MailsResource($this);
    }

    public function mapRisks(): MapRisksResource
    {
        return new MapRisksResource($this);
    }

    public function mapbox(): MapboxResource
    {
        return new MapboxResource($this);
    }

    public function marketplace(): MarketplaceResource
    {
        return new MarketplaceResource($this);
    }

    public function medicine(): MedicineResource
    {
        return new MedicineResource($this);
    }

    public function medicineBatches(): MedicineBatchesResource
    {
        return new MedicineBatchesResource($this);
    }

    public function medicinePackages(): MedicinePackagesResource
    {
        return new MedicinePackagesResource($this);
    }

    public function misc(): MiscResource
    {
        return new MiscResource($this);
    }

    public function movementAuthorization(): MovementAuthorizationResource
    {
        return new MovementAuthorizationResource($this);
    }

    public function movements(): MovementsResource
    {
        return new MovementsResource($this);
    }

    public function mysqlCommands(): MysqlCommandsResource
    {
        return new MysqlCommandsResource($this);
    }

    public function natconPermits(): NatconPermitsResource
    {
        return new NatconPermitsResource($this);
    }

    public function orders(): OrdersResource
    {
        return new OrdersResource($this);
    }

    public function outbreaks(): OutbreaksResource
    {
        return new OutbreaksResource($this);
    }

    public function payments(): PaymentsResource
    {
        return new PaymentsResource($this);
    }

    public function permissions(): PermissionsResource
    {
        return new PermissionsResource($this);
    }

    public function personBrandmarks(): PersonBrandmarksResource
    {
        return new PersonBrandmarksResource($this);
    }

    public function personDocuments(): PersonDocumentsResource
    {
        return new PersonDocumentsResource($this);
    }

    public function personMailTemplates(): PersonMailTemplatesResource
    {
        return new PersonMailTemplatesResource($this);
    }

    public function personMembers(): PersonMembersResource
    {
        return new PersonMembersResource($this);
    }

    public function personRoles(): PersonRolesResource
    {
        return new PersonRolesResource($this);
    }

    public function personTelegramBots(): PersonTelegramBotsResource
    {
        return new PersonTelegramBotsResource($this);
    }

    public function personUserRoles(): PersonUserRolesResource
    {
        return new PersonUserRolesResource($this);
    }

    public function persons(): PersonsResource
    {
        return new PersonsResource($this);
    }

    public function products(): ProductsResource
    {
        return new ProductsResource($this);
    }

    public function publicTextEntities(): PublicTextEntitiesResource
    {
        return new PublicTextEntitiesResource($this);
    }

    public function qrAuth(): QrAuthResource
    {
        return new QrAuthResource($this);
    }

    public function rcp(): RcpResource
    {
        return new RcpResource($this);
    }

    public function risks(): RisksResource
    {
        return new RisksResource($this);
    }

    public function safariTags(): SafariTagsResource
    {
        return new SafariTagsResource($this);
    }

    public function scanTags(): ScanTagsResource
    {
        return new ScanTagsResource($this);
    }

    public function scannerDevices(): ScannerDevicesResource
    {
        return new ScannerDevicesResource($this);
    }

    public function scannerVersion(): ScannerVersionResource
    {
        return new ScannerVersionResource($this);
    }

    public function sendAnimals(): SendAnimalsResource
    {
        return new SendAnimalsResource($this);
    }

    public function shapesDrawn(): ShapesDrawnResource
    {
        return new ShapesDrawnResource($this);
    }

    public function shoppingCart(): ShoppingCartResource
    {
        return new ShoppingCartResource($this);
    }

    public function species(): SpeciesResource
    {
        return new SpeciesResource($this);
    }

    public function spotter(): SpotterResource
    {
        return new SpotterResource($this);
    }

    public function subscriptions(): SubscriptionsResource
    {
        return new SubscriptionsResource($this);
    }

    public function telegram(): TelegramResource
    {
        return new TelegramResource($this);
    }

    public function testMethods(): TestMethodsResource
    {
        return new TestMethodsResource($this);
    }

    public function testResults(): TestResultsResource
    {
        return new TestResultsResource($this);
    }

    public function testingProtocols(): TestingProtocolsResource
    {
        return new TestingProtocolsResource($this);
    }

    public function tests(): TestsResource
    {
        return new TestsResource($this);
    }

    public function textEditor(): TextEditorResource
    {
        return new TextEditorResource($this);
    }

    public function textEntities(): TextEntitiesResource
    {
        return new TextEntitiesResource($this);
    }

    public function textEntityViews(): TextEntityViewsResource
    {
        return new TextEntityViewsResource($this);
    }

    public function tp(): TpResource
    {
        return new TpResource($this);
    }

    public function units(): UnitsResource
    {
        return new UnitsResource($this);
    }

    public function users(): UsersResource
    {
        return new UsersResource($this);
    }

    public function vacancyApplications(): VacancyApplicationsResource
    {
        return new VacancyApplicationsResource($this);
    }

    public function vaccineRequests(): VaccineRequestsResource
    {
        return new VaccineRequestsResource($this);
    }

    public function vaccineSubscriptions(): VaccineSubscriptionsResource
    {
        return new VaccineSubscriptionsResource($this);
    }

    public function vaccineTracking(): VaccineTrackingResource
    {
        return new VaccineTrackingResource($this);
    }

    public function vehicles(): VehiclesResource
    {
        return new VehiclesResource($this);
    }

    public function verificationPerson(): VerificationPersonResource
    {
        return new VerificationPersonResource($this);
    }

    public function verificationUserEmail(): VerificationUserEmailResource
    {
        return new VerificationUserEmailResource($this);
    }

    public function warthogMeatApplication(): WarthogMeatApplicationResource
    {
        return new WarthogMeatApplicationResource($this);
    }

    public function youtubeLinks(): YoutubeLinksResource
    {
        return new YoutubeLinksResource($this);
    }
}
