<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class PersonMembersResource extends Resource
{
    protected function basePath(): string
    {
        return 'person-members';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addMembers(array $data = []): BuffaloResponse
    {
        return $this->post('add-members', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addMembersByCsvFile(array $data = []): BuffaloResponse
    {
        return $this->post('add-members-by-csv-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function addWithCsv(array $data = []): BuffaloResponse
    {
        return $this->post('add-with-csv', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDelete(array $data = []): BuffaloResponse
    {
        return $this->delete('delete', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteDeleteMemberFromPerson(array $data = []): BuffaloResponse
    {
        return $this->delete('delete-member-from-person', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAll(array $query = []): BuffaloResponse
    {
        return $this->get('get-all', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllPersonMembers(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-person-members', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function parseCsv(array $data = []): BuffaloResponse
    {
        return $this->post('parse-csv', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function save(array $data = []): BuffaloResponse
    {
        return $this->post('save', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function savePersonMember(array $data = []): BuffaloResponse
    {
        return $this->post('save-person-member', $data);
    }
}
