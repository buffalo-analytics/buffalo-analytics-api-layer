<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class BseResource extends Resource
{
    protected function basePath(): string
    {
        return 'bse';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBse(array $data = []): BuffaloResponse
    {
        return $this->post('create-bse', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBseClassMailTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('create-bse-class-mail-template', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBseParameter(array $data = []): BuffaloResponse
    {
        return $this->post('create-bse-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBseTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('create-bse-template', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createBseTemplateDisease(array $data = []): BuffaloResponse
    {
        return $this->post('create-bse-template-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createCertificationType(array $data = []): BuffaloResponse
    {
        return $this->post('create-certification-type', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteBseTemplateClass(array $data = []): BuffaloResponse
    {
        return $this->post('delete-bse-template-class', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteBseTemplateDisease(array $data = []): BuffaloResponse
    {
        return $this->post('delete-bse-template-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteCertificationType(array $data = []): BuffaloResponse
    {
        return $this->post('delete-certification-type', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteBseTemplateDisease(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-bse-template-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteTemplateParameter(array $data = []): BuffaloResponse
    {
        return $this->post('delete-template-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editBseParameter(array $data = []): BuffaloResponse
    {
        return $this->post('edit-bse-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editBseTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('edit-bse-template', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function editBseTemplateDisease(array $data = []): BuffaloResponse
    {
        return $this->post('edit-bse-template-disease', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function editCertificationType(array $query = []): BuffaloResponse
    {
        return $this->get('edit-certification-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAnimalCertificate(array $query = []): BuffaloResponse
    {
        return $this->get('get-animal-certificate', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseCertificate(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-certificate', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseClassMailTemplate(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-class-mail-template', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseParameter(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-parameter', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseParameters(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-parameters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseParametersForTemplate(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-parameters-for-template', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseResultNotes(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-result-notes', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseResults(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-results', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseTemplateByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-template-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBseTemplateClasses(array $query = []): BuffaloResponse
    {
        return $this->get('get-bse-template-classes', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getBses(array $query = []): BuffaloResponse
    {
        return $this->get('get-bses', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCertificationDiseases(array $query = []): BuffaloResponse
    {
        return $this->get('get-certification-diseases', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCertificationTypeById(array $query = []): BuffaloResponse
    {
        return $this->get('get-certification-type-by-id', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCertificationTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-certification-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateBseTemplateDisease(array $query = []): BuffaloResponse
    {
        return $this->get('create-bse-template-disease', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCreateCertificationType(array $query = []): BuffaloResponse
    {
        return $this->get('create-certification-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getEditBseTemplateDisease(array $query = []): BuffaloResponse
    {
        return $this->get('edit-bse-template-disease', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getMailTemplateReplacementItems(array $query = []): BuffaloResponse
    {
        return $this->get('get-mail-template-replacement-items', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParameterIdentificationMethods(array $query = []): BuffaloResponse
    {
        return $this->get('get-parameter-identification-methods', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentBseParameters(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-bse-parameters', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentCertificationTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-certification-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSaveBseResult(array $query = []): BuffaloResponse
    {
        return $this->get('save-bse-result', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserBseTemplates(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-bse-templates', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUserBses(array $query = []): BuffaloResponse
    {
        return $this->get('get-user-bses', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function issueBseCertificate(array $data = []): BuffaloResponse
    {
        return $this->post('issue-bse-certificate', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function removeTemplateParameter(array $data = []): BuffaloResponse
    {
        return $this->post('remove-template-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveBseResult(array $data = []): BuffaloResponse
    {
        return $this->post('save-bse-result', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveBseResultNotes(array $data = []): BuffaloResponse
    {
        return $this->post('save-bse-result-notes', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveBseTemplateClasses(array $data = []): BuffaloResponse
    {
        return $this->post('save-bse-template-classes', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveTemplateParameter(array $data = []): BuffaloResponse
    {
        return $this->post('save-template-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateBse(array $data = []): BuffaloResponse
    {
        return $this->post('update-bse', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function updateBseClassMailTemplate(array $query = []): BuffaloResponse
    {
        return $this->get('update-bse-class-mail-template', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateBseTemplateClass(array $data = []): BuffaloResponse
    {
        return $this->post('update-bse-template-class', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateTemplateParameter(array $data = []): BuffaloResponse
    {
        return $this->post('update-template-parameter', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateTemplateParameterOrder(array $data = []): BuffaloResponse
    {
        return $this->post('update-template-parameter-order', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadBseResultPhoto(array $data = []): BuffaloResponse
    {
        return $this->post('upload-bse-result-photo', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function uploadBseResultReport(array $data = []): BuffaloResponse
    {
        return $this->post('upload-bse-result-report', $data);
    }
}
