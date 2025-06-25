<?php

declare(strict_types=1);

namespace RiotAPI\LeagueAPI\Objects;

/**
 *   Class MiniSeriesDto
 *
 * Used in:
 *   league (v4)
 *     - @see LeagueAPI::getLeagueEntriesForPUUID
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntriesByPUUID
 *     - @see LeagueAPI::getLeagueEntries
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
 *     - @see LeagueAPI::getChallengerLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
 *     - @see LeagueAPI::getMasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
 *     - @see LeagueAPI::getGrandmasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
 *     - @see LeagueAPI::getLeagueById
 * @link https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class MiniSeriesDto extends ApiObject
{
    /**
     * Available when received from:
     *    - @see LeagueAPI::getLeagueEntriesForPUUID
     *    - @see LeagueAPI::getLeagueEntries
     *    - @see LeagueAPI::getChallengerLeague
     *    - @see LeagueAPI::getMasterLeague
     *    - @see LeagueAPI::getGrandmasterLeague
     *    - @see LeagueAPI::getLeagueById
     *
     * @var int $losses
     */
    public int $losses;

    /**
     * Available when received from:
     *    - @see LeagueAPI::getLeagueEntriesForPUUID
     *    - @see LeagueAPI::getLeagueEntries
     *    - @see LeagueAPI::getChallengerLeague
     *    - @see LeagueAPI::getMasterLeague
     *    - @see LeagueAPI::getGrandmasterLeague
     *    - @see LeagueAPI::getLeagueById
     *
     * @var string $progress
     */
    public string $progress;

    /**
     * Available when received from:
     *    - @see LeagueAPI::getLeagueEntriesForPUUID
     *    - @see LeagueAPI::getLeagueEntries
     *    - @see LeagueAPI::getChallengerLeague
     *    - @see LeagueAPI::getMasterLeague
     *    - @see LeagueAPI::getGrandmasterLeague
     *    - @see LeagueAPI::getLeagueById
     *
     * @var int $target
     */
    public int $target;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntriesForPUUID
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getMasterLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *
     * @var int $wins
     */
    public int $wins;
}
