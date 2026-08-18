<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class FilesResource extends Resource
{
    protected function basePath(): string
    {
        return 'files';
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteFile(array $data = []): BuffaloResponse
    {
        return $this->post('delete-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteFileFromRound(array $data = []): BuffaloResponse
    {
        return $this->post('delete-file-from-round', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deletePersonFile(array $data = []): BuffaloResponse
    {
        return $this->post('delete-person-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function downloadFile(array $query = []): BuffaloResponse
    {
        return $this->get('download-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllFileTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-file-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getAllFiles(array $query = []): BuffaloResponse
    {
        return $this->get('get-all-files', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCsvParserTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-csv-parser-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getDownloadFile(string|int $fileName, array $query = []): BuffaloResponse
    {
        return $this->get("download-file/{$fileName}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFileByName(array $query = []): BuffaloResponse
    {
        return $this->get('get-file-by-name', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFilePath(array $query = []): BuffaloResponse
    {
        return $this->get('get-file-path', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFileTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-file-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getFilesByFileType(array $query = []): BuffaloResponse
    {
        return $this->get('get-files-by-file-type', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabPdfFileFileTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-pdf-file-file-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabPdfFileTypes(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-pdf-file-types', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getLabPdfKeys(array $query = []): BuffaloResponse
    {
        return $this->get('get-lab-pdf-keys', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPersonFiles(array $query = []): BuffaloResponse
    {
        return $this->get('get-person-files', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSaveFile(array $query = []): BuffaloResponse
    {
        return $this->get('save-file', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function saveFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function savePersonFile(array $data = []): BuffaloResponse
    {
        return $this->post('save-person-file', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchFile(array $query = []): BuffaloResponse
    {
        return $this->get('search-file', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function searchPersonFile(array $query = []): BuffaloResponse
    {
        return $this->get('search-person-file', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function storeFile(array $data = []): BuffaloResponse
    {
        return $this->post('store-file', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function storeFiles(array $data = []): BuffaloResponse
    {
        return $this->post('store-files', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function updateTemporaryTypes(array $data = []): BuffaloResponse
    {
        return $this->post('update-temporary-types', $data);
    }
}
