<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class SpotterResource extends Resource
{
    protected function basePath(): string
    {
        return 'v1/spotter';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function agreements(array $query = []): BuffaloResponse
    {
        return $this->get('agreements', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function agreementsCommunityGuidelines(array $query = []): BuffaloResponse
    {
        return $this->get('agreements/community-guidelines', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function agreementsPrivacyPolicy(array $query = []): BuffaloResponse
    {
        return $this->get('agreements/privacy-policy', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function agreementsWula(array $query = []): BuffaloResponse
    {
        return $this->get('agreements/wula', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function authLogin(array $data = []): BuffaloResponse
    {
        return $this->post('auth/login', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function authLogout(array $data = []): BuffaloResponse
    {
        return $this->post('auth/logout', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function authRegister(array $data = []): BuffaloResponse
    {
        return $this->post('auth/register', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function cadastralDensity(array $query = []): BuffaloResponse
    {
        return $this->get('cadastral/density', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function cadastralNearby(array $query = []): BuffaloResponse
    {
        return $this->get('cadastral/nearby', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function competitions(array $query = []): BuffaloResponse
    {
        return $this->get('competitions', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteSubmissionsVote(string|int $submission, string|int $category, array $data = []): BuffaloResponse
    {
        return $this->delete("submissions/{$submission}/vote/{$category}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCadastralStatistics(string|int $cadastralKey, array $query = []): BuffaloResponse
    {
        return $this->get("cadastral/{$cadastralKey}/statistics", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCadastralSubmissions(string|int $cadastralKey, array $query = []): BuffaloResponse
    {
        return $this->get("cadastral/{$cadastralKey}/submissions", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCompetitions(string|int $idOrSlug, array $query = []): BuffaloResponse
    {
        return $this->get("competitions/{$idOrSlug}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSpecies(string|int $species, array $query = []): BuffaloResponse
    {
        return $this->get("species/{$species}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubmissions(string|int $submission, array $query = []): BuffaloResponse
    {
        return $this->get("submissions/{$submission}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubmissionsCounts(string|int $submission, array $query = []): BuffaloResponse
    {
        return $this->get("submissions/{$submission}/counts", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubmissionsRegistrationVerifications(string|int $submission, array $query = []): BuffaloResponse
    {
        return $this->get("submissions/{$submission}/registration-verifications", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubmissionsVotes(string|int $submission, array $query = []): BuffaloResponse
    {
        return $this->get("submissions/{$submission}/votes", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUsers(string|int $user, array $query = []): BuffaloResponse
    {
        return $this->get("users/{$user}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getUsersAchievements(string|int $user, array $query = []): BuffaloResponse
    {
        return $this->get("users/{$user}/achievements", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function leaderboards(array $query = []): BuffaloResponse
    {
        return $this->get('leaderboards', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function leaderboardsMyPosition(array $query = []): BuffaloResponse
    {
        return $this->get('leaderboards/my-position', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function me(array $query = []): BuffaloResponse
    {
        return $this->get('me', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSubmissions(array $data = []): BuffaloResponse
    {
        return $this->post('submissions', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putMePreferences(array $data = []): BuffaloResponse
    {
        return $this->put('me/preferences', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function species(array $query = []): BuffaloResponse
    {
        return $this->get('species', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function submissions(array $query = []): BuffaloResponse
    {
        return $this->get('submissions', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submissionsCount(string|int $submission, array $data = []): BuffaloResponse
    {
        return $this->post("submissions/{$submission}/count", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submissionsFlag(string|int $submission, array $data = []): BuffaloResponse
    {
        return $this->post("submissions/{$submission}/flag", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submissionsVerifyRegistration(string|int $submission, array $data = []): BuffaloResponse
    {
        return $this->post("submissions/{$submission}/verify-registration", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submissionsView(string|int $submission, array $data = []): BuffaloResponse
    {
        return $this->post("submissions/{$submission}/view", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submissionsVote(string|int $submission, array $data = []): BuffaloResponse
    {
        return $this->post("submissions/{$submission}/vote", $data);
    }
}
