<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class AuthorizationChainsResource extends Resource
{
    protected function basePath(): string
    {
        return 'authorization-chains';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function assignPersonWithAuthChainTemplates(array $data = []): BuffaloResponse
    {
        return $this->post('assign-person-with-auth-chain-templates', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAuthChain(array $data = []): BuffaloResponse
    {
        return $this->post('create-auth-chain', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function createAuthChainMailTemplate(array $data = []): BuffaloResponse
    {
        return $this->post('create-auth-chain-mail-template', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthChainMailByType(array $query = []): BuffaloResponse
    {
        return $this->get('get-auth-chain-mail-by-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthorizationChainByContext(array $query = []): BuffaloResponse
    {
        return $this->get('get-authorization-chain-by-context', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthorizationChainByUuid(array $query = []): BuffaloResponse
    {
        return $this->get('get-authorization-chain-by-uuid', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAuthorizationChains(array $query = []): BuffaloResponse
    {
        return $this->get('get-authorization-chains', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAvailableChainsForPersonLevel(array $query = []): BuffaloResponse
    {
        return $this->get('get-available-chains-for-person-level', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getExistsAuthPersonChains(array $query = []): BuffaloResponse
    {
        return $this->get('get-exists-auth-person-chains', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getInfoItemsForMailTemplates(array $query = []): BuffaloResponse
    {
        return $this->get('get-info-items-for-mail-templates', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getParentAuthorizationChains(array $query = []): BuffaloResponse
    {
        return $this->get('get-parent-authorization-chains', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonAuthChainTemplates(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-auth-chain-templates', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function notifyVet(array $data = []): BuffaloResponse
    {
        return $this->post('notify-vet', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function patchEditAuthChainByUuid(array $data = []): BuffaloResponse
    {
        return $this->patch('edit-auth-chain-by-uuid', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveAuthorizationChain(array $data = []): BuffaloResponse
    {
        return $this->post('save-authorization-chain', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function signAuthorizationChainByContext(array $data = []): BuffaloResponse
    {
        return $this->post('sign-authorization-chain-by-context', $data);
    }
}
